<?php
/** City page — Jackson, MS */
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';

$pageTitle       = 'Gutter Installer in Jackson, MS | Gutters, Guards & Repair';
$pageDescription = 'Gutter installer for Jackson, MS: Dun-Rite installs seamless gutters ($1,200–$3,500 for most homes), gutter guards and repairs in Belhaven, Fondren and Eastover. (601) 750-1800.';
$currentPage     = 'service-areas';
$canonicalUrl    = $siteUrl . '/service-areas/jackson/';
$pageType        = 'city';
$citySlug        = 'jackson';

$faqs = [
    ['q' => 'Does Dun-Rite charge a travel fee to come to Jackson?',
     'a' => 'No. Jackson is inside the 14-city service area, where there are no travel fees, fuel surcharges or trip charges. The office is in Madison, north of Jackson on I-55.'],
    ['q' => 'How long does gutter installation take on a Jackson house?',
     'a' => 'Most single-story homes take one day. Two-story homes and houses with complex rooflines, which are common in Belhaven, take one to two days.'],
    ['q' => 'Can Dun-Rite help with an insurance claim after a storm in Jackson?',
     'a' => 'Yes. Dun-Rite provides photo documentation, a written damage assessment and an itemized repair quote formatted for the adjuster.'],
    ['q' => 'Where can I find gutters near me in Jackson, MS?',
     'a' => 'Dun-Rite Seamless Gutters, Inc. installs and repairs gutters throughout Jackson, including Belhaven, Fondren, Eastover and northeast Jackson. Call (601) 750-1800 for a written estimate.'],
];

$schemaNodes = [
    dr_breadcrumb_node(['Service Areas' => '/service-areas/', 'Jackson' => '/service-areas/jackson/']),
    ['@type' => 'Service', 'name' => 'Gutter installation and repair in Jackson, MS', 'serviceType' => 'Gutter installation and repair',
     'provider' => ['@id' => $siteUrl . '/#business'], 'areaServed' => ['@type' => 'City', 'name' => 'Jackson, MS'], 'url' => $siteUrl . '/service-areas/jackson/'],
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
        <?php echo dr_breadcrumb(['Service Areas' => '/service-areas/', 'Jackson' => null]); ?>
        <p class="hero-eyebrow">Hinds County &middot; State capital</p>
        <h1>Gutter Installation, Gutter Guards &amp; Repair in Jackson, MS</h1>
        <p class="hero-answer">Dun-Rite Seamless Gutters, Inc. is a gutter installer based in Madison, Mississippi, founded in 1996 and serving Jackson. Jackson has the oldest housing in the metro, from Belhaven and Fondren to the ranch houses of Eastover and northeast Jackson, so repair and replacement make up most of the work here.</p>
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
        <h2>How much does gutter installation cost in Jackson, MS?</h2>
        <p>Gutter installation in Jackson, MS costs $1,200 to $3,500 for most homes when Dun-Rite Seamless Gutters, Inc. installs a complete aluminum system. A single-story ranch in northeast Jackson sits toward the low end; a two-story house in Belhaven with a wraparound porch sits higher because of the extra corners and downspouts.</p>
        <dl class="fact-list">
          <div><dt>New gutters, most homes</dt><dd>$1,200 – $3,500</dd></div>
          <div><dt>Section repair</dt><dd>$150 – $600</dd></div>
          <div><dt>Gutter guards</dt><dd>$3 – $14 per foot</dd></div>
          <div><dt>Cleaning</dt><dd>$150 – $300</dd></div>
        </dl>
        <p>Details of the materials are on the <a href="/services/seamless-gutter-installation/">seamless gutter installation page</a>.</p>

        <h2>Why do Jackson homes need gutters more than most?</h2>
        <p>Jackson homes need working gutters because the city sits on Yazoo clay, which swells when wet and shrinks when dry. That movement is behind the cracked slabs and sticking doors Jackson is known for. Roof water poured along the foundation keeps the clay on one side of a house wetter than the other, and gutters with well-placed downspouts are the cheapest way to even that out.</p>
        <p>This is why a Dun-Rite estimate evaluates water flow as well as footage, and why <a href="/services/custom-downspouts/">3x4 downspouts and drain tie-ins</a> come up on so many Jackson estimates.</p>

        <h2>What gutter problems are common in Jackson's older neighborhoods?</h2>
        <p>In Jackson's older neighborhoods the common problems are sectional gutters leaking at every joint and gutters pulling away from aged fascia. The mid-century ranch houses in Eastover and northeast Jackson were mostly fitted with sectional gutters that have a seam every 10 feet. Belhaven and Fondren houses are older still, with deeper eaves and more ornate trim.</p>
        <ul>
          <li>A single failed section is a <a href="/services/gutter-repair-replacement/">gutter repair</a> at $150 to $600.</li>
          <li>A system that leaks along its length is better replaced; replacement starts at $1,200.</li>
        </ul>
        <figure class="photo-figure">
          <?php echo dr_picture('job-columned-home-arches', 'Two-story home with columns and arched openings and gutters at both roof levels', ['sizes' => '(max-width: 960px) 100vw, 60vw']); ?>
          <figcaption>Gutters at both roof levels of a two-story home with columns and arches.</figcaption>
        </figure>

        <h2>Which gutter guards does Dun-Rite install in Jackson?</h2>
        <p>Dun-Rite installs three gutter guard systems in Jackson: fine mesh, large-hole screen and foam inserts. The old water oaks that line streets in Belhaven and Fondren drop leaves, twigs and acorns from a height, and the pines in LeFleur's Bluff and the northeast add needles. Fine mesh at $10 to $14 per linear foot handles both; screen at $7 to $10 handles leaves alone.</p>
        <p>The <a href="/services/gutter-guards/">gutter guard installation page</a> has the full comparison. Jackson is one of five Hinds County cities on the <a href="/service-areas/">service area list</a>.</p>

        <h2>What do Jackson homeowners ask Dun-Rite?</h2>
        <p>Jackson homeowners ask Dun-Rite about travel fees from Madison, how long an installation takes and whether storm damage paperwork is handled. The short answers are below, and anything not covered can be asked by calling the office at (601) 750-1800 during business hours.</p>
        <?php echo dr_faq_list($faqs); ?>

        <p class="last-updated">Last updated: <?php echo date('F Y', filemtime(__FILE__)); ?></p>
      </article>

      <aside class="page-rail" aria-label="Jackson service facts">
        <div class="rail-card rail-card--tint">
          <h3>Jackson at a glance</h3>
          <ul>
            <li>Hinds County</li>
            <li>Belhaven, Fondren, Eastover, northeast Jackson</li>
            <li>Mostly repair and replacement</li>
            <li>No travel fees</li>
          </ul>
        </div>
        <div class="rail-card">
          <h3>Nearby cities</h3>
          <ul>
            <li><a href="/service-areas/ridgeland/">Gutters in Ridgeland</a></li>
            <li><a href="/service-areas/clinton/">Gutters in Clinton</a></li>
            <li><a href="/service-areas/pearl/">Gutters in Pearl</a></li>
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
  $relatedServices = ['seamless-gutter-installation', 'gutter-guards', 'gutter-repair-replacement'];
  $relatedHeading  = 'Which gutter services are most requested in Jackson?';
  $relatedText     = 'These are the three services Jackson customers ask Dun-Rite Seamless Gutters, Inc. about most. Each page lists the price range, the materials and what the crew does on site.';
  $closingHeading  = 'Get a written gutter quote in Jackson';
  include $_SERVER['DOCUMENT_ROOT'] . '/includes/service-close.php';
  ?>

</main>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
