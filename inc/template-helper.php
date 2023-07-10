<?php

/**
 * ausiran header
 */
function ausiran_header() {
	$AUSIRAN_BUTTON_TEXT=get_theme_mod( 'ausiran_button_text', __( 'donate now ', 'ausiran' )  );
	$AUSIRAN_BUTTON_LINK=get_theme_mod( 'ausiran_button_link', __( '#', 'ausiran' ) );
	$AUSIRAN_HEADER_RIGHT=get_theme_mod( 'ausiran_header_right', false );
	$AUSIRAN_MENU_COL=AUSIRAN_HEADER_RIGHT ? '' : 'header-right-enable' ;


	 ?>
    <!-- header -->
    <header class="header header--styleFour sticky-on tp-header-deafult">
      <div>
        <div class="container container--custom">
          <div class="row">
            <div class="col-12">
              <div class="header__wrapper <?php print esc_attr($AUSIRAN_MENU_COL); ?> ">
                <!-- logo start -->
                <div class="header__logo">
                    <div class="header__logo__link header__logo__image">
                        <?php ausiran_header_logo(); ?>
                    </div>
                </div>
                <!-- logo end -->
                <!-- Main Menu Start -->
                <div class="header__menu">
                  <nav class="mainMenu" id="mobile-menu">
                    <?php ausiran_header_menu();?>
                  </nav>
                </div>
                <!-- Main Menu End -->
                <!-- Header Right Buttons Search Cart -->
                  <?php if (!empty($AUSIRAN_HEADER_RIGHT)): ?>
                  <div class="header-right-wrapper d-flex align-items-center justify-content-end">
                    
                    <div class="header__right">

                      <div class="header__actions header__actions--style2">
                        <ul>
                          <li>
                            <a href="#template-search">
                              <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21.8281 21.4609L16.2852 15.918C16.1992 15.832 16.0703 15.7891 15.9414 15.7891H15.4688C16.9727 14.1562 17.875 12.0508 17.875 9.6875C17.875 4.78906 13.8359 0.75 8.9375 0.75C3.99609 0.75 0 4.78906 0 9.6875C0 14.6289 3.99609 18.625 8.9375 18.625C11.2578 18.625 13.4062 17.7227 14.9961 16.2617V16.6914C14.9961 16.8633 15.0391 16.9922 15.125 17.0781L20.668 22.6211C20.8828 22.8359 21.1836 22.8359 21.3984 22.6211L21.8281 22.1914C22.043 21.9766 22.043 21.6758 21.8281 21.4609ZM8.9375 17.25C4.72656 17.25 1.375 13.8984 1.375 9.6875C1.375 5.51953 4.72656 2.125 8.9375 2.125C13.1055 2.125 16.5 5.51953 16.5 9.6875C16.5 13.8984 13.1055 17.25 8.9375 17.25Z" fill="#7FB432" />
                              </svg>
                            </a>
                          </li>
                          <li class="d-none">
                            <a href="#">
                              <span><?php print esc_html__('2', 'ausiran'); ?></span>
                              <svg width="25" height="20" viewBox="0 0 25 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M24.2344 7H20.9258L14.9102 0.382812C14.6523 0.0820312 14.2227 0.0820312 13.9648 0.339844C13.6641 0.597656 13.6641 1.02734 13.9219 1.28516L19.0781 7H5.62891L10.7852 1.28516C11.043 1.02734 11.043 0.597656 10.7422 0.339844C10.4844 0.0820312 10.0547 0.0820312 9.79688 0.382812L3.78125 7H0.515625C0.214844 7 0 7.25781 0 7.51562V7.85938C0 8.16016 0.214844 8.375 0.515625 8.375H1.20312L2.49219 17.6133C2.62109 18.6445 3.48047 19.375 4.51172 19.375H20.1953C21.2266 19.375 22.0859 18.6445 22.2148 17.6133L23.5039 8.375H24.2344C24.4922 8.375 24.75 8.16016 24.75 7.85938V7.51562C24.75 7.25781 24.4922 7 24.2344 7ZM20.8828 17.4414C20.7969 17.7852 20.5391 18 20.1953 18H4.51172C4.16797 18 3.91016 17.7852 3.82422 17.4414L2.57812 8.375H22.1289L20.8828 17.4414ZM13.0625 10.7812C13.0625 10.4375 12.7188 10.0938 12.375 10.0938C11.9883 10.0938 11.6875 10.4375 11.6875 10.7812V15.5938C11.6875 15.9805 11.9883 16.2812 12.375 16.2812C12.7188 16.2812 13.0625 15.9805 13.0625 15.5938V10.7812ZM17.875 10.7812C17.875 10.4375 17.5312 10.0938 17.1875 10.0938C16.8008 10.0938 16.5 10.4375 16.5 10.7812V15.5938C16.5 15.9805 16.8008 16.2812 17.1875 16.2812C17.5312 16.2812 17.875 15.9805 17.875 15.5938V10.7812ZM8.25 10.7812C8.25 10.4375 7.90625 10.0938 7.5625 10.0938C7.17578 10.0938 6.875 10.4375 6.875 10.7812V15.5938C6.875 15.9805 7.17578 16.2812 7.5625 16.2812C7.90625 16.2812 8.25 15.9805 8.25 15.5938V10.7812Z" fill="#7FB432" />
                              </svg>
                            </a>
                          </li>
                        </ul>
                      </div>

                      <?php if (!empty($AUSIRAN_BUTTON_TEXT)): ?>
                        <div class="header__button d-none d-lg-block">
                          <a class="btn btn--styleOne btn--secondary it-btn" href="<?php print esc_url($AUSIRAN_BUTTON_LINK); ?>">
                            <span class="btn__text"><?php print esc_html($AUSIRAN_BUTTON_TEXT); ?></span>
                            <i class="fas fa-heart btn__icon"></i>
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
                                <filter >
                                  <feGaussianBlur in="SourceGraphic" result="blur" stdDeviation="10">
                                  </feGaussianBlur>
                                  <feColorMatrix in="blur"   values="1 0 0 0 0 0 1 0 0 0 0 0 1 0 0 0 0 0 21 -7" result="goo">
                                  </feColorMatrix>
                                  <feBlend in2="goo" in="SourceGraphic" result="mix"></feBlend>
                                </filter>
                              </defs>
                            </svg>
                          </a>
                        </div>
                      <?php endif; ?>

                    </div>

                  </div>
                  <?php endif; ?>
                  <button class="offcanvas-toggle-btn ml-30 d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas" aria-controls="offcanvas"><i class="far fa-bars"></i></button>
                <!-- Header Right Buttons Search Cart -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- end header -->
   <!-- side info start -->
   <?php ausiran_side_info(); ?>
   <!-- side info end -->
   <div class="body-overlay"></div>
   <!-- sidebar area end -->

<?php
}
add_action( 'ausiran_header_style', 'ausiran_header', 10 );

