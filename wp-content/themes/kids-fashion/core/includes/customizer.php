<?php

if ( class_exists("Kirki")){

	// LOGO

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'kids_fashion_enable_logo_text',
		'section'     => 'title_tagline',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Site Title and Tagline', 'kids-fashion' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'kids_fashion_display_header_title',
		'label'       => esc_html__( 'Site Title Enable / Disable Button', 'kids-fashion' ),
		'section'     => 'title_tagline',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'kids-fashion' ),
			'off' => esc_html__( 'Disable', 'kids-fashion' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'kids_fashion_display_header_text',
		'label'       => esc_html__( 'Tagline Enable / Disable Button', 'kids-fashion' ),
		'section'     => 'title_tagline',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'kids-fashion' ),
			'off' => esc_html__( 'Disable', 'kids-fashion' ),
		],
	] );

	// PANEL

	Kirki::add_panel( 'kids_fashion_panel_id', array(
	    'priority'    => 10,
	    'title'       => esc_html__( 'Theme Options', 'kids-fashion' ),
	) );

	// POST SECTION

	Kirki::add_section( 'kids_fashion_section_post', array(
	    'title'          => esc_html__( 'Post Settings', 'kids-fashion' ),
	    'description'    => esc_html__( 'Here you can get different post settings', 'kids-fashion' ),
	    'panel'          => 'kids_fashion_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'kids_fashion_enable_post_heading',
		'section'     => 'kids_fashion_section_post',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Post Settings.', 'kids-fashion' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'kids_fashion_blog_admin_enable',
		'label'       => esc_html__( 'Post Author Enable / Disable Button', 'kids-fashion' ),
		'section'     => 'kids_fashion_section_post',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'kids-fashion' ),
			'off' => esc_html__( 'Disable', 'kids-fashion' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'kids_fashion_blog_comment_enable',
		'label'       => esc_html__( 'Post Comment Enable / Disable Button', 'kids-fashion' ),
		'section'     => 'kids_fashion_section_post',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'kids-fashion' ),
			'off' => esc_html__( 'Disable', 'kids-fashion' ),
		],
	] );

	// HEADER SECTION

	Kirki::add_section( 'kids_fashion_section_header', array(
	    'title'          => esc_html__( 'Header Settings', 'kids-fashion' ),
	    'description'    => esc_html__( 'Here you can add different type of social icons.', 'kids-fashion' ),
	    'panel'          => 'kids_fashion_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'kids_fashion_phone_number_heading',
		'section'     => 'kids_fashion_section_header',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Phone Number', 'kids-fashion' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'kids_fashion_header_phone_number',
		'section'  => 'kids_fashion_section_header',
		'default'  => '',
		'priority' => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'kids_fashion_email_address_heading',
		'section'     => 'kids_fashion_section_header',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Email Address', 'kids-fashion' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'kids_fashion_header_email_address',
		'section'  => 'kids_fashion_section_header',
		'default'  => '',
		'priority' => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'kids_fashion_enable_socail_link',
		'section'     => 'kids_fashion_section_header',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Social Media Link', 'kids-fashion' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'repeater',
		'section'     => 'kids_fashion_section_header',
		'priority'    => 10,
		'row_label' => [
			'type'  => 'field',
			'value' => esc_html__( 'Social Icon', 'kids-fashion' ),
			'field' => 'link_text',
		],
		'button_label' => esc_html__('Add New Social Icon', 'kids-fashion' ),
		'settings'     => 'kids_fashion_social_links_settings',
		'default'      => '',
		'fields' 	   => [
			'link_text' => [
				'type'        => 'text',
				'label'       => esc_html__( 'Icon', 'kids-fashion' ),
				'description' => esc_html__( 'Add the fontawesome class ex: "fab fa-facebook-f".', 'kids-fashion' ),
				'default'     => '',
			],
			'link_url' => [
				'type'        => 'url',
				'label'       => esc_html__( 'Social Link', 'kids-fashion' ),
				'description' => esc_html__( 'Add the social icon url here.', 'kids-fashion' ),
				'default'     => '',
			],
		],
		'choices' => [
			'limit' => 5
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'kids_fashion_enable_search',
		'section'     => 'kids_fashion_section_header',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Search Box', 'kids-fashion' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'kids_fashion_search_box_enable',
		'label'       => esc_html__( 'Search Enable / Disable Button', 'kids-fashion' ),
		'section'     => 'kids_fashion_section_header',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'kids-fashion' ),
			'off' => esc_html__( 'Disable', 'kids-fashion' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'kids_fashion_enable_cart',
		'section'     => 'kids_fashion_section_header',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Cart', 'kids-fashion' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'kids_fashion_cart_box_enable',
		'label'       => esc_html__( 'Cart Enable / Disable Button', 'kids-fashion' ),
		'section'     => 'kids_fashion_section_header',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'kids-fashion' ),
			'off' => esc_html__( 'Disable', 'kids-fashion' ),
		],
	] );

	// SLIDER SECTION

	Kirki::add_section( 'kids_fashion_blog_slide_section', array(
        'title'          => esc_html__( ' Slider Settings', 'kids-fashion' ),
        'description'    => esc_html__( 'You have to select post category to show slider.', 'kids-fashion' ),
        'panel'          => 'kids_fashion_panel_id',
        'priority'       => 160,
    ) );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'kids_fashion_enable_heading',
		'section'     => 'kids_fashion_blog_slide_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Slider', 'kids-fashion' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'kids_fashion_blog_box_enable',
		'label'       => esc_html__( 'Section Enable / Disable', 'kids-fashion' ),
		'section'     => 'kids_fashion_blog_slide_section',
		'default'     => '0',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'kids-fashion' ),
			'off' => esc_html__( 'Disable', 'kids-fashion' ),
		],
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'kids_fashion_slider_heading',
		'section'     => 'kids_fashion_blog_slide_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Slider', 'kids-fashion' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'number',
		'settings'    => 'kids_fashion_blog_slide_number',
		'label'       => esc_html__( 'Number of slides to show', 'kids-fashion' ),
		'section'     => 'kids_fashion_blog_slide_section',
		'default'     => 3,
		'choices'     => [
			'min'  => 0,
			'max'  => 80,
			'step' => 1,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'select',
		'settings'    => 'kids_fashion_blog_slide_category',
		'label'       => esc_html__( 'Select the category to show slider ( Image Dimension 1600 x 600 )', 'kids-fashion' ),
		'section'     => 'kids_fashion_blog_slide_section',
		'default'     => '',
		'placeholder' => esc_html__( 'Select an category...', 'kids-fashion' ),
		'priority'    => 10,
		'choices'     => kids_fashion_get_categories_select(),
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'kids_fashion_slider_extra_heading',
		'section'     => 'kids_fashion_blog_slide_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Slider Extra Title', 'kids-fashion' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'kids_fashion_slider_main_title',
		'section'  => 'kids_fashion_blog_slide_section',
		'default'  => '',
		'priority' => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'kids_fashion_slider_button_heading',
		'section'     => 'kids_fashion_blog_slide_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Slider Button Text', 'kids-fashion' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'kids_fashion_slider_button_text',
		'section'  => 'kids_fashion_blog_slide_section',
		'default'  => 'Explore Toys Now',
		'priority' => 10,
	] );


	// PRODUCTS SECTION

	Kirki::add_section( 'kids_fashion_hot_product_section', array(
        'title'          => esc_html__( 'Hot Products Settings', 'kids-fashion' ),
        'description'    => esc_html__( 'You have to select product category to show products.', 'kids-fashion' ),
        'panel'          => 'kids_fashion_panel_id',
        'priority'       => 160,
    ) );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'kids_fashion_product_enable_heading',
		'section'     => 'kids_fashion_hot_product_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Product Section', 'kids-fashion' ) . '</h3>',
		'priority'    => 1,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'kids_fashion_hot_products_section_enable',
		'label'       => esc_html__( 'Section Enable / Disable', 'kids-fashion' ),
		'section'     => 'kids_fashion_hot_product_section',
		'default'     => '0',
		'priority'    => 2,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'kids-fashion' ),
			'off' => esc_html__( 'Disable', 'kids-fashion' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'kids_fashion_hot_product_main_heading',
		'section'     => 'kids_fashion_hot_product_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Product Section Main Title', 'kids-fashion' ) . '</h3>',
		'priority'    => 3,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'kids_fashion_hot_products_section_heading',
		'section'  => 'kids_fashion_hot_product_section',
		'default'  => '',
		'priority' => 4,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'kids_fashion_hot_product_heading',
		'section'     => 'kids_fashion_hot_product_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Product Section Title', 'kids-fashion' ) . '</h3>',
		'priority'    => 5,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'kids_fashion_hot_products_section_sub_heading',
		'section'  => 'kids_fashion_hot_product_section',
		'default'  => '',
		'priority' => 6,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'kids_fashion_post_heading',
		'section'     => 'kids_fashion_hot_product_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Hot Products', 'kids-fashion' ) . '</h3>',
		'priority'    => 7,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'number',
		'settings'    => 'kids_fashion_products_numbers',
		'label'       => esc_html__( 'Number of products to show', 'kids-fashion' ),
		'section'     => 'kids_fashion_hot_product_section',
		'default'     => 8,
		'choices'     => [
			'min'  => 0,
			'max'  => 80,
			'step' => 1,
		],
	] );

	// FOOTER SECTION

	Kirki::add_section( 'kids_fashion_footer_section', array(
        'title'          => esc_html__( 'Footer Settings', 'kids-fashion' ),
        'description'    => esc_html__( 'Here you can change copyright text', 'kids-fashion' ),
        'panel'          => 'kids_fashion_panel_id',
        'priority'       => 160,
    ) );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'kids_fashion_footer_text_heading',
		'section'     => 'kids_fashion_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Copyright Text', 'kids-fashion' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'kids_fashion_footer_text',
		'section'  => 'kids_fashion_footer_section',
		'default'  => '',
		'priority' => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'kids_fashion_footer_enable_heading',
		'section'     => 'kids_fashion_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Footer Link', 'kids-fashion' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'kids_fashion_copyright_enable',
		'label'       => esc_html__( 'Section Enable / Disable', 'kids-fashion' ),
		'section'     => 'kids_fashion_footer_section',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'kids-fashion' ),
			'off' => esc_html__( 'Disable', 'kids-fashion' ),
		],
	] );	
}

add_action( 'customize_register', 'kids_fashion_customizer_settings' );
function kids_fashion_customizer_settings( $wp_customize ) {
	$args = array(
       'type'                     => 'product',
        'child_of'                 => 0,
        'parent'                   => '',
        'orderby'                  => 'term_group',
        'order'                    => 'ASC',
        'hide_empty'               => false,
        'hierarchical'             => 1,
        'number'                   => '',
        'taxonomy'                 => 'product_cat',
        'pad_counts'               => false
    );
	$categories = get_categories($args);
	$cat_posts = array();
	$m = 0;
	$cat_posts[]='Select';
	foreach($categories as $category){
		if($m==0){
			$default = $category->slug;
			$m++;
		}
		$cat_posts[$category->slug] = $category->name;
	}

	$wp_customize->add_setting('kids_fashion_products_category',array(
		'default'	=> 'select',
		'sanitize_callback' => 'kids_fashion_sanitize_select',
	));

	$wp_customize->add_control('kids_fashion_products_category',array(
		'type'    => 'select',
		'choices' => $cat_posts,
		'label' => __('Select category to display products ','kids-fashion'),
		'section' => 'kids_fashion_hot_product_section',
	));	 
}