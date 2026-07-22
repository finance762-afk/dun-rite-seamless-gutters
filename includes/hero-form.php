<?php
/**
 * Hero Contact Form — Reusable Component
 *
 * Optional variables (set BEFORE include):
 *   $preselectedService — string: matching dropdown option value to pre-select
 *                         (e.g., "Copper Gutters", "Gutter Cleaning", "Not Sure / General Inquiry")
 *   $heroFormHeading    — string: form card heading (default: "Get Your Free Estimate")
 *   $heroFormSubheading — string: small text under heading (default below)
 *
 * Form is wrapped in .hero-form-card and submits to Formsubmit.co
 * Includes v6.1 TCPA consent checkbox above submit button.
 */
$preselectedService = $preselectedService ?? '';
$heroFormHeading    = $heroFormHeading    ?? 'Get Your Free Estimate';
$heroFormSubheading = $heroFormSubheading ?? 'Same-day callback. Most quotes scheduled within 48 hours.';

$serviceOptions = [
  'Not Sure / General Inquiry',
  'Seamless Gutter Installation',
  'Aluminum Gutters',
  'Copper Gutters',
  'Gutter Guards & Leaf Protection',
  'Gutter Cleaning',
  'Gutter Repair & Replacement',
  'Commercial Gutters',
  'Custom Downspouts',
];
?>
<aside class="hero-form-card" aria-labelledby="hero-form-heading">
  <h2 id="hero-form-heading" class="hero-form-card__heading"><?php echo htmlspecialchars($heroFormHeading); ?></h2>
  <p class="hero-form-card__sub"><?php echo htmlspecialchars($heroFormSubheading); ?></p>

  <form action="https://db.pageone.cloud/functions/v1/leads/dun-rite" method="POST" class="hero-form" novalidate>
    <!-- Formsubmit hidden fields -->
    <input type="hidden" name="_next" value="https://dunrite-gutters.com/thank-you/">
    <input type="hidden" name="_captcha" value="false">
    <input type="hidden" name="_honey" value="">
    <input type="hidden" name="_template" value="table">
    <input type="hidden" name="_subject" value="New Contact Form Submission – Dun-Rite Seamless Gutters">
    <input type="hidden" name="_cc" value="CustomerService@pageoneinsights.com">
    <input type="hidden" name="_source" value="<?php echo htmlspecialchars($_SERVER['REQUEST_URI'] ?? '/'); ?>">

    <div class="form-group form-group--floating">
      <input type="text" id="hero-name" name="Name" placeholder=" " required autocomplete="name">
      <label for="hero-name">Full Name *</label>
    </div>

    <div class="form-row">
      <div class="form-group form-group--floating">
        <input type="tel" id="hero-phone" name="Phone" placeholder=" " required autocomplete="tel" pattern="[0-9\-\(\)\s\+]{10,}">
        <label for="hero-phone">Phone *</label>
      </div>
      <div class="form-group form-group--floating">
        <input type="email" id="hero-email" name="Email" placeholder=" " required autocomplete="email">
        <label for="hero-email">Email *</label>
      </div>
    </div>

    <div class="form-group form-group--select">
      <label for="hero-service" class="form-group__select-label">Service Needed</label>
      <select id="hero-service" name="Service" required>
        <?php foreach ($serviceOptions as $opt): ?>
          <option value="<?php echo htmlspecialchars($opt); ?>"<?php if ($preselectedService === $opt) echo ' selected'; ?>><?php echo htmlspecialchars($opt); ?></option>
        <?php endforeach; ?>
      </select>
    </div>

    <div class="form-group form-group--floating">
      <textarea id="hero-message" name="Message" placeholder=" " rows="3"></textarea>
      <label for="hero-message">Brief Notes (optional)</label>
    </div>

    <!-- v6.1 TCPA Consent -->
    <div class="form-consent">
      <label class="consent-checkbox">
        <input type="checkbox" name="consent" required>
        <span>I agree to the <a href="/privacy-policy/" target="_blank" rel="noopener">Privacy Policy</a> and <a href="/terms/" target="_blank" rel="noopener">Terms of Service</a>, and consent to be contacted by Dun-Rite Seamless Gutters by phone, text, or email regarding my inquiry. Message and data rates may apply. Consent is not a condition of purchase.</span>
      </label>
    </div>

    <button type="submit" class="btn-primary hero-form__submit">Get My Free Estimate</button>

    <p class="hero-form__trust"><i data-lucide="shield-check"></i> Mississippi licensed &amp; fully insured · Est. 1996</p>
  </form>
</aside>
