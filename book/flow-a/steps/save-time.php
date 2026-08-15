<?php
require_once __DIR__ . '/../../../includes/config.php';
require_once __DIR__ . '/../../../includes/booking-session.php';

$valid_slots = ['08:00','09:00','10:00','11:00','12:00','13:00','14:00','15:00','16:00','17:00','18:00'];
$time = $_POST['time'] ?? '';

if (in_array($time, $valid_slots, true)) {
    flow_a_set('time', $time);
}

header('Location: ' . SITE_URL . '/book/flow-a/steps/location');
exit;
