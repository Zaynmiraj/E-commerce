<div>
    <!-- Breadcrumb Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark" href="#">Home</a>
                    <a class="breadcrumb-item text-dark" href="#">Shop</a>
                    <span class="breadcrumb-item active">Shop List</span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->


    <!-- Shop Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <!-- Shop Sidebar Start -->



            <!-- Shop Product Start -->
            <div class="col-lg-9 col-md-8">
                <div class="row pb-3">
                    @if(Cart::instance('wishlist')->count() > 0)
                    @foreach(Cart::instance('wishlist')->content() as $product)
                    <div class="col-lg-3 col-md-3 col-sm-6 pb-1">
                        <div class="product-item bg-light mb-4">
                            <div class="product-img position-relative overflow-hidden">
                                <img class="img-fluid w-100"
                                    src="{{asset('assets/image/product/'.$product->model->image)}}" alt="">
                                <div class="product-action">
                                    <a wire:click.prevent="addCart({{$product->model->id}}, '{{$product->model->product_name}}',{{$product->model->sale_price}})"
                                        class="btn btn-outline-dark btn-square" href="#"><i
                                            class="fa fa-shopping-cart"></i></a>
                                    <a wire:click.prevent="wishlist({{$product->model->id}})"
                                        class="btn btn-outline-dark btn-square" href=""><i class="far fa-heart"></i></a>
                                    <a class="btn btn-outline-dark btn-square" href=""><i
                                            class="fa fa-sync-alt"></i></a>
                                    <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-search"></i></a>
                                </div>
                            </div>
                            <div class="text-center py-4">
                                <a class="h6 text-decoration-none text-truncate"
                                    href="{{route('product-view',['slug' => $product->model->product_slug])}}">
                                    {{$product->model->product_name}}
                                </a>
                                <div class="d-flex align-items-center justify-content-center mt-2">
                                    <h5> {{$product->model->sale_price}} </h5>
                                    <h6 class="text-muted ml-2"><del>$123.00</del></h6>
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
                    {{-- <div class="col-12">
                        <nav>
                            {{Cart::instance('wishlist')->links()}}
                        </nav>
                    </div> --}}
                </div>
            </div>
            <!-- Shop Product End -->
        </div>
    </div>
    <!-- Shop End -->
</div>

@push('scripts')

<script type="text/javascript">
    var Sliderrange = document.getElementById('range');
    var output = document.getElementById("demo");
    output.innerHTML = Sliderrange.value; // Display the default slider value

// Update the current slider value (each time you drag the slider handle)
        Sliderrange.oninput = function() {
        output.innerHTML = this.value;
        }

</script>

@endpush