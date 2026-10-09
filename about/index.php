<?php
/** About — Mark Dungan and Dun-Rite Seamless Gutters, Inc. */
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';

$pageTitle       = 'About Dun-Rite Seamless Gutters | Mark Dungan, Madison MS';
$pageDescription = 'Mark Dungan founded Dun-Rite Seamless Gutters, Inc. in Madison, MS in 1996. Who does the work, what the company is licensed and insured for, and how to reach it.';
$currentPage     = 'about';
$canonicalUrl    = $siteUrl . '/about/';
$pageType        = 'about';

$schemaNodes = [
    dr_breadcrumb_node(['About' => '/about/']),
    ['@type' => 'AboutPage', 'url' => $siteUrl . '/about/', 'name' => 'About ' . $siteName, 'about' => ['@id' => $siteUrl . '/#business']],
    ['@type' => 'Person', '@id' => $siteUrl . '/#owner', 'name' => $ownerName, 'jobTitle' => 'Founder and owner', 'worksFor' => ['@id' => $siteUrl . '/#business']],
];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>
<main id="main-content">

  <section class="hero hero--interior">
    <span class="grain" aria-hidden="true"></span>
    <div class="container">
      <div class="hero-text">
        <?php echo dr_breadcrumb(['About' => null]); ?>
        <p class="hero-eyebrow">Est. 1996 &middot; Madison, MS</p>
        <h1>About Dun-Rite Seamless Gutters, Inc.</h1>
        <p class="hero-answer">Dun-Rite Seamless Gutters, Inc. is a gutter company founded by Mark Dungan in Madison, Mississippi in 1996. It installs, repairs and cleans gutters for homeowners, builders and commercial property managers in 14 cities around Jackson, and Mark still inspects every estimate himself.</p>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="container split">
      <div class="about-copy">
        <p class="eyebrow">The owner</p>
        <h2>Who is Mark Dungan?</h2>
        <p>Mark Dungan is the founder and owner of Dun-Rite Seamless Gutters, Inc. He started the company in Madison in 1996 and has run it from there ever since. He personally inspects every estimate and supervises every commercial installation.</p>
        <p>The line on the company logo, "Rain Carrying Systems," is a plain description of the work. Every one of the eight services Dun-Rite offers is about gutters, downspouts or the drains they feed.</p>
        <p>Mark works with a small team of long-tenured installers who have trained on the company's installation standard: .032 gauge aluminum, hidden hangers every 24 inches, corners sealed inside and out, and a quarter inch of fall per 10 feet. That standard is described step by step on the <a href="/services/seamless-gutter-installation/">seamless gutter installation page</a>.</p>
      </div>
      <figure class="photo-figure">
        <?php echo dr_picture('mark-dungan-owner', 'Mark Dungan, founder of Dun-Rite Seamless Gutters, Inc.', ['sizes' => '(max-width: 900px) 100vw, 46vw']); ?>
        <figcaption>Mark Dungan, founder and owner.</figcaption>
      </figure>
    </div>
  </section>

  <?php
  $ctaBandHeading = 'Ask Mark to look at your gutters';
  include $_SERVER['DOCUMENT_ROOT'] . '/includes/cta-band.php';
  ?>

  <section class="section">
    <div class="container credentials">
      <div class="about-copy">
        <p class="eyebrow">Credentials</p>
        <h2>Is Dun-Rite licensed and insured?</h2>
        <p>Yes. Dun-Rite Seamless Gutters, Inc. is a Mississippi-licensed corporation and carries both Workers' Compensation and General Liability insurance. Builder partners can request a certificate of insurance with the builder named as additional insured.</p>
        <ul>
          <li>BBB accredited: <a href="https://www.bbb.org/us/ms/madison/profile/gutters/dun-rite-seamless-gutters-0523-145212331" target="_blank" rel="noopener">see the BBB profile</a></li>
          <li>HomeAdvisor approved</li>
          <li>Member of the Home Builders Association</li>
          <li>Listed on <a href="https://www.yelp.com/biz/dun-rite-seamless-gutters-madison-6" target="_blank" rel="noopener">Yelp</a>, <a href="https://www.facebook.com/dunritegutters/" target="_blank" rel="noopener">Facebook</a> and <a href="<?php echo h($gbpUrl); ?>" target="_blank" rel="noopener">Google</a></li>
        </ul>
      </div>
      <?php echo dr_picture('credential-badges', 'HomeAdvisor Top Rated, Best of HomeAdvisor 2016 Winner, BBB Accredited Business and Home Builders Association of Jackson badges', ['sizes' => '(max-width: 800px) 100vw, 46vw']); ?>
    </div>
  </section>

  <section class="section section--tint">
    <div class="container">
      <div class="section-head">
        <p class="eyebrow">In writing</p>
        <h2>What does Dun-Rite put in writing?</h2>
        <p>Dun-Rite Seamless Gutters, Inc. puts the estimate and both warranties in writing. Every installation carries a 25-year manufacturer warranty on materials and a 2-year labor warranty on the workmanship. The estimate itself is free, measured on site and carries no obligation.</p>
      </div>
      <div class="table-wrap">
        <table class="data-table">
          <caption>What a Dun-Rite customer receives, and when.</caption>
          <thead><tr><th scope="col">Document</th><th scope="col">What it covers</th><th scope="col">When you get it</th></tr></thead>
          <tbody>
            <tr><th scope="row">Written estimate</th><td>The price, after measuring on site and evaluating water flow</td><td>After the on-site visit</td></tr>
            <tr><th scope="row">Material warranty</th><td>25 years, from the manufacturer</td><td>With a new installation</td></tr>
            <tr><th scope="row">Labor warranty</th><td>2 years, from Dun-Rite</td><td>With a new installation</td></tr>
            <tr><th scope="row">Cleaning report</th><td>Written findings with photos, including the fascia</td><td>Same day as a <a href="/services/gutter-cleaning/">cleaning visit</a></td></tr>
            <tr><th scope="row">Storm damage file</th><td>Photos, damage assessment, itemized quote</td><td>For <a href="/services/gutter-repair-replacement/">insurance claims</a></td></tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="section-head">
        <p class="eyebrow">Customers</p>
        <h2>Who does Dun-Rite work for?</h2>
        <p>Dun-Rite Seamless Gutters, Inc. works for three kinds of customer: homeowners, builders and commercial property managers. The materials and the installation standard are the same for all three; what changes is the paperwork and the schedule.</p>
      </div>
      <div class="grid-3">
        <div class="card card-tint-1">
          <h3>Homeowners</h3>
          <p>Replacement systems, repairs, guards and cleaning on houses across the 14 cities. Written quotes and no trip charge.</p>
          <p><a href="/service-areas/">See the cities served</a></p>
        </div>
        <div class="card card-tint-2">
          <h3>Builders</h3>
          <p>Ongoing builder partnerships across central Mississippi, with certificates of insurance and standard contractor billing terms.</p>
          <p><a href="/services/seamless-gutter-installation/">Gutters for new homes</a></p>
        </div>
        <div class="card card-tint-3">
          <h3>Commercial property managers</h3>
          <p>Office, retail, multi-family and industrial buildings, with drawing review, phased installation and AIA billing on request.</p>
          <p><a href="/services/commercial-gutters/">Commercial gutter installation</a></p>
        </div>
      </div>
    </div>
  </section>

  <section class="closing-cta">
    <span class="grain" aria-hidden="true"></span>
    <div class="container">
      <div>
        <h2>Reach the Dun-Rite office</h2>
        <p><?php echo h($address['street']); ?>, <?php echo h($address['city']); ?>, <?php echo h($address['state']); ?> <?php echo h($address['zip']); ?>. <?php echo h($businessHours); ?>.</p>
      </div>
      <div class="actions">
        <a class="btn btn-accent btn-lg" href="/contact/">Contact Dun-Rite</a>
        <a class="btn btn-outline-white btn-lg" href="tel:+<?php echo h($phoneRaw); ?>"><?php echo icon('phone', 18); ?> Call <?php echo h($phone); ?></a>
      </div>
    </div>
  </section>

</main>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
