<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Loading extends Component
{
    public function render()
    {
        return view('livewire.loading')->layout('layouts.theme');
    }

    public function save()
    {
        sleep(2);
    }
}
