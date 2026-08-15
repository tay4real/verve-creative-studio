<?php
/**
 * Page: Service — Artwork Commission
 * Status: BUILT by Claude per client authorization. DRAFT COPY beyond the hub blurb — needs
 * client review before being treated as final.
 */
$page_title = 'Artwork Commission | Verve Creative Studio';
$meta_description = 'Original paintings and digital artworks created to express your story and style — artwork commissions from Verve Creative Studio.';
$current_page = 'services';
require __DIR__ . '/../includes/header.php';
require_once __DIR__ . '/../includes/image-helpers.php';
require_once __DIR__ . '/../includes/services-helpers.php';

$services_list = [
    'Custom Portrait Commissions', 'Original Paintings', 'Digital Artwork Commissions',
    'Corporate & Office Art Commissions', 'Wedding & Family Commemorative Pieces',
    'Abstract & Conceptual Art', 'Mixed Media Artwork', 'Restoration-Inspired Reproductions',
    'Art Consultation & Concept Development', 'Framing & Presentation Advice',
];
?>

<div class="wizard-breadcrumb">
  <div class="wrap"><a href="<?php echo SITE_URL; ?>/">Home</a> / <a href="<?php echo SITE_URL; ?>/services/">Services</a> / <span>Artwork Commission</span></div>
</div>

<section class="hero">
  <div class="wrap hero-grid">
    <div>
      <p class="eyebrow" style="margin-bottom:22px;">Artwork Commission</p>
      <h1>Original Art,<br>Made <span class="gold-word">Personal.</span></h1>
      <div class="gold-underline"></div>
      <p class="lead">A commissioned piece carries something a print never can &mdash; intention. We work with clients to create original paintings and digital artworks that reflect their story, space, and style, from first sketch to finished piece.</p>
      <div class="service-hero-actions">
        <a href="<?php echo SITE_URL; ?>/book/" class="btn btn-solid">Book This Service</a>
        <a href="<?php echo SITE_URL; ?>/gallery/" class="btn btn-outline">View the Gallery</a>
      </div>
    </div>
    <div class="hero-visual art-panel"><?php render_photo('services/artwork-commission', 'Artwork Commission', 'large', true); ?></div>
  </div>
</section>

<section>
  <div class="wrap">
    <p class="eyebrow">Our Commission Services</p>
    <?php render_service_checklist($services_list); ?>
  </div>
</section>

<section class="cta-band">
  <div class="wrap">
    <h2>Commission a Piece That's Truly Yours.</h2>
    <p>Tell us about the story, space, or moment you want to capture in art.</p>
    <div class="cta-actions">
      <a href="<?php echo SITE_URL; ?>/book/" class="btn btn-solid">Book a Project &rarr;</a>
      <a href="<?php echo SITE_URL; ?>/contact" class="btn btn-outline">Get in Touch</a>
    </div>
  </div>
</section>

<?php require __DIR__ . '/../includes/footer.php'; ?>
