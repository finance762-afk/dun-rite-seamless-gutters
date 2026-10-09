<?php
/** 404 — page not found (noindex) */
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
http_response_code(404);

$noindex         = true;
$pageTitle       = 'Page Not Found | Dun-Rite Seamless Gutters';
$pageDescription = 'That page could not be found. Browse Dun-Rite gutter services, service areas or contact the office.';
$currentPage     = '404';
$canonicalUrl    = $siteUrl . '/404';
$pageType        = 'other';
$schemaNodes     = [['@type' => 'WebPage', 'name' => $pageTitle]];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>
<main id="main-content">
  <section class="hero hero--interior">
    <span class="grain" aria-hidden="true"></span>
    <div class="container">
      <div class="hero-text">
        <p class="hero-eyebrow">404 &middot; Page not found</p>
        <h1>That page is not here.</h1>
        <p class="hero-answer">The page may have moved, or the address may have a typo. These links cover most of what people come looking for.</p>
        <ul class="pill-links">
          <li><a href="/">Homepage</a></li>
          <li><a href="/services/">Gutter services</a></li>
          <li><a href="/service-areas/">Service areas</a></li>
          <li><a href="/faq/">FAQ</a></li>
          <li><a href="/contact/">Contact</a></li>
        </ul>
        <div class="hero-actions">
          <a class="link-call" href="tel:+<?php echo h($phoneRaw); ?>"><?php echo icon('phone', 18); ?> <?php echo h($phone); ?></a>
        </div>
      </div>
    </div>
  </section>
</main>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
