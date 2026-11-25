(function () {
    'use strict';

    /* Menu di layar kecil */
    var toggle = document.querySelector('.nav-toggle');
    var nav = document.getElementById('nav');
    if (toggle && nav) {
        toggle.addEventListener('click', function () {
            var open = nav.classList.toggle('is-open');
            toggle.setAttribute('aria-expanded', open ? 'true' : 'false');
        });
        nav.addEventListener('click', function (e) {
            if (e.target.tagName === 'A') {
                nav.classList.remove('is-open');
                toggle.setAttribute('aria-expanded', 'false');
            }
        });
    }

    /* Penanda bagian yang sedang dibuka (hanya di halaman utama) */
    var links = [].slice.call(document.querySelectorAll('.nav a[href^="#"]'));
    if (links.length && 'IntersectionObserver' in window) {
        var map = {};
        links.forEach(function (a) { map[a.getAttribute('href').slice(1)] = a; });
        var io = new IntersectionObserver(function (entries) {
            entries.forEach(function (en) {
                if (!en.isIntersecting) { return; }
                links.forEach(function (a) { a.removeAttribute('aria-current'); });
                if (map[en.target.id]) { map[en.target.id].setAttribute('aria-current', 'true'); }
            });
        }, { rootMargin: '-45% 0px -50% 0px' });
        Object.keys(map).forEach(function (id) {
            var el = document.getElementById(id);
            if (el) { io.observe(el); }
        });
    }

    /* Carousel */
    var car = document.querySelector('[data-carousel]');
    if (!car) { return; }
    var slides = [].slice.call(car.querySelectorAll('.slide'));
    var dots = [].slice.call(car.querySelectorAll('.dot'));
    var reduce = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    var index = 0;
    var timer = null;

    function show(n) {
        index = (n + slides.length) % slides.length;
        slides.forEach(function (s, k) {
            s.classList.toggle('is-active', k === index);
            s.setAttribute('aria-hidden', k === index ? 'false' : 'true');
        });
        dots.forEach(function (d, k) { d.setAttribute('aria-current', k === index ? 'true' : 'false'); });
    }
    function stop() { if (timer) { clearInterval(timer); timer = null; } }
    function play() {
        if (reduce) { return; }
        stop();
        timer = setInterval(function () { show(index + 1); }, 5500);
    }

    car.querySelector('[data-prev]').addEventListener('click', function () { show(index - 1); play(); });
    car.querySelector('[data-next]').addEventListener('click', function () { show(index + 1); play(); });
    dots.forEach(function (d, k) { d.addEventListener('click', function () { show(k); play(); }); });
    car.addEventListener('mouseenter', stop);
    car.addEventListener('mouseleave', play);
    car.addEventListener('focusin', stop);
    car.addEventListener('focusout', play);

    show(0);
    play();
})();
