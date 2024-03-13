<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Sponsor;
use Livewire\WithFileUploads;
use Carbon\Carbon;
use Intervention\Image\Laravel\Facades\Image;

class Sponsers extends Component
{
    use WithFileUploads;

    public $name;
    public $description;
    public $status;
    public $url;
    public $image;

    public $id;

    public function store(){
        $sponsor = new Sponsor();
        $sponsor->title = $this->name;
        $sponsor->description = $this->description;
        $sponsor->status = $this->status;
        $sponsor->url = $this->url;
        if($this->image){
            $fileName = Carbon::now()->timestamp .'.'. $this->image->extension();
            $ImageSize = Image::read($this->image);
            $ImageSize->resize(800, 800);
            $ImageSize->save(public_path('assets/image/sponsor/'.$fileName));
            $sponsor->image = $fileName;
        }
        $sponsor->save();
        return redirect()->route('sponsors')->with('success', 'Sponsor added successfully');
    }


    public function updateStatus($id){
        $sponsor = Sponsor::find($id);
        $sponsor->status = $this->status;
        $sponsor->save();
        return redirect()->route('sponsors')->with('success', 'Sponsor status updated successfully');

    }
    public function render()
    {
        $data['pageTitle'] = 'Sponsors List';
        $data['sponsors'] =  Sponsor::all();
        return view('livewire.admin.sponsers', $data);
    }
}