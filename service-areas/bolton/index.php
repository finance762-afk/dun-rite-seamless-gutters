<?php
/** City page — Bolton, MS */
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';

$pageTitle       = 'Gutter Installer in Bolton, MS | Dun-Rite Seamless Gutters';
$pageDescription = 'Gutter installer for Bolton, MS: Dun-Rite installs seamless gutters and long underground downspout drains on acreage homes, with no travel fees. Call (601) 750-1800.';
$currentPage     = 'service-areas';
$canonicalUrl    = $siteUrl . '/service-areas/bolton/';
$pageType        = 'city';
$citySlug        = 'bolton';

$faqs = [
    ['q' => 'Bolton is a long way from Madison. Is there a travel fee?',
     'a' => 'No. Bolton is within the 14-city service area, and there are no travel fees, fuel surcharges or trip charges anywhere inside it.'],
    ['q' => 'How far can an underground downspout drain run?',
     'a' => 'Runs of 50 feet or more are common on Bolton properties. Price is $300 to $800 per run and depends on the length and the trenching.'],
    ['q' => 'A limb took down part of my gutter. What now?',
     'a' => 'Call (601) 750-1800 for a same-day repair estimate. Dun-Rite photographs the damage, writes a damage assessment and itemizes the quote for your insurance adjuster.'],
];

$schemaNodes = [
    dr_breadcrumb_node(['Service Areas' => '/service-areas/', 'Bolton' => '/service-areas/bolton/']),
    ['@type' => 'Service', 'name' => 'Gutter installation and repair in Bolton, MS', 'serviceType' => 'Gutter installation and repair',
     'provider' => ['@id' => $siteUrl . '/#business'], 'areaServed' => ['@type' => 'City', 'name' => 'Bolton, MS'], 'url' => $siteUrl . '/service-areas/bolton/'],
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
        <?php echo dr_breadcrumb(['Service Areas' => '/service-areas/', 'Bolton' => null]); ?>
        <p class="hero-eyebrow">Hinds County &middot; Acreage homes</p>
        <h1>Gutters &amp; Downspout Drains for Bolton, MS Homes</h1>
        <p class="hero-answer">Dun-Rite Seamless Gutters, Inc. is a gutter installer based in Madison, Mississippi that serves Bolton, the rural town on I-20 west of Clinton. Bolton homes sit on acreage under heavy tree cover, so the jobs here are long gutter runs and underground drains of 50 feet or more.</p>
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
        <h2>Why do Bolton homes need long underground downspout drains?</h2>
        <p>Bolton homes need long underground drains because there is room to carry roof water far from the house, and good reason to. Dun-Rite Seamless Gutters, Inc. commonly installs drainage runs of 50 feet or more here. On an acreage lot the downspout does not have to empty beside the foundation; a buried line can take the water downhill to a ditch, a pond or open pasture.</p>
        <p>An <a href="/services/custom-downspouts/">underground drainage tie-in</a> costs $300 to $800 per run, depending on length and how hard the trench is to dig. Tree roots are the usual obstacle in Bolton, where the house often sits in the only cleared spot on the property.</p>
        <figure class="photo-figure">
          <?php echo dr_picture('downspout-ground-extension', 'Worker fitting a white downspout extension along the ground at the base of a wall', ['sizes' => '(max-width: 960px) 100vw, 60vw']); ?>
          <figcaption>A downspout extension being fitted at the base of a wall.</figcaption>
        </figure>

        <h2>What does heavy tree cover do to gutters in rural Hinds County?</h2>
        <p>Heavy tree cover fills gutters faster than a twice-a-year cleaning can keep up with. Country homes around Bolton are typically ringed by mature oaks, pines and sweetgums, with limbs over the roof. Leaves and needles are only part of it; limbs falling in a storm bend gutters and tear hangers loose.</p>
        <ul>
          <li>For debris, <a href="/services/gutter-guards/">gutter guards</a> run $3 to $14 per linear foot installed, depending on the system.</li>
          <li>For limb damage, a section repair costs $150 to $600, and Dun-Rite prepares photo documentation for insurance claims.</li>
        </ul>

        <h2>Does Dun-Rite gutter barns and shops as well as the house?</h2>
        <p>Yes. A metal-roofed shop or barn sheds water fast, and without gutters that water cuts a trench along the wall and turns the doorway to mud. The same <a href="/services/seamless-gutter-installation/">seamless gutters</a> used on the house are formed on site to the building's length, which on a long outbuilding means one piece instead of several joined sections.</p>
        <p>Bolton is the westernmost town on the <a href="/service-areas/">Dun-Rite service area list</a>, at the edge of the roughly 30-mile radius from Madison.</p>

        <h2>What do Bolton homeowners ask Dun-Rite?</h2>
        <p>Bolton homeowners ask Dun-Rite about trip charges this far out, how far a drain line can run and whether a storm-damaged gutter can be claimed on insurance.</p>
        <?php echo dr_faq_list($faqs); ?>

        <p class="last-updated">Last updated: <?php echo date('F Y', filemtime(__FILE__)); ?></p>
      </article>

      <aside class="page-rail" aria-label="Bolton service facts">
        <div class="rail-card rail-card--tint">
          <h3>Bolton at a glance</h3>
          <ul>
            <li>Hinds County</li>
            <li>Rural, acreage homes</li>
            <li>Drain runs of 50+ feet common</li>
            <li>No travel fees</li>
          </ul>
        </div>
        <div class="rail-card">
          <h3>Nearby cities</h3>
          <ul>
            <li><a href="/service-areas/clinton/">Gutters in Clinton</a></li>
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
  $relatedServices = ['custom-downspouts', 'gutter-guards', 'gutter-repair-replacement'];
  $relatedHeading  = 'Which gutter services are most requested in Bolton?';
  $relatedText     = 'These are the three services Bolton customers ask Dun-Rite Seamless Gutters, Inc. about most. Each page lists the price range, the materials and what the crew does on site.';
  $closingHeading  = 'Move the water away from your house';
  include $_SERVER['DOCUMENT_ROOT'] . '/includes/service-close.php';
  ?>

</main>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
