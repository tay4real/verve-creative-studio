<?php
require_once __DIR__ . '/../../../includes/config.php';
require_once __DIR__ . '/../../../includes/booking-session.php';

$fields = ['venue_name', 'venue_address', 'venue_city', 'venue_county', 'venue_country', 'venue_postcode', 'venue_setting'];
foreach ($fields as $field) {
    flow_a_set($field, trim($_POST[$field] ?? ''));
}

// Short display string for the sidebar summary, e.g. "The Grand Hall, London"
$fa = flow_a_state();
$parts = array_filter([$fa['venue_name'], $fa['venue_city']]);
flow_a_set('location', implode(', ', $parts) ?: null);

header('Location: ' . SITE_URL . '/book/flow-a/steps/addons');
exit;
