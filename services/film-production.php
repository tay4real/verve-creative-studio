<?php
/**
 * Page: Service — Film Production
 * Status: BUILT by Claude per client authorization — no dedicated design was sent for this
 * page; built following the established Services Hub / booking wizard visual pattern.
 * Copy is CONFIRMED (client-provided, from content-received/services-copy.md), not drafted.
 */
$page_title = 'Film Production | Verve Creative Studio';
$meta_description = 'Cinematic storytelling that inspires — commercial films, brand films, documentaries, and full-service film production from Verve Creative Studio.';
$current_page = 'services';
require __DIR__ . '/../includes/header.php';
require_once __DIR__ . '/../includes/image-helpers.php';
require_once __DIR__ . '/../includes/services-helpers.php';

$services_list = [
    'Commercial Films', 'Brand Films', 'Corporate Films', 'Promotional Videos', 'Short Films',
    'Feature Film Production', 'Documentary Films', 'Event Coverage', 'Interviews',
    'Behind-the-Scenes Content', 'Educational Videos', 'Social Media Video Campaigns',
    'Drone Cinematography', 'Multi-Camera Productions', 'Live Event Recording', 'Livestream Production',
];
?>

<div class="wizard-breadcrumb">
  <div class="wrap"><a href="<?php echo SITE_URL; ?>/">Home</a> / <a href="<?php echo SITE_URL; ?>/services/">Services</a> / <span>Film Production</span></div>
</div>

<section class="hero">
  <div class="wrap hero-grid">
    <div>
      <p class="eyebrow" style="margin-bottom:22px;">Film Production</p>
      <h1>Cinematic Storytelling<br>That <span class="gold-word">Inspires.</span></h1>
      <div class="gold-underline"></div>
      <p class="lead">Every great film begins with a story worth telling. At Verve Creative Studio, we produce visually compelling films that captivate audiences, communicate powerful messages, and leave lasting impressions.</p>
      <p style="color:var(--muted);font-size:14.5px;max-width:460px;margin:-14px 0 26px;">Our experienced production team manages every stage of the filmmaking process&mdash;from concept development and scripting to filming, editing, colour grading, sound design, and final delivery.</p>
      <div class="service-hero-actions">
        <a href="<?php echo SITE_URL; ?>/book/" class="btn btn-solid">Book This Service</a>
        <a href="<?php echo SITE_URL; ?>/portfolio/" class="btn btn-outline">View Our Films</a>
      </div>
    </div>
    <div class="hero-visual art-panel"><?php render_photo('services/film-production', 'Film Production', 'large', true); ?></div>
  </div>
</section>

<section>
  <div class="wrap">
    <p class="eyebrow">Our Film Production Services</p>
    <?php render_service_checklist($services_list); ?>
    <p class="service-quote">Our films are crafted using cinematic techniques and industry-standard equipment to ensure every project reflects the highest production value.</p>
  </div>
</section>

<section class="cta-band">
  <div class="wrap">
    <h2>Ready to Tell Your Story?</h2>
    <p>Let's talk about the film you want to make.</p>
    <div class="cta-actions">
      <a href="<?php echo SITE_URL; ?>/book/" class="btn btn-solid">Book a Project &rarr;</a>
      <a href="<?php echo SITE_URL; ?>/contact" class="btn btn-outline">Get in Touch</a>
    </div>
  </div>
</section>

<?php require __DIR__ . '/../includes/footer.php'; ?>
