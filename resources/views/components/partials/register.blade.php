<div>
    <div class="w3-container">
        <div id="register" class="w3-modal" wire:ignore.self>
            <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">
                <div class="w3-center"><br>
                    <span onclick="document.getElementById('register').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
                </div>
                <div class="main">
                    {{-- <x-jet-validation-errors class="mb-4" style="color:red !important" /> --}}
                    <form class="w3-container first" id="register-form" method="POST" wire:submit.prevent="registerStore">
                        @csrf
                        <h1 class="modal-h1">Sign up</h1>
                        <h4 class="modal-h4">Search everything on your own time from SG Info</h4>
                        <div class="userInput">
                            <div class="modal-div">
                                <label for="" class="modal-label">FULL NAME</label> <br>
                                <input class="modal-input"  wire:model="name" type="text"  placeholder="Your name is required"  >
                                <x-form.alert  for="name"/>
                            </div>

                            <div class="modal-div">
                                <label for="" class="modal-label">EMAIL</label> <br>
                                <input class="modal-input"  wire:model="email" type="email"  placeholder="Enter email">
                                <x-form.alert  for="email"/>
                            </div>

                            <div class="modal-div">
                                <label for="" class="modal-label">PASSWORD</label> <br>
                                <input class="modal-input" wire:model="password" type="password" placeholder="Enter password">
                                <x-form.alert  for="password"/>
                            </div>

                            <div class="modal-div">
                                <label for="" class="modal-label">COMFIRMED PASSWORD</label> <br>
                                <input class="modal-input" wire:model="confirmPassword"  type="password" placeholder="Confirm your password">
                                <x-form.alert  for="confirmPassword"/>
                            </div>

                            <p class="modal-p">Between 8 and 72 characters</p>
                            <button id="register-click" class="uploadBtn" type="submit">REGISTER</button>

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
