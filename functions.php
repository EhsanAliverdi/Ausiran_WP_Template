<?php

//<editor-fold desc="CONSTANTS">

define( 'AUSIRAN_THEME_DIR', get_template_directory() );
define( 'AUSIRAN_THEME_URI', get_template_directory_uri() );
const AUSIRAN_THEME_CSS_DIR = AUSIRAN_THEME_URI . '/assets/css/';
const AUSIRAN_THEME_JS_DIR  = AUSIRAN_THEME_URI . '/assets/js/';
const AUSIRAN_THEME_FONT_DIR = AUSIRAN_THEME_URI . '/assets/font/';
const AUSIRAN_THEME_IMAGES_DIR = AUSIRAN_THEME_URI . '/assets/images/';
const AUSIRAN_THEME_INC = AUSIRAN_THEME_DIR . '/inc/';
define('VERSION',wp_get_theme()->get('Version'));





//Side





//</editor-fold>

//<editor-fold desc="functions and definitions">
/**
 * ausiran functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ausiran
 */

if ( !function_exists( 'ausiran_setup' ) ):
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function ausiran_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on ausiran, use a find and replace
		 * to change 'ausiran' to the name of your theme in all the template files.
		 */
//		load_theme_textdomain( 'ausiran', AUSIRAN_THEME_DIR. '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( [
			'main-menu' => esc_html__( 'Main Menu', 'ausiran' )
		] );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', [
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		] );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'ausiran_custom_background_args', [
			'default-color' => '#ffffff',
			'default-image' => '',
		] ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

//		//Enable custom header
//		add_theme_support( 'custom-header' );



		/**
		 * Enable suporrt for Post Formats
		 *
		 * see: https://codex.wordpress.org/Post_Formats
		 */
		add_theme_support( 'post-formats', [

		] );

		// Add support for Block Styles.
		add_theme_support( 'wp-block-styles' );

		// Add support for full and wide align images.
		add_theme_support( 'align-wide' );

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

		// Add support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );

		remove_theme_support( 'widgets-block-editor' );

		add_image_size( 'ausiran-case-details', 1170, 600, [ 'center', 'center' ] );
	}
endif;
add_action( 'after_setup_theme', 'ausiran_setup' );
//</editor-fold desc="functions and definitions">

