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

//Paginas
define('PAGINA_PRESTACIONES', 'prestaciones');
define('PAGINA_JUBILACIONES', 'jubilaciones');
define('PAGINA_RETIROS', 'retiros');
define('PAGINA_PENSIONES', 'pensiones');
define('PAGINA_RECONOCIMIENTO_SERVICIOS', 'reconocimiento-de-servicios');
define('PAGINA_SERVICIOS', 'servicios');
define('PAGINA_BIBLIOTECA', 'biblioteca-digital');
define('PAGINA_CERTIFICACION_NEGATIVA', 'certificacion-negativa');
define('PAGINA_SITIOS_DE_INTERES', 'sitios-de-interes');
define('PAGINA_ORG_APORTANTES', 'organismos-aportantes');
define('PAGINA_QUIENES_SOMOS', 'quienes-somos');
define('PAGINA_HISTORIA', 'un-poco-de-historia');
define('PAGINA_DELEGACIONES', 'delegaciones');
define('PAGINA_NOVEDADES', 'novedades');
define('PAGINA_POLITICA_CALIDAD', 'politica-de-calidad');
define('PAGINA_CONTACTO', 'contacto');
define('PAGINA_LA_CAJA_EN_NUMEROS', 'la-caja-en-numeros');
define('PAGINA_DESCARGA_RECIBO', 'descarga-tu-recibo');
define('PAGINA_INSTRUCTIVOS', 'instructivos');
define('PAGINA_GANANCIAS', 'impuesto-a-las-ganancias');

//Categorías
define('CATEGORIA_NOVEDADES', 'novedades');
define('CATEGORIA_NOVEDADES_DESTACADAS', 'novedades-destacadas');
define('CATEGORIA_NOVEDADES_SECUNDARIAS', 'novedades-secundarias');
define('CATEGORIA_SERVICIOS', 'servicios');
define('CATEGORIA_AUTORIDADES', 'autoridades');
define('CATEGORIA_DIRECTOR', 'director');
define('CATEGORIA_SUBDIRECTOR', 'subdirector');
define('CATEGORIA_OTROS', 'otros');
define('CATEGORIA_FORMULARIOS', 'formularios');
define('CATEGORIA_INSTRUCTIVOS', 'instructivos');
define('CATEGORIA_NORMATIVAS', 'normativas');
define('CATEGORIA_ESTADISTICAS', 'estadisticas');
define('CATEGORIA_CRONOGRAMA', 'cronograma');
define('CATEGORIA_FAQS_GANANCIAS', 'faqs-ganancias');
define('CATEGORIA_JUBILACIONES_VEJEZ', 'jubilaciones-vejez');
define('CATEGORIA_JUBILACIONES_INVALIDEZ', 'jubilaciones-invalidez');
define('CATEGORIA_RETIROS_VEJEZ', 'retiros-vejez');
define('CATEGORIA_RETIROS_INVALIDEZ', 'retiros-invalidez');
define('CATEGORIA_PENSIONES', 'pensiones');
//define('CATEGORIA_RECONOCIMIENTOS', 'reconocimientos');

define('ENLACES_FACEBOOK', 'https://www.facebook.com/cajasantafe');
define('ENLACES_TWITTER', 'https://twitter.com/caja_sf');
define('ENLACES_INSTAGRAM', 'https://instagram.com/cajajubisantafe?igshid=1xdlczgob9pq5');
define('ENLACES_YOUTUBE', 'https://www.youtube.com/channel/UC-HrOEJFVnewB8VaVCyknjQ');

define('POST_CONTENT_MAX_LENGTH', 250);
define('MAIN_CONTAINER_CSS', 'container-fluid container-lg bg-white px-0 pt-2 pt-lg-3');

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

function getLinkPagina($slug) {
    $pagina = get_page_by_path($slug);
    if ($pagina instanceof WP_Post) {
        return get_permalink($pagina);
    }
    return null;
}

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
?>

<?php
add_action('wp_head', 'wpb_add_googleanalytics');

function wpb_add_googleanalytics() {
    ?>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-MD8X5GMEX0"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-MD8X5GMEX0');
    </script>

    <?php
}

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
        // wp_register_style('bootstrap', $template_dir . '/node_modules/bootstrap/dist/css/bootstrap.min.css', array(), null, 'all');
        // wp_enqueue_style('bootstrap');                
        //font-awesome
        wp_register_style('font_awesome', $template_dir . '/node_modules/font-awesome/css/font-awesome.css', array(), null);
        wp_enqueue_style('font_awesome');

        wp_register_style('barfiller', $template_dir . '/css/barfiller.css', array(), null);
        wp_enqueue_style('barfiller');

        //elegant icons
        wp_register_style('elegant_icons', $template_dir . '/css/elegant-icons.css', array(), null);
        wp_enqueue_style('elegant_icons');

        //style:
