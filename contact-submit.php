<?php
/**
 * Contact form handler.
 * TODO: wire to includes/mailer.php once IONOS SMTP credentials are provisioned. For now this
 * just confirms receipt without actually sending anything, rather than pretending to.
 */
require_once __DIR__ . '/includes/config.php';

$name = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$message = trim($_POST['message'] ?? '');
$submitted = $name !== '' && $email !== '' && $message !== '';

$page_title = 'Message Received | Verve Creative Studio';
$noindex = true;
require __DIR__ . '/includes/header.php';
?>
<section style="padding:100px 0;text-align:center;">
  <div class="wrap" style="max-width:560px;">
    <?php if ($submitted): ?>
      <p class="eyebrow" style="justify-content:center;">Message Received</p>
      <h1 style="font-size:32px;color:var(--cream);margin-bottom:16px;">Thank You, <?php echo htmlspecialchars($name); ?>.</h1>
      <p style="color:var(--muted);font-size:15px;margin-bottom:12px;">We've received your message and will get back to you soon.</p>
      <p style="color:var(--muted-dim);font-size:12.5px;">Note: email delivery isn't wired up yet on the backend (pending IONOS SMTP setup), so no notification was actually sent to the studio inbox from this submission.</p>
    <?php else: ?>
      <h1 style="font-size:28px;color:var(--cream);margin-bottom:16px;">Something's Missing</h1>
      <p style="color:var(--muted);font-size:15px;">Please go back and fill in all required fields.</p>
    <?php endif; ?>
    <a href="<?php echo SITE_URL; ?>/" class="btn btn-solid" style="margin-top:24px;display:inline-flex;">Return Home</a>
  </div>
</section>
<?php require __DIR__ . '/includes/footer.php'; ?>
