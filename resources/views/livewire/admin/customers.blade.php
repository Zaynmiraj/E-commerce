<div id="top" class="sa-app__body">
    <div class="mx-sm-2 px-2 px-sm-3 px-xxl-4 pb-6">
        <div class="container">
            <div class="py-5">
                <div class="row g-4 align-items-center">
                    <div class="col">
                        <nav class="mb-2" aria-label="breadcrumb">
                            <ol class="breadcrumb breadcrumb-sa-simple">
                                <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Customers</li>
                            </ol>
                        </nav>
                        <h1 class="h3 m-0">Customers</h1>
                    </div>
                    <div class="col-auto d-flex"><a href="app-customer.html" class="btn btn-primary">New customer</a>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="p-4">
                    <input type="text" placeholder="Start typing to search for customers"
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
                            <th class="min-w-20x">Name</th>
                            <th>Registered</th>
                            <th>Country</th>
                            <th>Group</th>
                            <th>Spent</th>
                            <th class="w-min" data-orderable="false"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="checkbox" class="form-check-input m-0 fs-exact-16 d-block"
                                    aria-label="..." /></td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="app-customer.html" class="me-4">
                                        <div class="sa-symbol sa-symbol--shape--rounded sa-symbol--size--lg">
                                            <img src="images/customers/customer-1-40x40.jpg" width="40" height="40"
                                                alt="" />
                                        </div>
                                    </a>
                                    <div>
                                        <a href="app-customer.html" class="text-reset">Jessica Moore</a>
                                        <div class="text-muted mt-n1">moore-jessica@example.com</div>
                                    </div>
                                </div>
                            </td>
                            <td class="text-nowrap">June 26, 2021</td>
                            <td>USA</td>
                            <td>Default</td>
                            <td>
                                <div class="sa-price">
                                    <span class="sa-price__symbol">$</span>
                                    <span class="sa-price__integer">28,522</span>
                                    <span class="sa-price__decimal">.35</span>
                                </div>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-sa-muted btn-sm" type="button" id="customer-context-menu-0"
                                        data-bs-toggle="dropdown" aria-expanded="false" aria-label="More">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="3" height="13"
                                            fill="currentColor">
                                            <path
                                                d="M1.5,8C0.7,8,0,7.3,0,6.5S0.7,5,1.5,5S3,5.7,3,6.5S2.3,8,1.5,8z M1.5,3C0.7,3,0,2.3,0,1.5S0.7,0,1.5,0 S3,0.7,3,1.5S2.3,3,1.5,3z M1.5,10C2.3,10,3,10.7,3,11.5S2.3,13,1.5,13S0,12.3,0,11.5S0.7,10,1.5,10z">
                                            </path>
                                        </svg>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end"
                                        aria-labelledby="customer-context-menu-0">
                                        <li><a class="dropdown-item" href="#">Edit</a></li>
                                        <li><a class="dropdown-item" href="#">Duplicate</a></li>
                                        <li><a class="dropdown-item" href="#">Add tag</a></li>
                                        <li><a class="dropdown-item" href="#">Remove tag</a></li>
                                        <li>
                                            <hr class="dropdown-divider" />
                                        </li>
                                        <li><a class="dropdown-item text-danger" href="#">Delete</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" class="form-check-input m-0 fs-exact-16 d-block"
                                    aria-label="..." /></td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="app-customer.html" class="me-4">
                                        <div class="sa-symbol sa-symbol--shape--rounded sa-symbol--size--lg">
                                            <img src="images/customers/customer-2-40x40.jpg" width="40" height="40"
                                                alt="" />
                                        </div>
                                    </a>
                                    <div>
                                        <a href="app-customer.html" class="text-reset">Adam Taylor</a>
                                        <div class="text-muted mt-n1">taylor-adam@example.com</div>
                                    </div>
                                </div>
                            </td>
                            <td class="text-nowrap">May 15, 2021</td>
                            <td>Russia</td>
                            <td>Default</td>
                            <td>
                                <div class="sa-price">
                                    <span class="sa-price__symbol">$</span>
                                    <span class="sa-price__integer">34,392</span>
                                    <span class="sa-price__decimal">.10</span>
                                </div>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-sa-muted btn-sm" type="button" id="customer-context-menu-1"
                                        data-bs-toggle="dropdown" aria-expanded="false" aria-label="More">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="3" height="13"
                                            fill="currentColor">
                                            <path
                                                d="M1.5,8C0.7,8,0,7.3,0,6.5S0.7,5,1.5,5S3,5.7,3,6.5S2.3,8,1.5,8z M1.5,3C0.7,3,0,2.3,0,1.5S0.7,0,1.5,0 S3,0.7,3,1.5S2.3,3,1.5,3z M1.5,10C2.3,10,3,10.7,3,11.5S2.3,13,1.5,13S0,12.3,0,11.5S0.7,10,1.5,10z">
                                            </path>
                                        </svg>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end"
                                        aria-labelledby="customer-context-menu-1">
                                        <li><a class="dropdown-item" href="#">Edit</a></li>
                                        <li><a class="dropdown-item" href="#">Duplicate</a></li>
                                        <li><a class="dropdown-item" href="#">Add tag</a></li>
                                        <li><a class="dropdown-item" href="#">Remove tag</a></li>
                                        <li>
                                            <hr class="dropdown-divider" />
                                        </li>
                                        <li><a class="dropdown-item text-danger" href="#">Delete</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" class="form-check-input m-0 fs-exact-16 d-block"
                                    aria-label="..." /></td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="app-customer.html" class="me-4">
                                        <div class="sa-symbol sa-symbol--shape--rounded sa-symbol--size--lg">
                                            <img src="images/customers/customer-3-40x40.jpg" width="40" height="40"
                                                alt="" />
                                        </div>
                                    </a>
                                    <div>
                                        <a href="app-customer.html" class="text-reset">Helena Garcia</a>
                                        <div class="text-muted mt-n1">garcia-helena@example.com</div>
                                    </div>
                                </div>
                            </td>
                            <td class="text-nowrap">February 23, 2021</td>
                            <td>China</td>
                            <td>Default</td>
                            <td>
                                <div class="sa-price">
                                    <span class="sa-price__symbol">$</span>
                                    <span class="sa-price__integer">5,702</span>
                                    <span class="sa-price__decimal">.02</span>
                                </div>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-sa-muted btn-sm" type="button" id="customer-context-menu-2"
                                        data-bs-toggle="dropdown" aria-expanded="false" aria-label="More">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="3" height="13"
                                            fill="currentColor">
                                            <path
                                                d="M1.5,8C0.7,8,0,7.3,0,6.5S0.7,5,1.5,5S3,5.7,3,6.5S2.3,8,1.5,8z M1.5,3C0.7,3,0,2.3,0,1.5S0.7,0,1.5,0 S3,0.7,3,1.5S2.3,3,1.5,3z M1.5,10C2.3,10,3,10.7,3,11.5S2.3,13,1.5,13S0,12.3,0,11.5S0.7,10,1.5,10z">
                                            </path>
                                        </svg>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end"
                                        aria-labelledby="customer-context-menu-2">
                                        <li><a class="dropdown-item" href="#">Edit</a></li>
                                        <li><a class="dropdown-item" href="#">Duplicate</a></li>
                                        <li><a class="dropdown-item" href="#">Add tag</a></li>
                                        <li><a class="dropdown-item" href="#">Remove tag</a></li>
                                        <li>
                                            <hr class="dropdown-divider" />
                                        </li>
                                        <li><a class="dropdown-item text-danger" href="#">Delete</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" class="form-check-input m-0 fs-exact-16 d-block"
                                    aria-label="..." /></td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="app-customer.html" class="me-4">
                                        <div class="sa-symbol sa-symbol--shape--rounded sa-symbol--size--lg">
                                            <img src="images/customers/customer-4-40x40.jpg" width="40" height="40"
                                                alt="" />
                                        </div>
                                    </a>
                                    <div>
                                        <a href="app-customer.html" class="text-reset">Ryan Ford</a>
                                        <div class="text-muted mt-n1">ford-ryan@example.com</div>
                                    </div>
                                </div>
                            </td>
                            <td class="text-nowrap">Oct 19, 2021</td>
                            <td>India</td>
                            <td>Default</td>
                            <td>
                                <div class="sa-price">
                                    <span class="sa-price__symbol">$</span>
                                    <span class="sa-price__integer">973</span>
                                    <span class="sa-price__decimal">.64</span>
                                </div>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-sa-muted btn-sm" type="button" id="customer-context-menu-3"
                                        data-bs-toggle="dropdown" aria-expanded="false" aria-label="More">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="3" height="13"
                                            fill="currentColor">
                                            <path
                                                d="M1.5,8C0.7,8,0,7.3,0,6.5S0.7,5,1.5,5S3,5.7,3,6.5S2.3,8,1.5,8z M1.5,3C0.7,3,0,2.3,0,1.5S0.7,0,1.5,0 S3,0.7,3,1.5S2.3,3,1.5,3z M1.5,10C2.3,10,3,10.7,3,11.5S2.3,13,1.5,13S0,12.3,0,11.5S0.7,10,1.5,10z">
                                            </path>
                                        </svg>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end"
                                        aria-labelledby="customer-context-menu-3">
                                        <li><a class="dropdown-item" href="#">Edit</a></li>
                                        <li><a class="dropdown-item" href="#">Duplicate</a></li>
                                        <li><a class="dropdown-item" href="#">Add tag</a></li>
                                        <li><a class="dropdown-item" href="#">Remove tag</a></li>
                                        <li>
                                            <hr class="dropdown-divider" />
                                        </li>
                                        <li><a class="dropdown-item text-danger" href="#">Delete</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" class="form-check-input m-0 fs-exact-16 d-block"
                                    aria-label="..." /></td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="app-customer.html" class="me-4">
                                        <div class="sa-symbol sa-symbol--shape--rounded sa-symbol--size--lg">
                                            <img src="images/customers/customer-5-40x40.jpg" width="40" height="40"
                                                alt="" />
                                        </div>
                                    </a>
                                    <div>
                                        <a href="app-customer.html" class="text-reset">Olivia Smith</a>
                                        <div class="text-muted mt-n1">smith-olivia@example.com</div>
                                    </div>
                                </div>
                            </td>
                            <td class="text-nowrap">November 9, 2021</td>
                            <td>USA</td>
                            <td>Default</td>
                            <td>
                                <div class="sa-price">
                                    <span class="sa-price__symbol">$</span>
                                    <span class="sa-price__integer">8,061</span>
                                    <span class="sa-price__decimal">.02</span>
                                </div>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-sa-muted btn-sm" type="button" id="customer-context-menu-4"
                                        data-bs-toggle="dropdown" aria-expanded="false" aria-label="More">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="3" height="13"
                                            fill="currentColor">
                                            <path
                                                d="M1.5,8C0.7,8,0,7.3,0,6.5S0.7,5,1.5,5S3,5.7,3,6.5S2.3,8,1.5,8z M1.5,3C0.7,3,0,2.3,0,1.5S0.7,0,1.5,0 S3,0.7,3,1.5S2.3,3,1.5,3z M1.5,10C2.3,10,3,10.7,3,11.5S2.3,13,1.5,13S0,12.3,0,11.5S0.7,10,1.5,10z">
                                            </path>
                                        </svg>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end"
                                        aria-labelledby="customer-context-menu-4">
                                        <li><a class="dropdown-item" href="#">Edit</a></li>
                                        <li><a class="dropdown-item" href="#">Duplicate</a></li>
                                        <li><a class="dropdown-item" href="#">Add tag</a></li>
                                        <li><a class="dropdown-item" href="#">Remove tag</a></li>
                                        <li>
                                            <hr class="dropdown-divider" />
                                        </li>
                                        <li><a class="dropdown-item text-danger" href="#">Delete</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" class="form-check-input m-0 fs-exact-16 d-block"
                                    aria-label="..." /></td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="app-customer.html" class="me-4">
                                        <div class="sa-symbol sa-symbol--shape--rounded sa-symbol--size--lg">
                                            <img src="images/customers/customer-6-40x40.jpg" width="40" height="40"
                                                alt="" />
                                        </div>
                                    </a>
                                    <div>
                                        <a href="app-customer.html" class="text-reset">Kevin Smith</a>
                                        <div class="text-muted mt-n1">smith-kevin@example.com</div>
                                    </div>
                                </div>
                            </td>
                            <td class="text-nowrap">April 4, 2021</td>
                            <td>Poland</td>
                            <td>Default</td>
                            <td>
                                <div class="sa-price">
                                    <span class="sa-price__symbol">$</span>
                                    <span class="sa-price__integer">6,147</span>
                                    <span class="sa-price__decimal">.64</span>
                                </div>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-sa-muted btn-sm" type="button" id="customer-context-menu-5"
                                        data-bs-toggle="dropdown" aria-expanded="false" aria-label="More">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="3" height="13"
                                            fill="currentColor">
                                            <path
                                                d="M1.5,8C0.7,8,0,7.3,0,6.5S0.7,5,1.5,5S3,5.7,3,6.5S2.3,8,1.5,8z M1.5,3C0.7,3,0,2.3,0,1.5S0.7,0,1.5,0 S3,0.7,3,1.5S2.3,3,1.5,3z M1.5,10C2.3,10,3,10.7,3,11.5S2.3,13,1.5,13S0,12.3,0,11.5S0.7,10,1.5,10z">
                                            </path>
                                        </svg>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end"
                                        aria-labelledby="customer-context-menu-5">
                                        <li><a class="dropdown-item" href="#">Edit</a></li>
                                        <li><a class="dropdown-item" href="#">Duplicate</a></li>
                                        <li><a class="dropdown-item" href="#">Add tag</a></li>
                                        <li><a class="dropdown-item" href="#">Remove tag</a></li>
                                        <li>
                                            <hr class="dropdown-divider" />
                                        </li>
                                        <li><a class="dropdown-item text-danger" href="#">Delete</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" class="form-check-input m-0 fs-exact-16 d-block"
                                    aria-label="..." /></td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="app-customer.html" class="me-4">
                                        <div class="sa-symbol sa-symbol--shape--rounded sa-symbol--size--lg">
                                            <img src="images/customers/customer-7-40x40.jpg" width="40" height="40"
                                                alt="" />
                                        </div>
                                    </a>
                                    <div>
                                        <a href="app-customer.html" class="text-reset">Brian Wood</a>
                                        <div class="text-muted mt-n1">wood-brian@example.com</div>
                                    </div>
                                </div>
                            </td>
                            <td class="text-nowrap">August 17, 2021</td>
                            <td>Germany</td>
                            <td>Default</td>
                            <td>
                                <div class="sa-price">
                                    <span class="sa-price__symbol">$</span>
                                    <span class="sa-price__integer">1,332</span>
                                    <span class="sa-price__decimal">.58</span>
                                </div>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-sa-muted btn-sm" type="button" id="customer-context-menu-6"
                                        data-bs-toggle="dropdown" aria-expanded="false" aria-label="More">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="3" height="13"
                                            fill="currentColor">
                                            <path
                                                d="M1.5,8C0.7,8,0,7.3,0,6.5S0.7,5,1.5,5S3,5.7,3,6.5S2.3,8,1.5,8z M1.5,3C0.7,3,0,2.3,0,1.5S0.7,0,1.5,0 S3,0.7,3,1.5S2.3,3,1.5,3z M1.5,10C2.3,10,3,10.7,3,11.5S2.3,13,1.5,13S0,12.3,0,11.5S0.7,10,1.5,10z">
                                            </path>
                                        </svg>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end"
                                        aria-labelledby="customer-context-menu-6">
                                        <li><a class="dropdown-item" href="#">Edit</a></li>
                                        <li><a class="dropdown-item" href="#">Duplicate</a></li>
                                        <li><a class="dropdown-item" href="#">Add tag</a></li>
                                        <li><a class="dropdown-item" href="#">Remove tag</a></li>
                                        <li>
                                            <hr class="dropdown-divider" />
                                        </li>
                                        <li><a class="dropdown-item text-danger" href="#">Delete</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" class="form-check-input m-0 fs-exact-16 d-block"
                                    aria-label="..." /></td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="app-customer.html" class="me-4">
                                        <div class="sa-symbol sa-symbol--shape--rounded sa-symbol--size--lg">
                                            <img src="images/customers/customer-8-40x40.jpg" width="40" height="40"
                                                alt="" />
                                        </div>
                                    </a>
                                    <div>
                                        <a href="app-customer.html" class="text-reset">Ethan Young</a>
                                        <div class="text-muted mt-n1">young-ethan@example.com</div>
                                    </div>
                                </div>
                            </td>
                            <td class="text-nowrap">September 28, 2021</td>
                            <td>Russia</td>
                            <td>Wholesaler</td>
                            <td>
                                <div class="sa-price">
                                    <span class="sa-price__symbol">$</span>
                                    <span class="sa-price__integer">594</span>
                                    <span class="sa-price__decimal">.97</span>
                                </div>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-sa-muted btn-sm" type="button" id="customer-context-menu-7"
                                        data-bs-toggle="dropdown" aria-expanded="false" aria-label="More">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="3" height="13"
                                            fill="currentColor">
                                            <path
                                                d="M1.5,8C0.7,8,0,7.3,0,6.5S0.7,5,1.5,5S3,5.7,3,6.5S2.3,8,1.5,8z M1.5,3C0.7,3,0,2.3,0,1.5S0.7,0,1.5,0 S3,0.7,3,1.5S2.3,3,1.5,3z M1.5,10C2.3,10,3,10.7,3,11.5S2.3,13,1.5,13S0,12.3,0,11.5S0.7,10,1.5,10z">
                                            </path>
                                        </svg>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end"
                                        aria-labelledby="customer-context-menu-7">
                                        <li><a class="dropdown-item" href="#">Edit</a></li>
                                        <li><a class="dropdown-item" href="#">Duplicate</a></li>
                                        <li><a class="dropdown-item" href="#">Add tag</a></li>
                                        <li><a class="dropdown-item" href="#">Remove tag</a></li>
                                        <li>
                                            <hr class="dropdown-divider" />
                                        </li>
                                        <li><a class="dropdown-item text-danger" href="#">Delete</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" class="form-check-input m-0 fs-exact-16 d-block"
                                    aria-label="..." /></td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="app-customer.html" class="me-4">
                                        <div class="sa-symbol sa-symbol--shape--rounded sa-symbol--size--lg">
                                            <img src="images/customers/customer-9-40x40.jpg" width="40" height="40"
                                                alt="" />
                                        </div>
                                    </a>
                                    <div>
                                        <a href="app-customer.html" class="text-reset">Charlotte Jones</a>
                                        <div class="text-muted mt-n1">jones-charlotte@example.com</div>
                                    </div>
                                </div>
                            </td>
                            <td class="text-nowrap">December 31, 2021</td>
                            <td>Canada</td>
                            <td>Default</td>
                            <td>
                                <div class="sa-price">
                                    <span class="sa-price__symbol">$</span>
                                    <span class="sa-price__integer">5,192</span>
                                    <span class="sa-price__decimal">.42</span>
                                </div>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-sa-muted btn-sm" type="button" id="customer-context-menu-8"
                                        data-bs-toggle="dropdown" aria-expanded="false" aria-label="More">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="3" height="13"
                                            fill="currentColor">
                                            <path
                                                d="M1.5,8C0.7,8,0,7.3,0,6.5S0.7,5,1.5,5S3,5.7,3,6.5S2.3,8,1.5,8z M1.5,3C0.7,3,0,2.3,0,1.5S0.7,0,1.5,0 S3,0.7,3,1.5S2.3,3,1.5,3z M1.5,10C2.3,10,3,10.7,3,11.5S2.3,13,1.5,13S0,12.3,0,11.5S0.7,10,1.5,10z">
                                            </path>
                                        </svg>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end"
                                        aria-labelledby="customer-context-menu-8">
                                        <li><a class="dropdown-item" href="#">Edit</a></li>
                                        <li><a class="dropdown-item" href="#">Duplicate</a></li>
                                        <li><a class="dropdown-item" href="#">Add tag</a></li>
                                        <li><a class="dropdown-item" href="#">Remove tag</a></li>
                                        <li>
                                            <hr class="dropdown-divider" />
                                        </li>
                                        <li><a class="dropdown-item text-danger" href="#">Delete</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" class="form-check-input m-0 fs-exact-16 d-block"
                                    aria-label="..." /></td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="app-customer.html" class="me-4">
                                        <div class="sa-symbol sa-symbol--shape--rounded sa-symbol--size--lg">
                                            <img src="images/customers/customer-10-40x40.jpg" width="40" height="40"
                                                alt="" />
                                        </div>
                                    </a>
                                    <div>
                                        <a href="app-customer.html" class="text-reset">Isabel Williams</a>
                                        <div class="text-muted mt-n1">williams-isabel@example.com</div>
                                    </div>
                                </div>
                            </td>
                            <td class="text-nowrap">October 2, 2021</td>
                            <td>China</td>
                            <td>Default</td>
                            <td>
                                <div class="sa-price">
                                    <span class="sa-price__symbol">$</span>
                                    <span class="sa-price__integer">35,762</span>
                                    <span class="sa-price__decimal">.74</span>
                                </div>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-sa-muted btn-sm" type="button" id="customer-context-menu-9"
                                        data-bs-toggle="dropdown" aria-expanded="false" aria-label="More">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="3" height="13"
                                            fill="currentColor">
                                            <path
                                                d="M1.5,8C0.7,8,0,7.3,0,6.5S0.7,5,1.5,5S3,5.7,3,6.5S2.3,8,1.5,8z M1.5,3C0.7,3,0,2.3,0,1.5S0.7,0,1.5,0 S3,0.7,3,1.5S2.3,3,1.5,3z M1.5,10C2.3,10,3,10.7,3,11.5S2.3,13,1.5,13S0,12.3,0,11.5S0.7,10,1.5,10z">
                                            </path>
                                        </svg>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end"
                                        aria-labelledby="customer-context-menu-9">
                                        <li><a class="dropdown-item" href="#">Edit</a></li>
                                        <li><a class="dropdown-item" href="#">Duplicate</a></li>
                                        <li><a class="dropdown-item" href="#">Add tag</a></li>
                                        <li><a class="dropdown-item" href="#">Remove tag</a></li>
                                        <li>
                                            <hr class="dropdown-divider" />
                                        </li>
                                        <li><a class="dropdown-item text-danger" href="#">Delete</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" class="form-check-input m-0 fs-exact-16 d-block"
                                    aria-label="..." /></td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="app-customer.html" class="me-4">
                                        <div class="sa-symbol sa-symbol--shape--rounded sa-symbol--size--lg">
                                            <img src="images/customers/customer-11-40x40.jpg" width="40" height="40"
                                                alt="" />
                                        </div>
                                    </a>
                                    <div>
                                        <a href="app-customer.html" class="text-reset">Jacob Lee</a>
                                        <div class="text-muted mt-n1">lee-jacob@example.com</div>
                                    </div>
                                </div>
                            </td>
                            <td class="text-nowrap">May 12, 2021</td>
                            <td>Ukraine</td>
                            <td>Wholesaler</td>
                            <td>
                                <div class="sa-price">
                                    <span class="sa-price__symbol">$</span>
                                    <span class="sa-price__integer">911</span>
                                    <span class="sa-price__decimal">.27</span>
                                </div>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-sa-muted btn-sm" type="button" id="customer-context-menu-10"
                                        data-bs-toggle="dropdown" aria-expanded="false" aria-label="More">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="3" height="13"
                                            fill="currentColor">
                                            <path
                                                d="M1.5,8C0.7,8,0,7.3,0,6.5S0.7,5,1.5,5S3,5.7,3,6.5S2.3,8,1.5,8z M1.5,3C0.7,3,0,2.3,0,1.5S0.7,0,1.5,0 S3,0.7,3,1.5S2.3,3,1.5,3z M1.5,10C2.3,10,3,10.7,3,11.5S2.3,13,1.5,13S0,12.3,0,11.5S0.7,10,1.5,10z">
                                            </path>
                                        </svg>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end"
                                        aria-labelledby="customer-context-menu-10">
                                        <li><a class="dropdown-item" href="#">Edit</a></li>
                                        <li><a class="dropdown-item" href="#">Duplicate</a></li>
                                        <li><a class="dropdown-item" href="#">Add tag</a></li>
                                        <li><a class="dropdown-item" href="#">Remove tag</a></li>
                                        <li>
                                            <hr class="dropdown-divider" />
                                        </li>
                                        <li><a class="dropdown-item text-danger" href="#">Delete</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" class="form-check-input m-0 fs-exact-16 d-block"
                                    aria-label="..." /></td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="app-customer.html" class="me-4">
                                        <div class="sa-symbol sa-symbol--shape--rounded sa-symbol--size--lg">
                                            <img src="images/customers/customer-12-40x40.jpg" width="40" height="40"
                                                alt="" />
                                        </div>
                                    </a>
                                    <div>
                                        <a href="app-customer.html" class="text-reset">Anna Wilson</a>
                                        <div class="text-muted mt-n1">wilson-anna@example.com</div>
                                    </div>
                                </div>
                            </td>
                            <td class="text-nowrap">February 26, 2021</td>
                            <td>Italy</td>
                            <td>Wholesaler</td>
                            <td>
                                <div class="sa-price">
                                    <span class="sa-price__symbol">$</span>
                                    <span class="sa-price__integer">25,486</span>
                                    <span class="sa-price__decimal">.20</span>
                                </div>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-sa-muted btn-sm" type="button" id="customer-context-menu-11"
                                        data-bs-toggle="dropdown" aria-expanded="false" aria-label="More">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="3" height="13"
                                            fill="currentColor">
                                            <path
                                                d="M1.5,8C0.7,8,0,7.3,0,6.5S0.7,5,1.5,5S3,5.7,3,6.5S2.3,8,1.5,8z M1.5,3C0.7,3,0,2.3,0,1.5S0.7,0,1.5,0 S3,0.7,3,1.5S2.3,3,1.5,3z M1.5,10C2.3,10,3,10.7,3,11.5S2.3,13,1.5,13S0,12.3,0,11.5S0.7,10,1.5,10z">
                                            </path>
                                        </svg>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end"
                                        aria-labelledby="customer-context-menu-11">
                                        <li><a class="dropdown-item" href="#">Edit</a></li>
                                        <li><a class="dropdown-item" href="#">Duplicate</a></li>
                                        <li><a class="dropdown-item" href="#">Add tag</a></li>
                                        <li><a class="dropdown-item" href="#">Remove tag</a></li>
                                        <li>
                                            <hr class="dropdown-divider" />
                                        </li>
                                        <li><a class="dropdown-item text-danger" href="#">Delete</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>