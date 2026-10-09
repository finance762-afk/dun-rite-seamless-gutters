<?php
/**
 * Homepage — Dun-Rite Seamless Gutters, Inc.
 * Cluster: seamless gutter installation + gutter repair, Madison / Jackson MS.
 */
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';

$pageTitle       = 'Seamless Gutters in Madison & Jackson, MS | Dun-Rite';
$pageDescription = 'Dun-Rite Seamless Gutters, Inc. is a gutter installer in Madison, MS, working since 1996. Seamless aluminum and copper gutters, repair, cleaning, guards. Call (601) 750-1800.';
$currentPage     = 'home';
$canonicalUrl    = $siteUrl . '/';
$pageType        = 'home';
$heroPreload     = 'home-brick-stucco-dark-gutters';

$faqs = [
    ['q' => 'How much do new seamless gutters cost in Mississippi?',
     'a' => 'Most homes Dun-Rite quotes fall between $1,200 and $3,500 for a complete seamless aluminum system. The figure moves with the linear footage, the number of stories and how many downspouts the roof needs. Removal and disposal of the old gutters is included in the quote.'],
    ['q' => 'Is Dunrite Gutters the same company as Dun-Rite Seamless Gutters, Inc.?',
     'a' => 'Yes. People search for the company as Dunrite Gutters, Dun-Rite Gutters and Dun Rite Seamless Gutters. They are all the same business: Dun-Rite Seamless Gutters, Inc., founded by Mark Dungan in 1996 and based at 115 Cherrybrook Dr in Madison, Mississippi.'],
    ['q' => 'What is the difference between seamless and sectional gutters?',
     'a' => 'Sectional gutters are sold in 10-foot pieces, so a 40-foot roofline has three joints that can open up and leak. A seamless gutter is one continuous piece per run, formed at your house from a coil of aluminum, with joints only at the corners and outlets.'],
    ['q' => 'How long does a gutter installation take?',
     'a' => 'Most single-story homes are finished in one day. Two-story homes and complicated rooflines take one to two days. Dun-Rite watches the forecast and moves the date for lightning or sustained rain; light drizzle does not stop an install.'],
    ['q' => 'How often should gutters be cleaned around Jackson?',
     'a' => 'Twice a year suits most central Mississippi homes: once in late spring after the pollen and oak catkins drop, and once in fall after the leaves come down. Lots under heavy tree canopy may need a visit every quarter.'],
    ['q' => 'What warranty comes with a Dun-Rite installation?',
     'a' => 'Every installation carries a 25-year manufacturer warranty on materials and a 2-year labor warranty from Dun-Rite on the workmanship.'],
    ['q' => 'Does Dun-Rite offer financing?',
     'a' => 'No. Dun-Rite does not offer in-house financing. Major credit cards are accepted, and larger commercial projects are billed on standard contractor terms.'],
];

