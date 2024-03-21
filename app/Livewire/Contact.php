<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\ShopDetails;

class Contact extends Component
{
    public function render()
    {   $data['pageTitle'] = 'Contact Us';
        $data['store'] = ShopDetails::first();
        return view('livewire.contact', $data);
    }
}