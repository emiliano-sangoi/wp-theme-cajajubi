<?php
/**
 * Bootstrap 4 on Wordpress functions and definitions
 *
 * For more information on hooks, actions, and filters, see http://codex.wordpress.org/Plugin_API.
 *
 * @package 	WordPress
 * @subpackage 	Bootstrap 4.5.2
 * @autor 		Babobski
 */
define('BOOTSTRAP_VERSION', '4.5.0');

require 'parameters.php';

define('DIR_IMGS', get_template_directory_uri() . '/images');
/* ========================================================================================================================

  Add language support to theme

  ======================================================================================================================== */
add_action('after_setup_theme', 'my_theme_setup');

function my_theme_setup() {
    load_theme_textdomain('wp_babobski', get_template_directory() . '/language');
}

/* ========================================================================================================================

  Required external files

  ======================================================================================================================== */

require_once( 'external/bootstrap-utilities.php' );
require_once( 'external/bs4navwalker.php' );

/* ========================================================================================================================

  Add html 5 support to wordpress elements

  ======================================================================================================================== */

add_theme_support('html5', array(
    'comment-list',
    'search-form',
    'comment-form',
    'gallery',
    'caption',
));

/* ========================================================================================================================

  Theme specific settings

  ======================================================================================================================== */

add_theme_support('post-thumbnails');

//add_image_size( 'name', width, height, crop true|false );

register_nav_menus(array('primary' => 'Primary Navigation'));

/* ========================================================================================================================

  Actions and Filters

  ======================================================================================================================== */

add_action('wp_enqueue_scripts', 'bootstrap_script_init');

add_filter('body_class', array('BsWp', 'add_slug_to_body_class'));

/* ========================================================================================================================

  Custom Post Types - include custom post types and taxonomies here e.g.

  e.g. require_once( 'custom-post-types/your-custom-post-type.php' );

  ======================================================================================================================== */





/* ========================================================================================================================

  Security & cleanup wp admin

  ======================================================================================================================== */

//remove wp version
function theme_remove_version() {
    return '';
}

add_filter('the_generator', 'theme_remove_version');

//remove default footer text
function remove_footer_admin() {
    echo "";
}

add_filter('admin_footer_text', 'remove_footer_admin');

//remove wordpress logo from adminbar
function wp_logo_admin_bar_remove() {
    global $wp_admin_bar;

    /* Remove their stuff */
    $wp_admin_bar->remove_menu('wp-logo');
}

add_action('wp_before_admin_bar_render', 'wp_logo_admin_bar_remove', 0);

// Remove default Dashboard widgets
if (!function_exists('disable_default_dashboard_widgets')) {

    function disable_default_dashboard_widgets() {

        //remove_meta_box('dashboard_right_now', 'dashboard', 'core');
        remove_meta_box('dashboard_activity', 'dashboard', 'core');
        remove_meta_box('dashboard_recent_comments', 'dashboard', 'core');
        remove_meta_box('dashboard_incoming_links', 'dashboard', 'core');
        remove_meta_box('dashboard_plugins', 'dashboard', 'core');

        remove_meta_box('dashboard_quick_press', 'dashboard', 'core');
        remove_meta_box('dashboard_recent_drafts', 'dashboard', 'core');
        remove_meta_box('dashboard_primary', 'dashboard', 'core');
        remove_meta_box('dashboard_secondary', 'dashboard', 'core');
    }

}
add_action('admin_menu', 'disable_default_dashboard_widgets');

remove_action('welcome_panel', 'wp_welcome_panel');

// Disable the emoji's
if (!function_exists('disable_emojis')) {

    function disable_emojis() {
        remove_action('wp_head', 'print_emoji_detection_script', 7);
        remove_action('admin_print_scripts', 'print_emoji_detection_script');
        remove_action('wp_print_styles', 'print_emoji_styles');
        remove_action('admin_print_styles', 'print_emoji_styles');
        remove_filter('the_content_feed', 'wp_staticize_emoji');
        remove_filter('comment_text_rss', 'wp_staticize_emoji');
        remove_filter('wp_mail', 'wp_staticize_emoji_for_email');

        // Remove from TinyMCE
        add_filter('tiny_mce_plugins', 'disable_emojis_tinymce');
    }

}
add_action('init', 'disable_emojis');

