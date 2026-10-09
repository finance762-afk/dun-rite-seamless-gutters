<?php
/** Service page — custom-downspouts */
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';

$pageTitle       = 'Downspout Installer in Madison & Jackson, MS | Dun-Rite';
$pageDescription = 'Dun-Rite is a gutter and downspout installer in Madison, MS. Round, 3x4 and 4x5 downspouts sized to your roof; underground drain tie-ins $300–$800. Call (601) 750-1800.';
$currentPage     = 'services';
$canonicalUrl    = $siteUrl . '/services/custom-downspouts/';
$pageType        = 'service';
$serviceSlug     = 'custom-downspouts';
$service         = dr_service($serviceSlug);
$heroFormService = $service['name'];

$faqs = [
    ['q' => 'What size downspout does a house need?',
     'a' => 'Dun-Rite recommends 3x4 downspouts for most homes. One 3x4 drains about 1,200 square feet of roof, twice what a standard 2x3 handles, and 2x3 downspouts are often undersized for Mississippi rain.'],
    ['q' => 'How much does an underground downspout drain cost?',
     'a' => 'An underground drainage tie-in costs $300 to $800 per drainage run. The length of the run and how hard the trench is to dig set the price.'],
    ['q' => 'Can I get round or copper downspouts?',
     'a' => 'Yes. Round profiles suit traditional homes, and decorative copper downspouts are made for architectural homes and to match copper gutters.'],
    ['q' => 'Can downspouts be replaced without replacing the gutters?',
     'a' => 'Yes, when the gutters are sound. Upsizing the downspouts and outlets is often the fix for a gutter that overflows in heavy rain even though it is clean.'],
];

