@extends('layouts.app')

@section('content')

    <header class="main-header">

        <div class="grid-header" style="padding: 10px 5px;">
            <div class="container" id="main-contact">
                <form id="login-form" class="registration-form" action="{{ route('login') }}" method="post">
                    @csrf
                    <h3>Login</h3>
                    <h4></h4>
                    <fieldset>
                        <input placeholder="E-Mail Address" type="email" name="email" tabindex="2" required
                               autocomplete="email" autofocus>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </fieldset>
                    <fieldset>
                        <input placeholder="Password" type="password" tabindex="3" name="password" required
                               autocomplete="current-password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </fieldset>
                    <button name="submit" type="submit" id="contact-submit" data-submit="Login">Login
                    </button>
                    <div class="form-check" style="padding-top: 10px;display: flex;justify-content: space-between;">
                        <div class="remember-checkbox">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember"  {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="remember"> Remember Me </label>
                        </div>
                        @if (Route::has('password.request'))
                            <a class="btn-link" style="color: white;" href="{{ route('password.request') }}">
                                Forgot Your Password?
                            </a>
                        @endif
                    </div>
                    </p>
                </form>
            </div>
        </div>
        <style>
            #main-contact input[type="text"],
            #main-contact input[type="password"],
            #main-contact input[type="email"],
            #main-contact input[type="tel"],
            #main-contact input[type="date"],
            #main-contact input[type="url"],
            #main-contact textarea {
                width: 94%;
            }
        </style>

    </header>

@endsection

