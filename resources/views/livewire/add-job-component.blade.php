<div>
    <div class="w3-container">
        <div id="job" class="w3-modal" wire:ignore.self>
            <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">
                <div class="w3-center"><br>
                    <span onclick="document.getElementById('job').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
                </div>

                <div class="main">
                    <form wire:submit.prevent='storeJob' class="w3-container first">
                        <h1 class="modal-h1">JOB UPLOAD FORM</h1>
                        @if (Session::has('success_message'))
                            <div class="alert alert-success">
                                {{ Session::get('success_message') }}
                            </div>
                        @endif
                        <div class="userInput">
                            <div class="modal-div">
                                <label for="" class="modal-label">JOB TITLE</label> <br>
                                <input class="modal-input" type="text" wire:model='job_title'>
                                @error('job_title') <p class="text-danger">{{ $message }}</p> @enderror
                            </div>
                            <div class="modal-div">
                                <label for="" class="modal-label">COMPANY NAME</label> <br>
                                <input class="modal-input" type="text" wire:model='company'>
                                @error('company') <p class="text-danger">{{ $message }}</p> @enderror
                            </div>
                            <div class="modal-div">
                                <label for="" class="modal-label">COMPANY URL</label> <br>
                                <input class="modal-input" type="text" wire:model='company_url_link'>
                                @error('company_url_link') <p class="text-danger">{{ $message }}</p> @enderror
                            </div>
                            <div class="modal-div">
                                <label for="" class="modal-label">JOB CATEGORY</label> <br>
                                <input class="modal-input" type="text" wire:model='job_category'>
                                @error('job_category') <p class="text-danger">{{ $message }}</p> @enderror
                            </div>
                            <div class="modal-div">
                                <label for="" class="modal-label">TYPE OF ROLE</label> <br>
                                <select name="" id="" class="modal-select" wire:model='job_type_role'>
                                    <option value="" selected disabled class="modal-option">Choose role</option>
                                    @foreach ($typeofroles as $typeofrole)
                                        <option value="{{ $typeofrole->Typeofrole_ID }}" class="modal-option">{{ $typeofrole->Typeofrole_Name }}</option>
                                    @endforeach
                                </select>
                                @error('job_type_role') <p class="text-danger">{{ $message }}</p> @enderror
                            </div>
                            <div class="modal-div">
                                <label for="" class="modal-label">SALARY</label> <br>
                                <input class="modal-input" type="number" wire:model='salary'>
                                @error('salary') <p class="text-danger">{{ $message }}</p> @enderror
                            </div>
                            <div class="modal-div">
                                <label for="" class="modal-label">JOB LOCATION</label> <br>
                                <input class="modal-input" type="text" wire:model='job_location'>
                                @error('job_loaction') <p class="text-danger">{{ $message }}</p> @enderror
                            </div>
                            <div class="modal-div">
                                <label for="" class="modal-label">EXPERIENCE lEVEL</label> <br>
                                <select name="" id="" class="modal-select" wire:model='exp_level'>
                                    <option value="" selected disabled class="modal-option">Choose Exp Level</option>
                                    <option value="Fresher/Entry" class="modal-option">Fresher/Entry</option>
                                    <option value="Manager" class="modal-option">Manager</option>
                                    <option value="Director Above" class="modal-option">Director Above</option>
                                    <option value="1year_Exp & Above" class="modal-option">1year_Exp & Above</option>
                                </select>
                                @error('exp_level') <p class="text-danger">{{ $message }}</p> @enderror
                            </div>
                            <div class="modal-div">
                                <label for="" class="modal-label">DESCRIPTION</label> <br>
                                <textarea class="modal-input" name="" id="" cols="30" rows="10" wire:model='job_description'></textarea>
                                @error('job_description') <p class="text-danger">{{ $message }}</p> @enderror
                            </div>
                            <button type="submit" class="uploadBtn">UPLOAD</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
