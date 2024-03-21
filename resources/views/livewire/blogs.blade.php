<div>
    <section class="py-5 header text-center">
        <div class="container py-4">
            <header>
                <h1 class="display-4">Blogs</h1>
                <p class="font-italic text-muted mb-1">Let know more </p>
                <p class="font-italic text-muted">Snippet by <a class="text-dark" href="https://zaynmiraj.online/">
                        <u>ZaYn Miraj</u></a>
                </p>
            </header>
        </div>
    </section>


    <section class="pb-5">
        <div class="container text-center">
            <!-- Masonry grid -->
            <div class="gallery-wrapper">
                <!-- Grid sizer -->
                <div class="grid-sizer col-lg-4 col-md-6"></div>

                <!-- Grid item -->
                @foreach($blogs as $item)
                <div class="col-lg-4 col-md-6 grid-item mb-4 shadow p-2">
                    <img class="img-fluid w-100 mb-3 img-thumbnail shadow-sm rounded-0"
                        src="{{asset('assets/image/blog/'.$item->image)}}" alt="">
                    <h2 class="h4">{{$item->title}}</h2>
                    <p class="small text-muted font-italic">{{$item->description}}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>


    <!-- Resources-->
    <footer class="p-4 bg-light d-flex align-items-center justify-content-center">
        <small class="mb-0 text-uppercase font-weight-bold mr-3">Resources: </small>
        <ul class="list-inline mb-0 d-inline-block">
            <li class="list-inline-item">
                <a class="text-muted font-italic" target="_blank"
                    href="//https://www.zaynmiraj.online/"><u>Author</u></a>
            </li>
        </ul>
    </footer>
</div>

@push('scripts')
<script src="https://unpkg.com/imagesloaded@5/imagesloaded.pkgd.min.js"></script>
<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
<script>
    $(function () {
    
    // Initate masonry grid
    var $grid = $('.gallery-wrapper').masonry({
    temSelector: '.grid-item',
    columnWidth: '.grid-sizer',
    percentPosition: true,
    });
    
    // Initate imagesLoaded
    $grid.imagesLoaded().progress( function() {
    $grid.masonry('layout');
    });
    
    });
</script>
@endpush