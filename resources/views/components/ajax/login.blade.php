<script type="text/javascript">
    $(document).ready(function(){
        $('#login-submit').on('click',function(e){
         e.preventDefault();
         var email = $('#email').val();
         var password = $('#password').val();
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
