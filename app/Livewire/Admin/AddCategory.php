<?php

namespace App\Livewire\Admin;
namespace App\Livewire\Admin;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use Carbon\Carbon;
use App\Models\Category;
use Intervention\Image\Laravel\Facades\Image;

class AddCategory extends Component
{
use WithFileUploads;
    public $name;
    public $slug;
    public $description;
    public $image;
    public $publish_date;
    public $status;
    public $meta_title;
    public $meta_description;


    public function generateSlug(){
        $this->slug = Str::slug($this->name);
    }

    public function Store(){
        $category = new Category();
        $category->user_id = auth()->user()->id;
        $category->name = $this->name;
        $category->slug = $this->slug;
        $category->description = $this->description;
        $category->page_title = $this->meta_title;
        $category->meta_description = $this->meta_description;
        $category->post_status = $this->status;

        $fileName = Carbon::now()->timestamp . '.' . $this->image->extension();
        $imageSize = Image::read($this->image);
        $imageSize->resize(800, 800);
        $imageSize->save(public_path('assets/image/category/'.$fileName));
        $category->image = $fileName;
        $category->save();
        return redirect()->route('categories')->with('success', 'Category has been created');

    }
    public function render()
    {
        return view('livewire.admin.add-category');
    }
}