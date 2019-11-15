<?php

namespace App\Http\Controllers;

use SocialAuth;

use Illuminate\Http\Request;

class SocialsController extends Controller
{

    public function auth ($providers)
    {
    return SocialAuth::authorize($providers);
    }
    public function auth_callback($provider)
    {
        SocialAuth::login($provider, function($user, $details){

            $user->avatar = $details->avatar;
            $user->name= $details->full_name;
            $user->email=$details->email;
            $user->save();
        });
        return redirect ('/home');
    }
}
