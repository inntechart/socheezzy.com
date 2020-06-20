@extends('layouts.app')

@section('content')
    @include('layouts._header')
    <section>
        <div class="text">
            <h2></h2>
            <p>
                In unserem Social Casino können Sie als Gast spielen oder ein Konto registrieren. Wenn Sie ein Konto
                registrieren, können Sie große Boni als Casino-Chips erhalten und länger spielen
            </p>
        </div>
    </section>
    <section class="button_section">
        <div class="button_block" style="margin: 2% 0;">
            <a href="{{ route('spielecta') }}" target="_self" class="btn btn-check ym-external-link"><span>SPIELE JETZT</span></a>
        </div>
    </section>

    <section class="info_section">
        <div class="info_element">
            <i class="fa fa-user"></i>
            <h3>Registrieren</h3>
            <p>Tolle Angebote, wenn Sie ein Konto registrieren</p>
        </div>
        <div class="info_element">
            <i class="fa fa-money"></i>
            <h3>Bonus</h3>
            <p>Wenn Sie sich registrieren, erhalten Sie einen schönen Bonus</p>
        </div>
        <div class="info_element">
            <i class="fa fa-send"></i>
            <h3>Abspielen</h3>
            <p>Spielen Sie so lange Sie wollen, ohne Risiko</p>
        </div>
        <div class="button_block" style="margin-top: 1%;">
            <a href="{{ route('spielecta') }}" target="_self" class="btn btn-check ym-external-link"><span>SPIELE JETZT</span></a>
        </div>
    </section>
    @include('layouts._login_register_popup')
    <!-- Cookies Window -->
    <div id="cn-window" class="modal micromodal-slide is-open" aria-hidden="false">
        <div class="cn-overlay" tabindex="-1">
            <div class="cn-container" role="dialog" aria-modal="true" aria-labelledby="cn-cookie-title">
                <header class="cn-header">
                    <a class="cn-close cn-button"></a>
                </header>
                <main class="cn-content">
                    <h2>Wir verwenden Cookies</h2>
                    <p>
                        Um deine Erfahrung zu verbessern. <a id="cn-link" href="{{ route('cookies_policy') }}">Cookie Policy</a>
                    </p>
                    <a class="cookie-button cn-button">Okay, Ich verstehe</a>
                </main>
            </div>
        </div>
    </div>
    <link rel="stylesheet" href="/css/cookies.css">
    <script>
        $(document).ready(function () {
            $('.cn-button').on('click', function () {
                document.getElementById("cn-window").classList.remove("is-open");
            })
        })
    </script>
    <script src="/js/cookies.js"></script>
@endsection
