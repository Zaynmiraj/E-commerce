<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Menu;
use App\Models\MenuItem;
use App\Models\ShopDetails;
use Cart;

class Topper extends Component
{
    public function render()
    {
        $data['main'] = Menu::where('status', 1)->where('section', 'main')->first();
        $data['store'] = ShopDetails::first();
        $data['cartCount'] = Cart::count();
        return view('livewire.topper',$data);
    }
}