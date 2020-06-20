@extends('layouts.app')

@section('content')
    <header class="main-header">
        <div class="grid-header" style="padding: 10px 5px;">
            <div class="container" id="main-contact">
                <form id="contact" class="registration-form" action="{{ route('password.email') }}" method="post">
                    @csrf
                    <input type="hidden" name="_token" value="au3WbCBwP1L0FQD4FatllvnXEv4cOxnCxWEDqOne">
                    <h3>Reset Password</h3>
                    <h4></h4>
                    <fieldset>
                        <input placeholder="E-Mail Address" type="email" name="email" value="" required
                               autocomplete="email">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </fieldset>
                    <button name="submit" type="submit" id="contact-submit"
                            data-submit="Send Password Reset Link">Send Password Reset Link
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
