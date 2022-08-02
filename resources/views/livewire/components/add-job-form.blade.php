<div class="main">
    <form wire:submit.prevent='storeJob' class="w3-container first" enctype="multipart/form-data">
        <h1 class="modal-h1">JOB UPLOAD FORM</h1>
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
                @error('job_location') <p class="text-danger">{{ $message }}</p> @enderror
            </div>
            <div class="modal-div">
                <label for="" class="modal-label">EXP LEVEL</label> <br>
                <select name="" id="" class="modal-select" wire:model='exp_level'>
                    <option value="" selected disabled class="modal-option">Choose Level</option>
                    <option value="Fresher/Entry" class="modal-option-room">Fresher/Entry</option>
                    <option value="Manager" class="modal-option-room">Manager</option>
                    <option value="Director Above" class="modal-option-room">Director Above</option>
                    <option value="1year_Exp & Above" class="modal-option-room">1year_Exp & Above</option>
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