//        wp_register_style('nice_select', $template_dir . '/style.css', array(), null);
//        wp_enqueue_style('nice_select');
        //slicknav
//        wp_register_style('slicknav', $template_dir . '/node_modules/slicknav/dist/slicknav.min.css', array(), null);
//        wp_enqueue_style('slicknav');
        //owl carousel
        //https://github.com/OwlCarousel2/OwlCarousel2
//        wp_register_style('owl_carousel', $template_dir . '/node_modules/owl.carousel/dist/assets/owl.carousel.min.css', array(), null);
//        wp_enqueue_style('owl_carousel');
        //nice select        
        //https://www.npmjs.com/package/jquery-nice-select
//        wp_register_style('nice_select', $template_dir . 'node_modules/jquery-nice-select/css/nice-select.css', array(), null);
//        wp_enqueue_style('nice_select');                
        //jssocials:
        wp_register_style('jssocials_css', $template_dir . '/node_modules/jssocials/dist/jssocials.css', array('font_awesome'), null);
        wp_enqueue_style('jssocials_css');

        wp_register_style('jssocials-css-theme-flat', $template_dir . '/node_modules/jssocials/dist/jssocials-theme-flat.css', array('font_awesome', 'jssocials_css'), null);
        wp_enqueue_style('jssocials-css-theme-flat');

