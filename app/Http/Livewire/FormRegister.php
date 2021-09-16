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
        'correo' => 'required|email|min:3|max:35',
        'correo_' => 'required|email|min:3|max:35',
        'contraseña' => 'required|min:8|max:35',
        'contraseña_' => 'required|min:8|max:35',
        'confirmar_contraseña' => 'required|min:8|max:35',
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
