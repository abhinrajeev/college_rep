<?php
/**
 * College Theme Functions
 *
 * @package CollegeTheme
 * @version 1.0.0
 */

// Prevent direct access
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

define( 'COLLEGE_THEME_VERSION', '1.0.0' );
define( 'COLLEGE_THEME_DIR', get_template_directory() );
define( 'COLLEGE_THEME_URI', get_template_directory_uri() );

// ============================================================
// THEME SETUP
// ============================================================
function college_theme_setup() {
    load_theme_textdomain( 'college-theme', COLLEGE_THEME_DIR . '/languages' );

    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', array(
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script'
    ));
    add_theme_support( 'customize-selective-refresh-widgets' );
    add_theme_support( 'wp-block-styles' );
    add_theme_support( 'responsive-embeds' );
    add_theme_support( 'custom-logo', array(
        'height'      => 80,
        'width'       => 200,
        'flex-height' => true,
        'flex-width'  => true,
    ));

    // Custom image sizes
    add_image_size( 'college-hero',     1920, 1080, true );
    add_image_size( 'college-card',     800,  500,  true );
    add_image_size( 'college-thumb',    400,  300,  true );
    add_image_size( 'college-faculty',  400,  480,  true );
    add_image_size( 'college-square',   400,  400,  true );

    // Navigation menus
    register_nav_menus( array(
        'primary'   => esc_html__( 'Primary Menu',   'college-theme' ),
        'footer_1'  => esc_html__( 'Footer Menu 1',  'college-theme' ),
        'footer_2'  => esc_html__( 'Footer Menu 2',  'college-theme' ),
    ));
}
add_action( 'after_setup_theme', 'college_theme_setup' );

// ============================================================
// ENQUEUE SCRIPTS & STYLES
// ============================================================
function college_theme_scripts() {
    // Google Fonts
    wp_enqueue_style(
        'college-google-fonts',
        'https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Source+Sans+Pro:wght@300;400;600;700&display=swap',
        array(), null
    );

    // Font Awesome
    wp_enqueue_style(
        'font-awesome',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css',
        array(), '6.4.0'
    );

    // Main stylesheet
    wp_enqueue_style(
        'college-theme-style',
        get_stylesheet_uri(),
        array(), COLLEGE_THEME_VERSION
    );

    // Main JS
    wp_enqueue_script(
        'college-theme-main',
        COLLEGE_THEME_URI . '/js/main.js',
        array('jquery'), COLLEGE_THEME_VERSION, true
    );

    // Pass PHP variables to JS
    wp_localize_script( 'college-theme-main', 'collegeTheme', array(
        'ajaxUrl' => admin_url( 'admin-ajax.php' ),
        'nonce'   => wp_create_nonce( 'college_nonce' ),
        'homeUrl' => home_url(),
    ));

    // Comments
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'college_theme_scripts' );

// ============================================================
// CONTENT WIDTH
// ============================================================
function college_theme_content_width() {
    $GLOBALS['content_width'] = 1200;
}
add_action( 'after_setup_theme', 'college_theme_content_width', 0 );

// ============================================================
// REGISTER WIDGET AREAS
// ============================================================
function college_theme_widgets_init() {
    $sidebars = array(
        array(
            'name'          => esc_html__( 'Main Sidebar', 'college-theme' ),
            'id'            => 'sidebar-1',
            'description'   => esc_html__( 'Widgets for the main sidebar.', 'college-theme' ),
        ),
        array(
            'name'          => esc_html__( 'Footer Column 1', 'college-theme' ),
            'id'            => 'footer-1',
            'description'   => '',
        ),
        array(
            'name'          => esc_html__( 'Footer Column 2', 'college-theme' ),
            'id'            => 'footer-2',
            'description'   => '',
        ),
        array(
            'name'          => esc_html__( 'Footer Column 3', 'college-theme' ),
            'id'            => 'footer-3',
            'description'   => '',
        ),
    );

    foreach ( $sidebars as $sidebar ) {
        register_sidebar( array_merge( $sidebar, array(
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )));
    }
}
add_action( 'widgets_init', 'college_theme_widgets_init' );

