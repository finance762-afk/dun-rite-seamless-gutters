<?php
/**
 * Dun-Rite — Terry, MS
 */

$pageTitle       = "Gutter Services in Terry, MS | Dun-Rite Seamless Gutters";
$pageDescription = "Seamless gutter installation in Terry, Mississippi — rural Hinds County. Highway 51 corridor and surrounding agricultural properties. Free estimates from Dun-Rite Seamless Gutters.";
$canonicalUrl    = "https://dunrite-gutters.com/service-areas/terry/";
$ogImage         = "https://i.imgur.com/Npb0ETl.jpeg";
$heroImage       = "https://i.imgur.com/Npb0ETl.jpeg";
$currentPage     = "service-areas";

$faqs = [
  ["q" => "What is Dun-Rite's service area boundary?", "a" => "We serve 14 cities across the greater Jackson metro area: Madison (HQ), Jackson, Brandon, Flowood, Ridgeland, Clinton, Canton, Pearl, Gluckstadt, Florence, Richland, Bolton, Terry, and Raymond. Our service radius extends roughly 30 miles in each direction from our Madison headquarters. Outside this range, we evaluate special requests case-by-case — call (601) 750-1800 to ask."],
  ["q" => "Do you charge travel or trip fees for Terry jobs?", "a" => "No. Free travel anywhere within our 14-city service area. Terry sits at the southern edge of our service radius — about 30 miles from Madison HQ — and the travel is included at no charge."],
  ["q" => "How quickly can you schedule a visit in Terry?", "a" => "Most free estimates in Terry are scheduled within 48–72 hours of your call. Standard installations begin within 1–2 weeks of the signed estimate. Storm damage and emergency repairs are still prioritized despite the distance."],
  ["q" => "Do you work with rural Terry homes that have larger lots and outbuildings?", "a" => "Yes. Many Terry properties include detached garages, workshops, barns, or pole buildings in addition to the main residence. We can install gutters on outbuildings during the same visit at the right linear-foot pricing — and properly tied-in downspouts on barns and workshops prevent the muddy entrance areas that come from unmanaged runoff."],
];

