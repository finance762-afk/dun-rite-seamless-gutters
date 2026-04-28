<?php
/**
 * Dun-Rite — Commercial Gutters
 */

$pageTitle       = "Commercial Gutters in Mississippi | Dun-Rite Seamless Gutters";
$pageDescription = "Large-scale commercial gutter systems across Mississippi. Office buildings, retail, multi-family, industrial. Custom sizing, high-flow profiles, copper specialty. Dun-Rite Seamless Gutters.";
$canonicalUrl    = "https://dunrite-gutters.com/services/commercial-gutters/";
$ogImage         = "https://i.imgur.com/F4Wh56M.jpeg";
$heroImage       = "https://i.imgur.com/F4Wh56M.jpeg";
$currentPage     = "services";

$cities = ["Brandon","Jackson","Canton","Madison","Pearl","Richland","Flowood","Florence","Gluckstadt","Bolton","Clinton","Terry","Ridgeland","Raymond"];
$areaServedSchema = array_map(fn($c) => ["@type" => "City", "name" => $c, "addressRegion" => "MS", "addressCountry" => "US"], $cities);

$faqs = [
  ["q" => "Do you work with commercial general contractors?", "a" => "Yes. We have ongoing builder partnerships across central Mississippi for new construction, tenant improvement, and renovation work. Single-point project management, milestone-based scheduling, certificate of insurance on file, and AIA-formatted billing on request."],
  ["q" => "What's the largest commercial property you've gutterized?", "a" => "We've completed multi-building apartment complexes, regional retail centers, and industrial warehouses across the greater Jackson area. Our largest single-project linear footage is over 4,000 LF; our largest multi-building complex spanned 22 buildings. References available on request."],
  ["q" => "Can you handle multi-building complexes?", "a" => "Yes. Multi-building work is scheduled in coordinated phases with a single project manager assigned. We coordinate with site supervisors, work around tenant occupancy, and stage materials to minimize disruption. Phased billing aligned with installation milestones."],
  ["q" => "Do you offer commercial gutter cleaning contracts?", "a" => "Yes. Annual and semi-annual maintenance contracts available for commercial properties. Includes scheduled cleaning, downspout flushing, and written inspection reports formatted for property management documentation. Volume pricing on multi-building portfolios."],
];

$howToSteps = [
  ["name" => "Pre-Construction Consultation", "text" => "Walk the site with the GC, architect, or property owner. Review architectural drawings, identify roof drainage points, and recommend profile sizing for runoff load."],
  ["name" => "Drawing Review + Take-Off", "text" => "Complete material take-off from architectural drawings. Profile selection, downspout placement, and drainage tie-in coordination submitted as a written scope."],
  ["name" => "Material Delivery Scheduling", "text" => "Materials staged to match the project schedule. Single delivery for small projects; phased delivery aligned with installation milestones for large complexes."],
  ["name" => "Phased Installation", "text" => "Coordinated installation with site supervisor and other trades. Hidden hangers, sealed seams, properly sized downspouts. Daily progress reports on large projects."],
  ["name" => "Final Inspection + Warranty Paperwork", "text" => "Punch-list walkthrough with the GC and owner. Water-flow testing on every downspout. Manufacturer warranty registration and as-built documentation delivered."],
];

