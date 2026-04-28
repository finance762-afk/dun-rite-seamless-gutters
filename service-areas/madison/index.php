<?php
/**
 * Dun-Rite — Madison, MS (HOME BASE — Premium 800+ words)
 */

$pageTitle       = "Gutter Services in Madison, MS | Dun-Rite Home Base";
$pageDescription = "Madison's gutter specialist since 1996. Seamless installation, copper, gutter guards, cleaning, and repair throughout Reunion, Lake Caroline, Old Annandale, and all Madison neighborhoods. Free estimates.";
$canonicalUrl    = "https://dunrite-gutters.com/service-areas/madison/";
$ogImage         = "https://i.imgur.com/lHGkpv5.jpeg";
$heroImage       = "https://i.imgur.com/lHGkpv5.jpeg";
$currentPage     = "service-areas";

$faqs = [
  ["q" => "What is Dun-Rite's service area boundary?", "a" => "We serve 14 cities across the greater Jackson metro area: Madison (HQ), Jackson, Brandon, Flowood, Ridgeland, Clinton, Canton, Pearl, Gluckstadt, Florence, Richland, Bolton, Terry, and Raymond. Our service radius extends roughly 30 miles in each direction from our Madison headquarters. Outside this range, we evaluate special requests case-by-case — call (601) 750-1800 to ask."],
  ["q" => "Do you charge travel or trip fees for Madison jobs?", "a" => "No. Free travel anywhere within our 14-city service area. Madison is our home base, so there's never a travel charge to come measure or install — but the same applies in every city we serve. The estimate you receive is the price you pay."],
  ["q" => "How quickly can you schedule a Madison estimate?", "a" => "Most Madison estimates schedule within 24–48 hours of your call. Since Madison is our home base, we maintain a same-day or next-day estimate window for Madison addresses whenever possible. Standard installations typically begin within 1–2 weeks of your signed estimate."],
  ["q" => "What types of homes do you most commonly work on in Madison?", "a" => "Madison's housing stock spans 1980s established neighborhoods to brand-new construction in Reunion and The Bridges. Most Madison homes use 5-inch K-style gutters in white, almond, or classic bronze, though we install plenty of 6-inch high-flow systems on larger custom homes and copper installations on Lake Caroline lakefront properties."],
  ["q" => "How does living in Madison affect what gutters you recommend?", "a" => "Madison's mature oak and pine canopy means we strongly recommend gutter guards for most homes — without them, you'll be cleaning gutters every 2–3 months in fall. We also see a lot of fascia rot from deferred maintenance on older Lake Caroline and Annandale homes, which is why we always inspect fascia condition during free estimates."],
  ["q" => "Do you offer priority scheduling for Madison residents?", "a" => "Yes. Since Madison is our home base, we maintain a same-day or next-day estimate window for Madison addresses whenever possible. Standard installation start times are also typically faster for Madison than for our outer-radius cities."],
];

