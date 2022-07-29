<?php

namespace App\Http\Controllers;

use App\Models\Dress;
use App\Http\Requests\StoreDressRequest;
use App\Http\Requests\UpdateDressRequest;

class DressController extends Controller
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
     * @param  \App\Http\Requests\StoreDressRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDressRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dress  $dress
     * @return \Illuminate\Http\Response
     */
    public function show(Dress $dress)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dress  $dress
     * @return \Illuminate\Http\Response
     */
    public function edit(Dress $dress)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDressRequest  $request
     * @param  \App\Models\Dress  $dress
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDressRequest $request, Dress $dress)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dress  $dress
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dress $dress)
    {
        //
    }
}
