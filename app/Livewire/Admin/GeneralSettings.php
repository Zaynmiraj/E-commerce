<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\ShopDetails;

class GeneralSettings extends Component
{
    public $tax_amount ;
    public $copyright ;
    public function storeTax(){
        $shop = ShopDetails::where('user_id', auth()->user()->id)->first();
        $shop->tax = $this->tax_amount;
        $shop->save();
        return redirect()->route('general-setting')->with('success', 'Tax updated successfully');
    }

    public function AddCopyright(){
        $shop = ShopDetails::where('user_id', auth()->user()->id)->first();
        $shop->footer_copyright = $this->copyright;
        $shop->save();
        return redirect()->route('general-setting')->with('success', 'Footer copyright updated successfully');
    }

    public function boot(){
        $this->tax_amount = auth()->user()->store->tax;
        $this->copyright = auth()->user()->store->footer_copyright;
    }
    public function render()
    {
        return view('livewire.admin.general-settings');
    }
}