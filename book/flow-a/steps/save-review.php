<?php
require_once __DIR__ . '/../../../includes/config.php';
require_once __DIR__ . '/../../../includes/booking-session.php';

if (empty($_POST['terms_accepted'])) {
    // Terms weren't checked — send back to review rather than silently proceeding
    header('Location: ' . SITE_URL . '/book/flow-a/steps/review');
    exit;
}

flow_a_set('terms_accepted', true);

header('Location: ' . SITE_URL . '/book/flow-a/steps/payment');
exit;
