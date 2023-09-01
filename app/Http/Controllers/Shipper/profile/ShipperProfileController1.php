<?php

namespace App\Http\Controllers\shipper\profile;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ShipperProfileController1 extends Controller
{
    //
    
    public function affichage(){
        if (session()->has('username')) {
            $username = session('username');
            $user = User::where('username', $username)->first(); // Recherchez l'utilisateur par son nom d'utilisateur
            
            if ($user) {
                return view('shipper.profile.s_profile', compact('user'));
            } 
}
}

public function update(Request $request){
    // Validez les données de mise à jour du profil
    $request->validate([
        'name' => 'required|string|max:255',
        'first_name' => 'required|string|max:255',
        'user_phone' => 'required|string|max:255',
        'email' => 'required|string|email|max:255',
        'code' => 'required|string|max:255',
        'status' => 'required|string|max:255',
    ]);

    // Obtenez l'utilisateur à partir de la session
    $username = session('username');
    $user = User::where('username', $username)->first();

    if ($user) {
        // Mettez à jour les attributs de l'utilisateur
        $user->update([
            'name' => $request->input('name'),
            'first_name' => $request->input('first_name'),
            'user_phone' => $request->input('user_phone'),
            'email' => $request->input('email'),
            'code' => $request->input('code'),
            'status' => $request->input('status'),
        ]);

        return response()->json(['success' => true]);
    } else {
        return response()->json(['success' => false]);
    }
}
}
