<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

// This theme requires WordPress 5.3 or later.
if ( version_compare( $GLOBALS['wp_version'], '5.3', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
}

if ( ! function_exists( 'twenty_twenty_one_setup' ) ) {
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 *
	 * @since Twenty Twenty-One 1.0
	 *
	 * @return void
	 */
	function twenty_twenty_one_setup() {

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * This theme does not use a hard-coded <title> tag in the document head,
		 * WordPress will provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/**
		 * Add post-formats support.
		 */
		add_theme_support(
			'post-formats',
			array(
				'link',
				'aside',
				'gallery',
				'image',
				'quote',
				'status',
				'video',
				'audio',
				'chat',
			)
		);

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 1568, 9999 );

		register_nav_menus(
			array(
				'primary' => esc_html__( 'Primary menu', 'twentytwentyone' ),
				'footer'  => esc_html__( 'Secondary menu', 'twentytwentyone' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
				'navigation-widgets',
			)
		);

		/*
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		$logo_width  = 300;
		$logo_height = 100;

		add_theme_support(
			'custom-logo',
			array(
				'height'               => $logo_height,
				'width'                => $logo_width,
				'flex-width'           => true,
				'flex-height'          => true,
				'unlink-homepage-logo' => true,
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		// Add support for Block Styles.
		add_theme_support( 'wp-block-styles' );

		// Add support for full and wide align images.
		add_theme_support( 'align-wide' );

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );
		$background_color = get_theme_mod( 'background_color', 'D1E4DD' );
		if ( 127 > Twenty_Twenty_One_Custom_Colors::get_relative_luminance_from_hex( $background_color ) ) {
			add_theme_support( 'dark-editor-style' );
		}

		$editor_stylesheet_path = './assets/css/style-editor.css';

		// Note, the is_IE global variable is defined by WordPress and is used
		// to detect if the current browser is internet explorer.
		global $is_IE;
		if ( $is_IE ) {
			$editor_stylesheet_path = './assets/css/ie-editor.css';
		}

		// Enqueue editor styles.
		add_editor_style( $editor_stylesheet_path );

		// Add custom editor font sizes.
		add_theme_support(
			'editor-font-sizes',
			array(
				array(
					'name'      => esc_html__( 'Extra small', 'twentytwentyone' ),
					'shortName' => esc_html_x( 'XS', 'Font size', 'twentytwentyone' ),
					'size'      => 16,
					'slug'      => 'extra-small',
				),
				array(
					'name'      => esc_html__( 'Small', 'twentytwentyone' ),
					'shortName' => esc_html_x( 'S', 'Font size', 'twentytwentyone' ),
					'size'      => 18,
					'slug'      => 'small',
				),
				array(
					'name'      => esc_html__( 'Normal', 'twentytwentyone' ),
					'shortName' => esc_html_x( 'M', 'Font size', 'twentytwentyone' ),
					'size'      => 20,
					'slug'      => 'normal',
				),
				array(
					'name'      => esc_html__( 'Large', 'twentytwentyone' ),
					'shortName' => esc_html_x( 'L', 'Font size', 'twentytwentyone' ),
					'size'      => 24,
					'slug'      => 'large',
				),
				array(
					'name'      => esc_html__( 'Extra large', 'twentytwentyone' ),
					'shortName' => esc_html_x( 'XL', 'Font size', 'twentytwentyone' ),
					'size'      => 40,
					'slug'      => 'extra-large',
				),
				array(
					'name'      => esc_html__( 'Huge', 'twentytwentyone' ),
					'shortName' => esc_html_x( 'XXL', 'Font size', 'twentytwentyone' ),
					'size'      => 96,
					'slug'      => 'huge',
				),
				array(
					'name'      => esc_html__( 'Gigantic', 'twentytwentyone' ),
					'shortName' => esc_html_x( 'XXXL', 'Font size', 'twentytwentyone' ),
					'size'      => 144,
					'slug'      => 'gigantic',
				),
			)
		);

		// Custom background color.
		add_theme_support(
			'custom-background',
			array(
				'default-color' => 'd1e4dd',
			)
		);

		// Editor color palette.
		$black     = '#000000';
		$dark_gray = '#28303D';
		$gray      = '#39414D';
		$green     = '#D1E4DD';
		$blue      = '#D1DFE4';
		$purple    = '#D1D1E4';
		$red       = '#E4D1D1';
		$orange    = '#E4DAD1';
		$yellow    = '#EEEADD';
		$white     = '#FFFFFF';

		add_theme_support(
			'editor-color-palette',
			array(
				array(
					'name'  => esc_html__( 'Black', 'twentytwentyone' ),
					'slug'  => 'black',
					'color' => $black,
				),
				array(
					'name'  => esc_html__( 'Dark gray', 'twentytwentyone' ),
					'slug'  => 'dark-gray',
					'color' => $dark_gray,
				),
				array(
					'name'  => esc_html__( 'Gray', 'twentytwentyone' ),
					'slug'  => 'gray',
					'color' => $gray,
				),
				array(
					'name'  => esc_html__( 'Green', 'twentytwentyone' ),
					'slug'  => 'green',
					'color' => $green,
				),
				array(
					'name'  => esc_html__( 'Blue', 'twentytwentyone' ),
					'slug'  => 'blue',
					'color' => $blue,
				),
				array(
					'name'  => esc_html__( 'Purple', 'twentytwentyone' ),
					'slug'  => 'purple',
					'color' => $purple,
				),
				array(
					'name'  => esc_html__( 'Red', 'twentytwentyone' ),
					'slug'  => 'red',
					'color' => $red,
				),
				array(
					'name'  => esc_html__( 'Orange', 'twentytwentyone' ),
					'slug'  => 'orange',
					'color' => $orange,
				),
				array(
					'name'  => esc_html__( 'Yellow', 'twentytwentyone' ),
					'slug'  => 'yellow',
					'color' => $yellow,
				),
				array(
					'name'  => esc_html__( 'White', 'twentytwentyone' ),
					'slug'  => 'white',
					'color' => $white,
				),
			)
		);

		add_theme_support(
			'editor-gradient-presets',
			array(
				array(
					'name'     => esc_html__( 'Purple to yellow', 'twentytwentyone' ),
					'gradient' => 'linear-gradient(160deg, ' . $purple . ' 0%, ' . $yellow . ' 100%)',
					'slug'     => 'purple-to-yellow',
				),
				array(
					'name'     => esc_html__( 'Yellow to purple', 'twentytwentyone' ),
					'gradient' => 'linear-gradient(160deg, ' . $yellow . ' 0%, ' . $purple . ' 100%)',
					'slug'     => 'yellow-to-purple',
				),
				array(
					'name'     => esc_html__( 'Green to yellow', 'twentytwentyone' ),
					'gradient' => 'linear-gradient(160deg, ' . $green . ' 0%, ' . $yellow . ' 100%)',
					'slug'     => 'green-to-yellow',
				),
				array(
					'name'     => esc_html__( 'Yellow to green', 'twentytwentyone' ),
					'gradient' => 'linear-gradient(160deg, ' . $yellow . ' 0%, ' . $green . ' 100%)',
					'slug'     => 'yellow-to-green',
				),
				array(
					'name'     => esc_html__( 'Red to yellow', 'twentytwentyone' ),
					'gradient' => 'linear-gradient(160deg, ' . $red . ' 0%, ' . $yellow . ' 100%)',
					'slug'     => 'red-to-yellow',
				),
				array(
					'name'     => esc_html__( 'Yellow to red', 'twentytwentyone' ),
					'gradient' => 'linear-gradient(160deg, ' . $yellow . ' 0%, ' . $red . ' 100%)',
					'slug'     => 'yellow-to-red',
				),
				array(
					'name'     => esc_html__( 'Purple to red', 'twentytwentyone' ),
					'gradient' => 'linear-gradient(160deg, ' . $purple . ' 0%, ' . $red . ' 100%)',
					'slug'     => 'purple-to-red',
				),
				array(
					'name'     => esc_html__( 'Red to purple', 'twentytwentyone' ),
					'gradient' => 'linear-gradient(160deg, ' . $red . ' 0%, ' . $purple . ' 100%)',
					'slug'     => 'red-to-purple',
				),
			)
		);

		/*
		* Adds starter content to highlight the theme on fresh sites.
		* This is done conditionally to avoid loading the starter content on every
		* page load, as it is a one-off operation only needed once in the customizer.
		*/
		if ( is_customize_preview() ) {
			require get_template_directory() . '/inc/starter-content.php';
			add_theme_support( 'starter-content', twenty_twenty_one_get_starter_content() );
		}

		// Add support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );

		// Add support for custom line height controls.
		add_theme_support( 'custom-line-height' );

		// Add support for link color control.
		add_theme_support( 'link-color' );

		// Add support for experimental cover block spacing.
		add_theme_support( 'custom-spacing' );

		// Add support for custom units.
		// This was removed in WordPress 5.6 but is still required to properly support WP 5.5.
		add_theme_support( 'custom-units' );

		// Remove feed icon link from legacy RSS widget.
		add_filter( 'rss_widget_feed_link', '__return_empty_string' );
	}
}
add_action( 'after_setup_theme', 'twenty_twenty_one_setup' );

/**
 * Registers widget area.
 *
 * @since Twenty Twenty-One 1.0
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 *
 * @return void
 */
function twenty_twenty_one_widgets_init() {

	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer', 'twentytwentyone' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here to appear in your footer.', 'twentytwentyone' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'twenty_twenty_one_widgets_init' );

/**
 * Sets the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @since Twenty Twenty-One 1.0
 *
 * @global int $content_width Content width.
 *
 * @return void
 */
function twenty_twenty_one_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'twenty_twenty_one_content_width', 750 );
}
add_action( 'after_setup_theme', 'twenty_twenty_one_content_width', 0 );

