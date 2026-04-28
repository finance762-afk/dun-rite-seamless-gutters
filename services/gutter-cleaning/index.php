<?php
/**
 * Dun-Rite — Gutter Cleaning
 */

$pageTitle       = "Gutter Cleaning in Madison, MS | Dun-Rite Seamless Gutters";
$pageDescription = "Professional gutter cleaning across central Mississippi. Twice-yearly maintenance prevents foundation damage, fascia rot, and overflow. Schedule with Dun-Rite Seamless Gutters today.";
$canonicalUrl    = "https://dunrite-gutters.com/services/gutter-cleaning/";
$ogImage         = "https://i.imgur.com/jAqOpHk.jpeg";
$heroImage       = "https://i.imgur.com/jAqOpHk.jpeg";
$currentPage     = "services";

$cities = ["Brandon","Jackson","Canton","Madison","Pearl","Richland","Flowood","Florence","Gluckstadt","Bolton","Clinton","Terry","Ridgeland","Raymond"];
$areaServedSchema = array_map(fn($c) => ["@type" => "City", "name" => $c, "addressRegion" => "MS", "addressCountry" => "US"], $cities);

$faqs = [
  ["q" => "How often should gutters be cleaned in Mississippi?", "a" => "Most central Mississippi homes need gutter cleaning twice a year — once in late spring (after pollen and oak catkins drop) and once after fall leaf-drop in November. Homes under heavy oak or pine canopy may need quarterly cleanings. Homes with no significant tree coverage may get by with once a year."],
  ["q" => "How much does gutter cleaning cost?", "a" => "Most Mississippi homes run $150–$300 per cleaning depending on home size, number of stories, and accessibility. We discount recurring service plans — twice-yearly customers typically save 15–20% versus single-visit pricing. Quotes are free."],
  ["q" => "Do you offer recurring cleaning service?", "a" => "Yes. Most customers schedule twice-yearly (spring + fall) recurring cleanings on autopay. We send reminders, handle scheduling, and provide a written inspection report after each visit. Quarterly plans available for high-debris properties."],
  ["q" => "What if you find damage during cleaning?", "a" => "Our cleaning includes a written inspection report with photos of any issues we spot — sagging gutters, broken hangers, fascia damage, or seam leaks. We'll provide a separate repair quote you can take or leave. We never start work beyond the cleaning without your authorization."],
];

$howToSteps = [
  ["name" => "Scheduling", "text" => "Book a single-visit cleaning or recurring twice-yearly plan. We confirm via email 48 hours before each appointment."],
  ["name" => "On-Site Cleaning", "text" => "Hand-removal of all debris from gutter trough, downspout flushing with high-pressure water, and splash-block check at every drain."],
  ["name" => "Inspection &amp; Documentation", "text" => "Photo-documented inspection of fascia, hangers, seams, and pitch. Any issues flagged in a written report you receive that day."],
  ["name" => "Final Walkthrough", "text" => "Confirm cleanliness, address any concerns, and schedule the next visit if you're on a recurring plan."],
];

