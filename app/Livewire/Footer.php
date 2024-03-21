<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\ShopDetails;
use App\Models\Social;
use App\Models\Gateway;
use App\Models\Menu;

class Footer extends Component
{
    public function render()
    {    $data['store'] = ShopDetails::first();
         $data['social'] = Social::all();
         $data['gateways'] = Gateway::all();
         $data['footer'] = Menu::where('status', 1)->where('section', 'footer')->first();
         $data['myaccount'] = Menu::where('status', 1)->where('section', 'account')->first();
        return view('livewire.footer', $data);
    }
}