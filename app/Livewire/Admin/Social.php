<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Social as Links;
use Livewire\WithFileUploads;
use Intervention\Image\Laravel\Facades\Image;
use Carbon\Carbon;

class Social extends Component
{
    use WithFileUploads;
    public $name;
    public $url;
    public $status;
    public $icon;

    public function store(){
        $link = new Links();
        $link->user_id = auth()->user()->id;
        $link->name = $this->name;
        $link->url = $this->url;
        $link->status = $this->status;
        if($this->icon){
            $name = Carbon::now()->timestamp . '.' . $this->icon->extension();
            $file = Image::read($this->icon);
            $file->resize(400,400);
            $file->save(public_path('assets/image/social/'.$name));
            $link->icon = $name;
        }
        $link->save();

        return redirect()->route('social-links')->with('success', 'New link added successfully');

    }

    public function updateStatus($id){
        $link = Links::find($id);
        $link->status = $this->status;
        $link->save();
        return redirect()->route('social-links')->with('success', 'The link has been updated successfully');
    }

    public function delete($id){
        $link = Links::find($id);
        $link->delete();
        return redirect()->route('social-links')->with('success', 'The links deleted successfully');
    }
    public function render()
    {
        $data['pageTitle'] = 'Social Links';
        $data['links'] = Links::all();
        return view('livewire.admin.social', $data);
    }
}