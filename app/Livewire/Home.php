<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Models\Category;

class Home extends Component
{

    public function render()
    {
        $data['pageTitle'] = 'Home';
        $data['products'] = Product::latest()->get();
        $data['categories'] = Category::latest()->get();
        return view('livewire.home', $data);
    }
}