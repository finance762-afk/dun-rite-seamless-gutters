<?php
/**
 * Dun-Rite — Raymond, MS
 */

$pageTitle       = "Gutter Services in Raymond, MS | Dun-Rite Seamless Gutters";
$pageDescription = "Seamless gutter installation in Raymond, Mississippi — Hinds County seat with historic district. Civil War history, Hinds CC, and rural surrounding properties. Free estimates from Dun-Rite.";
$canonicalUrl    = "https://dunrite-gutters.com/service-areas/raymond/";
$ogImage         = "https://i.imgur.com/VWdSAg5.jpeg";
$heroImage       = "https://i.imgur.com/VWdSAg5.jpeg";
$currentPage     = "service-areas";

$faqs = [
  ["q" => "What is Dun-Rite's service area boundary?", "a" => "We serve 14 cities across the greater Jackson metro area: Madison (HQ), Jackson, Brandon, Flowood, Ridgeland, Clinton, Canton, Pearl, Gluckstadt, Florence, Richland, Bolton, Terry, and Raymond. Our service radius extends roughly 30 miles in each direction from our Madison headquarters. Outside this range, we evaluate special requests case-by-case — call (601) 750-1800 to ask."],
  ["q" => "Do you charge travel or trip fees for Raymond jobs?", "a" => "No. Free travel anywhere within our 14-city service area, regardless of distance. Raymond is 25 miles southwest of Madison HQ — a 35-minute drive — and the travel costs you nothing extra."],
  ["q" => "How quickly can you schedule a visit in Raymond?", "a" => "Most free estimates in Raymond are scheduled within 48–72 hours of your call. Standard installations begin within 1–2 weeks. Storm damage and emergency repairs are prioritized."],
  ["q" => "Can you work with historic Raymond homes near the courthouse and battlefield?", "a" => "Yes — and these are some of our favorite jobs. Many homes in Raymond's historic district date to the mid-1800s and have non-standard fascia depths, irregular rooflines, and original wood that needs inspection before gutter work. We custom-form on-site to match any roofline. Copper installations look exceptional on Raymond's historic architecture."],
  ["q" => "Do you handle Hinds Community College area properties?", "a" => "Yes. We've worked on residential properties around the Hinds CC campus and several institutional and faculty homes in Raymond. The college area mixes older historic homes with newer faculty residences, and we tailor profile and material recommendations to each."],
];

