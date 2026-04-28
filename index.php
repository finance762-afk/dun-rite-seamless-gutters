<?php
/**
 * Dun-Rite Seamless Gutters, Inc. — Homepage
 * Phase 2 Build | Premium Tier
 */

$pageTitle       = "Dun-Rite Seamless Gutters | Madison, MS Gutter Installation | Est. 1996";
$pageDescription = "Mississippi's seamless gutter specialists since 1996. Aluminum, copper, gutter guards, cleaning, repair. 25-year warranty. Free estimates across the greater Jackson area. Call (601) 750-1800.";
$canonicalUrl    = "https://dunrite-gutters.com/";
$ogImage         = "https://i.imgur.com/GO8sZjl.jpeg";
$currentPage     = "home";
$heroImage       = "https://i.imgur.com/GO8sZjl.jpeg";

/* ----------------------------------------------------------------------
   Consolidated @graph schema
   ---------------------------------------------------------------------- */
$areaServedCities = [
  "Brandon", "Jackson", "Canton", "Madison", "Pearl", "Richland", "Flowood",
  "Florence", "Gluckstadt", "Bolton", "Clinton", "Terry", "Ridgeland", "Raymond"
];
$areaServedSchema = array_map(function ($city) {
  return [
    "@type"           => "City",
    "name"            => $city,
    "addressRegion"   => "MS",
    "addressCountry"  => "US"
  ];
}, $areaServedCities);

