<?php
/**
 * Les shortcodes relatif aux sociétés
 *
 * @author Evarisk <dev@evarisk.com>
 * @since 6.2.10
 * @version 7.0.0
 * @copyright 2015-2018 Evarisk
 * @package DigiRisk
 */

namespace digi;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Les shortcodes relatif aux sociétés
 */
class Society_Shortcode {

	/**
	 * Le constructeur
	 *
	 * @since 6.2.10
	 */
	public function __construct() {
		add_shortcode( 'digi-configuration', array( $this, 'callback_configuration' ) );
	}

	/**
	 * Affiches le formulaire pour configurer un groupement
	 *
	 * @param array $param Les paramètres du shortcode.
	 *
	 * @since 6.2.10
	 */
	public function callback_configuration( $param ) {
		$element_id = $param['post_id'];
		$element    = Society_Class::g()->show_by_type( $element_id );

		Society_Configuration_Class::g()->display( $element );
	}
}

new Society_Shortcode();
