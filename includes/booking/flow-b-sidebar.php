<?php
/**
 * Right-column sidebar for every Flow B step. Expects $service (catalog entry) in scope.
 */
$fb = flow_b_state();
?>
<aside class="wizard-sidebar">
  <div class="wizard-summary-card">
    <div class="wizard-summary-top">
      <div class="wizard-summary-thumb art-panel"><?php render_photo($service['image'], $service['title'], 'sm'); ?></div>
      <div>
        <h4><?php echo htmlspecialchars($service['title']); ?></h4>
        <p class="wizard-summary-status">Custom Quote</p>
      </div>
    </div>
    <div class="wizard-summary-rows" style="border-top:none;padding-top:0;">
      <div><span>Project Type</span><span><?php echo empty($fb['project_types']) ? 'Not specified' : htmlspecialchars(implode(', ', $fb['project_types'])); ?></span></div>
      <div><span>Scope</span><span><?php echo empty($fb['scope']) ? 'Not specified' : htmlspecialchars(implode(', ', $fb['scope'])); ?></span></div>
      <div><span>Timeline</span><span><?php echo htmlspecialchars($fb['needed_by'] ?: 'Not specified'); ?></span></div>
      <div><span>Budget</span><span><?php echo htmlspecialchars($fb['budget_range'] ?: 'Not specified'); ?></span></div>
      <div><span>Location</span><span><?php echo htmlspecialchars($fb['location_text'] ?: 'Not specified'); ?></span></div>
    </div>
  </div>

  <div class="flowb-quote-note">
    <strong>Custom Quote</strong><br>
    Once you submit your project details, our team will review and send you a tailored proposal and quotation.
  </div>

  <div class="wizard-help" style="padding-top:20px;">
    <h4 style="margin-bottom:14px;">What Happens Next?</h4>
    <div class="flowb-next-steps">
      <div class="item"><span class="tick">&check;</span> We review your project brief</div>
      <div class="item"><span class="tick">&check;</span> We contact you for a consultation</div>
      <div class="item"><span class="tick">&check;</span> You receive a custom proposal</div>
      <div class="item"><span class="tick">&check;</span> We refine the plan together</div>
      <div class="item"><span class="tick">&check;</span> Project confirmed &amp; production begins</div>
    </div>
  </div>

  <div class="wizard-help">
    <h4>Need Help?</h4>
    <p>Our creative team is ready to assist you.</p>
    <a href="<?php echo SITE_URL; ?>/contact" class="btn btn-outline" style="width:100%;justify-content:center;">Contact Us</a>
  </div>
</aside>
