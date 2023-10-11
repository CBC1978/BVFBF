<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Models\FreightOffer;
use App\Models\TransportOffer;
use App\Models\User;
use App\Models\TransportAnnouncement;
use App\Models\TransportOffers;
use App\Models\ContractTransport;
use App\Models\CarAndContract;
use Illuminate\Support\Facades\DB;
use Opcodes\LogViewer\Log;
use SebastianBergmann\CodeCoverage\Driver\Driver;

use App\Models\Car; 

class CarController extends Controller
{
    
    public function showCarRegistrations()
    {
        // Récupérez l'ID du transporteur connecté
        $carrierId = session('fk_carrier_id');

        // Récupérez les enregistrements de voitures du transporteur
        $registrations = Car::where('fk_carrier_id', $carrierId)->get();

        return view('carrier.contract.contract_carrier', ['registrations' => $registrations]);
    }
}