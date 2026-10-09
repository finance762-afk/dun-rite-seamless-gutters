<?php
/** Service page — aluminum-gutters */
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';

$pageTitle       = 'Aluminum Gutter Installer in Madison, MS | Dun-Rite';
$pageDescription = 'Dun-Rite is an aluminum gutter installer in Madison, MS. .032 gauge standard, nine stocked colors, $1,200–$3,500 installed on most homes. Call (601) 750-1800.';
$currentPage     = 'services';
$canonicalUrl    = $siteUrl . '/services/aluminum-gutters/';
$pageType        = 'service';
$serviceSlug     = 'aluminum-gutters';
$service         = dr_service($serviceSlug);
$heroFormService = $service['name'];

$faqs = [
    ['q' => 'What gauge aluminum does Dun-Rite use?',
     'a' => 'Dun-Rite uses .032 gauge aluminum as its residential standard, which is heavier than the .027 gauge sold at home-improvement stores. The heavier .040 and .050 gauges are used on commercial buildings and oversized homes.'],
    ['q' => 'Can aluminum gutters be matched to my trim color?',
     'a' => 'Usually, yes. Nine colors are kept in stock and more than 25 baked-enamel colors are available in total. A color that is not stocked is ordered with a one to two week lead time.'],
    ['q' => 'Do aluminum gutters rust in Mississippi humidity?',
     'a' => 'No. Aluminum does not rust, which is the main reason it is the most common residential gutter material in Mississippi. The baked-enamel finish is what you maintain, and it is made to resist fading for two decades or more.'],
];

