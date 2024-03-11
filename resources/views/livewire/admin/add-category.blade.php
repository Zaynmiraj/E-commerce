<div id="top" class="sa-app__body">
    <form wire:submit.prevent='Store()'>
        <div class="mx-sm-2 px-2 px-sm-3 px-xxl-4 pb-6">
            <div class="container container--max--xl">
                <div class="py-5">
                    <div class="row g-4 align-items-center">
                        <div class="col">
                            <nav class="mb-2" aria-label="breadcrumb">
                                <ol class="breadcrumb breadcrumb-sa-simple">
                                    <li class="breadcrumb-item"><a href="{{route('/')}}">Dashboard</a></li>
                                    <li class="breadcrumb-item"><a href="{{route('categories')}}">Categories</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Add Category</li>
                                </ol>
                            </nav>
                            <h1 class="h3 m-0">
                                <Address></Address> Category
                            </h1>
                        </div>
                        <div class="col-auto d-flex">
                            <a href="#" class="btn btn-secondary me-3">Duplicate</a>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </div>
                <div class="sa-entity-layout"
                    data-sa-container-query='{"920":"sa-entity-layout--size--md","1100":"sa-entity-layout--size--lg"}'>
                    <div class="sa-entity-layout__body">
                        <div class="sa-entity-layout__main">
                            <div class="card">
                                <div class="card-body p-5">
                                    <div class="mb-5">
                                        <h2 class="mb-0 fs-exact-18">Basic information</h2>
                                    </div>
                                    <div class="mb-4">
                                        <label for="form-category/name" class="form-label">Name</label>
                                        <input type="text" wire:keyup="generateSlug" class="form-control"
                                            id="form-category/name" wire:model='name' placeholder="Hand Tools" />
                                    </div>
                                    <div class="mb-4">
                                        <label for="form-category/slug" class="form-label">Slug</label>
                                        <div class="input-group input-group--sa-slug">
                                            <span class="input-group-text"
                                                id="form-category/slug-addon">https://example.com/catalog/</span>
                                            <input type="text" class="form-control" id="form-category/slug"
                                                value="{{$slug}}" />
                                        </div>
                                        <div id="form-category/slug-help" class="form-text">
                                            Unique human-readable category identifier. No longer than 255 characters.
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <label for="form-category/description" class="form-label">Description</label>
                                        <textarea id="form-category/description" wire:model='description'
                                            class="sa-quill-control form-control" rows="8">
                                        </textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="card mt-5">
                                <div class="card-body p-5">
                                    <div class="mb-5">
                                        <h2 class="mb-0 fs-exact-18">Search engine optimization</h2>
                                        <div class="mt-3 text-muted">
                                            Provide information that will help improve the snippet and bring your
                                            category to the top of search
                                            engines.
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <label for="form-category/seo-title" class="form-label">Page title</label>
                                        <input wire:model='meta_title' type="text" class="form-control"
                                            id="form-category/seo-title" />
                                    </div>
                                    <div>
                                        <label for="form-category/seo-description" class="form-label">Meta
                                            description</label>
                                        <textarea wire:model='meta_discription' id="form-category/seo-description"
                                            class="form-control" rows="2"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sa-entity-layout__sidebar">
                            <div class="card w-100">
                                <div class="card-body p-5">
                                    <div class="mb-5">
                                        <h2 class="mb-0 fs-exact-18">Visibility</h2>
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-check">
                                            <input type="radio" class="form-check-input" wire:model="status"
                                                value="publish" name="status" chacked="" />
                                            <span class="form-check-label">Published</span>
                                        </label>
                                        <label class="form-check">
                                            <input type="radio" class="form-check-input" name="status"
                                                wire:model="status" value="schedule" checked="" />
                                            <span class="form-check-label">Scheduled</span>
                                        </label>
                                        <label class="form-check mb-0">
                                            <input type="radio" class="form-check-input" wire:model="draft"
                                                value="draft" name="status" />
                                            <span class="form-check-label">Draft</span>
                                        </label>
                                    </div>
                                    <div>
                                        <label for="form-category/seo-title" class="form-label">Publish date</label>
                                        <input type="date" class="form-control datepicker-here" wire:model="created"
                                            id="form-category/publish-date" data-auto-close="true" data-language="en" />
                                        <div class="form-text">The category will not be visible until the specified
                                            date.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="card w-100 mt-5">
                                <div class="card-body p-5">
                                    <div class="mb-5">
                                        <h2 class="mb-0 fs-exact-18">Parent category</h2>
                                    </div>
                                    <select class="sa-select2 form-select">
                                        <option>Choose one</option>
                                        <option>Screwdrivers</option>
                                        <option>Chainsaws</option>
                                        <option>Hand tools</option>
                                        <option>Machine tools</option>
                                        <option>Power machinery</option>
                                        <option>Measurements</option>
                                        <option>Power tools</option>
                                    </select>
                                    <div class="form-text">Select a category that will be the parent of the current one.
                                    </div>
                                </div>
                            </div>
                            <div class="card w-100 mt-5">
                                <div class="card-body p-5">
                                    <div class="mb-5">
                                        <h2 class="mb-0 fs-exact-18">Image</h2>
                                    </div>
                                    <div class="border p-4 d-flex justify-content-center">
                                        <div class="max-w-20x">
                                            @if($image)
                                            <img src="{{$image->temporaryUrl()}}" class="w-100 h-auto" width="320"
                                                height="320" />
                                            @else
                                            <img src="{{asset('assets/img/product-1.jpg')}}" class="w-100 h-auto"
                                                width="320" height="320" alt="" />
                                            @endif
                                        </div>
                                    </div>
                                    <div class="mt-4 mb-n2">
                                        <button><input style="width: 200px" type="file" wire:model='image' /></button>
                                        <a href="#" class="text-danger me-3 pe-2">Remove image</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>