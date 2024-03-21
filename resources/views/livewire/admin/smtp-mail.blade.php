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
                    <h4 class="headings heading-text p-3"> Email Setting </h4>
                    <div class="sa-divider"></div>
                    <div class="p-5 row">
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label class="control-label">Status</label>
                                <select class="form-control border rounded" wire:model="status">
                                    <option value="">Choose SMTP </option>
                                    <option value="1">Active</option>
                                    <option value="0">Disable </option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Mail Host</label>
                                <input type="text" class="form-control rounded" id="storeName" wire:model="host"
                                    placeholder="Mail Host" />
                            </div>
                            <div class="form-group">
                                <label class="control-label">Mail Username</label>
                                <input type="email" class="form-control rounded" id="storeName" wire:model="username"
                                    placeholder="Username" />
                            </div>

                            <div class="form-group">
                                <label class="control-label">Mail Encryption</label>
                                <input type="text" class="form-control rounded" id="storeName" wire:model="encryption"
                                    placeholder="Mail Encryption" />
                            </div>
                            <div class="form-group">
                                <label class="control-label">Mail From Name</label>
                                <input type="text" class="form-control rounded" id="storeName" wire:model="name"
                                    placeholder="Mail From Name" />
                            </div>

                        </div>
                        <div class="col-md-6 col-sm-12">

                            <div class="form-group">
                                <label class="control-label">Mail Mailer</label>
                                <select class="form-control border rounded" wire:model="mailer">
                                    <option>Choose smtp </option>
                                    <option value="smtp">Smtp </option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Mail Port</label>
                                <input type="text" class="form-control rounded" id="storeName" wire:model="port"
                                    placeholder="Mail port" />
                            </div>

                            <div class="form-group">
                                <label class="control-label">Password</label>
                                <input type="password" class="form-control rounded" id="storeName" wire:model="password"
                                    placeholder="Password" />
                            </div>
                            <div class="form-group">
                                <label class="control-label">Mail From Address</label>
                                <input type="text" class="form-control rounded" id="storeName" wire:model="address"
                                    placeholder="Mail From Address" />
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>