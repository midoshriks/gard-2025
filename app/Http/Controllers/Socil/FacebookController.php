<?php

namespace App\Http\Controllers\Socil;

use Exception;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Validator;

class FacebookController extends Controller
{
    public function facebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function facebookcallback()
    {
        try {
            $user = Socialite::driver('facebook')->user(); // Error
            // $user = Socialite::driver('facebook')->user();
            // dd($user,$user->name || $user->email);

            $finduser = User::where('facebook_id', $user->id)->first();

            if ($finduser) {
                Auth::login($finduser);
                return redirect()->intended('dashboard/index');
            } else {
                if (!$user->email) {
                    $newUser = User::create([
                        'name' => $user->name,
                        'email' => $user->email,
                        'google_id' => $user->id,
                        'rol_id' => '2', //user
                        "phone" => $user->id,
                        "whatsapp" => $user->id,
                        "code" => $user->id,
                        'password' => bcrypt('12345678'),
                    ]);
                } else {
                    $newUser = User::create([
                        'name' => $user->name,
                        'email' => $user->email,
                        'google_id' => $user->id,
                        'rol_id' => '2', //user
                        "phone" => $user->id,
                        "whatsapp" => $user->id,
                        "code" => $user->id,
                        'password' => bcrypt('12345678'),
                    ]);
                }

                Auth::login($newUser);
                return redirect()->intended('dashboard/index');
            }
        } catch (Exception $e) {
            dd($e->getMessage(), 'Mido developer');
        }
    }

}
