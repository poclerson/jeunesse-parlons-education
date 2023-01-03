<?php
/**
 * Theme functions and definitions
 *
 * @package nursery_kindergarten
 */


if ( ! function_exists( 'nursery_kindergarten_enqueue_styles' ) ) :
	/**
	 * Load assets.
	 *
	 * @since 1.0.0
	 */
	function nursery_kindergarten_enqueue_styles() {
		wp_enqueue_style( 'education-insight-style-parent', get_template_directory_uri() . '/style.css' );
		wp_enqueue_style( 'nursery-kindergarten-style', get_stylesheet_directory_uri() . '/style.css', array( 'education-insight-style-parent' ), '1.0.0' );
	}
endif;
add_action( 'wp_enqueue_scripts', 'nursery_kindergarten_enqueue_styles', 99 );

function nursery_kindergarten_setup() {
  add_theme_support( 'align-wide' );
  add_theme_support( 'automatic-feed-links' );
  add_theme_support( "responsive-embeds" );
  add_theme_support( "wp-block-styles" );
  add_theme_support( 'post-thumbnails' );
  add_theme_support( 'title-tag' );
  add_theme_support('custom-background',array(
    'default-color' => 'ffffff',
  ));
  add_image_size( 'nursery-kindergarten-featured-image', 2000, 1200, true );
  add_image_size( 'nursery-kindergarten-thumbnail-avatar', 100, 100, true );

  $GLOBALS['content_width'] = 525;
  register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'nursery-kindergarten' ),
  ) );

  add_theme_support( 'html5', array(
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
  ) );

  // Add theme support for Custom Logo.
  add_theme_support( 'custom-logo', array(
    'width'       => 250,
    'height'      => 250,
    'flex-width'  => true,
  ) );

  /*
  * This theme styles the visual editor to resemble the theme style,
  * specifically font, colors, and column width.
  */
  add_editor_style( array( 'assets/css/editor-style.css', education_insight_fonts_url() ) );
}
add_action( 'after_setup_theme', 'nursery_kindergarten_setup' );

function nursery_kindergarten_widgets_init() {
  register_sidebar( array(
    'name'          => __( 'Sidebar', 'nursery-kindergarten' ),
    'id'            => 'sidebar-1',
    'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'nursery-kindergarten' ),
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<div class="widget_container"><h3 class="widget-title">',
    'after_title'   => '</h3></div>',
  ) );

  register_sidebar( array(
    'name'          => __( 'Page Sidebar', 'nursery-kindergarten' ),
    'id'            => 'sidebar-2',
    'description'   => __( 'Add widgets here to appear in your pages and posts', 'nursery-kindergarten' ),
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<div class="widget_container"><h3 class="widget-title">',
    'after_title'   => '</h3></div>',
  ) );

  register_sidebar( array(
    'name'          => __( 'Footer 1', 'nursery-kindergarten' ),
    'id'            => 'footer-1',
    'description'   => __( 'Add widgets here to appear in your footer.', 'nursery-kindergarten' ),
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',
  ) );

  register_sidebar( array(
    'name'          => __( 'Footer 2', 'nursery-kindergarten' ),
    'id'            => 'footer-2',
    'description'   => __( 'Add widgets here to appear in your footer.', 'nursery-kindergarten' ),
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',
  ) );

  register_sidebar( array(
    'name'          => __( 'Footer 3', 'nursery-kindergarten' ),
    'id'            => 'footer-3',
    'description'   => __( 'Add widgets here to appear in your footer.', 'nursery-kindergarten' ),
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',
  ) );

  register_sidebar( array(
    'name'          => __( 'Footer 4', 'nursery-kindergarten' ),
    'id'            => 'footer-4',
    'description'   => __( 'Add widgets here to appear in your footer.', 'nursery-kindergarten' ),
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',
  ) );
}
add_action( 'widgets_init', 'nursery_kindergarten_widgets_init' );

function nursery_kindergarten_customize_register() {
  global $wp_customize;
  $wp_customize->remove_setting( 'education_insight_call' );
  $wp_customize->remove_control( 'education_insight_call' );

	$wp_customize->remove_setting( 'education_insight_sticky_header' );
  $wp_customize->remove_control( 'education_insight_sticky_header' );

  $wp_customize->remove_setting( 'education_insight_email' );
  $wp_customize->remove_control( 'education_insight_email' );

  $wp_customize->remove_setting( 'education_insight_middle_sec_page_settigs' );
  $wp_customize->remove_control( 'education_insight_middle_sec_page_settigs' );

  $wp_customize->remove_section( 'education_insight_urls' );

  $wp_customize->remove_section( 'education_insight_popular_courses' );

  $wp_customize->remove_section( 'education_insight_pro' );
}
add_action( 'customize_register', 'nursery_kindergarten_customize_register', 11 );

