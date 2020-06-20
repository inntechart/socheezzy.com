<!DOCTYPE html>
<html lang="de">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="assets/favicon.ico" />
    <title>craftyhandss.com &#8211; social online casino app.</title>

    <link rel="stylesheet" href="/cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/styles.css">
    <link rel="stylesheet" href="/css/modal.css">
    <link rel="stylesheet" href="/css/contact.css">
</head>

<body>
<nav class="navbar">
    <div class="logo">
        <a href="/"><img src="/assets/logo.png" alt="Logo"></a>
    </div>
    <ul>
        @if(Auth::user() )
        <li><a href="javascript:;" class="login-button">{{ 'Angemeldet als: ' . Auth::user()->first_name . ' ' . Auth::user()->last_name  }}</a></li>
        <li><a href="javascript:;" onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="logout-button">Ausloggen</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                  style="display: none;">
                @csrf
            </form>
        </li>
            <li><a href="{{ route('dashboard') }}">Admin Panel</a></li>
        @if(Auth::user()->isAdmin())
        @endif
        @else
        <li><a href="{{ route('login') }}" data-href="{{ \Request::route()->getName() == 'contact' ? '1' : '' }}" class="login-button einloggen">Einloggen</a></li>
        <li><a href="{{ route('register') }}" class="register-button registrieren" data-href="{{ \Request::route()->getName() == 'contact' ? '1' : '' }}">Registrieren</a></li>
        @endif
    </ul>
</nav>
@yield('content')

@include('layouts._footer')

</body>
</html>