$schemaGraph = [
  "@context" => "https://schema.org",
  "@graph" => [
    [
      "@type"       => "Service",
      "@id"         => $canonicalUrl . "#service",
      "serviceType" => "Gutter Cleaning",
      "name"        => "Gutter Cleaning in Madison, MS",
      "description" => $pageDescription,
      "provider"    => ["@id" => "https://dunrite-gutters.com/#business"],
      "areaServed"  => $areaServedSchema,
    ],
    [
      "@type" => "BreadcrumbList",
      "itemListElement" => [
        ["@type" => "ListItem", "position" => 1, "name" => "Home", "item" => "https://dunrite-gutters.com/"],
        ["@type" => "ListItem", "position" => 2, "name" => "Services", "item" => "https://dunrite-gutters.com/services/"],
        ["@type" => "ListItem", "position" => 3, "name" => "Gutter Cleaning", "item" => $canonicalUrl],
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
      "name"  => "How Gutter Cleaning Works",
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
    <img src="https://i.imgur.com/jAqOpHk.jpeg" alt="Gloved hand cleaning leaves from a gutter — Dun-Rite cleaning service" class="hero-bg" width="1920" height="1080" loading="eager" fetchpriority="high">
    <div class="hero__inner">
      <div class="hero__copy">
        <span class="eyebrow-label">Twice-Yearly · Overflow Prevention</span>
        <h1>Gutter Cleaning Services in <span class="text-accent">Madison, MS.</span></h1>
        <p class="hero__subhead">Spring and fall maintenance. Foundation protection. Fascia preservation. Done by professionals — not on a ladder by yourself.</p>
        <div class="hero__ctas">
          <a href="#hero-form-heading" class="btn-primary">Schedule Cleaning</a>
          <a href="tel:+16017501800" class="btn-secondary btn-on-dark">Call (601) 750-1800</a>
        </div>
        <p class="hero__phone">Mon–Fri 8AM–5PM · 14 Mississippi cities served</p>
      </div>
      <?php
        $preselectedService = 'Gutter Cleaning';
        $heroFormHeading    = 'Schedule Your Gutter Cleaning';
        $heroFormSubheading = 'Recurring service plans available';
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
        <li aria-current="page">Gutter Cleaning</li>
      </ol>
    </div>
  </nav>

  <section class="section">
    <div class="container">
      <div class="answer-block reveal-up">
        <h2>Gutter Cleaning in Mississippi: What It Costs &amp; When to Schedule</h2>
        <p>Most Mississippi homes need professional gutter cleaning twice a year — once in late spring and once after fall leaf-drop. Clogged gutters cause foundation damage, fascia rot, basement flooding, and landscape erosion. Dun-Rite Seamless Gutters provides scheduled cleanings across 14 cities with full debris removal, downspout flushing, and a written inspection report identifying any repairs needed. Most homes run $150–$300 per cleaning with recurring service discounts available.</p>
      </div>
    </div>
  </section>

  <!-- WHY CLEAN -->
  <section class="section section-alt">
    <div class="container">
      <div class="section-title reveal-up">
        <span class="eyebrow-label">The Real Cost of Skipping</span>
        <h2>Why Do <span class="text-accent">Clean Gutters</span> Matter?</h2>
        <span class="section-subtitle">three repair bills you don't want</span>
      </div>

      <div class="stats-grid" style="grid-template-columns: repeat(3, 1fr);">
        <div class="stat-block reveal-scale reveal-delay-1">
          <span class="stat-number">$5K – $25K</span>
          <span class="stat-label">Foundation Repair</span>
        </div>
        <div class="stat-block reveal-scale reveal-delay-2">
          <span class="stat-number">$2K – $8K</span>
          <span class="stat-label">Fascia Replacement</span>
        </div>
        <div class="stat-block reveal-scale reveal-delay-3">
          <span class="stat-number">$2K – $15K</span>
          <span class="stat-label">Basement Waterproofing</span>
        </div>
      </div>

      <div class="prose reveal-up" style="margin-top: var(--space-lg);">
        <p>Clogged gutters back up during heavy rain, overflow at corners, and dump water against the foundation, fascia, and landscaping. Mississippi's spring and fall storm seasons regularly produce 4–6 inch rain events; an overflowing gutter system during one of those storms can cause more damage in a single afternoon than a year of normal weather. Compared to repair costs, $150–$300 twice a year is the cheapest insurance you can buy on your home.</p>
      </div>
    </div>
  </section>

  <!-- WHEN TO SCHEDULE -->
  <section class="section">
    <div class="container">
      <div class="section-title reveal-up">
        <span class="eyebrow-label">Scheduling</span>
        <h2>When Should You Schedule <span class="text-accent">Gutter Cleaning?</span></h2>
        <span class="section-subtitle">three windows that matter</span>
      </div>

      <div class="sub-service-grid">
        <div class="sub-service-card card-tint-1 reveal-up reveal-delay-1">
          <div class="sub-service-icon"><i data-lucide="flower"></i></div>
          <h3>Late Spring (April–May)</h3>
          <p>Clears oak catkins, pine straw, and pollen accumulation. Critical before summer thunderstorm season hits central Mississippi.</p>
        </div>
        <div class="sub-service-card card-tint-3 reveal-up reveal-delay-2">
          <div class="sub-service-icon"><i data-lucide="leaf"></i></div>
          <h3>After Leaf Drop (November)</h3>
          <p>Clears fall leaves, acorns, and seed pods. Done before winter rain and before holiday family visits put extra demand on your home.</p>
        </div>
        <div class="sub-service-card card-tint-2 reveal-up reveal-delay-3">
          <div class="sub-service-icon"><i data-lucide="cloud-rain-wind"></i></div>
          <h3>After Major Storms</h3>
          <p>Mississippi straight-line winds dump leaves, branches, and debris into gutters in a single event. Post-storm cleanings prevent damage compounding.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- WHATS INCLUDED -->
  <section class="section section-alt">
    <div class="container">
      <div class="section-title reveal-up">
        <span class="eyebrow-label">Service Detail</span>
        <h2>What's Included in a <span class="text-accent">Dun-Rite Cleaning?</span></h2>
        <span class="section-subtitle">no shortcuts, no upsells</span>
      </div>

      <div class="feature-checklist reveal-up">
        <div class="feature-check">
          <div class="feature-check__icon"><i data-lucide="hand"></i></div>
          <div class="feature-check__body"><strong>Debris Removal</strong><span>Hand-removal of all leaves, sticks, and debris from the gutter trough. Bagged and hauled away on the truck.</span></div>
        </div>
        <div class="feature-check">
          <div class="feature-check__icon"><i data-lucide="droplets"></i></div>
          <div class="feature-check__body"><strong>Downspout Flushing</strong><span>High-pressure water flush through every downspout to clear hidden blockages. Drain test at the splash block.</span></div>
        </div>
        <div class="feature-check">
          <div class="feature-check__icon"><i data-lucide="square-stack"></i></div>
          <div class="feature-check__body"><strong>Splash Block Check</strong><span>Verify splash blocks are positioned and unbroken. Direct water flow at least 4 feet from the foundation.</span></div>
        </div>
        <div class="feature-check">
          <div class="feature-check__icon"><i data-lucide="search"></i></div>
          <div class="feature-check__body"><strong>Fascia Inspection</strong><span>Visual inspection for water staining, paint failure, or rot beginning. Photographed and reported.</span></div>
        </div>
        <div class="feature-check">
          <div class="feature-check__icon"><i data-lucide="wrench"></i></div>
          <div class="feature-check__body"><strong>Hangers &amp; Spike Check</strong><span>Test every hanger and downspout strap. Note any sagging or pulling that needs follow-up.</span></div>
        </div>
        <div class="feature-check">
          <div class="feature-check__icon"><i data-lucide="file-text"></i></div>
          <div class="feature-check__body"><strong>Written Report with Photos</strong><span>Detailed report delivered the same day with photos of any issues. No surprise upsells later.</span></div>
        </div>
      </div>
    </div>
  </section>

  <!-- SIGNS YOU NEED -->
  <section class="section">
    <div class="container">
      <div class="section-title reveal-up">
        <span class="eyebrow-label">Warning Signs</span>
        <h2>What Are the Signs Your Gutters <span class="text-accent">Need Cleaning Now?</span></h2>
      </div>
      <div class="prose reveal-up">
        <p>If any of these signs are present at your home, schedule a cleaning this week — don't wait for the next storm:</p>
        <ul style="padding-left: var(--space-md); margin: var(--space-md) 0;">
          <li>Water overflowing the front edge of the gutter during rain</li>
          <li>Visible sagging or pulling away from the fascia</li>
          <li>Plant growth (yes, actual plants) sprouting from the gutter trough</li>
          <li>Water staining or peeling paint on fascia and soffit</li>
          <li>Washout, soil erosion, or dead spots in flowerbeds below downspouts</li>
          <li>Mosquito activity around the home (standing water in clogged sections)</li>
          <li>Squirrel, bird, or rodent activity around the gutters</li>
        </ul>
      </div>

      <div class="mid-cta-line reveal-up">
        Spotted any of these signs? <a href="/contact/">Schedule a same-week cleaning</a> — we typically can be on-site within 5 business days.
      </div>
    </div>
  </section>

  <!-- RECURRING PLANS -->
  <section class="section section-alt">
    <div class="container">
      <div class="section-title reveal-up">
        <span class="eyebrow-label">Recurring Plans</span>
        <h2>Save with a <span class="text-accent">Maintenance Plan.</span></h2>
        <span class="section-subtitle">15-20% off recurring service</span>
      </div>

      <div class="grid-2">
        <div class="sub-service-card card-tint-1 reveal-up reveal-delay-1">
          <div class="sub-service-icon"><i data-lucide="calendar-check"></i></div>
          <h3>Twice-Yearly Plan</h3>
          <p>Spring + fall scheduled cleanings. Most popular for residential homeowners with normal tree coverage.</p>
          <ul>
            <li>Auto-scheduled appointments</li>
            <li>15-20% off single-visit pricing</li>
            <li>Written report after each visit</li>
            <li>Priority booking during storm seasons</li>
          </ul>
        </div>
        <div class="sub-service-card card-tint-3 reveal-up reveal-delay-2">
          <div class="sub-service-icon"><i data-lucide="calendar-clock"></i></div>
          <h3>Quarterly Plan</h3>
          <p>Four cleanings per year for properties under heavy oak, pine, or pecan canopy where twice yearly isn't enough.</p>
          <ul>
            <li>Auto-scheduled every 90 days</li>
            <li>20-25% off single-visit pricing</li>
            <li>Includes annual gutter inspection</li>
            <li>First-priority post-storm response</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- PROCESS -->
  <section class="section">
    <div class="container">
      <div class="section-title reveal-up">
        <span class="eyebrow-label">How It Works</span>
        <h2>From Scheduling to <span class="text-accent">Spotless.</span></h2>
        <span class="section-subtitle">most homes done in 60–90 minutes</span>
      </div>

      <div class="process-grid">
        <?php $icons = ["calendar-check","hand","search-check","check-check"]; ?>
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
        <h2>Gutter Cleaning <span class="text-accent">Questions.</span></h2>
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
        <a href="/services/gutter-guards/" class="related-card reveal-up reveal-delay-1">
          <div class="related-card__icon"><i data-lucide="filter"></i></div>
          <h3>Gutter Guards &amp; Leaf Protection</h3>
          <p>Reduce cleaning frequency from twice yearly to once every 3–5 years with mesh or screen guards.</p>
          <span class="related-card__link">View Service →</span>
        </a>
        <a href="/services/gutter-repair-replacement/" class="related-card reveal-up reveal-delay-2">
          <div class="related-card__icon"><i data-lucide="wrench"></i></div>
          <h3>Gutter Repair &amp; Replacement</h3>
          <p>Repair sagging, leaking, or damaged sections found during cleaning. Same-day estimates.</p>
          <span class="related-card__link">View Service →</span>
        </a>
        <a href="/services/seamless-gutter-installation/" class="related-card reveal-up reveal-delay-3">
          <div class="related-card__icon"><i data-lucide="ruler"></i></div>
          <h3>Seamless Gutter Installation</h3>
          <p>If your existing gutters are beyond cleaning, full replacement with our 25-year warranty option.</p>
          <span class="related-card__link">View Service →</span>
        </a>
      </div>
    </div>
  </section>

  <section class="closing-cta" aria-label="Schedule cleaning">
    <div class="closing-cta__inner reveal-up">
      <span class="section-subtitle" style="color: var(--color-accent);">Mark and the team</span>
      <h2>Ready for Spotless <span class="text-accent">Gutters?</span></h2>
      <p>Single-visit and recurring plan pricing available. Most homes scheduled within 5 business days.</p>
      <div>
        <a href="/contact/" class="btn-primary">Schedule My Cleaning</a>
        <a href="tel:+16017501800" class="closing-cta__phone">Or Call (601) 750-1800</a>
      </div>
      <p class="closing-cta__meta">Mon–Fri 8AM–5PM · Madison, MS · Mississippi Licensed &amp; Insured</p>
    </div>
  </section>

</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
