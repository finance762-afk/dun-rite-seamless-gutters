<?php
/**
 * Dun-Rite — Brandon, MS
 */

$pageTitle       = "Gutter Services in Brandon, MS | Dun-Rite Seamless Gutters";
$pageDescription = "Seamless gutter installation in Brandon, Mississippi — including Castlewoods, Whisper Lake, and Crosswinds. New construction and Reservoir-area homes. Free estimates from Dun-Rite.";
$canonicalUrl    = "https://dunrite-gutters.com/service-areas/brandon/";
$ogImage         = "https://i.imgur.com/3nVl1Ha.jpeg";
$heroImage       = "https://i.imgur.com/3nVl1Ha.jpeg";
$currentPage     = "service-areas";

$faqs = [
  ["q" => "What is Dun-Rite's service area boundary?", "a" => "We serve 14 cities across the greater Jackson metro area: Madison (HQ), Jackson, Brandon, Flowood, Ridgeland, Clinton, Canton, Pearl, Gluckstadt, Florence, Richland, Bolton, Terry, and Raymond. Our service radius extends roughly 30 miles in each direction from our Madison headquarters. Outside this range, we evaluate special requests case-by-case — call (601) 750-1800 to ask."],
  ["q" => "Do you charge travel or trip fees for Brandon jobs?", "a" => "No. Free travel anywhere within our 14-city service area, regardless of distance from our Madison headquarters. The estimate you receive is the price you pay — no fuel surcharges, no trip charges, no \"outside our zone\" upcharges. This applies to free estimates, scheduled installs, and emergency repair calls."],
  ["q" => "How quickly can you schedule a visit in Brandon?", "a" => "Most free estimates in Brandon are scheduled within 48 hours of your call. Standard installations typically begin within 1–2 weeks of your signed estimate. Storm damage and emergency repairs are prioritized — call us immediately if you have an active leak."],
  ["q" => "Do new-construction homes in Castlewoods need any special gutter setup?", "a" => "Most new Castlewoods builds are larger than average — frequently 3,000+ square feet of roof footprint with steep pitches. We typically recommend 6-inch high-flow K-style profiles paired with oversized 3x4 downspouts to handle the runoff load. Builder-grade installations often skimp on hanger spacing; our hidden hangers go every 24 inches."],
  ["q" => "Can you work with Brandon homebuilders during new construction?", "a" => "Yes. We have ongoing builder partnerships across the Reservoir area and central Mississippi. Pre-construction consultation, phased installation around other trades, certificate of insurance with the builder named as additional insured, and AIA-formatted billing on request. Call (601) 750-1800 to discuss your project timeline."],
];

