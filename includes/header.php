<?php
/**
 * Shared site header — extracted from the approved Home build.
 * Every public page should:
 *   1. require_once includes/db.php (if it needs data)
 *   2. optionally set SEO/nav variables BEFORE including this file:
 *        $page_title        — <title> and og:title/twitter:title. Falls back to the site default.
 *        $meta_description  — <meta description> and social preview text. Keep to ~150-160 chars.
 *        $current_page      — nav active-state: home, about, services, portfolio, exhibitions, journal, contact
 *        $canonical_path    — override if a page needs a canonical different from its own URL
 *                              (e.g. paginated listings should canonicalize to page 1)
 *        $og_image          — full URL to a 1200x630 share image; falls back to the logo
 *        $noindex           — set true for admin/dashboard/internal pages to keep them out of search results
 *        $extra_schema      — a raw JSON-LD string (without <script> tags) for page-specific structured
 *                              data (e.g. Article, Service, Event) added alongside the sitewide Organization schema
 *   3. require __DIR__ . '/../includes/header.php';
 */
require_once __DIR__ . '/config.php';

$page_title = $page_title ?? 'Verve Creative Studio — We Create Beyond Vision';
$meta_description = $meta_description ?? 'Verve Creative Studio is a full-service creative house specialising in film, photography, artwork, and exhibitions. We turn ideas into timeless visual experiences.';
$current_page = $current_page ?? '';
$noindex = $noindex ?? false;

$request_path = strtok($_SERVER['REQUEST_URI'], '?'); // strip query string for a clean canonical
$canonical_path = $canonical_path ?? $request_path;
$canonical_url = SITE_DOMAIN . $canonical_path;
$og_image = $og_image ?? SITE_DOMAIN . SITE_URL . '/assets/images/logo.png'; // TODO: swap for a dedicated 1200x630 social share banner once designed

function nav_active($key, $current) {
    return $key === $current ? 'active' : '';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo htmlspecialchars($page_title); ?></title>
<meta name="description" content="<?php echo htmlspecialchars($meta_description); ?>">
<link rel="canonical" href="<?php echo htmlspecialchars($canonical_url); ?>">
<meta name="robots" content="<?php echo $noindex ? 'noindex, nofollow' : 'index, follow'; ?>">

<!-- Open Graph / social sharing -->
<meta property="og:type" content="website">
<meta property="og:site_name" content="Verve Creative Studio">
<meta property="og:title" content="<?php echo htmlspecialchars($page_title); ?>">
<meta property="og:description" content="<?php echo htmlspecialchars($meta_description); ?>">
<meta property="og:url" content="<?php echo htmlspecialchars($canonical_url); ?>">
<meta property="og:image" content="<?php echo htmlspecialchars($og_image); ?>">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="<?php echo htmlspecialchars($page_title); ?>">
<meta name="twitter:description" content="<?php echo htmlspecialchars($meta_description); ?>">
<meta name="twitter:image" content="<?php echo htmlspecialchars($og_image); ?>">

<!-- Sitewide structured data — every page carries this; add $extra_schema before including
     header.php for page-specific schema (Article, Service, Event, etc.) once those pages are built -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "Verve Creative Studio",
  "url": "<?php echo SITE_DOMAIN . SITE_URL; ?>/",
  "logo": "<?php echo $og_image; ?>"
}
</script>
<?php if (!empty($extra_schema)): ?>
<script type="application/ld+json">
<?php echo $extra_schema; ?>
</script>
<?php endif; ?>

<link rel="icon" type="image/png" href="<?php echo SITE_URL; ?>/assets/images/logo.png">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;1,400;1,500&family=Jost:wght@300;400;500;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="<?php echo SITE_URL; ?>/assets/css/style.css">
</head>
<body>

