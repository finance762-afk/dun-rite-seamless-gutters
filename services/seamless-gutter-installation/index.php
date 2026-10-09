<?php
/** Service page — Seamless Gutter Installation */
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';

$pageTitle       = 'Gutter Installer in Madison & Jackson, MS | Seamless Gutters';
$pageDescription = 'Dun-Rite is a gutter installer serving Jackson and Madison, MS. Seamless .032 aluminum gutters formed on site, $1,200–$3,500 for most homes. Call (601) 750-1800.';
$currentPage     = 'services';
$canonicalUrl    = $siteUrl . '/services/seamless-gutter-installation/';
$pageType        = 'service';
$serviceSlug     = 'seamless-gutter-installation';
$service         = dr_service($serviceSlug);
$heroFormService = $service['name'];

$faqs = [
    ['q' => 'What happens if it rains on installation day?',
     'a' => 'Dun-Rite watches the forecast and reschedules heavy-rain days. Light drizzle is fine to work in. Lightning or sustained rain pushes the installation to the next open day.'],
    ['q' => 'Does the price include taking down the old gutters?',
     'a' => 'Yes. Removal and disposal of the existing gutters and downspouts is included in every Dun-Rite installation quote, so there is no separate haul-off charge.'],
    ['q' => 'Which gutter colors can I choose from?',
     'a' => 'More than 25 baked-enamel colors are available. White, almond, cream, classic bronze, charcoal, brown, terratone, royal brown and forest green are stocked; other colors are ordered with a one to two week lead time.'],
    ['q' => 'Will Dun-Rite work with my builder on a new house?',
     'a' => 'Yes. Dun-Rite has ongoing partnerships with builders across central Mississippi and provides a certificate of insurance to builder partners on request.'],
];

