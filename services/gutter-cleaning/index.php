<?php
/** Service page — gutter-cleaning */
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';

$pageTitle       = 'Gutter Cleaner in Madison & Jackson, MS | Gutter Cleaning';
$pageDescription = 'Dun-Rite is a gutter cleaner serving Madison and Jackson, MS. $150–$300 per cleaning: debris removed by hand, downspouts flushed, photo report. Call (601) 750-1800.';
$currentPage     = 'services';
$canonicalUrl    = $siteUrl . '/services/gutter-cleaning/';
$pageType        = 'service';
$serviceSlug     = 'gutter-cleaning';
$service         = dr_service($serviceSlug);
$heroFormService = $service['name'];

$faqs = [
    ['q' => 'How often should gutters be cleaned in central Mississippi?',
     'a' => 'Twice a year for most homes: late spring, after the pollen and oak catkins have dropped, and fall, after the leaves come down. Properties under heavy tree canopy may need service every quarter.'],
    ['q' => 'What does a recurring gutter maintenance plan cost?',
     'a' => 'Recurring plans, either twice a year or quarterly, are priced 15 to 25 percent below the single-visit price of $150 to $300.'],
    ['q' => 'Will I get proof the gutters were actually cleaned?',
     'a' => 'Yes. Each visit ends with a written report that includes photos, sent after the visit. The report also covers the fascia inspection and anything the crew found loose.'],
    ['q' => 'Does a cleaning include the downspouts?',
     'a' => 'Yes. Every downspout is flushed at high pressure and the splash block at each drain is checked, because a clear gutter that feeds a clogged downspout still overflows.'],
];

