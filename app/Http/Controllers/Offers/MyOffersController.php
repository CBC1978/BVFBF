<?php

namespace App\Http\Controllers\Offers;

use Illuminate\Http\Request;

class MyOffersController extends Controller
{
    public function index()
    {
        return view('offers.myoffers');
    }
}
