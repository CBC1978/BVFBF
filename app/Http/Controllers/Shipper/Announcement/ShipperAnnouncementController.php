<?php

namespace App\Http\Controllers\Shipper\Announcement;

use App\Http\Controllers\Controller;
use App\Models\FreightOffer;
use App\Models\TransportAnnouncement;
use App\Models\TransportOffer;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\FreightAnnouncement;
use Illuminate\Support\Facades\DB;


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
           ->get();
       return view('shipper.announcements.index', ['announcements' => $announcements]);
   }

   public function positOffer (Request $request)
   {
       $request->validate([
           'prix' => [ 'max:255', 'number'],
           'description' => ['string']
       ]);
       $user = User::find($request->idUser);

       $freightOffer = new FreightOffer();
       $freightOffer->price = floatval($request->price);
       $freightOffer->description = $request->description;
       $freightOffer->weight = $request->weight;
       $freightOffer->fk_transport_announcement_id = intval($request->announce);
       $freightOffer->fk_shipper_id = intval($user->fk_shipper_id);
       $freightOffer->status = 0;
       $freightOffer->created_by = $user->id;
       $freightOffer->save();
       return redirect('home')->with('success', "Offre ajouté avec succès");

   }

           // Afficher les annonces de l'utilisateur
           public function userConnectedAnnouncement()
       {
           $user = User::find(session()->get('userId'));
           $announcesObject = FreightAnnouncement::where('fk_shipper_id',intval($user->fk_shipper_id))
               ->orderBy('created_at', 'DESC')
               ->get();
           $announces = [];
           foreach ($announcesObject as $announce){
               $item = array(
                   'origin'=>$announce->origin,
                   'destination'=>$announce->destination,
                   'description'=>$announce->description,
                   'limit_date'=>$announce->limit_date,
                   'weight'=>$announce->weight,
                   'volume'=>$announce->volume,
                   'price'=>$announce->price,
                   'id'=>$announce->id,
                   'offre'=>0,
               );
               $offre = TransportOffer::where('fk_freight_announcement_id', $announce->id)
                   ->get();
               if (count($offre) > 0){
                   $item['offre'] = count($offre);
               }

               array_push($announces, $item);
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

       $data['fk_shipper_id'] = session('fk_shipper_id');
      $data['created_by'] = session('userId');

       FreightAnnouncement::create($data);

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
   $offers =FreightOffer::where('fk_shipper_id', $shipperId)->get();
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