<?php
/**
 * The header for our theme
 *
 * This is the template that displays all the <head> section and everything up until <div id="content">
 *
 * @package ausiran
 */
?>

<!doctype html>

<html <?php language_attributes();?>>
<head>
	<meta charset="<?php bloginfo( 'charset' );?>">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ): ?>
	<?php endif;?>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head();?>
</head>

<body <?php body_class();?>>

<?php
//header constants
define( "AUSIRAN_PRELOADER", get_theme_mod( 'ausiran_preloader', false ) );
define( "AUSIRAN_PRELOADER_TEXT", get_theme_mod( 'ausiran_preloader_text', __( 'WOMAN LIFE FREEDOM', 'ausiran' ) ) );
define( "AUSIRAN_CURSOR", get_theme_mod( 'ausiran_cursor', false ) );
define( "AUSIRAN_BACKTOTOP", get_theme_mod( 'ausiran_backtotop', true ) );

define( "AUSIRAN_BUTTON_TEXT", get_theme_mod( 'ausiran_button_text', __( 'donate now ', 'ausiran' ) ) );
define( "AUSIRAN_BUTTON_LINK", get_theme_mod( 'ausiran_button_link', __( '#', 'ausiran' ) ) );
define( "AUSIRAN_HEADER_RIGHT", get_theme_mod( 'ausiran_header_right', false ) );
const AUSIRAN_MENU_COL       = AUSIRAN_HEADER_RIGHT ? '' : 'header-right-enable';

//Preloader
const AUSIRAN_PRELOADER_ICON = AUSIRAN_THEME_IMAGES_DIR . '/logos/logo_1.svg';
define( "AUSIRAN_PRELOADER_LOGO", get_theme_mod( 'ausiran_preloader_logo', AUSIRAN_PRELOADER_ICON ) );
?>

<?php if ( !empty( AUSIRAN_PRELOADER ) ): ?>
    <!-- pre loader area start -->
    <div id="preloader">
        <div class="ctn-preloader" id="ctn-preloader">
            <div class="round_spinner">
                <div class="spinner"></div>
                <div class="text">
                    <img src="<?php echo esc_url(AUSIRAN_PRELOADER_LOGO); ?>" alt="<?php echo esc_attr__('icon','ausiran'); ?>">
                </div>
            </div>
			<?php if(!empty(AUSIRAN_PRELOADER_TEXT)) : ?>
                <h2 class="head"><?php echo esc_html(AUSIRAN_PRELOADER_TEXT); ?></h2>
			<?php endif; ?>
            <p></p>
        </div>
    </div>
    <!-- pre loader area end -->
<?php endif;?>

<?php if ( !empty( AUSIRAN_BACKTOTOP ) ): ?>
    <!-- back to top start -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- back to top end -->
<?php endif;?>

<!-- Template Search -->
<?php ausiran_search_form_2(); ?>
<!-- Template Search End -->


<?php wp_body_open();?>

<!-- header start -->
<?php do_action( 'ausiran_header_style' );?>
<!-- header end -->

<!-- wrapper-box start -->
<?php do_action( 'ausiran_before_main_content' );?>
