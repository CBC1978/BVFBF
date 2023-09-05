<?php

namespace App\Http\Controllers\Admin\profile;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AdminProfileController1 extends Controller
{
    //
    public function affichage(){
        if (session()->has('username')) {
            $username = session('username');
            $user = User::where('username', $username)->first(); // Recherchez l'utilisateur par son nom d'utilisateur
            
            if ($user) {
                return view('admin.profile.a_profile', compact('user'));
            } 
}
}

public function update(Request $request)
    {
        // Validez les données respect de consigne pur chaq champ
        $request->validate([
            'name' => 'required|string|max:255',
            'first_name' => 'required|string|max:255',
            'username' => 'required|string|max:255',
            'user_phone' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
        ]);
        

        // retrouver le user en question
        $username = session('username');
        $user = User::where('username', $username)->first();

        if ($user) {
            // Mis à jour données...
            $user->update([
                'name' => $request->input('name'),
                'first_name' => $request->input('first_name'),
                'username' => $request->input('username'),
                'user_phone' => $request->input('user_phone'),
                'email' => $request->input('email'),
            ]);
            
            return redirect()->route('admin.profile.affichage')->with('success', 'donnéés mise à jour avec succès.');
        } 
    }
}
