<?php
/**
 * Handles Step 8 file uploads. Validates extension + size, generates a safe filename (never
 * trusts the client-supplied name per Section 2A), and stores under /uploads/bookings/{id}/.
 */
require_once __DIR__ . '/../../../includes/config.php';
require_once __DIR__ . '/../../../includes/booking-session.php';

$allowed_ext = ['jpg', 'jpeg', 'png', 'pdf'];
$max_bytes = 10 * 1024 * 1024; // 10MB

$booking_id = session_id(); // placeholder folder key until real booking IDs exist post-DB
$upload_dir = __DIR__ . '/../../../uploads/bookings/' . $booking_id . '/';
if (!is_dir($upload_dir)) {
    mkdir($upload_dir, 0755, true);
}

$categories = ['mood_board', 'invitation', 'schedule_doc', 'venue_images', 'example_photos', 'shot_list', 'floor_plan'];
$uploads = $_SESSION['flow_a']['uploads'] ?? [];

foreach ($categories as $cat) {
    if (empty($_FILES[$cat]) || !is_array($_FILES[$cat]['name'])) {
        continue;
    }
    $count = count($_FILES[$cat]['name']);
    for ($i = 0; $i < $count; $i++) {
        if ($_FILES[$cat]['error'][$i] !== UPLOAD_ERR_OK) {
            continue; // skip empty/failed slots silently — this is a soft-fail, optional fields
        }
        $tmp_path = $_FILES[$cat]['tmp_name'][$i];
        $size = $_FILES[$cat]['size'][$i];
        $orig_name = $_FILES[$cat]['name'][$i];
        $ext = strtolower(pathinfo($orig_name, PATHINFO_EXTENSION));

        if (!in_array($ext, $allowed_ext, true) || $size > $max_bytes) {
            continue; // reject silently for now — a real UI would surface a per-file error message
        }

        $safe_name = $cat . '_' . bin2hex(random_bytes(6)) . '.' . $ext;
        if (move_uploaded_file($tmp_path, $upload_dir . $safe_name)) {
            $uploads[] = ['category' => $cat, 'filename' => $orig_name, 'stored_as' => $safe_name];
        }
    }
}

$_SESSION['flow_a']['uploads'] = $uploads;
flow_a_set('pinterest_url', trim($_POST['pinterest_url'] ?? ''));

header('Location: ' . SITE_URL . '/book/flow-a/steps/review');
exit;
