<?php

namespace App\Http\Livewire;

use Livewire\Component;

class FormRegister extends Component
{
    public $nombre;
    public $contraseña;
    public $contraseña_;
    public $confirmar_contraseña;
    public $correo_;

    public $correo;


    protected $rules = [
        'nombre' => 'required|min:3',
        'correo' => 'required|email|min:3',
        'correo_' => 'required|email|min:3|unique:App\Models\User,email',
        'contraseña' => 'required|min:8',
        'contraseña_' => 'required|min:8',
        'confirmar_contraseña' => 'required|min:8',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        return view('livewire.form-register');
    }
}
