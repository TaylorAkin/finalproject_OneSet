<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Lcobucci\JWT\Parser;

use App\User;
use App\Profile;
use App\Musician;
use App\Venue;
use App\MusicianTag;
use App\Tag;

class AuthenticationController extends Controller
{
    public function login(Request $request)
    {
        $user = User::where('email', $request->email)->first();


        if ($user) {
            if ($request->password == $user->password) {
                $token = $user->createToken('Laravel Password Grant Client')->accessToken;
                $profile = Profile::where('user_id', $user->id)->get();
                $musician = Musician::where('user_id', $user->id)->get();
                $venue = Venue::where('user_id', $user->id)->get();
                $musicianTags = [];
                if (count($musician) > 0) {
                    
                    $musicianTags = MusicianTag::where('musician_id', $musician[0]->id)->get();
                    foreach ($musicianTags as $musicianTag) {
                        $name = Tag::where('id', $musicianTag->tag_id)->get();
                        if (count($name) > 0) {
                            $musicianTag->name = $name;
                        }
                    }
                }


                $user->musician = $musician;
                $user->venue = $venue;
                $user->profile = $profile;
                $user->musicianTags = $musicianTags;
                $user->role = count($musician) ? "musician" : "venue";
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

    public function register(Request $request)
    {

        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $user = User::create(request(['name', 'email', 'password']));
        // TODO: 
        // assign the role based on the request value
        //put in model has role table push here? (needs a model?)


        $createprofile = Profile::create(["user_id" => $user->id, "bio" => "Edit Me", "picture_path" => 'empty']);
        
        // create musician or venue based on the role
        if ($request->role === 'musician') {

            $createmusician = Musician::create(["user_id" => $user->id]);
            $user->musician = $createmusician;
            // $user->musician =$createmusician;
        } else {
            
            $createvenue = Venue::create(["user_id" => $user->id]);
            $user->venue = $createvenue;

        }



        $token = $user->createToken('Laravel Password Grant Client')->accessToken;
        $user->profile = $createprofile;
        $user->role = $request->role;
        $response = [
            'token' => $token,
            'user' => $user,
        ];

        return response($response, 200);

    }
}