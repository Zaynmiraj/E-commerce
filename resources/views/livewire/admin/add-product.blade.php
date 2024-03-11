<div id="top" class="sa-app__body">
    <form wire:submit.prevent='store'>
        <div class="mx-sm-2 px-2 px-sm-3 px-xxl-4 pb-6">
            <form wire:submit.prevent="store">
                <div class="container">
                    <div class="py-5">
                        <div class="row g-4 align-items-center">
                            <div class="col">
                                <nav class="mb-2" aria-label="breadcrumb">
                                    <ol class="breadcrumb breadcrumb-sa-simple">
                                        <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="">Products</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">{{$pageTitle}}</li>
                                    </ol>
                                </nav>
                                <h1 class="h3 m-0"> {{$pageTitle}} </h1>
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
                                            <label for="form-product/name" class="form-label">Name</label>
                                            <input type="text" class="form-control" wire:model="product_name"
                                                wire:keyup="Make()" />
                                            @error('product_name') <span class="error text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="mb-4">
                                            <label for="form-product/slug" class="form-label">Slug</label>
                                            <div class="input-group input-group--sa-slug">
                                                <span class="input-group-text"
                                                    id="form-product/slug-addon">https://example.com/products/</span>
                                                <input type="text" class="form-control" name="product_slug"
                                                    value="{{$product_slug}}" />
                                                @error('product_slug') <span class="error text-danger">{{ $message
                                                    }}</span>
                                                @enderror
                                            </div>
                                            <div id="form-product/slug-help" class="form-text">
                                                Unique human-readable product identifier. No longer than 255 characters.
                                            </div>
                                        </div>
                                        <div class="mb-4">
                                            <label for="form-product/description" class="form-label">Description</label>
                                            <textarea wire:model="description" id="form-product/description"
                                                class="sa-quill-control form-control" rows="8">
                                                            </textarea>
                                        </div>
                                        <div>
                                            <label for="form-product/short-description" class="form-label">Short
                                                description</label>
                                            <textarea wire:model="short_description" id="form-product/short-description"
                                                class="form-control" rows="2"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mt-5">
                                    <div class="card-body p-5">
                                        <div class="mb-5">
                                            <h2 class="mb-0 fs-exact-18">Pricing</h2>
                                        </div>
                                        <div class="row g-4">
                                            <div class="col">
                                                <label for="form-product/price" class="form-label">Price</label>
                                                <input wire:model="sale_price" type="number" class="form-control"
                                                    id="form-product/price" />
                                                @error('sale_price') <span class="error text-danger">{{ $message
                                                    }}</span>
                                                @enderror
                                            </div>
                                            <div class="col">
                                                <label for="form-product/old-price" class="form-label">Old price</label>
                                                <input wire:model="regular_price" type="number" class="form-control"
                                                    id="form-product/old-price" />
                                                @error('regular_price') <span class="error text-danger">{{ $message
                                                    }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="mt-4 mb-n2"><a href="#">Schedule discount</a></div>
                                    </div>
                                </div>
                                <div class="card mt-5">
                                    <div class="card-body p-5">
                                        <div class="mb-5">
                                            <h2 class="mb-0 fs-exact-18">Inventory</h2>
                                        </div>
                                        <div class="mb-4 pt-2">
                                            <label class="form-check">
                                                <input wire:model="enable_stock" type="checkbox"
                                                    class="form-check-input" />
                                                <span class="form-check-label">Enable stock management</span>
                                            </label>
                                        </div>
                                        <div>
                                            <label for="form-product/quantity" class="form-label">Stock quantity</label>
                                            <input wire:model="stock_quantity" type="number" class="form-control"
                                                id="form-product/quantity" placeholder="18" />
                                        </div>
                                    </div>
                                </div>
                                <div class="card mt-5">
                                    <div class="card-body p-5">
                                        <div class="mb-5">
                                            <h2 class="mb-0 fs-exact-18">Images</h2>
                                        </div>
                                    </div>
                                    <div class="mt-n5">
                                        <div class="sa-divider"></div>
                                        <div class="table-responsive">
                                            <table class="sa-table">
                                                <thead>
                                                    <tr>
                                                        <th class="w-min">Image</th>
                                                        <th class="min-w-10x">Alt text</th>
                                                        <th class="w-min">Order</th>
                                                        <th class="w-min"></th>
                                                    </tr>
                                                </thead>
                                                @if($images)
                                                @foreach($images as $item)
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div
                                                                class="sa-symbol sa-symbol--shape--rounded sa-symbol--size--lg">
                                                                <img src="{{$item->temporaryUrl()}}" width="80"
                                                                    height="80" alt="" />
                                                            </div>
                                                        </td>
                                                        <td><input type="text" class="form-control form-control-sm" />
                                                        </td>
                                                        <td><input type="number"
                                                                class="form-control form-control-sm w-4x" value="0" />
                                                        </td>
                                                        <td>
                                                            <button class="btn btn-sa-muted btn-sm mx-n3" type="button"
                                                                aria-label="Delete image" data-bs-toggle="tooltip"
                                                                data-bs-placement="right" title="Delete image">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                    height="12" viewBox="0 0 12 12" fill="currentColor">
                                                                    <path
                                                                        d="M10.8,10.8L10.8,10.8c-0.4,0.4-1,0.4-1.4,0L6,7.4l-3.4,3.4c-0.4,0.4-1,0.4-1.4,0l0,0c-0.4-0.4-0.4-1,0-1.4L4.6,6L1.2,2.6 c-0.4-0.4-0.4-1,0-1.4l0,0c0.4-0.4,1-0.4,1.4,0L6,4.6l3.4-3.4c0.4-0.4,1-0.4,1.4,0l0,0c0.4,0.4,0.4,1,0,1.4L7.4,6l3.4,3.4 C11.2,9.8,11.2,10.4,10.8,10.8z">
                                                                    </path>
                                                                </svg>
                                                            </button>
                                                        </td>

                                                    </tr>
                                                </tbody>
                                                @endforeach
                                                @endif
                                            </table>
                                        </div>
                                        <div class="sa-divider"></div>
                                        <div class="px-5 py-4 my-2"><input type="file" wire:model="images" multiple />
                                            @error('images') <span class="error text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="card mt-5">
                                    <div class="card-body p-5">
                                        <div class="mb-5">
                                            <h2 class="mb-0 fs-exact-18">Search engine optimization</h2>
                                            <div class="mt-3 text-muted">
                                                Provide information that will help improve the snippet and bring your
                                                product to
                                                the top of search
                                                engines.
                                            </div>
                                        </div>
                                        <div class="mb-4">
                                            <label for="form-product/seo-title" class="form-label">Page title</label>
                                            <input wire:model="meta_title" type="text" class="form-control"
                                                id="form-product/seo-title" />
                                        </div>
                                        <div>
                                            <label for="form-product/seo-description" class="form-label">Meta
                                                description</label>
                                            <textarea wire:model="meta_description" id="form-product/seo-description"
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
                                                    value="published" name="status" chacked="" />
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
                                            @error('status') <span class="error text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div>
                                            <label for="form-product/seo-title" class="form-label">Publish date</label>
                                            <input type="date" class="form-control " wire:model="publish_date"
                                                data-auto-close="true" data-language="en" />
                                        </div>
                                    </div>
                                </div>
                                <div class="card w-100 mt-5">
                                    <div class="card-body p-5">
                                        <div class="mb-5">
                                            <h2 class="mb-0 fs-exact-18">Categories</h2>
                                        </div>
                                        <select class=" form-select" wire:model="category">
                                            <option value="">Select a category</option>
                                            @if($categories->count() > 0)
                                            @foreach($categories as $category)
                                            <option value="{{$category->id}}"> {{$category->name}} </option>
                                            @endforeach
                                            @endif
                                        </select>
                                        @error('category') <span class="error text-danger">{{ $message }}</span>
                                        @enderror
                                        <div class="mt-4 mb-n2"><a href="#">Add new category</a></div>
                                    </div>
                                </div>
                                <div class="card w-100 mt-5">
                                    <div class="card-body p-5">
                                        <div class="mb-5">
                                            <h2 class="mb-0 fs-exact-18">Tags</h2>
                                        </div>
                                        <select class=" form-select" data-tags="true" wire:model="tags">
                                            <option value="Universe">Universe</option>
                                            <option value="Sputnik">Sputnik</option>
                                            <option value="Steel">Steel</option>
                                            <option value="Rocket">Rocket</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </form>
</div>