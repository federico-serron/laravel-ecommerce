<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AddCartItemColor extends Component
{

    public $colors, $product;

    public $color_id = "";
    public $qty = 1;
    public $inStock = 0;
    

    public function mount(){
        $this->colors = $this->product->colors;
    }

    public function render()
    {
        return view('livewire.add-cart-item-color');
    }

    public function updatedColorId($value){
        $this->inStock = $this->product->colors->find($value)->pivot->quantity;
    }
}
