<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

//use Session;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    public function index()
    {
        return view('auth.login');
    }

    public function home()
    {
        return view('home');
    }


    public function login(Request $request)
    {
        $request->validate([
            'email' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:8'],
        ]);
        $userId = User::where(['email'=>$request->email])->pluck('id')->first();
        $user = User::find($userId);
        if($user){
            if (Hash::check($request->password, $user->password)){
                $request->session()->put('userId', $userId);
                $request->session()->put('userId', $user->id);
                $request->session()->put('username', $user->username);
                $request->session()->put('role', $user->role);
                $request->session()->put('status', $user->status);
                $request->session()->put('fk_carrier_id', $user->fk_carrier_id);
                $request->session()->put('fk_shipper_id', $user->fk_shipper_id);
               
                
                return redirect('home');
            }else{
                return back()->with('fail',"Les mots de passes ne correspondent pas ");
            }
        }else{
            return back()->with('fail',"L'email n'existe pas ");
        }
    }
    public function logout()
{
    Auth::logout(); // Déconnecte l'utilisateur
    Session::flush(); // Vide la session
    return redirect()->route('login'); // Redirige vers la page de connexion
}

}
