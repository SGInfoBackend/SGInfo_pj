<div class="modal-div">
    <textarea {{ $description->attributes->class(["modal-input"]) }}>
        @isset($description)
        {{ $description }}
        @endisset
    </textarea>
</div>
