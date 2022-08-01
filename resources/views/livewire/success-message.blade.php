<div>
    @if (Session::has('message'))
    <script>
        toastr.success("{!! Session::get('message') !!}");
    </script>
    @endif
</div>
