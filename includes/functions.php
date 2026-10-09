<?php
/**
 * functions.php — helpers for Dun-Rite Seamless Gutters, Inc. (v7 architecture).
 * Icons are Lucide paths inlined at build time (no runtime injection, no CDN).
 */

if (!function_exists('h')) {
    function h($v): string { return htmlspecialchars((string) $v, ENT_QUOTES, 'UTF-8'); }
}

/** Inline SVG icon (Lucide, ISC). Decorative by default. */
function icon(string $name, int $size = 20): string {
    static $paths = [
        'arrow-right' => '<path d="M5 12h14" /> <path d="m12 5 7 7-7 7" />',
        'arrow-up' => '<path d="m5 12 7-7 7 7" /> <path d="M12 19V5" />',
        'award' => '<path d="m15.477 12.89 1.515 8.526a.5.5 0 0 1-.81.47l-3.58-2.687a1 1 0 0 0-1.197 0l-3.586 2.686a.5.5 0 0 1-.81-.469l1.514-8.526" /> <circle cx="12" cy="8" r="6" />',
        'badge-check' => '<path d="M3.85 8.62a4 4 0 0 1 4.78-4.77 4 4 0 0 1 6.74 0 4 4 0 0 1 4.78 4.78 4 4 0 0 1 0 6.74 4 4 0 0 1-4.77 4.78 4 4 0 0 1-6.75 0 4 4 0 0 1-4.78-4.77 4 4 0 0 1 0-6.76Z" /> <path d="m9 12 2 2 4-4" />',
        'building-2' => '<path d="M10 12h4" /> <path d="M10 8h4" /> <path d="M14 21v-3a2 2 0 0 0-4 0v3" /> <path d="M6 10H4a2 2 0 0 0-2 2v7a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2h-2" /> <path d="M6 21V5a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v16" />',
        'calendar-check' => '<path d="M8 2v4"/><path d="M16 2v4"/><rect width="18" height="18" x="3" y="4" rx="2"/><path d="M3 10h18"/><path d="m9 16 2 2 4-4"/>',
        'check' => '<path d="M20 6 9 17l-5-5" />',
        'check-circle' => '<path d="M21.801 10A10 10 0 1 1 17 3.335" /> <path d="m9 11 3 3L22 4" />',
        'chevron-down' => '<path d="m6 9 6 6 6-6" />',
        'chevron-right' => '<path d="m9 18 6-6-6-6" />',
        'clipboard-list' => '<rect width="8" height="4" x="8" y="2" rx="1" ry="1"/><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"/><path d="M12 11h4"/><path d="M12 16h4"/><path d="M8 11h.01"/><path d="M8 16h.01"/>',
        'clock' => '<circle cx="12" cy="12" r="10" /> <path d="M12 6v6l4 2" />',
        'droplets' => '<path d="M7 16.3c2.2 0 4-1.83 4-4.05 0-1.16-.57-2.26-1.71-3.19S7.29 6.75 7 5.3c-.29 1.45-1.14 2.84-2.29 3.76S3 11.1 3 12.25c0 2.22 1.8 4.05 4 4.05z"/><path d="M12.56 6.6A10.97 10.97 0 0 0 14 3.02c.5 2.5 2 4.9 4 6.5s3 3.5 3 5.5a6.98 6.98 0 0 1-11.91 4.97"/>',
        'external-link' => '<path d="M15 3h6v6" /> <path d="M10 14 21 3" /> <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6" />',
        'hammer' => '<path d="m15 12-9.373 9.373a1 1 0 0 1-3.001-3L12 9" /> <path d="m18 15 4-4" /> <path d="m21.5 11.5-1.914-1.914A2 2 0 0 1 19 8.172v-.344a2 2 0 0 0-.586-1.414l-1.657-1.657A6 6 0 0 0 12.516 3H9l1.243 1.243A6 6 0 0 1 12 8.485V10l2 2h1.172a2 2 0 0 1 1.414.586L18.5 14.5" />',
        'handshake' => '<path d="m11 17 2 2a1 1 0 1 0 3-3"/><path d="m14 14 2.5 2.5a1 1 0 1 0 3-3l-3.88-3.88a3 3 0 0 0-4.24 0l-.88.88a1 1 0 1 1-3-3l2.81-2.81a5.79 5.79 0 0 1 7.06-.87l.47.28a2 2 0 0 0 1.42.25L21 4"/><path d="m21 3 1 11h-2"/><path d="M3 3 2 14l6.5 6.5a1 1 0 1 0 3-3"/><path d="M3 4h8"/>',
        'hard-hat' => '<path d="M10 10V5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v5" /> <path d="M14 6a6 6 0 0 1 6 6v3" /> <path d="M4 15v-3a6 6 0 0 1 6-6" /> <rect x="2" y="15" width="20" height="4" rx="1" />',
        'home' => '<path d="M15 21v-8a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v8" /> <path d="M3 10a2 2 0 0 1 .709-1.528l7-6a2 2 0 0 1 2.582 0l7 6A2 2 0 0 1 21 10v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" />',
        'info' => '<circle cx="12" cy="12" r="10" /> <path d="M12 16v-4" /> <path d="M12 8h.01" />',
        'landmark' => '<line x1="3" x2="21" y1="22" y2="22"/><line x1="6" x2="6" y1="18" y2="11"/><line x1="10" x2="10" y1="18" y2="11"/><line x1="14" x2="14" y1="18" y2="11"/><line x1="18" x2="18" y1="18" y2="11"/><polygon points="12 2 20 7 4 7"/>',
        'layers' => '<path d="m12.83 2.18a2 2 0 0 0-1.66 0L2.6 6.08a1 1 0 0 0 0 1.83l8.58 3.91a2 2 0 0 0 1.66 0l8.58-3.9a1 1 0 0 0 0-1.83Z"/><path d="m22 17.65-9.17 4.16a2 2 0 0 1-1.66 0L2 17.65"/><path d="m22 12.65-9.17 4.16a2 2 0 0 1-1.66 0L2 12.65"/>',
        'leaf' => '<path d="M11 20A7 7 0 0 1 9.8 6.1C15.5 5 17 4.48 19 2c1 2 2 4.18 2 8 0 5.5-4.78 10-10 10Z"/><path d="M2 21c0-3 1.85-5.36 5.08-6C9.5 14.52 12 13 13 12"/>',
        'mail' => '<path d="m22 7-8.991 5.727a2 2 0 0 1-2.009 0L2 7" /> <rect x="2" y="4" width="20" height="16" rx="2" />',
        'map' => '<path d="M14.106 5.553a2 2 0 0 0 1.788 0l3.659-1.83A1 1 0 0 1 21 4.619v12.764a1 1 0 0 1-.553.894l-4.553 2.277a2 2 0 0 1-1.788 0l-4.212-2.106a2 2 0 0 0-1.788 0l-3.659 1.83A1 1 0 0 1 3 19.381V6.618a1 1 0 0 1 .553-.894l4.553-2.277a2 2 0 0 1 1.788 0z"/><path d="M15 5.764v15"/><path d="M9 3.236v15"/>',
        'map-pin' => '<path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0" /> <circle cx="12" cy="10" r="3" />',
        'phone' => '<path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384" />',
        'route' => '<circle cx="6" cy="19" r="3"/><path d="M9 19h8.5a3.5 3.5 0 0 0 0-7h-11a3.5 3.5 0 0 1 0-7H15"/><circle cx="18" cy="5" r="3"/>',
        'ruler' => '<path d="M21.3 15.3a2.4 2.4 0 0 1 0 3.4l-2.6 2.6a2.4 2.4 0 0 1-3.4 0L2.7 8.7a2.41 2.41 0 0 1 0-3.4l2.6-2.6a2.41 2.41 0 0 1 3.4 0Z" /> <path d="m14.5 12.5 2-2" /> <path d="m11.5 9.5 2-2" /> <path d="m8.5 6.5 2-2" /> <path d="m17.5 15.5 2-2" />',
        'send' => '<path d="M14.536 21.686a.5.5 0 0 0 .937-.024l6.5-19a.496.496 0 0 0-.635-.635l-19 6.5a.5.5 0 0 0-.024.937l7.93 3.18a2 2 0 0 1 1.112 1.11z" /> <path d="m21.854 2.147-10.94 10.939" />',
        'shield-check' => '<path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z" /> <path d="m9 12 2 2 4-4" />',
        'star' => '<path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z" />',
        'trees' => '<path d="M10 10v.2A3 3 0 0 1 8.9 16H5a3 3 0 0 1-1-5.8V10a3 3 0 0 1 6 0Z"/><path d="M7 16v6"/><path d="M13 19v3"/><path d="M12 19h8.3a1 1 0 0 0 .7-1.7L18 14h.3a1 1 0 0 0 .7-1.7L16 9h.2a1 1 0 0 0 .8-1.7L13 3l-1.4 1.5"/>',
        'truck' => '<path d="M14 18V6a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2v11a1 1 0 0 0 1 1h2" /> <path d="M15 18H9" /> <path d="M19 18h2a1 1 0 0 0 1-1v-3.65a1 1 0 0 0-.22-.624l-3.48-4.35A1 1 0 0 0 17.52 8H14" /> <circle cx="17" cy="18" r="2" /> <circle cx="7" cy="18" r="2" />',
        'umbrella' => '<path d="M22 12a10.06 10.06 1 0 0-20 0Z"/><path d="M12 12v8a2 2 0 0 0 4 0"/><path d="M12 2v1"/>',
        'users' => '<path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" /> <path d="M16 3.128a4 4 0 0 1 0 7.744" /> <path d="M22 21v-2a4 4 0 0 0-3-3.87" /> <circle cx="9" cy="7" r="4" />',
        'waves' => '<path d="M2 6c.6.5 1.2 1 2.5 1C7 7 7 5 9.5 5c2.6 0 2.4 2 5 2 2.5 0 2.5-2 5-2 1.3 0 1.9.5 2.5 1"/><path d="M2 12c.6.5 1.2 1 2.5 1 2.5 0 2.5-2 5-2 2.6 0 2.4 2 5 2 2.5 0 2.5-2 5-2 1.3 0 1.9.5 2.5 1"/><path d="M2 18c.6.5 1.2 1 2.5 1 2.5 0 2.5-2 5-2 2.6 0 2.4 2 5 2 2.5 0 2.5-2 5-2 1.3 0 1.9.5 2.5 1"/>',
        'wrench' => '<path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.106-3.105c.32-.322.863-.22.983.218a6 6 0 0 1-8.259 7.057l-7.91 7.91a1 1 0 0 1-2.999-3l7.91-7.91a6 6 0 0 1 7.057-8.259c.438.12.54.662.219.984z" />',
        'x' => '<path d="M18 6 6 18" /> <path d="m6 6 12 12" />',
    ];
    if (!isset($paths[$name])) return '';
    return '<svg xmlns="http://www.w3.org/2000/svg" width="' . $size . '" height="' . $size . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false">' . $paths[$name] . '</svg>';
}

