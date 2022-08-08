<div>
    <div class="w3-container">
        <div id="register" class="w3-modal" wire:ignore.self>
            <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">
                <div class="w3-center"><br>
                    <span onclick="document.getElementById('register').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
                </div>
                <div class="main">
                    {{-- <x-jet-validation-errors class="mb-4" style="color:red !important" /> --}}
<<<<<<< HEAD
                    <form class="w3-container first" enctype="multipart/form-data" >
=======
                    <form class="w3-container first" id="register-form" action="#" >
                        @csrf
>>>>>>> 69dcfa6a770a8c872cf45e32f4b04255f0cc6d0b
                        <h1 class="modal-h1">Sign up</h1>
                        <h4 class="modal-h4">Search everything on your own time from SG Info</h4>
                        <div class="userInput">
                            <div class="modal-div">
                                <label for="" class="modal-label">FULL NAME</label> <br>
<<<<<<< HEAD
                                <input class="modal-input" id="name" type="text"  placeholder="Your name is required"  >
                                <x-form.alert  class="text-danger" id="name_error"/>
=======
                                <input class="modal-input"  wire:model="name" id="name" type="text"  placeholder="Your name is required"  >
                                <x-form.alert  id="name_error"/>
>>>>>>> 69dcfa6a770a8c872cf45e32f4b04255f0cc6d0b
                            </div>

                            <div class="modal-div">
                                <label for="" class="modal-label">EMAIL</label> <br>
<<<<<<< HEAD
                                <input class="modal-input" id="email" type="email"  placeholder="Enter email">
                                <x-form.alert class="text-danger" id="email_error" />
=======
                                <input class="modal-input"  wire:model="email" type="email" id="email"  placeholder="Enter email">
                                <x-form.alert   id="email_error"/>
>>>>>>> 69dcfa6a770a8c872cf45e32f4b04255f0cc6d0b
                            </div>

                            <div class="modal-div">
                                <label for="" class="modal-label">PASSWORD</label> <br>
<<<<<<< HEAD
                                <input class="modal-input" id="password" type="password" placeholder="Enter password">
                                <x-form.alert class="text-danger" id="password_error"/>
=======
                                <input class="modal-input" wire:model="password" type="password" id="password" placeholder="Enter password">
                                <x-form.alert  for="password" id="password_error"/>
>>>>>>> 69dcfa6a770a8c872cf45e32f4b04255f0cc6d0b
                            </div>

                            <div class="modal-div">
                                <label for="" class="modal-label">COMFIRMED PASSWORD</label> <br>
<<<<<<< HEAD
                                <input class="modal-input" id="password_confirmation"  type="password" placeholder="Confirm your password">
                                <x-form.alert class="text-danger" id="password_confirmation_error"/>
                            </div>

                            <p class="modal-p">Between 8 and 72 characters</p>
                            <button  class="uploadBtn" id="register-submit">REGISTER</button>
=======
                                <input class="modal-input" wire:model="confirmPassword"  type="password" id="password_confirmation" placeholder="Confirm your password">
                                <x-form.alert  for="confirmPassword" id="password_confirmation_error"/>
                            </div>
                            <button id="register-click" class="uploadBtn" id="register-submit" type="button">REGISTER</button>
>>>>>>> 69dcfa6a770a8c872cf45e32f4b04255f0cc6d0b

                        </div>
                    </form>
                    <div class="otherLogin">
                        <p class="other-p">(OR)</p>
                        <div class="google">
                            <img class="other-img" src="images/login_register/google.svg" alt="">
                            <h2 class="other-h2"><a class="other-a" href="">Continue with Google</a></h2>
                        </div>
                        <div class="facebook">
                            <img class="other-img" src="images/login_register/facebook.svg" alt="">
                            <h2 class="other-h2"><a href="" class="other-a">Continue with Facebook</a> </h2>
                        </div>
                        <div class="other-login">Already a member? <a href="" class="other-login-a">Log in</a></div>
                    </div>
                    <div class="term&condition">
                        <div class="line"></div>
                        <div class="term">
                            <p class="term-p"><i class="fa-solid fa-square-check"></i>  I accept Coursera's <a href="" class="term-a">Terms of Use</a> and <a href="" class="term-a">Privacy Notice</a>. Having trouble logging in? <a href="">Learner help center</a></p>
                            <p class="term-p">This site is protected by reCAPTCHA Enterprise and the Google <a href="" class="term-a">Privacy Policy</a> and <a href="" class="term-a">Terms of Service apply</a>.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
