<?php
/**
 * Ben Miles Theme functions and definitions
 *
 * @package Ben_Miles
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

/**
 * Theme setup
 */
function benmiles_setup() {
    // Add default posts and comments RSS feed links to head
    add_theme_support( 'automatic-feed-links' );

    // Let WordPress manage the document title
    add_theme_support( 'title-tag' );

    // Enable support for Post Thumbnails
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 1200, 630, true );

    // Register navigation menus
    register_nav_menus(
        array(
            'primary' => esc_html__( 'Primary Menu', 'benmiles' ),
            'explore'  => esc_html__( 'Explore Footer Menu', 'benmiles' ),
            'resources'  => esc_html__( 'Resources Footer Menu', 'benmiles' )
        )
    );

    // Switch default core markup to output valid HTML5
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

    // Add theme support for custom logo
    add_theme_support(
        'custom-logo',
        array(
            'height'      => 100,
            'width'       => 400,
            'flex-height' => true,
            'flex-width'  => true,
        )
    );

    // Add support for full and wide align images
    add_theme_support( 'align-wide' );

    // Add support for responsive embeds
    add_theme_support( 'responsive-embeds' );

    // Add support for editor styles
    add_theme_support( 'editor-styles' );

    // Add support for WooCommerce
    add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'benmiles_setup' );

/**
 * Set the content width in pixels
 */
function benmiles_content_width() {
    $GLOBALS['content_width'] = apply_filters( 'benmiles_content_width', 1200 );
}
add_action( 'after_setup_theme', 'benmiles_content_width', 0 );

/**
 * Register widget areas
 */
function benmiles_widgets_init() {
    register_sidebar(
        array(
            'name'          => esc_html__( 'Sidebar', 'benmiles' ),
            'id'            => 'sidebar-1',
            'description'   => esc_html__( 'Add widgets here.', 'benmiles' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );

    register_sidebar(
        array(
            'name'          => esc_html__( 'Footer', 'benmiles' ),
            'id'            => 'footer-1',
            'description'   => esc_html__( 'Add footer widgets here.', 'benmiles' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );
}
add_action( 'widgets_init', 'benmiles_widgets_init' );

/**
 * Enqueue scripts and styles
 */
function benmiles_scripts() {
    // Enqueue main stylesheet
    wp_enqueue_style("theme-style", get_stylesheet_directory_uri() . "/style.css");

    wp_enqueue_script("theme-script", get_stylesheet_directory_uri() . "/assets/js/site.js", array("jquery"), "", TRUE);

    // Enqueue comment reply script
    // if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
    //     wp_enqueue_script( 'comment-reply' );
    // }
}
add_action( 'wp_enqueue_scripts', 'benmiles_scripts' );

/**
 * Custom excerpt length
 */
function benmiles_excerpt_length( $length ) {
    return 30;
}
add_filter( 'excerpt_length', 'benmiles_excerpt_length' );

/**
 * Custom excerpt more
 */
function benmiles_excerpt_more( $more ) {
    return '...';
}
add_filter( 'excerpt_more', 'benmiles_excerpt_more' );

/**
 * Custom template tags for this theme
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Load Gallery post type
 */
require get_template_directory() . '/inc/post-types/gallery-post-type.php';

/**
 * Load customizable theme options
 */
require get_template_directory() . '/inc/customizable_configs/configs.php';

function register_custom_page_templates($templates)
{
    // Define the directory where your templates are stored
    $template_dir = get_template_directory() . '/inc/page-templates/';

    // Get all files in the directory
    $files = scandir($template_dir);

    // Loop through the files and add PHP files as templates
    foreach ($files as $file) {
        if (pathinfo($file, PATHINFO_EXTENSION) === 'php') {
            // Generate a friendly name by removing the extension and converting dashes to spaces
            $template_name = ucfirst(str_replace(['-', '_'], ' ', pathinfo($file, PATHINFO_FILENAME)));

            // Add the template to the list - Fixed path to match actual directory
            $templates['inc/page-templates/' . $file] = $template_name;
        }
    }

    return $templates;
}
add_filter('theme_page_templates', 'register_custom_page_templates');

// Load the custom template if one is assigned
function load_custom_page_template($template)
{
    // Get the slug of the currently assigned page template
    $page_template = get_page_template_slug();

    // Check if the slug matches a template in your custom templates folder - Fixed path
    if ($page_template && strpos($page_template, 'inc/page-templates/') === 0) {
        // Construct the full path to the template file
        $custom_template = get_template_directory() . '/' . $page_template;

        // Check if the file exists
        if (file_exists($custom_template)) {
            return $custom_template;
        }
    }

    // Fallback to the default template if no match
    return $template;
}
add_filter('template_include', 'load_custom_page_template');

// Debug function to see which template is being loaded (remove after debugging)
function debug_template_loading($template) {
    if (current_user_can('administrator')) {
        $template_name = basename($template);
        $page_template = get_page_template_slug();
        error_log("Template being loaded: $template_name");
        error_log("Page template slug: $page_template");
    }
    return $template;
}
add_filter('template_include', 'debug_template_loading', 999);

function add_menu_link_class($atts, $item, $args) {
    if ($args->theme_location === 'explore' || $args->theme_location === 'resources') {
        $atts['class'] = 'paragraph-1';
    }
    return $atts;
}
add_filter('nav_menu_link_attributes', 'add_menu_link_class', 10, 3);
