<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Auth;
use App\Http\Requests;

class facebookController extends Controller
{
    public function facebookLogin(){
        return Socialite::with('facebook')->redirect();

    }

    public function facebookCallback(){
        try{
            $user = Socialite::with('facebook')->user();
        }catch(Exception $e){

        }
        // dd($user);

        $authUser = $this ->  findorCreateUser($user);
        Auth::login($authuser);
        return redirect('/home');
    }

    private function findOrCreateUser($facebookUser){
        $authUser = User::where('facebook_id','=',$facebookUser['id'])->first();

        if ($authUser){
            return $authUser;
        }

        return $this->createUser($facebookUser);

    }

    private function createUser($user){
        $user = User::create([
            'name' => $user->name,
            'email' => $user->email,
            'facebook_id' => $user->user['id'],
            'avatar' => $user->avatar,
            'avatar_original' => $user->avatar_original
        ]);

        return $user;
    }
}