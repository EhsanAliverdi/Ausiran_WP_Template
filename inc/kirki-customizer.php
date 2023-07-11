<?php
/**
 * ausiran customizer
 *
 * @package ausiran
 */

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Added Panels & Sections
 */
function ausiran_customizer_panels_sections( $wp_customize ) {

    //Add panel
    $wp_customize->add_panel( 'ausiran_customizer', [
        'priority' => 10,
        'title'    => esc_html__( 'AUSIRAN Customizer', 'ausiran' ),
    ] );


    $wp_customize->add_section( 'section_header_settings', [
        'title'       => esc_html__( 'Header Setting', 'ausiran' ),
        'description' => '',
        'priority'    => 12,
        'capability'  => 'edit_theme_options',
        'panel'       => 'ausiran_customizer',
    ] );

    $wp_customize->add_section( 'blog_setting', [
        'title'       => esc_html__( 'Blog Setting', 'ausiran' ),
        'description' => '',
        'priority'    => 13,
        'capability'  => 'edit_theme_options',
        'panel'       => 'ausiran_customizer',
    ] );

    $wp_customize->add_section( 'side_setting', [
        'title'       => esc_html__( 'Side setting', 'ausiran' ),
        'description' => '',
        'priority'    => 14,
        'capability'  => 'edit_theme_options',
        'panel'       => 'ausiran_customizer',
    ] );

    $wp_customize->add_section( 'breadcrumb_setting', [
        'title'       => esc_html__( 'Breadcrumb Setting', 'ausiran' ),
        'description' => '',
        'priority'    => 15,
        'capability'  => 'edit_theme_options',
        'panel'       => 'ausiran_customizer',
    ] );

    $wp_customize->add_section( 'blog_setting', [
        'title'       => esc_html__( 'Blog Setting', 'ausiran' ),
        'description' => '',
        'priority'    => 16,
        'capability'  => 'edit_theme_options',
        'panel'       => 'ausiran_customizer',
    ] );

    $wp_customize->add_section( 'footer_setting', [
        'title'       => esc_html__( 'Footer Settings', 'ausiran' ),
        'description' => '',
        'priority'    => 17,
        'capability'  => 'edit_theme_options',
        'panel'       => 'ausiran_customizer',
    ] );
	$wp_customize->add_section( 'social_setting', [
		'title'       => esc_html__( 'Social Settings', 'ausiran' ),
		'description' => '',
		'priority'    => 18,
		'capability'  => 'edit_theme_options',
		'panel'       => 'ausiran_customizer',
	] );

    $wp_customize->add_section( 'color_setting', [
        'title'       => esc_html__( 'Color Setting', 'ausiran' ),
        'description' => '',
        'priority'    => 19,
        'capability'  => 'edit_theme_options',
        'panel'       => 'ausiran_customizer',
    ] );

    $wp_customize->add_section( '404_page', [
        'title'       => esc_html__( '404 Page', 'ausiran' ),
        'description' => '',
        'priority'    => 120,
        'capability'  => 'edit_theme_options',
        'panel'       => 'ausiran_customizer',
    ] );

    $wp_customize->add_section( 'slug_setting', [
        'title'       => esc_html__( 'Slug Settings', 'ausiran' ),
        'description' => '',
        'priority'    => 21,
        'capability'  => 'edit_theme_options',
        'panel'       => 'ausiran_customizer',
    ] );

    $wp_customize->add_section( 'typo_setting', [
        'title'       => esc_html__( 'Typography Setting', 'ausiran' ),
        'description' => '',
        'priority'    => 22,
        'capability'  => 'edit_theme_options',
        'panel'       => 'ausiran_customizer',
    ] );

}

add_action( 'customize_register', 'ausiran_customizer_panels_sections' );



/*
Header Settings
 */
