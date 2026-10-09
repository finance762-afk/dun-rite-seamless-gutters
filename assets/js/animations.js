/* Dun-Rite Seamless Gutters — animations.js
   Fail-open scroll reveals: content is hidden only once this file has run (html.js-anim),
   an IntersectionObserver reveals it, and a 2.5 s safety net reveals anything left. */
document.documentElement.classList.add('js-anim');
(function () {
  'use strict';
  var SEL = '.reveal, .reveal-up, .reveal-down, .reveal-left, .reveal-right, .reveal-scale, [data-animate]';
  function start() {
    var els = document.querySelectorAll(SEL);
    if (!('IntersectionObserver' in window)) {
      els.forEach(function (el) { el.classList.add('revealed'); });
      return;
    }
    var io = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) { entry.target.classList.add('revealed'); io.unobserve(entry.target); }
      });
    }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });
    els.forEach(function (el) { io.observe(el); });
    setTimeout(function () {
      document.querySelectorAll(SEL).forEach(function (el) { el.classList.add('revealed'); });
    }, 2500);
  }
  if (document.readyState === 'loading') document.addEventListener('DOMContentLoaded', start); else start();
})();
