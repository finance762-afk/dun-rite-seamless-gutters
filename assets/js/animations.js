/* ==========================================================================
   DUN-RITE SEAMLESS GUTTERS — animations.js
   Scroll reveals + animated stat counters
   ==========================================================================
   IMPORTANT: Never apply .reveal-* classes to above-fold content (hero, first
   trust strip). They start at opacity: 0 and won't appear until JS fires.
   ========================================================================== */

(function () {
  'use strict';

  /* --------------------------------------------------------------------
     Scroll Reveal Observer
     -------------------------------------------------------------------- */
  const revealObserver = new IntersectionObserver(
    function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('is-visible');
          revealObserver.unobserve(entry.target);
        }
      });
    },
    {
      threshold: 0.15,
      rootMargin: '0px 0px -50px 0px'
    }
  );

  const revealEls = document.querySelectorAll(
    '.reveal-up, .reveal-down, .reveal-left, .reveal-right, .reveal-scale'
  );
  revealEls.forEach(function (el) {
    revealObserver.observe(el);
  });

  /* --------------------------------------------------------------------
     Stat Counter Animation
     -------------------------------------------------------------------- */
  function animateCounter(el) {
    const target = parseInt(el.dataset.target, 10);
    if (isNaN(target)) return;

    const duration = 2000;
    const start = performance.now();
    const suffix = el.dataset.suffix || '';
    const prefix = el.dataset.prefix || '';

    function update(now) {
      const progress = Math.min((now - start) / duration, 1);
      const eased = 1 - Math.pow(1 - progress, 3);
      const value = Math.floor(eased * target);
      el.textContent = prefix + value.toLocaleString() + suffix;
      if (progress < 1) {
        requestAnimationFrame(update);
      } else {
        el.textContent = prefix + target.toLocaleString() + suffix;
      }
    }

    requestAnimationFrame(update);
  }

  const counterObserver = new IntersectionObserver(
    function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          animateCounter(entry.target);
          counterObserver.unobserve(entry.target);
        }
      });
    },
    { threshold: 0.5 }
  );

  document.querySelectorAll('[data-counter]').forEach(function (el) {
    counterObserver.observe(el);
  });

  /* --------------------------------------------------------------------
     FAQ Accordion (Premium tier)
     -------------------------------------------------------------------- */
  document.querySelectorAll('.faq-item').forEach(function (item) {
    const question = item.querySelector('.faq-question');
    if (!question) return;

    question.addEventListener('click', function () {
      const isOpen = item.classList.contains('is-open');
      if (isOpen) {
        item.classList.remove('is-open');
        question.setAttribute('aria-expanded', 'false');
      } else {
        item.classList.add('is-open');
        question.setAttribute('aria-expanded', 'true');
      }
    });
  });
})();
