<?php
/**
 * Dynamically generates sitemap.xml from includes/sitemap-routes.php.
 * Requested as /sitemap.xml — see the .htaccess rewrite that maps that clean URL to this file.
 * Only outputs routes marked 'live' => true, so blocked/unbuilt pages never get submitted to search engines.
 */
require_once __DIR__ . '/includes/config.php';
$routes = require __DIR__ . '/includes/sitemap-routes.php';

header('Content-Type: application/xml; charset=utf-8');
echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
<?php foreach ($routes as $route): ?>
<?php if (empty($route['live'])) continue; ?>
  <url>
    <loc><?php echo htmlspecialchars(SITE_DOMAIN . $route['path']); ?></loc>
    <changefreq><?php echo htmlspecialchars($route['changefreq']); ?></changefreq>
    <priority><?php echo htmlspecialchars($route['priority']); ?></priority>
  </url>
<?php endforeach; ?>
</urlset>
