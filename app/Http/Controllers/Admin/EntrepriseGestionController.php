<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Carrier;
use App\Models\Shipper;
use App\Models\User;
use Session;


class EntrepriseGestionController extends Controller
{
    public function showEntrepriseForm()
{
    $users = User::all(); // Récupérer tous les utilisateurs
    $carriers = Carrier::all(); // Récupérer tous les transporteurs
    $shippers = Shipper::all(); // Récupérer tous les expéditeurs

    return view('admin.entreprise', compact('users', 'carriers', 'shippers'));
}

    public function addCarrier(Request $request)
    {
        // Récupérer l'ID de l'utilisateur depuis le champ hidden
    $userId = $request->input('user_id');
    
        $validatedData = $request->validate([
            'company_name' => 'required|string',
            'address' => 'required|string',
            'phone' => 'required|string',
            'city' => 'required|string',
            'email' => 'required|email',
            'ifu' => 'required|string',
            'rccm' => 'required|string',
           
        ]);

        // Ajouter l'ID de l'utilisateur
    $validatedData['created_by'] = $userId;
        // Créer un nouveau transporteur associé à l'utilisateur
        Carrier::create($validatedData);

        return redirect()->back()->with('success', 'Transporteur ajouté avec succès.');
    }

    public function addShipper(Request $request)
    {
        // Récupérer l'ID de l'utilisateur à partir de la session
        
        $userId = $request->input('user_id');

        // Valider les données du formulaire
        $validatedData = $request->validate([
            'company_name' => 'required|string',
            'address' => 'required|string',
            'phone' => 'required|string',
            'city' => 'required|string',
            'email' => 'required|email',
            'ifu' => 'required|string',
            'rccm' => 'required|string',
         
        ]);
          // Ajouter l'ID de l'utilisateur
    $validatedData['created_by'] = $userId;

        Shipper::create($validatedData);

        return redirect()->back()->with('success', 'Expéditeur ajouté avec succès.');
    }
    //Voir les utilisateur
   
    public function assignEntrepriseToUser(Request $request)
    {
        $userId = $request->input('user_id');
        $entrepriseType = $request->input('entreprise_type'); // "carrier" ou "shipper"
        $entrepriseId = $request->input('entreprise_id'); // L'ID de l'entreprise sélectionnée

        $user = User::find($userId);

        if ($entrepriseType === 'carrier') {
            $user->fk_carrier_id = $entrepriseId;
            $user->save();
        } elseif ($entrepriseType === 'shipper') {
            $user->fk_shipper_id = $entrepriseId;
            $user->save();
        }

        return redirect()->back()->with('success', 'Assignation d\'entreprise réussie.');
    }
}
