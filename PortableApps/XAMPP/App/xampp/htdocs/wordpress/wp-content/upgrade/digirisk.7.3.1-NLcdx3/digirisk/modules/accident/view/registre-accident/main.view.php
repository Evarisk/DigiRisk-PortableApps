<?php
/**
 * Apelle la vue list.view du module accident
 *
 * @author Evarisk <dev@evarisk.com>
 * @since 6.3.0
 * @version 6.4.4
 * @copyright 2015-2017 Evarisk
 * @package DigiRisk
 */

namespace digi;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
} ?>

<div class="digirisk-wrap">
	<?php Accident_Travail_Benin_Class::g()->display(); ?>
</div>
