<?php
/**
 * Dun-Rite — Jackson, MS
 */

$pageTitle       = "Gutter Services in Jackson, MS | Dun-Rite Seamless Gutters";
$pageDescription = "Seamless gutter installation, repair, and replacement across Jackson, Mississippi. Specialty work on historic Belhaven and Fondren homes. Free estimates from Dun-Rite Seamless Gutters.";
$canonicalUrl    = "https://dunrite-gutters.com/service-areas/jackson/";
$ogImage         = "https://i.imgur.com/3IyAuXz.jpeg";
$heroImage       = "https://i.imgur.com/3IyAuXz.jpeg";
$currentPage     = "service-areas";

$faqs = [
  ["q" => "What is Dun-Rite's service area boundary?", "a" => "We serve 14 cities across the greater Jackson metro area: Madison (HQ), Jackson, Brandon, Flowood, Ridgeland, Clinton, Canton, Pearl, Gluckstadt, Florence, Richland, Bolton, Terry, and Raymond. Our service radius extends roughly 30 miles in each direction from our Madison headquarters. Outside this range, we evaluate special requests case-by-case — call (601) 750-1800 to ask."],
  ["q" => "Do you charge travel or trip fees for Jackson jobs?", "a" => "No. Free travel anywhere within our 14-city service area, regardless of distance from our Madison headquarters. The estimate you receive is the price you pay — no fuel surcharges, no trip charges, no \"outside our zone\" upcharges. This applies to free estimates, scheduled installs, and emergency repair calls."],
  ["q" => "How quickly can you schedule a visit in Jackson?", "a" => "Most free estimates in Jackson are scheduled within 48 hours of your call. Standard installations typically begin within 1–2 weeks of your signed estimate, depending on material lead times and our current project queue. Storm damage and emergency repairs are prioritized — call us immediately if you have an active leak."],
  ["q" => "Are older Jackson homes harder to fit gutters to?", "a" => "Yes — and that's where 30 years of experience matters. Belhaven, Fondren, and Eastover homes from the 1920s–1950s have non-standard fascia depths, irregular rooflines, and original wood that often needs repair before a clean install is possible. We custom-form on-site to match any roofline, and we always inspect fascia condition before quoting. Historic Jackson homes are some of our favorite work."],
  ["q" => "Do you handle insurance claims for Jackson storm damage?", "a" => "Yes. Jackson sees regular hail and straight-line wind damage during spring and fall storm seasons. We provide adjuster-ready photo documentation, written damage assessments, and itemized repair quotes formatted for insurance review. Most claims close within 2–3 weeks. Call within 72 hours of any storm event for fastest documentation."],
];