function _header_fields( $fields ) {

    $fields[] = [
        'type'        => 'image',
        'settings'    => 'logo',
        'label'       => esc_html__( 'Header Logo', 'ausiran' ),
        'description' => esc_html__( 'Upload Your Logo.', 'ausiran' ),
        'section'     => 'section_header_settings',
        'default'     => AUSIRAN_THEME_IMAGES_DIR . '/logos/logo_1.svg',
    ];

    // ausiran_header_bg
    $fields[] = [
        'type'        => 'color',
        'settings'    => 'ausiran_header_bg',
        'label'       => __( 'Header BG Color', 'ausiran' ),
        'description' => esc_html__( 'This is a Header bg color control.', 'ausiran' ),
        'section'     => 'section_header_settings',
        'default'     => '#075f33',
        'priority'    => 10,
    ];

    $fields[] = [
        'type'        => 'image',
        'settings'    => 'seconday_logo',
        'label'       => esc_html__( 'Header Secondary Logo', 'ausiran' ),
        'description' => esc_html__( 'Header Logo Black', 'ausiran' ),
        'section'     => 'section_header_settings',
        'default'     => AUSIRAN_THEME_IMAGES_DIR. '/logos/logo_2.svg',
    ];

	$fields[] = [
		'type'     => 'switch',
		'settings' => 'ausiran_preloader',
		'label'    => esc_html__( 'Preloader On/Off', 'ausiran' ),
		'section'  => 'section_header_settings',
		'default'  => '0',
		'priority' => 10,
		'choices'  => [
			'on'  => esc_html__( 'Enable', 'ausiran' ),
			'off' => esc_html__( 'Disable', 'ausiran' ),
		],
	];

	$fields[] = [
		'type'     => 'text',
		'settings' => 'ausiran_preloader_text',
		'label'    => esc_html__( 'Preloader Text', 'ausiran' ),
		'section'  => 'section_header_settings',
		'default'  => esc_html__( 'WOMAN LIFE FREEDOM', 'ausiran' ),
		'priority' => 10,
		'active_callback' => [
			[
				'setting'  => 'ausiran_preloader',
				'operator' => '==',
				'value'    => true,
			]
		],
	];
	$fields[] = [
		'type'     => 'switch',
		'settings' => 'ausiran_cursor',
		'label'    => esc_html__( 'Cursor Style On/Off', 'ausiran' ),
		'section'  => 'section_header_settings',
		'default'  => '1',
		'priority' => 10,
		'choices'  => [
			'on'  => esc_html__( 'Enable', 'ausiran' ),
			'off' => esc_html__( 'Disable', 'ausiran' ),
		],
	];

	$fields[] = [
		'type'        => 'image',
		'settings'    => 'ausiran_preloader_logo',
		'label'       => esc_html__( 'Preloader Logo', 'ausiran' ),
		'description' => esc_html__( 'Upload Your Logo.', 'ausiran' ),
		'section'     => 'section_header_settings',
		'default'     => AUSIRAN_THEME_IMAGES_DIR.'/logos/logo_1.svg',
	];

	$fields[] = [
		'type'     => 'switch',
		'settings' => 'ausiran_backtotop',
		'label'    => esc_html__( 'Back To Top On/Off', 'ausiran' ),
		'section'  => 'section_header_settings',
		'default'  => '0',
		'priority' => 10,
		'choices'  => [
			'on'  => esc_html__( 'Enable', 'ausiran' ),
			'off' => esc_html__( 'Disable', 'ausiran' ),
		],
	];

	$fields[] = [
		'type'     => 'switch',
		'settings' => 'ausiran_header_right',
		'label'    => esc_html__( 'Header Right On/Off', 'ausiran' ),
		'section'  => 'section_header_settings',
		'default'  => '0',
		'priority' => 10,
		'choices'  => [
			'on'  => esc_html__( 'Enable', 'ausiran' ),
			'off' => esc_html__( 'Disable', 'ausiran' ),
		],
	];




	// ausiran_button
	$fields[] = [
		'type'     => 'text',
		'settings' => 'ausiran_button_text',
		'label'    => esc_html__( 'Button Text', 'ausiran' ),
		'section'  => 'section_header_settings',
		'default'  => esc_html__( 'Donate Now', 'ausiran' ),
		'priority' => 10,
	];
	// ausiran_button_link
	$fields[] = [
		'type'     => 'text',
		'settings' => 'ausiran_button_link',
		'label'    => esc_html__( 'Button Link', 'ausiran' ),
		'section'  => 'section_header_settings',
		'default'  => esc_html__( '#', 'ausiran' ),
		'priority' => 10,
	];
    return $fields;
}
add_filter( 'kirki/fields', '_header_fields' );

/*
Header Side Info
 */