$schemaGraph = [
  "@context" => "https://schema.org",
  "@graph" => [
    [
      "@type"       => "Service",
      "@id"         => $canonicalUrl . "#service",
      "serviceType" => "Commercial Gutter Installation",
      "name"        => "Commercial Gutters in Mississippi",
      "description" => $pageDescription,
      "provider"    => ["@id" => "https://dunrite-gutters.com/#business"],
      "areaServed"  => $areaServedSchema,
    ],
    [
      "@type" => "BreadcrumbList",
      "itemListElement" => [
        ["@type" => "ListItem", "position" => 1, "name" => "Home", "item" => "https://dunrite-gutters.com/"],
        ["@type" => "ListItem", "position" => 2, "name" => "Services", "item" => "https://dunrite-gutters.com/services/"],
        ["@type" => "ListItem", "position" => 3, "name" => "Commercial Gutters", "item" => $canonicalUrl],
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
      "name"  => "How Commercial Gutter Installation Works",
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
    <img src="https://i.imgur.com/F4Wh56M.jpeg" alt="Mississippi commercial building under construction with metal awnings" class="hero-bg" width="1920" height="1080" loading="eager" fetchpriority="high">
    <div class="hero__inner">
      <div class="hero__copy">
        <span class="eyebrow-label">Office · Retail · Multi-Family · Industrial</span>
        <h1>Commercial Gutters in <span class="text-accent">Mississippi.</span></h1>
        <p class="hero__subhead">30 years of commercial rain-carrying systems. Oversized profiles, multi-building complexes, and copper specialty for premium projects.</p>
        <div class="hero__ctas">
          <a href="#hero-form-heading" class="btn-primary">Project Estimate</a>
          <a href="tel:+16017501800" class="btn-secondary btn-on-dark">Call (601) 750-1800</a>
        </div>
        <p class="hero__phone">Mon–Fri 8AM–5PM · Builder partnerships standard</p>
      </div>
      <?php
        $preselectedService = 'Commercial Gutters';
        $heroFormHeading    = 'Commercial Project Estimate';
        $heroFormSubheading = 'Builder partnerships · Single-point project management';
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
        <li aria-current="page">Commercial Gutters</li>
      </ol>
    </div>
  </nav>

  <section class="section">
    <div class="container">
      <div class="answer-block reveal-up">
        <h2>Commercial Gutter Installation in Mississippi: 30 Years of Builder Partnerships</h2>
        <p>Dun-Rite Seamless Gutters has installed commercial rain-carrying systems across central Mississippi since 1996 — from neighborhood retail centers to large multi-family complexes and industrial properties. We specialize in oversized 7-inch and 8-inch profiles, custom downspout sizing for high-volume runoff, and copper installations for premium commercial projects. Our commercial work includes single-point project management, scheduled installation milestones, and direct builder partnerships.</p>
      </div>
    </div>
  </section>

  <!-- PROPERTY TYPES -->
  <section class="section section-alt">
    <div class="container">
      <div class="section-title reveal-up">
        <span class="eyebrow-label">Property Types</span>
        <h2>What Property Types <span class="text-accent">Do You Serve?</span></h2>
        <span class="section-subtitle">four sectors, one standard</span>
      </div>

      <div class="grid-2">
        <div class="sub-service-card card-tint-1 reveal-up reveal-delay-1">
          <div class="sub-service-icon"><i data-lucide="briefcase"></i></div>
          <h3>Office Buildings</h3>
          <p>Class A, B, and C office buildings — single-tenant and multi-tenant. Coordinated installation around occupancy schedules. Custom downspout placement for ground-level landscape integration.</p>
        </div>
        <div class="sub-service-card card-tint-3 reveal-up reveal-delay-2">
          <div class="sub-service-icon"><i data-lucide="store"></i></div>
          <h3>Retail Centers</h3>
          <p>Strip centers, big-box, and pad sites. High-flow profiles for large flat-roof drainage points. Phased installation around tenant turnover and grand-opening schedules.</p>
        </div>
        <div class="sub-service-card card-tint-2 reveal-up reveal-delay-3">
          <div class="sub-service-icon"><i data-lucide="building"></i></div>
          <h3>Multi-Family</h3>
          <p>Apartment complexes, townhome communities, and senior living. Multi-building project management. Standardized profiles across the complex with property management documentation.</p>
        </div>
        <div class="sub-service-card card-tint-1 reveal-up reveal-delay-4">
          <div class="sub-service-icon"><i data-lucide="factory"></i></div>
          <h3>Industrial &amp; Warehouse</h3>
          <p>Heavy commercial and industrial. Oversized profiles for warehouse and manufacturing roof footprints. Coordinated work around production schedules and material loading docks.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- SIZING -->
  <section class="section">
    <div class="container">
      <div class="section-title reveal-up">
        <span class="eyebrow-label">Engineering</span>
        <h2>How Do You Size Gutters for <span class="text-accent">Commercial Flow Rates?</span></h2>
      </div>
      <div class="prose reveal-up">
        <p>Commercial gutter sizing is engineering, not estimating. We calculate runoff capacity from roof square footage, pitch, and Mississippi rainfall intensity (typically designed against a 100-year, 5-minute storm event). For a typical Mississippi commercial property, that means 4–8 inches of rainfall per hour as a design load.</p>
        <p>Standard 5-inch residential profiles cap out around 5,500 sq ft of roof area; commercial installations frequently need 6-inch, 7-inch, or 8-inch profiles to handle the full runoff without overflow. Downspouts are sized accordingly — 3x4 oversized as standard, 4x5 for high-volume runs.</p>
        <p>For low-slope and flat-roof commercial properties, internal drains and scupper-fed downspouts may be the right design — we coordinate with the roofing contractor on these systems and handle gutter and downspout installation where they integrate.</p>
      </div>
    </div>
  </section>

  <!-- RECENT PROJECTS -->
  <section class="section section-alt">
    <div class="container">
      <div class="section-title reveal-up">
        <span class="eyebrow-label">Recent Work</span>
        <h2>Mississippi Commercial <span class="text-accent">Projects.</span></h2>
        <span class="section-subtitle">representative installations</span>
      </div>

      <div class="grid-3">
        <div class="reveal-up reveal-delay-1" style="border-radius: var(--radius-md); overflow: hidden; box-shadow: var(--shadow-md);">
          <img src="https://i.imgur.com/6xCAwdl.jpeg" alt="Two-story Southern commercial building with arches and columns featuring Dun-Rite seamless gutter installation" width="800" height="600" loading="lazy" style="aspect-ratio: 4/3; object-fit: cover; width: 100%;">
        </div>
        <div class="reveal-up reveal-delay-2" style="border-radius: var(--radius-md); overflow: hidden; box-shadow: var(--shadow-md);">
          <img src="https://i.imgur.com/xL8tLae.jpeg" alt="Brick commercial building exterior with seamless gutter system installed by Dun-Rite Mississippi" width="800" height="600" loading="lazy" style="aspect-ratio: 4/3; object-fit: cover; width: 100%;">
        </div>
        <div class="reveal-up reveal-delay-3" style="border-radius: var(--radius-md); overflow: hidden; box-shadow: var(--shadow-md);">
          <img src="https://i.imgur.com/1wIIiZW.jpeg" alt="Two-story estate with arched columns and commercial-grade gutter installation by Dun-Rite Mississippi" width="800" height="600" loading="lazy" style="aspect-ratio: 4/3; object-fit: cover; width: 100%;">
        </div>
      </div>
    </div>
  </section>

  <!-- MULTI-BUILDING -->
  <section class="section">
    <div class="container">
      <div class="section-title reveal-up">
        <span class="eyebrow-label">Project Management</span>
        <h2>How Do You Manage <span class="text-accent">Multi-Building</span> Commercial Projects?</h2>
      </div>
      <div class="prose reveal-up">
        <p>Multi-building commercial work needs project management, not just installation. For complexes with 5+ buildings, we assign a single project manager who coordinates with the GC's site supervisor, manages material delivery scheduling, owns the punch list, and reports daily progress.</p>
        <p>Phased installation is the norm — we work building-by-building or zone-by-zone in coordination with other trades. Gutters typically install after the roofing trade and before the landscape contractor; we work that schedule into the project plan upfront so there's no surprise sequencing.</p>
        <p>Billing is milestone-based: typically 30% on material delivery, 60% on building-by-building completion, 10% retainage on final punch-list. AIA-formatted invoicing available on request. Certificate of insurance with the GC named as additional insured provided on every commercial job.</p>
      </div>

      <div class="mid-cta-line reveal-up">
        Have a commercial project on the boards? <a href="/contact/">Schedule a pre-construction walk</a> with our project manager — we'll review drawings and take-off your scope.
      </div>
    </div>
  </section>

  <!-- PROCESS -->
  <section class="section section-alt">
    <div class="container">
      <div class="section-title reveal-up">
        <span class="eyebrow-label">How It Works</span>
        <h2>From Drawings to <span class="text-accent">Final Inspection.</span></h2>
        <span class="section-subtitle">five phases, one project manager</span>
      </div>

      <div class="process-grid" style="grid-template-columns: repeat(5, 1fr);">
        <?php $icons = ["clipboard-pen","file-text","truck","hammer","shield-check"]; ?>
        <?php foreach ($howToSteps as $i => $step): ?>
        <div class="process-step reveal-up reveal-delay-<?php echo ($i % 4) + 1; ?>">
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
        <h2>Commercial Gutter <span class="text-accent">Questions.</span></h2>
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

  <section class="section section-alt">
    <div class="container">
      <div class="section-title reveal-up">
        <span class="eyebrow-label">Related Services</span>
        <h2>You Might Also <span class="text-accent">Need.</span></h2>
      </div>

      <div class="related-services-grid">
        <a href="/services/copper-gutters/" class="related-card reveal-up reveal-delay-1">
          <div class="related-card__icon"><i data-lucide="sparkles"></i></div>
          <h3>Copper Gutters</h3>
          <p>Specialty copper installations for premium commercial properties, historic restorations, and luxury developments.</p>
          <span class="related-card__link">View Service →</span>
        </a>
        <a href="/services/custom-downspouts/" class="related-card reveal-up reveal-delay-2">
          <div class="related-card__icon"><i data-lucide="arrow-down-to-line"></i></div>
          <h3>Custom Downspouts</h3>
          <p>Oversized 4x5 profiles, underground drainage tie-ins, and decorative options for commercial projects.</p>
          <span class="related-card__link">View Service →</span>
        </a>
        <a href="/services/seamless-gutter-installation/" class="related-card reveal-up reveal-delay-3">
          <div class="related-card__icon"><i data-lucide="ruler"></i></div>
          <h3>Seamless Gutter Installation</h3>
          <p>Installation methodology and material specs that scale from residential to commercial work.</p>
          <span class="related-card__link">View Service →</span>
        </a>
      </div>
    </div>
  </section>

  <section class="closing-cta" aria-label="Get a commercial estimate">
    <div class="closing-cta__inner reveal-up">
      <span class="section-subtitle" style="color: var(--color-accent);">Mark and the team</span>
      <h2>Ready to Talk <span class="text-accent">Commercial?</span></h2>
      <p>Builder partnerships, single-point project management, AIA-formatted billing on request. References available.</p>
      <div>
        <a href="/contact/" class="btn-primary">Schedule a Pre-Construction Walk</a>
        <a href="tel:+16017501800" class="closing-cta__phone">Or Call (601) 750-1800</a>
      </div>
      <p class="closing-cta__meta">Mon–Fri 8AM–5PM · Madison, MS · Mississippi Licensed &amp; Insured</p>
    </div>
  </section>

</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
