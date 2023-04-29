<?php

namespace App\Http\Livewire\Tollbooths;

use App\Models\Tollbooth;
use Livewire\Component;

class TollboothsIndex extends Component
{
    public function render()
    {
        $tollbooths = Tollbooth::orderBy('nombre')->get();

        return view('livewire.tollbooths.tollbooths-index', [
            'tollbooths' => $tollbooths
        ]);
    }
}
