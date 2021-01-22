<?php

namespace App\Http\Controllers;

use App\Models\BandMaterial;
use Illuminate\Http\Request;

class BandMaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bandMaterials = BandMaterial::all();
        return view('admin.band_material.index', ['bandMaterials' => $bandMaterials]);
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
        BandMaterial::create($request->all());
        return redirect("admin/band_material");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BandMaterial  $bandMaterial
     * @return \Illuminate\Http\Response
     */
    public function show(BandMaterial $bandMaterial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BandMaterial  $bandMaterial
     * @return \Illuminate\Http\Response
     */
    public function edit(BandMaterial $bandMaterial)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BandMaterial  $bandMaterial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BandMaterial $bandMaterial)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BandMaterial  $bandMaterial
     * @return \Illuminate\Http\Response
     */
    public function destroy(BandMaterial $bandMaterial)
    {
        //
    }
}