function _side_fields( $fields ) {
    // side info settings
    $fields[] = [
        'type'     => 'switch',
        'settings' => 'ausiran_hamburger_hide',
        'label'    => esc_html__( 'Show Hamburger On/Off', 'ausiran' ),
        'section'  => 'side_setting',
        'default'  => '1',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'ausiran' ),
            'off' => esc_html__( 'Disable', 'ausiran' ),
        ],
    ];

    $fields[] = [
        'type'        => 'image',
        'settings'    => 'ausiran_side_logo',
        'label'       => esc_html__( 'Side Logo', 'ausiran' ),
        'description' => esc_html__( 'Upload Your Logo.', 'ausiran' ),
        'section'     => 'side_setting',
        'default'     => AUSIRAN_THEME_IMAGES_DIR.'/logos/logo_1.svg',
    ];


    $fields[] = [
        'type'     => 'switch',
        'settings' => 'ausiran_side_contact_hide',
        'label'    => esc_html__( 'Side Contact Info On/Off', 'ausiran' ),
        'section'  => 'side_setting',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'ausiran' ),
            'off' => esc_html__( 'Disable', 'ausiran' ),
        ],
    ];


    // address
    $fields[] = [
        'type'     => 'text',
        'settings' => 'ausiran_side_address',
        'label'    => esc_html__( 'Office Address', 'ausiran' ),
        'section'  => 'side_setting',
        'default'  => esc_html__( '28/4 Palmal, London', 'ausiran' ),
        'priority' => 10,
    ];

    // phone
    $fields[] = [
        'type'     => 'text',
        'settings' => 'ausiran_side_phone',
        'label'    => esc_html__( 'Phone Number', 'ausiran' ),
        'section'  => 'side_setting',
        'default'  => esc_html__( '333 888 200 - 55', 'ausiran' ),
        'priority' => 10,
    ];

    // phone link
    $fields[] = [
        'type'     => 'text',
        'settings' => 'ausiran_side_phone_link',
        'label'    => esc_html__( 'Phone Number Link', 'ausiran' ),
        'section'  => 'side_setting',
        'default'  => esc_html__( '333 888 200 - 55', 'ausiran' ),
        'priority' => 10,
    ];

    // mail id
    $fields[] = [
        'type'     => 'text',
        'settings' => 'ausiran_side_mail',
        'label'    => esc_html__( 'Email ID', 'ausiran' ),
        'section'  => 'side_setting',
        'default'  => esc_html__( 'info@ausiran.com', 'ausiran' ),
        'priority' => 10,
    ];
    $fields[] = [
        'type'     => 'text',
        'settings' => 'ausiran_side_mail_link',
        'label'    => esc_html__( 'Email ID Link', 'ausiran' ),
        'section'  => 'side_setting',
        'default'  => esc_html__( 'info@ausiran.com', 'ausiran' ),
        'priority' => 10,
    ];
	$fields[] = [
		'type'     => 'switch',
		'settings' => 'side_social_switch',
		'label'    => esc_html__( 'Social On/Off', 'ausiran' ),
		'section'  => 'side_setting',
		'default'  => '0',
		'priority' => 10,
		'choices'  => [
			'on'  => esc_html__( 'Enable', 'ausiran' ),
			'off' => esc_html__( 'Disable', 'ausiran' ),
		],
	];
    return $fields;
}
add_filter( 'kirki/fields', '_side_fields' );

/*
_header_page_title_fields
 */
