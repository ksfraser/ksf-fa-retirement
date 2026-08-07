<?php
/** Retirement Planning planning admin page — ksf_fa_retirement. @package Ksfraser\FA\Retirement */
namespace Ksfraser\FA\Retirement;
function retirement_planning_page(): void {
    $debtor_no = (int) ($_REQUEST['debtor_no'] ?? 0);
    echo '<h2>Retirement Planning Planning</h2><p>', htmlentities(render_page($debtor_no)), '</p>';
}