$schemaGraph = [
  "@context" => "https://schema.org",
  "@graph" => [
    [
      "@type"     => ["LocalBusiness", "RoofingContractor"],
      "@id"       => $canonicalUrl . "#business",
      "name"      => "Dun-Rite Seamless Gutters – Brandon Service Area",
      "url"       => $canonicalUrl,
      "telephone" => "+16017501800",
      "branchOf"  => ["@id" => "https://dunrite-gutters.com/#business"],
      "areaServed" => ["@type" => "City", "name" => "Brandon", "addressRegion" => "MS"],
    ],
    [
      "@type" => "BreadcrumbList",
      "itemListElement" => [
        ["@type" => "ListItem", "position" => 1, "name" => "Home", "item" => "https://dunrite-gutters.com/"],
        ["@type" => "ListItem", "position" => 2, "name" => "Service Areas", "item" => "https://dunrite-gutters.com/service-areas/"],
        ["@type" => "ListItem", "position" => 3, "name" => "Brandon", "item" => $canonicalUrl],
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
    <img src="https://i.imgur.com/3nVl1Ha.jpeg" alt="Yellow two-story Brandon MS home with seamless gutter installation" class="hero-bg" width="1920" height="1080" loading="eager" fetchpriority="high">
    <div class="hero__inner">
      <div class="hero__copy">
        <span class="eyebrow-label">Brandon, MS · 30 Miles from HQ</span>
        <h1>Gutter Services in <span class="text-accent">Brandon, MS.</span></h1>
        <p class="hero__subhead">Brandon's growing fast — Castlewoods, Whisper Lake, Crosswinds, and the Reservoir-area new construction. Larger rooflines and steeper pitches need profiles that match the homes.</p>
        <div class="hero__ctas">
          <a href="#hero-form-heading" class="btn-primary">Get Free Estimate</a>
          <a href="tel:+16017501800" class="btn-secondary btn-on-dark">Call (601) 750-1800</a>
        </div>
        <p class="hero__phone">Mon–Fri 8AM–5PM · 30 miles SE of Madison HQ</p>
      </div>
      <?php
        $preselectedService = 'Not Sure / General Inquiry';
        $heroFormHeading    = 'Free Brandon Estimate';
        $heroFormSubheading = 'Same-day callback · Most quotes scheduled within 48 hours';
        include $_SERVER['DOCUMENT_ROOT'] . '/includes/hero-form.php';
      ?>
    </div>
    <div class="section-divider section-divider--bottom" aria-hidden="true">
      <svg viewBox="0 0 1440 100" preserveAspectRatio="none">
        <path fill="#FFFFFF" d="M0,100 Q360,0 720,50 T1440,50 L1440,100 Z"/>
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
        <li aria-current="page">Brandon</li>
      </ol>
    </div>
  </nav>

  <section class="section">
    <div class="container">
      <div class="answer-block reveal-up">
        <h2>Gutter Services in Brandon, Mississippi</h2>
        <p>Dun-Rite Seamless Gutters provides seamless installation, copper, gutter guards, cleaning, and repair services in Brandon, Mississippi. From our Madison headquarters 30 miles northwest, we work on Castlewoods custom homes, Whisper Lake new construction, and the Reservoir-area properties along the north shore. Free estimates with no travel charges. Builder partnerships welcome. Call (601) 750-1800.</p>
      </div>
    </div>
  </section>

  <section class="section section-alt">
    <div class="container">
      <div class="section-title reveal-up">
        <span class="eyebrow-label">Local Expertise</span>
        <h2>Why Brandon Homeowners <span class="text-accent">Choose Dun-Rite.</span></h2>
        <span class="section-subtitle">growing fast, building right</span>
      </div>

      <div class="sub-service-grid">
        <div class="sub-service-card card-tint-1 reveal-up reveal-delay-1">
          <div class="sub-service-icon"><i data-lucide="home"></i></div>
          <h3>Newer Construction Predominates</h3>
          <p>Brandon's housing stock skews young — most homes are under 30 years old, with substantial new construction in Castlewoods, Whisper Lake, and Crosswinds. Larger rooflines (3,000+ sq ft) and steep architectural pitches mean 6-inch high-flow gutters and oversized downspouts are usually the right call.</p>
        </div>
        <div class="sub-service-card card-tint-3 reveal-up reveal-delay-2">
          <div class="sub-service-icon"><i data-lucide="trees"></i></div>
          <h3>Heavy Oak Coverage</h3>
          <p>The Reservoir north shore and Brandon's older streets are heavily shaded by mature water oaks. Seasonal acorn drop combined with leaves means gutter guards aren't optional — without them, even oversized profiles clog quickly. We install more screen-style guards in Brandon than mesh because oak debris sizes call for it.</p>
        </div>
        <div class="sub-service-card card-tint-2 reveal-up reveal-delay-3">
          <div class="sub-service-icon"><i data-lucide="construction"></i></div>
          <h3>Builder Partnerships</h3>
          <p>We work directly with several Brandon-area builders during new construction. Pre-construction consultation, drawing review, phased installation timed with roofing trades, and AIA-formatted billing are standard. Builder schedules respected — gutters install when they're supposed to.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="section-title reveal-up">
        <span class="eyebrow-label">All Services Available</span>
        <h2>All 8 Gutter Services <span class="text-accent">in Brandon.</span></h2>
      </div>

      <div class="services-in-city">
        <a href="/services/seamless-gutter-installation/" class="svc-mini-card card-tint-1"><div class="svc-mini-card__icon"><i data-lucide="ruler"></i></div><h3>Seamless Installation</h3><p>5-inch and 6-inch high-flow profiles for larger Brandon rooflines.</p><span class="svc-mini-card__link">View Service →</span></a>
        <a href="/services/aluminum-gutters/" class="svc-mini-card card-tint-2"><div class="svc-mini-card__icon"><i data-lucide="shield"></i></div><h3>Aluminum Gutters</h3><p>Color-matched to Castlewoods custom palettes.</p><span class="svc-mini-card__link">View Service →</span></a>
        <a href="/services/copper-gutters/" class="svc-mini-card card-tint-3"><div class="svc-mini-card__icon"><i data-lucide="sparkles"></i></div><h3>Copper Gutters</h3><p>Specialty work for Reservoir-area waterfront homes.</p><span class="svc-mini-card__link">View Service →</span></a>
        <a href="/services/gutter-guards/" class="svc-mini-card card-tint-1"><div class="svc-mini-card__icon"><i data-lucide="filter"></i></div><h3>Gutter Guards</h3><p>Essential under Brandon's mature oak canopy.</p><span class="svc-mini-card__link">View Service →</span></a>
        <a href="/services/gutter-cleaning/" class="svc-mini-card card-tint-3"><div class="svc-mini-card__icon"><i data-lucide="droplets"></i></div><h3>Gutter Cleaning</h3><p>Twice-yearly plans + post-storm response.</p><span class="svc-mini-card__link">View Service →</span></a>
        <a href="/services/gutter-repair-replacement/" class="svc-mini-card card-tint-2"><div class="svc-mini-card__icon"><i data-lucide="wrench"></i></div><h3>Repair &amp; Replacement</h3><p>Storm damage and aging-system replacements.</p><span class="svc-mini-card__link">View Service →</span></a>
        <a href="/services/commercial-gutters/" class="svc-mini-card card-tint-1"><div class="svc-mini-card__icon"><i data-lucide="building-2"></i></div><h3>Commercial Gutters</h3><p>Brandon Old Town and Highway 80 corridor projects.</p><span class="svc-mini-card__link">View Service →</span></a>
        <a href="/services/custom-downspouts/" class="svc-mini-card card-tint-3"><div class="svc-mini-card__icon"><i data-lucide="arrow-down-to-line"></i></div><h3>Custom Downspouts</h3><p>Oversized 3x4 and 4x5 profiles for big Brandon rooflines.</p><span class="svc-mini-card__link">View Service →</span></a>
      </div>
    </div>
  </section>

  <section class="section section-alt">
    <div class="container">
      <div class="split">
        <div class="reveal-left">
          <img src="https://i.imgur.com/dRN7AE6.jpeg" alt="Two-story Brandon MS home with balcony and seamless gutter installation by Dun-Rite" width="900" height="600" loading="lazy" style="border-radius: var(--radius-md); box-shadow: var(--shadow-lg);">
        </div>
        <div class="reveal-right">
          <span class="eyebrow-label">What to Expect</span>
          <h2>What Does a Dun-Rite Install <span class="text-accent">Look Like in Brandon?</span></h2>
          <p style="margin-top: var(--space-md);">Brandon installations frequently take 1–2 days because of the size of the homes. Two-story Castlewoods custom builds and larger Reservoir-area properties have 200–400 linear feet of gutter to install, plus oversized downspout placement and underground drainage tie-ins where the lots allow.</p>
          <p>For new construction, we coordinate with the builder's site supervisor on installation timing — typically after the roofers finish and before final landscaping. Hidden hangers every 24 inches, color-matched fasteners, sealed corners, water-flow tested before warranty paperwork.</p>
          <p>Our 30-mile drive from Madison HQ doesn't change pricing. The estimate is the price.</p>
        </div>
      </div>

      <div class="mid-cta-line reveal-up">
        New Brandon construction or Castlewoods custom home? <a href="/contact/">Schedule a free estimate</a> — most appointments within 48 hours.
      </div>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="section-title reveal-up">
        <span class="eyebrow-label">Frequently Asked</span>
        <h2>Brandon Service <span class="text-accent">Questions.</span></h2>
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
        <h2>Also Serving Brandon's <span class="text-accent">Neighbors.</span></h2>
      </div>
      <div class="related-services-grid">
        <a href="/service-areas/flowood/" class="related-card reveal-up reveal-delay-1"><div class="related-card__icon"><i data-lucide="map-pin"></i></div><h3>Flowood (10 mi)</h3><p>Brandon's western neighbor along the Lakeland Drive corridor. Mix of older and newer.</p><span class="related-card__link">View Flowood →</span></a>
        <a href="/service-areas/pearl/" class="related-card reveal-up reveal-delay-2"><div class="related-card__icon"><i data-lucide="map-pin"></i></div><h3>Pearl (15 mi)</h3><p>South of Brandon. 1970s-80s ranch homes and newer subdivisions.</p><span class="related-card__link">View Pearl →</span></a>
        <a href="/service-areas/jackson/" class="related-card reveal-up reveal-delay-3"><div class="related-card__icon"><i data-lucide="map-pin"></i></div><h3>Jackson (15 mi)</h3><p>State capital, west of Brandon. Historic Belhaven, Fondren, Eastover homes.</p><span class="related-card__link">View Jackson →</span></a>
      </div>
    </div>
  </section>

  <section class="closing-cta" aria-label="Brandon estimate">
    <div class="closing-cta__inner reveal-up">
      <span class="section-subtitle" style="color: var(--color-accent);">Mark and the team</span>
      <h2>Ready for a Free <span class="text-accent">Brandon Estimate?</span></h2>
      <p>Free travel from Madison. 25-year warranty. Builder partnerships welcome. Mississippi licensed and insured.</p>
      <div>
        <a href="/contact/" class="btn-primary">Get My Free Estimate</a>
        <a href="tel:+16017501800" class="closing-cta__phone">Or Call (601) 750-1800</a>
      </div>
      <p class="closing-cta__meta">Mon–Fri 8AM–5PM · Madison, MS · Mississippi Licensed &amp; Insured</p>
    </div>
  </section>

</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