$schemaGraph = [
  "@context" => "https://schema.org",
  "@graph" => [
    ["@type" => ["LocalBusiness", "RoofingContractor"], "@id" => $canonicalUrl . "#business", "name" => "Dun-Rite Seamless Gutters – Raymond Service Area", "url" => $canonicalUrl, "telephone" => "+16017501800", "branchOf" => ["@id" => "https://dunrite-gutters.com/#business"], "areaServed" => ["@type" => "City", "name" => "Raymond", "addressRegion" => "MS"]],
    ["@type" => "BreadcrumbList", "itemListElement" => [
      ["@type" => "ListItem", "position" => 1, "name" => "Home", "item" => "https://dunrite-gutters.com/"],
      ["@type" => "ListItem", "position" => 2, "name" => "Service Areas", "item" => "https://dunrite-gutters.com/service-areas/"],
      ["@type" => "ListItem", "position" => 3, "name" => "Raymond", "item" => $canonicalUrl],
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
    <img src="https://i.imgur.com/VWdSAg5.jpeg" alt="Raymond MS historic home with back porch and seamless gutters" class="hero-bg" width="1920" height="1080" loading="eager" fetchpriority="high">
    <div class="hero__inner">
      <div class="hero__copy">
        <span class="eyebrow-label">Raymond, MS · 25 Miles from HQ</span>
        <h1>Gutter Services in <span class="text-accent">Raymond, MS.</span></h1>
        <p class="hero__subhead">Hinds County seat with deep Civil War history, a working historic district, and the Hinds Community College campus. Mid-1800s homes still standing — and still needing experienced gutter installation.</p>
        <div class="hero__ctas">
          <a href="#hero-form-heading" class="btn-primary">Get Free Estimate</a>
          <a href="tel:+16017501800" class="btn-secondary btn-on-dark">Call (601) 750-1800</a>
        </div>
        <p class="hero__phone">Mon–Fri 8AM–5PM · 25 miles SW of Madison HQ</p>
      </div>
      <?php
        $preselectedService = 'Not Sure / General Inquiry';
        $heroFormHeading    = 'Free Raymond Estimate';
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
        <li aria-current="page">Raymond</li>
      </ol>
    </div>
  </nav>

  <section class="section">
    <div class="container">
      <div class="answer-block reveal-up">
        <h2>Gutter Services in Raymond, Mississippi</h2>
        <p>Dun-Rite Seamless Gutters provides seamless installation, copper specialty, gutter guards, cleaning, and repair services in Raymond, Mississippi — Hinds County seat with a working historic district. From our Madison headquarters 25 miles east, we serve homes around the Raymond Courthouse, the Hinds Community College area, and the rural surrounding properties. Mid-1800s historic homes need experienced installers who know how to handle them. Free estimates with no travel charges. Call (601) 750-1800.</p>
      </div>
    </div>
  </section>

  <section class="section section-alt">
    <div class="container">
      <div class="section-title reveal-up">
        <span class="eyebrow-label">Local Expertise</span>
        <h2>Why Raymond Homeowners <span class="text-accent">Choose Dun-Rite.</span></h2>
        <span class="section-subtitle">historic homes, college town, county seat</span>
      </div>

      <div class="sub-service-grid">
        <div class="sub-service-card card-tint-1 reveal-up reveal-delay-1">
          <div class="sub-service-icon"><i data-lucide="building"></i></div>
          <h3>Historic District Homes</h3>
          <p>Many Raymond homes near the courthouse and battlefield date to the mid-1800s — pre-Civil War in some cases. Non-standard fascia depths, irregular rooflines, and original wood that needs careful inspection. Custom on-site forming is required for any clean install on these homes.</p>
        </div>
        <div class="sub-service-card card-tint-3 reveal-up reveal-delay-2">
          <div class="sub-service-icon"><i data-lucide="graduation-cap"></i></div>
          <h3>Hinds CC Area</h3>
          <p>The Hinds Community College area features a mix of older Raymond homes and newer faculty/staff residences. We work both — historic homes with custom-formed sections and copper specialty options, faculty homes with practical aluminum at fair prices.</p>
        </div>
        <div class="sub-service-card card-tint-2 reveal-up reveal-delay-3">
          <div class="sub-service-icon"><i data-lucide="sparkles"></i></div>
          <h3>Copper Specialty Fits Raymond</h3>
          <p>Raymond's historic architecture pairs beautifully with copper. We've installed hand-soldered copper gutters and standing-seam copper accents on several Raymond historic homes. The patina that develops over the decades looks like it belongs there from the start.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="section-title reveal-up">
        <span class="eyebrow-label">All Services Available</span>
        <h2>All 8 Gutter Services <span class="text-accent">in Raymond.</span></h2>
      </div>

      <div class="services-in-city">
        <a href="/services/seamless-gutter-installation/" class="svc-mini-card card-tint-1"><div class="svc-mini-card__icon"><i data-lucide="ruler"></i></div><h3>Seamless Installation</h3><p>Custom-formed for irregular historic Raymond rooflines.</p><span class="svc-mini-card__link">View Service →</span></a>
        <a href="/services/aluminum-gutters/" class="svc-mini-card card-tint-2"><div class="svc-mini-card__icon"><i data-lucide="shield"></i></div><h3>Aluminum Gutters</h3><p>Period-appropriate colors for historic homes.</p><span class="svc-mini-card__link">View Service →</span></a>
        <a href="/services/copper-gutters/" class="svc-mini-card card-tint-3"><div class="svc-mini-card__icon"><i data-lucide="sparkles"></i></div><h3>Copper Gutters</h3><p>Specialty work matched to Raymond's architecture.</p><span class="svc-mini-card__link">View Service →</span></a>
        <a href="/services/gutter-guards/" class="svc-mini-card card-tint-1"><div class="svc-mini-card__icon"><i data-lucide="filter"></i></div><h3>Gutter Guards</h3><p>Mesh and screen for tree-shaded historic district.</p><span class="svc-mini-card__link">View Service →</span></a>
        <a href="/services/gutter-cleaning/" class="svc-mini-card card-tint-3"><div class="svc-mini-card__icon"><i data-lucide="droplets"></i></div><h3>Gutter Cleaning</h3><p>Twice-yearly maintenance plans.</p><span class="svc-mini-card__link">View Service →</span></a>
        <a href="/services/gutter-repair-replacement/" class="svc-mini-card card-tint-2"><div class="svc-mini-card__icon"><i data-lucide="wrench"></i></div><h3>Repair &amp; Replacement</h3><p>Historic home replacement with fascia repair.</p><span class="svc-mini-card__link">View Service →</span></a>
        <a href="/services/commercial-gutters/" class="svc-mini-card card-tint-1"><div class="svc-mini-card__icon"><i data-lucide="building-2"></i></div><h3>Commercial Gutters</h3><p>Raymond Square small commercial properties.</p><span class="svc-mini-card__link">View Service →</span></a>
        <a href="/services/custom-downspouts/" class="svc-mini-card card-tint-3"><div class="svc-mini-card__icon"><i data-lucide="arrow-down-to-line"></i></div><h3>Custom Downspouts</h3><p>Decorative profiles for historic Raymond homes.</p><span class="svc-mini-card__link">View Service →</span></a>
      </div>
    </div>
  </section>

  <section class="section section-alt">
    <div class="container">
      <div class="split-reverse">
        <div class="reveal-left">
          <span class="eyebrow-label">What to Expect</span>
          <h2>What Does a Dun-Rite Install <span class="text-accent">Look Like in Raymond?</span></h2>
          <p style="margin-top: var(--space-md);">Raymond historic-home installations frequently take 1–2 days because of fascia repair and custom-forming requirements. Mid-1800s wood often needs board replacement before clean installation; we photograph everything during the estimate so there are no surprises.</p>
          <p>For copper installations on Raymond historic homes, we typically schedule 2–3 weeks ahead for fabrication time. Decorative endcaps, hand-soldered seams, ornamental brackets — period-appropriate copperwork that complements the architecture.</p>
          <p>25 miles from Madison HQ. Free travel both ways.</p>
        </div>
        <div class="reveal-right">
          <img src="https://i.imgur.com/INwo4Si.jpeg" alt="Raymond MS historic home with custom seamless gutters by Dun-Rite" width="900" height="600" loading="lazy" style="border-radius: var(--radius-md); box-shadow: var(--shadow-lg);">
        </div>
      </div>

      <div class="mid-cta-line reveal-up">
        Own a historic Raymond home? <a href="/contact/">Schedule a free estimate</a> — copper consultation included if appropriate.
      </div>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="section-title reveal-up">
        <span class="eyebrow-label">Frequently Asked</span>
        <h2>Raymond Service <span class="text-accent">Questions.</span></h2>
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
        <h2>Also Serving Raymond's <span class="text-accent">Neighbors.</span></h2>
      </div>
      <div class="related-services-grid">
        <a href="/service-areas/clinton/" class="related-card reveal-up reveal-delay-1"><div class="related-card__icon"><i data-lucide="map-pin"></i></div><h3>Clinton (8 mi)</h3><p>Raymond's northern neighbor. College town with mature pecan canopy.</p><span class="related-card__link">View Clinton →</span></a>
        <a href="/service-areas/bolton/" class="related-card reveal-up reveal-delay-2"><div class="related-card__icon"><i data-lucide="map-pin"></i></div><h3>Bolton (8 mi)</h3><p>Rural Hinds County. Acreage homes with mature trees.</p><span class="related-card__link">View Bolton →</span></a>
        <a href="/service-areas/terry/" class="related-card reveal-up reveal-delay-3"><div class="related-card__icon"><i data-lucide="map-pin"></i></div><h3>Terry (12 mi)</h3><p>Small rural town in southern Hinds County.</p><span class="related-card__link">View Terry →</span></a>
      </div>
    </div>
  </section>

  <section class="closing-cta" aria-label="Raymond estimate">
    <div class="closing-cta__inner reveal-up">
      <span class="section-subtitle" style="color: var(--color-accent);">Mark and the team</span>
      <h2>Ready for a Free <span class="text-accent">Raymond Estimate?</span></h2>
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
