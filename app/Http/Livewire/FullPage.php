<?php

namespace App\Http\Livewire;

use Livewire\Component;

class FullPage extends Component
{
    public function render()
    {
        //
        // return view('livewire.fullpage')->extends('layouts.theme')->section('content');

        // $slot
        return view('livewire.fullpage')->layout('layouts.theme');
    }
}
