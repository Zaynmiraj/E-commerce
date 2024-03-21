<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use Illuminate\Support\Str;
use App\Models\Blog;
use Livewire\WithFileUploads;
use Carbon\Carbon;
use Intervention\Image\Laravel\Facades\Image;

class AdminBlog extends Component
{
    use WithFileUploads;

    public $title ;
    public $description ;
    public $slug;
    public $status;
    public $link;
    public $image;

    public function makeSlug(){
        $this->slug = Str::slug($this->title);
    }

    public function store(){
        
        $blog = new Blog();
        $blog->title = $this->title;
        $blog->slug = $this->slug;
        $blog->user_id = auth()->user()->id;
        $blog->description = $this->description;
        $blog->btn_link = $this->link;
        $blog->status = $this->status;
        if($this->image){
            $name = Carbon::now()->timestamp . '.' . $this->image->extension();
            $file = Image::read($this->image);
            $file->resize(1200, 800);
            $file->save(public_path('assets/image/blog/' . $name));
            $blog->image = $name;
        }
        $blog->save();
        return redirect()->route('admin-blog')->with('success', 'New blog written successfully');
    }

    public function updateStatus($id){
        $blog = Blog::find($id);
        $blog->status = $this->status;
        $blog->save();
        return redirect()->route('admin-blog')->with('success', 'Blog status updated successfully');
    }


    public function render()
    {
        $data['pageTitle'] = 'Blogs';
        $data['blogs'] = Blog::where('user_id', auth()->user()->id)->get();
        return view('livewire.admin.admin-blog', $data);
    }
}