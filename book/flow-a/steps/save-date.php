<?php
require_once __DIR__ . '/../../../includes/config.php';
require_once __DIR__ . '/../../../includes/booking-session.php';

$date = $_POST['selected_date'] ?? '';

// Basic server-side sanity check (never trust client-side validation alone) — real availability
// checking against the bookings table belongs here too, once that table exists.
if (preg_match('/^\d{4}-\d{2}-\d{2}$/', $date) && $date >= date('Y-m-d')) {
    flow_a_set('date', $date);
}

header('Location: ' . SITE_URL . '/book/flow-a/steps/time');
exit;
