<?php
/**
 * Dun-Rite — Canton, MS
 */

$pageTitle       = "Gutter Services in Canton, MS | Dun-Rite Seamless Gutters";
$pageDescription = "Seamless gutter installation in Canton, Mississippi — historic home specialists. Mississippi's antique capital. Free estimates from Dun-Rite Seamless Gutters.";
$canonicalUrl    = "https://dunrite-gutters.com/service-areas/canton/";
$ogImage         = "https://i.imgur.com/INwo4Si.jpeg";
$heroImage       = "https://i.imgur.com/INwo4Si.jpeg";
$currentPage     = "service-areas";

$faqs = [
  ["q" => "What is Dun-Rite's service area boundary?", "a" => "We serve 14 cities across the greater Jackson metro area: Madison (HQ), Jackson, Brandon, Flowood, Ridgeland, Clinton, Canton, Pearl, Gluckstadt, Florence, Richland, Bolton, Terry, and Raymond. Our service radius extends roughly 30 miles in each direction from our Madison headquarters. Outside this range, we evaluate special requests case-by-case — call (601) 750-1800 to ask."],
  ["q" => "Do you charge travel or trip fees for Canton jobs?", "a" => "No. Free travel anywhere within our 14-city service area. Canton is just 12 miles north of Madison HQ, so there's effectively no travel cost involved. The estimate is the price."],
  ["q" => "How quickly can you schedule a Canton estimate?", "a" => "Most Canton estimates schedule within 48 hours of your call. Standard installations begin within 1–2 weeks. As a Madison County neighbor, Canton gets near-Madison priority on storm response."],
  ["q" => "Can you replace gutters on a 100-year-old home in Canton?", "a" => "Yes — and these are some of our favorite jobs. Many Canton historic homes around the courthouse square date to the 1800s and early 1900s. Original wood fascia is often deteriorated and needs replacement before clean gutter installation. We custom-form to match irregular rooflines and recommend appropriate profiles for the home's character. Copper installations look exceptional on Canton's historic architecture."],
  ["q" => "Do you handle commercial gutter work near Canton Square?", "a" => "Yes. We've worked on small commercial properties around Canton Square and along the Highway 51 corridor. Historic commercial buildings often need custom-formed sections and may benefit from copper specialty work to match the era of construction."],
];

