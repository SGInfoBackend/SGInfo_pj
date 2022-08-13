<script type="text/javascript">
    $(document).ready(function(){
        $('#login-submit').on('click',function(e){
        e.preventDefault();
        var email = $('#email').val();
        var password = $('#password').val();

        // alert("gg")
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
          });

        $.ajax({
            url: "{{ url('login') }}",
            method: 'post',
            data: {
            email: email,
            password: password,
            },
            success: function(data){
            alert(data)
            location.reload();
            $('#login').hide();
            },
            error: function(error){
            $('#email_error').text(error.responseJSON.errors.email);
            $('#password_error').text(error.responseJSON.errors.password);
            }
            });
        });
    });
</script>
