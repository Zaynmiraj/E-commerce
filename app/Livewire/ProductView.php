<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Product;
use Cart;

class ProductView extends Component
{
    public $slug;
    public $qty = 1;

    public function mount($slug){
        $this->slug = $slug;
    }

    public function addCart($product){
        Cart::instance('cart')->add($product['id'], $product['product_name'], $this->qty , $product['sale_price']);
    }

    public function plus(){
        $this->qty += 1;
    }
     public function minus(){
        $this->qty -= 1;
    }
    public function render()
    {
        $data['products'] = Product::where('product_slug', $this->slug)->first();
        return view('livewire.product-view',$data);
    }
}