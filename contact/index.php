<?php
/**
 * Dun-Rite — Contact (Full expanded form, no map)
 */

$pageTitle       = "Contact Dun-Rite Seamless Gutters | Madison, MS Estimates";
$pageDescription = "Get a free seamless gutter estimate from Dun-Rite Seamless Gutters in Madison, MS. Call (601) 750-1800 or submit our form. Same-day callbacks. Service across 14 Mississippi cities.";
$canonicalUrl    = "https://dunrite-gutters.com/contact/";
$ogImage         = "https://i.imgur.com/kRJ17by.jpeg";
$heroImage       = "https://i.imgur.com/kRJ17by.jpeg";
$currentPage     = "contact";

$cities = ["Brandon","Jackson","Canton","Madison","Pearl","Richland","Flowood","Florence","Gluckstadt","Bolton","Clinton","Terry","Ridgeland","Raymond"];
$serviceOptions = [
  'Seamless Gutter Installation',
  'Aluminum Gutters',
  'Copper Gutters',
  'Gutter Guards & Leaf Protection',
  'Gutter Cleaning',
  'Gutter Repair & Replacement',
  'Commercial Gutters',
  'Custom Downspouts',
  'Multiple services',
  'Not Sure / General Inquiry',
];

$contactFaqs = [
  ["q" => "How quickly will you respond after I submit?", "a" => "Same-day callback during business hours (Mon–Fri 8 AM – 5 PM). Submissions after hours or on weekends get a callback first thing the next business day."],
  ["q" => "Do you do estimates over the phone or by photos?", "a" => "We provide ballpark estimates over the phone for general scope, but every quote is finalized in person — gutter installation requires accurate measurements of your roofline that can't be done from photos alone."],
  ["q" => "What information should I have ready when I call?", "a" => "Your address, the type of work (new install, replacement, cleaning, repair), the number of stories on your home, and any specific concerns (storm damage, leak locations, etc.). We'll handle the rest."],
];

