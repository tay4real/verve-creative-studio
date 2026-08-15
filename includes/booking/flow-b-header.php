<?php
/**
 * Shared banner chrome for every Flow B step.
 * Expects: $service (the catalog entry array from flow_b_service_catalog())
 */
require_once __DIR__ . '/../image-helpers.php';
?>
<div class="wizard-breadcrumb">
  <div class="wrap"><a href="<?php echo SITE_URL; ?>/">Home</a> / <a href="<?php echo SITE_URL; ?>/book/">Bookings</a> / <span><?php echo htmlspecialchars($service['title']); ?></span></div>
</div>

<section class="wizard-banner">
  <div class="wrap wizard-banner-grid">
    <div>
      <h1><?php echo htmlspecialchars($service['title']); ?></h1>
      <p class="wizard-tagline"><?php echo htmlspecialchars($service['tagline']); ?></p>
      <p class="wizard-intro"><?php echo htmlspecialchars($service['intro']); ?></p>
    </div>
    <div class="wizard-banner-photo art-panel"><?php render_photo($service['image'], $service['title'], 'large', true); ?></div>
  </div>
</section>
