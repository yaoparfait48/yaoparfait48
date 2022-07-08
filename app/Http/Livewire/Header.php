<?php

namespace App\Http\Livewire;

use Livewire\Component;
use PDF;

class Header extends Component
{
    public function mount(){
    }

    public function render()
    {
        return view('livewire.header');
    }

    public function downloadCV(){
        return PDF::stream(public_path("docs/cv.pdf"),array('Attachment'=>0));
    }
}
