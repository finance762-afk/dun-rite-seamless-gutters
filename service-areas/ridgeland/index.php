<?php
/**
 * Dun-Rite — Ridgeland, MS
 */

$pageTitle       = "Gutter Services in Ridgeland, MS | Dun-Rite Seamless Gutters";
$pageDescription = "Seamless gutter installation in Ridgeland, Mississippi — including Bridgewater, Trace Harbor, and Lake Castle. Closest neighbor to Madison HQ. Free estimates from Dun-Rite Seamless Gutters.";
$canonicalUrl    = "https://dunrite-gutters.com/service-areas/ridgeland/";
$ogImage         = "https://i.imgur.com/GO8sZjl.jpeg";
$heroImage       = "https://i.imgur.com/GO8sZjl.jpeg";
$currentPage     = "service-areas";

$faqs = [
  ["q" => "What is Dun-Rite's service area boundary?", "a" => "We serve 14 cities across the greater Jackson metro area: Madison (HQ), Jackson, Brandon, Flowood, Ridgeland, Clinton, Canton, Pearl, Gluckstadt, Florence, Richland, Bolton, Terry, and Raymond. Our service radius extends roughly 30 miles in each direction from our Madison headquarters. Outside this range, we evaluate special requests case-by-case — call (601) 750-1800 to ask."],
  ["q" => "Do you charge travel or trip fees for Ridgeland jobs?", "a" => "No. Free travel anywhere within our 14-city service area. Ridgeland is our closest neighbor — only 3 miles from our Madison headquarters — so there's effectively no travel cost involved. The estimate you receive is the price you pay."],
  ["q" => "How quickly can you schedule a Ridgeland estimate?", "a" => "Most Ridgeland estimates schedule within 24 hours of your call. As our closest neighboring city, Ridgeland gets near-Madison priority — same-day windows are available almost every week. Standard installations typically begin within 1–2 weeks of the signed estimate."],
  ["q" => "What's the typical Ridgeland home like for gutter installation?", "a" => "Ridgeland's housing stock leans mature 1980s-90s neighborhoods — Bridgewater, Trace Harbor, Lake Castle, and similar — with some newer infill and custom builds along the Reservoir. Most are single-story or 1.5-story homes with 5-inch K-style gutters, though we install plenty of 6-inch high-flow profiles on the larger custom homes."],
  ["q" => "Are gutter guards worth it for Ridgeland homes?", "a" => "For most Ridgeland addresses, yes. The mature magnolia and oak coverage in Bridgewater and the older Ridgeland neighborhoods produces enough seasonal debris that twice-yearly cleaning isn't always sufficient. Mesh or screen guards typically pay for themselves in 4–6 years versus repeated cleanings, and they're particularly valuable for two-story homes where ladder access is dangerous."],
];

