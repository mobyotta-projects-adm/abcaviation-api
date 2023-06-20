<x-guest-layout>
    <div class="d-grid my-3">

        <button type="button" class="btn mt-2 btn-light-primary bg-light text-muted">
            <img src="<?= asset('assets/images/authentication/facebook.svg') ?>" alt="img">
            <span>
                Sign In with Facebook</span>
        </button>
        <button type="button" class="btn mt-2 btn-light-primary bg-light text-muted">
            <img src="<?= asset('assets/images/authentication/twitter.svg') ?>" alt="img">
            <span> Sign
                In with Twitter</span>
        </button>
        <button type="button" class="btn mt-2 btn-light-primary bg-light text-muted">
            <img src="<?= asset('assets/images/authentication/google.svg') ?>" alt="img">
            <span> Sign
                In with Google</span>
        </button>
    </div>
    </div>
    <div class="saprator my-3">
        <span>OR</span>
    </div>
    <h4 class="text-center f-w-500 mb-3">Login with your email</h4>

    <x-jet-validation-errors class="mb-3 rounded-0" />

    @if (session('status'))
        <div class="alert alert-success mb-3 rounded-0" role="alert">
            {{ session('status') }}
        </div>
    @endif
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="form-group mb-3">
            <input type="email" name="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}"
                id="floatingInput" placeholder="Email Address">
            <x-jet-input-error for="email"></x-jet-input-error>
        </div>
        <div class="form-group mb-3">
            <input type="password" name="password"
                class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" id="floatingInput1"
                placeholder="Password">
            <x-jet-input-error for="password"></x-jet-input-error>
        </div>
        <div class="d-flex mt-1 justify-content-between align-items-center">
            <div class="form-check">
                <input name="remember_me" class="form-check-input input-primary" type="checkbox" id="customCheckc1"
                    checked="">
                <label class="form-check-label text-muted" for="customCheckc1">Remember me?</label>
            </div>
            <a href="{{ route('password.request') }}">
                <h6 class="text-secondary f-w-400 mb-0">Forgot Password?</h6>
            </a>
        </div>
        <div class="d-grid mt-4">
            <button type="submit" class="btn btn-primary">Login</button>
        </div>
        <div class="d-flex justify-content-between align-items-end mt-4">
            <h6 class="f-w-500 mb-0">Don't have an Account?</h6>
            <a href="{{ route('register') }}" class="link-primary">Create Account</a>
        </div>


</x-guest-layout>
