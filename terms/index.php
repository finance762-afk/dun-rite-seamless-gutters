<?php
/** Legal page — Terms of Service (text unchanged from the v6.1 build; chrome migrated to v7) */
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';

$pageTitle       = "Terms of Service | Dun-Rite Seamless Gutters";
$pageDescription = "Terms governing use of dunrite-gutters.com and the services provided by Dun-Rite Seamless Gutters, Inc., a Mississippi corporation.";
$currentPage     = 'terms';
$canonicalUrl    = $siteUrl . '/terms/';
$pageType        = 'other';

$companyName       = "Dun-Rite Seamless Gutters, Inc.";
$companyEntityType = "Corporation";
$companyState      = "Mississippi";
$companyEmail      = "mark.dungan@yahoo.com";
$companyPhone      = "(601) 750-1800";
$companyAddress    = "115 Cherrybrook Dr, Madison, MS 39110";
$lastUpdated       = date('F j, Y');

$schemaNodes = [
    ['@type' => 'WebPage', '@id' => $siteUrl . '/terms/#webpage', 'url' => $siteUrl . '/terms/', 'name' => $pageTitle, 'description' => $pageDescription],
    dr_breadcrumb_node(['Terms of Service' => '/terms/']),
];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>
<main id="main-content">

  <section class="hero hero--legal">
    <div class="container">
      <?php echo dr_breadcrumb(['Terms of Service' => null]); ?>
      <p class="eyebrow">Legal</p>
      <h1>Terms of Service</h1>
      <p>Last Updated: <?php echo $lastUpdated; ?></p>
    </div>
  </section>

  <section class="section">
    <div class="container">
  <article class="legal-prose">

    <h2>1. Acceptance of Terms</h2>
    <p>By accessing and using this website ("Site"), operated by <?php echo $companyName; ?>, a <?php echo $companyState; ?> <?php echo $companyEntityType; ?>, you agree to be bound by these Terms of Service. If you do not agree, do not use this Site.</p>

    <h2>2. Services Description</h2>
    <p>This Site provides information about gutter installation, repair, cleaning, and related services offered by <?php echo $companyName; ?>. Actual service agreements (estimates, contracts, warranties) are separate written documents and are not formed by use of this Site.</p>

    <h2>3. Use of Site</h2>
    <p><strong>Permitted:</strong> personal, non-commercial use of the Site to learn about our services, request estimates, and contact us.</p>
    <p><strong>Prohibited:</strong></p>
    <ul>
      <li>Scraping, automated data collection, or unauthorized harvesting of content</li>
      <li>Reverse engineering or attempting to bypass site security</li>
      <li>Any use that interferes with site operation or other users' access</li>
      <li>Impersonation or submission of false information through forms</li>
      <li>Any illegal use or use that violates applicable law</li>
    </ul>

    <h2>4. Intellectual Property</h2>
    <p>All content on this Site (text, images, logos, design, layout, code) is owned by <?php echo $companyName; ?> or used with permission. You may not reproduce, distribute, modify, or create derivative works without written permission.</p>

    <h2>5. User Submissions</h2>
    <p>Information you submit through contact forms (including photos of your property) becomes part of our customer file. We use this information to respond to your inquiry per our <a href="/privacy-policy/">Privacy Policy</a>. You represent that you have the right to submit any photos or information you provide.</p>

    <h2>6. Estimates and Pricing</h2>
    <p>Estimates are provided in writing after on-site consultation. Estimates are valid for 30 days from issue date unless noted otherwise. Pricing in marketing materials (website, social media, advertisements) reflects typical ranges and is not a binding quote. Final pricing is established by signed written estimate only.</p>

    <h2>7. Service Disclaimers</h2>
    <p>The Site and its content are provided on an "as is" and "as available" basis. We make no warranty that the Site will be uninterrupted, error-free, secure, or virus-free. We reserve the right to modify or discontinue any aspect of the Site without notice.</p>

    <h2>8. Limitation of Liability</h2>
    <p>To the maximum extent permitted by law, <?php echo $companyName; ?> shall not be liable for any indirect, incidental, special, consequential, or punitive damages arising from use of this Site, including but not limited to loss of profits, data, or business opportunity. Our total liability arising from your use of this Site shall not exceed $100.</p>

    <h2>9. Indemnification</h2>
    <p>You agree to indemnify and hold harmless <?php echo $companyName; ?>, its officers, employees, and agents from any claims, damages, or expenses arising from your use of the Site, your violation of these Terms, or your violation of any third-party rights.</p>

    <h2>10. Governing Law</h2>
    <p>These Terms are governed by the laws of the State of <?php echo $companyState; ?>, without regard to conflict-of-law principles. Any disputes shall be resolved exclusively in the state or federal courts located in <?php echo $companyState; ?>, and you consent to the personal jurisdiction of such courts.</p>

    <h2>11. Changes to These Terms</h2>
    <p>We may update these Terms from time to time. The "Last Updated" date at the top of this page will reflect the most recent change. Continued use of the Site after changes constitutes acceptance of the revised Terms.</p>

    <h2>12. Severability</h2>
    <p>If any provision of these Terms is found unenforceable, the remaining provisions remain in full force and effect.</p>

    <h2>13. Contact Us</h2>
    <p>Questions about these Terms:</p>
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
