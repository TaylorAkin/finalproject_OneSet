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

class AuthenticationController extends Controller
{
    public function login(Request $request) {
        $user = User::where('email', $request->email)->first();
        

        if ($user) {
            if ($request->password == $user->password) {
                $token = $user->createToken('Laravel Password Grant Client')->accessToken;
                $profile = Profile::where('user_id', $user->id)->get();
                $musician = Musician::where('user_id', $user->id )->get();
                $venue = Venue::where('user_id', $user->id )->get();
                $tags = [];
                if(count($musician)>0){

                    $tags = MusicianTag::where('musician_id', $musician[0]->user_id )->get();
                    foreach($tags as $tag){
                        $name = Tag::where('id', $tag->tag_id)->get();
                        $tag->name = $name->name;
                    }
                }
                
                
                $user->musician = $musician;
                $user->venue = $venue;
                $user->profile = $profile;
                $user->tags = $tags;
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
        // TODO: 
        // assign the role based on the request value
        //put in model has role table push here? (needs a model?)

        
        $createprofile = Profile::create(["user_id"=>$user->id, "bio"=>"Edit Me","contact_info" => 'nothing']);
        
        // create musician or venue based on the role
        if($request->role === 'musician'){
            
            $createmusician = Musician::create(["user_id"=>$user->id]);
        } else{

            $createvenue = Venue::create(["user_id"=>$user->id]);

        }

        

        $token = $user->createToken('Laravel Password Grant Client')->accessToken;
        $user->profile = $createprofile;
        $response = [
            'token' => $token,
            'user' => $user,
        ];

        return response($response, 200);

    }
}