function nursery_kindergarten_customize( $wp_customize ) {

  wp_enqueue_style('customizercustom_css', esc_url( get_stylesheet_directory_uri() ). '/css/customizer.css');

  $wp_customize->add_section('nursery_kindergarten_pro', array(
    'title'    => __('UPGRADE KINDERGARTEN PREMIUM', 'nursery-kindergarten'),
    'priority' => 1,
  ));

  $wp_customize->add_setting('nursery_kindergarten_pro', array(
    'default'           => null,
    'sanitize_callback' => 'sanitize_text_field',
  ));
  $wp_customize->add_control(new Nursery_Kindergarten_Pro_Control($wp_customize, 'nursery_kindergarten_pro', array(
    'label'    => __('NURSERY KINDERGARTEN PREMIUM', 'nursery-kindergarten'),
    'section'  => 'nursery_kindergarten_pro',
    'settings' => 'nursery_kindergarten_pro',
    'priority' => 1,
  )));

  $wp_customize->add_setting('education_insight_admission_text',array(
    'default' => '',
    'sanitize_callback'  => 'sanitize_text_field'
  ));
  $wp_customize->add_control('education_insight_admission_text',array(
    'type' => 'text',
    'label' => __('Button Text','nursery-kindergarten'),
    'section' => 'education_insight_top',
  ));

  $wp_customize->add_setting('education_insight_admission_link',array(
    'default' => '',
    'sanitize_callback'  => 'esc_url_raw'
  ));
  $wp_customize->add_control('education_insight_admission_link',array(
    'type' => 'url',
    'label' => __('Button Link','nursery-kindergarten'),
    'section' => 'education_insight_top',
  ));

  $wp_customize->add_setting('education_insight_mid_section_heading',array(
    'default' => '',
    'sanitize_callback'  => 'sanitize_text_field'
  ));
  $wp_customize->add_control('education_insight_mid_section_heading',array(
    'type' => 'text',
    'label' => __('Services Heading','nursery-kindergarten'),
    'section' => 'education_insight_middle_section',
  ));
}
add_action( 'customize_register', 'nursery_kindergarten_customize' );

function nursery_kindergarten_enqueue_comments_reply() {
  if( is_singular() && comments_open() && ( get_option( 'thread_comments' ) == 1) ) {
    // Load comment-reply.js (into footer)
    wp_enqueue_script( 'comment-reply', '/wp-includes/js/comment-reply.min.js', array(), false, true );
  }
}
add_action(  'wp_enqueue_scripts', 'nursery_kindergarten_enqueue_comments_reply' );

define('NURSERY_KINDERGARTEN_PRO_LINK',__('https://www.ovationthemes.com/wordpress/nursery-wordpress-theme/','nursery-kindergarten'));

