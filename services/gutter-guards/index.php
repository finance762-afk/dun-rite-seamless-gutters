<?php
/**
 * Dun-Rite — Gutter Guards & Leaf Protection
 */

$pageTitle       = "Gutter Guards & Leaf Protection in Madison, MS | Dun-Rite";
$pageDescription = "Mesh and screen gutter guards installed across central Mississippi. Stop leaves, debris, and clogs. Reduce cleaning frequency. Free estimates from Dun-Rite Seamless Gutters.";
$canonicalUrl    = "https://dunrite-gutters.com/services/gutter-guards/";
$ogImage         = "https://i.imgur.com/v9flHNM.jpeg";
$heroImage       = "https://i.imgur.com/v9flHNM.jpeg";
$currentPage     = "services";

$cities = ["Brandon","Jackson","Canton","Madison","Pearl","Richland","Flowood","Florence","Gluckstadt","Bolton","Clinton","Terry","Ridgeland","Raymond"];
$areaServedSchema = array_map(fn($c) => ["@type" => "City", "name" => $c, "addressRegion" => "MS", "addressCountry" => "US"], $cities);

$faqs = [
  ["q" => "Do gutter guards really work?", "a" => "Yes — when installed correctly. Quality mesh and screen guards stop 95%+ of leaves, pine needles, and large debris from entering your gutter trough. They don't eliminate maintenance entirely (fine pollen and dust still accumulate on top), but they reduce cleaning frequency from twice yearly to once every 3–5 years."],
  ["q" => "Will I still need gutter cleaning with guards?", "a" => "You'll still need occasional maintenance — typically once every 3–5 years for the gutters themselves, plus annual top-of-guard sweeping for homes under heavy tree canopy. Guards dramatically reduce labor and risk, but no system is fully maintenance-free."],
  ["q" => "How much do gutter guards cost?", "a" => "Mesh and screen gutter guards typically run $7–$12 per linear foot installed in Mississippi, depending on system type and gutter compatibility. A typical 200-LF home runs $1,400–$2,400 for a complete guard installation. Foam inserts run cheaper but don't last as long."],
  ["q" => "Can guards be added to my existing gutters?", "a" => "In most cases, yes. We can retrofit mesh and screen guards onto existing aluminum or steel gutters with no modification. Sagging or damaged gutters need to be repaired or replaced first — we'll evaluate your existing system at the free estimate."],
];

$howToSteps = [
  ["name" => "On-Site Evaluation", "text" => "We inspect your existing gutters, evaluate tree coverage and debris load, and recommend mesh, screen, or foam — or replacement if existing gutters are damaged."],
  ["name" => "Guard System Selection", "text" => "Choose between fine mesh (best for pine needles), large-hole screen (best for oak leaves), or foam inserts (lowest cost). We bring physical samples to the consultation."],
  ["name" => "Installation Over Existing or New Gutters", "text" => "Most systems install in 2–4 hours per home. We secure guards with stainless or color-matched fasteners — no slip-fit pieces that blow loose in storms."],
  ["name" => "Final Walkthrough", "text" => "Confirm proper fit, water-flow test, and provide maintenance schedule appropriate to your tree coverage."],
];

