<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Gateway;
use App\Models\Orders;
use App\Models\OrderItems;
use App\Models\Transaction;
use App\Mail\OrderMail;
use Cartalyst\Stripe\Stripe;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use Cart;

class Checkout extends Component
{
    public $payment;
    public $name;
    public $number;
    public $month;
    public $year;
    public $cvv;


    //addresss 
    public $fname;
    public $lname;
    public $email;
    public $address;
    public $phone;
    public $postal_code;
    public $country;
    public $state;
    public $lane_1;
    public $lane_2;
    public $city;

        public function updated($fields)
    {
        $this->validateOnly($fields, [
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required | email',
            'phone' => 'required ',
            'city' => 'required',
            'state' => 'required',
            'lane_1' => 'required',
            'lane_2' => 'required',
            'postal_code' => 'required',
            'country' => 'required',
            'payment' => 'required',
        ]);
    }

    public function check(){
       $this->payment;
    }


    public function makePayment(){


        $this->validate([
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required | email',
            'phone' => 'required ',
            'city' => 'required',
            'state' => 'required',
            'lane_1' => 'required',
            'lane_2' => 'required',
            'postal_code' => 'required',
            'country' => 'required',
            'payment' => 'required',
        ]);

    try{

        if($this->payment == 'card'){

            $info = Gateway::where('status', 1)->where('slug', $this->payment)->first();
            $stripe =  Stripe::make($info->secret_key);
        
                $token = $stripe->tokens()->create([
                    'card' => [
                        'number' => $this->number,
                        'exp_month' => $this->month,
                        'exp_year' => $this->year,
                        'cvc' => $this->cvv,
                    ]
                    ]);


                    if (!isset($token['id'])) {
                        session()->flash('error', 'Stripe token was not created');
                    }

                    

                 if (!isset($token['id'])) {
                        session()->flash('error', 'Stripe token was not created');
                    }

                    $customer = $stripe->customers()->create([
                        'name' => 'Customer',
                        'email' =>'zayn.miraje@gmail.com',
                        'phone' => +8801728593265,
                        'address' => [
                            'line1' => 'hekdfdjhfdjsf',
                            'postal_code' => '744755',
                        ],
                        'source' => $token['id']
                    ]);
                    
                    $charge = $stripe->charges()->create([
                        'customer' => $customer['id'],
                        'currency' => 'USD',
                        'amount'   => Cart::instance('cart')->total(),
                        // 'description' => 'Payment for order no ' . ' ' . $order->id,
                    ]);
                        

                    if ($charge['status'] == 'succeeded') {
                           $this->placeOrder();
                           DB::commit();
                        }else {
                            return redirect()->route('checkout')->with('success', 'Payment for purchase failed');
                        }



        }else if($this->payment == 'paypal'){
            dd($this->payment);
        }else if($this->payment == 'cash'){
            $this->placeOrder();
            DB::commit();
        }
        else{
            return redirect()->route('checkout')-with('success', 'Something went wrong');
        }
    
    }catch(Exception $e) {
                     return redirect()->route('checkout')->with('success','Transaction Failed');
                } catch(\Cartalyst\Stripe\Exception\CardErrorException $e) {
                    return redirect()->route('checkout')->with('success', 'Please provide a valid card'); 
                } catch(\Cartalyst\Stripe\Exception\MissingParameterException $e) {
                    return redirect()->route('checkout')->with('success', 'Please fill in the missing parameter');
                }catch(\Cartalyst\Stripe\Exception\UnauthorizedException $e) {
                     return redirect()->route('checkout')->with('success', 'Please contact with landlord / agent for payment issue');
                }catch(\Cartalyst\Stripe\Exception\NotFoundException $e) {
                    return redirect()->route('checkout')->with('success', 'Nothing found');
                }catch(\Cartalyst\Stripe\Exception\InvalidRequestException $e) {
                    return redirect()->route('checkout')->with('success', 'Something went wrong');
                }catch(\Symfony\Component\Mailer\Exception\TransportException $e) {
                    return redirect()->route('checkout')->with('success', 'Please contact with landlord /agent for payment issue');
                }

    }


    public function placeOrder(){
       $order = new Orders();
       $order->store_id =  1;
       $order->user_id = 1;
       $order->subtotal = Cart::instance('cart')->subtotal();
       $order->discount = '0.00';
       $order->tax = Cart::instance('cart')->tax();
       $order->total = Cart::instance('cart')->total();
       $order->first_name = $this->fname;
       $order->last_name = $this->lname;
       $order->email = $this->email;
       $order->phone = $this->phone;
       $order->lane_1 = $this->lane_1;
       $order->lane_2 = $this->lane_2;
       $order->city = $this->city;
       $order->state = $this->state;
       $order->country = $this->country;
       $order->zip_code = $this->postal_code;
       $order->tracking_number = Str::random(8);
       $order->save();

       $this->orderItems($order);
       
    }

    public function orderItems($order){
        foreach(Cart::instance('cart')->content() as $item){
            $items = new OrderItems();
            $items->product_id = $item->id;
            $items->orders_id = $order->id;
            $items->quantity = $item->qty;
            $items->price = $item->price;
            $items->total_price = $item->total;
            $items->save();
            
        }
        $this->transaction($order);
        Cart::instance('cart')->destroy();
        $this->email($order);
    }


    public function transaction($order){
        $trans = new Transaction();
        $trans->user_id = 1;
        $trans->order_id = $order->id;
        $trans->payment = $this->payment;
        $trans->status = $this->payment == 'paypal' ||  $this->payment == 'card' ? "approved" : "pending";
        $trans->save();
        return redirect()->route('thank-you',['id' => $order->tracking_number])->with('success', 'Order placed successfully');
    }

    public function email($order){
        Mail::to($order->email)->send(new OrderMail($order));
        Mail::to('zayn.miraj@gmail.com')->send(new OrderMail($order));
    }


    public function render()
    {
        $data['pageTitle'] = 'Checkout';
        $data['gateways'] = Gateway::where('status', 1)->get();
        return view('livewire.checkout', $data);
    }
}