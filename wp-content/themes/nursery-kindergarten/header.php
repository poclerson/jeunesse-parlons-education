<?php
/**
 * The header for our theme
 *
 * @subpackage Nursery Kindergarten
 * @since 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php
	if ( function_exists( 'wp_body_open' ) ) {
	    wp_body_open();
	} else {
	    do_action( 'wp_body_open' );
	}
?>
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'nursery-kindergarten' ); ?></a>
	<?php if( get_theme_mod('education_insight_theme_loader',false) != ''){ ?>
		<div class="preloader">
			<div class="load">
			  <hr/><hr/><hr/><hr/>
			</div>
		</div>
	<?php }?>
	<div id="page" class="site">
		<div id="header">
			<div class="wrap_figure">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-3">
							<div class="logo">
						        <?php if ( has_custom_logo() ) : ?>
				            		<?php the_custom_logo(); ?>
					            <?php endif; ?>
				              	<?php $education_insight_blog_info = get_bloginfo( 'name' ); ?>
				              		<?php if( get_theme_mod('education_insight_logo_title',true) != '' ){ ?>
						                <?php if ( ! empty( $education_insight_blog_info ) ) : ?>
						                  	<?php if ( is_front_page() && is_home() ) : ?>
						                    	<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						                  	<?php else : ?>
					                      		<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					                  		<?php endif; ?>
						                <?php endif; ?>
						            <?php }?>
					                <?php
				                  		$education_insight_description = get_bloginfo( 'description', 'display' );
					                  	if ( $education_insight_description || is_customize_preview() ) :
					                ?>
					                <?php if( get_theme_mod('education_insight_logo_text',false) != '' ){ ?>
					                  	<p class="site-description">
					                    	<?php echo esc_html($education_insight_description); ?>
					                  	</p>
					                <?php }?>
				              	<?php endif; ?>
						    </div>
						</div>
						<div class="col-lg-7 col-md-6 col-3">
						   	<div class="theme-menu">
						   		<?php if(has_nav_menu('primary-3')){?>
									<div class="toggle-menu gb_menu">
										<button onclick="education_insight_gb_Menu_open()" class="gb_toggle"><i class="fas fa-ellipsis-h"></i><p><?php esc_html_e('Menu','nursery-kindergarten'); ?></p></button>
									</div>
								<?php }?>
								<?php get_template_part('template-parts/navigation/navigation-top'); ?>
						   	</div>
						</div>
						<div class="col-lg-2 col-md-3 col-9">
							<div class="admision-btn">
								<?php if( get_theme_mod('education_insight_admission_text') != '' || get_theme_mod('education_insight_admission_link') != ''){ ?>
									<a href="<?php echo esc_url(get_theme_mod('education_insight_admission_link','')); ?>"><?php echo esc_html(get_theme_mod('education_insight_admission_text','')); ?></a>
								<?php }?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
