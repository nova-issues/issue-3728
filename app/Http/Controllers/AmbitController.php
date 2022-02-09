<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAmbitRequest;
use App\Http\Requests\UpdateAmbitRequest;
use App\Models\Ambit;

class AmbitController extends Controller
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
     * @param  \App\Http\Requests\StoreAmbitRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAmbitRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ambit  $ambit
     * @return \Illuminate\Http\Response
     */
    public function show(Ambit $ambit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ambit  $ambit
     * @return \Illuminate\Http\Response
     */
    public function edit(Ambit $ambit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAmbitRequest  $request
     * @param  \App\Models\Ambit  $ambit
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAmbitRequest $request, Ambit $ambit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ambit  $ambit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ambit $ambit)
    {
        //
    }
}
