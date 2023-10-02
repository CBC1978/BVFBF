<?php

namespace App\Http\Controllers\Carrier\Announcement;

use App\Http\Controllers\Controller;
use App\Models\FreightOffer;
use App\Models\TransportOffer;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\TransportAnnouncement;
use App\Models\TransportOffers;
use Illuminate\Support\Facades\DB;
use Opcodes\LogViewer\Log;

class CarrierAnnouncementController extends Controller
{
    public function displayTransportAnnouncement()
    {

        $announcements =  DB::table('transport_announcement')
                ->selectRaw("transport_announcement.id, transport_announcement.origin, transport_announcement.destination, transport_announcement.limit_date,
                        transport_announcement.weight, transport_announcement.vehicule_type, transport_announcement.description,
                       carrier.company_name")
                ->join('carrier', 'transport_announcement.fk_carrier_id','=', 'carrier.id')
                ->orderBy('transport_announcement.id', 'DESC')
                ->get();

        return view('carrier.announcements.index', ['announcements' => $announcements]);
    }

    public function userConnectedAnnouncement()
    {


    //Obtenir les infos 
    $user = User::find(session()->get('userId'));
    $announcesObject = TransportAnnouncement::where('fk_carrier_id',intval($user->fk_carrier_id))
                                        ->orderBy('created_at', 'DESC')
                                        ->get();
    //Recupérer les annonces et les offres émises
    $announces = [];
    foreach ($announcesObject as $announce){
        $item = array(
            'origin'=>$announce->origin,
            'destination'=>$announce->destination,
            'description'=>$announce->description,
            'limit_date'=>$announce->limit_date,
            'weight'=>$announce->weight,
            'volume'=>$announce->volume,
            'vehicule_type'=>$announce->vehicule_type,
            'id'=>$announce->id,
            'offre'=>0,
        );
        $offre = FreightOffer::where('fk_transport_announcement_id', $announce->id)
                                ->get();
        if (count($offre) > 0){
            $item['offre'] = count($offre);
        }

        array_push($announces, $item);
    }
    return view('carrier.announcements.user', compact('announces'));
}
//  Méthode pour  gérer l'acceptation ou le refus d'une offre
public function offerManagementHandleOffer(Request $request, $offerId)
{
    $offer = Offer::findOrFail($offerId);


    return redirect()->back()->with('message', 'Offre traitée avec succès.');
}


    public function show($id)
    {
        $announcement = TransportAnnouncement::findOrFail($id);
        return view('carrier.announcements.show', ['announcement' => $announcement]);
    }


   // Affiche le formulaire d'ajout d'annonce
   public function displayAnnouncementForm()
   {
       return view('carrier.announcements.create');
   }

   // Traitement de la soumission du formulaire d'ajout
   public function handleSubmittedAnnouncement(Request $request)
   {
       $data = $request->validate([
           'origin' => ['required'],
           'destination' => ['required'],
           'limit_date' => ['required', 'date'],
           'vehicule_type' => ['required'],
           'weight' => ['nullable'],
           'description' => ['required', 'string'],
       ]);

       $data['fk_carrier_id'] = session('fk_carrier_id');
       $data['created_by'] = session('userId');
       //dd($data);
       TransportAnnouncement::create($data);

       return redirect()->route('carrier.announcements.create')->with('success', 'Annonce ajoutée avec succès.');
   }
   public function offer($id)
   {

    $transportAnnouncement = TransportAnnouncement::find(intval($id));
    $freightOffers = DB::table('freight_offer')
        ->selectRaw("
            freight_offer.id,
            freight_offer.price,
            freight_offer.weight,
            freight_offer.description,
            freight_offer.status,
            freight_offer.created_by,
            shipper.company_name
        ")
        ->join('shipper', 'freight_offer.fk_shipper_id', '=', 'shipper.id')
        ->where('freight_offer.fk_transport_announcement_id', $id) // Filtre par l'annonce de transport spécifique
        ->get();
       return view('carrier.offers.c_myoffer', compact(['transportAnnouncement', 'freightOffers']));
   }
   

    public function positOffer(Request $request){

        $request->validate([
            'prix' => [ 'max:255', 'number'],
            'description' => ['string']
        ]);
        $user = User::find($request->idUser);

        $transportOffer = new TransportOffer();
        $transportOffer->price = floatval($request->price);
        $transportOffer->description = $request->description;
        $transportOffer->fk_freight_announcement_id = intval($request->announce);
        $transportOffer->fk_carrier_id = intval($user->fk_carrier_id);
        $transportOffer->status = 0;
        $transportOffer->created_by = $user->id;
        $transportOffer->save();


        return redirect('home')->with('success', "Offre ajouté avec succès");


    }
    public function myrequest()
    {
       
    $carrierId = session('fk_carrier_id');

    // Récupérez toutes les offres de transport liées à ce transporteur
    $offers = TransportOffer::where('fk_carrier_id', $carrierId)->get();
    return view('carrier.offers.carrier_myrequest', ['offers' => $offers]);
    }


    public function manageOffer(Request $request, $id)
    {
        $action = $request->input('action');
    
        // Récupérer l'offre en fonction de l'ID
        $freightOffer = FreightOffer::findOrFail($id);
    
        if ($action === 'accept') {
           
            $freightOffer->status = 1;
        } elseif ($action === 'refuse') {
           
            $freightOffer->status = 2;
        }
    
        // Sauvegarde des  modifications
        $freightOffer->save();
    
        return redirect()->back()->with('success', 'Statut de l\'offre mis à jour avec succès.');
    }
    
    
}
