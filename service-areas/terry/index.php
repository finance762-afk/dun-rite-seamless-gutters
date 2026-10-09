<?php
/** City page — Terry, MS */
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';

$pageTitle       = 'Gutter Installer in Terry, MS | Homes, Barns & Shops';
$pageDescription = 'Gutter installer for Terry, MS: Dun-Rite installs seamless gutters on homes, barns, workshops and detached garages along Highway 51. Call (601) 750-1800 for a written quote.';
$currentPage     = 'service-areas';
$canonicalUrl    = $siteUrl . '/service-areas/terry/';
$pageType        = 'city';
$citySlug        = 'terry';

$faqs = [
    ['q' => 'Will Dun-Rite gutter a barn or shop without doing the house?',
     'a' => 'Yes. Outbuilding work, including barns, workshops and detached garages, is common around Terry and is quoted on the footage of that building.'],
    ['q' => 'Terry is at the edge of your area. Do you still come out?',
     'a' => 'Yes. Terry is one of the 14 cities served. Most estimates are scheduled within 48 hours, and there is no trip charge.'],
    ['q' => 'How long does it take to gutter a house in Terry?',
     'a' => 'Most single-story homes are finished in one day. Two-story homes or complex rooflines take one to two days.'],
];

$schemaNodes = [
    dr_breadcrumb_node(['Service Areas' => '/service-areas/', 'Terry' => '/service-areas/terry/']),
    ['@type' => 'Service', 'name' => 'Gutter installation and repair in Terry, MS', 'serviceType' => 'Gutter installation and repair',
     'provider' => ['@id' => $siteUrl . '/#business'], 'areaServed' => ['@type' => 'City', 'name' => 'Terry, MS'], 'url' => $siteUrl . '/service-areas/terry/'],
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
        <?php echo dr_breadcrumb(['Service Areas' => '/service-areas/', 'Terry' => null]); ?>
        <p class="hero-eyebrow">Hinds County &middot; Highway 51</p>
        <h1>Gutters for Homes &amp; Outbuildings in Terry, MS</h1>
        <p class="hero-answer">Dun-Rite Seamless Gutters, Inc. is a gutter installer based in Madison, Mississippi that serves Terry, the small town on Highway 51 in southern Hinds County. Around Terry the company is asked to gutter barns, workshops and detached garages about as often as houses.</p>
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
        <h2>Why do barns and workshops in Terry need gutters?</h2>
        <p>Barns and workshops need gutters because a long metal roof drops all of its water in a line along the wall. On the semi-agricultural land around Terry, that line becomes a trench, the trench becomes a mud hole at the door, and the water finds its way under the slab or the sill. Outbuilding work is common for Dun-Rite Seamless Gutters, Inc. around Terry.</p>
        <p>Outbuildings suit seamless gutters well. A 60-foot shop wall gets one 60-foot gutter, formed on site from a single coil, where sectional gutters would need five joints. See <a href="/services/seamless-gutter-installation/">how seamless gutters are formed and hung</a>.</p>

        <h2>Which downspouts work on a metal-roofed outbuilding?</h2>
        <p>Larger downspouts work best on a metal-roofed outbuilding, because metal sheds rain faster than shingles do. A 3x4 downspout drains about 1,200 square feet of roof, and a 4x5 about 2,000 or more. A 2x3, the size on many houses, handles only about 600.</p>
        <div class="table-wrap">
          <table class="data-table">
            <caption>Matching downspouts to common Terry buildings, using Dun-Rite's capacity figures.</caption>
            <thead><tr><th scope="col">Building</th><th scope="col">Example roof area</th><th scope="col">Downspouts that cover it</th></tr></thead>
            <tbody>
              <tr><th scope="row">Detached two-car garage</th><td>About 600 sq ft</td><td>One 3x4, or one 2x3 at its limit</td></tr>
              <tr><th scope="row">30 x 40 workshop</th><td>About 1,200 sq ft</td><td>One 3x4 per side</td></tr>
              <tr><th scope="row">40 x 60 barn</th><td>About 2,400 sq ft</td><td>Two 3x4, or 4x5 high-flow</td></tr>
            </tbody>
          </table>
        </div>
        <p>More on sizes and buried drains is on the <a href="/services/custom-downspouts/">custom downspouts page</a>.</p>
        <figure class="photo-figure">
          <?php echo dr_picture('downspout-elbow-eave', 'White downspout elbow connecting a gutter to the wall under a vented soffit', ['sizes' => '(max-width: 960px) 100vw, 60vw']); ?>
          <figcaption>A downspout elbow at the gutter outlet.</figcaption>
        </figure>

        <h2>What do gutters cost on a Terry home?</h2>
        <p>Gutters on a Terry home typically cost $1,200 to $3,500 for a complete aluminum system, the same range as anywhere in the service area. Being at the southern edge of that area does not change the price: there are no travel fees. An outbuilding added to the same visit is quoted on its own footage.</p>
        <p>Where the old gutters on a farmhouse can be saved, a <a href="/services/gutter-repair-replacement/">section repair</a> costs $150 to $600. Terry is on the <a href="/service-areas/">service area list</a> with the rest of Hinds County.</p>

        <h2>What do Terry property owners ask Dun-Rite?</h2>
        <p>Terry property owners ask Dun-Rite about outbuildings, travel to the south end of the county and how long a job takes. The short answers are below, and anything not covered can be asked by calling the office at (601) 750-1800 during business hours.</p>
        <?php echo dr_faq_list($faqs); ?>

        <p class="last-updated">Last updated: <?php echo date('F Y', filemtime(__FILE__)); ?></p>
      </article>

      <aside class="page-rail" aria-label="Terry service facts">
        <div class="rail-card rail-card--tint">
          <h3>Terry at a glance</h3>
          <ul>
            <li>Southern Hinds County</li>
            <li>Highway 51 corridor</li>
            <li>Barns, workshops and garages</li>
            <li>No travel fees</li>
          </ul>
        </div>
        <div class="rail-card">
          <h3>Nearby cities</h3>
          <ul>
            <li><a href="/service-areas/florence/">Gutters in Florence</a></li>
            <li><a href="/service-areas/raymond/">Gutters in Raymond</a></li>
            <li><a href="/service-areas/jackson/">Gutters in Jackson</a></li>
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
  $relatedServices = ['seamless-gutter-installation', 'custom-downspouts', 'gutter-repair-replacement'];
  $relatedHeading  = 'Which gutter services are most requested in Terry?';
  $relatedText     = 'These are the three services Terry customers ask Dun-Rite Seamless Gutters, Inc. about most. Each page lists the price range, the materials and what the crew does on site.';
  $closingHeading  = 'Get your house and shop measured';
  include $_SERVER['DOCUMENT_ROOT'] . '/includes/service-close.php';
  ?>

</main>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
