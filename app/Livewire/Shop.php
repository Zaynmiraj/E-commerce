<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Product;
use App\Models\Category;
use Cart;

class Shop extends Component
{
    use WithPagination;
    public $orderBy = 'default';
    public $pagePer =9;
    public $min_value = 0;
    public $max_value = 2000;
    public $range;


    public function perPage($page){
        $this->pagePer = $page;
    }

    public function orderBys($order){
        $this->orderBy = $order;
    }

    public function addCart($product_id, $product_name , $product_price){
        Cart::instance('cart')->add($product_id, $product_name,1, $product_price)->associate("App\Models\Product");
        return redirect()->back()->with('success', "Added Product to Cart successfully");
    }
    public function wishlist($id){
        $product = Product::find($id);
        Cart::instance('wishlist')->add($product->id, $product->product_name, 1, $product->sale_price)->associate("App\Models\Product");
         return redirect()->back()->with('success', "Added Product to Cart successfully");
    
    }


    public function render()
    {
        if($this->orderBy == 'default'){
            $data['products'] = Product::whereBetween('sale_price', [$this->min_value, $this->max_value])->orderBy('created_at', 'desc')->paginate($this->pagePer);
        }else if($this->orderBy == 'latest'){
            $data['products'] = Product::whereBetween('sale_price', [$this->min_value, $this->max_value])->latest()->paginate($this->pagePer);
        }else if($this->orderBy == 'popularity'){
            $data['products'] = Product::whereBetween('sale_price', [$this->min_value, $this->max_value])->orderBy('created_at', 'asc')->paginate($this->pagePer);
        }else{
            $data['products'] = Product::whereBetween('sale_price', [$this->min_value, $this->max_value])->paginate($this->pagePer);
        }

        $data['categories'] = Category::latest()->get();
        return view('livewire.shop' , $data);
    }
}