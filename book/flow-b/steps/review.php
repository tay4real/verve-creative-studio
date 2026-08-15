<?php
/**
 * Page: Flow B Step 8 — Review & Submit
 * Status: BUILT by Claude. No payment step (this is the custom-quote flow) — submission just
 * confirms receipt, same "email delivery not wired up yet" honesty as the Contact form.
 */
require_once __DIR__ . '/../../../includes/booking-session.php';
$catalog = flow_b_service_catalog();
$slug = flow_b_state()['service_slug'] ?? 'film-production';
$service = $catalog[$slug];
$page_title = $service['title'] . ' — Review &amp; Submit | Verve Creative Studio';
$noindex = true;
require __DIR__ . '/../../../includes/header.php';
require __DIR__ . '/../../../includes/booking/flow-b-header.php';

$fb = flow_b_state();
$current_step = 8;
?>
<div class="wrap flowb-body">
  <?php require __DIR__ . '/../../../includes/booking/flow-b-stepnav.php'; ?>
  <div class="flowb-main">
    <p class="wizard-step-eyebrow">Step 8 of 8</p>
    <h2>Review &amp; Submit</h2>
    <p class="wizard-step-sub">Please check everything below before submitting your brief.</p>

    <form method="post" action="<?php echo SITE_URL; ?>/book/flow-b/steps/submit">
      <div class="review-section">
        <h4>Project</h4>
        <div class="review-row"><span>Title</span><span><?php echo htmlspecialchars($fb['project_title'] ?: '-'); ?></span></div>
        <div class="review-row"><span>Production Type</span><span><?php echo htmlspecialchars($fb['production_type'] ?: '-'); ?></span></div>
        <div class="review-row"><span>Goal</span><span><?php echo htmlspecialchars($fb['goal'] ?: '-'); ?></span></div>
      </div>
      <div class="review-section">
        <h4>Scope &amp; Timeline</h4>
        <div class="review-row"><span>Project Type(s)</span><span><?php echo empty($fb['project_types']) ? '-' : htmlspecialchars(implode(', ', $fb['project_types'])); ?></span></div>
        <div class="review-row"><span>Scope</span><span><?php echo empty($fb['scope']) ? '-' : htmlspecialchars(implode(', ', $fb['scope'])); ?></span></div>
        <div class="review-row"><span>Target Date</span><span><?php echo htmlspecialchars($fb['needed_by'] ?: '-'); ?></span></div>
        <div class="review-row"><span>Urgency</span><span><?php echo htmlspecialchars(ucfirst($fb['urgency'] ?? '-')); ?></span></div>
      </div>
      <div class="review-section" style="border-bottom:none;">
        <h4>Budget &amp; Location</h4>
        <div class="review-row"><span>Budget Range</span><span><?php echo htmlspecialchars($fb['budget_range'] ?: '-'); ?></span></div>
        <div class="review-row"><span>Location</span><span><?php echo htmlspecialchars($fb['location_text'] ?: '-'); ?></span></div>
        <div class="review-row"><span>Files Uploaded</span><span><?php echo count($fb['uploads']); ?></span></div>
      </div>

      <label class="terms-check">
        <input type="checkbox" name="terms_accepted" required>
        <span>I agree to the <a href="<?php echo SITE_URL; ?>/terms" target="_blank">Terms &amp; Conditions</a> (page pending).</span>
      </label>

      <div class="wizard-nav-buttons">
        <a href="<?php echo SITE_URL; ?>/book/flow-b/steps/upload" class="btn btn-outline">&larr; Back</a>
        <button type="submit" class="btn btn-solid">Submit Project Brief &rarr;</button>
      </div>
    </form>
  </div>
  <?php require __DIR__ . '/../../../includes/booking/flow-b-sidebar.php'; ?>
</div>
<?php require __DIR__ . '/../../../includes/booking/flow-b-footer-trust.php'; ?>
<?php require __DIR__ . '/../../../includes/footer.php'; ?>
