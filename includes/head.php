<?php
/**
 * Dun-Rite Seamless Gutters, Inc. — head.php
 * Required PHP variables before include:
 *   $pageTitle, $pageDescription, $canonicalUrl, $ogImage, $currentPage
 * Optional:
 *   $schemaMarkup, $heroImage, $useSwiper, $useTilt, $useTyped
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Google Search Console Verification -->
<meta name="google-site-verification" content="GSC_VERIFICATION_CODE_HERE" />

<!-- Google Analytics 4 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-XXXXXXXXXX"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-XXXXXXXXXX', {
    'send_page_view': true,
    'anonymize_ip': true
  });
</script>

<title><?php echo htmlspecialchars($pageTitle ?? 'Dun-Rite Seamless Gutters, Inc.'); ?></title>
<meta name="description" content="<?php echo htmlspecialchars($pageDescription ?? ''); ?>">
<link rel="canonical" href="<?php echo htmlspecialchars($canonicalUrl ?? ''); ?>">

<?php if (!empty($noIndex)): ?>
<meta name="robots" content="noindex, nofollow">
<?php else: ?>
<meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
<?php endif; ?>
<meta name="author" content="Dun-Rite Seamless Gutters, Inc.">
<meta name="theme-color" content="#0F4C81">

<!-- Open Graph -->
<meta property="og:title" content="<?php echo htmlspecialchars($pageTitle ?? ''); ?>">
<meta property="og:description" content="<?php echo htmlspecialchars($pageDescription ?? ''); ?>">
<meta property="og:url" content="<?php echo htmlspecialchars($canonicalUrl ?? ''); ?>">
<meta property="og:image" content="<?php echo htmlspecialchars($ogImage ?? 'https://i.imgur.com/xRVJ7rY.jpeg'); ?>">
<meta property="og:type" content="website">
<meta property="og:site_name" content="Dun-Rite Seamless Gutters, Inc.">
<meta property="og:locale" content="en_US">

<!-- Favicon -->
<link rel="icon" type="image/jpeg" href="https://i.imgur.com/xRVJ7rY.jpeg">
<link rel="apple-touch-icon" href="https://i.imgur.com/xRVJ7rY.jpeg">

<!-- Preconnect / DNS prefetch -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="dns-prefetch" href="https://unpkg.com">
<link rel="dns-prefetch" href="https://i.imgur.com">
<link rel="dns-prefetch" href="https://formsubmit.co">
<link rel="dns-prefetch" href="https://cdn.jsdelivr.net">
<link rel="dns-prefetch" href="https://www.googletagmanager.com">

<!-- Google Fonts (3-font system) -->
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500;600&family=Playfair+Display:ital,wght@0,500;0,700;1,500;1,700&family=Source+Sans+3:wght@400;500;600;700&display=swap" rel="stylesheet">

<!-- Preload heading font for LCP -->
<link rel="preload" as="font" type="font/woff2" href="https://fonts.gstatic.com/s/playfairdisplay/v37/nuFvD-vYSZviVYUb_rj3ij__anPXJzDwcbmjWBN2PKdFvUDQ.woff2" crossorigin>

<?php if (!empty($heroImage)): ?>
<!-- Preload hero image for LCP -->
<link rel="preload" as="image" href="<?php echo htmlspecialchars($heroImage); ?>">
<?php endif; ?>

<!-- Stylesheet -->
<link rel="stylesheet" href="/assets/css/styles.css?v=9">

<?php if (!empty($useSwiper)): ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
<?php endif; ?>

<!-- JSON-LD Schema -->
<?php if (!empty($schemaMarkup)) echo $schemaMarkup; ?>
</head>
<body>
<a class="skip-link" href="#main-content">Skip to content</a>
