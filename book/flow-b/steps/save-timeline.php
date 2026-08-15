<?php
require_once __DIR__ . '/../../../includes/config.php';
require_once __DIR__ . '/../../../includes/booking-session.php';
flow_b_set('needed_by', trim($_POST['needed_by'] ?? ''));
flow_b_set('urgency', trim($_POST['urgency'] ?? ''));
header('Location: ' . SITE_URL . '/book/flow-b/steps/budget');
exit;
