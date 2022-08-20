<div class="foot-col">
    <h4 class="footer-h4">SG<span class="info">INFO</span></h4>
    <p class="footer-p">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus, dignissimos.
      Lorem ipsum dolor sit amet consectetur adipisicing elit.
    </p>
  </div>

  <div class="foot-col">
    <h4 class="footer-h4">INFORMATION</h4>
    <a class="footer-a" href="Contact.html">Contact Us</a>
    <a class="footer-a" href="#">Terms & Conditions</a>
    <a class="footer-a" href="#">Privacy Policy</a>
    <a class="footer-a" href="#">F.A.Q.</a>
  </div>

  <div class="foot-col">
    <h4 class="footer-h4">QUICK LINKS</h4>
    <a class="footer-a" href="room_list.html">Rooms</a>
    <a class="footer-a" href="Job.html">Jobs</a>
    <a class="footer-a" href="general_info.html">General</a>
  </div>

  <div class="foot-col footer-last">
    <h4 class="footer-h4">CONTACT</h4>
    <p class="footer-p">90 Madison Ave,First Floor New York,NY</p>
    <a class="footer-a" href="tel:+9519669724">Telephone: 200 256 1855</a>
    <a class="footer-a" href="mailto:sginfo@myanmar.com">Email: mail@yourmail.com</a>
    <div class="social-links">
      <i class="uil uil-facebook-f uil_icon"></i>
      <i class="uil uil-instagram-alt uil_icon"></i>
      <i class="uil uil-twitter uil_icon"></i>
      <i class="uil uil-youtube uil_icon"></i>
    </div>
  </div>

  <div class="copyright">
    <p class="footer-p footer-p-last">ITVisionHub SGcamp4@2022 | All Rights Reserved</p>
  </div>

  <script src="{{ asset('js/main.js')}}"></script>
  <script src="{{ asset('js/table.js')}}"></script>
  {{-- noUiSlider cdn --}}
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/15.6.0/nouislider.min.js" integrity="sha512-1mDhG//LAjM3pLXCJyaA+4c+h5qmMoTc7IuJyuNNPaakrWT9rVTxICK4tIizf7YwJsXgDC2JP74PGCc7qxLAHw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  @push('scripts')

  <script type="text/javascript">
    $(document).ready(function(){

        $('#register-submit').on('click',function(e){
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
        //  $('#login_submit').on('click',function(e){
        //   e.preventDefault();
        //   var email = $('#email').val();
        //   var password = $('#password').val();
        //   alert("email", email);
        //   $.ajaxSetup({
        //       headers: {
        //           'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        //       }
        //     });
        //   $.ajax({
        //       url: "{{ url('login') }}",
        //       method: 'post',
        //       data: {
        //         email: $('#email').val(),
        //         password: $('#password').val(),
        //       },
        //       success: function(data){
        //         location.reload();
        //         $('#register').hide();
        //         },
        //       error: function(error){
        //         $('#email_error').text(error.responseJSON.errors.email);
        //         $('#password_error').text(error.responseJSON.errors.password);
        //       }
        //       });
        //   });
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
