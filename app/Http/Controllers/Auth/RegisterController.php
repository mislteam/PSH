<?php

namespace App\Http\Controllers\Auth;

use App\Models\Coin;
use App\Models\User;
use App\Models\CoinUser;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
            'id_number' => ['required', 'string'],
            'confirm_password' => ['required', 'string', 'min:8', 'same:password']
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {   
        // Front Image
        $frontImgFile = request()->file('front-img');
        $frontImgFileName = $frontImgFile->getClientOriginalName();
        $frontImgFile->move(public_path('uploads'), $frontImgFileName);

        // Back Image 
        $backImgFile = request()->file('back-img');
        $backImgFileName = $backImgFile->getClientOriginalName();
        $backImgFile->move(public_path('uploads'), $backImgFileName);

        $user =  User::create([
            'user_id' => User::latest('user_id')->first()->user_id + 1,
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'] ?? "",
            'idNumber' => $data['id_number'],
            'password' => Hash::make($data['password']),
            'front_img' => $frontImgFileName,
            'back_img' => $backImgFileName,
        ]);

        // Create Coin Balance for user 
        $this->createCoins($user);
        $user->assignRole('user');
        return $user;
    }

    protected function createCoins($user) {
        $coins = Coin::all();
        foreach ($coins as $coin) {
            CoinUser::create([
                'user_id' => $user->id,
                'coin_id' => $coin->id,
                'available' => '0.00',
            ]);
        }
    }
}