// Filter out the tinymce emoji plugin.
function disable_emojis_tinymce($plugins) {
    if (is_array($plugins)) {
        return array_diff($plugins, array('wpemoji'));
    } else {
        return array();
    }
}

add_action('admin_head', 'custom_logo_guttenberg');

if (!function_exists('custom_logo_guttenberg')) {

    function custom_logo_guttenberg() {
        echo '<link rel="stylesheet" type="text/css" href="' . get_bloginfo('stylesheet_directory') .
        '/css/admin-custom.css" />';
    }

}

/* ========================================================================================================================

  Custom login

  ======================================================================================================================== */

// Add custom css
if (!function_exists('my_custom_login')) {

    function my_custom_login() {
        echo '<link rel="stylesheet" type="text/css" href="' . get_bloginfo('stylesheet_directory') . '/css/custom-login-style.css" />';
    }

}
add_action('login_head', 'my_custom_login');

// Link the logo to the home of our website
if (!function_exists('my_login_logo_url')) {

    function my_login_logo_url() {
        return get_bloginfo('url');
    }

}
add_filter('login_headerurl', 'my_login_logo_url');

// Change the title text
if (!function_exists('my_login_logo_url_title')) {

    function my_login_logo_url_title() {
        return get_bloginfo('name');
    }

}
add_filter('login_headertext', 'my_login_logo_url_title');


/* ========================================================================================================================

  Comments

  ======================================================================================================================== */

/**
 * Custom callback for outputting comments
 *
 * @return void
 * @author Keir Whitaker
 */
