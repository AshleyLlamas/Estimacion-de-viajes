<?php

namespace App\Http\Controllers;

use App\Models\Fuel;
use App\Http\Requests\StoreFuelRequest;
use App\Http\Requests\UpdateFuelRequest;

class FuelController extends Controller
{
    public function index()
    {
        return view('fuels.index');
    }

    public function create()
    {
        return view('fuels.create');
    }

    public function show(Fuel $fuel)
    {
        return view('fuels.show', compact('fuel'));
    }

    public function edit(fuel $fuel)
    {
        return view('fuels.edit', compact('fuel'));
    }

    public function destroy(Fuel $fuel)
    {
        $fuel->delete();

        return redirect()->route('fuels.index');
    }
}
