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
    public function update(Request $request, MusicianTag $musicianTag)
    {
        // $updatemusiciantag = MusicianTag::where('user_id', $user_id)
        // ->update([
           
        //      '' => $request->input('bio'),

        //    ]);
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
