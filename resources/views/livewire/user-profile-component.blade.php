<div>
    <section style="background-color: #eee;">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card mb-4">
                        <div class="card-body text-center">
                            @if ($user->profile_photo_path)
                                <img src="{{ asset('images/profile_images') }}/{{ $user->profile_photo_path }}"
                                    alt="avatar" class="rounded-circle img-fluid" style="width: 150px; margin:auto;">
                            @else
                                <img src="{{ asset('images/profile_images/profile.jpg') }}" alt="avatar"
                                    class="rounded-circle img-fluid" style="width: 150px; margin:auto;">
                            @endif
                            <h5 class="my-3 py-3">{{ $user->name }}</h5>
                            <div class="d-flex justify-content-center mb-2">
                                <button type="file" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#staticBackdrop">Upload</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 py-1">
                    <div class="card mb-4">
                        <div class="card-body" style="padding-bottom: 50px;">
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Full Name</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{ $user->name }}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Email</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{ $user->email }}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Phone</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{ $user->phone }}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Mobile</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{ $user->mobile }}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Address</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{ $user->block }}, {{ $user->street }},
                                        {{ $user->unit }}, {{ $user->postal_code }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Upload Modal --}}
    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true" wire:ignore.self>
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Upload User Profile</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    @if (Session::has('success_message'))
                        <div class="alert alert-success">{{ Session::get('success_message') }}</div>
                    @endif
                    <form wire:submit.prevent="uploadProfile" enctype="multipart/form-data">
                        <div class="mb-3 row">
                            <label for="name" class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="name" placeholder="Enter your name"
                                    wire:model.defer="name">
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="phone" class="col-sm-2 col-form-label">Phone</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" id="phone"
                                    placeholder="Enter your phone number" wire:model.defer="phone">
                                @error('phone')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="mobile" class="col-sm-2 col-form-label">Mobile</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" id="mobile"
                                    placeholder="Enter your mobile number" wire:model.defer="mobile">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="block" class="col-sm-2 col-form-label">Block</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="block"
                                    placeholder="Enter your block number" wire:model.defer="block">
                                @error('block')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="street" class="col-sm-2 col-form-label">Street</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="street"
                                    placeholder="Enter your street number" wire:model.defer="street">
                                @error('street')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="unit" class="col-sm-2 col-form-label">Unit</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="unit"
                                    placeholder="Enter your unit number" wire:model.defer="unit">
                                @error('unit')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="postal_code" class="col-sm-2 col-form-label">Postal_code</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="postal_code"
                                    placeholder="Enter your postal_code number" wire:model.defer="postal_code">
                                @error('postal_code')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="address" class="col-sm-2 col-form-label">Image</label>
                            <div class="col-sm-10">
                                <input type="file" class="form-control" id="address"
                                    wire:model.defer="profile_image">
                                @error('profile_image')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Upload</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @if (Session::has('success_message'))
        <script>
            toastr.success("{!! Session::get('success_message') !!}");
        </script>
    @endif
</div>
