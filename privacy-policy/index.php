<?php
/** Legal page — Privacy Policy (text unchanged from the v6.1 build; chrome migrated to v7) */
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';

$pageTitle       = "Privacy Policy | Dun-Rite Seamless Gutters";
$pageDescription = "How Dun-Rite Seamless Gutters collects, uses, and protects your information. CCPA rights for California residents.";
$currentPage     = 'privacy-policy';
$canonicalUrl    = $siteUrl . '/privacy-policy/';
$pageType        = 'other';

$companyName       = "Dun-Rite Seamless Gutters, Inc.";
$companyEntityType = "Corporation";
$companyState      = "Mississippi";
$companyEmail      = "mark.dungan@yahoo.com";
$companyPhone      = "(601) 750-1800";
$companyAddress    = "115 Cherrybrook Dr, Madison, MS 39110";
$lastUpdated       = date('F j, Y');

$schemaNodes = [
    ['@type' => 'WebPage', '@id' => $siteUrl . '/privacy-policy/#webpage', 'url' => $siteUrl . '/privacy-policy/', 'name' => $pageTitle, 'description' => $pageDescription],
    dr_breadcrumb_node(['Privacy Policy' => '/privacy-policy/']),
];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>
<main id="main-content">

  <section class="hero hero--legal">
    <div class="container">
      <?php echo dr_breadcrumb(['Privacy Policy' => null]); ?>
      <p class="eyebrow">Legal</p>
      <h1>Privacy Policy</h1>
      <p>Last Updated: <?php echo $lastUpdated; ?></p>
    </div>
  </section>

  <section class="section">
    <div class="container">
  <article class="legal-prose">

    <h2>1. Introduction</h2>
    <p>This Privacy Policy explains how <?php echo $companyName; ?> ("we", "us", "our") collects, uses, and protects your personal information when you visit dunrite-gutters.com or interact with our services.</p>

    <h2>2. Information We Collect</h2>
    <ul>
      <li><strong>Information you provide:</strong> name, email, phone, service address, project details (via contact forms)</li>
      <li><strong>Photo uploads:</strong> if you submit damage photos through our contact form</li>
      <li><strong>Automatically collected:</strong> IP address, browser type, device info, pages visited, referring URL, timestamps (via Google Analytics 4)</li>
      <li><strong>Cookies and similar technologies:</strong> see our <a href="/cookie-policy/">Cookie Policy</a></li>
    </ul>

    <h2>3. How We Use Your Information</h2>
    <ul>
      <li>Respond to inquiries and provide requested services</li>
      <li>Schedule estimates and installations</li>
      <li>Send service-related communications</li>
      <li>Improve our website and services</li>
      <li>Comply with legal obligations</li>
    </ul>

    <h2>4. How We Share Your Information</h2>
    <ul>
      <li>We do <strong>NOT</strong> sell personal information.</li>
      <li><strong>Service providers:</strong> Google Analytics (analytics), Page One Insights, LLC (website provider and contact form processor), our hosting provider (Hostinger).</li>
      <li><strong>Legal compliance:</strong> if required by law.</li>
      <li><strong>Business transfers:</strong> in the event of a merger, acquisition, or sale of business assets.</li>
    </ul>

    <h2>5. Your Privacy Rights</h2>

    <h3 id="ccpa-rights">California Residents (CCPA / CPRA)</h3>
    <p>If you are a California resident, you have the following rights under the California Consumer Privacy Act (CCPA) and California Privacy Rights Act (CPRA):</p>
    <ul>
      <li><strong>Right to know</strong> what personal information we collect, use, disclose, and sell.</li>
      <li><strong>Right to delete</strong> personal information we have collected from you, subject to certain exceptions.</li>
      <li><strong>Right to correct</strong> inaccurate personal information.</li>
      <li><strong>Right to opt-out of sale or sharing</strong> of personal information. (We do not sell personal information, but you may still submit an opt-out request for our records.)</li>
      <li><strong>Right to limit use</strong> of sensitive personal information.</li>
      <li><strong>Right to non-discrimination</strong> — we will not deny you services or charge different prices based on exercising your rights.</li>
    </ul>
    <p><strong>How to exercise your rights:</strong> Email <a href="mailto:<?php echo $companyEmail; ?>"><?php echo $companyEmail; ?></a> or call <a href="tel:+16017501800"><?php echo $companyPhone; ?></a>. We will respond within 45 days of receipt.</p>

    <h3>Other State Residents</h3>
    <p>Residents of Colorado, Virginia, Connecticut, Utah, and Texas have similar rights under their respective state privacy laws. Contact us using the same methods above to exercise your rights.</p>

    <h2>6. Data Retention</h2>
    <p>We retain contact form submissions and service records for as long as necessary to provide services and comply with legal obligations, typically 3–7 years for business records. Photos uploaded via contact forms are deleted after the related project is closed unless retained for warranty or legal purposes.</p>

    <h2>7. Data Security</h2>
    <p>We use reasonable administrative, technical, and physical safeguards to protect your information. No system is 100% secure. We cannot guarantee absolute security, but we work to minimize risks.</p>

    <h2>8. Children's Privacy</h2>
    <p>This site is not directed to children under 13. We do not knowingly collect information from children. If you believe a child has provided us information, contact us and we will delete it.</p>

    <h2>9. Third-Party Links</h2>
    <p>Our website may link to third-party sites (Facebook, Google Business Profile, BBB, etc.). We are not responsible for the privacy practices of these third-party sites. Review their privacy policies separately.</p>

    <h2>10. Changes to This Policy</h2>
    <p>We may update this Privacy Policy from time to time. The "Last Updated" date at the top of this page will reflect the most recent change. Material changes will be prominently posted on the site.</p>

    <h2>11. Contact Us</h2>
    <p>For privacy questions or to exercise your rights:</p>
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
