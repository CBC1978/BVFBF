<?php

namespace App\Http\Controllers\Shipper\Announcement;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TransportAnnouncement;


class S_AnnouncementController extends Controller


{
    // Afficher toutes les annonces
    public function index()
    {
        $announcements = TransportAnnouncement::all();
        return view('carrier.announcements.index', ['announcements' => $announcements]);
    }

    // Afficher les annonces de l'utilisateur
    public function userAnnouncements()
    {
        $carrierId = session('carrier_id');
        $userAnnouncements = TransportAnnouncement::where('fk_carrier_id', $carrierId)->get();
        return view('carrier.announcements.user', ['userAnnouncements' => $userAnnouncements]);
    }

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
}
