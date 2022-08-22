<div class="main">
    <form class="w3-container first" wire:submit.prevent="addArtical" enctype="multipart/form-data" >
         <h1 class="modal-h1">ARTICLE UPLOAD FORM</h1>
         <div class="userInput">
            <div class="modal-div">
                <x-form.label name="Journalist Name"/>
                <x-form.input wire:model="gname"/>
                <x-form.error for="gname"/>
            </div>
            <div class="modal-div">
                <x-form.label name="News Title"/>
                <x-form.input wire:model="gtitle"/>
                <x-form.error for="gtitle" />
            </div>
            <div class="modal-div">
                <x-form.label name="News Type"/>
                <x-form.select>
                    <x-slot name="select" wire:model="gheader_id">
                        @foreach ($gheaders as $gheader)
                            <option value="{{ $gheader->GHeader_ID }}">{{ $gheader->GHeader_Name }}</option>
                        @endforeach
                    </x-slot>
                </x-form.select>
                <x-form.error for="gheader_id"/>
            </div>
            <div class="modal-div">
                <x-form.label name="PLEASE UPLOAD PHOTOS"/>
                <x-form.input type="file" wire:model="gphotos"/>
                <x-form.error for="gphotos"/>
            </div>
            <div class="modal-div">
                <x-form.label name="PLEASE UPLOAD PHOTOS"/>
                <x-form.textarea><x-slot name="description" cols="30" rows="10" wire:model="gdescription"></x-slot></x-form.textarea>
                <x-form.error for="gdescription"/>
            </div>
            <x-button />
         </div>
     </form>
 </div>
