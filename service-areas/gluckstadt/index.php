<?php
/**
 * Dun-Rite — Gluckstadt, MS
 */

$pageTitle       = "Gutter Services in Gluckstadt, MS | Dun-Rite Seamless Gutters";
$pageDescription = "Seamless gutter installation in Gluckstadt, Mississippi — the state's newest incorporated city. New construction specialists. Free estimates from Dun-Rite Seamless Gutters.";
$canonicalUrl    = "https://dunrite-gutters.com/service-areas/gluckstadt/";
$ogImage         = "https://i.imgur.com/dRN7AE6.jpeg";
$heroImage       = "https://i.imgur.com/dRN7AE6.jpeg";
$currentPage     = "service-areas";

$faqs = [
  ["q" => "What is Dun-Rite's service area boundary?", "a" => "We serve 14 cities across the greater Jackson metro area: Madison (HQ), Jackson, Brandon, Flowood, Ridgeland, Clinton, Canton, Pearl, Gluckstadt, Florence, Richland, Bolton, Terry, and Raymond. Our service radius extends roughly 30 miles in each direction from our Madison headquarters. Outside this range, we evaluate special requests case-by-case — call (601) 750-1800 to ask."],
  ["q" => "Do you charge travel or trip fees for Gluckstadt jobs?", "a" => "No. Free travel anywhere within our 14-city service area. Gluckstadt is just 5 miles north of Madison HQ, so there's effectively no travel cost involved. The estimate is the price you pay."],
  ["q" => "How quickly can you schedule a Gluckstadt estimate?", "a" => "Most Gluckstadt estimates schedule within 24–48 hours of your call. As a Madison County neighbor only 5 miles from HQ, Gluckstadt gets near-Madison priority on storm response and same-day windows when our schedule allows."],
  ["q" => "Can you install gutters during new construction in Gluckstadt?", "a" => "Yes — and Gluckstadt is mostly new construction. We work directly with builders during the construction sequence, typically installing after the roofers finish and before final landscaping. Pre-construction consultation, drawing review, phased installation, and AIA-formatted billing on request. Builder partnerships standard."],
  ["q" => "What gutter profile is right for new Gluckstadt homes?", "a" => "Most new Gluckstadt homes are 2,500+ square feet of roof footprint with steep architectural pitches — 6-inch high-flow K-style gutters paired with oversized 3x4 downspouts is typically the right specification. The young pine landscaping that's common across Gluckstadt subdivisions will mature over the next 5–10 years and produce significant debris loads, so gutter guards installed at construction save labor down the road."],
];

