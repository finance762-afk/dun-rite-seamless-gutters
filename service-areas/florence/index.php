<?php
/** City page — Florence, MS */
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';

$pageTitle       = 'Gutter Installer in Florence, MS | Dun-Rite Seamless Gutters';
$pageDescription = 'Gutter installer for Florence, MS: Dun-Rite installs seamless gutters, gutter guards and underground downspout drains on larger wooded lots. Call (601) 750-1800.';
$currentPage     = 'service-areas';
$canonicalUrl    = $siteUrl . '/service-areas/florence/';
$pageType        = 'city';
$citySlug        = 'florence';

$faqs = [
    ['q' => 'What does it cost to bury a downspout drain in Florence?',
     'a' => '$300 to $800 per drainage run, depending on the length and how hard the trench is to dig.'],
    ['q' => 'Can guards go on my existing gutters?',
     'a' => 'Yes, if the gutters are sound. A typical guard retrofit takes two to four hours.'],
    ['q' => 'How do I schedule an estimate in Florence?',
     'a' => 'Call (601) 750-1800 or send the form on this page. Most estimates are scheduled within 48 hours, and there are no travel fees.'],
];

$schemaNodes = [
    dr_breadcrumb_node(['Service Areas' => '/service-areas/', 'Florence' => '/service-areas/florence/']),
    ['@type' => 'Service', 'name' => 'Gutter installation and repair in Florence, MS', 'serviceType' => 'Gutter installation and repair',
     'provider' => ['@id' => $siteUrl . '/#business'], 'areaServed' => ['@type' => 'City', 'name' => 'Florence, MS'], 'url' => $siteUrl . '/service-areas/florence/'],
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
        <?php echo dr_breadcrumb(['Service Areas' => '/service-areas/', 'Florence' => null]); ?>
        <p class="hero-eyebrow">Rankin County &middot; Larger lots</p>
        <h1>Gutters, Guards &amp; Drainage for Florence, MS Homes</h1>
        <p class="hero-answer">Dun-Rite Seamless Gutters, Inc. is a gutter installer based in Madison, Mississippi that serves Florence, the semi-rural Rankin County town south of Richland on Highway 49. Lots here are larger and wooded, which makes underground downspout drains practical and gutter guards worth pricing.</p>
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
        <h2>Why are underground downspout drains practical in Florence?</h2>
        <p>Underground downspout drains are practical in Florence because the lots are large enough to carry water somewhere useful. Dun-Rite Seamless Gutters, Inc. ties downspouts into buried lines for $300 to $800 per drainage run. With an acre or more to work with, the outlet can be placed well downhill of the house instead of at the property line a few feet away.</p>
        <p>The price depends on how long the run is and how hard the trench is to dig. In Florence the difficulty is usually roots from mature trees between the house and the low ground. The <a href="/services/custom-downspouts/">custom downspouts page</a> explains sizes and tie-ins.</p>
        <figure class="photo-figure">
          <?php echo dr_picture('downspout-fitting', 'Installer strapping a dark round downspout to a stucco wall below the eave', ['sizes' => '(max-width: 960px) 100vw, 60vw']); ?>
          <figcaption>A round downspout being strapped to a wall.</figcaption>
        </figure>

        <h2>Do wooded Florence lots need gutter guards?</h2>
        <p>Wooded Florence lots usually benefit from gutter guards, because the trees stand close to the house and over the roof. The right system depends on what the trees are.</p>
        <div class="table-wrap">
          <table class="data-table">
            <caption>Guard choice by the trees over the roof, with Dun-Rite's installed prices.</caption>
            <thead><tr><th scope="col">Trees over the roof</th><th scope="col">Guard</th><th scope="col">Installed price</th></tr></thead>
            <tbody>
              <tr><th scope="row">Mostly pine</th><td>Fine mesh</td><td>$10 – $14 per linear foot</td></tr>
              <tr><th scope="row">Mostly oak and hardwood</th><td>Large-hole screen</td><td>$7 – $10 per linear foot</td></tr>
              <tr><th scope="row">Light cover, tight budget</th><td>Foam inserts</td><td>$3 – $6 per linear foot</td></tr>
            </tbody>
          </table>
        </div>
        <p>Guards cut trough cleaning from twice a year to about once every three to five years; details are on the <a href="/services/gutter-guards/">gutter guard page</a>.</p>

        <h2>What does a new gutter system cost in Florence?</h2>
        <p>A new gutter system in Florence costs $1,200 to $3,500 for most homes. Houses on larger lots tend to be longer and lower than suburban two-stories, which means more footage but simpler access, and most are finished in a day. The gutters are .032 gauge aluminum, formed on site in one piece per run.</p>
        <p>See the <a href="/services/seamless-gutter-installation/">seamless gutter installation page</a> for what is included. Florence is the southernmost Rankin County town on the <a href="/service-areas/">Dun-Rite service area list</a>.</p>

        <h2>What do Florence homeowners ask Dun-Rite?</h2>
        <p>Florence homeowners ask Dun-Rite about drain line prices, guards on existing gutters and scheduling a visit. The short answers are below, and anything not covered can be asked by calling the office at (601) 750-1800 during business hours.</p>
        <?php echo dr_faq_list($faqs); ?>

        <p class="last-updated">Last updated: <?php echo date('F Y', filemtime(__FILE__)); ?></p>
      </article>

      <aside class="page-rail" aria-label="Florence service facts">
        <div class="rail-card rail-card--tint">
          <h3>Florence at a glance</h3>
          <ul>
            <li>Rankin County</li>
            <li>Semi-rural, larger wooded lots</li>
            <li>Underground drains are practical</li>
            <li>No travel fees</li>
          </ul>
        </div>
        <div class="rail-card">
          <h3>Nearby cities</h3>
          <ul>
            <li><a href="/service-areas/richland/">Gutters in Richland</a></li>
            <li><a href="/service-areas/terry/">Gutters in Terry</a></li>
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
  $relatedServices = ['custom-downspouts', 'gutter-guards', 'seamless-gutter-installation'];
  $relatedHeading  = 'Which gutter services are most requested in Florence?';
  $relatedText     = 'These are the three services Florence customers ask Dun-Rite Seamless Gutters, Inc. about most. Each page lists the price range, the materials and what the crew does on site.';
  $closingHeading  = 'Plan gutters and drainage together';
  include $_SERVER['DOCUMENT_ROOT'] . '/includes/service-close.php';
  ?>

</main>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
