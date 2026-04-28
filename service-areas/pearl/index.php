<?php
/**
 * Dun-Rite — Pearl, MS
 */

$pageTitle       = "Gutter Services in Pearl, MS | Dun-Rite Seamless Gutters";
$pageDescription = "Seamless gutter installation in Pearl, Mississippi — Pearl River suburb. 1970s-80s ranch home specialists. Free estimates from Dun-Rite Seamless Gutters.";
$canonicalUrl    = "https://dunrite-gutters.com/service-areas/pearl/";
$ogImage         = "https://i.imgur.com/2HYt7pb.jpeg";
$heroImage       = "https://i.imgur.com/2HYt7pb.jpeg";
$currentPage     = "service-areas";

$faqs = [
  ["q" => "What is Dun-Rite's service area boundary?", "a" => "We serve 14 cities across the greater Jackson metro area: Madison (HQ), Jackson, Brandon, Flowood, Ridgeland, Clinton, Canton, Pearl, Gluckstadt, Florence, Richland, Bolton, Terry, and Raymond. Our service radius extends roughly 30 miles in each direction from our Madison headquarters. Outside this range, we evaluate special requests case-by-case — call (601) 750-1800 to ask."],
  ["q" => "Do you charge travel or trip fees for Pearl jobs?", "a" => "No. Free travel anywhere within our 14-city service area. The estimate is the price you pay — no fuel surcharges or trip fees."],
  ["q" => "How quickly can you schedule a visit in Pearl?", "a" => "Most free estimates in Pearl are scheduled within 48 hours of your call. Standard installations typically begin within 1–2 weeks. Storm damage and emergency repairs are prioritized."],
  ["q" => "Are 1970s-80s Pearl ranch homes good candidates for seamless gutters?", "a" => "Yes — most are well past their original gutter system's lifespan and ready for full replacement. Common issues on aging Pearl ranch homes: failed corner sealants, undersized 2x3 downspouts that overflow during heavy rain, and pulled hangers from years of leaf-load. Replacement with .032 gauge seamless aluminum and oversized 3x4 downspouts solves all of it at once."],
  ["q" => "Does Pearl River flooding affect gutter installation timing?", "a" => "After major Pearl River flood events, we prioritize Pearl-area calls for gutter inspection — clogged or damaged gutters are often the first thing storm-related water issues reveal. We can typically respond within 1–2 business days post-event for assessment and emergency repairs."],
];

