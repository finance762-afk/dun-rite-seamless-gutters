<?php
/**
 * head.php — doctype, <head>, meta, OG, critical CSS, one JSON-LD @graph.
 * Pages set BEFORE the include (after requiring config.php):
 *   $pageTitle, $pageDescription, $currentPage
 * Optional: $schemaNodes (array of JSON-LD nodes), $heroPreload (image basename),
 *           $ogImage (file in /assets/images/), $noindex (bool)
 * $canonicalUrl is set per page as $siteUrl . '/path/' (computed from the request path if a page omits it).
 */
$pageTitle       = $pageTitle ?? ($siteName . ' | Madison, MS');
$pageDescription = $pageDescription ?? ($siteName . ' installs, repairs and cleans gutters in Madison, Jackson and 12 more central Mississippi cities. Call ' . $phone . '.');
$canonicalUrl    = $canonicalUrl ?? dr_canonical();   // pages set it from $siteUrl + path; this is the fallback
$ogImageUrl      = $siteUrl . '/assets/images/' . ($ogImage ?? $defaultOgImage);

/* Business node: full on the homepage, a short reference node elsewhere. */
$businessNode = [
    '@type'     => ['LocalBusiness', 'RoofingContractor'],
    '@id'       => $siteUrl . '/#business',
    'name'      => $siteName,
    'url'       => $siteUrl . '/',
    'telephone' => $phone,
    'email'     => $email,
    'image'     => $siteUrl . '/assets/images/' . $defaultOgImage,
    'logo'      => $siteUrl . '/assets/images/logo.jpg',
    'address'   => [
        '@type'           => 'PostalAddress',
        'streetAddress'   => $address['street'],
        'addressLocality' => $address['city'],
        'addressRegion'   => $address['state'],
        'postalCode'      => $address['zip'],
        'addressCountry'  => 'US',
    ],
];
if (($currentPage ?? '') === 'home') {
    $businessNode += [
        'alternateName' => ['Dun-Rite Gutters', 'Dunrite Gutters'],
        'description'   => $pageDescription,
        'foundingDate'  => (string) $yearEstablished,
        'founder'       => ['@type' => 'Person', 'name' => $ownerName],
        'hasMap'        => $gbpUrl,
        'openingHoursSpecification' => [[
            '@type'     => 'OpeningHoursSpecification',
            'dayOfWeek' => $businessHoursSchema['days'],
            'opens'     => $businessHoursSchema['opens'],
            'closes'    => $businessHoursSchema['closes'],
        ]],
        'areaServed' => array_map(fn($hdCity) => ['@type' => 'City', 'name' => $hdCity . ', ' . $address['state']], $serviceAreas),
        'sameAs'     => array_values($socialLinks),
        'makesOffer' => array_map(fn($hdSvc) => ['@type' => 'Offer', 'itemOffered' => ['@type' => 'Service', 'name' => $hdSvc['name'], 'url' => $siteUrl . '/services/' . $hdSvc['slug'] . '/']], $services),
    ];
}
$schemaGraph = ['@context' => 'https://schema.org', '@graph' => array_merge([$businessNode], $schemaNodes ?? [])];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo h($pageTitle); ?></title>
<meta name="description" content="<?php echo h($pageDescription); ?>">
<link rel="canonical" href="<?php echo h($canonicalUrl); ?>">
<?php if (!empty($noindex)): ?>
<meta name="robots" content="noindex, nofollow">
<?php else: ?>
<meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
<?php endif; ?>
<?php if (!empty($gscVerification)): ?>
<meta name="google-site-verification" content="<?php echo h($gscVerification); ?>">
<?php endif; ?>
<meta name="theme-color" content="#01447B">

<meta property="og:type" content="website">
<meta property="og:title" content="<?php echo h($pageTitle); ?>">
<meta property="og:description" content="<?php echo h($pageDescription); ?>">
<meta property="og:url" content="<?php echo h($canonicalUrl); ?>">
<meta property="og:image" content="<?php echo h($ogImageUrl); ?>">
<meta property="og:site_name" content="<?php echo h($siteName); ?>">
<meta property="og:locale" content="en_US">

<link rel="icon" type="image/png" sizes="32x32" href="/assets/images/logo-favicon-32.png">
<link rel="apple-touch-icon" href="/assets/images/logo-touch-180.png">

<!-- Self-hosted fonts: preload only the above-the-fold heading face -->
<link rel="preload" href="/assets/fonts/playfair-display.woff2" as="font" type="font/woff2" crossorigin>
<?php if (!empty($heroPreload) && ($hdPreloadSet = dr_preload_srcset($heroPreload)) !== ''): ?>
<link rel="preload" as="image" type="image/avif" imagesrcset="<?php echo h($hdPreloadSet); ?>" imagesizes="100vw" fetchpriority="high">
<?php endif; ?>

<!-- Critical CSS inline; framework.css loads without blocking render -->
<style><?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/critical.css'; ?></style>
<link rel="preload" href="/assets/css/framework.css?v=<?php echo h($cssVersion); ?>" as="style" onload="this.onload=null;this.rel='stylesheet'">
<noscript><link rel="stylesheet" href="/assets/css/framework.css?v=<?php echo h($cssVersion); ?>"></noscript>

<script type="application/ld+json"><?php echo json_encode($schemaGraph, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE); ?></script>
<?php require_once __DIR__ . '/edit-mode.php'; ?>
<?php /* GA4 loads on the launch domain only, so local renders and the noindexed preview host do not send pageviews. */
$hdHost = strtolower((string) ($_SERVER['HTTP_HOST'] ?? ''));
$hdIsLive = !preg_match('/^(127\.0\.0\.1|localhost)(:\d+)?$|^preview-[a-z0-9-]+\.pageone\.cloud$/', $hdHost);
if ($hdIsLive && !empty($googleAnalyticsId) && preg_match('/^G-[A-Z0-9]{6,}$/', $googleAnalyticsId) && strpos($googleAnalyticsId, 'XXXX') === false): ?>
<!-- Google Analytics 4 (ga4-fleet) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo h($googleAnalyticsId); ?>"></script>
<script>window.dataLayer=window.dataLayer||[];function gtag(){dataLayer.push(arguments);}gtag('js',new Date());gtag('config','<?php echo h($googleAnalyticsId); ?>');</script>
<?php endif; ?>
</head>
<body>
