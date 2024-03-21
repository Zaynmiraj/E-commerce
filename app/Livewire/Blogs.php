<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Blog;

class Blogs extends Component
{
    public function render()
    {
        $data['pageTitle'] = 'Blogs';
        $data['blogs'] = Blog::where('status', 1)->get();
        return view('livewire.blogs', $data);
    }
}