<?php
/**
 * Left-column vertical step nav for Flow B. Expects $current_step (1-8).
 */
require_once __DIR__ . '/flow-b-shared.php';
?>
<div class="flowb-steps-nav">
  <?php foreach ($flow_b_steps as $i => $step): $n = $i + 1;
    $state = $n < $current_step ? 'done' : ($n === $current_step ? 'active' : ''); ?>
  <div class="flowb-step-item <?php echo $state; ?>">
    <div class="flowb-step-circle"><?php echo $n < $current_step ? '&check;' : $n; ?></div>
    <div>
      <div class="flowb-step-title"><?php echo htmlspecialchars($step['title']); ?></div>
      <div class="flowb-step-desc"><?php echo htmlspecialchars($step['desc']); ?></div>
    </div>
  </div>
  <?php endforeach; ?>
</div>
