<?php
require_once __DIR__ . '/../../../includes/config.php';
require_once __DIR__ . '/../../../includes/booking-session.php';
flow_b_set('scope', $_POST['scope'] ?? []);
header('Location: ' . SITE_URL . '/book/flow-b/steps/timeline');
exit;
