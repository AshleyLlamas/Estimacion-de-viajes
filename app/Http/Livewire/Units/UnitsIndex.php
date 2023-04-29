<?php

namespace App\Http\Livewire\Units;

use App\Models\Unit;
use Livewire\Component;
use Livewire\WithPagination;

class UnitsIndex extends Component
{
    use WithPagination;

    protected $paginationTheme = "bootstrap";

    public function updatingSearch(){
        $this->resetPage();
    }

    public function render()
    {
        $units = Unit::orderBy('unidad')->paginate();

        return view('livewire.units.units-index', [
            'units' => $units
        ]);
    }
}