// ausiran_side_info
function ausiran_side_info() {
	$ausiran_side_contact_hide =get_theme_mod( 'ausiran_side_contact_hide', false);
	$ausiran_social_hide       = get_theme_mod( 'side_social_switch', false );
	$ausiran_side_address      = get_theme_mod( 'ausiran_side_address', __( '28/4 Palmal, London', 'ausiran' ));
	$ausiran_side_address_link = get_theme_mod( 'ausiran_side_address_link', __( '#', 'ausiran' ) );
	$ausiran_side_phone      =get_theme_mod( 'ausiran_side_phone', __( '333 888 200 - 55', 'ausiran' ) );
	$ausiran_side_phone_link = get_theme_mod( 'ausiran_side_phone_link', __( '333-888-200-55', 'ausiran' ));
	$ausiran_side_mail      = get_theme_mod( 'ausiran_side_mail', __( 'support@mail.com', 'ausiran' ) );
	$ausiran_side_mail_link = get_theme_mod( 'ausiran_side_mail_link', __( 'support@mail.com', 'ausiran' ) );
	$ausiran_side_logo      = get_theme_mod( 'ausiran_side_logo', AUSIRAN_THEME_IMAGES_DIR . '/logos/logo_1.svg');
	?>


    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvas">
    <div class="offcanvas-body">
      <div class="offcanvas__wrapper min-vh-100">
          <div class="offcanvas__content">
             <div class="offcanvas__top mb-40 d-flex justify-content-between align-items-center">
                <div class="offcanvas__logo logo">
                   <a href="<?php print esc_url( home_url( '/' ) );?>">
                   <img src="<?php print esc_url($ausiran_side_logo); ?>" alt="<?php print esc_attr__('Logo', 'ausiran'); ?>">
                   </a>
                </div>
                <div class="offcanvas__close">
                   <button class="offcanvas__close-btn" data-bs-dismiss="offcanvas" aria-label="Close">
                      <i class="fal fa-times"></i>
                   </button>
                </div>
             </div>
             <div class="offcanvas__search mb-25">
                <form action="#">
                   <input type="text" placeholder="<?php print esc_html__('What are you searching for?', 'ausiran') ?>">
                   <button type="submit" ><i class="far fa-search"></i></button>
                </form>
             </div>
             <div class="mobile-menu fix"></div>
             <?php if (!empty($ausiran_side_contact_hide)): ?>
             <div class="offcanvas__text d-none d-lg-block">
                <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and will give you a complete account of the system and expound the actual teachings of the great explore</p>
             </div>
             <div class="offcanvas__map d-none d-lg-block mb-15">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d29176.030811137334!2d90.3883827!3d23.924917699999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1605272373598!5m2!1sen!2sbd"></iframe>
             </div>
             <div class="offcanvas__contact mt-30 mb-20">
                <h4>Contact Info</h4>
                <ul>
                  <?php if (!empty($ausiran_side_address)): ?>
                   <li class="d-flex align-items-center">
                      <div class="offcanvas__contact-icon mr-15">
                         <i class="fal fa-map-marker-alt"></i>
                      </div>
                      <div class="offcanvas__contact-text">
                         <a target="_blank" href="<?php print esc_url($ausiran_side_address_link); ?>"><?php print esc_html($ausiran_side_address); ?></a>
                      </div>
                   </li>
                   <?php endif; ?>

                  <?php if (!empty($ausiran_side_phone)): ?>
                   <li class="d-flex align-items-center">
                      <div class="offcanvas__contact-icon mr-15">
                         <i class="far fa-phone"></i>
                      </div>
                      <div class="offcanvas__contact-text">
                         <a href="tel:<?php print esc_url($ausiran_side_phone_link); ?>"><?php print esc_html($ausiran_side_phone); ?></a>
                      </div>
                   </li>
                   <?php endif; ?>

                   <?php if (!empty($ausiran_side_mail)): ?>
                   <li class="d-flex align-items-center">
                      <div class="offcanvas__contact-icon mr-15">
                         <i class="fal fa-envelope"></i>
                      </div>
                      <div class="offcanvas__contact-text">
                         <a href="mailto:<?php print esc_url($ausiran_side_mail_link); ?>"><?php print esc_html($ausiran_side_mail); ?></a>
                      </div>
                   </li>
                   <?php endif; ?>
                </ul>
             </div>
             <?php endif; ?>
             <?php if (!empty($ausiran_social_hide)): ?>
              <div class="offcanvas__social position-absolute bottom-0">
		          <?php ausiran_side_social_profiles(); ?>
              </div>
             <?php endif; ?>
          </div>
       </div>      
    </div>
  </div>

    <div class="offcanvas-overlay"></div>
    <!-- mobile menu info -->


<?php }

