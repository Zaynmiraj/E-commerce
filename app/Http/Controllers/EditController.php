<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Intervention\Image\Laravel\Facades\Image;
use App\Models\Category;
use App\Models\Sponsor;
use App\Models\Slider;
use App\Models\Product;
use App\Models\Banner;
use App\Models\Gateway;
use App\Models\MenuItem;
use App\Models\Menu;
use App\Models\Blog;
use App\Models\Social as Link;
use App\Mail\OrderMail;
use Illuminate\Support\Facades\Mail;

class EditController extends Controller
{


    //Category section
    //Author ZaYn Miraj


    public function EditCategory($id){
        $data = Category::find($id);
        return response()->json($data);
    }
    public function UpdateCategory(Request $request){
        $category = Category::find($request->id);
        $category->name = $request->name;
        $category->slug = $request->slug;
        $category->description = $request->description;
        $category->post_status = $request->status;
        
        if($request->image){
            if($category->image){
             unlink('assets/image/category/' . $category->image);
        }
        $fileName = Carbon::now().'.'. $request->image->extension();
        $imageSize = Image::read($request->image);
        $imageSize->resize(800, 800);
        $imageSize->save(public_path('assets/image/category/'.$fileName));
        $category->image = $fileName;
        }
        $category->save();
        return redirect()->route('categories')->with('success','Category updated successfully');
    }


    //Sponsor section 
    //Author : Zayn Miraj

    public function EditSponsor($id){
        $sponsor = Sponsor::find($id);
        return response()->json($sponsor);
    }

    public function UpdateSponsor(Request $request){

        $sponsor = Sponsor::find($request->id);
        $sponsor->title = $request->name;
        $sponsor->description = $request->description;
        $sponsor->url  = $request->url;
        $sponsor->status = $request->status;
        if($request->image){
            if($sponsor->image){
             unlink('assets/image/sponsor/' . $sponsor->image);
        }
            $fileName = Carbon::now()->timestamp . '.' .$request->image->extension();
            $imageSize = Image::read($request->image);
            $imageSize->resize(800, 800);
            $imageSize->save(public_path('assets/image/sponsor/'.$fileName));
            $sponsor->image = $fileName;
        }
        $sponsor->save();
        return redirect()->route('sponsors')->with('success', 'Sponsor has been updated successfully');

    }

    //Slider section 
    //Author ZaYn Miraj

    public function EditSlider($id){
        $data['slider'] = Slider::find($id);
        $data['product'] = Product::all();
        
        return response()->json($data);
    }


    public function UpdateSlider(Request $request){

        $slider = Slider::find($request->id);
        $slider->title = $request->title;
        $slider->subtitle = $request->subtitle;
        $slider->description = $request->description;
        $slider->status = $request->status;
        $slider->section_id = $request->section_id;
        $product = Product::find($request->url);
        $slider->url = "route('', [product_id = $product->id)";

        if($request->image) {
            if($slider->image){
            unlink('assets/image/slider/'.$slider->image);
            }
            $fileName = Carbon::now()->timestamp . '.' . $request->image->extension();
            $fileSize = Image::read($request->image);
            $fileSize->resize(1200, 800);
            $fileSize->save(public_path('assets/image/slider/'.$fileName));
            $slider->image = $fileName;
        }

        $slider->save();
        return redirect()->route('sliders')->with('success', 'Slider has been updated successfully');

    }


    //Author Miraj;
    // update banner 

    public function EditBanner($id){

        $banner = Banner::find($id);
        return response()->json($banner);

    }

    public function UpdateBanner(Request $request){
        $banner = Banner::find($request->id);
        $banner->title = $request->title;
        $banner->subtitle = $request->subtitle;
        $banner->url = $request->url;
        $banner->status = $request->status;
        if($request->image){
            if($banner->image){
            unlink('assets/image/banner/'.$banner->image);
            }
            $fileName = Carbon::now()->timestamp . '.' . $request->image->extension();
            $fileSize = Image::read($request->image);
            $fileSize->resize(800,600);
            $fileSize->save(public_path('assets/image/banner/'.$fileName));
            $banner->image = $fileName;
        }
        $banner->save();

        return redirect()->route('banners')->with('success', 'Banner has been updated successfully');
    }


    // Payment Methods

