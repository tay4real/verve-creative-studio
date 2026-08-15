<?php
require_once __DIR__ . '/../../../includes/config.php';
require_once __DIR__ . '/../../../includes/booking-session.php';

$allowed_ext = ['jpg', 'jpeg', 'png', 'pdf'];
$max_bytes = 10 * 1024 * 1024;

$booking_id = session_id();
$upload_dir = __DIR__ . '/../../../uploads/bookings/flow-b-' . $booking_id . '/';
if (!is_dir($upload_dir)) {
    mkdir($upload_dir, 0755, true);
}

$uploads = $_SESSION['flow_b']['uploads'] ?? [];
if (!empty($_FILES['materials']) && is_array($_FILES['materials']['name'])) {
    $count = count($_FILES['materials']['name']);
    for ($i = 0; $i < $count; $i++) {
        if ($_FILES['materials']['error'][$i] !== UPLOAD_ERR_OK) continue;
        $tmp = $_FILES['materials']['tmp_name'][$i];
        $size = $_FILES['materials']['size'][$i];
        $orig = $_FILES['materials']['name'][$i];
        $ext = strtolower(pathinfo($orig, PATHINFO_EXTENSION));
        if (!in_array($ext, $allowed_ext, true) || $size > $max_bytes) continue;
        $safe = 'materials_' . bin2hex(random_bytes(6)) . '.' . $ext;
        if (move_uploaded_file($tmp, $upload_dir . $safe)) {
            $uploads[] = ['filename' => $orig, 'stored_as' => $safe];
        }
    }
}
$_SESSION['flow_b']['uploads'] = $uploads;

header('Location: ' . SITE_URL . '/book/flow-b/steps/review');
exit;
