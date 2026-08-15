<?php
/**
 * Page: Service — Wedding Film & Photography
 * Status: BUILT by Claude per client authorization — no dedicated design was sent for this
 * page; built following the established Services Hub / booking wizard visual pattern.
 * Copy is CONFIRMED (client-provided). "Book This Service" links directly to the real
 * Flow A wizard (Step 1: Coverage) since that's already built for this exact service.
 */
$page_title = 'Wedding Film & Photography | Verve Creative Studio';
$meta_description = 'Beautifully preserving your love story — elegant wedding films and timeless photography from Verve Creative Studio.';
$current_page = 'services';
require __DIR__ . '/../includes/header.php';
require_once __DIR__ . '/../includes/image-helpers.php';
require_once __DIR__ . '/../includes/services-helpers.php';

$services_list = [
    'Wedding Cinematography', 'Wedding Photography', 'Engagement Sessions', 'Pre-Wedding Shoots',
    'Traditional Wedding Coverage', 'White Wedding Coverage', 'Civil Ceremony Coverage',
    'Bridal Preparation', 'Groom Preparation', 'Reception Coverage', 'Drone Coverage',
    'Same-Day Edit', 'Wedding Highlight Films', 'Full Documentary Wedding Films',
    'Wedding Albums', 'Luxury Prints', 'Online Gallery Delivery', 'Destination Weddings',
];
?>

<div class="wizard-breadcrumb">
  <div class="wrap"><a href="<?php echo SITE_URL; ?>/">Home</a> / <a href="<?php echo SITE_URL; ?>/services/">Services</a> / <span>Wedding Film &amp; Photography</span></div>
</div>

<section class="hero">
  <div class="wrap hero-grid">
    <div>
      <p class="eyebrow" style="margin-bottom:22px;">Wedding Film &amp; Photography</p>
      <h1>Beautifully Preserving<br>Your <span class="gold-word">Love Story.</span></h1>
      <div class="gold-underline"></div>
      <p class="lead">Your wedding deserves more than documentation&mdash;it deserves storytelling. We create elegant wedding films and timeless photography that capture genuine emotions, unforgettable moments, and every beautiful detail of your special day.</p>
      <p style="color:var(--muted);font-size:14.5px;max-width:460px;margin:-14px 0 26px;">Our approach is discreet, artistic, and cinematic, allowing couples to relive their celebration for generations.</p>
      <div class="service-hero-actions">
        <a href="<?php echo SITE_URL; ?>/book/flow-a/steps/coverage" class="btn btn-solid">Book Your Date</a>
        <a href="<?php echo SITE_URL; ?>/portfolio/" class="btn btn-outline">View Wedding Films</a>
      </div>
    </div>
    <div class="hero-visual art-panel"><?php render_photo('services/wedding', 'Wedding Film & Photography', 'large', true); ?></div>
  </div>
</section>

<section>
  <div class="wrap">
    <p class="eyebrow">Wedding Services</p>
    <?php render_service_checklist($services_list); ?>
  </div>
</section>

<section class="cta-band">
  <div class="wrap">
    <h2>Book Your Date, Capture Your Forever.</h2>
    <p>Tell us about your special day and let us create timeless memories you will cherish forever.</p>
    <div class="cta-actions">
      <a href="<?php echo SITE_URL; ?>/book/flow-a/steps/coverage" class="btn btn-solid">Book Your Date &rarr;</a>
      <a href="<?php echo SITE_URL; ?>/contact" class="btn btn-outline">Get in Touch</a>
    </div>
  </div>
</section>

<?php require __DIR__ . '/../includes/footer.php'; ?>
