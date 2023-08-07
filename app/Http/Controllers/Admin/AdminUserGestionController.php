<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;

class AdminUserGestionController extends Controller
{
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
