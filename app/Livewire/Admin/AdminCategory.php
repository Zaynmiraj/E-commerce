<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Category;

class AdminCategory extends Component
{
    public function render()
    {
        $data['pageTitle'] = 'All Categories';
        $data['categories'] = Category::all();
        return view('livewire.admin.admin-category', $data);
    }
}