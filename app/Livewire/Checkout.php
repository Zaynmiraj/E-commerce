<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Gateway;
use Cartalyst\Stripe\Stripe;
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

    public $email;
    public $address;
    public $phone;
    public $postal_code;
    public $country;
    public $state;
    public $lane1;
    public $lane2;
    public $city;


    public function check(){
       $this->payment;
    }


    public function makePayment(){

        

        if($this->payment == 'card'){

            $info = Gateway::where('status', 1)->where('slug', $this->payment)->first();
            $stripe =  Stripe::make($info->secret_key);
            
            try{
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
                            session()->flash('success', 'payment successful');
                            return redirect()->route('cart')->with('success', 'payment successful');
                        }else {
                            return redirect()->route('checkout')->with('success', 'Payment for purchase failed');
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


        }else{
            return redirect()->route('checkout')-with('success', 'Something went wrong');
        }

    }


    public function render()
    {
        $data['pageTitle'] = 'Checkout';
        $data['gateways'] = Gateway::where('status', 1)->get();
        return view('livewire.checkout', $data);
    }
}