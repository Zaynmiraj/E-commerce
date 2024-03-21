<div id="top" class="sa-app__body">
    <div class="mx-sm-2 px-2 px-sm-3 px-xxl-4 pb-6">
        <div class="container">
            <form wire:submit.prevent="store">
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
                        <div class="col-auto d-flex"><button type="submit" class="btn border-none bg-primary">Save
                            </button>
                        </div>
                    </div>
                </div>
                <div wire:ignore class="card p-4">
                    <h4 class="headings heading-text p-3"> basic </h4>
                    <div class="sa-divider"></div>
                    <div class="p-5 row">
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label class="control-label">Logo</label>
                                <div class="fileupload">
                                    <label class="label-text "> Choose your logo</label>
                                    <input type="file" value="" class="form-control rounded"
                                        onchange="previewImage(event)" wire:model="logo" placeholder="Store Name" />
                                </div>
                                <div class="d-flex">
                                    <img id="preview" style="display: none" alt="Preview Image" width="100px">
                                    @if($hasLogo)
                                    <img src="{{asset('assets/image/store/'.$hasLogo)}}" width="100px" />
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Store Name</label>
                                <input type="text" class="form-control rounded" id="storeName" wire:model="name"
                                    placeholder="Store Name" />
                            </div>
                            <div class="form-group">
                                <label class="control-label">Store Subtitle</label>
                                <input type="text" class="form-control rounded" id="storeName" wire:model="subtitle"
                                    placeholder="Store Subtitle" />
                            </div>
                            <div class="form-group">
                                <label class="control-label">Description</label>
                                <input type="text" class="form-control rounded" id="storeName" wire:model="description"
                                    placeholder="Description" />
                            </div>

                            <div class="form-group">
                                <label class="control-label">Email</label>
                                <input type="text" class="form-control rounded" id="storeName" wire:model="email"
                                    placeholder="Email" />
                            </div>

                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label class="control-label">Phone</label>
                                <input type="text" class="form-control rounded" id="storeName" wire:model="phone"
                                    placeholder="Phone" />
                            </div>
                            <div class="form-group">
                                <label class="control-label">Address</label>
                                <input type="text" class="form-control rounded" id="storeName" wire:model="address"
                                    placeholder="Address" />
                            </div>
                            <div class="form-group">
                                <label class="control-label">Store Url</label>
                                <input type="text" class="form-control rounded" id="storeName" wire:model="storeurl"
                                    placeholder="Store Url" />
                            </div>

                            <div class="form-group">
                                <label class="control-label">Meta title</label>
                                <input type="text" class="form-control rounded" id="storeName" wire:model="metatitle"
                                    placeholder="Meta title" />
                            </div>
                            <div class="form-group">
                                <label class="control-label">Meta description</label>
                                <input type="text" class="form-control rounded" id="storeName"
                                    wire:model="metadescription" placeholder="Meta description" />
                            </div>
                        </div>
                    </div>
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
    image.style.display = 'block';
var reader = new FileReader();
reader.onload = function(e) {
image.src = e.target.result;
}
reader.readAsDataURL(input.files[0]);
}
}

</script>
@endpush