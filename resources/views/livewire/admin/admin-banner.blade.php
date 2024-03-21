<div id="top" class="sa-app__body">
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
                    <div class="col-auto d-flex"><a href="#" data-bs-toggle="modal" data-bs-target="#createBanner"
                            class="btn btn-primary">Add
                            Banner</a>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="p-4">
                    <input type="text" placeholder="Start typing to search for categories"
                        class="form-control form-control--search mx-auto" id="table-search" />
                </div>
                <div class="sa-divider"></div>
                <table class="sa-datatables-init" data-order='[[ 1, "asc" ]]' data-sa-search-input="#table-search">
                    <thead>
                        <tr>

                            <th class="w-min" data-orderable="false">
                                <input type="checkbox" class="form-check-input m-0 fs-exact-16 d-block"
                                    aria-label="..." />
                            </th>
                            <th>SL</th>
                            <th>Icon </th>
                            <th class="min-w-10x">Title</th>
                            <th>Section</th>
                            <th>Visibility</th>
                            <th class="w-min" data-orderable="false"> Option</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($banners->count() > 0)
                        @foreach($banners as $banner)
                        <tr>
                            <td><input type="checkbox" class="form-check-input m-0 fs-exact-16 d-block"
                                    aria-label="..." /></td>
                            <td> {{$loop->iteration}} </td>
                            <td>
                                @if($banner->image)
                                <img src="{{asset('assets/image/banner/'.$banner->image)}}" alt="{{$banner->name}}"
                                    width="40px" height="40px" />
                                @else
                                <img src="{{asset('assets/default/default-img.png')}}" alt="{{$banner->name}}"
                                    width="40px" height="40px" />
                                @endif
                            </td>

                            <td><a href="app-category.html" class="text-reset"> {{$banner->title}} </a></td>
                            <td>
                                <select class="form-select border rounded" wire:model="section"
                                    wire:change="ChangeSection({{$banner->id}})">
                                    @if($banner->section_id == 1)
                                    <option value="">Main</option>
                                    @else
                                    <option value="">empty </option>
                                    @endif
                                </select>
                            </td>
                            <td>
                                <div class="badge">
                                    <select wire:change.prevent="SliderStatus({{$banner->id}})" wire:model="status"
                                        class="form-select form-control border-none rounded {{$banner->status == '1' ? 'bg-blue-500 text-white' : 'bg-red-400 text-white' }} ">
                                        @if($banner->status == '1')
                                        <option value="1">Active</option>
                                        <option value="0">Inactive</option>
                                        @elseif($banner->status == '0')
                                        <option value="{{$slider->status}}"> Inactive</option>
                                        <option value="1">Active</option>
                                        @endif
                                    </select>
                                </div>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-sa-muted btn-sm" type="button" id="category-context-menu-0"
                                        data-bs-toggle="dropdown" aria-expanded="false" aria-label="More">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="3" height="13"
                                            fill="currentColor">
                                            <path
                                                d="M1.5,8C0.7,8,0,7.3,0,6.5S0.7,5,1.5,5S3,5.7,3,6.5S2.3,8,1.5,8z M1.5,3C0.7,3,0,2.3,0,1.5S0.7,0,1.5,0 S3,0.7,3,1.5S2.3,3,1.5,3z M1.5,10C2.3,10,3,10.7,3,11.5S2.3,13,1.5,13S0,12.3,0,11.5S0.7,10,1.5,10z">
                                            </path>
                                        </svg>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end"
                                        aria-labelledby="category-context-menu-0">
                                        <li><a class="dropdown-item" href="#" data-bs-target="#Edit-banner"
                                                onclick="EditBanner({{$banner->id}})" data-bs-toggle="modal">Edit
                                                Banner</a></li>
                                        {{-- <li><a class="dropdown-item" href="#">Duplicate</a></li>
                                        <li><a class="dropdown-item" href="#">Add tag</a></li> --}}
                                        {{-- <li><a class="dropdown-item" href="#">Delete</a></li> --}}
                                        <li>
                                            <hr class="dropdown-divider" />
                                        </li>
                                        <li><a class="dropdown-item text-danger" href="#"
                                                wire:click.prevent="Delete({{$banner->id}})">Delete</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div wire:ignore class="modal fade" id="createBanner" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <form wire:submit.prevent="store" enctype="multipart/form-data">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Add banner</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <div class="form-group">
                            <label for="form-label">Banner title </label>
                            <input type="text" class="form-control rounded border" placeholder="Banner title"
                                wire:model="title" required />
                        </div>
                        <div class="form-group">
                            <label for="form-label">Banner Subtitle </label>
                            <input type="text" class="form-control rounded border" placeholder="Banner subtitle"
                                wire:model="subtitle" required />
                        </div>
                        <div class="form-group">
                            <label for="form-label">Banner Url </label>
                            <input type="text" class="form-control rounded border" placeholder="https://www...."
                                wire:model="url" required />
                        </div>
                        <div class="form-group">
                            <select class="form-control rounded border" wire:model="section" required>
                                <option value="">Choose section</option>
                                <option value="1"> Main </option>
                                <option value="2"> Middle </option>
                                <option value="3"> Bottom </option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="file" class="form-control" wire:model="image" onchange="previewImage(event)" />
                            <img id="preview" alt="Preview Image" width="200px">
                        </div>


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- update banner -->
    <div class="modal fade" id="Edit-banner" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <form method="POST" action="{{route('update-banner')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Update banner</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body edit-body">




                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script type="text/javascript">
    function previewImage(event) {
var input = event.target;
var image = document.getElementById('preview');
if (input.files && input.files[0]) {
var reader = new FileReader();
reader.onload = function(e) {
image.src = e.target.result;
}
reader.readAsDataURL(input.files[0]);
}
}

