<?php
/**
 * Dun-Rite — About / Owner Story
 */

$pageTitle       = "About Dun-Rite Seamless Gutters | Mark Dungan, Madison MS";
$pageDescription = "Mark Dungan founded Dun-Rite Seamless Gutters in 1996. 30 years of seamless gutter installation, copper specialty, and rain-carrying systems across central Mississippi. Family-owned and Mississippi licensed.";
$canonicalUrl    = "https://dunrite-gutters.com/about/";
$ogImage         = "https://i.imgur.com/qJMX4SH.png";
$heroImage       = "https://i.imgur.com/lHGkpv5.jpeg";
$currentPage     = "about";

$schemaGraph = [
  "@context" => "https://schema.org",
  "@graph" => [
    [
      "@type"       => ["LocalBusiness", "RoofingContractor"],
      "@id"         => "https://dunrite-gutters.com/#business",
      "name"        => "Dun-Rite Seamless Gutters, Inc.",
      "url"         => "https://dunrite-gutters.com",
      "telephone"   => "+16017501800",
      "foundingDate" => "1996",
      "founder"     => ["@id" => "https://dunrite-gutters.com/#owner"],
      "address"     => [
        "@type"           => "PostalAddress",
        "streetAddress"   => "115 Cherrybrook Dr",
        "addressLocality" => "Madison",
        "addressRegion"   => "MS",
        "postalCode"      => "39110",
        "addressCountry"  => "US"
      ],
    ],
    [
      "@type"        => "Organization",
      "@id"          => "https://dunrite-gutters.com/#org",
      "name"         => "Dun-Rite Seamless Gutters, Inc.",
      "url"          => "https://dunrite-gutters.com",
      "logo"         => "https://i.imgur.com/xRVJ7rY.jpeg",
      "foundingDate" => "1996",
      "founder"      => ["@id" => "https://dunrite-gutters.com/#owner"],
    ],
    [
      "@type"     => "Person",
      "@id"       => "https://dunrite-gutters.com/#owner",
      "name"      => "Mark Dungan",
      "jobTitle"  => "Owner",
      "image"     => "https://i.imgur.com/qJMX4SH.png",
      "worksFor"  => ["@id" => "https://dunrite-gutters.com/#business"],
    ],
    [
      "@type" => "BreadcrumbList",
      "itemListElement" => [
        ["@type" => "ListItem", "position" => 1, "name" => "Home", "item" => "https://dunrite-gutters.com/"],
        ["@type" => "ListItem", "position" => 2, "name" => "About", "item" => $canonicalUrl],
      ]
    ],
    [
      "@type"        => "AggregateRating",
      "itemReviewed" => ["@id" => "https://dunrite-gutters.com/#business"],
      "ratingValue"  => "5.0",
      "reviewCount"  => "27"
    ],
  ]
];
$schemaMarkup = '<script type="application/ld+json">' . json_encode($schemaGraph, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>';

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/nav.php'; ?>

<main id="main-content">

  <!-- HERO (no form) -->
  <section class="hero hero--inner" aria-label="About Dun-Rite hero">
    <img src="https://i.imgur.com/lHGkpv5.jpeg" alt="Brick stucco Madison MS home with seamless gutters by Mark Dungan" class="hero-bg" width="1920" height="1080" loading="eager" fetchpriority="high">
    <div class="hero__inner" style="display:block; text-align:left; max-width: 720px;">
      <div class="hero__copy">
        <span class="eyebrow-label">Est. 1996 · Madison, MS</span>
        <h1>Three Decades of <span class="text-accent">Mississippi</span> Gutters.</h1>
        <p class="hero__subhead">Mark Dungan started Dun-Rite Seamless Gutters in 1996 with a single goal: do gutters right, the first time, on every Mississippi home. Thirty years later, the standard hasn't changed.</p>
        <div class="hero__ctas">
          <a href="/contact/" class="btn-primary">Get Free Estimate</a>
          <a href="tel:+16017501800" class="btn-secondary btn-on-dark">Call (601) 750-1800</a>
        </div>
        <p class="hero__phone">Mon–Fri 8AM–5PM · 14 Mississippi cities served</p>
      </div>
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
        <li aria-current="page">About</li>
      </ol>
    </div>
  </nav>

  <!-- OWNER STORY (asymmetric image stack) -->
  <section class="section section-alt" aria-label="Owner story">
    <svg class="floating-accent float-animate-slow" style="bottom: 40px; right: 6%; width: 80px; height: 110px; opacity: 0.06;" viewBox="0 0 60 80" aria-hidden="true">
      <path fill="#B87333" d="M30 0 C30 0 0 35 0 55 A30 25 0 0 0 60 55 C60 35 30 0 30 0 Z"/>
    </svg>

    <div class="container">
      <div class="about-grid">
        <div class="reveal-left">
          <span class="eyebrow-label">Meet the Owner</span>
          <h2>Mark Dungan: <span class="text-accent">Mississippi's</span> Gutter Specialist.</h2>
          <span class="section-subtitle">30 years on Mississippi roofs</span>
          <p style="margin-top: var(--space-md);">Mark Dungan founded Dun-Rite Seamless Gutters in Madison, Mississippi in 1996. Before starting Dun-Rite, Mark spent years installing gutters for other companies and watching corners get cut — thin-gauge aluminum, sectional gutters that leaked within five years, sloppy installs that pulled fascia loose. He started Dun-Rite with one rule: do it right or don't do it at all.</p>
          <p>Thirty years later, Mark still personally inspects every estimate and supervises every commercial install. Dun-Rite has grown to serve 14 Mississippi cities and built a reputation for hand-soldered copper work that few installers in the state can match — but the owner is still the one walking your roofline before quoting your job.</p>
          <p>Mark is supported by a small team of long-tenured installers who've been with Dun-Rite for years. Every one of them is trained on Dun-Rite's installation standard: hidden hangers, sealed corners, properly pitched runs, color-matched fasteners, and a final inspection before paperwork. Nothing leaves a Dun-Rite jobsite half-finished.</p>
        </div>

        <div class="about-image-stack reveal-right">
          <img src="https://i.imgur.com/qJMX4SH.png" alt="Mark Dungan, owner of Dun-Rite Seamless Gutters since 1996, Madison Mississippi" class="about-image-primary" width="900" height="900" loading="lazy">
          <img src="https://i.imgur.com/kRJ17by.jpeg" alt="Dun-Rite Seamless Gutters service truck on a Mississippi installation jobsite" class="about-image-secondary" width="600" height="500" loading="lazy">
        </div>
      </div>
    </div>
  </section>

  <!-- COMPANY STANDARDS -->
  <section class="section" aria-label="Standards">
    <div class="container">
      <div class="section-title reveal-up">
        <span class="eyebrow-label">What We Stand Behind</span>
        <h2>Three Standards That Haven't <span class="text-accent">Changed Since 1996.</span></h2>
        <span class="section-subtitle">do it once, do it right</span>
      </div>

      <div class="sub-service-grid">
        <div class="sub-service-card card-tint-1 reveal-up reveal-delay-1">
          <div class="sub-service-icon"><i data-lucide="package"></i></div>
          <h3>High-Quality Materials Only</h3>
          <p>We install .032 gauge aluminum (heavier than home-center .027), hand-soldered copper, and steel where appropriate. Never the cheapest material — always the right material for the job.</p>
        </div>
        <div class="sub-service-card card-tint-3 reveal-up reveal-delay-2">
          <div class="sub-service-icon"><i data-lucide="ruler"></i></div>
          <h3>On-Site Custom Forming</h3>
          <p>Our truck-mounted brake forms each gutter section to your home's exact roofline. No prefab, no off-the-shelf compromises, no seams every 10 feet.</p>
        </div>
        <div class="sub-service-card card-tint-2 reveal-up reveal-delay-3">
          <div class="sub-service-icon"><i data-lucide="shield-check"></i></div>
          <h3>Backed in Writing</h3>
          <p>25-year manufacturer warranty on materials. 2-year labor warranty. Workers' Compensation and General Liability insurance. Documented in writing, every job.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- STATS -->
  <section class="section section-alt" aria-label="By the numbers">
    <div class="stat-watermark" style="top: 10%; left: 50%; transform: translateX(-50%);">1996</div>
    <div class="container" style="position: relative; z-index: 2;">
      <div class="section-title reveal-up">
        <span class="eyebrow-label">By the Numbers</span>
        <h2>Three Decades on <span class="text-accent">Mississippi</span> Roofs.</h2>
        <span class="section-subtitle">measured in years and warranties</span>
      </div>

      <div class="stats-grid">
        <div class="stat-block reveal-scale reveal-delay-1">
          <span class="stat-number" data-counter data-target="30" data-suffix="+">0</span>
          <span class="stat-label">Years in Business</span>
        </div>
        <div class="stat-block reveal-scale reveal-delay-2">
          <span class="stat-number" data-counter data-target="14">0</span>
          <span class="stat-label">Mississippi Cities Served</span>
        </div>
        <div class="stat-block reveal-scale reveal-delay-3">
          <span class="stat-number" data-counter data-target="25">0</span>
          <span class="stat-label">Year Material Warranty</span>
        </div>
        <div class="stat-block reveal-scale reveal-delay-4">
          <span class="stat-number">5.0</span>
          <span class="stat-label">Average Customer Rating</span>
        </div>
      </div>
    </div>
  </section>

  <!-- BUILDERS / ARCHITECTS / HOMEOWNERS -->
  <section class="section">
    <div class="container">
      <div class="section-title reveal-up">
        <span class="eyebrow-label">Who We Work With</span>
        <h2>Builders, Architects, and <span class="text-accent">Custom Home Owners.</span></h2>
        <span class="section-subtitle">three audiences, one standard</span>
      </div>

      <div class="sub-service-grid">
        <div class="sub-service-card card-tint-1 reveal-up reveal-delay-1">
          <div class="sub-service-icon"><i data-lucide="construction"></i></div>
          <h3>Builders</h3>
          <p>Ongoing partnerships with central Mississippi builders. Pre-construction consultation, drawing review, phased installs synchronized to other trades, certificate of insurance with builder named as additional insured, and AIA-formatted billing on request.</p>
        </div>
        <div class="sub-service-card card-tint-3 reveal-up reveal-delay-2">
          <div class="sub-service-icon"><i data-lucide="pen-tool"></i></div>
          <h3>Architects</h3>
          <p>We fabricate to drawing — half-round, ogee, custom copper profiles, decorative endcaps, ornamental brackets. If you can sketch it, we can build it. Period-appropriate work for historic restorations, custom profiles for high-design new builds.</p>
        </div>
        <div class="sub-service-card card-tint-2 reveal-up reveal-delay-3">
          <div class="sub-service-icon"><i data-lucide="home"></i></div>
          <h3>Custom Home Owners</h3>
          <p>From single-family Madison residences to lakefront properties on the Reservoir, we work with homeowners directly on copper installations, gutter guards, replacement projects, and full system upgrades. Free estimates, written quotes, no high-pressure sales.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- TRUST BADGES -->
  <section class="section section-alt" aria-label="Trust accreditations">
    <div class="container">
      <div class="section-title reveal-up">
        <span class="eyebrow-label">Trusted &amp; Accredited</span>
        <h2>Mississippi <span class="text-accent">Licensed</span> &amp; Fully Insured.</h2>
      </div>
      <div style="text-align:center; max-width: 700px; margin: 0 auto;" class="reveal-up">
        <img src="https://i.imgur.com/WbrtNRS.png"
             alt="Dun-Rite Seamless Gutters HomeAdvisor approved, BBB accredited, and Home Builders Association member"
             style="max-width: 100%; height: auto; display:block; margin: 0 auto;"
             width="700" height="120" loading="lazy">
        <p style="margin-top: var(--space-md); color: var(--color-text-light); font-size: 0.95rem;">
          Mississippi licensed and fully insured. Member of the Home Builders Association. BBB accredited.
          <br>Workers' Compensation + General Liability coverage on every job.
        </p>
      </div>
    </div>
  </section>

  <!-- CLOSING CTA -->
  <section class="closing-cta" aria-label="Get an estimate from Mark">
    <div class="closing-cta__inner reveal-up">
      <span class="section-subtitle" style="color: var(--color-accent);">ready when you are</span>
      <h2>Get Mark on <span class="text-accent">Your Roofline.</span></h2>
      <p>Free on-site estimates across all 14 Mississippi cities we serve. Most quotes scheduled within 48 hours. Mark or a senior team member at every estimate.</p>
      <div>
        <a href="/contact/" class="btn-primary">Get Free Estimate</a>
        <a href="tel:+16017501800" class="closing-cta__phone">Or Call (601) 750-1800</a>
      </div>
      <p class="closing-cta__meta">Mon–Fri 8AM–5PM · 115 Cherrybrook Dr · Madison, MS 39110</p>
    </div>
  </section>

</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