function _breadcrumb_fields( $fields ) {
    // Breadcrumb Setting

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'ausiran_breadcrumb_switch',
        'label'    => esc_html__( 'Breadcrumb Show/Hide', 'ausiran' ),
        'section'  => 'breadcrumb_setting',
        'default'  => '1',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'ausiran' ),
            'off' => esc_html__( 'Disable', 'ausiran' ),
        ],
    ];
    $fields[] = [
        'type'     => 'switch',
        'settings' => 'ausiran_breadcrumb_shape_switch',
        'label'    => esc_html__( 'Breadcrumb Shape Show/Hide', 'ausiran' ),
        'section'  => 'breadcrumb_setting',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'ausiran' ),
            'off' => esc_html__( 'Disable', 'ausiran' ),
        ],
    ];

    $fields[] = [
        'type'        => 'image',
        'settings'    => 'breadcrumb_bg_img',
        'label'       => esc_html__( 'Breadcrumb Background Image', 'ausiran' ),
        'description' => esc_html__( 'Breadcrumb Background Image', 'ausiran' ),
        'section'     => 'breadcrumb_setting',
        'default'     => get_template_directory_uri() . '/assets/image/bg/pageBreadcumbBg1.jpg',
    ];


    $fields[] = [
        'type'        => 'color',
        'settings'    => 'ausiran_breadcrumb_bg_color',
        'label'       => __( 'Breadcrumb BG Color', 'ausiran' ),
        'description' => esc_html__( 'This is a Breadcrumb bg color control.', 'ausiran' ),
        'section'     => 'breadcrumb_setting',
        'default'     => '#f3ebde',
        'priority'    => 10,
    ];    

    $fields[] = [
        'type'        => 'color',
        'settings'    => 'ausiran_breadcrumb_title_color',
        'label'       => __( 'Breadcrumb Title Color', 'ausiran' ),
        'description' => esc_html__( 'This is a Breadcrumb title color control.', 'ausiran' ),
        'section'     => 'breadcrumb_setting',
        'default'     => '#09150f',
        'priority'    => 10,
    ];

     $fields[] = [
        'type'     => 'text',
        'settings' => 'ausiran_breadcrumb_pad_top',
        'label'    => esc_html__( 'Breadcrumb Padding Top', 'ausiran' ),
        'section'  => 'breadcrumb_setting',
        'default'  => esc_html__( '165px', 'ausiran' ),
        'priority' => 10,
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'ausiran_breadcrumb_pad_bottom',
        'label'    => esc_html__( 'Breadcrumb Padding Bottom', 'ausiran' ),
        'section'  => 'breadcrumb_setting',
        'default'  => esc_html__( '138px', 'ausiran' ),
        'priority' => 10,
    ];

    return $fields;
}
add_filter( 'kirki/fields', '_breadcrumb_fields' );

/*
Header Social
 */
function _blog_fields( $fields ) {
// Blog Setting
    $fields[] = [
        'type'     => 'switch',
        'settings' => 'ausiran_blog_btn_switch',
        'label'    => esc_html__( 'Blog BTN On/Off', 'ausiran' ),
        'section'  => 'blog_setting',
        'default'  => '1',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'ausiran' ),
            'off' => esc_html__( 'Disable', 'ausiran' ),
        ],
    ];
    // ausiran_blog_author
    $fields[] = [
        'type'     => 'switch',
        'settings' => 'ausiran_blog_author',
        'label'    => esc_html__( 'Blog Author Meta On/Off', 'ausiran' ),
        'section'  => 'blog_setting',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'ausiran' ),
            'off' => esc_html__( 'Disable', 'ausiran' ),
        ],
    ];
    $fields[] = [
        'type'     => 'switch',
        'settings' => 'ausiran_blog_date',
        'label'    => esc_html__( 'Blog Date Meta On/Off', 'ausiran' ),
        'section'  => 'blog_setting',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'ausiran' ),
            'off' => esc_html__( 'Disable', 'ausiran' ),
        ],
    ];
    $fields[] = [
        'type'     => 'switch',
        'settings' => 'ausiran_blog_comments',
        'label'    => esc_html__( 'Blog Comments Meta On/Off', 'ausiran' ),
        'section'  => 'blog_setting',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'ausiran' ),
            'off' => esc_html__( 'Disable', 'ausiran' ),
        ],
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'ausiran_blog_cat',
        'label'    => esc_html__( 'Blog Category Meta On/Off', 'ausiran' ),
        'section'  => 'blog_setting',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'ausiran' ),
            'off' => esc_html__( 'Disable', 'ausiran' ),
        ],
    ];
    $fields[] = [
        'type'     => 'text',
        'settings' => 'ausiran_blog_btn',
        'label'    => esc_html__( 'Blog Button text', 'ausiran' ),
        'section'  => 'blog_setting',
        'description' => __( 'The text for the button that is linked to the post', 'ausiran' ),
        'default'  => esc_html__( 'Read More', 'ausiran' ),
        'priority' => 10,
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'breadcrumb_blog_title',
        'label'    => esc_html__( 'Blog Title', 'ausiran' ),
        'section'  => 'blog_setting',
        'default'  => esc_html__( 'Blog', 'ausiran' ),
        'description' => __( 'This is the title that will be shown on the breadcrumb. For this to work breadcrumb should be enabled!', 'ausiran' ),
        'priority' => 10,
    ];

    return $fields;
}
add_filter( 'kirki/fields', '_blog_fields' );

