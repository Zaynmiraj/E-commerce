<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Menu;
use App\Models\MenuItem;
use Livewire\WithFileUploads;
use Carbon\Carbon;
use Intervention\Image\Laravel\Facades\Image;

class Menus extends Component
{
    use WithFileUploads;


    public $name;
    public $status;
    public $description;
    public $section;


    public $names = [];
    public $url;
    public $menu_id;


    public function updated($inputField){
        $this->validateOnly($inputField,[
            'name' => 'required',
            'status' => 'required',
        ]);
    }


    public function store(){
        $menu = new Menu();
        $menu->name = $this->name;
        $menu->status = $this->status;
        $menu->description = $this->description;
        $menu->section = $this->section;
        $menu->save();
        return redirect()->route('menus')->with('menu-success','Menu created successfully');
    }

    public function updateStatus($id){
        $menu = Menu::find($id);
        $menu->status = $this->status;
        $menu->save();
        return redirect()->route('menus')->with('success','Menu status updated successfully');

    }

    public function delete($id){
        $menu = Menu::find($id);
        $menu->delete();
        return redirect()->route('menus')->with('success','Menu deleted successfully');
    }


    public function EditMenuItem(){   
        
       
    }


    public function render()
    {
        $data['pageTitle'] = 'Menus';
        $data['menus'] = Menu::all();
        return view('livewire.admin.menus', $data);
    }
}