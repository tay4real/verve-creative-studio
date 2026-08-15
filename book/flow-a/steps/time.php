<?php
/**
 * Page: Flow A Step 4 — Select Time
 * Status: BUILT by Claude per client authorization. Spec from Section 8: "interactive time picker."
 */
$page_title = 'Wedding Film & Photography — Select Time | Verve Creative Studio';
$noindex = true;
require_once __DIR__ . '/../../../includes/booking-session.php';
require __DIR__ . '/../../../includes/header.php';

$service_title = 'Wedding Film & Photography';
$service_tagline = 'Book Your Date, Capture Your Forever';
$service_intro = 'Tell us about your special day and let us create timeless memories you will cherish forever.';
$current_step = 4;
require __DIR__ . '/../../../includes/booking/flow-a-header.php';

$fa = flow_a_state();
$time_slots = ['08:00','09:00','10:00','11:00','12:00','13:00','14:00','15:00','16:00','17:00','18:00'];
?>

<div class="wrap wizard-body">
  <div class="wizard-main">
    <p class="wizard-step-eyebrow">Step 4 of 10</p>
    <h2>Select Your Start Time</h2>
    <p class="wizard-step-sub">What time should we arrive to begin coverage?</p>

    <form method="post" action="<?php echo SITE_URL; ?>/book/flow-a/steps/save-time">
      <div class="time-grid">
        <?php foreach ($time_slots as $slot): $checked = $fa['time'] === $slot; ?>
        <label class="time-slot <?php echo $checked ? 'selected' : ''; ?>">
          <input type="radio" name="time" value="<?php echo $slot; ?>" style="display:none;" <?php echo $checked ? 'checked' : ''; ?>>
          <?php echo $slot; ?>
        </label>
        <?php endforeach; ?>
      </div>

      <div class="wizard-info-note" style="margin-top:20px;">&#9432; Exact timing can still be refined with your booking specialist closer to the date.</div>

      <div class="wizard-nav-buttons">
        <a href="<?php echo SITE_URL; ?>/book/flow-a/steps/date" class="btn btn-outline">&larr; Back</a>
        <button type="submit" class="btn btn-solid">Continue &rarr;</button>
      </div>
    </form>
  </div>

  <?php require __DIR__ . '/../../../includes/booking/flow-a-sidebar.php'; ?>
</div>

<?php require __DIR__ . '/../../../includes/booking/flow-a-footer-trust.php'; ?>

<script>
  document.querySelectorAll('.time-slot').forEach(slot => {
    slot.addEventListener('click', () => {
      document.querySelectorAll('.time-slot').forEach(s => s.classList.remove('selected'));
      slot.classList.add('selected');
    });
  });
</script>

<?php require __DIR__ . '/../../../includes/footer.php'; ?>
