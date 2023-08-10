<?php

namespace App\Http\Controllers\Auth;

use App\Mail\Email\RegisterEmail;
use App\Mail\Email\ValidatedRegisterEmail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class OtpController extends Controller
{
    public function index()
    {
        return view('auth.otp');
    }

    public function optVerify(Request $request)
    {
        $request->validate([
            'otp' => ['required', 'string','min:19', 'max:255'],
        ]);

        $userId = User::where('code','=',$request->otp)->pluck('id')->first();
        $user = User::find($userId);

        $user->status = 1;
        $user->save();

        if ($user){
            Mail::to( $user->email)->send(new ValidatedRegisterEmail($user->first_name));
            return view('VerifiedAccount');
        }else{
            return view('auth.otp');
        }

    }

}