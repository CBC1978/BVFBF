<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

     public function index()
     {
         $role = session('role'); // Récupérer le rôle depuis la session
 
         if ($role === 'admin') {
             return view('a_home');
         } elseif ($role === 'chargeur') {
             return view('s_home');
         } elseif ($role === 'transporteur') {
             return view('c_home');
         } else {
             return view('home'); // Par défaut, si le rôle n'est pas reconnu
         }
     }
 }
