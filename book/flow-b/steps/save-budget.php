<?php
require_once __DIR__ . '/../../../includes/config.php';
require_once __DIR__ . '/../../../includes/booking-session.php';
flow_b_set('budget_range', trim($_POST['budget_range'] ?? ''));
header('Location: ' . SITE_URL . '/book/flow-b/steps/location');
exit;
