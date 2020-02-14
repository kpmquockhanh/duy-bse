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
function register_my_menu()
{
    register_nav_menu('header-menu', __('Header Menu'));
}

add_action('init', 'register_my_menu');

function register_my_menus()
{
    register_nav_menus(
        array(
            'header-menu' => __('Header Menu'),
            'extra-menu' => __('Extra Menu')
        )
    );
}

add_action('init', 'register_my_menus');

add_theme_support('post-thumbnails');

// Add style
function add_theme_scripts()
{
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_script('script', get_template_directory_uri() . '/assets/js/slick.js', array('jquery', 'jquery-migrate'), 1.1, true);
    wp_enqueue_script('script', get_template_directory_uri() . '/assets/js/jquery.colorbox.js', array('jquery', 'jquery-migrate'), 1.1, true);
    if (is_singular()) {
        wp_enqueue_script('script', get_template_directory_uri() . '/assets/js/page.js', array('jquery', 'jquery-migrate'), 1.1, true);
    }
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}

add_action('wp_enqueue_scripts', 'add_theme_scripts');


// Add site setting
function add_your_setting($wp_customize)
{
    $wp_customize->add_setting('homepage_banner');
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'homepage_banner',
            array(
                'label' => 'Banner trang chủ',
                'section' => 'title_tagline',
                'settings' => 'homepage_banner',
            )
        )
    );

    $wp_customize->add_setting('owner_phone');
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'owner_phone',
            array(
                'label' => 'Số điện thoại',
                'section' => 'title_tagline',
                'settings' => 'owner_phone',
            )
        )
    );

    $wp_customize->add_setting('owner_address');
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'owner_address',
            array(
                'label' => 'Địa chỉ',
                'section' => 'title_tagline',
                'settings' => 'owner_address',
            )
        )
    );


}

add_action('customize_register', 'add_your_setting');

/*
 * Khởi tạo widget item
 */
add_action('widgets_init', 'create_custom_widget');
function create_custom_widget()
{
    register_widget('slide_img_widget');
    register_widget('custom_media_widget');
}

class custom_media_widget extends WP_Widget_Media {

    /**
     * Constructor.
     *
     * @since 4.9.0
     */
    public function __construct() {
        parent::__construct(
            'media_gallery',
            __( 'Gallery custom' ),
            array(
                'description' => __( 'Displays an image gallery.' ),
                'mime_type'   => 'image',
            )
        );

        $this->l10n = array_merge(
            $this->l10n,
            array(
                'no_media_selected' => __( 'No images selected' ),
                'add_media'         => _x( 'Add Images', 'label for button in the gallery widget; should not be longer than ~13 characters long' ),
                'replace_media'     => '',
                'edit_media'        => _x( 'Edit Gallery', 'label for button in the gallery widget; should not be longer than ~13 characters long' ),
            )
        );
    }

    /**
     * Get schema for properties of a widget instance (item).
     *
     * @since 4.9.0
     *
     * @see WP_REST_Controller::get_item_schema()
     * @see WP_REST_Controller::get_additional_fields()
     * @link https://core.trac.wordpress.org/ticket/35574
     * @return array Schema for properties.
     */
    public function get_instance_schema() {
        $schema = array(
            'title'          => array(
                'type'                  => 'string',
                'default'               => '',
                'sanitize_callback'     => 'sanitize_text_field',
                'description'           => __( 'Title for the widget' ),
                'should_preview_update' => false,
            ),
            'ids'            => array(
                'type'              => 'array',
                'items'             => array(
                    'type' => 'integer',
                ),
                'default'           => array(),
                'sanitize_callback' => 'wp_parse_id_list',
            ),
            'columns'        => array(
                'type'    => 'integer',
                'default' => 3,
                'minimum' => 1,
                'maximum' => 9,
            ),
            'size'           => array(
                'type'    => 'string',
                'enum'    => array_merge( get_intermediate_image_sizes(), array( 'full', 'custom' ) ),
                'default' => 'thumbnail',
            ),
            'link_type'      => array(
                'type'                  => 'string',
                'enum'                  => array( 'post', 'file', 'none' ),
                'default'               => 'post',
                'media_prop'            => 'link',
                'should_preview_update' => false,
            ),
            'orderby_random' => array(
                'type'                  => 'boolean',
                'default'               => false,
                'media_prop'            => '_orderbyRandom',
                'should_preview_update' => false,
            ),
        );

        /** This filter is documented in wp-includes/widgets/class-wp-widget-media.php */
        $schema = apply_filters( "widget_{$this->id_base}_instance_schema", $schema, $this );

        return $schema;
    }

    /**
     * Render the media on the frontend.
     *
     * @since 4.9.0
     *
     * @param array $instance Widget instance props.
     * @return void
     */
    public function render_media( $instance ) {
        $instance = array_merge( wp_list_pluck( $this->get_instance_schema(), 'default' ), $instance );

        $shortcode_atts = array_merge(
            $instance,
            array(
                'link' => $instance['link_type'],
            )
        );

        // @codeCoverageIgnoreStart
        if ( $instance['orderby_random'] ) {
            $shortcode_atts['orderby'] = 'rand';
        }

        // @codeCoverageIgnoreEnd
        echo gallery_shortcode( $shortcode_atts );
    }