/**
 * Enqueues scripts and styles.
 *
 * @since Twenty Twenty-One 1.0
 *
 * @global bool       $is_IE
 * @global WP_Scripts $wp_scripts
 *
 * @return void
 */
function twenty_twenty_one_scripts() {
	// Note, the is_IE global variable is defined by WordPress and is used
	// to detect if the current browser is internet explorer.
	global $is_IE, $wp_scripts;
	if ( $is_IE ) {
		// If IE 11 or below, use a flattened stylesheet with static values replacing CSS Variables.
		wp_enqueue_style( 'twenty-twenty-one-style', get_template_directory_uri() . '/assets/css/ie.css', array(), wp_get_theme()->get( 'Version' ) );
	} else {
		// If not IE, use the standard stylesheet.
		wp_enqueue_style( 'twenty-twenty-one-style', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get( 'Version' ) );
	}

	// RTL styles.
	wp_style_add_data( 'twenty-twenty-one-style', 'rtl', 'replace' );

	// Print styles.
	wp_enqueue_style( 'twenty-twenty-one-print-style', get_template_directory_uri() . '/assets/css/print.css', array(), wp_get_theme()->get( 'Version' ), 'print' );

	// Threaded comment reply styles.
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	// Register the IE11 polyfill file.
	wp_register_script(
		'twenty-twenty-one-ie11-polyfills-asset',
		get_template_directory_uri() . '/assets/js/polyfills.js',
		array(),
		wp_get_theme()->get( 'Version' ),
		array( 'in_footer' => true )
	);

	// Register the IE11 polyfill loader.
	wp_register_script(
		'twenty-twenty-one-ie11-polyfills',
		null,
		array(),
		wp_get_theme()->get( 'Version' ),
		array( 'in_footer' => true )
	);
	wp_add_inline_script(
		'twenty-twenty-one-ie11-polyfills',
		wp_get_script_polyfill(
			$wp_scripts,
			array(
				'Element.prototype.matches && Element.prototype.closest && window.NodeList && NodeList.prototype.forEach' => 'twenty-twenty-one-ie11-polyfills-asset',
			)
		)
	);

	// Main navigation scripts.
	if ( has_nav_menu( 'primary' ) ) {
		wp_enqueue_script(
			'twenty-twenty-one-primary-navigation-script',
			get_template_directory_uri() . '/assets/js/primary-navigation.js',
			array( 'twenty-twenty-one-ie11-polyfills' ),
			wp_get_theme()->get( 'Version' ),
			array(
				'in_footer' => false, // Because involves header.
				'strategy'  => 'defer',
			)
		);
	}

	// Responsive embeds script.
	wp_enqueue_script(
		'twenty-twenty-one-responsive-embeds-script',
		get_template_directory_uri() . '/assets/js/responsive-embeds.js',
		array( 'twenty-twenty-one-ie11-polyfills' ),
		wp_get_theme()->get( 'Version' ),
		array( 'in_footer' => true )
	);
}
add_action( 'wp_enqueue_scripts', 'twenty_twenty_one_scripts' );

