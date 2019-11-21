<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Lcobucci\JWT\Parser;

use App\User;
use App\Profile;

class AuthenticationController extends Controller
{
    public function login(Request $request) {
        $user = User::where('email', $request->email)->first();
        

        if ($user) {
            if ($request->password == $user->password) {
                $token = $user->createToken('Laravel Password Grant Client')->accessToken;
                $profile = Profile::where('user_id', $user->id)->get();
                $user->profile = $profile;
                $response = [
                    'token' => $token,
                    'user' => $user,
                ];
                return response($response, 200);
            } else {
                $response = 'Password mismatch';
                return response($response, 422);
            }
        } else {
            $response = 'User doesn\'t exist';
            return response($response, 422);
        }
    }


    public function logout(Request $request)
    {
        $request->user()->token()->revoke();
        $request->user()->token()->delete(); 

        $response = 'You have been successfully logged out!';
        return response($response, 200);
    }

    public function register(Request $request){

        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);
        
        $user = User::create(request(['name', 'email', 'password']));

        // $createprofile = Profile::create(["user_id"=>$user->id, "bio"=>"","contact_info"=> 'user_email']);

        
        // factory(User::create(request(['name', 'email', 'password']))->each(function ($user) {
        //     $user->profile()->save(factory(App\Profile::class)->make());
        // });
        // $profile = Profile::create();
        
        // auth()->login($user);
        $token = $user->createToken('Laravel Password Grant Client')->accessToken;
        $response = [
            'token' => $token,
            'user' => $user,
            // 'createprofile' => $createprofile

        ];

        return response($response, 200);

    }
}