<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FreightAnnouncement;
use App\Models\TransportAnnouncement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminAnnoncesController extends Controller
{
    // Méthode pour afficher toutes les annonces de fret
    public function affichage()
    {
        $chargeurAnnonces = FreightAnnouncement::query()->get();
        $transporteurAnnonces = TransportAnnouncement::query()->get(); 
        
        return view('admin.annonces.a_annonce', compact('chargeurAnnonces','transporteurAnnonces'));
    }

    // Méthode pour filtrer les annonces par status
    public function filterbyStatus(Request $request)
    {
        $status = $request->input('status');

         $chargeurAnnonces = FreightAnnouncement::query()->where('status', $status)->get();
         $transporteurAnnonces = TransportAnnouncement::query()->where('status', $status)->get(); 
        
        return view('admin.annonces.filter', compact('chargeurAnnonces', 'transporteurAnnonces'));
    }

    public function updateFreightAnnouncement(FreightAnnouncement $annonce)
    {
        // marquer l'annonce comme activée ou désactivée
        $annonce->status = ($annonce->status == 1) ? 0 : 1;
        $annonce->save();

        return redirect()->route('annonces.a_annonce')->with('success', 'Annonce de chargement mise à jour avec succès.');
    }



    public function updateTransportAnnouncement(TransportAnnouncement $annonce)
    {

        $annonce->status = ($annonce->status == 1) ? 0 : 1;
        $annonce->save();

        return redirect()->route('annonces.a_annonce')->with('success', 'Annonce de transport mise à jour avec succès.');
    }

}