$schemaGraph = [
  "@context" => "https://schema.org",
  "@graph" => [
    [
      "@type"       => ["LocalBusiness", "RoofingContractor"],
      "@id"         => "https://dunrite-gutters.com/#business",
      "name"        => "Dun-Rite Seamless Gutters, Inc.",
      "alternateName" => "Dun-Rite Gutters",
      "url"         => "https://dunrite-gutters.com",
      "logo"        => "https://i.imgur.com/xRVJ7rY.jpeg",
      "image"       => "https://i.imgur.com/xRVJ7rY.jpeg",
      "telephone"   => "+16017501800",
      "email"       => "mark.dungan@yahoo.com",
      "priceRange"  => "$$",
      "foundingDate" => "1996",
      "slogan"      => "Have it done right by Dun-Rite!",
      "address"     => [
        "@type"           => "PostalAddress",
        "streetAddress"   => "115 Cherrybrook Dr",
        "addressLocality" => "Madison",
        "addressRegion"   => "MS",
        "postalCode"      => "39110",
        "addressCountry"  => "US"
      ],
      "areaServed"  => $areaServedSchema,
      "openingHoursSpecification" => [
        [
          "@type"     => "OpeningHoursSpecification",
          "dayOfWeek" => ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday"],
          "opens"     => "08:00",
          "closes"    => "17:00"
        ]
      ],
      "aggregateRating" => [
        "@type"       => "AggregateRating",
        "ratingValue" => "5.0",
        "reviewCount" => "27"
      ],
      "sameAs" => [
        "https://www.facebook.com/dunritegutters/",
        "https://share.google/ILoTdINgp3QYNTw3",
        "https://www.yelp.com/biz/dun-rite-seamless-gutters-madison-6",
        "https://www.bbb.org/us/ms/madison/profile/gutters/dun-rite-seamless-gutters-0523-145212331"
      ]
    ],
    [
      "@type"     => "WebSite",
      "@id"       => "https://dunrite-gutters.com/#website",
      "url"       => "https://dunrite-gutters.com",
      "name"      => "Dun-Rite Seamless Gutters, Inc.",
      "publisher" => ["@id" => "https://dunrite-gutters.com/#business"],
      "potentialAction" => [
        "@type"  => "SearchAction",
        "target" => [
          "@type"       => "EntryPoint",
          "urlTemplate" => "https://dunrite-gutters.com/?s={search_term_string}"
        ],
        "query-input" => "required name=search_term_string"
      ]
    ],
    [
      "@type"        => "Organization",
      "@id"          => "https://dunrite-gutters.com/#org",
      "name"         => "Dun-Rite Seamless Gutters, Inc.",
      "url"          => "https://dunrite-gutters.com",
      "logo"         => "https://i.imgur.com/xRVJ7rY.jpeg",
      "foundingDate" => "1996"
    ],
    [
      "@type"    => "Person",
      "@id"      => "https://dunrite-gutters.com/#owner",
      "name"     => "Mark Dungan",
      "jobTitle" => "Owner",
      "worksFor" => ["@id" => "https://dunrite-gutters.com/#business"]
    ],
    [
      "@type"      => "FAQPage",
      "@id"        => "https://dunrite-gutters.com/#faqpage",
      "mainEntity" => [
        [
          "@type" => "Question",
          "name"  => "How much do new seamless gutters cost in Mississippi?",
          "acceptedAnswer" => [
            "@type" => "Answer",
            "text"  => "Most Mississippi homes run $1,200–$3,500 for a complete seamless aluminum gutter system, depending on linear footage, number of stories, and downspout count. Copper gutters typically start at $25–$40 per linear foot installed. We provide free written estimates after measuring on-site."
          ]
        ],
        [
          "@type" => "Question",
          "name"  => "How long do seamless gutters last?",
          "acceptedAnswer" => [
            "@type" => "Answer",
            "text"  => "A properly installed aluminum seamless gutter system lasts 20–30 years. Copper gutters routinely last 50+ years and develop a protective patina over time. All our installations are backed by a 25-year manufacturer warranty on materials and a 2-year warranty on our labor."
          ]
        ],
        [
          "@type" => "Question",
          "name"  => "What is the difference between seamless and sectional gutters?",
          "acceptedAnswer" => [
            "@type" => "Answer",
            "text"  => "Sectional gutters come pre-cut in 10-foot lengths and require seams every 10 feet — every seam is a future leak point. Seamless gutters are formed on-site in one continuous piece per roofline run, eliminating leak points entirely. We use a truck-mounted brake to custom-form each section to your home."
          ]
        ],
        [
          "@type" => "Question",
          "name"  => "Do I need gutter guards?",
          "acceptedAnswer" => [
            "@type" => "Answer",
            "text"  => "If your home has trees nearby, gutter guards prevent leaf and debris buildup that causes overflow, fascia rot, and foundation water damage. Our mesh and screen systems install over new or existing gutters and dramatically reduce cleaning frequency."
          ]
        ],
        [
          "@type" => "Question",
          "name"  => "How often should gutters be cleaned?",
          "acceptedAnswer" => [
            "@type" => "Answer",
            "text"  => "Most Mississippi homes need gutter cleaning twice a year — once in late spring and once after fall leaf-drop. Homes with heavy tree coverage may need quarterly cleanings. Clogged gutters cause foundation damage, fascia rot, and basement flooding."
          ]
        ],
        [
          "@type" => "Question",
          "name"  => "Do you offer copper gutters?",
          "acceptedAnswer" => [
            "@type" => "Answer",
            "text"  => "Yes — we're one of the few Mississippi gutter specialists with copper expertise. We hand-solder copper seams, fabricate decorative profiles, and install copper standing-seam accents. Copper is more expensive upfront but lasts 50+ years and adds significant home value."
          ]
        ]
      ]
    ]
  ]
];
$schemaMarkup = '<script type="application/ld+json">' . json_encode($schemaGraph, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>';

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/nav.php'; ?>

<main id="main-content">

  <!-- ====================================================================
       SECTION 1 — HERO (100vh) — with reusable hero contact form
       ==================================================================== -->
  <section class="hero" aria-label="Hero">
    <img src="https://i.imgur.com/GO8sZjl.jpeg"
         alt="Yellow brick Madison MS home with white seamless gutters by Dun-Rite"
         class="hero-bg"
         width="1920" height="1080"
         loading="eager"
         fetchpriority="high">
    <div class="hero__inner">
      <div class="hero__copy">
        <span class="eyebrow-label">Madison, MS &middot; Established 1996</span>
        <h1>Have It Done <span class="text-accent">Right</span> by Dun-Rite.</h1>
        <p class="hero__subhead">Mississippi's seamless gutter specialists. Custom-formed gutters, copper installations, gutter guards, and rain-carrying systems backed by a 25-year manufacturer warranty.</p>
        <div class="hero__ctas">
          <a href="#hero-form-heading" class="btn-primary">Get Free Estimate</a>
          <a href="/services/" class="btn-secondary btn-on-dark">View Services</a>
        </div>
        <p class="hero__phone">Or call <a href="tel:+16017501800">(601) 750-1800</a></p>
      </div>
      <?php
        // Hero form — homepage uses generic "Not Sure" default
        $preselectedService = 'Not Sure / General Inquiry';
        $heroFormHeading    = 'Get Your Free Estimate';
        $heroFormSubheading = 'Same-day callback · Free written quote';
        include $_SERVER['DOCUMENT_ROOT'] . '/includes/hero-form.php';
      ?>
    </div>
    <div class="section-divider section-divider--bottom" aria-hidden="true">
      <svg viewBox="0 0 1440 100" preserveAspectRatio="none">
        <path fill="#FFFFFF" d="M0,64 C240,96 480,32 720,48 C960,64 1200,96 1440,72 L1440,100 L0,100 Z"></path>
      </svg>
    </div>
  </section>

  <!-- ====================================================================
       SECTION 2 — TRUST STRIP
       ==================================================================== -->
  <section class="trust-strip" aria-label="Industry accreditations">
    <div class="container">
      <span class="eyebrow-label trust-strip__eyebrow">Trusted &amp; Accredited</span>
      <img src="https://i.imgur.com/WbrtNRS.png"
           alt="Dun-Rite Seamless Gutters is HomeAdvisor approved, BBB accredited, and a member of the Home Builders Association"
           class="trust-strip__img"
           width="700" height="120"
           loading="lazy">
      <p class="trust-strip__caption">Mississippi licensed &amp; fully insured &middot; Workers' Comp + General Liability</p>
    </div>
  </section>

  <!-- ====================================================================
       SECTION 3 — STAT COUNTERS
       ==================================================================== -->
  <section class="section section-alt" aria-label="Company milestones">
    <div class="stat-watermark" style="top: 10%; left: 50%; transform: translateX(-50%);">1996</div>
    <div class="container" style="position: relative; z-index: 2;">
      <div class="section-title reveal-up">
        <span class="section-subtitle">by the numbers</span>
        <h2>Three Decades of <span class="text-accent">Mississippi</span> Gutters</h2>
      </div>
      <div class="stats-grid">
        <div class="stat-block reveal-scale reveal-delay-1">
          <span class="stat-number" data-counter data-target="30" data-suffix="+">0</span>
          <span class="stat-label">Years in Business</span>
        </div>
        <div class="stat-block reveal-scale reveal-delay-2">
          <span class="stat-number" data-counter data-target="25">0</span>
          <span class="stat-label">Year Material Warranty</span>
        </div>
        <div class="stat-block reveal-scale reveal-delay-3">
          <span class="stat-number" data-counter data-target="14">0</span>
          <span class="stat-label">Mississippi Cities Served</span>
        </div>
        <div class="stat-block reveal-scale reveal-delay-4">
          <span class="stat-number">5.0</span>
          <span class="stat-label">Average Customer Rating</span>
        </div>
      </div>
    </div>
  </section>

  <!-- ====================================================================
       SECTION 4 — SERVICES OVERVIEW
       ==================================================================== -->
  <section class="section" aria-label="Gutter services">
    <!-- Floating raindrop accents -->
    <svg class="floating-accent float-animate" style="top: 80px; right: 5%; width: 80px; height: 110px;" viewBox="0 0 60 80" aria-hidden="true">
      <path fill="#0F4C81" d="M30 0 C30 0 0 35 0 55 A30 25 0 0 0 60 55 C60 35 30 0 30 0 Z"/>
    </svg>
    <svg class="floating-accent float-animate-slow" style="bottom: 100px; left: 3%; width: 60px; height: 80px; opacity: 0.07;" viewBox="0 0 60 80" aria-hidden="true">
      <path fill="#B87333" d="M30 0 C30 0 0 35 0 55 A30 25 0 0 0 60 55 C60 35 30 0 30 0 Z"/>
    </svg>

    <div class="container" style="position: relative; z-index: 2;">
      <div class="section-title reveal-up">
        <span class="eyebrow-label">What We Do</span>
        <h2>Eight Services. <span class="text-accent">One Standard.</span></h2>
        <span class="section-subtitle">every gutter, every detail</span>
        <p class="prose" style="margin-top: var(--space-md);">From standard 5-inch K-style to high-flow 6-inch and copper specialty installations, we build seamless rain-carrying systems on-site for residential, commercial, and new-construction projects across central Mississippi.</p>
      </div>

      <div class="services-grid">
        <a href="/services/seamless-gutter-installation/" class="service-card card-tint-1 reveal-up reveal-delay-1">
          <div class="service-icon"><i data-lucide="ruler"></i></div>
          <h3>Seamless Gutter Installation</h3>
          <p>Custom-formed on-site in 5-inch and 6-inch profiles. No seams, no leaks.</p>
          <span class="service-link">Learn more &rarr;</span>
        </a>

        <a href="/services/aluminum-gutters/" class="service-card card-tint-2 reveal-up reveal-delay-2">
          <div class="service-icon"><i data-lucide="shield"></i></div>
          <h3>Aluminum Gutters</h3>
          <p>Lightweight, rust-proof, available in dozens of baked-enamel colors.</p>
          <span class="service-link">Learn more &rarr;</span>
        </a>

        <a href="/services/copper-gutters/" class="service-card card-tint-3 copper-feature reveal-up reveal-delay-3">
          <div class="service-icon"><i data-lucide="sparkles"></i></div>
          <h3>Copper Gutters</h3>
          <p>Specialty copper installations that develop a natural patina. Built to last 50+ years.</p>
          <span class="service-link">Learn more &rarr;</span>
        </a>

        <a href="/services/gutter-guards/" class="service-card card-tint-1 reveal-up reveal-delay-4">
          <div class="service-icon"><i data-lucide="filter"></i></div>
          <h3>Gutter Guards &amp; Leaf Protection</h3>
          <p>Mesh and screen systems that keep debris out and water flowing.</p>
          <span class="service-link">Learn more &rarr;</span>
        </a>

        <a href="/services/gutter-cleaning/" class="service-card card-tint-2 reveal-up reveal-delay-1">
          <div class="service-icon"><i data-lucide="droplets"></i></div>
          <h3>Gutter Cleaning</h3>
          <p>Twice-yearly cleanings to prevent overflow, fascia damage, and foundation issues.</p>
          <span class="service-link">Learn more &rarr;</span>
        </a>

        <a href="/services/gutter-repair-replacement/" class="service-card card-tint-3 reveal-up reveal-delay-2">
          <div class="service-icon"><i data-lucide="wrench"></i></div>
          <h3>Gutter Repair &amp; Replacement</h3>
          <p>Fix sagging gutters, replace damaged sections, or full system replacement.</p>
          <span class="service-link">Learn more &rarr;</span>
        </a>

        <a href="/services/commercial-gutters/" class="service-card card-tint-1 reveal-up reveal-delay-3">
          <div class="service-icon"><i data-lucide="building-2"></i></div>
          <h3>Commercial Gutters</h3>
          <p>Large-scale rain carrying systems for office buildings, retail, and multi-family.</p>
          <span class="service-link">Learn more &rarr;</span>
        </a>

        <a href="/services/custom-downspouts/" class="service-card card-tint-2 reveal-up reveal-delay-4">
          <div class="service-icon"><i data-lucide="arrow-down-to-line"></i></div>
          <h3>Custom Downspouts</h3>
          <p>Round, square, decorative, and oversized downspouts in any color.</p>
          <span class="service-link">Learn more &rarr;</span>
        </a>
      </div>
    </div>

    <div class="section-divider section-divider--bottom" aria-hidden="true">
      <svg viewBox="0 0 1440 80" preserveAspectRatio="none">
        <polygon fill="#F5F7FA" points="0,80 1440,0 1440,80"/>
      </svg>
    </div>
  </section>

  <!-- ====================================================================
       SECTION 5 — ABOUT SNIPPET (ASYMMETRIC)
       ==================================================================== -->
  <section class="section section-alt" aria-label="About Dun-Rite">
    <svg class="floating-accent float-animate-slow" style="bottom: 60px; right: 8%; width: 70px; height: 70px; opacity: 0.06;" viewBox="0 0 60 60" aria-hidden="true">
      <circle fill="#0F4C81" cx="30" cy="30" r="30"/>
    </svg>

    <div class="container">
      <div class="about-grid">
        <div class="reveal-left">
          <span class="eyebrow-label">Our Story</span>
          <h2>Three Generations of <span class="text-accent">Rain Carrying Systems.</span></h2>
          <span class="section-subtitle">Established 1996</span>
          <p style="margin-top: var(--space-md);">Dun-Rite Seamless Gutters has been Mississippi's gutter specialist since 1996. We build every gutter system on-site — custom-cut to your home's exact roofline — using top-tier aluminum, copper, and steel materials backed by a 25-year manufacturer warranty.</p>
          <p>Mark Dungan and his team work directly with homeowners, builders, and commercial property managers across the greater Jackson area. From single-story replacements to estate copper installations, our standard hasn't changed in 30 years: do it once, do it right, do it Dun-Rite.</p>

          <div class="about-stats-inline">
            <div class="stat-block">
              <span class="stat-number">30+</span>
              <span class="stat-label">Years installing</span>
            </div>
            <div class="stat-block">
              <span class="stat-number">25</span>
              <span class="stat-label">Year warranty</span>
            </div>
            <div class="stat-block">
              <span class="stat-number">5.0</span>
              <span class="stat-label">Customer rating</span>
            </div>
          </div>

          <a href="/about/" class="about-text-link">Read Our Full Story &rarr;</a>
        </div>

        <div class="about-image-stack reveal-right">
          <img src="https://i.imgur.com/qJMX4SH.png"
               alt="Mark Dungan, owner of Dun-Rite Seamless Gutters since 1996"
               class="about-image-primary"
               width="800" height="900"
               loading="lazy">
          <img src="https://i.imgur.com/lHGkpv5.jpeg"
               alt="Brick stucco Mississippi home with arched entry and white seamless gutters by Dun-Rite"
               class="about-image-secondary"
               width="600" height="500"
               loading="lazy">
        </div>
      </div>
    </div>
  </section>

  <!-- ====================================================================
       SECTION 6 — PROCESS
       ==================================================================== -->
  <section class="section" aria-label="Our process">
    <div class="container">
      <div class="section-title reveal-up">
        <span class="eyebrow-label">Our Process</span>
        <h2>From Free Estimate to <span class="text-accent">Lasting Protection.</span></h2>
        <span class="section-subtitle">four steps, zero stress</span>
      </div>

      <div class="process-grid">
        <div class="process-step reveal-up reveal-delay-1">
          <div class="process-step__num">1</div>
          <div class="process-step__icon"><i data-lucide="clipboard-check"></i></div>
          <h3>Free On-Site Estimate</h3>
          <p>We measure your roofline, evaluate water-flow needs, and recommend the right gutter system in writing — no obligation.</p>
        </div>
        <div class="process-step reveal-up reveal-delay-2">
          <div class="process-step__num">2</div>
          <div class="process-step__icon"><i data-lucide="ruler"></i></div>
          <h3>Custom On-Site Forming</h3>
          <p>Our truck-mounted brake forms each gutter section to your home's exact dimensions. Zero seams, zero off-the-shelf compromises.</p>
        </div>
        <div class="process-step reveal-up reveal-delay-3">
          <div class="process-step__num">3</div>
          <div class="process-step__icon"><i data-lucide="hammer"></i></div>
          <h3>Professional Installation</h3>
          <p>Hidden hangers, sealed corners, properly pitched runs, and downspouts placed to protect your foundation and landscaping.</p>
        </div>
        <div class="process-step reveal-up reveal-delay-4">
          <div class="process-step__num">4</div>
          <div class="process-step__icon"><i data-lucide="shield-check"></i></div>
          <h3>Workmanship Warranty</h3>
          <p>25-year manufacturer warranty on materials. 2-year labor warranty on every install. Fully insured for your protection.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ====================================================================
       SECTION 7 — COPPER SPECIALTY (FULL-WIDTH NAVY)
       ==================================================================== -->
  <section class="section-lg section-dark" aria-label="Copper gutter specialty">
    <div class="section-divider section-divider--top" aria-hidden="true">
      <svg viewBox="0 0 1440 80" preserveAspectRatio="none">
        <path fill="#0F4C81" d="M0,0 C240,80 480,0 720,40 C960,80 1200,0 1440,40 L1440,80 L0,80 Z"/>
      </svg>
    </div>

    <svg class="floating-accent float-animate-slow" style="top: 20%; left: 5%; width: 120px; height: 160px; opacity: 0.08;" viewBox="0 0 60 80" aria-hidden="true">
      <path fill="#B87333" d="M30 0 C30 0 0 35 0 55 A30 25 0 0 0 60 55 C60 35 30 0 30 0 Z"/>
    </svg>

    <div class="container">
      <div class="copper-split">
        <div class="reveal-up">
          <span class="eyebrow-label">Signature Specialty</span>
          <h2 style="color:#fff;"><span class="text-accent">Copper</span> Gutters That Outlast the House.</h2>
          <span class="section-subtitle" style="color: var(--color-accent);">the patina takes its time</span>
          <p style="color: rgba(255,255,255,0.92); margin-top: var(--space-md);">We've been installing copper gutters and standing-seam copper accents on Mississippi's finest homes since 1996. Hand-soldered seams, oversized downspouts, and decorative endcaps that develop a rich verdigris patina over decades. When your project deserves more than aluminum, we'll show you why copper is the only material that lasts as long as your house.</p>
          <ul class="copper-list">
            <li>50+ year service life with proper installation</li>
            <li>Hand-soldered seams (not riveted or sealed)</li>
            <li>Custom decorative profiles and endcaps available</li>
          </ul>
          <a href="/services/copper-gutters/" class="btn-primary">View Copper Gutter Service &rarr;</a>
        </div>
        <div class="reveal-right">
          <img src="https://i.imgur.com/a54eolx.jpeg"
               alt="Mediterranean estate with hand-installed copper gutters and copper accents by Dun-Rite Seamless Gutters in Mississippi"
               width="900" height="675"
               loading="lazy">
        </div>
      </div>
    </div>

    <div class="section-divider section-divider--bottom" aria-hidden="true">
      <svg viewBox="0 0 1440 80" preserveAspectRatio="none">
        <path fill="#0F4C81" d="M0,40 C240,0 480,80 720,40 C960,0 1200,80 1440,40 L1440,0 L0,0 Z"/>
      </svg>
    </div>
  </section>

  <!-- ====================================================================
       SECTION 8 — WORK GALLERY
       ==================================================================== -->
  <section class="section" aria-label="Recent installations">
    <div class="container">
      <div class="section-title reveal-up">
        <span class="eyebrow-label">Recent Work</span>
        <h2>Mississippi Homes <span class="text-accent">We've Protected.</span></h2>
        <span class="section-subtitle">every roofline, every detail</span>
      </div>

      <div class="gallery-grid">
        <div class="gallery-item reveal-up reveal-delay-1">
          <img src="https://i.imgur.com/3nVl1Ha.jpeg" alt="Yellow two-story home with white seamless gutters in Madison MS by Dun-Rite" width="600" height="450" loading="lazy">
        </div>
        <div class="gallery-item reveal-up reveal-delay-2">
          <img src="https://i.imgur.com/3IyAuXz.jpeg" alt="Brick home with dark roof and white gutters in Jackson area by Dun-Rite" width="600" height="450" loading="lazy">
        </div>
        <div class="gallery-item reveal-up reveal-delay-3">
          <img src="https://i.imgur.com/8tTXO7O.jpeg" alt="Modern white-sided Mississippi home with dark seamless gutters by Dun-Rite" width="600" height="450" loading="lazy">
        </div>
        <div class="gallery-item reveal-up reveal-delay-4">
          <img src="https://i.imgur.com/lHGkpv5.jpeg" alt="Brick stucco home with arched entryway and seamless gutters by Dun-Rite" width="600" height="450" loading="lazy">
        </div>
        <div class="gallery-item reveal-up reveal-delay-1">
          <img src="https://i.imgur.com/OWQAw0g.jpeg" alt="Brick home with copper gutters and copper standing-seam awning by Dun-Rite" width="600" height="450" loading="lazy">
        </div>
        <div class="gallery-item reveal-up reveal-delay-2">
          <img src="https://i.imgur.com/INwo4Si.jpeg" alt="Brick home entrance with seamless gutters and downspouts by Dun-Rite" width="600" height="450" loading="lazy">
        </div>
        <div class="gallery-item reveal-up reveal-delay-3">
          <img src="https://i.imgur.com/dRN7AE6.jpeg" alt="Two-story Mississippi home with balcony and seamless gutter installation by Dun-Rite" width="600" height="450" loading="lazy">
        </div>
        <div class="gallery-item reveal-up reveal-delay-4">
          <img src="https://i.imgur.com/gwDHcvD.jpeg" alt="Close-up of newly installed black seamless gutters on tile roofline" width="600" height="450" loading="lazy">
        </div>
        <div class="gallery-item reveal-up reveal-delay-1">
          <img src="https://i.imgur.com/RzYB8p1.jpeg" alt="Color sample lineup of seamless gutter options including white, black, and copper by Dun-Rite" width="600" height="450" loading="lazy">
        </div>
      </div>

      <div class="gallery-cta-row reveal-up">
        <a href="/service-areas/">See More Recent Installs &rarr;</a>
      </div>
    </div>
  </section>

  <!-- ====================================================================
       SECTION 9 — FAQ
       ==================================================================== -->
  <section class="section section-alt" aria-label="Frequently asked questions">
    <div class="container">
      <div class="section-title reveal-up">
        <span class="eyebrow-label">Frequently Asked</span>
        <h2>Mississippi Gutter <span class="text-accent">Questions, Answered.</span></h2>
        <span class="section-subtitle">the questions we hear every week</span>
      </div>

      <div class="faq-list">
        <div class="faq-item reveal-up">
          <button class="faq-question" aria-expanded="false">How much do new seamless gutters cost in Mississippi?</button>
          <div class="faq-answer">
            <div class="faq-answer-inner">
              <p>Most Mississippi homes run $1,200&ndash;$3,500 for a complete seamless aluminum gutter system, depending on linear footage, number of stories, and downspout count. Copper gutters typically start at $25&ndash;$40 per linear foot installed. We provide free written estimates after measuring on-site.</p>
            </div>
          </div>
        </div>

        <div class="faq-item reveal-up">
          <button class="faq-question" aria-expanded="false">How long do seamless gutters last?</button>
          <div class="faq-answer">
            <div class="faq-answer-inner">
              <p>A properly installed aluminum seamless gutter system lasts 20&ndash;30 years. Copper gutters routinely last 50+ years and develop a protective patina over time. All our installations are backed by a 25-year manufacturer warranty on materials and a 2-year warranty on our labor.</p>
            </div>
          </div>
        </div>

        <div class="faq-item reveal-up">
          <button class="faq-question" aria-expanded="false">What's the difference between seamless and sectional gutters?</button>
          <div class="faq-answer">
            <div class="faq-answer-inner">
              <p>Sectional gutters come pre-cut in 10-foot lengths and require seams every 10 feet &mdash; every seam is a future leak point. Seamless gutters are formed on-site in one continuous piece per roofline run, eliminating leak points entirely. We use a truck-mounted brake to custom-form each section to your home.</p>
            </div>
          </div>
        </div>

        <div class="faq-item reveal-up">
          <button class="faq-question" aria-expanded="false">Do I need gutter guards?</button>
          <div class="faq-answer">
            <div class="faq-answer-inner">
              <p>If your home has trees nearby, gutter guards prevent leaf and debris buildup that causes overflow, fascia rot, and foundation water damage. Our mesh and screen systems install over new or existing gutters and dramatically reduce cleaning frequency.</p>
            </div>
          </div>
        </div>

        <div class="faq-item reveal-up">
          <button class="faq-question" aria-expanded="false">How often should gutters be cleaned?</button>
          <div class="faq-answer">
            <div class="faq-answer-inner">
              <p>Most Mississippi homes need gutter cleaning twice a year &mdash; once in late spring and once after fall leaf-drop. Homes with heavy tree coverage may need quarterly cleanings. Clogged gutters cause foundation damage, fascia rot, and basement flooding.</p>
            </div>
          </div>
        </div>

        <div class="faq-item reveal-up">
          <button class="faq-question" aria-expanded="false">Do you offer copper gutters?</button>
          <div class="faq-answer">
            <div class="faq-answer-inner">
              <p>Yes &mdash; we're one of the few Mississippi gutter specialists with copper expertise. We hand-solder copper seams, fabricate decorative profiles, and install copper standing-seam accents. Copper is more expensive upfront but lasts 50+ years and adds significant home value.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ====================================================================
       SECTION 10 — CLOSING CTA
       ==================================================================== -->
  <section class="closing-cta" aria-label="Free estimate">
    <svg class="floating-accent float-animate-slow" style="top: 15%; left: 6%; width: 150px; height: 200px; opacity: 0.08;" viewBox="0 0 60 80" aria-hidden="true">
      <path fill="#B87333" d="M30 0 C30 0 0 35 0 55 A30 25 0 0 0 60 55 C60 35 30 0 30 0 Z"/>
    </svg>
    <svg class="floating-accent float-animate" style="bottom: 12%; right: 8%; width: 130px; height: 175px; opacity: 0.06;" viewBox="0 0 60 80" aria-hidden="true">
      <path fill="#B87333" d="M30 0 C30 0 0 35 0 55 A30 25 0 0 0 60 55 C60 35 30 0 30 0 Z"/>
    </svg>

    <div class="closing-cta__inner reveal-up">
      <span class="section-subtitle" style="color: var(--color-accent);">Mark and the team</span>
      <h2>Are Standing By for Your <span class="text-accent">Free Estimate.</span></h2>
      <p>Free on-site estimates across all 14 cities we serve. Most quotes scheduled within 48 hours. No-pressure, written, and itemized.</p>
      <div>
        <a href="/contact/" class="btn-primary">Get My Free Estimate</a>
        <a href="tel:+16017501800" class="closing-cta__phone">Or Call (601) 750-1800</a>
      </div>
      <p class="closing-cta__meta">Mon&ndash;Fri 8AM&ndash;5PM &middot; Madison, MS &middot; Mississippi Licensed &amp; Insured</p>
    </div>
  </section>

</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
