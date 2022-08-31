<script type="text/javascript">
    $(document).ready(function() {
        $('#register-submit').on('click', function(e) {
            e.preventDefault();
            var name = $('#name').val();
            var email = $('#email').val();
            var password = $('#password').val();
            var confirmed_password = $('#password_confirmation').val();
            if (password != confirmed_password) {
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
                success: function(data) {
                    location.reload();
                    $('#register').hide();
                },
                error: function(error) {
                    // console.log(error);
                    $('#name_error').text(error.responseJSON.errors.name);
                    $('#email_error').text(error.responseJSON.errors.email);
                    $('#password_error').text(error.responseJSON.errors.password);
                    $('#password_confirmation_error').text(error.responseJSON.errors
                        .password_confirmation);
                }
            });
        });
    });

    $(document).ready(function() {
        $("input#name").keydown(function() {
            $("#name_error").text('');
        });
        $("input#email").keydown(function() {
            var email = $("#email").val();
            var filter = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
            if (!filter.test(email)) {
                $("#email_error").text(email + " is not a valid email");
                email.focus;
            } else {
                $("#email_error").text("");
            }
        });
        $("input#password").keydown(function() {
            var myPassword = document.getElementById("password");
            var length = document.getElementById("length");
            if (myPassword.value.length >= 7) {
                $('#password_error').empty();
            } else {
                $("#password_error").text('Your password must be at least 8 characters');
            }
        });
        $("input#password_confirmation").keydown(function() {
            $("#password_confirmation_error").text('');
        });
    })
</script>
