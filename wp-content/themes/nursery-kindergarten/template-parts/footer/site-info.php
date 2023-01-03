<?php
/**
 * Displays footer site info
 *
 * @subpackage Nursery Kindergarten
 * @since 1.0
 * @version 1.4
 */

?>
<div class="site-info py-4 text-center">
	<?php
		echo esc_html( get_theme_mod( 'education_insight_footer_text' ) );
		printf(
			/* translators: %s: Nursery WordPress Theme. */
			esc_html__( ' %s ', 'nursery-kindergarten' ),
			'<a target="_blank" href="' . esc_attr__( 'https://www.ovationthemes.com/wordpress/free-kindergarten-wordpress-theme/', 'nursery-kindergarten' ) . '"> Kindergarten WordPress Theme</a>'
		);
	?>
</div>
