<div class="main">
    <form class="w3-container first" wire:submit.prevent="addArtical" enctype="multipart/form-data" >
         <h1 class="modal-h1">ARTICLE UPLOAD FORM</h1>
         <div class="userInput">

             <x-form.label name="Journalist Name"/>
             <x-form.input wire:model="gname"/>
             <x-form.alert for="gname" />

             <x-form.label name="News Title"/>
             <x-form.input wire:model="gtitle"/>
             <x-form.alert for="gtitle" />

             <x-form.label name="News Type"/>
             <x-form.select>
                <x-slot name="select" wire:model="gheader_id">
                    @foreach ($gheaders as $gheader)
                        <option value="{{ $gheader->GHeader_ID }}">{{ $gheader->GHeader_Name }}</option>
                    @endforeach
                </x-slot>
            </x-form.select>
            <x-form.alert for="gheader_id"/>

            <x-form.label name="PLEASE UPLOAD PHOTOS"/>
            <x-form.input type="file" wire:model="gphotos"/>
            <x-form.alert for="gphotos"/>

            <x-form.label name="PLEASE UPLOAD PHOTOS"/>
            <x-form.textarea><x-slot name="description" cols="30" rows="10" wire:model="gdescription"></x-slot></x-form.textarea>
            <x-form.alert for="gdescription"/>

            <x-button />

         </div>
     </form>
 </div>
