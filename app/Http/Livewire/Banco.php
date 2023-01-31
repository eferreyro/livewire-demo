<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Banco extends Component
{
    public $capital = 1000;

    protected $listeners = ['recibido' => 'saldoRecibido'];

    public function saldoRecibido()
    {
        $this->capital = 0;
    }

    public function render()
    {
        return view('livewire.banco')->layout('layouts.theme');
    }
}
