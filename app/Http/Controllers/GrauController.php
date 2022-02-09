<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGrauRequest;
use App\Http\Requests\UpdateGrauRequest;
use App\Models\Grau;

class GrauController extends Controller
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
     * @param  \App\Http\Requests\StoreGrauRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGrauRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Grau  $grau
     * @return \Illuminate\Http\Response
     */
    public function show(Grau $grau)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Grau  $grau
     * @return \Illuminate\Http\Response
     */
    public function edit(Grau $grau)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGrauRequest  $request
     * @param  \App\Models\Grau  $grau
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGrauRequest $request, Grau $grau)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Grau  $grau
     * @return \Illuminate\Http\Response
     */
    public function destroy(Grau $grau)
    {
        //
    }
}