/*
Footer
 */
function _footer_fields( $fields ) {

    $fields[] = [
        'type'        => 'select',
        'settings'    => 'footer_widget_number',
        'label'       => esc_html__( 'Widget Number', 'ausiran' ),
        'section'     => 'footer_setting',
        'default'     => '4',
        'placeholder' => esc_html__( 'Select an option...', 'ausiran' ),
        'priority'    => 10,
        'multiple'    => 1,
        'choices'     => [
            '4' => esc_html__( 'Widget Number 4', 'ausiran' ),
            '3' => esc_html__( 'Widget Number 3', 'ausiran' ),
            '2' => esc_html__( 'Widget Number 2', 'ausiran' ),
        ],
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'footer_shape',
        'label'    => esc_html__( 'Footer Shape On/Off', 'ausiran' ),
        'section'  => 'footer_setting',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'ausiran' ),
            'off' => esc_html__( 'Disable', 'ausiran' ),
        ],
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'footer_top_swtich',
        'label'    => esc_html__( 'Footer Topbar On/Off', 'ausiran' ),
        'section'  => 'footer_setting',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'ausiran' ),
            'off' => esc_html__( 'Disable', 'ausiran' ),
        ],
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'footer_style_2_switch',
        'label'    => esc_html__( 'Footer Style 2 On/Off', 'ausiran' ),
        'section'  => 'footer_setting',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'ausiran' ),
            'off' => esc_html__( 'Disable', 'ausiran' ),
        ],
    ];
    $fields[] = [
        'type'     => 'switch',
        'settings' => 'footer_style_3_switch',
        'label'    => esc_html__( 'Footer Style 3 On/Off', 'ausiran' ),
        'section'  => 'footer_setting',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'ausiran' ),
            'off' => esc_html__( 'Disable', 'ausiran' ),
        ],
    ];

    $fields[] = [
        'type'        => 'image',
        'settings'    => 'ausiran_footer_bg',
        'label'       => esc_html__( 'Footer Background Image.', 'ausiran' ),
        'description' => esc_html__( 'Footer Background Image.', 'ausiran' ),
        'section'     => 'footer_setting',
        'default'     => '',
    ];    

    $fields[] = [
        'type'        => 'image',
        'settings'    => 'footer_logo',
        'label'       => esc_html__( 'Footer Logo.', 'ausiran' ),
        'description' => esc_html__( 'Footer Logo Image.', 'ausiran' ),
        'section'     => 'footer_setting',
        'default'     => AUSIRAN_THEME_IMAGES_DIR. '/logos/logo_2.svg' ,
    ];

    $fields[] = [
        'type'        => 'color',
        'settings'    => 'ausiran_footer_bg_color',
        'label'       => __( 'Footer BG Color', 'ausiran' ),
        'description' => esc_html__( 'This is a Footer bg color control.', 'ausiran' ),
        'section'     => 'footer_setting',
        'default'     => '#075f33',
        'priority'    => 10,
    ];

    $fields[] = [
        'type'        => 'color',
        'settings'    => 'ausiran_footer_bg_color_bottom',
        'label'       => __( 'Copyright BG Color', 'ausiran' ),
        'description' => esc_html__( 'This is a Footer Copyright bg color control.', 'ausiran' ),
        'section'     => 'footer_setting',
        'default'     => '#084d2b',
        'priority'    => 10,
    ];

    $fields[] = [
        'type'        => 'color',
        'settings'    => 'ausiran_footer_bg_color_3',
        'label'       => __( 'Footer Style 3 BG Color', 'ausiran' ),
        'description' => esc_html__( 'This is a Footer bg color control.', 'ausiran' ),
        'section'     => 'footer_setting',
        'default'     => '#041459',
        'priority'    => 10,
    ];

    $fields[] = [
        'type'        => 'color',
        'settings'    => 'ausiran_footer_bg_color_bottom_3',
        'label'       => __( 'Copyright Style 3 BG Color', 'ausiran' ),
        'description' => esc_html__( 'This is a Footer Copyright bg color control.', 'ausiran' ),
        'section'     => 'footer_setting',
        'default'     => '#18255e',
        'priority'    => 10,
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'footer_social_switch',
        'label'    => esc_html__( 'Footer Social On/Off', 'ausiran' ),
        'section'  => 'footer_setting',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'ausiran' ),
            'off' => esc_html__( 'Disable', 'ausiran' ),
        ],
    ];

	$fields[] = [
        'type'     => 'switch',
        'settings' => 'footer_subcriber_switch',
        'label'    => esc_html__( 'Footer Subscribe On/Off', 'ausiran' ),
        'section'  => 'footer_setting',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'ausiran' ),
            'off' => esc_html__( 'Disable', 'ausiran' ),
        ],
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'footer_subcriber2_switch',
        'label'    => esc_html__( 'Footer Subscribe 2 On/Off', 'ausiran' ),
        'section'  => 'footer_setting',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'ausiran' ),
            'off' => esc_html__( 'Disable', 'ausiran' ),
        ],
    ];
     $fields[] = [
        'type'     => 'text',
        'settings' => 'footer__copyright_text',
        'label'    => esc_html__( 'Footer Copyright Text', 'ausiran' ),
        'section'  => 'footer_setting',
        'default'  => esc_html__( 'Copyright ©2023 AUSIRAN. All Rights Reserved Copyright ', 'ausiran' ),
        'priority' => 10,
    ];


    return $fields;
}
add_filter( 'kirki/fields', '_footer_fields' );

