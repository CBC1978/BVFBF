<?php





namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Models\User;

class AdminUserGestionController extends Controller
{
    
    public function filterUsers(Request $request)
    {
        $status = $request->input('status');
    
        // Récupérer les utilisateurs en fonction du statut sélectionné
        if ($status === null || $status === '') {
            // Si aucun statut n'est sélectionné, récupérer tous les utilisateurs
            $users = User::all();
        } else {
            // Sinon, récupérer les utilisateurs avec le statut sélectionné
            $users = User::where('status', $status)->get();
        }
    
        // Charger la vue avec les utilisateurs filtrés
        return view('admin.a_user_gestion')->with('users', $users);
    }
    //.............................................
    //.............................................

public function updateStatus(Request $request, $id)
{
    // Vérifier si l'utilisateur existe
    $user = User::find($id);
    if (!$user) {

        return redirect()->back()->with('error', 'Utilisateur introuvable.');
    }

    
    $user->status = $request->input('status');
    $user->save();


    return redirect()->back()->with('success', 'Statut mis à jour avec succès.');
}

    public function index()
    {
        $users = User::all();
        return view('admin.a_user_gestion', compact('users'));
       
    }

//     public function updateStatus(Request $request)
// {
//     $user = User::findOrFail($request->user_id);
//     $user->status = $request->status;
//     $user->save();

//     return response()->json(['message' => 'Statut mis à jour avec succès.']);
// }

}
