<?php
/**
 * Page: Flow A Step 6 — Additional Services
 * Status: BUILT by Claude per client authorization. Options per Section 8: "drone, livestream,
 * albums, extra crew, photo booth, etc." Prices are placeholder figures, same basis as Step 1's
 * confirmed pricing — flag if these need adjusting.
 */
$page_title = 'Wedding Film & Photography — Additional Services | Verve Creative Studio';
$noindex = true;
require_once __DIR__ . '/../../../includes/booking-session.php';
require __DIR__ . '/../../../includes/header.php';

$service_title = 'Wedding Film & Photography';
$service_tagline = 'Book Your Date, Capture Your Forever';
$service_intro = 'Tell us about your special day and let us create timeless memories you will cherish forever.';
$current_step = 6;
require __DIR__ . '/../../../includes/booking/flow-a-header.php';

$fa = flow_a_state();
$selected_keys = array_column($fa['addons'], 'key');

$addon_options = [
    ['key' => 'drone',      'title' => 'Drone Cinematography', 'desc' => 'Aerial footage of your venue and celebration.', 'price' => 150],
    ['key' => 'livestream', 'title' => 'Livestream Production', 'desc' => 'Share your day in real time with distant loved ones.', 'price' => 200],
    ['key' => 'crew',       'title' => 'Extra Photo/Video Crew', 'desc' => 'A second shooter for more angles and coverage.', 'price' => 300],
    ['key' => 'booth',      'title' => 'Photo Booth',           'desc' => 'A fun, guest-favourite addition to your reception.', 'price' => 250],
    ['key' => 'album',      'title' => 'Wedding Album',         'desc' => 'A luxury printed keepsake of your best moments.', 'price' => 180],
    ['key' => 'sameday',    'title' => 'Same-Day Edit',         'desc' => 'A highlight reel ready to show at your reception.', 'price' => 220],
    ['key' => 'prints',     'title' => 'Luxury Prints',         'desc' => 'Premium framed prints of your favourite shots.', 'price' => 120],
];
?>

<div class="wrap wizard-body">
  <div class="wizard-main">
    <p class="wizard-step-eyebrow">Step 6 of 10</p>
    <h2>Additional Services</h2>
    <p class="wizard-step-sub">Enhance your coverage with any of the add-ons below — select as many as you like.</p>

    <form method="post" action="<?php echo SITE_URL; ?>/book/flow-a/steps/save-addons">
      <div class="option-grid">
        <?php foreach ($addon_options as $opt): $checked = in_array($opt['key'], $selected_keys, true); ?>
        <label class="option-card <?php echo $checked ? 'selected' : ''; ?>">
          <input type="checkbox" name="addons[]" value="<?php echo $opt['key']; ?>" <?php echo $checked ? 'checked' : ''; ?>>
          <span class="option-check">&check;</span>
          <h4><?php echo htmlspecialchars($opt['title']); ?></h4>
          <p><?php echo htmlspecialchars($opt['desc']); ?></p>
          <div class="option-price">+&pound;<?php echo number_format($opt['price']); ?></div>
        </label>
        <?php endforeach; ?>
      </div>

      <div class="wizard-info-note" style="margin-top:20px;">&#9432; Your estimated total updates in the summary as you select add-ons.</div>

      <div class="wizard-nav-buttons">
        <a href="<?php echo SITE_URL; ?>/book/flow-a/steps/location" class="btn btn-outline">&larr; Back</a>
        <button type="submit" class="btn btn-solid">Continue &rarr;</button>
      </div>
    </form>
  </div>

  <?php require __DIR__ . '/../../../includes/booking/flow-a-sidebar.php'; ?>
</div>

<?php require __DIR__ . '/../../../includes/booking/flow-a-footer-trust.php'; ?>

<script>
  document.querySelectorAll('.option-card input[type=checkbox]').forEach(input => {
    input.addEventListener('change', () => {
      input.closest('.option-card').classList.toggle('selected', input.checked);
    });
  });
</script>

<?php require __DIR__ . '/../../../includes/footer.php'; ?>
