<?php
/**
 * Dun-Rite — Gutter Repair & Replacement
 */

$pageTitle       = "Gutter Repair & Replacement in Madison, MS | Dun-Rite";
$pageDescription = "Sagging gutter repair, leaking seam fixes, and full system replacement across central Mississippi. Same-day estimates. 25-year warranty on replacements. Dun-Rite Seamless Gutters.";
$canonicalUrl    = "https://dunrite-gutters.com/services/gutter-repair-replacement/";
$ogImage         = "https://i.imgur.com/Hr2Nlwl.jpeg";
$heroImage       = "https://i.imgur.com/Hr2Nlwl.jpeg";
$currentPage     = "services";

$cities = ["Brandon","Jackson","Canton","Madison","Pearl","Richland","Flowood","Florence","Gluckstadt","Bolton","Clinton","Terry","Ridgeland","Raymond"];
$areaServedSchema = array_map(fn($c) => ["@type" => "City", "name" => $c, "addressRegion" => "MS", "addressCountry" => "US"], $cities);

$faqs = [
  ["q" => "Should I repair or replace my gutters?", "a" => "If your gutters are under 15 years old and the issues are localized (one sagging section, a leaking corner, a couple pulled hangers), repair is usually the right call — typically $150–$600 per repair. If your gutters are 20+ years old, have multiple problems, or sagging is widespread, full replacement saves money long-term and starts your 25-year warranty fresh."],
  ["q" => "Can sagging gutters be fixed?", "a" => "Yes — sagging gutters are typically fixed by replacing failed hangers with hidden hangers spaced every 24 inches. If the gutter material itself is bent or warped from a sagged section, that section may need replacement. Cost runs $150–$400 for hanger work; full section replacement runs $300–$800."],
  ["q" => "Do you handle insurance claims for storm damage?", "a" => "Yes. We work directly with homeowners insurance adjusters on storm damage claims (hail, wind, fallen branches). We provide photo documentation, written damage assessments, and itemized repair quotes formatted for adjuster review. Most claims close within 2–3 weeks."],
  ["q" => "How long do gutter repairs last?", "a" => "Quality repairs (hanger replacement, sealed corners, section replacement) last 10–20 years. Repairs we perform are warrantied for 2 years on labor; we honor manufacturer warranties on any new materials installed. If repairs are stacking up year over year, full replacement is usually the more economical choice."],
];

$howToSteps = [
  ["name" => "On-Site Assessment + Written Estimate", "text" => "Same-day visits in most cases. We inspect, photograph, and provide a written quote — itemized for repair scope or full replacement options."],
  ["name" => "Repair Scope or Replacement Planning", "text" => "Walk you through the options. If insurance is involved, we provide adjuster-ready documentation. No pressure — just the honest path forward."],
  ["name" => "Material Order or Fabrication", "text" => "Stock materials available for next-day repair. Custom colors or copper specialty work scheduled within 1–2 weeks of approval."],
  ["name" => "Installation + Warranty Paperwork", "text" => "Repair or replacement installed with the same standards as a new build. 2-year labor warranty + applicable manufacturer warranty paperwork on the day of completion."],
];

