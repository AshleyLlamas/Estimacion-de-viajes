<?php

namespace App\Http\Livewire\Routes;

use App\Models\Route;
use Livewire\Component;

class RoutesIndex extends Component
{
    public function render()
    {
        $routes = Route::orderBy('nombre')->get();

        return view('livewire.routes.routes-index', [
            'routes' => $routes
        ]);
    }
}
