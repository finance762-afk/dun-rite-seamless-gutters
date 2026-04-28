<?php
/**
 * Dun-Rite — Thank You (Post-form, NOINDEX)
 */

$noIndex         = true;
$pageTitle       = "Thank You — Dun-Rite Seamless Gutters";
$pageDescription = "Thank you for contacting Dun-Rite Seamless Gutters.";
$canonicalUrl    = "https://dunrite-gutters.com/thank-you/";
$ogImage         = "https://i.imgur.com/kRJ17by.jpeg";
$heroImage       = "https://i.imgur.com/kRJ17by.jpeg";
$currentPage     = "thank-you";

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/nav.php'; ?>

<main id="main-content">

  <section class="hero hero--inner" aria-label="Thank you" style="min-height: 60vh;">
    <img src="https://i.imgur.com/kRJ17by.jpeg" alt="Dun-Rite Seamless Gutters service truck" class="hero-bg" width="1920" height="1080" loading="eager" fetchpriority="high">
    <div class="hero__inner" style="display:block; text-align:center; max-width: 720px;">
      <div class="hero__copy">
        <span class="eyebrow-label">Message Received</span>
        <h1>Thanks for <span class="text-accent">Reaching Out.</span></h1>
        <span class="section-subtitle">we'll be in touch shortly</span>
        <p class="hero__subhead" style="margin-left:auto; margin-right:auto;">Your inquiry was sent to Mark and the Dun-Rite team. We'll respond within one business day — typically same-day on weekdays. If you need to reach us immediately, call (601) 750-1800.</p>
        <div class="hero__ctas" style="justify-content:center;">
          <a href="/" class="btn-secondary btn-on-dark">Back to Homepage</a>
          <a href="/services/" class="btn-secondary btn-on-dark">View Our Services</a>
          <a href="tel:+16017501800" class="btn-primary">Call (601) 750-1800</a>
        </div>
      </div>
    </div>
  </section>

</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