// FAQPage JSON-LD is built by dr_faq_node() from the same array the page renders.
$schemaNodes = [
    ['@type' => 'WebSite', '@id' => $siteUrl . '/#website', 'url' => $siteUrl . '/', 'name' => $siteName, 'publisher' => ['@id' => $siteUrl . '/#business']],
    dr_faq_node($faqs),
];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>
<style>
/* Homepage-only layout (page-specific CSS lives with the page; shared rules are in framework.css) */
.hero--photo h1 { text-wrap: balance; }
.proof .proof-item b { white-space: nowrap; }
#prices.slant-top { background: linear-gradient(180deg, var(--color-paper-2), color-mix(in srgb, var(--color-paper-2) 70%, var(--color-surface))); }
#copper .photo-pair { transform: rotate(-1deg); }   /* slight offset so the copper pair reads as prints, not tiles */
#copper .photo-pair .photo-figure:last-child { margin-top: 2rem; }
.snap-grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(150px, 1fr)); gap: .8rem; margin: 1.4rem 0 0; padding: 0; list-style: none; }
.snap-grid { grid-template-columns: repeat(4, minmax(0, 206px)); justify-content: start; }
.snap-grid figure { margin: 0; border-radius: var(--radius); overflow: hidden; background: var(--color-surface); border: 1px solid var(--color-line); }
.snap-grid img { width: 100%; aspect-ratio: 1; object-fit: cover; filter: var(--photo-grade); }
.snap-grid figcaption { padding: .5rem .6rem .6rem; font-size: .8rem; line-height: 1.35; color: var(--color-ink-2); }
.owner-card { display: grid; grid-template-columns: 148px 1fr; gap: 1.25rem; align-items: center; }
.owner-card img { border-radius: var(--radius-lg); aspect-ratio: 1; object-fit: cover; width: 148px; height: 148px; }
@media (max-width: 520px) { .owner-card { grid-template-columns: 1fr; } }
@media (max-width: 640px) { .snap-grid { grid-template-columns: repeat(2, minmax(0, 1fr)); } }
.owner-wrap { display: grid; gap: 1rem; }
</style>
<main id="main-content">

  <section class="hero hero--photo">
    <div class="hero-bg"><?php echo dr_picture('home-brick-stucco-dark-gutters', 'Brick and stucco two-story home with dark gutters and downspouts along the roofline', ['eager' => true, 'sizes' => '100vw', 'class' => 'hero-img']); ?></div>
    <div class="hero-overlay"></div>
    <span class="grain" aria-hidden="true"></span>
    <div class="container hero-grid hero-grid--form">
      <div class="hero-text">
        <p class="hero-eyebrow">Madison, MS &middot; Est. 1996</p>
        <h1>Seamless Gutter Installation &amp; Repair in <span class="text-accent">Madison and Jackson, MS</span></h1>
        <p class="hero-answer">Dun-Rite Seamless Gutters, Inc. is a gutter installer based in Madison, Mississippi. Since 1996, Mark Dungan's crew has formed seamless aluminum gutters on site, hand-soldered copper gutters, and repaired and cleaned gutters on homes and commercial buildings in 14 cities around Jackson.</p>
        <div class="hero-actions">
          <a class="btn btn-accent btn-lg hero-form-open" href="/contact/">Request an estimate</a>
          <a class="link-call" href="tel:+<?php echo h($phoneRaw); ?>"><?php echo icon('phone', 18); ?> <?php echo h($phone); ?></a>
        </div>
        <ul class="hero-chips">
          <li><?php echo icon('ruler', 16); ?> Formed on site to your roofline</li>
          <li><?php echo icon('shield-check', 16); ?> 25-year material warranty</li>
          <li><?php echo icon('map-pin', 16); ?> No travel fees in 14 cities</li>
        </ul>
      </div>
      <?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/hero-form.php'; ?>
    </div>
  </section>

  <section class="proof" aria-label="Company facts">
    <div class="container proof-row">
      <div class="proof-item"><b>Est. <em>1996</em></b><span>Founded in Madison by Mark Dungan</span></div>
      <div class="proof-item"><b><em>14</em> cities</b><span>Served from 115 Cherrybrook Dr</span></div>
      <div class="proof-item"><b><em>25</em>-year</b><span>Manufacturer warranty on materials</span></div>
      <div class="proof-item"><b><em>2</em>-year</b><span>Labor warranty on every installation</span></div>
    </div>
  </section>

  <section class="section" id="services">
    <div class="container">
      <div class="section-head">
        <p class="eyebrow">What We Do</p>
        <h2>What gutter work does Dun-Rite do around <span class="text-accent">Madison and Jackson</span>?</h2>
        <p class="hero-answer">Dun-Rite Seamless Gutters, Inc. installs, repairs and cleans gutters. Its eight services cover new seamless aluminum and copper systems, guards, cleaning, repair, commercial buildings and downspouts, and each one links to a page with the prices, materials and steps for that job.</p>
      </div>
      <div class="services-grid">
        <?php echo dr_service_cards(array_column($services, 'slug'), '(max-width: 720px) 50vw, 25vw'); ?>
      </div>
    </div>
  </section>

  <section class="section section--tint slant-top section-divider" id="prices">
    <div class="container">
      <div class="section-head">
        <p class="eyebrow">Typical prices</p>
        <h2>How much do gutters cost in central Mississippi?</h2>
        <p>A complete seamless aluminum gutter system from Dun-Rite Seamless Gutters, Inc. runs $1,200 to $3,500 on most Mississippi homes. Copper is priced by the foot, and cleaning, guards and repairs are priced by the visit, the foot or the section. The table lists each range; your written quote follows an on-site measurement.</p>
      </div>
      <div class="table-wrap">
        <table class="data-table">
          <caption>Dun-Rite's typical price ranges. Your quote depends on linear footage, stories and downspout count.</caption>
          <thead>
            <tr><th scope="col">Job</th><th scope="col">Typical price</th><th scope="col">Priced by</th><th scope="col">Good to know</th></tr>
          </thead>
          <tbody>
            <tr><th scope="row"><a href="/services/seamless-gutter-installation/">Seamless aluminum gutters</a></th><td>$1,200 – $3,500</td><td>Whole home</td><td>.032 gauge, 5-inch or 6-inch K-style; old gutters removed</td></tr>
            <tr><th scope="row"><a href="/services/copper-gutters/">Copper gutters</a></th><td>$25 – $40</td><td>Linear foot, installed</td><td>A 200-foot home runs about $5,000 – $8,000</td></tr>
            <tr><th scope="row"><a href="/services/gutter-guards/">Gutter guards</a></th><td>$3 – $14</td><td>Linear foot, installed</td><td>Foam at the low end, fine mesh at the high end</td></tr>
            <tr><th scope="row"><a href="/services/gutter-cleaning/">Gutter cleaning</a></th><td>$150 – $300</td><td>Visit</td><td>Recurring plans are 15–25% less per visit</td></tr>
            <tr><th scope="row"><a href="/services/gutter-repair-replacement/">Gutter repair</a></th><td>$150 – $600</td><td>Section</td><td>Full replacement starts at $1,200</td></tr>
            <tr><th scope="row"><a href="/services/custom-downspouts/">Underground drain tie-in</a></th><td>$300 – $800</td><td>Drainage run</td><td>Depends on length and how hard the trench is to dig</td></tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <section class="section" id="process">
    <div class="container split">
      <div class="about-copy reveal-left">
        <p class="eyebrow">The Dun-Rite process</p>
        <h2>How does a Dun-Rite gutter job go, start to finish?</h2>
        <p>A Dun-Rite gutter job has four steps: an on-site estimate, forming the gutters at your house, hanging them, and hauling the old ones away. Mark Dungan personally inspects every estimate, and most single-story homes are finished in one day.</p>
        <ol class="steps">
          <li><strong>On-site estimate</strong>The roofline is measured, the water-flow needs of the roof are evaluated, and you get a written quote. The estimate is free and carries no obligation.</li>
          <li><strong>Formed at your house</strong>Each section is formed on site with truck-mounted equipment to match your roofline, so there is no joint mid-run.</li>
          <li><strong>Hung and pitched</strong>Hidden hangers go in every 24 inches, corners are sealed inside and out, and each run falls a quarter inch per 10 feet toward its downspout.</li>
          <li><strong>Old gutters removed</strong>Removal and disposal of the old system is part of every quote, and the finished job is covered by the material and labor warranties.</li>
        </ol>
      </div>
      <div class="reveal-right">
        <figure class="photo-figure">
          <?php echo dr_picture('covered-patio-bronze-gutters', 'Rear covered patio on a light stucco home with a bronze gutter and downspout at the roof corner', ['sizes' => '(max-width: 900px) 100vw, 46vw']); ?>
          <figcaption>A bronze gutter and downspout at the corner of a rear covered patio.</figcaption>
        </figure>
      </div>
    </div>
  </section>

  <section class="section on-dark" id="copper">
    <span class="grain" aria-hidden="true"></span>
    <div class="container split">
      <div class="reveal-left">
        <div class="photo-pair">
          <figure class="photo-figure">
            <?php echo dr_picture('copper-gutters-brick-awning', 'Copper gutter and a standing-seam copper awning on a red brick home', ['sizes' => '(max-width: 640px) 100vw, 24vw']); ?>
          </figure>
          <figure class="photo-figure">
            <?php echo dr_picture('copper-gutters-stucco-home', 'Two-story stucco home with copper gutters along each roofline', ['sizes' => '(max-width: 640px) 100vw, 24vw']); ?>
          </figure>
        </div>
      </div>
      <div class="about-copy reveal-right">
        <p class="eyebrow">Signature work</p>
        <h2>Why do people call Dun-Rite for copper gutters?</h2>
        <p>Dun-Rite Seamless Gutters, Inc. hand-solders every copper seam with lead-free tin solder instead of riveting or caulking it. Copper has been the company's specialty since 1996, on luxury homes, historic properties and commercial estates across central Mississippi.</p>
        <p>Copper runs $25 to $40 per linear foot installed and comes in 16, 20 and 24 ounce stock. It starts bright, bronzes within two or three years and reaches the green verdigris most people picture after ten to fifteen.</p>
        <p><a class="btn btn-outline-white" href="/services/copper-gutters/">See copper profiles and the patina timeline</a></p>
      </div>
    </div>
  </section>

  <section class="section" id="work">
    <div class="container">
      <div class="section-head">
        <p class="eyebrow">From the job file</p>
        <h2>What does Dun-Rite's finished work look like?</h2>
        <p>These are job snapshots from Dun-Rite Seamless Gutters, Inc.: dark and bronze gutters on brick and stucco homes, downspouts on two-story walls, and copper awnings over windows. Each caption says only what the photo shows, and the photos are small because they are phone snapshots.</p>
      </div>
      <ul class="snap-grid">
        <li><figure><?php echo dr_picture('job-porch-corner-downspout', 'Dark downspout running down the corner of a covered porch with a wood column', ['sizes' => '180px']); ?><figcaption>Dark downspout at a covered-porch corner</figcaption></figure></li>
        <li><figure><?php echo dr_picture('job-balcony-home-gutters', 'Dark gutters on the roof over a second-floor balcony', ['sizes' => '180px']); ?><figcaption>Dark gutters over a second-floor balcony</figcaption></figure></li>
        <li><figure><?php echo dr_picture('job-copper-awnings-brick', 'Copper standing-seam awnings over the windows of a brick home with a copper downspout', ['sizes' => '180px']); ?><figcaption>Copper awnings and downspout on brick</figcaption></figure></li>
        <li><figure><?php echo dr_picture('job-brick-two-story-downspouts', 'Dark downspouts running down a two-story brick wall', ['sizes' => '180px']); ?><figcaption>Downspouts on a two-story brick wall</figcaption></figure></li>
        <li><figure><?php echo dr_picture('job-screened-porch-gutters', 'Dark gutter along the roof edge above a screened porch', ['sizes' => '180px']); ?><figcaption>Dark gutter above a screened porch</figcaption></figure></li>
        <li><figure><?php echo dr_picture('job-columned-home-arches', 'Two-story home with columns and arched openings and gutters at both roof levels', ['sizes' => '180px']); ?><figcaption>Two-story home with columns and arches</figcaption></figure></li>
        <li><figure><?php echo dr_picture('job-dormer-home-snow', 'Front porch gutters on a home with three dormers after a snowfall', ['sizes' => '180px']); ?><figcaption>Porch gutters on a dormered home, in snow</figcaption></figure></li>
        <li><figure><?php echo dr_picture('job-dormer-porch-roofline', 'Porch roofline with white columns below a dormered roof', ['sizes' => '180px']); ?><figcaption>Porch roofline below two dormers</figcaption></figure></li>
      </ul>
    </div>
  </section>
  <?php
  // Recent work from the Google Business Profile feed: renders nothing until the profile has posts or photos.
  require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/recent-work.php';
  echo p1_recent_work($slug, ['heading' => 'Recent jobs around Madison and Jackson', 'limit' => 8]);
  ?>

  <section class="section section--tint edge-curve-top section-divider" id="about">
    <div class="container credentials">
      <div class="about-copy">
        <p class="eyebrow">Who you are hiring</p>
        <h2>Who is behind Dun-Rite Seamless Gutters?</h2>
        <p>Mark Dungan founded Dun-Rite Seamless Gutters, Inc. in Madison, Mississippi in 1996 and still supervises every commercial installation himself. The company is a Mississippi-licensed corporation that carries Workers' Compensation and General Liability insurance.</p>
        <ul>
          <li>BBB accredited, with a <a href="https://www.bbb.org/us/ms/madison/profile/gutters/dun-rite-seamless-gutters-0523-145212331" target="_blank" rel="noopener">public BBB profile</a></li>
          <li>HomeAdvisor approved</li>
          <li>Member of the Home Builders Association</li>
        </ul>
        <p><a class="btn btn-secondary" href="/about/">Read how Mark runs the company</a></p>
      </div>
      <div class="owner-wrap">
        <div class="owner-card card">
          <?php echo dr_picture('mark-dungan-owner', 'Mark Dungan, founder of Dun-Rite Seamless Gutters, Inc.', ['sizes' => '148px']); ?>
          <div>
            <h3>Mark Dungan</h3>
            <p>Founder and owner. Mark personally inspects every estimate.</p>
          </div>
        </div>
        <?php echo dr_picture('credential-badges', 'HomeAdvisor Top Rated, Best of HomeAdvisor 2016 Winner, BBB Accredited Business and Home Builders Association of Jackson badges', ['sizes' => '(max-width: 800px) 100vw, 40vw']); ?>
      </div>
    </div>
  </section>

  <section class="section" id="areas">
    <div class="container">
      <div class="section-head">
        <p class="eyebrow">Service area</p>
        <h2>Which cities does Dun-Rite serve?</h2>
        <p>Dun-Rite Seamless Gutters, Inc. serves 14 cities within roughly 30 miles of its Madison office, across Madison, Hinds and Rankin counties. There are no travel fees, fuel surcharges or trip charges anywhere inside that area.</p>
      </div>
      <ul class="pill-links">
        <?php foreach ($serviceAreaData as $homeArea): ?>
        <li><a href="/service-areas/<?php echo h($homeArea['slug']); ?>/">Gutters in <?php echo h($homeArea['name']); ?></a></li>
        <?php endforeach; ?>
      </ul>
      <p class="photo-note" style="margin-top:1rem">Not sure whether your address is covered? The <a href="/service-areas/">service area page has a town checker</a> and a note on each city.</p>
    </div>
  </section>

  <section class="section section--tint" id="faq">
    <div class="container">
      <div class="section-head">
        <p class="eyebrow">Common questions</p>
        <h2>What do homeowners ask Dun-Rite before hiring?</h2>
        <p>Homeowners mostly ask Dun-Rite Seamless Gutters, Inc. about price, timing, cleaning schedules and the warranty. The answers below are the ones the company gives; the <a href="/faq/">full gutter FAQ</a> covers materials and service areas in more detail.</p>
      </div>
      <?php echo dr_faq_list($faqs); ?>
    </div>
  </section>

  <section class="closing-cta">
    <span class="grain" aria-hidden="true"></span>
    <div class="container">
      <div>
        <h2>Get a written gutter quote from Mark's crew</h2>
        <p>Call <?php echo h($phone); ?> or send the form. The office answers <?php echo h($businessHours); ?>, and most estimate visits are scheduled within 48 hours.</p>
      </div>
      <div class="actions">
        <a class="btn btn-accent btn-lg" href="/contact/" data-open-estimate>Request an estimate</a>
        <a class="btn btn-outline-white btn-lg" href="tel:+<?php echo h($phoneRaw); ?>"><?php echo icon('phone', 18); ?> Call <?php echo h($phone); ?></a>
      </div>
    </div>
  </section>

</main>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