/**
 * Enqueues block editor script.
 *
 * @since Twenty Twenty-One 1.0
 *
 * @return void
 */
function twentytwentyone_block_editor_script() {

	wp_enqueue_script( 'twentytwentyone-editor', get_theme_file_uri( '/assets/js/editor.js' ), array( 'wp-blocks', 'wp-dom' ), wp_get_theme()->get( 'Version' ), array( 'in_footer' => true ) );
}

add_action( 'enqueue_block_editor_assets', 'twentytwentyone_block_editor_script' );

/**
 * Fixes skip link focus in IE11.
 *
 * This does not enqueue the script because it is tiny and because it is only for IE11,
 * thus it does not warrant having an entire dedicated blocking script being loaded.
 *
 * @since Twenty Twenty-One 1.0
 * @deprecated Twenty Twenty-One 1.9 Removed from wp_print_footer_scripts action.
 *
 * @link https://git.io/vWdr2
 */
function twenty_twenty_one_skip_link_focus_fix() {

	// If SCRIPT_DEBUG is defined and true, print the unminified file.
	if ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) {
		echo '<script>';
		include get_template_directory() . '/assets/js/skip-link-focus-fix.js';
		echo '</script>';
	} else {
		// The following is minified via `npx terser --compress --mangle -- assets/js/skip-link-focus-fix.js`.
		?>
		<script>
		/(trident|msie)/i.test(navigator.userAgent)&&document.getElementById&&window.addEventListener&&window.addEventListener("hashchange",(function(){var t,e=location.hash.substring(1);/^[A-z0-9_-]+$/.test(e)&&(t=document.getElementById(e))&&(/^(?:a|select|input|button|textarea)$/i.test(t.tagName)||(t.tabIndex=-1),t.focus())}),!1);
		</script>
		<?php
	}
}

