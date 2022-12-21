<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;



class LoginController extends Controller
{
    public function index(){
        return view('login.index', [
            'title' => 'Login'
        ]);
    }
    public function authenticate(Request $request){
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/home');
        }

        return back()->with('loginError', 'login failed!');
    }

    //login google
    public function loginGoogle(){
        return Socialite::driver('google')->redirect();
    }

    public function handleGooglecallback(){
        $user = Socialite::driver('google')->user();
        $this->registerlogin($user);

        return redirect('/home');
    }

    protected function registerlogin($data){
        $user = User::where('email','=', $data->email)->first();
        if($user){
            $user = new User();
            $user->name = $data->name;
            $user->email = $data->email;
            $user->provider_id = $data->provider_id;
            $user->save();
        }
        Auth::login($user);
    }

}
