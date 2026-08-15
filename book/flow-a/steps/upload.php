<?php
/**
 * Page: Flow A Step 8 — Upload Files
 * Status: BUILT by Claude per client authorization. Categories per Section 8: mood board,
 * invitation card, schedule, venue images, Pinterest board, example photos, shot list, floor plan.
 * Uploads are validated (type/size) and stored under /uploads/bookings/ — that folder already
 * has PHP execution disabled via .htaccess (see Section 2A), so uploaded files can never run as scripts.
 */
$page_title = 'Wedding Film & Photography — Upload Files | Verve Creative Studio';
$noindex = true;
require_once __DIR__ . '/../../../includes/booking-session.php';
require __DIR__ . '/../../../includes/header.php';

$service_title = 'Wedding Film & Photography';
$service_tagline = 'Book Your Date, Capture Your Forever';
$service_intro = 'Tell us about your special day and let us create timeless memories you will cherish forever.';
$current_step = 8;
require __DIR__ . '/../../../includes/booking/flow-a-header.php';

$fa = flow_a_state();
$categories = [
    'mood_board'      => 'Mood Board',
    'invitation'      => 'Invitation Card',
    'schedule_doc'    => 'Schedule Document',
    'venue_images'    => 'Venue Images',
    'example_photos'  => 'Example Photos You Like',
    'shot_list'       => 'Shot List',
    'floor_plan'      => 'Floor Plan',
];
$uploaded_by_category = [];
foreach ($fa['uploads'] as $u) {
    $uploaded_by_category[$u['category']][] = $u['filename'];
}
?>

<div class="wrap wizard-body">
  <div class="wizard-main">
    <p class="wizard-step-eyebrow">Step 8 of 10</p>
    <h2>Upload Files</h2>
    <p class="wizard-step-sub">Share anything that helps us understand your vision. All fields are optional.</p>

    <form method="post" action="<?php echo SITE_URL; ?>/book/flow-a/steps/save-upload" enctype="multipart/form-data">
      <?php foreach ($categories as $key => $label): ?>
      <div class="upload-group">
        <h4><?php echo htmlspecialchars($label); ?></h4>
        <p class="upload-hint">JPG, PNG, or PDF — up to 10MB each.</p>
        <label class="dropzone">
          <input type="file" name="<?php echo $key; ?>[]" multiple accept=".jpg,.jpeg,.png,.pdf">
          <span class="dropzone-label">Click to choose files, or drag and drop</span>
        </label>
        <?php if (!empty($uploaded_by_category[$key])): ?>
        <div class="file-list">
          <?php foreach ($uploaded_by_category[$key] as $fname): ?>
          <div class="file-list-item"><span><?php echo htmlspecialchars($fname); ?></span><span>&check; Uploaded</span></div>
          <?php endforeach; ?>
        </div>
        <?php endif; ?>
      </div>
      <?php endforeach; ?>

      <div class="form-group">
        <label class="form-label">Pinterest Board (optional)</label>
        <input type="url" name="pinterest_url" class="form-input" placeholder="https://pinterest.com/your-board" value="<?php echo htmlspecialchars($fa['pinterest_url'] ?? ''); ?>">
      </div>

      <div class="wizard-nav-buttons">
        <a href="<?php echo SITE_URL; ?>/book/flow-a/steps/about-event" class="btn btn-outline">&larr; Back</a>
        <button type="submit" class="btn btn-solid">Continue &rarr;</button>
      </div>
    </form>
  </div>

  <?php require __DIR__ . '/../../../includes/booking/flow-a-sidebar.php'; ?>
</div>

<?php require __DIR__ . '/../../../includes/booking/flow-a-footer-trust.php'; ?>
<?php require __DIR__ . '/../../../includes/footer.php'; ?>
