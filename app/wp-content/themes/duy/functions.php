<?php

function register_my_menu() {
	register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );

function register_my_menus() {
	register_nav_menus(
		array(
			'header-menu' => __( 'Header Menu' ),
			'extra-menu' => __( 'Extra Menu' )
		)
	);
}
add_action( 'init', 'register_my_menus' );

add_theme_support( 'post-thumbnails' );

// Add style
function add_theme_scripts() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/slick.js', array ( 'jquery', 'jquery-migrate' ), 1.1, true);
    wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/jquery.colorbox.js', array ( 'jquery', 'jquery-migrate' ), 1.1, true);
    if (is_singular()) {
        wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/page.js', array ( 'jquery', 'jquery-migrate' ), 1.1, true);
    }
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );


// Add site setting
function add_your_setting($wp_customize) {
    $wp_customize->add_setting('homepage_banner');
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'homepage_banner',
            array(
                'label' => 'Banner trang chủ',
                'section' => 'title_tagline',
                'settings' => 'homepage_banner',
            )
        )
    );

    $wp_customize->add_setting('owner_phone');
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'owner_phone',
            array(
                'label' => 'Số điện thoại',
                'section' => 'title_tagline',
                'settings' => 'owner_phone',
            )
        )
    );

    $wp_customize->add_setting('owner_address');
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'owner_address',
            array(
                'label' => 'Địa chỉ',
                'section' => 'title_tagline',
                'settings' => 'owner_address',
            )
        )
    );


}
add_action( 'customize_register', 'add_your_setting' );