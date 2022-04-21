<?php
/**
 * qmerit-new functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package qmerit-new
 */

// update_option( 'siteurl', 'https://qmerit.com' );
// update_option( 'home', 'https://qmerit.com' );

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'qmerit_new_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function qmerit_new_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on qmerit-new, use a find and replace
		 * to change 'qmerit_new' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'qmerit_new', get_template_directory() . '/languages' );

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
		register_nav_menus(
			array(
				'primary' => esc_html__( 'Primary', 'qmerit_new' ),
				'hire' => esc_html__( 'Hire', 'qmerit_new' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'qmerit_new_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'qmerit_new_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function qmerit_new_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'qmerit_new_content_width', 640 );
}
add_action( 'after_setup_theme', 'qmerit_new_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function qmerit_new_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'qmerit_new' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'qmerit_new' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'qmerit_new_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function qmerit_new_scripts() {
	wp_enqueue_style( 'qmerit_new-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'qmerit_new-style', 'rtl', 'replace' );

	wp_enqueue_script( 'qmerit_new-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'qmerit_new_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/*****
Theme Options
*/
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
}
// Allow SVG
add_filter( 'wp_check_filetype_and_ext', function($data, $file, $filename, $mimes) {

  global $wp_version;
  if ( $wp_version !== '4.7.1' ) {
     return $data;
  }

  $filetype = wp_check_filetype( $filename, $mimes );

  return [
      'ext'             => $filetype['ext'],
      'type'            => $filetype['type'],
      'proper_filename' => $data['proper_filename']
  ];

}, 10, 4 );

function cc_mime_types( $mimes ){
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter( 'upload_mimes', 'cc_mime_types' );

function fix_svg() {
  echo '<style type="text/css">
        .attachment-266x266, .thumbnail img {
             width: 100% !important;
             height: auto !important;
        }
        </style>';
}
add_action( 'admin_head', 'fix_svg' );

add_filter('wp_nav_menu_objects', 'my_wp_nav_menu_objects', 10, 2);

function my_wp_nav_menu_objects( $items, $args ) {
	// loop
	foreach( $items as &$item ) {
		// vars
		$text = get_field('menu_content', $item);
		// append icon
		if( $text ) {
			$item->title .= $text;
		}		
	}
	// return
	return $items;	
}


add_filter('intermediate_image_sizes_advanced', function($sizes) {
	unset( $sizes['large']); 
    unset( $sizes['thumbnail']);
    unset( $sizes['medium']);
    unset( $sizes['medium_large']);
    unset( $sizes['1536x1536']);
    unset( $sizes['2048x2048']);
    return $sizes;
});
function add_file_types_to_uploads($file_types){
$new_filetypes = array();
$new_filetypes['svg'] = 'image/svg+xml';
$file_types = array_merge($file_types, $new_filetypes );
return $file_types;
}
add_filter('upload_mimes', 'add_file_types_to_uploads');
add_filter('upload_mimes', 'add_custom_upload_mimes');
  function add_custom_upload_mimes($existing_mimes) {
  	$existing_mimes['otf'] = 'application/x-font-otf';
  	$existing_mimes['woff'] = 'application/x-font-woff';
  	$existing_mimes['ttf'] = 'application/x-font-ttf';
  	$existing_mimes['svg'] = 'image/svg+xml';
  	$existing_mimes['eot'] = 'application/vnd.ms-fontobject';
  	return $existing_mimes;
  }
function font_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  $mimes['woff'] = 'font/woff';
  $mimes['woff2'] = 'font/woff2';
  return $mimes;
}
add_filter('upload_mimes', 'font_mime_types');
add_action('acf/render_field_settings/type=image', 'add_default_value_to_image_field');
	function add_default_value_to_image_field($field) {
		acf_render_field_setting( $field, array(
			'label'			=> 'Default Image',
			'instructions'		=> 'Appears when creating a new post',
			'type'			=> 'image',
			'name'			=> 'default_value',
		));
	}
/**add_filter('acf/upload_prefilter/name=upload_font_file', 'font_upload_prefilter');
function font_upload_prefilterr($errors) {
 // add a filter to change the uplaod path
 add_filter('upload_dir', 'new_fonts_uploads_directory');
 return $errors;
}
function new_fonts_uploads_directory($uploads) {
 // here is where we change the path of the upload to whatever you want
 $uploads['path'] = $uploads['basedir'].'/fonts';
 $uploads['url'] = $uploads['baseurl'].'/fonts';
 $uploads['subdir'] = '';
 return $uploads;
}**/

add_filter( 'acf/upload_prefilter/name=upload_font_file', 'secure_upload_prefilter' );
add_filter( 'acf/prepare_field/name=upload_font_file', 'secure_files_field_display' );

function secure_upload_prefilter( $errors ) {

  add_filter( 'upload_dir', 'secure_upload_directory' );

  return $errors;

}

function secure_upload_directory( $param ) {
        
  //$folder = '/custom-fonts';

  $param['path'] = $param['basedir'].'/custom-fonts';
  $param['url'] = $param['baseurl'].'/custom-fonts';
  $param['subdir'] = '';

  return $param;

}

function secure_files_field_display( $field ) {

  // update paths accordingly before displaying link to file
  add_filter( 'upload_dir', 'secure_upload_directory' );

  return $field;

}
//Add custom fields for attachments

function kgal_add_custom_fields_to_artwork( $form_fields, $post ) {

    $form_fields['kgal_artwork_artist'] = array(
        'label'     => 'Artist',
        'input'     => 'html',
        'html'      => get_artists_dropdown( $post->ID ),
        'application'   => 'image',
        'exclusions'    => array( 'audio', 'video' ),
    );

    $form_fields['kgal_artwork_medium'] = array(
        'label'     => 'Medium',
        'input'     => 'text',
        'value'     => get_post_meta( $post->ID, 'kgal_artwork_medium', true ),
        'application'   => 'image',
        'exclusions'    => array( 'audio', 'video' ),
    );

    return $form_fields;
}

add_filter( 'attachment_fields_to_edit', 'kgal_add_custom_fields_to_artwork', 10, 2 );

function kgal_save_custom_fields_for_artwork( $post, $attachment ) {

    if( isset( $attachment['kgal_artwork_artist'] ) )
        update_post_meta( $post['ID'], 'kgal_artwork_artist', $attachment['kgal_artwork_artist'] );

    if( isset( $attachment['kgal_artwork_medium'] ) )
        update_post_meta( $post['ID'], 'kgal_artwork_medium', $attachment['kgal_artwork_medium'] );

    return $post;
}

add_filter( 'attachment_fields_to_save', 'kgal_save_custom_fields_for_artwork', 10, 2 );

// output artists dropdown
function get_artists_dropdown( $id ) {
        if( !$id )
                return;

        $artists = get_posts(
                array(
                        'post_type'             => 'oemlandingpages',
                        'posts_per_page'        => -1,
                        'post_status'           => 'publish',
                )
        );

        if( !$artists )
                return;

        $output = "<select name='attachments[{$id}][kgal_artwork_artist]' id='attachments-'.$id.'-kgal_artwork_artist'>";
        foreach( $artists as $artist )
                $output .= '<option ' . selected( get_post_meta( $id, "kgal_artwork_artist", true ), $artist->post_id, false ) . ' value="' . $artist->post_id . '">' . $artist->post_title . '</option>';
        $output .= '</select>';

        return $output;
}



/**
 * Add fonts to dropdown
 */

add_filter( 'media_view_settings', function( $settings ) {
    $settings['mimeTypes']['spinefonts'] = 'Fonts';
    return $settings;
});

/**
 * Filter posts where
 */

add_action( 'pre_get_posts', function( \WP_Query $q ) {

    if( 'spinefonts' === $q->get( 'post_mime_type' ) ) {
        // Remove the temp
        $q->set( 'post_mime_type', '' );
        // Mark this query as the new filter
        $q->set( 'spine_fonts_filter', true );

        add_filter( 'posts_where', function ( $where, \WP_Query $q )
        {
            if( $q->get( 'spine_fonts_filter' ) ){
                global $wpdb;
              
				$where .= ' AND post_mime_type IN("application/x-font-ttf","application/font-woff", "application/octet-stream") ';

            }
            return $where;
        }, 10, 2 );
    }
}, 1 );


function my_acf_load_value($value, $post_id, $field) {
    if (!empty($value)) {
      // if the value is exactly NULL it means
      // the field has never been updated
      // we don't want to change fields that have already been editied
      return $value;
    }
    // set the new field value
    $value = array(
      // add a nested array for each row
      array(
        // add an array item for each sub field (use field key - not name)
        'field_60d62f5fc6fcd' => 'What Is Electrification?',
        'field_60d62f53c6fcc' => '/what-is-electrification/'
      ),
	   array(
        // add an array item for each sub field (use field key - not name)
        'field_60d62f5fc6fcd' => 'EV Charger Installation',
        'field_60d62f53c6fcc' => '/ev-charger-installation/'
      ),
	   array(
        // add an array item for each sub field (use field key - not name)
        'field_60d62f5fc6fcd' => 'Partner with Us',
        'field_60d62f53c6fcc' => '/ev-charging-station-installation-partners/'
      ),
	   array(
        // add an array item for each sub field (use field key - not name)
        'field_60d62f5fc6fcd' => 'About Us',
        'field_60d62f53c6fcc' => '/energy-transition-leaders/'
      ),
	   array(
        // add an array item for each sub field (use field key - not name)
        'field_60d62f5fc6fcd' => 'ESG & Sustainability',
        'field_60d62f53c6fcc' => '/esg-sustainability/'
      )
    );   return $value;
  }
  add_filter('acf/load_value/name=helpful_links_oem', 'my_acf_load_value', 10, 3);