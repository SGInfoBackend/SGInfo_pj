<div class="main-room" >
    <form class="w3-container first-room" wire:submit.prevent="store">
        <h1 class="modal-h1-room">ROOM ADD FORM</h1>
        @if (Session::has('success_message'))
            <div class="alert alert-success">
                {{Session::get('success_message')}}
            </div>
        @endif
        <div class="userInput-room">
            <div class="modal-div-room">
                <x-form.label name="Property Type" />
                <x-form.input wire:model="project_type" />
                @error('project_type')
                    <p class="alert text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="modal-div-room">
                <x-form.label name="Availability" />
                <x-form.input type="date" wire:model="availability" />
                @error('availability')
                    <p class="alert text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="modal-div-room">
                <x-form.label name="Developer" />
                <x-form.input type="text" wire:model="developer" />
                @error('developer')
                    <p class="alert text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="modal-div-room">
                <x-form.label name="Floor Level" />
                <x-form.input type="text" wire:model="floor_lv" />
                @error('floor_lv')
                    <p class="alert text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="modal-div-room">
                <x-form.label name="Floor Size" />
                <x-form.input type="text" wire:model="floor_size" />
                @error('floor_size')
                    <p class="alert text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="modal-div-room">
                <x-form.label name="PST(psf)" />
                <x-form.input type="text" wire:model="psf" />
                @error('psf')
                    <p class="alert text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="modal-div-room">
                <x-form.label name="Nearest MRT/LRT" />
                <x-form.input type="text" wire:model="mrt_near" />
                @error('mrt_near')
                    <p class="alert text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="modal-div-room modal-div-room-textarea">
                <x-form.label name="Address" />
                <textarea class="modal-input-room-textarea" name="" id="" cols="30" rows="5" wire:model="address"></textarea></textarea>
                @error('address')
                    <p class="alert text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="modal-div-room modal-div-room-100">
                <x-form.label name="Rent Or Sale" />
                <select name="" id="" class="modal-select-room" wire:model="ros">
                    <option value="" selected disabled class="modal-option-room">Choose option</option>
                    <option value="for rent" class="modal-option-room">for rent</option>
                    <option value="for sale" class="modal-option-room">for sale</option>
                </select>
                @error('ros')
                    <p class="alert text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="modal-div-room modal-div-room-100">
                <x-form.label name="Price Rate(per month)" />
                <x-form.input style="width: 48%;" type="text" wire:model="price" />
                <select class="modal-select-room" style="width: 48%;" wire:model="currency">
                    <option value="" selected disabled class="modal-option-room">Currency</option>
                    <option value="USD" class="modal-option-room">USD</option>
                    <option value="SGD" class="modal-option-room">SGD</option>
                    <option value="YEN" class="modal-option-room">YEN</option>
                </select>
                @error('price')
                    <p class="alert text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="modal-div-room modal-div-room-100">
                <x-form.label name="Please Uploads Photo" />
                <input class="modal-input-room-image" type="file" wire:model="images">
                @error('images')
                    <p class="alert text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="modal-div-room modal-div-room-100">
                <x-form.label name="Number of Rooms" />
                <select name="" id="" class="modal-select-room" style="width: 48%;" wire:model="no_room">
                    <option value="" selected disabled class="modal-option-room">Bed room</option>
                    <option value="1" class="modal-option-room">1</option>
                    <option value="2" class="modal-option-room">2</option>
                    <option value="3" class="modal-option-room">3</option>
                    <option value="4" class="modal-option-room">4</option>
                    <option value="5" class="modal-option-room">5</option>
                </select>
                @error('no_room')
                    <p class="alert text-danger">{{$message}}</p>
                @enderror
                <select class="modal-select-room" style="width: 48%;" wire:model="no_birth">
                    <option value="" selected disabled class="modal-option-room">Bath room</option>
                    <option value="1" class="modal-option-room">1</option>
                    <option value="2" class="modal-option-room">2</option>
                    <option value="3" class="modal-option-room">3</option>
                    <option value="4" class="modal-option-room">4</option>
                    <option value="5" class="modal-option-room">5</option>
                </select>
                <x-form.error for="no_birth" />
            </div>
            <div class="modal-div-room modal-div-room-100">
                <x-form.label name="Select Key Features" />
                <select class="modal-select-room" style="width: 100%;padding-left:10px;" multiple wire:model="keyfeatures">
                    <option value="Air-Conditioning" class="modal-option-room-special">Air-Conditioning</option>
                    <option value="Cooker Hob/Hood" class="modal-option-room">Cooker Hob/Hood</option>
                    <option value="Fridge" class="modal-option-room">Fridge</option>
                    <option value="High Floor" class="modal-option-room">High Floor</option>
                    <option value="Intercom" class="modal-option-room">Intercom</option>
                    <option value="Renovated" class="modal-option-room">Renovated</option>
                    <option value="Dryer" class="modal-option-room">Dryer</option>
                    <option value="Water Heater" class="modal-option-room">Water Heater</option>
                    <option value="Balcony" class="modal-option-room">Balcony</option>
                    <option value="Corner Unit" class="modal-option-room">Corner Unit</option>
                    <option value="Park / Greenery View" class="modal-option-room">Park / Greenery View</option>
                    <option value="Internet Connection" class="modal-option-room">Internet Connection</option>
                    <option value="Oven / Microwave" class="modal-option-room">Oven / Microwave</option>
                    <option value="Washing Machine" class="modal-option-room">Washing Machine</option>
                </select>
                <p>Please press Ctrl key and click to select multiple items</p>
                @error('keyfeatures')
                    <p class="alert text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="modal-div-room modal-div-room-100">
                <x-form.label name="Select Facilities" />
                <select class="modal-select-room" style="width: 100%;padding-left:10px;" multiple wire:model="facilities">
                    <option value="Barbeque Area" class="modal-option-room-special">Barbeque Area</option>
                    <option value="Covered car park" class="modal-option-room">Covered car park</option>
                    <option value="Function room" class="modal-option-room">Function room</option>
                    <option value="Mini-Mart" class="modal-option-room">Mini-Mart</option>
                    <option value="4 hours security" class="modal-option-room">24 hours security</option>
                    <option value="Swimming pool" class="modal-option-room">Swimming pool</option>
                    <option value="Billiards room" class="modal-option-room">Billiards room</option>
                    <option value="Clubhouse" class="modal-option-room">Clubhouse</option>
                    <option value="Gymnasium room" class="modal-option-room">Gymnasium room</option>
                    <option value="Sauna" class="modal-option-room">Sauna</option>
                    <option value="Squash court" class="modal-option-room">Squash court</option>
                    <option value="Tennis courts" class="modal-option-room">Tennis courts</option>
                </select>
                @error('facilities')
                    <p class="alert text-danger">{{$message}}</p>
                @enderror
            </div>

            <div class="modal-div-room modal-div-room-textarea">
                <x-form.label name="Description" />
                <textarea class="modal-input-room-textarea" cols="30" rows="10" wire:model="description"></textarea>
                @error('description')
                    <p class="alert text-danger">{{$message}}</p>
                @enderror
            </div>
            <x-button />
        </div>
    </form>
</div>