/**
 * Enqueues non-latin language styles.
 *
 * @since Twenty Twenty-One 1.0
 *
 * @return void
 */
function twenty_twenty_one_non_latin_languages() {
	$custom_css = twenty_twenty_one_get_non_latin_css( 'front-end' );

	if ( $custom_css ) {
		wp_add_inline_style( 'twenty-twenty-one-style', $custom_css );
	}
}
add_action( 'wp_enqueue_scripts', 'twenty_twenty_one_non_latin_languages' );

// SVG Icons class.
require get_template_directory() . '/classes/class-twenty-twenty-one-svg-icons.php';

// Custom color classes.
require get_template_directory() . '/classes/class-twenty-twenty-one-custom-colors.php';
new Twenty_Twenty_One_Custom_Colors();

// Enhance the theme by hooking into WordPress.
require get_template_directory() . '/inc/template-functions.php';

// Menu functions and filters.
require get_template_directory() . '/inc/menu-functions.php';

// Custom template tags for the theme.
require get_template_directory() . '/inc/template-tags.php';

// Customizer additions.
require get_template_directory() . '/classes/class-twenty-twenty-one-customize.php';
new Twenty_Twenty_One_Customize();

// Block Patterns.
require get_template_directory() . '/inc/block-patterns.php';

// Block Styles.
require get_template_directory() . '/inc/block-styles.php';

// Dark Mode.
require_once get_template_directory() . '/classes/class-twenty-twenty-one-dark-mode.php';
new Twenty_Twenty_One_Dark_Mode();

/**
 * Enqueues scripts for the customizer preview.
 *
 * @since Twenty Twenty-One 1.0
 *
 * @return void
 */
function twentytwentyone_customize_preview_init() {
	wp_enqueue_script(
		'twentytwentyone-customize-helpers',
		get_theme_file_uri( '/assets/js/customize-helpers.js' ),
		array(),
		wp_get_theme()->get( 'Version' ),
		array( 'in_footer' => true )
	);

	wp_enqueue_script(
		'twentytwentyone-customize-preview',
		get_theme_file_uri( '/assets/js/customize-preview.js' ),
		array( 'customize-preview', 'customize-selective-refresh', 'jquery', 'twentytwentyone-customize-helpers' ),
		wp_get_theme()->get( 'Version' ),
		array( 'in_footer' => true )
	);
}
add_action( 'customize_preview_init', 'twentytwentyone_customize_preview_init' );

/**
 * Enqueues scripts for the customizer.
 *
 * @since Twenty Twenty-One 1.0
 *
 * @return void
 */
function twentytwentyone_customize_controls_enqueue_scripts() {

	wp_enqueue_script(
		'twentytwentyone-customize-helpers',
		get_theme_file_uri( '/assets/js/customize-helpers.js' ),
		array(),
		wp_get_theme()->get( 'Version' ),
		array( 'in_footer' => true )
	);
}
add_action( 'customize_controls_enqueue_scripts', 'twentytwentyone_customize_controls_enqueue_scripts' );

/**
 * Calculates classes for the main <html> element.
 *
 * @since Twenty Twenty-One 1.0
 *
 * @return void
 */
