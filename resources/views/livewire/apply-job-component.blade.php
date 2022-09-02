<div>
    <h3 class="info-fill mt-5">Fill Your Information</h3>
    <div class="container mb-5">
        <div class="row">
            <div class="offset-1 offset-md-2 col-11 col-md-8">
                <div class="card shadow mt-4">
                    <div class="card-body mt-4">
                        @if (Session::has('success_message'))
                            <div class="alert alert-success" role="alert">{{ Session::get('success_message') }}</div>
                        @endif
                        <form wire:submit.prevent="storeApplyJob()" enctype="multipart/form-data">
                            <div class="form-group row">
                                <label for="name" class="offset-md-1 col-sm-2 col-form-label">Position</label>
                                <div class="col-sm-8">
                                    <input type="text" name="job_title" class="form-control" id="job_title"
                                        readonly="readonly" wire:model='job_title'>
                                </div>
                            </div>
                            <div class="form-group row mt-4">
                                <label for="name" class="offset-md-1 col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-8">
                                    <input type="text" name="name" class="form-control "
                                        value="" wire:model='name'>
                                </div>
                            </div>
                            <div class="form-group row mt-4">
                                <label for="staticEmail" class="offset-md-1 col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-8">
                                    <input type="email" class="form-control " name="email"
                                        value="" wire:model='email'>
                                </div>
                            </div>
                            <div class="form-group row mt-4">
                                <label for="phone" class="offset-md-1 col-sm-2 col-form-label">Phone Number</label>
                                <div class="col-sm-8">
                                    <input type="number" class="form-control " name="phone"
                                        value="" wire:model='phone'>
                                </div>
                            </div>
                            <div class="form-group row mt-3">
                                <label for="cv" class="offset-md-1 col-sm-2 col-form-label">CV_File</label>
                                <div class="col-sm-8">
                                    <input type="file" accept=".txt,.pdf,.docx,.doc" class="form-control-file "
                                         name="cv_file" wire:model='cvfile'>
                                </div>
                            </div>
                            <input type="submit" value="Send"
                                class="btn btn-outline-primary mt-3 float-end w-15 me-5">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
