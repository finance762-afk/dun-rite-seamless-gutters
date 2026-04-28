<?php
/**
 * Dun-Rite — Florence, MS
 */

$pageTitle       = "Gutter Services in Florence, MS | Dun-Rite Seamless Gutters";
$pageDescription = "Seamless gutter installation in Florence, Mississippi — semi-rural Rankin County. Larger lots, mature trees, custom downspout work. Free estimates from Dun-Rite Seamless Gutters.";
$canonicalUrl    = "https://dunrite-gutters.com/service-areas/florence/";
$ogImage         = "https://i.imgur.com/oaW4wFF.jpeg";
$heroImage       = "https://i.imgur.com/oaW4wFF.jpeg";
$currentPage     = "service-areas";

$faqs = [
  ["q" => "What is Dun-Rite's service area boundary?", "a" => "We serve 14 cities across the greater Jackson metro area: Madison (HQ), Jackson, Brandon, Flowood, Ridgeland, Clinton, Canton, Pearl, Gluckstadt, Florence, Richland, Bolton, Terry, and Raymond. Our service radius extends roughly 30 miles in each direction from our Madison headquarters. Outside this range, we evaluate special requests case-by-case — call (601) 750-1800 to ask."],
  ["q" => "Do you charge travel or trip fees for Florence jobs?", "a" => "No. Free travel anywhere within our 14-city service area, regardless of distance. The 25-mile drive from Madison HQ to Florence costs you nothing extra."],
  ["q" => "How quickly can you schedule a visit in Florence?", "a" => "Most free estimates in Florence are scheduled within 48 hours of your call. Standard installations typically begin within 1–2 weeks. Storm damage and emergency repairs are prioritized."],
  ["q" => "How do you handle larger rural lots in Florence?", "a" => "Most Florence properties have larger lot footprints than urban suburbs — which gives us more options for downspout placement and underground drainage. We can run drainage tie-ins 30–50 feet to a daylight discharge or French drain rather than relying on splash blocks alone. The extra acreage also means rooflines are often steeper and more complex; we frequently install 6-inch high-flow profiles on Florence homes."],
];