$schemaGraph = [
  "@context" => "https://schema.org",
  "@graph" => [
    [
      "@type"       => "Service",
      "@id"         => $canonicalUrl . "#service",
      "serviceType" => "Gutter Repair and Replacement",
      "name"        => "Gutter Repair & Replacement in Mississippi",
      "description" => $pageDescription,
      "provider"    => ["@id" => "https://dunrite-gutters.com/#business"],
      "areaServed"  => $areaServedSchema,
    ],
    [
      "@type" => "BreadcrumbList",
      "itemListElement" => [
        ["@type" => "ListItem", "position" => 1, "name" => "Home", "item" => "https://dunrite-gutters.com/"],
        ["@type" => "ListItem", "position" => 2, "name" => "Services", "item" => "https://dunrite-gutters.com/services/"],
        ["@type" => "ListItem", "position" => 3, "name" => "Gutter Repair & Replacement", "item" => $canonicalUrl],
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
      "name"  => "How Gutter Repair Works",
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
    <img src="https://i.imgur.com/Hr2Nlwl.jpeg" alt="Worker on ladder installing replacement gutters in Mississippi" class="hero-bg" width="1920" height="1080" loading="eager" fetchpriority="high">
    <div class="hero__inner">
      <div class="hero__copy">
        <span class="eyebrow-label">Sagging · Leaking · Storm Damage</span>
        <h1>Gutter Repair &amp; Replacement in <span class="text-accent">Mississippi.</span></h1>
        <p class="hero__subhead">One sagging section, a leaking seam, or a 30-year-old system that's done? We handle repairs and full replacements with same-day estimates.</p>
        <div class="hero__ctas">
          <a href="#hero-form-heading" class="btn-primary">Same-Day Estimate</a>
          <a href="tel:+16017501800" class="btn-secondary btn-on-dark">Call (601) 750-1800</a>
        </div>
        <p class="hero__phone">Mon–Fri 8AM–5PM · Storm damage response same week</p>
      </div>
      <?php
        $preselectedService = 'Gutter Repair & Replacement';
        $heroFormHeading    = 'Same-Day Repair Estimate';
        $heroFormSubheading = 'Storm damage · Insurance claims supported';
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
        <li><a href="/services/">Services</a></li>
        <li class="breadcrumb-sep" aria-hidden="true">›</li>
        <li aria-current="page">Gutter Repair &amp; Replacement</li>
      </ol>
    </div>
  </nav>

  <section class="section">
    <div class="container">
      <div class="answer-block reveal-up">
        <h2>Gutter Repair &amp; Replacement in Mississippi: Same-Day Estimates</h2>
        <p>Whether you have one sagging section, a leaking seam, or a 30-year-old system that's reached the end of its life, Dun-Rite repairs and replaces gutters across central Mississippi. Most repairs run $150–$600 per section. Full replacement starts at $1,200 with our 25-year manufacturer warranty. We provide same-day written estimates and work directly with insurance adjusters on storm damage claims.</p>
      </div>
    </div>
  </section>

  <!-- COMMON PROBLEMS -->
  <section class="section section-alt">
    <div class="container">
      <div class="section-title reveal-up">
        <span class="eyebrow-label">Common Issues</span>
        <h2>What Are the Most Common <span class="text-accent">Gutter Problems</span> in Mississippi?</h2>
        <span class="section-subtitle">four issues, four causes</span>
      </div>

      <div class="grid-2">
        <div class="sub-service-card card-tint-1 reveal-up reveal-delay-1">
          <div class="sub-service-icon"><i data-lucide="trending-down"></i></div>
          <h3>Sagging Gutters</h3>
          <p>Failed hangers from age, leaf-load, or improper original spacing. The gutter no longer maintains pitch, causing pooling and overflow.</p>
        </div>
        <div class="sub-service-card card-tint-3 reveal-up reveal-delay-2">
          <div class="sub-service-icon"><i data-lucide="droplet"></i></div>
          <h3>Leaking Corners &amp; Seams</h3>
          <p>Sealant failure at miters and seams from age or thermal cycling. Standing water visible at corners during rain. Easy to fix; expensive if ignored.</p>
        </div>
        <div class="sub-service-card card-tint-2 reveal-up reveal-delay-3">
          <div class="sub-service-icon"><i data-lucide="alert-triangle"></i></div>
          <h3>Pulled-Off Fascia</h3>
          <p>The entire gutter run pulling away from the house — usually because the wood fascia behind has rotted from years of overflow. Requires fascia repair before re-hanging.</p>
        </div>
        <div class="sub-service-card card-tint-1 reveal-up reveal-delay-4">
          <div class="sub-service-icon"><i data-lucide="waves"></i></div>
          <h3>Pooling Water at Downspouts</h3>
          <p>Downspout undersized for runoff load, or splash blocks missing/damaged. Water dumping next to foundation. Easy fix with the right downspout sizing.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- REPAIR VS REPLACE -->
  <section class="section">
    <div class="container">
      <div class="section-title reveal-up">
        <span class="eyebrow-label">Decision Guide</span>
        <h2>Should You <span class="text-accent">Repair or Replace</span> Your Gutters?</h2>
        <span class="section-subtitle">honest checklists</span>
      </div>

      <div class="decision-split reveal-up">
        <div class="decision-card decision-card--repair">
          <h3>When Does Repair Make Sense?</h3>
          <ul>
            <li>Gutters are under 15 years old</li>
            <li>Issues are localized to 1–2 sections</li>
            <li>Material itself is sound (no bends, holes, rust)</li>
            <li>Hangers can be replaced without re-hanging the whole run</li>
            <li>Color and profile still match your home</li>
            <li>Cost of repair is under 30% of full replacement</li>
          </ul>
        </div>
        <div class="decision-card decision-card--replace">
          <h3>When Is Replacement Smarter?</h3>
          <ul>
            <li>Gutters are 20+ years old</li>
            <li>Multiple sections need work</li>
            <li>Material is bent, holed, or rust-stained</li>
            <li>You're tired of yearly repair calls</li>
            <li>You want to upgrade to 6-inch profile or copper</li>
            <li>Repair costs exceed 50% of full replacement</li>
          </ul>
        </div>
      </div>

      <div class="prose reveal-up" style="margin-top: var(--space-lg);">
        <p>We give you the honest answer at the free estimate. If repair makes more sense than replacement, we'll quote the repair. We don't push replacement on customers whose gutters have another 5–10 years left in them.</p>
      </div>
    </div>
  </section>

  <!-- STORM DAMAGE -->
  <section class="section section-alt">
    <div class="container">
      <div class="split">
        <div class="reveal-left">
          <span class="eyebrow-label">Insurance Claims</span>
          <h2>How Do You Handle <span class="text-accent">Storm Damage</span> Claims?</h2>
          <p style="margin-top: var(--space-md);">Mississippi storms — hail, straight-line winds, fallen branches — regularly damage gutter systems. We work directly with homeowners insurance adjusters and provide adjuster-ready documentation: photo evidence of damage, written impact descriptions, and itemized repair quotes formatted exactly the way adjusters need them.</p>
          <p>Most claims process in 2–3 weeks. We don't get paid until the work is approved and complete. We never ask for upfront payment on insurance work — that's a contractor scam to avoid in any trade.</p>
          <p>If a tree fell on your gutter, hail just dented your downspouts, or wind ripped a run off your fascia, call within 72 hours of the storm. Earlier documentation helps your claim and gets you on our schedule before the post-storm rush.</p>
        </div>
        <div class="reveal-right">
          <img src="https://i.imgur.com/v9I4W31.jpeg" alt="Worker installing replacement black metal downspout to stucco wall after storm damage in Mississippi" width="900" height="600" loading="lazy" style="border-radius: var(--radius-md); box-shadow: var(--shadow-lg);">
        </div>
      </div>

      <div class="mid-cta-line reveal-up">
        Just had storm damage? <a href="/contact/">Call (601) 750-1800 today</a> — we typically have post-storm documentation appointments same week.
      </div>
    </div>
  </section>

  <!-- PROCESS -->
  <section class="section">
    <div class="container">
      <div class="section-title reveal-up">
        <span class="eyebrow-label">How It Works</span>
        <h2>From Damage Assessment to <span class="text-accent">Fixed.</span></h2>
        <span class="section-subtitle">most repairs done within a week</span>
      </div>

      <div class="process-grid">
        <?php $icons = ["clipboard-check","route","truck","shield-check"]; ?>
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
        <h2>Repair &amp; Replacement <span class="text-accent">Questions.</span></h2>
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
          <p>Full replacement with custom-formed seamless aluminum, 25+ colors, and 25-year manufacturer warranty.</p>
          <span class="related-card__link">View Service →</span>
        </a>
        <a href="/services/gutter-cleaning/" class="related-card reveal-up reveal-delay-2">
          <div class="related-card__icon"><i data-lucide="droplets"></i></div>
          <h3>Gutter Cleaning</h3>
          <p>Twice-yearly maintenance prevents the conditions that cause sagging, leaks, and fascia rot.</p>
          <span class="related-card__link">View Service →</span>
        </a>
        <a href="/services/aluminum-gutters/" class="related-card reveal-up reveal-delay-3">
          <div class="related-card__icon"><i data-lucide="shield"></i></div>
          <h3>Aluminum Gutters</h3>
          <p>Material specs and color options for full system replacement on Mississippi homes.</p>
          <span class="related-card__link">View Service →</span>
        </a>
      </div>
    </div>
  </section>

  <section class="closing-cta" aria-label="Get a same-day estimate">
    <div class="closing-cta__inner reveal-up">
      <span class="section-subtitle" style="color: var(--color-accent);">Mark and the team</span>
      <h2>Ready to Stop the <span class="text-accent">Leak?</span></h2>
      <p>Same-day repair estimates. Insurance claim documentation. 2-year labor warranty on every fix.</p>
      <div>
        <a href="/contact/" class="btn-primary">Get My Repair Estimate</a>
        <a href="tel:+16017501800" class="closing-cta__phone">Or Call (601) 750-1800</a>
      </div>
      <p class="closing-cta__meta">Mon–Fri 8AM–5PM · Madison, MS · Mississippi Licensed &amp; Insured</p>
    </div>
  </section>

</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
