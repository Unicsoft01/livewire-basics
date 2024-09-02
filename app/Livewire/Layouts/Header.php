<?php

namespace App\Livewire\Layouts;

use Livewire\Component;

class Header extends Component
{
    public string $header = 'Welcome dear';

    public function render()
    {
        return view('layouts.header');
    }
}
