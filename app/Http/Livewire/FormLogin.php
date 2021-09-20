<?php

namespace App\Http\Livewire;

use Livewire\Component;

class FormLogin extends Component
{
    public $contraseña;
    public $correo;
    
    protected $rules = [
        'correo' => 'required|email|min:3',
        'contraseña' => 'required|min:8',
    ];
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        return view('livewire.form-login');
    }
}
