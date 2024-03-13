<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use Livewire\WithFileUploads;
use Intervention\Image\Laravel\Facades\Image;
use Carbon\Carbon;
use App\Models\Slider;
use App\Models\Product;

class CreateSlider extends Component
{
    use WithFileUploads;
    public $title;
    public $sub_title;
    public $images;
    public $slider_id;
    public $section_id;
    public $product_id;

    public function updated($inputField){
        $this->validateOnly($inputField,[
            'title' => 'required',
            'sub_title' => 'required',
            'images' => 'required',
            'product_id' => 'required',
        ]);
    }

    public function store(){

        $this->validate([
            'title' => 'required',
            'sub_title' => 'required',
            'images' => 'required',
            'product_id' => 'required',
        ]);

        $product = Product::find($this->product_id);

        $slider = new Slider();
        $slider->user_id = auth()->user()->id;
        $slider->title = $this->title;
        $slider->subtitle = $this->sub_title;;
        $slider->section_id = $this->section_id;
        $slider->slider_id = $this->slider_id;
        $fileName = Carbon::now()->timestamp . '.' . $this->images->extension();
        $imageSize = Image::read($this->images);
        $imageSize->resize(1000, 450);
        $imageSize->save(public_path('assets/image/slider/'.$fileName));
        $slider->image = $fileName;
        $slider->status = 1;
        $slider->url = "route(('/', ['slug' => $product->slug]))";
        $slider->save();
        return redirect()->route('sliders')->with('success','Slider has been created successfully');

        
        
    }
    public function render()
    {
        $data['pageTitle'] = 'Create Slider';
        $data['products'] = Product::orderBy('created_at', 'desc')->get();
        return view('livewire.admin.create-slider', $data);
    }
}