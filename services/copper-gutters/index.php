<?php
/** Service page — copper-gutters */
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';

$pageTitle       = 'Copper Gutter Installer in Madison & Jackson, MS | Dun-Rite';
$pageDescription = 'Dun-Rite is a copper gutter installer in Madison, MS that hand-solders every seam. $25–$40 per linear foot installed; 16, 20 and 24 oz copper. Call (601) 750-1800.';
$currentPage     = 'services';
$canonicalUrl    = $siteUrl . '/services/copper-gutters/';
$pageType        = 'service';
$serviceSlug     = 'copper-gutters';
$service         = dr_service($serviceSlug);
$heroFormService = $service['name'];

$faqs = [
    ['q' => 'Will copper gutters turn green, and how long does it take?',
     'a' => 'Yes. New copper is bright for about a year, bronzes in years two and three, turns brown by years five to seven and reaches the classic verdigris green after ten to fifteen years or more. The patina is a protective layer, not damage.'],
    ['q' => 'How long do copper gutters last?',
     'a' => 'Dun-Rite gives copper a service life of 50 to 100 years or more. That is two to three times the life of an aluminum system, which is why copper is usually chosen for houses meant to be kept for generations.'],
    ['q' => 'Can copper be added to part of a house only?',
     'a' => 'Yes. Dun-Rite builds standing-seam copper awnings, dormer caps and bay-window roof accents, so copper can go over an entry or a bay while the long runs stay aluminum.'],
    ['q' => 'Does copper carry the same warranty as aluminum?',
     'a' => 'Every Dun-Rite installation carries a 25-year manufacturer warranty on materials and a 2-year labor warranty on the workmanship.'],
];

