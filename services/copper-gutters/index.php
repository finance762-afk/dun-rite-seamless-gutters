<?php
/**
 * Dun-Rite — Copper Gutters (SIGNATURE PREMIUM PAGE)
 */

$pageTitle       = "Copper Gutters in Mississippi | Specialty Installation by Dun-Rite";
$pageDescription = "Hand-soldered copper gutter installation across Mississippi. 50+ year service life, decorative profiles, custom standing-seam accents. Specialty work since 1996 by Dun-Rite Seamless Gutters.";
$canonicalUrl    = "https://dunrite-gutters.com/services/copper-gutters/";
$ogImage         = "https://i.imgur.com/a54eolx.jpeg";
$heroImage       = "https://i.imgur.com/a54eolx.jpeg";
$currentPage     = "services";

$cities = ["Brandon","Jackson","Canton","Madison","Pearl","Richland","Flowood","Florence","Gluckstadt","Bolton","Clinton","Terry","Ridgeland","Raymond"];
$areaServedSchema = array_map(fn($c) => ["@type" => "City", "name" => $c, "addressRegion" => "MS", "addressCountry" => "US"], $cities);

$faqs = [
  ["q" => "How much do copper gutters cost in Mississippi?", "a" => "Most copper gutter installations run $25–$40 per linear foot installed, depending on profile, complexity, and whether decorative elements are included. A typical 200-linear-foot copper installation runs $5,000–$8,000. We provide detailed written quotes after on-site consultation."],
  ["q" => "How long do copper gutters last?", "a" => "Properly installed copper gutters routinely last 50–100 years. Many historic Mississippi homes have original copper installations from the 1920s and 1930s still in place. With hand-soldered seams (not riveted or sealed), there are no failure points to develop leaks."],
  ["q" => "Will copper gutters turn green? When?", "a" => "Yes — that's the protective patina. Year 1: bright copper. Years 2-3: bronzing/darkening. Years 5-7: brown patina. Years 10-15: classic verdigris green. The patina is the protective layer — it shouldn't be cleaned off. Many homeowners actually want to accelerate it for aesthetics."],
  ["q" => "Can you match existing copper trim or roofing?", "a" => "Yes. We work with all standard copper profiles and can custom-fabricate to match existing trim, downspouts, or standing-seam roofing. Bring photos of the existing copperwork to your consultation and we'll specify matching gauge, profile, and finish."],
  ["q" => "Do you install copper standing-seam accents?", "a" => "Yes. We frequently install standing-seam copper accents over entry doors, bay windows, and dormer roofs to complement copper gutter installations. These accents are hand-formed on-site and can include decorative finials, snow guards, and concealed fasteners."],
];

$howToSteps = [
  ["name" => "Design Consultation", "text" => "Walk the property with the homeowner or architect. Measure rooflines, identify decorative opportunities, and specify gauge, profile, and finish."],
  ["name" => "Custom Fabrication", "text" => "Hand-cut and pre-form copper sections in our fabrication shop. Decorative endcaps, bracket profiles, and downspout details made to drawing."],
  ["name" => "Hand-Soldering Seams", "text" => "Every joint is heated and tin-soldered on-site by a craftsman. No rivets, no sealants — soldered seams last as long as the copper itself."],
  ["name" => "Concealed Copper Hangers", "text" => "Hidden hangers fabricated from matching copper stock. No bright steel brackets visible from the ground."],
  ["name" => "Decorative Endcap Installation", "text" => "Hand-formed endcaps, bracket profiles, finials, and ornamental details installed by hand. Custom fabrication where the home calls for it."],
  ["name" => "Final Inspection", "text" => "Walkthrough with the homeowner, water-flow test, and photo documentation of all soldered joints for the warranty file."],
];