//        $link_gf = 'https://fonts.googleapis.com/css2?family=Montserrat+Sans:wght@400;500;700&display=swap';
//        wp_enqueue_style( 'wpb-google-fonts', $link_gf, false );
        //style:
        wp_register_style('custom_style', $template_dir . '/style.css', array(
            //  'bootstrap',
            'font_awesome',
//            'barfiller',
            'elegant_icons',
//            'nice_select',
//            'slicknav',
//            'owl_carousel',
            'jssocials_css',
            'jssocials-css-theme-flat'
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

        //jssocials:
        wp_register_script('jssocials_js', $template_dir . '/node_modules/jssocials/dist/jssocials.js', array('jquery_v3'), null, true);
        wp_enqueue_script('jssocials_js');

        //jquery.parallax.js
        wp_register_script('parallax_js', $template_dir . '/node_modules/jquery-parallax.js/parallax.min.js', array('jquery_v3'), null, true);
        wp_enqueue_script('parallax_js');

        // jquery-easing
        wp_register_script('jquery_easing', $template_dir . '/node_modules/jquery.easing/jquery.easing.min.js', array('jquery_v3', 'popper'), null, true);
        wp_enqueue_script('jquery_easing');

        //bootbox
        wp_register_script('bootbox', $template_dir . '/node_modules/bootbox/dist/bootbox.min.js', array('bootstrap'), null, true);
        wp_enqueue_script('bootbox');

        //bootbox localers
        wp_register_script('bootbox_locales', $template_dir . '/node_modules/bootbox/dist/bootbox.locales.min.js', array('bootbox'), null, true);
        wp_enqueue_script('bootbox_locales');

        wp_register_script('site', $template_dir . '/js/site.js', array(
            'jquery_v3',
            'jquery_easing',
            'bootstrap',
            'bootbox',
            'bootbox_locales',
                ), false, true);
        wp_enqueue_script('site');
    }

    remove_filter('the_content', 'wpautop');

    function getInfoContacto() {
        $resultado = array();

        $f = function($titulo, $dir, $tel, $fax, $mostrar_turno_web = false, $whatsapp = null) {
            return array(
                'titulo' => $titulo,
                'direccion' => $dir,
                'telefono' => $tel,
                'fax' => $fax,
                'mostrar_turno_web' => $mostrar_turno_web,
                'whatsapp' => $whatsapp,
            );
        };

        $resultado[] = $f('Santa Fe', '1º Junta 2724 (S3000CDH)', '0800 - 444 - 3734', null, true, '342 5 128 800');
        $resultado[] = $f('Rosario', 'Brown 2262 (S2000JCB)', '54 + 341 - 4724561, 4724562, 4724563', 'Interno 109', true, false);
        $resultado[] = $f('Venado Tuerto', 'Mitre 766 (S2600IRP)', '54 + 3462 422289', null, true, false);
        $resultado[] = $f('San Justo', 'Nicolás Figueredo 2637 (S3040CDM)', '54 + 3498 425531', null, true, false);
        $resultado[] = $f('Rafaela', 'Bv. Lehmann 583 (S2300ICB)', 'Teléfonos/Fax: 54 + 3492 - 423091', null, true, false);
        $resultado[] = $f('Reconquista', 'Rivadavia 666 (S3560GUU)', null, null, true, false);
        $resultado[] = $f('Buenos Aires', '25 de mayo 178, Entrepiso (C1002ABD)', '54 + 11 43311808', '54 + 11 43311622', true, false);

        return $resultado;
    }

    function getArchivosBiblioteca() {
        $biblioteca = array(
            'inst' => array(),
            'form' => array(),
            'norm' => array(),
        );

        $upload_info = wp_upload_dir();

        if (!isset($upload_info['path'])) {
            return false;
        }

        $upload_dir = $upload_info['path'];

        $archivos = scandir($upload_dir);
        foreach ($archivos as $archivo) {
            if (is_dir($upload_dir . DIRECTORY_SEPARATOR . $archivo)) {
                continue;
            }

            $o = new stdClass();

            if (strpos($archivo, 'FORM_', 0) !== false) {
                $o->fname = $archivo;
                $o->titulo = str_replace(array('_', '.pdf'), ' ', substr($archivo, 5));
                $biblioteca['form'][] = $o;
            } else if (strpos($archivo, 'NORM_', 0) !== false) {
                $o->fname = $archivo;
                $o->titulo = str_replace(array('_', '.pdf'), ' ', substr($archivo, 5));
                $biblioteca['norm'][] = $o;
            } else if (strpos($archivo, 'INST_', 0) !== false) {
                $o->fname = $archivo;
                $o->titulo = str_replace(array('_', '.pdf'), ' ', substr($archivo, 5));
                $biblioteca['inst'][] = $o;
            }
        }

        $biblioteca['url'] = $upload_info['url'] . DIRECTORY_SEPARATOR;

        return $biblioteca;
    }

    function getArchivosLaCajaEnNumeros() {
        $laCajaEnNumeros = array(
            'meses' => array(),
        );

        $upload_info = wp_upload_dir();

        if (!isset($upload_info['path'])) {
            return false;
        }

        $upload_dir = $upload_info['path'];

        $archivos = scandir($upload_dir);
        foreach ($archivos as $archivo) {
            if (is_dir($upload_dir . DIRECTORY_SEPARATOR . $archivo)) {
                continue;
            }

            $o = new stdClass();

            if (strpos($archivo, 'NUMEROS_', 0) !== false) {
                $o->fname = $archivo;
                $o->titulo = str_replace(array('_', '.pdf'), ' ', substr($archivo, 8));
                $laCajaEnNumeros['meses'][] = $o;
            }
        }

        $laCajaEnNumeros['url'] = $upload_info['url'] . DIRECTORY_SEPARATOR;

        return $laCajaEnNumeros;
    }

    /**
     * Devuelve el cronograma de pago
     * 
     * Si existen varios posts cargados con esa categoria solo devuelve el primero solo devuelve el primero que encuentra.
     * 
     * @return type
     */
    function getCronogramaDePago() {

        $cronograma = array(
            'title' => 'Cronograma de pagos',
            'mostrar' => false,
            'imagen' => null
        );

        $id_cat = get_cat_ID(CATEGORIA_CRONOGRAMA);
        if ($id_cat) {
            $args = array('category' => $id_cat, 'posts_per_page' => 1);
            $aux = get_posts($args);
            if (isset($aux[0])) {
                $post = $aux[0];

                $cronograma['title'] = $post->post_title;
                $cronograma['imagen'] = get_field('imagen', $post);
                $cronograma['mostrar'] = get_field('mostrar', $post);
            }
        }

        return $cronograma;
    }

    /**
     * Devuelve un array de los posts por categoria
     * 
     * @param string $cat_slug
     * @param int $posts_per_page
     * @return array
     */
    function getPostsPorCateg($cat_slug, $posts_per_page = -1, $post_status = 'publish') {

        $result = array();        
        $oCategoria = get_category_by_slug($cat_slug);
       // $id_cat = 18;
        
        if ($oCategoria instanceof WP_Term) {
            $id_cat = $oCategoria->term_id;
            //var_dump($id_cat);exit;
            $args = array(
                'category' => $id_cat,
                'posts_per_page' => $posts_per_page,
                'post_status' => $post_status
            );
            $result = get_posts($args);
        }

        return $result;
    }
    ?>