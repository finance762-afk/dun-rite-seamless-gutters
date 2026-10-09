<?php
/** Service areas hub */
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';

$pageTitle       = 'Gutter Service Areas: Madison, Jackson & 12 MS Cities';
$pageDescription = 'Dun-Rite Seamless Gutters, Inc. serves 14 cities within about 30 miles of Madison, MS, across Madison, Hinds and Rankin counties, with no travel fees. Call (601) 750-1800.';
$currentPage     = 'service-areas';
$canonicalUrl    = $siteUrl . '/service-areas/';
$pageType        = 'other';

/* One line per city: what the gutter work there usually is (from the client's own service-area notes). */
$areaNotes = [
    'madison'    => 'Home base. Brick homes under mature pine and oak; same-day estimate windows most weeks.',
    'ridgeland'  => 'Closest neighbor. 1980s and 1990s subdivisions where original gutters are due for replacement.',
    'gluckstadt' => 'Mostly new construction; gutters for new homes, often arranged through the builder.',
    'canton'     => 'Historic homes around Canton Square that need custom-formed sections and fascia attention.',
    'jackson'    => 'The metro\'s oldest housing: repair and replacement in Belhaven, Fondren and Eastover.',
    'clinton'    => 'Mature pecan canopy, so gutter guards and cleaning plans lead the list.',
    'raymond'    => 'Mid-1800s houses near the courthouse, plus acreage homes outside town.',
    'bolton'     => 'Rural acreage with heavy tree cover; underground drain runs of 50 feet or more.',
    'terry'      => 'Homes plus barns, workshops and detached garages along Highway 51.',
    'flowood'    => 'Commercial gutters along Lakeland Drive and residential work in older and newer subdivisions.',
    'pearl'      => '1970s and 1980s ranch homes whose original gutters are ready for full replacement.',
    'brandon'    => 'Newer, larger homes that call for 6-inch high-flow gutters.',
    'richland'   => 'Ranch and split-level homes near the Highway 49 and I-20 junction.',
    'florence'   => 'Larger wooded lots where underground downspout drains are practical.',
];
$areaCounties = [];
foreach ($serviceAreaData as $hubArea) $areaCounties[$hubArea['county']][] = $hubArea;

$schemaNodes = [
    dr_breadcrumb_node(['Service Areas' => '/service-areas/']),
    ['@type' => 'ItemList', 'name' => 'Cities served by ' . $siteName,
     'itemListElement' => array_map(fn($i, $a) => ['@type' => 'ListItem', 'position' => $i + 1, 'name' => $a['name'] . ', MS', 'url' => $siteUrl . '/service-areas/' . $a['slug'] . '/'], array_keys($serviceAreaData), $serviceAreaData)],
];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>
<main id="main-content">

  <section class="hero hero--interior">
    <span class="grain" aria-hidden="true"></span>
    <div class="container">
      <div class="hero-text">
        <?php echo dr_breadcrumb(['Service Areas' => null]); ?>
        <p class="hero-eyebrow">Madison, Hinds &amp; Rankin counties</p>
        <h1>Gutter Service Areas Around Madison &amp; Jackson, MS</h1>
        <p class="hero-answer">Dun-Rite Seamless Gutters, Inc. is a gutter installer based at 115 Cherrybrook Dr in Madison, Mississippi. It serves 14 cities within roughly 30 miles of that office, and there are no travel fees, fuel surcharges or trip charges in any of them.</p>
        <div class="hero-actions">
          <a class="btn btn-accent btn-lg" href="/contact/" data-open-estimate>Request an estimate</a>
          <a class="link-call" href="tel:+<?php echo h($phoneRaw); ?>"><?php echo icon('phone', 18); ?> <?php echo h($phone); ?></a>
        </div>
      </div>
    </div>
  </section>

  <?php
  // "Do we serve your address?" checker — built from the 14-city list in config.php.
  require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/zip-check.php';
  echo p1_zip_check(['heading' => 'Does Dun-Rite serve your town?']);
  ?>

  <section class="section">
    <div class="container">
      <div class="section-head">
        <p class="eyebrow">14 cities, three counties</p>
        <h2>Which cities does Dun-Rite Seamless Gutters serve?</h2>
        <p>Dun-Rite Seamless Gutters, Inc. serves four cities in Madison County, five in Hinds County and five in Rankin County. The kind of gutter work differs from one to the next, because the houses, the trees and the lots do. Each city below has its own page.</p>
      </div>
      <?php foreach ($areaCounties as $hubCounty => $hubCities): ?>
      <h3 class="county-heading"><?php echo h($hubCounty); ?></h3>
      <ul class="city-grid">
        <?php foreach ($hubCities as $hubCity): ?>
        <li class="city-card">
          <small><?php echo h($hubCounty); ?></small>
          <h4><a href="/service-areas/<?php echo h($hubCity['slug']); ?>/">Gutters in <?php echo h($hubCity['name']); ?>, MS</a></h4>
          <p><?php echo h($areaNotes[$hubCity['slug']] ?? ''); ?></p>
        </li>
        <?php endforeach; ?>
      </ul>
      <?php endforeach; ?>
    </div>
  </section>

  <section class="section section--tint">
    <div class="container split">
      <div class="about-copy">
        <p class="eyebrow">How scheduling works</p>
        <h2>How quickly can Dun-Rite get to your city?</h2>
        <p>Most estimates are scheduled within 48 hours of your call, in any of the 14 cities. In Madison and its closest neighbors, Ridgeland, Gluckstadt and Canton, an estimate can often happen the same day because those cities are closest to the Madison office.</p>
        <div class="table-wrap">
          <table class="data-table">
            <caption>Estimate scheduling by area.</caption>
            <thead><tr><th scope="col">Area</th><th scope="col">Cities</th><th scope="col">Estimate visit</th></tr></thead>
            <tbody>
              <tr><th scope="row">Closest to the office</th><td>Madison, Ridgeland, Gluckstadt, Canton</td><td>Often the same day</td></tr>
              <tr><th scope="row">Rest of the service area</th><td>Jackson, Clinton, Raymond, Bolton, Terry, Flowood, Pearl, Brandon, Richland, Florence</td><td>Usually within 48 hours</td></tr>
              <tr><th scope="row">Outside the 14 cities</th><td>Elsewhere in Mississippi</td><td>Case by case; call the office</td></tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="about-copy">
        <p class="eyebrow">Outside the list</p>
        <h2>What if your town is not on the list?</h2>
        <p>If your town is not one of the 14, call (601) 750-1800 and ask. Requests from outside the usual radius are considered case by case, based on the distance, the size of the project and the current schedule. Commercial projects typically extend the area beyond 30 miles.</p>
        <p>See what is offered on the <a href="/services/">gutter services page</a>, including <a href="/services/commercial-gutters/">commercial gutter installation</a>, or read the <a href="/faq/">service area questions in the FAQ</a>.</p>
      </div>
    </div>
  </section>

  <?php
  $ctaBandHeading = 'Ask whether Dun-Rite covers your address';
  include $_SERVER['DOCUMENT_ROOT'] . '/includes/cta-band.php';
  ?>

</main>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
