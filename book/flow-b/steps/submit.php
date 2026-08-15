<?php
/**
 * Flow B final submission. No payment involved — this just confirms receipt of the brief.
 * TODO: wire to includes/mailer.php once SMTP is configured, and to a real bookings_flow_b
 * database table once it exists (see database/schema.sql) so the Admin Dashboard can manage it.
 */
require_once __DIR__ . '/../../../includes/config.php';
require_once __DIR__ . '/../../../includes/booking-session.php';

if (empty($_POST['terms_accepted'])) {
    header('Location: ' . SITE_URL . '/book/flow-b/steps/review');
    exit;
}
flow_b_set('terms_accepted', true);

$catalog = flow_b_service_catalog();
$slug = flow_b_state()['service_slug'] ?? 'film-production';
$service = $catalog[$slug];
$fb = flow_b_state();
$ref = 'VC-B-' . strtoupper(substr(session_id(), 0, 8));

$page_title = 'Brief Submitted | Verve Creative Studio';
$noindex = true;
require __DIR__ . '/../../../includes/header.php';
?>
<section style="padding:80px 0;">
  <div class="wrap" style="max-width:640px;">
    <div class="wizard-pending-notice" style="margin-bottom:32px;">
      <p><strong>Note:</strong> email delivery isn't wired up yet (pending IONOS SMTP setup), so no notification was actually sent to the studio inbox from this submission.</p>
    </div>
    <p class="eyebrow">Brief Submitted</p>
    <h1 style="font-size:36px;color:var(--cream);margin-bottom:16px;">Thank You!</h1>
    <p style="color:var(--muted);font-size:15px;margin-bottom:32px;">We've received your <?php echo htmlspecialchars($service['title']); ?> project brief. Our team will review it and reach out with a custom proposal.</p>
    <div class="wizard-summary-card" style="margin-bottom:28px;">
      <div class="wizard-summary-rows" style="border-top:none;padding-top:0;">
        <div><span>Reference</span><span><?php echo htmlspecialchars($ref); ?></span></div>
        <div><span>Service</span><span><?php echo htmlspecialchars($service['title']); ?></span></div>
        <div><span>Project</span><span><?php echo htmlspecialchars($fb['project_title'] ?: '-'); ?></span></div>
      </div>
    </div>
    <a href="<?php echo SITE_URL; ?>/" class="btn btn-solid">Return Home</a>
  </div>
</section>
<?php require __DIR__ . '/../../../includes/footer.php'; ?>