    /**
     * Loads the required media files for the media manager and scripts for media widgets.
     *
     * @since 4.9.0
     */
    public function enqueue_admin_scripts() {
        parent::enqueue_admin_scripts();

        $handle = 'media-gallery-widget';
        wp_enqueue_script( $handle );

        $exported_schema = array();
        foreach ( $this->get_instance_schema() as $field => $field_schema ) {
            $exported_schema[ $field ] = wp_array_slice_assoc( $field_schema, array( 'type', 'default', 'enum', 'minimum', 'format', 'media_prop', 'should_preview_update', 'items' ) );
        }
        wp_add_inline_script(
            $handle,
            sprintf(
                'wp.mediaWidgets.modelConstructors[ %s ].prototype.schema = %s;',
                wp_json_encode( $this->id_base ),
                wp_json_encode( $exported_schema )
            )
        );

        wp_add_inline_script(
            $handle,
            sprintf(
                '
                    wp.mediaWidgets.controlConstructors[ %1$s ].prototype.mime_type = %2$s;
                    _.extend( wp.mediaWidgets.controlConstructors[ %1$s ].prototype.l10n, %3$s );
                ',
                wp_json_encode( $this->id_base ),
                wp_json_encode( $this->widget_options['mime_type'] ),
                wp_json_encode( $this->l10n )
            )
        );
    }

    /**
     * Render form template scripts.
     *
     * @since 4.9.0
     */
    public function render_control_template_scripts() {
        parent::render_control_template_scripts();
        ?>
		<script type="text/html" id="tmpl-wp-media-widget-gallery-preview">
			<#
			var ids = _.filter( data.ids, function( id ) {
			return ( id in data.attachments );
			} );
			#>
			<# if ( ids.length ) { #>
			<ul class="gallery media-widget-gallery-preview" role="list">
				<# _.each( ids, function( id, index ) { #>
				<# var attachment = data.attachments[ id ]; #>
				<# if ( index < 6 ) { #>
				<li class="gallery-item">
					<div class="gallery-icon">
						<img alt="{{ attachment.alt }}"
						<# if ( index === 5 && data.ids.length > 6 ) { #> aria-hidden="true" <# } #>
						<# if ( attachment.sizes.thumbnail ) { #>
						src="{{ attachment.sizes.thumbnail.url }}" width="{{ attachment.sizes.thumbnail.width }}" height="{{ attachment.sizes.thumbnail.height }}"
						<# } else { #>
						src="{{ attachment.url }}"
						<# } #>
						<# if ( ! attachment.alt && attachment.filename ) { #>
						aria-label="
                        <?php
                        echo esc_attr(
                            sprintf(
                            /* translators: %s: The image file name. */
                                __( 'The current image has no alternative text. The file name is: %s' ),
                                '{{ attachment.filename }}'
                            )
                        );
                        ?>
						"
						<# } #>
						/>
						<# if ( index === 5 && data.ids.length > 6 ) { #>
						<div class="gallery-icon-placeholder">
							<p class="gallery-icon-placeholder-text" aria-label="
                                        <?php
                            printf(
                            /* translators: %s: The amount of additional, not visible images in the gallery widget preview. */
                                __( 'Additional images added to this gallery: %s' ),
                                '{{ data.ids.length - 5 }}'
                            );
                            ?>
                                        ">+{{ data.ids.length - 5 }}</p>
						</div>
						<# } #>
					</div>
				</li>
				<# } #>
				<# } ); #>
			</ul>
			<# } else { #>
			<div class="attachment-media-view">
				<button type="button" class="placeholder button-add-media"><?php echo esc_html( $this->l10n['add_media'] ); ?></button>
			</div>
			<# } #>
		</script>
        <?php
    }

    /**
     * Whether the widget has content to show.
     *
     * @since 4.9.0
     * @access protected
     *
     * @param array $instance Widget instance props.
     * @return bool Whether widget has content.
     */
    protected function has_content( $instance ) {
        if ( ! empty( $instance['ids'] ) ) {
            $attachments = wp_parse_id_list( $instance['ids'] );
            foreach ( $attachments as $attachment ) {
                if ( 'attachment' !== get_post_type( $attachment ) ) {
                    return false;
                }
            }
            return true;
        }
        return false;
    }
}


/**
 * Tạo class slide_img_widgets
 */
class slide_img_widget extends WP_Widget
{

    /**
     * Thiết lập widget: đặt tên, base ID
     */
    function __construct()
    {
        parent::__construct(
            'slide-custom-widget',
            'Custom slide image widget'
        );
    }