$schemaGraph = [
  "@context" => "https://schema.org",
  "@graph" => [
    ["@type" => ["LocalBusiness", "RoofingContractor"], "@id" => $canonicalUrl . "#business", "name" => "Dun-Rite Seamless Gutters – Pearl Service Area", "url" => $canonicalUrl, "telephone" => "+16017501800", "branchOf" => ["@id" => "https://dunrite-gutters.com/#business"], "areaServed" => ["@type" => "City", "name" => "Pearl", "addressRegion" => "MS"]],
    ["@type" => "BreadcrumbList", "itemListElement" => [
      ["@type" => "ListItem", "position" => 1, "name" => "Home", "item" => "https://dunrite-gutters.com/"],
      ["@type" => "ListItem", "position" => 2, "name" => "Service Areas", "item" => "https://dunrite-gutters.com/service-areas/"],
      ["@type" => "ListItem", "position" => 3, "name" => "Pearl", "item" => $canonicalUrl],
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
    <img src="https://i.imgur.com/2HYt7pb.jpeg" alt="Brick Pearl MS home with stucco accent and seamless gutters" class="hero-bg" width="1920" height="1080" loading="eager" fetchpriority="high">
    <div class="hero__inner">
      <div class="hero__copy">
        <span class="eyebrow-label">Pearl, MS · 15 Miles from HQ</span>
        <h1>Gutter Services in <span class="text-accent">Pearl, MS.</span></h1>
        <p class="hero__subhead">Pearl River suburb with a housing stock of 1970s-80s ranch homes plus newer subdivisions. Most aging gutter systems are ready for full replacement, not patchwork repair.</p>
        <div class="hero__ctas">
          <a href="#hero-form-heading" class="btn-primary">Get Free Estimate</a>
          <a href="tel:+16017501800" class="btn-secondary btn-on-dark">Call (601) 750-1800</a>
        </div>
        <p class="hero__phone">Mon–Fri 8AM–5PM · 15 miles SE of Madison HQ</p>
      </div>
      <?php
        $preselectedService = 'Not Sure / General Inquiry';
        $heroFormHeading    = 'Free Pearl Estimate';
        $heroFormSubheading = 'Same-day callback · Most quotes scheduled within 48 hours';
        include $_SERVER['DOCUMENT_ROOT'] . '/includes/hero-form.php';
      ?>
    </div>
    <div class="section-divider section-divider--bottom" aria-hidden="true">
      <svg viewBox="0 0 1440 100" preserveAspectRatio="none">
        <path fill="#FFFFFF" d="M0,50 C180,100 360,0 540,50 C720,100 900,0 1080,50 C1260,100 1440,0 1440,50 L1440,100 L0,100 Z"></path>
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
        <li aria-current="page">Pearl</li>
      </ol>
    </div>
  </nav>

  <section class="section">
    <div class="container">
      <div class="answer-block reveal-up">
        <h2>Gutter Services in Pearl, Mississippi</h2>
        <p>Dun-Rite Seamless Gutters provides seamless installation, copper, gutter guards, cleaning, and repair services in Pearl, Mississippi. From our Madison headquarters 15 miles to the northwest, we serve the 1970s-80s ranch neighborhoods and newer subdivisions across this Pearl River suburb. Most aging Pearl homes need full gutter replacement rather than incremental repair. Free estimates with no travel charges. Call (601) 750-1800.</p>
      </div>
    </div>
  </section>

  <section class="section section-alt">
    <div class="container">
      <div class="section-title reveal-up">
        <span class="eyebrow-label">Local Expertise</span>
        <h2>Why Pearl Homeowners <span class="text-accent">Choose Dun-Rite.</span></h2>
        <span class="section-subtitle">aging systems, modern solutions</span>
      </div>

      <div class="sub-service-grid">
        <div class="sub-service-card card-tint-1 reveal-up reveal-delay-1">
          <div class="sub-service-icon"><i data-lucide="home"></i></div>
          <h3>Aging 70s-80s Ranch Homes</h3>
          <p>The bulk of Pearl's housing stock is single-story ranch homes built in the 1970s and 1980s — now 40+ years past original gutter installation. Most are due for full replacement: failed corner sealants, undersized 2x3 downspouts, and pulled hangers from leaf-load fatigue.</p>
        </div>
        <div class="sub-service-card card-tint-3 reveal-up reveal-delay-2">
          <div class="sub-service-icon"><i data-lucide="cloud-rain"></i></div>
          <h3>Pearl River Watershed</h3>
          <p>Pearl's proximity to the Pearl River means heavy rain events generate significant runoff. Original 2x3 downspouts on most ranch homes can't keep up. We frequently upgrade to oversized 3x4 profiles with underground drainage tie-ins to direct water away from foundations.</p>
        </div>
        <div class="sub-service-card card-tint-2 reveal-up reveal-delay-3">
          <div class="sub-service-icon"><i data-lucide="dollar-sign"></i></div>
          <h3>Cost-Conscious Replacement</h3>
          <p>Many Pearl homeowners are working with practical budgets. We offer honest repair-versus-replace evaluations and recommend the most cost-effective solution. Sometimes that's targeted repair; for most aging Pearl ranch homes, full replacement actually saves money long-term.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="section-title reveal-up">
        <span class="eyebrow-label">All Services Available</span>
        <h2>All 8 Gutter Services <span class="text-accent">in Pearl.</span></h2>
      </div>

      <div class="services-in-city">
        <a href="/services/seamless-gutter-installation/" class="svc-mini-card card-tint-1"><div class="svc-mini-card__icon"><i data-lucide="ruler"></i></div><h3>Seamless Installation</h3><p>5-inch K-style standard for Pearl ranch homes.</p><span class="svc-mini-card__link">View Service →</span></a>
        <a href="/services/aluminum-gutters/" class="svc-mini-card card-tint-2"><div class="svc-mini-card__icon"><i data-lucide="shield"></i></div><h3>Aluminum Gutters</h3><p>Most affordable option for Pearl replacements.</p><span class="svc-mini-card__link">View Service →</span></a>
        <a href="/services/copper-gutters/" class="svc-mini-card card-tint-3"><div class="svc-mini-card__icon"><i data-lucide="sparkles"></i></div><h3>Copper Gutters</h3><p>Specialty work for premium Pearl properties.</p><span class="svc-mini-card__link">View Service →</span></a>
        <a href="/services/gutter-guards/" class="svc-mini-card card-tint-1"><div class="svc-mini-card__icon"><i data-lucide="filter"></i></div><h3>Gutter Guards</h3><p>Mesh and screen for tree-shaded properties.</p><span class="svc-mini-card__link">View Service →</span></a>
        <a href="/services/gutter-cleaning/" class="svc-mini-card card-tint-3"><div class="svc-mini-card__icon"><i data-lucide="droplets"></i></div><h3>Gutter Cleaning</h3><p>Twice-yearly maintenance plans.</p><span class="svc-mini-card__link">View Service →</span></a>
        <a href="/services/gutter-repair-replacement/" class="svc-mini-card card-tint-2"><div class="svc-mini-card__icon"><i data-lucide="wrench"></i></div><h3>Repair &amp; Replacement</h3><p>Aging 70s-80s ranch home replacements.</p><span class="svc-mini-card__link">View Service →</span></a>
        <a href="/services/commercial-gutters/" class="svc-mini-card card-tint-1"><div class="svc-mini-card__icon"><i data-lucide="building-2"></i></div><h3>Commercial Gutters</h3><p>Outlets at Pearl and Trustmark Park area.</p><span class="svc-mini-card__link">View Service →</span></a>
        <a href="/services/custom-downspouts/" class="svc-mini-card card-tint-3"><div class="svc-mini-card__icon"><i data-lucide="arrow-down-to-line"></i></div><h3>Custom Downspouts</h3><p>Upgrade undersized 2x3 systems to 3x4.</p><span class="svc-mini-card__link">View Service →</span></a>
      </div>
    </div>
  </section>

  <section class="section section-alt">
    <div class="container">
      <div class="split-reverse">
        <div class="reveal-left">
          <span class="eyebrow-label">What to Expect</span>
          <h2>What Does a Dun-Rite Install <span class="text-accent">Look Like in Pearl?</span></h2>
          <p style="margin-top: var(--space-md);">Most Pearl single-story ranch homes complete in 6–8 hours. Removal of failed original gutters, fascia inspection, custom-formed seamless aluminum sections in your color choice, hidden hangers every 24 inches, sealed corners, and water-flow tested before warranty paperwork.</p>
          <p>Two-story Pearl homes and the larger newer subdivision properties run 1–2 days. We frequently combine gutter replacement with downspout upgrades from 2x3 to 3x4 — it's the same labor and dramatically improves drainage performance during Pearl's heavy rain events.</p>
          <p>15 miles from Madison HQ. No travel surcharge ever.</p>
        </div>
        <div class="reveal-right">
          <img src="https://i.imgur.com/8tTXO7O.jpeg" alt="Pearl MS modern home with seamless gutters by Dun-Rite" width="900" height="600" loading="lazy" style="border-radius: var(--radius-md); box-shadow: var(--shadow-lg);">
        </div>
      </div>

      <div class="mid-cta-line reveal-up">
        Aging gutters on a Pearl ranch home? <a href="/contact/">Schedule a free repair-vs-replace evaluation</a> — we'll tell you straight which makes more sense.
      </div>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="section-title reveal-up">
        <span class="eyebrow-label">Frequently Asked</span>
        <h2>Pearl Service <span class="text-accent">Questions.</span></h2>
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
        <h2>Also Serving Pearl's <span class="text-accent">Neighbors.</span></h2>
      </div>
      <div class="related-services-grid">
        <a href="/service-areas/flowood/" class="related-card reveal-up reveal-delay-1"><div class="related-card__icon"><i data-lucide="map-pin"></i></div><h3>Flowood (5 mi)</h3><p>Pearl's immediate northern neighbor along Lakeland Drive.</p><span class="related-card__link">View Flowood →</span></a>
        <a href="/service-areas/brandon/" class="related-card reveal-up reveal-delay-2"><div class="related-card__icon"><i data-lucide="map-pin"></i></div><h3>Brandon (15 mi)</h3><p>Eastern Reservoir suburb. Castlewoods custom homes.</p><span class="related-card__link">View Brandon →</span></a>
        <a href="/service-areas/jackson/" class="related-card reveal-up reveal-delay-3"><div class="related-card__icon"><i data-lucide="map-pin"></i></div><h3>Jackson (10 mi)</h3><p>State capital across the Pearl River. Historic neighborhoods.</p><span class="related-card__link">View Jackson →</span></a>
      </div>
    </div>
  </section>

  <section class="closing-cta" aria-label="Pearl estimate">
    <div class="closing-cta__inner reveal-up">
      <span class="section-subtitle" style="color: var(--color-accent);">Mark and the team</span>
      <h2>Ready for a Free <span class="text-accent">Pearl Estimate?</span></h2>
      <p>Free travel from Madison. 25-year warranty. Honest repair-or-replace evaluations. Mississippi licensed and insured.</p>
      <div>
        <a href="/contact/" class="btn-primary">Get My Free Estimate</a>
        <a href="tel:+16017501800" class="closing-cta__phone">Or Call (601) 750-1800</a>
      </div>
      <p class="closing-cta__meta">Mon–Fri 8AM–5PM · Madison, MS · Mississippi Licensed &amp; Insured</p>
    </div>
  </section>

</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
