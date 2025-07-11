<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;

class GoogleController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        $googleUser = Socialite::driver('google')->user();


        // Cek apakah user sudah ada
        $user = User::where('email', $googleUser->getEmail())->first();

        // Jika belum, buat user baru
        if (!$user) {
            $user = User::create([
                'name' => $googleUser->getName(),
                'email' => $googleUser->getEmail(),
                'password' => bcrypt('password-default'), // bisa diganti logicnya
                'email_verified_at' => now()
            ]);
        }

        Auth::login($user);

        return redirect()->route('home');
    }
}

