<?php
require_once __DIR__ . '/../../../includes/config.php';
require_once __DIR__ . '/../../../includes/booking-session.php';
flow_b_set('project_types', $_POST['project_types'] ?? []);
header('Location: ' . SITE_URL . '/book/flow-b/steps/project-scope');
exit;
