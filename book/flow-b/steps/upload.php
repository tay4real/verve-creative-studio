<?php
/**
 * Page: Flow B Step 7 — Upload Materials
 * Status: BUILT by Claude — reuses the same real file validation/storage approach as Flow A Step 8.
 */
require_once __DIR__ . '/../../../includes/booking-session.php';
$catalog = flow_b_service_catalog();
$slug = flow_b_state()['service_slug'] ?? 'film-production';
$service = $catalog[$slug];
$page_title = $service['title'] . ' — Upload Materials | Verve Creative Studio';
$noindex = true;
require __DIR__ . '/../../../includes/header.php';
require __DIR__ . '/../../../includes/booking/flow-b-header.php';

$fb = flow_b_state();
$current_step = 7;
?>
<div class="wrap flowb-body">
  <?php require __DIR__ . '/../../../includes/booking/flow-b-stepnav.php'; ?>
  <div class="flowb-main">
    <p class="wizard-step-eyebrow">Step 7 of 8</p>
    <h2>Upload Materials</h2>
    <p class="wizard-step-sub">Share your files &amp; references &mdash; optional, but helpful.</p>

    <form method="post" action="<?php echo SITE_URL; ?>/book/flow-b/steps/save-upload" enctype="multipart/form-data">
      <div class="upload-group">
        <h4>Reference Materials / Brief Documents</h4>
        <p class="upload-hint">JPG, PNG, or PDF &mdash; up to 10MB each.</p>
        <label class="dropzone">
          <input type="file" name="materials[]" multiple accept=".jpg,.jpeg,.png,.pdf">
          <span class="dropzone-label">Click to choose files, or drag and drop</span>
        </label>
        <?php if (!empty($fb['uploads'])): ?>
        <div class="file-list">
          <?php foreach ($fb['uploads'] as $u): ?>
          <div class="file-list-item"><span><?php echo htmlspecialchars($u['filename']); ?></span><span>&check; Uploaded</span></div>
          <?php endforeach; ?>
        </div>
        <?php endif; ?>
      </div>
      <div class="wizard-nav-buttons">
        <a href="<?php echo SITE_URL; ?>/book/flow-b/steps/location" class="btn btn-outline">&larr; Back</a>
        <button type="submit" class="btn btn-solid">Continue &rarr;</button>
      </div>
    </form>
  </div>
  <?php require __DIR__ . '/../../../includes/booking/flow-b-sidebar.php'; ?>
</div>
<?php require __DIR__ . '/../../../includes/booking/flow-b-footer-trust.php'; ?>
<?php require __DIR__ . '/../../../includes/footer.php'; ?>
