<?php
/**
 * Flow A entry point — redirects straight to Step 1. Not a designed page itself, just routing.
 */
require_once __DIR__ . '/../../includes/config.php';
header('Location: ' . SITE_URL . '/book/flow-a/steps/coverage');
exit;
