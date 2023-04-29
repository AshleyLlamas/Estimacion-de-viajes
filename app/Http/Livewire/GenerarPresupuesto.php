<?php

namespace App\Http\Livewire;

use Livewire\Component;

class GenerarPresupuesto extends Component
{
    public $fecha, $ciudadOrigen_id, $ciudadDestino_id, $unit_id;

    public function render()
    {
        return view('livewire.generar-presupuesto');
    }
}