/**
 * [ausiran_language_list description]
 * @return [type] [description]
 */
function _ausiran_language( $mar ) {
    return $mar;
}
function ausiran_language_list() {

    $mar = '';
    $languages = apply_filters( 'wpml_active_languages', NULL, 'orderby=id&order=desc' );
    if ( !empty( $languages ) ) {
        $mar = '<ul>';
        foreach ( $languages as $lan ) {
            $active = $lan['active'] == 1 ? 'active' : '';
            $mar .= '<li class="' . $active . '"><a href="' . $lan['url'] . '">' . $lan['translated_name'] . '</a></li>';
        }
        $mar .= '</ul>';
    } else {
        //remove this code when send themeforest reviewer team
        $mar .= '<ul>';
        $mar .= '<li><a href="#">' . esc_html__( 'USA', 'ausiran' ) . '</a></li>';
        $mar .= '<li><a href="#">' . esc_html__( 'UK', 'ausiran' ) . '</a></li>';
        $mar .= '<li><a href="#">' . esc_html__( 'CA', 'ausiran' ) . '</a></li>';
        $mar .= '<li><a href="#">' . esc_html__( 'AU', 'ausiran' ) . '</a></li>';
        $mar .= ' </ul>';
    }
    print _ausiran_language( $mar );
}
add_action( 'ausiran_language', 'ausiran_language_list' );

// favicon logo
function ausiran_favicon_logo_func() {
        $ausiran_favicon = AUSIRAN_THEME_IMAGES_DIR . '/favicon.png';
        $ausiran_favicon_url = get_theme_mod( 'favicon_url', $ausiran_favicon );
    ?>

    <link rel="shortcut icon" type="image/x-icon" href="<?php print esc_url( $ausiran_favicon_url );?>">

    <?php
}
add_action( 'wp_head', 'ausiran_favicon_logo_func' );

