<?php
require_once __DIR__ . '/../../../includes/config.php';
require_once __DIR__ . '/../../../includes/booking-session.php';

$labels = ['2hr' => '2 Hours', '4hr' => '4 Hours', '6hr' => '6 Hours', '8hr' => 'Full Day (8hrs)', 'multi' => 'Multi-Day', 'custom' => 'Custom'];
$choice = $_POST['duration'] ?? '';

if ($choice === 'custom') {
    $hours = (int) ($_POST['custom_hours'] ?? 0);
    flow_a_set('duration', 'custom');
    flow_a_set('duration_hours', $hours);
    flow_a_set('duration_label', $hours > 0 ? $hours . ' Hours (Custom)' : 'Custom');
} elseif (isset($labels[$choice])) {
    flow_a_set('duration', $choice);
    flow_a_set('duration_label', $labels[$choice]);
}

header('Location: ' . SITE_URL . '/book/flow-a/steps/date');
exit;
