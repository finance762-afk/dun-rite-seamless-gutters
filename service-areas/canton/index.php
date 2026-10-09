<?php
/** City page — Canton, MS */
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';

$pageTitle       = 'Gutter Installer in Canton, MS | Historic Home Gutters';
$pageDescription = 'Gutter installer for Canton, MS: Dun-Rite custom-forms gutters for the older homes around Canton Square, including hand-soldered copper. Call (601) 750-1800 for a written quote.';
$currentPage     = 'service-areas';
$canonicalUrl    = $siteUrl . '/service-areas/canton/';
$pageType        = 'city';
$citySlug        = 'canton';

$faqs = [
    ['q' => 'Does Dun-Rite install copper gutters in Canton?',
     'a' => 'Yes. Copper has been the company\'s specialty since 1996, and every seam is hand-soldered. Copper costs $25 to $40 per linear foot installed.'],
    ['q' => 'What if the fascia behind my old gutters is rotten?',
     'a' => 'It is common on homes 50 to 100 years old, and fascia repair is frequently part of gutter work in Canton. Mention it when you call so it is looked at during the estimate.'],
    ['q' => 'Is there a trip charge to Canton?',
     'a' => 'No. Canton is one of the 14 cities Dun-Rite serves without travel fees, and it is close enough to the Madison office that estimates are often scheduled the same day.'],
];

$schemaNodes = [
    dr_breadcrumb_node(['Service Areas' => '/service-areas/', 'Canton' => '/service-areas/canton/']),
    ['@type' => 'Service', 'name' => 'Gutter installation and repair in Canton, MS', 'serviceType' => 'Gutter installation and repair',
     'provider' => ['@id' => $siteUrl . '/#business'], 'areaServed' => ['@type' => 'City', 'name' => 'Canton, MS'], 'url' => $siteUrl . '/service-areas/canton/'],
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
        <?php echo dr_breadcrumb(['Service Areas' => '/service-areas/', 'Canton' => null]); ?>
        <p class="hero-eyebrow">Madison County &middot; Historic homes</p>
        <h1>Gutters for Historic &amp; Older Homes in Canton, MS</h1>
        <p class="hero-answer">Dun-Rite Seamless Gutters, Inc. is a gutter installer based in Madison, Mississippi, a short drive south of Canton on Highway 51. Around Canton Square the houses date to the mid-1800s, and many homes in town are 50 to 100 years old or more, which changes how gutters have to be made and hung.</p>
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
        <h2>Why are gutters harder to fit on Canton's older homes?</h2>
        <p>Gutters are harder to fit on Canton's older homes because nothing on a century-old eave is straight, level or a standard size. Dun-Rite Seamless Gutters, Inc. forms each section on site to the measured length, which matters when two sides of the same porch differ by inches. Stock 10-foot sections assume a house that Canton's historic district does not have.</p>
        <p>The other issue is the wood. Fascia boards on houses this age have often been wet for years behind a failing gutter, and fascia repair is frequently needed before a new gutter can be fastened. Ask for the fascia to be looked at during the estimate so the written quote reflects it.</p>

        <h2>Which gutter style suits a house near Canton Square?</h2>
        <p>A half-round gutter with round downspouts suits most houses near Canton Square, because half-round is the gutter shape of that period. The courthouse square and the streets around it are a historic district, and a modern K-style gutter in white enamel can look out of place on a mid-1800s cornice.</p>
        <div class="table-wrap">
          <table class="data-table">
            <caption>Gutter options for older Canton homes, with Dun-Rite's prices.</caption>
            <thead><tr><th scope="col">Option</th><th scope="col">Look</th><th scope="col">Installed price</th></tr></thead>
            <tbody>
              <tr><th scope="row"><a href="/services/copper-gutters/">Copper, half-round or ogee</a></th><td>Period-correct; weathers from bright to green</td><td>$25 – $40 per linear foot</td></tr>
              <tr><th scope="row"><a href="/services/aluminum-gutters/">Aluminum in a dark finish</a></th><td>Classic bronze or royal brown recedes against old trim</td><td>$1,200 – $3,500 for most homes</td></tr>
            </tbody>
          </table>
        </div>
        <figure class="photo-figure">
          <?php echo dr_picture('copper-gutters-brick-awning', 'Copper gutter and a standing-seam copper awning on a red brick home', ['sizes' => '(max-width: 960px) 100vw, 60vw']); ?>
          <figcaption>Copper gutter and a standing-seam copper awning on brick.</figcaption>
        </figure>

        <h2>Should an old Canton gutter be repaired or replaced?</h2>
        <p>Repair an old Canton gutter when the damage is confined to a section; replace it when the joints are failing along the whole run. Section repairs cost $150 to $600. Original copper and galvanized gutters can sometimes be kept going, but a system that leaks at every seam is rotting the fascia while it waits.</p>
        <p>The <a href="/services/gutter-repair-replacement/">repair and replacement page</a> lists the common failures, and the <a href="/service-areas/">service area page</a> shows the rest of Madison County.</p>

        <h2>What do Canton homeowners ask Dun-Rite?</h2>
        <p>Canton homeowners ask Dun-Rite about copper on historic houses, rotten fascia and whether the drive from Madison adds a fee. The short answers are below, and anything not covered can be asked by calling the office at (601) 750-1800 during business hours.</p>
        <?php echo dr_faq_list($faqs); ?>

        <p class="last-updated">Last updated: <?php echo date('F Y', filemtime(__FILE__)); ?></p>
      </article>

      <aside class="page-rail" aria-label="Canton service facts">
        <div class="rail-card rail-card--tint">
          <h3>Canton at a glance</h3>
          <ul>
            <li>Madison County seat</li>
            <li>Homes from the mid-1800s near the square</li>
            <li>Custom-formed sections</li>
            <li>No travel fees</li>
          </ul>
        </div>
        <div class="rail-card">
          <h3>Nearby cities</h3>
          <ul>
            <li><a href="/service-areas/gluckstadt/">Gutters in Gluckstadt</a></li>
            <li><a href="/service-areas/madison/">Gutters in Madison</a></li>
            <li><a href="/service-areas/ridgeland/">Gutters in Ridgeland</a></li>
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
  $relatedServices = ['copper-gutters', 'gutter-repair-replacement', 'aluminum-gutters'];
  $relatedHeading  = 'Which gutter services are most requested in Canton?';
  $relatedText     = 'These are the three services Canton customers ask Dun-Rite Seamless Gutters, Inc. about most. Each page lists the price range, the materials and what the crew does on site.';
  $closingHeading  = 'Get gutters that fit an older house';
  include $_SERVER['DOCUMENT_ROOT'] . '/includes/service-close.php';
  ?>

</main>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
