<?php
/** Services hub */
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';

$pageTitle       = 'Gutter Services in Madison & Jackson, MS | Dun-Rite';
$pageDescription = 'Eight gutter services from Dun-Rite Seamless Gutters, Inc. in Madison, MS: installation, copper, guards, cleaning, repair, commercial and downspouts. Call (601) 750-1800.';
$currentPage     = 'services';
$canonicalUrl    = $siteUrl . '/services/';
$pageType        = 'other';

$schemaNodes = [
    dr_breadcrumb_node(['Services' => '/services/']),
    ['@type' => 'ItemList', 'name' => 'Gutter services from ' . $siteName,
     'itemListElement' => array_map(fn($i, $s) => ['@type' => 'ListItem', 'position' => $i + 1, 'name' => $s['name'], 'url' => $siteUrl . '/services/' . $s['slug'] . '/'], array_keys($services), $services)],
];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>
<main id="main-content">

  <section class="hero hero--interior">
    <span class="grain" aria-hidden="true"></span>
    <div class="container">
      <div class="hero-text">
        <?php echo dr_breadcrumb(['Services' => null]); ?>
        <p class="hero-eyebrow">Gutter installer &middot; Madison, MS</p>
        <h1>Gutter Services in Madison &amp; Jackson, MS</h1>
        <p class="hero-answer">Dun-Rite Seamless Gutters, Inc. is a gutter installer based in Madison, Mississippi. It offers eight services, all to do with gutters: new seamless aluminum and copper systems, gutter guards, cleaning, repair and replacement, commercial installation and custom downspouts, in 14 cities around Jackson.</p>
        <div class="hero-actions">
          <a class="btn btn-accent btn-lg" href="/contact/" data-open-estimate>Request an estimate</a>
          <a class="link-call" href="tel:+<?php echo h($phoneRaw); ?>"><?php echo icon('phone', 18); ?> <?php echo h($phone); ?></a>
        </div>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="section-head">
        <p class="eyebrow">What We Do</p>
        <h2>Which gutter service do you need from <span class="text-accent">Dun-Rite</span>?</h2>
        <p class="hero-answer">Start with the problem you can see. Water pouring over the edge usually means cleaning, guards or larger downspouts. Drips at joints and sagging runs mean repair. A system older than 20 to 30 years usually means replacement with new seamless gutters. Each card opens a page with prices and specifics.</p>
      </div>
      <div class="services-grid">
        <?php echo dr_service_cards(array_column($services, 'slug'), '(max-width: 720px) 50vw, 25vw'); ?>
      </div>
    </div>
  </section>

  <section class="section section--tint">
    <div class="container">
      <div class="section-head">
        <p class="eyebrow">Side by side</p>
        <h2>What does each Dun-Rite gutter service cost?</h2>
        <p>Dun-Rite Seamless Gutters, Inc. prices new systems by the home, copper and guards by the linear foot, cleaning by the visit and repairs by the section. The ranges below are the company's own typical figures; a written quote follows an on-site measurement, and the estimate visit is free.</p>
      </div>
      <div class="table-wrap">
        <table class="data-table">
          <caption>All eight services with Dun-Rite's typical price and timing.</caption>
          <thead><tr><th scope="col">Service</th><th scope="col">Typical price</th><th scope="col">Typical time on site</th><th scope="col">Service life or interval</th></tr></thead>
          <tbody>
            <tr><th scope="row"><a href="/services/seamless-gutter-installation/">Seamless gutter installation</a></th><td>$1,200 – $3,500 per home</td><td>1 day; 1 – 2 for two stories</td><td>20 – 30 years</td></tr>
            <tr><th scope="row"><a href="/services/aluminum-gutters/">Aluminum gutters</a></th><td>$1,200 – $3,500 per home</td><td>1 day; 1 – 2 for two stories</td><td>20 – 30 years</td></tr>
            <tr><th scope="row"><a href="/services/copper-gutters/">Copper gutters</a></th><td>$25 – $40 per linear foot</td><td>Quoted per project</td><td>50 to 100+ years</td></tr>
            <tr><th scope="row"><a href="/services/gutter-guards/">Gutter guards</a></th><td>$3 – $14 per linear foot</td><td>2 – 4 hours for a retrofit</td><td>5 to 15+ years by system</td></tr>
            <tr><th scope="row"><a href="/services/gutter-cleaning/">Gutter cleaning</a></th><td>$150 – $300 per visit</td><td>One visit</td><td>Twice a year for most homes</td></tr>
            <tr><th scope="row"><a href="/services/gutter-repair-replacement/">Gutter repair and replacement</a></th><td>$150 – $600 per section; replacement from $1,200</td><td>Estimate the same day</td><td>Replacement: 25-year material warranty</td></tr>
            <tr><th scope="row"><a href="/services/commercial-gutters/">Commercial gutters</a></th><td>Quoted from drawings</td><td>Phased with the build</td><td>Quoted per project</td></tr>
            <tr><th scope="row"><a href="/services/custom-downspouts/">Custom downspouts</a></th><td>Drain tie-ins $300 – $800 per run</td><td>Quoted per project</td><td>Sized to roof area</td></tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="container split">
      <div class="about-copy">
        <p class="eyebrow">Common to every job</p>
        <h2>What is the same on every Dun-Rite job?</h2>
        <p>Four things are the same on every Dun-Rite job: the estimate is measured on site and written down, the owner inspects it, new installations carry two warranties, and there is no travel fee anywhere in the service area.</p>
        <ul>
          <li>Mark Dungan personally inspects every estimate.</li>
          <li>New installations carry a 25-year manufacturer warranty on materials and a 2-year labor warranty.</li>
          <li>Removal and disposal of old gutters is included in installation quotes.</li>
          <li>The <a href="/service-areas/">14 cities in the service area</a> are all covered without trip charges.</li>
        </ul>
        <p>For background on the company and its credentials, see <a href="/about/">about Mark Dungan and Dun-Rite</a>.</p>
      </div>
      <figure class="photo-figure">
        <?php echo dr_picture('copper-gutters-stucco-home', 'Two-story stucco home with copper gutters along each roofline', ['sizes' => '(max-width: 900px) 100vw, 46vw']); ?>
        <figcaption>Copper gutters along both rooflines of a two-story stucco home.</figcaption>
      </figure>
    </div>
  </section>

  <?php
  $ctaBandHeading = 'Not sure which service you need?';
  $ctaBandText    = 'Describe what the gutters are doing and Dun-Rite will tell you whether it is a cleaning, a repair or a replacement. The office answers ' . $businessHours . '.';
  include $_SERVER['DOCUMENT_ROOT'] . '/includes/cta-band.php';
  ?>

</main>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
