<?php

namespace App\Http\Livewire;

use Livewire\Component;

use function Termwind\render;

class TaxPopup extends Component
{
    public $isOpen = false;

    public function openPopup()
    {
        $this->isOpen = true;  
    }

    public function closePopup()
    {
        $this->isOpen = false;
    }
    public function render()
    {
        return view('livewire.tax-popup');
    }
}