// header logo
function ausiran_header_logo() {
    ?>
    <?php
        $ausiran_logo_on = function_exists( 'get_field' ) ? get_field( 'is_enable_sec_logo' ) : NULL;
        $ausiran_logo = AUSIRAN_THEME_IMAGES_DIR . '/logos/logo_1.svg';
        $ausiran_logo_black = AUSIRAN_THEME_IMAGES_DIR. '/logos/logo_1.svg';

        $ausiran_site_logo = get_theme_mod( 'logo', $ausiran_logo );
        $ausiran_secondary_logo = get_theme_mod( 'seconday_logo', $ausiran_logo_black );
    ?>

        <?php
            if ( has_custom_logo() ) {
                the_custom_logo();
            } else {
                if ( !empty( $ausiran_logo_on ) ) {
                    ?>
                        <a class="standard-logo" href="<?php print esc_url( home_url( '/' ) );?>">
                            <img src="<?php print esc_url( $ausiran_secondary_logo );?>" alt="<?php print esc_attr__( 'logo', 'ausiran' );?>" />
                        </a>
                    <?php
                } else {
                    ?>
                        <a class="standard-logo" href="<?php print esc_url( home_url( '/' ) );?>">
                            <img src="<?php print esc_url( $ausiran_site_logo );?>" alt="<?php print esc_attr__( 'logo', 'ausiran' );?>" />
                        </a>
                    <?php
                }
            }
        ?>
    <?php
}

/**
 * [ausiran_header_social_profiles description]
 * @return [type] [description]
 */
function ausiran_side_social_profiles() {
	$ausiran_fb_url             = get_theme_mod( 'ausiran_fb_url', __( '#', 'ausiran' ) );
	$ausiran_twitter_url      = get_theme_mod( 'ausiran_twitter_url', __( '#', 'ausiran' ) );
	$ausiran_instagram_url    = get_theme_mod( 'ausiran_instagram_url', __( '#', 'ausiran' ) );
	$ausiran_google_url = get_theme_mod( 'ausiran_google_url', __( '#', 'ausiran' ) );
	$ausiran_linkedin_url = get_theme_mod( 'ausiran_linkedin_url', __( '#', 'ausiran' ) );
	$ausiran_telegram_url = get_theme_mod( 'ausiran_telegram_url', __( '#', 'ausiran' ) );
	$ausiran_youtube_url  = get_theme_mod( 'ausiran_youtube_url', __( '#', 'ausiran' ) );
	?>

        <?php if ( !empty( $ausiran_fb_url ) ): ?>
          <a href="<?php print esc_url( $ausiran_fb_url );?>"><i class="fab fa-facebook-f"></i></a>
        <?php endif;?>

        <?php if ( !empty( $ausiran_twitter_url ) ): ?>
            <a href="<?php print esc_url( $ausiran_twitter_url );?>"><i class="fab fa-twitter"></i></a>
        <?php endif;?>

        <?php if ( !empty( $ausiran_instagram_url ) ): ?>
            <a href="<?php print esc_url( $ausiran_instagram_url );?>"><i class="fab fa-instagram"></i></a>
        <?php endif;?>

        <?php if ( !empty( $ausiran_google_url ) ): ?>
            <a href="<?php print esc_url( $ausiran_google_url );?>"><i class="fab fa-google-plus-g"></i></a>
        <?php endif;?>

        <?php if ( !empty( $ausiran_telegram_url ) ): ?>
            <a href="<?php print esc_url( $ausiran_telegram_url );?>"><i class="fab fa-telegram"></i></a>
        <?php endif;?>

        <?php if ( !empty( $ausiran_linkedin_url ) ): ?>
            <a href="<?php print esc_url( $ausiran_linkedin_url );?>"><i class="fab fa-linkedin-in"></i></a>
        <?php endif;?>

        <?php if ( !empty( $ausiran_youtube_url ) ): ?>
            <a href="<?php print esc_url( $ausiran_youtube_url );?>"><i class="fab fa-youtube"></i></a>
        <?php endif;?>

<?php
}

function ausiran_footer_social_profiles() {
	$ausiran_fb_url             = get_theme_mod( 'ausiran_fb_url', __( '#', 'ausiran' ) );
	$ausiran_twitter_url      = get_theme_mod( 'ausiran_twitter_url', __( '#', 'ausiran' ) );
	$ausiran_instagram_url    = get_theme_mod( 'ausiran_instagram_url', __( '#', 'ausiran' ) );
	$ausiran_google_url = get_theme_mod( 'ausiran_google_url', __( '#', 'ausiran' ) );
	$ausiran_linkedin_url = get_theme_mod( 'ausiran_linkedin_url', __( '#', 'ausiran' ) );
	$ausiran_telegram_url = get_theme_mod( 'ausiran_telegram_url', __( '#', 'ausiran' ) );
	$ausiran_youtube_url  = get_theme_mod( 'ausiran_youtube_url', __( '#', 'ausiran' ) );
    ?>

        <ul>
        <?php if ( !empty( $ausiran_fb_url ) ): ?>
            <li>
                <a href="<?php print esc_url( $ausiran_fb_url );?>">
                    <i class="fab fa-facebook-f"></i>
                </a>
            </li>
        <?php endif;?>

        <?php if ( !empty( $ausiran_twitter_url ) ): ?>
            <li>
                <a href="<?php print esc_url( $ausiran_twitter_url );?>">
                    <i class="fab fa-twitter"></i>
                </a>
            </li>
        <?php endif;?>

        <?php if ( !empty( $ausiran_instagram_url ) ): ?>
            <li>
                <a href="<?php print esc_url( $ausiran_instagram_url );?>">
                    <i class="fab fa-instagram"></i>
                </a>
            </li>
        <?php endif;?>

        <?php if ( !empty( $ausiran_telegram_url ) ): ?>
            <li>
                <a href="<?php print esc_url( $ausiran_telegram_url );?>">
                    <i class="fab fa-telegram"></i>
                </a>
            </li>
        <?php endif;?>
	        <?php if ( !empty( $ausiran_google_url ) ): ?>
                <li>
                    <a href="<?php print esc_url( $ausiran_google_url );?>">
                        <i class="fab fa-google-plus-g"></i>
                    </a>
                </li>
	        <?php endif;?>

        <?php if ( !empty( $ausiran_linkedin_url ) ): ?>
            <li>
                <a href="<?php print esc_url( $ausiran_linkedin_url );?>">
                    <i class="fab fa-linkedin"></i>
                </a>
            </li>
        <?php endif;?>

        <?php if ( !empty( $ausiran_youtube_url ) ): ?>
            <li>
                <a href="<?php print esc_url( $ausiran_youtube_url );?>">
                    <i class="fab fa-youtube"></i>
                </a>
            </li>
        <?php endif;?>
        </ul>
<?php
}

