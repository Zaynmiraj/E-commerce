<div id="top" class="sa-app__body">
    <style type="text/css">
        .wrapper {
            position: relative;
            background-color: #fff;
            border-radius: 1rem;
            padding: 2rem;
            width: 400px !important;
            height: 100px;
        }

        input[type="file"] {
            height: 100%;
            width: 100%;
            opacity: 0;
            position: absolute;
            top: 0;
            left: 0;
        }

        .file-label {
            background-color: #eeea;
            width: 100%;
            height: 100%;
            text-align: center;
        }
    </style>
    <div class="mx-sm-2 px-2 px-sm-3 px-xxl-4 pb-6">
        <div class="container">
            <div class="py-5">
                <div class="row g-4 align-items-center">
                    <div class="col">
                        <nav class="mb-2" aria-label="breadcrumb">
                            <ol class="breadcrumb breadcrumb-sa-simple">
                                <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{$pageTitle}}</li>
                            </ol>
                        </nav>
                        <h1 class="h3 m-0"> {{$pageTitle}} </h1>
                    </div>
                    <div class="col-auto d-flex"><a href="{{route('add-category')}}" class="btn btn-primary">New
                            category</a>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="sa-divider"></div>
                <div class="row">
                    <div class="col-md-12">
                        <div id="header-carousel" class="carousel slide carousel-fade mb-30 mb-lg-0"
                            data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
                                <li data-target="#header-carousel" data-slide-to="1"></li>
                                <li data-target="#header-carousel" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item position-relative active" style="height: 430px;">
                                    <img class="position-absolute w-100 h-100"
                                        src="{{asset('assets/img/carousel-1.jpg')}}" style="object-fit: cover;">
                                    <div
                                        class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                        <div class="p-3" style="max-width: 700px;">
                                            <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">
                                                Men
                                                Fashion</h1>
                                            <p class="mx-md-5 px-5 animate__animated animate__bounceIn">Lorem rebum
                                                magna
                                                amet
                                                lorem magna erat diam stet. Sadips duo stet amet amet ndiam elitr ipsum
                                                diam
                                            </p>
                                            <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp"
                                                href="#">Shop Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item position-relative" style="height: 430px;">
                                    <img class="position-absolute w-100 h-100"
                                        src="{{asset('assets/img/carousel-2.jpg')}}" style="object-fit: cover;">
                                    <div
                                        class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                        <div class="p-3" style="max-width: 700px;">
                                            <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">
                                                Women
                                                Fashion</h1>
                                            <p class="mx-md-5 px-5 animate__animated animate__bounceIn">Lorem rebum
                                                magna
                                                amet
                                                lorem magna erat diam stet. Sadips duo stet amet amet ndiam elitr ipsum
                                                diam
                                            </p>
                                            <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp"
                                                href="#">Shop Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item position-relative" style="height: 430px;">
                                    <img class="position-absolute w-100 h-100"
                                        src="{{asset('assets/img/carousel-3.jpg')}}" style="object-fit: cover;">
                                    <div
                                        class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                        <div class="p-3" style="max-width: 700px;">
                                            <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">
                                                Kids
                                                Fashion</h1>
                                            <p class="mx-md-5 px-5 animate__animated animate__bounceIn">Lorem rebum
                                                magna
                                                amet
                                                lorem magna erat diam stet. Sadips duo stet amet amet ndiam elitr ipsum
                                                diam
                                            </p>
                                            <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp"
                                                href="#">Shop Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <form wire:submit.prevent="store">
                        <div class="col-md-12 row my-10">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="form-product" class="form-label">Title</label>
                                    <input type="text" class="form-control rounded" placeholder="Title" name="title"
                                        wire:model="title" />
                                    @error('title') <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                                <div class="form-group">
                                    <label for="form-product" class="form-label ">Sub title</label>
                                    <input type="text" class="form-control rounded" placeholder="Sub title" name="title"
                                        wire:model="sub_title" />
                                    @error('sub_title') <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                                <div class="form-group">
                                    <select wire:model="slider_id" class="form-control rounded">
                                        <option value="">Select slider ID</option>
                                        <option value="1">Slider - 1</option>
                                        <option value="2">Slider - 2</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 ">
                                <div class="form-group p-2 relative">
                                    <label for="form-slider" class=" file-label p-3"> {{$images ? 'Change Image' :
                                        'Choose slider image'}} </label>
                                    <input type="file" class="" wire:model="images" />
                                    @error('images') <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                                @if($images)
                                <div class="form-group">
                                    <img src="{{$images->temporaryUrl()}}" width="60px" height="60px" />
                                </div>
                                @endif
                                <div class="form-group">
                                    {{-- <label for="form-slider" class="form-control">Select section </label> --}}
                                    <select class="form-control" wire:model="section_id">
                                        <option value="">Choose section </option>
                                        <option value="1">Main section </option>
                                        <option value="2">Main section </option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select class="form-select form-control" wire:model="product_id" required>
                                        <option>Choose product</option>
                                        @foreach($products as $product)
                                        <option value="{{ $product->id }}"> {{ $product->product_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12 d-flex justify-center mt-10">
                                <button type="submit" class="btn bg-orange-600 border-none px-10 ">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>