<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Carrier; 
use App\Models\Shipper;

class EntrepriseGestionController extends Controller
{
    public function showEntrepriseForm()
    {
        return view('admin.entreprise'); // Charge la vue "entreprise.blade.php"
    }

    public function addCarrier(Request $request)
    {
        // Validation des données
        $validatedData = $request->validate([
            'company_name' => 'required|string',
            'address' => 'required|string',
            'phone' => 'required|string',
        ]);

        // Création d'une nouvelle entrée dans la table carrier
        Carrier::create($validatedData);

        return redirect()->back()->with('success', 'Entreprise de transporteur ajoutée avec succès.');
    }

    public function addShipper(Request $request)
    {
        // Validation des données
        $validatedData = $request->validate([
            'company_name' => 'required|string',
            'address' => 'required|string',
            'phone' => 'required|string',
        ]);

        // Création d'une nouvelle entrée dans la table shipper
        Shipper::create($validatedData);

        return redirect()->back()->with('success', 'Entreprise expéditrice ajoutée avec succès.');
    }
}