$schemaNodes = [
    dr_breadcrumb_node(['Services' => '/services/', $service['name'] => '/services/' . $serviceSlug . '/']),
    dr_service_node($service, 'Custom downspouts in round, 3x4 and 4x5 profiles, decorative copper downspouts and underground drainage tie-ins. Tie-ins cost $300 to $800 per drainage run.'),
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
        <p class="hero-eyebrow">Gutter installer &middot; Downspouts</p>
        <h1>Custom Downspouts &amp; Drain Tie-Ins in Madison and Jackson, MS</h1>
        <p class="hero-answer">Dun-Rite Seamless Gutters, Inc. is a gutter installer in Madison, Mississippi that sizes and installs downspouts for homes and commercial buildings. A 3x4 downspout drains about twice the roof area of a standard 2x3, and underground drainage tie-ins cost $300 to $800 per run.</p>
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
        <h2>What size downspout does your roof need?</h2>
        <p>Most homes need 3x4 downspouts, which drain about 1,200 square feet of roof each. Dun-Rite Seamless Gutters, Inc. sizes downspouts by the roof area that feeds them. The 2x3 size that comes standard on many houses handles only about half that, and in a Mississippi downpour it is often the reason a clean gutter still overflows.</p>
        <div class="table-wrap">
          <table class="data-table">
            <caption>Downspout sizes and the roof area each can drain, as Dun-Rite sizes them.</caption>
            <thead><tr><th scope="col">Downspout</th><th scope="col">Roof area per spout</th><th scope="col">Where it is used</th></tr></thead>
            <tbody>
              <tr><th scope="row">2x3 standard</th><td>About 600 sq ft</td><td>Common on existing homes; often undersized here</td></tr>
              <tr><th scope="row">3x4 oversized</th><td>About 1,200 sq ft</td><td>Recommended for most residential roofs</td></tr>
              <tr><th scope="row">4x5 high-flow</th><td>About 2,000+ sq ft</td><td>Commercial buildings and large estates</td></tr>
            </tbody>
          </table>
        </div>
        <p>As a worked example, a 2,400 square foot roof needs four 2x3 downspouts to move the same water as two 3x4s. Fewer, larger downspouts also mean fewer places for water to land beside the house.</p>

        <h2>Which downspout styles does Dun-Rite make?</h2>
        <p>Dun-Rite makes rectangular downspouts in 2x3, 3x4 and 4x5, round downspouts, and decorative copper downspouts. The style follows the house and the size follows the roof.</p>
        <ul>
          <li><strong>Round:</strong> for traditional homes, and the usual partner for half-round gutters.</li>
          <li><strong>3x4 and 4x5 rectangular:</strong> for high-volume runoff on larger homes and <a href="/services/commercial-gutters/">commercial buildings</a>.</li>
          <li><strong>Decorative copper:</strong> for architectural homes and to finish a <a href="/services/copper-gutters/">hand-soldered copper gutter system</a>.</li>
        </ul>
        <figure class="photo-figure">
          <?php echo dr_picture('downspout-fitting', 'Installer strapping a dark round downspout to a stucco wall below the eave', ['sizes' => '(max-width: 960px) 100vw, 60vw']); ?>
          <figcaption>A round downspout being strapped to a stucco wall.</figcaption>
        </figure>

        <h2>How much does an underground drainage tie-in cost?</h2>
        <p>An underground drainage tie-in from Dun-Rite costs $300 to $800 per drainage run. The downspout connects to a buried line that carries roof water away from the house instead of releasing it at the foundation. Run length and trenching difficulty, such as roots, slope and hard clay, set the price.</p>
        <dl class="fact-list">
          <div><dt>Tie-in price</dt><dd>$300 – $800 per run</dd></div>
          <div><dt>Priced by</dt><dd>Length and trenching difficulty</dd></div>
          <div><dt>Recommended residential size</dt><dd>3x4</dd></div>
        </dl>
        <p>Tie-ins are most practical where there is room to carry the water. They are practical on the larger lots in <a href="/service-areas/florence/">Florence</a>, and on the acreage around <a href="/service-areas/bolton/">Bolton</a> runs of 50 feet or more are common. On a tight suburban lot, a splash block or a short extension may be all the yard allows.</p>
        <figure class="photo-figure">
          <?php echo dr_picture('downspout-elbow-eave', 'White downspout elbow connecting a gutter to the wall under a vented soffit', ['sizes' => '(max-width: 960px) 100vw, 60vw']); ?>
          <figcaption>A downspout elbow carrying water from the gutter outlet back to the wall.</figcaption>
        </figure>

        <h2>Why does downspout placement matter on clay soil?</h2>
        <p>Downspout placement matters because every gallon the roof collects comes out at the bottom of a downspout. Much of the Jackson metro is built on expansive Yazoo clay, which swells when soaked. Releasing roof water right at the slab concentrates it exactly where that movement does the most harm, so each outlet should send water away from the foundation.</p>
        <p>Downspouts are normally planned as part of a <a href="/services/seamless-gutter-installation/">new gutter installation</a>, but they can be changed on their own. Every service is listed on the <a href="/services/">services overview</a>.</p>

        <h2>What do people ask about downspouts?</h2>
        <p>People ask Dun-Rite what size downspout a house needs, what a buried drain costs, whether round or copper is available and whether downspouts can be replaced on their own.</p>
        <?php echo dr_faq_list($faqs); ?>

        <p class="last-updated">Last updated: <?php echo date('F Y', filemtime(__FILE__)); ?></p>
      </article>

      <aside class="page-rail" aria-label="Key facts">
        <div class="rail-card rail-card--tint">
          <h3>Roof area per downspout</h3>
          <ul><li>2x3: about 600 sq ft</li><li>3x4: about 1,200 sq ft</li><li>4x5: about 2,000+ sq ft</li></ul>
        </div>
        <div class="rail-card">
          <h3>Underground tie-ins</h3>
          <p>$300 to $800 per drainage run, depending on length and trenching.</p>
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
  $relatedServices = ['seamless-gutter-installation', 'copper-gutters', 'gutter-repair-replacement'];
  $closingHeading  = 'Get your downspouts sized';
  include $_SERVER['DOCUMENT_ROOT'] . '/includes/service-close.php';
  ?>

</main>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
