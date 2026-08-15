<?php
/**
 * Page: Service — Training & Consultation
 * Status: BUILT by Claude per client authorization. DRAFT COPY beyond the hub blurb — needs
 * client review. IMPORTANT GAP: the original brief (Section 3) references a "detailed course
 * catalogue" as already compiled for this service, but it was never actually sent — the list
 * below is generic training categories only, NOT real course names, prices, or schedules.
 * Flag this specifically when reviewing; the real catalogue should replace this list.
 */
$page_title = 'Training & Consultation | Verve Creative Studio';
$meta_description = 'Industry training, creative mentorship and consultation to grow your skills and vision — from Verve Creative Studio.';
$current_page = 'services';
require __DIR__ . '/../includes/header.php';
require_once __DIR__ . '/../includes/image-helpers.php';
require_once __DIR__ . '/../includes/services-helpers.php';

$services_list = [
    'Photography Masterclasses', 'Videography & Filmmaking Training',
    'Creative Direction Mentorship', 'Portfolio Reviews',
    'Business & Pricing Consultation for Creatives', 'One-to-One Mentorship Sessions',
    'Group Workshops', 'Equipment & Technique Training', 'Editing & Post-Production Training',
];
?>

<div class="wizard-breadcrumb">
  <div class="wrap"><a href="<?php echo SITE_URL; ?>/">Home</a> / <a href="<?php echo SITE_URL; ?>/services/">Services</a> / <span>Training &amp; Consultation</span></div>
</div>

<section class="hero">
  <div class="wrap hero-grid">
    <div>
      <p class="eyebrow" style="margin-bottom:22px;">Training &amp; Consultation</p>
      <h1>Grow Your Skills.<br>Sharpen Your <span class="gold-word">Vision.</span></h1>
      <div class="gold-underline"></div>
      <p class="lead">Whether you're starting out or sharpening an existing practice, we share what we've learned across years of production, photography, and creative direction &mdash; through hands-on training, mentorship, and one-to-one consultation.</p>
      <div class="service-hero-actions">
        <a href="<?php echo SITE_URL; ?>/book/training/" class="btn btn-solid">Enrol Your Interest</a>
      </div>
    </div>
    <div class="hero-visual art-panel"><?php render_photo('services/training-consultation', 'Training & Consultation', 'large', true); ?></div>
  </div>
</section>

<section>
  <div class="wrap">
    <p class="eyebrow">Training Categories</p>
    <p style="color:var(--muted);font-size:13px;max-width:600px;margin-bottom:20px;">Note: a detailed course catalogue was referenced in the original project brief but not yet received — the list below covers general categories only, not specific course names, prices, or schedules.</p>
    <?php render_service_checklist($services_list); ?>
  </div>
</section>

<section class="cta-band">
  <div class="wrap">
    <h2>Ready to Learn With Us?</h2>
    <p>Tell us your experience level and what you'd like to grow into.</p>
    <div class="cta-actions">
      <a href="<?php echo SITE_URL; ?>/book/training/" class="btn btn-solid">Enrol Your Interest &rarr;</a>
      <a href="<?php echo SITE_URL; ?>/contact" class="btn btn-outline">Get in Touch</a>
    </div>
  </div>
</section>

<?php require __DIR__ . '/../includes/footer.php'; ?>
