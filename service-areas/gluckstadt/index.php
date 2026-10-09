<?php
/** City page — Gluckstadt, MS */
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';

$pageTitle       = 'Gutter Installer in Gluckstadt, MS | New Construction Gutters';
$pageDescription = 'Gutter installer for Gluckstadt, MS: Dun-Rite forms seamless gutters for new homes and builders, $1,200–$3,500 for most houses, with no travel fees. Call (601) 750-1800.';
$currentPage     = 'service-areas';
$canonicalUrl    = $siteUrl . '/service-areas/gluckstadt/';
$pageType        = 'city';
$citySlug        = 'gluckstadt';

$faqs = [
    ['q' => 'My new Gluckstadt house has no gutters. Is that normal?',
     'a' => 'It is common for a new home to be delivered without a full gutter system. Dun-Rite can install one after closing, usually in a single day for a one-story house.'],
    ['q' => 'Should my builder order the gutters, or should I?',
     'a' => 'Either works. Dun-Rite has ongoing builder partnerships and can be scheduled as part of the build, or a homeowner can call (601) 750-1800 directly for a written estimate.'],
    ['q' => 'What warranty comes with gutters on a new home?',
     'a' => 'A 25-year manufacturer warranty on materials and a 2-year labor warranty on the installation, the same as any Dun-Rite job.'],
];

$schemaNodes = [
    dr_breadcrumb_node(['Service Areas' => '/service-areas/', 'Gluckstadt' => '/service-areas/gluckstadt/']),
    ['@type' => 'Service', 'name' => 'Gutter installation and repair in Gluckstadt, MS', 'serviceType' => 'Gutter installation and repair',
     'provider' => ['@id' => $siteUrl . '/#business'], 'areaServed' => ['@type' => 'City', 'name' => 'Gluckstadt, MS'], 'url' => $siteUrl . '/service-areas/gluckstadt/'],
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
        <?php echo dr_breadcrumb(['Service Areas' => '/service-areas/', 'Gluckstadt' => null]); ?>
        <p class="hero-eyebrow">Madison County &middot; New construction</p>
        <h1>Gutters for New Homes &amp; Builders in Gluckstadt, MS</h1>
        <p class="hero-answer">Dun-Rite Seamless Gutters, Inc. is a gutter installer based in Madison, Mississippi, the next exit south of Gluckstadt on I-55. Gluckstadt became a city in 2021 and is still mostly new construction, so the work here is first gutters on new homes, often arranged through the builder.</p>
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
        <h2>When should gutters go on a new Gluckstadt home?</h2>
        <p>Gutters should go on a new Gluckstadt home after the fascia is painted and before the final grade and landscaping are finished. Dun-Rite Seamless Gutters, Inc. forms the gutters on site in one visit, and most single-story houses are done in a day. Getting them up before sod and beds go in keeps roof water from cutting channels through fresh topsoil.</p>
        <p>New subdivisions around Gluckstadt Road and the I-55 interchange are still filling in, and new houses are often delivered without a complete gutter system. A complete system on a typical new home costs $1,200 to $3,500.</p>

        <h2>How does Dun-Rite work with Gluckstadt builders?</h2>
        <p>Dun-Rite works with builders through ongoing partnerships. Builder partnerships are the normal arrangement in Gluckstadt, where one builder may have several houses under way on the same street.</p>
        <ul>
          <li>A certificate of insurance is issued with the builder named as additional insured.</li>
          <li>Billing follows standard contractor terms, in AIA format on request.</li>
          <li>Color is chosen from nine stocked finishes so a house is not waiting on an order; see the <a href="/services/aluminum-gutters/">aluminum gutter colors</a>.</li>
        </ul>
        <p>Buyers who contract for gutters themselves get the same .032 gauge material and the same <a href="/services/seamless-gutter-installation/">seamless installation</a> the builders do.</p>
        <figure class="photo-figure">
          <?php echo dr_picture('home-brick-stucco-dark-gutters', 'Brick and stucco two-story home with dark gutters and downspouts along the roofline', ['sizes' => '(max-width: 960px) 100vw, 60vw']); ?>
          <figcaption>Dark gutters and downspouts on a brick and stucco home.</figcaption>
        </figure>

        <h2>Do new-construction lots need different downspouts?</h2>
        <p>New-construction lots usually need larger downspouts and a plan for where the water goes. A freshly graded lot has no established turf or mature roots to slow runoff, so water leaving a downspout moves soil quickly. Dun-Rite recommends 3x4 downspouts for most homes, each draining about 1,200 square feet of roof.</p>
        <p>Where the lot slopes toward a neighbor or the street, an <a href="/services/custom-downspouts/">underground drainage tie-in</a> at $300 to $800 per run carries the water past the beds. Gluckstadt is one of four Madison County cities on the <a href="/service-areas/">service area list</a>.</p>

        <h2>What do Gluckstadt buyers and builders ask?</h2>
        <p>Gluckstadt buyers and builders ask Dun-Rite about timing on a new build, whether the builder or the owner should order the gutters and what the warranty covers.</p>
        <?php echo dr_faq_list($faqs); ?>

        <p class="last-updated">Last updated: <?php echo date('F Y', filemtime(__FILE__)); ?></p>
      </article>

      <aside class="page-rail" aria-label="Gluckstadt service facts">
        <div class="rail-card rail-card--tint">
          <h3>Gluckstadt at a glance</h3>
          <ul>
            <li>Madison County</li>
            <li>City incorporated in 2021</li>
            <li>Mostly new construction</li>
            <li>No travel fees</li>
          </ul>
        </div>
        <div class="rail-card">
          <h3>Nearby cities</h3>
          <ul>
            <li><a href="/service-areas/madison/">Gutters in Madison</a></li>
            <li><a href="/service-areas/canton/">Gutters in Canton</a></li>
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
  $relatedServices = ['seamless-gutter-installation', 'aluminum-gutters', 'custom-downspouts'];
  $relatedHeading  = 'Which gutter services are most requested in Gluckstadt?';
  $relatedText     = 'These are the three services Gluckstadt customers ask Dun-Rite Seamless Gutters, Inc. about most. Each page lists the price range, the materials and what the crew does on site.';
  $closingHeading  = 'Schedule gutters for your new build';
  include $_SERVER['DOCUMENT_ROOT'] . '/includes/service-close.php';
  ?>

</main>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
