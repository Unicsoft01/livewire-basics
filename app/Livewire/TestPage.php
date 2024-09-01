<?php

namespace App\Livewire;

use Livewire\Component;

class TestPage extends Component
{
    // this file replaces a controller to be used to render the view page to the dom
    public function render()
    {
        return view('livewire.test-page');
    }
}
