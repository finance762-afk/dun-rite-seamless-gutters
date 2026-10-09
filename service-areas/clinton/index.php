<?php
/** City page — Clinton, MS */
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';

$pageTitle       = 'Gutter Installer in Clinton, MS | Gutters & Gutter Guards';
$pageDescription = 'Gutter installer for Clinton, MS: Dun-Rite fits gutter guards and seamless gutters under Clinton\'s pecan canopy, from Olde Towne to newer custom homes. Call (601) 750-1800.';
$currentPage     = 'service-areas';
$canonicalUrl    = $siteUrl . '/service-areas/clinton/';
$pageType        = 'city';
$citySlug        = 'clinton';

$faqs = [
    ['q' => 'Which guard is best under pecan trees?',
     'a' => 'Large-hole screen stops pecan leaves and husks at $7 to $10 per linear foot installed. If catkins and small debris are the main problem, fine mesh at $10 to $14 is the better choice.'],
    ['q' => 'Can guards be added to the gutters already on my Clinton home?',
     'a' => 'Yes. Guards fit new or existing gutters, and a typical retrofit takes two to four hours.'],
    ['q' => 'Does Dun-Rite really come out to Clinton from Madison?',
     'a' => 'Yes. Clinton is one of the 14 cities served, with no travel fees, and most estimates are scheduled within 48 hours.'],
];

$schemaNodes = [
    dr_breadcrumb_node(['Service Areas' => '/service-areas/', 'Clinton' => '/service-areas/clinton/']),
    ['@type' => 'Service', 'name' => 'Gutter installation and repair in Clinton, MS', 'serviceType' => 'Gutter installation and repair',
     'provider' => ['@id' => $siteUrl . '/#business'], 'areaServed' => ['@type' => 'City', 'name' => 'Clinton, MS'], 'url' => $siteUrl . '/service-areas/clinton/'],
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
        <?php echo dr_breadcrumb(['Service Areas' => '/service-areas/', 'Clinton' => null]); ?>
        <p class="hero-eyebrow">Hinds County &middot; College town</p>
        <h1>Gutters &amp; Gutter Guards in Clinton, MS</h1>
        <p class="hero-answer">Dun-Rite Seamless Gutters, Inc. is a gutter installer based in Madison, Mississippi that serves Clinton, the home of Mississippi College. Clinton's mature pecan trees make gutter guards more useful here than almost anywhere else in the 14 cities the company covers.</p>
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
        <h2>Why are gutter guards so useful in Clinton?</h2>
        <p>Gutter guards are useful in Clinton because pecan trees shed something in every season, and Clinton has a mature pecan canopy. Catkins fall in spring, twigs come down in summer storms, and leaves, husks and nuts drop from October into winter. A gutter under a pecan can be cleaned in September and be full again by Thanksgiving.</p>
        <p>Dun-Rite Seamless Gutters, Inc. installs three guard systems. For pecan debris the large-hole screen, at $7 to $10 per linear foot installed, stops leaves and husks; fine mesh, at $10 to $14, also stops the small material. The <a href="/services/gutter-guards/">gutter guard page</a> compares all three.</p>
        <figure class="photo-figure">
          <?php echo dr_picture('gutter-guard-mesh', 'Close-up of a mesh guard seated in a half-round gutter below a shingle roof', ['sizes' => '(max-width: 960px) 100vw, 60vw']); ?>
          <figcaption>A mesh guard seated in a gutter.</figcaption>
        </figure>

        <h2>How do gutters differ between Olde Towne and newer Clinton homes?</h2>
        <p>Olde Towne homes need gutters fitted to old, irregular eaves, while Clinton's newer custom homes need capacity for large roofs. Olde Towne, with its brick streets beside the Mississippi College campus, has houses whose fascia has moved over decades. The newer custom-built homes on the Traceway side of town have long rooflines and steep pitches.</p>
        <ul>
          <li>On older houses, sections are formed on site to the measured length of each eave, and a <a href="/services/gutter-repair-replacement/">repair</a> may be all that is needed.</li>
          <li>On larger new homes, a 6-inch gutter with 3x4 downspouts carries the extra water.</li>
        </ul>

        <h2>What does a gutter cleaning plan cost in Clinton?</h2>
        <p>A recurring gutter cleaning plan in Clinton costs 15 to 25 percent less per visit than the single-visit price of $150 to $300. Given how pecans shed, homes here without guards are the ones most likely to need the quarterly schedule rather than twice a year.</p>
        <p>Each <a href="/services/gutter-cleaning/">cleaning visit</a> includes hand removal of debris, flushed downspouts and a written report with photos. Clinton is on the <a href="/service-areas/">Dun-Rite service area list</a> with four other Hinds County cities.</p>

        <h2>What do Clinton homeowners ask Dun-Rite?</h2>
        <p>Clinton homeowners ask Dun-Rite about pecan debris, fitting guards to existing gutters and how the company reaches the west side of the metro. The short answers are below, and anything not covered can be asked by calling the office at (601) 750-1800 during business hours.</p>
        <?php echo dr_faq_list($faqs); ?>

        <p class="last-updated">Last updated: <?php echo date('F Y', filemtime(__FILE__)); ?></p>
      </article>

      <aside class="page-rail" aria-label="Clinton service facts">
        <div class="rail-card rail-card--tint">
          <h3>Clinton at a glance</h3>
          <ul>
            <li>Hinds County</li>
            <li>Home of Mississippi College</li>
            <li>Mature pecan canopy</li>
            <li>No travel fees</li>
          </ul>
        </div>
        <div class="rail-card">
          <h3>Nearby cities</h3>
          <ul>
            <li><a href="/service-areas/jackson/">Gutters in Jackson</a></li>
            <li><a href="/service-areas/raymond/">Gutters in Raymond</a></li>
            <li><a href="/service-areas/bolton/">Gutters in Bolton</a></li>
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
  $relatedServices = ['gutter-guards', 'gutter-cleaning', 'seamless-gutter-installation'];
  $relatedHeading  = 'Which gutter services are most requested in Clinton?';
  $relatedText     = 'These are the three services Clinton customers ask Dun-Rite Seamless Gutters, Inc. about most. Each page lists the price range, the materials and what the crew does on site.';
  $closingHeading  = 'Stop cleaning up after the pecans';
  include $_SERVER['DOCUMENT_ROOT'] . '/includes/service-close.php';
  ?>

</main>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
