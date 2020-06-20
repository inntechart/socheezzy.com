@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="css/contact.css">
    <header class="main-header">
        <div class="grid-header" style="padding: 10px 5px;">
            <div class="container" id="main-contact">
                <form id="contact" class="registration-form" action="{{ route('connect') }}" method="post">
                    <span class="success-message" style="color:greenyellow"><p>{{ Session::get('message') }}</p></span>
                    @csrf
                    <h3 style="padding: 20px 0;">Kontaktieren Sie uns</h3>
                    <h4></h4>
                    <fieldset>
                        <input placeholder="Dein Name" name="name" type="text" tabindex="1" required autofocus>
                    </fieldset>
                    <fieldset>
                        <input placeholder="Deine Emailadresse" name="email" type="email" tabindex="2" required>
                    </fieldset>
                    <fieldset>
                        <input placeholder="Ihre Telefonnummer (optional)" name="phone" type="tel" tabindex="3" required>
                    </fieldset>
                    <fieldset>
                        <textarea placeholder="Schreiben Sie ihre Nachricht hier...." tabindex="5" name="text" required></textarea>
                    </fieldset>
                    <button type="submit" id="contact-submit" data-submit="...Senden">Einreichen</button>
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
