<?php
/**
 * Page: Flow B Step 5 — Budget
 * Status: BUILT by Claude — inferred fields ("Choose your budget range") per established pattern.
 * Ranges are Claude's own placeholder brackets — confirm/adjust with client.
 */
require_once __DIR__ . '/../../../includes/booking-session.php';
$catalog = flow_b_service_catalog();
$slug = flow_b_state()['service_slug'] ?? 'film-production';
$service = $catalog[$slug];
$page_title = $service['title'] . ' — Budget | Verve Creative Studio';
$noindex = true;
require __DIR__ . '/../../../includes/header.php';
require __DIR__ . '/../../../includes/booking/flow-b-header.php';

$fb = flow_b_state();
$current_step = 5;
$budget_options = ['Under £1,000', '£1,000 – £3,000', '£3,000 – £7,000', '£7,000 – £15,000', '£15,000+', 'Not sure yet'];
?>
<div class="wrap flowb-body">
  <?php require __DIR__ . '/../../../includes/booking/flow-b-stepnav.php'; ?>
  <div class="flowb-main">
    <p class="wizard-step-eyebrow">Step 5 of 8</p>
    <h2>Budget</h2>
    <p class="wizard-step-sub">Choose the range that best fits your project.</p>

    <form method="post" action="<?php echo SITE_URL; ?>/book/flow-b/steps/save-budget">
      <div class="option-grid">
        <?php foreach ($budget_options as $b): $checked = $fb['budget_range'] === $b; ?>
        <label class="option-card <?php echo $checked ? 'selected' : ''; ?>" style="padding:18px;text-align:center;">
          <input type="radio" name="budget_range" value="<?php echo htmlspecialchars($b); ?>" <?php echo $checked ? 'checked' : ''; ?>>
          <span class="option-check">&check;</span>
          <h4 style="margin:0;font-size:14.5px;"><?php echo htmlspecialchars($b); ?></h4>
        </label>
        <?php endforeach; ?>
      </div>
      <div class="wizard-nav-buttons" style="margin-top:26px;">
        <a href="<?php echo SITE_URL; ?>/book/flow-b/steps/timeline" class="btn btn-outline">&larr; Back</a>
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
