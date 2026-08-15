<?php
/**
 * Shared right-column sidebar for every Flow A step. Reads live state from the session,
 * so the summary reflects whatever's actually been selected so far.
 * Expects $current_step (1-10) to compute the completion percentage.
 */
$fa = flow_a_state();
$percent = (int) round(($current_step - 1) / 10 * 100);
?>
<aside class="wizard-sidebar">
  <div class="wizard-summary-card">
    <div class="wizard-summary-top">
      <div class="wizard-summary-thumb art-panel"><?php render_photo('services/wedding', 'Wedding Film & Photography', 'sm'); ?></div>
      <div>
        <h4>Wedding Film &amp; Photography</h4>
        <p class="wizard-summary-status">Booking in progress</p>
      </div>
    </div>
    <div class="wizard-progress-bar"><div class="wizard-progress-fill" style="width:<?php echo $percent; ?>%;"></div></div>
    <p class="wizard-progress-pct"><?php echo $percent; ?>% Complete</p>
    <div class="wizard-summary-rows">
      <div><span>Coverage</span><span><?php echo htmlspecialchars($fa['coverage_label'] ?? 'Not selected'); ?></span></div>
      <div><span>Duration</span><span><?php echo htmlspecialchars($fa['duration_label'] ?? '-'); ?></span></div>
      <div><span>Date</span><span><?php echo htmlspecialchars($fa['date'] ?? '-'); ?></span></div>
      <div><span>Time</span><span><?php echo htmlspecialchars($fa['time'] ?? '-'); ?></span></div>
      <div><span>Location</span><span><?php echo htmlspecialchars($fa['location'] ?? '-'); ?></span></div>
      <div><span>Add-ons</span><span><?php echo empty($fa['addons']) ? '-' : htmlspecialchars(implode(', ', array_column($fa['addons'], 'label'))); ?></span></div>
    </div>
    <div class="wizard-total"><span>Estimated Total</span><span class="amt">&pound;<?php echo number_format($fa['estimated_total'] ?? 0, 2); ?></span></div>
  </div>

  <div class="wizard-help">
    <h4>Need Help?</h4>
    <p>Speak with our booking specialist to help you plan your perfect day.</p>
    <div class="wizard-help-row">
      <div class="wizard-phone-icon">&#9742;</div>
      <div><strong>Call / WhatsApp:</strong><br>+44 7448 123456</div>
    </div>
  </div>

  <div class="wizard-trust-list">
    <div class="wt-item"><div class="wt-icon">&#128101;</div><div><h5>Professional Team</h5><p>Experienced creatives dedicated to your day.</p></div></div>
    <div class="wt-item"><div class="wt-icon">&#9670;</div><div><h5>Premium Quality</h5><p>High-end equipment for stunning results.</p></div></div>
    <div class="wt-item"><div class="wt-icon">&#8987;</div><div><h5>On-Time Delivery</h5><p>We deliver on time, every time.</p></div></div>
    <div class="wt-item"><div class="wt-icon">&#9825;</div><div><h5>Memories Forever</h5><p>Timeless moments beautifully captured.</p></div></div>
    <div class="wt-item"><div class="wt-icon">&#128274;</div><div><h5>Secure &amp; Private</h5><p>Your data is safe with us.</p></div></div>
  </div>
</aside>
