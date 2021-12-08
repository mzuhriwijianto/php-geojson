<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Maps;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
//use App\Models\maps;

class MapsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $maps = Cache::remember(implode('-', request()->all()), 900, function () {
            return map::with('categories')->paginate(10); //Lazy load
        });

        return view('book.index', [
            'maps' => $maps
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('maps.create', [
            'maps' => maps::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $maps = new maps();
        $maps->nama = $request->nama;
        $maps->lokasi = $request->lokasi;
        $maps->description = $request->description;
        $maps->save();

        return redirect()->route('maps.index')->with('status', 'wisata berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\maps  $maps
     * @return \Illuminate\Http\Response
     */
    public function show(maps $maps)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\maps  $maps
     * @return \Illuminate\Http\Response
     */
    public function edit(maps $maps)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\maps  $maps
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, maps $maps)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\maps  $maps
     * @return \Illuminate\Http\Response
     */
    public function destroy(maps $maps)
    {
        //
    }
}
