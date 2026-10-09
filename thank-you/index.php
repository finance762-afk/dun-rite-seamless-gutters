<?php
/** Thank you — shown after a form submission (noindex) */
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';

$noindex         = true;
$pageTitle       = 'Thank You | Dun-Rite Seamless Gutters';
$pageDescription = 'Your message reached Dun-Rite Seamless Gutters, Inc. in Madison, MS.';
$currentPage     = 'thank-you';
$canonicalUrl    = $siteUrl . '/thank-you/';
$pageType        = 'other';
$schemaNodes     = [['@type' => 'WebPage', 'url' => $siteUrl . '/thank-you/', 'name' => $pageTitle]];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>
<main id="main-content">
  <section class="hero hero--interior">
    <span class="grain" aria-hidden="true"></span>
    <div class="container">
      <div class="hero-text">
        <p class="hero-eyebrow">Message received</p>
        <h1>Thank you. Your request reached the Dun-Rite office.</h1>
        <p class="hero-answer">The office returns messages during business hours, <?php echo h($businessHours); ?>, and most estimate visits are scheduled within 48 hours. If it cannot wait, call <?php echo h($phone); ?>.</p>
        <div class="hero-actions">
          <a class="btn btn-accent btn-lg" href="tel:+<?php echo h($phoneRaw); ?>"><?php echo icon('phone', 18); ?> Call <?php echo h($phone); ?></a>
          <a class="btn btn-secondary btn-lg" href="/">Back to the homepage</a>
        </div>
      </div>
    </div>
  </section>
  <section class="section">
    <div class="container container-narrow">
      <h2>While you wait</h2>
      <ul class="pill-links">
        <li><a href="/services/">Gutter services and prices</a></li>
        <li><a href="/faq/">Gutter FAQ</a></li>
        <li><a href="/service-areas/">Service areas</a></li>
      </ul>
      <p style="margin-top:1.5rem">Already a Dun-Rite customer? <a class="btn btn-secondary btn-sm" href="<?php echo h($reviewRequestUrl); ?>" target="_blank" rel="noopener">Leave a Google review</a></p>
    </div>
  </section>
</main>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
