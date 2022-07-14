{{-- <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout> --}}
<x-base-layout>
    <div class="w3-container">
        <div id="login" class="w3-modal">
            <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">
                <div class="w3-center"><br>
                    <span onclick="document.getElementById('login').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
                </div>

                <div class="main">
                    <form class="w3-container first" name="frm-login" method="POST" action="{{ route('login')}}">
                        @csrf
                        <h1 class="modal-h1">Welcome to SG Info</h1>
                        <div class="userInput">
                            <div class="modal-div">
                                <label for="" class="modal-label">EMAIL</label> <br>
                                <input class="modal-input" name="email" type="text" placeholder="Enter email">
                            </div>
                            <div class="modal-div">
                                <label for="" class="modal-label">PASSWORD</label> <br>
                                <input class="modal-input" name="password" type="password" placeholder="Enter password">
                            </div>
                            <p><a href="">Forgot Password?</a></p>
                            <button class="uploadBtn" type="submit">LOGIN</button>
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
                            <div class="apple">
                                <img class="other-img" src="images/login_register/apple.svg" alt="">
                                <h2 class="other-h2"><a class="other-a" href="">Continue with Apple</a></h2>
                            </div>
                            <div class="other-login">New to SG Info? <a href="" class="other-login-a">Sign up</a></div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</x-base-layout>
