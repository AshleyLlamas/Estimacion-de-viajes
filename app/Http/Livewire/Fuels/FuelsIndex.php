<?php

namespace App\Http\Livewire\Fuels;

use App\Models\Fuel;
use Livewire\Component;

class FuelsIndex extends Component
{
    public function render()
    {
        $fuels = Fuel::all();

        return view('livewire.fuels.fuels-index', [
            'fuels' => $fuels
        ]);
    }
}
