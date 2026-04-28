<?php
/**
 * Dun-Rite — Cookie Policy
 */

$pageTitle       = "Cookie Policy | Dun-Rite Seamless Gutters";
$pageDescription = "How dunrite-gutters.com uses cookies and similar tracking technologies. Disclosures for Google Analytics, Google Fonts, and third-party services.";
$canonicalUrl    = "https://dunrite-gutters.com/cookie-policy/";
$ogImage         = "https://i.imgur.com/xRVJ7rY.jpeg";
$heroImage       = "https://i.imgur.com/lHGkpv5.jpeg";
$currentPage     = "cookie-policy";

$companyName       = "Dun-Rite Seamless Gutters, Inc.";
$companyEmail      = "mark.dungan@yahoo.com";
$companyPhone      = "(601) 750-1800";
$companyAddress    = "115 Cherrybrook Dr, Madison, MS 39110";
$lastUpdated       = date('F j, Y');

$schemaGraph = [
  "@context" => "https://schema.org",
  "@graph" => [
    [
      "@type" => "WebPage",
      "@id"   => $canonicalUrl . "#webpage",
      "url"   => $canonicalUrl,
      "name"  => $pageTitle,
      "description" => $pageDescription,
    ],
    [
      "@type" => "BreadcrumbList",
      "itemListElement" => [
        ["@type" => "ListItem", "position" => 1, "name" => "Home", "item" => "https://dunrite-gutters.com/"],
        ["@type" => "ListItem", "position" => 2, "name" => "Cookie Policy", "item" => $canonicalUrl],
      ]
    ],
  ]
];
$schemaMarkup = '<script type="application/ld+json">' . json_encode($schemaGraph, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>';

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/nav.php'; ?>

<main id="main-content">

  <section class="hero hero--inner hero--legal" aria-label="Cookie Policy">
    <img src="https://i.imgur.com/lHGkpv5.jpeg" alt="Brick stucco Madison MS home — Dun-Rite Seamless Gutters" class="hero-bg" width="1920" height="1080" loading="eager" fetchpriority="high">
    <div class="hero__inner">
      <div class="hero__copy">
        <span class="eyebrow-label">Legal</span>
        <h1>Cookie Policy</h1>
        <span class="section-subtitle">what we track and why</span>
        <p class="hero__phone" style="opacity: 0.8;">Last Updated: <?php echo $lastUpdated; ?></p>
      </div>
    </div>
  </section>

  <nav class="breadcrumb" aria-label="Breadcrumb">
    <div class="container">
      <ol>
        <li><a href="/">Home</a></li>
        <li class="breadcrumb-sep" aria-hidden="true">›</li>
        <li aria-current="page">Cookie Policy</li>
      </ol>
    </div>
  </nav>

  <article class="legal-prose">

    <h2>1. Introduction</h2>
    <p>This Cookie Policy explains how <?php echo $companyName; ?> uses cookies and similar tracking technologies on dunrite-gutters.com.</p>

    <h2>2. What Are Cookies</h2>
    <p>Cookies are small text files placed on your device by websites you visit. They help websites remember information about your visit (preferences, login state, browsing history) so the site can provide a smoother experience and gather basic analytics.</p>

    <h2>3. Cookies We Use</h2>

    <h3>A. Strictly Necessary Cookies</h3>
    <p>These cookies are required for the site to function and cannot be disabled.</p>
    <ul>
      <li><strong>PHPSESSID</strong> — session cookie used to maintain page state during your visit. Expires when you close your browser.</li>
    </ul>

    <h3>B. Analytics Cookies</h3>
    <p>We use Google Analytics 4 to understand how visitors use our site. These cookies are anonymous and aggregated.</p>
    <ul>
      <li><strong>_ga, _ga_*, _ga_XXXXXXXX</strong> — Google Analytics 4 cookies for anonymous usage statistics (page views, traffic sources, device types, time on page).</li>
      <li>We anonymize IP addresses before they reach Google.</li>
      <li>Opt-out: install the <a href="https://tools.google.com/dlpage/gaoptout" target="_blank" rel="noopener">Google Analytics Opt-Out Browser Add-on</a>.</li>
    </ul>

    <h3>C. Functional Cookies (Third-Party Origins)</h3>
    <p>Our site loads resources from these third-party services, which may set their own cookies governed by their respective privacy policies:</p>
    <ul>
      <li><strong>Google Fonts</strong> (fonts.googleapis.com, fonts.gstatic.com) — for site typography.</li>
      <li><strong>Lucide Icons</strong> (unpkg.com) — for site icons.</li>
      <li><strong>Imgur</strong> (i.imgur.com) — for hosted images.</li>
      <li><strong>Formsubmit.co</strong> — for processing contact form submissions (only when you submit a form).</li>
    </ul>

    <h2>4. How to Control Cookies</h2>
    <ul>
      <li>Most browsers allow you to refuse cookies via settings. Check your browser's documentation: Chrome, Firefox, Safari, Edge.</li>
      <li>Disabling analytics cookies will not affect site functionality.</li>
      <li>Disabling strictly necessary cookies may break form submissions and page navigation.</li>
      <li>Browser-level "Do Not Track" signals are honored where technically feasible.</li>
    </ul>

    <h2>5. Do Not Track</h2>
    <p>We honor browser Do Not Track (DNT) signals where technically feasible. We do not currently track users for advertising or remarketing purposes.</p>

    <h2>6. California Residents</h2>
    <p>California residents have specific rights under the California Consumer Privacy Act (CCPA) regarding cookies and tracking technologies. See our <a href="/privacy-policy/#ccpa-rights">Privacy Policy California Residents section</a> for full disclosure.</p>

    <h2>7. Changes to This Policy</h2>
    <p>We may update this Cookie Policy. The "Last Updated" date will reflect changes. Material changes will be prominently posted.</p>

    <h2>8. Contact Us</h2>
    <p>Questions about cookies or tracking:</p>
    <p>
      <strong><?php echo $companyName; ?></strong><br>
      Email: <a href="mailto:<?php echo $companyEmail; ?>"><?php echo $companyEmail; ?></a><br>
      Phone: <a href="tel:+16017501800"><?php echo $companyPhone; ?></a><br>
      Address: <?php echo $companyAddress; ?>
    </p>

  </article>

</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
