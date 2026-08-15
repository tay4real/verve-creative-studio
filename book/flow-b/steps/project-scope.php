<?php
/**
 * Page: Flow B Step 3 — Project Scope
 * Status: BUILT by Claude — inferred fields ("What do you need?") per the established pattern.
 */
require_once __DIR__ . '/../../../includes/booking-session.php';
$catalog = flow_b_service_catalog();
$slug = flow_b_state()['service_slug'] ?? 'film-production';
$service = $catalog[$slug];
$page_title = $service['title'] . ' — Project Scope | Verve Creative Studio';
$noindex = true;
require __DIR__ . '/../../../includes/header.php';
require __DIR__ . '/../../../includes/booking/flow-b-header.php';

$fb = flow_b_state();
$current_step = 3;
$scope_options = ['Concept Development', 'Pre-Production Planning', 'Full Production', 'Post-Production / Editing', 'Talent / Crew Sourcing', 'Script or Storyboard', 'Consultation Only'];
?>
<div class="wrap flowb-body">
  <?php require __DIR__ . '/../../../includes/booking/flow-b-stepnav.php'; ?>
  <div class="flowb-main">
    <p class="wizard-step-eyebrow">Step 3 of 8</p>
    <h2>Project Scope</h2>
    <p class="wizard-step-sub">What do you need us to handle?</p>

    <form method="post" action="<?php echo SITE_URL; ?>/book/flow-b/steps/save-project-scope">
      <div class="option-grid">
        <?php foreach ($scope_options as $s): $checked = in_array($s, $fb['scope'], true); ?>
        <label class="option-card <?php echo $checked ? 'selected' : ''; ?>" style="padding:18px;">
          <input type="checkbox" name="scope[]" value="<?php echo htmlspecialchars($s); ?>" <?php echo $checked ? 'checked' : ''; ?>>
          <span class="option-check">&check;</span>
          <h4 style="margin:0;font-size:14.5px;"><?php echo htmlspecialchars($s); ?></h4>
        </label>
        <?php endforeach; ?>
      </div>
      <div class="wizard-nav-buttons" style="margin-top:26px;">
        <a href="<?php echo SITE_URL; ?>/book/flow-b/steps/project-type" class="btn btn-outline">&larr; Back</a>
        <button type="submit" class="btn btn-solid">Continue &rarr;</button>
      </div>
    </form>
  </div>
  <?php require __DIR__ . '/../../../includes/booking/flow-b-sidebar.php'; ?>
</div>
<?php require __DIR__ . '/../../../includes/booking/flow-b-footer-trust.php'; ?>
<script>
document.querySelectorAll('.option-card input[type=checkbox]').forEach(i => i.addEventListener('change', () => i.closest('.option-card').classList.toggle('selected', i.checked)));
</script>
<?php require __DIR__ . '/../../../includes/footer.php'; ?>
