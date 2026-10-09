<?php
/** Contact — full estimate form (Page One leads endpoint), NAP, hours, directions */
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';

$pageTitle       = 'Contact Dun-Rite Seamless Gutters | Madison, MS';
$pageDescription = 'Contact Dun-Rite Seamless Gutters, Inc. at 115 Cherrybrook Dr, Madison, MS. Call (601) 750-1800, Mon–Fri 8 AM – 5 PM, or request a written gutter estimate online.';
$currentPage     = 'contact';
$canonicalUrl    = $siteUrl . '/contact/';
$pageType        = 'contact';

$schemaNodes = [
    dr_breadcrumb_node(['Contact' => '/contact/']),
    ['@type' => 'ContactPage', 'url' => $siteUrl . '/contact/', 'name' => 'Contact ' . $siteName, 'about' => ['@id' => $siteUrl . '/#business']],
];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>
<main id="main-content">

  <section class="hero hero--interior">
    <span class="grain" aria-hidden="true"></span>
    <div class="container">
      <div class="hero-text">
        <?php echo dr_breadcrumb(['Contact' => null]); ?>
        <p class="hero-eyebrow">Madison, MS &middot; Mon–Fri 8 AM – 5 PM</p>
        <h1>Contact Dun-Rite Seamless Gutters in Madison, MS</h1>
        <p class="hero-answer">Dun-Rite Seamless Gutters, Inc. is a gutter installer at 115 Cherrybrook Dr in Madison, Mississippi. Call (601) 750-1800 during office hours or send the form below; the office calls back the same business day, and most estimate visits are scheduled within 48 hours.</p>
        <div class="hero-actions">
          <a class="btn btn-accent btn-lg" href="tel:+<?php echo h($phoneRaw); ?>"><?php echo icon('phone', 18); ?> Call <?php echo h($phone); ?></a>
          <a class="btn btn-secondary btn-lg" href="mailto:<?php echo h($email); ?>"><?php echo icon('mail', 18); ?> Email the office</a>
        </div>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="container estimate">
      <div>
        <div class="section-head">
          <p class="eyebrow">Written estimates</p>
          <h2>Request a gutter estimate</h2>
          <p>Tell Dun-Rite what you need and where the property is. Fields marked * are required.</p>
        </div>
        <form class="contact-form" action="<?php echo h($formAction); ?>" method="POST">
          <?php echo p1_lead_hidden_fields('contact'); ?>
          <div class="form-grid">
            <div class="field full"><label for="contact-name">Full name *</label><input id="contact-name" type="text" name="name" autocomplete="name" required></div>
            <div class="field"><label for="contact-phone">Phone *</label><input id="contact-phone" type="tel" name="phone" autocomplete="tel" required></div>
            <div class="field"><label for="contact-email">Email *</label><input id="contact-email" type="email" name="email" autocomplete="email" required></div>
            <div class="field full"><label for="contact-street">Property address</label><input id="contact-street" type="text" name="address_street" autocomplete="street-address"></div>
            <div class="field"><label for="contact-city">City</label>
              <select id="contact-city" name="address_city">
                <option value="">Select a city</option>
                <?php foreach ($serviceAreas as $ctCity): ?>
                <option value="<?php echo h($ctCity); ?>"><?php echo h($ctCity); ?></option>
                <?php endforeach; ?>
                <option value="Other">Other</option>
              </select>
            </div>
            <div class="field"><label for="contact-service">Service needed</label><select id="contact-service" name="service"><?php echo p1_service_options(); ?></select></div>
            <input type="hidden" name="address_state" value="MS">
            <div class="field full"><label for="contact-message">What is going on with the gutters?</label><textarea id="contact-message" name="message" rows="4"></textarea></div>
          </div>

          <fieldset class="form-consent-fieldset">
            <legend class="form-consent-legend">Communication consent</legend>
            <label class="form-consent-item">
              <input type="checkbox" name="email_opt_in" value="yes">
              <span class="consent-label"><strong>Email updates (optional):</strong> I agree to receive emails from <?php echo h($siteName); ?> about my inquiry, services, promotions and news. I can unsubscribe at any time via the link in any email or by emailing <?php echo h($contactEmail); ?>. Message frequency varies.</span>
            </label>
            <label class="form-consent-item">
              <input type="checkbox" name="sms_opt_in" value="yes">
              <span class="consent-label"><strong>SMS/text messages (optional):</strong> I agree to receive text messages from <?php echo h($siteName); ?> at the phone number I provided. Message types may include appointment reminders, service updates and promotional offers. Message frequency varies. Message and data rates may apply. Reply STOP to unsubscribe, HELP for help. <strong>Consent is not a condition of purchase.</strong></span>
            </label>
            <label class="form-consent-item form-consent-required">
              <input type="checkbox" name="terms_accepted" value="yes" required>
              <span class="consent-label">I have read and agree to the <a href="/privacy-policy/" target="_blank" rel="noopener">Privacy Policy</a> and <a href="/terms/" target="_blank" rel="noopener">Terms of Service</a>. *</span>
            </label>
          </fieldset>

          <button type="submit" class="btn btn-accent btn-lg">Send my estimate request</button>
        </form>
      </div>

      <aside class="page-rail" aria-label="Office details">
        <div class="rail-card">
          <h3>Office</h3>
          <div class="nap">
            <div><?php echo icon('map-pin', 18); ?><span><?php echo h($address['street']); ?><br><?php echo h($address['city']); ?>, <?php echo h($address['state']); ?> <?php echo h($address['zip']); ?></span></div>
            <div><?php echo icon('phone', 18); ?><a href="tel:+<?php echo h($phoneRaw); ?>"><?php echo h($phone); ?></a></div>
            <div><?php echo icon('mail', 18); ?><a href="mailto:<?php echo h($email); ?>"><?php echo h($email); ?></a></div>
            <div><?php echo icon('clock', 18); ?><span>Mon–Fri 8 AM – 5 PM<br>Sat–Sun Closed</span></div>
          </div>
          <a class="btn btn-secondary" href="<?php echo h($directionsUrl); ?>" target="_blank" rel="noopener"><?php echo icon('route', 18); ?> Get directions</a>
        </div>
        <div class="rail-card rail-card--tint">
          <h3>Service area</h3>
          <p>14 cities within about 30 miles of Madison, with no travel fees.</p>
          <a href="/service-areas/">Check your town</a>
        </div>
        <div class="rail-card">
          <h3>Find Dun-Rite online</h3>
          <ul>
            <?php foreach ($socialLinks as $ctLabel => $ctUrl): ?>
            <li><a href="<?php echo h($ctUrl); ?>" target="_blank" rel="noopener"><?php echo h($ctLabel); ?></a></li>
            <?php endforeach; ?>
          </ul>
        </div>
      </aside>
    </div>
  </section>

  <section class="section section--tint">
    <div class="container split">
      <div class="about-copy">
        <p class="eyebrow">After you send it</p>
        <h2>What happens after you contact Dun-Rite?</h2>
        <p>After you contact Dun-Rite Seamless Gutters, Inc., the office calls you back during business hours to set an estimate visit. Most visits are scheduled within 48 hours. Nothing is charged for the visit or the written quote.</p>
        <ol class="next-steps">
          <li><strong>A callback</strong>The office returns your call or form the same business day, Monday to Friday.</li>
          <li><strong>An on-site visit</strong>The roofline is measured and the water flow off the roof is checked.</li>
          <li><strong>A written quote</strong>You receive the price in writing, with no obligation. Mark Dungan personally inspects every estimate.</li>
        </ol>
      </div>
      <div class="about-copy">
        <p class="eyebrow">Before you call</p>
        <h2>What should you have ready when you call?</h2>
        <p>Have three things ready when you call Dun-Rite: the property address, whether the house is one story or two, and what the gutters are doing wrong. Those are the details that set an installation price, along with the downspout count, which is worked out on site.</p>
        <p>If you already know what you need, the <a href="/services/">services page</a> lists typical prices for each job, and the <a href="/faq/">gutter FAQ</a> covers scheduling, rain delays and warranties.</p>
      </div>
    </div>
  </section>

</main>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
