<?php
/**
 * Dun-Rite — Flowood, MS
 */

$pageTitle       = "Gutter Services in Flowood, MS | Dun-Rite Seamless Gutters";
$pageDescription = "Seamless gutter installation in Flowood, Mississippi — including the Lakeland Drive corridor, Sandalwood, and Lakeland Heights. Free estimates from Dun-Rite Seamless Gutters.";
$canonicalUrl    = "https://dunrite-gutters.com/service-areas/flowood/";
$ogImage         = "https://i.imgur.com/8tTXO7O.jpeg";
$heroImage       = "https://i.imgur.com/8tTXO7O.jpeg";
$currentPage     = "service-areas";

$faqs = [
  ["q" => "What is Dun-Rite's service area boundary?", "a" => "We serve 14 cities across the greater Jackson metro area: Madison (HQ), Jackson, Brandon, Flowood, Ridgeland, Clinton, Canton, Pearl, Gluckstadt, Florence, Richland, Bolton, Terry, and Raymond. Our service radius extends roughly 30 miles in each direction from our Madison headquarters. Outside this range, we evaluate special requests case-by-case — call (601) 750-1800 to ask."],
  ["q" => "Do you charge travel or trip fees for Flowood jobs?", "a" => "No. Free travel anywhere within our 14-city service area, regardless of distance from our Madison headquarters. The estimate you receive is the price you pay — no fuel surcharges, no trip charges, no \"outside our zone\" upcharges."],
  ["q" => "How quickly can you schedule a visit in Flowood?", "a" => "Most free estimates in Flowood are scheduled within 48 hours of your call. Standard installations typically begin within 1–2 weeks of your signed estimate. Storm damage and emergency repairs are prioritized."],
  ["q" => "Do you handle commercial gutter work along Flowood's Lakeland Drive corridor?", "a" => "Yes. The Lakeland Drive retail and office corridor is one of our regular commercial service areas. We handle strip centers, professional offices, medical buildings, and restaurant properties with high-flow profiles, oversized downspouts, and scheduled installations around tenant operations."],
  ["q" => "Are 1970s and 1980s Flowood homes good candidates for gutter replacement?", "a" => "Yes — most are well past their original gutter system's lifespan. Common issues we find on aging Flowood ranch homes: pulled hangers from leaf-load fatigue, sealed corners that have failed, undersized 2x3 downspouts that overflow at the elbows, and fascia rot from years of unnoticed overflow. Replacement typically pays for itself in avoided fascia repair."],
];

