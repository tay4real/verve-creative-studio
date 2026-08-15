<?php
/**
 * Handles the Step 1 (Coverage) form submission: saves the choice to session, then redirects
 * to Step 2. Plain redirect-after-POST so refreshing the next page never resubmits the form.
 */
require_once __DIR__ . '/../../../includes/config.php';
require_once __DIR__ . '/../../../includes/booking-session.php';

$map = [
    'video' => ['label' => 'Video Coverage', 'price' => 1250],
    'photo' => ['label' => 'Photography Coverage', 'price' => 700],
    'both'  => ['label' => 'Video + Photography', 'price' => 1850],
];

$choice = $_POST['coverage'] ?? 'video';
if (isset($map[$choice])) {
    flow_a_set('coverage', $choice);
    flow_a_set('coverage_label', $map[$choice]['label']);
    flow_a_set('coverage_price', $map[$choice]['price']);
    flow_a_recalculate_total();
}

header('Location: ' . SITE_URL . '/book/flow-a/steps/duration');
exit;
