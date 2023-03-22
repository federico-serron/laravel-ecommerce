<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AddCartItem extends Component
{
    public $qty = 1;
    public $product, $inStock;

    public function mount(){
        $this->inStock = $this->product->quantity;
    }

    public function decrease(){
            $this->qty = $this->qty -1 ;
    }

    public function increase(){
        $this->qty = $this->qty + 1;
    }

    public function render()
    {
        return view('livewire.add-cart-item');
    }
}
