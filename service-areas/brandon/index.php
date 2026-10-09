<?php
/** City page — Brandon, MS */
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';

$pageTitle       = 'Gutter Installer in Brandon, MS | 6-Inch Seamless Gutters';
$pageDescription = 'Gutter installer for Brandon, MS: Dun-Rite installs 6-inch high-flow seamless gutters on larger homes in Castlewoods, Whisper Lake and Crosswinds. Call (601) 750-1800.';
$currentPage     = 'service-areas';
$canonicalUrl    = $siteUrl . '/service-areas/brandon/';
$pageType        = 'city';
$citySlug        = 'brandon';

$faqs = [
    ['q' => 'Are 6-inch gutters much more expensive than 5-inch?',
     'a' => 'The quote depends on linear footage, stories and downspout count rather than on a fixed upcharge. Dun-Rite prices both after measuring on site and puts the figure in writing.'],
    ['q' => 'Can the gutters match the trim on my Brandon home?',
     'a' => 'Nine baked-enamel colors are stocked and more than 25 are available. Colors that are not stocked take one to two weeks to order.'],
    ['q' => 'Does Dun-Rite charge extra to come to Brandon?',
     'a' => 'No. Brandon is inside the 14-city service area, where there are no travel fees.'],
];

$schemaNodes = [
    dr_breadcrumb_node(['Service Areas' => '/service-areas/', 'Brandon' => '/service-areas/brandon/']),
    ['@type' => 'Service', 'name' => 'Gutter installation and repair in Brandon, MS', 'serviceType' => 'Gutter installation and repair',
     'provider' => ['@id' => $siteUrl . '/#business'], 'areaServed' => ['@type' => 'City', 'name' => 'Brandon, MS'], 'url' => $siteUrl . '/service-areas/brandon/'],
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
        <?php echo dr_breadcrumb(['Service Areas' => '/service-areas/', 'Brandon' => null]); ?>
        <p class="hero-eyebrow">Rankin County &middot; Larger rooflines</p>
        <h1>6-Inch Seamless Gutters for Brandon, MS Homes</h1>
        <p class="hero-answer">Dun-Rite Seamless Gutters, Inc. is a gutter installer based in Madison, Mississippi that serves Brandon, the Rankin County seat on the east side of the Reservoir. Brandon is mostly newer construction with big roofs, in Castlewoods, Whisper Lake and Crosswinds, and big roofs call for 6-inch gutters.</p>
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
        <h2>Why do Brandon homes need 6-inch gutters?</h2>
        <p>Brandon homes often need 6-inch gutters because their roofs are larger and steeper than the roofs the 5-inch standard was meant for. Dun-Rite Seamless Gutters, Inc. uses the 6-inch high-flow K-style profile on steep rooflines and large roof footprints. Water comes off a steep roof fast enough to overshoot a narrow gutter, especially below a valley.</p>
        <div class="table-wrap">
          <table class="data-table">
            <caption>Choosing between the two residential profiles Dun-Rite forms.</caption>
            <thead><tr><th scope="col">Profile</th><th scope="col">What it is</th><th scope="col">When Dun-Rite uses it</th></tr></thead>
            <tbody>
              <tr><th scope="row">5-inch K-style</th><td>The residential standard</td><td>Most homes</td></tr>
              <tr><th scope="row">6-inch K-style</th><td>The high-flow profile</td><td>Steep rooflines, large roof footprints, heavy debris loads</td></tr>
            </tbody>
          </table>
        </div>
        <p>Profiles and gauges are explained on the <a href="/services/seamless-gutter-installation/">seamless gutter installation page</a>.</p>
        <figure class="photo-figure">
          <?php echo dr_picture('job-balcony-home-gutters', 'Dark gutters on the roof over a second-floor balcony', ['sizes' => '(max-width: 960px) 100vw, 60vw']); ?>
          <figcaption>Dark gutters on the roofline above a second-floor balcony.</figcaption>
        </figure>

        <h2>How long does a gutter installation take on a large Brandon home?</h2>
        <p>A gutter installation on a large Brandon home takes one to two days. Single-story houses are usually done in one. The two-story homes common in Castlewoods and around Whisper Lake have more corners, more downspouts and upper eaves that take longer to reach safely.</p>
        <p>Price follows the same three things everywhere: linear footage, stories and downspout count. Most homes fall between $1,200 and $3,500; a large two-story with many corners will sit at the upper end or above it, and the written quote says exactly where.</p>

        <h2>What should Brandon homeowners near the Reservoir plan for?</h2>
        <p>Brandon homeowners near the Reservoir should plan for wind-driven debris and for where the downspouts drain. Lots under pines collect needles on the roof year-round.</p>
        <ul>
          <li><a href="/services/gutter-guards/">Fine mesh gutter guards</a>, at $10 to $14 per linear foot installed, are the system made for pine straw.</li>
          <li>Where a yard slopes toward the house, an <a href="/services/custom-downspouts/">underground drain tie-in</a> moves roof water past the low spot.</li>
        </ul>
        <p>Brandon is one of five Rankin County cities on the <a href="/service-areas/">Dun-Rite service area list</a>.</p>

        <h2>What do Brandon homeowners ask Dun-Rite?</h2>
        <p>Brandon homeowners ask Dun-Rite about 6-inch gutters, color matching on newer homes and the drive from Madison. The short answers are below, and anything not covered can be asked by calling the office at (601) 750-1800 during business hours.</p>
        <?php echo dr_faq_list($faqs); ?>

        <p class="last-updated">Last updated: <?php echo date('F Y', filemtime(__FILE__)); ?></p>
      </article>

      <aside class="page-rail" aria-label="Brandon service facts">
        <div class="rail-card rail-card--tint">
          <h3>Brandon at a glance</h3>
          <ul>
            <li>Rankin County seat</li>
            <li>Castlewoods, Whisper Lake, Crosswinds</li>
            <li>6-inch high-flow profiles</li>
            <li>No travel fees</li>
          </ul>
        </div>
        <div class="rail-card">
          <h3>Nearby cities</h3>
          <ul>
            <li><a href="/service-areas/flowood/">Gutters in Flowood</a></li>
            <li><a href="/service-areas/pearl/">Gutters in Pearl</a></li>
            <li><a href="/service-areas/richland/">Gutters in Richland</a></li>
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
  $relatedServices = ['seamless-gutter-installation', 'gutter-guards', 'custom-downspouts'];
  $relatedHeading  = 'Which gutter services are most requested in Brandon?';
  $relatedText     = 'These are the three services Brandon customers ask Dun-Rite Seamless Gutters, Inc. about most. Each page lists the price range, the materials and what the crew does on site.';
  $closingHeading  = 'Get the right gutter size for your roof';
  include $_SERVER['DOCUMENT_ROOT'] . '/includes/service-close.php';
  ?>

</main>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