$schemaGraph = [
  "@context" => "https://schema.org",
  "@graph" => [
    ["@type" => ["LocalBusiness", "RoofingContractor"], "@id" => $canonicalUrl . "#business", "name" => "Dun-Rite Seamless Gutters – Terry Service Area", "url" => $canonicalUrl, "telephone" => "+16017501800", "branchOf" => ["@id" => "https://dunrite-gutters.com/#business"], "areaServed" => ["@type" => "City", "name" => "Terry", "addressRegion" => "MS"]],
    ["@type" => "BreadcrumbList", "itemListElement" => [
      ["@type" => "ListItem", "position" => 1, "name" => "Home", "item" => "https://dunrite-gutters.com/"],
      ["@type" => "ListItem", "position" => 2, "name" => "Service Areas", "item" => "https://dunrite-gutters.com/service-areas/"],
      ["@type" => "ListItem", "position" => 3, "name" => "Terry", "item" => $canonicalUrl],
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
    <img src="https://i.imgur.com/Npb0ETl.jpeg" alt="Terry MS home with porch dormer and seamless gutters" class="hero-bg" width="1920" height="1080" loading="eager" fetchpriority="high">
    <div class="hero__inner">
      <div class="hero__copy">
        <span class="eyebrow-label">Terry, MS · 30 Miles from HQ</span>
        <h1>Gutter Services in <span class="text-accent">Terry, MS.</span></h1>
        <p class="hero__subhead">Small rural town in southern Hinds County. Highway 51 corridor homes, semi-agricultural acreage, and outbuildings that benefit from properly installed gutters as much as the main house.</p>
        <div class="hero__ctas">
          <a href="#hero-form-heading" class="btn-primary">Get Free Estimate</a>
          <a href="tel:+16017501800" class="btn-secondary btn-on-dark">Call (601) 750-1800</a>
        </div>
        <p class="hero__phone">Mon–Fri 8AM–5PM · 30 miles south of Madison HQ</p>
      </div>
      <?php
        $preselectedService = 'Not Sure / General Inquiry';
        $heroFormHeading    = 'Free Terry Estimate';
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
        <li aria-current="page">Terry</li>
      </ol>
    </div>
  </nav>

  <section class="section">
    <div class="container">
      <div class="answer-block reveal-up">
        <h2>Gutter Services in Terry, Mississippi</h2>
        <p>Dun-Rite Seamless Gutters provides seamless installation, copper, gutter guards, cleaning, and repair services in Terry, Mississippi. From our Madison headquarters 30 miles north, we serve homes around Terry Square, properties along the Highway 51 corridor, and the semi-agricultural acreage that defines this southern Hinds County town. Outbuildings — barns, workshops, detached garages — covered at the same linear-foot rate. Free estimates with no travel charges. Call (601) 750-1800.</p>
      </div>
    </div>
  </section>

  <section class="section section-alt">
    <div class="container">
      <div class="section-title reveal-up">
        <span class="eyebrow-label">Local Expertise</span>
        <h2>Why Terry Homeowners <span class="text-accent">Choose Dun-Rite.</span></h2>
        <span class="section-subtitle">small town, full service</span>
      </div>

      <div class="sub-service-grid">
        <div class="sub-service-card card-tint-1 reveal-up reveal-delay-1">
          <div class="sub-service-icon"><i data-lucide="home"></i></div>
          <h3>Mix of Older &amp; Newer Homes</h3>
          <p>Terry's housing stock spans older ranch homes near the town center to newer rural custom builds on the surrounding acreage. We tailor recommendations: aluminum replacement for aging in-town homes, 6-inch high-flow profiles on larger custom rural builds, and outbuilding gutters at the same trip.</p>
        </div>
        <div class="sub-service-card card-tint-3 reveal-up reveal-delay-2">
          <div class="sub-service-icon"><i data-lucide="warehouse"></i></div>
          <h3>Outbuildings Welcome</h3>
          <p>Many Terry properties include detached garages, workshops, barns, or pole buildings. We install gutters on these the same way we do main residences — typically at the same trip to save you a separate visit. Workshop gutters with proper downspouts dramatically reduce muddy entrance areas.</p>
        </div>
        <div class="sub-service-card card-tint-2 reveal-up reveal-delay-3">
          <div class="sub-service-icon"><i data-lucide="trees"></i></div>
          <h3>Heavy Tree Coverage</h3>
          <p>Terry's rural setting comes with mature trees on most properties — pines, oaks, sweetgums. Gutter guards are highly recommended for any home with significant canopy; without them, twice-yearly cleaning quickly falls behind. Quarterly cleaning plans are common for heavy-canopy Terry homes.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="section-title reveal-up">
        <span class="eyebrow-label">All Services Available</span>
        <h2>All 8 Gutter Services <span class="text-accent">in Terry.</span></h2>
      </div>

      <div class="services-in-city">
        <a href="/services/seamless-gutter-installation/" class="svc-mini-card card-tint-1"><div class="svc-mini-card__icon"><i data-lucide="ruler"></i></div><h3>Seamless Installation</h3><p>5-inch standard, 6-inch high-flow for larger homes.</p><span class="svc-mini-card__link">View Service →</span></a>
        <a href="/services/aluminum-gutters/" class="svc-mini-card card-tint-2"><div class="svc-mini-card__icon"><i data-lucide="shield"></i></div><h3>Aluminum Gutters</h3><p>25+ colors for varied Terry palettes.</p><span class="svc-mini-card__link">View Service →</span></a>
        <a href="/services/copper-gutters/" class="svc-mini-card card-tint-3"><div class="svc-mini-card__icon"><i data-lucide="sparkles"></i></div><h3>Copper Gutters</h3><p>Specialty work for premium rural builds.</p><span class="svc-mini-card__link">View Service →</span></a>
        <a href="/services/gutter-guards/" class="svc-mini-card card-tint-1"><div class="svc-mini-card__icon"><i data-lucide="filter"></i></div><h3>Gutter Guards</h3><p>Recommended for tree-shaded Terry properties.</p><span class="svc-mini-card__link">View Service →</span></a>
        <a href="/services/gutter-cleaning/" class="svc-mini-card card-tint-3"><div class="svc-mini-card__icon"><i data-lucide="droplets"></i></div><h3>Gutter Cleaning</h3><p>Quarterly plans for heavy-canopy properties.</p><span class="svc-mini-card__link">View Service →</span></a>
        <a href="/services/gutter-repair-replacement/" class="svc-mini-card card-tint-2"><div class="svc-mini-card__icon"><i data-lucide="wrench"></i></div><h3>Repair &amp; Replacement</h3><p>Storm damage and aging-system replacements.</p><span class="svc-mini-card__link">View Service →</span></a>
        <a href="/services/commercial-gutters/" class="svc-mini-card card-tint-1"><div class="svc-mini-card__icon"><i data-lucide="building-2"></i></div><h3>Commercial Gutters</h3><p>Terry Square small commercial buildings.</p><span class="svc-mini-card__link">View Service →</span></a>
        <a href="/services/custom-downspouts/" class="svc-mini-card card-tint-3"><div class="svc-mini-card__icon"><i data-lucide="arrow-down-to-line"></i></div><h3>Custom Downspouts</h3><p>Underground drainage tie-ins for larger lots.</p><span class="svc-mini-card__link">View Service →</span></a>
      </div>
    </div>
  </section>

  <section class="section section-alt">
    <div class="container">
      <div class="split">
        <div class="reveal-left">
          <img src="https://i.imgur.com/Hr2Nlwl.jpeg" alt="Terry MS rural home with seamless gutter installation by Dun-Rite" width="900" height="600" loading="lazy" style="border-radius: var(--radius-md); box-shadow: var(--shadow-lg);">
        </div>
        <div class="reveal-right">
          <span class="eyebrow-label">What to Expect</span>
          <h2>What Does a Dun-Rite Install <span class="text-accent">Look Like in Terry?</span></h2>
          <p style="margin-top: var(--space-md);">Terry installations vary based on property size. In-town ranch homes complete in 6–8 hours like any standard install. Larger rural acreage with main house plus outbuildings typically run 1–2 days, especially when underground drainage is involved.</p>
          <p>If you have multiple buildings on the property — barn, workshop, detached garage — let us know at the estimate. We can quote them together and combine the work into one trip rather than scheduling separate visits.</p>
          <p>30 miles from Madison HQ. Free travel both ways.</p>
        </div>
      </div>

      <div class="mid-cta-line reveal-up">
        Have a Terry property with multiple buildings? <a href="/contact/">Schedule a free estimate</a> — we'll quote main house and outbuildings together.
      </div>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="section-title reveal-up">
        <span class="eyebrow-label">Frequently Asked</span>
        <h2>Terry Service <span class="text-accent">Questions.</span></h2>
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
        <h2>Also Serving Terry's <span class="text-accent">Neighbors.</span></h2>
      </div>
      <div class="related-services-grid">
        <a href="/service-areas/florence/" class="related-card reveal-up reveal-delay-1"><div class="related-card__icon"><i data-lucide="map-pin"></i></div><h3>Florence (10 mi)</h3><p>Terry's eastern neighbor in Rankin County. Semi-rural with larger acreage.</p><span class="related-card__link">View Florence →</span></a>
        <a href="/service-areas/raymond/" class="related-card reveal-up reveal-delay-2"><div class="related-card__icon"><i data-lucide="map-pin"></i></div><h3>Raymond (12 mi)</h3><p>Hinds County seat. Historic district and Hinds CC area.</p><span class="related-card__link">View Raymond →</span></a>
        <a href="/service-areas/richland/" class="related-card reveal-up reveal-delay-3"><div class="related-card__icon"><i data-lucide="map-pin"></i></div><h3>Richland (15 mi)</h3><p>I-20 corridor working-class suburb. 1970s-80s housing stock.</p><span class="related-card__link">View Richland →</span></a>
      </div>
    </div>
  </section>

  <section class="closing-cta" aria-label="Terry estimate">
    <div class="closing-cta__inner reveal-up">
      <span class="section-subtitle" style="color: var(--color-accent);">Mark and the team</span>
      <h2>Ready for a Free <span class="text-accent">Terry Estimate?</span></h2>
      <p>Free travel from Madison. 25-year warranty. Outbuildings welcome. Mississippi licensed and insured.</p>
      <div>
        <a href="/contact/" class="btn-primary">Get My Free Estimate</a>
        <a href="tel:+16017501800" class="closing-cta__phone">Or Call (601) 750-1800</a>
      </div>
      <p class="closing-cta__meta">Mon–Fri 8AM–5PM · Madison, MS · Mississippi Licensed &amp; Insured</p>
    </div>
  </section>

</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
