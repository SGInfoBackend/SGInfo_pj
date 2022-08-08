<!----======== Navbar & Carousel TDTZ========= -->
<!doctype html>
<html lang="en">

<head>
    <x-partials.header />
</head>

<body>


<!-- start nav -->
<x-partials.nav />
<!-- end nav -->

    <x-partials.register />
    <x-partials.login />

    @livewire('add-house-component')
    @livewire('add-general-component')
    @livewire('add-job-component')

    {{$slot}}


    <footer class="section-footer">
        <x-partials.footer />
    </footer>

    @livewireScripts()

    @stack('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    @livewireScripts()
      <script type="text/javascript">
            $(document).ready(function(){
              $('#register-submit').on('click',function(e){
                alert('hello');
                e.preventDefault();
                var name = $('#name').val();               
                var password = $('#password').val();
                var confirmed_password = $('#password_confirmation').val();
                if(password != confirmed_password)
                {
                  $('#password_confirmation_error').text("Password does not match!");
                }
                
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                  });
                $.ajax({
                    url: "{{ url('register') }}",
                    method: 'post',
                    data: {
                      name: $('#name').val(),
                      email: $('#email').val(),
                      password: $('#password').val(),
                      password_confirmation: $('#password_confirmation').val()
                    },
                    success: function(data){
                      location.reload();
                      $('#register').hide();
                    },
                    error: function(error){
                      $('#name_error').text(error.responseJSON.errors.name);
                      $('#email_error').text(error.responseJSON.errors.email);
                      $('#password_error').text(error.responseJSON.errors.password);
                      $('#password_confirmation_error').text(error.responseJSON.errors.password_confirmation);
                    }
                    });
                });
              });
        </script>
      <script>
        window.addEventListener('hide_modal', event => {
            $('#room').hide();
        })
        window.addEventListener('hide_modal', event => {
            $('#article').hide();
        })
        window.addEventListener('hide_modal', event => {
            $('#staticBackdrop').hide();
        })
        window.addEventListener('show_modal', event => {
            $('#room').hide();
            $('#job').hide();
            $('#article').hide();
            $('#login').css('display', 'block');
        })
    </script>
    @stack('scripts')
</body>
</html>
