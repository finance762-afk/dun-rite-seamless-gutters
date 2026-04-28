<?php
/**
 * Dun-Rite — Bolton, MS
 */

$pageTitle       = "Gutter Services in Bolton, MS | Dun-Rite Seamless Gutters";
$pageDescription = "Seamless gutter installation in Bolton, Mississippi — rural Hinds County. Larger acreage, mature trees, custom rural builds. Free estimates from Dun-Rite Seamless Gutters.";
$canonicalUrl    = "https://dunrite-gutters.com/service-areas/bolton/";
$ogImage         = "https://i.imgur.com/u0mERob.jpeg";
$heroImage       = "https://i.imgur.com/u0mERob.jpeg";
$currentPage     = "service-areas";

$faqs = [
  ["q" => "What is Dun-Rite's service area boundary?", "a" => "We serve 14 cities across the greater Jackson metro area: Madison (HQ), Jackson, Brandon, Flowood, Ridgeland, Clinton, Canton, Pearl, Gluckstadt, Florence, Richland, Bolton, Terry, and Raymond. Our service radius extends roughly 30 miles in each direction from our Madison headquarters. Outside this range, we evaluate special requests case-by-case — call (601) 750-1800 to ask."],
  ["q" => "Do you charge travel or trip fees for Bolton jobs?", "a" => "No. Free travel anywhere within our 14-city service area. Bolton sits at the western edge of our service radius — about 28 miles from Madison HQ — and the travel is still included at no charge."],
  ["q" => "How quickly can you schedule a visit in Bolton?", "a" => "Most free estimates in Bolton are scheduled within 48–72 hours of your call (slightly longer than urban suburbs because of distance). Standard installations begin within 1–2 weeks. Storm damage and emergency repairs are still prioritized."],
  ["q" => "Do you work on rural acreage homes in Bolton?", "a" => "Yes — most Bolton properties are exactly that. Acreage homes with larger rooflines, complex valleys, and heavy mature tree coverage. We install 6-inch high-flow K-style gutters paired with oversized downspouts on most Bolton properties, plus underground drainage runs that the larger lots actually accommodate well."],
];

