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
                    <div class="col-auto d-flex"><a href="{{route('create-slider')}}" class="btn btn-primary">Create
                            slider</a>
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
                        @if($sliders->count() > 0)
                        @foreach($sliders as $slider)
                        <tr>
                            <td><input type="checkbox" class="form-check-input m-0 fs-exact-16 d-block"
                                    aria-label="..." /></td>
                            <td> {{$loop->iteration}} </td>
                            <td>
                                @if($slider->image)
                                <img src="{{asset('assets/image/slider/'.$slider->image)}}" alt="{{$slider->name}}"
                                    width="40px" height="40px" />
                                @else
                                <img src="{{asset('assets/default/default-img.png')}}" alt="{{$slider->name}}"
                                    width="40px" height="40px" />
                                @endif
                            </td>

                            <td><a href="app-category.html" class="text-reset"> {{$slider->title}} </a></td>
                            <td>
                                <select class="form-select border rounded" wire:change="ChangeSection({{$slider->id}})">
                                    @if($slider->section_id == 1)
                                    <option value="">Main</option>
                                    @else
                                    <option value="">empty </option>
                                    @endif
                                </select>
                            </td>
                            <td>
                                <div class="badge">
                                    <select wire:change.prevent="SliderStatus({{$slider->id}})" wire:model="status"
                                        class="form-select form-control border-none rounded {{$slider->status == '1' ? 'bg-blue-500 text-white' : 'bg-red-400 text-white' }} ">
                                        @if($slider->status == '1')
                                        <option value="1">Active</option>
                                        <option value="0">Inactive</option>
                                        @elseif($slider->status == '0')
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
                                        <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#EditSlider"
                                                onclick="EditSlider({{$slider->id}})" href="#">Update</a></li>
                                        {{-- <li><a class="dropdown-item" href="#">Duplicate</a></li>
                                        <li><a class="dropdown-item" href="#">Add tag</a></li> --}}
                                        {{-- <li><a class="dropdown-item" href="#">Delete</a></li> --}}
                                        <li>
                                            <hr class="dropdown-divider" />
                                        </li>
                                        <li><a class="dropdown-item text-danger" href="#"
                                                wire:click.prevent="Delete({{$slider->id}})">Delete</a></li>
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

    <div class="modal fade" id="EditSlider" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <form method="POST" action="{{route('update-slider')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Modify Slider</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body edit-modal">
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
    function EditSlider(id){
    $.ajax({
        type: 'GET',
        url: '/edit-slider/'+id,
        success: function(response){

            $('.modal-body').append(
                `<div class="row">
                    <input type="hidden" name="id" value="${response.slider.id}" />
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="category">Title</label>
                            <input type="text" class="form-control rounded border" name="title" value="${response.slider.title}" />
                        </div>
                        <div class="form-group">
                            <label for="category">Subtitle</label>
                            <input type="text" class="form-control rounded border" name="subtitle" value="${response.slider.subtitle}" />
                        </div>
                        <div class="form-group">
                            <label for="category">Status</label>
                            <select class="form-control rounded border" name="status">
                                ${response.slider.status == 1 ? 
                                    `<option value="1"> Active </option> <option value="0"> Inactive </option>` : `<option value="0"> Inactive </option><option value="1"> Active </option>`}
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="category">Section</label>
                            <select class="form-control rounded border" name="section_id">
                                <option value="1"> ${response.slider.section_id == 1 ? "Main" : ""} </option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="category">Description</label>
                            <textarea type="text" class="form-control rounded border" cols="4" rows="2" name="description">${response.slider.description ? response.slider.description : ""}</textarea>
                        </div>
                        <div class="form-group">
                            <select class="form-control rounded" name="url"  required>
                                <option value="">Choose product</option>
                                ${response.product.map(item => `<option value="${item.id}">${item.product_name}</option>` )}
                            </select>
                        </div>
                
                        <div class="form-group">
                            <div class="fileupload">
                                <label class="filelabel">Choose File</label>
                                <input type="file" name="image" onchange="previewImage(event)" />
                            </div>
                            <div class="flex flex-row items-center">
                                <img class="mx-1" src="{{asset('assets/image/slider/${response.slider.image}')}}" width="150px" />
                                <img id="preview" alt="Preview Image" style="display: none" width="150px">
                            </div>
                
                        </div>
                    </div>
                </div>`
            )
        }
    })
}


function previewImage(event) {
    var input = event.target;
    var image = document.getElementById('preview');
    if (input.files && input.files[0]) {
    image.style.display = "block";
    var reader = new FileReader();
    reader.onload = function(e) {
    image.src = e.target.result;
    }
    reader.readAsDataURL(input.files[0]);
    }
    }

</script>
@endpush