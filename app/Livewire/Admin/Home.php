<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Slider;

class Home extends Component
{
    public function render()
    {
        return view('livewire.admin.home', $data);
    }
}