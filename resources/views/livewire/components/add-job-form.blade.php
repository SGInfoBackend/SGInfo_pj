<div class="main">
    <form wire:submit.prevent='storeJob' class="w3-container first" enctype="multipart/form-data">
        <h1 class="modal-h1">JOB UPLOAD FORM</h1>
        <div class="userInput">

            <div class="my-3">
                <x-form.label name="Job Title" />
                <x-form.input type="text" placeholder="Enter Job Title" wire:model="job_title" />
                <x-form.error for="job_title" />
            </div>

            <div class="my-3">
                <x-form.label class="modal-label" name="Company Name" />
                <x-form.input type="text" placeholder="Enter Company Name" wire:model="company" />
                <x-form.error for="job_title" />
            </div>

            <div class="my-3">
                <x-form.label class="modal-label" name="Company URL" />
                <x-form.input type="text" placeholder="Enter Company URL" wire:model="company_url_link" />
                <x-form.error for="job_title" />
            </div>

            <div class="my-3">
                <x-form.label class="modal-label" name="Type of Role" />
                <x-form.select>
                    <x-slot name="select" wire:model="job_type_role">
                        <option value="" selected disabled class="modal-option">Choose role</option>
                        @foreach ($typeofroles as $typeofrole)
                            <option value="{{ $typeofrole->Typeofrole_ID }}" class="modal-option">{{ $typeofrole->Typeofrole_Name }}</option>
                        @endforeach
                    </x-slot>
                </x-form.select>
                <x-form.error for="job_title" />
            </div>

            <div class="my-3">
                <x-form.label class="modal-label" name="Salary" />
                <x-form.input type="number" placeholder="Enter Salary" wire:model="salary" />
                <x-form.error for="job_title" />
            </div>

            <div class="my-3">
                <x-form.label class="modal-label" name="Job Location" />
                <x-form.input type="text" placeholder="Enter Location" wire:model="job_location" />
                <x-form.error for="job_title" />
            </div>
            <div class="my-3">
                <x-form.label class="modal-label" name="Exp Level" />
                <x-form.input type="text" placeholder="Enter Exp Level" wire:model="exp_level" />
                <x-form.error for="job_title" />
            </div>

            <div class="my-3">
                <x-form.label><x-slot name="name">Description</x-slot></x-form.label>
                <x-form.textarea><x-slot name="description" cols="30" rows="10" wire:model="job_description"></x-slot></x-form.textarea>
                <x-form.error for="job_title" />
            </div>

            {{-- <x-button name="UPLOAD" /> --}}
            <x-button class="uploadBtn" type="submit">UPLOAD</x-button>

        </div>
    </form>
</div>
