<?php

namespace App\Http\Controllers;

use App\MusicianTag;
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
        // delete all musician tags
        $mytags = MusicianTag::where('musician_id', $request->musician_id)
        ->delete();

        // loop thru all tags in request->tags
        for($i = 0; $i < count($request->tags); $i++){
            // add each tag
            MusicianTag::create(['musician_id' => $request->musician_id, 'tag_id' => $request->tags[$i]]);
        }
        
        return MusicianTag::all()->toArray();

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
