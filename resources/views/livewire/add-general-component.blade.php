<div>
    <div class="w3-container">
        <div id="article" class="w3-modal">
            <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">
                <div class="w3-center"><br>
                    <span onclick="document.getElementById('article').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
                </div>

                <div class="main">

                    @if(Session::has('message'))
                        <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                    @endif
                    <form class="w3-container first" wire:submit.prevent="addArtical" enctype="multipart/form-data">
                        <h1 class="modal-h1">ARTICLE UPLOAD FORM</h1>
                        <div class="userInput">
                            <div class="modal-div">
                                <label for="" class="modal-label">JOURNALIST NAME</label> <br>
                                <input class="modal-input" type="text" wire:model="gname">
                                @error('gname') <p class="text-danger">{{ $message }}</p> @enderror
                            </div>
                            <div class="modal-div">
                                <label for="" class="modal-label">NEWS TITLE</label> <br>
                                <input class="modal-input" type="text" wire:model="gtitle">
                                @error('gtitle') <p class="text-danger">{{ $message }}</p> @enderror
                            </div>
                            <div class="modal-div">
                                <label for="" class="modal-label">NEWS TYPE</label> <br>
                                <select wire:model="gheader_id" class="modal-select">
                                    {{-- <option value="" selected disabled class="modal-option">Choose news type</option> --}}
                                    @foreach ($gheaders as $gheader)
                                        <option value="{{ $gheader->GHeader_ID }}">{{ $gheader->GHeader_Name }}</option>
                                    @endforeach
                                </select>
                                @error('gheader_id') <p class="text-danger">{{ $message }}</p> @enderror
                            </div>
                            <div class="modal-div">
                                <label for="" class="modal-label">PLEASE UPLOAD PHOTOS</label> <br>
                                <input class="modal-input" type="file" wire:model="gphotos">
                                @if ($gphotos)
                                    <img src="{{ $gphotos->temporaryUrl() }}" style="width:50px;height:50px">
                                @endif
                                @error('gphotos') <p class="text-danger">{{ $message }}</p> @enderror
                            </div>
                            <div class="modal-div">
                                <label for="" class="modal-label">DESCRIPTION</label> <br>
                                <textarea class="modal-input" name="" id="" cols="30" rows="10" wire:model="gdescription"></textarea>
                                @error('gdescription') <p class="text-danger">{{ $message }}</p> @enderror
                            </div>
                            <button class="uploadBtn" type="submit">UPLOAD</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
