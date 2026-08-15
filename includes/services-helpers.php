<?php
/**
 * Shared render helper for service detail pages (Film Production, Photography, etc.).
 * Keeps the checklist markup in one place instead of repeating it across all 9 pages.
 */
function render_service_checklist(array $items): void {
    echo '<div class="service-checklist">';
    foreach ($items as $item) {
        echo '<div class="service-checklist-item"><span class="check">&check;</span><span>' . htmlspecialchars($item) . '</span></div>';
    }
    echo '</div>';
}