$schemaNodes = [
    dr_breadcrumb_node(['Services' => '/services/', $service['name'] => '/services/' . $serviceSlug . '/']),
    dr_service_node($service, 'Aluminum gutters in .032, .040 and .050 gauge with baked-enamel finishes, installed on homes and commercial buildings. Typical price $1,200 to $3,500 installed for most Mississippi homes.'),
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
        <p class="hero-eyebrow">Gutter installer &middot; Aluminum</p>
        <h1>Aluminum Gutters in Madison &amp; Jackson, MS</h1>
        <p class="hero-answer">Dun-Rite Seamless Gutters, Inc. is a gutter installer in Madison, Mississippi that forms aluminum gutters on site for homes across the Jackson metro. Aluminum is the material on most of its residential jobs: $1,200 to $3,500 installed, rust-proof, and stocked in nine colors.</p>
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
        <h2>How much do aluminum gutters cost installed in Mississippi?</h2>
        <p>Aluminum gutters from Dun-Rite Seamless Gutters, Inc. typically cost $1,200 to $3,500 installed on a Mississippi home. The price depends on the linear footage, the number of stories and the downspout count, and it includes taking down and disposing of the old gutters. A properly installed system has a service life of 20 to 30 years.</p>
        <dl class="fact-list">
          <div><dt>Typical price, installed</dt><dd>$1,200 – $3,500</dd></div>
          <div><dt>Residential gauge</dt><dd>.032 aluminum</dd></div>
          <div><dt>Colors in stock</dt><dd>9, with 25+ available</dd></div>
          <div><dt>Custom color lead time</dt><dd>1 – 2 weeks</dd></div>
        </dl>

        <h2>Which aluminum gauge does Dun-Rite use, and when?</h2>
        <p>Dun-Rite installs three aluminum gauges and picks one by the size of the building. Homes get .032 gauge as standard. The two heavier gauges are for long commercial runs and oversized residential roofs, where a wider trough has to stay rigid between hangers.</p>
        <div class="table-wrap">
          <table class="data-table">
            <caption>Aluminum gauges Dun-Rite installs. A higher number is thicker metal.</caption>
            <thead><tr><th scope="col">Gauge</th><th scope="col">Used on</th><th scope="col">Why</th></tr></thead>
            <tbody>
              <tr><th scope="row">.027</th><td>Not used by Dun-Rite</td><td>The thin stock sold at home-improvement stores</td></tr>
              <tr><th scope="row">.032</th><td>Homes (the standard)</td><td>Heavier than store-bought stock; used for 5-inch and 6-inch residential gutters</td></tr>
              <tr><th scope="row">.040</th><td>Commercial and oversized residential</td><td>A heavier gauge for bigger buildings</td></tr>
              <tr><th scope="row">.050</th><td>Commercial</td><td>The heaviest gauge offered, for <a href="/services/commercial-gutters/">7-inch and 8-inch commercial gutters</a></td></tr>
            </tbody>
          </table>
        </div>

        <h2>Which aluminum gutter colors are in stock?</h2>
        <p>Dun-Rite stocks nine baked-enamel colors: white, almond, cream, classic bronze, charcoal, brown, terratone, royal brown and forest green. Those need no special order. More than 25 colors exist in the line, and anything outside the stocked nine is ordered, which adds one to two weeks.</p>
        <figure class="photo-figure">
          <?php echo dr_picture('gutter-colour-profiles', 'Sample gutter profiles in dark grey, red, white and blue finishes', ['sizes' => '(max-width: 960px) 100vw, 60vw']); ?>
          <figcaption>Sample gutter profiles in several factory finishes.</figcaption>
        </figure>
        <p>The finish is baked on at the factory rather than painted on site, and it is made to resist fading for 20 years or longer. The darker stocked colors (classic bronze, charcoal, royal brown) tend to disappear against dark trim and shingles, while white, almond and cream suit light fascia.</p>

        <h2>Should you choose aluminum or copper gutters?</h2>
        <p>Choose aluminum when you want a rust-proof gutter in a color that matches the trim at the lowest installed price. Choose copper when the gutter is meant to be seen and to outlast the roof. Dun-Rite installs both and prices them very differently.</p>
        <div class="table-wrap">
          <table class="data-table">
            <caption>Aluminum and copper compared, using Dun-Rite's own price and service-life figures.</caption>
            <thead><tr><th scope="col">Material</th><th scope="col">Installed price</th><th scope="col">Service life</th><th scope="col">Look over time</th></tr></thead>
            <tbody>
              <tr><th scope="row">Aluminum</th><td>$1,200 – $3,500 for most homes</td><td>20 – 30 years</td><td>Factory color, made to resist fading</td></tr>
              <tr><th scope="row"><a href="/services/copper-gutters/">Copper</a></th><td>$25 – $40 per linear foot</td><td>50 to 100+ years</td><td>Bright, then bronze, then brown, then green patina</td></tr>
            </tbody>
          </table>
        </div>
        <p>Either material is formed and hung the same way; the details are on the <a href="/services/seamless-gutter-installation/">seamless gutter installation page</a>, and every service is listed on the <a href="/services/">gutter services overview</a>.</p>

        <h2>What do people ask about aluminum gutters?</h2>
        <p>The questions Dun-Rite hears most about aluminum gutters are about gauge, color matching and rust. The short answers are below, and anything not covered can be asked by calling the office at (601) 750-1800 during business hours.</p>
        <?php echo dr_faq_list($faqs); ?>

        <p class="last-updated">Last updated: <?php echo date('F Y', filemtime(__FILE__)); ?></p>
      </article>

      <aside class="page-rail" aria-label="Key facts">
        <div class="rail-card rail-card--tint">
          <h3>Warranty</h3>
          <p>25-year manufacturer warranty on materials and a 2-year labor warranty on the installation.</p>
        </div>
        <div class="rail-card">
          <h3>Stocked colors</h3>
          <ul><li>White, almond, cream</li><li>Classic bronze, charcoal, brown</li><li>Terratone, royal brown, forest green</li></ul>
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
  $closingHeading  = 'Pick a color and get a price';
  include $_SERVER['DOCUMENT_ROOT'] . '/includes/service-close.php';
  ?>

</main>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
