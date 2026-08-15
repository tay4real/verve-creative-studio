<?php
require_once __DIR__ . '/../../../includes/config.php';
require_once __DIR__ . '/../../../includes/booking-session.php';

foreach (['project_title', 'production_type', 'summary', 'goal', 'style_tone', 'reference', 'referral_source'] as $field) {
    flow_b_set($field, trim($_POST[$field] ?? ''));
}

header('Location: ' . SITE_URL . '/book/flow-b/steps/project-type');
exit;
