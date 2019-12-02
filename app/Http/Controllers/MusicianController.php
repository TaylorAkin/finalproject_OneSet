<?php

namespace App\Http\Controllers;

use App\Musician;
use Illuminate\Http\Request;
use App\Http\Resources\MusicianCollection;

class MusicianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $musicians = Musician::all();
        $musicians->load('user');
        
        return new MusicianCollection($musicians);
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
     * @param  \App\Musician  $musician
     * @return \Illuminate\Http\Response
     */
    public function show(Musician $musician)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Musician  $musician
     * @return \Illuminate\Http\Response
     */
    public function edit(Musician $musician)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Musician  $musician
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Musician $musician)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Musician  $musician
     * @return \Illuminate\Http\Response
     */
    public function destroy(Musician $musician)
    {
        //
    }
}
