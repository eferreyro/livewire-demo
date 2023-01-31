<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Events extends Component
{
    public function render()
    {
        return view('livewire.events')->layout('layouts.theme');
    }


    protected $listeners = ['destroy' => 'destroy'];

    public function destroy($id)
    {
        // eliminando registro

        //event
        //$this->emit('destroy-result', 'Registro eliminado');
        $this->dispatchBrowserEvent('destroy-result', ['resultado' => 'Eliminacion exitosa', 'otro' => 'otro resultado']);
    }
}
