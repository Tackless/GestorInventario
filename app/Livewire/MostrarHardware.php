<?php

namespace App\Livewire;

use App\Models\Hardware;
use Livewire\Component;

class MostrarHardware extends Component
{
    public function render()
    {
        $hardware = Hardware::paginate(500);
        return view('livewire.mostrar-hardware', [
            'hardware' => $hardware
        ]);
    }
}
