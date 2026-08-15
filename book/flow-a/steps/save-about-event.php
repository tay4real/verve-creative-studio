<?php
require_once __DIR__ . '/../../../includes/config.php';
require_once __DIR__ . '/../../../includes/booking-session.php';

flow_a_set('guest_count', trim($_POST['guest_count'] ?? ''));
flow_a_set('event_schedule', trim($_POST['event_schedule'] ?? ''));
flow_a_set('special_requests', trim($_POST['special_requests'] ?? ''));

header('Location: ' . SITE_URL . '/book/flow-a/steps/upload');
exit;