$schemaGraph = [
  "@context" => "https://schema.org",
  "@graph" => [
    ["@type" => ["LocalBusiness", "RoofingContractor"], "@id" => $canonicalUrl . "#business", "name" => "Dun-Rite Seamless Gutters – Florence Service Area", "url" => $canonicalUrl, "telephone" => "+16017501800", "branchOf" => ["@id" => "https://dunrite-gutters.com/#business"], "areaServed" => ["@type" => "City", "name" => "Florence", "addressRegion" => "MS"]],
    ["@type" => "BreadcrumbList", "itemListElement" => [
      ["@type" => "ListItem", "position" => 1, "name" => "Home", "item" => "https://dunrite-gutters.com/"],
      ["@type" => "ListItem", "position" => 2, "name" => "Service Areas", "item" => "https://dunrite-gutters.com/service-areas/"],
      ["@type" => "ListItem", "position" => 3, "name" => "Florence", "item" => $canonicalUrl],
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
    <img src="https://i.imgur.com/oaW4wFF.jpeg" alt="Dark seamless gutter on wood-sided Florence MS home eave" class="hero-bg" width="1920" height="1080" loading="eager" fetchpriority="high">
    <div class="hero__inner">
      <div class="hero__copy">
        <span class="eyebrow-label">Florence, MS · 25 Miles from HQ</span>
        <h1>Gutter Services in <span class="text-accent">Florence, MS.</span></h1>
        <p class="hero__subhead">Semi-rural Rankin County. Larger lots, mature trees, and the kind of acreage that lets us run real underground drainage instead of relying on splash blocks.</p>
        <div class="hero__ctas">
          <a href="#hero-form-heading" class="btn-primary">Get Free Estimate</a>
          <a href="tel:+16017501800" class="btn-secondary btn-on-dark">Call (601) 750-1800</a>
        </div>
        <p class="hero__phone">Mon–Fri 8AM–5PM · 25 miles south of Madison HQ</p>
      </div>
      <?php
        $preselectedService = 'Not Sure / General Inquiry';
        $heroFormHeading    = 'Free Florence Estimate';
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
        <li aria-current="page">Florence</li>
      </ol>
    </div>
  </nav>

  <section class="section">
    <div class="container">
      <div class="answer-block reveal-up">
        <h2>Gutter Services in Florence, Mississippi</h2>
        <p>Dun-Rite Seamless Gutters provides seamless installation, copper, gutter guards, cleaning, and repair services in Florence, Mississippi — semi-rural Rankin County. From our Madison headquarters 25 miles north, we serve homes throughout the Highway 49 corridor and the rural Florence properties on larger lots. The acreage allows for underground drainage runs that aren't practical in tighter suburban lots. Free estimates with no travel charges. Call (601) 750-1800.</p>
      </div>
    </div>
  </section>

  <section class="section section-alt">
    <div class="container">
      <div class="section-title reveal-up">
        <span class="eyebrow-label">Local Expertise</span>
        <h2>Why Florence Homeowners <span class="text-accent">Choose Dun-Rite.</span></h2>
        <span class="section-subtitle">rural acreage, real drainage</span>
      </div>

      <div class="sub-service-grid">
        <div class="sub-service-card card-tint-1 reveal-up reveal-delay-1">
          <div class="sub-service-icon"><i data-lucide="trees"></i></div>
          <h3>Larger Lots, Bigger Trees</h3>
          <p>Florence properties sit on bigger footprints than urban suburbs — typically 1+ acre lots with mature pines, oaks, and pecans. The tree canopy is heavier per home; gutter guards become essential rather than optional. Underground drainage tie-ins to daylight discharge points work well here.</p>
        </div>
        <div class="sub-service-card card-tint-3 reveal-up reveal-delay-2">
          <div class="sub-service-icon"><i data-lucide="ruler"></i></div>
          <h3>Custom Rural Builds</h3>
          <p>Many Florence homes are custom rural builds rather than subdivision tract housing. Steeper architectural pitches, larger rooflines, complex valleys — we install 6-inch high-flow K-style and oversized 4x5 downspouts on most Florence projects.</p>
        </div>
        <div class="sub-service-card card-tint-2 reveal-up reveal-delay-3">
          <div class="sub-service-icon"><i data-lucide="route"></i></div>
          <h3>Real Underground Drainage</h3>
          <p>Florence's larger lots make 30–50 foot underground drainage runs practical. We can move runoff well away from foundations and direct it to a daylight discharge or French drain. This is how rural drainage should be done; tight suburban lots rarely allow it.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="section-title reveal-up">
        <span class="eyebrow-label">All Services Available</span>
        <h2>All 8 Gutter Services <span class="text-accent">in Florence.</span></h2>
      </div>

      <div class="services-in-city">
        <a href="/services/seamless-gutter-installation/" class="svc-mini-card card-tint-1"><div class="svc-mini-card__icon"><i data-lucide="ruler"></i></div><h3>Seamless Installation</h3><p>6-inch high-flow standard for rural Florence homes.</p><span class="svc-mini-card__link">View Service →</span></a>
        <a href="/services/aluminum-gutters/" class="svc-mini-card card-tint-2"><div class="svc-mini-card__icon"><i data-lucide="shield"></i></div><h3>Aluminum Gutters</h3><p>25+ colors for Florence rural palettes.</p><span class="svc-mini-card__link">View Service →</span></a>
        <a href="/services/copper-gutters/" class="svc-mini-card card-tint-3"><div class="svc-mini-card__icon"><i data-lucide="sparkles"></i></div><h3>Copper Gutters</h3><p>Specialty work for premium rural estates.</p><span class="svc-mini-card__link">View Service →</span></a>
        <a href="/services/gutter-guards/" class="svc-mini-card card-tint-1"><div class="svc-mini-card__icon"><i data-lucide="filter"></i></div><h3>Gutter Guards</h3><p>Essential under heavy rural tree canopy.</p><span class="svc-mini-card__link">View Service →</span></a>
        <a href="/services/gutter-cleaning/" class="svc-mini-card card-tint-3"><div class="svc-mini-card__icon"><i data-lucide="droplets"></i></div><h3>Gutter Cleaning</h3><p>Quarterly plans for heavy-canopy properties.</p><span class="svc-mini-card__link">View Service →</span></a>
        <a href="/services/gutter-repair-replacement/" class="svc-mini-card card-tint-2"><div class="svc-mini-card__icon"><i data-lucide="wrench"></i></div><h3>Repair &amp; Replacement</h3><p>Storm damage and aging-system replacements.</p><span class="svc-mini-card__link">View Service →</span></a>
        <a href="/services/commercial-gutters/" class="svc-mini-card card-tint-1"><div class="svc-mini-card__icon"><i data-lucide="building-2"></i></div><h3>Commercial Gutters</h3><p>Highway 49 corridor commercial properties.</p><span class="svc-mini-card__link">View Service →</span></a>
        <a href="/services/custom-downspouts/" class="svc-mini-card card-tint-3"><div class="svc-mini-card__icon"><i data-lucide="arrow-down-to-line"></i></div><h3>Custom Downspouts</h3><p>Underground tie-ins ideal for Florence acreage.</p><span class="svc-mini-card__link">View Service →</span></a>
      </div>
    </div>
  </section>

  <section class="section section-alt">
    <div class="container">
      <div class="split-reverse">
        <div class="reveal-left">
          <span class="eyebrow-label">What to Expect</span>
          <h2>What Does a Dun-Rite Install <span class="text-accent">Look Like in Florence?</span></h2>
          <p style="margin-top: var(--space-md);">Florence installations frequently take 1–2 days because the homes are larger and we're often running underground drainage in addition to gutters. Trenching for drainage runs adds 4–8 hours of work but solves foundation moisture issues that splash blocks can't address.</p>
          <p>For homes with active runoff problems — water in the basement, washout in flowerbeds, soggy spots near the foundation — we always quote underground drainage as a separate line item so you can see exactly what it costs. Most Florence customers add it.</p>
          <p>25 miles from Madison HQ. Free travel both ways.</p>
        </div>
        <div class="reveal-right">
          <img src="https://i.imgur.com/Hr2Nlwl.jpeg" alt="Florence MS rural home with seamless gutter installation by Dun-Rite" width="900" height="600" loading="lazy" style="border-radius: var(--radius-md); box-shadow: var(--shadow-lg);">
        </div>
      </div>

      <div class="mid-cta-line reveal-up">
        Have foundation moisture issues at a Florence property? <a href="/contact/">Schedule a free estimate</a> — we'll quote gutters and underground drainage together.
      </div>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="section-title reveal-up">
        <span class="eyebrow-label">Frequently Asked</span>
        <h2>Florence Service <span class="text-accent">Questions.</span></h2>
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
        <h2>Also Serving Florence's <span class="text-accent">Neighbors.</span></h2>
      </div>
      <div class="related-services-grid">
        <a href="/service-areas/richland/" class="related-card reveal-up reveal-delay-1"><div class="related-card__icon"><i data-lucide="map-pin"></i></div><h3>Richland (8 mi)</h3><p>Florence's northern neighbor along the I-20 corridor.</p><span class="related-card__link">View Richland →</span></a>
        <a href="/service-areas/pearl/" class="related-card reveal-up reveal-delay-2"><div class="related-card__icon"><i data-lucide="map-pin"></i></div><h3>Pearl (12 mi)</h3><p>Pearl River suburb. 1970s-80s ranch homes.</p><span class="related-card__link">View Pearl →</span></a>
        <a href="/service-areas/terry/" class="related-card reveal-up reveal-delay-3"><div class="related-card__icon"><i data-lucide="map-pin"></i></div><h3>Terry (10 mi)</h3><p>Small rural town in southern Hinds County.</p><span class="related-card__link">View Terry →</span></a>
      </div>
    </div>
  </section>

  <section class="closing-cta" aria-label="Florence estimate">
    <div class="closing-cta__inner reveal-up">
      <span class="section-subtitle" style="color: var(--color-accent);">Mark and the team</span>
      <h2>Ready for a Free <span class="text-accent">Florence Estimate?</span></h2>
      <p>Free travel from Madison. 25-year warranty. Underground drainage specialists. Mississippi licensed and insured.</p>
      <div>
        <a href="/contact/" class="btn-primary">Get My Free Estimate</a>
        <a href="tel:+16017501800" class="closing-cta__phone">Or Call (601) 750-1800</a>
      </div>
      <p class="closing-cta__meta">Mon–Fri 8AM–5PM · Madison, MS · Mississippi Licensed &amp; Insured</p>
    </div>
  </section>

</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