/* Pro control */
if (class_exists('WP_Customize_Control') && !class_exists('Nursery_Kindergarten_Pro_Control')):
    class Nursery_Kindergarten_Pro_Control extends WP_Customize_Control{

    public function render_content(){?>
        <label style="overflow: hidden; zoom: 1;">
            <div class="col-md upsell-btn">
                <a href="<?php echo esc_url( NURSERY_KINDERGARTEN_PRO_LINK ); ?>" target="blank" class="btn btn-success btn"><?php esc_html_e('UPGRADE KINDERGARTEN PREMIUM','nursery-kindergarten');?> </a>
            </div>
            <div class="col-md">
                <img class="nursery_kindergarten_img_responsive " src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/screenshot.png">
            </div>
            <div class="col-md">
                <h3 style="margin-top:10px; margin-left: 20px; text-decoration:underline; color:#333;"><?php esc_html_e('KINDERGARTEN PREMIUM - Features', 'nursery-kindergarten'); ?></h3>
                <ul style="padding-top:10px">
                    <li class="upsell-nursery_kindergarten"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Responsive Design', 'nursery-kindergarten');?> </li>
                    <li class="upsell-nursery_kindergarten"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Boxed or fullwidth layout', 'nursery-kindergarten');?> </li>
                    <li class="upsell-nursery_kindergarten"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Shortcode Support', 'nursery-kindergarten');?> </li>
                    <li class="upsell-nursery_kindergarten"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Demo Importer', 'nursery-kindergarten');?> </li>
                    <li class="upsell-nursery_kindergarten"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Section Reordering', 'nursery-kindergarten');?> </li>
                    <li class="upsell-nursery_kindergarten"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Contact Page Template', 'nursery-kindergarten');?> </li>
                    <li class="upsell-nursery_kindergarten"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Multiple Blog Layouts', 'nursery-kindergarten');?> </li>
                    <li class="upsell-nursery_kindergarten"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Unlimited Color Options', 'nursery-kindergarten');?> </li>
                    <li class="upsell-nursery_kindergarten"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Designed with HTML5 and CSS3', 'nursery-kindergarten');?> </li>
                    <li class="upsell-nursery_kindergarten"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Customizable Design & Code', 'nursery-kindergarten');?> </li>
                    <li class="upsell-nursery_kindergarten"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Cross Browser Support', 'nursery-kindergarten');?> </li>
                    <li class="upsell-nursery_kindergarten"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Detailed Documentation Included', 'nursery-kindergarten');?> </li>
                    <li class="upsell-nursery_kindergarten"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Stylish Custom Widgets', 'nursery-kindergarten');?> </li>
                    <li class="upsell-nursery_kindergarten"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Patterns Background', 'nursery-kindergarten');?> </li>
                    <li class="upsell-nursery_kindergarten"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('WPML Compatible (Translation Ready)', 'nursery-kindergarten');?> </li>
                    <li class="upsell-nursery_kindergarten"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Woo-commerce Compatible', 'nursery-kindergarten');?> </li>
                    <li class="upsell-nursery_kindergarten"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Full Support', 'nursery-kindergarten');?> </li>
                    <li class="upsell-nursery_kindergarten"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('10+ Sections', 'nursery-kindergarten');?> </li>
                    <li class="upsell-nursery_kindergarten"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Live Customizer', 'nursery-kindergarten');?> </li>
                    <li class="upsell-nursery_kindergarten"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('AMP Ready', 'nursery-kindergarten');?> </li>
                    <li class="upsell-nursery_kindergarten"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Clean Code', 'nursery-kindergarten');?> </li>
                    <li class="upsell-nursery_kindergarten"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('SEO Friendly', 'nursery-kindergarten');?> </li>
                    <li class="upsell-nursery_kindergarten"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Supper Fast', 'nursery-kindergarten');?> </li>
                </ul>
            </div>
            <div class="col-md upsell-btn upsell-btn-bottom">
                <a href="<?php echo esc_url( NURSERY_KINDERGARTEN_PRO_LINK ); ?>" target="blank" class="btn btn-success btn"><?php esc_html_e('UPGRADE KINDERGARTEN PREMIUM','nursery-kindergarten');?> </a>
            </div>
        </label>
    <?php } }
endif;

if ( ! defined( 'EDUCATION_INSIGHT_SUPPORT' ) ) {
	define('EDUCATION_INSIGHT_SUPPORT',__('https://wordpress.org/support/theme/nursery-kindergarten','nursery-kindergarten'));
}
if ( ! defined( 'EDUCATION_INSIGHT_REVIEW' ) ) {
	define('EDUCATION_INSIGHT_REVIEW',__('https://wordpress.org/support/theme/nursery-kindergarten/reviews/#new-post','nursery-kindergarten'));
}
if ( ! defined( 'EDUCATION_INSIGHT_LIVE_DEMO' ) ) {
define('EDUCATION_INSIGHT_LIVE_DEMO',__('https://www.ovationthemes.com/demos/nursery-kindergarten/','nursery-kindergarten'));
}
if ( ! defined( 'EDUCATION_INSIGHT_BUY_PRO' ) ) {
define('EDUCATION_INSIGHT_BUY_PRO',__('https://www.ovationthemes.com/wordpress/nursery-wordpress-theme/','nursery-kindergarten'));
}
if ( ! defined( 'EDUCATION_INSIGHT_PRO_DOC' ) ) {
define('EDUCATION_INSIGHT_PRO_DOC',__('https://www.ovationthemes.com/docs/ot-nursery-kindergarten-pro-doc','nursery-kindergarten'));
}
if ( ! defined( 'EDUCATION_INSIGHT_THEME_NAME' ) ) {
define('EDUCATION_INSIGHT_THEME_NAME',__('Premium Nursery Theme','nursery-kindergarten'));
}