$schemaGraph = [
  "@context" => "https://schema.org",
  "@graph" => [
    ["@type" => ["LocalBusiness", "RoofingContractor"], "@id" => $canonicalUrl . "#business", "name" => "Dun-Rite Seamless Gutters – Bolton Service Area", "url" => $canonicalUrl, "telephone" => "+16017501800", "branchOf" => ["@id" => "https://dunrite-gutters.com/#business"], "areaServed" => ["@type" => "City", "name" => "Bolton", "addressRegion" => "MS"]],
    ["@type" => "BreadcrumbList", "itemListElement" => [
      ["@type" => "ListItem", "position" => 1, "name" => "Home", "item" => "https://dunrite-gutters.com/"],
      ["@type" => "ListItem", "position" => 2, "name" => "Service Areas", "item" => "https://dunrite-gutters.com/service-areas/"],
      ["@type" => "ListItem", "position" => 3, "name" => "Bolton", "item" => $canonicalUrl],
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
    <img src="https://i.imgur.com/u0mERob.jpeg" alt="Bolton MS rural home with skylight and seamless gutter system" class="hero-bg" width="1920" height="1080" loading="eager" fetchpriority="high">
    <div class="hero__inner">
      <div class="hero__copy">
        <span class="eyebrow-label">Bolton, MS · 28 Miles from HQ</span>
        <h1>Gutter Services in <span class="text-accent">Bolton, MS.</span></h1>
        <p class="hero__subhead">Rural Hinds County. Acreage homes with mature tree coverage and rooflines that need real engineering — high-flow profiles, oversized downspouts, underground drainage.</p>
        <div class="hero__ctas">
          <a href="#hero-form-heading" class="btn-primary">Get Free Estimate</a>
          <a href="tel:+16017501800" class="btn-secondary btn-on-dark">Call (601) 750-1800</a>
        </div>
        <p class="hero__phone">Mon–Fri 8AM–5PM · 28 miles SW of Madison HQ</p>
      </div>
      <?php
        $preselectedService = 'Not Sure / General Inquiry';
        $heroFormHeading    = 'Free Bolton Estimate';
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
        <li aria-current="page">Bolton</li>
      </ol>
    </div>
  </nav>

  <section class="section">
    <div class="container">
      <div class="answer-block reveal-up">
        <h2>Gutter Services in Bolton, Mississippi</h2>
        <p>Dun-Rite Seamless Gutters provides seamless installation, copper, gutter guards, cleaning, and repair services in Bolton, Mississippi. From our Madison headquarters 28 miles east, we serve rural Hinds County acreage homes with mature tree coverage and complex rooflines. Free travel within our service area; no extra charges for the western drive. Free estimates with no fuel surcharges. Call (601) 750-1800.</p>
      </div>
    </div>
  </section>

  <section class="section section-alt">
    <div class="container">
      <div class="section-title reveal-up">
        <span class="eyebrow-label">Local Expertise</span>
        <h2>Why Bolton Homeowners <span class="text-accent">Choose Dun-Rite.</span></h2>
        <span class="section-subtitle">rural acreage, real installation</span>
      </div>

      <div class="sub-service-grid">
        <div class="sub-service-card card-tint-1 reveal-up reveal-delay-1">
          <div class="sub-service-icon"><i data-lucide="trees"></i></div>
          <h3>Heavy Mature Tree Coverage</h3>
          <p>Bolton's small population (~600) sits on serious rural acreage with mature pines, oaks, and hardwood mix. Tree coverage is dense — gutter guards aren't optional, they're required. Without them, even oversized profiles clog within a single fall season.</p>
        </div>
        <div class="sub-service-card card-tint-3 reveal-up reveal-delay-2">
          <div class="sub-service-icon"><i data-lucide="route"></i></div>
          <h3>Real Underground Drainage</h3>
          <p>Bolton acreage easily accommodates 50+ foot underground drainage runs to daylight discharge points. We can move water far enough from foundations that splash blocks become unnecessary. This is rural drainage done right — no compromises with tight suburban setbacks.</p>
        </div>
        <div class="sub-service-card card-tint-2 reveal-up reveal-delay-3">
          <div class="sub-service-icon"><i data-lucide="ruler"></i></div>
          <h3>Custom Rural Builds</h3>
          <p>Most Bolton homes are custom rural builds rather than tract housing. Steeper pitches, larger rooflines, complex valleys with multiple drainage points. We frequently install 6-inch high-flow K-style with 4x5 oversized downspouts to handle the volume.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="section-title reveal-up">
        <span class="eyebrow-label">All Services Available</span>
        <h2>All 8 Gutter Services <span class="text-accent">in Bolton.</span></h2>
      </div>

      <div class="services-in-city">
        <a href="/services/seamless-gutter-installation/" class="svc-mini-card card-tint-1"><div class="svc-mini-card__icon"><i data-lucide="ruler"></i></div><h3>Seamless Installation</h3><p>6-inch high-flow standard for Bolton acreage homes.</p><span class="svc-mini-card__link">View Service →</span></a>
        <a href="/services/aluminum-gutters/" class="svc-mini-card card-tint-2"><div class="svc-mini-card__icon"><i data-lucide="shield"></i></div><h3>Aluminum Gutters</h3><p>25+ colors for rural Bolton home palettes.</p><span class="svc-mini-card__link">View Service →</span></a>
        <a href="/services/copper-gutters/" class="svc-mini-card card-tint-3"><div class="svc-mini-card__icon"><i data-lucide="sparkles"></i></div><h3>Copper Gutters</h3><p>Specialty work for premium rural estates.</p><span class="svc-mini-card__link">View Service →</span></a>
        <a href="/services/gutter-guards/" class="svc-mini-card card-tint-1"><div class="svc-mini-card__icon"><i data-lucide="filter"></i></div><h3>Gutter Guards</h3><p>Required under heavy Bolton tree canopy.</p><span class="svc-mini-card__link">View Service →</span></a>
        <a href="/services/gutter-cleaning/" class="svc-mini-card card-tint-3"><div class="svc-mini-card__icon"><i data-lucide="droplets"></i></div><h3>Gutter Cleaning</h3><p>Quarterly plans for heavy-canopy properties.</p><span class="svc-mini-card__link">View Service →</span></a>
        <a href="/services/gutter-repair-replacement/" class="svc-mini-card card-tint-2"><div class="svc-mini-card__icon"><i data-lucide="wrench"></i></div><h3>Repair &amp; Replacement</h3><p>Storm damage and aging-system replacements.</p><span class="svc-mini-card__link">View Service →</span></a>
        <a href="/services/commercial-gutters/" class="svc-mini-card card-tint-1"><div class="svc-mini-card__icon"><i data-lucide="building-2"></i></div><h3>Commercial Gutters</h3><p>Rural commercial and agricultural buildings.</p><span class="svc-mini-card__link">View Service →</span></a>
        <a href="/services/custom-downspouts/" class="svc-mini-card card-tint-3"><div class="svc-mini-card__icon"><i data-lucide="arrow-down-to-line"></i></div><h3>Custom Downspouts</h3><p>50+ foot underground tie-ins ideal for Bolton.</p><span class="svc-mini-card__link">View Service →</span></a>
      </div>
    </div>
  </section>

  <section class="section section-alt">
    <div class="container">
      <div class="split-reverse">
        <div class="reveal-left">
          <span class="eyebrow-label">What to Expect</span>
          <h2>What Does a Dun-Rite Install <span class="text-accent">Look Like in Bolton?</span></h2>
          <p style="margin-up: var(--space-md); margin-top: var(--space-md);">Bolton acreage installations almost always run 1–2 days. The homes are larger, the rooflines are more complex, and we frequently combine gutter installation with substantial underground drainage runs. We arrive between 7:30 and 8:00 AM, set up trenching equipment if needed, and work through the day.</p>
          <p>For homes with active foundation moisture issues, we always recommend underground drainage as part of the project. Bolton lots have the room for it; few suburban properties do. The price difference is real but the long-term benefit is dramatic.</p>
          <p>28 miles from Madison HQ. Free travel.</p>
        </div>
        <div class="reveal-right">
          <img src="https://i.imgur.com/Hr2Nlwl.jpeg" alt="Bolton MS rural acreage home with seamless gutter installation by Dun-Rite" width="900" height="600" loading="lazy" style="border-radius: var(--radius-md); box-shadow: var(--shadow-lg);">
        </div>
      </div>

      <div class="mid-cta-line reveal-up">
        Own rural acreage in Bolton? <a href="/contact/">Schedule a free combined gutter and drainage estimate</a> — most appointments within 72 hours.
      </div>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="section-title reveal-up">
        <span class="eyebrow-label">Frequently Asked</span>
        <h2>Bolton Service <span class="text-accent">Questions.</span></h2>
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
        <h2>Also Serving Bolton's <span class="text-accent">Neighbors.</span></h2>
      </div>
      <div class="related-services-grid">
        <a href="/service-areas/clinton/" class="related-card reveal-up reveal-delay-1"><div class="related-card__icon"><i data-lucide="map-pin"></i></div><h3>Clinton (10 mi)</h3><p>Bolton's eastern neighbor. College town with mature pecan canopy.</p><span class="related-card__link">View Clinton →</span></a>
        <a href="/service-areas/raymond/" class="related-card reveal-up reveal-delay-2"><div class="related-card__icon"><i data-lucide="map-pin"></i></div><h3>Raymond (8 mi)</h3><p>Hinds County seat with historic district and Hinds CC.</p><span class="related-card__link">View Raymond →</span></a>
        <a href="/service-areas/terry/" class="related-card reveal-up reveal-delay-3"><div class="related-card__icon"><i data-lucide="map-pin"></i></div><h3>Terry (15 mi)</h3><p>Small rural town in southern Hinds County.</p><span class="related-card__link">View Terry →</span></a>
      </div>
    </div>
  </section>

  <section class="closing-cta" aria-label="Bolton estimate">
    <div class="closing-cta__inner reveal-up">
      <span class="section-subtitle" style="color: var(--color-accent);">Mark and the team</span>
      <h2>Ready for a Free <span class="text-accent">Bolton Estimate?</span></h2>
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