/**
 * [ausiran_header_menu description]
 * @return [type] [description]
 */
function ausiran_header_menu() {
    ?>
    <?php
        wp_nav_menu( [
            'theme_location' => 'main-menu',
            'menu_class'     => '',
            'container'      => '',
            'fallback_cb'    => 'ausiran_Navwalker_Class::fallback',
            'walker'         => new ausiran_Navwalker_Class,
        ] );
    ?>
    <?php
}

/**
 *
 * ausiran footer
 */
function ausiran_footer() {

    $footer_bg_img = get_theme_mod( 'ausiran_footer_bg' );
    $ausiran_footer_logo = get_theme_mod( 'ausiran_footer_logo' );
    $ausiran_footer_top_space = function_exists('get_field') ? get_field('ausiran_footer_top_space') : '0';
    $ausiran_copyright_center = $ausiran_footer_logo ? 'col-lg-4 offset-lg-4 col-md-6 text-right' : 'col-lg-12 text-center';
    $ausiran_footer_bg_url_from_page = function_exists( 'get_field' ) ? get_field( 'ausiran_footer_bg' ) : '';
    $ausiran_footer_bg_color_from_page = function_exists( 'get_field' ) ? get_field( 'ausiran_footer_bg_color' ) : '';
    $footer_bg_color = get_theme_mod( 'ausiran_footer_bg_color' );

    $ausiran_footer_bg_color_from_page_bottom = function_exists( 'get_field' ) ? get_field( 'ausiran_footer_bottom_bg_color' ) : '';

    $footer_bg_color_bottom = get_theme_mod( 'ausiran_footer_bg_color_bottom' );

    $footer_shape = get_theme_mod( 'footer_shape', AUSIRAN_THEME_IMAGES_DIR . '/shapes/footershape2.png' );
    $footer_logo = get_theme_mod( 'footer_logo', AUSIRAN_THEME_IMAGES_DIR . '/logos/logo_2.svg' );

    // bg image
    $bg_img = !empty( $ausiran_footer_bg_url_from_page['url'] ) ? $ausiran_footer_bg_url_from_page['url'] : $footer_bg_img;

    // bg color
    $bg_color = !empty( $ausiran_footer_bg_color_from_page ) ? $ausiran_footer_bg_color_from_page : $footer_bg_color;

    // footer Shape
    $footer_shape = get_theme_mod( 'footer_shape', false);
    $footer_top_swtich = get_theme_mod( 'footer_top_swtich', false);
    $footer_social_switch = get_theme_mod( 'footer_social_switch', false);

    // bg color
    $bg_color_bottom = !empty( $ausiran_footer_bg_color_from_page_bottom ) ? $ausiran_footer_bg_color_from_page_bottom : $footer_bg_color_bottom;


    // footer_columns
    $footer_columns = 0;
    $footer_widgets = get_theme_mod( 'footer_widget_number', 4 );

    for ( $num = 1; $num <= $footer_widgets; $num++ ) {
        if ( is_active_sidebar( 'footer-' . $num ) ) {
            $footer_columns++;
        }
    }

    switch ( $footer_columns ) {
    case '1':
        $footer_class[1] = 'col-lg-12';
        break;
    case '2':
        $footer_class[1] = 'col-lg-6 col-md-6';
        $footer_class[2] = 'col-lg-6 col-md-6';
        break;
    case '3':
        $footer_class[1] = 'col-xl-4 col-lg-6 col-md-5';
        $footer_class[2] = 'col-xl-4 col-lg-6 col-md-7';
        $footer_class[3] = 'col-xl-4 col-lg-6';
        break;
    case '4':
        $footer_class[1] = 'col-lg-3 col-md-6 col-sm-6';
        $footer_class[2] = 'col-lg-3 col-md-6 col-sm-6';
        $footer_class[3] = 'col-lg-3 col-md-6 col-sm-6';
        $footer_class[4] = 'col-lg-3 col-md-6 col-sm-6';
        break;
    default:
        $footer_class = 'col-xl-3 col-lg-3 col-md-6';
        break;
    }

    ?>


    <footer class="footer footer--bg footer--styleOne" data-bg-color="<?php print esc_attr( $bg_color );?>" data-background="<?php print esc_url( $bg_img );?>">

      <?php if(!empty($footer_shape)): ?>
      <img src="<?php print AUSIRAN_THEME_IMAGES_DIR . '/shapes/tp-footer-shape.png' ; ?>" alt="<?php print esc_html__('ausiran Shape', 'ausiran'); ?>" class="footer__shape">
      <?php endif; ?>

      <?php if(!empty($footer_top_swtich)): ?>
        <div class="footer-top">
          <div class="container">
            <div class="footer-top-inner">
              <div class="row">
                <div class="col-sm-6">
                  <div class="footer__logo">
                    <a href="<?php print esc_url( home_url( '/' ) );?>">
                      <img src="<?php print esc_url($footer_logo); ?>" alt="<?php print esc_attr__('Logo', 'ausiran'); ?>" class="footer__logo__image">
                    </a>
                  </div>
                </div>
                <?php if($footer_social_switch) :?>
                <div class="col-sm-6">
                  <div class="footer__social itSocial">
                    <?php print ausiran_footer_social_profiles(); ?>
                  </div>
                </div>
                <?php endif; ?>
              </div>
            </div>
          </div>
        </div>

        <?php endif; ?>

        <?php if ( is_active_sidebar('footer-1') OR is_active_sidebar('footer-2') OR is_active_sidebar('footer-3') OR is_active_sidebar('footer-4') ): ?>
        <div class="footer-middle pt-65 pb-35">
          <div class="container">
            <div class="row">
              <?php

                if ( $footer_columns < 5 ) {
                print '<div class="col-lg-3 col-md-4">';
                dynamic_sidebar( 'footer-1' );
                print '</div>';

                print '<div class="col-lg-3 col-md-4">';
                dynamic_sidebar( 'footer-2' );
                print '</div>';

                print '<div class="col-lg-3 col-md-4">';
                dynamic_sidebar( 'footer-3' );
                print '</div>';

                print '<div class="col-lg-3">';
                dynamic_sidebar( 'footer-4' );
                print '</div>';
                } else {
                    for ( $num = 1; $num <= $footer_columns; $num++ ) {
                        if ( !is_active_sidebar( 'footer-' . $num ) ) {
                            continue;
                        }
                        print '<div class="' . esc_attr( $footer_class[$num] ) . '">';
                        dynamic_sidebar( 'footer-' . $num );
                        print '</div>';
                    }
                }
              ?>
            </div>
          </div>
        </div>
        <div class="footer__line-wrapper">
          <div class="container">
            <div class="row">
                <div class="col-12">
                  <div class="footer__line"></div>
                </div>
            </div>
          </div>
        </div>
        <?php endif; ?>

        <div class="footer-copyright">
          <div class="container">
            <div class="row">
              <div class="col-12">
                <div class="footer__copyright pt-20 pb-20">
                  <p class="footer__copyright__text mb-0"><?php print ausiran_copyright_text(); ?></p>
                </div>
              </div>
            </div>
          </div>
        </div>

    </footer>


<?php
}
add_action( 'ausiran_footer_style', 'ausiran_footer', 10 );


