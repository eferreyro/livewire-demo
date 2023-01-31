<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;

class Forms extends Component
{

    use WithFileUploads;

    public $name, $email, $password, $photo;

    protected $rules = [
        'name' => 'required|max:5|min:3',
        'email' => 'required|email',
        'password' => 'required|min:3'
    ];
    protected    $messages = [
        'name.required' => 'El nombre es requerido',
        'name.min' => 'El nombre debe tener al menos 3 caracteres',
        'name.max' => 'El nombre debe tener máximo 5 caracteres',
        'email.required' => 'Ingresa el email',
        'email.email' => 'El email es inválido',
        'password.required' => 'Password requerido',
        'password.min' => 'El password debe tener al menos 3 caracteres',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }



    public function render()
    {
        return view('livewire.forms')->layout('layouts.theme');
    }


    public function Store()
    {
        $this->validate();


        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => bcrypt($this->password)
        ]);


        if (!empty($this->photo)) {
            // generar nombre unico
            $customFileName = uniqid() . '_.' . $this->photo->extension();
            $this->photo->storeAs('public/avatars', $customFileName);

            $user->photo = $customFileName;
            $user->save();
        }


        // feedback hacia el front
        $this->dispatchBrowserEvent('user-register', ['result' => 'Usuario registrado']);

        // reset de las propiedades
        $this->reset('name', 'email', 'password', 'photo');
    }
}
