<?php
/**
 * Page: Service — Music Video Production
 * Status: BUILT by Claude per client authorization. DRAFT COPY beyond the hub blurb — needs
 * client review before being treated as final.
 */
$page_title = 'Music Video Production | Verve Creative Studio';
$meta_description = 'Creative, high-impact music videos that bring your sound to life visually — music video production from Verve Creative Studio.';
$current_page = 'services';
require __DIR__ . '/../includes/header.php';
require_once __DIR__ . '/../includes/image-helpers.php';
require_once __DIR__ . '/../includes/services-helpers.php';

$services_list = [
    'Music Video Concept Development', 'Performance Videos', 'Narrative Music Videos',
    'Lyric Videos', 'Behind-the-Scenes Content', 'Album Artwork & Visualisers',
    'Live Performance Filming', 'Multi-Location Shoots', 'Choreography Coverage',
    'Colour Grading & Visual Effects', 'Social Media Cutdowns', 'Artist Promotional Content',
];
?>

<div class="wizard-breadcrumb">
  <div class="wrap"><a href="<?php echo SITE_URL; ?>/">Home</a> / <a href="<?php echo SITE_URL; ?>/services/">Services</a> / <span>Music Video Production</span></div>
</div>

<section class="hero">
  <div class="wrap hero-grid">
    <div>
      <p class="eyebrow" style="margin-bottom:22px;">Music Video Production</p>
      <h1>Visuals That<br><span class="gold-word">Hit Different.</span></h1>
      <div class="gold-underline"></div>
      <p class="lead">Every track has a visual waiting to be discovered. We work closely with artists to translate sound into striking, original imagery &mdash; from concept and treatment to full production and final cut.</p>
      <div class="service-hero-actions">
        <a href="<?php echo SITE_URL; ?>/book/" class="btn btn-solid">Book This Service</a>
        <a href="<?php echo SITE_URL; ?>/portfolio/" class="btn btn-outline">View Our Work</a>
      </div>
    </div>
    <div class="hero-visual art-panel"><?php render_photo('services/music-video', 'Music Video Production', 'large', true); ?></div>
  </div>
</section>

<section>
  <div class="wrap">
    <p class="eyebrow">Our Music Video Services</p>
    <?php render_service_checklist($services_list); ?>
  </div>
</section>

<section class="cta-band">
  <div class="wrap">
    <h2>Let's Bring Your Sound to Life.</h2>
    <p>Tell us about the track, and the world you want to build around it.</p>
    <div class="cta-actions">
      <a href="<?php echo SITE_URL; ?>/book/" class="btn btn-solid">Book a Project &rarr;</a>
      <a href="<?php echo SITE_URL; ?>/contact" class="btn btn-outline">Get in Touch</a>
    </div>
  </div>
</section>

<?php require __DIR__ . '/../includes/footer.php'; ?>
