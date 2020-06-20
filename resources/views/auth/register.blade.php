@extends('layouts.app')

@section('content')

    <header class="main-header">
        <div class="grid-header" style="padding: 10px 5px;">
            <div class="container" id="main-contact">
                <form id="register-form" class="registration-form" action="{{ route('register') }}" method="post">
                    @csrf
                    <h3>Register</h3>
                    <h4></h4>
                    <fieldset>
                        <input id="name" placeholder="Name" type="text" class="form-control " name="name" value=""
                               required autocomplete="name" autofocus>

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </fieldset>
                    <fieldset>
                        <input placeholder="E-Mail Address" type="email" name="email" value="" required
                               autocomplete="email">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </fieldset>
                    <fieldset>
                        <input placeholder="Password" type="password" tabindex="3" name="password" required
                               autocomplete="new-password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </fieldset>
                    <fieldset>
                        <input placeholder="Confirm Password" type="password" tabindex="3" name="password_confirmation"
                               required autocomplete="new-password">
                    </fieldset>
                    <button name="submit" type="submit" id="contact-submit" class="btn" data-submit="Register">
                        Register
                    </button>
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
