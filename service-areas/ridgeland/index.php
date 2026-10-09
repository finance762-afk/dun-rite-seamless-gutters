<?php
/** City page — Ridgeland, MS */
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';

$pageTitle       = 'Gutter Installer in Ridgeland, MS | Dun-Rite Seamless Gutters';
$pageDescription = 'Gutter installer for Ridgeland, MS: Dun-Rite replaces, repairs and cleans gutters in Bridgewater, Trace Harbor and Lake Castle from next-door Madison. Call (601) 750-1800.';
$currentPage     = 'service-areas';
$canonicalUrl    = $siteUrl . '/service-areas/ridgeland/';
$pageType        = 'city';
$citySlug        = 'ridgeland';

$faqs = [
    ['q' => 'How far is Dun-Rite from Ridgeland?',
     'a' => 'Dun-Rite is based in Madison, the next city north on I-55 and Highway 51. Ridgeland is the closest city in the service area, and estimates here are often scheduled the same day.'],
    ['q' => 'Do you remove the old gutters when you replace them?',
     'a' => 'Yes. Removal and disposal of the old gutters is included in every replacement quote.'],
    ['q' => 'Which gutter guard works for magnolia leaves?',
     'a' => 'The large-hole screen guard. It is made for broad leaves such as magnolia and oak and costs $7 to $10 per linear foot installed, with a service life of 10 to 15 years.'],
];

$schemaNodes = [
    dr_breadcrumb_node(['Service Areas' => '/service-areas/', 'Ridgeland' => '/service-areas/ridgeland/']),
    ['@type' => 'Service', 'name' => 'Gutter installation and repair in Ridgeland, MS', 'serviceType' => 'Gutter installation and repair',
     'provider' => ['@id' => $siteUrl . '/#business'], 'areaServed' => ['@type' => 'City', 'name' => 'Ridgeland, MS'], 'url' => $siteUrl . '/service-areas/ridgeland/'],
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
        <?php echo dr_breadcrumb(['Service Areas' => '/service-areas/', 'Ridgeland' => null]); ?>
        <p class="hero-eyebrow">Madison County &middot; Next door to the office</p>
        <h1>Gutter Replacement, Repair &amp; Cleaning in Ridgeland, MS</h1>
        <p class="hero-answer">Dun-Rite Seamless Gutters, Inc. is a gutter installer based in Madison, Mississippi, the city directly north of Ridgeland. Ridgeland is the closest of the 14 cities it serves, and much of the work there is replacing original gutters on homes built in the 1980s and 1990s.</p>
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
        <h2>Why are so many Ridgeland gutters due for replacement?</h2>
        <p>Many Ridgeland gutters are due for replacement because the neighborhoods are 30 to 40 years old and so are the gutters. Bridgewater, Trace Harbor and Lake Castle were built out in the 1980s and 1990s. Aluminum gutters last 20 to 30 years when installed properly, so an original system in these subdivisions is at or past the end of its service life.</p>
        <p>The usual signs are joints that drip, runs that have pulled away from the fascia and paint that has chalked. Dun-Rite Seamless Gutters, Inc. repairs single sections for $150 to $600, but on a system that age <a href="/services/gutter-repair-replacement/">full replacement, starting at $1,200</a>, is often the better use of the money.</p>

        <h2>How does Ridgeland's tree canopy affect gutters?</h2>
        <p>Ridgeland's magnolia and oak canopy sheds into gutters nearly year-round. Southern magnolias drop large, leathery leaves in every season, not just in fall, and those leaves do not break down in a gutter; they lie flat over the outlets. Oaks add catkins in spring and leaves in autumn. Between the Natchez Trace Parkway and the Ross Barnett Reservoir, a good share of the city sits under mature trees.</p>
        <p>For magnolia and oak leaves Dun-Rite recommends the large-hole screen guard at $7 to $10 per linear foot installed; the <a href="/services/gutter-guards/">gutter guard page</a> compares it with fine mesh and foam. Without guards, plan on <a href="/services/gutter-cleaning/">cleaning twice a year</a>.</p>
        <figure class="photo-figure">
          <?php echo dr_picture('covered-patio-bronze-gutters', 'Rear covered patio on a light stucco home with a bronze gutter and downspout at the roof corner', ['sizes' => '(max-width: 960px) 100vw, 60vw']); ?>
          <figcaption>A bronze gutter and downspout at the corner of a rear covered patio.</figcaption>
        </figure>

        <h2>What do replacement gutters cost on a Ridgeland home?</h2>
        <p>Replacement gutters on a Ridgeland home typically cost $1,200 to $3,500 for a complete aluminum system from Dun-Rite. The price covers removing the old gutters, forming new .032 gauge runs on site and hanging them on hidden hangers every 24 inches. Most single-story homes take one day; two-story homes take one to two.</p>
        <p>Ridgeland is one of 14 cities on the <a href="/service-areas/">Dun-Rite service area list</a>, and there are no trip charges in any of them.</p>

        <h2>What do Ridgeland homeowners ask Dun-Rite?</h2>
        <p>Ridgeland homeowners ask Dun-Rite about how close the crew is, whether old gutters are hauled away and which guard handles magnolia leaves. The short answers are below, and anything not covered can be asked by calling the office at (601) 750-1800 during business hours.</p>
        <?php echo dr_faq_list($faqs); ?>

        <p class="last-updated">Last updated: <?php echo date('F Y', filemtime(__FILE__)); ?></p>
      </article>

      <aside class="page-rail" aria-label="Ridgeland service facts">
        <div class="rail-card rail-card--tint">
          <h3>Ridgeland at a glance</h3>
          <ul>
            <li>Madison County</li>
            <li>Closest city to the Dun-Rite office</li>
            <li>Estimates often same day</li>
            <li>No travel fees</li>
          </ul>
        </div>
        <div class="rail-card">
          <h3>Nearby cities</h3>
          <ul>
            <li><a href="/service-areas/madison/">Gutters in Madison</a></li>
            <li><a href="/service-areas/jackson/">Gutters in Jackson</a></li>
            <li><a href="/service-areas/flowood/">Gutters in Flowood</a></li>
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
  $relatedServices = ['gutter-repair-replacement', 'gutter-guards', 'gutter-cleaning'];
  $relatedHeading  = 'Which gutter services are most requested in Ridgeland?';
  $relatedText     = 'These are the three services Ridgeland customers ask Dun-Rite Seamless Gutters, Inc. about most. Each page lists the price range, the materials and what the crew does on site.';
  $closingHeading  = 'Have your Ridgeland gutters looked at';
  include $_SERVER['DOCUMENT_ROOT'] . '/includes/service-close.php';
  ?>

</main>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
