<?php
/**
 * Dun-Rite — Seamless Gutter Installation
 */

$pageTitle       = "Seamless Gutter Installation in Madison, MS | Dun-Rite";
$pageDescription = "Custom seamless aluminum gutter installation across central Mississippi. 5-inch and 6-inch K-style profiles formed on-site. 25-year warranty. Free estimates from Dun-Rite Seamless Gutters.";
$canonicalUrl    = "https://dunrite-gutters.com/services/seamless-gutter-installation/";
$ogImage         = "https://i.imgur.com/3nVl1Ha.jpeg";
$heroImage       = "https://i.imgur.com/3nVl1Ha.jpeg";
$currentPage     = "services";

$cities = ["Brandon","Jackson","Canton","Madison","Pearl","Richland","Flowood","Florence","Gluckstadt","Bolton","Clinton","Terry","Ridgeland","Raymond"];
$areaServedSchema = array_map(fn($c) => ["@type" => "City", "name" => $c, "addressRegion" => "MS", "addressCountry" => "US"], $cities);

$faqs = [
  ["q" => "How long does seamless gutter installation take?", "a" => "Most single-story homes are completed in a single day. Two-story and complex rooflines may take 1–2 days. We schedule installations to start by 8 AM and typically finish before 5 PM."],
  ["q" => "What gauge aluminum do you use?", "a" => "We use .032 gauge aluminum standard — heavier than the .027 gauge sold at home improvement stores. This thicker profile resists denting from ladders, hail, and falling debris."],
  ["q" => "Do you remove old gutters?", "a" => "Yes. Removal and disposal of existing gutters is included in every installation quote. We haul away all old materials so your property is clean when we leave."],
  ["q" => "What colors are available?", "a" => "We stock 25+ baked-enamel colors including white, almond, cream, classic bronze, charcoal, brown, and forest green. Custom color matching is available for specific home palettes."],
];

$howToSteps = [
  ["name" => "Free On-Site Estimate", "text" => "We measure your roofline, evaluate water-flow needs, and recommend the right gutter system in writing — no obligation."],
  ["name" => "Color and Profile Selection", "text" => "Choose 5-inch or 6-inch K-style and pick from 25+ baked-enamel colors. We bring physical samples to the consultation."],
  ["name" => "On-Site Custom Forming", "text" => "Our truck-mounted brake forms each gutter section to your home's exact dimensions. Zero seams, zero off-the-shelf compromises."],
  ["name" => "Professional Installation", "text" => "Hidden hangers, sealed corners, properly pitched runs, and downspouts placed to protect your foundation and landscaping."],
  ["name" => "Final Inspection + Warranty Paperwork", "text" => "Walkthrough with the homeowner, water-flow test, and registration of the 25-year manufacturer warranty."],
];

