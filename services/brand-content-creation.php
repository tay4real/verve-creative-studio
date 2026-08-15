<?php
/**
 * Page: Service — Brand Content Creation
 * Status: BUILT by Claude per client authorization. DRAFT COPY beyond the hub blurb — needs
 * client review before being treated as final.
 */
$page_title = 'Brand Content Creation | Verve Creative Studio';
$meta_description = 'Compelling content that elevates your brand and connects with your audience — brand content creation from Verve Creative Studio.';
$current_page = 'services';
require __DIR__ . '/../includes/header.php';
require_once __DIR__ . '/../includes/image-helpers.php';
require_once __DIR__ . '/../includes/services-helpers.php';

$services_list = [
    'Social Media Content Photography', 'Social Media Video Content', 'Brand Photography',
    'Product Content Creation', 'Content Calendars & Batching', 'Influencer-Style Content',
    'Website & Landing Page Visuals', 'Advertising Creative Assets',
    'Brand Refresh Content', 'Ongoing Content Retainers',
];
?>

<div class="wizard-breadcrumb">
  <div class="wrap"><a href="<?php echo SITE_URL; ?>/">Home</a> / <a href="<?php echo SITE_URL; ?>/services/">Services</a> / <span>Brand Content Creation</span></div>
</div>

<section class="hero">
  <div class="wrap hero-grid">
    <div>
      <p class="eyebrow" style="margin-bottom:22px;">Brand Content Creation</p>
      <h1>Content That<br><span class="gold-word">Connects.</span></h1>
      <div class="gold-underline"></div>
      <p class="lead">Consistent, compelling content is what keeps a brand visible and trusted. We create photo and video content built specifically for how your brand shows up &mdash; on social, on your website, and everywhere your audience finds you.</p>
      <div class="service-hero-actions">
        <a href="<?php echo SITE_URL; ?>/book/" class="btn btn-solid">Book This Service</a>
        <a href="<?php echo SITE_URL; ?>/portfolio/" class="btn btn-outline">View Our Work</a>
      </div>
    </div>
    <div class="hero-visual art-panel"><?php render_photo('services/brand-content', 'Brand Content Creation', 'large', true); ?></div>
  </div>
</section>

<section>
  <div class="wrap">
    <p class="eyebrow">Our Brand Content Services</p>
    <?php render_service_checklist($services_list); ?>
  </div>
</section>

<section class="cta-band">
  <div class="wrap">
    <h2>Let's Build Your Content Engine.</h2>
    <p>Tell us about your brand, and where your audience actually spends their time.</p>
    <div class="cta-actions">
      <a href="<?php echo SITE_URL; ?>/book/" class="btn btn-solid">Book a Project &rarr;</a>
      <a href="<?php echo SITE_URL; ?>/contact" class="btn btn-outline">Get in Touch</a>
    </div>
  </div>
</section>

<?php require __DIR__ . '/../includes/footer.php'; ?>
