<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Banner;
use Livewire\WithFileUploads;
use Carbon\Carbon;
use Intervention\Image\Laravel\Facades\Image;

class AdminBanner extends Component
{
    use WithFileUploads;
    public $title;
    public $subtitle;
    public $section;
    public $url;
    public $image;

    public function store(){

        $banner = new Banner();
        $banner->user_id = auth()->user()->id;
        $banner->title = $this->title;
        $banner->subtitle = $this->subtitle;
        $banner->status = 1;
        $banner->url = $this->url;
        $banner->section = $this->section;
        $fileName = Carbon::now()->timestamp . '.' . $this->image->extension();
        $imageSize = Image::read($this->image);
        $imageSize->resize(800, 800);
        $imageSize->save(public_path('assets/image/banner/'.$fileName));
        $banner->image = $fileName;
        $banner->save();

        return redirect()->route('banners')->with('success', 'Banner added successfully');

        
    }

    public function render()
    {
        $data['pageTitle'] = "Banner";
        $data['banners'] = Banner::all();
        return view('livewire.admin.admin-banner', $data);
    }
}