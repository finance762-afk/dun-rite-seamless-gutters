<?php
/** City page — Richland, MS */
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';

$pageTitle       = 'Gutter Installer in Richland, MS | Dun-Rite Seamless Gutters';
$pageDescription = 'Gutter installer for Richland, MS: Dun-Rite repairs and replaces gutters on ranch and split-level homes near Highway 49, with written quotes. Call (601) 750-1800.';
$currentPage     = 'service-areas';
$canonicalUrl    = $siteUrl . '/service-areas/richland/';
$pageType        = 'city';
$citySlug        = 'richland';

$faqs = [
    ['q' => 'How fast can I get a gutter repair estimate in Richland?',
     'a' => 'Repair estimates are available the same day. Call (601) 750-1800 during office hours, Monday to Friday, 8 AM to 5 PM.'],
    ['q' => 'Will Dun-Rite document storm damage for my insurance company?',
     'a' => 'Yes. You get adjuster-ready photos, a written damage assessment and an itemized repair quote.'],
    ['q' => 'Does the price go up because Richland is farther from Madison?',
     'a' => 'No. There are no travel fees, fuel surcharges or trip charges within the 14 cities served.'],
];

$schemaNodes = [
    dr_breadcrumb_node(['Service Areas' => '/service-areas/', 'Richland' => '/service-areas/richland/']),
    ['@type' => 'Service', 'name' => 'Gutter installation and repair in Richland, MS', 'serviceType' => 'Gutter installation and repair',
     'provider' => ['@id' => $siteUrl . '/#business'], 'areaServed' => ['@type' => 'City', 'name' => 'Richland, MS'], 'url' => $siteUrl . '/service-areas/richland/'],
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
        <?php echo dr_breadcrumb(['Service Areas' => '/service-areas/', 'Richland' => null]); ?>
        <p class="hero-eyebrow">Rankin County &middot; Highway 49</p>
        <h1>Gutter Repair &amp; Replacement in Richland, MS</h1>
        <p class="hero-answer">Dun-Rite Seamless Gutters, Inc. is a gutter installer based in Madison, Mississippi that serves Richland, the Rankin County city where Highway 49 meets I-20. Richland's housing is mostly 1970s and 1980s ranch and split-level homes, and split-levels are among the trickier houses to gutter well.</p>
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
        <h2>Why are split-level homes in Richland harder to gutter?</h2>
        <p>Split-level homes are harder to gutter because they have roofs at two or three heights that drain onto each other. On a typical Richland split-level, the upper roof empties onto the lower one. If the upper downspout simply ends above the lower shingles, it wears a stripe in them and overloads the lower gutter at one point.</p>
        <p>The levels should be planned together: the upper downspout carried down to the lower gutter or to the ground, and the lower run sized for both roofs. Dun-Rite Seamless Gutters, Inc. evaluates that water flow during the estimate. Downspout options are on the <a href="/services/custom-downspouts/">custom downspouts page</a>.</p>

        <h2>Should 40-year-old Richland gutters be repaired or replaced?</h2>
        <p>Forty-year-old gutters should usually be replaced, although a single bad section can still be repaired. Aluminum gutters last 20 to 30 years, and Richland's ranch and split-level homes date from the 1970s and 1980s. A <a href="/services/gutter-repair-replacement/">section repair</a> costs $150 to $600; full replacement starts at $1,200 and carries a 25-year manufacturer warranty on materials.</p>
        <dl class="fact-list">
          <div><dt>Section repair</dt><dd>$150 – $600</dd></div>
          <div><dt>Full replacement</dt><dd>From $1,200</dd></div>
          <div><dt>Typical install time</dt><dd>1 day, single story</dd></div>
        </dl>
        <figure class="photo-figure">
          <?php echo dr_picture('hanger-fastening', 'Hand tightening a gutter hanger bracket with a yellow screwdriver', ['sizes' => '(max-width: 960px) 100vw, 60vw']); ?>
          <figcaption>A gutter hanger being fastened.</figcaption>
        </figure>

        <h2>What do Richland's businesses along Highway 49 need?</h2>
        <p>Businesses along Highway 49 need gutters sized for big, simple metal roofs. Richland's stretch of the highway is lined with truck-service, warehouse and industrial buildings, and their roofs can shed thousands of gallons in one thunderstorm.</p>
        <p>For those buildings Dun-Rite installs 7-inch and 8-inch gutters and 4x5 high-flow downspouts; see the <a href="/services/commercial-gutters/">commercial gutters page</a>. Richland is one of five Rankin County cities on the <a href="/service-areas/">service area list</a>.</p>

        <h2>What do Richland owners ask Dun-Rite?</h2>
        <p>Richland homeowners and business owners ask Dun-Rite about repair estimates, storm claims and whether the price changes this far from Madison. The short answers are below, and anything not covered can be asked by calling the office at (601) 750-1800 during business hours.</p>
        <?php echo dr_faq_list($faqs); ?>

        <p class="last-updated">Last updated: <?php echo date('F Y', filemtime(__FILE__)); ?></p>
      </article>

      <aside class="page-rail" aria-label="Richland service facts">
        <div class="rail-card rail-card--tint">
          <h3>Richland at a glance</h3>
          <ul>
            <li>Rankin County</li>
            <li>Highway 49 at I-20</li>
            <li>Ranch and split-level homes</li>
            <li>No travel fees</li>
          </ul>
        </div>
        <div class="rail-card">
          <h3>Nearby cities</h3>
          <ul>
            <li><a href="/service-areas/pearl/">Gutters in Pearl</a></li>
            <li><a href="/service-areas/florence/">Gutters in Florence</a></li>
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
  $relatedServices = ['gutter-repair-replacement', 'custom-downspouts', 'commercial-gutters'];
  $relatedHeading  = 'Which gutter services are most requested in Richland?';
  $relatedText     = 'These are the three services Richland customers ask Dun-Rite Seamless Gutters, Inc. about most. Each page lists the price range, the materials and what the crew does on site.';
  $closingHeading  = 'Get your Richland gutters repaired or replaced';
  include $_SERVER['DOCUMENT_ROOT'] . '/includes/service-close.php';
  ?>

</main>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
