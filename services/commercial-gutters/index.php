<?php
/** Service page — commercial-gutters */
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';

$pageTitle       = 'Commercial Gutter Installer in Jackson, MS | Dun-Rite';
$pageDescription = 'Dun-Rite is a commercial gutter installer based in Madison, MS. 7-inch and 8-inch gutters for office, retail, multi-family and industrial buildings. Call (601) 750-1800.';
$currentPage     = 'services';
$canonicalUrl    = $siteUrl . '/services/commercial-gutters/';
$pageType        = 'service';
$serviceSlug     = 'commercial-gutters';
$service         = dr_service($serviceSlug);
$heroFormService = $service['name'];

$faqs = [
    ['q' => 'Does Dun-Rite take commercial gutter projects outside the Jackson metro?',
     'a' => 'For larger commercial projects, yes: Dun-Rite travels beyond the roughly 30-mile radius it keeps for residential work. Projects elsewhere in Mississippi are evaluated case by case on distance, scope and schedule, so call (601) 750-1800 with the location and drawings.'],
    ['q' => 'Can Dun-Rite provide a certificate of insurance for our project?',
     'a' => 'Yes. Dun-Rite carries Workers\' Compensation and General Liability insurance and issues a certificate of insurance with the builder named as additional insured.'],
    ['q' => 'Does Dun-Rite bill in AIA format?',
     'a' => 'Yes, on request. Larger commercial projects are billed on standard contractor terms, and AIA-formatted billing is available.'],
    ['q' => 'Who runs the job on site?',
     'a' => 'Mark Dungan, who founded the company in 1996, supervises every commercial installation, and the project has a single point of contact from take-off through the final phase.'],
];

$schemaNodes = [
    dr_breadcrumb_node(['Services' => '/services/', $service['name'] => '/services/' . $serviceSlug . '/']),
    dr_service_node($service, 'Commercial gutter installation: 7-inch and 8-inch gutter profiles, high-flow downspouts and copper work for office, retail, multi-family and industrial buildings, with single-point project management.'),
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
        <p class="hero-eyebrow">Commercial gutter installer</p>
        <h1>Commercial Gutter Installation in Jackson &amp; Central Mississippi</h1>
        <p class="hero-answer">Dun-Rite Seamless Gutters, Inc. is a commercial gutter installer based in Madison, Mississippi. It installs 7-inch and 8-inch gutters and high-flow downspouts on office buildings, retail centers, multi-family complexes and industrial properties, and owner Mark Dungan supervises every commercial installation.</p>
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
        <h2>What commercial gutter systems does Dun-Rite install?</h2>
        <p>Dun-Rite Seamless Gutters, Inc. installs oversized 7-inch and 8-inch gutters with downspouts sized for high-flow runoff. Commercial roofs shed far more water per foot of eave than a house, so the residential 5-inch and 6-inch profiles are not used. Copper is available for premium commercial projects.</p>
        <div class="table-wrap">
          <table class="data-table">
            <caption>How Dun-Rite's commercial systems differ from its residential ones.</caption>
            <thead><tr><th scope="col">Component</th><th scope="col">Commercial</th><th scope="col">Residential, for comparison</th></tr></thead>
            <tbody>
              <tr><th scope="row">Gutter profile</th><td>7-inch and 8-inch</td><td>5-inch and 6-inch K-style</td></tr>
              <tr><th scope="row">Aluminum gauge</th><td>.040 and .050</td><td>.032</td></tr>
              <tr><th scope="row">Downspout</th><td>4x5 high-flow, about 2,000+ sq ft of roof per spout</td><td>3x4, about 1,200 sq ft per spout</td></tr>
              <tr><th scope="row">Premium option</th><td>Copper</td><td>Copper</td></tr>
            </tbody>
          </table>
        </div>
        <p>Downspout capacity is covered in detail on the <a href="/services/custom-downspouts/">custom downspouts page</a>, including the roof area each size can drain.</p>

        <h2>How does Dun-Rite run a commercial gutter project?</h2>
        <p>Dun-Rite runs a commercial project in six stages, starting before construction and ending with billing in the format the general contractor needs. One person manages the job throughout, and Mark Dungan supervises the installation himself.</p>
        <ol class="steps">
          <li><strong>Pre-construction consultation</strong>A meeting with the general contractor, architect or owner to settle scope.</li>
          <li><strong>Drawing review and take-off</strong>The drawings are reviewed and a material take-off is prepared.</li>
          <li><strong>Phased installation</strong>Work is installed in phases, with single-point project management.</li>
          <li><strong>Daily progress reports</strong>On large projects the contractor receives a progress report each day.</li>
          <li><strong>Billing</strong>Standard contractor terms, in AIA format on request.</li>
          <li><strong>Insurance paperwork</strong>A certificate of insurance naming the builder as additional insured.</li>
        </ol>
        <figure class="photo-figure">
          <?php echo dr_picture('dark-gutter-tile-roof', 'Long run of dark half-round gutter under a tile roof edge', ['sizes' => '(max-width: 960px) 100vw, 60vw']); ?>
          <figcaption>A long, continuous gutter run under a tile roof edge.</figcaption>
        </figure>

        <h2>Who does Dun-Rite work with on commercial jobs?</h2>
        <p>Dun-Rite works with general contractors, architects and property owners or managers, and it has ongoing partnerships with builders across central Mississippi. The company is a Mississippi-licensed corporation and a member of the Home Builders Association.</p>
        <p>Dun-Rite sees its highest commercial demand along Lakeland Drive in <a href="/service-areas/flowood/">Flowood</a> and builder work is the norm in the new construction around <a href="/service-areas/gluckstadt/">Gluckstadt</a>. Builders putting up homes rather than commercial space should start with <a href="/services/seamless-gutter-installation/">seamless gutter installation</a>.</p>

        <h2>How far does Dun-Rite travel for commercial work?</h2>
        <p>Dun-Rite travels beyond its usual 30-mile radius for larger commercial projects. Residential work stays within 14 cities around Madison, but commercial projects typically widen that area. Out-of-area requests are judged on distance, project scope and the current schedule, so the fastest answer is a phone call with the location and the drawings.</p>
        <p>Back to <a href="/services/">all Dun-Rite gutter services</a>.</p>

        <h2>What do contractors and property managers ask?</h2>
        <p>Contractors and property managers ask Dun-Rite about travel outside the metro, certificates of insurance, billing format and who supervises the work. The short answers are below, and anything not covered can be asked by calling the office at (601) 750-1800 during business hours.</p>
        <?php echo dr_faq_list($faqs); ?>

        <p class="last-updated">Last updated: <?php echo date('F Y', filemtime(__FILE__)); ?></p>
      </article>

      <aside class="page-rail" aria-label="Key facts">
        <div class="rail-card rail-card--tint">
          <h3>For the GC</h3>
          <ul><li>Drawing review and take-off</li><li>Single point of contact</li><li>Daily progress reports on large jobs</li><li>AIA billing on request</li><li>COI naming builder as additional insured</li></ul>
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
  $relatedServices = ['custom-downspouts', 'copper-gutters', 'gutter-repair-replacement'];
  $closingHeading  = 'Send Dun-Rite your drawings';
  include $_SERVER['DOCUMENT_ROOT'] . '/includes/service-close.php';
  ?>

</main>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
