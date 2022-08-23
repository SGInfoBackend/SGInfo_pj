<div class="modal-div">
    <select {{ $select->attributes->class(["modal-select modal-select-room"]) }}>
        @isset($select)
        {{ $select }}
        @endisset
    </select>
</div>
