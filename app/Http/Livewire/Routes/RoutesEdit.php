<?php

namespace App\Http\Livewire\Routes;

use App\Models\Route;
use Livewire\Component;

class RoutesEdit extends Component
{
    public $route, $tiempo;

    public function mount(Route $route){
        $this->route = $route;
        $this->tiempo = $route->tiempo;
    }

    public function rules(){

        $array = [];

        $array['route.nombre'] = 'required|string|max:255|unique:routes,nombre,'.$this->route->id;
        $array['route.longitud'] = 'required';
        $array['tiempo'] = 'required';

        return $array;
    }

    public function save(){

    }

    public function render()
    {
        return view('livewire.routes.routes-edit');
    }
}
