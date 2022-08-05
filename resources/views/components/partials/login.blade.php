<div>
    <div class="w3-container" >
        <div id="login" class="w3-modal" wire:ignore.self>
            <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">
                <div class="w3-center"><br>
                    <span onclick="document.getElementById('login').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
                </div>
                <div class="main">
                    <form class="w3-container first" name="frm-login" method="POST" wire:submit.prevent="login">
                        @csrf
                        <h1 class="modal-h1">Welcome to SG Info</h1>
                        <div>
                            @if (session()->has('message'))
                                <div class="alert alert-success">
                                    {{ session('message') }}
                                </div>
                            @endif
                        </div>
                        <div class="userInput">
                            <div class="modal-div">
                                <label for="" class="modal-label">EMAIL</label> <br>
                                <input class="modal-input" wire:model="email" type="email" placeholder="Enter email">
                                <x-form.alert  for="email"/>
                            </div>
                            <div class="modal-div">
                                <label for="" class="modal-label">PASSWORD</label> <br>
                                <input class="modal-input" wire:model="password" type="password" placeholder="Enter password">
                                <x-form.alert  for="password"/>
                            </div>
                            <p><a href="">Forgot Password?</a></p>
                            <button class="uploadBtn" type="submit">LOGIN</button>
                        </div>
                    </form>
                    <div class="otherLogin">
                        <p class="other-p">(OR)</p>
                        <div class="google">
                            <img class="other-img" src="images/login_register/google.svg" alt="">
                            <h2 class="other-h2"><a class="other-a" href="{{ route('googleauth') }}">Continue with Google</a></h2>
                        </div>
                        <div class="facebook">
                            <img class="other-img" src="images/login_register/facebook.svg" alt="">
                            <h2 class="other-h2"><a href="{{ route('facebookauth') }}" class="other-a">Continue with Facebook</a> </h2>
                        </div>
                        <div class="apple">
                            <img class="other-img" src="images/login_register/apple.svg" alt="">
                            <h2 class="other-h2"><a class="other-a" href="{{ route('githubauth') }}">Continue with GitHub</a></h2>
                        </div>
                        <div class="other-login">New to SG Info? <a href="" class="other-login-a">Sign up</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
