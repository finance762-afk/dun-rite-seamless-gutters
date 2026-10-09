<?php
/**
 * hero-form.php — compact estimate card for the hero of home, service and city pages.
 * Optional, set before the include:
 *   $heroFormService  preselects the service dropdown (exact service name from config.php)
 *   $heroFormHeading  card heading
 * On phones the card is hidden by framework.css and the "Request an estimate" button
 * (class .hero-form-open) opens the same form in the footer's <dialog>.
 */
$hfHeading = $heroFormHeading ?? 'Request a written estimate';
$hfService = $heroFormService ?? '';
?>
<aside class="hero-form-card" aria-labelledby="hero-form-heading">
  <h2 id="hero-form-heading"><?php echo h($hfHeading); ?></h2>
  <p class="hero-form-tagline">Estimates are free: <?php echo h($shortName); ?> measures on site and gives you a written quote. Most visits are scheduled within 48 hours.</p>
  <?php echo dr_lead_form('hero', ['service' => $hfService]); ?>
  <p class="form-footnote">Prefer to talk? Call <a href="tel:+<?php echo h($phoneRaw); ?>"><?php echo h($phone); ?></a>, <?php echo h($businessHours); ?>.</p>
</aside>
