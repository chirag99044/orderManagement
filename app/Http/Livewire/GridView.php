<?php

namespace App\Http\Livewire;

use App\Models\item;
use Livewire\Component;

class GridView extends Component
{
    public $items;

    public function render()
    {
        $this->items = item::all();
        return view('livewire.grid-view');
    }
}
