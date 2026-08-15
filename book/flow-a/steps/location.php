<?php
/**
 * Page: Flow A Step 5 — Venue Details
 * Status: BUILT by Claude per client authorization. Fields per Section 8: name, address, city,
 * county/state, country, postcode, indoor/outdoor. Map pin is a placeholder — a real interactive
 * map needs a Google Maps API key provisioned first (not yet configured in config.php).
 */
$page_title = 'Wedding Film & Photography — Venue Details | Verve Creative Studio';
$noindex = true;
require_once __DIR__ . '/../../../includes/booking-session.php';
require __DIR__ . '/../../../includes/header.php';

$service_title = 'Wedding Film & Photography';
$service_tagline = 'Book Your Date, Capture Your Forever';
$service_intro = 'Tell us about your special day and let us create timeless memories you will cherish forever.';
$current_step = 5;
require __DIR__ . '/../../../includes/booking/flow-a-header.php';

$fa = flow_a_state();
?>

<div class="wrap wizard-body">
  <div class="wizard-main">
    <p class="wizard-step-eyebrow">Step 5 of 10</p>
    <h2>Venue Details</h2>
    <p class="wizard-step-sub">Tell us where your celebration will take place.</p>

    <form method="post" action="<?php echo SITE_URL; ?>/book/flow-a/steps/save-location">
      <div class="form-group">
        <label class="form-label">Venue Name</label>
        <input type="text" name="venue_name" class="form-input" placeholder="e.g. The Grand Hall" value="<?php echo htmlspecialchars($fa['venue_name'] ?? ''); ?>">
      </div>

      <div class="form-group">
        <label class="form-label">Address</label>
        <input type="text" name="venue_address" class="form-input" placeholder="Street address" value="<?php echo htmlspecialchars($fa['venue_address'] ?? ''); ?>">
      </div>

      <div class="form-row">
        <div class="form-group">
          <label class="form-label">City</label>
          <input type="text" name="venue_city" class="form-input" value="<?php echo htmlspecialchars($fa['venue_city'] ?? ''); ?>">
        </div>
        <div class="form-group">
          <label class="form-label">County / State</label>
          <input type="text" name="venue_county" class="form-input" value="<?php echo htmlspecialchars($fa['venue_county'] ?? ''); ?>">
        </div>
      </div>

      <div class="form-row">
        <div class="form-group">
          <label class="form-label">Country</label>
          <select name="venue_country" class="form-select">
            <?php $countries = ['United Kingdom', 'Nigeria', 'Other']; foreach ($countries as $c): ?>
            <option value="<?php echo $c; ?>" <?php echo ($fa['venue_country'] ?? '') === $c ? 'selected' : ''; ?>><?php echo $c; ?></option>
            <?php endforeach; ?>
          </select>
        </div>
        <div class="form-group">
          <label class="form-label">Postcode</label>
          <input type="text" name="venue_postcode" class="form-input" value="<?php echo htmlspecialchars($fa['venue_postcode'] ?? ''); ?>">
        </div>
      </div>

      <div class="form-group">
        <label class="form-label">Setting</label>
        <div class="option-grid" style="grid-template-columns:1fr 1fr;">
          <?php foreach (['indoor' => 'Indoor', 'outdoor' => 'Outdoor'] as $key => $label): $checked = $fa['venue_setting'] === $key; ?>
          <label class="option-card <?php echo $checked ? 'selected' : ''; ?>" style="padding:16px;text-align:center;">
            <input type="radio" name="venue_setting" value="<?php echo $key; ?>" <?php echo $checked ? 'checked' : ''; ?>>
            <span class="option-check">&check;</span>
            <h4 style="margin:0;"><?php echo $label; ?></h4>
          </label>
          <?php endforeach; ?>
        </div>
      </div>

      <div class="art-panel" style="aspect-ratio:16/6;margin-bottom:24px;">
        <span>Map Pin &mdash; Placeholder (needs Google Maps API key)</span>
      </div>

      <div class="wizard-nav-buttons">
        <a href="<?php echo SITE_URL; ?>/book/flow-a/steps/time" class="btn btn-outline">&larr; Back</a>
        <button type="submit" class="btn btn-solid">Continue &rarr;</button>
      </div>
    </form>
  </div>

  <?php require __DIR__ . '/../../../includes/booking/flow-a-sidebar.php'; ?>
</div>

<?php require __DIR__ . '/../../../includes/booking/flow-a-footer-trust.php'; ?>

<script>
  document.querySelectorAll('.option-card').forEach(card => {
    card.addEventListener('click', () => {
      const group = card.closest('.option-grid');
      group.querySelectorAll('.option-card').forEach(c => c.classList.remove('selected'));
      card.classList.add('selected');
    });
  });
</script>

<?php require __DIR__ . '/../../../includes/footer.php'; ?>