function EditBanner(id){





    $.ajax({
        type: 'GET',
        url : "/edit-banner/"+id,
        success: function(data){
            $('.edit-body').append(
            `<div class="form-group">
                <input type="hidden" name="id" value="${data.id}" />
                <label for="form-label">Banner title </label>
                <input type="text" class="form-control rounded border" value="${data.title}" placeholder="Banner title" name="title" required />
            </div>
            <div class="form-group">
                <label for="form-label">Banner Subtitle </label>
                <input type="text" class="form-control rounded border" value="${data.subtitle}" placeholder="Banner subtitle" name="subtitle"
                    required />
            </div>
            <div class="form-group">
                <label for="form-label">Banner Url </label>
                <input type="text" class="form-control rounded border" value=${data.url} placeholder="https://www...." name="url" required />
            </div>
            <div class="form-group">
                <select class="form-control rounded border" name="section" required>
                    ${data.section == 1 ? 
                        `<option value="1"> Main </option>
                        <option value="2"> Middle </option>
                        <option value="3"> Bottom </option>
                    ` : `<option value="1"> Main </option>
                    <option value="2"> Middle </option>
                    <option value="3"> Bottom </option>`}
                </select>
            </div>
            <div class="form-group">
                <select class="form-control rounded border" name="status" required>
                    ${data.status == 1 ?
                    `<option value="1"> Active </option>
                    <option value="0"> Inactive </option>
                    ` : `<option value="1"> Main </option>
                    <option value="0"> Inactive </option>
                    <option value="1"> Active </option>`}
                </select>
            </div>

            <div class="form-group">
                <div class="fileupload">
                <label class="label-text"> Choose Image</label>"
                <input type="file" class="form-control" name="image" onchange="previewImages(event)" />
                </div>
                <div class="flex flex-row ">
                    <img src="{{asset('assets/image/banner/${data.image}')}}" width="200px" />
                    <img style="display:none" id="previews" alt="Preview Image" width="200px">
                </div>
            </div>`
            )
        }
    })

}


function previewImages(event) {
var inputs = event.target;
var images = document.getElementById('previews');
if (inputs.files && inputs.files[0]) {
images.style.display = "block";
var readers = new FileReader();
readers.onload = function(e) {
images.src = e.target.result;
}
readers.readAsDataURL(inputs.files[0]);
}
}


</script>


@endpush