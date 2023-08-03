<?php





namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Models\User;

class AdminUserGestionController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.a_user_gestion', compact('users'));
       
    }

    public function updateStatus(Request $request)
{
    $user = User::findOrFail($request->user_id);
    $user->status = $request->status;
    $user->save();

    return response()->json(['message' => 'Statut mis à jour avec succès.']);
}

}
