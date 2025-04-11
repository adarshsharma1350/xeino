<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback(){
        try{
            $googleUser = Socialite::driver('google')->user();

            $user = User::where('email', $googleUser->getEmail())->first();

            if(!$user){
                $user = User::create([
                    'username' => $googleUser->getName(),
                    'email' => $googleUser->getEmail(),
                    'password' => Hash::make(uniqid()), // Random password
                    'email_verified_at' => now(),
                    'google_id' => $googleUser->getId(),
                ]);
            }
            Auth::login($user);
            return redirect('/dashboard');
        } catch(\Exception $e){
            // \Log::error('Google Login Error: ' . $e->getMessage());
            report($e);
            return redirect('/login')->with('error','Login with google failed');
        }
    }
}
