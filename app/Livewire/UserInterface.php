<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Models\Category;
use App\Models\Slider;
use App\Models\Banner;
use App\Models\Sponsor;
use App\Models\Menu;
use App\Models\ShopDetails;
use App\Models\Gateway;
use App\Models\MenuItem;
use App\Models\Social;
use Illuminate\Support\Facades\Redirect;
use Livewire\Attributes\Session;

use Cart;

class UserInterface extends Component
{
 
    public function addCart($product_id, $product_name , $product_price){
        Cart::instance('cart')->add($product_id, $product_name,1, $product_price)->associate("App\Models\Product");
        return redirect()->back()->with('success', "Added Product to Cart successfully");
    }
    public function wishlist($id){
        $product = Product::find($id);
        Cart::instance('wishlist')->add($product->id, $product->product_name, 1, $product->sale_price)->associate("App\Models\Product");
         return redirect()->back()->with('success', "Added Product to Cart successfully");
    
    }
    public function render()
    {
        $data['pageTitle'] = 'Home';
        $data['products'] = Product::latest()->take(8)->get();
        $data['categories'] = Category::latest()->get();
        $data['sliders'] =  Slider::where('section_id', 1)->where('status', 1)->get();
        $data['mainBanners'] = Banner::where('status', 1)->where('section' , 1)->limit(2)->get();
        $data['sponsors'] = Sponsor::all();
        $data['stores'] = ShopDetails::all();
        $data['menu'] = Menu::all();
        $data['menuItems'] = Menu::all();
        $data['social'] = Social::all();
        $data['gateways'] = Gateway::all();
        $data['latests'] = Product::inRandomOrder()->limit(8)->get();
        return view('livewire.user-interface', $data);
    }
}