//<editor-fold desc="Register widget area">
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function ausiran_widgets_init() {

	$footer_style_2_switch = get_theme_mod( 'footer_style_2_switch', true );
	$footer_style_3_switch = get_theme_mod( 'footer_style_3_switch', true );
	$footer_subcriber_switch = get_theme_mod( 'footer_subcriber_switch', true );
	$footer_subcriber2_switch = get_theme_mod( 'footer_subcriber2_switch', true );

	/**
	 * blog sidebar
	 */
	register_sidebar( [
		'name'          => esc_html__( 'Blog Sidebar', 'ausiran' ),
		'id'            => 'blog-sidebar',
		'before_widget' => '<div id="%1$s" class="widget innerWrapperSidebar mb-30 %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="sidebar__widget--title sidebarTitle__heading text-uppercase mb-30">',
		'after_title'   => '</h3>',
	] );

	/**
	 * Campaigns sidebar
	 */
	register_sidebar( [
		'name'          => esc_html__( 'Campaigns Sidebar', 'ausiran' ),
		'id'            => 'campaigns-sidebar',
		'before_widget' => '<div id="%1$s" class="widget innerWrapperSidebar mb-30 %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="sidebar__widget--title sidebarTitle__heading text-uppercase mb-30">',
		'after_title'   => '</h3>',
	] );


	$footer_widgets = get_theme_mod( 'footer_widget_number', 4 );

	// footer default
	for ( $num = 1; $num <= $footer_widgets; $num++ ) {
		register_sidebar( [
			'name'          => sprintf( esc_html__( 'Footer %1$s', 'ausiran' ), $num ),
			'id'            => 'footer-' . $num,
			'description'   => sprintf( esc_html__( 'Footer %1$s', 'ausiran' ), $num ),
			'before_widget' => '<div id="%1$s" class="footer__widget mb-50 footer-col-'.$num.' %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="footer__heading text-uppercase text-white">',
			'after_title'   => '</h2>',
		] );
	}

	// footer 2
	if ( $footer_style_2_switch ) {
		for ( $num = 1; $num <= $footer_widgets; $num++ ) {

			register_sidebar( [
				'name'          => sprintf( esc_html__( 'Footer Style 2 : %1$s', 'ausiran' ), $num ),
				'id'            => 'footer-2-' . $num,
				'description'   => sprintf( esc_html__( 'Footer Style 2 : %1$s', 'ausiran' ), $num ),
				'before_widget' => '<div id="%1$s" class="footer__widget mb-50 footer-col-2-'.$num.' %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h2 class="footer__heading text-uppercase text-white">',
				'after_title'   => '</h2>',
			] );
		}
	}


	// Footer Subscribe
	if ( $footer_subcriber_switch ) {
		register_sidebar(array(
			'name' => esc_html__('Footer Subscribe Widget', 'ausiran'),
			'id' => 'footer-subcriber',
			'before_widget' => '<div id="%1$s" class="footer-sub-widgets %2$s">',
			'after_widget' => '</div>',
			'before_title' => '',
			'after_title' => '',
		));
	}

	// Footer Subscribe 2
	if ( $footer_subcriber2_switch ) {
		register_sidebar(array(
			'name' => esc_html__('Footer Subscribe 2 Widget', 'ausiran'),
			'id' => 'footer-subcriber2',
			'before_widget' => '<div id="%1$s" class="footer-sub-widgets %2$s">',
			'after_widget' => '</div>',
			'before_title' => '',
			'after_title' => '',
		));
	}


	/**
	 * Service Widget
	 */
	register_sidebar(
		array(
			'name'          => esc_html__( 'Service Sidebar', 'ausiran' ),
			'id'            => 'services-sidebar',
			'description'   => esc_html__( 'Widgets in this area will be shown on Service Details Sidebar.', 'ausiran' ),
			'before_widget' => '<div class="tp-services-sidebar mb-30 %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="tp-sv-sidebar-title mb-30">',
			'after_title'   => '</h4>',
		)
	);

	/**
	 * Portfolio Widget
	 */
	register_sidebar(
		array(
			'name'          => esc_html__( 'Portfolio Sidebar', 'ausiran' ),
			'id'            => 'portfolio-sidebar',
			'before_widget' => '<div class="tp-faqs-left-sidebar tp-services-sidebar mb-30 %2$s">',
			'after_widget'  => '</div>',
			'description'   => esc_html__( 'Widgets in this area will be shown on Portfolio Details Sidebar.', 'ausiran' ),
			'before_title'  => '<h4 class="tp-faqs-left-sidebar-title mb-30">',
			'after_title'   => '</h4>',
		)
	);

	/**
	 * Faq Widget
	 */
	register_sidebar(
		array(
			'name'          => esc_html__( 'Faq Sidebar', 'ausiran' ),
			'id'            => 'faq-sidebar',
			'before_widget' => '<div class="innerWrapperSidebar"><div class="sidebarWidget mb-30 %2$s">',
			'after_widget'  => '</div></div>',
			'description'   => esc_html__( 'Widgets in this area will be shown on Portfolio Details Sidebar.', 'ausiran' ),
			'before_title'  => '<div class="sidebarTitle"><h5 class="sidebarTitle__heading text-uppercase mb-30">',
			'after_title'   => '</h5></div>',
		)
	);

	/**
	 * Event Widget
	 */
	register_sidebar(
		array(
			'name'          => esc_html__( 'Event Sidebar', 'ausiran' ),
			'id'            => 'event-sidebar',
			'before_widget' => '<div class="sidebarWidget mb-30 %2$s">',
			'after_widget'  => '</div>',
			'description'   => esc_html__( 'Widgets in this area will be shown on Portfolio Details Sidebar.', 'ausiran' ),
			'before_title'  => '<div class="sidebarTitle"><h5 class="sidebarTitle__heading text-uppercase mb-30">',
			'after_title'   => '</h5></div>',
		)
	);
}
add_action( 'widgets_init', 'ausiran_widgets_init' );
//</editor-fold desc="Register widget area">

