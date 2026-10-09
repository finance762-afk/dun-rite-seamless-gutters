<?php
/**
 * service-close.php — bottom of every service and city page: three related service cards
 * (required services component) and the closing call band.
 * Set before the include: $relatedServices (array of service slugs), optional $closingHeading, $closingText.
 */
$scRelated = $relatedServices ?? [];
$scHeading = $closingHeading ?? 'Ask Dun-Rite for a written quote';
$scText    = $closingText ?? ('Call ' . $phone . ' or send the form. The office answers ' . $businessHours . '.');
?>
<?php if ($scRelated): ?>
<section class="section section--tint" aria-labelledby="related-services-heading">
  <div class="container">
    <div class="section-head">
      <p class="eyebrow">What We Do</p>
      <h2 id="related-services-heading"><?php echo h($relatedHeading ?? 'Which other gutter services go with this one?'); ?></h2>
      <p class="hero-answer"><?php echo h($relatedText ?? ($siteName . ' is usually asked about these three services in the same visit. Each page lists the price range, the materials and what the crew does on site.')); ?></p>
    </div>
    <div class="services-grid services-grid--three">
      <?php echo dr_service_cards($scRelated); ?>
    </div>
  </div>
</section>
<?php endif; ?>
<section class="closing-cta">
  <span class="grain" aria-hidden="true"></span>
  <div class="container">
    <div>
      <h2><?php echo h($scHeading); ?></h2>
      <p><?php echo h($scText); ?></p>
    </div>
    <div class="actions">
      <a class="btn btn-accent btn-lg" href="/contact/" data-open-estimate>Request an estimate</a>
      <a class="btn btn-outline-white btn-lg" href="tel:+<?php echo h($phoneRaw); ?>"><?php echo icon('phone', 18); ?> Call <?php echo h($phone); ?></a>
    </div>
  </div>
</section>
