<?php
require_once __DIR__ . '/../../../includes/config.php';
require_once __DIR__ . '/../../../includes/booking-session.php';
require_once __DIR__ . '/../../../includes/stripe-client.php';

$fa = flow_a_state();
$choice = $_POST['payment_choice'] ?? 'deposit';
$amount = $choice === 'full' ? $fa['estimated_total'] : round($fa['estimated_total'] * 0.30, 2);
flow_a_set('payment_choice', $choice);
flow_a_set('payment_amount', $amount);

if (stripe_is_configured()) {
    $success_url = SITE_DOMAIN . SITE_URL . '/book/confirmation?status=success';
    $cancel_url  = SITE_DOMAIN . SITE_URL . '/book/flow-a/steps/payment';
    $checkout_url = stripe_create_checkout_session(
        'Wedding Film & Photography — ' . ($choice === 'full' ? 'Full Payment' : 'Deposit'),
        (int) round($amount * 100), // pence
        $success_url,
        $cancel_url
    );
    if ($checkout_url) {
        header('Location: ' . $checkout_url);
        exit;
    }
}

// Stripe not configured (or session creation failed) — go to confirmation in a clearly-marked
// "not actually paid" demo state rather than pretending a real charge went through.
header('Location: ' . SITE_URL . '/book/confirmation?status=demo');
exit;