$schemaNodes = [
    dr_breadcrumb_node(['Services' => '/services/', $service['name'] => '/services/' . $serviceSlug . '/']),
    dr_service_node($service, 'Seamless aluminum gutters in 5-inch and 6-inch K-style profiles, formed on site in .032 gauge aluminum with hidden hangers every 24 inches. Typical price $1,200 to $3,500 for most Mississippi homes.'),
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
        <?php echo dr_breadcrumb(['Services' => '/services/', 'Seamless Gutter Installation' => null]); ?>
        <p class="hero-eyebrow">Gutter installer &middot; Madison, MS</p>
        <h1>Seamless Gutter Installation in Jackson &amp; Madison, MS</h1>
        <p class="hero-answer">Dun-Rite Seamless Gutters, Inc. is a gutter installer based in Madison, Mississippi, serving Jackson and 12 more cities. Most homes cost $1,200 to $3,500 for a complete seamless aluminum system, and most single-story houses are finished in one day.</p>
        <div class="hero-actions">
          <a class="btn btn-accent btn-lg hero-form-open" href="/contact/" data-service="Seamless Gutter Installation">Request an estimate</a>
          <a class="link-call" href="tel:+<?php echo h($phoneRaw); ?>"><?php echo icon('phone', 18); ?> <?php echo h($phone); ?></a>
        </div>
      </div>
      <?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/hero-form.php'; ?>
    </div>
  </section>

  <section class="section">
    <div class="container page-grid">
      <article class="prose">
        <h2>How much does seamless gutter installation cost in Jackson, MS?</h2>
        <p>Seamless gutter installation from Dun-Rite Seamless Gutters, Inc. typically costs $1,200 to $3,500 for a Mississippi home. Three things move the number: the linear footage of eave, whether the house is one story or two, and how many downspouts the roof needs. Mark Dungan measures on site and puts the price in writing before any work is scheduled.</p>
        <dl class="fact-list">
          <div><dt>Typical price</dt><dd>$1,200 – $3,500</dd></div>
          <div><dt>Install time</dt><dd>1 day, most single-story homes</dd></div>
          <div><dt>Two-story or complex roofs</dt><dd>1 – 2 days</dd></div>
          <div><dt>Expected service life</dt><dd>20 – 30 years</dd></div>
        </dl>

        <h2>What does Dun-Rite install on a standard job?</h2>
        <p>A standard Dun-Rite installation is a 5-inch or 6-inch K-style gutter in .032 gauge aluminum, hung on hidden hangers every 24 inches. That gauge is heavier than the .027 aluminum sold at home-improvement stores, so the gutter is stiffer between hangers.</p>
        <ul>
          <li>Every section is formed on site with truck-mounted equipment to match the roofline, so the only joints are at corners and outlets.</li>
          <li>Inside and outside corners are sealed with industrial-grade sealant.</li>
          <li>Each run is pitched a quarter inch per 10 feet toward its downspout.</li>
          <li>Fasteners are color-matched to the gutter.</li>
          <li>The old gutters and downspouts are taken down and hauled off.</li>
        </ul>
        <figure class="photo-figure">
          <?php echo dr_picture('home-brick-stucco-dark-gutters', 'Brick and stucco two-story home with dark gutters and downspouts along the roofline', ['sizes' => '(max-width: 960px) 100vw, 60vw']); ?>
          <figcaption>Dark aluminum gutters and downspouts on a brick and stucco two-story home.</figcaption>
        </figure>

        <h2>Which gutter size does your roof need: 5-inch or 6-inch?</h2>
        <p>A 5-inch K-style gutter is the residential standard and suits most one-story roofs. Dun-Rite moves to a 6-inch gutter for steep rooflines, large roof footprints and heavy debris loads, because the wider trough carries more water before it overshoots. The wider sizes below are for commercial buildings.</p>
        <div class="table-wrap">
          <table class="data-table">
            <caption>K-style profiles Dun-Rite forms, and where each one is used.</caption>
            <thead><tr><th scope="col">Profile</th><th scope="col">Where it is used</th><th scope="col">Aluminum gauge</th></tr></thead>
            <tbody>
              <tr><th scope="row">5-inch K-style</th><td>Most homes; the residential standard</td><td>.032</td></tr>
              <tr><th scope="row">6-inch K-style</th><td>Steep or large roofs, heavy leaf and pine-straw loads</td><td>.032, or .040 on oversized homes</td></tr>
              <tr><th scope="row">7-inch and 8-inch</th><td><a href="/services/commercial-gutters/">Commercial gutter systems</a> on offices, retail and multi-family</td><td>.040 or .050</td></tr>
            </tbody>
          </table>
        </div>
        <p>Gutter size is only half of the answer. A big gutter feeding a small downspout still backs up in a Mississippi downpour, so the estimate also covers <a href="/services/custom-downspouts/">downspout size and placement</a>.</p>

        <h2>What happens on installation day?</h2>
        <p>On installation day the Dun-Rite crew removes the old gutters, forms the new ones on site and hangs them, all in one day on most single-story homes. The work follows four steps.</p>
        <ol class="steps">
          <li><strong>Tear-off</strong>The old gutters and downspouts come down. Removal and disposal are included in the quote.</li>
          <li><strong>Forming</strong>Aluminum in your color is formed on site, one piece for each run of eave.</li>
          <li><strong>Hanging</strong>Hidden hangers are set every 24 inches and the run is pitched toward the outlet.</li>
          <li><strong>Corners and downspouts</strong>Inside and outside corners are sealed, the downspouts go up, and the fasteners are color-matched.</li>
        </ol>

        <h2>Why do gutters matter so much on Jackson-area soil?</h2>
        <p>Gutters matter around Jackson because much of the metro sits on Yazoo clay, a soil that swells when it is wet and shrinks when it dries. Roof water dumped at the foundation line feeds that cycle. A gutter system that carries water to a downspout, and a downspout that discharges away from the slab, keeps moisture near the house more even through a wet spring and a dry August.</p>
        <p>That is also why a Dun-Rite estimate evaluates the roof's water-flow needs rather than just measuring footage. If you are comparing materials first, see <a href="/services/aluminum-gutters/">aluminum gauges and colors</a>, or go back to <a href="/services/">all Dun-Rite gutter services</a>.</p>

        <h2>What else do homeowners ask about new gutters?</h2>
        <p>Homeowners most often ask Dun-Rite about rain delays, haul-off of the old gutters, color choices and working with a builder. The short answers are below, and anything not covered can be asked by calling the office at (601) 750-1800 during business hours.</p>
        <?php echo dr_faq_list($faqs); ?>

        <p class="last-updated">Last updated: <?php echo date('F Y', filemtime(__FILE__)); ?></p>
      </article>

      <aside class="page-rail" aria-label="Key facts">
        <div class="rail-card rail-card--tint">
          <h3>Warranty</h3>
          <p>25-year manufacturer warranty on materials and a 2-year labor warranty on the installation.</p>
        </div>
        <div class="rail-card">
          <h3>Where Dun-Rite installs</h3>
          <p>14 cities within about 30 miles of Madison, with no travel fees.</p>
          <ul>
            <li><a href="/service-areas/jackson/">Gutter installation in Jackson</a></li>
            <li><a href="/service-areas/madison/">Gutter installation in Madison</a></li>
            <li><a href="/service-areas/brandon/">Gutter installation in Brandon</a></li>
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
  $relatedServices = ['gutter-guards', 'custom-downspouts', 'gutter-repair-replacement'];
  $closingHeading  = 'Get your roofline measured';
  include $_SERVER['DOCUMENT_ROOT'] . '/includes/service-close.php';
  ?>

</main>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
