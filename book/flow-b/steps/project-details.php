<?php
/**
 * Page: Flow B Step 1 — Project Details
 * Status: BUILT to design (content-received/designs/Films booking page.jpg), confirmed by
 * client as the answer to Flow B's field spec (was previously unspecified in Section 8).
 * Serves 6 services via ?service= — see includes/booking-session.php's flow_b_service_catalog().
 */
require_once __DIR__ . '/../../../includes/booking-session.php';
$catalog = flow_b_service_catalog();
$slug = flow_b_state()['service_slug'] ?? 'film-production';
$service = $catalog[$slug];

$page_title = $service['title'] . ' — Tell Us About Your Project | Verve Creative Studio';
$noindex = true;
require __DIR__ . '/../../../includes/header.php';
require __DIR__ . '/../../../includes/booking/flow-b-header.php';

$fb = flow_b_state();
$current_step = 1;
?>

<div class="wrap flowb-body">
  <?php require __DIR__ . '/../../../includes/booking/flow-b-stepnav.php'; ?>

  <div class="flowb-main">
    <p class="wizard-step-eyebrow">Step 1 of 8</p>
    <h2>Tell Us About Your Project</h2>
    <p class="wizard-step-sub">Share some basic details about your <?php echo strtolower(htmlspecialchars($service['title'])); ?> project so we can understand your vision better.</p>

    <form method="post" action="<?php echo SITE_URL; ?>/book/flow-b/steps/save-project-details">
      <div class="form-row">
        <div class="form-group">
          <label class="form-label">Project Title *</label>
          <input type="text" name="project_title" class="form-input" placeholder="e.g. Short Film, Documentary, Commercial, Corporate Video" required value="<?php echo htmlspecialchars($fb['project_title'] ?? ''); ?>">
        </div>
        <div class="form-group">
          <label class="form-label">Production Type *</label>
          <select name="production_type" class="form-select" required>
            <option value="">Select production type</option>
            <?php foreach ($service['types'] as $t): ?>
            <option value="<?php echo htmlspecialchars($t); ?>" <?php echo ($fb['production_type'] ?? '') === $t ? 'selected' : ''; ?>><?php echo htmlspecialchars($t); ?></option>
            <?php endforeach; ?>
          </select>
        </div>
      </div>

      <div class="form-group">
        <label class="form-label">Project Summary *</label>
        <textarea name="summary" id="summaryField" class="form-textarea" maxlength="1000" placeholder="Tell us more about your project..." required oninput="document.getElementById('charCount').textContent = this.value.length;"><?php echo htmlspecialchars($fb['summary'] ?? ''); ?></textarea>
        <p class="char-count"><span id="charCount"><?php echo strlen($fb['summary'] ?? ''); ?></span> / 1000</p>
      </div>

      <div class="form-row">
        <div class="form-group">
          <label class="form-label">Project Goal *</label>
          <select name="goal" class="form-select" required>
            <option value="">What do you want to achieve?</option>
            <option value="brand-awareness" <?php echo ($fb['goal'] ?? '') === 'brand-awareness' ? 'selected' : ''; ?>>Increase Brand Awareness</option>
            <option value="tell-a-story" <?php echo ($fb['goal'] ?? '') === 'tell-a-story' ? 'selected' : ''; ?>>Tell a Story</option>
            <option value="promote-product" <?php echo ($fb['goal'] ?? '') === 'promote-product' ? 'selected' : ''; ?>>Promote a Product/Service</option>
            <option value="entertain" <?php echo ($fb['goal'] ?? '') === 'entertain' ? 'selected' : ''; ?>>Entertain an Audience</option>
            <option value="document" <?php echo ($fb['goal'] ?? '') === 'document' ? 'selected' : ''; ?>>Document an Event/Moment</option>
            <option value="other" <?php echo ($fb['goal'] ?? '') === 'other' ? 'selected' : ''; ?>>Other</option>
          </select>
        </div>
        <div class="form-group">
          <label class="form-label">Preferred Style / Tone</label>
          <input type="text" name="style_tone" class="form-input" placeholder="e.g. Cinematic, Natural, Corporate, Artistic" value="<?php echo htmlspecialchars($fb['style_tone'] ?? ''); ?>">
        </div>
      </div>

      <div class="form-row">
        <div class="form-group">
          <label class="form-label">Reference (Optional)</label>
          <input type="text" name="reference" class="form-input" placeholder="e.g. Similar films, directors, styles you like" value="<?php echo htmlspecialchars($fb['reference'] ?? ''); ?>">
        </div>
        <div class="form-group">
          <label class="form-label">How did you hear about us?</label>
          <select name="referral_source" class="form-select">
            <option value="">Select an option</option>
            <option value="instagram">Instagram</option>
            <option value="google">Google Search</option>
            <option value="referral">Friend/Colleague Referral</option>
            <option value="past-client">Past Client</option>
            <option value="other">Other</option>
          </select>
        </div>
      </div>

      <div class="wizard-nav-buttons">
        <a href="<?php echo SITE_URL; ?>/book/" class="btn btn-outline">&larr; Back</a>
        <button type="submit" class="btn btn-solid">Continue &rarr;</button>
      </div>
    </form>
  </div>

  <?php require __DIR__ . '/../../../includes/booking/flow-b-sidebar.php'; ?>
</div>

<?php require __DIR__ . '/../../../includes/booking/flow-b-footer-trust.php'; ?>
<?php require __DIR__ . '/../../../includes/footer.php'; ?>
