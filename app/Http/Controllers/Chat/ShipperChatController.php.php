<?php

namespace App\Http\Controllers\Chat;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FreightAnnouncement;
use App\Models\TransportAnnouncement;
use App\Models\Carrier;
use App\Models\Shipper;
use App\Models\User;
use Session;

class ShipperChatController extends Controller
{
    public function index()
    {
        return view('chat.shipper_chat');
    }

}
