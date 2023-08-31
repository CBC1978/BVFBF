<?php

namespace App\Http\Controllers\Shipper\Announcement;

use App\Http\Controllers\Controller;
use App\Models\FreightOffer;
use App\Models\TransportAnnouncement;
use App\Models\TransportOffer;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\FreightAnnouncement;

class S_AnnouncementController extends Controller
{
    // Afficher toutes les annonces
    public function index()
    {
        $announcements = FreightAnnouncement::all();
        return view('shipper.announcements.index', ['announcements' => $announcements]);
    }

    public function postuler(Request $request)
    {
        $request->validate([
            'prix' => [ 'max:255', 'number'],
            'description' => ['string']
        ]);
//        dd($request);
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
            public function userAnnouncements()
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
            $offer = Offer::findOrFail($offerId); // Supposons que votre modèle d'offre soit 'Offer'

            // Vous pouvez ajouter ici la logique pour accepter ou refuser l'offre

            return redirect()->back()->with('message', 'Offre traitée avec succès.');
        }


    // public function userAnnouncements()
    // {
    //     $shipperId = session('shipper_id');
    //     $userAnnouncements = FreightAnnouncement::where('fk_shipper_id', $shipperId)->get();
    //     return view('shipper.announcements.user', ['userAnnouncements' => $userAnnouncements]);
    // }

    // Afficher le détail d'une annonce
    public function show($id)
    {
        $announcement = FreightAnnouncement::findOrFail($id);
        return view('shipper.announcements.show', ['announcement' => $announcement]);
    }

    // Afficher le formulaire d'ajout d'annonce
    public function create()
    {
        return view('shipper.announcements.create');
    }

    // Traitement de la soumission du formulaire d'ajout
    public function store(Request $request)
    {
        $user = User::find(session('userId'));

        $data = $request->validate([
            'origin' => ['required', 'string', 'max:255'],
            'destination' => ['required', 'string', 'max:255'],
            'limit_date' => ['required', 'date'],
            'weight' => ['nullable', 'numeric'],
            'volume' => ['nullable', 'numeric'],
            'description' => ['required', 'string'],
            
        ]);
    
        $data['fk_shipper_id'] = session('fk_shipper_id'); //  FK du transporteur si nécessaire
       $data['created_by'] = session('userId'); // ID de l'utilisateur si nécessaire
       
       
        FreightAnnouncement::create($data);

        return redirect()->route('shipper.announcements.create')->with('success', 'Annonce ajoutée avec succès.');
    }
}
