<div>
    <style>
        .toast-success {
            background-color: #086e08 !important;
            position: relative;
            top: 100px !important;
        }
    </style>
    <div class="w3-container">
        <div id="room" class="w3-modal" wire:ignore.self>
            <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="width:65%">
                <div class="w3-center"><br>
                    <span onclick="document.getElementById('room').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
                </div>

                @include('livewire.components.add-house-form')
            </div>
        </div>
    </div>

    @if (Session::has('success_message'))
    <script>
        toastr.success("{!! Session::get('success_message') !!}");
    </script>
    @endif
</div>