// ============================================================
// CUSTOM POST TYPES
// ============================================================
function college_theme_cpts() {
    // Programs / Courses
    register_post_type( 'program', array(
        'labels' => array(
            'name'          => __( 'Programs',    'college-theme' ),
            'singular_name' => __( 'Program',     'college-theme' ),
            'add_new'       => __( 'Add Program', 'college-theme' ),
            'add_new_item'  => __( 'Add New Program', 'college-theme' ),
            'edit_item'     => __( 'Edit Program', 'college-theme' ),
        ),
        'public'        => true,
        'has_archive'   => true,
        'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields' ),
        'menu_icon'     => 'dashicons-welcome-learn-more',
        'rewrite'       => array( 'slug' => 'programs' ),
        'show_in_rest'  => true,
    ));

    // Faculty
    register_post_type( 'faculty', array(
        'labels' => array(
            'name'          => __( 'Faculty',        'college-theme' ),
            'singular_name' => __( 'Faculty Member', 'college-theme' ),
            'add_new'       => __( 'Add Faculty',    'college-theme' ),
        ),
        'public'        => true,
        'has_archive'   => true,
        'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields' ),
        'menu_icon'     => 'dashicons-groups',
        'rewrite'       => array( 'slug' => 'faculty' ),
        'show_in_rest'  => true,
    ));

    // Events
    register_post_type( 'event', array(
        'labels' => array(
            'name'          => __( 'Events',    'college-theme' ),
            'singular_name' => __( 'Event',     'college-theme' ),
            'add_new'       => __( 'Add Event', 'college-theme' ),
        ),
        'public'        => true,
        'has_archive'   => true,
        'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields' ),
        'menu_icon'     => 'dashicons-calendar',
        'rewrite'       => array( 'slug' => 'events' ),
        'show_in_rest'  => true,
    ));

    // Testimonials
    register_post_type( 'testimonial', array(
        'labels' => array(
            'name'          => __( 'Testimonials',    'college-theme' ),
            'singular_name' => __( 'Testimonial',     'college-theme' ),
            'add_new'       => __( 'Add Testimonial', 'college-theme' ),
        ),
        'public'        => false,
        'show_ui'       => true,
        'supports'      => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
        'menu_icon'     => 'dashicons-format-quote',
        'show_in_rest'  => true,
    ));
}
add_action( 'init', 'college_theme_cpts' );

// ============================================================
// CUSTOM TAXONOMIES
// ============================================================
function college_theme_taxonomies() {
    register_taxonomy( 'department', array( 'program', 'faculty' ), array(
        'labels'        => array(
            'name'          => __( 'Departments', 'college-theme' ),
            'singular_name' => __( 'Department',  'college-theme' ),
        ),
        'hierarchical'  => true,
        'show_in_rest'  => true,
        'rewrite'       => array( 'slug' => 'department' ),
    ));

    register_taxonomy( 'event_category', 'event', array(
        'labels'        => array(
            'name'          => __( 'Event Categories', 'college-theme' ),
            'singular_name' => __( 'Event Category',   'college-theme' ),
        ),
        'hierarchical'  => true,
        'show_in_rest'  => true,
        'rewrite'       => array( 'slug' => 'event-category' ),
    ));
}
add_action( 'init', 'college_theme_taxonomies' );

