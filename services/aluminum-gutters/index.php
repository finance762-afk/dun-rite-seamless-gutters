<?php
/**
 * Dun-Rite — Aluminum Gutters
 */

$pageTitle       = "Aluminum Gutters Installation in Madison, MS | Dun-Rite";
$pageDescription = "Aluminum seamless gutter installation across central Mississippi. Lightweight, rust-proof, 25+ color options, 25-year warranty. Free estimates from Dun-Rite Seamless Gutters.";
$canonicalUrl    = "https://dunrite-gutters.com/services/aluminum-gutters/";
$ogImage         = "https://i.imgur.com/8tTXO7O.jpeg";
$heroImage       = "https://i.imgur.com/8tTXO7O.jpeg";
$currentPage     = "services";

$cities = ["Brandon","Jackson","Canton","Madison","Pearl","Richland","Flowood","Florence","Gluckstadt","Bolton","Clinton","Terry","Ridgeland","Raymond"];
$areaServedSchema = array_map(fn($c) => ["@type" => "City", "name" => $c, "addressRegion" => "MS", "addressCountry" => "US"], $cities);

$faqs = [
  ["q" => "How long do aluminum gutters last in Mississippi?", "a" => "A properly installed .032 gauge aluminum seamless gutter system lasts 20–30 years in Mississippi's climate. Hot summers and humid winters don't shorten lifespan, but sun exposure can fade certain colors. We recommend a baked-enamel finish for maximum color retention."],
  ["q" => "Will aluminum gutters dent in hail storms?", "a" => ".032 gauge aluminum (what we install) resists most Mississippi hail. The thinner .027 gauge sold at home centers dents more easily. Severe hail (1.5\"+ stones) can dent any gutter material — that's what your homeowner's insurance is for, and we'll help with the claim."],
  ["q" => "Can aluminum gutters be painted later?", "a" => "Yes, but the baked-enamel factory finish lasts 20+ years. If you want to change colors later, aluminum can be sanded and painted with exterior-grade metal paint. We recommend choosing your color carefully upfront — replacement is more cost-effective than repainting."],
  ["q" => "Are aluminum gutters worth it vs vinyl?", "a" => "Yes. Vinyl gutters are cheaper upfront but become brittle in 5–10 years and crack in cold weather. Aluminum lasts 3-4x longer, doesn't sag under leaf-load, and holds paint better. Vinyl is a false economy for any home you plan to keep."],
];

$howToSteps = [
  ["name" => "Free Estimate &amp; Color Selection", "text" => "On-site measurement and physical color samples brought to your home. Quote in writing within 48 hours."],
  ["name" => "Custom On-Site Forming", "text" => "We form .032 gauge aluminum to your exact roofline using our truck-mounted brake — no factory pre-cuts."],
  ["name" => "Installation with Hidden Hangers", "text" => "Concealed hangers every 24 inches, sealed corners, properly pitched runs, color-matched fasteners."],
  ["name" => "Walkthrough &amp; Warranty Filing", "text" => "Final inspection, water-flow test, and immediate filing of your 25-year manufacturer warranty."],
];

