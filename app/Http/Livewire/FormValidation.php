<?php

namespace App\Http\Livewire;

use Livewire\Component;
// use Illuminate\Http\Request;

class FormValidation extends Component
{

    public $name, $birth, $city;

    public function render()
    {
        return view('livewire.form-validation');
    }

    public function loginForm()
    {
        $validateData = $this->validate([
            'name'=>'required',
            'birth'=>'required',
            'city'=>'required'
        ]);
    }
}
