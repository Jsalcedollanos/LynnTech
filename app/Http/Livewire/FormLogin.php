<?php

namespace App\Http\Livewire;

use Livewire\Component;

class FormLogin extends Component
{
    public $password;
    public $email;
    protected $rules = [
        'email' => 'required|email|min:3|max:35',
        'password' => 'required|min:8',
        
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