// ============================================================
// CUSTOMIZER OPTIONS
// ============================================================
function college_theme_customize_register( $wp_customize ) {

    // College Info Section
    $wp_customize->add_section( 'college_info', array(
        'title'    => __( 'College Information', 'college-theme' ),
        'priority' => 30,
    ));

    $info_settings = array(
        'college_tagline'   => array( 'label' => 'Tagline Under Logo',  'default' => 'Excellence in Education Since 1965' ),
        'college_phone'     => array( 'label' => 'Phone Number',         'default' => '+1 (555) 123-4567' ),
        'college_email'     => array( 'label' => 'Email Address',        'default' => 'info@college.edu' ),
        'college_address'   => array( 'label' => 'Address',              'default' => '123 College Ave, City, State 12345' ),
        'college_facebook'  => array( 'label' => 'Facebook URL',         'default' => '' ),
        'college_twitter'   => array( 'label' => 'Twitter/X URL',        'default' => '' ),
        'college_instagram' => array( 'label' => 'Instagram URL',        'default' => '' ),
        'college_linkedin'  => array( 'label' => 'LinkedIn URL',         'default' => '' ),
        'college_youtube'   => array( 'label' => 'YouTube URL',          'default' => '' ),
    );

    foreach ( $info_settings as $id => $args ) {
        $wp_customize->add_setting( $id, array( 'default' => $args['default'], 'sanitize_callback' => 'sanitize_text_field' ) );
        $wp_customize->add_control( $id, array( 'label' => __( $args['label'], 'college-theme' ), 'section' => 'college_info', 'type' => 'text' ) );
    }

    // Hero Section
    $wp_customize->add_section( 'college_hero', array(
        'title'    => __( 'Hero Section', 'college-theme' ),
        'priority' => 35,
    ));

    $hero_settings = array(
        'hero_badge'        => array( 'label' => 'Badge Text',         'default' => 'Ranked #1 in the Region' ),
        'hero_heading'      => array( 'label' => 'Main Heading',       'default' => 'Shaping Tomorrow\'s Leaders Today' ),
        'hero_subheading'   => array( 'label' => 'Sub Heading',        'default' => 'Join a community of thinkers, innovators, and changemakers. Discover programs designed to unlock your full potential.' ),
        'hero_btn1_text'    => array( 'label' => 'Button 1 Text',      'default' => 'Apply Now' ),
        'hero_btn1_url'     => array( 'label' => 'Button 1 URL',       'default' => '/apply' ),
        'hero_btn2_text'    => array( 'label' => 'Button 2 Text',      'default' => 'Explore Programs' ),
        'hero_btn2_url'     => array( 'label' => 'Button 2 URL',       'default' => '/programs' ),
        'hero_stat1_num'    => array( 'label' => 'Stat 1 Number',      'default' => '15,000+' ),
        'hero_stat1_label'  => array( 'label' => 'Stat 1 Label',       'default' => 'Students Enrolled' ),
        'hero_stat2_num'    => array( 'label' => 'Stat 2 Number',      'default' => '250+' ),
        'hero_stat2_label'  => array( 'label' => 'Stat 2 Label',       'default' => 'Programs Offered' ),
        'hero_stat3_num'    => array( 'label' => 'Stat 3 Number',      'default' => '98%' ),
        'hero_stat3_label'  => array( 'label' => 'Stat 3 Label',       'default' => 'Employment Rate' ),
    );

    foreach ( $hero_settings as $id => $args ) {
        $wp_customize->add_setting( $id, array( 'default' => $args['default'], 'sanitize_callback' => 'wp_kses_post' ) );
        $wp_customize->add_control( $id, array( 'label' => __( $args['label'], 'college-theme' ), 'section' => 'college_hero', 'type' => 'text' ) );
    }

    // Footer Section
    $wp_customize->add_section( 'college_footer', array(
        'title'    => __( 'Footer Settings', 'college-theme' ),
        'priority' => 80,
    ));

    $wp_customize->add_setting( 'footer_about', array( 'default' => 'We are committed to providing world-class education that prepares students for the challenges of tomorrow.', 'sanitize_callback' => 'wp_kses_post' ) );
    $wp_customize->add_control( 'footer_about', array( 'label' => __( 'Footer About Text', 'college-theme' ), 'section' => 'college_footer', 'type' => 'textarea' ) );

    $wp_customize->add_setting( 'footer_copyright', array( 'default' => '© 2024 College Name. All Rights Reserved.', 'sanitize_callback' => 'wp_kses_post' ) );
    $wp_customize->add_control( 'footer_copyright', array( 'label' => __( 'Copyright Text', 'college-theme' ), 'section' => 'college_footer', 'type' => 'text' ) );
}
add_action( 'customize_register', 'college_theme_customize_register' );

// ============================================================
// EXCERPT LENGTH
// ============================================================
function college_theme_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'college_theme_excerpt_length' );

function college_theme_excerpt_more( $more ) {
    return '...';
}
add_filter( 'excerpt_more', 'college_theme_excerpt_more' );

// ============================================================
// HELPER: GET CUSTOMIZER VALUE
// ============================================================
function college_get( $key, $default = '' ) {
    return get_theme_mod( $key, $default );
}

// ============================================================
// TEMPLATE HELPERS
// ============================================================
function college_posted_on() {
    echo '<time datetime="' . esc_attr( get_the_date( 'c' ) ) . '">' . esc_html( get_the_date() ) . '</time>';
}

function college_posted_by() {
    echo '<a href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a>';
}

// ============================================================
// INCLUDE ADDITIONAL FILES
// ============================================================
require_once COLLEGE_THEME_DIR . '/inc/class-walker-menu.php';
require_once COLLEGE_THEME_DIR . '/inc/template-functions.php';
