<header class="main-header">
    <!-- Slideshow container -->
    <div class="slideshow-container">

        <!-- Full-width images with number and caption text -->
        <div class="mySlides fade">
            <img src="assets/slide1.jpg" style="width:100%">
            {{--<div class="text">Caption Text</div>--}}
        </div>

        <div class="mySlides fade">
            <img src="assets/slide2.jpg" style="width:100%">
        </div>

        <div class="mySlides fade">
            <img src="assets/slide3.jpg" style="width:100%">
        </div>
    </div>
    @if(Auth::user())
        <div class="grid-header">
            <h1>Hello, {{ Auth::user()->first_name }} Du hast heute 0 Stunden gespielt!</h1>
            <h4 style="margin: 0;">*In Kürze erhältlich - Sonderrabatte für Ihre Lieblingsmarken, abgestuft nach Ihrer Spielstärke. Je mehr Sie spielen, desto mehr sparen Sie.</h4>
            <h4 style="margin: 0;">*Weitere unglaubliche Angebote folgen in Kürze. Melden Sie sich häufig an, um zu sehen, was auf Lager ist.</h4>
            <div class="stores">
                <h5>Spielen Sie lieber in einer App? Laden Sie hier Partner-Apps herunter</h5>
                <div>
                    <a href="https://play.google.com/store/apps/details?id=com.triwin.coin.carnival"><img src="/assets/googleplay.png" style="height: 60px;" alt="Google"></a>
                </div>
            </div>
        </div>
    @else
        <div class="header-article">
            <article >
                <div class="logo">
                </div>
                <div class="welcome_block">
                    <img src="assets/headtxt.png" alt="">

                </div>
                <div class="characters_block">
                    <div class="left_box" style="position: relative">
                        <img src="assets/slots_girl.png" style="max-width: 350px; width: 100%;" alt="">
                    </div>
                </div>
                <div class="button_block">
                    <a href="{{ route('spielecta') }}" target="_self" class="btn btn-check ym-external-link"><span>SPIELE JETZT</span></a>
                    <div style="display: inline-block; padding-top: 20px;">
                        <span class="plus18"><img src="assets/logo-18-plus.png" alt=""></span>
                        <span class="begambleaware"><img src="assets/logo-be-gamble-aware.png" style="height: 35px;"
                                                         alt=""></span>
                    </div>
                </div>
            </article>
        </div>
    @endif
</header>