function twentytwentyone_the_html_classes() {
	/**
	 * Filters the classes for the main <html> element.
	 *
	 * @since Twenty Twenty-One 1.0
	 *
	 * @param string The list of classes. Default empty string.
	 */
	$classes = apply_filters( 'twentytwentyone_html_classes', '' );
	if ( ! $classes ) {
		return;
	}
	echo 'class="' . esc_attr( $classes ) . '"';
}

/**
 * Adds "is-IE" class to body if the user is on Internet Explorer.
 *
 * @since Twenty Twenty-One 1.0
 *
 * @return void
 */
function twentytwentyone_add_ie_class() {
	?>
	<script>
	if ( -1 !== navigator.userAgent.indexOf( 'MSIE' ) || -1 !== navigator.appVersion.indexOf( 'Trident/' ) ) {
		document.body.classList.add( 'is-IE' );
	}
	</script>
	<?php
}
add_action( 'wp_footer', 'twentytwentyone_add_ie_class' );

if ( ! function_exists( 'wp_get_list_item_separator' ) ) :
	/**
	 * Retrieves the list item separator based on the locale.
	 *
	 * Added for backward compatibility to support pre-6.0.0 WordPress versions.
	 *
	 * @since 6.0.0
	 */
	function wp_get_list_item_separator() {
		/* translators: Used between list items, there is a space after the comma. */
		return __( ', ', 'twentytwentyone' );
	}
endif;

require_once('bs4navwalker.php');
include('wp_bootstrap_navwalker.php');
/* SVG Support */
function add_file_types_to_uploads($file_types){
$new_filetypes = array();
$new_filetypes['svg'] = 'image/svg+xml';
$file_types = array_merge($file_types, $new_filetypes );
return $file_types;
}
add_filter('upload_mimes', 'add_file_types_to_uploads');

function register_technologies() {
register_post_type('technologies',
		array(	'label' => 'Technologies',
				'public' => true,'show_ui' => true,
				'show_in_menu' => true,
				'capability_type' => 'post',
				'hierarchical' => false,
				'rewrite' => array('slug' => ''),
				'query_var' => true,
				'has_archive' => false,
				'supports' => array('title','editor','thumbnail'),
				'menu_position' => 6,
				) );
}
//add_action('init', 'register_technologies');

function register_services() {
register_post_type('services',
		array(	'label' => 'Services',
				'public' => true,'show_ui' => true,
				'show_in_menu' => true,
				'capability_type' => 'post',
				'hierarchical' => false,
				'rewrite' => array('slug' => ''),
				'query_var' => true,
				'has_archive' => false,
				'supports' => array('title','editor','thumbnail'),
				'menu_position' => 6,
				) );
}
add_action('init', 'register_services');

function register_studies() {
register_post_type('case-studies',
		array(	'label' => 'Case studies',
				'public' => true,
				'show_ui' => true,
				'show_in_menu' => true,
				'capability_type' => 'post',
				'hierarchical' => false,
				'rewrite' => array('slug' => ''),
				'query_var' => true,
				'has_archive' => true,
				'supports' => array('title','editor','thumbnail','excerpt'),
				'menu_position' => 6,
				) );
}
add_action('init', 'register_studies');

function register_industries() {
register_post_type('industries',
		array(	'label' => 'Industries',
				'public' => true,'show_ui' => true,
				'show_in_menu' => true,
				'capability_type' => 'post',
				'hierarchical' => false,
				'rewrite' => array('slug' => ''),
				'query_var' => true,
				'has_archive' => false,
				'supports' => array('title','editor','thumbnail'),
				'menu_position' => 6,
				) );
}
//add_action('init', 'register_industries');



//////////////////// Feb 21 ///////////////////

// Register Custom Taxonomy
function case_studies_tags_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Services Tags', 'Taxonomy General Name', 'blueorange' ),
		'singular_name'              => _x( 'Tag', 'Taxonomy Singular Name', 'blueorange' ),
		'menu_name'                  => __( 'Services Tags', 'blueorange' ),
		'all_items'                  => __( 'All Items', 'blueorange' ),
		'parent_item'                => __( 'Parent Item', 'blueorange' ),
		'parent_item_colon'          => __( 'Parent Item:', 'blueorange' ),
		'new_item_name'              => __( 'New Item Name', 'blueorange' ),
		'add_new_item'               => __( 'Add New Item', 'blueorange' ),
		'edit_item'                  => __( 'Edit Item', 'blueorange' ),
		'update_item'                => __( 'Update Item', 'blueorange' ),
		'view_item'                  => __( 'View Item', 'blueorange' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'blueorange' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'blueorange' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'blueorange' ),
		'popular_items'              => __( 'Popular Items', 'blueorange' ),
		'search_items'               => __( 'Search Items', 'blueorange' ),
		'not_found'                  => __( 'Not Found', 'blueorange' ),
		'no_terms'                   => __( 'No items', 'blueorange' ),
		'items_list'                 => __( 'Items list', 'blueorange' ),
		'items_list_navigation'      => __( 'Items list navigation', 'blueorange' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'case_studies_tags', array( 'case-studies' ), $args );

}
add_action( 'init', 'case_studies_tags_taxonomy', 0 );