$schemaGraph = [
  "@context" => "https://schema.org",
  "@graph" => [
    [
      "@type"     => ["LocalBusiness", "RoofingContractor"],
      "@id"       => "https://dunrite-gutters.com/#business",
      "name"      => "Dun-Rite Seamless Gutters, Inc.",
      "url"       => "https://dunrite-gutters.com",
      "telephone" => "+16017501800",
      "email"     => "mark.dungan@yahoo.com",
      "address"   => [
        "@type"           => "PostalAddress",
        "streetAddress"   => "115 Cherrybrook Dr",
        "addressLocality" => "Madison",
        "addressRegion"   => "MS",
        "postalCode"      => "39110",
        "addressCountry"  => "US"
      ],
      "openingHoursSpecification" => [
        ["@type" => "OpeningHoursSpecification", "dayOfWeek" => ["Monday","Tuesday","Wednesday","Thursday","Friday"], "opens" => "08:00", "closes" => "17:00"]
      ],
    ],
    [
      "@type" => "ContactPage",
      "@id"   => $canonicalUrl . "#contactpage",
      "url"   => $canonicalUrl,
      "name"  => "Contact Dun-Rite Seamless Gutters",
    ],
    [
      "@type" => "BreadcrumbList",
      "itemListElement" => [
        ["@type" => "ListItem", "position" => 1, "name" => "Home", "item" => "https://dunrite-gutters.com/"],
        ["@type" => "ListItem", "position" => 2, "name" => "Contact", "item" => $canonicalUrl],
      ]
    ],
    [
      "@type" => "FAQPage",
      "mainEntity" => array_map(fn($f) => ["@type" => "Question", "name" => $f["q"], "acceptedAnswer" => ["@type" => "Answer", "text" => $f["a"]]], $contactFaqs)
    ],
    [
      "@type"        => "AggregateRating",
      "itemReviewed" => ["@id" => "https://dunrite-gutters.com/#business"],
      "ratingValue"  => "5.0", "reviewCount" => "27"
    ],
  ]
];
$schemaMarkup = '<script type="application/ld+json">' . json_encode($schemaGraph, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>';

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/nav.php'; ?>

<main id="main-content">

  <!-- HERO (60vh, no form — full form is below) -->
  <section class="hero hero--inner" aria-label="Contact hero" style="min-height: 60vh;">
    <img src="https://i.imgur.com/kRJ17by.jpeg" alt="Dun-Rite Seamless Gutters service truck on a Mississippi installation jobsite" class="hero-bg" width="1920" height="1080" loading="eager" fetchpriority="high">
    <div class="hero__inner" style="display:block; text-align:center; max-width: 720px;">
      <div class="hero__copy">
        <span class="eyebrow-label">Get Your Free Estimate</span>
        <h1>Let's Talk About <span class="text-accent">Your Gutters.</span></h1>
        <p class="hero__subhead" style="margin-left:auto; margin-right:auto;">Free on-site estimates across 14 Mississippi cities. Same-day callbacks. Most quotes scheduled within 48 hours of your first call.</p>
        <div class="hero__ctas" style="justify-content:center;">
          <a href="tel:+16017501800" class="btn-primary">Call (601) 750-1800</a>
          <a href="mailto:mark.dungan@yahoo.com" class="btn-secondary btn-on-dark">Email Mark</a>
        </div>
      </div>
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
        <li aria-current="page">Contact</li>
      </ol>
    </div>
  </nav>

  <!-- THE EXPANDED FORM -->
  <div class="contact-grid">

    <!-- Form column -->
    <div class="contact-form-card">
      <h2>Request Your Free Estimate</h2>
      <p class="form-intro">Fill out the form below and we'll respond within one business day. Required fields marked with *.</p>

      <form action="https://db.pageone.cloud/functions/v1/leads/dun-rite" method="POST" enctype="multipart/form-data" class="contact-form" novalidate>

        <!-- Formsubmit hidden fields -->
        <input type="hidden" name="_next" value="https://dunrite-gutters.com/thank-you/">
        <input type="hidden" name="_captcha" value="false">
        <input type="hidden" name="_honey" value="">
        <input type="hidden" name="_template" value="table">
        <input type="hidden" name="_subject" value="New Contact Form Submission – Dun-Rite Seamless Gutters (Full Form)">
        <input type="hidden" name="_cc" value="CustomerService@pageoneinsights.com">
        <input type="hidden" name="_source" value="<?php echo htmlspecialchars($_SERVER['REQUEST_URI'] ?? '/contact/'); ?>">

        <!-- Name -->
        <div class="form-group form-group--floating">
          <input type="text" id="contact-name" name="Name" placeholder=" " required autocomplete="name">
          <label for="contact-name">Full Name *</label>
        </div>

        <!-- Phone + Email row -->
        <div class="form-row">
          <div class="form-group form-group--floating">
            <input type="tel" id="contact-phone" name="Phone" placeholder=" " required autocomplete="tel" pattern="[0-9\-\(\)\s\+]{10,}">
            <label for="contact-phone">Phone *</label>
          </div>
          <div class="form-group form-group--floating">
            <input type="email" id="contact-email" name="Email" placeholder=" " required autocomplete="email">
            <label for="contact-email">Email *</label>
          </div>
        </div>

        <!-- Service Address -->
        <div class="form-group form-group--floating">
          <input type="text" id="contact-address" name="Service Address" placeholder=" " autocomplete="street-address">
          <label for="contact-address">Service Address (where the work would be done)</label>
        </div>

        <!-- City + Service row -->
        <div class="form-row">
          <div class="form-group form-group--select">
            <label for="contact-city" class="form-group__select-label">City</label>
            <select id="contact-city" name="City">
              <option value="">— Select a city —</option>
              <?php foreach ($cities as $city): ?>
                <option value="<?php echo htmlspecialchars($city); ?>"><?php echo htmlspecialchars($city); ?></option>
              <?php endforeach; ?>
              <option value="Other">Other</option>
            </select>
          </div>
          <div class="form-group form-group--select">
            <label for="contact-service" class="form-group__select-label">Service Needed *</label>
            <select id="contact-service" name="Service" required>
              <option value="">— Select a service —</option>
              <?php foreach ($serviceOptions as $opt): ?>
                <option value="<?php echo htmlspecialchars($opt); ?>"><?php echo htmlspecialchars($opt); ?></option>
              <?php endforeach; ?>
            </select>
          </div>
        </div>

        <!-- Preferred Contact Time -->
        <div class="form-group form-group--radio-group">
          <span class="form-group__select-label">Preferred Contact Time</span>
          <div class="radio-row">
            <label><input type="radio" name="Preferred Contact Time" value="Morning (8-12)"> Morning (8–12)</label>
            <label><input type="radio" name="Preferred Contact Time" value="Afternoon (12-5)"> Afternoon (12–5)</label>
            <label><input type="radio" name="Preferred Contact Time" value="Anytime" checked> Anytime</label>
          </div>
        </div>

        <!-- Source -->
        <div class="form-group form-group--select">
          <label for="contact-source" class="form-group__select-label">How Did You Hear About Us?</label>
          <select id="contact-source" name="How Heard">
            <option value="">— Select one —</option>
            <option value="Google Search">Google Search</option>
            <option value="Facebook">Facebook</option>
            <option value="Referral">Referral</option>
            <option value="Drove by truck">Drove by truck</option>
            <option value="BBB / HomeAdvisor">BBB / HomeAdvisor</option>
            <option value="Existing customer">Existing customer</option>
            <option value="Other">Other</option>
          </select>
        </div>

        <!-- Photo upload -->
        <div class="form-group form-group--file">
          <label for="contact-photos">Upload Photos (optional)</label>
          <input type="file" id="contact-photos" name="Photos[]" multiple accept=".jpg,.jpeg,.png,.heic">
          <span class="form-help">Photos of damage or your gutters · Max 5 files · 5MB each · JPG / PNG / HEIC</span>
        </div>

        <!-- Notes -->
        <div class="form-group form-group--floating">
          <textarea id="contact-notes" name="Message" placeholder=" " rows="4"></textarea>
          <label for="contact-notes">Brief Notes (optional)</label>
        </div>

        <!-- v6.1 TCPA consent -->
        <div class="form-consent">
          <label class="consent-checkbox">
            <input type="checkbox" name="consent" required>
            <span>I agree to the <a href="/privacy-policy/" target="_blank" rel="noopener">Privacy Policy</a> and <a href="/terms/" target="_blank" rel="noopener">Terms of Service</a>, and consent to be contacted by Dun-Rite Seamless Gutters by phone, text, or email regarding my inquiry. Message and data rates may apply. Consent is not a condition of purchase.</span>
          </label>
        </div>

        <!-- spam shield: signed render timestamp + JS interaction signal -->
        <?php $__ft_ts = (string) time(); ?>
        <input type="hidden" name="_ft" value="<?php echo $__ft_ts . '.' . hash_hmac('sha256', $__ft_ts, 'bac7714a8f41505ab12d75311ccbb11a6374e38b1a010d69111c84a652cfa0f3'); ?>">
        <input type="hidden" name="_js" value="" class="js-shield-field">
        <?php if (empty($GLOBALS['__js_shield'])) { $GLOBALS['__js_shield'] = 1; ?>
        <script>(function(){var d=document,f=function(){var i,e=d.querySelectorAll('.js-shield-field');for(i=0;i<e.length;i++)e[i].value='1';d.removeEventListener('pointerdown',f);d.removeEventListener('keydown',f);};d.addEventListener('pointerdown',f);d.addEventListener('keydown',f);})();</script>
        <?php } ?>
        <button type="submit" class="btn-primary" style="width:100%; padding: 14px 24px; font-size: 1rem; font-weight: 700;">Submit My Estimate Request</button>

        <span class="contact-form__trust">Mississippi licensed &amp; fully insured · Est. 1996 · We respond same-day on weekdays</span>

        <!-- File size validation -->
        <script>
          document.querySelector('input[type="file"]')?.addEventListener('change', function(e) {
            const maxSize = 5 * 1024 * 1024; // 5MB per file
            const maxFiles = 5;
            const files = e.target.files;
            if (files.length > maxFiles) {
              alert('Maximum ' + maxFiles + ' files. You selected ' + files.length + '.');
              e.target.value = '';
              return;
            }
            for (let f of files) {
              if (f.size > maxSize) {
                alert('File "' + f.name + '" is ' + (f.size/1024/1024).toFixed(1) + 'MB. Each file must be under 5MB.');
                e.target.value = '';
                return;
              }
            }
          });
        </script>

      </form>
    </div>

    <!-- Info card column -->
    <aside class="contact-info-card">
      <h3>Visit Our Office</h3>
      <div class="info-row">
        <i data-lucide="map-pin"></i>
        <span>115 Cherrybrook Dr<br>Madison, MS 39110</span>
      </div>
      <div class="info-row">
        <i data-lucide="phone"></i>
        <a href="tel:+16017501800">(601) 750-1800</a>
      </div>
      <div class="info-row">
        <i data-lucide="mail"></i>
        <a href="mailto:mark.dungan@yahoo.com">mark.dungan@yahoo.com</a>
      </div>
      <div class="info-row">
        <i data-lucide="clock"></i>
        <span>Mon–Fri 8 AM – 5 PM<br>Sat–Sun Closed</span>
      </div>

      <hr>

      <h4>Service Area</h4>
      <p style="font-size: 0.95rem; color: var(--color-text-light); margin-bottom: var(--space-sm);">We serve 14 Mississippi cities from our Madison HQ. Free travel within service area — no trip fees.</p>
      <a href="/service-areas/" style="color: var(--color-accent); font-weight: 600;">View All 14 Cities →</a>

      <hr>

      <h4>Connect</h4>
      <div style="display:flex; flex-wrap:wrap; gap: var(--space-xs);">
        <a href="https://www.facebook.com/dunritegutters/" target="_blank" rel="noopener" style="font-size: 0.9rem; color: var(--color-primary);">Facebook</a>
        <span style="color: var(--color-text-muted);">·</span>
        <a href="https://share.google/ILoTdINgp3QYNTw3" target="_blank" rel="noopener" style="font-size: 0.9rem; color: var(--color-primary);">Google</a>
        <span style="color: var(--color-text-muted);">·</span>
        <a href="https://www.yelp.com/biz/dun-rite-seamless-gutters-madison-6" target="_blank" rel="noopener" style="font-size: 0.9rem; color: var(--color-primary);">Yelp</a>
        <span style="color: var(--color-text-muted);">·</span>
        <a href="https://www.bbb.org/us/ms/madison/profile/gutters/dun-rite-seamless-gutters-0523-145212331" target="_blank" rel="noopener" style="font-size: 0.9rem; color: var(--color-primary);">BBB</a>
      </div>
    </aside>

  </div>

  <!-- CONTACT FAQs -->
  <section class="section section-alt" aria-label="Contact FAQs">
    <div class="container">
      <div class="section-title reveal-up">
        <span class="eyebrow-label">Before You Submit</span>
        <h2>Quick Answers About <span class="text-accent">Reaching Us.</span></h2>
      </div>

      <div class="faq-list">
        <?php foreach ($contactFaqs as $faq): ?>
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

  <!-- CLOSING CTA -->
  <section class="closing-cta" aria-label="Prefer to talk first">
    <div class="closing-cta__inner reveal-up">
      <span class="section-subtitle" style="color: var(--color-accent);">no form needed</span>
      <h2>Prefer to <span class="text-accent">Talk First?</span></h2>
      <p>No problem. Call (601) 750-1800 anytime during business hours. Mark or a senior team member is always available.</p>
      <div>
        <a href="tel:+16017501800" class="btn-primary">Call (601) 750-1800</a>
      </div>
      <p class="closing-cta__meta">Mon–Fri 8AM–5PM · Madison, MS · Mississippi Licensed &amp; Insured</p>
    </div>
  </section>

</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
