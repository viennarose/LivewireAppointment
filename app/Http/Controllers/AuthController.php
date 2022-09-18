<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class AuthController extends Controller
{
    public function loginForm(){
        if(auth()->check()){
            return redirect('/home');
        }
        return view('auth.login');
    }

    public function login(Request $request){
        $request->validate([
            'password' =>   'required|string',
            'email' =>   'required|email',
        ]);

        $user = User::where('email', $request->email)->first();

        if(!$user || $user->email_verified_at == null){
            return redirect('/')->with('error', 'Sorry, your account is not verified.');
        }

        $login = auth()->attempt([
            'email' =>   $request->email,
            'password' =>   $request->password,

        ]);

        if(!$login){
            return back()->with('error', 'Invalid credentials');
        }

        return redirect('/home');
    }

    public function registerForm(){
        if(auth()->check()){
            return redirect('/home');
        }
        return view('auth.register');
    }

    public function register(Request $request){
        $request->validate([
            'name' =>   'required|string',
            'email' =>   'required|email',
            'password' =>   'required|confirmed|string|min:6',

        ]);

        $token = Str::random(24);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'remember_token' => $token
        ]);

        Mail::send('livewire.auth.verification-mail', ['user' => $user], function($mail) use($user){
            $mail->to($user->email);
            $mail->subject('Account Verification');
        });

        return redirect('/')->with('message', 'Your account has been created. Please check your email for verification');
    }

    public function verification(User $user, $token){
        if($user->remember_token !== $token){
            return redirect('/')->with('error', 'Invalid token. The attached token is invalid.');
        }
        $user->email_verified_at = now();
        $user->save();

        return redirect('/')->with('message', 'Your account has been verified. You may login now.');
    }

    public function logout(){
        auth()->logout();
        return redirect('/')->with('message', 'Logout Successfully');
    }

}
