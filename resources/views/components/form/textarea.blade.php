<textarea {{ $description->attributes->class(["modal-input"]) }}>
    @isset($description)
    {{ $description }}
    @endisset
</textarea>
{{-- <textarea {{ $attributes->class(["modal-input"]) }}> --}}
