<div>
    {{-- <div class="modal-div"> --}}
    <input {{ $input->attributes->class(["modal-input"]) }}>
    @isset($input)
        {{ $input }}
    @endisset
    {{-- </div> --}}
    {{-- @error('gtitle') <p class="text-danger">{{ $message }}</p> @enderror --}}
</div>
