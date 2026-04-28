<?php
/**
 * Dun-Rite — Richland, MS
 */

$pageTitle       = "Gutter Services in Richland, MS | Dun-Rite Seamless Gutters";
$pageDescription = "Seamless gutter installation in Richland, Mississippi — I-20/Highway 49 working-class suburb. 1970s-80s ranch home replacement specialists. Free estimates from Dun-Rite.";
$canonicalUrl    = "https://dunrite-gutters.com/service-areas/richland/";
$ogImage         = "https://i.imgur.com/k3pvmNe.jpeg";
$heroImage       = "https://i.imgur.com/k3pvmNe.jpeg";
$currentPage     = "service-areas";

$faqs = [
  ["q" => "What is Dun-Rite's service area boundary?", "a" => "We serve 14 cities across the greater Jackson metro area: Madison (HQ), Jackson, Brandon, Flowood, Ridgeland, Clinton, Canton, Pearl, Gluckstadt, Florence, Richland, Bolton, Terry, and Raymond. Our service radius extends roughly 30 miles in each direction from our Madison headquarters. Outside this range, we evaluate special requests case-by-case — call (601) 750-1800 to ask."],
  ["q" => "Do you charge travel or trip fees for Richland jobs?", "a" => "No. Free travel anywhere within our 14-city service area. The 20-mile drive from Madison HQ to Richland costs you nothing extra."],
  ["q" => "How quickly can you schedule a visit in Richland?", "a" => "Most free estimates in Richland are scheduled within 48 hours of your call. Standard installations typically begin within 1–2 weeks. Storm damage and emergency repairs are prioritized."],
  ["q" => "Do you offer financing or budget-friendly options for Richland gutter replacements?", "a" => "We work with practical Richland budgets. Aluminum is the most cost-effective material at $1,200–$3,500 for most homes. We can phase repairs versus full replacement when budget requires it, and we provide honest repair-versus-replace evaluations rather than pushing the most expensive option. No financing onsite, but we can refer you to local home-improvement lenders."],
  ["q" => "How does Richland's industrial corridor affect gutter recommendations?", "a" => "Richland's I-20/Highway 49 industrial corridor produces airborne particulates that can accelerate gutter staining and reduce the lifespan of cheap finishes. We recommend baked-enamel finishes (which we install standard) over field-applied paint, and we recommend the heavier .032 gauge aluminum to handle dust and pollen accumulation without bowing."],
];

