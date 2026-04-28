<?php
/**
 * Dun-Rite — Custom Downspouts
 */

$pageTitle       = "Custom Downspouts in Madison, MS | Round, Square, Decorative";
$pageDescription = "Custom downspout installation across central Mississippi. Round, square, oversized, and decorative copper downspouts. Color-matched to your gutters. Dun-Rite Seamless Gutters.";
$canonicalUrl    = "https://dunrite-gutters.com/services/custom-downspouts/";
$ogImage         = "https://i.imgur.com/iX7CNj7.jpeg";
$heroImage       = "https://i.imgur.com/iX7CNj7.jpeg";
$currentPage     = "services";

$cities = ["Brandon","Jackson","Canton","Madison","Pearl","Richland","Flowood","Florence","Gluckstadt","Bolton","Clinton","Terry","Ridgeland","Raymond"];
$areaServedSchema = array_map(fn($c) => ["@type" => "City", "name" => $c, "addressRegion" => "MS", "addressCountry" => "US"], $cities);

$faqs = [
  ["q" => "What size downspout do I need?", "a" => "Standard 2x3 downspouts handle about 600 sq ft of roof area each — undersized for most Mississippi homes. We typically install 3x4 oversized for residential (handles ~1,200 sq ft per spout) and 4x5 for high-flow commercial properties. Sizing depends on roof area, pitch, and downspout placement frequency. We calculate this on every estimate."],
  ["q" => "Can you add downspouts to existing gutters?", "a" => "Yes. Adding downspouts to existing gutters is a common job — typically $150–$400 per added spout depending on length, profile, and underground tie-ins. We often add downspouts when homeowners discover overflow at corners during heavy rain. Existing gutter must be in good condition."],
  ["q" => "Do you offer underground drainage tie-ins?", "a" => "Yes. Underground drainage runs (typically 4-inch corrugated PVC or smooth pipe) carry water from downspouts well away from the foundation, then exit at a daylight discharge point or French drain. Common run lengths are 15–40 feet; cost runs $300–$800 per run depending on length and trenching difficulty."],
  ["q" => "Are copper downspouts available?", "a" => "Yes. We fabricate round, rectangular, and decorative copper downspouts to match copper gutter installations or as standalone accent pieces. Copper downspouts run $40–$80 per linear foot installed depending on profile and decorative detail. See our copper gutter page for the broader specialty."],
];

$howToSteps = [
  ["name" => "On-Site Sizing &amp; Placement", "text" => "Measure roof area, evaluate runoff load, and identify ideal downspout placement to direct water away from foundation and landscaping."],
  ["name" => "Profile &amp; Color Selection", "text" => "Choose round, rectangular, or oversized profiles. Color-match to existing gutter system or fabricate copper specialty options."],
  ["name" => "Fabrication &amp; Installation", "text" => "Custom-cut downspouts on-site, sealed top connections, color-matched straps every 6 feet, and splash blocks or underground tie-ins as specified."],
  ["name" => "Drainage Tie-In + Walkthrough", "text" => "Install underground drainage where required. Final water-flow test, splash block placement check, and warranty paperwork delivered."],
];