$schemaNodes = [
    dr_breadcrumb_node(['Services' => '/services/', $service['name'] => '/services/' . $serviceSlug . '/']),
    dr_service_node($service, 'Hand-soldered copper gutters in 16, 20 and 24 ounce copper, in half-round, K-style, ogee and custom profiles, with standing-seam copper awnings and dormer caps. $25 to $40 per linear foot installed.'),
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
        <p class="hero-eyebrow">Gutter installer &middot; Copper specialty</p>
        <h1>Hand-Soldered Copper Gutters in Madison &amp; Jackson, MS</h1>
        <p class="hero-answer">Dun-Rite Seamless Gutters, Inc. is a gutter installer in Madison, Mississippi whose specialty since 1996 has been copper. Every seam is soldered by hand with lead-free tin solder. Copper costs $25 to $40 per linear foot installed, so a home with 200 feet of gutter runs about $5,000 to $8,000.</p>
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
        <h2>How much do copper gutters cost in Mississippi?</h2>
        <p>Copper gutters from Dun-Rite Seamless Gutters, Inc. cost $25 to $40 per linear foot installed. A typical home with 200 linear feet of gutter runs $5,000 to $8,000. The weight of the copper, the profile and how much decorative work the job includes decide where in that range a quote lands.</p>
        <dl class="fact-list">
          <div><dt>Price, installed</dt><dd>$25 – $40 per linear foot</dd></div>
          <div><dt>Typical 200-foot home</dt><dd>$5,000 – $8,000</dd></div>
          <div><dt>Copper stock</dt><dd>16, 20 and 24 oz</dd></div>
          <div><dt>Service life</dt><dd>50 to 100+ years</dd></div>
        </dl>

        <h2>Why does Dun-Rite solder copper seams instead of sealing them?</h2>
        <p>Dun-Rite solders copper seams because solder makes a permanent metal-to-metal bond, while a riveted or caulked joint depends on sealant that ages. Each seam is soldered by hand with lead-free tin solder. On a gutter expected to last half a century or more, the joint has to last as long as the copper.</p>
        <figure class="photo-figure">
          <?php echo dr_picture('copper-gutters-brick-awning', 'Copper gutter and a standing-seam copper awning on a red brick home', ['sizes' => '(max-width: 960px) 100vw, 60vw']); ?>
          <figcaption>A copper gutter with a standing-seam copper awning over the door of a brick home.</figcaption>
        </figure>

        <h2>Which copper profiles and details can you choose?</h2>
        <p>Dun-Rite forms copper gutters in half-round, K-style, ogee and custom profiles, in three weights of copper. Half-round is the traditional shape on older and historic homes; K-style and ogee have a molded face.</p>
        <ul>
          <li><strong>Copper weight:</strong> 16, 20 or 24 ounce stock.</li>
          <li><strong>Endcaps:</strong> rosette, shell, or a custom cap fabricated by hand.</li>
          <li><strong>Hangers:</strong> ornamental copper or brass.</li>
          <li><strong>Accents:</strong> standing-seam copper awnings, dormer caps and bay-window roofs.</li>
          <li><strong>Downspouts:</strong> round copper to match, covered on the <a href="/services/custom-downspouts/">custom downspouts page</a>.</li>
        </ul>
        <figure class="photo-figure">
          <?php echo dr_picture('copper-gutters-stucco-home', 'Two-story stucco home with copper gutters along each roofline', ['sizes' => '(max-width: 960px) 100vw, 60vw']); ?>
          <figcaption>Copper gutters along both rooflines of a two-story stucco home.</figcaption>
        </figure>

        <h2>How does copper patina change over the years?</h2>
        <p>Copper patina moves through four stages over roughly fifteen years: bright, bronze, brown and green. Nothing is applied to make it happen; air and rain do the work, and the layer that forms protects the metal underneath.</p>
        <div class="table-wrap">
          <table class="data-table">
            <caption>The patina timeline Dun-Rite gives copper customers.</caption>
            <thead><tr><th scope="col">Stage</th><th scope="col">When</th><th scope="col">What you see</th></tr></thead>
            <tbody>
              <tr><th scope="row">Bright</th><td>Year 1</td><td>New-penny copper</td></tr>
              <tr><th scope="row">Bronzing</th><td>Years 2 – 3</td><td>Deeper, duller bronze</td></tr>
              <tr><th scope="row">Brown</th><td>Years 5 – 7</td><td>Even brown patina</td></tr>
              <tr><th scope="row">Verdigris</th><td>Years 10 – 15 and later</td><td>The classic green</td></tr>
            </tbody>
          </table>
        </div>

        <h2>Where has Dun-Rite installed copper?</h2>
        <p>Dun-Rite has installed copper gutter systems on luxury homes, historic properties and commercial estates throughout central Mississippi since 1996. Copper is a natural fit for the mid-1800s houses near the square in <a href="/service-areas/canton/">Canton</a> and the courthouse in <a href="/service-areas/raymond/">Raymond</a>, where a painted aluminum gutter would look out of place.</p>
        <p>If copper is more than the project needs, the <a href="/services/aluminum-gutters/">aluminum gutter page</a> compares the two materials side by side, and the <a href="/services/">services overview</a> lists everything else Dun-Rite does.</p>

        <h2>What do homeowners ask before choosing copper?</h2>
        <p>Before choosing copper, homeowners ask Dun-Rite about the green patina, how long copper lasts, partial copper accents and the warranty. The short answers are below, and anything not covered can be asked by calling the office at (601) 750-1800 during business hours.</p>
        <?php echo dr_faq_list($faqs); ?>

        <p class="last-updated">Last updated: <?php echo date('F Y', filemtime(__FILE__)); ?></p>
      </article>

      <aside class="page-rail" aria-label="Key facts">
        <div class="rail-card rail-card--tint">
          <h3>Copper at a glance</h3>
          <ul><li>$25 – $40 per linear foot installed</li><li>Seams soldered by hand</li><li>Lead-free tin solder</li><li>Half-round, K-style, ogee, custom</li></ul>
        </div>
        <div class="rail-card rail-card--tint">
          <h3>Warranty</h3>
          <p>25-year manufacturer warranty on materials and a 2-year labor warranty on the installation.</p>
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
  $relatedServices = ['custom-downspouts', 'aluminum-gutters', 'seamless-gutter-installation'];
  $closingHeading  = 'Talk copper with Mark Dungan';
  include $_SERVER['DOCUMENT_ROOT'] . '/includes/service-close.php';
  ?>

</main>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
