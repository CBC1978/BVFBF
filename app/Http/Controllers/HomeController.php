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
             ->orderBy('freight_announcement.id', 'DESC')
             ->limit(10)
             ->get();

         $transports = DB::table('transport_announcement')
                        ->selectRaw("transport_announcement.id, transport_announcement.origin, transport_announcement.destination, transport_announcement.limit_date,
                        transport_announcement.weight, transport_announcement.vehicule_type, transport_announcement.description,
                       carrier.company_name")
             ->join('carrier', 'transport_announcement.fk_carrier_id','=', 'carrier.id')
             ->orderBy('transport_announcement.id', 'DESC')
             ->limit(10)
             ->get();
//         dd($transports);

         $role = session('role'); // Récupérer le rôle depuis la session

         if ($role === 'admin') {
             return view('a_home');
         } elseif ($role === 'chargeur') {
             return view('s_home', compact('transports'));
         } elseif ($role === 'transporteur') {
             return view('c_home' , compact('announcements'));
         } else {
             return view('home'); // Par défaut, si le rôle n'est pas reconnu
         }

     }
 }
