(function () {
    document.querySelectorAll('.grid-item').forEach(function (card) {
        card.addEventListener('mouseover', function () {
            card.querySelector('.grid-item-overlay').classList.add('active');
        })
        // card.addEventListener('mouseout', function () {
        //     card.querySelector('.grid-item-overlay').classList.remove('active');
        // })
        card.querySelector('.grid-item-overlay').classList.add('active');
    })
})();

function createIframe(game) {
    var iframe = document.createElement('iframe');
    iframe.src = game;
    iframe.id = 'game-window';
    document.getElementById('modal-1-content').appendChild(iframe);
}

document.addEventListener('click', function (event) {
    if (event.target.matches('.grid-btn')) {
        event.preventDefault();
        var gameWindow = document.getElementById('game-window');
        var game = event.target.getAttribute('data-game');

        if (gameWindow) {
            gameWindow.remove();
        }

        MicroModal.show('modal-1');
        createIframe(game);
    }

    if (event.target.matches('.register-button')) {
        if(parseInt($('.login-button').attr('data-href')) !== 1) {
            event.preventDefault();
            MicroModal.show('modal-2');
        }
    }

    if (event.target.matches('.login-button')) {
        if(parseInt($('.login-button').attr('data-href')) !== 1) {
            event.preventDefault();
            MicroModal.show('modal-3');
        }
    }

    if (event.target.matches('.modal__close') || event.target.matches('.modal__overlay')) {
        document.getElementById('game-window').remove();
    }
}, false);

function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    var expires = "expires=" + d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

if (typeof appendAttr === 'function') {
    appendAttr('.btn-check', 'href', function (index, attr) {
        return encodeURI(this.href + location.search);
    });
} else {
    function appendAttr(selector, attr, setterFunction) {
        document.querySelectorAll(selector).forEach((el, i) => {
            el.setAttribute(attr, setterFunction.call(el, i, attr))
        })
    }

    appendAttr('.btn-check', 'href', function (index, attr) {
        return encodeURI(this.href + location.search);
    });
}

var slideIndex = 1;
var i = 1;
var slidesLength = document.getElementsByClassName('mySlides').length;
showSlides(slideIndex);
setInterval(function(){
    if(slidesLength < i) {
        i = 1;
    }
    currentSlide(++i)
}, 3000);
// Next/previous controls
function plusSlides(n) {
    showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slides[slideIndex-1].style.display = "block";
}
