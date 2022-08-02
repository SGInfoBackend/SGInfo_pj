<div>
    <input {{ $input->attributes->class(["modal-input"]) }}>
    @isset($input)
        {{ $input }}
    @endisset
</div>
