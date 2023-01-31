<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Inline extends Component
{
    public function render()
    {
        return view('livewire.inline')->layout('layouts.theme');
    }
}
