<?php
/** FAQ — answers taken from Dun-Rite's own published answers (llms-full.txt) */
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';

$pageTitle       = 'Gutter FAQ for Madison & Jackson, MS | Dun-Rite';
$pageDescription = 'Dun-Rite Seamless Gutters, Inc. answers gutter questions for Madison and Jackson, MS: cost, materials, installation time, warranty and service area. Call (601) 750-1800.';
$currentPage     = 'faq';
$canonicalUrl    = $siteUrl . '/faq/';
$pageType        = 'faq';

$faqGroups = [
    'pricing' => ['items' => [
            ['q' => 'How much do new seamless gutters cost in Mississippi?', 'a' => '$1,200 to $3,500 for most homes. The price depends on linear footage, the number of stories and the downspout count.'],
            ['q' => 'How much do copper gutters cost?', 'a' => '$25 to $40 per linear foot installed. A typical home with 200 linear feet of gutter runs $5,000 to $8,000.'],
            ['q' => 'How much does gutter cleaning cost?', 'a' => '$150 to $300 per cleaning. Recurring plans, twice a year or quarterly, are discounted 15 to 25 percent.'],
            ['q' => 'How much do gutter guards cost?', 'a' => 'Fine mesh is $10 to $14 per linear foot installed, large-hole screen is $7 to $10, and foam inserts are $3 to $6.'],
            ['q' => 'Does Dun-Rite charge travel fees?', 'a' => 'No. Travel is free within all 14 cities in the service area: no fuel surcharges and no trip charges.'],
            ['q' => 'Does Dun-Rite offer financing?', 'a' => 'No in-house financing. Major credit cards are accepted, and larger commercial projects use standard contractor billing terms.'],
        ]],
    'process' => ['items' => [
            ['q' => 'How do I schedule an estimate?', 'a' => 'Call (601) 750-1800 or submit the contact form. Most estimates are scheduled within 48 hours.'],
            ['q' => 'What does the estimate include?', 'a' => 'Every estimate is free and carries no obligation. Dun-Rite measures on site, evaluates how water flows off the roof and provides a written quote.'],
            ['q' => 'How long does seamless gutter installation take?', 'a' => 'Most single-story homes take one day. Two-story homes and complex rooflines take one to two days.'],
            ['q' => 'Do you remove old gutters?', 'a' => 'Yes. Removal and disposal are included in every quote.'],
            ['q' => 'What if it rains on installation day?', 'a' => 'Dun-Rite watches the forecast and reschedules heavy-rain days. Light drizzle is fine; lightning or sustained rain pushes the installation.'],
            ['q' => 'Will you work with my builder or general contractor?', 'a' => 'Yes. Dun-Rite has ongoing builder partnerships across central Mississippi and provides certificates of insurance to builder partners on request.'],
        ]],
    'materials' => ['items' => [
            ['q' => 'What gauge aluminum do you use?', 'a' => '.032 gauge is standard. It is heavier than the .027 gauge sold at home-improvement stores.'],
            ['q' => 'Should I get 5-inch or 6-inch K-style gutters?', 'a' => '5-inch is the residential standard. 6-inch is the high-flow profile for steep rooflines, large roof footprints or heavy debris loads.'],
            ['q' => 'How long do aluminum gutters last?', 'a' => '20 to 30 years when properly installed in Mississippi\'s climate.'],
            ['q' => 'Will copper turn green, and when?', 'a' => 'Year one is bright copper, years two and three bring bronzing, years five to seven a brown patina, and years ten to fifteen and beyond the classic verdigris green. The patina is protective.'],
            ['q' => 'What is the warranty?', 'a' => 'A 25-year manufacturer warranty on materials and a 2-year labor warranty.'],
        ]],
    'areas' => ['items' => [
            ['q' => 'What is your service area?', 'a' => 'Madison, Ridgeland, Gluckstadt, Canton, Jackson, Clinton, Raymond, Bolton, Terry, Flowood, Pearl, Brandon, Richland and Florence.'],
            ['q' => 'Do you serve cities outside this list?', 'a' => 'Case by case. Call (601) 750-1800 to ask; the answer depends on distance, project scope and the current schedule.'],
            ['q' => 'How quickly can you get to my city?', 'a' => 'Most cities get an estimate within 48 hours. Madison and its closest neighbors, Ridgeland, Gluckstadt and Canton, are often the same day.'],
            ['q' => 'Do you serve commercial properties statewide?', 'a' => 'For larger commercial projects Dun-Rite travels beyond the 30-mile residential radius. Call to discuss the project.'],
        ]],
    'company' => ['items' => [
            ['q' => 'How long has Dun-Rite been in business?', 'a' => 'Mark Dungan founded Dun-Rite Seamless Gutters in 1996, and the company has operated from Madison, Mississippi since then.'],
            ['q' => 'Is Dunrite Gutters the same company?', 'a' => 'Yes. Dunrite Gutters, Dun-Rite Gutters and Dun-Rite Seamless Gutters, Inc. are the same business, at 115 Cherrybrook Dr in Madison.'],
            ['q' => 'Where can I find Dun-Rite online?', 'a' => 'On its Google Business Profile, on Facebook as @dunritegutters, on Yelp and on the BBB, where the company is accredited.'],
        ]],
];
$allFaqs = [];
foreach ($faqGroups as $fqGroup) foreach ($fqGroup['items'] as $fqItem) $allFaqs[] = $fqItem;

