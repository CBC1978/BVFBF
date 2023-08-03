<?php

namespace App\Http\Controllers\Offers;

use Illuminate\Http\Request;

class OffersController extends Controller
{
    public function index()
    {
        return view('offers.offers');
    }
}
