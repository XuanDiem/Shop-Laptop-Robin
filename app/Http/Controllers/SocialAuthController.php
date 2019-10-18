<?php

namespace App\Http\Controllers;

use App\Service\Impl\SocialAccountService;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class SocialAuthController extends Controller
{
    public function redirect($social)
    {
        return Socialite::driver($social)->redirect();
    }

    public function callback($social)
    {
//        dd(1);
        $user = SocialAccountService::createOrGetUser(Socialite::driver($social)->stateless()->user(), $social);
        auth()->login($user);

        return redirect()->to('/home');
    }
}
