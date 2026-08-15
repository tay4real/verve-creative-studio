<?php
/**
 * Page: Service — Creative Direction
 * Status: BUILT by Claude per client authorization. DRAFT COPY beyond the hub blurb — needs
 * client review before being treated as final.
 */
$page_title = 'Creative Direction | Verve Creative Studio';
$meta_description = 'Concept development, creative supervision and visual storytelling that guides your project — creative direction from Verve Creative Studio.';
$current_page = 'services';
require __DIR__ . '/../includes/header.php';
require_once __DIR__ . '/../includes/image-helpers.php';
require_once __DIR__ . '/../includes/services-helpers.php';

$services_list = [
    'Concept Development', 'Creative Concept Pitching', 'Art Direction',
    'Visual Identity Guidance', 'Campaign Ideation', 'Mood Boarding & Style Guides',
    'Set & Styling Direction', 'Creative Supervision On Set',
    'Post-Production Creative Oversight', 'Brand Storytelling Strategy',
];
?>

<div class="wizard-breadcrumb">
  <div class="wrap"><a href="<?php echo SITE_URL; ?>/">Home</a> / <a href="<?php echo SITE_URL; ?>/services/">Services</a> / <span>Creative Direction</span></div>
</div>

<section class="hero">
  <div class="wrap hero-grid">
    <div>
      <p class="eyebrow" style="margin-bottom:22px;">Creative Direction</p>
      <h1>The Vision<br>Behind the <span class="gold-word">Work.</span></h1>
      <div class="gold-underline"></div>
      <p class="lead">Every strong project starts with a clear creative vision. We provide the concept development, art direction, and creative oversight that ties a project's visuals, tone, and messaging together &mdash; whether you're building a campaign, a brand, or a body of work.</p>
      <div class="service-hero-actions">
        <a href="<?php echo SITE_URL; ?>/book/" class="btn btn-solid">Book This Service</a>
        <a href="<?php echo SITE_URL; ?>/portfolio/" class="btn btn-outline">View Our Work</a>
      </div>
    </div>
    <div class="hero-visual art-panel"><?php render_photo('services/creative-direction', 'Creative Direction', 'large', true); ?></div>
  </div>
</section>

<section>
  <div class="wrap">
    <p class="eyebrow">Our Creative Direction Services</p>
    <?php render_service_checklist($services_list); ?>
  </div>
</section>

<section class="cta-band">
  <div class="wrap">
    <h2>Let's Shape Your Vision.</h2>
    <p>Tell us what you're building, and where it needs to go creatively.</p>
    <div class="cta-actions">
      <a href="<?php echo SITE_URL; ?>/book/" class="btn btn-solid">Book a Project &rarr;</a>
      <a href="<?php echo SITE_URL; ?>/contact" class="btn btn-outline">Get in Touch</a>
    </div>
  </div>
</section>

<?php require __DIR__ . '/../includes/footer.php'; ?>
