"use strict";

function n(e, t, o) {
    var n = new Date;
    n.setTime(n.getTime() + 60 * o * 60 * 1e3);
    var c = "expires=" + n.toUTCString();
    document.cookie = e + "=" + t + ";" + c + ";path=/"
}

function e(e) {
    for (var t = e + "=", o = decodeURIComponent(document.cookie).split(";"), n = 0; n < o.length; n++) {
        for (var c = o[n]; " " == c.charAt(0);) c = c.substring(1);
        if (0 == c.indexOf(t)) return c.substring(t.length, c.length)
    }
    return ""
}

Element.prototype.matches || (Element.prototype.matches = Element.prototype.matchesSelector || Element.prototype.mozMatchesSelector || Element.prototype.msMatchesSelector || Element.prototype.oMatchesSelector || Element.prototype.webkitMatchesSelector || function (e) {
    for (var t = (this.document || this.ownerDocument).querySelectorAll(e), o = t.length; 0 <= --o && t.item(o) !== this;) ;
    return -1 < o
}), String.prototype.includes || (String.prototype.includes = function (e, t) {
    if (e instanceof RegExp) throw TypeError("first argument must not be a RegExp");
    return void 0 === t && (t = 0), -1 !== this.indexOf(e, t)
});
var c = function () {
    return document.getElementById("cn-link").href + location.search
}, t = function () {
    var t = document.getElementById("cn-window"), o = c();
    t.addEventListener("click", function (e) {
        e.target.matches(".cn-button") && (ym(57216433, "reachGoal", "clicked-on-cookie"), n("cnotice", "agreed", 1), t.classList.remove("is-open"), o.includes("gclid") && (ym(57216433, "reachGoal", "clicked-on-cookie-gclid"), window.location = o))
    }, !1)
};
"agreed" === e("cnotice") && (ym(57216433, "reachGoal", "seen-cookie"), document.getElementById("cn-window").classList.remove("is-open")), t();
