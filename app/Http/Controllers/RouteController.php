<?php

namespace App\Http\Controllers;

use App\Models\Route;
use App\Http\Requests\StoreRouteRequest;
use App\Http\Requests\UpdateRouteRequest;

class RouteController extends Controller
{
    public function index()
    {
        return view('routes.index');
    }

    public function create()
    {
        return view('routes.create');
    }

    public function show(Route $route)
    {
        return view('routes.show', compact('route'));
    }

    public function edit(Route $route)
    {
        return view('routes.edit', compact('route'));
    }

    public function destroy(Route $route)
    {
        $route->delete();

        return redirect()->route('routes.index');
    }
}
