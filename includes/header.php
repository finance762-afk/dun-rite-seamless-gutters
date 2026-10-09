<?php
/**
 * header.php — skip link, fixed header (scrolled state toggled by effects.js), mobile overlay menu.
 * Bar colour matches the logo's own blue field so the boxed logo sits flush (logo unchanged).
 * Loop variables are $nav-prefixed (shared-include variable rule).
 */
$currentPage = $currentPage ?? '';
?>
<a href="#main-content" class="skip-link">Skip to main content</a>
<header class="site-header site-header--dark">
  <div class="container header-inner">
    <a href="/" class="site-logo" aria-label="<?php echo h($siteName); ?> home">
      <img src="/assets/images/logo-header-v1.webp" alt="<?php echo h($siteName); ?> logo" width="316" height="152" class="logo--wide">
    </a>
    <nav aria-label="Main navigation">
      <ul class="nav-links">
        <li><a href="/"<?php if ($currentPage === 'home') echo ' aria-current="page"'; ?>>Home</a></li>
        <li class="has-dropdown">
          <a href="/services/"<?php if ($currentPage === 'services') echo ' aria-current="page"'; ?>>Services <?php echo icon('chevron-down', 14); ?></a>
          <ul class="dropdown" style="display:none">
            <?php foreach ($services as $navSvc): ?>
            <li><a href="/services/<?php echo h($navSvc['slug']); ?>/"><?php echo h($navSvc['nav']); ?></a></li>
            <?php endforeach; ?>
          </ul>
        </li>
        <li class="has-dropdown">
          <a href="/service-areas/"<?php if ($currentPage === 'service-areas') echo ' aria-current="page"'; ?>>Service Areas <?php echo icon('chevron-down', 14); ?></a>
          <ul class="dropdown dropdown--wide" style="display:none">
            <?php foreach ($serviceAreaData as $navArea): ?>
            <li><a href="/service-areas/<?php echo h($navArea['slug']); ?>/"><?php echo h($navArea['name']); ?></a></li>
            <?php endforeach; ?>
          </ul>
        </li>
        <li><a href="/about/"<?php if ($currentPage === 'about') echo ' aria-current="page"'; ?>>About</a></li>
        <li><a href="/faq/"<?php if ($currentPage === 'faq') echo ' aria-current="page"'; ?>>FAQ</a></li>
        <li><a href="/contact/"<?php if ($currentPage === 'contact') echo ' aria-current="page"'; ?>>Contact</a></li>
      </ul>
    </nav>
    <div class="header-cta">
      <a class="link-call" href="tel:+<?php echo h($phoneRaw); ?>"><?php echo icon('phone', 18); ?> <?php echo h($phone); ?></a>
      <a class="btn btn-primary" href="/contact/">Free Estimate</a>
    </div>
    <button class="hamburger" type="button" aria-label="Open menu" aria-expanded="false" aria-controls="mobile-menu">
      <span></span><span></span><span></span>
    </button>
  </div>
</header>

<div class="mobile-menu" id="mobile-menu" aria-hidden="true">
  <nav aria-label="Mobile navigation">
    <ul>
      <li><a href="/">Home</a></li>
      <li><a href="/services/">Services</a>
        <ul class="mobile-submenu">
          <?php foreach ($services as $navSvc): ?>
          <li><a href="/services/<?php echo h($navSvc['slug']); ?>/"><?php echo h($navSvc['nav']); ?></a></li>
          <?php endforeach; ?>
        </ul>
      </li>
      <li><a href="/service-areas/">Service Areas</a>
        <ul class="mobile-submenu">
          <?php foreach ($serviceAreaData as $navArea): ?>
          <li><a href="/service-areas/<?php echo h($navArea['slug']); ?>/"><?php echo h($navArea['name']); ?></a></li>
          <?php endforeach; ?>
        </ul>
      </li>
      <li><a href="/about/">About</a></li>
      <li><a href="/faq/">FAQ</a></li>
      <li><a href="/contact/">Contact</a></li>
    </ul>
  </nav>
  <div class="mobile-menu-cta">
    <a class="btn btn-accent btn-lg" href="tel:+<?php echo h($phoneRaw); ?>"><?php echo icon('phone', 18); ?> Call <?php echo h($phone); ?></a>
    <a class="btn btn-outline-white btn-lg" href="/contact/">Request an estimate</a>
  </div>
</div>
