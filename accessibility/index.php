<?php
/**
 * Dun-Rite — Accessibility Statement
 */

$pageTitle       = "Accessibility Statement | Dun-Rite Seamless Gutters";
$pageDescription = "Dun-Rite Seamless Gutters' commitment to accessibility. WCAG 2.1 Level AA conformance and feedback channel.";
$canonicalUrl    = "https://dunrite-gutters.com/accessibility/";
$ogImage         = "https://i.imgur.com/xRVJ7rY.jpeg";
$heroImage       = "https://i.imgur.com/lHGkpv5.jpeg";
$currentPage     = "accessibility";

$companyName       = "Dun-Rite Seamless Gutters, Inc.";
$companyEmail      = "mark.dungan@yahoo.com";
$companyPhone      = "(601) 750-1800";
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
        ["@type" => "ListItem", "position" => 2, "name" => "Accessibility", "item" => $canonicalUrl],
      ]
    ],
  ]
];
$schemaMarkup = '<script type="application/ld+json">' . json_encode($schemaGraph, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>';

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/nav.php'; ?>

<main id="main-content">

  <section class="hero hero--inner hero--legal" aria-label="Accessibility Statement">
    <img src="https://i.imgur.com/lHGkpv5.jpeg" alt="Brick stucco Madison MS home — Dun-Rite Seamless Gutters" class="hero-bg" width="1920" height="1080" loading="eager" fetchpriority="high">
    <div class="hero__inner">
      <div class="hero__copy">
        <span class="eyebrow-label">Legal</span>
        <h1>Accessibility Statement</h1>
        <span class="section-subtitle">making the web work for everyone</span>
        <p class="hero__phone" style="opacity: 0.8;">Last Updated: <?php echo $lastUpdated; ?></p>
      </div>
    </div>
  </section>

  <nav class="breadcrumb" aria-label="Breadcrumb">
    <div class="container">
      <ol>
        <li><a href="/">Home</a></li>
        <li class="breadcrumb-sep" aria-hidden="true">›</li>
        <li aria-current="page">Accessibility</li>
      </ol>
    </div>
  </nav>

  <article class="legal-prose">

    <h2>1. Our Commitment</h2>
    <p><?php echo $companyName; ?> is committed to making our website accessible to all users, including those with disabilities. We aim to conform to <a href="https://www.w3.org/TR/WCAG21/" target="_blank" rel="noopener">WCAG 2.1 Level AA</a> standards published by the World Wide Web Consortium.</p>

    <h2>2. Accessibility Features</h2>
    <p>Our website includes the following accessibility features:</p>
    <ul>
      <li>Semantic HTML5 structure with proper heading hierarchy</li>
      <li>Skip-to-content link at the top of every page (visible on focus)</li>
      <li>ARIA landmarks (nav, main, footer, complementary)</li>
      <li>Keyboard navigation throughout the site</li>
      <li>Visible focus indicators on all interactive elements</li>
      <li>Color contrast meeting WCAG AA minimums (4.5:1 for body text, 3:1 for large text)</li>
      <li>Descriptive alt text on all informational images</li>
      <li>Responsive design supporting up to 200% browser zoom</li>
      <li>Respect for <code>prefers-reduced-motion</code> settings (animations disabled when requested)</li>
      <li>Form fields with associated labels and error messaging</li>
      <li>FAQ accordion accessible via keyboard with proper aria-expanded states</li>
    </ul>

    <h2>3. Compatibility</h2>
    <p>This site has been tested with current versions of:</p>
    <ul>
      <li><strong>Browsers:</strong> Chrome, Firefox, Safari, Edge (current and one prior major release)</li>
      <li><strong>Screen readers:</strong> VoiceOver (macOS / iOS), NVDA (Windows), TalkBack (Android)</li>
      <li><strong>Mobile:</strong> iOS Safari, Android Chrome with touch and assistive technologies</li>
    </ul>
    <p>Some older browsers may have limited support. We recommend keeping your browser updated for the best experience.</p>

    <h2>4. Known Limitations</h2>
    <p>We acknowledge that some content may not be fully accessible due to ongoing development:</p>
    <ul>
      <li>Some embedded third-party content (social media links, external services) may have limitations beyond our direct control.</li>
      <li>Our gallery images include descriptive alt text but do not include extended audio descriptions.</li>
    </ul>
    <p>We are actively working to address these issues and welcome feedback.</p>

    <h2>5. Feedback</h2>
    <p>We welcome feedback on the accessibility of this website. If you encounter an accessibility barrier or need assistance accessing any content, please contact us:</p>
    <ul>
      <li>Email: <a href="mailto:<?php echo $companyEmail; ?>"><?php echo $companyEmail; ?></a></li>
      <li>Phone: <a href="tel:+16017501800"><?php echo $companyPhone; ?></a></li>
    </ul>
    <p>We aim to respond to accessibility feedback within 5 business days.</p>

    <h2>6. Assessment Method</h2>
    <p>This site was evaluated through:</p>
    <ul>
      <li>Self-assessment using WCAG 2.1 Level AA success criteria</li>
      <li>Automated testing tools (Lighthouse, axe DevTools, WAVE)</li>
      <li>Manual keyboard navigation testing</li>
      <li>Screen reader testing on representative pages</li>
    </ul>

    <h2>7. Date of Statement</h2>
    <p>This statement was last updated on <?php echo $lastUpdated; ?>. We review it whenever we make significant changes to the website.</p>

  </article>

</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
