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

    <!-- spam shield: signed render timestamp + JS interaction signal -->
    <?php $__ft_ts = (string) time(); ?>
    <input type="hidden" name="_ft" value="<?php echo $__ft_ts . '.' . hash_hmac('sha256', $__ft_ts, 'bac7714a8f41505ab12d75311ccbb11a6374e38b1a010d69111c84a652cfa0f3'); ?>">
    <input type="hidden" name="_js" value="" class="js-shield-field">
    <?php if (empty($GLOBALS['__js_shield'])) { $GLOBALS['__js_shield'] = 1; ?>
    <script>(function(){var d=document,f=function(){var i,e=d.querySelectorAll('.js-shield-field');for(i=0;i<e.length;i++)e[i].value='1';d.removeEventListener('pointerdown',f);d.removeEventListener('keydown',f);};d.addEventListener('pointerdown',f);d.addEventListener('keydown',f);})();</script>
    <?php } ?>
    <?php if (empty($GLOBALS['__p1_consent_css'])) { $GLOBALS['__p1_consent_css'] = 1; ?>
    <style>
    .p1-consent{margin:14px 0;text-align:left}
    .p1-consent-set{border:0;margin:0;padding:0}
    .p1-consent-legend{font-size:13px;font-weight:600;padding:0;margin-bottom:6px}
    .p1-consent-item{display:flex;gap:8px;align-items:flex-start;margin-bottom:8px;font-size:12px;line-height:1.5;cursor:pointer}
    .p1-consent-item input{margin:2px 0 0;flex:0 0 auto;width:16px;height:16px;cursor:pointer}
    .p1-consent-line{display:flex;gap:8px;align-items:flex-start;font-size:12px;line-height:1.45;cursor:pointer}
    .p1-consent-line input{margin:2px 0 0;flex:0 0 auto;width:16px;height:16px;cursor:pointer}
    .p1-consent a{text-decoration:underline}
    </style>
    <?php } ?>
    <!-- TCPA consent — terms_accepted is REQUIRED by the leads endpoint -->
    <div class="p1-consent">
      <label class="p1-consent-line">
        <input type="checkbox" name="terms_accepted" value="yes" required>
        <span>I agree to the <a href="/terms/">Terms of Service</a> and <a href="/privacy-policy/">Privacy Policy</a> and consent to be contacted about my request. *</span>
      </label>
    </div>
    <input type="hidden" name="_consent_version" value="v2.1">
    <input type="hidden" name="_consent_page" value="<?php echo htmlspecialchars($_SERVER['REQUEST_URI'] ?? ''); ?>">
    <button type="submit" class="btn-primary hero-form__submit">Get My Free Estimate</button>

    <p class="hero-form__trust"><i data-lucide="shield-check"></i> Mississippi licensed &amp; fully insured · Est. 1996</p>
  </form>
</aside>
