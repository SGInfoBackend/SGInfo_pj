<script type="text/javascript">
    $(document).ready(function(){
        $('#login-submit').on('click',function(e){
         e.preventDefault();
         var email = $('#useremail').val();
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
               email: $('#useremail').val(),
               password: $('#password').val(),
            },
            success: function(data){
              location.reload();
              $('#login').hide();
              },
            error: function(error){
              $('#name_error').text(error.responseJSON.errors.name);
              $('#email_error').text(error.responseJSON.errors.email);
            }
            });
         });
      });
    </script>
    <script>
      $(document).ready(function() {
              $("input#useremail").keydown(function() {
                  var email = $("#useremail").val();
                  var filter = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
                  if (!filter.test(email)) {
                      $("#useremail_error").text(email + " is not a valid email");
                      email.focus;
                  } else {
                      $("#useremail_error").text("");
                  }
              });
              $("input#userpassword").keydown(function() {
                  var password = $("#userpassword").val();
                  if (password.length >= 7) {
                      $('#userpassword_error').empty();
                  }
              });
          });
</script>