$schemaGraph = [
  "@context" => "https://schema.org",
  "@graph" => [
    [
      "@type"       => "Service",
      "@id"         => $canonicalUrl . "#service",
      "serviceType" => "Custom Downspout Installation",
      "name"        => "Custom Downspouts in Mississippi",
      "description" => $pageDescription,
      "provider"    => ["@id" => "https://dunrite-gutters.com/#business"],
      "areaServed"  => $areaServedSchema,
    ],
    [
      "@type" => "BreadcrumbList",
      "itemListElement" => [
        ["@type" => "ListItem", "position" => 1, "name" => "Home", "item" => "https://dunrite-gutters.com/"],
        ["@type" => "ListItem", "position" => 2, "name" => "Services", "item" => "https://dunrite-gutters.com/services/"],
        ["@type" => "ListItem", "position" => 3, "name" => "Custom Downspouts", "item" => $canonicalUrl],
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
    [
      "@type" => "HowTo",
      "name"  => "How Custom Downspout Installation Works",
      "step"  => array_map(fn($s, $i) => ["@type" => "HowToStep", "position" => $i + 1, "name" => $s["name"], "text" => $s["text"]], $howToSteps, array_keys($howToSteps))
    ],
  ]
];
$schemaMarkup = '<script type="application/ld+json">' . json_encode($schemaGraph, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>';

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/nav.php'; ?>

<main id="main-content">

  <section class="hero hero--inner" aria-label="Hero">
    <img src="https://i.imgur.com/iX7CNj7.jpeg" alt="Worker installing white PVC downspout drainage at a Mississippi home" class="hero-bg" width="1920" height="1080" loading="eager" fetchpriority="high">
    <div class="hero__inner">
      <div class="hero__copy">
        <span class="eyebrow-label">Round · Square · Oversized · Decorative</span>
        <h1>Custom Downspouts in <span class="text-accent">Mississippi.</span></h1>
        <p class="hero__subhead">Standard downspouts undersize your home's drainage capacity. Oversized and decorative profiles for high-volume runoff and architectural homes.</p>
        <div class="hero__ctas">
          <a href="#hero-form-heading" class="btn-primary">Free Estimate</a>
          <a href="tel:+16017501800" class="btn-secondary btn-on-dark">Call (601) 750-1800</a>
        </div>
        <p class="hero__phone">Mon–Fri 8AM–5PM · 14 Mississippi cities served</p>
      </div>
      <?php
        $preselectedService = 'Custom Downspouts';
        $heroFormHeading    = 'Free Downspout Estimate';
        $heroFormSubheading = 'Color-matched · Oversized profiles · Underground tie-ins';
        include $_SERVER['DOCUMENT_ROOT'] . '/includes/hero-form.php';
      ?>
    </div>
    <div class="section-divider section-divider--bottom" aria-hidden="true">
      <svg viewBox="0 0 1440 100" preserveAspectRatio="none">
        <path fill="#FFFFFF" d="M0,50 C180,100 360,0 540,50 C720,100 900,0 1080,50 C1260,100 1440,0 1440,50 L1440,100 L0,100 Z"></path>
      </svg>
    </div>
  </section>

  <nav class="breadcrumb" aria-label="Breadcrumb">
    <div class="container">
      <ol>
        <li><a href="/">Home</a></li>
        <li class="breadcrumb-sep" aria-hidden="true">›</li>
        <li><a href="/services/">Services</a></li>
        <li class="breadcrumb-sep" aria-hidden="true">›</li>
        <li aria-current="page">Custom Downspouts</li>
      </ol>
    </div>
  </nav>

  <section class="section">
    <div class="container">
      <div class="answer-block reveal-up">
        <h2>Custom Downspouts in Mississippi: Stop the Overflow</h2>
        <p>Standard downspouts undersize your home's drainage capacity — and overflow during the heavy rains Mississippi gets every spring. Dun-Rite installs custom-sized downspouts including round profiles for traditional homes, oversized 3x4 and 4x5 rectangulars for high-volume runoff, and decorative copper downspouts for architectural homes. We also handle underground drainage tie-ins to direct water away from foundations and landscaping.</p>
      </div>
    </div>
  </section>

  <!-- SIZING -->
  <section class="section section-alt">
    <div class="container">
      <div class="section-title reveal-up">
        <span class="eyebrow-label">Capacity</span>
        <h2>How Do You <span class="text-accent">Size Downspouts</span> for a Home?</h2>
        <span class="section-subtitle">three profiles, three capacities</span>
      </div>

      <div class="reveal-up" style="overflow-x: auto;">
        <table class="comparison-table">
          <thead>
            <tr>
              <th>Profile</th>
              <th>Roof Area Per Spout</th>
              <th>Best For</th>
              <th>Cost / LF Installed</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><strong>2x3 Standard</strong></td>
              <td>~600 sq ft</td>
              <td>Small homes, garages, low-slope roofs</td>
              <td>$5–$8</td>
            </tr>
            <tr class="col-highlight">
              <td><strong>3x4 Oversized</strong></td>
              <td>~1,200 sq ft</td>
              <td>Most Mississippi residential homes (recommended)</td>
              <td>$8–$12</td>
            </tr>
            <tr>
              <td><strong>4x5 High-Flow</strong></td>
              <td>~2,000+ sq ft</td>
              <td>Commercial, large estate homes, low-pitch rooflines</td>
              <td>$12–$18</td>
            </tr>
          </tbody>
        </table>
      </div>

      <div class="prose reveal-up">
        <p>Most Mississippi homes built in the last 30 years came with 2x3 downspouts that are simply too small for the roof area they drain. The result: overflow at gutter corners during heavy rain, splashback against the foundation, and washout in flowerbeds below. Upgrading to 3x4 oversized typically costs $300–$700 across a full home and solves chronic overflow problems immediately.</p>
      </div>
    </div>
  </section>

  <!-- PROFILES -->
  <section class="section">
    <div class="container">
      <div class="section-title reveal-up">
        <span class="eyebrow-label">Profile Options</span>
        <h2>What Profile Options <span class="text-accent">Are Available?</span></h2>
      </div>

      <div class="sub-service-grid">
        <div class="sub-service-card card-tint-1 reveal-up reveal-delay-1">
          <div class="sub-service-icon"><i data-lucide="circle"></i></div>
          <h3>Round</h3>
          <p>Traditional rounded profiles for historic and architectural homes. Available in 3-inch and 4-inch diameters in aluminum or copper.</p>
        </div>
        <div class="sub-service-card card-tint-2 reveal-up reveal-delay-2">
          <div class="sub-service-icon"><i data-lucide="square"></i></div>
          <h3>Rectangular</h3>
          <p>Standard 2x3, oversized 3x4, and high-flow 4x5 rectangular profiles. The Mississippi residential standard. Most cost-effective.</p>
        </div>
        <div class="sub-service-card card-tint-3 reveal-up reveal-delay-3">
          <div class="sub-service-icon"><i data-lucide="sparkles"></i></div>
          <h3>Decorative Copper</h3>
          <p>Hand-fabricated copper downspouts with optional decorative endcaps, ornamental brackets, and rainwater scuppers. Specialty work.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- UNDERGROUND -->
  <section class="section section-alt">
    <div class="container">
      <div class="split-reverse">
        <div class="reveal-left">
          <span class="eyebrow-label">Drainage Engineering</span>
          <h2>Do You Offer <span class="text-accent">Underground Drainage</span> Tie-Ins?</h2>
          <p style="margin-top: var(--space-md);">Yes. Underground drainage tie-ins move water from your downspouts to a daylight discharge point well away from the foundation — typically 15–40 feet from the house. This is the right solution where splash blocks alone aren't enough: high-runoff downspouts, low-grade lots, basement homes, and any location where chronic foundation moisture is a concern.</p>
          <p>We use 4-inch corrugated or smooth PVC pipe, hand-trenched or machine-trenched depending on landscape disruption tolerance. Pipe terminates at a daylight discharge, French drain, or popup emitter. Cost typically runs $300–$800 per drainage run depending on length and trenching access.</p>
        </div>
        <div class="reveal-right">
          <img src="https://i.imgur.com/TiVJmgu.jpeg" alt="Seamless gutter and downspout corner detail with proper drainage installation by Dun-Rite Mississippi" width="900" height="600" loading="lazy" style="border-radius: var(--radius-md); box-shadow: var(--shadow-lg);">
        </div>
      </div>
    </div>
  </section>

  <!-- ADD TO EXISTING -->
  <section class="section">
    <div class="container">
      <div class="split">
        <div class="reveal-left">
          <img src="https://i.imgur.com/v9I4W31.jpeg" alt="Worker installing black metal downspout on stucco home wall in Mississippi by Dun-Rite" width="900" height="600" loading="lazy" style="border-radius: var(--radius-md); box-shadow: var(--shadow-lg);">
        </div>
        <div class="reveal-right">
          <span class="eyebrow-label">Retrofit Work</span>
          <h2>Can You Add Downspouts to <span class="text-accent">Existing Gutters?</span></h2>
          <p style="margin-top: var(--space-md);">Yes — and it's one of the most cost-effective upgrades to a Mississippi home. Adding a downspout where overflow keeps happening typically costs $150–$400 depending on length and tie-in, and immediately solves the chronic overflow problem. We don't have to replace gutters to add downspouts; we just cut the gutter outlet and tie in.</p>
          <p>Common scenarios: long roof runs without enough downspouts (homes built with corner-only spouts often need a mid-run added), upgrading from 2x3 to 3x4 on an oversized roof footprint, or adding a downspout to handle runoff from a new addition or sunroom.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- SPLASH BLOCKS -->
  <section class="section section-alt">
    <div class="container">
      <div class="section-title reveal-up">
        <span class="eyebrow-label">Surface Discharge</span>
        <h2>How Do You Handle <span class="text-accent">Splash Blocks</span> and Extensions?</h2>
      </div>
      <div class="prose reveal-up">
        <p>Where underground drainage isn't appropriate or budget allows surface discharge, we install splash blocks and downspout extensions. The goal is the same: get water at least 4–6 feet from the foundation and direct it away from landscape beds where it can cause erosion.</p>
        <p>Splash blocks come in concrete (most durable), polymer (lightweight, attractive), or decorative cast options for architectural homes. Downspout extensions can be fixed (a 4-foot rigid section of downspout) or flip-up/roll-out style (folds down during rain, retracts when dry to keep landscape clean).</p>
        <p>We bring options to every estimate so you can pick the surface or underground solution that matches your property and budget.</p>
      </div>

      <div class="mid-cta-line reveal-up">
        Tired of chronic overflow at the same corner every storm? <a href="/contact/">Let us add a downspout</a> — usually a single-visit fix.
      </div>
    </div>
  </section>

  <!-- PROCESS -->
  <section class="section">
    <div class="container">
      <div class="section-title reveal-up">
        <span class="eyebrow-label">How It Works</span>
        <h2>From Sizing to <span class="text-accent">Installed.</span></h2>
        <span class="section-subtitle">most retrofit jobs in a single visit</span>
      </div>

      <div class="process-grid">
        <?php $icons = ["ruler","palette","hammer","check-check"]; ?>
        <?php foreach ($howToSteps as $i => $step): ?>
        <div class="process-step reveal-up reveal-delay-<?php echo $i + 1; ?>">
          <div class="process-step__num"><?php echo $i + 1; ?></div>
          <div class="process-step__icon"><i data-lucide="<?php echo $icons[$i]; ?>"></i></div>
          <h3><?php echo $step["name"]; ?></h3>
          <p><?php echo $step["text"]; ?></p>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section class="section section-alt">
    <div class="container">
      <div class="section-title reveal-up">
        <span class="eyebrow-label">Frequently Asked</span>
        <h2>Custom Downspout <span class="text-accent">Questions.</span></h2>
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

      <p class="last-updated">Last Updated: <?php echo date('F Y'); ?></p>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="section-title reveal-up">
        <span class="eyebrow-label">Related Services</span>
        <h2>You Might Also <span class="text-accent">Need.</span></h2>
      </div>

      <div class="related-services-grid">
        <a href="/services/seamless-gutter-installation/" class="related-card reveal-up reveal-delay-1">
          <div class="related-card__icon"><i data-lucide="ruler"></i></div>
          <h3>Seamless Gutter Installation</h3>
          <p>Pair custom downspouts with new seamless gutters from day one for the best long-term performance.</p>
          <span class="related-card__link">View Service →</span>
        </a>
        <a href="/services/copper-gutters/" class="related-card reveal-up reveal-delay-2">
          <div class="related-card__icon"><i data-lucide="sparkles"></i></div>
          <h3>Copper Gutters</h3>
          <p>Specialty copper systems with hand-fabricated copper downspouts, decorative endcaps, and ornamental details.</p>
          <span class="related-card__link">View Service →</span>
        </a>
        <a href="/services/gutter-repair-replacement/" class="related-card reveal-up reveal-delay-3">
          <div class="related-card__icon"><i data-lucide="wrench"></i></div>
          <h3>Gutter Repair &amp; Replacement</h3>
          <p>Add downspouts to fix chronic overflow without replacing the entire gutter system.</p>
          <span class="related-card__link">View Service →</span>
        </a>
      </div>
    </div>
  </section>

  <section class="closing-cta" aria-label="Get a free estimate">
    <div class="closing-cta__inner reveal-up">
      <span class="section-subtitle" style="color: var(--color-accent);">Mark and the team</span>
      <h2>Ready to Stop the <span class="text-accent">Overflow?</span></h2>
      <p>Free on-site sizing, written estimates, and underground drainage options walked through with you on the spot.</p>
      <div>
        <a href="/contact/" class="btn-primary">Get My Free Estimate</a>
        <a href="tel:+16017501800" class="closing-cta__phone">Or Call (601) 750-1800</a>
      </div>
      <p class="closing-cta__meta">Mon–Fri 8AM–5PM · Madison, MS · Mississippi Licensed &amp; Insured</p>
    </div>
  </section>

</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
