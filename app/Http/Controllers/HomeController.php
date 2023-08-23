<?php

namespace App\Http\Controllers;

use App\Models\FreightAnnouncement;
use App\Models\FreightOffer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
         $announcements = DB::table('freight_announcement')
             ->selectRaw("
             freight_announcement.id,freight_announcement.origin,freight_announcement.destination,freight_announcement.limit_date,
             freight_announcement.weight, freight_announcement.volume,freight_announcement.description,
             shipper.company_name
             ")
             ->join('shipper','freight_announcement.fk_shipper_id' ,"=",'shipper.id')
             ->get();

//             FreightAnnouncement::all();
//         die($announcements);

         $role = session('role'); // Récupérer le rôle depuis la session

         if ($role === 'admin') {
             return view('a_home');
         } elseif ($role === 'chargeur') {
             return view('s_home');
         } elseif ($role === 'transporteur') {
             return view('c_home' , compact('announcements'));
         } else {
             return view('home'); // Par défaut, si le rôle n'est pas reconnu
         }

     }
 }
