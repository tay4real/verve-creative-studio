<?php
/**
 * Page: Flow A Step 1 — Choose Your Coverage (Wedding Film & Photography)
 * Status: BUILT — pending client approval against the supplied design.
 * Flagged inference: currency shown as £ (GBP) per the design, differing from an earlier
 * general note about Naira pricing elsewhere — confirmed by client as intentional for this flow.
 */
$page_title = 'Wedding Film & Photography — Book Your Date | Verve Creative Studio';
$meta_description = 'Book your wedding film and photography coverage with Verve Creative Studio — secure your date online in minutes.';
$noindex = true; // booking wizard steps are transactional, not for search results
require_once __DIR__ . '/../../../includes/booking-session.php';
require __DIR__ . '/../../../includes/header.php';

$service_title = 'Wedding Film & Photography';
$service_tagline = 'Book Your Date, Capture Your Forever';
$service_intro = 'Tell us about your special day and let us create timeless memories you will cherish forever.';
$current_step = 1;
require __DIR__ . '/../../../includes/booking/flow-a-header.php';

$fa = flow_a_state();
$coverage_options = [
    ['key' => 'video', 'icon' => 'video', 'title' => 'Video Coverage', 'desc' => 'Full cinematic videography coverage of your wedding day.', 'price' => 1250],
    ['key' => 'photo', 'icon' => 'camera', 'title' => 'Photography Coverage', 'desc' => 'Professional photography coverage of your special moments.', 'price' => 700],
    ['key' => 'both', 'icon' => 'both', 'title' => 'Video + Photography', 'desc' => 'Complete coverage with both cinematography and photography.', 'price' => 1850],
];
$icon_camera = '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M4 8h3l2-2h6l2 2h3v11H4z"/><circle cx="12" cy="13" r="3.5"/></svg>';
$icon_video  = '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="3" y="6" width="12" height="12" rx="1"/><path d="M15 9l6-3v12l-6-3"/></svg>';
?>

<div class="wrap wizard-body">
  <div class="wizard-main">
    <p class="wizard-step-eyebrow">Step 1 of 10</p>
    <h2>Choose Your Coverage</h2>
    <p class="wizard-step-sub">Select the type of coverage that best suits your special day.</p>

    <form id="coverageForm" method="post" action="<?php echo SITE_URL; ?>/book/flow-a/steps/save-coverage">
      <div class="coverage-grid">
        <?php foreach ($coverage_options as $opt):
          $checked = $fa['coverage'] === $opt['key'] || (!$fa['coverage'] && $opt['key'] === 'video'); ?>
        <label class="coverage-card <?php echo $checked ? 'selected' : ''; ?>">
          <input type="radio" name="coverage" value="<?php echo $opt['key']; ?>" <?php echo $checked ? 'checked' : ''; ?>>
          <span class="coverage-check">&check;</span>
          <div class="coverage-icon">
            <?php if ($opt['icon'] === 'both'): ?>
              <?php echo $icon_camera; ?><span class="coverage-icon-arrow">&rarr;</span><?php echo $icon_video; ?>
            <?php else: ?>
              <?php echo $opt['icon'] === 'video' ? $icon_video : $icon_camera; ?>
            <?php endif; ?>
          </div>
          <h3><?php echo htmlspecialchars($opt['title']); ?></h3>
          <p><?php echo htmlspecialchars($opt['desc']); ?></p>
          <div class="coverage-price">From &pound;<?php echo number_format($opt['price']); ?></div>
        </label>
        <?php endforeach; ?>
      </div>

      <div class="wizard-info-note">&#9432; You can add more services and custom options in the next steps.</div>

      <div class="wizard-nav-buttons">
        <a href="<?php echo SITE_URL; ?>/book/" class="btn btn-outline">&larr; Back</a>
        <button type="submit" class="btn btn-solid">Continue &rarr;</button>
      </div>
    </form>
  </div>

  <?php require __DIR__ . '/../../../includes/booking/flow-a-sidebar.php'; ?>
</div>

<?php require __DIR__ . '/../../../includes/booking/flow-a-footer-trust.php'; ?>

<script>
  // Progressive enhancement only — the form works fine without JS via normal radio selection.
  document.querySelectorAll('.coverage-card').forEach(card => {
    card.addEventListener('click', () => {
      document.querySelectorAll('.coverage-card').forEach(c => c.classList.remove('selected'));
      card.classList.add('selected');
    });
  });
</script>

<?php require __DIR__ . '/../../../includes/footer.php'; ?>
