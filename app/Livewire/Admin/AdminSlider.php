<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Slider;

class AdminSlider extends Component
{
    public $status;
    public $slider_id;

    public function SliderStatus($id){
        $slider = Slider::find($id);
        $slider->status = $this->status;
        $slider->save();
        return redirect()->route('sliders')->with('success', 'Slider status updated');
    }

    public function Delete($id){
        $slider = Slider::find($id);
        if($slider->image){
             unlink('assets/image/slider/' . $slider->image);
        }
        $slider->delete();
        return redirect()->route('sliders')->with('success', 'Slider has been deleted');
    }
    public function render()
    {
        $data['sliders'] = Slider::orderBy('created_at', 'ASC')->get();
        $data['pageTitle'] = 'Home slider';
        return view('livewire.admin.admin-slider',$data);
    }
}