    public function EditGateway($id){
        $gateway = Gateway::find($id);

        return response()->json($gateway);
    }

    public function UpdateGateway(Request $request){

        $gateway = Gateway::find($request->id);
        $gateway->name = $request->name;

        if($gateway->slug == 'paypal'  && $request->secret === null && $request->public === null && $request->status){
            return redirect()->route('gateways')->with('warning','You cannot update paypal key is null');
        }else if($gateway->slug == 'stripe' && $request->secret === null  && $request->status){
              return redirect()->route('gateways')->with('warning','You cannot update stripe key is null');
        }
        $gateway->secret_key = $request->secret;
        $gateway->public_key = $request->public;
        $gateway->status = $request->status;
        $gateway->mode = $request->mode;
        if($request->icon){
            if($gateway->icon){
            unlink('assets/image/gateway/'.$gateway->icon);
            }
            $fileName = Carbon::now()->timestamp . '.' . $request->icon->extension();
            $file = Image::read($request->icon);
            $file->resize(400, 400);
            $file->save(public_path('assets/image/gateway/'.$fileName));
            $gateway->icon = $fileName;
        }
        $gateway->save();
        return redirect()->route('gateways')->with('success','Payment method updated successfully');
        
    }


    public function EditMenu($id){
        $menu = Menu::find($id);
        return response()->json($menu);

    }

    public function UpdateMenu(Request $request){
        $menu = Menu::find($request->id);
        $menu->name = $request->name;
        $menu->description = $request->description;
        $menu->status = $request->status;
        $menu->section = $request->section;
        $menu->save();
        return redirect()->route('menus')->with('success','Menu updated successfully');
    }


    //add menu items 

    public function addMenuItems(Request $request){
        $menuitem = [];
        if($request->names){
            
            foreach($request->names as $key => $name){

                $menuitem[] = [
                    'menu_id' => $request->menu_id,
                    'name' => $request->names[$key],
                    'slug' => $request->url[$key],
                ];

            }       
          
        }
        MenuItem::insert($menuitem);
        return redirect()->route('menus')->with('success','Menu item addded successfully');
        
    }

    public function EditMenuItem($id){
        $item = MenuItem::where('menu_id',$id)->get();
        return response()->json($item);
    }

    public function UpdateMenuItem(Request $request){
        $menu = MenuItem::where('menu_id',$request->id)->get();
        foreach($menu as $key => $item){
            $item->name = $request->names[$key];
            $item->slug = $request->url[$key];
            $item->save();

            return redirect()->route('menus')->with('success', 'Menu item updated successfully');
            
        }
    }


    public function TestMail(Request $request){
        $user = auth()->user();

        Mail::to('zayn.miraj@gmail.com')->send(new OrderMail($user));
        
    }



    // Social links 


    public function EditLink($id){
        $link = Link::find($id);
        return response()->json($link);
    }

    public function UpdateLink(Request $request){
        $link = Link::find($request->id);
        $link->name = $request->name;
        $link->url = $request->url;
        $link->status = $request->status;
        if($request->icon){
            if($link->icon){
            unlink('assets/image/social/'.$link->icon);
            }
            $name = Carbon::now()->timestamp . '.' . $request->icon->extension();
            $file = Image::read($request->icon);
            $file->resize(400,400);
            $file->save(public_path('assets/image/social/'.$name));
            $link->icon = $name;
        }
        $link->save();
        return redirect()->route('social-links')->with('success', 'Link updated successfully');
    }



    public function EditBlog($id){
        $blog = Blog::find($id);

        return response()->json($blog);
    }

    public function UpdateBlog(Request $request){
        $blog = Blog::find($request->id);
        $blog->title = $request->title;
        $blog->slug = $request->slug;
        $blog->user_id = auth()->user()->id;
        $blog->description = $request->description;
        $blog->btn_link = $request->link;
        $blog->status = $request->status;
        if($request->image){
            if($blog->image){
                unlink('assets/image/blog/' . $blog->image);
            }
            $name = Carbon::now()->timestamp . '.' . $request->image->extension();
            $file = Image::read($request->image);
            $file->resize(1200, 800);
            $file->save(public_path('assets/image/blog/' . $name));
            $blog->image = $name;
        }
        $blog->save();
        return redirect()->route('admin-blog')->with('success', 'The blog updated successfully');
    }







}