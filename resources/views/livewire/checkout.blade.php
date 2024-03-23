<div>
    <!-- Breadcrumb Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark" href="#">Home</a>
                    <a class="breadcrumb-item text-dark" href="#">Shop</a>
                    <span class="breadcrumb-item active">Checkout</span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->


    <!-- Checkout Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-lg-8">
                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Billing
                        Address</span></h5>
                <div class="bg-light p-30 mb-5">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label>First Name</label>
                            <input wire:model="fname" class="form-control" type="text" placeholder="John">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Last Name</label>
                            <input wire:model="lname" class="form-control" type="text" placeholder="Doe">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>E-mail</label>
                            <input wire:model="email" class="form-control" type="text" placeholder="example@email.com">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Mobile No</label>
                            <input wire:model="phone" class="form-control" type="text" placeholder="+123 456 789">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Address Line 1</label>
                            <input wire:model="lane_1" class="form-control" type="text" placeholder="123 Street">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Address Line 2</label>
                            <input wire:model="lane_2" class="form-control" type="text" placeholder="123 Street">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Country</label>
                            <select wire:model="country" class="custom-select">
                                <option selected>United States</option>
                                <option>Afghanistan</option>
                                <option>Albania</option>
                                <option>Algeria</option>
                            </select>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>City</label>
                            <input wire:model="city" class="form-control" type="text" placeholder="New York">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>State</label>
                            <input wire:model="state" class="form-control" type="text" placeholder="New York">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>ZIP Code</label>
                            <input wire:model="postal_code" class="form-control" type="text" placeholder="123">
                        </div>
                        <div class="col-md-12 form-group">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="form-check-input" id="newaccount">
                                <label class="custom-control-label" for="newaccount">Create an account</label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="form-check-input" id="shipto">
                                <label class="custom-control-label" for="shipto" data-toggle="collapse"
                                    data-target="#shipping-address">Ship to different address</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="collapse mb-5" id="shipping-address">
                    <h5 class="section-title position-relative text-uppercase mb-3"><span
                            class="bg-secondary pr-3">Shipping Address</span></h5>
                    <div class="bg-light p-30">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label>First Name</label>
                                <input wire:model="fname" class="form-control" type="text" placeholder="John">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Last Name</label>
                                <input wire:model="lname" class="form-control" type="text" placeholder="Doe">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>E-mail</label>
                                <input wire:model="email" class="form-control" type="text"
                                    placeholder="example@email.com">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Mobile No</label>
                                <input wire:model="phone" class="form-control" type="text" placeholder="+123 456 789">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Address Line 1</label>
                                <input wire:model="lane_1" class="form-control" type="text" placeholder="123 Street">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Address Line 2</label>
                                <input wire:model="lane_2" class="form-control" type="text" placeholder="123 Street">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Country</label>
                                <select wire:model="country" class="custom-select">
                                    <option selected>United States</option>
                                    <option>Afghanistan</option>
                                    <option>Albania</option>
                                    <option>Algeria</option>
                                </select>
                            </div>
                            <div class="col-md-6 form-group">
                                <label>City</label>
                                <input wire:model="city" class="form-control" type="text" placeholder="New York">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>State</label>
                                <input wire:model="state" class="form-control" type="text" placeholder="New York">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>ZIP Code</label>
                                <input wire:model="postal_code" class="form-control" type="text" placeholder="123">
                            </div>
                            <div class="col-md-12 form-group">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="form-check-input" id="newaccount">
                                    <label class="custom-control-label" for="newaccount">Create an account</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="form-check-input" id="shipto">
                                    <label class="custom-control-label" for="shipto" data-toggle="collapse"
                                        data-target="#shipping-address">Ship
                                        to different address</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Order
                        Total</span></h5>
                <div class="bg-light p-30 mb-5">
                    <div class="border-bottom">
                        <h6 class="mb-3">Products</h6>
                        @if(Cart::count() > 0)
                        @foreach(Cart::instance()->content() as $item)
                        <div class="d-flex justify-content-between">
                            <p> {{$item->name}} </p>
                            <span>1x{{$item->qty}} </span>
                            <p> {{$item->price}}$ </p>
                        </div>
                        @endforeach
                        @endif

                    </div>
                    <div class="border-bottom pt-3 pb-2">
                        <div class="d-flex justify-content-between mb-3">
                            <h6>Subtotal</h6>
                            <h6>{{Cart::instance('cart')->subtotal()}}$</h6>
                        </div>
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-medium">Shipping</h6>
                            <h6 class="font-weight-medium">{{Cart::instance('cart')->tax()}}$</h6>
                        </div>
                    </div>
                    <div class="pt-2">
                        <div class="d-flex justify-content-between mt-2">
                            <h5>Total</h5>
                            <h5>{{Cart::instance('cart')->total()}}$</h5>
                        </div>
                    </div>
                </div>

                <div class="mb-5">
                    <h5 class="section-title position-relative text-uppercase mb-3"><span
                            class="bg-secondary pr-3">Payment</span></h5>

                    <div class="bg-light p-30">
                        <div class="mb-4">
                            <select required wire:change="check" class="form-control" wire:model="payment">
                                <option value=""> Choose payment method </option>
                                @foreach($gateways as $gateway)
                                <option value="{{ $gateway->slug }}">{{ $gateway->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="bg-light py-4">
                            @if($payment == 'cash')
                            <form wire:submit.prevent="makePayment">
                                <p class="heading-text text-lg text-success">I will Pay by cash </p>
                                <div wire:loading class="text-lg h1 text-info">
                                    Proccesing Payment ........
                                </div>
                                <button type="submit"
                                    class="btn btn-block bg-info border-info font-weight-bold py-3">Place
                                    Order</button>
                            </form>
                            @elseif($payment == 'card')
                            <form wire:submit.prevent="makePayment">
                                <div class="row">
                                    <div class="form-group">
                                        <label class=" control-label">Full Name</label>
                                        <input type="text" wire:model="name" class="form-control border border-cirle"
                                            placeholder="Name" />
                                        @error($name) <span class="text-danger"> {{$message}} </span> @enderror
                                    </div>
                                    <div class="form-group">
                                        <label class=" control-label">Card Number</label>
                                        <input type="number" wire:model="number"
                                            class="form-control border border-cirle"
                                            placeholder="4242 4242 42424 4242" />
                                        @error($number) <span class="text-danger"> {{$message}} </span> @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class=" control-label">Expiry Month</label>
                                            <input type="number" wire:model="month"
                                                class="form-control border border-cirle" placeholder="12" />
                                            @error($month) <span class="text-danger"> {{$message}} </span> @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class=" control-label">Expiry Year</label>
                                            <input type="number" wire:model="year"
                                                class="form-control border border-cirle" placeholder="12" />
                                            @error($year) <span class="text-danger"> {{$message}} </span> @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">CVC/CVV</label>
                                            <input wire:model="cvv" type="password"
                                                class="form-control border border-cirle" placeholder="***" />
                                            @error($cvv) <span class="text-danger"> {{$message}} </span> @enderror
                                        </div>
                                    </div>
                                </div>
                                <div wire:loading class="text-lg h1 text-info">
                                    Proccesing Payment ........
                                </div>
                                <button type="submit"
                                    class="btn btn-block bg-info border-info font-weight-bold py-3">Place
                                    Order & Pay: {{Cart::instance('cart')->total()}} </button>
                            </form>
                            @elseif($payment == 'paypal')
                            <form wire:submit.prevent="makePayment">
                                <div wire:loading class="text-lg h1 text-info">
                                    Proccesing Payment ........
                                </div>
                                <button type="submit"
                                    class="btn btn-block bg-info border-info font-weight-bold py-3">Pay :
                                    {{Cart::instance('cart')->total()}}</button>
                            </form>
                            @endif
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>