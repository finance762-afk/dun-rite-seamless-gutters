<?php
/**
 * Dun-Rite Seamless Gutters, Inc. — nav.php
 * Requires: $currentPage (string slug)
 */
$currentPage = $currentPage ?? '';
?>
<nav class="navbar" role="navigation" aria-label="Primary">
  <div class="navbar-inner">
    <a href="/" class="navbar-brand" aria-label="Dun-Rite Seamless Gutters home">
      <img src="https://i.imgur.com/xRVJ7rY.jpeg" alt="Dun-Rite Seamless Gutters, Inc." class="navbar-logo" width="60" height="60">
    </a>

    <ul class="nav-links">
      <li>
        <a href="/" <?php if ($currentPage === 'home') echo 'aria-current="page"'; ?>>Home</a>
      </li>
      <li class="has-dropdown">
        <a href="/services/" <?php if ($currentPage === 'services' || strpos($currentPage, 'service-') === 0) echo 'aria-current="page"'; ?>>Services</a>
        <ul class="dropdown" role="menu" style="display:none">
          <li><a href="/services/seamless-gutter-installation/">Seamless Gutter Installation</a></li>
          <li><a href="/services/aluminum-gutters/">Aluminum Gutters</a></li>
          <li><a href="/services/copper-gutters/">Copper Gutters</a></li>
          <li><a href="/services/gutter-guards/">Gutter Guards</a></li>
          <li><a href="/services/gutter-cleaning/">Gutter Cleaning</a></li>
          <li><a href="/services/gutter-repair-replacement/">Gutter Repair &amp; Replacement</a></li>
          <li><a href="/services/commercial-gutters/">Commercial Gutters</a></li>
          <li><a href="/services/custom-downspouts/">Custom Downspouts</a></li>
        </ul>
      </li>
      <li class="has-dropdown">
        <a href="/service-areas/" <?php if ($currentPage === 'service-areas') echo 'aria-current="page"'; ?>>Service Areas</a>
        <ul class="dropdown dropdown--wide" role="menu" style="display:none">
          <li><a href="/service-areas/madison/">Madison <span class="dropdown-badge">HQ</span></a></li>
          <li><a href="/service-areas/bolton/">Bolton</a></li>
          <li><a href="/service-areas/brandon/">Brandon</a></li>
          <li><a href="/service-areas/canton/">Canton</a></li>
          <li><a href="/service-areas/clinton/">Clinton</a></li>
          <li><a href="/service-areas/florence/">Florence</a></li>
          <li><a href="/service-areas/flowood/">Flowood</a></li>
          <li><a href="/service-areas/gluckstadt/">Gluckstadt</a></li>
          <li><a href="/service-areas/jackson/">Jackson</a></li>
          <li><a href="/service-areas/pearl/">Pearl</a></li>
          <li><a href="/service-areas/raymond/">Raymond</a></li>
          <li><a href="/service-areas/richland/">Richland</a></li>
          <li><a href="/service-areas/ridgeland/">Ridgeland</a></li>
          <li><a href="/service-areas/terry/">Terry</a></li>
          <li class="dropdown-footer-link"><a href="/service-areas/">View All Service Areas →</a></li>
        </ul>
      </li>
      <li>
        <a href="/about/" <?php if ($currentPage === 'about') echo 'aria-current="page"'; ?>>About</a>
      </li>
      <li>
        <a href="/faq/" <?php if ($currentPage === 'faq') echo 'aria-current="page"'; ?>>FAQ</a>
      </li>
      <li>
        <a href="/contact/" class="nav-cta">(601) 750-1800</a>
      </li>
    </ul>

    <button class="hamburger" aria-label="Open menu" aria-expanded="false" aria-controls="mobile-menu">
      <span></span><span></span><span></span>
    </button>
  </div>
</nav>

<div class="mobile-menu" id="mobile-menu" role="dialog" aria-label="Mobile navigation" aria-modal="true">
  <a href="/">Home</a>
  <a href="/services/">Services</a>
  <a href="/service-areas/">Service Areas</a>
  <a href="/about/">About</a>
  <a href="/faq/">FAQ</a>
  <a href="/contact/">Contact</a>
  <a href="tel:+16017501800" class="btn-primary">Call (601) 750-1800</a>
</div>
