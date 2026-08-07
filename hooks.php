<?php
/**
 * ksf_fa_retirement — FrontAccounting hooks for Retirement Planning.
 * @package Ksfraser\FA\Retirement
 */
namespace Ksfraser\FA\Retirement;
use Ksfraser\Retirement\IntergenerationalTransferCalculator;
use Ksfraser\ModulesCommon\CalculationContext;

function install() { return true; }
function render_page( int $debtor_no ): string {
    return sprintf( 'Retirement Planning plan for debtor %d (scaffold).', $debtor_no );
}
function hooks_init(): void {}