//<editor-fold desc="Register fonts">
function ausiran_fonts_url() {
	$font_url = '';

	/*
	Translators: If there are characters in your language that are not supported
	by chosen font(s), translate this to 'off'. Do not translate into your own language.
	 */
	if ( 'off' !== _x( 'on', 'Google font: on or off', 'ausiran' ) ) {
		$font_url = 'https://fonts.googleapis.com/css2?'. urlencode('family=Barlow:wght@400;500;600;700&family=Oswald:wght@400;500;600;700&display=swap');
	}
	return $font_url;
}
function ausiran_register_fonts() {
	/**
	 * all css fonts
	 */
	wp_enqueue_style( 'ausiran-fonts', ausiran_fonts_url(), array(), '1.0.0' );
}
add_action('wp_enqueue_scripts','ausiran_register_fonts');
//</editor-fold>

//<editor-fold desc="Register Styles">
/**
 * Enqueue styles.
 */
function ausiran_register_styles(){
	/**
	 * all css files
	 */

	if( is_rtl() ){
		wp_enqueue_style( 'bootstrap-rtl', AUSIRAN_THEME_CSS_DIR.'bootstrap.rtl.min.css');
	}else{
		wp_enqueue_style( 'bootstrap', AUSIRAN_THEME_CSS_DIR.'bootstrap.min.css');
	}
	wp_enqueue_style( 'animate', AUSIRAN_THEME_CSS_DIR . 'animate.min.css');
	wp_enqueue_style( 'custom-animation', AUSIRAN_THEME_CSS_DIR . 'custom-animation.css', array(), VERSION, 'all' );
	wp_enqueue_style( 'swiper-bundle', AUSIRAN_THEME_CSS_DIR . 'swiper-bundle.css');
	wp_enqueue_style( 'meanmenu', AUSIRAN_THEME_CSS_DIR . 'meanmenu.css');
	wp_enqueue_style( 'fontawesome5pro', AUSIRAN_THEME_CSS_DIR . 'fontawesome.min.css');
	wp_enqueue_style( 'nice-select', AUSIRAN_THEME_CSS_DIR . 'nice-select.css');
	wp_enqueue_style( 'magnific-popup', AUSIRAN_THEME_CSS_DIR . 'magnific-popup.css');
	wp_enqueue_style( 'ausiran-core', AUSIRAN_THEME_CSS_DIR . 'ausiran-core.css', array(),VERSION, 'all' );
	wp_enqueue_style( 'ausiran-unit', AUSIRAN_THEME_CSS_DIR . 'ausiran-unit.css', array(), VERSION, 'all' );
	wp_enqueue_style( 'ausiran-custom', AUSIRAN_THEME_CSS_DIR . 'ausiran-custom.css', array(),VERSION, 'all' );
	wp_enqueue_style( 'ausiran-style', get_stylesheet_uri() );


}
add_action('wp_enqueue_scripts','ausiran_register_styles');
//</editor-fold>

//<editor-fold desc="Register scripts">
/**
 * Enqueue scripts.
 */
function ausiran_register_scripts(){
	/**
	 * all js files
	 */
	wp_enqueue_script( 'bootstrap-bundle', AUSIRAN_THEME_JS_DIR . 'bootstrap.bundle.js', array('jquery'), VERSION, true );
	wp_enqueue_script( 'meanmenu', AUSIRAN_THEME_JS_DIR . 'meanmenu.js', array('jquery'), VERSION, true );
	wp_enqueue_script( 'swiper', AUSIRAN_THEME_JS_DIR . 'swiper-bundle.js', array('jquery'), VERSION, true );
	wp_enqueue_script( 'jquery-nice-select', AUSIRAN_THEME_JS_DIR . 'jquery.nice-select.min.js', array('jquery'), VERSION, true );
	wp_enqueue_script( 'validator', AUSIRAN_THEME_JS_DIR . 'validator.min.js',array('jquery'), VERSION, true );
	wp_enqueue_script( 'magnific-popup', AUSIRAN_THEME_JS_DIR . 'magnific-popup.js', array('jquery'), VERSION, true );
	wp_enqueue_script( 'wow.min', AUSIRAN_THEME_JS_DIR . 'wow.min.js', array('jquery'), false, VERSION );
	wp_enqueue_script( 'ausiran-main', AUSIRAN_THEME_JS_DIR . 'main.js', array('jquery'), time(), VERSION );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action('wp_enqueue_scripts','ausiran_register_scripts');
//</editor-fold>

//<editor-fold desc="Required and includes"
/**
 * Implement the Custom Header feature.
 */
require AUSIRAN_THEME_INC . 'custom-header.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require AUSIRAN_THEME_INC . 'template-functions.php';

/**
 * Custom template helper function for this theme.
 */
require AUSIRAN_THEME_INC . 'template-helper.php';

/**
 * initialize kirki customizer class.
 */
include_once AUSIRAN_THEME_INC . 'kirki-customizer.php';
include_once AUSIRAN_THEME_INC . 'class-ausiran-kirki.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require AUSIRAN_THEME_INC . 'jetpack.php';
}

