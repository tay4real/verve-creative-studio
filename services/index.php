<?php
/**
 * Page: Services Hub
 * Status: BUILT — pending client approval. Design source: hero + 10-card grid mockup (services hub).
 *
 * Flagged inferences (report back before marking Approved on the checklist):
 *  1. Hero headline/subcopy uses the exact text shown in the design ("Creative Solutions.
 *     Timeless Impact.") rather than the longer intro paragraph sent earlier — that longer
 *     paragraph is used as this page's meta description instead.
 *  2. "Art Exhibitions" card's Explore link points to /exhibitions/ (existing section) rather
 *     than a new standalone service page, per Section 5's "Exhibition Services as offered via
 *     booking" framing. Flag if a dedicated services/art-exhibitions.php page is wanted instead.
 *
 * NOTE: This is the HUB only. The individual service detail pages (Film Production, Wedding
 * Film & Photography, Photography, etc.) remain BLOCKED — no design received for those yet,
 * even though full copy exists for three of them (see content-received/services-copy.md).
 */
$page_title = 'Our Services | Verve Creative Studio';
$meta_description = 'At Verve Creative Studio, we deliver premium creative solutions combining artistic vision, cinematic storytelling, and technical excellence — from intimate celebrations to large-scale productions.';
$current_page = 'services';
require __DIR__ . '/../includes/header.php';

// Icon SVGs kept inline and small so each card stays a single self-contained block below.
$icons = [
    'film' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M3 8l1.5-4h4L7 8"/><path d="M8.5 8L10 4h4l-1.5 4"/><path d="M14 8l1.5-4h4L18 8"/><rect x="3" y="8" width="18" height="12" rx="1"/></svg>',
    'rings' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="9" cy="14" r="5"/><circle cx="15" cy="14" r="5"/></svg>',
    'camera' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M4 8h3l2-2h6l2 2h3v11H4z"/><circle cx="12" cy="13" r="3.5"/></svg>',
    'briefcase' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="3" y="8" width="18" height="11" rx="1"/><path d="M8 8V6a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"/></svg>',
    'music' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M9 18V5l10-2v13"/><circle cx="7" cy="18" r="2.2"/><circle cx="17" cy="16" r="2.2"/></svg>',
    'palette' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M12 3a9 8 0 1 0 0 16c1 0 1.8-.8 1.8-1.8 0-.5-.2-.9-.5-1.2-.3-.3-.5-.7-.5-1.2 0-1 .8-1.8 1.8-1.8H16a4 4 0 0 0 4-4c0-4.4-3.6-6-8-6z"/><circle cx="7.5" cy="10.5" r="1"/><circle cx="9.5" cy="7" r="1"/><circle cx="14.5" cy="7" r="1"/></svg>',
    'frame' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="3" y="4" width="18" height="14" rx="1"/><path d="M3 15l5-5 4 4 3-3 6 6"/></svg>',
    'bulb' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M9 18h6"/><path d="M10 21h4"/><path d="M12 3a6 6 0 0 0-3.5 10.9c.5.4.8 1 .8 1.6V16h5.4v-.5c0-.6.3-1.2.8-1.6A6 6 0 0 0 12 3z"/></svg>',
    'megaphone' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M3 10v4h3l5 4V6l-5 4H3z"/><path d="M16 9a4 4 0 0 1 0 6"/><path d="M18.5 6.5a8 8 0 0 1 0 11"/></svg>',
    'cap' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M12 4L2 9l10 5 10-5-10-5z"/><path d="M6 11.5V16c0 1.7 2.7 3 6 3s6-1.3 6-3v-4.5"/></svg>',
];

// Single source for the grid — title, description, icon, and link all live together so the
// markup below stays a simple loop instead of ten near-identical hand-written blocks.
$services = [
    ['icon' => 'film',      'title' => 'Film Production',          'desc' => 'Cinematic storytelling from concept to screen. Movies, short films, documentaries & more.', 'link' => SITE_URL . '/services/film-production', 'image' => 'services/film-production'],
    ['icon' => 'rings',     'title' => 'Wedding Film & Photography', 'desc' => 'Beautifully capturing your most cherished moments with elegance and emotion.', 'link' => SITE_URL . '/services/wedding-film-photography', 'image' => 'services/wedding'],
    ['icon' => 'camera',    'title' => 'Photography',              'desc' => 'Portraits, events, lifestyle, commercial and fine art photography.', 'link' => SITE_URL . '/services/photography', 'image' => 'services/photography'],
    ['icon' => 'briefcase', 'title' => 'Corporate Content',        'desc' => "Professional video and photo content that communicates your brand's value and vision.", 'link' => SITE_URL . '/services/corporate-content', 'image' => 'services/corporate-content'],
    ['icon' => 'music',     'title' => 'Music Video Production',   'desc' => 'Creative, high-impact music videos that bring your sound to life visually.', 'link' => SITE_URL . '/services/music-video-production', 'image' => 'services/music-video'],
    ['icon' => 'palette',   'title' => 'Artwork Commission',       'desc' => 'Original paintings and digital artworks created to express your story and style.', 'link' => SITE_URL . '/services/artwork-commission', 'image' => 'services/artwork-commission'],
    ['icon' => 'frame',     'title' => 'Art Exhibitions',          'desc' => 'Curating and organizing exhibitions that showcase talent and inspire audiences.', 'link' => SITE_URL . '/exhibitions/', 'image' => 'services/exhibitions'],
    ['icon' => 'bulb',      'title' => 'Creative Direction',       'desc' => 'Concept development, creative supervision and visual storytelling that guides your project.', 'link' => SITE_URL . '/services/creative-direction', 'image' => 'services/creative-direction'],
    ['icon' => 'megaphone', 'title' => 'Brand Content Creation',   'desc' => 'Compelling content that elevates your brand and connects with your audience.', 'link' => SITE_URL . '/services/brand-content-creation', 'image' => 'services/brand-content'],
    ['icon' => 'cap',       'title' => 'Training & Consultation',  'desc' => 'Industry training, creative mentorship and consultation to grow your skills and vision.', 'link' => SITE_URL . '/services/training-consultation', 'image' => 'services/training-consultation'],
];
require_once __DIR__ . '/../includes/image-helpers.php';
?>

<!-- ============ HERO ============ -->
<section class="hero">
  <div class="wrap hero-grid">
    <div>
      <p class="eyebrow" style="margin-bottom:22px;">Our Services</p>
      <h1>Creative Solutions.<br>Timeless <span class="gold-word">Impact.</span></h1>
      <div class="gold-underline"></div>
      <p class="lead">From powerful films to unforgettable events, original artwork to strategic brand storytelling &ndash; we bring ideas to life with creativity, precision and purpose.</p>
    </div>
    <div class="hero-visual art-panel">
      <?php render_photo('home-hero', 'Verve Creative Studio', 'large', true); ?>
    </div>
  </div>
</section>

<!-- ============ SERVICES GRID ============ -->
<section style="padding-top:60px;">
  <div class="wrap">
    <div class="services-full-grid">
      <?php foreach ($services as $s): ?>
      <div class="service-full-card">
        <div class="art-panel"><?php render_photo($s['image'], $s['title'], 'sm'); ?></div>
        <div class="sfc-body">
          <div class="service-icon-badge"><?php echo $icons[$s['icon']]; ?></div>
          <h3><?php echo htmlspecialchars($s['title']); ?></h3>
          <p><?php echo htmlspecialchars($s['desc']); ?></p>
          <a href="<?php echo $s['link']; ?>" class="explore-link">Explore Service &rarr;</a>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php require __DIR__ . '/../includes/footer.php'; ?>
