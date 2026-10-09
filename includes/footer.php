<?php
/**
 * footer.php — entity block, link columns, NAP + hours, legal row, dofollow credit, partner badge,
 * mobile CTA bar, cookie banner, estimate dialog, deferred scripts.
 * Loop variables are $foot-prefixed (shared-include variable rule).
 */
?>
<footer class="site-footer">
  <div class="container">
    <div class="footer-grid">
      <div class="footer-col footer-brand">
        <img src="/assets/images/logo-header-v1.webp" alt="<?php echo h($siteName); ?> logo" width="316" height="152" loading="lazy" decoding="async" class="footer-logo-img">
        <p><?php echo h($siteName); ?> is a gutter company based in <?php echo h($address['city']); ?>, <?php echo h($stateName); ?>, founded by <?php echo h($ownerName); ?> in <?php echo (int) $yearEstablished; ?>. It installs seamless aluminum and hand-soldered copper gutters, gutter guards and downspouts, and repairs and cleans gutters across 14 cities in the <?php echo h($regionName); ?>.</p>
        <div class="footer-badges">
          <span>Est. <?php echo (int) $yearEstablished; ?></span>
          <span>Mississippi-licensed corporation</span>
          <span>Workers' Comp + General Liability insured</span>
          <span>BBB accredited</span>
        </div>
      </div>
      <div class="footer-col">
        <h4>Services</h4>
        <ul>
          <?php foreach ($services as $footSvc): ?>
          <li><a href="/services/<?php echo h($footSvc['slug']); ?>/"><?php echo h($footSvc['nav']); ?></a></li>
          <?php endforeach; ?>
          <li><a href="/services/">All services</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h4>Service areas</h4>
        <ul class="footer-areas">
          <?php foreach ($serviceAreaData as $footArea): ?>
          <li><a href="/service-areas/<?php echo h($footArea['slug']); ?>/"><?php echo h($footArea['name']); ?></a></li>
          <?php endforeach; ?>
        </ul>
      </div>
      <div class="footer-col">
        <h4>Contact</h4>
        <ul class="footer-contact">
          <li><?php echo icon('map-pin', 18); ?><span><?php echo h($address['street']); ?>, <?php echo h($address['city']); ?>, <?php echo h($address['state']); ?> <?php echo h($address['zip']); ?></span></li>
          <li><?php echo icon('phone', 18); ?><a href="tel:+<?php echo h($phoneRaw); ?>"><?php echo h($phone); ?></a></li>
          <li><?php echo icon('mail', 18); ?><a href="mailto:<?php echo h($email); ?>"><?php echo h($email); ?></a></li>
          <li><?php echo icon('clock', 18); ?><span><?php echo h($businessHours); ?></span></li>
        </ul>
        <h4 class="footer-h4-gap">Company</h4>
        <ul>
          <li><a href="/about/">About <?php echo h($ownerName); ?></a></li>
          <li><a href="/faq/">Gutter FAQ</a></li>
          <li><a href="/contact/">Contact</a></li>
          <?php foreach ($socialLinks as $footLabel => $footUrl): ?>
          <li><a href="<?php echo h($footUrl); ?>" target="_blank" rel="noopener"><?php echo h($footLabel); ?></a></li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>

    <div class="footer-legal">
      <div class="footer-legal-inner">
        <nav class="footer-legal-links" aria-label="Legal">
          <a href="/privacy-policy/">Privacy Policy</a>
          <span class="footer-legal-divider" aria-hidden="true">|</span>
          <a href="/terms/">Terms of Service</a>
          <span class="footer-legal-divider" aria-hidden="true">|</span>
          <a href="/cookie-policy/">Cookie Policy</a>
          <span class="footer-legal-divider" aria-hidden="true">|</span>
          <a href="/accessibility/">Accessibility</a>
          <span class="footer-legal-divider" aria-hidden="true">|</span>
          <a href="/privacy-policy/#ccpa-rights">Do Not Sell or Share My Personal Information</a>
          <span class="footer-legal-divider" aria-hidden="true">|</span>
          <a href="/sitemap.xml">Sitemap</a>
        </nav>
      </div>
      <div class="footer-legal-inner footer-bottom-row">
        <p>&copy; <?php echo date('Y'); ?> <?php echo h($siteName); ?> All rights reserved.</p>
        <p class="footer-credit"><a href="https://pageoneinsights.com" rel="dofollow" target="_blank">Web Design &amp; Hosting by Page One Insights, LLC</a></p>
      </div>
    </div>
  </div>
  <?php include __DIR__ . '/partner-badge.php'; ?>
</footer>

<!-- Sticky mobile CTA bar -->
<div class="mobile-cta-bar" aria-label="Quick contact">
  <a class="mobile-cta-bar__call" href="tel:+<?php echo h($phoneRaw); ?>"><?php echo icon('phone', 18); ?> Call Now</a>
  <a class="mobile-cta-bar__estimate" href="/contact/" data-open-estimate><?php echo icon('clipboard-list', 18); ?> Free Estimate</a>
</div>

<button class="back-to-top" type="button" aria-label="Back to top"><?php echo icon('arrow-up', 20); ?></button>

<!-- Cookie banner (dismissal stored in localStorage by effects.js) -->
<div class="cookie-banner" id="cookie-banner" role="region" aria-label="Cookie notice">
  <p class="cookie-banner__text">This site uses cookies for analytics and to remember how you found us. <a href="/cookie-policy/">Cookie Policy</a></p>
  <button type="button" class="cookie-banner__dismiss">Got it</button>
</div>

<!-- Estimate dialog: the hero form for phones (opened by .hero-form-open / [data-open-estimate]) -->
<dialog class="estimate-dialog" id="estimate-dialog" aria-labelledby="estimate-dialog-title">
  <div class="dialog-head">
    <h2 id="estimate-dialog-title">Request a written estimate</h2>
    <button type="button" class="dialog-close" aria-label="Close"><?php echo icon('x', 20); ?></button>
  </div>
  <div class="dialog-body">
    <?php echo dr_lead_form('dialog'); ?>
  </div>
</dialog>

<script src="/assets/js/animations.js?v=<?php echo h($cssVersion); ?>" defer></script>
<script src="/assets/js/effects.js?v=<?php echo h($cssVersion); ?>" defer></script>
</body>
</html>
