<select {{ $select->attributes->class(['modal-select']) }}>
    @isset($select)
        {{ $select }}
    @endisset
</select>