// ausiran_copyright_text
function ausiran_copyright_text() {

    print get_theme_mod( 'footer__copyright_text', esc_html( 'Copyright ©2023 AUSIRAN. All Rights Reserved Copyright', 'ausiran' ) );
}

/**
 * [ausiran_breadcrumb_func description]
 * @return [type] [description]
 */
function ausiran_breadcrumb_func() {
    global $post;
        $breadcrumb_class = '';
    $breadcrumb_show = 1;

    if ( is_front_page() && is_home() ) {
        $title = get_theme_mod('breadcrumb_blog_title', __('Blog','ausiran'));
        $breadcrumb_class = 'home_front_page';
    }
    elseif ( is_front_page() ) {
        $title = get_theme_mod('breadcrumb_blog_title', __('Blog','ausiran'));
        $breadcrumb_show = 0;

    }
    elseif ( is_home() ) {
        if ( get_option( 'page_for_posts' ) ) {
            $title = get_the_title( get_option( 'page_for_posts') );
        }
    }
    elseif ( is_single() && 'post' == get_post_type() ) { 
         $title = get_the_title();
    }
    elseif ( is_single() && 'product' == get_post_type() ) { 
        $title = get_theme_mod('breadcrumb_product_details', __('Shop','ausiran'));
    }   
    elseif ( is_single() && 'bdevs-services' == get_post_type() ) { 
        $title = get_the_title();    
    }       
    elseif ( is_single() && 'bdevs-cases' == get_post_type() ) { 
        $title = get_the_title();
    }
    elseif ( is_search() ) {
        $title = esc_html__( 'Search Results for : ', 'ausiran' ) . get_search_query();
    }
    elseif ( is_404() ) {
        $title = esc_html__( 'Page not Found', 'ausiran' );
    }
    elseif ( function_exists('is_woocommerce') && is_woocommerce()) {
        $title = get_theme_mod('breadcrumb_shop', __('Shop','ausiran'));
    }
    elseif ( is_archive() ) {
        $title = get_the_archive_title();
    }
    else {
        $title = get_the_title();
    }



    $_id = get_the_ID();

    if ( is_single() && 'product' == get_post_type() ) {
        $_id = $post->ID;
    }
    elseif ( function_exists("is_shop") AND is_shop()  ) {
        $_id = wc_get_page_id('shop');
    }
    elseif ( is_home() && get_option( 'page_for_posts' ) ) {
        $_id = get_option( 'page_for_posts' );
    }

    $is_breadcrumb = function_exists( 'get_field' ) ? get_field( 'is_it_invisible_breadcrumb', $_id ) : '';

    $ausiran_breadcrumb_bg_color = get_theme_mod( 'ausiran_breadcrumb_bg_color','#f3ebde' );

    if ( empty( $is_breadcrumb ) && $breadcrumb_show == 1 ) {

        $bg_img_from_page = function_exists('get_field') ? get_field('breadcrumb_background_image',$_id) : '';
        $hide_bg_img = function_exists('get_field') ? get_field('hide_breadcrumb_background_image',$_id) : '';

        // get_theme_mod
        $bg_img = get_theme_mod( 'breadcrumb_bg_img' );
        $ausiran_breadcrumb_switch = get_theme_mod( 'ausiran_breadcrumb_switch', true );
        $ausiran_breadcrumb_shape_switch = get_theme_mod( 'ausiran_breadcrumb_shape_switch', false );

        $ausiran_breadcrumb_top_shape = get_theme_mod( 'ausiran_breadcrumb_top_shape', AUSIRAN_THEME_IMAGES_DIR . '/shapes/breadcrumb-shape-1.png' );

        $ausiran_breadcrumb_bottom_shape = get_theme_mod( 'ausiran_breadcrumb_bottom_shape', AUSIRAN_THEME_IMAGES_DIR . '/shapes/breadcrumb-shape-2.png' );

      $ausiran_breadcrumb_pad_top = get_theme_mod( 'ausiran_breadcrumb_pad_top','165px' );
      $ausiran_breadcrumb_pad_bottom = get_theme_mod( 'ausiran_breadcrumb_pad_bottom','138px' );


        if ( $hide_bg_img ) {
            $bg_img = '';
        } else {
            $bg_img = !empty( $bg_img_from_page ) ? $bg_img_from_page['url'] : $bg_img;
        }?>


        <?php if(!empty($ausiran_breadcrumb_switch)): ?>

        <section class="pageBreadcumb pageBreadcumb--style1 position-relative  <?php print esc_attr( $breadcrumb_class );?>" data-bg-image="<?php print esc_attr($bg_img);?>">

        <?php if (!empty($ausiran_breadcrumb_shape_switch)): ?>
        <div class="sectionShape sectionShape--top d-none d-xl-flex">
          <img src="<?php print esc_url($ausiran_breadcrumb_top_shape) ?>" alt="<?php print esc_attr__('shape', 'ausiran'); ?>">
        </div>
        <div class="sectionShape sectionShape--bottom d-none d-xl-flex">
          <img src="<?php print esc_url($ausiran_breadcrumb_bottom_shape) ?>" alt="<?php print esc_attr__('shape', 'ausiran'); ?>">
        </div>
        <?php endif; ?>
        
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-9">
              <div class="pageTitle text-center">
                <h2 class="pageTitle__heading text-white text-uppercase mb-25"><?php echo wp_kses_post( $title ); ?></h2>
                <div class="breadcrumb-menu">
                      <?php 
                         if(function_exists('bcn_display')) {
                            bcn_display();
                         } ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
        <?php endif; ?>

        <?php
      }
}
add_action( 'ausiran_before_main_content', 'ausiran_breadcrumb_func' );