$schemaGraph = [
  "@context" => "https://schema.org",
  "@graph" => [
    ["@type" => ["LocalBusiness", "RoofingContractor"], "@id" => $canonicalUrl . "#business", "name" => "Dun-Rite Seamless Gutters – Richland Service Area", "url" => $canonicalUrl, "telephone" => "+16017501800", "branchOf" => ["@id" => "https://dunrite-gutters.com/#business"], "areaServed" => ["@type" => "City", "name" => "Richland", "addressRegion" => "MS"]],
    ["@type" => "BreadcrumbList", "itemListElement" => [
      ["@type" => "ListItem", "position" => 1, "name" => "Home", "item" => "https://dunrite-gutters.com/"],
      ["@type" => "ListItem", "position" => 2, "name" => "Service Areas", "item" => "https://dunrite-gutters.com/service-areas/"],
      ["@type" => "ListItem", "position" => 3, "name" => "Richland", "item" => $canonicalUrl],
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
    <img src="https://i.imgur.com/k3pvmNe.jpeg" alt="Richland MS home with seamless gutter installation" class="hero-bg" width="1920" height="1080" loading="eager" fetchpriority="high">
    <div class="hero__inner">
      <div class="hero__copy">
        <span class="eyebrow-label">Richland, MS · 20 Miles from HQ</span>
        <h1>Gutter Services in <span class="text-accent">Richland, MS.</span></h1>
        <p class="hero__subhead">Working-class Rankin County suburb at the I-20/Highway 49 junction. Mostly 1970s-80s ranch and split-level homes — the kind that need honest replacement quotes, not upsells.</p>
        <div class="hero__ctas">
          <a href="#hero-form-heading" class="btn-primary">Get Free Estimate</a>
          <a href="tel:+16017501800" class="btn-secondary btn-on-dark">Call (601) 750-1800</a>
        </div>
        <p class="hero__phone">Mon–Fri 8AM–5PM · 20 miles SE of Madison HQ</p>
      </div>
      <?php
        $preselectedService = 'Not Sure / General Inquiry';
        $heroFormHeading    = 'Free Richland Estimate';
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
        <li aria-current="page">Richland</li>
      </ol>
    </div>
  </nav>

  <section class="section">
    <div class="container">
      <div class="answer-block reveal-up">
        <h2>Gutter Services in Richland, Mississippi</h2>
        <p>Dun-Rite Seamless Gutters provides seamless installation, gutter guards, cleaning, and repair services in Richland, Mississippi. From our Madison headquarters 20 miles north, we serve homes throughout this working-class Rankin County suburb at the I-20/Highway 49 junction. Most Richland homes are 1970s-80s ranch and split-level builds ready for full gutter system replacement. Free estimates with no travel charges. Call (601) 750-1800.</p>
      </div>
    </div>
  </section>

  <section class="section section-alt">
    <div class="container">
      <div class="section-title reveal-up">
        <span class="eyebrow-label">Local Expertise</span>
        <h2>Why Richland Homeowners <span class="text-accent">Choose Dun-Rite.</span></h2>
        <span class="section-subtitle">straight talk, fair pricing</span>
      </div>

      <div class="sub-service-grid">
        <div class="sub-service-card card-tint-1 reveal-up reveal-delay-1">
          <div class="sub-service-icon"><i data-lucide="home"></i></div>
          <h3>1970s-80s Housing Stock</h3>
          <p>Most Richland homes were built between 1970 and 1990 — single-story ranch and split-level designs that are now 35–55 years old. Original gutter systems are well past lifespan. Most are ready for full replacement, not piecemeal repair.</p>
        </div>
        <div class="sub-service-card card-tint-3 reveal-up reveal-delay-2">
          <div class="sub-service-icon"><i data-lucide="dollar-sign"></i></div>
          <h3>Honest Pricing</h3>
          <p>Richland customers care about straight pricing. Our quotes are itemized — material cost, labor, removal, fasteners, sealant — so you can see exactly what each piece costs. No "premium package" upsells. We'll tell you when repair makes more sense than replacement.</p>
        </div>
        <div class="sub-service-card card-tint-2 reveal-up reveal-delay-3">
          <div class="sub-service-icon"><i data-lucide="factory"></i></div>
          <h3>Industrial Corridor Considerations</h3>
          <p>The I-20/Highway 49 industrial corridor produces airborne particulates that accelerate finish degradation on cheap gutters. We use .032 gauge aluminum with baked-enamel finishes that hold up to dust and pollen accumulation — not the .027 gauge field-painted product sold at home centers.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="section-title reveal-up">
        <span class="eyebrow-label">All Services Available</span>
        <h2>All 8 Gutter Services <span class="text-accent">in Richland.</span></h2>
      </div>

      <div class="services-in-city">
        <a href="/services/seamless-gutter-installation/" class="svc-mini-card card-tint-1"><div class="svc-mini-card__icon"><i data-lucide="ruler"></i></div><h3>Seamless Installation</h3><p>5-inch K-style for Richland ranch homes.</p><span class="svc-mini-card__link">View Service →</span></a>
        <a href="/services/aluminum-gutters/" class="svc-mini-card card-tint-2"><div class="svc-mini-card__icon"><i data-lucide="shield"></i></div><h3>Aluminum Gutters</h3><p>Most cost-effective Richland replacement option.</p><span class="svc-mini-card__link">View Service →</span></a>
        <a href="/services/copper-gutters/" class="svc-mini-card card-tint-3"><div class="svc-mini-card__icon"><i data-lucide="sparkles"></i></div><h3>Copper Gutters</h3><p>Specialty work where the home calls for it.</p><span class="svc-mini-card__link">View Service →</span></a>
        <a href="/services/gutter-guards/" class="svc-mini-card card-tint-1"><div class="svc-mini-card__icon"><i data-lucide="filter"></i></div><h3>Gutter Guards</h3><p>Mesh and screen for tree-shaded Richland properties.</p><span class="svc-mini-card__link">View Service →</span></a>
        <a href="/services/gutter-cleaning/" class="svc-mini-card card-tint-3"><div class="svc-mini-card__icon"><i data-lucide="droplets"></i></div><h3>Gutter Cleaning</h3><p>Twice-yearly maintenance plans.</p><span class="svc-mini-card__link">View Service →</span></a>
        <a href="/services/gutter-repair-replacement/" class="svc-mini-card card-tint-2"><div class="svc-mini-card__icon"><i data-lucide="wrench"></i></div><h3>Repair &amp; Replacement</h3><p>Aging 70s-80s ranch home replacements.</p><span class="svc-mini-card__link">View Service →</span></a>
        <a href="/services/commercial-gutters/" class="svc-mini-card card-tint-1"><div class="svc-mini-card__icon"><i data-lucide="building-2"></i></div><h3>Commercial Gutters</h3><p>I-20 corridor commercial properties.</p><span class="svc-mini-card__link">View Service →</span></a>
        <a href="/services/custom-downspouts/" class="svc-mini-card card-tint-3"><div class="svc-mini-card__icon"><i data-lucide="arrow-down-to-line"></i></div><h3>Custom Downspouts</h3><p>Upgrade undersized 70s-era 2x3 systems.</p><span class="svc-mini-card__link">View Service →</span></a>
      </div>
    </div>
  </section>

  <section class="section section-alt">
    <div class="container">
      <div class="split">
        <div class="reveal-left">
          <img src="https://i.imgur.com/3IyAuXz.jpeg" alt="Richland MS ranch home with replacement seamless gutters by Dun-Rite" width="900" height="600" loading="lazy" style="border-radius: var(--radius-md); box-shadow: var(--shadow-lg);">
        </div>
        <div class="reveal-right">
          <span class="eyebrow-label">What to Expect</span>
          <h2>What Does a Dun-Rite Install <span class="text-accent">Look Like in Richland?</span></h2>
          <p style="margin-top: var(--space-md);">Most Richland single-story ranch and split-level homes complete in 6–8 hours. Removal of failed original gutters, fascia inspection, custom-formed seamless aluminum sections, hidden hangers, sealed corners, water-flow tested before warranty paperwork.</p>
          <p>If you're working with a budget, we can phase the work — replace the failing front-elevation gutters first, then schedule the back elevation 6–12 months later. Most installers won't do this; we will, because we'd rather have you done right in two phases than skip what matters.</p>
          <p>20 miles from Madison HQ. Free travel.</p>
        </div>
      </div>

      <div class="mid-cta-line reveal-up">
        Working with a tight budget on a Richland home? <a href="/contact/">Schedule a free estimate</a> — we'll give you honest options.
      </div>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="section-title reveal-up">
        <span class="eyebrow-label">Frequently Asked</span>
        <h2>Richland Service <span class="text-accent">Questions.</span></h2>
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
        <h2>Also Serving Richland's <span class="text-accent">Neighbors.</span></h2>
      </div>
      <div class="related-services-grid">
        <a href="/service-areas/pearl/" class="related-card reveal-up reveal-delay-1"><div class="related-card__icon"><i data-lucide="map-pin"></i></div><h3>Pearl (5 mi)</h3><p>Richland's northern neighbor. Pearl River suburb with 70s-80s ranch homes.</p><span class="related-card__link">View Pearl →</span></a>
        <a href="/service-areas/florence/" class="related-card reveal-up reveal-delay-2"><div class="related-card__icon"><i data-lucide="map-pin"></i></div><h3>Florence (8 mi)</h3><p>Semi-rural Rankin County. Larger lots and underground drainage work.</p><span class="related-card__link">View Florence →</span></a>
        <a href="/service-areas/brandon/" class="related-card reveal-up reveal-delay-3"><div class="related-card__icon"><i data-lucide="map-pin"></i></div><h3>Brandon (15 mi)</h3><p>Eastern Reservoir suburb. Castlewoods custom homes and new construction.</p><span class="related-card__link">View Brandon →</span></a>
      </div>
    </div>
  </section>

  <section class="closing-cta" aria-label="Richland estimate">
    <div class="closing-cta__inner reveal-up">
      <span class="section-subtitle" style="color: var(--color-accent);">Mark and the team</span>
      <h2>Ready for a Free <span class="text-accent">Richland Estimate?</span></h2>
      <p>Free travel from Madison. 25-year warranty. Honest pricing. Mississippi licensed and insured.</p>
      <div>
        <a href="/contact/" class="btn-primary">Get My Free Estimate</a>
        <a href="tel:+16017501800" class="closing-cta__phone">Or Call (601) 750-1800</a>
      </div>
      <p class="closing-cta__meta">Mon–Fri 8AM–5PM · Madison, MS · Mississippi Licensed &amp; Insured</p>
    </div>
  </section>

</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