function _ausiran_social_media_fields($fields){
	$fields[] = [
		'type'     => 'text',
		'settings' => 'ausiran_fb_url',
		'label'    => esc_html__( 'Facebook Url', 'ausiran' ),
		'section'  => 'social_setting',
		'default'  => esc_html__( '#', 'ausiran' ),
		'priority' => 10,
	];

	$fields[] = [
		'type'     => 'text',
		'settings' => 'ausiran_twitter_url',
		'label'    => esc_html__( 'Twitter Url', 'ausiran' ),
		'section'  => 'social_setting',
		'default'  => esc_html__( '#', 'ausiran' ),
		'priority' => 10,
	];

	$fields[] = [
		'type'     => 'text',
		'settings' => 'ausiran_instagram_url',
		'label'    => esc_html__( 'Instagram Url', 'ausiran' ),
		'section'  => 'social_setting',
		'default'  => esc_html__( '#', 'ausiran' ),
		'priority' => 10,
	];

	$fields[] = [
		'type'     => 'text',
		'settings' => 'ausiran_google_url',
		'label'    => esc_html__( 'Google Plus Url', 'ausiran' ),
		'section'  => 'social_setting',
		'default'  => esc_html__( '#', 'ausiran' ),
		'priority' => 10,
	];

	$fields[] = [
		'type'     => 'text',
		'settings' => 'ausiran_telegram_url',
		'label'    => esc_html__( 'Telegram Url', 'ausiran' ),
		'section'  => 'social_setting',
		'default'  => esc_html__( '#', 'ausiran' ),
		'priority' => 10,
	];

	$fields[] = [
		'type'     => 'text',
		'settings' => 'ausiran_linkedin_url',
		'label'    => esc_html__( 'linkedin Url', 'ausiran' ),
		'section'  => 'social_setting',
		'default'  => esc_html__( '#', 'ausiran' ),
		'priority' => 10,
	];


	$fields[] = [
		'type'     => 'text',
		'settings' => 'ausiran_youtube_url',
		'label'    => esc_html__( 'Youtube Url', 'ausiran' ),
		'section'  => 'social_setting',
		'default'  => esc_html__( '#', 'ausiran' ),
		'priority' => 10,
	];
	return $fields;
}
add_filter( 'kirki/fields', '_ausiran_social_media_fields' );
// color
function ausiran_color_fields( $fields ) {

    // Color Settings
    $fields[] = [
        'type'        => 'color',
        'settings'    => 'ausiran_color_option_prim',
        'label'       => __( 'Primary Color', 'ausiran' ),
        'description' => esc_html__( 'This is a Primary color control.', 'ausiran' ),
        'section'     => 'color_setting',
        'default'     => '#808080',
        'priority'    => 10,

    ];  

    // Color Settings
    $fields[] = [
        'type'        => 'color',
        'settings'    => 'ausiran_color_option_sec',
        'label'       => __( 'Secondary Color', 'ausiran' ),
        'description' => esc_html__( 'This is a Secondary color control.', 'ausiran' ),
        'section'     => 'color_setting',
        'default'     => '#444444',
        'priority'    => 10,
    ];    

    // color settings
    $fields[] = [
        'type'        => 'color',
        'settings'    => 'ausiran_color_option_body',
        'label'       => __( 'Body Color', 'ausiran' ),
        'description' => esc_html__( 'This is a Body color control.', 'ausiran' ),
        'section'     => 'color_setting',
        'default'     => '#808080',
        'priority'    => 10,
    ];

    // color settings
    $fields[] = [
        'type'        => 'color',
        'settings'    => 'ausiran_color_option_black',
        'label'       => __( 'Black Color', 'ausiran' ),
        'description' => esc_html__( 'This is a Black color control.', 'ausiran' ),
        'section'     => 'color_setting',
        'default'     => '#000',
        'priority'    => 10,
    ];

    // color settings
    $fields[] = [
        'type'        => 'color',
        'settings'    => 'ausiran_color_option_white',
        'label'       => __( 'White Color', 'ausiran' ),
        'description' => esc_html__( 'This is a White color control.', 'ausiran' ),
        'section'     => 'color_setting',
        'default'     => '#fff',
        'priority'    => 10,
    ];

    return $fields;
}
add_filter( 'kirki/fields', 'ausiran_color_fields' );

