<?php

namespace App\Http\Controllers\Offers;

use Illuminate\Http\Request;
use App\Models\FreightAnnouncement;

class OffersController extends Controller
{
    public function index()
    {
        $freightOffers = FreightAnnouncement::all();

        
        return view('offers.offers', compact('freightOffers'));

        //return view('offers.offers');
    }
}