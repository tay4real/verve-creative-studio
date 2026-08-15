<?php
/**
 * Flow B entry point. Expects ?service=slug (e.g. ?service=film-production).
 * Stores the chosen service in session, then redirects to Step 1.
 */
require_once __DIR__ . '/../../includes/config.php';
require_once __DIR__ . '/../../includes/booking-session.php';

$catalog = flow_b_service_catalog();
$slug = $_GET['service'] ?? 'film-production';
if (!isset($catalog[$slug])) {
    $slug = 'film-production';
}
flow_b_set('service_slug', $slug);

header('Location: ' . SITE_URL . '/book/flow-b/steps/project-details');
exit;
