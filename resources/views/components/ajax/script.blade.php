<script src="{{ asset('js/main.js') }}"></script>
<script src="{{ asset('js/table.js') }}"></script>
{{-- noUiSlider cdn --}}
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/15.6.0/nouislider.min.js"
    integrity="sha512-1mDhG//LAjM3pLXCJyaA+4c+h5qmMoTc7IuJyuNNPaakrWT9rVTxICK4tIizf7YwJsXgDC2JP74PGCc7qxLAHw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
    integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

@push('scripts')
    <x-ajax.register />
    <x-ajax.login />

    <script>
        window.addEventListener('hide_modal', event => {
            $('#room').hide();
        })
        window.addEventListener('hide_modal', event => {
            $('#article').hide();
        })
        window.addEventListener('hide_modal', event => {
            $('#register').hide();
        })
        window.addEventListener('show_modal', event => {
            $('#room').hide();
            $('#job').hide();
            $('#article').hide();
            $('#login').css('display', 'block');
        })
    </script>
@endpush()
