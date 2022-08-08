<div class="main">
    <form wire:submit.prevent='storeJob' class="w3-container first" enctype="multipart/form-data">
        <h1 class="modal-h1">JOB UPLOAD FORM</h1>
        <div class="userInput">

            <x-form.label><x-slot name="name">JOB TITLE</x-slot></x-form.label>
            <x-form.input><x-slot name="input" wire:model="job_title"></x-slot></x-form.input>
            <x-form.alert for="job_title" />

            <x-form.label><x-slot name="name">COMPANY NAME</x-slot></x-form.label>
            <x-form.input><x-slot name="input" wire:model="company"></x-slot></x-form.input>
            <x-form.alert for="company" />

            <x-form.label><x-slot name="name">COMPANY URL</x-slot></x-form.label>
            <x-form.input><x-slot name="input" wire:model="company_url_link"></x-slot></x-form.input>
            <x-form.alert for="company_url_link" />

            <x-form.label><x-slot name="name">TYPE OF ROLE</x-slot></x-form.label>
             <x-form.select>
                <x-slot name="select" wire:model="job_type_role">
                    <option value="" selected disabled class="modal-option">Choose role</option>
                    @foreach ($typeofroles as $typeofrole)
                        <option value="{{ $typeofrole->Typeofrole_ID }}" class="modal-option">{{ $typeofrole->Typeofrole_Name }}</option>
                    @endforeach
                </x-slot>
            </x-form.select>
            <x-form.alert for="job_type_role"/>

            <x-form.label><x-slot name="name">SALARY</x-slot></x-form.label>
            <x-form.input><x-slot name="input" wire:model="salary"></x-slot></x-form.input>
            <x-form.alert for="salary" />

            <x-form.label><x-slot name="name">JOB LOCATION</x-slot></x-form.label>
            <x-form.input><x-slot name="input" wire:model="job_location"></x-slot></x-form.input>
            <x-form.alert for="job_location" />

            <x-form.label><x-slot name="name">DESCRIPTION</x-slot></x-form.label>
            <x-form.textarea><x-slot name="description" cols="30" rows="10" wire:model="job_description"></x-slot></x-form.textarea>
            <x-form.alert for="job_description"/>

            <x-button />

            {{-- <div class="modal-div">
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
            <button type="submit" class="uploadBtn">UPLOAD</button> --}}
        </div>
    </form>
</div>