$schemaGraph = [
  "@context" => "https://schema.org",
  "@graph" => [
    [
      "@type"       => "Service",
      "@id"         => $canonicalUrl . "#service",
      "serviceType" => "Gutter Guards & Leaf Protection",
      "name"        => "Gutter Guards in Mississippi",
      "description" => $pageDescription,
      "provider"    => ["@id" => "https://dunrite-gutters.com/#business"],
      "areaServed"  => $areaServedSchema,
    ],
    [
      "@type" => "BreadcrumbList",
      "itemListElement" => [
        ["@type" => "ListItem", "position" => 1, "name" => "Home", "item" => "https://dunrite-gutters.com/"],
        ["@type" => "ListItem", "position" => 2, "name" => "Services", "item" => "https://dunrite-gutters.com/services/"],
        ["@type" => "ListItem", "position" => 3, "name" => "Gutter Guards", "item" => $canonicalUrl],
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
      "name"  => "How Gutter Guard Installation Works",
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
    <img src="https://i.imgur.com/v9flHNM.jpeg" alt="Worker installing mesh gutter guard on a Mississippi home" class="hero-bg" width="1920" height="1080" loading="eager" fetchpriority="high">
    <div class="hero__inner">
      <div class="hero__copy">
        <span class="eyebrow-label">Leaf Protection · Mesh Systems · Clog Prevention</span>
        <h1>Gutter Guards in <span class="text-accent">Mississippi.</span></h1>
        <p class="hero__subhead">Stop leaves, pine needles, and debris from clogging your system. Protect your foundation, fascia, and landscaping.</p>
        <div class="hero__ctas">
          <a href="#hero-form-heading" class="btn-primary">Get Free Estimate</a>
          <a href="tel:+16017501800" class="btn-secondary btn-on-dark">Call (601) 750-1800</a>
        </div>
        <p class="hero__phone">Mon–Fri 8AM–5PM · 14 Mississippi cities served</p>
      </div>
      <?php
        $preselectedService = 'Gutter Guards & Leaf Protection';
        $heroFormHeading    = 'Free Gutter Guard Estimate';
        $heroFormSubheading = 'Compatible with new or existing gutters';
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
        <li aria-current="page">Gutter Guards</li>
      </ol>
    </div>
  </nav>

  <section class="section">
    <div class="container">
      <div class="answer-block reveal-up">
        <h2>Gutter Guards in Mississippi: Honest Answers</h2>
        <p>Gutter guards stop leaves, pine needles, and debris from clogging your gutters — preventing the overflow, fascia rot, and foundation water damage that come with neglected systems. Dun-Rite installs mesh and screen guard systems across central Mississippi compatible with new or existing gutters. Most installations run $7–$12 per linear foot installed. Properly installed guards reduce gutter cleaning frequency from twice yearly to once every 3–5 years.</p>
      </div>
    </div>
  </section>

  <!-- DO THEY WORK -->
  <section class="section section-alt">
    <div class="container">
      <div class="section-title reveal-up">
        <span class="eyebrow-label">The Real Answer</span>
        <h2>Do Gutter Guards <span class="text-accent">Actually Work?</span></h2>
      </div>
      <div class="prose reveal-up">
        <p>The honest answer: yes, when installed correctly, but they're not "set it and forget it." Quality mesh and screen guards stop 95%+ of leaves, pine needles, and large debris. What still gets through: fine pollen, dust, and pine straw that accumulates on top of the guard rather than inside the gutter trough.</p>
        <p>The marketing claim that gutter guards eliminate cleaning forever is overpromised. The honest claim — which we'll give you on every estimate — is that guards reduce cleaning frequency from twice yearly (spring + fall) to once every 3–5 years for the gutter trough itself, plus annual sweeping of debris off the top of the guard for homes under oak or pine canopy.</p>
        <p>If your home has zero tree coverage, gutter guards may not be worth the cost. If you're under heavy oak or pine, they pay for themselves in 4–6 years versus repeated cleanings.</p>
      </div>
    </div>
  </section>

  <!-- TYPES -->
  <section class="section">
    <div class="container">
      <div class="section-title reveal-up">
        <span class="eyebrow-label">System Options</span>
        <h2>What Types of Gutter Guards <span class="text-accent">Are Available?</span></h2>
        <span class="section-subtitle">three options, three price points</span>
      </div>

      <div class="sub-service-grid">
        <div class="sub-service-card card-tint-1 reveal-up reveal-delay-1">
          <div class="sub-service-icon"><i data-lucide="grid-3x3"></i></div>
          <h3>Fine Mesh</h3>
          <p>Stainless steel micro-mesh stretched over an aluminum support frame. Best for pine straw and small debris.</p>
          <ul>
            <li>$10–$14 per linear foot installed</li>
            <li>Stops fine debris (pine, oak)</li>
            <li>15+ year service life</li>
            <li>Minimal top-sweeping needed</li>
          </ul>
        </div>
        <div class="sub-service-card card-tint-2 reveal-up reveal-delay-2">
          <div class="sub-service-icon"><i data-lucide="grid-2x2"></i></div>
          <h3>Large-Hole Screen</h3>
          <p>Aluminum or copper screen with larger openings. Best for big leaves; less effective on pine straw.</p>
          <ul>
            <li>$7–$10 per linear foot installed</li>
            <li>Stops large debris (oak leaves)</li>
            <li>10–15 year service life</li>
            <li>Annual top sweep recommended</li>
          </ul>
        </div>
        <div class="sub-service-card card-tint-3 reveal-up reveal-delay-3">
          <div class="sub-service-icon"><i data-lucide="circle-dot"></i></div>
          <h3>Foam Inserts</h3>
          <p>Foam wedge that fills the gutter trough. Lowest cost but shortest lifespan.</p>
          <ul>
            <li>$3–$6 per linear foot installed</li>
            <li>Quick install on existing gutters</li>
            <li>5–7 year service life</li>
            <li>Holds debris on top — needs sweep</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- EXISTING GUTTERS -->
  <section class="section section-alt">
    <div class="container">
      <div class="split-reverse">
        <div class="reveal-left">
          <span class="eyebrow-label">Retrofit Compatible</span>
          <h2>Can Guards Be Installed on <span class="text-accent">Existing Gutters?</span></h2>
          <p style="margin-top: var(--space-md);">In most cases, yes. We can retrofit mesh and screen guards onto existing aluminum or steel gutters with no modification — assuming the existing system is structurally sound. Sagging gutters, broken hangers, or damaged sections need to be repaired or replaced before guard installation.</p>
          <p>We evaluate your existing gutter system as part of every free estimate. If it's in good shape, retrofitting guards is a 2–4 hour job per home. If it needs <a href="/services/gutter-repair-replacement/" style="color: var(--color-accent); border-bottom: 1px solid currentColor;">repair or replacement</a>, we'll quote both pieces together — most homeowners find that combining gutter replacement with new guards saves significantly versus doing them separately.</p>
        </div>
        <div class="reveal-right">
          <img src="https://i.imgur.com/EtRNOH2.jpeg" alt="Close-up of installed mesh gutter guard on a seamless aluminum gutter system in Mississippi by Dun-Rite" width="900" height="675" loading="lazy" style="border-radius: var(--radius-md); box-shadow: var(--shadow-lg);">
        </div>
      </div>
    </div>
  </section>

  <!-- WHEN DO YOU NEED -->
  <section class="section">
    <div class="container">
      <div class="section-title reveal-up">
        <span class="eyebrow-label">Decision Guide</span>
        <h2>When Do You Actually <span class="text-accent">Need Gutter Guards?</span></h2>
      </div>
      <div class="prose reveal-up">
        <p>Gutter guards are a strong investment for Mississippi homes with significant tree coverage — especially oak, pine, and pecan, all of which produce heavy seasonal debris loads. Specific signals it's time to add guards:</p>
        <ul style="padding-left: var(--space-md); margin: var(--space-md) 0;">
          <li>Your home is under or beside mature oak, pine, pecan, or magnolia trees</li>
          <li>You're cleaning gutters more than twice a year</li>
          <li>You've had foundation or basement water issues traced to overflow</li>
          <li>Your fascia shows water staining or beginning rot</li>
          <li>You're uncomfortable getting on a ladder yourself, and hiring cleaning twice a year is becoming expensive</li>
          <li>You have a two-story home where cleaning is more dangerous</li>
        </ul>
        <p>If none of those apply, a once-yearly cleaning may be all you need. We'll tell you straight at the free estimate whether guards are worth it for your specific situation.</p>
      </div>
    </div>
  </section>

  <!-- MAINTENANCE -->
  <section class="section section-alt">
    <div class="container">
      <div class="section-title reveal-up">
        <span class="eyebrow-label">Realistic Expectations</span>
        <h2>What Maintenance Is <span class="text-accent">Still Required?</span></h2>
      </div>
      <div class="prose reveal-up">
        <p>Even the best gutter guards aren't fully maintenance-free in central Mississippi. What you'll still need:</p>
        <ul style="padding-left: var(--space-md); margin: var(--space-md) 0;">
          <li><strong>Annual top sweep:</strong> Pollen, fine dust, and small debris that lands on top of the guard. A leaf blower or soft broom takes care of this.</li>
          <li><strong>Trough flush every 3–5 years:</strong> Fine particles eventually filter through any guard system. A flush every few years keeps the system flowing.</li>
          <li><strong>Post-storm inspection:</strong> Severe wind events can lift sections of guard or pile debris that needs to be cleared.</li>
        </ul>
        <p>If you'd rather have us handle all of this on a schedule, see our <a href="/services/gutter-cleaning/" style="color: var(--color-accent); border-bottom: 1px solid currentColor;">recurring gutter cleaning service</a> — many homeowners pair guards with an annual maintenance visit.</p>
      </div>

      <div class="mid-cta-line reveal-up">
        Want guards installed with a maintenance plan? <a href="/contact/">Contact Dun-Rite today</a> and we'll quote both pieces together.
      </div>
    </div>
  </section>

  <!-- PROCESS -->
  <section class="section">
    <div class="container">
      <div class="section-title reveal-up">
        <span class="eyebrow-label">How It Works</span>
        <h2>From Estimate to <span class="text-accent">Protected.</span></h2>
        <span class="section-subtitle">most installs in a single afternoon</span>
      </div>

      <div class="process-grid">
        <?php $icons = ["search-check","filter","hammer","check-check"]; ?>
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
        <h2>Gutter Guard <span class="text-accent">Questions.</span></h2>
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
        <a href="/services/gutter-cleaning/" class="related-card reveal-up reveal-delay-1">
          <div class="related-card__icon"><i data-lucide="droplets"></i></div>
          <h3>Gutter Cleaning</h3>
          <p>Twice-yearly maintenance plans available with guard installations. Foundation protection year-round.</p>
          <span class="related-card__link">View Service →</span>
        </a>
        <a href="/services/seamless-gutter-installation/" class="related-card reveal-up reveal-delay-2">
          <div class="related-card__icon"><i data-lucide="ruler"></i></div>
          <h3>Seamless Gutter Installation</h3>
          <p>Pair new gutters with guards from day one for the best long-term performance and lowest lifetime cost.</p>
          <span class="related-card__link">View Service →</span>
        </a>
        <a href="/services/gutter-repair-replacement/" class="related-card reveal-up reveal-delay-3">
          <div class="related-card__icon"><i data-lucide="wrench"></i></div>
          <h3>Gutter Repair &amp; Replacement</h3>
          <p>Repair sagging or damaged gutters before adding guards. Same-day estimates available.</p>
          <span class="related-card__link">View Service →</span>
        </a>
      </div>
    </div>
  </section>

  <section class="closing-cta" aria-label="Get a free estimate">
    <div class="closing-cta__inner reveal-up">
      <span class="section-subtitle" style="color: var(--color-accent);">Mark and the team</span>
      <h2>Ready to Stop <span class="text-accent">Cleaning Gutters?</span></h2>
      <p>Free on-site evaluation with mesh, screen, and foam options shown. We'll quote retrofit or new-install pricing.</p>
      <div>
        <a href="/contact/" class="btn-primary">Get My Free Estimate</a>
        <a href="tel:+16017501800" class="closing-cta__phone">Or Call (601) 750-1800</a>
      </div>
      <p class="closing-cta__meta">Mon–Fri 8AM–5PM · Madison, MS · Mississippi Licensed &amp; Insured</p>
    </div>
  </section>

</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
