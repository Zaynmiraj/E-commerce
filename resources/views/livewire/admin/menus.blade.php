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
                    <div class="col-auto d-flex"><a href="#" data-bs-toggle="modal" data-bs-target="#createMenu"
                            class="btn btn-primary">Create Menu</a>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="p-4">
                    <input type="text" placeholder="Start typing to search"
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
                            <th class="min-w-8x">Name</th>
                            <th>Section </th>
                            <th>Status</th>
                            <th class="w-min" data-orderable="false">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($menus->count() > 0)
                        @foreach($menus as $item)
                        <tr>
                            <td><input type="checkbox" class="form-check-input m-0 fs-exact-16 d-block"
                                    aria-label="..." /></td>
                            <td> {{$loop->iteration}} </td>
                            <td>
                                @if($item->icon)
                                <img src="{{asset('assets/image/gateway/'.$item->icon)}}" alt="{{$item->name}}"
                                    width="40px" height="40px" />
                                @else
                                <img src="{{asset('assets/default/default-img.png')}}" alt="{{$item->name}}"
                                    width="40px" height="40px" />
                                @endif
                            </td>

                            <td><a href="app-category.html" class="text-reset"> {{$item->name}} </a></td>
                            <td>
                                <select class="form-control rounded border" wire:model="section">
                                    @if($item->section == 'main')
                                    <option value="main">Main</option>
                                    <option value="footer">Footer</option>
                                    @else
                                    <option value="footer">Footer</option>
                                    <option value="main">Main</option>
                                    @endif
                                </select>
                            </td>
                            <td>
                                <div class="badge">
                                    <select wire:change.prevent="updateStatus({{$item->id}})" wire:model="status"
                                        class="form-select form-control border-none rounded {{$item->status == '1' ? 'bg-info text-white' : 'bg-danger text-white' }} ">
                                        @if($item->status == '1')
                                        <option value="1">Active</option>
                                        <option value="0">Inactive</option>
                                        @elseif($item->status == '0')
                                        <option value="0" {{$item->status}}"> Inactive</option>
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
                                        <li><a class="dropdown-item" href="#" data-bs-target="#EditMenu"
                                                onclick="EditMenu({{$item->id}})" data-bs-toggle="modal">Edit</a>
                                        </li>
                                        <li><a class="dropdown-item" data-bs-toggle="modal"
                                                data-bs-target="#editmenuitem" href="#"
                                                onclick="EditItem({{$item->id}})">Edit
                                                menu
                                                item</a>
                                        </li>
                                        {{-- <li><a class="dropdown-item" href="#">Duplicate</a></li>
                                        <li><a class="dropdown-item" href="#">Add tag</a></li> --}}
                                        {{-- <li><a class="dropdown-item" href="#">Delete</a></li> --}}
                                        {{-- <li> --}}
                                            <hr class="dropdown-divider" />
                                        </li>
                                        <li><a class="dropdown-item text-danger" href="#"
                                                wire:click.prevent="delete({{$item->id}})">Delete</a></li>
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


    <!--add menu -->

    <div wire:ignore class="modal fade" id="createMenu" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <form wire:submit.prevent="store" enctype="multipart/form-data">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel"> Create Menu</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="form-group">
                                <label for="form-label"> Name </label>
                                <input type="text" class="form-control rounded border" placeholder="Name"
                                    wire:model="name" required />
                            </div>

                            <div class="form-group">
                                <label for="form-label"> Description </label>
                                <input type="text" class="form-control rounded border" placeholder="description"
                                    wire:model="description" />
                            </div>
                            <div class="form-group">
                                <label class="form-label"> Status </label>
                                <select class="form-control rounded border" wire:model="status">
                                    <option>Choose Status </option>
                                    <option value="1">Active</option>
                                    <option value="0">Inactive</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-label"> Section </label>
                                <select class="form-control rounded border" wire:model="section">
                                    <option>Choose section </option>
                                    <option value="main">Main</option>
                                    <option value="footer">Footer</option>
                                    <option value="account">My account</option>
                                    <option value="top">Top nav</option>
                                </select>
                            </div>
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

    <!-- end menu create-account -->


    <!--add menu item -->


    @if(Session::has('menu-success'))

    <div wire:ignore class="modal" style="display: block !important" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <form method="POST" action="{{route('add-menu-item')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Add Item</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <select class="form-control" name="menu_id">
                            <option>Choose Menu </option>
                            @foreach($menus as $item)
                            <option value="{{$item->id}}">{{$item->name}}</option>
                            @endforeach
                        </select>
                        <div class="row my-2 row-body">
                            <div class="col-md-11 row">
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control rounded border" placeholder="Name"
                                        name="names[]" required />
                                </div>

                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control rounded border" placeholder="url"
                                        name="url[]" />
                                </div>
                            </div>
                            <div class="col-md-1 d-flex align-items-center" style="cursor: pointer" onclick="AddRow()">
                                <span class="bg-info text-white h3">+
                            </div>
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

    @endif


    <!-- edit menu item -->

    <div wire:ignore class="modal fade" id="editmenuitem" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <form method="POST" action="{{route('update-menu-item')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Add Item</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body edit_body">
                        <select class="form-control" name="menu_id">
                            <option>Choose Menu </option>
                            @foreach($menus as $item)
                            <option value="{{$item->id}}">{{$item->name}}</option>
                            @endforeach
                        </select>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- end edit menu item -->

    <!--end menu item -->

    <!-- update$item -->
    <div class="modal fade" id="EditMenu" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <form method="POST" action="{{route('update-menu')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Menu</h1>
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
    function EditMenu(id){

    $.ajax({
        type: 'GET',
        url : "/edit-menu/"+id,
        success: function(data){
            console.log(data);
            $('.edit-body').append(
            `<div class="row">
                <input type="hidden" name="id" value="${data.id}">
                <div class="col-md-6 col-sm-12">
                    <div class="form-group">
                        <label for="form-label"> Name </label>
                        <input value="${data.name}"  type="text" class="form-control rounded border" placeholder="Name"
                            name="name" required />
                    </div>
            
                    <div class="form-group">
                        <label for="form-label"> Secret Key </label>
                        <input value="${data.description ? data.description : ''}" type="text" class="form-control rounded border" placeholder="key" name="description" />
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="form-group">
                        <label for="form-label"> Status </label>
                        <select class="form-control rounded border" name="status">
                            ${data.status == 1 ?
                            `<option value="1"> Active </option>
                            <option value="0"> Inactive </option>
                            
                            ` : `
                            <option value="0"> Inactive </option>
                            <option value="1"> Active </option>`}
                        </select>
                    </div>
                    <div class="form-group">
                        <select class="form-control rounded border" name="section">
                           ${data.section == 'main' ?
                            `<option value="main"> Main </option>
                            <option value="footer"> Footer </option>
                            <option value="account">My account</option>
                            <option value="top">Top nav</option>
                            ` :`
                            <option value="footer"> Footer </option>
                            <option value="main"> main </option>
                            <option value="account">My account</option>
                            <option value="top">Top nav</option>
                            `}
                        </select>
                    </div>
                </div>
            </div>`
            )
        }
    })

}

function EditItem(id){
    $.ajax({
        type: "GET",
        url: '/edit-menu-item/'+id,

        success: function(data){

            $('.edit_body').append(
                
                data.map(item => `
                <input type="hidden" name="id" value="${data[0].menu_id}" />
                <div class="row my-2 row-body">
                    <input type="hidden" name="sub_menu_id[]" value="${item.id}" />
                    <div class="col-md-11 row">
                        <div class="form-group col-md-6">
                            <input type="text" value="${item.name}" class="form-control rounded border" placeholder="Name" name="names[]" required />
                        </div>
                
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control  rounded border" value="${item.slug}" placeholder="url" name="url[]" />
                        </div>
                    </div>
                </div>
                `)
            )
        }
    })
}

var inputRow = document.querySelector('.row-body');
function AddRow(){
    let rows = document.createElement('div');
    rows.innerHTML =`<div class="col-md-11 row">
        <div class="form-group col-md-6">
            <input type="text" class="form-control rounded border" placeholder="Name" name="names[]" required />
        </div>
    
        <div class="form-group col-md-6">
            <input type="text" class="form-control rounded border" placeholder="url" name="url[]" />
        </div>
    </div>`;

    inputRow.appendChild(rows);
}


</script>


@endpush