<?php
/**
 * Dun-Rite — Service Areas Main Hub
 */

$pageTitle       = "Service Areas in Central Mississippi | Dun-Rite Seamless Gutters";
$pageDescription = "Seamless gutter installation across 14 Mississippi cities including Madison, Jackson, Brandon, Flowood, Ridgeland, Clinton, and more. Free estimates from Dun-Rite Seamless Gutters.";
$canonicalUrl    = "https://dunrite-gutters.com/service-areas/";
$ogImage         = "https://i.imgur.com/kRJ17by.jpeg";
$heroImage       = "https://i.imgur.com/kRJ17by.jpeg";
$currentPage     = "service-areas";

$cities = [
  ["slug" => "madison",     "name" => "Madison",     "miles" => 0,  "char" => "Affluent suburb · 28,000 residents · HQ since 1996"],
  ["slug" => "ridgeland",   "name" => "Ridgeland",   "miles" => 3,  "char" => "Closest neighbor · 25,000 residents · mature 80s-90s neighborhoods"],
  ["slug" => "gluckstadt",  "name" => "Gluckstadt",  "miles" => 5,  "char" => "Newest MS city · rapid new construction · 10,000 residents"],
  ["slug" => "canton",      "name" => "Canton",      "miles" => 12, "char" => "Antique capital · historic homes · 12,000 residents"],
  ["slug" => "jackson",     "name" => "Jackson",     "miles" => 15, "char" => "State capital · Belhaven, Fondren · 145,000 residents"],
  ["slug" => "pearl",       "name" => "Pearl",       "miles" => 15, "char" => "East Jackson suburb · 27,000 residents · 70s-80s ranch homes"],
  ["slug" => "clinton",     "name" => "Clinton",     "miles" => 18, "char" => "College town · Mississippi College · 28,000 residents"],
  ["slug" => "flowood",     "name" => "Flowood",     "miles" => 20, "char" => "Lakeland Drive corridor · 10,000 residents"],
  ["slug" => "richland",    "name" => "Richland",    "miles" => 20, "char" => "I-20 working-class suburb · 7,500 residents"],
  ["slug" => "raymond",     "name" => "Raymond",     "miles" => 25, "char" => "Hinds County seat · historic district · 2,000 residents"],
  ["slug" => "florence",    "name" => "Florence",    "miles" => 25, "char" => "Semi-rural · large lots · 4,500 residents"],
  ["slug" => "bolton",      "name" => "Bolton",      "miles" => 28, "char" => "Rural Hinds County · acreage homes · 600 residents"],
  ["slug" => "brandon",     "name" => "Brandon",     "miles" => 30, "char" => "Eastern Reservoir suburb · Castlewoods · 25,000 residents"],
  ["slug" => "terry",       "name" => "Terry",       "miles" => 30, "char" => "South Hinds rural town · 1,000 residents"],
];

