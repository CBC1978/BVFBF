<?php

namespace App\Http\Controllers\Offers;

use Illuminate\Http\Request;

class OfferDetailsController extends Controller
{
    public function index()
    {
        return view('offers.offer_details');
    }
}