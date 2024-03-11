<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Slider;

class AdminSlider extends Component
{
    public function render()
    {
        $data['sliders'] = Slider::orderBy('created_at', 'ASC')->get();
        $data['pageTitle'] = 'Home slider';
        return view('livewire.admin.admin-slider',$data);
    }
}