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
    //
    
    public function updateStatus(Request $request, $id)
    {
        $user = User::find($id);

        if (!$user) {
            return response()->json(['message' => 'Utilisateur non trouvé'], 404);
        }

        $newStatus = $request->input('status');

        
        $user->status = $newStatus;
        $user->save();

        return response()->json(['message' => 'Statut de l\'utilisateur mis à jour avec succès']);
    }

    public function index()
{
    $users = User::all();
    return view('admin.a_user_gestion', compact('users'));
}
public function bulkUpdateStatus(Request $request)
    {
        $selectedStatus = $request->input('status');
        $selectedUserIds = $request->input('user_ids');

        User::whereIn('id', $selectedUserIds)->update(['status' => $selectedStatus]);

        return response()->json(['message' => 'Statuts des utilisateurs mis à jour avec succès']);
    }
} 