function isActivePage(string $page): bool {
    global $currentPage;
    return isset($currentPage) && $currentPage === $page;
}

/** Canonical URL from the request path (never hand-set per page). */
function dr_canonical(): string {
    global $siteUrl;
    $path = strtok((string) ($_SERVER['REQUEST_URI'] ?? '/'), '?') ?: '/';
    $path = preg_replace('#/index\.php$#', '/', $path);
    $path = preg_replace('#\.php$#', '', $path);
    if ($path !== '/' && substr($path, -1) !== '/' && !preg_match('#\.[a-z0-9]+$#i', $path)) $path .= '/';
    return rtrim($siteUrl, '/') . $path;
}

/** Service / area lookups from config.php. */
function dr_service(string $slug): ?array {
    global $services;
    foreach ($services as $s) if ($s['slug'] === $slug) return $s;
    return null;
}
function dr_area(string $slug): ?array {
    global $serviceAreaData;
    foreach ($serviceAreaData as $a) if ($a['slug'] === $slug) return $a;
    return null;
}

/**
 * Responsive <picture> for a local photo in /assets/images/.
 * Uses whichever -480 / -960 / -1600 webp + avif variants exist on disk (sources are never
 * upscaled, so small originals carry fewer variants) with the .jpg as the fallback src.
 * $opt: sizes, class, eager (bool → hero/LCP), ratio-less; width/height always come from the file.
 */
