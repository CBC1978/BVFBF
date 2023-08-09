<?php

namespace App\Http\Controllers\Carrier\Offers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class C_AddOfferController extends Controller
{
    public function index()
    {
        return view('carrier.offers.c_add_offer');
    }
}
