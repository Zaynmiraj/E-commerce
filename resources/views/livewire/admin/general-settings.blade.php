<div id="top" class="sa-app__body">
    <div class="mx-sm-2 px-2 px-sm-3 px-xxl-4 pb-6">
        <div class="container container--max--xl">
            <div class="py-5">
                <div class="row g-4 align-items-center">
                    <div class="col">
                        <nav class="mb-2" aria-label="breadcrumb">
                            <ol class="breadcrumb breadcrumb-sa-simple">
                                <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Settings</li>
                            </ol>
                        </nav>
                        <h1 class="h3 m-0">Settings</h1>
                    </div>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="card text-center">
                        <a href="{{route('shop-details')}}" class="text-reset p-5 text-decoration-none sa-hover-area">
                            <div class="fs-4 mb-4 text-muted opacity-50">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-box">
                                    <path
                                        d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z">
                                    </path>
                                    <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                                    <line x1="12" y1="22.08" x2="12" y2="12"></line>
                                </svg>
                            </div>
                            <h2 class="fs-6 fw-medium mb-3">General</h2>
                            <div class="text-muted fs-exact-14">Update your store information
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="card text-center">
                        <a href="#" class="text-reset p-5 text-decoration-none sa-hover-area">
                            <div class="fs-4 mb-4 text-muted opacity-50">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-truck">
                                    <rect x="1" y="3" width="15" height="13"></rect>
                                    <polygon points="16 8 20 8 23 11 23 16 16 16 16 8"></polygon>
                                    <circle cx="5.5" cy="18.5" r="2.5"></circle>
                                    <circle cx="18.5" cy="18.5" r="2.5"></circle>
                                </svg>
                            </div>
                            <h2 class="fs-6 fw-medium mb-3">Shipping</h2>
                            <div class="text-muted fs-exact-14">Setting up Shipping </div>
                        </a>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="card text-center">
                        <a href="{{route('gateways')}}" class="text-reset p-5 text-decoration-none sa-hover-area">
                            <div class="fs-4 mb-4 text-muted opacity-50">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-credit-card">
                                    <rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect>
                                    <line x1="1" y1="10" x2="23" y2="10"></line>
                                </svg>
                            </div>
                            <h2 class="fs-6 fw-medium mb-3">Payment</h2>
                            <div class="text-muted fs-exact-14"> Updat your Payment Configuration </div>
                        </a>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="card text-center">
                        <a href="#" class="text-reset p-5 text-decoration-none sa-hover-area">
                            <div class="fs-4 mb-4 text-muted opacity-50">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-users">
                                    <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="9" cy="7" r="4"></circle>
                                    <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                </svg>
                            </div>
                            <h2 class="fs-6 fw-medium mb-3">Account</h2>
                            <div class="text-muted fs-exact-14">Update your information</div>
                        </a>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="card text-center">
                        <a href="{{route('smtp-mail')}}" class="text-reset p-5 text-decoration-none sa-hover-area">
                            <div class="fs-4 mb-4 text-muted opacity-50">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-mail">
                                    <path
                                        d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                                    </path>
                                    <polyline points="22,6 12,13 2,6"></polyline>
                                </svg>
                            </div>
                            <h2 class="fs-6 fw-medium mb-3">Email configuration</h2>
                            <div class="text-muted fs-exact-14">Email configuration and settings</div>
                        </a>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="card text-center">
                        <a href="{{route('social-links')}}" class="text-reset p-5 text-decoration-none sa-hover-area">
                            <div class="fs-4 text-muted opacity-50">
                                <i class="fa-solid fa-square-share-nodes"></i>
                            </div>
                            <h2 class="fs-6 fw-medium mb-3">Social links</h2>
                            <div class="text-muted fs-exact-14">Add social links or update
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="card text-center">
                        <a href="{{route('menus')}}" class="text-reset p-5 text-decoration-none sa-hover-area">
                            <div class="fs-4 mb-4 text-muted opacity-50">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-globe">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <line x1="2" y1="12" x2="22" y2="12"></line>
                                    <path
                                        d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z">
                                    </path>
                                </svg>
                            </div>
                            <h2 class="fs-6 fw-medium mb-3">Menu</h2>
                            <div class="text-muted fs-exact-14">Primary menu or menu items </div>
                        </a>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="card text-center">
                        <a href="#" class="text-reset p-5 text-decoration-none sa-hover-area">
                            <div class="fs-4 mb-4 text-muted opacity-50">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-unlock">
                                    <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                                    <path d="M7 11V7a5 5 0 0 1 9.9-1"></path>
                                </svg>
                            </div>
                            <h2 class="fs-6 fw-medium mb-3">Privacy</h2>
                            <div class="text-muted fs-exact-14">Privacy policy / Conditions
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="card text-center">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#addTex"
                            class="text-reset p-5 text-decoration-none sa-hover-area">
                            <div class="fs-4 mb-4 text-muted opacity-50">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-percent">
                                    <line x1="19" y1="5" x2="5" y2="19"></line>
                                    <circle cx="6.5" cy="6.5" r="2.5"></circle>
                                    <circle cx="17.5" cy="17.5" r="2.5"></circle>
                                </svg>
                            </div>
                            <h2 class="fs-6 fw-medium mb-3">Taxes</h2>
                            <div class="text-muted fs-exact-14">Most of the mathematical notation</div>
                        </a>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="card text-center">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#copyright"
                            class="text-reset p-5 text-decoration-none sa-hover-area">
                            <div class="fs-4 mb-4 text-muted opacity-50">
                                <i class="fa-solid fa-copyright"></i>
                            </div>
                            <h2 class="fs-6 fw-medium mb-3">Footer Copyright</h2>
                            <div class="text-muted fs-exact-14">Write your website copyright</div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="addTex" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <form wire:submit.prevent="storeTax">
                    @csrf
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Add or Update Taxs</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body edit-body">

                        <div class="form-group">
                            <label class="label-text">Tax amount</label>
                            <input type="number" class="form-control" placeholder="0.00" name="tax_amount"
                                wire:model="tax_amount" required />
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



    <div class="modal fade" id="copyright" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <form wire:submit.prevent="AddCopyright">
                    @csrf
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Write or Update Copyright</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body edit-body">

                        <div class="form-group">
                            <label class="label-text">Copyright</label>
                            <input type="text" class="form-control" placeholder="@copyright" name="tax_amount"
                                wire:model="copyright" required />
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
</div>