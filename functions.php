<?php
/**
 * RED Starter Theme functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package RED_Starter_Theme
 */

if (! function_exists('red_starter_setup')) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function red_starter_setup()
{
    // Add default posts and comments RSS feed links to head.
    add_theme_support('automatic-feed-links');

    // Let WordPress manage the document title.
    add_theme_support('title-tag');

    // Enable support for Post Thumbnails on posts and pages.
    add_theme_support('post-thumbnails');

    // This theme uses wp_nav_menu() in one location.
    register_nav_menus(array(
        'primary' => esc_html('Primary Menu'),
    ));

    // Switch search form, comment form, and comments to output valid HTML5.
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
}
endif; // red_starter_setup
add_action('after_setup_theme', 'red_starter_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * @global int $content_width
 */
function red_starter_content_width()
{
    $GLOBALS['content_width'] = apply_filters('red_starter_content_width', 640);
}
add_action('after_setup_theme', 'red_starter_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function red_starter_widgets_init()
{
    register_sidebar(array(
        'name'          => esc_html('Sidebar'),
        'id'            => 'sidebar-1',
        'description'   => '',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));
    register_sidebar(array(
        'name' => 'Footer Left',
        'id' => 'footer-sidebar-1',
        'description' => 'Appears in the footer area',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
        ));
    register_sidebar(array(
        'name' => 'Be The First',
        'id' => 'footer-sidebar-2',
        'description' => 'Appears in the footer area',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
        ));
      
    register_sidebar(array(
            'name' => 'Copyright',
            'id' => 'footer-sidebar-3',
            'description' => 'Appears in the footer area',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget' => '</aside>',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
            ));
}
add_action('widgets_init', 'red_starter_widgets_init');

/**
 * Filter the stylesheet_uri to output the minified CSS file.
 */
function red_starter_minified_css($stylesheet_uri, $stylesheet_dir_uri)
{
    if (file_exists(get_template_directory() . '/build/css/style.min.css')) {
        $stylesheet_uri = $stylesheet_dir_uri . '/build/css/style.min.css';
    }

    return $stylesheet_uri;
}
add_filter('stylesheet_uri', 'red_starter_minified_css', 10, 2);

/**
 * Enqueue scripts and styles.
 */
function red_starter_scripts()
{
    wp_enqueue_style('red-starter-style', get_stylesheet_uri());
    wp_enqueue_style('font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('mainfont', "https://fonts.googleapis.com/css?family=Roboto:100,200,300,400,500,700");
    wp_enqueue_style('hamburger-menu', get_template_directory_uri() . '/lib/hamburgers.css');

    wp_enqueue_script('red-starter-skip-link-focus-fix', get_template_directory_uri() . '/build/js/skip-link-focus-fix.min.js', array(), '20130115', true);

    wp_enqueue_script('jquery-unveil', get_template_directory_uri() . '/build/js/jquery.unveil.min.js', array('jquery'), '', true);

    wp_register_script('main', get_template_directory_uri() . '/build/js/main.min.js', array('jquery'), '1.0.0', true);
    // wp_localize_script( 'main', 'templateLocation', array( 'template_url' => get_bloginfo('url') ) );
    wp_enqueue_script('main');


    wp_enqueue_script('image-unveil', get_template_directory_uri() . '/build/js/image.unveil.min.js', array('jquery'), '', true);


    wp_enqueue_script('about', get_template_directory_uri() . '/build/js/about.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('smoothScroll', get_template_directory_uri() . '/build/js/smoothScroll.min.js', array('jquery'), '1.0.0', true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'red_starter_scripts');

/**
 * Custom logo for this theme.
 */

function my_login_logo()
{
    ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/Logos/PNG/PWC-Light.png);
           
		height:125px;
		width:320px;
		background-size: 320px 125px;
		background-repeat: no-repeat;
        	padding-bottom: 30px;
        }
    </style>
<?php
}
add_action('login_enqueue_scripts', 'my_login_logo');

/**
 * Clicking logo leads to home.
 */

function my_login_logo_url()
{
    return home_url();
}
add_filter('login_headerurl', 'my_login_logo_url');

function my_login_logo_url_title()
{
    return 'PacWest, a site by Caravel';
}
add_filter('login_headertitle', 'my_login_logo_url_title');


/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';
