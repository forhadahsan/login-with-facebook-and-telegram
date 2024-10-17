<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;

class FacebookController extends Controller
{
    public function redirect(){
        return Socialite::driver('facebook')->redirect();
    }
    public function callback(){
        $fb_user = Socialite::driver('facebook')->user();
        //  dd($user);

        // Check if user already exists in the database
        $user = User::updateOrCreate(
            ['email' => $fb_user->getEmail()],
            ['name' => $fb_user->getName()],
        );

        // login 
        auth()->login($user);
        return to_route('dashboard');
    }


    public function telegramredirect(){
        // return Socialite::driver('telegram')->redirect();
        return Socialite::driver('telegram')->redirect();
    }

    public function telegramcallback(){
        $user = Socialite::driver('telegram')->user();
         dd($user);

        // Check if user already exists in the database
        // $user = User::updateOrCreate(
        //     ['email' => $fb_user->getEmail()],
        //     ['name' => $fb_user->getName()],
        // );

        // login 
        // auth()->login($user);
        // return to_route('dashboard');
    }
}
