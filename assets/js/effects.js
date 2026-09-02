/* ==========================================================================
   DUN-RITE SEAMLESS GUTTERS — effects.js
   Navbar, mobile menu, smooth scroll, back-to-top, GA4 event tracking
   ========================================================================== */

(function () {
  'use strict';

  /* --------------------------------------------------------------------
     Navbar Scroll Transition
     -------------------------------------------------------------------- */
  const navbar = document.querySelector('.navbar');
  if (navbar) {
    const handleScroll = function () {
      if (window.scrollY > 50) {
        navbar.classList.add('scrolled');
      } else {
        navbar.classList.remove('scrolled');
      }
    };
    handleScroll();
    window.addEventListener('scroll', handleScroll, { passive: true });
  }

  /* --------------------------------------------------------------------
     Smooth Scroll for Anchor Links
     -------------------------------------------------------------------- */
  document.querySelectorAll('a[href^="#"]').forEach(function (anchor) {
    anchor.addEventListener('click', function (e) {
      const href = anchor.getAttribute('href');
      if (href === '#' || href === '#!') return;

      const target = document.querySelector(href);
      if (target) {
        e.preventDefault();
        target.scrollIntoView({ behavior: 'smooth', block: 'start' });
      }
    });
  });

  /* --------------------------------------------------------------------
     Mobile Menu Toggle
     -------------------------------------------------------------------- */
  const hamburger = document.querySelector('.hamburger');
  const mobileMenu = document.querySelector('.mobile-menu');

  if (hamburger && mobileMenu) {
    hamburger.addEventListener('click', function () {
      const isActive = mobileMenu.classList.toggle('active');
      hamburger.classList.toggle('active');
      document.body.style.overflow = isActive ? 'hidden' : '';
      hamburger.setAttribute('aria-expanded', isActive ? 'true' : 'false');
    });

    mobileMenu.querySelectorAll('a').forEach(function (link) {
      link.addEventListener('click', function () {
        hamburger.classList.remove('active');
        mobileMenu.classList.remove('active');
        document.body.style.overflow = '';
        hamburger.setAttribute('aria-expanded', 'false');
      });
    });

    document.addEventListener('keydown', function (e) {
      if (e.key === 'Escape' && mobileMenu.classList.contains('active')) {
        hamburger.classList.remove('active');
        mobileMenu.classList.remove('active');
        document.body.style.overflow = '';
        hamburger.setAttribute('aria-expanded', 'false');
      }
    });
  }

  /* --------------------------------------------------------------------
     Back-to-Top Button
     -------------------------------------------------------------------- */
  const backToTop = document.querySelector('.back-to-top');
  if (backToTop) {
    window.addEventListener(
      'scroll',
      function () {
        if (window.scrollY > 600) {
          backToTop.classList.add('visible');
        } else {
          backToTop.classList.remove('visible');
        }
      },
      { passive: true }
    );

    backToTop.addEventListener('click', function () {
      window.scrollTo({ top: 0, behavior: 'smooth' });
    });
  }

  /* ====================================================================
     GA4 EVENT TRACKING
     ==================================================================== */

  /* --------------------------------------------------------------------
     Phone click-to-call tracking
     -------------------------------------------------------------------- */
  document.querySelectorAll('a[href^="tel:"]').forEach(function (link) {
    link.addEventListener('click', function () {
      if (typeof gtag === 'function') {
        gtag('event', 'phone_click', {
          event_category: 'engagement',
          event_label: link.getAttribute('href').replace('tel:', '')
        });
      }
    });
  });

  /* --------------------------------------------------------------------
     Form submission tracking
     -------------------------------------------------------------------- */
  document.querySelectorAll('form').forEach(function (form) {
    form.addEventListener('submit', function () {
      if (typeof gtag === 'function') {
        gtag('event', 'form_submit', {
          event_category: 'conversion',
          event_label: form.getAttribute('action') || 'unknown_form'
        });
      }
    });
  });

  /* --------------------------------------------------------------------
     Email click tracking
     -------------------------------------------------------------------- */
  document.querySelectorAll('a[href^="mailto:"]').forEach(function (link) {
    link.addEventListener('click', function () {
      if (typeof gtag === 'function') {
        gtag('event', 'email_click', {
          event_category: 'engagement',
          event_label: link.getAttribute('href').replace('mailto:', '')
        });
      }
    });
  });

  /* --------------------------------------------------------------------
     Scroll depth tracking (75%)
     -------------------------------------------------------------------- */
  let scrollTracked = false;
  window.addEventListener(
    'scroll',
    function () {
      if (scrollTracked) return;
      const docHeight = document.documentElement.scrollHeight;
      const scrollPercent = ((window.scrollY + window.innerHeight) / docHeight) * 100;
      if (scrollPercent >= 75) {
        scrollTracked = true;
        if (typeof gtag === 'function') {
          gtag('event', 'scroll_75', {
            event_category: 'engagement',
            event_label: window.location.pathname
          });
        }
      }
    },
    { passive: true }
  );
})();
