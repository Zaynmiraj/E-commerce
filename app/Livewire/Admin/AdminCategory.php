<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Category;
use Livewire\WithFileUploads;

class AdminCategory extends Component
{

    public function delete($id){
        $category = Category::find($id);
        if($category->image){
             unlink('assets/image/category/' . $category->image);
        }
        $category->delete();
        return redirect()->route('categories')->with('success', 'Category deleted successfully');
    }

    public function render()
    {
        $data['pageTitle'] = 'All Categories';
        $data['categories'] = Category::all();
        return view('livewire.admin.admin-category', $data);
    }
}