// Register Custom Taxonomy
function technology_studies_tags_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Technology Tags', 'Taxonomy General Name', 'blueorange' ),
		'singular_name'              => _x( 'Tag', 'Taxonomy Singular Name', 'blueorange' ),
		'menu_name'                  => __( 'Technology Tags', 'blueorange' ),
		'all_items'                  => __( 'All Items', 'blueorange' ),
		'parent_item'                => __( 'Parent Item', 'blueorange' ),
		'parent_item_colon'          => __( 'Parent Item:', 'blueorange' ),
		'new_item_name'              => __( 'New Item Name', 'blueorange' ),
		'add_new_item'               => __( 'Add New Item', 'blueorange' ),
		'edit_item'                  => __( 'Edit Item', 'blueorange' ),
		'update_item'                => __( 'Update Item', 'blueorange' ),
		'view_item'                  => __( 'View Item', 'blueorange' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'blueorange' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'blueorange' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'blueorange' ),
		'popular_items'              => __( 'Popular Items', 'blueorange' ),
		'search_items'               => __( 'Search Items', 'blueorange' ),
		'not_found'                  => __( 'Not Found', 'blueorange' ),
		'no_terms'                   => __( 'No items', 'blueorange' ),
		'items_list'                 => __( 'Items list', 'blueorange' ),
		'items_list_navigation'      => __( 'Items list navigation', 'blueorange' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'technology_studies_tags', array( 'case-studies' ), $args );

}
add_action( 'init', 'technology_studies_tags_taxonomy', 0 );


// Register Custom Taxonomy
function industries_studies_tags_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Industries Tags', 'Taxonomy General Name', 'blueorange' ),
		'singular_name'              => _x( 'Tag', 'Taxonomy Singular Name', 'blueorange' ),
		'menu_name'                  => __( 'Industries Tags', 'blueorange' ),
		'all_items'                  => __( 'All Items', 'blueorange' ),
		'parent_item'                => __( 'Parent Item', 'blueorange' ),
		'parent_item_colon'          => __( 'Parent Item:', 'blueorange' ),
		'new_item_name'              => __( 'New Item Name', 'blueorange' ),
		'add_new_item'               => __( 'Add New Item', 'blueorange' ),
		'edit_item'                  => __( 'Edit Item', 'blueorange' ),
		'update_item'                => __( 'Update Item', 'blueorange' ),
		'view_item'                  => __( 'View Item', 'blueorange' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'blueorange' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'blueorange' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'blueorange' ),
		'popular_items'              => __( 'Popular Items', 'blueorange' ),
		'search_items'               => __( 'Search Items', 'blueorange' ),
		'not_found'                  => __( 'Not Found', 'blueorange' ),
		'no_terms'                   => __( 'No items', 'blueorange' ),
		'items_list'                 => __( 'Items list', 'blueorange' ),
		'items_list_navigation'      => __( 'Items list navigation', 'blueorange' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'industries_studies_tags', array( 'case-studies' ), $args );

}
add_action( 'init', 'industries_studies_tags_taxonomy', 0 );


