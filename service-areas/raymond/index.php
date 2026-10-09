<?php
/** City page — Raymond, MS */
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';

$pageTitle       = 'Gutter Installer in Raymond, MS | Dun-Rite Seamless Gutters';
$pageDescription = 'Gutter installer for Raymond, MS: Dun-Rite forms gutters to fit mid-1800s homes near the Hinds County courthouse, in aluminum or hand-soldered copper. Call (601) 750-1800.';
$currentPage     = 'service-areas';
$canonicalUrl    = $siteUrl . '/service-areas/raymond/';
$pageType        = 'city';
$citySlug        = 'raymond';

$faqs = [
    ['q' => 'Can you put gutters on a house from the 1800s?',
     'a' => 'Yes. Sections are formed on site to the measured length of each eave, which is what an old, out-of-square house needs. Half-round and ogee profiles are available in copper.'],
    ['q' => 'How quickly can Dun-Rite get to Raymond for an estimate?',
     'a' => 'Most estimates are scheduled within 48 hours of your call. There are no travel fees to Raymond.'],
    ['q' => 'Is there a gutter company near me that will come to Raymond?',
     'a' => 'Dun-Rite Seamless Gutters, Inc. serves Raymond as one of its 14 cities. Call (601) 750-1800, Monday to Friday, 8 AM to 5 PM.'],
];

$schemaNodes = [
    dr_breadcrumb_node(['Service Areas' => '/service-areas/', 'Raymond' => '/service-areas/raymond/']),
    ['@type' => 'Service', 'name' => 'Gutter installation and repair in Raymond, MS', 'serviceType' => 'Gutter installation and repair',
     'provider' => ['@id' => $siteUrl . '/#business'], 'areaServed' => ['@type' => 'City', 'name' => 'Raymond, MS'], 'url' => $siteUrl . '/service-areas/raymond/'],
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
        <?php echo dr_breadcrumb(['Service Areas' => '/service-areas/', 'Raymond' => null]); ?>
        <p class="hero-eyebrow">Hinds County &middot; Courthouse town</p>
        <h1>Gutter Installation for Raymond, MS Homes</h1>
        <p class="hero-answer">Dun-Rite Seamless Gutters, Inc. is a gutter installer based in Madison, Mississippi that serves Raymond, a Hinds County seat with a courthouse from the 1850s. Many houses near that courthouse date to the same era, and they need an installer used to old eaves.</p>
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
        <h2>What makes gutter work on Raymond's old houses different?</h2>
        <p>Gutter work on Raymond's old houses is different because the eaves were built by hand long before standard gutter sizes existed. Dun-Rite Seamless Gutters, Inc. measures each run and forms the gutter on site to that length. On a mid-1800s house near the courthouse, the two ends of one porch roof are rarely the same height, and the pitch has to be set by eye and level rather than by the trim line.</p>
        <p>Raymond's history is visible on almost every block: the town was the site of an 1863 battle in the Vicksburg campaign, and several buildings from that period still stand. Owners of those houses usually want gutters that do not draw attention.</p>

        <h2>Should a historic Raymond home get copper or aluminum gutters?</h2>
        <p>A historic Raymond home can take either; copper matches the period, and dark aluminum costs far less. <a href="/services/copper-gutters/">Copper gutters</a> are $25 to $40 per linear foot installed, are hand-soldered at every seam and weather to brown and then green over ten to fifteen years. Aluminum in classic bronze or royal brown runs $1,200 to $3,500 for most homes.</p>
        <figure class="photo-figure">
          <?php echo dr_picture('job-copper-awnings-brick', 'Copper standing-seam awnings over the windows of a brick home with a copper downspout', ['sizes' => '(max-width: 960px) 100vw, 60vw']); ?>
          <figcaption>Copper awnings and a copper downspout on a brick home.</figcaption>
        </figure>

        <h2>What about newer homes and the land around Raymond?</h2>
        <p>Outside the old town, Raymond is mostly houses on acreage, and the questions there are about water volume and where it drains. Around the Hinds Community College campus and along the roads toward Bolton and Clinton, lots are large and tree cover is heavy.</p>
        <ul>
          <li>Long rooflines get <a href="/services/seamless-gutter-installation/">seamless gutters</a> formed in one piece per run.</li>
          <li>With room to trench, an underground drain tie-in at $300 to $800 per run moves water well away from the house.</li>
        </ul>
        <p>Raymond is one of five Hinds County cities on the <a href="/service-areas/">Dun-Rite service area list</a>.</p>

        <h2>What do Raymond homeowners ask Dun-Rite?</h2>
        <p>Raymond homeowners ask Dun-Rite about fitting gutters to very old houses, about cost and about scheduling a visit this far southwest of the office. The short answers are below, and anything not covered can be asked by calling the office at (601) 750-1800 during business hours.</p>
        <?php echo dr_faq_list($faqs); ?>

        <p class="last-updated">Last updated: <?php echo date('F Y', filemtime(__FILE__)); ?></p>
      </article>

      <aside class="page-rail" aria-label="Raymond service facts">
        <div class="rail-card rail-card--tint">
          <h3>Raymond at a glance</h3>
          <ul>
            <li>Hinds County seat</li>
            <li>1850s courthouse and historic homes</li>
            <li>Acreage lots outside town</li>
            <li>No travel fees</li>
          </ul>
        </div>
        <div class="rail-card">
          <h3>Nearby cities</h3>
          <ul>
            <li><a href="/service-areas/clinton/">Gutters in Clinton</a></li>
            <li><a href="/service-areas/bolton/">Gutters in Bolton</a></li>
            <li><a href="/service-areas/terry/">Gutters in Terry</a></li>
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
  $relatedServices = ['copper-gutters', 'seamless-gutter-installation', 'custom-downspouts'];
  $relatedHeading  = 'Which gutter services are most requested in Raymond?';
  $relatedText     = 'These are the three services Raymond customers ask Dun-Rite Seamless Gutters, Inc. about most. Each page lists the price range, the materials and what the crew does on site.';
  $closingHeading  = 'Get gutters measured for your Raymond home';
  include $_SERVER['DOCUMENT_ROOT'] . '/includes/service-close.php';
  ?>

</main>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
