<?php

namespace App\Http\Controllers;

use App\MusicianTag;
use App\Tag;
use App\Musician;
use Illuminate\Http\Request;

class MusicianTagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\MusicianTag  $musicianTag
     * @return \Illuminate\Http\Response
     */
    public function show(MusicianTag $musicianTag)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MusicianTag  $musicianTag
     * @return \Illuminate\Http\Response
     */
    public function edit(MusicianTag $musicianTag)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MusicianTag  $musicianTag
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {   
        //finds musican where the userid is equal to the musicantag musician_id
        //fixes issue with the id and user_id not being the same in musicians table
        $musician = Musician::where('user_id',$request->musician_id)->with('user')->first();
        // delete all musician tags
        $mytags = MusicianTag::where('musician_id', $musician->id)
        ->delete();
    
        // loop thru all tags in request->tags
        for($i = 0; $i < count($request->tags); $i++){
            // add each tag
            MusicianTag::create(['musician_id' => $musician->id, 'tag_id' => $request->tags[$i]]);
        }
        $musicianTags = [];
        $musicianTags = MusicianTag::where('musician_id', $musician->id)->get();
        foreach ($musicianTags as $musicianTag) {
            $name = Tag::where('id', $musicianTag->tag_id)->get();
            if (count($name) > 0) {
                $musicianTag->name = $name;
            }
        }
        
        return $musicianTags;
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MusicianTag  $musicianTag
     * @return \Illuminate\Http\Response
     */
    public function destroy(MusicianTag $musicianTag)
    {
        //
    }
}