if (!function_exists('bootstrap_comment')) {

    function bootstrap_comment($comment, $args, $depth) {
        $GLOBALS['comment'] = $comment;
        ?>
        <?php if ($comment->comment_approved == '1'): ?>
            <li class="media">
                <div class="media-left">
                    <?php echo get_avatar($comment); ?>
                </div>
                <div class="media-body">
                    <h4 class="media-heading"><?php comment_author_link() ?></h4>
                    <time><a href="#comment-<?php comment_ID() ?>" pubdate><?php comment_date() ?> at <?php comment_time() ?></a></time>
                    <?php comment_text() ?>
                </div>
                <?php
            endif;
        }

    }


    /* ========================================================================================================================

      Scripts

      ======================================================================================================================== */

    /**
     * Add scripts via wp_head()
     *
     * @return void
     * @author Keir Whitaker
     */
    function bootstrap_script_init() {

        $template_dir = get_template_directory_uri();


        //css:
        //=========================================================================================================================
        //bootstrap:
        wp_register_style('bootstrap', $template_dir . '/node_modules/bootstrap/dist/css/bootstrap.min.css', array(), null, 'all');
        wp_enqueue_style('bootstrap');                

        //font-awesome
        wp_register_style('font_awesome', $template_dir . '/node_modules/font-awesome/css/font-awesome.css', array(), null);
        wp_enqueue_style('font_awesome');       

        wp_register_style('barfiller', $template_dir . '/css/barfiller.css', array(), null);
        wp_enqueue_style('barfiller');
        
        //elegant icons
        wp_register_style('elegant_icons', $template_dir . '/css/elegant-icons.css', array(), null);
        wp_enqueue_style('elegant_icons');

        //style:
        wp_register_style('nice_select', $template_dir . '/style.css', array(), null);
        wp_enqueue_style('nice_select');

        //slicknav
        wp_register_style('slicknav', $template_dir . '/node_modules/slicknav/dist/slicknav.min.css', array(), null);
        wp_enqueue_style('slicknav');

        //owl carousel
        //https://github.com/OwlCarousel2/OwlCarousel2
        wp_register_style('owl_carousel', $template_dir . '/node_modules/owl.carousel/dist/assets/owl.carousel.min.css', array(), null);
        wp_enqueue_style('owl_carousel');

        //nice select        
        //https://www.npmjs.com/package/jquery-nice-select
        wp_register_style('nice_select', $template_dir . 'node_modules/jquery-nice-select/css/nice-select.css', array(), null);
        wp_enqueue_style('nice_select');

        //jssocials:
        wp_register_style('jssocials_css', $template_dir . '/node_modules/jssocials/dist/jssocials.css', array('font_awesome'), null);
        wp_enqueue_style('jssocials_css');

        wp_register_style('jssocials-css-theme-flat', $template_dir . '/node_modules/jssocials/dist/jssocials-theme-flat.css', array('font_awesome', 'jssocials_css'), null);
        wp_enqueue_style('jssocials-css-theme-flat');
                
        $link_gf = 'https://fonts.googleapis.com/css2?family=Montserrat+Sans:wght@400;500;700&display=swap';
        wp_enqueue_style( 'wpb-google-fonts', $link_gf, false );

        //style:
        wp_register_style('custom_style', $template_dir . '/style.css', array(
            'bootstrap',
            'font_awesome',
            'barfiller',
            'elegant_icons',
            'nice_select',
            'slicknav',
            'owl_carousel',
            'jssocials_css',
            'jssocials-css-theme-flat',
            'wpb-google-fonts'
        ), null);
        wp_enqueue_style('custom_style');

        //js
        // --------------------------------------------------------------------------------------------
        
        wp_deregister_script('jquery');

        wp_register_script('jquery_v3', $template_dir . '/node_modules/jquery/dist/jquery.min.js', array(), '3.5.1', true);
        wp_enqueue_script('jquery_v3');

        wp_register_script('popper', $template_dir . '/node_modules/popper.js/dist/umd/popper.min.js', array('jquery_v3'), null, true);
        wp_enqueue_script('popper');


        wp_register_script('bootstrap', $template_dir . '/node_modules/bootstrap/dist/js/bootstrap.min.js', array('jquery_v3', 'popper'), null, true);
        wp_enqueue_script('bootstrap');

        wp_register_script('slicknav', $template_dir . '/node_modules/slicknav/dist/jquery.slicknav.min.js', array('jquery_v3'), null, true);
        wp_enqueue_script('slicknav');

        //jssocials:
        wp_register_script('jssocials_js', $template_dir . '/node_modules/jssocials/dist/jssocials.js', array('jquery_v3'), null, true);
        wp_enqueue_script('jssocials_js');

        //owl carousel
        //https://github.com/OwlCarousel2/OwlCarousel2
        wp_register_script('owl_carousel', $template_dir . '/node_modules/owl.carousel/dist/owl.carousel.min.js', array('jquery_v3', 'bootstrap'), false, true);
        wp_enqueue_script('owl_carousel');

        //nice select   
        //https://www.npmjs.com/package/jquery-nice-select
        wp_register_script('nice_select', $template_dir . '/node_modules/jquery-nice-select/js/jquery.nice-select.min.js', array('jquery_v3', 'bootstrap', 'owl_carousel'), false, true);
        wp_enqueue_script('nice_select');

        // jquery-easing
        wp_register_script('jquery_easing', $template_dir . '/node_modules/jquery.easing/jquery.easing.min.js', array('jquery_v3', 'popper'), null, true);
        wp_enqueue_script('jquery_easing');

        wp_register_script('barfiller', $template_dir . '/js/jquery.barfiller.js', array('jquery_v3'), false, true);
        wp_enqueue_script('barfiller');

        wp_register_script('site', $template_dir . '/js/site.js', array('jquery_v3', 'bootstrap', 'nice_select', 'owl_carousel', 'slicknav', 'barfiller'), false, true);
        wp_enqueue_script('site');
    }

    /* ========================================================================================================================

      Custom login

      ======================================================================================================================== */

// Add custom css
    function my_custom_login() {
        echo '<link rel="stylesheet" type="text/css" href="' . get_bloginfo('stylesheet_directory') . '/css/custom-login-style.css" />';
    }

    add_action('login_head', 'my_custom_login');

// Link the logo to the home of our website
    function my_login_logo_url() {
        return get_bloginfo('url');
    }

    add_filter('login_headerurl', 'my_login_logo_url');

// Change the title text
    function my_login_logo_url_title() {
        return 'Sitio web de la Caja de Jubilaciones';
    }

    add_filter('login_headertitle', 'my_login_logo_url_title');
    
    
?>