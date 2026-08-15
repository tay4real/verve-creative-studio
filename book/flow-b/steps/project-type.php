<?php
/**
 * Page: Flow B Step 2 — Project Type
 * Status: BUILT by Claude — design only showed Step 1 in detail; this step's fields are inferred
 * from the left-nav description ("Select the type of production") plus the service's own
 * confirmed/drafted service list, same approach already used for Flow A Steps 2-10.
 */
require_once __DIR__ . '/../../../includes/booking-session.php';
$catalog = flow_b_service_catalog();
$slug = flow_b_state()['service_slug'] ?? 'film-production';
$service = $catalog[$slug];
$page_title = $service['title'] . ' — Project Type | Verve Creative Studio';
$noindex = true;
require __DIR__ . '/../../../includes/header.php';
require __DIR__ . '/../../../includes/booking/flow-b-header.php';

$fb = flow_b_state();
$current_step = 2;
?>
<div class="wrap flowb-body">
  <?php require __DIR__ . '/../../../includes/booking/flow-b-stepnav.php'; ?>
  <div class="flowb-main">
    <p class="wizard-step-eyebrow">Step 2 of 8</p>
    <h2>Project Type</h2>
    <p class="wizard-step-sub">Select all types that apply to your <?php echo strtolower(htmlspecialchars($service['title'])); ?> project.</p>

    <form method="post" action="<?php echo SITE_URL; ?>/book/flow-b/steps/save-project-type">
      <div class="option-grid">
        <?php foreach ($service['types'] as $t): $checked = in_array($t, $fb['project_types'], true); ?>
        <label class="option-card <?php echo $checked ? 'selected' : ''; ?>" style="padding:18px;">
          <input type="checkbox" name="project_types[]" value="<?php echo htmlspecialchars($t); ?>" <?php echo $checked ? 'checked' : ''; ?>>
          <span class="option-check">&check;</span>
          <h4 style="margin:0;font-size:14.5px;"><?php echo htmlspecialchars($t); ?></h4>
        </label>
        <?php endforeach; ?>
      </div>
      <div class="wizard-nav-buttons" style="margin-top:26px;">
        <a href="<?php echo SITE_URL; ?>/book/flow-b/steps/project-details" class="btn btn-outline">&larr; Back</a>
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