$schemaGraph = [
  "@context" => "https://schema.org",
  "@graph" => [
    [
      "@type"       => "Service",
      "@id"         => $canonicalUrl . "#service",
      "serviceType" => "Seamless Gutter Installation",
      "name"        => "Seamless Gutter Installation in Madison, MS",
      "description" => $pageDescription,
      "provider"    => ["@id" => "https://dunrite-gutters.com/#business"],
      "areaServed"  => $areaServedSchema,
    ],
    [
      "@type" => "BreadcrumbList",
      "itemListElement" => [
        ["@type" => "ListItem", "position" => 1, "name" => "Home", "item" => "https://dunrite-gutters.com/"],
        ["@type" => "ListItem", "position" => 2, "name" => "Services", "item" => "https://dunrite-gutters.com/services/"],
        ["@type" => "ListItem", "position" => 3, "name" => "Seamless Gutter Installation", "item" => $canonicalUrl],
      ]
    ],
    [
      "@type" => "FAQPage",
      "mainEntity" => array_map(fn($f) => [
        "@type" => "Question", "name" => $f["q"],
        "acceptedAnswer" => ["@type" => "Answer", "text" => $f["a"]]
      ], $faqs)
    ],
    [
      "@type" => "AggregateRating",
      "itemReviewed" => ["@id" => "https://dunrite-gutters.com/#business"],
      "ratingValue" => "5.0", "reviewCount" => "27"
    ],
    [
      "@type" => "HowTo",
      "name"  => "How Seamless Gutter Installation Works",
      "step"  => array_map(fn($s, $i) => [
        "@type" => "HowToStep", "position" => $i + 1,
        "name" => $s["name"], "text" => $s["text"]
      ], $howToSteps, array_keys($howToSteps))
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
    <img src="https://i.imgur.com/3nVl1Ha.jpeg" alt="Yellow two-story Madison MS home with custom seamless gutter installation" class="hero-bg" width="1920" height="1080" loading="eager" fetchpriority="high">
    <div class="hero__inner">
      <div class="hero__copy">
        <span class="eyebrow-label">Residential · 5-inch &amp; 6-inch K-style</span>
        <h1>Seamless Gutter Installation in <span class="text-accent">Madison, MS.</span></h1>
        <p class="hero__subhead">Custom-formed on-site. No seams, no leaks, no off-the-shelf compromises. Backed by a 25-year manufacturer warranty.</p>
        <div class="hero__ctas">
          <a href="#hero-form-heading" class="btn-primary">Get Free Estimate</a>
          <a href="tel:+16017501800" class="btn-secondary btn-on-dark">Call (601) 750-1800</a>
        </div>
        <p class="hero__phone">Mon–Fri 8AM–5PM · 14 Mississippi cities served</p>
      </div>
      <?php
        $preselectedService = 'Seamless Gutter Installation';
        $heroFormHeading    = 'Free Seamless Gutter Estimate';
        $heroFormSubheading = 'Most quotes scheduled within 48 hours';
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
        <li><a href="/services/">Services</a></li>
        <li class="breadcrumb-sep" aria-hidden="true">›</li>
        <li aria-current="page">Seamless Gutter Installation</li>
      </ol>
    </div>
  </nav>

  <!-- ANSWER BLOCK -->
  <section class="section">
    <div class="container">
      <div class="answer-block reveal-up">
        <h2>Seamless Gutter Installation in Mississippi: What to Expect</h2>
        <p>Dun-Rite Seamless Gutters installs custom seamless aluminum gutter systems across Madison, Jackson, Brandon, and 11 other central Mississippi cities. Most homes run $1,200–$3,500 for a complete installation, with same-day completion typical for single-story homes. Every gutter section is custom-formed on our truck-mounted brake to your home's exact roofline — eliminating the seams that cause future leaks. Our installations include hidden hangers, sealed corners, properly pitched runs, and a 25-year manufacturer warranty on materials plus a 2-year labor warranty.</p>
      </div>
    </div>
  </section>

  <!-- WHAT IS A SEAMLESS GUTTER -->
  <section class="section section-alt" aria-label="What is seamless">
    <div class="container">
      <div class="split-reverse">
        <div class="reveal-left">
          <span class="eyebrow-label">The Difference</span>
          <h2>What Is a <span class="text-accent">Seamless</span> Gutter?</h2>
          <p style="margin-top: var(--space-md);">A seamless gutter is one continuous run formed on-site in a single piece per roofline edge — no joints between sections, no caulk lines that fail every five years. Sectional gutters from home improvement stores ship pre-cut in 10-foot lengths and require seams every 10 feet; every seam is a future leak.</p>
          <p>Our truck-mounted forming brake produces seamless aluminum gutters of any length your roofline needs. The only joints are at corners and downspout outlets, and those are sealed with industrial-grade gutter sealant that lasts the life of the system.</p>
          <p>The result: a gutter system that doesn't leak at year five, doesn't sag at year ten, and stays installed until you decide to replace it.</p>
        </div>
        <div class="reveal-right">
          <img src="https://i.imgur.com/BxWg36W.jpeg" alt="Hand using yellow screwdriver to secure metal seamless gutter to fascia in Mississippi" width="900" height="600" loading="lazy" style="border-radius: var(--radius-md); box-shadow: var(--shadow-lg);">
        </div>
      </div>
    </div>
  </section>

  <!-- 5-INCH VS 6-INCH -->
  <section class="section">
    <div class="container">
      <div class="section-title reveal-up">
        <span class="eyebrow-label">Profile Selection</span>
        <h2>5-Inch vs 6-Inch K-Style: <span class="text-accent">Which Profile Fits?</span></h2>
        <span class="section-subtitle">size matters when it rains hard</span>
      </div>

      <div class="grid-2">
        <div class="sub-service-card card-tint-1 reveal-up reveal-delay-1">
          <div class="sub-service-icon"><i data-lucide="ruler"></i></div>
          <h3>5-Inch K-Style</h3>
          <p>The Mississippi residential standard. Handles most single-story and average two-story rooflines without overflow.</p>
          <ul>
            <li>Holds up to 1.2 gallons per linear foot</li>
            <li>Fits most fascia widths (5 to 8 inches)</li>
            <li>Most cost-effective profile</li>
            <li>Standard color stock</li>
          </ul>
        </div>

        <div class="sub-service-card card-tint-3 reveal-up reveal-delay-2">
          <div class="sub-service-icon"><i data-lucide="ruler"></i></div>
          <h3>6-Inch K-Style (High Flow)</h3>
          <p>For larger rooflines, steep pitches, and homes with heavy tree canopy that produces high debris-to-water flow.</p>
          <ul>
            <li>40% greater capacity than 5-inch</li>
            <li>Better for 2,500+ sq ft roof footprints</li>
            <li>Pairs with oversized 3x4 downspouts</li>
            <li>Standard on most new construction</li>
          </ul>
        </div>
      </div>

      <div class="mid-cta-line reveal-up">
        Not sure which profile fits your home? <a href="/contact/">Schedule a free on-site evaluation</a> and we'll measure your roofline and runoff capacity for you.
      </div>
    </div>
  </section>

  <!-- COLORS -->
  <section class="section section-alt" aria-label="Colors and finishes">
    <div class="container">
      <div class="split">
        <div class="reveal-left">
          <img src="https://i.imgur.com/RzYB8p1.jpeg" alt="Color sample lineup of seamless gutter options including white, black, and copper from Dun-Rite" width="900" height="675" loading="lazy" style="border-radius: var(--radius-md); box-shadow: var(--shadow-lg);">
        </div>
        <div class="reveal-right">
          <span class="eyebrow-label">Finishes</span>
          <h2>What Colors and Finishes <span class="text-accent">Are Available?</span></h2>
          <p style="margin-top: var(--space-md);">We stock 25+ factory-baked-enamel colors covering every standard Mississippi home palette: white, almond, cream, classic bronze, charcoal, brown, forest green, terratone, and royal brown. Custom colors are available with a 1–2 week lead time for an upcharge.</p>
          <p>Every color is a baked-on enamel finish that resists fading for 20+ years. Even our white gutters retain their color in Mississippi sun without yellowing. We bring physical samples to your free estimate so you can hold the exact finish against your fascia and shutters before committing.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- WHAT GOES INTO QUALITY -->
  <section class="section">
    <div class="container">
      <div class="section-title reveal-up">
        <span class="eyebrow-label">Workmanship Standards</span>
        <h2>What Goes Into a <span class="text-accent">Quality Installation?</span></h2>
        <span class="section-subtitle">the details that separate us from a one-day job</span>
      </div>

      <div class="feature-checklist reveal-up">
        <div class="feature-check">
          <div class="feature-check__icon"><i data-lucide="anchor"></i></div>
          <div class="feature-check__body"><strong>Hidden Hangers Every 24"</strong><span>Concealed brackets that don't telegraph through the front face. Standard spike-and-ferrule installations sag in 5–10 years; hidden hangers stay tight.</span></div>
        </div>
        <div class="feature-check">
          <div class="feature-check__icon"><i data-lucide="droplet"></i></div>
          <div class="feature-check__body"><strong>Sealed Inside &amp; Outside Corners</strong><span>Industrial-grade gutter sealant on every miter, applied during install before the metal cools. No future leak points.</span></div>
        </div>
        <div class="feature-check">
          <div class="feature-check__icon"><i data-lucide="trending-down"></i></div>
          <div class="feature-check__body"><strong>Properly Pitched Runs</strong><span>1/4 inch of fall per 10 feet of run, sloped toward downspouts. Eliminates standing water and mosquito breeding.</span></div>
        </div>
        <div class="feature-check">
          <div class="feature-check__icon"><i data-lucide="arrow-down-to-line"></i></div>
          <div class="feature-check__body"><strong>Custom-Fit Downspouts</strong><span>Sized to roofline square footage and placed to direct water away from foundations and landscaping.</span></div>
        </div>
        <div class="feature-check">
          <div class="feature-check__icon"><i data-lucide="leaf"></i></div>
          <div class="feature-check__body"><strong>Debris-Free Workspace</strong><span>All packaging, scrap aluminum, and removed gutter material hauled away. Your driveway is cleaner than when we arrived.</span></div>
        </div>
        <div class="feature-check">
          <div class="feature-check__icon"><i data-lucide="palette"></i></div>
          <div class="feature-check__body"><strong>Color-Matched Fasteners</strong><span>Every visible screw and bracket matches your gutter color. No bright silver heads breaking up a clean fascia line.</span></div>
        </div>
        <div class="feature-check">
          <div class="feature-check__icon"><i data-lucide="shield-check"></i></div>
          <div class="feature-check__body"><strong>Manufacturer Warranty Registration</strong><span>We file your 25-year manufacturer warranty on the day of install. You get a copy with the paperwork.</span></div>
        </div>
        <div class="feature-check">
          <div class="feature-check__icon"><i data-lucide="check-check"></i></div>
          <div class="feature-check__body"><strong>Final Inspection + Water Test</strong><span>Walkthrough with the homeowner, water-flow test on every downspout, no exceptions.</span></div>
        </div>
      </div>
    </div>
  </section>

  <!-- PROCESS -->
  <section class="section section-alt" aria-label="Process">
    <div class="container">
      <div class="section-title reveal-up">
        <span class="eyebrow-label">How It Works</span>
        <h2>From Estimate to <span class="text-accent">Installed.</span></h2>
        <span class="section-subtitle">five steps, one day on most homes</span>
      </div>

      <div class="process-grid" style="grid-template-columns: repeat(5, 1fr);">
        <?php $icons = ["clipboard-check","palette","ruler","hammer","shield-check"]; ?>
        <?php foreach ($howToSteps as $i => $step): ?>
        <div class="process-step reveal-up reveal-delay-<?php echo ($i % 4) + 1; ?>">
          <div class="process-step__num"><?php echo $i + 1; ?></div>
          <div class="process-step__icon"><i data-lucide="<?php echo $icons[$i]; ?>"></i></div>
          <h3><?php echo htmlspecialchars($step["name"]); ?></h3>
          <p><?php echo htmlspecialchars($step["text"]); ?></p>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- COST -->
  <section class="section">
    <div class="container">
      <div class="section-title reveal-up">
        <span class="eyebrow-label">Pricing</span>
        <h2>What Does Seamless Gutter Installation <span class="text-accent">Cost?</span></h2>
      </div>

      <div class="prose reveal-up">
        <p>Most Mississippi homes run between $1,200 and $3,500 for a complete seamless aluminum gutter installation. The number depends on linear footage, profile (5-inch vs 6-inch), number of stories, downspout count, color upcharges, and roofline complexity. We provide free written estimates after measuring on-site — no online calculators, no guesses.</p>
      </div>

      <div class="pricing-callout reveal-up">
        <span class="pricing-callout__amount">$1,200 – $3,500</span>
        <span class="pricing-callout__label">Typical complete installation · Average single-family home · Includes removal of existing gutters</span>
      </div>

      <div class="prose reveal-up">
        <p>Larger homes, multi-story rooflines, or copper installations price separately. Available across all 14 cities we serve. Estimates scheduled within 48 hours during normal seasons.</p>
      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section class="section section-alt" aria-label="Frequently asked">
    <div class="container">
      <div class="section-title reveal-up">
        <span class="eyebrow-label">Frequently Asked</span>
        <h2>Seamless Gutter <span class="text-accent">Questions.</span></h2>
      </div>

      <div class="faq-list">
        <?php foreach ($faqs as $faq): ?>
        <div class="faq-item reveal-up">
          <button class="faq-question" aria-expanded="false"><?php echo htmlspecialchars($faq["q"]); ?></button>
          <div class="faq-answer">
            <div class="faq-answer-inner">
              <p><?php echo htmlspecialchars($faq["a"]); ?></p>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>

      <p class="last-updated">Last Updated: <?php echo date('F Y'); ?></p>
    </div>
  </section>

  <!-- RELATED SERVICES -->
  <section class="section">
    <div class="container">
      <div class="section-title reveal-up">
        <span class="eyebrow-label">Related Services</span>
        <h2>You Might Also <span class="text-accent">Need.</span></h2>
      </div>

      <div class="related-services-grid">
        <a href="/services/aluminum-gutters/" class="related-card reveal-up reveal-delay-1">
          <div class="related-card__icon"><i data-lucide="shield"></i></div>
          <h3>Aluminum Gutters</h3>
          <p>Material specs, gauge comparison, and finish options for our most popular installation type.</p>
          <span class="related-card__link">View Service →</span>
        </a>
        <a href="/services/gutter-guards/" class="related-card reveal-up reveal-delay-2">
          <div class="related-card__icon"><i data-lucide="filter"></i></div>
          <h3>Gutter Guards &amp; Leaf Protection</h3>
          <p>Add mesh or screen guards during install and reduce future cleaning frequency by 80%.</p>
          <span class="related-card__link">View Service →</span>
        </a>
        <a href="/services/custom-downspouts/" class="related-card reveal-up reveal-delay-3">
          <div class="related-card__icon"><i data-lucide="arrow-down-to-line"></i></div>
          <h3>Custom Downspouts</h3>
          <p>Oversized profiles, decorative options, and underground drainage tie-ins for high-flow homes.</p>
          <span class="related-card__link">View Service →</span>
        </a>
      </div>
    </div>
  </section>

  <!-- CLOSING CTA -->
  <section class="closing-cta" aria-label="Get a free estimate">
    <div class="closing-cta__inner reveal-up">
      <span class="section-subtitle" style="color: var(--color-accent);">Mark and the team</span>
      <h2>Ready for Gutters Done <span class="text-accent">Right?</span></h2>
      <p>Free on-site estimates across all 14 cities we serve. Most quotes scheduled within 48 hours.</p>
      <div>
        <a href="/contact/" class="btn-primary">Get My Free Estimate</a>
        <a href="tel:+16017501800" class="closing-cta__phone">Or Call (601) 750-1800</a>
      </div>
      <p class="closing-cta__meta">Mon–Fri 8AM–5PM · Madison, MS · Mississippi Licensed &amp; Insured</p>
    </div>
  </section>

</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
