<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Models\Category;
use App\Models\Slider;

class Home extends Component
{

    public function render()
    {
        $data['pageTitle'] = 'Home';
        $data['products'] = Product::latest()->get();
        $data['categories'] = Category::latest()->get();
        $data['sliders'] =  Slider::where('section_id', 1)->where('status', 1)->get();
        return view('livewire.home', $data);
    }
}