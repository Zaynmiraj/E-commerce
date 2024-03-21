<!-- Footer Start -->
<div class="container-fluid bg-dark text-secondary mt-5 pt-5">
    <div class="row px-xl-5 pt-5">
        <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
            <h4 class="text-secondary heading-h2 text-uppercase mb-4 text-info p-4">{{$store->shop_name}}</h4>
            <h5 class="text-secondary text-uppercase mb-4"> {{$store->shop_description}} </h5>
            <p class="mb-2"><i class="fa fa-map-marker-alt text-info mr-3"></i> {{$store->shop_address}} </p>
            <p class="mb-2"><i class="fa fa-envelope text-info mr-3"></i>{{$store->shop_email}}</p>
            <p class="mb-0"><i class="fa fa-phone-alt text-info mr-3"></i>{{$store->shop_phone}} </p>
        </div>
        <div class="col-lg-8 col-md-12">
            <div class="row">
                <div class="col-md-4 mb-5">
                    <h5 class="text-secondary text-uppercase mb-4">Quick Shop</h5>
                    <div class="d-flex flex-column justify-content-start">
                        @if($footer)
                        @foreach($footer->items as $item)
                        <a class="text-secondary mb-2" href="{{$item->slug}}"><i
                                class="fa fa-angle-right mr-2"></i>{{$item->name}}</a>
                        @endforeach
                        @endif
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <h5 class="text-secondary text-uppercase mb-4">My Account</h5>
                    <div class="d-flex flex-column justify-content-start">
                        @if($myaccount)
                        @foreach($myaccount->items as $item)
                        <a class="text-secondary mb-2" href="{{$item->slug}}"><i class="fa fa-angle-right mr-2"></i>
                            {{$item->name}}
                        </a>
                        @endforeach
                        @endif
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <h5 class="text-secondary text-uppercase mb-4">Newsletter</h5>
                    <p>Duo stet tempor ipsum sit amet magna ipsum tempor est</p>
                    <form action="">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Your Email Address">
                            <div class="input-group-append">
                                <a href="{{route('register')}}" class="btn bg-info">Sign Up</a>
                            </div>
                        </div>
                    </form>
                    <h6 class="text-secondary text-uppercase mt-4 mb-3">Follow Us</h6>
                    <div class="d-flex">
                        @foreach($social as $link)
                        <a class="btn bg-info btn-square border-info mr-2" target="blank" href="//{{$link->url}}/"><i
                                class="fab fa-{{$link->name}}"></i></a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row border-top mx-xl-5 py-4" style="border-color: rgba(256, 256, 256, .1) !important;">
        <div class="col-md-6 px-xl-0">
            <p class="mb-md-0 text-center text-md-left text-secondary">
                &copy; <a class="text-info" href="//https://www.zaynmiraj.online/">ZaYn Miraj</a>.
                {{$store->footer_copyright}}
                <a class="text-info" href="https://www.zaynmiraj.online"></a>
            </p>
        </div>
        <div class="col-md-6 d-flex px-xl-0 text-center text-md-right justify-content-center my-1">
            @foreach($gateways as $gateway)
            <img class="img-fluid mx-4" src="{{asset('assets/image/gateway/'.$gateway->icon)}}" alt="" width="30px"
                height="70px">
            @endforeach
        </div>
    </div>
</div>
<!-- Footer End -->