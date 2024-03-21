<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Gateway;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Intervention\Image\Laravel\Facades\Image;


class Gateways extends Component
{
    use WithFileUploads;
    public $name;
    public $slug;
    public $secret ;
    public $public;
    public $status;
    public $mode;
    public $icon;

    public function makeSlug(){
        $this->slug = Str::slug($this->name);
    }

    public function updated($inputField){
        $this->validateOnly($inputField,[
            'name' => 'required',
            'slug' => 'required',
            'secret' => 'required',
            'public' => 'required',
            'status' => 'required',
            'mode' => 'required',
            'icon' => 'required',
        ]);
    }

    public function store(){
        $gateway = new Gateway();
        $gateway->user_id = auth()->user()->id;
        $gateway->name = $this->name;
        $gateway->slug = $this->slug;
        $gateway->status = $this->status;
        $gateway->secret_key = $this->secret;
        $gateway->public_key = $this->public;
        $gateway->mode = $this->mode;
        if($this->icon){
            $fileName = Carbon::now()->timestamp . '.' . $this->icon->extension();
            $fileSize = Image::read($this->icon);
            $fileSize->resize(400,400);
            $fileSize->save(public_path('assets/image/gateway/'.$fileName));
            $gateway->icon = $fileName;
        }
        $gateway->save();
        return redirect()->route('gateways')->with('success', 'Payment method added successfully');
    }
    public function updateStatus($id){
        $gateway = Gateway::find($id);

        if($gateway->slug === 'paypal' && $gateway->public_key === null && $gateway->secret_key === null){
            return redirect()->route('gateways')->with('warning', 'You cannot update paypal secret key and public key are null');
        }else if($gateway->slug == 'stripe' && $gateway->secret_key == null){
             return redirect()->route('gateways')->with('warning', 'You cannot update stripe secret key is null');
        }else{
            $gateway->status = $this->status;
            $gateway->save();
            return redirect()->route('gateways')->with('success', 'Payment status updated successfully');
        }

    }
    public function delete($id){
        $gateway = Gateway::find($id);
        $gateway->delete();
        return redirect()->route('gateways')->with('success', 'Payment method deleted successfully');
    }
    public function render()
    {
        $data['pageTitle'] = 'Payment Methods';
        $data['gateways'] = Gateway::all();
        return view('livewire.admin.gateways', $data);
    }
}