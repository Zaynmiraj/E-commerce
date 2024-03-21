<?php

namespace App\Livewire;

use Livewire\Component;
use Cart as NewCart;

class Cart extends Component
{
    public function RemoveCart($rowId){
        NewCart::instance('cart')->remove($rowId);
       return redirect()->route('cart')->with('success', 'Cart item deleted successfully');
    }

    public function Increasd($rowId){
        $product = NewCart::instance('cart')->get($rowId);
        $qty = $product->qty+1;
        NewCart::instance('cart')->update($rowId, $qty);
    }
    public function Decreased($rowId){
        $product = NewCart::instance('cart')->get($rowId);
        $qty = $product->qty-1;
        NewCart::instance('cart')->update($rowId, $qty);
    }
    public function render()
    {
        return view('livewire.cart');
    }
}