$schemaGraph = [
  "@context" => "https://schema.org",
  "@graph" => [
    ["@type" => ["LocalBusiness", "RoofingContractor"], "@id" => $canonicalUrl . "#business", "name" => "Dun-Rite Seamless Gutters – Flowood Service Area", "url" => $canonicalUrl, "telephone" => "+16017501800", "branchOf" => ["@id" => "https://dunrite-gutters.com/#business"], "areaServed" => ["@type" => "City", "name" => "Flowood", "addressRegion" => "MS"]],
    ["@type" => "BreadcrumbList", "itemListElement" => [
      ["@type" => "ListItem", "position" => 1, "name" => "Home", "item" => "https://dunrite-gutters.com/"],
      ["@type" => "ListItem", "position" => 2, "name" => "Service Areas", "item" => "https://dunrite-gutters.com/service-areas/"],
      ["@type" => "ListItem", "position" => 3, "name" => "Flowood", "item" => $canonicalUrl],
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
    <img src="https://i.imgur.com/8tTXO7O.jpeg" alt="Modern white-sided Flowood MS home with seamless gutter installation" class="hero-bg" width="1920" height="1080" loading="eager" fetchpriority="high">
    <div class="hero__inner">
      <div class="hero__copy">
        <span class="eyebrow-label">Flowood, MS · 20 Miles from HQ</span>
        <h1>Gutter Services in <span class="text-accent">Flowood, MS.</span></h1>
        <p class="hero__subhead">Lakeland Drive's commercial corridor, Sandalwood's mature streets, and Castlewoods' eastern edge — Flowood mixes 1970s ranch homes, newer subdivisions, and one of Mississippi's busiest retail strips.</p>
        <div class="hero__ctas">
          <a href="#hero-form-heading" class="btn-primary">Get Free Estimate</a>
          <a href="tel:+16017501800" class="btn-secondary btn-on-dark">Call (601) 750-1800</a>
        </div>
        <p class="hero__phone">Mon–Fri 8AM–5PM · 20 miles SE of Madison HQ</p>
      </div>
      <?php
        $preselectedService = 'Not Sure / General Inquiry';
        $heroFormHeading    = 'Free Flowood Estimate';
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
        <li aria-current="page">Flowood</li>
      </ol>
    </div>
  </nav>

  <section class="section">
    <div class="container">
      <div class="answer-block reveal-up">
        <h2>Gutter Services in Flowood, Mississippi</h2>
        <p>Dun-Rite Seamless Gutters provides seamless installation, copper, gutter guards, cleaning, and repair services in Flowood, Mississippi. From our Madison headquarters 20 miles to the northwest, we serve residential homes throughout Sandalwood, Lakeland Heights, and the eastern Castlewoods area, plus commercial properties along the Lakeland Drive retail corridor. Free estimates with no travel charges. Call (601) 750-1800.</p>
      </div>
    </div>
  </section>

  <section class="section section-alt">
    <div class="container">
      <div class="section-title reveal-up">
        <span class="eyebrow-label">Local Expertise</span>
        <h2>Why Flowood Homeowners <span class="text-accent">Choose Dun-Rite.</span></h2>
        <span class="section-subtitle">commercial corridor, residential mix</span>
      </div>

      <div class="sub-service-grid">
        <div class="sub-service-card card-tint-1 reveal-up reveal-delay-1">
          <div class="sub-service-icon"><i data-lucide="store"></i></div>
          <h3>Lakeland Drive Commercial</h3>
          <p>The Lakeland Drive retail and office corridor is one of central Mississippi's busiest commercial strips. We regularly handle strip centers, medical offices, restaurants, and professional buildings here — high-flow profiles, oversized downspouts, scheduled installs around tenant hours.</p>
        </div>
        <div class="sub-service-card card-tint-3 reveal-up reveal-delay-2">
          <div class="sub-service-icon"><i data-lucide="home"></i></div>
          <h3>Aging 70s-80s Housing Stock</h3>
          <p>Sandalwood and the older Flowood streets feature 1970s and 1980s ranch homes that are now 40+ years old. Original gutter systems are well past lifespan — pulled hangers, failed corner seals, undersized downspouts. Replacement is usually the right call, not piecemeal repair.</p>
        </div>
        <div class="sub-service-card card-tint-2 reveal-up reveal-delay-3">
          <div class="sub-service-icon"><i data-lucide="trees"></i></div>
          <h3>Mixed Tree Coverage</h3>
          <p>Flowood's tree coverage varies dramatically by neighborhood. Sandalwood has mature oak and pine canopy that demands gutter guards; the newer Lakeland Heights subdivisions have younger landscaping that doesn't yet need them. We tailor recommendations to your specific lot, not a generic neighborhood-wide answer.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="section-title reveal-up">
        <span class="eyebrow-label">All Services Available</span>
        <h2>All 8 Gutter Services <span class="text-accent">in Flowood.</span></h2>
      </div>

      <div class="services-in-city">
        <a href="/services/seamless-gutter-installation/" class="svc-mini-card card-tint-1"><div class="svc-mini-card__icon"><i data-lucide="ruler"></i></div><h3>Seamless Installation</h3><p>5-inch K-style for residential, 6-inch for commercial.</p><span class="svc-mini-card__link">View Service →</span></a>
        <a href="/services/aluminum-gutters/" class="svc-mini-card card-tint-2"><div class="svc-mini-card__icon"><i data-lucide="shield"></i></div><h3>Aluminum Gutters</h3><p>Stocked in 25+ colors for Flowood's varied palettes.</p><span class="svc-mini-card__link">View Service →</span></a>
        <a href="/services/copper-gutters/" class="svc-mini-card card-tint-3"><div class="svc-mini-card__icon"><i data-lucide="sparkles"></i></div><h3>Copper Gutters</h3><p>Specialty work for premium Flowood properties.</p><span class="svc-mini-card__link">View Service →</span></a>
        <a href="/services/gutter-guards/" class="svc-mini-card card-tint-1"><div class="svc-mini-card__icon"><i data-lucide="filter"></i></div><h3>Gutter Guards</h3><p>Recommended for mature Sandalwood properties.</p><span class="svc-mini-card__link">View Service →</span></a>
        <a href="/services/gutter-cleaning/" class="svc-mini-card card-tint-3"><div class="svc-mini-card__icon"><i data-lucide="droplets"></i></div><h3>Gutter Cleaning</h3><p>Twice-yearly + commercial maintenance contracts.</p><span class="svc-mini-card__link">View Service →</span></a>
        <a href="/services/gutter-repair-replacement/" class="svc-mini-card card-tint-2"><div class="svc-mini-card__icon"><i data-lucide="wrench"></i></div><h3>Repair &amp; Replacement</h3><p>Aging 70s-80s ranch home replacements.</p><span class="svc-mini-card__link">View Service →</span></a>
        <a href="/services/commercial-gutters/" class="svc-mini-card card-tint-1"><div class="svc-mini-card__icon"><i data-lucide="building-2"></i></div><h3>Commercial Gutters</h3><p>Lakeland Drive retail and office buildings.</p><span class="svc-mini-card__link">View Service →</span></a>
        <a href="/services/custom-downspouts/" class="svc-mini-card card-tint-3"><div class="svc-mini-card__icon"><i data-lucide="arrow-down-to-line"></i></div><h3>Custom Downspouts</h3><p>Upgrade undersized 70s-era 2x3 systems.</p><span class="svc-mini-card__link">View Service →</span></a>
      </div>
    </div>
  </section>

  <section class="section section-alt">
    <div class="container">
      <div class="split-reverse">
        <div class="reveal-left">
          <span class="eyebrow-label">What to Expect</span>
          <h2>What Does a Dun-Rite Install <span class="text-accent">Look Like in Flowood?</span></h2>
          <p style="margin-top: var(--space-md);">Residential Flowood installations typically run 6–10 hours for single-story ranch homes, 1–2 days for two-story properties. We arrive between 7:30 and 8:00 AM, set up on the driveway or street, and form custom gutter sections to the home's exact roofline measurements.</p>
          <p>Commercial work along Lakeland Drive schedules around tenant hours — typically early morning starts before retail opens, or full-day shutdown days for larger projects. We coordinate with property managers on tenant notifications, dumpster placement, and access logistics.</p>
          <p>20 miles from Madison HQ. No travel surcharge.</p>
        </div>
        <div class="reveal-right">
          <img src="https://i.imgur.com/oaW4wFF.jpeg" alt="Dark seamless gutter installed on wood-sided Flowood MS home eave by Dun-Rite" width="900" height="600" loading="lazy" style="border-radius: var(--radius-md); box-shadow: var(--shadow-lg);">
        </div>
      </div>

      <div class="mid-cta-line reveal-up">
        Flowood resident or property manager? <a href="/contact/">Schedule a free Flowood estimate</a> — most appointments within 48 hours.
      </div>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="section-title reveal-up">
        <span class="eyebrow-label">Frequently Asked</span>
        <h2>Flowood Service <span class="text-accent">Questions.</span></h2>
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
        <h2>Also Serving Flowood's <span class="text-accent">Neighbors.</span></h2>
      </div>
      <div class="related-services-grid">
        <a href="/service-areas/brandon/" class="related-card reveal-up reveal-delay-1"><div class="related-card__icon"><i data-lucide="map-pin"></i></div><h3>Brandon (10 mi)</h3><p>Flowood's eastern neighbor. Castlewoods custom homes and Reservoir-area new construction.</p><span class="related-card__link">View Brandon →</span></a>
        <a href="/service-areas/pearl/" class="related-card reveal-up reveal-delay-2"><div class="related-card__icon"><i data-lucide="map-pin"></i></div><h3>Pearl (5 mi)</h3><p>Immediate southern neighbor. 1970s-80s ranch suburb.</p><span class="related-card__link">View Pearl →</span></a>
        <a href="/service-areas/jackson/" class="related-card reveal-up reveal-delay-3"><div class="related-card__icon"><i data-lucide="map-pin"></i></div><h3>Jackson (10 mi)</h3><p>Western neighbor across the Pearl River. State capital with historic neighborhoods.</p><span class="related-card__link">View Jackson →</span></a>
      </div>
    </div>
  </section>

  <section class="closing-cta" aria-label="Flowood estimate">
    <div class="closing-cta__inner reveal-up">
      <span class="section-subtitle" style="color: var(--color-accent);">Mark and the team</span>
      <h2>Ready for a Free <span class="text-accent">Flowood Estimate?</span></h2>
      <p>Free travel from Madison. 25-year warranty. Commercial maintenance contracts available. Mississippi licensed and insured.</p>
      <div>
        <a href="/contact/" class="btn-primary">Get My Free Estimate</a>
        <a href="tel:+16017501800" class="closing-cta__phone">Or Call (601) 750-1800</a>
      </div>
      <p class="closing-cta__meta">Mon–Fri 8AM–5PM · Madison, MS · Mississippi Licensed &amp; Insured</p>
    </div>
  </section>

</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
