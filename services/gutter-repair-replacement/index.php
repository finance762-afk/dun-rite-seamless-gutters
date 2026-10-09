<?php
/** Service page — gutter-repair-replacement */
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';

$pageTitle       = 'Gutter Repair Company in Madison & Jackson, MS | Dun-Rite';
$pageDescription = 'Dun-Rite is a gutter repair company in Madison, MS serving Jackson and 12 more cities. Repairs $150–$600 per section; replacement from $1,200. Call (601) 750-1800.';
$currentPage     = 'services';
$canonicalUrl    = $siteUrl . '/services/gutter-repair-replacement/';
$pageType        = 'service';
$serviceSlug     = 'gutter-repair-replacement';
$service         = dr_service($serviceSlug);
$heroFormService = $service['name'];

$faqs = [
    ['q' => 'Is there a gutter repair company near me in the Jackson area?',
     'a' => 'Dun-Rite Seamless Gutters, Inc. repairs gutters in 14 cities around Jackson from its office at 115 Cherrybrook Dr in Madison: Madison, Ridgeland, Gluckstadt, Canton, Jackson, Clinton, Raymond, Bolton, Terry, Flowood, Pearl, Brandon, Richland and Florence. There are no travel fees inside that area.'],
    ['q' => 'Should I repair my gutters or replace them?',
     'a' => 'Repair makes sense when the damage is limited to a section or two and the rest of the system is sound. When several sections sag or leak, a full replacement starting at $1,200 often costs less than repeated $150 to $600 section repairs, and it comes with a 25-year material warranty.'],
    ['q' => 'Does Dun-Rite help with storm damage insurance claims?',
     'a' => 'Yes. Dun-Rite provides adjuster-ready photo documentation, a written damage assessment and an itemized repair quote formatted for adjuster review. In its experience most claims close in two to three weeks.'],
    ['q' => 'How fast can I get a repair estimate?',
     'a' => 'Dun-Rite offers same-day repair estimates. Call (601) 750-1800 during office hours, Monday to Friday, 8 AM to 5 PM.'],
];

