<?php

namespace App\Http\Controllers\Auth;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected function validateLogin(Request $request)
    {
        $request->validate([
            $this->username() => 'required|string|email|lowercase', // Custom lowercase validation rule
            'password' => 'required|string',
            // 'g-recaptcha-response' => ['required', function (string $attribute, mixed $value, Closure $fail) {
            //     $recaptcha_response = Http::asForm()->post("https://www.google.com/recaptcha/api/siteverify", [
            //         'secret' => config('services.recaptcha.secret'),
            //         'response' => $value,
            //         'remoteip' => request()->ip()
            //     ]);
            //     if (!$recaptcha_response->json('success')) {
            //         $fail("The {$attribute} is invalid.");
            //     }
            // },]
        ]);
    }
    protected function authenticated()
    {

        if (auth()->user()->status == 1) {
            Auth::logout();
            return redirect()->route('login')->with('warning', 'Your account has been deactivated');
        }

        if (auth()->user()->hasRole('admin') && auth()->user()->status == 0) {
            return redirect()->route('admin.dashboard')->with('message', 'Welcome to Admin Dashboard');
        } elseif (auth()->user()->hasRole('user') && auth()->user()->status == 0) {
            return redirect()->route('home')->with('message', 'Welcome from CoinBankkr');
        } else {
            return redirect()->route('login')->with('message', 'Access Denied');
        }
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function adminLogin()
    {
        return view('backend.login');
    }
}
