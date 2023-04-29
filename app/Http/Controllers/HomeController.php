<?php

namespace App\Http\Controllers;

use App\Models\Fuel;
use App\Models\Route;
use App\Models\Tollbooth;
use App\Models\Unit;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //CONTADOR DE CATEGORIAS
        $all_routes = Route::all()->count();
        $all_tollbooths = Tollbooth::all()->count();
        $all_units = Unit::all()->count();
        $all_fuels = Fuel::all()->count();

        return view('home', [
            'all_routes' => $all_routes,
            'all_tollbooths' => $all_tollbooths,
            'all_units' => $all_units,
            'all_fuels' => $all_fuels
        ]);
    }
}
