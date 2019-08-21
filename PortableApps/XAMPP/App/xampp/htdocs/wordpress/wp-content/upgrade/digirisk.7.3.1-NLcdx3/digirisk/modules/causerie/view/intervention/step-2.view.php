<?php
/**
 * Evaluation d'une causerie: étape 2, permet d'afficher les images associées à la causerie dans un format "slider".
 *
 * @author    Evarisk <dev@evarisk.com>
 * @since     6.6.0
 * @version   6.6.0
 * @copyright 2018 Evarisk.
 * @package   DigiRisk
 */

namespace digi;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
} ?>

<div class="owl-carousel owl-theme" style="width: 200px; margin: auto;">
	<?php
	if ( ! empty( $final_causerie->data['associated_document_id']['image'] ) ) :
		foreach ( $final_causerie->data['associated_document_id']['image'] as $key => $image_id ) :
			?>
			<div class="item" style="height: auto; max-width:60%; margin-left: 20%;" data-dot="<button><?php echo esc_attr( $key + 1 ); ?></button>">
				<img style="width: 50%;" src="<?php echo wp_get_attachment_image_url( $image_id, 'large' ); ?>" />
			</div>
			<?php
		endforeach;
	else:
		esc_html_e( 'Aucune Image à afficher', 'digirisk' );
	endif;
	?>
</div>

<a href="<?php echo Causerie_Intervention_Class::g()->get_link( $final_causerie, 1 ); ?>" class="wpeo-button button-grey">
	<i class="fas fa-arrow-left"></i>
	<span><?php esc_html_e( 'Signature du formateur', 'digirisk' ); ?></span>
</a>

<div class="wpeo-button button-blue alignright action-attribute"
	data-action="next_step_causerie"
	data-nonce="<?php echo esc_attr( wp_create_nonce( 'next_step_causerie' ) ); ?>"
	data-id="<?php echo esc_attr( $final_causerie->data['id'] ); ?>">
	<?php esc_html_e( 'Tache liée', 'digirisk' ); ?>
	<i class="fas fa-arrow-right"></i>
	</span>
</div>

<a href="<?php echo Causerie_Intervention_Class::g()->get_link( $final_causerie, 4, true ); ?>" style="clear: both;" class="wpeo-button button-grey alignright">
	<span><?php esc_html_e( 'Passer à l\'étape des participants', 'digirisk' ); ?></span>
	<i class="fas fa-arrow-right"></i>

</a>
