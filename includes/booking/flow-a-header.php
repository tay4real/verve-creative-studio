<?php
/**
 * Shared banner/progress chrome for every Flow A step.
 * Expects, set by the calling step file before including this:
 *   $service_title, $service_tagline, $service_intro — text in the left column of the banner
 *   $current_step (1-10) — drives the progress bar's done/active/upcoming states
 */
require_once __DIR__ . '/flow-a-shared.php';
require_once __DIR__ . '/../image-helpers.php';
?>
<div class="wizard-breadcrumb">
  <div class="wrap">
    <a href="<?php echo SITE_URL; ?>/">Home</a> / <a href="<?php echo SITE_URL; ?>/book/">Bookings</a> / <span><?php echo htmlspecialchars($service_title); ?></span>
  </div>
</div>

<section class="wizard-banner">
  <div class="wrap wizard-banner-grid">
    <div>
      <h1><?php echo htmlspecialchars($service_title); ?></h1>
      <p class="wizard-tagline"><?php echo htmlspecialchars($service_tagline); ?></p>
      <p class="wizard-intro"><?php echo htmlspecialchars($service_intro); ?></p>
      <div class="wizard-trust-row">
        <div class="trust-item">
          <div class="trust-icon">&#10003;</div>
          <div><h4>Secure Booking</h4><p>Your information is safe with us</p></div>
        </div>
        <div class="trust-item">
          <div class="trust-icon">&#8987;</div>
          <div><h4>Quick &amp; Easy</h4><p>Takes just a few minutes</p></div>
        </div>
        <div class="trust-item">
          <div class="trust-icon">&#9742;</div>
          <div><h4>24/7 Support</h4><p>We're here to help you every step</p></div>
        </div>
      </div>
    </div>
    <div class="wizard-banner-photo art-panel"><?php render_photo('services/wedding', 'Wedding Film & Photography', 'large', true); ?></div>
  </div>
</section>

<div class="wrap">
  <div class="wizard-progress">
    <?php foreach ($flow_a_steps as $i => $label): $n = $i + 1;
      $state = $n < $current_step ? 'done' : ($n === $current_step ? 'active' : 'upcoming'); ?>
    <div class="wizard-step <?php echo $state; ?>">
      <div class="wizard-step-circle"><?php echo $n < $current_step ? '&check;' : $n; ?></div>
      <div class="wizard-step-label"><?php echo htmlspecialchars($label); ?></div>
    </div>
    <?php endforeach; ?>
  </div>
</div>
