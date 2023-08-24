<?php
namespace App\Http\Controllers\Carrier\Announcement;

use App\Http\Controllers\Controller;
use App\Models\FreightOffer;
use App\Models\TransportOffer;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\TransportAnnouncement;
use App\Models\TransportOffers;
use Opcodes\LogViewer\Log;

class C_AnnouncementController extends Controller

{
    // Afficher toutes les annonces
    public function index()
    {
        $announcements = TransportAnnouncement::all();
        return view('carrier.announcements.index', ['announcements' => $announcements]);
    }

    // Afficher les annonces de l'utilisateur
    // Dans votre méthode userAnnouncements du contrôleur
public function userAnnouncements()
{
    //Obtenir les infos sur l'utilisateur
    $user = User::find(session()->get('userId'));
    $announces = TransportAnnouncement::where('fk_carrier_id',intval($user->fk_carrier_id))
                                        ->orderBy('created_at', 'DESC')
                                        ->get();
    //Recupérer les annonces et les offres émises
    $data = [];
    foreach ($announces as $announce){
        $item = array(
            'origin'=>$announce->origin,
            'destination'=>$announce->destination,
            'description'=>$announce->description,
            'offre'=>0,
        );
        $offre = FreightOffer::where('fk_transport_announcement_id', $announce->id)
                                ->get();
        if (count($offre) > 0){
            $item['offre'] = count($offre);
        }

        array_push($data, $item);
    }
    return view('carrier.announcements.user', compact('data'));
}
//  méthode pour gérer l'acceptation ou le refus d'une offre
public function handleOffer(Request $request, $offerId)
{
    $offer = Offer::findOrFail($offerId); // Supposons que votre modèle d'offre soit 'Offer'

    //  la logique pour accepter ou refuser l'offre

    return redirect()->back()->with('message', 'Offre traitée avec succès.');
}

    // public function userAnnouncements()
    // {
    //     $carrierId = session('carrier_id');
    //     $userAnnouncements = TransportAnnouncement::where('fk_carrier_id', $carrierId)->get();
    //     return view('carrier.announcements.user', ['userAnnouncements' => $userAnnouncements]);
    // }


    // Afficher le détail d'une annonce
    public function show($id)
    {
        $announcement = TransportAnnouncement::findOrFail($id);
        return view('carrier.announcements.show', ['announcement' => $announcement]);
    }

    // Afficher le formulaire d'ajout d'annonce
    public function create()
    {
        return view('carrier.announcements.create');
    }

    // Traitement de la soumission du formulaire d'ajout
    public function store(Request $request)
    {
        $data = $request->validate([
            // Définir les règles de validation pour les champs d'annonce
        ]);

        auth()->user()->transportAnnouncements()->create($data);

        return redirect()->route('carrier.announcements.index')->with('success', 'Annonce ajoutée avec succès.');
    }

    public function postuler(Request $request){

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
