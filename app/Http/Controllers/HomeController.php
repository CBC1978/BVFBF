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
    $role = session('role'); //  depuis la session

    if ($role === 'admin') {
        return view('a_home');
    } else {
        return view('home');
    }
}
    // public function index()
    // {
    //     return view('home');
    // }
}
