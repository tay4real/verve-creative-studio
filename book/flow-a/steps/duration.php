<?php
/**
 * Page: Flow A Step 2 — Coverage Duration
 * Status: BUILT by Claude per client authorization — no design was sent for this step;
 * fields are drawn from Section 8's original spec ("2-10 hours, half/full/multi-day, custom").
 * Follows the same shell + option-card pattern established in Step 1.
 */
$page_title = 'Wedding Film & Photography — Duration | Verve Creative Studio';
$noindex = true;
require_once __DIR__ . '/../../../includes/booking-session.php';
require __DIR__ . '/../../../includes/header.php';

$service_title = 'Wedding Film & Photography';
$service_tagline = 'Book Your Date, Capture Your Forever';
$service_intro = 'Tell us about your special day and let us create timeless memories you will cherish forever.';
$current_step = 2;
require __DIR__ . '/../../../includes/booking/flow-a-header.php';

$fa = flow_a_state();
$duration_options = [
    ['key' => '2hr',   'title' => '2 Hours',        'desc' => 'A short, focused session for a single moment or ceremony.'],
    ['key' => '4hr',   'title' => '4 Hours',        'desc' => 'Ideal for intimate ceremonies or a single key event.'],
    ['key' => '6hr',   'title' => '6 Hours',        'desc' => 'Ceremony plus reception, the most popular choice.'],
    ['key' => '8hr',   'title' => 'Full Day (8hrs)', 'desc' => 'Preparation through to first dance and beyond.'],
    ['key' => 'multi',  'title' => 'Multi-Day',      'desc' => 'Traditional, white wedding, and reception across separate days.'],
    ['key' => 'custom', 'title' => 'Custom Hours',   'desc' => 'Tell us exactly what your day needs.'],
];
?>

<div class="wrap wizard-body">
  <div class="wizard-main">
    <p class="wizard-step-eyebrow">Step 2 of 10</p>
    <h2>Coverage Duration</h2>
    <p class="wizard-step-sub">Select how long you'd like us there on the day.</p>

    <form method="post" action="<?php echo SITE_URL; ?>/book/flow-a/steps/save-duration">
      <div class="option-grid option-grid-3col" style="margin-bottom:20px;">
        <?php foreach ($duration_options as $opt): $checked = $fa['duration'] === $opt['key']; ?>
        <label class="option-card <?php echo $checked ? 'selected' : ''; ?>">
          <input type="radio" name="duration" value="<?php echo $opt['key']; ?>" <?php echo $checked ? 'checked' : ''; ?> onchange="toggleCustomHours(this.value)">
          <span class="option-check">&check;</span>
          <h4><?php echo htmlspecialchars($opt['title']); ?></h4>
          <p><?php echo htmlspecialchars($opt['desc']); ?></p>
        </label>
        <?php endforeach; ?>
      </div>

      <div class="form-group" id="customHoursGroup" style="display:<?php echo $fa['duration'] === 'custom' ? 'block' : 'none'; ?>;">
        <label class="form-label">Custom hours needed</label>
        <input type="number" min="1" max="24" name="custom_hours" class="form-input" style="max-width:160px;" placeholder="e.g. 10" value="<?php echo htmlspecialchars($fa['duration'] === 'custom' ? ($fa['duration_hours'] ?? '') : ''); ?>">
      </div>

      <div class="wizard-info-note">&#9432; Not sure what you need? Our booking specialist can help you decide in the review step.</div>

      <div class="wizard-nav-buttons">
        <a href="<?php echo SITE_URL; ?>/book/flow-a/steps/coverage" class="btn btn-outline">&larr; Back</a>
        <button type="submit" class="btn btn-solid">Continue &rarr;</button>
      </div>
    </form>
  </div>

  <?php require __DIR__ . '/../../../includes/booking/flow-a-sidebar.php'; ?>
</div>

<?php require __DIR__ . '/../../../includes/booking/flow-a-footer-trust.php'; ?>

<script>
  document.querySelectorAll('#coverageForm, .option-card').forEach(() => {});
  document.querySelectorAll('.option-card').forEach(card => {
    card.addEventListener('click', () => {
      const group = card.closest('.option-grid');
      group.querySelectorAll('.option-card').forEach(c => c.classList.remove('selected'));
      card.classList.add('selected');
    });
  });
  function toggleCustomHours(value){
    document.getElementById('customHoursGroup').style.display = value === 'custom' ? 'block' : 'none';
  }
</script>

<?php require __DIR__ . '/../../../includes/footer.php'; ?>