$schemaGraph = [
  "@context" => "https://schema.org",
  "@graph" => [
    ["@type" => ["LocalBusiness", "RoofingContractor"], "@id" => $canonicalUrl . "#business", "name" => "Dun-Rite Seamless Gutters – Gluckstadt Service Area", "url" => $canonicalUrl, "telephone" => "+16017501800", "branchOf" => ["@id" => "https://dunrite-gutters.com/#business"], "areaServed" => ["@type" => "City", "name" => "Gluckstadt", "addressRegion" => "MS"]],
    ["@type" => "BreadcrumbList", "itemListElement" => [
      ["@type" => "ListItem", "position" => 1, "name" => "Home", "item" => "https://dunrite-gutters.com/"],
      ["@type" => "ListItem", "position" => 2, "name" => "Service Areas", "item" => "https://dunrite-gutters.com/service-areas/"],
      ["@type" => "ListItem", "position" => 3, "name" => "Gluckstadt", "item" => $canonicalUrl],
    ]],
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
    <img src="https://i.imgur.com/dRN7AE6.jpeg" alt="Two-story Gluckstadt MS home with balcony and seamless gutters" class="hero-bg" width="1920" height="1080" loading="eager" fetchpriority="high">
    <div class="hero__inner">
      <div class="hero__copy">
        <span class="eyebrow-label">Gluckstadt, MS · 5 Miles from HQ</span>
        <h1>Gutter Services in <span class="text-accent">Gluckstadt, MS.</span></h1>
        <p class="hero__subhead">Mississippi's newest incorporated city, growing fast along Highway 463. New construction, large rooflines, and builders who need installers that show up on schedule.</p>
        <div class="hero__ctas">
          <a href="#hero-form-heading" class="btn-primary">Get Free Estimate</a>
          <a href="tel:+16017501800" class="btn-secondary btn-on-dark">Call (601) 750-1800</a>
        </div>
        <p class="hero__phone">Mon–Fri 8AM–5PM · 5 miles north of Madison HQ</p>
      </div>
      <?php
        $preselectedService = 'Not Sure / General Inquiry';
        $heroFormHeading    = 'Free Gluckstadt Estimate';
        $heroFormSubheading = 'Same-day callback · Most quotes scheduled within 48 hours';
        include $_SERVER['DOCUMENT_ROOT'] . '/includes/hero-form.php';
      ?>
    </div>
    <div class="section-divider section-divider--bottom" aria-hidden="true">
      <svg viewBox="0 0 1440 100" preserveAspectRatio="none">
        <path fill="#FFFFFF" d="M0,64 C240,96 480,32 720,48 C960,64 1200,96 1440,72 L1440,100 L0,100 Z"></path>
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
        <li aria-current="page">Gluckstadt</li>
      </ol>
    </div>
  </nav>

  <section class="section">
    <div class="container">
      <div class="answer-block reveal-up">
        <h2>Gutter Services in Gluckstadt, Mississippi</h2>
        <p>Dun-Rite Seamless Gutters provides seamless installation, copper, gutter guards, cleaning, and repair services in Gluckstadt, Mississippi — the state's newest incorporated city (2021). From our Madison headquarters just 5 miles south, we serve new construction throughout The Heights, Bridgewater Reserve, and the rapidly developing Highway 463 corridor. Builder partnerships welcome. Free estimates with no travel charges. Call (601) 750-1800.</p>
      </div>
    </div>
  </section>

  <section class="section section-alt">
    <div class="container">
      <div class="section-title reveal-up">
        <span class="eyebrow-label">Local Expertise</span>
        <h2>Why Gluckstadt Homeowners <span class="text-accent">Choose Dun-Rite.</span></h2>
        <span class="section-subtitle">new city, experienced installer</span>
      </div>

      <div class="sub-service-grid">
        <div class="sub-service-card card-tint-1 reveal-up reveal-delay-1">
          <div class="sub-service-icon"><i data-lucide="construction"></i></div>
          <h3>New Construction Specialists</h3>
          <p>Most Gluckstadt homes are under 15 years old, with significant new construction still underway. We work directly with the active Gluckstadt-area builders during construction sequences — installation timed with the roofers, pre-landscaping access, AIA billing on request.</p>
        </div>
        <div class="sub-service-card card-tint-3 reveal-up reveal-delay-2">
          <div class="sub-service-icon"><i data-lucide="ruler"></i></div>
          <h3>Larger Rooflines, Steeper Pitches</h3>
          <p>Gluckstadt's housing stock skews larger and architecturally complex — many homes are 3,000+ square feet with steep pitches. 6-inch high-flow K-style gutters paired with oversized 3x4 downspouts is typically the right call. We install at construction or retrofit on existing homes.</p>
        </div>
        <div class="sub-service-card card-tint-2 reveal-up reveal-delay-3">
          <div class="sub-service-icon"><i data-lucide="zap"></i></div>
          <h3>5 Miles from HQ</h3>
          <p>Gluckstadt is essentially next door to our Madison headquarters. Same-day estimate windows are common. Storm response is fast. Warranty service calls happen the next business day. There's no other gutter installer this close to Gluckstadt.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="section-title reveal-up">
        <span class="eyebrow-label">All Services Available</span>
        <h2>All 8 Gutter Services <span class="text-accent">in Gluckstadt.</span></h2>
      </div>

      <div class="services-in-city">
        <a href="/services/seamless-gutter-installation/" class="svc-mini-card card-tint-1"><div class="svc-mini-card__icon"><i data-lucide="ruler"></i></div><h3>Seamless Installation</h3><p>6-inch high-flow standard for new Gluckstadt homes.</p><span class="svc-mini-card__link">View Service →</span></a>
        <a href="/services/aluminum-gutters/" class="svc-mini-card card-tint-2"><div class="svc-mini-card__icon"><i data-lucide="shield"></i></div><h3>Aluminum Gutters</h3><p>Color-matched to architectural builder palettes.</p><span class="svc-mini-card__link">View Service →</span></a>
        <a href="/services/copper-gutters/" class="svc-mini-card card-tint-3"><div class="svc-mini-card__icon"><i data-lucide="sparkles"></i></div><h3>Copper Gutters</h3><p>Specialty work for premium Gluckstadt builds.</p><span class="svc-mini-card__link">View Service →</span></a>
        <a href="/services/gutter-guards/" class="svc-mini-card card-tint-1"><div class="svc-mini-card__icon"><i data-lucide="filter"></i></div><h3>Gutter Guards</h3><p>Install at construction — pays off as trees mature.</p><span class="svc-mini-card__link">View Service →</span></a>
        <a href="/services/gutter-cleaning/" class="svc-mini-card card-tint-3"><div class="svc-mini-card__icon"><i data-lucide="droplets"></i></div><h3>Gutter Cleaning</h3><p>Twice-yearly maintenance plans.</p><span class="svc-mini-card__link">View Service →</span></a>
        <a href="/services/gutter-repair-replacement/" class="svc-mini-card card-tint-2"><div class="svc-mini-card__icon"><i data-lucide="wrench"></i></div><h3>Repair &amp; Replacement</h3><p>Builder-grade install upgrades to .032 gauge.</p><span class="svc-mini-card__link">View Service →</span></a>
        <a href="/services/commercial-gutters/" class="svc-mini-card card-tint-1"><div class="svc-mini-card__icon"><i data-lucide="building-2"></i></div><h3>Commercial Gutters</h3><p>Highway 463 retail and commercial growth.</p><span class="svc-mini-card__link">View Service →</span></a>
        <a href="/services/custom-downspouts/" class="svc-mini-card card-tint-3"><div class="svc-mini-card__icon"><i data-lucide="arrow-down-to-line"></i></div><h3>Custom Downspouts</h3><p>Oversized 3x4 standard for new construction.</p><span class="svc-mini-card__link">View Service →</span></a>
      </div>
    </div>
  </section>

  <section class="section section-alt">
    <div class="container">
      <div class="split">
        <div class="reveal-left">
          <img src="https://i.imgur.com/lHGkpv5.jpeg" alt="Gluckstadt MS new construction home with seamless gutter installation by Dun-Rite" width="900" height="600" loading="lazy" style="border-radius: var(--radius-md); box-shadow: var(--shadow-lg);">
        </div>
        <div class="reveal-right">
          <span class="eyebrow-label">What to Expect</span>
          <h2>What Does a Dun-Rite Install <span class="text-accent">Look Like in Gluckstadt?</span></h2>
          <p style="margin-top: var(--space-md);">For new construction, we coordinate with your builder's site supervisor on timing — typically 1–2 days of work after the roofers finish and before final landscaping. We arrive on the agreed date, work around other trades, and complete punch-list walkthrough before invoicing.</p>
          <p>For existing-home retrofit work, single-story Gluckstadt installs run 6–8 hours; two-story custom homes 1–2 days. Builder-grade gutters that came with new homes can usually be upgraded to .032 gauge with hidden hangers for under $1,500 — a worthwhile investment that adds 10+ years of life.</p>
          <p>5 miles from Madison HQ. Free travel.</p>
        </div>
      </div>

      <div class="mid-cta-line reveal-up">
        Building or buying in Gluckstadt? <a href="/contact/">Schedule a free pre-construction or retrofit estimate</a> — most appointments within 24 hours.
      </div>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="section-title reveal-up">
        <span class="eyebrow-label">Frequently Asked</span>
        <h2>Gluckstadt Service <span class="text-accent">Questions.</span></h2>
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
        <h2>Also Serving Gluckstadt's <span class="text-accent">Neighbors.</span></h2>
      </div>
      <div class="related-services-grid">
        <a href="/service-areas/madison/" class="related-card reveal-up reveal-delay-1"><div class="related-card__icon"><i data-lucide="map-pin"></i></div><h3>Madison (5 mi)</h3><p>Our home base. Reunion, Lake Caroline, Old Annandale, The Bridges.</p><span class="related-card__link">View Madison →</span></a>
        <a href="/service-areas/canton/" class="related-card reveal-up reveal-delay-2"><div class="related-card__icon"><i data-lucide="map-pin"></i></div><h3>Canton (7 mi)</h3><p>Mississippi's antique capital. Historic homes around Canton Square.</p><span class="related-card__link">View Canton →</span></a>
        <a href="/service-areas/ridgeland/" class="related-card reveal-up reveal-delay-3"><div class="related-card__icon"><i data-lucide="map-pin"></i></div><h3>Ridgeland (8 mi)</h3><p>Affluent Madison County suburb. Mature 80s-90s neighborhoods.</p><span class="related-card__link">View Ridgeland →</span></a>
      </div>
    </div>
  </section>

  <section class="closing-cta" aria-label="Gluckstadt estimate">
    <div class="closing-cta__inner reveal-up">
      <span class="section-subtitle" style="color: var(--color-accent);">Mark and the team</span>
      <h2>Ready for a Free <span class="text-accent">Gluckstadt Estimate?</span></h2>
      <p>5 miles from HQ. Builder partnerships. 25-year warranty. Mississippi licensed and insured.</p>
      <div>
        <a href="/contact/" class="btn-primary">Get My Free Estimate</a>
        <a href="tel:+16017501800" class="closing-cta__phone">Or Call (601) 750-1800</a>
      </div>
      <p class="closing-cta__meta">Mon–Fri 8AM–5PM · Madison, MS · Mississippi Licensed &amp; Insured</p>
    </div>
  </section>

</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
