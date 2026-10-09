<?php
/**
 * config.php — central site configuration for Dun-Rite Seamless Gutters, Inc.
 * v7 architecture (migrated from the v6.1 flat includes/site-config.php, 2026-10-09).
 *
 * Every page requires this first, sets $pageTitle / $pageDescription / $currentPage
 * (and optional $schemaNodes), then includes head.php + header.php.
 *
 * CLAIMS RULE: every fact below traces to the client's own file (llms.txt /
 * llms-full.txt in this repo, the CRM deal, or the Google Business Profile feed).
 * Do not add a number, credential or offer here that the client has not stated.
 */

/* --- Identity / slug --- */
$slug      = 'dun-rite';                              // MUST equal this build's directory name
$siteName  = 'Dun-Rite Seamless Gutters, Inc.';       // exactly as on the Google Business Profile
$shortName = 'Dun-Rite';
$tagline   = 'Rain Carrying Systems';                 // the line on the client's own logo
$industry  = 'Gutter contractor';

/* --- Domain / URLs --- */
$domain  = 'dunrite-gutters.com';
$siteUrl = 'https://' . $domain;                      // launch domain, always (never the preview host)

/* --- Contact (NAP) --- */
$phone    = '(601) 750-1800';                         // display format
$phoneRaw = '16017501800';                            // tel:+16017501800
$email    = 'mark.dungan@yahoo.com';
$contactEmail = $email;
$address = [
    'street' => '115 Cherrybrook Dr',
    'city'   => 'Madison',
    'state'  => 'MS',
    'zip'    => '39110',
];
$stateName           = 'Mississippi';
$businessHours       = 'Mon–Fri 8 AM – 5 PM · Sat–Sun Closed';
$businessHoursSchema = ['days' => ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'], 'opens' => '08:00', 'closes' => '17:00'];
$ownerName       = 'Mark Dungan';
$yearEstablished = 1996;
$regionName      = 'greater Jackson metro area';

/* --- Google Business Profile (place id from the Page One reviews feed) --- */
$gbpPlaceId       = 'ChIJQS3mnt7PKYYREIx9VUGYvVc';
$gbpUrl           = 'https://share.google/ILoTdINgp3QYNTw3';
$directionsUrl    = 'https://www.google.com/maps/dir/?api=1&destination=place_id:' . $gbpPlaceId;
$reviewRequestUrl = 'https://search.google.com/local/writereview?placeid=' . $gbpPlaceId;

/* --- Profiles (client's own, from llms-full.txt) --- */
$socialLinks = [
    'Facebook'                => 'https://www.facebook.com/dunritegutters/',
    'Google Business Profile' => $gbpUrl,
    'Yelp'                    => 'https://www.yelp.com/biz/dun-rite-seamless-gutters-madison-6',
    'BBB'                     => 'https://www.bbb.org/us/ms/madison/profile/gutters/dun-rite-seamless-gutters-0523-145212331',
];

/* --- Credentials the client states (llms-full.txt "Overview") --- */
$credentials = [
    'Mississippi-licensed corporation',
    'Workers\' Compensation and General Liability insurance',
    'BBB accredited',
    'HomeAdvisor approved',
    'Home Builders Association member',
];
$warrantyMaterials = '25-year manufacturer warranty on materials';
$warrantyLabor     = '2-year labor warranty';

/* --- Lead form (Page One leads endpoint — unchanged from the live site) --- */
$formAction      = 'https://db.pageone.cloud/functions/v1/leads/dun-rite';
$leadsFormSecret = 'bac7714a8f41505ab12d75311ccbb11a6374e38b1a010d69111c84a652cfa0f3';

/* --- Services (the client's eight services; URLs are permanent) --- */
$services = [
    [
        'name' => 'Seamless Gutter Installation', 'nav' => 'Seamless Gutter Installation', 'slug' => 'seamless-gutter-installation',
        'description' => '5-inch and 6-inch K-style aluminum gutters formed at your house from one coil, so no run has a joint in the middle.',
        'bullets' => ['.032 gauge aluminum standard', 'Hidden hangers every 24 inches', 'Old gutters hauled away'],
        'icon' => 'home', 'image' => 'home-brick-stucco-dark-gutters',
        'alt' => 'Brick and stucco two-story home with dark gutters and downspouts along the roofline',
    ],
    [
        'name' => 'Aluminum Gutters', 'nav' => 'Aluminum Gutters', 'slug' => 'aluminum-gutters',
        'description' => 'Rust-proof aluminum in .032, .040 and .050 gauge, with nine stocked baked-enamel colors and custom colors on order.',
        'bullets' => ['Nine colors in stock', 'Three gauges available', 'Will not rust'],
        'icon' => 'layers', 'image' => 'gutter-colour-profiles',
        'alt' => 'Sample gutter profiles in dark grey, red, white and blue finishes',
    ],
    [
        'name' => 'Copper Gutters', 'nav' => 'Copper Gutters', 'slug' => 'copper-gutters',
        'description' => 'Copper gutters with every seam hand-soldered, in half-round, K-style and ogee profiles, plus standing-seam copper accents.',
        'bullets' => ['Seams soldered, never riveted', '16, 20 and 24 oz copper', 'Awnings and dormer caps'],
        'icon' => 'award', 'image' => 'copper-gutters-brick-awning',
        'alt' => 'Copper gutter and a standing-seam copper awning on a red brick home',
    ],
    [
        'name' => 'Gutter Guards & Leaf Protection', 'nav' => 'Gutter Guards', 'slug' => 'gutter-guards',
        'description' => 'Fine mesh for pine straw, large-hole screen for oak leaves, or foam inserts, fitted to new or existing gutters.',
        'bullets' => ['Three guard types priced', 'Fits gutters you have', 'Most retrofits take hours'],
        'icon' => 'leaf', 'image' => 'gutter-guard-fitting',
        'alt' => 'Gloved hand fitting a perforated white guard panel over a gutter at the shingle edge',
    ],
    [
        'name' => 'Gutter Cleaning', 'nav' => 'Gutter Cleaning', 'slug' => 'gutter-cleaning',
        'description' => 'Debris removed by hand, every downspout flushed, and a written report with photos sent the same day.',
        'bullets' => ['Hand-cleaned, not blown out', 'Downspouts flushed clear', 'Photo report after each visit'],
        'icon' => 'droplets', 'image' => 'gutter-cleaning-leaves',
        'alt' => 'Gloved hand lifting wet autumn leaves out of a white gutter',
    ],
    [
        'name' => 'Gutter Repair & Replacement', 'nav' => 'Gutter Repair & Replacement', 'slug' => 'gutter-repair-replacement',
        'description' => 'Sagging runs, leaking corners and gutters pulled off the fascia repaired by the section, or the whole system replaced.',
        'bullets' => ['Repairs priced per section', 'Storm claim paperwork prepared', 'Replacement when repair fails'],
        'icon' => 'wrench', 'image' => 'eave-ladder-work',
        'alt' => 'Installer on an extension ladder working at the eave of a house, seen from below',
    ],
    [
        'name' => 'Commercial Gutters', 'nav' => 'Commercial Gutters', 'slug' => 'commercial-gutters',
        'description' => '7-inch and 8-inch gutters and high-flow downspouts for offices, retail centers, multi-family and industrial buildings.',
        'bullets' => ['7-inch and 8-inch profiles', 'One point of contact', 'AIA billing on request'],
        'icon' => 'building-2', 'image' => 'dark-gutter-tile-roof',
        'alt' => 'Long run of dark half-round gutter under a tile roof edge',
    ],
    [
        'name' => 'Custom Downspouts', 'nav' => 'Custom Downspouts', 'slug' => 'custom-downspouts',
        'description' => 'Round, 3x4 and 4x5 downspouts sized to the roof area they drain, with underground drain tie-ins where the yard needs them.',
        'bullets' => ['Sized to roof area', 'Round and rectangular profiles', 'Underground tie-ins available'],
        'icon' => 'waves', 'image' => 'downspout-fitting',
        'alt' => 'Installer strapping a dark round downspout to a stucco wall below the eave',
    ],
];

/* --- Service areas: the 14 cities the client names, each with a page under /service-areas/<slug>/ --- */
$serviceAreaData = [
    ['name' => 'Madison',    'slug' => 'madison',    'county' => 'Madison County', 'note' => 'home base'],
    ['name' => 'Ridgeland',  'slug' => 'ridgeland',  'county' => 'Madison County'],
    ['name' => 'Gluckstadt', 'slug' => 'gluckstadt', 'county' => 'Madison County'],
    ['name' => 'Canton',     'slug' => 'canton',     'county' => 'Madison County'],
    ['name' => 'Jackson',    'slug' => 'jackson',    'county' => 'Hinds County'],
    ['name' => 'Clinton',    'slug' => 'clinton',    'county' => 'Hinds County'],
    ['name' => 'Raymond',    'slug' => 'raymond',    'county' => 'Hinds County'],
    ['name' => 'Bolton',     'slug' => 'bolton',     'county' => 'Hinds County'],
    ['name' => 'Terry',      'slug' => 'terry',      'county' => 'Hinds County'],
    ['name' => 'Flowood',    'slug' => 'flowood',    'county' => 'Rankin County'],
    ['name' => 'Pearl',      'slug' => 'pearl',      'county' => 'Rankin County'],
    ['name' => 'Brandon',    'slug' => 'brandon',    'county' => 'Rankin County'],
    ['name' => 'Richland',   'slug' => 'richland',   'county' => 'Rankin County'],
    ['name' => 'Florence',   'slug' => 'florence',   'county' => 'Rankin County'],
];
$serviceAreas = array_column($serviceAreaData, 'name');   // city names — read by zip-check.php and schema
$serviceZips  = [];                                        // none on file; the checker matches on town name

/* --- Analytics / verification --- */
$googleAnalyticsId = 'G-VHW4JJ50J0'; // Google Analytics 4 (ga4-fleet)
// site-config.json is written by the site-verify and post-deploy Edge Functions.
$gscVerification  = '';
$ga4MeasurementId = '';
$__siteConfigPath = __DIR__ . '/site-config.json';
if (is_readable($__siteConfigPath)) {
    $__cfg = json_decode((string) file_get_contents($__siteConfigPath), true);
    if (is_array($__cfg)) {
        $gscVerification  = isset($__cfg['gsc_verification'])   ? (string) $__cfg['gsc_verification']   : '';
        $ga4MeasurementId = isset($__cfg['ga4_measurement_id']) ? (string) $__cfg['ga4_measurement_id'] : '';
    }
}

/* --- Assets --- */
$cssVersion     = '20261009b';   // bump whenever framework.css changes (and regenerate includes/critical.css)
$defaultOgImage = 'og-default.jpg';

/* --- Verified Local Partner badge: slug is filled by scripts/partner-badge-fleet.mjs once the profile is claimed --- */
$partnerProfileSlug = '';
$partnerProfileName = $siteName;

require_once __DIR__ . '/attribution.php';
require_once __DIR__ . '/functions.php';
require_once __DIR__ . '/p1-form-helpers.php';
