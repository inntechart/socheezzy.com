<link rel="stylesheet" href="css/registration.css">
<script src="js/scripts.js"></script>
<script src="../unpkg.com/micromodal%400.4.6/dist/micromodal.min.js"></script>
<script>MicroModal.init();</script>
<!-- Registration Window -->
<div class="modal micromodal-slide registration-modal" id="modal-2" aria-hidden=" false">
    <div class="modal__overlay" tabindex="-1" data-micromodal-close>
        <div class="modal__container" role="dialog" aria-modal="true" aria-labelledby="modal-2-title">
            <header class="modal__header">
                <button id="close-reg-form" class="modal__close" aria-label="Close modal" data-micromodal-close></button>
            </header>
            <main class="modal__content " id="modal-2-content">
                <h2 style="text-align: center;">Schnelle Registrierung</h2>
                <form id="register-form" class="registration-form" method="POST" action="{{ route('register') }}" autocomplete="off">
                    @csrf
                    <fieldset>
                        <div class="input-field">
                            <label>Vorname:</label>
                            <input id="reg-name" placeholder="Ihr Vorname" type="text" name="first_name" required autofocus />
                        </div>
                    </fieldset>
                    <fieldset>
                        <div class="input-field">
                            <label>Familienname, Nachname:</label>
                            <input placeholder="Ihr Nachname" type="text" name="last_name" required />
                        </div>
                    </fieldset>
                    <fieldset>
                        <div class="input-field">
                            <label>Nummer:</label>
                            <input placeholder="Ihre Nummer" type="tel" name="phone" required />
                        </div>
                    </fieldset>
                    <fieldset>
                        <div class="input-field">
                            <label>Email:</label>
                            <input id="reg-email" placeholder="Ihre E-Mail" type="email" name="email" required />
                        </div>
                    </fieldset>
                    <fieldset>
                        <div class="input-field">
                            <label>Adresse:</label>
                            <input placeholder="Ihre Adresse" type="text" name="address" required />
                        </div>
                    </fieldset>
                    <fieldset>
                        <div class="input-field">
                            <label>Geburtsdatum:</label>
                            <input type="date" name="birthdate" required />
                        </div>
                    </fieldset>
                    <fieldset>
                        <div class="input-field">
                            <label>Passwort:</label>
                            <input id="reg-password" type="password" name="password" required />
                        </div>
                    </fieldset>
                    <fieldset>
                        <div class="input-field">
                            <label>Passwort:</label>
                            <input id="reg-password" type="password" name="password_confirmation" required />
                        </div>
                    </fieldset>
                    <fieldset class="modal-legal">
                        <input type="checkbox" id="legalterm1" name="legalterm1" value="Promotions">
                        <label for="legalterm1"> Ich möchte Neuigkeiten und Sonderaktionen erhalten</label><br>
                        <input type="checkbox" id="legalterm2" name="legalterm2" value="SMS">
                        <label for="legalterm2"> Ich möchte exklusive Angebote per WhatsApp / SMS erhalten</label><br>
                        <input type="checkbox" id="legalterm3" name="legalterm3" value="Legal">
                        <label for="legalterm3"> Ich bin über 18 Jahre alt und habe das gelesen und akzeptiert <a
                                href="terms-and-conditions.html" target="_blank">T&C</a> und <a href="privacy-policy.html"
                                                                                                target="_blank">Datenschutz-Bestimmungen</a>.</label><br>
                    </fieldset>
                    <button id="reg-button" type="submit" data-submit="Register">Einreichen</button>
                    <p id="reg-form-status"></p>
                </form>
            </main>
        </div>
    </div>
</div>

<script src="js/app.js"></script>

<!-- Login Window -->
<div class="modal micromodal-slide login-modal" id="modal-3" aria-hidden="false">
    <div class="modal__overlay" tabindex="-1" data-micromodal-close>
        <div class="modal__container" style="max-width: 500px; height:auto;" role="dialog" aria-modal="true"
             aria-labelledby="modal-3-title">
            <header class="modal__header">
                <button class="modal__close" aria-label="Close modal" data-micromodal-close></button>
            </header>
            <main class="modal__content" id="modal-3-content">
                <h2 style="text-align: center;">Einloggen</h2>
                <form id="login-form" method="POST" class="login-form registration-form" action="{{ route('login') }}" autocomplete="off">
                    @csrf
                    <span class="invalid-feedback" role="alert">
                        <strong></strong>
                    </span>
                    <fieldset>
                        <div class="input-field" style="width: 100%;">
                            <label>Email:</label>
                            <input placeholder="" type="email" name="loginemail" value="{{ old('email') }}" required readonly="readonly" onfocus="javascript: this.removeAttribute('readonly')"/>
                        </div>
                    </fieldset>
                    <fieldset>
                        <div class="input-field" style="width: 100%;">
                            <label>Passwort:</label>
                            <input type="password" name="loginpassword" value="" autocomplete="anyrandomstring" required readonly="readonly" onfocus="javascript: this.removeAttribute('readonly')"/>
                        </div>
                    </fieldset>
                    <button id="login-form-button" type="submit" data-submit="login">Anmeldung</button>
                    <p id="login-form-status" style="text-align: center;"></p>
                </form>
            </main>
        </div>
    </div>
</div>

<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            "Accept":"application/json"
        }
    });
    var loginFormStatus = document.getElementById('login-form-status');

    $('#login-form').submit(function(e){
        // Prevent normal form submission, we well do in JS instead
        e.preventDefault();
        var loginUrl = $('#login-form').attr('action');

        // Get form data
        var data = {
            email: $('input[name=loginemail]').val(),
            password: $('input[name=loginpassword]').val(),
            "_token": "{{ csrf_token() }}"
        };
        $.ajax({
            url: loginUrl,
            type: 'POST',
            data: data,
            dataType: 'json',
            success: function(){
                window.location.replace('/home');
            },
            error: function(error) {
                var errors = $.parseJSON(error.responseText);
                loginFormStatus.innerHTML = errors.message + ' Please try again.';
            }
        })
        // Send the request
        // $.post(loginUrl, data, function(response) {
        //     if (response.success) {
        //         // If register success, go to home
        //         window.location.replace('spiele.html');
        //     }
        // }).fail(function(xhr, status, error) {

        // });
    });
</script>


<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    var regFormStatus = document.getElementById('reg-form-status');
    $('#close-reg-form').click(function(e){
        setCookie('registration', 'yes', 3600);
    });
    $('#register-form').submit(function(e){
        // Prevent normal form submission, we well do in JS instead
        e.preventDefault();
        var registrationUrl = $('#register-form').attr('action');
        setCookie('registration', 'yes', 3600);

        // Get form data
        var data = {
            first_name: $('[name=first_name]').val(),
            last_name: $('[name=last_name]').val(),
            address: $('[name=address]').val(),
            phone: $('[name=phone]').val(),
            birthdate: $('[name=birthdate]').val(),
            email: $('[name=email]').val(),
            password: $('[name=password]').val(),
            password_confirmation: $('[name=password_confirmation]').val(),
            "_token": "{{ csrf_token() }}"
        };
        $.ajax({
            url: registrationUrl,
            type: 'POST',
            data: data,
            success: function(data){
                window.location.replace('/home');
            },
            error: function(error) {
                var errors = $.parseJSON(error.responseText);
                loginFormStatus.innerHTML = errors.message + ' Please try again.';
            }
        })
    });
</script>
