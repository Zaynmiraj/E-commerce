<?php

namespace App\Livewire\Admin;
use App\Models\Product;

use Livewire\Component;

class AdminProduct extends Component
{

    public function delete($id){
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('products')->with('success', 'Product deleted successfully');
    }
    public function render()
    {
        $data['pageTitle'] = 'All Products';
        $data['products'] = Product::latest()->get();
        return view('livewire.admin.admin-product', $data);
    }
}