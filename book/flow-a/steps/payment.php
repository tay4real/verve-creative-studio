<?php
/**
 * Page: Flow A Step 10 — Secure Payment
 * Status: BUILT by Claude per client authorization. Real Stripe integration code is wired up
 * (see includes/stripe-client.php) but will only actually work once `composer require
 * stripe/stripe-php` has been run and real keys are filled into includes/config.php. Until then,
 * this page explains that clearly instead of pretending to process a payment.
 */
$page_title = 'Wedding Film & Photography — Payment | Verve Creative Studio';
$noindex = true;
require_once __DIR__ . '/../../../includes/booking-session.php';
require_once __DIR__ . '/../../../includes/stripe-client.php';
require __DIR__ . '/../../../includes/header.php';

if (empty($_SESSION['flow_a']['terms_accepted'])) {
    header('Location: ' . SITE_URL . '/book/flow-a/steps/review');
    exit;
}

$service_title = 'Wedding Film & Photography';
$service_tagline = 'Book Your Date, Capture Your Forever';
$service_intro = 'Tell us about your special day and let us create timeless memories you will cherish forever.';
$current_step = 10;
require __DIR__ . '/../../../includes/booking/flow-a-header.php';

$fa = flow_a_state();
const DEPOSIT_PCT = 0.30;
$deposit = round($fa['estimated_total'] * DEPOSIT_PCT, 2);
$full = $fa['estimated_total'];
?>

<div class="wrap wizard-body">
  <div class="wizard-main">
    <p class="wizard-step-eyebrow">Step 10 of 10</p>
    <h2>Secure Payment</h2>
    <p class="wizard-step-sub">Choose how you'd like to pay to confirm your booking.</p>

    <?php if (!stripe_is_configured()): ?>
    <div class="wizard-pending-notice" style="margin-bottom:24px;">
      <p><strong>Stripe isn't connected yet.</strong> This page's flow and pricing are fully built, but real payment processing needs the Stripe SDK installed (<code>composer require stripe/stripe-php</code>) and live API keys added to <code>includes/config.php</code> before it can actually charge a card. Nothing will be charged from this screen right now.</p>
    </div>
    <?php endif; ?>

    <form method="post" action="<?php echo SITE_URL; ?>/book/flow-a/steps/process-payment">
      <div class="payment-summary">
        <div class="review-row"><span>Wedding Film &amp; Photography</span><span>&pound;<?php echo number_format($full, 2); ?></span></div>
      </div>

      <label class="payment-option selected">
        <input type="radio" name="payment_choice" value="deposit" checked style="margin-right:12px;">
        <div style="flex:1;"><strong>Pay Deposit Now</strong><div style="font-size:12.5px;color:var(--muted);margin-top:2px;">30% due today, remainder before your event</div></div>
        <div style="font-family:'Cormorant Garamond',serif;font-size:20px;color:var(--gold-light);">&pound;<?php echo number_format($deposit, 2); ?></div>
      </label>
      <label class="payment-option">
        <input type="radio" name="payment_choice" value="full" style="margin-right:12px;">
        <div style="flex:1;"><strong>Pay in Full</strong><div style="font-size:12.5px;color:var(--muted);margin-top:2px;">Settle the full estimated total today</div></div>
        <div style="font-family:'Cormorant Garamond',serif;font-size:20px;color:var(--gold-light);">&pound;<?php echo number_format($full, 2); ?></div>
      </label>

      <div class="payment-secure-note">&#128274; Payments are processed securely by Stripe. Verve Creative Studio never sees or stores your card details.</div>

      <div class="wizard-nav-buttons" style="margin-top:26px;">
        <a href="<?php echo SITE_URL; ?>/book/flow-a/steps/review" class="btn btn-outline">&larr; Back</a>
        <button type="submit" class="btn btn-solid">Proceed to Secure Payment &rarr;</button>
      </div>
    </form>
  </div>

  <?php require __DIR__ . '/../../../includes/booking/flow-a-sidebar.php'; ?>
</div>

<?php require __DIR__ . '/../../../includes/booking/flow-a-footer-trust.php'; ?>

<script>
  document.querySelectorAll('.payment-option').forEach(opt => {
    opt.addEventListener('click', () => {
      document.querySelectorAll('.payment-option').forEach(o => o.classList.remove('selected'));
      opt.classList.add('selected');
      opt.querySelector('input').checked = true;
    });
  });
</script>

<?php require __DIR__ . '/../../../includes/footer.php'; ?>
