<?php

namespace App\Http\Controllers;

use App\Models\wisata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WisataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('wisata.index');
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
     * @param  \App\Models\wisata  $wisata
     * @return \Illuminate\Http\Response
     */
    public function show(wisata $wisata)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\wisata  $wisata
     * @return \Illuminate\Http\Response
     */
    public function edit(wisata $wisata)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\wisata  $wisata
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, wisata $wisata)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\wisata  $wisata
     * @return \Illuminate\Http\Response
     */
    public function destroy(wisata $wisata)
    {
        //
    }
}