$schemaGraph = [
  "@context" => "https://schema.org",
  "@graph" => [
    ["@type" => ["LocalBusiness", "RoofingContractor"], "@id" => $canonicalUrl . "#business", "name" => "Dun-Rite Seamless Gutters – Canton Service Area", "url" => $canonicalUrl, "telephone" => "+16017501800", "branchOf" => ["@id" => "https://dunrite-gutters.com/#business"], "areaServed" => ["@type" => "City", "name" => "Canton", "addressRegion" => "MS"]],
    ["@type" => "BreadcrumbList", "itemListElement" => [
      ["@type" => "ListItem", "position" => 1, "name" => "Home", "item" => "https://dunrite-gutters.com/"],
      ["@type" => "ListItem", "position" => 2, "name" => "Service Areas", "item" => "https://dunrite-gutters.com/service-areas/"],
      ["@type" => "ListItem", "position" => 3, "name" => "Canton", "item" => $canonicalUrl],
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
    <img src="https://i.imgur.com/INwo4Si.jpeg" alt="Brick Canton MS home entrance with seamless gutters and downspouts" class="hero-bg" width="1920" height="1080" loading="eager" fetchpriority="high">
    <div class="hero__inner">
      <div class="hero__copy">
        <span class="eyebrow-label">Canton, MS · 12 Miles from HQ</span>
        <h1>Gutter Services in <span class="text-accent">Canton, MS.</span></h1>
        <p class="hero__subhead">Mississippi's antique capital. Historic homes around Canton Square, century-old wood fascia, and rooflines that need an installer with the experience to handle them right.</p>
        <div class="hero__ctas">
          <a href="#hero-form-heading" class="btn-primary">Get Free Estimate</a>
          <a href="tel:+16017501800" class="btn-secondary btn-on-dark">Call (601) 750-1800</a>
        </div>
        <p class="hero__phone">Mon–Fri 8AM–5PM · 12 miles north of Madison HQ</p>
      </div>
      <?php
        $preselectedService = 'Not Sure / General Inquiry';
        $heroFormHeading    = 'Free Canton Estimate';
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
        <li aria-current="page">Canton</li>
      </ol>
    </div>
  </nav>

  <section class="section">
    <div class="container">
      <div class="answer-block reveal-up">
        <h2>Gutter Services in Canton, Mississippi</h2>
        <p>Dun-Rite Seamless Gutters provides seamless installation, copper specialty, gutter guards, cleaning, and repair services in Canton, Mississippi — the antique capital of Mississippi. From our Madison headquarters 12 miles south, we serve historic homes around Canton Square, properties along the Highway 51 corridor, and the rural homes throughout Madison County's northern reaches. Free estimates with no travel charges. Call (601) 750-1800.</p>
      </div>
    </div>
  </section>

  <section class="section section-alt">
    <div class="container">
      <div class="section-title reveal-up">
        <span class="eyebrow-label">Local Expertise</span>
        <h2>Why Canton Homeowners <span class="text-accent">Choose Dun-Rite.</span></h2>
        <span class="section-subtitle">historic homes need experienced hands</span>
      </div>

      <div class="sub-service-grid">
        <div class="sub-service-card card-tint-1 reveal-up reveal-delay-1">
          <div class="sub-service-icon"><i data-lucide="building"></i></div>
          <h3>Historic Housing Stock</h3>
          <p>Many Canton homes around the courthouse square date to the late 1800s and early 1900s. Non-standard fascia depths, irregular rooflines, decorative cornice details — installations require custom on-site forming and an installer who understands historic architecture.</p>
        </div>
        <div class="sub-service-card card-tint-3 reveal-up reveal-delay-2">
          <div class="sub-service-icon"><i data-lucide="alert-triangle"></i></div>
          <h3>Wood Fascia Repair</h3>
          <p>Century-old fascia rarely survives intact. Most Canton historic-home gutter projects include fascia inspection and partial replacement. We photograph and quote both pieces together so there are no surprises.</p>
        </div>
        <div class="sub-service-card card-tint-2 reveal-up reveal-delay-3">
          <div class="sub-service-icon"><i data-lucide="sparkles"></i></div>
          <h3>Copper-Appropriate Architecture</h3>
          <p>Canton's historic architecture pairs naturally with copper. Many of our copper specialty installations have gone on Canton homes — hand-soldered seams, decorative endcaps, and ornamental brackets that match the era of construction.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="section-title reveal-up">
        <span class="eyebrow-label">All Services Available</span>
        <h2>All 8 Gutter Services <span class="text-accent">in Canton.</span></h2>
      </div>

      <div class="services-in-city">
        <a href="/services/seamless-gutter-installation/" class="svc-mini-card card-tint-1"><div class="svc-mini-card__icon"><i data-lucide="ruler"></i></div><h3>Seamless Installation</h3><p>Custom-formed for historic Canton rooflines.</p><span class="svc-mini-card__link">View Service →</span></a>
        <a href="/services/aluminum-gutters/" class="svc-mini-card card-tint-2"><div class="svc-mini-card__icon"><i data-lucide="shield"></i></div><h3>Aluminum Gutters</h3><p>Period-appropriate colors for historic homes.</p><span class="svc-mini-card__link">View Service →</span></a>
        <a href="/services/copper-gutters/" class="svc-mini-card card-tint-3"><div class="svc-mini-card__icon"><i data-lucide="sparkles"></i></div><h3>Copper Gutters</h3><p>Specialty work matched to historic architecture.</p><span class="svc-mini-card__link">View Service →</span></a>
        <a href="/services/gutter-guards/" class="svc-mini-card card-tint-1"><div class="svc-mini-card__icon"><i data-lucide="filter"></i></div><h3>Gutter Guards</h3><p>Mesh and screen for mature Canton tree coverage.</p><span class="svc-mini-card__link">View Service →</span></a>
        <a href="/services/gutter-cleaning/" class="svc-mini-card card-tint-3"><div class="svc-mini-card__icon"><i data-lucide="droplets"></i></div><h3>Gutter Cleaning</h3><p>Twice-yearly maintenance plans.</p><span class="svc-mini-card__link">View Service →</span></a>
        <a href="/services/gutter-repair-replacement/" class="svc-mini-card card-tint-2"><div class="svc-mini-card__icon"><i data-lucide="wrench"></i></div><h3>Repair &amp; Replacement</h3><p>Historic home replacement with fascia repair.</p><span class="svc-mini-card__link">View Service →</span></a>
        <a href="/services/commercial-gutters/" class="svc-mini-card card-tint-1"><div class="svc-mini-card__icon"><i data-lucide="building-2"></i></div><h3>Commercial Gutters</h3><p>Canton Square and Highway 51 commercial.</p><span class="svc-mini-card__link">View Service →</span></a>
        <a href="/services/custom-downspouts/" class="svc-mini-card card-tint-3"><div class="svc-mini-card__icon"><i data-lucide="arrow-down-to-line"></i></div><h3>Custom Downspouts</h3><p>Decorative profiles for historic homes.</p><span class="svc-mini-card__link">View Service →</span></a>
      </div>
    </div>
  </section>

  <section class="section section-alt">
    <div class="container">
      <div class="split">
        <div class="reveal-left">
          <img src="https://i.imgur.com/INwo4Si.jpeg" alt="Canton MS brick home entrance with custom seamless gutters by Dun-Rite" width="900" height="600" loading="lazy" style="border-radius: var(--radius-md); box-shadow: var(--shadow-lg);">
        </div>
        <div class="reveal-right">
          <span class="eyebrow-label">What to Expect</span>
          <h2>What Does a Dun-Rite Install <span class="text-accent">Look Like in Canton?</span></h2>
          <p style="margin-top: var(--space-md);">Canton historic-home installations almost always include fascia inspection and often fascia repair. We allow 1–2 days minimum for any pre-1950 home. Newer Canton properties (Highway 51 corridor and rural builds) install in standard 6–8 hour windows.</p>
          <p>For copper installations on historic Canton homes, we typically schedule 2–3 weeks ahead for fabrication time. Decorative endcaps, ornamental brackets, and standing-seam accents all hand-formed to match the era.</p>
          <p>12 miles from Madison HQ. Free travel both ways.</p>
        </div>
      </div>

      <div class="mid-cta-line reveal-up">
        Own a historic home near Canton Square? <a href="/contact/">Schedule a free Canton estimate</a> — copper consultation included if appropriate.
      </div>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="section-title reveal-up">
        <span class="eyebrow-label">Frequently Asked</span>
        <h2>Canton Service <span class="text-accent">Questions.</span></h2>
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
        <h2>Also Serving Canton's <span class="text-accent">Neighbors.</span></h2>
      </div>
      <div class="related-services-grid">
        <a href="/service-areas/madison/" class="related-card reveal-up reveal-delay-1"><div class="related-card__icon"><i data-lucide="map-pin"></i></div><h3>Madison (12 mi)</h3><p>Our home base. Reunion, Lake Caroline, Old Annandale.</p><span class="related-card__link">View Madison →</span></a>
        <a href="/service-areas/gluckstadt/" class="related-card reveal-up reveal-delay-2"><div class="related-card__icon"><i data-lucide="map-pin"></i></div><h3>Gluckstadt (7 mi)</h3><p>Mississippi's newest city. Rapid new construction south of Canton.</p><span class="related-card__link">View Gluckstadt →</span></a>
        <a href="/service-areas/ridgeland/" class="related-card reveal-up reveal-delay-3"><div class="related-card__icon"><i data-lucide="map-pin"></i></div><h3>Ridgeland (15 mi)</h3><p>Affluent Madison County suburb. 1980s-90s neighborhoods.</p><span class="related-card__link">View Ridgeland →</span></a>
      </div>
    </div>
  </section>

  <section class="closing-cta" aria-label="Canton estimate">
    <div class="closing-cta__inner reveal-up">
      <span class="section-subtitle" style="color: var(--color-accent);">Mark and the team</span>
      <h2>Ready for a Free <span class="text-accent">Canton Estimate?</span></h2>
      <p>Free travel from Madison. 25-year warranty. Historic home specialists. Mississippi licensed and insured.</p>
      <div>
        <a href="/contact/" class="btn-primary">Get My Free Estimate</a>
        <a href="tel:+16017501800" class="closing-cta__phone">Or Call (601) 750-1800</a>
      </div>
      <p class="closing-cta__meta">Mon–Fri 8AM–5PM · Madison, MS · Mississippi Licensed &amp; Insured</p>
    </div>
  </section>

</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
