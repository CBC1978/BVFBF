<?php

namespace App\Http\Controllers\Shipper\Announcement;

use App\Http\Controllers\Controller;
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

    // Afficher les annonces de l'utilisateur
    public function userAnnouncements()
    {
        $shipperId = session('shipper_id');
        $userAnnouncements = FreightAnnouncement::where('fk_shipper_id', $shipperId)->get();
        return view('shipper.announcements.user', ['userAnnouncements' => $userAnnouncements]);
    }

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
        $data = $request->validate([
            // Définir les règles de validation pour les champs d'annonce
        ]);

        auth()->user()->freightAnnouncements()->create($data);

        return redirect()->route('shipper.announcements.index')->with('success', 'Annonce ajoutée avec succès.');
    }
}
