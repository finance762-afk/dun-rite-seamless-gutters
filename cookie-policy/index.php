<?php
/** Legal page — Cookie Policy (text unchanged from the v6.1 build; chrome migrated to v7) */
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';

$pageTitle       = "Cookie Policy | Dun-Rite Seamless Gutters";
$pageDescription = "How dunrite-gutters.com uses cookies and similar tracking technologies. Disclosures for Google Analytics and the third-party services this site uses.";
$currentPage     = 'cookie-policy';
$canonicalUrl    = $siteUrl . '/cookie-policy/';
$pageType        = 'other';

$companyName       = "Dun-Rite Seamless Gutters, Inc.";
$companyEmail      = "mark.dungan@yahoo.com";
$companyPhone      = "(601) 750-1800";
$companyAddress    = "115 Cherrybrook Dr, Madison, MS 39110";
$lastUpdated       = date('F j, Y');

$schemaNodes = [
    ['@type' => 'WebPage', '@id' => $siteUrl . '/cookie-policy/#webpage', 'url' => $siteUrl . '/cookie-policy/', 'name' => $pageTitle, 'description' => $pageDescription],
    dr_breadcrumb_node(['Cookie Policy' => '/cookie-policy/']),
];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>
<main id="main-content">

  <section class="hero hero--legal">
    <div class="container">
      <?php echo dr_breadcrumb(['Cookie Policy' => null]); ?>
      <p class="eyebrow">Legal</p>
      <h1>Cookie Policy</h1>
      <p>Last Updated: <?php echo $lastUpdated; ?></p>
    </div>
  </section>

  <section class="section">
    <div class="container">
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
      <li><strong>p1_ft</strong> — first-party cookie set by this site, kept for 30 days. It records the first page you landed on, the referring site, any campaign tags in the link and your device type, so that a form you submit can be matched to how you found us. It is not shared with advertisers.</li>
      <li><strong>_ga, _ga_*, _ga_XXXXXXXX</strong> — Google Analytics 4 cookies for anonymous usage statistics (page views, traffic sources, device types, time on page).</li>
      <li>We anonymize IP addresses before they reach Google.</li>
      <li>Opt-out: install the <a href="https://tools.google.com/dlpage/gaoptout" target="_blank" rel="noopener">Google Analytics Opt-Out Browser Add-on</a>.</li>
    </ul>

    <h3>C. Functional Cookies (Third-Party Origins)</h3>
    <p>Fonts, icons and images on this site are served from our own domain and set no cookies. Our site uses this third-party service, which is governed by its own privacy policy:</p>
    <ul>
      <li><strong>Page One Insights lead endpoint</strong> (db.pageone.cloud) — processes contact form submissions on our behalf (only when you submit a form).</li>
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
    </div>
  </section>

</main>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