// Register Custom Post Type
function blog_custom_post_type() {

	$labels = array(
		'name'                  => _x( 'Blogs', 'Post Type General Name', 'blueorange' ),
		'singular_name'         => _x( 'Blog', 'Post Type Singular Name', 'blueorange' ),
		'menu_name'             => __( 'Blogs', 'blueorange' ),
		'name_admin_bar'        => __( 'Post Type', 'blueorange' ),
		'archives'              => __( 'Item Archives', 'blueorange' ),
		'attributes'            => __( 'Item Attributes', 'blueorange' ),
		'parent_item_colon'     => __( 'Parent Item:', 'blueorange' ),
		'all_items'             => __( 'All Items', 'blueorange' ),
		'add_new_item'          => __( 'Add New Item', 'blueorange' ),
		'add_new'               => __( 'Add New', 'blueorange' ),
		'new_item'              => __( 'New Item', 'blueorange' ),
		'edit_item'             => __( 'Edit Item', 'blueorange' ),
		'update_item'           => __( 'Update Item', 'blueorange' ),
		'view_item'             => __( 'View Item', 'blueorange' ),
		'view_items'            => __( 'View Items', 'blueorange' ),
		'search_items'          => __( 'Search Item', 'blueorange' ),
		'not_found'             => __( 'Not found', 'blueorange' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'blueorange' ),
		'featured_image'        => __( 'Featured Image', 'blueorange' ),
		'set_featured_image'    => __( 'Set featured image', 'blueorange' ),
		'remove_featured_image' => __( 'Remove featured image', 'blueorange' ),
		'use_featured_image'    => __( 'Use as featured image', 'blueorange' ),
		'insert_into_item'      => __( 'Insert into item', 'blueorange' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'blueorange' ),
		'items_list'            => __( 'Items list', 'blueorange' ),
		'items_list_navigation' => __( 'Items list navigation', 'blueorange' ),
		'filter_items_list'     => __( 'Filter items list', 'blueorange' ),
	);
	$args = array(
		'label'                 => __( 'Blog', 'blueorange' ),
		'description'           => __( 'Post Type Description', 'blueorange' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array( 'blog_tag' ),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'blog', $args );

}
add_action( 'init', 'blog_custom_post_type', 0 );


// Register Custom Taxonomy
function blogs_tags_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Service Tags', 'Taxonomy General Name', 'blueorange' ),
		'singular_name'              => _x( 'Tag', 'Taxonomy Singular Name', 'blueorange' ),
		'menu_name'                  => __( 'Service Tags', 'blueorange' ),
		'all_items'                  => __( 'All Items', 'blueorange' ),
		'parent_item'                => __( 'Parent Item', 'blueorange' ),
		'parent_item_colon'          => __( 'Parent Item:', 'blueorange' ),
		'new_item_name'              => __( 'New Item Name', 'blueorange' ),
		'add_new_item'               => __( 'Add New Item', 'blueorange' ),
		'edit_item'                  => __( 'Edit Item', 'blueorange' ),
		'update_item'                => __( 'Update Item', 'blueorange' ),
		'view_item'                  => __( 'View Item', 'blueorange' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'blueorange' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'blueorange' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'blueorange' ),
		'popular_items'              => __( 'Popular Items', 'blueorange' ),
		'search_items'               => __( 'Search Items', 'blueorange' ),
		'not_found'                  => __( 'Not Found', 'blueorange' ),
		'no_terms'                   => __( 'No items', 'blueorange' ),
		'items_list'                 => __( 'Items list', 'blueorange' ),
		'items_list_navigation'      => __( 'Items list navigation', 'blueorange' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'blog_tags', array( 'blog' ), $args );

}
add_action( 'init', 'blogs_tags_taxonomy', 0 );

// Register Custom Taxonomy
function blogs_technology_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Technology Tags', 'Taxonomy General Name', 'blueorange' ),
		'singular_name'              => _x( 'Tag', 'Taxonomy Singular Name', 'blueorange' ),
		'menu_name'                  => __( 'Technology Tags', 'blueorange' ),
		'all_items'                  => __( 'All Items', 'blueorange' ),
		'parent_item'                => __( 'Parent Item', 'blueorange' ),
		'parent_item_colon'          => __( 'Parent Item:', 'blueorange' ),
		'new_item_name'              => __( 'New Item Name', 'blueorange' ),
		'add_new_item'               => __( 'Add New Item', 'blueorange' ),
		'edit_item'                  => __( 'Edit Item', 'blueorange' ),
		'update_item'                => __( 'Update Item', 'blueorange' ),
		'view_item'                  => __( 'View Item', 'blueorange' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'blueorange' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'blueorange' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'blueorange' ),
		'popular_items'              => __( 'Popular Items', 'blueorange' ),
		'search_items'               => __( 'Search Items', 'blueorange' ),
		'not_found'                  => __( 'Not Found', 'blueorange' ),
		'no_terms'                   => __( 'No items', 'blueorange' ),
		'items_list'                 => __( 'Items list', 'blueorange' ),
		'items_list_navigation'      => __( 'Items list navigation', 'blueorange' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'technology_tags', array( 'blog' ), $args );

}
add_action( 'init', 'blogs_technology_taxonomy', 0 );


