<?php
/**
 * Page: Flow B Step 4 — Timeline
 * Status: BUILT by Claude — inferred fields ("When do you need it?") per the established pattern.
 */
require_once __DIR__ . '/../../../includes/booking-session.php';
$catalog = flow_b_service_catalog();
$slug = flow_b_state()['service_slug'] ?? 'film-production';
$service = $catalog[$slug];
$page_title = $service['title'] . ' — Timeline | Verve Creative Studio';
$noindex = true;
require __DIR__ . '/../../../includes/header.php';
require __DIR__ . '/../../../includes/booking/flow-b-header.php';

$fb = flow_b_state();
$current_step = 4;
?>
<div class="wrap flowb-body">
  <?php require __DIR__ . '/../../../includes/booking/flow-b-stepnav.php'; ?>
  <div class="flowb-main">
    <p class="wizard-step-eyebrow">Step 4 of 8</p>
    <h2>Timeline</h2>
    <p class="wizard-step-sub">When do you need this delivered?</p>

    <form method="post" action="<?php echo SITE_URL; ?>/book/flow-b/steps/save-timeline">
      <div class="form-group">
        <label class="form-label">Target Date</label>
        <input type="date" name="needed_by" class="form-input" style="max-width:220px;" value="<?php echo htmlspecialchars($fb['needed_by'] ?? ''); ?>">
      </div>
      <div class="form-group">
        <label class="form-label">Urgency</label>
        <div class="option-grid" style="grid-template-columns:repeat(3,1fr);">
          <?php foreach (['flexible' => 'Flexible', 'standard' => 'Standard', 'rush' => 'Rush / Priority'] as $key => $label): $checked = $fb['urgency'] === $key; ?>
          <label class="option-card <?php echo $checked ? 'selected' : ''; ?>" style="padding:16px;text-align:center;">
            <input type="radio" name="urgency" value="<?php echo $key; ?>" <?php echo $checked ? 'checked' : ''; ?>>
            <span class="option-check">&check;</span>
            <h4 style="margin:0;font-size:14px;"><?php echo $label; ?></h4>
          </label>
          <?php endforeach; ?>
        </div>
      </div>
      <div class="wizard-nav-buttons" style="margin-top:26px;">
        <a href="<?php echo SITE_URL; ?>/book/flow-b/steps/project-scope" class="btn btn-outline">&larr; Back</a>
        <button type="submit" class="btn btn-solid">Continue &rarr;</button>
      </div>
    </form>
  </div>
  <?php require __DIR__ . '/../../../includes/booking/flow-b-sidebar.php'; ?>
</div>
<?php require __DIR__ . '/../../../includes/booking/flow-b-footer-trust.php'; ?>
<script>
document.querySelectorAll('.option-card').forEach(c => c.addEventListener('click', () => {
  const g = c.closest('.option-grid'); g.querySelectorAll('.option-card').forEach(x => x.classList.remove('selected')); c.classList.add('selected');
}));
</script>
<?php require __DIR__ . '/../../../includes/footer.php'; ?>
