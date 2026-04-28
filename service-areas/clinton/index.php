<?php
/**
 * Dun-Rite — Clinton, MS
 */

$pageTitle       = "Gutter Services in Clinton, MS | Dun-Rite Seamless Gutters";
$pageDescription = "Seamless gutter installation in Clinton, Mississippi — Olde Towne, The Traceway, and the Mississippi College area. Mature pecan canopy specialists. Free estimates from Dun-Rite.";
$canonicalUrl    = "https://dunrite-gutters.com/service-areas/clinton/";
$ogImage         = "https://i.imgur.com/7Je9z8J.jpeg";
$heroImage       = "https://i.imgur.com/7Je9z8J.jpeg";
$currentPage     = "service-areas";

$faqs = [
  ["q" => "What is Dun-Rite's service area boundary?", "a" => "We serve 14 cities across the greater Jackson metro area: Madison (HQ), Jackson, Brandon, Flowood, Ridgeland, Clinton, Canton, Pearl, Gluckstadt, Florence, Richland, Bolton, Terry, and Raymond. Our service radius extends roughly 30 miles in each direction from our Madison headquarters. Outside this range, we evaluate special requests case-by-case — call (601) 750-1800 to ask."],
  ["q" => "Do you charge travel or trip fees for Clinton jobs?", "a" => "No. Free travel anywhere within our 14-city service area, regardless of distance from our Madison headquarters. The estimate you receive is the price you pay — no fuel surcharges, no trip charges."],
  ["q" => "How quickly can you schedule a visit in Clinton?", "a" => "Most free estimates in Clinton are scheduled within 48 hours of your call. Standard installations typically begin within 1–2 weeks. Storm damage and emergency repairs are prioritized."],
  ["q" => "How do you handle Clinton's mature pecan canopy?", "a" => "Pecan trees are the dominant tree in Olde Towne Clinton and the older Mississippi College area neighborhoods. Pecan debris is heavier than most leaves and produces sticky residue when wet. We strongly recommend gutter guards for any Clinton home with pecan trees on the lot — without them, twice-yearly cleaning won't keep up with the seasonal load."],
  ["q" => "Do you work on the Mississippi College campus area?", "a" => "Yes. We've handled both residential properties around the Mississippi College campus and several institutional and small commercial projects in the area. The historic Olde Towne district often requires custom-formed sections to match irregular rooflines on older homes."],
];

