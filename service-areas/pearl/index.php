<?php
/** City page — Pearl, MS */
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';

$pageTitle       = 'Gutter Replacement in Pearl, MS | Dun-Rite Gutter Installer';
$pageDescription = 'Gutter installer for Pearl, MS: Dun-Rite replaces worn gutters on 1970s and 1980s ranch homes, from $1,200, with a 25-year material warranty. Call (601) 750-1800.';
$currentPage     = 'service-areas';
$canonicalUrl    = $siteUrl . '/service-areas/pearl/';
$pageType        = 'city';
$citySlug        = 'pearl';

$faqs = [
    ['q' => 'What warranty comes with replacement gutters?',
     'a' => 'A 25-year manufacturer warranty on materials and a 2-year labor warranty on the installation.'],
    ['q' => 'Do you haul away the old gutters?',
     'a' => 'Yes. Removal and disposal of the old gutters and downspouts is included in every quote.'],
    ['q' => 'How soon can someone look at my gutters in Pearl?',
     'a' => 'Most estimates are scheduled within 48 hours, and repair estimates can be given the same day. Call (601) 750-1800.'],
];

$schemaNodes = [
    dr_breadcrumb_node(['Service Areas' => '/service-areas/', 'Pearl' => '/service-areas/pearl/']),
    ['@type' => 'Service', 'name' => 'Gutter installation and repair in Pearl, MS', 'serviceType' => 'Gutter installation and repair',
     'provider' => ['@id' => $siteUrl . '/#business'], 'areaServed' => ['@type' => 'City', 'name' => 'Pearl, MS'], 'url' => $siteUrl . '/service-areas/pearl/'],
    dr_faq_node($faqs),
];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>
<main id="main-content">

  <section class="hero hero--interior">
    <span class="grain" aria-hidden="true"></span>
    <div class="container hero-grid hero-grid--form">
      <div class="hero-text">
        <?php echo dr_breadcrumb(['Service Areas' => '/service-areas/', 'Pearl' => null]); ?>
        <p class="hero-eyebrow">Rankin County &middot; Replacement work</p>
        <h1>Gutter Replacement &amp; Repair in Pearl, MS</h1>
        <p class="hero-answer">Dun-Rite Seamless Gutters, Inc. is a gutter installer based in Madison, Mississippi that serves Pearl, across the Pearl River from Jackson. Most Pearl homes are ranch houses from the 1970s and 1980s, and most of their original gutter systems are ready for full replacement.</p>
        <div class="hero-actions">
          <a class="btn btn-accent btn-lg hero-form-open" href="/contact/">Request an estimate</a>
          <a class="link-call" href="tel:+<?php echo h($phoneRaw); ?>"><?php echo icon('phone', 18); ?> <?php echo h($phone); ?></a>
        </div>
      </div>
      <?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/hero-form.php'; ?>
    </div>
  </section>

  <section class="section">
    <div class="container page-grid">
      <article class="prose">
        <h2>How do you know a Pearl ranch house needs new gutters?</h2>
        <p>A Pearl ranch house needs new gutters when the old ones leak at several joints, sag between hangers or have pulled off the fascia. On an original system all three often show up together, because these gutters are 40 to 50 years old. Aluminum gutters have a service life of 20 to 30 years, so an original 1970s system is well past it.</p>
        <div class="table-wrap">
          <table class="data-table">
            <caption>Repair or replace: how the numbers compare on an older Pearl home.</caption>
            <thead><tr><th scope="col">Situation</th><th scope="col">Best option</th><th scope="col">Dun-Rite price</th></tr></thead>
            <tbody>
              <tr><th scope="row">One or two bad sections</th><td>Section repair</td><td>$150 – $600 per section</td></tr>
              <tr><th scope="row">Leaks along several runs</th><td>Full replacement</td><td>From $1,200</td></tr>
              <tr><th scope="row">Sound gutters, constant clogging</th><td>Guards or a cleaning plan</td><td>$3 – $14 per foot, or $150 – $300 a visit</td></tr>
            </tbody>
          </table>
        </div>

        <h2>What does gutter replacement on a Pearl home involve?</h2>
        <p>Gutter replacement on a Pearl home is a one-day job on most single-story ranches. The low, simple roofline of a ranch house is the easiest kind to gutter: long straight runs, few corners and eaves that can be reached from a short ladder.</p>
        <ol class="steps">
          <li><strong>Old system removed</strong>The original gutters and downspouts come down; removal and disposal are in the quote.</li>
          <li><strong>New runs formed</strong>Each run is formed on site in .032 gauge aluminum, one piece per eave.</li>
          <li><strong>Hung and sealed</strong>Hidden hangers every 24 inches, sealed corners, and a quarter inch of fall per 10 feet.</li>
        </ol>
        <p>Full details are on the <a href="/services/gutter-repair-replacement/">gutter repair and replacement page</a>.</p>
        <figure class="photo-figure">
          <?php echo dr_picture('eave-ladder-work', 'Installer on an extension ladder working at the eave of a house, seen from below', ['sizes' => '(max-width: 960px) 100vw, 60vw']); ?>
          <figcaption>Work at the eave, reached from an extension ladder.</figcaption>
        </figure>

        <h2>What about Pearl's newer subdivisions?</h2>
        <p>Pearl's newer subdivisions need a first full gutter system more often than a replacement. Newer houses have steeper roofs and more corners than the older ranches near Highway 80, and a new house is often delivered without a complete gutter system.</p>
        <p>A complete <a href="/services/seamless-gutter-installation/">seamless gutter installation</a> runs $1,200 to $3,500 for most homes. Pearl is on the <a href="/service-areas/">Dun-Rite service area list</a> with four other Rankin County cities.</p>

        <h2>What do Pearl homeowners ask Dun-Rite?</h2>
        <p>Pearl homeowners ask Dun-Rite about the warranty on replacement gutters, haul-off of the old ones and how soon an estimate can happen. The short answers are below, and anything not covered can be asked by calling the office at (601) 750-1800 during business hours.</p>
        <?php echo dr_faq_list($faqs); ?>

        <p class="last-updated">Last updated: <?php echo date('F Y', filemtime(__FILE__)); ?></p>
      </article>

      <aside class="page-rail" aria-label="Pearl service facts">
        <div class="rail-card rail-card--tint">
          <h3>Pearl at a glance</h3>
          <ul>
            <li>Rankin County</li>
            <li>1970s and 1980s ranch homes</li>
            <li>Mostly full replacements</li>
            <li>No travel fees</li>
          </ul>
        </div>
        <div class="rail-card">
          <h3>Nearby cities</h3>
          <ul>
            <li><a href="/service-areas/flowood/">Gutters in Flowood</a></li>
            <li><a href="/service-areas/richland/">Gutters in Richland</a></li>
            <li><a href="/service-areas/brandon/">Gutters in Brandon</a></li>
            <li><a href="/service-areas/">All 14 service areas</a></li>
          </ul>
        </div>
        <div class="rail-card rail-card--dark">
          <h3>Talk to the office</h3>
          <p><?php echo h($businessHours); ?></p>
          <a class="btn btn-outline-white" href="tel:+<?php echo h($phoneRaw); ?>"><?php echo icon('phone', 18); ?> <?php echo h($phone); ?></a>
        </div>
      </aside>
    </div>
  </section>

  <?php
  $relatedServices = ['gutter-repair-replacement', 'seamless-gutter-installation', 'gutter-guards'];
  $relatedHeading  = 'Which gutter services are most requested in Pearl?';
  $relatedText     = 'These are the three services Pearl customers ask Dun-Rite Seamless Gutters, Inc. about most. Each page lists the price range, the materials and what the crew does on site.';
  $closingHeading  = 'Replace the gutters your house was built with';
  include $_SERVER['DOCUMENT_ROOT'] . '/includes/service-close.php';
  ?>

</main>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
