/* Dun-Rite Seamless Gutters — effects.js
   Header scroll state, mobile menu, estimate dialog, mobile CTA bar, cookie banner,
   back-to-top, GA4 events. No libraries. */
(function () {
  'use strict';

  /* Header scrolled state */
  var header = document.querySelector('.site-header');
  var bar = document.querySelector('.mobile-cta-bar');
  var toTop = document.querySelector('.back-to-top');
  var cookie = document.getElementById('cookie-banner');
  var cookieDismissed = false;
  try { cookieDismissed = localStorage.getItem('dr-cookie-ok') === '1'; } catch (e) {}
  function onScroll() {
    var y = window.scrollY;
    if (header) header.classList.toggle('scrolled', y > 40);
    if (bar) bar.classList.toggle('is-visible', y > 320);
    if (toTop) toTop.classList.toggle('visible', y > 700);
    if (cookie && !cookieDismissed && y > 80) cookie.classList.add('is-visible');
  }
  onScroll();
  window.addEventListener('scroll', onScroll, { passive: true });
  if (toTop) toTop.addEventListener('click', function () { window.scrollTo({ top: 0, behavior: 'smooth' }); });

  /* Cookie banner dismissal (remembered in localStorage) */
  if (cookie) {
    var ok = cookie.querySelector('.cookie-banner__dismiss');
    if (ok) ok.addEventListener('click', function () {
      cookieDismissed = true;
      cookie.classList.remove('is-visible');
      try { localStorage.setItem('dr-cookie-ok', '1'); } catch (e) {}
    });
  }

  /* Mobile menu */
  var burger = document.querySelector('.hamburger');
  var menu = document.getElementById('mobile-menu');
  function setMenu(open) {
    if (!burger || !menu) return;
    menu.classList.toggle('active', open);
    menu.setAttribute('aria-hidden', open ? 'false' : 'true');
    burger.classList.toggle('active', open);
    burger.setAttribute('aria-expanded', open ? 'true' : 'false');
    burger.setAttribute('aria-label', open ? 'Close menu' : 'Open menu');
    document.body.classList.toggle('menu-open', open);
  }
  if (burger && menu) {
    burger.addEventListener('click', function () { setMenu(!menu.classList.contains('active')); });
    menu.querySelectorAll('a').forEach(function (a) { a.addEventListener('click', function () { setMenu(false); }); });
    document.addEventListener('keydown', function (e) { if (e.key === 'Escape') setMenu(false); });
  }

  /* Estimate dialog (the hero form on phones). Without <dialog> support the links fall through to /contact/. */
  var dialog = document.getElementById('estimate-dialog');
  if (dialog && typeof dialog.showModal === 'function') {
    document.querySelectorAll('.hero-form-open, [data-open-estimate]').forEach(function (btn) {
      btn.addEventListener('click', function (e) {
        e.preventDefault();
        var svc = btn.getAttribute('data-service');
        var sel = dialog.querySelector('select[name="service"]');
        if (svc && sel) sel.value = svc;
        dialog.showModal();
      });
    });
    var close = dialog.querySelector('.dialog-close');
    if (close) close.addEventListener('click', function () { dialog.close(); });
    dialog.addEventListener('click', function (e) { if (e.target === dialog) dialog.close(); });
  }

  /* GA4 events */
  function track(name, params) { if (typeof gtag === 'function') gtag('event', name, params); }
  document.querySelectorAll('a[href^="tel:"]').forEach(function (a) {
    a.addEventListener('click', function () { track('phone_click', { event_category: 'engagement', event_label: a.getAttribute('href').replace('tel:', '') }); });
  });
  document.querySelectorAll('a[href^="mailto:"]').forEach(function (a) {
    a.addEventListener('click', function () { track('email_click', { event_category: 'engagement' }); });
  });
  document.querySelectorAll('form').forEach(function (f) {
    f.addEventListener('submit', function () {
      var id = f.querySelector('[name="form_id"]');
      track('form_submit', { event_category: 'conversion', event_label: id ? id.value : 'form' });
    });
  });
})();
