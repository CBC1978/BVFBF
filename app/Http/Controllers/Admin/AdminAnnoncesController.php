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
    public function filtrerParstatut(Request $request)
    {
        $status = $request->input('status');

         $chargeurAnnonces = FreightAnnouncement::query()->where('status', $status)->get();
         $transporteurAnnonces = TransportAnnouncement::query()->where('status', $status)->get(); 
        
        return view('admin.annonces.a_annonce', compact('chargeurAnnonces', 'transporteurAnnonces'));
    }

    public function update(Request $request, $id)
    {


        $annonce = FreightAnnouncement::find($id);

        if (!$annonce) {
            return redirect()->route('admin.annonces.a_annonce')->with('error', 'Annonce introuvable');
        }
        if ($annonce) {
            
        }

        $annonce->status = $request->input('nouveau_status');
        $annonce->id = $request->input('admin_id');
        $annonce->updated_at = now(); 
        $annonce->save();

        return redirect()->route('admin.annonces.edit')->with('success', 'Annonce mise à jour avec succès');
    }



    public function update1(Request $request, $id)
    {

        $annonce = TransportAnnouncement::find($id);

     if (!$annonce) {
        return redirect()->route('admin.annonces.a_annonce')->with('error', 'Annonce introuvable');
        }

      $annonce->status = $request->input('nouveau_status');
      $annonce->id = $request->input('admin_id');
      $annonce->updated_at = now(); 
      $annonce->save();

     return redirect()->route('admin.annonces.edit')->with('success', 'Annonce mise à jour avec succès');
    }



}
