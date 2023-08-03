<?php

namespace App\Http\Controllers\Offers;

use Illuminate\Http\Request;

class AddOfferController extends Controller
{
    public function index()
    {
        return view('offers.add_offer');
    }
}