$schemaNodes = [
    dr_breadcrumb_node(['Services' => '/services/', $service['name'] => '/services/' . $serviceSlug . '/']),
    dr_service_node($service, 'Gutter repair and replacement: sagging gutters, leaking corners and seams, gutters pulled off the fascia, and storm damage with insurance claim documentation. Repairs $150 to $600 per section; full replacement from $1,200.'),
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
        <?php echo dr_breadcrumb(['Services' => '/services/', $service['nav'] => null]); ?>
        <p class="hero-eyebrow">Gutter repair company &middot; Madison, MS</p>
        <h1>Gutter Repair &amp; Replacement in Madison and Jackson, MS</h1>
        <p class="hero-answer">Dun-Rite Seamless Gutters, Inc. is a gutter repair company and gutter installer based in Madison, Mississippi. Repairs cost $150 to $600 per section, and a full replacement starts at $1,200. Sagging runs, leaking corners, gutters pulled off the fascia and storm damage are the usual calls.</p>
        <div class="hero-actions">
          <a class="btn btn-accent btn-lg hero-form-open" href="/contact/" data-service="<?php echo h($service['name']); ?>">Request an estimate</a>
          <a class="link-call" href="tel:+<?php echo h($phoneRaw); ?>"><?php echo icon('phone', 18); ?> <?php echo h($phone); ?></a>
        </div>
      </div>
      <?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/hero-form.php'; ?>
    </div>
  </section>

  <section class="section">
    <div class="container page-grid">
      <article class="prose">
        <h2>How much does gutter repair cost in Mississippi?</h2>
        <p>Gutter repair from Dun-Rite Seamless Gutters, Inc. costs $150 to $600 per section. The price depends on what failed: re-hanging a sagging run sits at the low end, and rebuilding a section torn off in a storm sits at the high end. When the whole system is past repair, full replacement starts at $1,200.</p>
        <dl class="fact-list">
          <div><dt>Repair, per section</dt><dd>$150 – $600</dd></div>
          <div><dt>Full replacement</dt><dd>From $1,200</dd></div>
          <div><dt>Repair estimates</dt><dd>Same day</dd></div>
          <div><dt>Warranty on replacement</dt><dd>25-year, materials</dd></div>
        </dl>

        <h2>Which gutter problems does Dun-Rite repair most often?</h2>
        <p>The four gutter problems Dun-Rite repairs most often are sagging gutters, leaking corners and seams, gutters pulled off the fascia, and water pooling at the downspouts. Each one shows up differently from the ground, and each has a different fix.</p>
        <div class="table-wrap">
          <table class="data-table">
            <caption>Common gutter problems, what you will notice, and the usual repair.</caption>
            <thead><tr><th scope="col">Problem</th><th scope="col">What you see</th><th scope="col">Usual fix</th></tr></thead>
            <tbody>
              <tr><th scope="row">Sagging gutter</th><td>A dip in the run; water standing after rain</td><td>Re-hang on hidden hangers and reset the pitch</td></tr>
              <tr><th scope="row">Leaking corner or seam</th><td>A drip line or stain below a joint</td><td>Clean and reseal the joint, or replace the section</td></tr>
              <tr><th scope="row">Pulled off the fascia</th><td>A gap between gutter and board</td><td>Refasten; replace the section if it is bent</td></tr>
              <tr><th scope="row">Pooling at a downspout</th><td>Standing water or washed-out mulch at the base</td><td>Clear or resize the downspout, or add a <a href="/services/custom-downspouts/">drain tie-in</a></td></tr>
            </tbody>
          </table>
        </div>
        <figure class="photo-figure">
          <?php echo dr_picture('eave-ladder-work', 'Installer on an extension ladder working at the eave of a house, seen from below', ['sizes' => '(max-width: 960px) 100vw, 60vw']); ?>
          <figcaption>Repair work at the eave, reached from an extension ladder.</figcaption>
        </figure>

        <h2>When is gutter replacement the better choice?</h2>
        <p>Replacement is the better choice when the cost of fixing sections one at a time approaches the cost of a new system. A full replacement from Dun-Rite starts at $1,200 and carries a 25-year manufacturer warranty on materials, so three or four section repairs on an aging sectional gutter can cost as much as starting over.</p>
        <p>Older sectional systems are the usual candidates. They have a joint every 10 feet, and once several of those joints leak, resealing them one by one is a short-term fix. A replacement is a <a href="/services/seamless-gutter-installation/">seamless gutter installation</a>: one piece per run, formed on site.</p>

        <h2>How does Dun-Rite handle storm damage and insurance claims?</h2>
        <p>For storm damage, Dun-Rite documents the damage for your insurance adjuster and then repairs it. Spring thunderstorms and the tail end of Gulf hurricanes both bring wind and falling limbs to central Mississippi, and gutters are usually the first thing a limb hits.</p>
        <ol class="steps">
          <li><strong>Estimate</strong>Call the office and the damage is looked at and priced, usually that day.</li>
          <li><strong>Photo documentation</strong>The damage is photographed in a form an adjuster can use.</li>
          <li><strong>Written assessment and itemized quote</strong>You receive a written damage assessment and a repair quote itemized for adjuster review.</li>
          <li><strong>Repair</strong>Once the claim is settled, the sections are repaired or replaced.</li>
        </ol>
        <p>Most claims Dun-Rite prepares paperwork for close in two to three weeks. For work that is not storm related, see the full list of <a href="/services/">Dun-Rite gutter services</a>.</p>

        <h2>What do people ask a gutter repair company?</h2>
        <p>People looking for gutter repair near me in the Jackson area ask Dun-Rite where it works, whether to repair or replace, how insurance claims are handled and how quickly someone can look at the damage.</p>
        <?php echo dr_faq_list($faqs); ?>

        <p class="last-updated">Last updated: <?php echo date('F Y', filemtime(__FILE__)); ?></p>
      </article>

      <aside class="page-rail" aria-label="Key facts">
        <div class="rail-card rail-card--tint">
          <h3>Repair prices</h3>
          <ul><li>$150 – $600 per section</li><li>Full replacement from $1,200</li><li>Fast repair estimates</li></ul>
        </div>
        <div class="rail-card">
          <h3>For insurance claims</h3>
          <ul><li>Adjuster-ready photos</li><li>Written damage assessment</li><li>Itemized repair quote</li></ul>
        </div>
        <div class="rail-card">
          <h3>Warranty on new work</h3>
          <p>25-year manufacturer warranty on materials and a 2-year labor warranty on installations.</p>
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
  $relatedServices = ['seamless-gutter-installation', 'gutter-cleaning', 'custom-downspouts'];
  $closingHeading  = 'Get the damage looked at today';
  include $_SERVER['DOCUMENT_ROOT'] . '/includes/service-close.php';
  ?>

</main>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