$schemaGraph = [
  "@context" => "https://schema.org",
  "@graph" => [
    [
      "@type"     => ["LocalBusiness", "RoofingContractor"],
      "@id"       => $canonicalUrl . "#business",
      "name"      => "Dun-Rite Seamless Gutters – Jackson Service Area",
      "url"       => $canonicalUrl,
      "telephone" => "+16017501800",
      "branchOf"  => ["@id" => "https://dunrite-gutters.com/#business"],
      "areaServed" => ["@type" => "City", "name" => "Jackson", "addressRegion" => "MS"],
    ],
    [
      "@type" => "BreadcrumbList",
      "itemListElement" => [
        ["@type" => "ListItem", "position" => 1, "name" => "Home", "item" => "https://dunrite-gutters.com/"],
        ["@type" => "ListItem", "position" => 2, "name" => "Service Areas", "item" => "https://dunrite-gutters.com/service-areas/"],
        ["@type" => "ListItem", "position" => 3, "name" => "Jackson", "item" => $canonicalUrl],
      ]
    ],
    ["@type" => "FAQPage", "mainEntity" => array_map(fn($f) => ["@type" => "Question", "name" => $f["q"], "acceptedAnswer" => ["@type" => "Answer", "text" => $f["a"]]], $faqs)],
    ["@type" => "AggregateRating", "itemReviewed" => ["@id" => "https://dunrite-gutters.com/#business"], "ratingValue" => "5.0", "reviewCount" => "27"],
  ]
];
$schemaMarkup = '<script type="application/ld+json">' . json_encode($schemaGraph, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>';

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/nav.php'; ?>

<main id="main-content">

  <section class="hero hero--inner" aria-label="Hero">
    <img src="https://i.imgur.com/3IyAuXz.jpeg" alt="Brick Jackson MS home with dark roof and white seamless gutters" class="hero-bg" width="1920" height="1080" loading="eager" fetchpriority="high">
    <div class="hero__inner">
      <div class="hero__copy">
        <span class="eyebrow-label">Jackson, MS · 15 Miles from HQ</span>
        <h1>Gutter Services in <span class="text-accent">Jackson, MS.</span></h1>
        <p class="hero__subhead">Mississippi's capital city is full of older homes that need experienced installers — Belhaven Victorians, Fondren bungalows, Eastover ranches, Northeast Jackson colonials. We've been doing this work for 30 years.</p>
        <div class="hero__ctas">
          <a href="#hero-form-heading" class="btn-primary">Get Free Estimate</a>
          <a href="tel:+16017501800" class="btn-secondary btn-on-dark">Call (601) 750-1800</a>
        </div>
        <p class="hero__phone">Mon–Fri 8AM–5PM · 15 miles from Madison HQ</p>
      </div>
      <?php
        $preselectedService = 'Not Sure / General Inquiry';
        $heroFormHeading    = 'Free Jackson Estimate';
        $heroFormSubheading = 'Same-day callback · Most quotes scheduled within 48 hours';
        include $_SERVER['DOCUMENT_ROOT'] . '/includes/hero-form.php';
      ?>
    </div>
    <div class="section-divider section-divider--bottom" aria-hidden="true">
      <svg viewBox="0 0 1440 80" preserveAspectRatio="none">
        <polygon fill="#FFFFFF" points="0,80 1440,0 1440,80"/>
      </svg>
    </div>
  </section>

  <nav class="breadcrumb" aria-label="Breadcrumb">
    <div class="container">
      <ol>
        <li><a href="/">Home</a></li>
        <li class="breadcrumb-sep" aria-hidden="true">›</li>
        <li><a href="/service-areas/">Service Areas</a></li>
        <li class="breadcrumb-sep" aria-hidden="true">›</li>
        <li aria-current="page">Jackson</li>
      </ol>
    </div>
  </nav>

  <section class="section">
    <div class="container">
      <div class="answer-block reveal-up">
        <h2>Gutter Services in Jackson, Mississippi</h2>
        <p>Dun-Rite Seamless Gutters provides seamless gutter installation, copper specialty work, gutter guards, cleaning, and repair services in Jackson, Mississippi. From our Madison headquarters 15 miles north, we work on Belhaven Victorians, Fondren bungalows, Eastover ranches, and Northeast Jackson colonials. Free estimates with no travel charges. Insurance documentation for storm damage. Call (601) 750-1800.</p>
      </div>
    </div>
  </section>

  <section class="section section-alt" aria-label="Why Jackson chooses Dun-Rite">
    <div class="container">
      <div class="section-title reveal-up">
        <span class="eyebrow-label">Local Expertise</span>
        <h2>Why Jackson Homeowners <span class="text-accent">Choose Dun-Rite.</span></h2>
        <span class="section-subtitle">historic homes, modern installation</span>
      </div>

      <div class="sub-service-grid">
        <div class="sub-service-card card-tint-1 reveal-up reveal-delay-1">
          <div class="sub-service-icon"><i data-lucide="building"></i></div>
          <h3>Older Housing Stock</h3>
          <p>Jackson's historic Belhaven, Fondren, and Eastover neighborhoods have homes from the 1920s through 1950s. Many are now on their second or third gutter system — and the original installations didn't account for modern runoff capacity. Most Jackson repair calls turn into replacements once we inspect fascia condition.</p>
        </div>
        <div class="sub-service-card card-tint-3 reveal-up reveal-delay-2">
          <div class="sub-service-icon"><i data-lucide="trees"></i></div>
          <h3>Mature Tree Canopy</h3>
          <p>Jackson's older neighborhoods are heavily shaded by mature oaks, pines, and pecans. The seasonal debris load is significant — we install more gutter guards in Jackson than in any other city we serve. Without them, twice-yearly cleanings aren't enough during oak catkin season and fall leaf drop.</p>
        </div>
        <div class="sub-service-card card-tint-2 reveal-up reveal-delay-3">
          <div class="sub-service-icon"><i data-lucide="cloud-rain"></i></div>
          <h3>Aging Drainage Systems</h3>
          <p>1950s-era Northeast Jackson homes were built with 2x3 downspouts that simply can't handle modern Mississippi storm runoff. Foundation moisture issues are common. Many of our Jackson repair calls turn into oversized downspout upgrades or underground drainage tie-ins to direct water away from foundations.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="section-title reveal-up">
        <span class="eyebrow-label">All Services Available</span>
        <h2>All 8 Gutter Services <span class="text-accent">in Jackson.</span></h2>
      </div>

      <div class="services-in-city">
        <a href="/services/seamless-gutter-installation/" class="svc-mini-card card-tint-1"><div class="svc-mini-card__icon"><i data-lucide="ruler"></i></div><h3>Seamless Installation</h3><p>Custom-formed for irregular Belhaven rooflines.</p><span class="svc-mini-card__link">View Service →</span></a>
        <a href="/services/aluminum-gutters/" class="svc-mini-card card-tint-2"><div class="svc-mini-card__icon"><i data-lucide="shield"></i></div><h3>Aluminum Gutters</h3><p>25+ colors to match historic Jackson palettes.</p><span class="svc-mini-card__link">View Service →</span></a>
        <a href="/services/copper-gutters/" class="svc-mini-card card-tint-3"><div class="svc-mini-card__icon"><i data-lucide="sparkles"></i></div><h3>Copper Gutters</h3><p>Specialty work for Eastover and Northeast Jackson.</p><span class="svc-mini-card__link">View Service →</span></a>
        <a href="/services/gutter-guards/" class="svc-mini-card card-tint-1"><div class="svc-mini-card__icon"><i data-lucide="filter"></i></div><h3>Gutter Guards</h3><p>Critical under Jackson's mature oak canopy.</p><span class="svc-mini-card__link">View Service →</span></a>
        <a href="/services/gutter-cleaning/" class="svc-mini-card card-tint-3"><div class="svc-mini-card__icon"><i data-lucide="droplets"></i></div><h3>Gutter Cleaning</h3><p>Quarterly plans for heavy-canopy properties.</p><span class="svc-mini-card__link">View Service →</span></a>
        <a href="/services/gutter-repair-replacement/" class="svc-mini-card card-tint-2"><div class="svc-mini-card__icon"><i data-lucide="wrench"></i></div><h3>Repair &amp; Replacement</h3><p>Storm damage and aging-system replacements.</p><span class="svc-mini-card__link">View Service →</span></a>
        <a href="/services/commercial-gutters/" class="svc-mini-card card-tint-1"><div class="svc-mini-card__icon"><i data-lucide="building-2"></i></div><h3>Commercial Gutters</h3><p>LeFleur East and downtown Jackson commercial.</p><span class="svc-mini-card__link">View Service →</span></a>
        <a href="/services/custom-downspouts/" class="svc-mini-card card-tint-3"><div class="svc-mini-card__icon"><i data-lucide="arrow-down-to-line"></i></div><h3>Custom Downspouts</h3><p>Upgrade undersized 1950s drainage systems.</p><span class="svc-mini-card__link">View Service →</span></a>
      </div>
    </div>
  </section>

  <section class="section section-alt">
    <div class="container">
      <div class="split-reverse">
        <div class="reveal-left">
          <span class="eyebrow-label">What to Expect</span>
          <h2>What Does a Dun-Rite Install <span class="text-accent">Look Like in Jackson?</span></h2>
          <p style="margin-top: var(--space-md);">Jackson installations frequently take 1–2 days because of the older housing stock. We commonly find fascia damage that needs board-by-board repair before clean re-installation, and irregular rooflines on Belhaven Victorians and Fondren bungalows that require custom-formed sections at every corner.</p>
          <p>Our Jackson estimates always include fascia inspection — we'll photograph any rotted or soft sections and quote repair work alongside the gutter replacement. Many homeowners discover their actual issue is fascia rot from years of overflow, not the gutters themselves.</p>
          <p>For Belhaven and Fondren historic homes, we can recommend profiles and colors that respect the architecture. Copper installations on Eastover estate properties typically schedule 2–3 weeks ahead for fabrication time.</p>
        </div>
        <div class="reveal-right">
          <img src="https://i.imgur.com/INwo4Si.jpeg" alt="Brick Jackson MS home entrance with seamless gutters and color-matched downspouts by Dun-Rite" width="900" height="600" loading="lazy" style="border-radius: var(--radius-md); box-shadow: var(--shadow-lg);">
        </div>
      </div>

      <div class="mid-cta-line reveal-up">
        Live in Jackson? <a href="/contact/">Schedule a free Jackson estimate</a> — most appointments within 48 hours.
      </div>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="section-title reveal-up">
        <span class="eyebrow-label">Frequently Asked</span>
        <h2>Jackson Service <span class="text-accent">Questions.</span></h2>
      </div>

      <div class="faq-list">
        <?php foreach ($faqs as $faq): ?>
        <div class="faq-item reveal-up">
          <button class="faq-question" aria-expanded="false"><?php echo htmlspecialchars($faq["q"]); ?></button>
          <div class="faq-answer"><div class="faq-answer-inner"><p><?php echo htmlspecialchars($faq["a"]); ?></p></div></div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <section class="section section-alt">
    <div class="container">
      <div class="section-title reveal-up">
        <span class="eyebrow-label">Neighboring Cities</span>
        <h2>Also Serving Jackson's <span class="text-accent">Neighbors.</span></h2>
      </div>
      <div class="related-services-grid">
        <a href="/service-areas/pearl/" class="related-card reveal-up reveal-delay-1"><div class="related-card__icon"><i data-lucide="map-pin"></i></div><h3>Pearl (15 mi)</h3><p>East Jackson suburb across the Pearl River. Mostly 1970s-80s ranch homes.</p><span class="related-card__link">View Pearl →</span></a>
        <a href="/service-areas/clinton/" class="related-card reveal-up reveal-delay-2"><div class="related-card__icon"><i data-lucide="map-pin"></i></div><h3>Clinton (18 mi)</h3><p>West of Jackson. College town with a mix of older and newer custom homes.</p><span class="related-card__link">View Clinton →</span></a>
        <a href="/service-areas/flowood/" class="related-card reveal-up reveal-delay-3"><div class="related-card__icon"><i data-lucide="map-pin"></i></div><h3>Flowood (20 mi)</h3><p>East Jackson suburb along Lakeland Drive. Mix of 70s-80s and newer development.</p><span class="related-card__link">View Flowood →</span></a>
      </div>
    </div>
  </section>

  <section class="closing-cta" aria-label="Jackson estimate">
    <div class="closing-cta__inner reveal-up">
      <span class="section-subtitle" style="color: var(--color-accent);">Mark and the team</span>
      <h2>Ready for a Free <span class="text-accent">Jackson Estimate?</span></h2>
      <p>Free travel from Madison. 25-year warranty. Insurance documentation for storm damage claims. Mississippi licensed and insured.</p>
      <div>
        <a href="/contact/" class="btn-primary">Get My Free Estimate</a>
        <a href="tel:+16017501800" class="closing-cta__phone">Or Call (601) 750-1800</a>
      </div>
      <p class="closing-cta__meta">Mon–Fri 8AM–5PM · Madison, MS · Mississippi Licensed &amp; Insured</p>
    </div>
  </section>

</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