    /**
     * Tạo form option cho widget
     */
    function form($instance)
    {
        //Tạo biến riêng cho giá trị mặc định trong mảng $default
        $title = esc_attr($instance['title']);

        //Hiển thị form trong option của widget

        ?>
		<div class="text-widget-fields">
			<p>
				<label for="<?= $this->get_field_id('title'); ?>"><?php _e('Title:'); ?></label>
				<input class="widefat" id="<?= $this->get_field_id('title'); ?>"
					   name="<?= $this->get_field_name('title'); ?>" type="text" value="<?= esc_attr($title); ?>"/>
			</p>
			<p>
<!--				<label for="--><?php //echo $this->get_field_id('image_uri'); ?><!--">Image</label><br/>-->
				<input type="button" value="<?php _e( 'Upload Image'); ?>" class="button custom_media_upload" id="myplugin-change-image"/>
			</p>
		</div>
		<script>
            jQuery(document).ready( function( $ ) {

                let myplugin_media_upload;

                jQuery('body').on( 'click', '#myplugin-change-image', function(e) {
                    e.preventDefault();

                    // If the uploader object has already been created, reopen the dialog
                    if( myplugin_media_upload ) {
                        myplugin_media_upload.open();
                        return;
                    }

                    // Extend the wp.media object
                    myplugin_media_upload = wp.media.frames.file_frame = wp.media({
                        //button_text set by wp_localize_script()
                        title: 'button_text.title',
                        button: { text: 'button_text.button' },
                        multiple: true //allowing for multiple image selection
                    });

                    /**
                     *THE KEY BUSINESS
                     *When multiple images are selected, get the multiple attachment objects
                     *and convert them into a usable array of attachments
                     */
                    myplugin_media_upload.on( 'select', function(){

                        var attachments = myplugin_media_upload.state().get('selection').map(function( attachment ) {
							attachment.toJSON();
							return attachment;
						});

                        //loop through the array and do things with each attachment
                        for (let i = 0; i < attachments.length; ++i) {
                            //sample function 1: add image preview
                            $('#myplugin-placeholder').after(
                                '<div class="myplugin-image-preview"><img src="' +
                                attachments[i].attributes.url + '" ></div>'
                            );

                            //sample function 2: add hidden input for each image
                            $('#myplugin-placeholder').after(
                                '<input id="myplugin-image-input' +
                                attachments[i].id + '" type="hidden" name="myplugin_attachment_id_array[]"  value="' +
                            attachments[i].id + '">'
                        )

                        }

                    });

                    myplugin_media_upload.open();

                });

            });
		</script>
        <?php
    }

    /**
     * save widget form
     */

    function update($new_instance, $old_instance)
    {
        $instance = $old_instance;
        $instance['title'] = strip_tags($new_instance['title']);
//        $instance['image_uri'] = strip_tags( $new_instance['image_uri'] );
        return $instance;
    }

    /**
     * Show widget
     */

    function widget($args, $instance)
    {
        echo $args['before_widget'];
        $title = apply_filters('widget_title', $instance['title']);
        $blog_title = get_bloginfo('name');
        $tagline = get_bloginfo('description');


        // echo $args['before_widget'] . $args['before_title'] . $title . $args['after_title'];
        ?>

		<div class="panel-grid panel-has-style">
			<div id="tienich" class="panel-row-style">
				<div class="panel-grid-cell">
					<div id="panel-27-5-0-0"
						 class="so-panel widget widget_postcustom my_posts_type_widget panel-first-child panel-last-child"
						 data-index="6">
						<div class="widget-title"><span><?= $title ?></span></div>
						<ul class="list-utility default_post post-list unstyled">
							<li>
								<div class="content_item">
									<figure class="featured-thumbnail thumbnail">
										<a href="https://theparkhome.vn/be-boi-bon-mua/" tabindex="0">
											<div class="ajax_image">
												<img src="https://theparkhome.vn/wp-content/uploads/2018/10/tien-ich-chung-cu-the-park-home-be-boi-min.jpg"
													 alt="BỂ BƠI BỐN MÙA">
											</div>
										</a>
									</figure>
									<div class="post-list_h">
										<a class="post-title" href="https://theparkhome.vn/be-boi-bon-mua/"
										   rel="bookmark" title="BỂ BƠI BỐN MÙA" tabindex="0">
											BỂ BƠI BỐN MÙA
										</a>
									</div>
								</div>
							</li>
							<li>
								<div class="content_item">
									<figure class="featured-thumbnail thumbnail">
										<a href="https://theparkhome.vn/be-boi-bon-mua/" tabindex="0">
											<div class="ajax_image">
												<img src="https://theparkhome.vn/wp-content/uploads/2018/10/tien-ich-chung-cu-the-park-home-be-boi-min.jpg"
													 alt="BỂ BƠI BỐN MÙA">
											</div>
										</a>
									</figure>
									<div class="post-list_h">
										<a class="post-title" href="https://theparkhome.vn/be-boi-bon-mua/"
										   rel="bookmark" title="BỂ BƠI BỐN MÙA" tabindex="0">
											BỂ BƠI BỐN MÙA
										</a>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>

        <?php echo $args['after_widget'];
    }
}