// ausiran_search_form
function ausiran_search_form() {
    ?>
     <div class="search-wrapper p-relative transition-3 d-none">
         <div class="search-form transition-3">
             <form method="get" action="<?php print esc_url( home_url( '/' ) );?>" >
                 <input type="search" name="s" value="<?php print esc_attr( get_search_query() )?>" placeholder="<?php print esc_attr__( 'Enter Your Keyword', 'ausiran' );?>" >
                 <button type="submit" class="search-btn"><i class="far fa-search"></i></button>
             </form>
             <a href="javascript:void(0);" class="search-close"><i class="far fa-times"></i></a>
         </div>
     </div>
   <?php
}

add_action( 'ausiran_before_main_content', 'ausiran_search_form' );

// ausiran_search_form_2
function ausiran_search_form_2() {
    ?>

    <div id="template-search" class="template-search">
      <button type="button" class="close">
        <i class="far fa-times"></i>
      </button>
      <form class="search-form" method="get" action="<?php print esc_url( home_url( '/' ) );?>">
        <input type="search" name="s" value="<?php print esc_attr( get_search_query() )?>" placeholder="<?php print esc_attr__( 'Type your search', 'ausiran' );?>" >
        <button type="submit" class="search-btn">
          <i class="fas fa-search"></i>
        </button>
      </form>
    </div>
   <?php
}