/**
 * include ausiran functions file
 */
require_once AUSIRAN_THEME_INC . 'class-breadcrumb.php';
require_once AUSIRAN_THEME_INC . 'class-navwalker.php';
require_once AUSIRAN_THEME_INC . 'class-tgm-plugin-activation.php';
require_once AUSIRAN_THEME_INC . 'add_plugin.php';

//</editor-fold>

//<editor-fold desc="comment section">
/**
 *
 * comment section
 *
 */
add_filter( 'comment_form_default_fields', 'ausiran_comment_form_default_fields_func' );

function ausiran_comment_form_default_fields_func( $default ) {

	$default['author'] = '<div class="row">
    <div class="col-xl-6 col-md-6">
    	<div class="post-input">
        	<input type="text" name="author" placeholder="' . esc_attr__( 'Your Name', 'ausiran' ) . '">
        </div>
    </div>';
	$default['email'] = '<div class="col-xl-6 col-md-6">
		<div class="post-input">
        <input type="text" name="email" placeholder="' . esc_attr__( 'Your Email', 'ausiran' ) . '">
    	</div>
    </div>';
	// $default['url'] = '';
	$defaults['comment_field'] = '';

	$default['url'] = '<div class="col-xl-12">
		<div class="post-input">
        <input type="text" name="url" placeholder="' . esc_attr__( 'Website', 'ausiran' ) . '">
    	</div>
    </div>';
	return $default;
}

add_action( 'comment_form_top', 'ausiran_add_comments_textarea' );
function ausiran_add_comments_textarea() {
	if ( !is_user_logged_in() ) {
		echo '<div class="row"><div class="col-xl-12"><div class="post-input"><textarea id="comment" name="comment" cols="60" rows="6" placeholder="' . esc_attr__( 'Write your comment here...', 'ausiran' ) . '" aria-required="true"></textarea></div></div></div>';
	}
}

add_filter( 'comment_form_defaults', 'ausiran_comment_form_defaults_func' );

function ausiran_comment_form_defaults_func( $info ) {
	if ( !is_user_logged_in() ) {
		$info['comment_field'] = '';
		$info['submit_field'] = '%1$s %2$s</div>';
	} else {
		$info['comment_field'] = '<div class="post-input"><textarea id="comment" name="comment" cols="30" rows="10" placeholder="' . esc_attr__( 'Comment *', 'ausiran' ) . '"></textarea>';
		$info['submit_field'] = '%1$s %2$s</div>';
	}

	$info['submit_button'] = '<div class="col-xl-12"><button class="btn btn--styleOne btn--primary it-btn">
                  <span class="btn__text">' . esc_html__( 'Post Comment', 'ausiran' ) . '</span>
                  <span class="it-btn__inner">
                  <span class="it-btn__blobs">
                    <span class="it-btn__blob"></span>
                  <span class="it-btn__blob"></span>
                  <span class="it-btn__blob"></span>
                  <span class="it-btn__blob"></span>
                  </span>
                  </span>
                  <svg class="it-btn__animation" xmlns="http://www.w3.org/2000/svg" version="1.1">
                    <defs>
                      <filter class="goo">
                        <feGaussianBlur in="SourceGraphic" result="blur" stdDeviation="10"></feGaussianBlur>
                        <feColorMatrix in="blur" values="1 0 0 0 0 0 1 0 0 0 0 0 1 0 0 0 0 0 21 -7" result="goo">
                        </feColorMatrix>
                        <feBlend in2="goo" in="SourceGraphic" result="mix"></feBlend>
                      </filter>
                    </defs>
                  </svg>
                </button></div>';

	$info['title_reply_before'] = '<div class="post-comments-title">
                                        <h2>';
	$info['title_reply_after'] = '</h2></div>';
	$info['comment_notes_before'] = '';

	return $info;
}