$schemaGraph = [
  "@context" => "https://schema.org",
  "@graph" => [
    [
      "@type"     => ["LocalBusiness", "RoofingContractor"],
      "@id"       => $canonicalUrl . "#business",
      "name"      => "Dun-Rite Seamless Gutters, Inc. – Madison",
      "url"       => $canonicalUrl,
      "telephone" => "+16017501800",
      "branchOf"  => ["@id" => "https://dunrite-gutters.com/#business"],
      "address"   => [
        "@type"           => "PostalAddress",
        "streetAddress"   => "115 Cherrybrook Dr",
        "addressLocality" => "Madison",
        "addressRegion"   => "MS",
        "postalCode"      => "39110",
        "addressCountry"  => "US"
      ],
      "areaServed" => ["@type" => "City", "name" => "Madison", "addressRegion" => "MS"],
    ],
    [
      "@type" => "BreadcrumbList",
      "itemListElement" => [
        ["@type" => "ListItem", "position" => 1, "name" => "Home", "item" => "https://dunrite-gutters.com/"],
        ["@type" => "ListItem", "position" => 2, "name" => "Service Areas", "item" => "https://dunrite-gutters.com/service-areas/"],
        ["@type" => "ListItem", "position" => 3, "name" => "Madison", "item" => $canonicalUrl],
      ]
    ],
    [
      "@type" => "FAQPage",
      "mainEntity" => array_map(fn($f) => ["@type" => "Question", "name" => $f["q"], "acceptedAnswer" => ["@type" => "Answer", "text" => $f["a"]]], $faqs)
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

  <section class="hero hero--inner" aria-label="Hero">
    <img src="https://i.imgur.com/lHGkpv5.jpeg" alt="Brick stucco Madison MS home with arched entry and seamless gutters" class="hero-bg" width="1920" height="1080" loading="eager" fetchpriority="high">
    <div class="hero__inner">
      <div class="hero__copy">
        <span class="eyebrow-label">Madison, MS · Home Base Since 1996</span>
        <h1>Gutter Services in <span class="text-accent">Madison, MS.</span></h1>
        <p class="hero__subhead">Mark Dungan and the Dun-Rite team have installed gutters on Madison homes for 30 years — Reunion to Lake Caroline, Old Annandale to The Bridges. This is our hometown.</p>
        <div class="hero__ctas">
          <a href="#hero-form-heading" class="btn-primary">Get Free Estimate</a>
          <a href="tel:+16017501800" class="btn-secondary btn-on-dark">Call (601) 750-1800</a>
        </div>
        <p class="hero__phone">Mon–Fri 8AM–5PM · Same-day Madison estimates</p>
      </div>
      <?php
        $preselectedService = 'Not Sure / General Inquiry';
        $heroFormHeading    = 'Free Madison Estimate';
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
        <li aria-current="page">Madison</li>
      </ol>
    </div>
  </nav>

  <section class="section">
    <div class="container">
      <div class="answer-block reveal-up">
        <h2>Gutter Services in Madison, Mississippi: Hometown Coverage</h2>
        <p>Dun-Rite Seamless Gutters provides seamless gutter installation, copper gutters, gutter guards, cleaning, and repair services in Madison, Mississippi. From our headquarters at 115 Cherrybrook Dr, we've worked on every major Madison neighborhood — Reunion, Lake Caroline, Old Annandale, Twin Lakes, The Bridges — for 30 years. Free estimates with no travel charges. Same-day Madison appointments when our schedule allows. Call (601) 750-1800.</p>
      </div>
    </div>
  </section>

  <!-- HOME BASE CALLOUT -->
  <section class="section section-alt" aria-label="Home base">
    <svg class="floating-accent float-animate-slow" style="top: 60px; right: 5%; width: 90px; height: 120px; opacity: 0.07;" viewBox="0 0 60 80" aria-hidden="true">
      <path fill="#B87333" d="M30 0 C30 0 0 35 0 55 A30 25 0 0 0 60 55 C60 35 30 0 30 0 Z"/>
    </svg>

    <div class="container">
      <div class="about-grid">
        <div class="reveal-left">
          <span class="eyebrow-label">Hometown Specialist</span>
          <h2>Madison Has Been <span class="text-accent">Home Since 1996.</span></h2>
          <span class="section-subtitle">thirty years on Madison roofs</span>
          <p style="margin-top: var(--space-md);">Mark Dungan started Dun-Rite Seamless Gutters in Madison in 1996 — back when Reunion was still pasture land and Lake Caroline's first phase was just being plotted. Three decades later, we've installed gutters on more Madison homes than any other regional specialist, and we know every one of this city's neighborhoods by name and roofline.</p>
          <p>Madison residents get scheduling priority. We hold open same-day and next-day windows for Madison addresses whenever possible — for free estimates, post-storm assessments, and emergency repair calls. The truck is parked at Cherrybrook Dr; getting to your house is a 15-minute drive at most.</p>
          <p>This isn't a marketing claim. It's the practical advantage of choosing a gutter installer whose home is your home.</p>
        </div>

        <div class="about-image-stack reveal-right">
          <img src="https://i.imgur.com/qJMX4SH.png" alt="Mark Dungan, owner of Dun-Rite Seamless Gutters in Madison MS since 1996" class="about-image-primary" width="900" height="675" loading="lazy">
          <img src="https://i.imgur.com/lHGkpv5.jpeg" alt="Brick stucco Madison home with arched entry and seamless gutters by Dun-Rite" class="about-image-secondary" width="600" height="500" loading="lazy">
        </div>
      </div>
    </div>
  </section>

  <!-- MADISON NEIGHBORHOODS -->
  <section class="section">
    <div class="container">
      <div class="section-title reveal-up">
        <span class="eyebrow-label">Where We Work</span>
        <h2>Every Madison Neighborhood, <span class="text-accent">Same Standard.</span></h2>
        <span class="section-subtitle">we know every roofline</span>
      </div>

      <div class="neighborhood-grid reveal-up">
        <div class="neighborhood-card"><i data-lucide="map-pin"></i> Reunion</div>
        <div class="neighborhood-card"><i data-lucide="map-pin"></i> Lake Caroline</div>
        <div class="neighborhood-card"><i data-lucide="map-pin"></i> Old Annandale</div>
        <div class="neighborhood-card"><i data-lucide="map-pin"></i> Twin Lakes</div>
        <div class="neighborhood-card"><i data-lucide="map-pin"></i> The Bridges</div>
        <div class="neighborhood-card"><i data-lucide="map-pin"></i> Annandale on the Lake</div>
        <div class="neighborhood-card"><i data-lucide="map-pin"></i> Bridgewater</div>
        <div class="neighborhood-card"><i data-lucide="map-pin"></i> Highland Colony</div>
        <div class="neighborhood-card"><i data-lucide="map-pin"></i> All surrounding subdivisions</div>
      </div>

      <p style="text-align:center; max-width:65ch; margin: var(--space-md) auto 0; color: var(--color-text-light);">If your Madison neighborhood isn't listed above, it's still covered. We work every street in Madison's 39110 ZIP and the surrounding subdivisions.</p>
    </div>
  </section>

  <!-- MARK'S MADISON INSIGHTS -->
  <section class="section section-alt">
    <div class="container">
      <div class="section-title reveal-up">
        <span class="eyebrow-label">Local Authority</span>
        <h2>What 30 Years on Madison Roofs <span class="text-accent">Has Taught Us.</span></h2>
        <span class="section-subtitle">specifics that matter to your home</span>
      </div>

      <div class="prose reveal-up">
        <p>Madison isn't generic Mississippi — it has its own gutter-specific challenges, and we've learned them over three decades. Here's what we tell every Madison homeowner during the free estimate:</p>
        <p><strong>Lake Caroline pine pollen is brutal.</strong> The mature pine stands around the Lake Caroline neighborhoods drop heavy pine pollen and straw twice a year. Without gutter guards, you're cleaning every 8–10 weeks during peak season. We strongly recommend mesh guards for any Lake Caroline or Old Annandale property under significant pine canopy.</p>
        <p><strong>Reunion's mature oaks need 6-inch profiles.</strong> The original Reunion landscaping is now 20+ years mature, and the oak canopy produces high seasonal debris loads. The 5-inch K-style gutters on many original Reunion homes are undersized for current tree coverage. We frequently upgrade these homes to 6-inch high-flow during full replacements.</p>
        <p><strong>Old Annandale fascia rot is common.</strong> Many original Old Annandale homes are now 25–30 years past their first install. We see fascia damage on a majority of repair calls in this neighborhood — the gutters themselves may still be sound, but the wood behind them has rotted from years of overflow. Always inspect fascia before quoting just gutter replacement.</p>
        <p><strong>Lake Caroline lakefront properties are strong copper candidates.</strong> The premium architectural detail on lakefront homes deserves a gutter system that matches. We've installed hand-soldered copper gutters on a number of Lake Caroline waterfront properties — and those installations will outlast everything else on the home.</p>
      </div>
    </div>
  </section>

  <!-- SERVICES IN MADISON -->
  <section class="section">
    <div class="container">
      <div class="section-title reveal-up">
        <span class="eyebrow-label">All Services Available</span>
        <h2>All 8 Gutter Services <span class="text-accent">in Madison.</span></h2>
        <span class="section-subtitle">no service-area limitations at HQ</span>
      </div>

      <div class="services-in-city">
        <a href="/services/seamless-gutter-installation/" class="svc-mini-card card-tint-1">
          <div class="svc-mini-card__icon"><i data-lucide="ruler"></i></div>
          <h3>Seamless Gutter Installation</h3>
          <p>5-inch standard, 6-inch high-flow for mature trees.</p>
          <span class="svc-mini-card__link">View Service →</span>
        </a>
        <a href="/services/aluminum-gutters/" class="svc-mini-card card-tint-2">
          <div class="svc-mini-card__icon"><i data-lucide="shield"></i></div>
          <h3>Aluminum Gutters</h3>
          <p>White, almond, bronze most popular in Madison.</p>
          <span class="svc-mini-card__link">View Service →</span>
        </a>
        <a href="/services/copper-gutters/" class="svc-mini-card card-tint-3">
          <div class="svc-mini-card__icon"><i data-lucide="sparkles"></i></div>
          <h3>Copper Gutters</h3>
          <p>Specialty work for Lake Caroline lakefront homes.</p>
          <span class="svc-mini-card__link">View Service →</span>
        </a>
        <a href="/services/gutter-guards/" class="svc-mini-card card-tint-1">
          <div class="svc-mini-card__icon"><i data-lucide="filter"></i></div>
          <h3>Gutter Guards</h3>
          <p>Critical for Reunion and Lake Caroline properties.</p>
          <span class="svc-mini-card__link">View Service →</span>
        </a>
        <a href="/services/gutter-cleaning/" class="svc-mini-card card-tint-3">
          <div class="svc-mini-card__icon"><i data-lucide="droplets"></i></div>
          <h3>Gutter Cleaning</h3>
          <p>Twice-yearly Madison maintenance plans.</p>
          <span class="svc-mini-card__link">View Service →</span>
        </a>
        <a href="/services/gutter-repair-replacement/" class="svc-mini-card card-tint-2">
          <div class="svc-mini-card__icon"><i data-lucide="wrench"></i></div>
          <h3>Repair &amp; Replacement</h3>
          <p>Common on Old Annandale and aging Reunion homes.</p>
          <span class="svc-mini-card__link">View Service →</span>
        </a>
        <a href="/services/commercial-gutters/" class="svc-mini-card card-tint-1">
          <div class="svc-mini-card__icon"><i data-lucide="building-2"></i></div>
          <h3>Commercial Gutters</h3>
          <p>Madison Square, Highway 51 corridor projects.</p>
          <span class="svc-mini-card__link">View Service →</span>
        </a>
        <a href="/services/custom-downspouts/" class="svc-mini-card card-tint-3">
          <div class="svc-mini-card__icon"><i data-lucide="arrow-down-to-line"></i></div>
          <h3>Custom Downspouts</h3>
          <p>Oversized profiles for high-debris properties.</p>
          <span class="svc-mini-card__link">View Service →</span>
        </a>
      </div>
    </div>
  </section>

  <!-- WHAT INSTALL LOOKS LIKE -->
  <section class="section section-alt">
    <div class="container">
      <div class="split">
        <div class="reveal-left">
          <img src="https://i.imgur.com/3nVl1Ha.jpeg" alt="Yellow two-story Madison MS home with custom seamless gutters by Dun-Rite" width="900" height="600" loading="lazy" style="border-radius: var(--radius-md); box-shadow: var(--shadow-lg);">
        </div>
        <div class="reveal-right">
          <span class="eyebrow-label">What to Expect</span>
          <h2>What Does a Dun-Rite Install <span class="text-accent">Look Like in Madison?</span></h2>
          <p style="margin-top: var(--space-md);">A typical Madison single-story install runs 6–8 hours start to finish. We arrive between 7:30 and 8:00 AM, set up on the driveway, and begin forming custom gutter sections to the exact roofline measurements taken at the estimate. Most homes are complete by mid-afternoon with a final walkthrough and water-flow test.</p>
          <p>Two-story Madison homes — Reunion estates, Lake Caroline waterfront, larger Old Annandale properties — typically take 1–2 days. Custom copper installations and decorative profiles schedule longer for fabrication time but install just as smoothly.</p>
          <p>Madison residents see us most often. There's a good chance Mark or one of our crew has worked on a neighbor's home — feel free to ask about references on your specific street.</p>
        </div>
      </div>

      <div class="mid-cta-line reveal-up">
        Ready to schedule your Madison estimate? <a href="/contact/">Book a same-day visit</a> or call (601) 750-1800 directly.
      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section class="section">
    <div class="container">
      <div class="section-title reveal-up">
        <span class="eyebrow-label">Frequently Asked</span>
        <h2>Madison Gutter <span class="text-accent">Questions.</span></h2>
      </div>

      <div class="faq-list">
        <?php foreach ($faqs as $faq): ?>
        <div class="faq-item reveal-up">
          <button class="faq-question" aria-expanded="false"><?php echo htmlspecialchars($faq["q"]); ?></button>
          <div class="faq-answer">
            <div class="faq-answer-inner"><p><?php echo htmlspecialchars($faq["a"]); ?></p></div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- NEIGHBORING CITIES -->
  <section class="section section-alt">
    <div class="container">
      <div class="section-title reveal-up">
        <span class="eyebrow-label">Neighboring Cities</span>
        <h2>Also Serving Madison's <span class="text-accent">Neighbors.</span></h2>
      </div>

      <div class="related-services-grid">
        <a href="/service-areas/ridgeland/" class="related-card reveal-up reveal-delay-1">
          <div class="related-card__icon"><i data-lucide="map-pin"></i></div>
          <h3>Ridgeland (3 mi)</h3>
          <p>Closest neighbor to Madison HQ. Mature 1980s-90s neighborhoods with similar oak coverage.</p>
          <span class="related-card__link">View Ridgeland →</span>
        </a>
        <a href="/service-areas/gluckstadt/" class="related-card reveal-up reveal-delay-2">
          <div class="related-card__icon"><i data-lucide="map-pin"></i></div>
          <h3>Gluckstadt (5 mi)</h3>
          <p>Mississippi's newest incorporated city. Rapid new construction north of Madison.</p>
          <span class="related-card__link">View Gluckstadt →</span>
        </a>
        <a href="/service-areas/canton/" class="related-card reveal-up reveal-delay-3">
          <div class="related-card__icon"><i data-lucide="map-pin"></i></div>
          <h3>Canton (12 mi)</h3>
          <p>Historic Madison County town. Mississippi's antique capital with century-old homes.</p>
          <span class="related-card__link">View Canton →</span>
        </a>
      </div>
    </div>
  </section>

  <!-- CLOSING CTA -->
  <section class="closing-cta" aria-label="Madison estimate">
    <div class="closing-cta__inner reveal-up">
      <span class="section-subtitle" style="color: var(--color-accent);">Mark and the team</span>
      <h2>Ready for a Free <span class="text-accent">Madison Estimate?</span></h2>
      <p>Same-day Madison appointments. 25-year manufacturer warranty. Mississippi licensed and fully insured. No travel charges.</p>
      <div>
        <a href="/contact/" class="btn-primary">Get My Free Estimate</a>
        <a href="tel:+16017501800" class="closing-cta__phone">Or Call (601) 750-1800</a>
      </div>
      <p class="closing-cta__meta">Mon–Fri 8AM–5PM · 115 Cherrybrook Dr · Madison, MS 39110</p>
    </div>
  </section>

</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
