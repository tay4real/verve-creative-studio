<?php
require_once __DIR__ . '/../../../includes/config.php';
require_once __DIR__ . '/../../../includes/booking-session.php';

$catalog = [
    'drone'      => ['label' => 'Drone Cinematography',     'price' => 150],
    'livestream' => ['label' => 'Livestream Production',    'price' => 200],
    'crew'       => ['label' => 'Extra Photo/Video Crew',   'price' => 300],
    'booth'      => ['label' => 'Photo Booth',              'price' => 250],
    'album'      => ['label' => 'Wedding Album',            'price' => 180],
    'sameday'    => ['label' => 'Same-Day Edit',            'price' => 220],
    'prints'     => ['label' => 'Luxury Prints',            'price' => 120],
];

$selected = $_POST['addons'] ?? [];
$addons = [];
foreach ($selected as $key) {
    if (isset($catalog[$key])) {
        $addons[] = ['key' => $key, 'label' => $catalog[$key]['label'], 'price' => $catalog[$key]['price']];
    }
}
flow_a_set('addons', $addons);
flow_a_recalculate_total();

header('Location: ' . SITE_URL . '/book/flow-a/steps/about-event');
exit;
