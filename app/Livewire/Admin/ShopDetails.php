<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\ShopDetails as ShopDetail;
use Livewire\WithFileUploads;
use Carbon\Carbon;
use Intervention\Image\Laravel\Facades\Image;

class ShopDetails extends Component
{
    use withFileUploads;

    public $name;
    public $subtitle;
    public $description;
    public $email;
    public $phone;
    public $storeurl;
    public $logo;
    public $address;
    public $metatitle;
    public $metadescription;
    public $copyright;
    public $hasLogo;


    public function store(){

        $Hasstore = ShopDetail::where('user_id', auth()->user()->id)->first();
        if($Hasstore){


            $Hasstore->shop_name = $this->name;
            $Hasstore->sub_titles = $this->subtitle;
            $Hasstore->shop_description = $this->description;
            $Hasstore->shop_email = $this->email;
            $Hasstore->shop_phone = $this->phone;
            $Hasstore->shop_url = $this->storeurl;
            $Hasstore->shop_address = $this->address;
            $Hasstore->meta_title = $this->metatitle;
            $Hasstore->meta_description = $this->metadescription;
            $Hasstore->footer_copyright = $this->copyright;
            if($this->logo){
                unlink('assets/image/store/'.$Hasstore->shop_logo);
                $name = Carbon::now()->timestamp . '.' . $this->logo->extension();
                $file = Image::read($this->logo);
                $file->resize(400, 150);
                $file->save(public_path('assets/image/store/'.$name));
                $Hasstore->shop_logo = $name;
            }
            $Hasstore->save();
            return redirect()->route('shop-details')->with('success','Store Details Updated Successfully');

            
        }else{
            $store = new ShopDetail();
            $store->user_id = auth()->user()->id;
            $store->shop_name = $this->name;
            $store->sub_titles = $this->subtitle;
            $store->shop_description = $this->description;
            $store->shop_email = $this->email;
            $store->shop_phone = $this->phone;
            $store->shop_url = $this->storeurl;
            $store->shop_address = $this->address;
            $store->meta_title = $this->metatitle;
            $store->meta_description = $this->metadescription;
            $store->footer_copyright = $this->copyright;
            if($this->logo){
                $name = Carbon::now()->timestamp . '.' . $this->logo->extension();
                $file = Image::read($this->logo);
                $file->resize(100, 400);
                $file->save(public_path('assets/image/store/'.$name));
                $store->shop_logo = $name;
            }
            $store->save();
            return redirect()->route('shop-details')->with('success','Store Details Updated Successfully');
        }
    }

    public function boot(){
        $store = ShopDetail::where('user_id', auth()->user()->id)->first();
        if($store){
        $this->name = $store->shop_name;
        $this->subtitle = $store->sub_titles ;
        $this->description =  $store->shop_description ;
        $this->email = $store->shop_email;
        $this->phone =  $store->shop_phone ;
        $this->storeurl=$store->shop_url;
        $this->address= $store->shop_address ;
        $this->metatitle= $store->meta_title ;
        $this->metadescription =$store->meta_description ;
        $this->copyright = $store->footer_copyright;
        $this->hasLogo = $store->shop_logo;
        }
    }

    public function render()
    {
        $data['pageTitle'] = 'General settings';
        $datas = ShopDetail::where('user_id', auth()->user()->id)->first();
        return view('livewire.admin.shop-details', $data);
    }
}