$schemaGraph = [
  "@context" => "https://schema.org",
  "@graph" => [
    [
      "@type"       => "Service",
      "@id"         => $canonicalUrl . "#service",
      "serviceType" => "Aluminum Gutters",
      "name"        => "Aluminum Gutters in Mississippi",
      "description" => $pageDescription,
      "provider"    => ["@id" => "https://dunrite-gutters.com/#business"],
      "areaServed"  => $areaServedSchema,
    ],
    [
      "@type" => "BreadcrumbList",
      "itemListElement" => [
        ["@type" => "ListItem", "position" => 1, "name" => "Home", "item" => "https://dunrite-gutters.com/"],
        ["@type" => "ListItem", "position" => 2, "name" => "Services", "item" => "https://dunrite-gutters.com/services/"],
        ["@type" => "ListItem", "position" => 3, "name" => "Aluminum Gutters", "item" => $canonicalUrl],
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
      "name"  => "How Aluminum Gutter Installation Works",
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
    <img src="https://i.imgur.com/8tTXO7O.jpeg" alt="Modern white-sided Mississippi home with dark aluminum seamless gutters" class="hero-bg" width="1920" height="1080" loading="eager" fetchpriority="high">
    <div class="hero__inner">
      <div class="hero__copy">
        <span class="eyebrow-label">Rust-proof · Lightweight · 25+ Colors</span>
        <h1>Aluminum Gutters in <span class="text-accent">Mississippi.</span></h1>
        <p class="hero__subhead">Mississippi's most popular gutter material. .032 gauge aluminum installed seamless and color-matched to your home.</p>
        <div class="hero__ctas">
          <a href="#hero-form-heading" class="btn-primary">Get Free Estimate</a>
          <a href="tel:+16017501800" class="btn-secondary btn-on-dark">Call (601) 750-1800</a>
        </div>
        <p class="hero__phone">Mon–Fri 8AM–5PM · 14 Mississippi cities served</p>
      </div>
      <?php
        $preselectedService = 'Aluminum Gutters';
        $heroFormHeading    = 'Free Aluminum Gutter Estimate';
        $heroFormSubheading = 'Color samples brought to your free estimate';
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
        <li><a href="/services/">Services</a></li>
        <li class="breadcrumb-sep" aria-hidden="true">›</li>
        <li aria-current="page">Aluminum Gutters</li>
      </ol>
    </div>
  </nav>

  <section class="section">
    <div class="container">
      <div class="answer-block reveal-up">
        <h2>Aluminum Gutters in Mississippi: The Honest Take</h2>
        <p>Aluminum is the most popular gutter material in Mississippi for good reason: it's rust-proof, lightweight, available in 25+ baked-enamel colors, and lasts 20–30 years with proper installation. Dun-Rite Seamless Gutters installs .032 gauge aluminum across 14 central Mississippi cities — heavier than the .027 gauge sold at home improvement stores. Every installation is backed by a 25-year manufacturer warranty plus our 2-year labor warranty.</p>
      </div>
    </div>
  </section>

  <!-- WHY ALUMINUM -->
  <section class="section section-alt">
    <div class="container">
      <div class="section-title reveal-up">
        <span class="eyebrow-label">Material Profile</span>
        <h2>Why Is Aluminum the <span class="text-accent">Right Choice</span> for Mississippi Homes?</h2>
        <span class="section-subtitle">three reasons it's the regional standard</span>
      </div>

      <div class="sub-service-grid">
        <div class="sub-service-card card-tint-1 reveal-up reveal-delay-1">
          <div class="sub-service-icon"><i data-lucide="shield"></i></div>
          <h3>Rust-Proof for Life</h3>
          <p>Aluminum doesn't rust — period. Mississippi's humidity, summer storms, and pollen wash don't degrade the material the way they corrode galvanized steel.</p>
        </div>
        <div class="sub-service-card card-tint-3 reveal-up reveal-delay-2">
          <div class="sub-service-icon"><i data-lucide="palette"></i></div>
          <h3>25+ Color Options</h3>
          <p>Factory-baked enamel finishes that resist fading for 20+ years. White, almond, bronze, charcoal, brown, terratone, and forest green stocked locally; custom colors with a 1-2 week lead time.</p>
        </div>
        <div class="sub-service-card card-tint-2 reveal-up reveal-delay-3">
          <div class="sub-service-icon"><i data-lucide="dollar-sign"></i></div>
          <h3>Cost-Effective</h3>
          <p>The most affordable seamless gutter material — typically $1,200–$3,500 installed on most Mississippi homes. Returns its cost in 5–7 years vs vinyl replacement cycles.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- GAUGE -->
  <section class="section">
    <div class="container">
      <div class="split">
        <div class="reveal-left">
          <span class="eyebrow-label">Gauge Selection</span>
          <h2>What Aluminum Gauge <span class="text-accent">Should You Choose?</span></h2>
          <p style="margin-top: var(--space-md);">.032 gauge is the residential standard for any installer who's serious about long-term performance — and what we install on every Dun-Rite job. The .027 gauge sold at big-box stores costs less but dents on first ladder contact, sags under heavy leaf-load within 8 years, and bends if hit by a falling branch.</p>
          <p>For commercial properties and oversized residential rooflines, we go heavier still — .040 and .050 gauge for high-traffic commercial work. Our installer evaluation includes a gauge recommendation based on your home's specific runoff load and surrounding tree canopy.</p>
          <p>The 30% material upcharge from .027 to .032 is typically less than $200 on a residential install. The added 10–15 years of dent-free life is worth it every time.</p>
        </div>
        <div class="reveal-right">
          <img src="https://i.imgur.com/oaW4wFF.jpeg" alt="Dark blue/black metal seamless aluminum gutter installed on wood-sided home eave in Mississippi" width="900" height="600" loading="lazy" style="border-radius: var(--radius-md); box-shadow: var(--shadow-lg);">
        </div>
      </div>
    </div>
  </section>

  <!-- COLORS -->
  <section class="section section-alt">
    <div class="container">
      <div class="split-reverse">
        <div class="reveal-left">
          <span class="eyebrow-label">Finishes</span>
          <h2>What Colors and Finishes <span class="text-accent">Are Available?</span></h2>
          <p style="margin-top: var(--space-md);">We bring physical color samples to every estimate. Stocked colors include white, almond, cream, bronze, charcoal, brown, terratone, royal brown, and forest green. Custom colors are available with a 1–2 week lead time and a small upcharge per linear foot.</p>
          <p>Every Dun-Rite finish is baked-enamel — applied at the factory under heat for a finish that resists fading, peeling, and chalking for 20+ years. This is dramatically better than spray-on field finishes that fail in 3–5 years.</p>
          <p>For homes with copper or specialty roof flashing, we can match colors to existing trim within reason. For exact copper matches, see our <a href="/services/copper-gutters/" style="color: var(--color-accent); border-bottom: 1px solid currentColor;">copper gutter service</a>.</p>
        </div>
        <div class="reveal-right">
          <img src="https://i.imgur.com/RzYB8p1.jpeg" alt="Color sample lineup for aluminum seamless gutter installations including white, almond, bronze, charcoal options" width="900" height="675" loading="lazy" style="border-radius: var(--radius-md); box-shadow: var(--shadow-lg);">
        </div>
      </div>
    </div>
  </section>

  <!-- LIFESPAN -->
  <section class="section">
    <div class="container">
      <div class="section-title reveal-up">
        <span class="eyebrow-label">Longevity</span>
        <h2>How Long Will <span class="text-accent">Aluminum Gutters Last?</span></h2>
      </div>
      <div class="prose reveal-up">
        <p>A properly installed .032 gauge aluminum seamless gutter system lasts 20–30 years in Mississippi's climate — sometimes longer with regular cleaning and gutter guards. The aluminum itself doesn't rust or weaken; what fails first is typically the enamel finish on south-facing runs after 20+ years of direct UV exposure.</p>
      </div>

      <div class="pricing-callout reveal-up">
        <span class="pricing-callout__amount">20 – 30 Years</span>
        <span class="pricing-callout__label">Typical lifespan with a baked-enamel finish · Backed by 25-year manufacturer warranty</span>
      </div>

      <div class="mid-cta-line reveal-up">
        Have older aluminum gutters that look tired? <a href="/contact/">Get a free repair-vs-replace evaluation</a> and we'll tell you straight which makes more financial sense.
      </div>
    </div>
  </section>

  <!-- PROCESS -->
  <section class="section section-alt">
    <div class="container">
      <div class="section-title reveal-up">
        <span class="eyebrow-label">How It Works</span>
        <h2>From Color Pick to <span class="text-accent">Installed.</span></h2>
        <span class="section-subtitle">most installs done in a single day</span>
      </div>

      <div class="process-grid">
        <?php $icons = ["clipboard-check","ruler","hammer","shield-check"]; ?>
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
  <section class="section">
    <div class="container">
      <div class="section-title reveal-up">
        <span class="eyebrow-label">Frequently Asked</span>
        <h2>Aluminum Gutter <span class="text-accent">Questions.</span></h2>
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

  <!-- RELATED -->
  <section class="section section-alt">
    <div class="container">
      <div class="section-title reveal-up">
        <span class="eyebrow-label">Related Services</span>
        <h2>You Might Also <span class="text-accent">Need.</span></h2>
      </div>

      <div class="related-services-grid">
        <a href="/services/seamless-gutter-installation/" class="related-card reveal-up reveal-delay-1">
          <div class="related-card__icon"><i data-lucide="ruler"></i></div>
          <h3>Seamless Gutter Installation</h3>
          <p>The full installation process — measurements, on-site forming, hidden hangers, water testing.</p>
          <span class="related-card__link">View Service →</span>
        </a>
        <a href="/services/copper-gutters/" class="related-card reveal-up reveal-delay-2">
          <div class="related-card__icon"><i data-lucide="sparkles"></i></div>
          <h3>Copper Gutters</h3>
          <p>Specialty hand-soldered copper for premium homes. 50+ year service life with developing patina.</p>
          <span class="related-card__link">View Service →</span>
        </a>
        <a href="/services/custom-downspouts/" class="related-card reveal-up reveal-delay-3">
          <div class="related-card__icon"><i data-lucide="arrow-down-to-line"></i></div>
          <h3>Custom Downspouts</h3>
          <p>Round, oversized, and decorative downspouts color-matched to your aluminum gutters.</p>
          <span class="related-card__link">View Service →</span>
        </a>
      </div>
    </div>
  </section>

  <section class="closing-cta" aria-label="Get a free estimate">
    <div class="closing-cta__inner reveal-up">
      <span class="section-subtitle" style="color: var(--color-accent);">Mark and the team</span>
      <h2>Ready for Aluminum Gutters Done <span class="text-accent">Right?</span></h2>
      <p>Free on-site estimates with physical color samples brought to your home.</p>
      <div>
        <a href="/contact/" class="btn-primary">Get My Free Estimate</a>
        <a href="tel:+16017501800" class="closing-cta__phone">Or Call (601) 750-1800</a>
      </div>
      <p class="closing-cta__meta">Mon–Fri 8AM–5PM · Madison, MS · Mississippi Licensed &amp; Insured</p>
    </div>
  </section>

</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
