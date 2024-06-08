<?php

namespace App\Http\Controllers\Auth;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Footer;
use App\Models\Header;
use App\Http\Controllers\Controller;
use App\Models\ProductType;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class SocialLoginController extends Controller
{
    public function redirectToGoogle($website)
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback($website)
    {
        $social_user = Socialite::driver($website)->user();
        $user = User::where('email', $social_user->getEmail())->first();
        $mytime = Carbon::now();
        $producttype = ProductType::all();
        $footer = Footer::all();
        $header = Header::all();
        if (!$user) {
              // Fetch the highest current user_id
            $maxUserId = User::max('user_id') ?? 0;
            $newUserId = $maxUserId + 1;
            $user = User::create([
                'user_id' => $newUserId,
                'name' => $social_user->getName(),
                'email' => $social_user->getEmail(),
                'email_verified_at' => $mytime,
                'product_type_id' => 1,
                'idNumber' => '',
                'front_img' => '',
                'back_img' => '',
                'password' => '',
                'login_type' => $website
            ]);

            $user->assignRole('user');
            Auth::login($user);
            return view('frontend.memberform', compact('user', 'footer', 'header', 'producttype'));
        } else {
            Auth::login($user);
            return redirect()->route('home');
        }
    }
}