// FAQPage JSON-LD is built by dr_faq_node() from the same array the page renders.
$schemaNodes = [
    dr_breadcrumb_node(['FAQ' => '/faq/']),
    dr_faq_node($allFaqs),
];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>
<main id="main-content">

  <section class="hero hero--interior">
    <span class="grain" aria-hidden="true"></span>
    <div class="container">
      <div class="hero-text">
        <?php echo dr_breadcrumb(['FAQ' => null]); ?>
        <p class="hero-eyebrow">Gutter questions, answered</p>
        <h1>Gutter FAQ for Madison &amp; Jackson, MS Homeowners</h1>
        <p class="hero-answer">Dun-Rite Seamless Gutters, Inc. is a gutter installer based in Madison, Mississippi. These are the questions its office is asked most, about price, process, materials and service area, with the same answers you would get by calling (601) 750-1800.</p>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="container page-grid">
      <div class="prose">
        <h2 id="pricing">How much do gutters, guards and cleaning cost?</h2>
        <p>Dun-Rite Seamless Gutters, Inc. quotes most seamless aluminum systems at $1,200 to $3,500, copper at $25 to $40 per linear foot and cleaning at $150 to $300 a visit. These are typical ranges; the written quote after an on-site measurement is the real number.</p>
        <?php echo dr_faq_list($faqGroups['pricing']['items']); ?>
        <p>Full price tables are on the <a href="/services/">gutter services page</a>, and the three guard systems are compared on the <a href="/services/gutter-guards/">gutter guard page</a>.</p>

        <h2 id="process">How does a gutter installation work?</h2>
        <p>A Dun-Rite gutter installation starts with a free on-site estimate and usually takes one day on a single-story home. The crew removes the old gutters, forms the new ones at the house and hangs them the same day.</p>
        <?php echo dr_faq_list($faqGroups['process']['items']); ?>

        <h2 id="materials">Which gutter materials and sizes does Dun-Rite use?</h2>
        <p>Dun-Rite uses .032 gauge aluminum as its standard gutter material and offers copper as a specialty. Aluminum is formed in 5-inch and 6-inch K-style profiles for homes; copper comes in half-round, K-style, ogee and custom profiles.</p>
        <?php echo dr_faq_list($faqGroups['materials']['items']); ?>

        <h2 id="areas">Where does Dun-Rite work?</h2>
        <p>Dun-Rite works in 14 Mississippi cities within roughly 30 miles of its Madison office. Requests from farther away are considered case by case, and larger commercial projects regularly extend the range.</p>
        <?php echo dr_faq_list($faqGroups['areas']['items']); ?>
        <p>Each city has its own page, linked from the <a href="/service-areas/">service areas overview</a>.</p>

        <h2 id="company">Who is Dun-Rite Seamless Gutters?</h2>
        <p>Dun-Rite Seamless Gutters, Inc. is a gutter company founded by Mark Dungan in Madison, Mississippi in 1996. It is a Mississippi-licensed corporation with Workers' Compensation and General Liability insurance.</p>
        <?php echo dr_faq_list($faqGroups['company']['items']); ?>

      </div>

      <aside class="page-rail" aria-label="Jump to a topic">
        <div class="rail-card">
          <h3>Jump to</h3>
          <ul>
            <li><a href="#pricing">Prices</a></li>
            <li><a href="#process">Installation process</a></li>
            <li><a href="#materials">Materials and sizes</a></li>
            <li><a href="#areas">Service area</a></li>
            <li><a href="#company">The company</a></li>
          </ul>
        </div>
        <div class="rail-card rail-card--dark">
          <h3>Question not here?</h3>
          <p><?php echo h($businessHours); ?></p>
          <a class="btn btn-outline-white" href="tel:+<?php echo h($phoneRaw); ?>"><?php echo icon('phone', 18); ?> <?php echo h($phone); ?></a>
        </div>
      </aside>
    </div>
  </section>

  <?php
  $ctaBandHeading = 'Ask your own gutter question';
  include $_SERVER['DOCUMENT_ROOT'] . '/includes/cta-band.php';
  ?>

</main>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