$schemaGraph = [
  "@context" => "https://schema.org",
  "@graph" => [
    [
      "@type"       => ["LocalBusiness", "RoofingContractor"],
      "@id"         => "https://dunrite-gutters.com/#business",
      "name"        => "Dun-Rite Seamless Gutters, Inc.",
      "url"         => "https://dunrite-gutters.com",
      "telephone"   => "+16017501800",
      "address"     => [
        "@type"           => "PostalAddress",
        "streetAddress"   => "115 Cherrybrook Dr",
        "addressLocality" => "Madison",
        "addressRegion"   => "MS",
        "postalCode"      => "39110",
        "addressCountry"  => "US"
      ],
      "areaServed" => array_map(fn($c) => ["@type" => "City", "name" => $c["name"], "addressRegion" => "MS"], $cities),
    ],
    [
      "@type" => "BreadcrumbList",
      "itemListElement" => [
        ["@type" => "ListItem", "position" => 1, "name" => "Home", "item" => "https://dunrite-gutters.com/"],
        ["@type" => "ListItem", "position" => 2, "name" => "Service Areas", "item" => "https://dunrite-gutters.com/service-areas/"],
      ]
    ],
    [
      "@type" => "AggregateRating",
      "itemReviewed" => ["@id" => "https://dunrite-gutters.com/#business"],
      "ratingValue" => "5.0", "reviewCount" => "27"
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
    <img src="https://i.imgur.com/kRJ17by.jpeg" alt="Dun-Rite Seamless Gutters service truck on a Mississippi installation jobsite" class="hero-bg" width="1920" height="1080" loading="eager" fetchpriority="high">
    <div class="hero__inner">
      <div class="hero__copy">
        <span class="eyebrow-label">14 Mississippi Cities Served</span>
        <h1>Gutter Services Across <span class="text-accent">Central Mississippi.</span></h1>
        <p class="hero__subhead">From Madison to Raymond, Brandon to Bolton — we serve the greater Jackson area with seamless gutter installation, copper specialty, gutter guards, cleaning, repair, commercial work, and custom downspouts.</p>
        <div class="hero__ctas">
          <a href="#hero-form-heading" class="btn-primary">Get Free Estimate</a>
          <a href="tel:+16017501800" class="btn-secondary btn-on-dark">Call (601) 750-1800</a>
        </div>
        <p class="hero__phone">Mon–Fri 8AM–5PM · No travel fees within service area</p>
      </div>
      <?php
        $preselectedService = 'Not Sure / General Inquiry';
        $heroFormHeading    = 'Get Your Free Estimate';
        $heroFormSubheading = 'Free estimates across all 14 Mississippi cities we serve';
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
        <li aria-current="page">Service Areas</li>
      </ol>
    </div>
  </nav>

  <!-- ANSWER BLOCK -->
  <section class="section">
    <div class="container">
      <div class="answer-block reveal-up">
        <h2>Where We Serve in Central Mississippi</h2>
        <p>Dun-Rite Seamless Gutters serves 14 Mississippi cities from our Madison headquarters: Madison, Jackson, Brandon, Flowood, Ridgeland, Clinton, Canton, Pearl, Gluckstadt, Florence, Richland, Bolton, Terry, and Raymond. Most service calls and free estimates can be scheduled within 48 hours. Free travel within our service area — no fuel surcharges or trip fees regardless of which city you're in.</p>
      </div>
    </div>
  </section>

  <!-- 14-CITY GRID -->
  <section class="section" aria-label="Cities served">
    <div class="container">
      <div class="section-title reveal-up">
        <span class="eyebrow-label">Pick Your City</span>
        <h2>Cities We Serve in <span class="text-accent">Central Mississippi.</span></h2>
        <span class="section-subtitle">the greater Jackson area</span>
      </div>

      <div class="city-grid">
        <?php $tints = ["card-tint-1", "card-tint-2", "card-tint-3"]; ?>
        <?php foreach ($cities as $i => $city): ?>
          <a href="/service-areas/<?php echo $city['slug']; ?>/"
             class="city-card <?php echo $city['slug'] === 'madison' ? 'city-card--home-base' : $tints[$i % 3]; ?> reveal-up reveal-delay-<?php echo ($i % 4) + 1; ?>">
            <span class="city-card__name"><?php echo $city['name']; ?></span>
            <span class="city-card__distance"><?php echo $city['miles'] === 0 ? 'Madison HQ' : $city['miles'] . ' miles from HQ'; ?></span>
            <span class="city-card__detail"><?php echo $city['char']; ?></span>
            <span class="city-card__link">View <?php echo $city['name']; ?> Page →</span>
          </a>
        <?php endforeach; ?>
      </div>
    </div>

    <div class="section-divider section-divider--bottom" aria-hidden="true">
      <svg viewBox="0 0 1440 80" preserveAspectRatio="none">
        <polygon fill="#F5F7FA" points="0,80 1440,0 1440,80"/>
      </svg>
    </div>
  </section>

  <!-- COVERAGE MAP (TEXT/SVG) -->
  <section class="section section-alt" aria-label="Coverage map">
    <div class="container">
      <div class="split">
        <div class="reveal-left">
          <span class="eyebrow-label">Coverage Map</span>
          <h2>The Greater Jackson <span class="text-accent">Metro Service Radius.</span></h2>
          <p style="margin-top: var(--space-md);">Our service area extends roughly 30 miles in every direction from our Madison headquarters. That covers the full I-55 corridor north and south, plus the Hinds and Rankin County suburbs east and west of Jackson — 14 cities in total, no overlap, no gaps.</p>
          <p>The radius isn't arbitrary. We chose it based on what we can drive in 45 minutes or less so our installers can complete a same-day estimate, return for a same-day install on small jobs, and respond to storm-damage calls within 24 hours. Anything farther than 30 miles, we evaluate case-by-case.</p>
          <p>If your address is on the edge of our radius — particularly the southern Hinds County towns or Canton-area properties — call (601) 750-1800 and we'll tell you straight whether we can fit you in.</p>
        </div>
        <div class="reveal-right">
          <div class="geo-cities">
            <span class="geo-cities__label">North of HQ</span>
            <div class="geo-cities__row">
              <a href="/service-areas/canton/" class="geo-cities__pin">Canton (12 mi)</a>
              <a href="/service-areas/gluckstadt/" class="geo-cities__pin">Gluckstadt (5 mi)</a>
            </div>

            <span class="geo-cities__label">Madison HQ</span>
            <div class="geo-cities__row">
              <a href="/service-areas/madison/" class="geo-cities__pin geo-cities__pin--hq">Madison · Home Base</a>
            </div>

            <span class="geo-cities__label">South of HQ</span>
            <div class="geo-cities__row">
              <a href="/service-areas/ridgeland/" class="geo-cities__pin">Ridgeland (3 mi)</a>
              <a href="/service-areas/jackson/" class="geo-cities__pin">Jackson (15 mi)</a>
            </div>

            <span class="geo-cities__label">East / Rankin County</span>
            <div class="geo-cities__row">
              <a href="/service-areas/flowood/" class="geo-cities__pin">Flowood (20 mi)</a>
              <a href="/service-areas/brandon/" class="geo-cities__pin">Brandon (30 mi)</a>
              <a href="/service-areas/pearl/" class="geo-cities__pin">Pearl (15 mi)</a>
              <a href="/service-areas/richland/" class="geo-cities__pin">Richland (20 mi)</a>
              <a href="/service-areas/florence/" class="geo-cities__pin">Florence (25 mi)</a>
            </div>

            <span class="geo-cities__label">West / Hinds County</span>
            <div class="geo-cities__row">
              <a href="/service-areas/clinton/" class="geo-cities__pin">Clinton (18 mi)</a>
              <a href="/service-areas/raymond/" class="geo-cities__pin">Raymond (25 mi)</a>
              <a href="/service-areas/bolton/" class="geo-cities__pin">Bolton (28 mi)</a>
              <a href="/service-areas/terry/" class="geo-cities__pin">Terry (30 mi)</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- HOW IT WORKS OUTSIDE MADISON -->
  <section class="section">
    <div class="container">
      <div class="section-title reveal-up">
        <span class="eyebrow-label">Outside Madison?</span>
        <h2>How It Works When You're <span class="text-accent">Not in Madison.</span></h2>
        <span class="section-subtitle">three steps, no travel fees</span>
      </div>

      <div class="how-it-works-grid">
        <div class="how-step card-tint-1 reveal-up reveal-delay-1">
          <div class="how-step__num">1</div>
          <h3>Schedule Within 48 Hours</h3>
          <p>Call (601) 750-1800 or submit the hero form. We'll confirm the appointment in under one business day for any of our 14 cities.</p>
        </div>
        <div class="how-step card-tint-3 reveal-up reveal-delay-2">
          <div class="how-step__num">2</div>
          <h3>Free Travel Anywhere</h3>
          <p>The estimate you get is the price you pay. No fuel surcharges, no trip charges, no "outside our zone" fees — even on jobs 30 miles from HQ.</p>
        </div>
        <div class="how-step card-tint-2 reveal-up reveal-delay-3">
          <div class="how-step__num">3</div>
          <h3>Same-Day Work Where Possible</h3>
          <p>Single-story homes typically install in one day regardless of city. Two-story and multi-building jobs schedule the same way they do in Madison.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ALL 8 SERVICES -->
  <section class="section section-alt" aria-label="Services available everywhere">
    <div class="container">
      <div class="section-title reveal-up">
        <span class="eyebrow-label">Available Everywhere</span>
        <h2>All 8 Services in <span class="text-accent">Every City We Serve.</span></h2>
        <span class="section-subtitle">no service area limitations</span>
      </div>

      <div class="services-in-city">
        <a href="/services/seamless-gutter-installation/" class="svc-mini-card card-tint-1">
          <div class="svc-mini-card__icon"><i data-lucide="ruler"></i></div>
          <h3>Seamless Gutter Installation</h3>
          <p>Custom-formed on-site in 5-inch and 6-inch K-style.</p>
          <span class="svc-mini-card__link">View Service →</span>
        </a>
        <a href="/services/aluminum-gutters/" class="svc-mini-card card-tint-2">
          <div class="svc-mini-card__icon"><i data-lucide="shield"></i></div>
          <h3>Aluminum Gutters</h3>
          <p>Lightweight, rust-proof, 25+ baked-enamel colors.</p>
          <span class="svc-mini-card__link">View Service →</span>
        </a>
        <a href="/services/copper-gutters/" class="svc-mini-card card-tint-3">
          <div class="svc-mini-card__icon"><i data-lucide="sparkles"></i></div>
          <h3>Copper Gutters</h3>
          <p>Hand-soldered specialty work for premium homes.</p>
          <span class="svc-mini-card__link">View Service →</span>
        </a>
        <a href="/services/gutter-guards/" class="svc-mini-card card-tint-1">
          <div class="svc-mini-card__icon"><i data-lucide="filter"></i></div>
          <h3>Gutter Guards</h3>
          <p>Mesh, screen, and foam systems for any home.</p>
          <span class="svc-mini-card__link">View Service →</span>
        </a>
        <a href="/services/gutter-cleaning/" class="svc-mini-card card-tint-3">
          <div class="svc-mini-card__icon"><i data-lucide="droplets"></i></div>
          <h3>Gutter Cleaning</h3>
          <p>Twice-yearly maintenance with written reports.</p>
          <span class="svc-mini-card__link">View Service →</span>
        </a>
        <a href="/services/gutter-repair-replacement/" class="svc-mini-card card-tint-2">
          <div class="svc-mini-card__icon"><i data-lucide="wrench"></i></div>
          <h3>Repair &amp; Replacement</h3>
          <p>Same-day estimates and storm damage support.</p>
          <span class="svc-mini-card__link">View Service →</span>
        </a>
        <a href="/services/commercial-gutters/" class="svc-mini-card card-tint-1">
          <div class="svc-mini-card__icon"><i data-lucide="building-2"></i></div>
          <h3>Commercial Gutters</h3>
          <p>Office, retail, multi-family, and industrial.</p>
          <span class="svc-mini-card__link">View Service →</span>
        </a>
        <a href="/services/custom-downspouts/" class="svc-mini-card card-tint-3">
          <div class="svc-mini-card__icon"><i data-lucide="arrow-down-to-line"></i></div>
          <h3>Custom Downspouts</h3>
          <p>Round, oversized, and decorative profiles.</p>
          <span class="svc-mini-card__link">View Service →</span>
        </a>
      </div>
    </div>
  </section>

  <!-- STATS -->
  <section class="section">
    <div class="container">
      <div class="section-title reveal-up">
        <span class="eyebrow-label">By the Numbers</span>
        <h2>Service Area <span class="text-accent">Coverage.</span></h2>
      </div>
      <div class="stats-grid">
        <div class="stat-block reveal-scale reveal-delay-1">
          <span class="stat-number" data-counter data-target="14">0</span>
          <span class="stat-label">Cities Served</span>
        </div>
        <div class="stat-block reveal-scale reveal-delay-2">
          <span class="stat-number" data-counter data-target="30">0</span>
          <span class="stat-label">Years on Mississippi Roofs</span>
        </div>
        <div class="stat-block reveal-scale reveal-delay-3">
          <span class="stat-number" data-counter data-target="50">0</span>
          <span class="stat-label">Mile Service Radius</span>
        </div>
        <div class="stat-block reveal-scale reveal-delay-4">
          <span class="stat-number">$0</span>
          <span class="stat-label">Travel Fees in Service Area</span>
        </div>
      </div>
    </div>
  </section>

  <!-- CLOSING CTA -->
  <section class="closing-cta" aria-label="Get a free estimate">
    <div class="closing-cta__inner reveal-up">
      <span class="section-subtitle" style="color: var(--color-accent);">Mark and the team</span>
      <h2>Don't See Your <span class="text-accent">City Listed?</span></h2>
      <p>We may still serve your area — call us and we'll be honest about whether we can get to you. No pressure, no upsell, just a straight answer.</p>
      <div>
        <a href="/contact/" class="btn-primary">Get My Free Estimate</a>
        <a href="tel:+16017501800" class="closing-cta__phone">Or Call (601) 750-1800</a>
      </div>
      <p class="closing-cta__meta">Mon–Fri 8AM–5PM · Madison, MS · Mississippi Licensed &amp; Insured</p>
    </div>
  </section>

</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
