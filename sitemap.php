<?php
/**
 * sitemap.php — dynamic XML sitemap (replaces the static sitemap.xml + sitemap-images.xml).
 * .htaccess rewrites /sitemap.xml here. The URL list is built from the page registry below plus
 * $services and $serviceAreaData in config.php, so a new service or city appears automatically.
 * lastmod is the page file's own modification date.
 */
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
header('Content-Type: application/xml; charset=utf-8');

$smRoot  = rtrim($_SERVER['DOCUMENT_ROOT'], '/');
$smPages = [
    ['path' => '/',               'changefreq' => 'weekly',  'priority' => '1.0', 'images' => [['src' => 'home-brick-stucco-dark-gutters.jpg', 'caption' => 'Brick and stucco two-story home with dark gutters and downspouts along the roofline'], ['src' => 'mark-dungan-owner.jpg', 'caption' => 'Mark Dungan, founder of Dun-Rite Seamless Gutters, Inc.']]],
    ['path' => '/services/',      'changefreq' => 'monthly', 'priority' => '0.9'],
];
foreach ($services as $smSvc) {
    $smPages[] = ['path' => '/services/' . $smSvc['slug'] . '/', 'changefreq' => 'monthly', 'priority' => '0.9',
                  'images' => [['src' => $smSvc['image'] . '.jpg', 'caption' => $smSvc['alt']]]];
}
$smPages[] = ['path' => '/service-areas/', 'changefreq' => 'monthly', 'priority' => '0.8'];
foreach ($serviceAreaData as $smArea) {
    $smPages[] = ['path' => '/service-areas/' . $smArea['slug'] . '/', 'changefreq' => 'monthly', 'priority' => '0.8'];
}
$smPages[] = ['path' => '/about/',   'changefreq' => 'monthly', 'priority' => '0.7', 'images' => [['src' => 'mark-dungan-owner.jpg', 'caption' => 'Mark Dungan, founder of Dun-Rite Seamless Gutters, Inc.']]];
$smPages[] = ['path' => '/contact/', 'changefreq' => 'monthly', 'priority' => '0.7'];
$smPages[] = ['path' => '/faq/',     'changefreq' => 'monthly', 'priority' => '0.6'];
foreach (['privacy-policy', 'terms', 'cookie-policy', 'accessibility'] as $smLegal) {
    $smPages[] = ['path' => '/' . $smLegal . '/', 'changefreq' => 'yearly', 'priority' => '0.3'];
}

echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:image="http://www.google.com/schemas/sitemap-image/1.1">
<?php foreach ($smPages as $smPage):
    $smFile = $smRoot . $smPage['path'] . 'index.php';
    if (!is_file($smFile)) continue;
?>
  <url>
    <loc><?php echo htmlspecialchars($siteUrl . $smPage['path'], ENT_XML1); ?></loc>
    <lastmod><?php echo date('Y-m-d', (int) filemtime($smFile)); ?></lastmod>
    <changefreq><?php echo $smPage['changefreq']; ?></changefreq>
    <priority><?php echo $smPage['priority']; ?></priority>
<?php foreach ($smPage['images'] ?? [] as $smImg): if (!is_file($smRoot . '/assets/images/' . $smImg['src'])) continue; ?>
    <image:image>
      <image:loc><?php echo htmlspecialchars($siteUrl . '/assets/images/' . $smImg['src'], ENT_XML1); ?></image:loc>
      <image:caption><?php echo htmlspecialchars($smImg['caption'], ENT_XML1); ?></image:caption>
    </image:image>
<?php endforeach; ?>
  </url>
<?php endforeach; ?>
</urlset>
