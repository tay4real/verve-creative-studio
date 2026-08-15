<?php
/**
 * Page: Service — Corporate Content
 * Status: BUILT by Claude per client authorization. DRAFT COPY — the client's brief (Section 3)
 * referenced compiled content for this service, but only the one-line hub blurb was actually
 * sent. Everything below beyond that blurb is drafted by Claude and needs client review before
 * being treated as final.
 */
$page_title = 'Corporate Content | Verve Creative Studio';
$meta_description = 'Professional video and photo content that communicates your brand\'s value and vision — corporate content production from Verve Creative Studio.';
$current_page = 'services';
require __DIR__ . '/../includes/header.php';
require_once __DIR__ . '/../includes/image-helpers.php';
require_once __DIR__ . '/../includes/services-helpers.php';

$services_list = [
    'Corporate Video Production', 'Company Profile Videos', 'Internal Communications Videos',
    'Training Videos', 'Recruitment Videos', 'Executive Interviews', 'Annual Report Photography',
    'Conference & Seminar Coverage', 'Product Demonstration Videos', 'Testimonial Videos',
    'Corporate Event Photography', 'Office & Facility Photography',
    'Investor Presentation Content', 'Social Media Corporate Content',
];
?>

<div class="wizard-breadcrumb">
  <div class="wrap"><a href="<?php echo SITE_URL; ?>/">Home</a> / <a href="<?php echo SITE_URL; ?>/services/">Services</a> / <span>Corporate Content</span></div>
</div>

<section class="hero">
  <div class="wrap hero-grid">
    <div>
      <p class="eyebrow" style="margin-bottom:22px;">Corporate Content</p>
      <h1>Professional Content<br>That <span class="gold-word">Builds Trust.</span></h1>
      <div class="gold-underline"></div>
      <p class="lead">Your organisation's story deserves to be told with clarity and polish. We produce corporate video and photography that communicates who you are, what you stand for, and why it matters &mdash; for internal teams, external stakeholders, and everyone in between.</p>
      <div class="service-hero-actions">
        <a href="<?php echo SITE_URL; ?>/book/" class="btn btn-solid">Book This Service</a>
        <a href="<?php echo SITE_URL; ?>/portfolio/" class="btn btn-outline">View Our Work</a>
      </div>
    </div>
    <div class="hero-visual art-panel"><?php render_photo('services/corporate-content', 'Corporate Content', 'large', true); ?></div>
  </div>
</section>

<section>
  <div class="wrap">
    <p class="eyebrow">Our Corporate Content Services</p>
    <?php render_service_checklist($services_list); ?>
  </div>
</section>

<section class="cta-band">
  <div class="wrap">
    <h2>Let's Elevate Your Brand.</h2>
    <p>Tell us what your organisation needs to say, and to whom.</p>
    <div class="cta-actions">
      <a href="<?php echo SITE_URL; ?>/book/" class="btn btn-solid">Book a Project &rarr;</a>
      <a href="<?php echo SITE_URL; ?>/contact" class="btn btn-outline">Get in Touch</a>
    </div>
  </div>
</section>

<?php require __DIR__ . '/../includes/footer.php'; ?>
