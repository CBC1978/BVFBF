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
        $validatedData = $request->validate([
            'company_name' => 'required|string',
            'address' => 'required|string',
            'phone' => 'required|string',
            'city' => 'required|string',
            'email' => 'required|email',
            'ifu' => 'required|string',
            'rccm' => 'required|string',
        ]);

        Carrier::create($validatedData);

        return redirect()->back()->with('success', 'Entreprise de transporteur ajoutée avec succès.');
    }

    public function addShipper(Request $request)
    {
        $validatedData = $request->validate([
            'company_name' => 'required|string',
            'address' => 'required|string',
            'phone' => 'required|string',
            'city' => 'required|string',
            'email' => 'required|email',
            'ifu' => 'required|string',
            'rccm' => 'required|string',
        ]);

        Shipper::create($validatedData);

        return redirect()->back()->with('success', 'Entreprise expéditrice ajoutée avec succès.');
    }
}