$schemaGraph = [
  "@context" => "https://schema.org",
  "@graph" => [
    [
      "@type"       => "Service",
      "@id"         => $canonicalUrl . "#service",
      "serviceType" => "Copper Gutter Installation",
      "name"        => "Copper Gutters in Mississippi",
      "description" => $pageDescription,
      "provider"    => ["@id" => "https://dunrite-gutters.com/#business"],
      "areaServed"  => $areaServedSchema,
    ],
    [
      "@type" => "BreadcrumbList",
      "itemListElement" => [
        ["@type" => "ListItem", "position" => 1, "name" => "Home", "item" => "https://dunrite-gutters.com/"],
        ["@type" => "ListItem", "position" => 2, "name" => "Services", "item" => "https://dunrite-gutters.com/services/"],
        ["@type" => "ListItem", "position" => 3, "name" => "Copper Gutters", "item" => $canonicalUrl],
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
      "name"  => "How Copper Gutter Installation Works",
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
    <img src="https://i.imgur.com/a54eolx.jpeg" alt="Mediterranean Mississippi estate with hand-installed copper gutters" class="hero-bg" width="1920" height="1080" loading="eager" fetchpriority="high">
    <div class="hero__inner">
      <div class="hero__copy">
        <span class="eyebrow-label">Signature Specialty · Hand-Soldered · 50+ Years</span>
        <h1><span class="text-accent">Copper</span> Gutters for Mississippi's Finest Homes.</h1>
        <p class="hero__subhead">Hand-soldered seams. Decorative profiles. Standing-seam accents. The only material that lasts as long as your house.</p>
        <div class="hero__ctas">
          <a href="#hero-form-heading" class="btn-primary">Request Copper Consultation</a>
          <a href="tel:+16017501800" class="btn-secondary btn-on-dark">Call (601) 750-1800</a>
        </div>
        <p class="hero__phone">Mon–Fri 8AM–5PM · Specialty work since 1996</p>
      </div>
      <?php
        $preselectedService = 'Copper Gutters';
        $heroFormHeading    = 'Request a Copper Consultation';
        $heroFormSubheading = 'Custom design · Hand-fabricated · 30 years specialty experience';
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
        <li aria-current="page">Copper Gutters</li>
      </ol>
    </div>
  </nav>

  <section class="section">
    <div class="container">
      <div class="answer-block reveal-up">
        <h2>Copper Gutters in Mississippi: What They Cost &amp; Why They're Worth It</h2>
        <p>Copper gutters cost more upfront — typically $25–$40 per linear foot installed — but they last 50+ years, develop a beautiful protective patina, and add measurable value to your home. Dun-Rite Seamless Gutters has been Mississippi's copper gutter specialist since 1996, hand-soldering every seam and fabricating decorative profiles unavailable from any aluminum installer. We work directly with architects, custom builders, and homeowners on copper installations across the greater Jackson area.</p>
      </div>
    </div>
  </section>

  <!-- WHY COPPER -->
  <section class="section section-alt" aria-label="Why copper">
    <svg class="floating-accent float-animate-slow" style="top: 60px; right: 5%; width: 90px; height: 120px; opacity: 0.07;" viewBox="0 0 60 80" aria-hidden="true">
      <path fill="#B87333" d="M30 0 C30 0 0 35 0 55 A30 25 0 0 0 60 55 C60 35 30 0 30 0 Z"/>
    </svg>
    <div class="container">
      <div class="section-title reveal-up">
        <span class="eyebrow-label">Three Reasons</span>
        <h2>Why Choose <span class="text-accent">Copper Gutters</span> for Your Home?</h2>
        <span class="section-subtitle">three things aluminum can't do</span>
      </div>

      <div class="sub-service-grid">
        <div class="sub-service-card card-tint-1 reveal-up reveal-delay-1">
          <div class="sub-service-icon"><i data-lucide="hourglass"></i></div>
          <h3>50+ Year Service Life</h3>
          <p>Properly installed copper gutters routinely last 50–100 years. Many historic Mississippi estates still have their original copperwork from the 1920s and 1930s — fully functional, fully sealed, fully patina'd.</p>
        </div>
        <div class="sub-service-card card-tint-3 copper-feature reveal-up reveal-delay-2" style="position: relative;">
          <div class="sub-service-icon"><i data-lucide="sparkles"></i></div>
          <h3>Living Patina Finish</h3>
          <p>Copper develops a protective verdigris patina over 10–15 years that seals the metal and adds character impossible to replicate with paint. The finish gets better with age — not worse.</p>
        </div>
        <div class="sub-service-card card-tint-2 reveal-up reveal-delay-3">
          <div class="sub-service-icon"><i data-lucide="trending-up"></i></div>
          <h3>Measurable Home Value</h3>
          <p>Custom copperwork is a documented home-value addition on luxury properties. Real estate appraisers and buyers in the Jackson area recognize copper gutters as a permanent improvement, not a maintenance expense.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- HAND-SOLDERED -->
  <section class="section">
    <div class="container">
      <div class="split">
        <div class="reveal-left">
          <img src="https://i.imgur.com/OWQAw0g.jpeg" alt="Brick home with hand-soldered copper gutters and copper standing-seam awning over door by Dun-Rite" width="900" height="675" loading="lazy" style="border-radius: var(--radius-md); box-shadow: var(--shadow-lg);">
        </div>
        <div class="reveal-right">
          <span class="eyebrow-label">Craftsmanship</span>
          <h2>How Are Copper Gutter <span class="text-accent">Seams Joined?</span></h2>
          <p style="margin-top: var(--space-md);">Real copper gutters are hand-soldered, not riveted or sealed. We heat each joint with a propane torch, apply lead-free tin solder, and let it flow into the seam. The result is a permanent metal-to-metal bond that's actually stronger than the copper itself.</p>
          <p>Aluminum gutter installers seal corners with industrial-grade caulk that lasts 10–15 years before needing maintenance. Cheap copper installers do the same — caulking copper joints because they don't have the soldering skill. That's a copper gutter system masquerading as luxury.</p>
          <p>We've been hand-soldering copper since 1996. Every Dun-Rite copper installation includes photo documentation of every soldered joint, filed with your warranty paperwork.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- DECORATIVE PROFILES -->
  <section class="section section-alt">
    <div class="container">
      <div class="split-reverse">
        <div class="reveal-left">
          <span class="eyebrow-label">Customization</span>
          <h2>What Decorative Profiles <span class="text-accent">Are Available?</span></h2>
          <p style="margin-top: var(--space-md);">Half-round, K-style, ogee, and custom profiles to match historic homes. Decorative endcaps with rosette and shell patterns. Ornamental hangers in copper or brass. Standing-seam awnings, dormer caps, and bay-window roofing accents — all hand-fabricated on-site or in our shop.</p>
          <p>For builders working on Mississippi luxury new construction, we fabricate to architectural drawings. For renovation projects, we'll match the existing copperwork down to the bracket spacing and endcap profile.</p>
          <p>If you can sketch it or show us a photo, we can fabricate it in copper. That's the difference between a gutter installer and a copper specialist.</p>
        </div>
        <div class="reveal-right">
          <img src="https://i.imgur.com/ZX808OJ.jpeg" alt="Brick home with hand-fabricated copper standing-seam awnings over windows by Dun-Rite specialty work" width="900" height="675" loading="lazy" style="border-radius: var(--radius-md); box-shadow: var(--shadow-lg);">
        </div>
      </div>
    </div>
  </section>

  <!-- PATINA TIMELINE -->
  <section class="section">
    <div class="container">
      <div class="section-title reveal-up">
        <span class="eyebrow-label">The Aging Process</span>
        <h2>How Does the <span class="text-accent">Patina</span> Develop Over Time?</h2>
        <span class="section-subtitle">years to perfection</span>
      </div>

      <div class="patina-timeline reveal-up">
        <div class="patina-stage">
          <div class="patina-stage__swatch"></div>
          <h3>Years 1–2</h3>
          <p>Bright, shiny copper. New-penny finish. Reflective in sunlight.</p>
        </div>
        <div class="patina-stage">
          <div class="patina-stage__swatch"></div>
          <h3>Years 3–5</h3>
          <p>Bronzing and darkening. Loss of high reflectivity. Warm brown undertones develop.</p>
        </div>
        <div class="patina-stage">
          <div class="patina-stage__swatch"></div>
          <h3>Years 5–10</h3>
          <p>Deep brown patina. Matte finish. Protective oxide layer fully formed.</p>
        </div>
        <div class="patina-stage">
          <div class="patina-stage__swatch"></div>
          <h3>Years 10–15+</h3>
          <p>Classic verdigris green. The signature copper finish. Permanent and protective.</p>
        </div>
      </div>

      <div class="prose reveal-up" style="margin-top: var(--space-lg);">
        <p>The patina is the protective layer — it shouldn't be cleaned off. Many Mississippi homeowners actually want to accelerate the patina for aesthetic reasons. We can apply a controlled chemical patina finish at install for homeowners who want the verdigris look from day one rather than waiting 10+ years.</p>
      </div>
    </div>
  </section>

  <!-- COST COMPARISON TABLE -->
  <section class="section section-alt">
    <div class="container">
      <div class="section-title reveal-up">
        <span class="eyebrow-label">Cost Comparison</span>
        <h2>Copper vs Aluminum vs <span class="text-accent">Steel.</span></h2>
        <span class="section-subtitle">the honest breakdown</span>
      </div>

      <div class="reveal-up" style="overflow-x:auto;">
        <table class="comparison-table">
          <thead>
            <tr>
              <th>Material</th>
              <th>Cost / LF Installed</th>
              <th>Service Life</th>
              <th>Maintenance</th>
              <th>Repair Availability</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><strong>Aluminum (.032)</strong></td>
              <td>$8–$14</td>
              <td>20–30 years</td>
              <td>Cleaning + occasional resealing</td>
              <td>High — any installer</td>
            </tr>
            <tr>
              <td><strong>Galvanized Steel</strong></td>
              <td>$10–$16</td>
              <td>20–30 years</td>
              <td>Rust treatment after year 10</td>
              <td>Medium</td>
            </tr>
            <tr class="col-highlight">
              <td><strong>Copper (Hand-Soldered)</strong></td>
              <td>$25–$40</td>
              <td>50–100 years</td>
              <td>Essentially none</td>
              <td>Specialist required</td>
            </tr>
          </tbody>
        </table>
      </div>

      <div class="prose reveal-up">
        <p>Copper is roughly 3x the cost of aluminum and lasts 3–5x longer. For homes you plan to keep, the lifetime cost of copper is actually lower than two aluminum replacement cycles. For luxury properties where the gutter system needs to match the architecture, copper is the only material that doesn't compromise.</p>
      </div>

      <div class="mid-cta-line reveal-up">
        Considering copper for a custom build or renovation? <a href="/contact/">Schedule a copper consultation</a> — we'll come on-site and walk through profile options, decorative details, and accurate cost ranges.
      </div>
    </div>
  </section>

  <!-- NAVY SPECIALTY SECTION -->
  <section class="section-lg section-dark" aria-label="Our copper specialty">
    <div class="section-divider section-divider--top" aria-hidden="true">
      <svg viewBox="0 0 1440 80" preserveAspectRatio="none">
        <path fill="#0F4C81" d="M0,0 Q360,80 720,40 T1440,40 L1440,80 L0,80 Z"/>
      </svg>
    </div>
    <svg class="floating-accent float-animate-slow" style="top: 25%; left: 4%; width: 130px; height: 175px; opacity: 0.08;" viewBox="0 0 60 80" aria-hidden="true">
      <path fill="#B87333" d="M30 0 C30 0 0 35 0 55 A30 25 0 0 0 60 55 C60 35 30 0 30 0 Z"/>
    </svg>

    <div class="container">
      <div class="about-grid">
        <div class="reveal-left">
          <span class="eyebrow-label" style="color: #D89A5C;">Our Specialty</span>
          <h2 style="color:#fff;">Why We've Been Mississippi's <span class="text-accent">Copper Specialist</span> Since 1996.</h2>
          <span class="section-subtitle" style="color: var(--color-accent);">thirty years of copperwork</span>
          <p style="color: rgba(255,255,255,0.92); margin-top: var(--space-md);">Mark Dungan and the Dun-Rite team trained on copper from the very beginning. Hand-soldering is a craft skill — taught by old-timers, learned over years on actual jobs, never picked up from a YouTube video. We've installed copper gutters on more historic and luxury Mississippi properties than any other regional specialist.</p>
          <p style="color: rgba(255,255,255,0.92);">Our fabrication shop maintains a full inventory of copper stock in 16 oz, 20 oz, and 24 oz weights, with brackets, hangers, and decorative endcaps available for custom matching. Architectural drawings welcome. Builder partnerships standard. Insurance coverage in place for every project.</p>
          <p style="color: rgba(255,255,255,0.92);">If your project deserves copper, you deserve a specialist who's been doing this for 30 years — not a general gutter installer learning on your house.</p>
        </div>

        <div class="about-image-stack reveal-right">
          <img src="https://i.imgur.com/a54eolx.jpeg" alt="Mediterranean estate with hand-installed copper gutters along roofline and copper accents by Dun-Rite Mississippi" class="about-image-primary" width="900" height="675" loading="lazy">
          <img src="https://i.imgur.com/OWQAw0g.jpeg" alt="Brick home with copper gutter system and copper standing-seam awning by Dun-Rite specialty work" class="about-image-secondary" width="600" height="500" loading="lazy">
        </div>
      </div>
    </div>

    <div class="section-divider section-divider--bottom" aria-hidden="true">
      <svg viewBox="0 0 1440 80" preserveAspectRatio="none">
        <path fill="#0F4C81" d="M0,40 Q360,0 720,40 T1440,40 L1440,0 L0,0 Z"/>
      </svg>
    </div>
  </section>

  <!-- PROCESS -->
  <section class="section">
    <div class="container">
      <div class="section-title reveal-up">
        <span class="eyebrow-label">Six-Step Process</span>
        <h2>How a <span class="text-accent">Copper Installation</span> Comes Together.</h2>
        <span class="section-subtitle">from drawing to soldered seam</span>
      </div>

      <div class="process-grid" style="grid-template-columns: repeat(3, 1fr);">
        <?php $icons = ["clipboard-pen","hammer","flame","anchor","gem","shield-check"]; ?>
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

  <!-- FAQ -->
  <section class="section section-alt">
    <div class="container">
      <div class="section-title reveal-up">
        <span class="eyebrow-label">Frequently Asked</span>
        <h2>Copper Gutter <span class="text-accent">Questions.</span></h2>
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
          <p>Standard aluminum installations using the same on-site forming process — without the copper specialty.</p>
          <span class="related-card__link">View Service →</span>
        </a>
        <a href="/services/custom-downspouts/" class="related-card reveal-up reveal-delay-2">
          <div class="related-card__icon"><i data-lucide="arrow-down-to-line"></i></div>
          <h3>Custom Downspouts</h3>
          <p>Round, decorative, oversized, and copper downspouts custom-fabricated to your home's profile.</p>
          <span class="related-card__link">View Service →</span>
        </a>
        <a href="/services/commercial-gutters/" class="related-card reveal-up reveal-delay-3">
          <div class="related-card__icon"><i data-lucide="building-2"></i></div>
          <h3>Commercial Gutters</h3>
          <p>Copper specialty work on commercial estate properties, historic restorations, and luxury developments.</p>
          <span class="related-card__link">View Service →</span>
        </a>
      </div>
    </div>
  </section>

  <section class="closing-cta" aria-label="Get a copper consultation">
    <svg class="floating-accent float-animate-slow" style="top: 18%; left: 6%; width: 150px; height: 200px; opacity: 0.08;" viewBox="0 0 60 80" aria-hidden="true">
      <path fill="#B87333" d="M30 0 C30 0 0 35 0 55 A30 25 0 0 0 60 55 C60 35 30 0 30 0 Z"/>
    </svg>
    <div class="closing-cta__inner reveal-up">
      <span class="section-subtitle" style="color: var(--color-accent);">Mark and the team</span>
      <h2>Ready to Make Copper <span class="text-accent">Permanent?</span></h2>
      <p>Free on-site consultation for copper gutter installations across Mississippi. Architects, builders, and homeowners welcome.</p>
      <div>
        <a href="/contact/" class="btn-primary">Request a Copper Consultation</a>
        <a href="tel:+16017501800" class="closing-cta__phone">Or Call (601) 750-1800</a>
      </div>
      <p class="closing-cta__meta">Mon–Fri 8AM–5PM · Madison, MS · Mississippi Licensed &amp; Insured</p>
    </div>
  </section>

</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
