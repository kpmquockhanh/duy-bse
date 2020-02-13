<?php
register_sidebar(array(
    'name' => 'Block after content',
    'id' => 'block-after-content',
    'description' => 'Khu vực sidebar hiển thị dưới mỗi bài viết',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h1 class="widget-title">',
    'after_title' => '</h1>'
));
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

/*
 * Khởi tạo widget item
 */
add_action( 'widgets_init', 'create_custom_widget' );
function create_custom_widget()
{
    register_widget('slide_img_widget');
}

/**
 * Tạo class slide_img_widgets
 */
class slide_img_widget extends WP_Widget {

    /**
     * Thiết lập widget: đặt tên, base ID
     */
    function __construct() {
        parent::__construct(
            'slide-custom-widget',
            'Custom slide image widget'
        );
    }

    /**
     * Tạo form option cho widget
     */
    function form( $instance ) {
        //Tạo biến riêng cho giá trị mặc định trong mảng $default
        $title = esc_attr( $instance['title'] );

        //Hiển thị form trong option của widget

        ?>
        <div class="text-widget-fields">
            <p>
                <label for="title">Title:</label>
                <input id="title" type="text" class="widefat title">
            </p>
            <div>

            </div>
        </div>
        <?php
    }

    /**
     * save widget form
     */

    function update( $new_instance, $old_instance ) {

    }

    /**
     * Show widget
     */

    function widget( $args, $instance ) {
        $title = apply_filters( 'widget_title', $instance[ 'title' ] );
        $blog_title = get_bloginfo( 'name' );
        $tagline = get_bloginfo( 'description' );

        echo $args['before_widget'] . $args['before_title'] . $title . $args['after_title']; ?>

        <p><strong>Site Name:</strong> <?php echo $blog_title ?></p>
        <p><strong>Tagline:</strong> <?php echo $tagline ?></p>

        <?php echo $args['after_widget'];
    }

}