if ( !function_exists( 'ausiran_comment' ) ) {
	function ausiran_comment( $comment, $args, $depth ) {
		$GLOBAL['comment'] = $comment;
		extract( $args, EXTR_SKIP );
		$args['reply_text'] = '<i class="fal fa-reply"></i> Reply';
		$replayClass = 'comment-depth-' . esc_attr( $depth );
		?>
	<li id="comment-<?php comment_ID();?>">
		<div class="comments-box">
			<div class="comments-avatar">
				<?php print get_avatar( $comment, 102, null, null, [ 'class' => [] ] );?>
			</div>
			<div class="comments-text">
				<div class="avatar-name">
					<h5><?php print get_comment_author_link();?></h5>
					<span><?php comment_time( get_option( 'date_format' ) );?></span>
				</div>
				<?php comment_text();?>
				<?php comment_reply_link( array_merge( $args, [ 'depth' => $depth, 'max_depth' => $args['max_depth'] ] ) );?>
			</div>
		</div>
		<?php
	}
}

//</editor-fold>

//<editor-fold desc="shortcode supports">
/**
 * shortcode supports for removing extra p, spance etc
 *
 */
add_filter( 'the_content', 'ausiran_shortcode_extra_content_remove' );
/**
 * Filters the content to remove any extra paragraph or break tags
 * caused by shortcodes.
 *
 * @since 1.0.0
 *
 * @param string $content  String of HTML content.
 * @return string $content Amended string of HTML content.
 */
function ausiran_shortcode_extra_content_remove( $content ) {

	$array = [
		'<p>['    => '[',
		']</p>'   => ']',
		']<br />' => ']',
	];
	return strtr( $content, $array );

}
//</editor-fold>

//<editor-fold desc="search filter form">
// ausiran_search_filter_form
if ( !function_exists( 'ausiran_search_filter_form' ) ) {
	function ausiran_search_filter_form( $form ) {

		$form = sprintf(
			'<div class="sidebar__widget-px"><div class="search-px"><form class="sidebar-search-form" action="%s" method="get">
      	<input type="text" value="%s" required name="s" placeholder="%s">
      	<button type="submit"> <i class="far fa-search"></i>  </button>
		</form></div></div>',
			esc_url( home_url( '/' ) ),
			esc_attr( get_search_query() ),
			esc_html__( 'Search', 'ausiran' )
		);

		return $form;
	}
	add_filter( 'get_search_form', 'ausiran_search_filter_form' );
}

//</editor-fold>

//<editor-fold desc="content">
/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function ausiran_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'ausiran_content_width', 640 );
}
add_action( 'after_setup_theme', 'ausiran_content_width', 0 );

// wp_body_open
if ( !function_exists( 'wp_body_open' ) ) {
	function wp_body_open() {
		do_action( 'wp_body_open' );
	}
}

//</editor-fold desc="content">

//<editor-fold desc="pingback url">
/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function ausiran_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'ausiran_pingback_header' );
//</editor-fold desc="pingback url">

//<editor-fold desc="Admin Custom Scripts">
function ausiran_admin_custom_scripts() {
	wp_enqueue_media();
	wp_register_script( 'ausiran-admin-custom', get_template_directory_uri() . '/inc/js/admin_custom.js', [ 'jquery' ], '', true );
	wp_enqueue_script( 'ausiran-admin-custom' );
}
add_action( 'admin_enqueue_scripts', 'ausiran_admin_custom_scripts' );
//</editor-fold desc="Admin Custom Scripts">
?>