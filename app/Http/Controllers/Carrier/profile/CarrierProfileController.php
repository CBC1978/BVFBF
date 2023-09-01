<?php

namespace App\Http\Controllers\carrier\profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class CarrierProfileController extends Controller
{
    //
    public function affichage(){
        if (session()->has('username')) {
            $username = session('username');
            $user = User::where('username', $username)->first(); // Recherchez l'utilisateur par son nom d'utilisateur
            
            if ($user) {
                return view('carrier.profile.c_profile', compact('user'));
            } 
}
}
}