<?php
require_once __DIR__ . '/../../../includes/config.php';
require_once __DIR__ . '/../../../includes/booking-session.php';
flow_b_set('location_text', trim($_POST['location_text'] ?? ''));
flow_b_set('setting', trim($_POST['setting'] ?? ''));
header('Location: ' . SITE_URL . '/book/flow-b/steps/upload');
exit;
