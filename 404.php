<?php
/**
 * Dun-Rite — 404 Page Not Found
 */
http_response_code(404);

$noIndex         = true;
$pageTitle       = "Page Not Found | Dun-Rite Seamless Gutters";
$pageDescription = "The page you're looking for couldn't be found. Browse our services, service areas, or contact us directly.";
$canonicalUrl    = "https://dunrite-gutters.com/404";
$ogImage         = "https://i.imgur.com/kRJ17by.jpeg";
$heroImage       = "https://i.imgur.com/jAqOpHk.jpeg";
$currentPage     = "404";

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/nav.php'; ?>

<main id="main-content">

  <section class="hero hero--inner" aria-label="Page not found" style="min-height: 60vh;">
    <img src="https://i.imgur.com/jAqOpHk.jpeg" alt="Gloved hand cleaning gutters — Dun-Rite Seamless Gutters Mississippi" class="hero-bg" width="1920" height="1080" loading="eager" fetchpriority="high">
    <div class="hero__inner" style="display:block; text-align:center; max-width: 720px;">
      <div class="hero__copy">
        <span class="eyebrow-label">404 · Page Not Found</span>
        <h1>We Couldn't Find <span class="text-accent">That Page.</span></h1>
        <p class="hero__subhead" style="margin-left:auto; margin-right:auto;">Looks like we missed a downspout. The page you were looking for might have moved, or the URL may be incorrect.</p>
      </div>
    </div>
    <div class="section-divider section-divider--bottom" aria-hidden="true">
      <svg viewBox="0 0 1440 100" preserveAspectRatio="none">
        <path fill="#FFFFFF" d="M0,64 C240,96 480,32 720,48 C960,64 1200,96 1440,72 L1440,100 L0,100 Z"></path>
      </svg>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div style="text-align:center;">
        <span class="eyebrow-label">Try One of These Instead</span>
        <h2 style="color: var(--color-primary); margin-bottom: var(--space-md);">Where Did You Want to Go?</h2>
      </div>

      <div class="grid-404">
        <a href="/">
          <i data-lucide="home"></i>
          <span>Homepage</span>
        </a>
        <a href="/services/">
          <i data-lucide="list"></i>
          <span>Our Services</span>
        </a>
        <a href="/service-areas/">
          <i data-lucide="map-pin"></i>
          <span>Service Areas</span>
        </a>
        <a href="/contact/">
          <i data-lucide="phone"></i>
          <span>Contact Us</span>
        </a>
      </div>

      <p style="text-align:center; margin-top: var(--space-xl); color: var(--color-text-light);">Or call us at <a href="tel:+16017501800" style="color: var(--color-accent); font-weight: 600;">(601) 750-1800</a>. We're easier to reach than this URL was.</p>
    </div>
  </section>

</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
