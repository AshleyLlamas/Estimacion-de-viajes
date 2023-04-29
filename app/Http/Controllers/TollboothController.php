<?php

namespace App\Http\Controllers;

use App\Models\Tollbooth;
use App\Http\Requests\StoreTollboothRequest;
use App\Http\Requests\UpdateTollboothRequest;

class TollboothController extends Controller
{
    public function index()
    {
        return view('tollbooths.index');
    }

    public function create()
    {
        return view('tollbooths.create');
    }

    public function show(Tollbooth $tollbooth)
    {
        return view('tollbooths.show', compact('tollbooth'));
    }

    public function edit(Tollbooth $tollbooth)
    {
        return view('tollbooths.edit', compact('tollbooth'));
    }

    public function destroy(Tollbooth $tollbooth)
    {
        $tollbooth->delete();

        return redirect()->route('tollbooths.index');
    }
}
