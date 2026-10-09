<?php
/** Service page — gutter-guards */
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';

$pageTitle       = 'Gutter Guard Installer in Jackson & Madison, MS | Dun-Rite';
$pageDescription = 'Dun-Rite is a gutter guard installer serving Jackson and Madison, MS. Mesh, screen or foam guards from $3 to $14 per foot installed, on new or existing gutters. (601) 750-1800.';
$currentPage     = 'services';
$canonicalUrl    = $siteUrl . '/services/gutter-guards/';
$pageType        = 'service';
$serviceSlug     = 'gutter-guards';
$service         = dr_service($serviceSlug);
$heroFormService = $service['name'];

$faqs = [
    ['q' => 'Do gutter guards mean I never clean my gutters again?',
     'a' => 'No. Properly installed guards cut cleaning of the gutter trough from twice a year to about once every three to five years. The top of the guard still collects debris in heavy canopy and should be looked at between cleanings.'],
    ['q' => 'Can guards go on the gutters I already have?',
     'a' => 'Yes. All three systems fit existing gutters as well as new ones, as long as the gutters are sound and pitched correctly. A typical retrofit takes two to four hours per home.'],
    ['q' => 'Which guard works best for pine straw?',
     'a' => 'Fine mesh. Pine needles slide through large-hole screen and lodge in foam, so on lots with pines Dun-Rite recommends the fine mesh system at $10 to $14 per linear foot installed.'],
    ['q' => 'How long do gutter guards last?',
     'a' => 'It depends on the system. Dun-Rite gives fine mesh a service life of 15 years or more, large-hole screen 10 to 15, and foam inserts five to seven.'],
];

$schemaNodes = [
    dr_breadcrumb_node(['Services' => '/services/', $service['name'] => '/services/' . $serviceSlug . '/']),
    dr_service_node($service, 'Gutter guard installation: fine mesh, large-hole screen and foam insert systems fitted to new or existing gutters. $3 to $14 per linear foot installed depending on the system.'),
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
        <p class="hero-eyebrow">Gutter installer &middot; Leaf protection</p>
        <h1>Gutter Guard Installation in Jackson &amp; Madison, MS</h1>
        <p class="hero-answer">Dun-Rite Seamless Gutters, Inc. is a gutter installer in Madison, Mississippi that fits gutter guards on new and existing gutters across the Jackson metro. Three systems are offered, from foam inserts at $3 per linear foot to fine mesh at $14, and most retrofits take two to four hours.</p>
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
        <h2>How much does gutter guard installation cost in Jackson, MS?</h2>
        <p>Gutter guard installation from Dun-Rite Seamless Gutters, Inc. costs $3 to $14 per linear foot installed, depending on the system. Foam inserts are the least expensive, large-hole screen sits in the middle and fine mesh costs the most. A home with 150 feet of gutter therefore ranges from about $450 in foam to about $2,100 in fine mesh.</p>
        <div class="table-wrap">
          <table class="data-table">
            <caption>The three guard systems Dun-Rite installs, with its own price and service-life figures.</caption>
            <thead><tr><th scope="col">System</th><th scope="col">Installed price per linear foot</th><th scope="col">Best for</th><th scope="col">Service life</th></tr></thead>
            <tbody>
              <tr><th scope="row">Fine mesh</th><td>$10 – $14</td><td>Pine straw and small debris</td><td>15+ years</td></tr>
              <tr><th scope="row">Large-hole screen</th><td>$7 – $10</td><td>Oak leaves and other broad leaves</td><td>10 – 15 years</td></tr>
              <tr><th scope="row">Foam inserts</th><td>$3 – $6</td><td>A tight budget</td><td>5 – 7 years</td></tr>
            </tbody>
          </table>
        </div>

        <h2>Which gutter guard fits the trees on your lot?</h2>
        <p>Match the guard to the debris: fine mesh for pine straw, large-hole screen for oak and other broad leaves. Central Mississippi yards usually have both, and the tree that hangs over the roof decides. Pine needles are thin enough to pass through a screen meant for leaves, and oak catkins in spring mat on top of anything.</p>
        <figure class="photo-figure">
          <?php echo dr_picture('gutter-guard-fitting', 'Gloved hand fitting a perforated white guard panel over a gutter at the shingle edge', ['sizes' => '(max-width: 960px) 100vw, 60vw']); ?>
          <figcaption>A perforated guard panel being set over a gutter at the shingle edge.</figcaption>
        </figure>
        <p>Tell Dun-Rite which trees overhang the roof when you ask for a quote. In <a href="/service-areas/clinton/">Clinton</a>, where mature pecans shed leaves, husks and twigs for months, a guard is close to essential; on a newer lot with young trees, it may be money better spent later.</p>

        <h2>How long does a gutter guard installation take?</h2>
        <p>A typical gutter guard retrofit from Dun-Rite takes two to four hours per home. All three systems fit new or existing gutters, so guards can be added on the day new gutters go up or years later.</p>
        <p>Two things are worth knowing before guards go on existing gutters. A guard covers whatever is already in the trough, so the gutters should be clean first. And a guard does not fix a gutter that sags or holds water; that is a repair, and it should come first.</p>
        <figure class="photo-figure">
          <?php echo dr_picture('gutter-guard-mesh', 'Close-up of a mesh guard seated in a half-round gutter below a shingle roof', ['sizes' => '(max-width: 960px) 100vw, 60vw']); ?>
          <figcaption>Close-up of a mesh guard seated in a gutter.</figcaption>
        </figure>

        <h2>Are gutter guards worth it in central Mississippi?</h2>
        <p>Gutter guards are worth it when trees overhang the roof, because they cut trough cleaning from twice a year to roughly once every three to five years. At Dun-Rite's cleaning price of $150 to $300 a visit, a home that would otherwise be cleaned every spring and fall can compare that running cost with the one-time price of a guard.</p>
        <p>Guards do not replace maintenance entirely. See what a <a href="/services/gutter-cleaning/">gutter cleaning visit includes</a>, or, if the gutters themselves are sagging or leaking, start with <a href="/services/gutter-repair-replacement/">gutter repair</a>. All eight services are on the <a href="/services/">services overview</a>.</p>

        <h2>What do people ask about gutter guards?</h2>
        <p>People ask Dun-Rite whether guards end cleaning for good, whether they fit existing gutters, which guard handles pine straw and how long each system lasts. The short answers are below, and anything not covered can be asked by calling the office at (601) 750-1800 during business hours.</p>
        <?php echo dr_faq_list($faqs); ?>

        <p class="last-updated">Last updated: <?php echo date('F Y', filemtime(__FILE__)); ?></p>
      </article>

      <aside class="page-rail" aria-label="Key facts">
        <div class="rail-card rail-card--tint">
          <h3>Guard prices, installed</h3>
          <ul><li>Fine mesh: $10 – $14 per foot</li><li>Large-hole screen: $7 – $10 per foot</li><li>Foam inserts: $3 – $6 per foot</li></ul>
        </div>
        <div class="rail-card">
          <h3>Retrofit time</h3>
          <p>Two to four hours per home on a typical retrofit.</p>
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
  $relatedServices = ['gutter-cleaning', 'seamless-gutter-installation', 'gutter-repair-replacement'];
  $closingHeading  = 'Find the right guard for your trees';
  include $_SERVER['DOCUMENT_ROOT'] . '/includes/service-close.php';
  ?>

</main>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
