<?php
/**
 * Dun-Rite Seamless Gutters — Services Main Hub
 */

$pageTitle       = "Gutter Services in Madison, MS | Seamless, Copper, Cleaning, Repair";
$pageDescription = "Eight gutter services across central Mississippi. Seamless installation, copper specialty, gutter guards, cleaning, repair, commercial, custom downspouts. 25-year warranty. Free estimates.";
$canonicalUrl    = "https://dunrite-gutters.com/services/";
$ogImage         = "https://i.imgur.com/2HO8Y5F.jpeg";
$heroImage       = "https://i.imgur.com/2HO8Y5F.jpeg";
$currentPage     = "services";

$cities = ["Brandon","Jackson","Canton","Madison","Pearl","Richland","Flowood","Florence","Gluckstadt","Bolton","Clinton","Terry","Ridgeland","Raymond"];
$areaServedSchema = array_map(fn($c) => ["@type" => "City", "name" => $c, "addressRegion" => "MS", "addressCountry" => "US"], $cities);

$schemaGraph = [
  "@context" => "https://schema.org",
  "@graph" => [
    [
      "@type"       => "Service",
      "@id"         => "https://dunrite-gutters.com/services/#service",
      "serviceType" => "Gutter Services",
      "name"        => "Gutter Services in Mississippi",
      "description" => $pageDescription,
      "provider"    => ["@id" => "https://dunrite-gutters.com/#business"],
      "areaServed"  => $areaServedSchema,
      "hasOfferCatalog" => [
        "@type" => "OfferCatalog",
        "name"  => "Gutter Services",
        "itemListElement" => [
          ["@type" => "Offer", "itemOffered" => ["@type" => "Service", "name" => "Seamless Gutter Installation"]],
          ["@type" => "Offer", "itemOffered" => ["@type" => "Service", "name" => "Aluminum Gutters"]],
          ["@type" => "Offer", "itemOffered" => ["@type" => "Service", "name" => "Copper Gutters"]],
          ["@type" => "Offer", "itemOffered" => ["@type" => "Service", "name" => "Gutter Guards & Leaf Protection"]],
          ["@type" => "Offer", "itemOffered" => ["@type" => "Service", "name" => "Gutter Cleaning"]],
          ["@type" => "Offer", "itemOffered" => ["@type" => "Service", "name" => "Gutter Repair & Replacement"]],
          ["@type" => "Offer", "itemOffered" => ["@type" => "Service", "name" => "Commercial Gutters"]],
          ["@type" => "Offer", "itemOffered" => ["@type" => "Service", "name" => "Custom Downspouts"]],
        ]
      ]
    ],
    [
      "@type" => "BreadcrumbList",
      "itemListElement" => [
        ["@type" => "ListItem", "position" => 1, "name" => "Home", "item" => "https://dunrite-gutters.com/"],
        ["@type" => "ListItem", "position" => 2, "name" => "Services", "item" => "https://dunrite-gutters.com/services/"],
      ]
    ],
    [
      "@type"        => "AggregateRating",
      "itemReviewed" => ["@id" => "https://dunrite-gutters.com/#business"],
      "ratingValue"  => "5.0",
      "reviewCount"  => "27"
    ],
    [
      "@type"        => "Organization",
      "@id"          => "https://dunrite-gutters.com/#org",
      "name"         => "Dun-Rite Seamless Gutters, Inc.",
      "url"          => "https://dunrite-gutters.com",
      "logo"         => "https://i.imgur.com/xRVJ7rY.jpeg",
      "foundingDate" => "1996"
    ],
  ]
];
$schemaMarkup = '<script type="application/ld+json">' . json_encode($schemaGraph, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>';

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/nav.php'; ?>

<main id="main-content">

  <!-- HERO -->
  <section class="hero hero--inner" aria-label="Hero">
    <img src="https://i.imgur.com/2HO8Y5F.jpeg" alt="Worker installing seamless gutters on a tile-roof Mississippi home" class="hero-bg" width="1920" height="1080" loading="eager" fetchpriority="high">
    <div class="hero__inner">
      <div class="hero__copy">
        <span class="eyebrow-label">What We Offer</span>
        <h1>Gutter Services in <span class="text-accent">Mississippi.</span></h1>
        <p class="hero__subhead">Eight services backed by 30 years of experience and a 25-year manufacturer warranty. Residential, commercial, and copper specialty work across the greater Jackson area.</p>
        <div class="hero__ctas">
          <a href="#hero-form-heading" class="btn-primary">Get Free Estimate</a>
          <a href="tel:+16017501800" class="btn-secondary btn-on-dark">Call (601) 750-1800</a>
        </div>
        <p class="hero__phone">Mon–Fri 8AM–5PM · 14 Mississippi cities served</p>
      </div>
      <?php
        $preselectedService = 'Not Sure / General Inquiry';
        $heroFormHeading    = 'Get Your Free Estimate';
        $heroFormSubheading = 'Tell us what you need · We will call within 24 hours';
        include $_SERVER['DOCUMENT_ROOT'] . '/includes/hero-form.php';
      ?>
    </div>
    <div class="section-divider section-divider--bottom" aria-hidden="true">
      <svg viewBox="0 0 1440 100" preserveAspectRatio="none">
        <path fill="#FFFFFF" d="M0,64 C240,96 480,32 720,48 C960,64 1200,96 1440,72 L1440,100 L0,100 Z"></path>
      </svg>
    </div>
  </section>

  <!-- BREADCRUMB -->
  <nav class="breadcrumb" aria-label="Breadcrumb">
    <div class="container">
      <ol>
        <li><a href="/">Home</a></li>
        <li class="breadcrumb-sep" aria-hidden="true">›</li>
        <li aria-current="page">Services</li>
      </ol>
    </div>
  </nav>

  <!-- ANSWER BLOCK / OVERVIEW -->
  <section class="section">
    <div class="container">
      <div class="answer-block reveal-up">
        <h2>Our Eight Gutter Services Across Central Mississippi</h2>
        <p>Dun-Rite Seamless Gutters provides eight gutter services across 14 Mississippi cities: seamless gutter installation, aluminum gutters, copper gutters, gutter guards, gutter cleaning, gutter repair and replacement, commercial gutters, and custom downspouts. Most installations are completed in a single day with a 25-year manufacturer warranty on materials and 2-year labor warranty.</p>
      </div>
    </div>
  </section>

  <!-- 8 SERVICE CARDS -->
  <section class="section" aria-label="Service catalog">
    <div class="container">
      <div class="section-title reveal-up">
        <span class="eyebrow-label">Eight Services</span>
        <h2>Pick Your <span class="text-accent">Project.</span></h2>
        <span class="section-subtitle">we handle every part of your rain-carrying system</span>
      </div>

      <div class="services-grid">
        <a href="/services/seamless-gutter-installation/" class="service-card card-tint-1 reveal-up reveal-delay-1">
          <div class="service-icon"><i data-lucide="ruler"></i></div>
          <h3>Seamless Gutter Installation</h3>
          <p>Custom-formed on-site in 5-inch and 6-inch K-style profiles.</p>
          <ul class="sub-service-card" style="margin-top:auto; padding:0;">
            <li>.032 gauge aluminum standard</li>
            <li>25+ baked-enamel colors</li>
            <li>Same-day install on most homes</li>
          </ul>
          <span class="service-link">View Service →</span>
        </a>

        <a href="/services/aluminum-gutters/" class="service-card card-tint-2 reveal-up reveal-delay-2">
          <div class="service-icon"><i data-lucide="shield"></i></div>
          <h3>Aluminum Gutters</h3>
          <p>Lightweight, rust-proof aluminum in dozens of factory finishes.</p>
          <ul class="sub-service-card" style="margin-top:auto; padding:0;">
            <li>Rust-proof for life</li>
            <li>20–30 year service life</li>
            <li>Most affordable material</li>
          </ul>
          <span class="service-link">View Service →</span>
        </a>

        <a href="/services/copper-gutters/" class="service-card card-tint-3 copper-feature reveal-up reveal-delay-3">
          <div class="service-icon"><i data-lucide="sparkles"></i></div>
          <h3>Copper Gutters</h3>
          <p>Hand-soldered copper specialty work for Mississippi's finest homes.</p>
          <ul class="sub-service-card" style="margin-top:auto; padding:0;">
            <li>50+ year service life</li>
            <li>Develops protective patina</li>
            <li>Decorative profiles available</li>
          </ul>
          <span class="service-link">View Service →</span>
        </a>

        <a href="/services/gutter-guards/" class="service-card card-tint-1 reveal-up reveal-delay-4">
          <div class="service-icon"><i data-lucide="filter"></i></div>
          <h3>Gutter Guards &amp; Leaf Protection</h3>
          <p>Mesh and screen guards that keep debris out and water flowing.</p>
          <ul class="sub-service-card" style="margin-top:auto; padding:0;">
            <li>Compatible with new or existing</li>
            <li>Reduces cleaning frequency</li>
            <li>Mesh, screen, and foam options</li>
          </ul>
          <span class="service-link">View Service →</span>
        </a>

        <a href="/services/gutter-cleaning/" class="service-card card-tint-3 reveal-up reveal-delay-1">
          <div class="service-icon"><i data-lucide="droplets"></i></div>
          <h3>Gutter Cleaning</h3>
          <p>Twice-yearly maintenance to prevent overflow, fascia rot, and foundation damage.</p>
          <ul class="sub-service-card" style="margin-top:auto; padding:0;">
            <li>Spring + fall scheduling</li>
            <li>Full debris removal</li>
            <li>Downspout flushing included</li>
          </ul>
          <span class="service-link">View Service →</span>
        </a>

        <a href="/services/gutter-repair-replacement/" class="service-card card-tint-2 reveal-up reveal-delay-2">
          <div class="service-icon"><i data-lucide="wrench"></i></div>
          <h3>Gutter Repair &amp; Replacement</h3>
          <p>Sagging gutters, leaking seams, and full-system replacement.</p>
          <ul class="sub-service-card" style="margin-top:auto; padding:0;">
            <li>Same-day estimates</li>
            <li>Insurance claim support</li>
            <li>Storm damage specialists</li>
          </ul>
          <span class="service-link">View Service →</span>
        </a>

        <a href="/services/commercial-gutters/" class="service-card card-tint-1 reveal-up reveal-delay-3">
          <div class="service-icon"><i data-lucide="building-2"></i></div>
          <h3>Commercial Gutters</h3>
          <p>Large-scale rain-carrying systems for office, retail, and industrial.</p>
          <ul class="sub-service-card" style="margin-top:auto; padding:0;">
            <li>Oversized 7-inch and 8-inch profiles</li>
            <li>Multi-building complexes</li>
            <li>Builder partnerships</li>
          </ul>
          <span class="service-link">View Service →</span>
        </a>

        <a href="/services/custom-downspouts/" class="service-card card-tint-3 reveal-up reveal-delay-4">
          <div class="service-icon"><i data-lucide="arrow-down-to-line"></i></div>
          <h3>Custom Downspouts</h3>
          <p>Round, square, oversized, and decorative downspouts in any color.</p>
          <ul class="sub-service-card" style="margin-top:auto; padding:0;">
            <li>Custom-sized for high flow</li>
            <li>Underground drainage tie-ins</li>
            <li>Decorative copper options</li>
          </ul>
          <span class="service-link">View Service →</span>
        </a>
      </div>
    </div>

    <div class="section-divider section-divider--bottom" aria-hidden="true">
      <svg viewBox="0 0 1440 100" preserveAspectRatio="none">
        <path fill="#F5F7FA" d="M0,30 C240,80 480,0 720,40 C960,80 1200,10 1440,50 L1440,100 L0,100 Z"></path>
      </svg>
    </div>
  </section>

  <!-- WHY DUN-RITE -->
  <section class="section section-alt" aria-label="Why choose Dun-Rite">
    <div class="container">
      <div class="section-title reveal-up">
        <span class="eyebrow-label">Why Choose Dun-Rite</span>
        <h2>Three Reasons We've Lasted <span class="text-accent">30 Years.</span></h2>
        <span class="section-subtitle">heritage matters in this trade</span>
      </div>

      <div class="why-grid">
        <div class="why-card card-tint-1 reveal-up reveal-delay-1">
          <div class="stat-watermark">1996</div>
          <h3>30 Years on Mississippi Roofs</h3>
          <p>We've installed gutters on Madison, Jackson, and Brandon homes since 1996. Mark Dungan and the Dun-Rite team have seen every roofline, every flow rate, and every rain pattern central Mississippi throws at us.</p>
        </div>

        <div class="why-card card-tint-3 reveal-up reveal-delay-2">
          <h3>On-Site Custom Forming</h3>
          <p>Every gutter section is formed on-site on our truck-mounted brake — custom-cut to your home's exact roofline. No off-the-shelf compromises. No seams every 10 feet. This is the difference between Dun-Rite and a big-box installer.</p>
        </div>

        <div class="why-card card-tint-2 reveal-up reveal-delay-3">
          <h3>25-Year Material Warranty</h3>
          <p>Backed by a 25-year manufacturer warranty on materials and a 2-year labor warranty on every install. Fully insured for Workers' Comp and General Liability — your property is protected from the moment we set up.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- SERVICE AREA -->
  <section class="section" aria-label="Service area">
    <div class="container">
      <div class="section-title reveal-up">
        <span class="eyebrow-label">Where We Work</span>
        <h2>Serving 14 <span class="text-accent">Mississippi Cities.</span></h2>
        <span class="section-subtitle">across the greater Jackson area</span>
      </div>

      <div class="area-pills reveal-up">
        <?php foreach ($cities as $city): ?>
          <span><?php echo $city; ?></span>
        <?php endforeach; ?>
      </div>

      <p style="text-align:center; margin-top: var(--space-md);"><a href="/service-areas/" class="about-text-link">View Our Service Area Map →</a></p>
    </div>
  </section>

  <!-- CLOSING CTA -->
  <section class="closing-cta" aria-label="Contact us">
    <div class="closing-cta__inner reveal-up">
      <span class="section-subtitle" style="color: var(--color-accent);">Mark and the team</span>
      <h2>Need Something Else? <span class="text-accent">Just Ask.</span></h2>
      <p>We work on rain-carrying systems, not just gutters. Whatever your project — give us a call and we'll tell you straight whether we're the right fit.</p>
      <div>
        <a href="/contact/" class="btn-primary">Get My Free Estimate</a>
        <a href="tel:+16017501800" class="closing-cta__phone">Or Call (601) 750-1800</a>
      </div>
      <p class="closing-cta__meta">Mon–Fri 8AM–5PM · Madison, MS · Mississippi Licensed &amp; Insured</p>
    </div>
  </section>

</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
