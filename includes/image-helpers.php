<?php
/**
 * Renders a <picture> element with a WebP source and a JPEG fallback, filling whatever
 * container it's placed in (via CSS object-fit:cover — see .real-photo in style.css).
 *
 * $basePath  — path under assets/images/ WITHOUT extension, e.g. 'services/wedding'
 * $size      — 'large' (1600px, for hero/full-width panels) or 'sm' (640px, for cards/thumbnails)
 * $alt       — accessible alt text, required
 * $eager     — true for above-the-fold hero images (loads immediately), false for anything
 *              further down the page (lazy-loads only when scrolled near)
 */
function render_photo(string $basePath, string $alt, string $size = 'large', bool $eager = false): void {
    $suffix = $size === 'sm' ? '-sm' : '';
    $webp = SITE_URL . '/assets/images/' . $basePath . $suffix . '.webp';
    $jpg  = SITE_URL . '/assets/images/' . $basePath . $suffix . '.jpg';
    $loading = $eager ? 'eager' : 'lazy';
    $fetchpriority = $eager ? ' fetchpriority="high"' : '';
    echo '<picture class="real-photo">';
    echo '<source srcset="' . htmlspecialchars($webp) . '" type="image/webp">';
    echo '<img src="' . htmlspecialchars($jpg) . '" alt="' . htmlspecialchars($alt) . '" loading="' . $loading . '"' . $fetchpriority . '>';
    echo '</picture>';
}
