<?php

namespace App\Http\Livewire;

use App\Models\droupDown;
use App\Models\item;
use Livewire\Component;

class GridView extends Component
{
    public $items;
    public $dropdownValues;
    public $orderId;

    public function render()
    {
        $this->dropdownValues = droupDown::all();
        $this->items = item::where('orderId', $this->orderId)->get();
        return view('livewire.grid-view');
    }
}