// 404
function ausiran_404_fields( $fields ) {
    // 404 settings
    $fields[] = [
        'type'     => 'text',
        'settings' => 'ausiran_error_404_text',
        'label'    => esc_html__( '400 Text', 'ausiran' ),
        'section'  => '404_page',
        'default'  => esc_html__( '404', 'ausiran' ),
        'priority' => 10,
    ];
    $fields[] = [
        'type'     => 'text',
        'settings' => 'ausiran_error_title',
        'label'    => esc_html__( 'Not Found Title', 'ausiran' ),
        'section'  => '404_page',
        'default'  => esc_html__( 'Page not found', 'ausiran' ),
        'priority' => 10,
    ];
    $fields[] = [
        'type'     => 'textarea',
        'settings' => 'ausiran_error_desc',
        'label'    => esc_html__( '404 Description Text', 'ausiran' ),
        'section'  => '404_page',
        'default'  => esc_html__( 'Oops! The page you are looking for does not exist. It might have been moved or deleted', 'ausiran' ),
        'priority' => 10,
    ];
    $fields[] = [
        'type'     => 'text',
        'settings' => 'ausiran_error_link_text',
        'label'    => esc_html__( '404 Link Text', 'ausiran' ),
        'section'  => '404_page',
        'default'  => esc_html__( 'Back To Home', 'ausiran' ),
        'priority' => 10,
    ];
    return $fields;

}
add_filter( 'kirki/fields', 'ausiran_404_fields' );

/**
 * Added Fields
 */