function dr_picture(string $base, string $alt, array $opt = []): string {
    static $cache = [];
    $dir = rtrim((string) ($_SERVER['DOCUMENT_ROOT'] ?? ''), '/') . '/assets/images/';
    if (!isset($cache[$base])) {
        $src = '';
        foreach (['jpg', 'png', 'webp'] as $ext) { if (is_file($dir . $base . '.' . $ext)) { $src = $base . '.' . $ext; break; } }
        $dim = $src !== '' ? @getimagesize($dir . $src) : false;
        $vars = ['webp' => [], 'avif' => []];
        foreach ([480, 960, 1600] as $w) {
            foreach (['webp', 'avif'] as $fmt) {
                if (is_file($dir . "{$base}-{$w}.{$fmt}")) $vars[$fmt][] = "/assets/images/{$base}-{$w}.{$fmt} {$w}w";
            }
        }
        $cache[$base] = ['src' => $src, 'w' => $dim ? (int) $dim[0] : 0, 'h' => $dim ? (int) $dim[1] : 0, 'vars' => $vars];
    }
    $i = $cache[$base];
    if ($i['src'] === '') return '';
    $sizes = $opt['sizes'] ?? '(max-width: 760px) 100vw, 50vw';
    $eager = !empty($opt['eager']);
    $class = isset($opt['class']) ? ' class="' . h($opt['class']) . '"' : '';
    $fallback = '/assets/images/' . $i['src'];
    $webp = $i['vars']['webp'] ? implode(', ', $i['vars']['webp']) : $fallback . ' ' . $i['w'] . 'w';
    $out = '<picture>';
    if ($i['vars']['avif']) $out .= '<source type="image/avif" srcset="' . implode(', ', $i['vars']['avif']) . '" sizes="' . h($sizes) . '">';
    $args = [$class, $fallback, $webp, h($sizes), $i['w'], $i['h'], h($alt)];
    $out .= $eager
        ? vsprintf('<img%s src="%s" srcset="%s" sizes="%s" width="%d" height="%d" alt="%s" loading="eager" fetchpriority="high" decoding="async">', $args)
        : vsprintf('<img%s src="%s" srcset="%s" sizes="%s" width="%d" height="%d" alt="%s" loading="lazy" decoding="async">', $args);
    return $out . '</picture>';
}

