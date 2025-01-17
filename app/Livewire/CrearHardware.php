<?php

namespace App\Livewire;

use Livewire\Component;

class CrearHardware extends Component
{
    public $usuarioAsignado;
    public $usuarioArea;
    public $marcaHardware;
    public $modeloHardware;
    public $serieHardware;
    public $oficinaResponsable;
    public $descripcionHardware;

    protected $rules = [
        'usuarioAsignado' => 'required|string|max:255',
        'usuarioArea' => 'required|string|max:255',
        'marcaHardware' => 'required|string|max:255',
        'modeloHardware' => 'required|string|max:255',
        'serieHardware' => 'required|string|max:255',
        'oficinaResponsable' => 'required|string|max:255',
        'descripcionHardware' => 'required|string|max:255',
    ];

    public function crearHardware() {
        $this->validate();
    }

    public array $validationAttributes = [
        'usuarioAsignado' => 'Usuario asignado al Hardware',
        'usuarioArea' => 'Área del usuario asignado al Hardware',
        'marcaHardware' => 'Marca del Hardware',
        'modeloHardware' => 'Modelo del Hardware',
        'serieHardware' => 'Número de serie del Hardware',
        'oficinaResponsable' => 'Oficina del responsable del Hardware',
        'descripcionHardware' => 'Descripcion del Hardware',
    ];
    

    public function render()
    {
        return view('livewire.crear-hardware');
    }
}
