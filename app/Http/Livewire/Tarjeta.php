<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Tarjeta extends Component
{
    public $saldo = 0;

    protected $listeners = ['asignar' => 'asignarSaldo'];

    public function asignarSaldo($saldo)
    {
        $this->saldo = $saldo;
        $this->emitTo('banco', 'recibido');
    }

    public function render()
    {
        return view('livewire.tarjeta');
    }
}
