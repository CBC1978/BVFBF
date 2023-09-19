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

    //$users = User::with(['carrier' => function ($query) {
    //    $query->where('id', $this->fk_carrier_id);
   // }, 'shipper' => function ($query) {
   //     $query->where('id', $this->fk_shipper_id);
   // }])->get();

    $users = User::all();

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
        // Renvoyer une réponse JSON avec le message de succès
    return Response::json(['message' => 'Transporteur ajouté avec succès.']);
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
        // Renvoyer une réponse JSON avec le message de succès
    return Response::json(['message' => 'Expéditeur ajouté avec succès.']);
    }
    //Voir les utilisateur
    public function assignEntrepriseToUser(Request $request)
{
    // Récupérer les données du formulaire
    $selectedUsers = $request->input('selected_users', []);
    $carrierId = $request->input('carrier_id');
    $shipperId = $request->input('shipper_id');

    // Parcourir les utilisateurs sélectionnés
    foreach ($selectedUsers as $userId) {
        // Récupérer l'utilisateur en utilisant son ID
        $user = User::find($userId);

        // Attribuer l'entreprise de transport s'il y a un transporteur sélectionné
        if (!empty($carrierId)) {
            $user->fk_carrier_id = $carrierId;
            $user->save();
        }

        // Attribuer l'entreprise d'expédition s'il y a un expéditeur sélectionné
        if (!empty($shipperId)) {
            $user->fk_shipper_id = $shipperId;
            $user->save();
        }
    }

    // Rediriger avec un message de succès
    return redirect()->back()->with('success', 'Entreprises assignées aux utilisateurs avec succès.');
    // Renvoyer une réponse JSON avec le message de succès
    return Response::json(['message' => 'Entreprises assignées aux utilisateurs avec succès.']);
}


}