/** avif srcset for the hero preload in head.php ('' when the photo has no avif variants). */
function dr_preload_srcset(string $base): string {
    $dir = rtrim((string) ($_SERVER['DOCUMENT_ROOT'] ?? ''), '/') . '/assets/images/';
    $set = [];
    foreach ([480, 960, 1600] as $w) if (is_file($dir . "{$base}-{$w}.avif")) $set[] = "/assets/images/{$base}-{$w}.avif {$w}w";
    return implode(', ', $set);
}

/* ---------- JSON-LD nodes (head.php prints ONE @graph per page) ---------- */

function dr_breadcrumb_node(array $trail): array {
    global $siteUrl;
    $items = [['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => $siteUrl . '/']];
    $pos = 2;
    foreach ($trail as $name => $path) {
        $items[] = ['@type' => 'ListItem', 'position' => $pos++, 'name' => $name, 'item' => $siteUrl . $path];
    }
    return ['@type' => 'BreadcrumbList', 'itemListElement' => $items];
}

/** $faqs = [['q' => '...', 'a' => '...'], ...] — the same array the page renders. */
function dr_faq_node(array $faqs): array {
    $main = [];
    foreach ($faqs as $f) {
        $main[] = ['@type' => 'Question', 'name' => $f['q'], 'acceptedAnswer' => ['@type' => 'Answer', 'text' => strip_tags($f['a'])]];
    }
    return ['@type' => 'FAQPage', 'mainEntity' => $main];
}

function dr_service_node(array $service, string $description, ?string $areaName = null): array {
    global $siteUrl, $serviceAreas, $address;
    $areas = $areaName ? [$areaName] : $serviceAreas;
    return [
        '@type'       => 'Service',
        'name'        => $service['name'],
        'serviceType' => $service['name'],
        'description' => $description,
        'url'         => $siteUrl . '/services/' . $service['slug'] . '/',
        'provider'    => ['@id' => $siteUrl . '/#business'],
        'areaServed'  => array_map(fn($c) => ['@type' => 'City', 'name' => $c . ', ' . $address['state']], $areas),
    ];
}

/** Visible FAQ list (native <details>) from the same array that feeds dr_faq_node(). */
function dr_faq_list(array $faqs): string {
    $out = '<div class="faq-list">';
    foreach ($faqs as $f) {
        $out .= '<details class="faq"><summary>' . h($f['q']) . '</summary><p>' . $f['a'] . '</p></details>';
    }
    return $out . '</div>';
}

/** Breadcrumb trail markup; $trail = ['Services' => '/services/', 'Copper Gutters' => null]. */
function dr_breadcrumb(array $trail): string {
    $out = '<nav class="breadcrumb" aria-label="Breadcrumb"><ol><li><a href="/">Home</a></li>';
    foreach ($trail as $name => $path) {
        $out .= '<li class="breadcrumb-sep" aria-hidden="true">/</li>';
        $out .= $path ? '<li><a href="' . h($path) . '">' . h($name) . '</a></li>' : '<li aria-current="page">' . h($name) . '</li>';
    }
    return $out . '</ol></nav>';
}

/** Required services component: tinted image cards (framework classes are fixed). */
function dr_service_cards(array $slugs, string $sizes = '(max-width: 720px) 100vw, 33vw'): string {
    $out = '';
    $n = 0;
    foreach ($slugs as $slug) {
        $s = dr_service($slug);
        if (!$s) continue;
        $tint = ($n % 3) + 1;
        $out .= '<a class="service-card-with-image card-tint-' . $tint . ' reveal-up reveal-delay-' . $tint . '" href="/services/' . h($s['slug']) . '/">'
              . '<div class="service-card__image">' . dr_picture($s['image'], $s['alt'], ['sizes' => $sizes]) . '</div>'
              . '<div class="service-card__body"><span class="service-card__icon">' . icon($s['icon'], 22) . '</span>'
              . '<h3>' . h($s['name']) . '</h3><p class="service-card__desc">' . h($s['description']) . '</p><ul>';
        foreach ($s['bullets'] as $b) $out .= '<li>' . h($b) . '</li>';
        $out .= '</ul><span class="service-card__cta">' . h($s['nav']) . ' details</span></div></a>';
        $n++;
    }
    return $out;
}

/**
 * Compact lead form (hero card, CTA band, estimate dialog). Posts to the Page One leads
 * endpoint; hidden fields, honeypot, attribution and the spam shield come from
 * p1_lead_hidden_fields(). $formId must be unique per form instance on a page.
 */
function dr_lead_form(string $formId, array $opt = []): string {
    global $formAction;
    $id       = preg_replace('/[^a-z0-9-]/', '', strtolower($formId));
    $selected = (string) ($opt['service'] ?? '');
    $button   = (string) ($opt['button'] ?? 'Request my estimate');
    $out  = '<form class="hero-form estimate-form" action="' . h($formAction) . '" method="POST">';
    $out .= p1_lead_hidden_fields($id);
    $out .= '<div class="form-row"><label class="sr-only" for="' . $id . '-name">Full name</label><input id="' . $id . '-name" type="text" name="name" placeholder="Full name" autocomplete="name" required></div>';
    $out .= '<div class="form-row"><label class="sr-only" for="' . $id . '-phone">Phone</label><input id="' . $id . '-phone" type="tel" name="phone" placeholder="Phone" autocomplete="tel" required></div>';
    $out .= '<div class="form-row"><label class="sr-only" for="' . $id . '-email">Email</label><input id="' . $id . '-email" type="email" name="email" placeholder="Email" autocomplete="email" required></div>';
    $out .= '<div class="form-row"><label class="sr-only" for="' . $id . '-service">Service needed</label><select id="' . $id . '-service" name="service">' . p1_service_options($selected) . '</select></div>';
    $out .= '<label class="consent" for="' . $id . '-terms"><input id="' . $id . '-terms" type="checkbox" name="terms_accepted" value="yes" required>'
          . '<span>I agree to the <a href="/terms/" target="_blank" rel="noopener">Terms</a> and <a href="/privacy-policy/" target="_blank" rel="noopener">Privacy Policy</a> and consent to be contacted. *</span></label>';
    $out .= '<button type="submit" class="btn btn-accent btn-block">' . h($button) . '</button>';
    $out .= '</form>';
    return $out;
}
