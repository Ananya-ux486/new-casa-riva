/**
 * CASA RIVA — interactions: mobile menu, scroll reveal, project filter.
 */
(function () {
    'use strict';

    /* ---- Mobile navigation ---------------------------------------------- */
    var toggle = document.getElementById('menu-toggle');
    var mobileNav = document.getElementById('mobile-nav');

    if (toggle && mobileNav) {
        var label = toggle.querySelector('.menu-toggle__label');

        var setMenu = function (open) {
            toggle.setAttribute('aria-expanded', open ? 'true' : 'false');
            toggle.setAttribute('aria-label', open ? 'Close navigation' : 'Open navigation');
            mobileNav.hidden = !open;
            if (label) { label.textContent = open ? 'Close' : 'Menu'; }
        };

        toggle.addEventListener('click', function () {
            setMenu(toggle.getAttribute('aria-expanded') !== 'true');
        });

        mobileNav.addEventListener('click', function (event) {
            if (event.target.closest('a')) { setMenu(false); }
        });

        window.matchMedia('(min-width: 64rem)').addEventListener('change', function (query) {
            if (query.matches) { setMenu(false); }
        });
    }

    /* ---- Scroll reveal --------------------------------------------------- */
    var revealItems = document.querySelectorAll('[data-reveal]');

    if ('IntersectionObserver' in window) {
        var observer = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.12 });

        revealItems.forEach(function (item) { observer.observe(item); });
    } else {
        revealItems.forEach(function (item) { item.classList.add('is-visible'); });
    }

    /* ---- Project filter -------------------------------------------------- */
    var filters = document.querySelectorAll('.filter');
    var projects = document.querySelectorAll('#project-grid [data-category]');

    filters.forEach(function (button) {
        button.addEventListener('click', function () {
            var category = button.getAttribute('data-filter');

            filters.forEach(function (other) {
                var active = other === button;
                other.classList.toggle('is-active', active);
                other.setAttribute('aria-pressed', active ? 'true' : 'false');
            });

            projects.forEach(function (project) {
                var show = category === 'All' || project.getAttribute('data-category') === category;
                project.hidden = !show;

                if (show) {
                    // Restart the reveal animation for the items now showing.
                    project.classList.remove('is-visible');
                    void project.offsetWidth;
                    project.classList.add('is-visible');
                }
            });
        });
    });
})();
