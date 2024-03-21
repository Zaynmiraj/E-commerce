<div>

    <!-- Carousel Start -->
    <div class="container-fluid mb-3">
        <div class="row px-xl-5">
            <div class="col-lg-8">
                <div id="header-carousel" class="carousel slide carousel-fade mb-30 mb-lg-0" data-ride="carousel">
                    <ol class="carousel-indicators">
                        @foreach ($sliders as $key => $slider)
                        <li data-target="#header-carousel" data-slide-to="{{$key}}"
                            class="{{$key == 0 ? 'active' : ''}}"></li>
                        @endforeach
                    </ol>
                    <div class="carousel-inner">
                        @foreach($sliders as $key => $slider)
                        <div class="carousel-item position-relative {{$key == 0 ? 'active' : ''}} "
                            style="height: 430px;">
                            <img class="position-absolute w-100 h-100"
                                src="{{asset('assets/image/slider/'. $slider->image)}}" style="object-fit: cover;">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">
                                        {{$slider->title}} </h1>
                                    <p class="mx-md-5 px-5 animate__animated animate__bounceIn">
                                        {{$slider->subtitle}}
                                    </p>
                                    <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp"
                                        href="#">Shop Now</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                @foreach($mainBanners as $banner)
                <div class="product-offer mb-30" style="height: 200px;">
                    <img class="img-fluid" src="{{asset('assets/image/banner/'.$banner->image)}}" alt="">
                    <div class="offer-text">
                        <h6 class="text-white text-uppercase"> {{$banner->title}} </h6>
                        <h3 class="text-white mb-3"> {{$banner->subtitle}} </h3>
                        <a href="{{$banner->url}}" class="btn bg-info border-white">Shop Now</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Featured Start -->
    <div class="container-fluid pt-5">
        <div class="row px-xl-5 pb-3">
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center bg-white mb-4" style="padding: 30px;">
                    <h1 class="fa fa-check text-info m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0">Quality Product</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center  bg-white mb-4" style="padding: 30px;">
                    <h1 class="fa fa-shipping-fast text-info m-0 mr-2"></h1>
                    <h5 class="font-weight-semi-bold m-0">Free Shipping</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center bg-white  mb-4" style="padding: 30px;">
                    <h1 class="fas fa-exchange-alt text-info m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0">14-Day Return</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center bg-white mb-4" style="padding: 30px;">
                    <h1 class="fa fa-phone-volume text-info m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0">24/7 Support</h5>
                </div>
            </div>
        </div>
    </div>
    <!-- Featured End -->


    <!-- Categories Start -->
    <div class="container-fluid pt-5">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span
                class="bg-secondary pr-3">Categories</span></h2>
        <div class="row px-xl-5 pb-3">
            @if($categories->count() > 0)
            @foreach($categories as $category)
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <a class="text-decoration-none" href="">
                    <div class="cat-item d-flex align-items-center mb-4">
                        <div class="overflow-hidden" style="width: 100px; height: 100px;">
                            <img class="img-fluid" src="{{asset('assets/image/category/'.$category->image)}}" alt="">
                        </div>
                        <div class="flex-fill pl-3">
                            <h6>{{$category->name}}</h6>
                            <small class="text-body">{{$category->product()->count() }} items</small>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
            @endif
        </div>
    </div>
    <!-- Categories End -->


    <!-- Products Start -->
    <div class="container-fluid pt-5 pb-3">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span
                class="bg-secondary text-dark pr-3">Featured
                Products</span></h2>
        <div class="row px-xl-5">
            @if($products)
            @foreach($products as $product)
            <div class="col-lg-3 col-md-4 col-sm-4 pb-1">
                <div class="product-item bg-light mb-4">
                    <div class="product-img position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="{{asset('assets/image/product/'.$product->image)}}" alt="">
                        <div class="product-action">
                            <a wire:click.prevent="addCart({{$product->id}}, '{{$product->product_name}}', {{$product->sale_price}})"
                                class="btn btn-outline-dark btn-square" href=""><i class="fa fa-shopping-cart"></i></a>
                            <a wire:click.prevent="wishlist({{$product->id}})" class="btn btn-outline-dark btn-square"
                                href=""><i class="far fa-heart"></i></a>
                            <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-sync-alt"></i></a>
                            <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                    <div class="text-center py-4">
                        <a class="h6 text-decoration-none text-truncate"
                            href="{{route('product-view',['slug' => $product->product_slug])}}">
                            {{$product->product_name}} </a>
                        <div class="d-flex align-items-center justify-content-center mt-2">
                            <h5> {{$product->sale_price}}$</h5>
                            <h6 class="text-muted ml-2"><del>{{$product->regular_price}}$</del></h6>
                        </div>
                        <div class="d-flex align-items-center justify-content-center mb-1">
                            <small class="fa fa-star text-info mr-1"></small>
                            <small class="fa fa-star text-info mr-1"></small>
                            <small class="fa fa-star text-info mr-1"></small>
                            <small class="fa fa-star text-info mr-1"></small>
                            <small class="fa fa-star text-info mr-1"></small>
                            <small>(99)</small>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            @endif
        </div>
    </div>
    <!-- Products End -->


    <!-- Offer Start -->
    <div class="container-fluid pt-5 pb-3">
        <div class="row px-xl-5">
            <div class="col-md-6">
                <div class="product-offer mb-30" style="height: 300px;">
                    <img class="img-fluid" src="{{asset('assets/img/offer-1.jpg')}}" alt="">
                    <div class="offer-text">
                        <h6 class="text-white text-uppercase">Save 20%</h6>
                        <h3 class="text-white mb-3">Special Offer</h3>
                        <a href="" class="btn bg-info border-white">Shop Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="product-offer mb-30" style="height: 300px;">
                    <img class="img-fluid" src="{{asset('assets/img/offer-2.jpg')}}" alt="">
                    <div class="offer-text">
                        <h6 class="text-white text-uppercase">Save 20%</h6>
                        <h3 class="text-white mb-3">Special Offer</h3>
                        <a href="" class="btn bg-info border-white">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Offer End -->


    <!-- Products Start -->
    <div class="container-fluid pt-5 pb-3">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span
                class="bg-secondary pr-3 text-dark">Recent
                Products</span></h2>
        <div class="row px-xl-5">
            @if($latests)
            @foreach($latests as $latest)
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <div class="product-item bg-light mb-4">
                    <div class="product-img position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="{{asset('assets/image/product/'.$latest->image)}}" alt="">
                        <div class="product-action">
                            <a wire:click.prevent="addCart({{$product->id}}, '{{$product->product_name}}', {{$product->sale_price}})"
                                class="btn btn-outline-dark btn-square" href=""><i class="fa fa-shopping-cart"></i></a>
                            <a wire:click.prevent="wishlist({{$product->id}})" class="btn btn-outline-dark btn-square"
                                href=""><i class="far fa-heart"></i></a>
                            <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-sync-alt"></i></a>
                            <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                    <div class="text-center py-4">
                        <a class="h6 text-decoration-none text-truncate"
                            href="{{route('product-view', ['slug' => $product->product_slug])}}">
                            {{$latest->product_name}} </a>
                        <div class="d-flex align-items-center justify-content-center mt-2">
                            <h5> {{$latest->sale_price}}$ </h5>
                            <h6 class="text-muted ml-2"><del> {{$latest->regular_price}}$ </del></h6>
                        </div>
                        <div class="d-flex align-items-center justify-content-center mb-1">
                            <small class="fa fa-star text-info mr-1"></small>
                            <small class="fa fa-star text-info mr-1"></small>
                            <small class="fa fa-star text-info mr-1"></small>
                            <small class="fa fa-star text-info mr-1"></small>
                            <small class="fa fa-star text-info mr-1"></small>
                            <small>(99)</small>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            @endif

        </div>
    </div>
    <!-- Products End -->


    <!-- Vendor Start -->
    <div class="container-fluid py-5">
        <div class="row px-xl-5">
            <div class="col">
                <div class="owl-carousel vendor-carousel">
                    @foreach($sponsors as $sponsor)
                    <div class="bg-light p-4">
                        <img src="{{asset('assets/image/sponsor/'.$sponsor->image)}}" alt="">
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Vendor End -->