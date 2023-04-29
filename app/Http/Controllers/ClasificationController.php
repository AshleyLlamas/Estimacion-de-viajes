<?php

namespace App\Http\Controllers;

use App\Models\Clasification;
use App\Http\Requests\StoreClasificationRequest;
use App\Http\Requests\UpdateClasificationRequest;

class ClasificationController extends Controller
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
     * @param  \App\Http\Requests\StoreClasificationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreClasificationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Clasification  $clasification
     * @return \Illuminate\Http\Response
     */
    public function show(Clasification $clasification)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Clasification  $clasification
     * @return \Illuminate\Http\Response
     */
    public function edit(Clasification $clasification)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateClasificationRequest  $request
     * @param  \App\Models\Clasification  $clasification
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateClasificationRequest $request, Clasification $clasification)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Clasification  $clasification
     * @return \Illuminate\Http\Response
     */
    public function destroy(Clasification $clasification)
    {
        //
    }
}
