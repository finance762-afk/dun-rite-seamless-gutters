<?php
/** City page — Madison, MS */
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';

$pageTitle       = 'Gutter Installer in Madison, MS | Dun-Rite Seamless Gutters';
$pageDescription = 'Dun-Rite Seamless Gutters, Inc. is the gutter installer based at 115 Cherrybrook Dr in Madison, MS. Seamless and copper gutters, repair, cleaning. Call (601) 750-1800.';
$currentPage     = 'service-areas';
$canonicalUrl    = $siteUrl . '/service-areas/madison/';
$pageType        = 'city';
$citySlug        = 'madison';

$faqs = [
    ['q' => 'Where is Dun-Rite located in Madison?',
     'a' => 'The office is at 115 Cherrybrook Dr, Madison, MS 39110. Hours are Monday to Friday, 8 AM to 5 PM, and the phone number is (601) 750-1800.'],
    ['q' => 'How soon can I get a gutter estimate in Madison?',
     'a' => 'Madison is the home base, so same-day estimate windows are available most weeks. Elsewhere in the service area most estimates are scheduled within 48 hours.'],
    ['q' => 'Is there a gutter installer near me if I live off Highway 463?',
     'a' => 'Yes. The Highway 463 corridor, including Reunion and Lake Caroline, is a few minutes from the Dun-Rite office, and there are no travel fees anywhere in the 14-city service area.'],
];

$schemaNodes = [
    dr_breadcrumb_node(['Service Areas' => '/service-areas/', 'Madison' => '/service-areas/madison/']),
    ['@type' => 'Service', 'name' => 'Gutter installation and repair in Madison, MS', 'serviceType' => 'Gutter installation and repair',
     'provider' => ['@id' => $siteUrl . '/#business'], 'areaServed' => ['@type' => 'City', 'name' => 'Madison, MS'], 'url' => $siteUrl . '/service-areas/madison/'],
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
        <?php echo dr_breadcrumb(['Service Areas' => '/service-areas/', 'Madison' => null]); ?>
        <p class="hero-eyebrow">Home base &middot; Madison County</p>
        <h1>Gutter Installation &amp; Repair in Madison, MS</h1>
        <p class="hero-answer">Dun-Rite Seamless Gutters, Inc. is a gutter installer headquartered at 115 Cherrybrook Dr in Madison, Mississippi. Mark Dungan founded the company here in 1996, and because the office is in town, same-day estimate windows are available most weeks.</p>
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
        <h2>Why do so many Madison homes use a local gutter installer?</h2>
        <p>Madison homeowners use Dun-Rite Seamless Gutters, Inc. because the company is based in town and has worked on Madison rooflines since 1996. The office sits on Cherrybrook Drive, minutes from Reunion, Lake Caroline, Old Annandale, Twin Lakes and The Bridges. Being this close is why estimate visits here can often happen the day you call.</p>
        <p>Many Madison homes are brick with steep, cut-up roofs: hips, dormers and gables that each shed water to a different corner. That shape is what makes a gutter job here harder than the footage suggests. Every valley concentrates water at one spot on the eave, and that spot needs a gutter and a downspout sized for it.</p>
        <figure class="photo-figure">
          <?php echo dr_picture('home-brick-stucco-dark-gutters', 'Brick and stucco two-story home with dark gutters and downspouts along the roofline', ['sizes' => '(max-width: 960px) 100vw, 60vw']); ?>
          <figcaption>Dark gutters and downspouts on a brick and stucco two-story home.</figcaption>
        </figure>

        <h2>What do Madison's pines and oaks do to gutters?</h2>
        <p>Madison's mature pines and oaks fill gutters twice a year: with catkins and pollen in spring and with leaves and pine straw in fall. The city's older neighborhoods were built under existing canopy, and the trees now stand well above the rooflines. Pine straw is the harder problem because the needles bridge across the gutter and hold everything else.</p>
        <ul>
          <li>For a yard dominated by pine, Dun-Rite recommends <a href="/services/gutter-guards/">fine mesh gutter guards</a>, priced at $10 to $14 per linear foot installed.</li>
          <li>For a yard that only needs seasonal attention, <a href="/services/gutter-cleaning/">gutter cleaning</a> runs $150 to $300 a visit, or 15 to 25 percent less on a recurring plan.</li>
        </ul>

        <h2>Which gutters suit Madison's larger homes?</h2>
        <p>Larger Madison homes usually call for 6-inch gutters and 3x4 downspouts, and some are candidates for copper. A 6-inch K-style gutter carries more water off a steep or wide roof than the 5-inch residential standard. For estate properties, <a href="/services/copper-gutters/">hand-soldered copper gutters</a> are available at $25 to $40 per linear foot installed.</p>
        <p>For a standard aluminum system, most homes fall between $1,200 and $3,500. The <a href="/service-areas/">service areas page</a> lists the other 13 cities served from the Madison office.</p>

        <h2>What do Madison homeowners ask Dun-Rite?</h2>
        <p>Madison homeowners ask Dun-Rite about where the company is, how quickly someone can come out and whether there is a trip charge. The short answers are below, and anything not covered can be asked by calling the office at (601) 750-1800 during business hours.</p>
        <?php echo dr_faq_list($faqs); ?>

        <p class="last-updated">Last updated: <?php echo date('F Y', filemtime(__FILE__)); ?></p>
      </article>

      <aside class="page-rail" aria-label="Madison service facts">
        <div class="rail-card rail-card--tint">
          <h3>Madison at a glance</h3>
          <ul>
            <li>Madison County</li>
            <li>Dun-Rite office: 115 Cherrybrook Dr</li>
            <li>Same-day estimate windows most weeks</li>
            <li>No travel fees</li>
          </ul>
        </div>
        <div class="rail-card">
          <h3>Nearby cities</h3>
          <ul>
            <li><a href="/service-areas/ridgeland/">Gutters in Ridgeland</a></li>
            <li><a href="/service-areas/gluckstadt/">Gutters in Gluckstadt</a></li>
            <li><a href="/service-areas/canton/">Gutters in Canton</a></li>
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
  $relatedServices = ['seamless-gutter-installation', 'copper-gutters', 'gutter-guards'];
  $relatedHeading  = 'Which gutter services are most requested in Madison?';
  $relatedText     = 'These are the three services Madison customers ask Dun-Rite Seamless Gutters, Inc. about most. Each page lists the price range, the materials and what the crew does on site.';
  $closingHeading  = 'Get a quote from your Madison neighbors';
  include $_SERVER['DOCUMENT_ROOT'] . '/includes/service-close.php';
  ?>

</main>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
