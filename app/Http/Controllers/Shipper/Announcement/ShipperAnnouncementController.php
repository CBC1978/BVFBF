<?php

namespace App\Http\Controllers\Shipper\Announcement;

use App\Http\Controllers\Controller;
use App\Mail\Email\AnnouncementOffer;
use App\Mail\Email\OfferReceive;
use App\Mail\Email\OfferSend;
use App\Models\Carrier;
use App\Models\FreightOffer;
use App\Models\Shipper;
use App\Models\TransportAnnouncement;
use App\Models\TransportOffer;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\FreightAnnouncement;
use Illuminate\Support\Facades\DB;


use Illuminate\Support\Facades\Mail;
use Opcodes\LogViewer\Log;

class ShipperAnnouncementController extends Controller
{
   // Afficher toutes les annonces
   public function displayFreightAnnouncement()
   {
       $announcements = DB::table('freight_announcement')
           ->selectRaw("
            freight_announcement.id,freight_announcement.origin,freight_announcement.destination,freight_announcement.limit_date,
            freight_announcement.weight, freight_announcement.volume,freight_announcement.description,freight_announcement.price,shipper.company_name")
           ->join('shipper','freight_announcement.fk_shipper_id' ,"=",'shipper.id')
           ->orderBy('freight_announcement.id', 'DESC')
           ->paginate(10);
       return view('shipper.announcements.index', ['announcements' => $announcements]);
   }

   public function positOffer (Request $request)
   {
       $request->validate([
           'price' => [ 'max:255', 'number'],
           'description' => ['string']
       ]);
       $user = User::find($request->idUser);

       $announce = TransportAnnouncement::find(intval($request->announce));
       $carrierName = Carrier::find(intval($user->fk_carrier_id));
       $shipperName = Shipper::find($announce->fk_shipper_id);
       $shipperUsers = User::where([['fk_shipper_id', $announce->fk_shipper_id],['status', '2']])->get();
       $carrierUsers = User::where([['fk_carrier_id', $user->fk_carrier_id],['status', '2']])->get();

       $freightOffer = new FreightOffer();
       $freightOffer->price = floatval($request->price);
       $freightOffer->description = $request->description;
       $freightOffer->weight = $request->weight;
       $freightOffer->fk_transport_announcement_id = intval($request->announce);
       $freightOffer->fk_shipper_id = intval($user->fk_shipper_id);
       $freightOffer->status = 0;
       $freightOffer->created_by = $user->id;
       $freightOffer->save();

       $data['price'] = $request->price;
       $data['description'] = $request->description;
       $data['announce'] = $announce;
       $data['receiver'] = $carrierName->company_name;
       $data['sender'] = $shipperName->company_name;


       //Send mail
       foreach ($shipperUsers as $shipper){
           Mail::to($shipper->email)->send(new OfferSend($data));
       }
       foreach ($carrierUsers as $carrier){
           Mail::to($carrier->email)->send(new OfferReceive($data));
       }

       return redirect('home')->with('success', "Offre ajouté avec succès");

   }

           // Afficher les annonces de l'utilisateur
           public function userConnectedAnnouncement()
       {
           $user = User::find(session()->get('userId'));
           $announces = FreightAnnouncement::where('fk_shipper_id',intval($user->fk_shipper_id))
               ->orderBy('created_at', 'DESC')
               ->paginate(10);
          // Traiter les annonces et compter les offres
       foreach ($announces as $announce) {
        $announce->offre = $announce->transportOffer->count();
    }

           return view('shipper.announcements.user', compact('announces'));
       }

       // Méthode pour gérer l'acceptation ou le refus d'une offre
       public function handleOffer(Request $request, $offerId)
       {
           $offer = Offer::findOrFail($offerId);


           return redirect()->back()->with('message', 'Offre traitée avec succès.');
       }


   // Afficher le détail d'une annonce
   public function show($id)
   {
       $announcement = FreightAnnouncement::findOrFail($id);
       return view('shipper.announcements.show', ['announcement' => $announcement]);
   }


   public function displayAnnouncementForm()
   {
       return view('shipper.announcements.create');
   }


   public function handleSubmittedAnnouncement(Request $request)
   {
       $user = User::find(session('userId'));

       $data = $request->validate([
           'origin' => ['required', 'string', 'max:255'],
           'destination' => ['required', 'string', 'max:255'],
           'limit_date' => ['required', 'date'],
           'weight' => ['nullable', 'numeric'],
           'volume' => ['nullable', 'numeric'],
           'price' => ['nullable', 'numeric'],
           'description' => ['required', 'string'],

       ]);
        $shipperName = Shipper::find(session('fk_shipper_id'));

        $data['fk_shipper_id'] = session('fk_shipper_id');
        $data['created_by'] = session('userId');
        $data['name'] = $shipperName->company_name;

       FreightAnnouncement::create($data);

//       Get all Carrier User
       $carriersUser = User::where([['fk_carrier_id', '!=', '0'],['status', '2']])->get();
       foreach ($carriersUser as $shipper){
           Mail::to($shipper->email)->send(new AnnouncementOffer($data));
       }

       return redirect()->route('shipper.announcements.create')->with('success', 'Annonce ajoutée avec succès.');
   }


   public function offer($id)
   {
       $annonce = FreightAnnouncement::find(intval($id));
       $offers = DB::table('transport_offer')
           ->selectRaw("
               transport_offer.id,
               transport_offer.price,
               transport_offer.status,
               transport_offer.description,
               carrier.company_name
           ")
           ->join('carrier', 'transport_offer.fk_carrier_id', '=', 'carrier.id')
           ->where('transport_offer.fk_freight_announcement_id', $id) // Filtre par l'annonce spécifique
           ->get();
       return view('shipper.offers.s_myoffer', compact(['annonce', 'offers']));
   }

   public function myrequest(){
    $shipperId = session('fk_shipper_id');

    // Récupérez toutes les offres de chargeur liées à ce chargeur
   $offers =FreightOffer::where('fk_shipper_id', $shipperId)->paginate(10);
   return view('shipper.offers.shipper_myrequest', ['offers' => $offers]);
   }

   public function manageOffer(Request $request, $id)
   {
       $action = $request->input('action');

       // Récupérer l'offre en fonction de l'ID
       $transportOffer = TransportOffer::findOrFail($id);

       if ($action === 'accept') {

           $transportOffer->status = 1;
       } elseif ($action === 'refuse') {

           $transportOffer->status = 2;
       }

       // Sauvegarde des  modifications
       $transportOffer->save();

       return redirect()->back()->with('success', 'Statut de l\'offre mis à jour avec succès.');
   }
}
