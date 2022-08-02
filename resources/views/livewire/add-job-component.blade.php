<div>
    <div class="w3-container">
        <div id="job" class="w3-modal" wire:ignore.self>
            <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">
                <div class="w3-center"><br>
                    <span onclick="document.getElementById('job').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
                </div>
                @include('livewire.components.add-job-form')
            </div>
        </div>
    </div>
</div>
