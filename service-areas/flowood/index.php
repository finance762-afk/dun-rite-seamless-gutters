<?php
/** City page — Flowood, MS */
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';

$pageTitle       = 'Gutter Installer in Flowood, MS | Commercial & Residential';
$pageDescription = 'Gutter installer for Flowood, MS: Dun-Rite installs commercial gutters along Lakeland Drive and replaces gutters on Flowood homes, with no travel fees. Call (601) 750-1800.';
$currentPage     = 'service-areas';
$canonicalUrl    = $siteUrl . '/service-areas/flowood/';
$pageType        = 'city';
$citySlug        = 'flowood';

$faqs = [
    ['q' => 'Can Dun-Rite provide a certificate of insurance for a Flowood commercial job?',
     'a' => 'Yes. Dun-Rite carries Workers\' Compensation and General Liability insurance and issues a certificate with the builder or owner named as additional insured.'],
    ['q' => 'Can a retail center stay open while gutters are installed?',
     'a' => 'Commercial jobs are installed in phases with a single point of project management. Raise tenant opening hours at the pre-construction consultation so the phasing can be planned around them.'],
    ['q' => 'What do new gutters cost on a Flowood house?',
     'a' => 'Most homes fall between $1,200 and $3,500 for a complete seamless aluminum system, including removal of the old gutters.'],
];

$schemaNodes = [
    dr_breadcrumb_node(['Service Areas' => '/service-areas/', 'Flowood' => '/service-areas/flowood/']),
    ['@type' => 'Service', 'name' => 'Gutter installation and repair in Flowood, MS', 'serviceType' => 'Gutter installation and repair',
     'provider' => ['@id' => $siteUrl . '/#business'], 'areaServed' => ['@type' => 'City', 'name' => 'Flowood, MS'], 'url' => $siteUrl . '/service-areas/flowood/'],
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
        <?php echo dr_breadcrumb(['Service Areas' => '/service-areas/', 'Flowood' => null]); ?>
        <p class="hero-eyebrow">Rankin County &middot; Lakeland Drive</p>
        <h1>Commercial &amp; Residential Gutters in Flowood, MS</h1>
        <p class="hero-answer">Dun-Rite Seamless Gutters, Inc. is a gutter installer based in Madison, Mississippi that serves Flowood, the commercial hub along Lakeland Drive. Flowood is where the company sees its highest commercial gutter demand, alongside steady residential work in older and newer subdivisions.</p>
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
        <h2>What commercial gutter work does Dun-Rite do on Lakeland Drive?</h2>
        <p>On Lakeland Drive, Dun-Rite Seamless Gutters, Inc. installs 7-inch and 8-inch gutters with high-flow downspouts on office and retail buildings. The corridor is lined with shopping centers and professional buildings, and a commercial roof sheds far more water per foot of eave than a house.</p>
        <ol class="steps">
          <li><strong>Consultation</strong>A meeting with the general contractor, architect or owner before work starts.</li>
          <li><strong>Drawings and take-off</strong>Drawings are reviewed and materials are counted from them.</li>
          <li><strong>Phased installation</strong>The job is installed in phases, with one point of contact.</li>
        </ol>
        <p>Mark Dungan supervises every commercial installation. The <a href="/services/commercial-gutters/">commercial gutters page</a> covers billing, insurance certificates and reporting.</p>
        <figure class="photo-figure">
          <?php echo dr_picture('dark-gutter-tile-roof', 'Long run of dark half-round gutter under a tile roof edge', ['sizes' => '(max-width: 960px) 100vw, 60vw']); ?>
          <figcaption>A long, continuous gutter run.</figcaption>
        </figure>

        <h2>What do Flowood homes need from a gutter installer?</h2>
        <p>Flowood homes split into two groups: older ranch houses that need replacement gutters, and newer subdivision homes that need a first complete system. The older Sandalwood-area ranches have the low eaves and original sectional gutters typical of their age. Newer houses in Lakeland Heights have taller, steeper roofs.</p>
        <ul>
          <li>Replacement on an older ranch is a <a href="/services/seamless-gutter-installation/">seamless aluminum installation</a>, usually $1,200 to $3,500 and one day of work.</li>
          <li>Newer two-story homes often take 6-inch gutters and one to two days.</li>
        </ul>

        <h2>Does low ground near the Pearl River change the gutter plan?</h2>
        <p>Low ground changes where the downspouts should send the water, not the gutters themselves. Flowood lies along the Pearl River, and parts of the city are flat and slow to drain. On a flat lot, water released at the foot of a downspout has nowhere to go, so it stands beside the slab.</p>
        <p>An <a href="/services/custom-downspouts/">underground drain tie-in</a> at $300 to $800 per run carries it to the street or a swale. Flowood is one of five Rankin County cities on the <a href="/service-areas/">service area list</a>.</p>

        <h2>What do Flowood owners and managers ask Dun-Rite?</h2>
        <p>Flowood property managers and homeowners ask Dun-Rite about insurance certificates, working around open businesses and residential pricing. The short answers are below, and anything not covered can be asked by calling the office at (601) 750-1800 during business hours.</p>
        <?php echo dr_faq_list($faqs); ?>

        <p class="last-updated">Last updated: <?php echo date('F Y', filemtime(__FILE__)); ?></p>
      </article>

      <aside class="page-rail" aria-label="Flowood service facts">
        <div class="rail-card rail-card--tint">
          <h3>Flowood at a glance</h3>
          <ul>
            <li>Rankin County</li>
            <li>Lakeland Drive commercial corridor</li>
            <li>Commercial and residential work</li>
            <li>No travel fees</li>
          </ul>
        </div>
        <div class="rail-card">
          <h3>Nearby cities</h3>
          <ul>
            <li><a href="/service-areas/brandon/">Gutters in Brandon</a></li>
            <li><a href="/service-areas/pearl/">Gutters in Pearl</a></li>
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
  $relatedServices = ['commercial-gutters', 'seamless-gutter-installation', 'custom-downspouts'];
  $relatedHeading  = 'Which gutter services are most requested in Flowood?';
  $relatedText     = 'These are the three services Flowood customers ask Dun-Rite Seamless Gutters, Inc. about most. Each page lists the price range, the materials and what the crew does on site.';
  $closingHeading  = 'Get a commercial or home gutter quote';
  include $_SERVER['DOCUMENT_ROOT'] . '/includes/service-close.php';
  ?>

</main>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