$schemaGraph = [
  "@context" => "https://schema.org",
  "@graph" => [
    ["@type" => ["LocalBusiness", "RoofingContractor"], "@id" => $canonicalUrl . "#business", "name" => "Dun-Rite Seamless Gutters – Clinton Service Area", "url" => $canonicalUrl, "telephone" => "+16017501800", "branchOf" => ["@id" => "https://dunrite-gutters.com/#business"], "areaServed" => ["@type" => "City", "name" => "Clinton", "addressRegion" => "MS"]],
    ["@type" => "BreadcrumbList", "itemListElement" => [
      ["@type" => "ListItem", "position" => 1, "name" => "Home", "item" => "https://dunrite-gutters.com/"],
      ["@type" => "ListItem", "position" => 2, "name" => "Service Areas", "item" => "https://dunrite-gutters.com/service-areas/"],
      ["@type" => "ListItem", "position" => 3, "name" => "Clinton", "item" => $canonicalUrl],
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
    <img src="https://i.imgur.com/7Je9z8J.jpeg" alt="Brick Clinton MS home with dormers and seamless gutters" class="hero-bg" width="1920" height="1080" loading="eager" fetchpriority="high">
    <div class="hero__inner">
      <div class="hero__copy">
        <span class="eyebrow-label">Clinton, MS · 18 Miles from HQ</span>
        <h1>Gutter Services in <span class="text-accent">Clinton, MS.</span></h1>
        <p class="hero__subhead">College town with mature pecan canopy and historic Olde Towne homes. The Mississippi College area homes need experienced installers who know how to work older rooflines.</p>
        <div class="hero__ctas">
          <a href="#hero-form-heading" class="btn-primary">Get Free Estimate</a>
          <a href="tel:+16017501800" class="btn-secondary btn-on-dark">Call (601) 750-1800</a>
        </div>
        <p class="hero__phone">Mon–Fri 8AM–5PM · 18 miles SW of Madison HQ</p>
      </div>
      <?php
        $preselectedService = 'Not Sure / General Inquiry';
        $heroFormHeading    = 'Free Clinton Estimate';
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
        <li aria-current="page">Clinton</li>
      </ol>
    </div>
  </nav>

  <section class="section">
    <div class="container">
      <div class="answer-block reveal-up">
        <h2>Gutter Services in Clinton, Mississippi</h2>
        <p>Dun-Rite Seamless Gutters provides seamless installation, copper, gutter guards, cleaning, and repair services in Clinton, Mississippi. From our Madison headquarters 18 miles to the northeast, we serve homes throughout Olde Towne Clinton, The Traceway, and the Mississippi College area. The mature pecan canopy makes gutter guards essential for most Clinton properties. Free estimates with no travel charges. Call (601) 750-1800.</p>
      </div>
    </div>
  </section>

  <section class="section section-alt">
    <div class="container">
      <div class="section-title reveal-up">
        <span class="eyebrow-label">Local Expertise</span>
        <h2>Why Clinton Homeowners <span class="text-accent">Choose Dun-Rite.</span></h2>
        <span class="section-subtitle">historic homes, modern installation</span>
      </div>

      <div class="sub-service-grid">
        <div class="sub-service-card card-tint-1 reveal-up reveal-delay-1">
          <div class="sub-service-icon"><i data-lucide="trees"></i></div>
          <h3>Heavy Pecan Canopy</h3>
          <p>Olde Towne Clinton and the older Mississippi College area neighborhoods are dominated by mature pecans. Pecan debris is heavier than most leaves and produces sticky residue when wet. Without gutter guards, you're cleaning every 2 months in fall. We install screen-style guards heavy enough to handle pecan loads.</p>
        </div>
        <div class="sub-service-card card-tint-3 reveal-up reveal-delay-2">
          <div class="sub-service-icon"><i data-lucide="building"></i></div>
          <h3>Historic Olde Towne</h3>
          <p>Many Olde Towne homes are 75–100+ years old with non-standard fascia depths and irregular rooflines. We custom-form on-site to match any roofline and inspect the wood fascia before quoting — older homes often need fascia repair as part of any gutter project.</p>
        </div>
        <div class="sub-service-card card-tint-2 reveal-up reveal-delay-3">
          <div class="sub-service-icon"><i data-lucide="graduation-cap"></i></div>
          <h3>College Town Mix</h3>
          <p>Clinton's housing mix runs from historic Olde Towne to The Traceway custom builds to faculty and rental properties around the Mississippi College campus. We tailor recommendations to each property — copper specialty work on premium addresses, durable aluminum on rental and faculty homes.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="section-title reveal-up">
        <span class="eyebrow-label">All Services Available</span>
        <h2>All 8 Gutter Services <span class="text-accent">in Clinton.</span></h2>
      </div>

      <div class="services-in-city">
        <a href="/services/seamless-gutter-installation/" class="svc-mini-card card-tint-1"><div class="svc-mini-card__icon"><i data-lucide="ruler"></i></div><h3>Seamless Installation</h3><p>Custom-formed for irregular Olde Towne rooflines.</p><span class="svc-mini-card__link">View Service →</span></a>
        <a href="/services/aluminum-gutters/" class="svc-mini-card card-tint-2"><div class="svc-mini-card__icon"><i data-lucide="shield"></i></div><h3>Aluminum Gutters</h3><p>25+ colors for historic Clinton home palettes.</p><span class="svc-mini-card__link">View Service →</span></a>
        <a href="/services/copper-gutters/" class="svc-mini-card card-tint-3"><div class="svc-mini-card__icon"><i data-lucide="sparkles"></i></div><h3>Copper Gutters</h3><p>Specialty work for The Traceway custom homes.</p><span class="svc-mini-card__link">View Service →</span></a>
        <a href="/services/gutter-guards/" class="svc-mini-card card-tint-1"><div class="svc-mini-card__icon"><i data-lucide="filter"></i></div><h3>Gutter Guards</h3><p>Essential for pecan-heavy Clinton properties.</p><span class="svc-mini-card__link">View Service →</span></a>
        <a href="/services/gutter-cleaning/" class="svc-mini-card card-tint-3"><div class="svc-mini-card__icon"><i data-lucide="droplets"></i></div><h3>Gutter Cleaning</h3><p>Quarterly plans for pecan-canopy properties.</p><span class="svc-mini-card__link">View Service →</span></a>
        <a href="/services/gutter-repair-replacement/" class="svc-mini-card card-tint-2"><div class="svc-mini-card__icon"><i data-lucide="wrench"></i></div><h3>Repair &amp; Replacement</h3><p>Historic home replacements with fascia repair.</p><span class="svc-mini-card__link">View Service →</span></a>
        <a href="/services/commercial-gutters/" class="svc-mini-card card-tint-1"><div class="svc-mini-card__icon"><i data-lucide="building-2"></i></div><h3>Commercial Gutters</h3><p>Olde Towne small commercial and institutional.</p><span class="svc-mini-card__link">View Service →</span></a>
        <a href="/services/custom-downspouts/" class="svc-mini-card card-tint-3"><div class="svc-mini-card__icon"><i data-lucide="arrow-down-to-line"></i></div><h3>Custom Downspouts</h3><p>Decorative profiles for historic Clinton homes.</p><span class="svc-mini-card__link">View Service →</span></a>
      </div>
    </div>
  </section>

  <section class="section section-alt">
    <div class="container">
      <div class="split-reverse">
        <div class="reveal-left">
          <span class="eyebrow-label">What to Expect</span>
          <h2>What Does a Dun-Rite Install <span class="text-accent">Look Like in Clinton?</span></h2>
          <p style="margin-top: var(--space-md);">Clinton installations vary widely based on home age. Newer Traceway homes complete in 6–8 hours like any standard install. Older Olde Towne homes take 1–2 days because of fascia repair work — we frequently find soft or rotted wood that needs board-by-board replacement before clean re-installation.</p>
          <p>We always inspect fascia condition during free estimates and photograph any concerns. Many Clinton repair calls turn into combined repair + gutter projects when we find the actual problem is decades-old fascia rot, not the gutters themselves.</p>
          <p>18 miles from Madison HQ. Free travel.</p>
        </div>
        <div class="reveal-right">
          <img src="https://i.imgur.com/7Je9z8J.jpeg" alt="Clinton MS brick home with dormers and seamless gutters by Dun-Rite" width="900" height="600" loading="lazy" style="border-radius: var(--radius-md); box-shadow: var(--shadow-lg);">
        </div>
      </div>

      <div class="mid-cta-line reveal-up">
        Live in Clinton or near Mississippi College? <a href="/contact/">Schedule a free estimate</a> — most appointments within 48 hours.
      </div>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="section-title reveal-up">
        <span class="eyebrow-label">Frequently Asked</span>
        <h2>Clinton Service <span class="text-accent">Questions.</span></h2>
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
        <h2>Also Serving Clinton's <span class="text-accent">Neighbors.</span></h2>
      </div>
      <div class="related-services-grid">
        <a href="/service-areas/jackson/" class="related-card reveal-up reveal-delay-1"><div class="related-card__icon"><i data-lucide="map-pin"></i></div><h3>Jackson (8 mi)</h3><p>State capital, immediate eastern neighbor. Historic Belhaven, Fondren, Eastover.</p><span class="related-card__link">View Jackson →</span></a>
        <a href="/service-areas/raymond/" class="related-card reveal-up reveal-delay-2"><div class="related-card__icon"><i data-lucide="map-pin"></i></div><h3>Raymond (8 mi)</h3><p>Hinds County seat. Historic small town with Civil War history.</p><span class="related-card__link">View Raymond →</span></a>
        <a href="/service-areas/bolton/" class="related-card reveal-up reveal-delay-3"><div class="related-card__icon"><i data-lucide="map-pin"></i></div><h3>Bolton (10 mi)</h3><p>Rural Hinds County town. Acreage homes with mature trees.</p><span class="related-card__link">View Bolton →</span></a>
      </div>
    </div>
  </section>

  <section class="closing-cta" aria-label="Clinton estimate">
    <div class="closing-cta__inner reveal-up">
      <span class="section-subtitle" style="color: var(--color-accent);">Mark and the team</span>
      <h2>Ready for a Free <span class="text-accent">Clinton Estimate?</span></h2>
      <p>Free travel from Madison. 25-year warranty. Mississippi licensed and insured.</p>
      <div>
        <a href="/contact/" class="btn-primary">Get My Free Estimate</a>
        <a href="tel:+16017501800" class="closing-cta__phone">Or Call (601) 750-1800</a>
      </div>
      <p class="closing-cta__meta">Mon–Fri 8AM–5PM · Madison, MS · Mississippi Licensed &amp; Insured</p>
    </div>
  </section>

</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