$schemaGraph = [
  "@context" => "https://schema.org",
  "@graph" => [
    ["@type" => ["LocalBusiness", "RoofingContractor"], "@id" => $canonicalUrl . "#business", "name" => "Dun-Rite Seamless Gutters – Ridgeland Service Area", "url" => $canonicalUrl, "telephone" => "+16017501800", "branchOf" => ["@id" => "https://dunrite-gutters.com/#business"], "areaServed" => ["@type" => "City", "name" => "Ridgeland", "addressRegion" => "MS"]],
    ["@type" => "BreadcrumbList", "itemListElement" => [
      ["@type" => "ListItem", "position" => 1, "name" => "Home", "item" => "https://dunrite-gutters.com/"],
      ["@type" => "ListItem", "position" => 2, "name" => "Service Areas", "item" => "https://dunrite-gutters.com/service-areas/"],
      ["@type" => "ListItem", "position" => 3, "name" => "Ridgeland", "item" => $canonicalUrl],
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
    <img src="https://i.imgur.com/GO8sZjl.jpeg" alt="Yellow brick Ridgeland MS home with white seamless gutters" class="hero-bg" width="1920" height="1080" loading="eager" fetchpriority="high">
    <div class="hero__inner">
      <div class="hero__copy">
        <span class="eyebrow-label">Ridgeland, MS · 3 Miles from HQ</span>
        <h1>Gutter Services in <span class="text-accent">Ridgeland, MS.</span></h1>
        <p class="hero__subhead">Three miles from our Madison headquarters — practically next door. Bridgewater, Trace Harbor, Lake Castle, and the mature 1980s-90s neighborhoods get same-week scheduling.</p>
        <div class="hero__ctas">
          <a href="#hero-form-heading" class="btn-primary">Get Free Estimate</a>
          <a href="tel:+16017501800" class="btn-secondary btn-on-dark">Call (601) 750-1800</a>
        </div>
        <p class="hero__phone">Mon–Fri 8AM–5PM · Same-week Ridgeland scheduling</p>
      </div>
      <?php
        $preselectedService = 'Not Sure / General Inquiry';
        $heroFormHeading    = 'Free Ridgeland Estimate';
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
        <li aria-current="page">Ridgeland</li>
      </ol>
    </div>
  </nav>

  <section class="section">
    <div class="container">
      <div class="answer-block reveal-up">
        <h2>Gutter Services in Ridgeland, Mississippi</h2>
        <p>Dun-Rite Seamless Gutters provides seamless installation, copper, gutter guards, cleaning, and repair services in Ridgeland, Mississippi. From our Madison headquarters just 3 miles north, Ridgeland is our closest neighbor — Bridgewater, Trace Harbor, Lake Castle, and the affluent 1980s-90s neighborhoods all get same-week scheduling priority. Free estimates with no travel charges. Call (601) 750-1800.</p>
      </div>
    </div>
  </section>

  <section class="section section-alt">
    <div class="container">
      <div class="section-title reveal-up">
        <span class="eyebrow-label">Local Expertise</span>
        <h2>Why Ridgeland Homeowners <span class="text-accent">Choose Dun-Rite.</span></h2>
        <span class="section-subtitle">three miles makes a difference</span>
      </div>

      <div class="sub-service-grid">
        <div class="sub-service-card card-tint-1 reveal-up reveal-delay-1">
          <div class="sub-service-icon"><i data-lucide="zap"></i></div>
          <h3>Closest Neighbor to HQ</h3>
          <p>Only 3 miles separate Madison HQ from Ridgeland addresses. Same-day estimate windows are available most weeks, and we can typically respond to active leak emergencies within 4 hours during business hours. There's no other gutter installer this close to Ridgeland.</p>
        </div>
        <div class="sub-service-card card-tint-3 reveal-up reveal-delay-2">
          <div class="sub-service-icon"><i data-lucide="trees"></i></div>
          <h3>Heavy Magnolia &amp; Oak Coverage</h3>
          <p>Ridgeland's mature streets are heavily shaded by magnolia and oak — particularly in Bridgewater, Trace Harbor, and along Old Trace Park. Magnolia leaves are leathery and don't break down quickly, making them a particular gutter-clog problem. Mesh guards help; quarterly cleaning may still be needed.</p>
        </div>
        <div class="sub-service-card card-tint-2 reveal-up reveal-delay-3">
          <div class="sub-service-icon"><i data-lucide="home"></i></div>
          <h3>Mature 1980s-90s Housing Stock</h3>
          <p>Many Ridgeland homes are now 30–40 years past their original gutter installation. Common issues we see: failed corner sealants, sagging from leaf-load fatigue, and undersized 2x3 downspouts. Replacement is usually the right call rather than incremental repair on aging systems.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="section-title reveal-up">
        <span class="eyebrow-label">All Services Available</span>
        <h2>All 8 Gutter Services <span class="text-accent">in Ridgeland.</span></h2>
      </div>

      <div class="services-in-city">
        <a href="/services/seamless-gutter-installation/" class="svc-mini-card card-tint-1"><div class="svc-mini-card__icon"><i data-lucide="ruler"></i></div><h3>Seamless Installation</h3><p>5-inch and 6-inch profiles for Ridgeland homes.</p><span class="svc-mini-card__link">View Service →</span></a>
        <a href="/services/aluminum-gutters/" class="svc-mini-card card-tint-2"><div class="svc-mini-card__icon"><i data-lucide="shield"></i></div><h3>Aluminum Gutters</h3><p>Color-matched to Bridgewater architectural palettes.</p><span class="svc-mini-card__link">View Service →</span></a>
        <a href="/services/copper-gutters/" class="svc-mini-card card-tint-3"><div class="svc-mini-card__icon"><i data-lucide="sparkles"></i></div><h3>Copper Gutters</h3><p>Specialty for premium Reservoir-side homes.</p><span class="svc-mini-card__link">View Service →</span></a>
        <a href="/services/gutter-guards/" class="svc-mini-card card-tint-1"><div class="svc-mini-card__icon"><i data-lucide="filter"></i></div><h3>Gutter Guards</h3><p>Critical for magnolia-heavy properties.</p><span class="svc-mini-card__link">View Service →</span></a>
        <a href="/services/gutter-cleaning/" class="svc-mini-card card-tint-3"><div class="svc-mini-card__icon"><i data-lucide="droplets"></i></div><h3>Gutter Cleaning</h3><p>Quarterly plans for heavy-canopy properties.</p><span class="svc-mini-card__link">View Service →</span></a>
        <a href="/services/gutter-repair-replacement/" class="svc-mini-card card-tint-2"><div class="svc-mini-card__icon"><i data-lucide="wrench"></i></div><h3>Repair &amp; Replacement</h3><p>Aging 80s-90s system replacements.</p><span class="svc-mini-card__link">View Service →</span></a>
        <a href="/services/commercial-gutters/" class="svc-mini-card card-tint-1"><div class="svc-mini-card__icon"><i data-lucide="building-2"></i></div><h3>Commercial Gutters</h3><p>Renaissance and Northpark area projects.</p><span class="svc-mini-card__link">View Service →</span></a>
        <a href="/services/custom-downspouts/" class="svc-mini-card card-tint-3"><div class="svc-mini-card__icon"><i data-lucide="arrow-down-to-line"></i></div><h3>Custom Downspouts</h3><p>Upgrade undersized 80s-era systems.</p><span class="svc-mini-card__link">View Service →</span></a>
      </div>
    </div>
  </section>

  <section class="section section-alt">
    <div class="container">
      <div class="split">
        <div class="reveal-left">
          <img src="https://i.imgur.com/INwo4Si.jpeg" alt="Brick Ridgeland MS home with seamless gutter system and downspouts by Dun-Rite" width="900" height="600" loading="lazy" style="border-radius: var(--radius-md); box-shadow: var(--shadow-lg);">
        </div>
        <div class="reveal-right">
          <span class="eyebrow-label">What to Expect</span>
          <h2>What Does a Dun-Rite Install <span class="text-accent">Look Like in Ridgeland?</span></h2>
          <p style="margin-top: var(--space-md);">Most Ridgeland single-story homes complete in 6–8 hours, start to finish. We arrive between 7:30 and 8:00 AM, set up on the driveway, and form custom seamless sections to the home's exact roofline. Two-story Bridgewater estates and waterfront properties run 1–2 days.</p>
          <p>Because we're 3 miles from Ridgeland, we can often pop back for follow-up checks, warranty inspections, or post-storm assessments same-day — something out-of-area installers can't offer. Ridgeland and Madison addresses share roughly the same response window.</p>
          <p>If you've had a bad experience with a previous installer's "we'll come back" promise, ours is honest: 3 miles, 5 minutes, no excuses.</p>
        </div>
      </div>

      <div class="mid-cta-line reveal-up">
        Ridgeland resident? <a href="/contact/">Schedule a same-week estimate</a> — we're 3 miles away.
      </div>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="section-title reveal-up">
        <span class="eyebrow-label">Frequently Asked</span>
        <h2>Ridgeland Service <span class="text-accent">Questions.</span></h2>
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
        <h2>Also Serving Ridgeland's <span class="text-accent">Neighbors.</span></h2>
      </div>
      <div class="related-services-grid">
        <a href="/service-areas/madison/" class="related-card reveal-up reveal-delay-1"><div class="related-card__icon"><i data-lucide="map-pin"></i></div><h3>Madison (3 mi)</h3><p>Our home base. Reunion, Lake Caroline, Old Annandale, The Bridges.</p><span class="related-card__link">View Madison →</span></a>
        <a href="/service-areas/jackson/" class="related-card reveal-up reveal-delay-2"><div class="related-card__icon"><i data-lucide="map-pin"></i></div><h3>Jackson (12 mi)</h3><p>State capital. Historic Belhaven, Fondren, Eastover neighborhoods.</p><span class="related-card__link">View Jackson →</span></a>
        <a href="/service-areas/gluckstadt/" class="related-card reveal-up reveal-delay-3"><div class="related-card__icon"><i data-lucide="map-pin"></i></div><h3>Gluckstadt (8 mi)</h3><p>Mississippi's newest city. Rapid new construction.</p><span class="related-card__link">View Gluckstadt →</span></a>
      </div>
    </div>
  </section>

  <section class="closing-cta" aria-label="Ridgeland estimate">
    <div class="closing-cta__inner reveal-up">
      <span class="section-subtitle" style="color: var(--color-accent);">Mark and the team</span>
      <h2>Ready for a Free <span class="text-accent">Ridgeland Estimate?</span></h2>
      <p>3 miles from HQ. Same-week scheduling. 25-year warranty. Mississippi licensed and insured.</p>
      <div>
        <a href="/contact/" class="btn-primary">Get My Free Estimate</a>
        <a href="tel:+16017501800" class="closing-cta__phone">Or Call (601) 750-1800</a>
      </div>
      <p class="closing-cta__meta">Mon–Fri 8AM–5PM · Madison, MS · Mississippi Licensed &amp; Insured</p>
    </div>
  </section>

</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