function ausiran_typo_fields( $fields ) {
    // typography settings
    // typography settings
    $fields[] = [
        'type'        => 'typography',
        'settings'    => 'typography_body_setting',
        'label'       => esc_html__( 'Body Font', 'ausiran' ),
        'section'     => 'typo_setting',
        'default'     => [
            'font-family'    => '',
            'variant'        => '',
            'font-size'      => '',
            'line-height'    => '',
            'letter-spacing' => '0',
            'color'          => '',
        ],
        'priority'    => 10,
        'transport'   => 'auto',
        'output'      => [
            [
                'element' => 'body',
            ],
        ],
    ];

    $fields[] = [
        'type'        => 'typography',
        'settings'    => 'typography_h_setting',
        'label'       => esc_html__( 'Heading h1 Fonts', 'ausiran' ),
        'section'     => 'typo_setting',
        'default'     => [
            'font-family'    => '',
            'variant'        => '',
            'font-size'      => '',
            'line-height'    => '',
            'letter-spacing' => '0',
            'color'          => '',
        ],
        'priority'    => 10,
        'transport'   => 'auto',
        'output'      => [
            [
                'element' => 'h1',
            ],
        ],
    ];

    $fields[] = [
        'type'        => 'typography',
        'settings'    => 'typography_h2_setting',
        'label'       => esc_html__( 'Heading h2 Fonts', 'ausiran' ),
        'section'     => 'typo_setting',
        'default'     => [
            'font-family'    => '',
            'variant'        => '',
            'font-size'      => '',
            'line-height'    => '',
            'letter-spacing' => '0',
            'color'          => '',
        ],
        'priority'    => 10,
        'transport'   => 'auto',
        'output'      => [
            [
                'element' => 'h2',
            ],
        ],
    ];

    $fields[] = [
        'type'        => 'typography',
        'settings'    => 'typography_h3_setting',
        'label'       => esc_html__( 'Heading h3 Fonts', 'ausiran' ),
        'section'     => 'typo_setting',
        'default'     => [
            'font-family'    => '',
            'variant'        => '',
            'font-size'      => '',
            'line-height'    => '',
            'letter-spacing' => '0',
            'color'          => '',
        ],
        'priority'    => 10,
        'transport'   => 'auto',
        'output'      => [
            [
                'element' => 'h3',
            ],
        ],
    ];

    $fields[] = [
        'type'        => 'typography',
        'settings'    => 'typography_h4_setting',
        'label'       => esc_html__( 'Heading h4 Fonts', 'ausiran' ),
        'section'     => 'typo_setting',
        'default'     => [
            'font-family'    => '',
            'variant'        => '',
            'font-size'      => '',
            'line-height'    => '',
            'letter-spacing' => '0',
            'color'          => '',
        ],
        'priority'    => 10,
        'transport'   => 'auto',
        'output'      => [
            [
                'element' => 'h4',
            ],
        ],
    ];

    $fields[] = [
        'type'        => 'typography',
        'settings'    => 'typography_h5_setting',
        'label'       => esc_html__( 'Heading h5 Fonts', 'ausiran' ),
        'section'     => 'typo_setting',
        'default'     => [
            'font-family'    => '',
            'variant'        => '',
            'font-size'      => '',
            'line-height'    => '',
            'letter-spacing' => '0',
            'color'          => '',
        ],
        'priority'    => 10,
        'transport'   => 'auto',
        'output'      => [
            [
                'element' => 'h5',
            ],
        ],
    ];

    $fields[] = [
        'type'        => 'typography',
        'settings'    => 'typography_h6_setting',
        'label'       => esc_html__( 'Heading h6 Fonts', 'ausiran' ),
        'section'     => 'typo_setting',
        'default'     => [
            'font-family'    => '',
            'variant'        => '',
            'font-size'      => '',
            'line-height'    => '',
            'letter-spacing' => '0',
            'color'          => '',
        ],
        'priority'    => 10,
        'transport'   => 'auto',
        'output'      => [
            [
                'element' => 'h6',
            ],
        ],
    ];
    return $fields;
}
add_filter( 'kirki/fields', 'ausiran_typo_fields' );


/**
 * Added Fields
 */
function ausiran_slug_setting( $fields ) {
    // slug settings
    $fields[] = [
        'type'     => 'text',
        'settings' => 'ausiran_sv_slug',
        'label'    => esc_html__( 'Service Slug', 'ausiran' ),
        'section'  => 'slug_setting',
        'default'  => esc_html__( 'ourservices', 'ausiran' ),
        'priority' => 10,
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'ausiran_cases_slug',
        'label'    => esc_html__( 'Project Slug', 'ausiran' ),
        'section'  => 'slug_setting',
        'default'  => esc_html__( 'ourproject', 'ausiran' ),
        'priority' => 10,
    ];

    return $fields;
}
add_filter( 'kirki/fields', 'ausiran_slug_setting' );

/**
 * This is a short hand function for getting setting value from customizer
 *
 * @param string $name
 *
 * @return bool|string
 */
function ausiran_THEME_option( $name ) {
    $value = '';
    if ( class_exists( 'ausiran' ) ) {
        $value = ausiran_Kirki::get_option( ausiran_get_theme(), $name );
    }

    return apply_filters( 'ausiran_THEME_option', $value, $name );
}

/**
 * Get config ID
 *
 * @return string
 */
function ausiran_get_theme() {
    return 'ausiran';
}
