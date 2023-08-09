<?php

namespace App\Http\Controllers\Carrier\Offers;
use App\Models\FreightAnnouncement;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class C_OfferController extends Controller
{
    public function index()
    {

        $freightOffers = FreightAnnouncement::all();

        return view('carrier.offers.c_offer' , compact('freightOffers'));
    }
}
