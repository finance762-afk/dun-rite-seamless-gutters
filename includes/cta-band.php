<?php
/**
 * cta-band.php — mid-page estimate band with the compact form (about, FAQ and hub pages).
 * Optional before the include: $ctaBandHeading, $ctaBandText, $ctaBandService.
 */
$cbHeading = $ctaBandHeading ?? 'Tell Mark about your gutters';
$cbText    = $ctaBandText ?? ($siteName . ' measures on site and puts the price in writing. Send the form and the office calls you back during business hours, ' . $businessHours . '.');
?>
<section class="cta-band on-dark" aria-labelledby="cta-band-heading">
  <span class="grain" aria-hidden="true"></span>
  <div class="container cta-band__grid">
    <div class="cta-band__copy">
      <p class="eyebrow">Written estimates</p>
      <h2 id="cta-band-heading"><?php echo h($cbHeading); ?></h2>
      <p><?php echo h($cbText); ?></p>
      <p><a class="link-call" href="tel:+<?php echo h($phoneRaw); ?>"><?php echo icon('phone', 18); ?> <?php echo h($phone); ?></a></p>
    </div>
    <div class="hero-form-card cta-band__card">
      <?php echo dr_lead_form('cta-band', ['service' => $ctaBandService ?? '']); ?>
    </div>
  </div>
</section>
