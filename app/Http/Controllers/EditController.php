<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Intervention\Image\Laravel\Facades\Image;
use App\Models\Category;
use App\Models\Sponsor;
use App\Models\Slider;
use App\Models\Product;

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
        if($category->image){
             unlink('assets/image/category/' . $category->image);
        }
        if($request->image){
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
        if($sponsor->image){
             unlink('assets/image/sponsor/' . $sponsor->image);
        }
        if($request->image){
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

    }







}