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


    //Obtenir les infos sur l'utilisateur
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
//  méthode pour gérer l'acceptation ou le refus d'une offre
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
}
