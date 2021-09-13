<?php

namespace App\Http\Livewire;

use Livewire\Component;

class FormRegister extends Component
{
    public $name;
    public $password;
    public $email;

    protected $rules = [
        'name' => 'required|min:3',
        'email' => 'required|email|min:3|max:35',
        'password' => 'required|min:8|max:35',
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