<header>
  <div class="nav-inner">
    <a href="<?php echo SITE_URL; ?>/" class="logo">
      <img src="<?php echo SITE_URL; ?>/assets/images/logo.png" alt="Verve Creative Studio" class="mark-img">
      <span>
        <span class="name">VERVE</span>
        <span class="sub">CREATIVE STUDIO</span>
      </span>
    </a>
    <nav class="links" id="desktopNav">
      <a href="<?php echo SITE_URL; ?>/" class="<?php echo nav_active('home', $current_page); ?>">Home</a>
      <a href="<?php echo SITE_URL; ?>/about" class="<?php echo nav_active('about', $current_page); ?>">About</a>
      <a href="<?php echo SITE_URL; ?>/services/" class="<?php echo nav_active('services', $current_page); ?>">Services</a>
      <a href="<?php echo SITE_URL; ?>/portfolio/" class="<?php echo nav_active('portfolio', $current_page); ?>">Portfolio</a>
      <a href="<?php echo SITE_URL; ?>/exhibitions/" class="<?php echo nav_active('exhibitions', $current_page); ?>">Exhibitions</a>
      <div class="dropdown" id="bookingsDropdown">
        <a href="#" class="dropdown-toggle">Bookings <span class="dropdown-caret">▾</span></a>
        <div class="dropdown-menu">
          <a href="<?php echo SITE_URL; ?>/book/">Book a Project</a>
          <a href="<?php echo SITE_URL; ?>/book/training/">Training &amp; Consultation</a>
          <a href="<?php echo SITE_URL; ?>/exhibitions/">Exhibition Tickets</a>
        </div>
      </div>
      <a href="<?php echo SITE_URL; ?>/journal/" class="<?php echo nav_active('journal', $current_page); ?>">Journal</a>
      <a href="<?php echo SITE_URL; ?>/contact" class="<?php echo nav_active('contact', $current_page); ?>">Contact</a>
    </nav>
    <div class="nav-right">
      <a href="<?php echo SITE_URL; ?>/book/" class="btn btn-outline header-cta" style="padding:13px 24px;">Book a Project</a>
      <button class="burger" id="burgerBtn" aria-label="Open menu" aria-expanded="false"><span></span><span></span><span></span></button>
    </div>
  </div>
</header>

<!-- Mobile drawer lives OUTSIDE <header> on purpose — header's backdrop-filter would otherwise
     trap this fixed-position panel inside the header's own tiny box instead of the full screen. -->
<div class="drawer-overlay" id="drawerOverlay"></div>
<aside class="mobile-drawer" id="mobileDrawer" aria-hidden="true">
  <nav class="drawer-links">
    <a href="<?php echo SITE_URL; ?>/" class="drawer-link <?php echo nav_active('home', $current_page); ?>">Home</a>
    <a href="<?php echo SITE_URL; ?>/about" class="drawer-link <?php echo nav_active('about', $current_page); ?>">About</a>
    <a href="<?php echo SITE_URL; ?>/services/" class="drawer-link <?php echo nav_active('services', $current_page); ?>">Services</a>
    <a href="<?php echo SITE_URL; ?>/portfolio/" class="drawer-link <?php echo nav_active('portfolio', $current_page); ?>">Portfolio</a>
    <a href="<?php echo SITE_URL; ?>/exhibitions/" class="drawer-link <?php echo nav_active('exhibitions', $current_page); ?>">Exhibitions</a>
    <div class="drawer-dropdown" id="bookingsDropdownMobile">
      <button type="button" class="drawer-link drawer-dropdown-toggle">
        <span>Bookings</span><span class="drawer-caret">⌄</span>
      </button>
      <div class="drawer-dropdown-panel">
        <a href="<?php echo SITE_URL; ?>/book/">Book a Project</a>
        <a href="<?php echo SITE_URL; ?>/book/training/">Training &amp; Consultation</a>
        <a href="<?php echo SITE_URL; ?>/exhibitions/">Exhibition Tickets</a>
      </div>
    </div>
    <a href="<?php echo SITE_URL; ?>/journal/" class="drawer-link <?php echo nav_active('journal', $current_page); ?>">Journal</a>
    <a href="<?php echo SITE_URL; ?>/contact" class="drawer-link <?php echo nav_active('contact', $current_page); ?>">Contact</a>
  </nav>
  <div class="drawer-cta">
    <a href="<?php echo SITE_URL; ?>/book/" class="btn btn-solid">Book a Project</a>
  </div>
</aside>
