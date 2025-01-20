<?php

namespace App\Livewire;

use App\Models\Hardware;
use Livewire\Component;

class EditarHardware extends Component
{
    public $hardware_id;
    public $usuarioAsignado;
    public $usuarioArea;
    public $marcaHardware;
    public $modeloHardware;
    public $serieHardware;
    public $tipoHardware;
    public $oficinaResponsable;
    public $descripcionHardware;

    protected $rules = [
        'usuarioAsignado' => 'required|string|max:255',
        'usuarioArea' => 'required|string|max:255',
        'marcaHardware' => 'required|string|max:255',
        'modeloHardware' => 'required|string|max:255',
        'serieHardware' => 'required|string|max:255',
        'tipoHardware' => 'required|string|max:255',
        'oficinaResponsable' => 'required|string|max:255',
        'descripcionHardware' => 'required|string|max:255',
    ];

    public function mount(Hardware $hardware)
    {
        $this->hardware_id = $hardware->id;
        $this->usuarioAsignado = $hardware->usuarioAsignado;
        $this->usuarioArea = $hardware->usuarioArea;
        $this->marcaHardware = $hardware->marcaHardware;
        $this->modeloHardware = $hardware->modeloHardware;
        $this->serieHardware = $hardware->serieHardware;
        $this->tipoHardware = $hardware->tipoHardware;
        $this->oficinaResponsable = $hardware->oficinaResponsable;
        $this->descripcionHardware = $hardware->descripcionHardware;
    }

    public function editarHardware()
    {
        $datos = $this->validate();

        $hardware = Hardware::find($this->hardware_id);

        $hardware->usuarioAsignado = $datos['usuarioAsignado'];
        $hardware->usuarioArea = $datos['usuarioArea'];
        $hardware->marcaHardware = $datos['marcaHardware'];
        $hardware->modeloHardware = $datos['modeloHardware'];
        $hardware->serieHardware = $datos['serieHardware'];
        $hardware->tipoHardware = $datos['tipoHardware'];
        $hardware->oficinaResponsable = $datos['oficinaResponsable'];
        $hardware->descripcionHardware = $datos['descripcionHardware'];

        $hardware->save();

        session()->flash('mensaje','El Hardware se actualizó correctamente');

        return redirect()->route('hardware.index');

    }


    public function render()
    {
        return view('livewire.editar-hardware');
    }
}