// Register Custom Taxonomy
function blogs_industries_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Industries Tags', 'Taxonomy General Name', 'blueorange' ),
		'singular_name'              => _x( 'Tag', 'Taxonomy Singular Name', 'blueorange' ),
		'menu_name'                  => __( 'Industries Tags', 'blueorange' ),
		'all_items'                  => __( 'All Items', 'blueorange' ),
		'parent_item'                => __( 'Parent Item', 'blueorange' ),
		'parent_item_colon'          => __( 'Parent Item:', 'blueorange' ),
		'new_item_name'              => __( 'New Item Name', 'blueorange' ),
		'add_new_item'               => __( 'Add New Item', 'blueorange' ),
		'edit_item'                  => __( 'Edit Item', 'blueorange' ),
		'update_item'                => __( 'Update Item', 'blueorange' ),
		'view_item'                  => __( 'View Item', 'blueorange' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'blueorange' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'blueorange' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'blueorange' ),
		'popular_items'              => __( 'Popular Items', 'blueorange' ),
		'search_items'               => __( 'Search Items', 'blueorange' ),
		'not_found'                  => __( 'Not Found', 'blueorange' ),
		'no_terms'                   => __( 'No items', 'blueorange' ),
		'items_list'                 => __( 'Items list', 'blueorange' ),
		'items_list_navigation'      => __( 'Items list navigation', 'blueorange' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'industries_tags', array( 'blog' ), $args );

}
add_action( 'init', 'blogs_industries_taxonomy', 0 );

// Extend Search
function search_filter($query) {
    if ( !is_admin() && $query->is_main_query() ) {
        if ( $query->is_search ) {

        	$blog_tags = $techtags = $indtags = [];
        	if ( isset( $_GET['post_type'] ) ) {
				$query->set( 'post_type', $_GET['post_type'] );
			}
            
            if ( isset( $_GET['tags'] ) && (count($_GET['tags']) > 0) ) {
            	$blog_tags = $_GET['tags'];
            	$tax_blog_tags = $_GET['tax_blog_tags'];

                $query->set( $tax_blog_tags, $blog_tags );
                //$query->set( 'blog_tags', $blog_tags );
            }
			
            if ( isset( $_GET['techtags'] ) && (count($_GET['techtags']) > 0) ) {
            	$techtags = $_GET['techtags'];
            	$tax_technology_tags = $_GET['tax_technology_tags'];

                $query->set( $tax_technology_tags, $techtags );
                //$query->set( 'technology_tags', $techtags );

            }
			
            if ( isset( $_GET['indtags'] ) && (count($_GET['indtags']) > 0) ) {
            	$indtags = $_GET['indtags'];
            	$tax_industries_tags = $_GET['tax_industries_tags'];
            	//$indtag_name = $_GET['indtag_name'];

                $query->set( $tax_industries_tags, $indtags );
                //$query->set( 'industries_tags', $indtags );
            }
		} 
	} 
}
add_action('pre_get_posts','search_filter');



//[case-studies-logos]
add_shortcode( 'case-studies-logos', 'case_studies_logos' );
function case_studies_logos() {
	global $post;
	$post_id = $post->ID;

	$html = '';

	if( have_rows('conclusion_logos', $post_id) ): 	    
		$html .= '<div class="conclusion_logos">';
			$html .= '<div class="conclusion_carousel owl-carousel">';
		    while( have_rows('conclusion_logos', $post_id) ): the_row(); 
		       	$html .= '<div class="item">';
			       	$html .= '<span class="cl_icon">';
			        	$html .= '<img src="'.get_sub_field('logo').'">';
			        $html .= '</span>';
			    $html .= '</div>';
		    endwhile; 
		    $html .= '</div>';
	    $html .= '</div>';
	endif; 

	return $html;
}



add_action('admin_head', 'blueorange_admin_CSS');

function blueorange_admin_CSS() {
  echo '<style>
    #acf-group_66433bc9ed4ab ul.acf-radio-list.acf-bl li img {
	    width: 200px;
	}

	body.index-php .acf-admin-notice.notice.acf-escaped-html-notice.notice-error, body.plugins-php .acf-admin-notice.notice.acf-escaped-html-notice.notice-error {
	    display: none;
	}
	
  </style>';
}

function scroll_to_top_on_load() {
    ?>
    <script type="text/javascript">
        window.addEventListener('load', function () {
            window.scrollTo(0, 0);
        });
    </script>
    <?php
}
add_action('wp_footer', 'scroll_to_top_on_load');
