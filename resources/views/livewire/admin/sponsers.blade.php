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
                    <div class="col-auto d-flex"><a href="#" data-bs-toggle="modal" data-bs-target="#addSponsor"
                            class="btn btn-primary">Add
                            Sponsor</a>
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
                            <th> thumbnail </th>
                            <th class="min-w-10x">Title</th>
                            <th>Status</th>
                            <th class="w-min" data-orderable="false"> Option</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($sponsors->count() > 0)
                        @foreach($sponsors as $sponsor)
                        <tr>
                            <td><input type="checkbox" class="form-check-input m-0 fs-exact-16 d-block"
                                    aria-label="..." /></td>
                            <td> {{$loop->iteration}} </td>
                            <td>
                                @if($sponsor->image)
                                <img src="{{asset('assets/image/sponsor/'.$sponsor->image)}}" alt="{{$sponsor->title}}"
                                    width="40px" height="40px" />
                                @else
                                <img src="{{asset('assets/default/default-img.png')}}" alt="{{$sponsor->title}}"
                                    width="40px" height="40px" />
                                @endif
                            </td>

                            <td><a href="app-category.html" class="text-reset"> {{$sponsor->title}} </a></td>
                            <td>
                                <div class="badge">
                                    <select wire:change.prevent="updateStatus({{$sponsor->id}})" wire:model="status"
                                        class="form-select form-control border-none rounded {{$sponsor->status == '1' ? 'bg-blue-500 text-white' : 'bg-red-400 text-white' }} ">
                                        @if($sponsor->status == '1')
                                        <option value="1">Active</option>
                                        <option value="0">Inactive</option>
                                        @elseif($sponsor->status == '0')
                                        <option value="0"> Inactive</option>
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
                                        <li><a onclick="EditSponsor({{$sponsor->id}})" class="dropdown-item" href=""
                                                data-bs-target="#EditSponsor" data-bs-toggle="modal">Update</a></li>
                                        <li>
                                            <hr class="dropdown-divider" />
                                        </li>
                                        <li><a class="dropdown-item text-danger" href="#"
                                                wire:click.prevent="Delete({{$sponsor->id}})">Delete</a></li>
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
    <div wire:ignore class="modal fade" id="addSponsor" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <form wire:submit.prevent="store" enctype="multipart/form-data">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Add Sponsor</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <div class="form-group">
                            <label for="form-label">Sponsor Name </label>
                            <input type="text" class="form-control rounded border" placeholder="Sponsor Name"
                                wire:model="name" required />
                        </div>
                        <div class="form-group">
                            <label for="form-label"> Description</label>
                            <input type="text" class="form-control rounded border" placeholder="Description"
                                wire:model="description" required />
                        </div>
                        <div class="form-group">
                            <label for="form-label"> Sponsor Url </label>
                            <input type="text" class="form-control rounded border" placeholder="https://www...."
                                wire:model="url" required />
                        </div>
                        <div class="form-group">
                            <select class="form-control rounded border" wire:model="status" required>
                                <option value="">Choose Status</option>
                                <option value="1"> Active </option>
                                <option value="0"> Inactive </option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="file" class="form-control" wire:model="image" onchange="previewImage(event)" />
                            <img id="preview" alt="Preview Image" style="display: none" width="200px">
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

    <div class="modal fade" id="EditSponsor" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <form method="POST" action="{{route('update-sponsor')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Add Sponsor</h1>
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
    function EditSponsor(id){
        $.ajax({
        type: "GET",
        url : '/edit-sponsor/' + id,

        success: function(data){
            $('.edit-modal').append(
                `<div class="form-group">
                    <input type="hidden" name="id" value="${data.id}" />
                    <label for="form-label">Sponsor Name </label>
                    <input type="text" class="form-control rounded border" placeholder="Sponsor Name" name="name" value="${data.title}" required />
                </div>
                <div class="form-group">
                    <label for="form-label"> Description</label>
                    <input type="text" value="${data.description}" class="form-control rounded border" placeholder="Description" name="description"
                        required />
                </div>
                <div class="form-group">
                    <label for="form-label"> Sponsor Url </label>
                    <input type="text" value="${data.url}" class="form-control rounded border" placeholder="https://www...." name="url" required />
                </div>
                <div class="form-group">
                    <select class="form-control rounded border" name="status" required>
                        ${data.status == 1 ? "<option value='1'> Active </option> <option value='0'>Inactive</option>" : "<option value='0'> Deactivated </option> <option value='1'> Active </option>"}
                       
                    </select>
                </div>
                <div class="form-group">
                    <div class="fileupload">
                    <label for="fileupload" class="filelabel">Choose File</label>
                    <input type="file" class="form-control" name="image" onchange="previewImages(event)" />
                    </div>
                    <div class="flex flex-row items-center">
                        <img src="{{asset('assets/image/sponsor/${data.image}')}}" width="200px" />
                        <span class="text-3xl"> > </span>
                        <img id="previews" alt="Preview Image" style="display: none" width="200px">
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