<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use Illuminate\Support\Str;
use Intervention\Image\Laravel\Facades\Image;
use App\Models\Product;
use App\Models\Category;
use Livewire\WithFileUploads;
use Carbon\Carbon;

class AddProduct extends Component
{
    use WithFileUploads;
    public $product_name;
    public $product_slug;
    public $category;
    public $tags ;
    public $image;
    public $images = [];
    public $status;
    public $publish_date;
    public $regular_price;
    public $sale_price;
    public $enable_stock;
    public $stock_quantity;
    public $short_description;
    public $description;
    public $sku;
    public $meta_title;
    public $meta_description;

    public function Make(){
        $this->product_slug =Str::slug($this->product_name);
    }


    public function updated($inputField){
        $this->validateOnly($inputField,[
            'product_name' => 'required',
            'product_slug' => 'required',
            'sale_price' => 'required | numeric',
            'regular_price' => 'required | numeric',
            'images' => 'required',
            'status' => 'required',
            'category' => 'required',
        ]);
    }

    

    public function store() {

        $this->validate([
            'product_name' => 'required',
            'product_slug' => 'required',
            'sale_price' => 'required | numeric',
            'regular_price' => 'required | numeric',
            'images' => 'required',
            'status' => 'required',
            'category' => 'required',
        ]);
        $product = new Product();
        $product->product_name = $this->product_name;
        $product->product_slug = $this->product_slug;
        $product->status = $this->status;
        $product->category_id = $this->category;
        $product->short_description = $this->short_description;
        $product->description = $this->description;
        $product->product_id = '#'.rand(1000,400000);
        $product->sale_price = $this->sale_price;
        $product->regular_price = $this->regular_price;
        $product->stock_quantity = $this->stock_quantity;
        $product->stock = $this->enable_stock ? 'active' : 'inactive';
        $product->meta_tile = $this->meta_title;
        $product->meta_description = $this->meta_description;

        if($this->images) {
            $multiImage = '';
            foreach($this->images as $key => $img){
                $fileName = Carbon::now()->timestamp . $key . '.' . $img->extension();
                $imageSize = Image::read($img);
                $imageSize->resize(600,600);
                $imageSize->save(public_path('assets/image/product/'.$fileName));

                $multiImage = $multiImage .',' . $fileName;
               
            }
            $product->image = $fileName;
            $product->images = $multiImage;
            $product->save();
             return redirect()->route('products')->with('success', 'Product has been saved successfully');
        }

        
    }
    public function render()
    {
        $data['pageTitle'] = 'Add Product';
        $data['categories'] = Category::all();
        return view('livewire.admin.add-product', $data);
    }
}