add_action( 'ausiran_before_main_content', 'ausiran_search_form' );


/**
 *
 * pagination
 */
if ( !function_exists( 'ausiran_pagination' ) ) {

    function _ausiran_pagi_callback( $pagination ) {
        return $pagination;
    }

    //page navegation
    function ausiran_pagination( $prev, $next, $pages, $args ) {
        global $wp_query, $wp_rewrite;
        $menu = '';
        $wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;

        if ( $pages == '' ) {
            global $wp_query;
            $pages = $wp_query->max_num_pages;

            if ( !$pages ) {
                $pages = 1;
            }

        }

        $pagination = [
            'base'      => add_query_arg( 'paged', '%#%' ),
            'format'    => '',
            'total'     => $pages,
            'current'   => $current,
            'prev_text' => $prev,
            'next_text' => $next,
            'type'      => 'array',
        ];

        //rewrite permalinks
        if ( $wp_rewrite->using_permalinks() ) {
            $pagination['base'] = user_trailingslashit( trailingslashit( remove_query_arg( 's', get_pagenum_link( 1 ) ) ) . 'page/%#%/', 'paged' );
        }

        if ( !empty( $wp_query->query_vars['s'] ) ) {
            $pagination['add_args'] = ['s' => get_query_var( 's' )];
        }

        $pagi = '';
        if ( paginate_links( $pagination ) != '' ) {
            $paginations = paginate_links( $pagination );
            $pagi .= '<ul>';
            foreach ( $paginations as $key => $pg ) {
                $pagi .= '<li>' . $pg . '</li>';
            }
            $pagi .= '</ul>';
        }

        print _ausiran_pagi_callback( $pagi );
    }
}


// theme color
function ausiran_custom_color() {
	$ausiran_color_option_prim = get_theme_mod( 'ausiran_color_option_prim', '#808080' );
	$ausiran_color_option_sec = get_theme_mod( 'ausiran_color_option_sec', '#444444' );
	$ausiran_color_option_body = get_theme_mod( 'ausiran_color_option_body', '#CCCCCC' );
	$ausiran_color_option_black = get_theme_mod( 'ausiran_color_option_black', '#000000' );
	$ausiran_color_option_white = get_theme_mod( 'ausiran_color_option_white', '#FFFFFF' );


	wp_enqueue_style( 'ausiran-custom', AUSIRAN_THEME_CSS_DIR . 'ausiran-custom.css', [] );

  if ( !empty($ausiran_color_option_prim) || !empty($ausiran_color_option_sec) || !empty($ausiran_color_option_body) || !empty($ausiran_color_option_black) || !empty($ausiran_color_option_white)) {
      $custom_css = '';

      $custom_css .= "html:root{ 
        --tp-primary: " . $ausiran_color_option_prim . "; 
        --tp-secondary: " . $ausiran_color_option_sec . "; 
        --tp-body: " . $ausiran_color_option_body . ";
        --tp-black: " . $ausiran_color_option_black . ";
        --tp-white: " . $ausiran_color_option_white . "; 
      }";
        
      $custom_css .= "body .footer__heading{ color: " . $ausiran_color_option_white . "!important}";


      wp_add_inline_style( 'ausiran-custom', $custom_css );
  }
}
add_action( 'wp_enqueue_scripts', 'ausiran_custom_color' );