$schemaNodes = [
    dr_breadcrumb_node(['Services' => '/services/', $service['name'] => '/services/' . $serviceSlug . '/']),
    dr_service_node($service, 'Gutter cleaning and maintenance: hand removal of debris, high-pressure downspout flushing, fascia inspection and a written photo report. $150 to $300 per cleaning; recurring plans 15 to 25 percent less.'),
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
        <p class="hero-eyebrow">Gutter cleaner &middot; Maintenance</p>
        <h1>Gutter Cleaning &amp; Maintenance in Madison and Jackson, MS</h1>
        <p class="hero-answer">Dun-Rite Seamless Gutters, Inc. is a gutter cleaner and installer based in Madison, Mississippi. A cleaning costs $150 to $300: debris is removed by hand, every downspout is flushed, and a written report with photos reaches you the same day. Recurring plans cost 15 to 25 percent less per visit.</p>
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
        <h2>How much does gutter cleaning cost near Madison, MS?</h2>
        <p>Gutter cleaning from Dun-Rite Seamless Gutters, Inc. typically costs $150 to $300 per visit. Customers on a recurring plan, either twice a year or quarterly, pay 15 to 25 percent less than the single-visit price. The size of the house and how much debris is in the trough set where a visit falls in that range.</p>
        <dl class="fact-list">
          <div><dt>Single cleaning</dt><dd>$150 – $300</dd></div>
          <div><dt>Recurring plan</dt><dd>15 – 25% off each visit</dd></div>
          <div><dt>Usual schedule</dt><dd>Late spring and fall</dd></div>
          <div><dt>Report</dt><dd>Written, with photos, same day</dd></div>
        </dl>

        <h2>What does a Dun-Rite gutter cleaning include?</h2>
        <p>A Dun-Rite gutter cleaning includes six things, starting with debris lifted out of the trough by hand. The visit doubles as a maintenance inspection, which is why it ends with a written report.</p>
        <ol class="steps">
          <li><strong>Debris removed by hand</strong>Everything in the gutter trough is taken out by hand.</li>
          <li><strong>Downspouts flushed</strong>Each downspout is flushed at high pressure until it runs clear.</li>
          <li><strong>Splash blocks checked</strong>The splash block at every drain is checked so water leaves the foundation line.</li>
          <li><strong>Fascia inspected</strong>The fascia board behind the gutter is inspected and photographed.</li>
          <li><strong>Hangers checked</strong>Hangers and spikes are checked for anything that has worked loose.</li>
          <li><strong>Report sent</strong>A written report with photos is delivered once the visit is finished.</li>
        </ol>
        <figure class="photo-figure">
          <?php echo dr_picture('gutter-cleaning-leaves', 'Gloved hand lifting wet autumn leaves out of a white gutter', ['sizes' => '(max-width: 960px) 100vw, 60vw']); ?>
          <figcaption>Leaves being lifted out of a gutter by hand.</figcaption>
        </figure>

        <h2>When should gutters be cleaned around Jackson?</h2>
        <p>Clean gutters around Jackson twice a year: once in late spring and once in fall. Spring is not about leaves. Oaks drop catkins and pines shed pollen, and that fine material packs down at the outlets. Fall is the leaf drop. Lots under heavy canopy may need a quarterly visit.</p>
        <div class="table-wrap">
          <table class="data-table">
            <caption>The cleaning calendar Dun-Rite recommends for central Mississippi homes.</caption>
            <thead><tr><th scope="col">Visit</th><th scope="col">Timing</th><th scope="col">What is in the gutter</th></tr></thead>
            <tbody>
              <tr><th scope="row">Spring</th><td>Late spring</td><td>Pollen and oak catkins</td></tr>
              <tr><th scope="row">Fall</th><td>After leaf drop</td><td>Leaves, pine straw and twigs</td></tr>
              <tr><th scope="row">Quarterly</th><td>Every three months</td><td>For heavy-canopy properties only</td></tr>
            </tbody>
          </table>
        </div>

        <h2>What does gutter maintenance prevent?</h2>
        <p>Regular gutter maintenance prevents overflow, and overflow is what rots fascia and soaks the ground beside the foundation. A clogged gutter fills, spills over the front edge and the back edge, and wets the wood it is fastened to. Mississippi averages well over 50 inches of rain a year, so a blocked outlet rarely gets a dry month to recover.</p>
        <p>If the report from a cleaning shows a run that holds water or a corner that drips, the fix is on the <a href="/services/gutter-repair-replacement/">gutter repair page</a>. If the same trees fill the gutters every season, compare the cost of cleaning with <a href="/services/gutter-guards/">a gutter guard system</a>. Everything else Dun-Rite does is on the <a href="/services/">services overview</a>.</p>

        <h2>What do customers ask about gutter cleaning?</h2>
        <p>Customers ask Dun-Rite how often to clean, what a maintenance plan costs, whether they will see proof of the work and whether downspouts are included. The short answers are below, and anything not covered can be asked by calling the office at (601) 750-1800 during business hours.</p>
        <?php echo dr_faq_list($faqs); ?>

        <p class="last-updated">Last updated: <?php echo date('F Y', filemtime(__FILE__)); ?></p>
      </article>

      <aside class="page-rail" aria-label="Key facts">
        <div class="rail-card rail-card--tint">
          <h3>Every visit includes</h3>
          <ul><li>Hand removal of debris</li><li>Downspouts flushed</li><li>Fascia photos</li><li>Hanger and spike check</li><li>Written report with photos</li></ul>
        </div>
        <div class="rail-card">
          <h3>Cleaning near you</h3>
          <ul><li><a href="/service-areas/madison/">Gutter cleaning in Madison</a></li><li><a href="/service-areas/ridgeland/">Gutter cleaning in Ridgeland</a></li><li><a href="/service-areas/jackson/">Gutter cleaning in Jackson</a></li></ul>
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
  $relatedServices = ['gutter-guards', 'gutter-repair-replacement', 'custom-downspouts'];
  $closingHeading  = 'Put your gutters on a schedule';
  include $_SERVER['DOCUMENT_ROOT'] . '/includes/service-close.php';
  ?>

</main>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
