<?php
define('THEME_VERSION', '1.0.4');
define('THEME_ICON', get_stylesheet_directory_uri() . '/images/icon.png');
error_reporting(E_ERROR | E_PARSE);

/**
* Métodos úteis para snippets Wordpress
* @package Wordpress
*/
class PlanDDUtils
{
  /**
   * Use para registrar páginas no inicio da
   * instalaçao do tema
   * @param $title título da página
   * @param $desc resumo da página
   * @param $type tipo da postagem
   */
  public static function registerInitPage($title, $desc = '', $parent = 0, $template = '') {
    $page = get_page_by_title($title);
    if(!isset($page)) {
      $defaults = array(
        'post_type'             => 'page',
        'post_title'          => $title,
        //'post_content'        => '',
        'post_status'         => 'publish',
        'post_author'         => 1,
        'post_excerpt'          => __($desc,'modabiz'),
        'post_parent'       => $parent,
        'page_template'       => $template
      );
      wp_insert_post( $defaults );
    }
  }
}
add_action('init',array(
  PlanDDUtils::registerInitPage('Estúdio','O criador e seu estúdio',0,'template.estudio.php')
));
add_action('init',array(
  PlanDDUtils::registerInitPage('Contato','',0,'template.contato.php')
));

/**
* Configure funções para campos personalizados da aplicação
*/
define( 'USE_LOCAL_ACF_CONFIGURATION', true ); // apenas conf. local

add_filter('acf/settings/path', 'plandd_acf_path');
function plandd_acf_path( $path ) {
     // update path
     $path = get_stylesheet_directory() . '/includes/acf-pro/';
     // return
     return $path;
}

add_filter('acf/settings/dir', 'plandd_acf_dir');
function plandd_acf_dir( $dir ) {
     // update path
     $dir = get_stylesheet_directory_uri() . '/includes/acf-pro/';
     // return
     return $dir;
}

/**
 * Framework para personalização de campos
 * (custom meta post)
 */
include_once( get_stylesheet_directory() . '/includes/acf-pro/acf.php' );
define( 'ACF_LITE' , true );
//include_once( get_stylesheet_directory() . '/includes/acf/preconfig.php' );

/*if( function_exists('acf_add_options_page') ) {
  
  acf_add_options_page(array(
    'page_title'  => 'Theme General Settings',
    'menu_title'  => 'Theme Settings',
    'menu_slug'   => 'theme-general-settings',
    'capability'  => 'edit_posts',
    'redirect'    => false
  ));
  
  acf_add_options_sub_page(array(
    'page_title'  => 'Theme Header Settings',
    'menu_title'  => 'Header',
    'parent_slug' => 'theme-general-settings',
  ));
  
  acf_add_options_sub_page(array(
    'page_title'  => 'Theme Footer Settings',
    'menu_title'  => 'Footer',
    'parent_slug' => 'theme-general-settings',
  ));
  
}*/

/**
 * Incorpore scripts essenciais para toda a
 * aplicação
 */
function plandd_scripts() {
  /*
    Folha de estilo base para a aplicação
   */
  wp_enqueue_style('style', get_stylesheet_directory_uri() . '/style.css', array(), THEME_VERSION, "screen");
    
  /*
    modernizr
  */
  wp_enqueue_script('modernizr', '//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js', array(), THEME_VERSION);
  
  /*
    Jquery
   */
  wp_deregister_script('jquery');
  wp_register_script('jquery', '//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js', false, THEME_VERSION);
  wp_enqueue_script('jquery');

  /*
    Scripts essenciais minificados em
    um arquivo unico e essenciais para
    o funcionamento do lado cliente
  */
  wp_enqueue_script('scripts', get_stylesheet_directory_uri() . '/scripts.js', array(), THEME_VERSION, true);
}
add_action( 'wp_enqueue_scripts', 'plandd_scripts' );

/**
 * thumb support
 */
add_theme_support('post-thumbnails');    
set_post_thumbnail_size( 242, 220, true );
if (function_exists('add_image_size')) {
  add_image_size('estrutura', 242, 220, true);
  add_image_size('tratamento', 780, 320, true);
}

/**
 * Menus
 */
register_nav_menus( array(
    'primary' => __( 'Menu principal',   'plandd' )
) );

/**
 * remover widgets padroes
 */
function remove_dashboard_widgets() {
  remove_meta_box('dashboard_right_now', 'dashboard', 'normal');
  remove_meta_box('dashboard_recent_comments', 'dashboard', 'normal');
  remove_meta_box('dashboard_incoming_links', 'dashboard', 'normal');
  remove_meta_box('dashboard_plugins', 'dashboard', 'normal');
  remove_meta_box('dashboard_quick_press', 'dashboard', 'side');
  remove_meta_box('dashboard_recent_drafts', 'dashboard', 'side');
  remove_meta_box('dashboard_primary', 'dashboard', 'side');
  remove_meta_box('dashboard_secondary', 'dashboard', 'side');
  remove_meta_box('dashboard_activity', 'dashboard', 'normal');
  remove_meta_box('dashboard_welcome', 'dashboard', 'normal');
}
add_action('wp_dashboard_setup', 'remove_dashboard_widgets');

function new_excerpt_length($length) {
  return 30;
}add_filter('excerpt_length', 'new_excerpt_length');

function loja_init() {
    $labels = array('name' => 'Produtos', 'singular_name' => 'Produto', 'add_new' => 'Adicionar Novo', 'add_new_item' => 'Adicionar novo Produto', 'edit_item' => 'Editar Produto', 'new_item' => 'Novo Produto', 'all_items' => 'Todos os Produtos', 'view_item' => 'Ver Produto', 'search_items' => 'Buscar Produtos', 'not_found' => 'N&atilde;o encontrado', 'not_found_in_trash' => 'N&atilde;o encontrado', 'parent_item_colon' => '', 'menu_name' => 'Produtos');
    
   $args = array('labels' => $labels, 'public' => true, 'exclude_from_search' => false, 'publicly_queryable' => true, 'show_ui' => true, 'show_in_menu' => true, 'query_var' => true, 'rewrite' => array('slug' => 'produtos'), 'capability_type' => 'post', 'has_archive' => true, 'hierarchical' => true, 'menu_position' => 4, 'supports' => array('title', 'thumbnail', 'editor'));
    
    
    register_post_type('produtos', $args);

    $labels = array(
    'name'              => __( 'Grupos'),
    'singular_name'     => __( 'Grupo'),
    'search_items'      =>  __( 'Buscar' ),
    'popular_items'     => __( 'Mais usados' ),
    'all_items'         => __( 'Todos os Grupos' ),
    'parent_item'       => null,
    'parent_item_colon' => null,
    'edit_item'         => __( 'Adicionar novo' ),
    'update_item'       => __( 'Atualizar' ),
    'rewrite'            => array( 'slug' => 'grupos' ),
    'add_new_item'      => __( 'Adicionar novo Grupo' ),
    'new_item_name'     => __( 'Novo' )
    );
    register_taxonomy("grupos", array("produtos"), array(
      "hierarchical"      => true, 
      "labels"            => $labels, 
      "singular_label"    => "Grupo", 
      "rewrite"           => true,
      "add_new_item"      => "Adicionar novo Grupo",
      "new_item_name"     => "Novo Grupo",
    ));
}
add_action('init', 'loja_init');

//verificar id do site
function translateSite() {
  $site_url = (get_current_blog_id() == 1) ? 'http://sergiojmatos.com/en' : 'http://sergiojmatos.com/';
  echo $site_url;
} 

//SEO
//Pegar descrição de página ativa
function getPageDescription() {
  $site_description = get_bloginfo( 'description' ); 
  if(is_home())
    return $desc;
  elseif(is_page() || is_single())
    return the_excerpt();
  elseif(is_category())
    return get_query_var('cat');
  else
    return get_bloginfo( 'description' );
}

function getThumbUrl($size) {
    global $post;
    if(!$size) {
        $size = 'full';
    }
    $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), $size );
    echo $thumb[0];
}

function fb_opengraph() {
    global $post;
    $thumb = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'destaque.pequeno');
    $th = (!empty($thumb[0])) ? $thumb[0] : '';
    $site_description = get_bloginfo( 'description' ); 
    $stylesheet_url = get_bloginfo( 'stylesheet_url' );
    $stylesheet_directory = get_bloginfo( 'stylesheet_directory' );
    $site_name = (is_home()) ? get_bloginfo( 'name' ) : get_the_title( $post->ID );
    $site_url = (is_home()) ? get_bloginfo( 'siteurl' ) : get_permalink( $post->ID );
    $keywords = 'produtos, design, desenho industrial';
    
    ?>

    <meta name="description" content="<?php echo getPageDescription(); ?>">
    <meta name="keywords" content="<?php echo $keywords; ?>">
    <meta name="author" content="<?php echo $site_url; ?>">
    <meta name="subject" content="Sérgio J. Matos">

    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="<?php echo $site_name; ?>">
    <meta itemprop="description" content="<?php echo getPageDescription(); ?>">
    <?php if(is_home()): ?>
      <meta itemprop="image" content="<?php echo $stylesheet_directory; ?>/screenshot.png">
    <?php else: ?><meta itemprop="image" content="<?php getThumbUrl(); ?>"><?php endif; ?>

    <!-- Twitter Card data -->
    <?php if(is_home()): ?>
      <meta name="twitter:card" content="<?php echo $stylesheet_directory; ?>/screenshot.png">
    <?php else: ?><meta name="twitter:card" content="<?php getThumbUrl(); ?>"><?php endif; ?>
    <meta name="twitter:site" content="@sergiojmatos">
    <meta name="twitter:title" content="<?php echo $site_name; ?>">
    <meta name="twitter:description" content="<?php echo getPageDescription(); ?>">
    <meta name="twitter:creator" content="@sergiojmatos">
    <!-- Twitter summary card with large image must be at least 280x150px -->
    <?php if(is_home()): ?>
      <meta name="twitter:image:src" content="<?php echo $stylesheet_directory; ?>/screenshot.png">
    <?php else: ?><meta name="twitter:image:src" content="<?php getThumbUrl(); ?>"><?php endif; ?>

    <!-- Open Graph data -->
    <meta property="og:title" content="<?php echo $site_name; ?>" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="<?php echo $site_url; ?>" />
    <?php if(is_home()): ?>
      <meta property="og:image" content="<?php echo $stylesheet_directory; ?>/screenshot.png" />
    <?php else: ?><meta property="og:image" content="<?php getThumbUrl(); ?>" /><?php endif; ?>
    <meta property="og:description" content="<?php echo getPageDescription(); ?>" />
    <meta property="og:site_name" content="<?php echo $site_name; ?>" />
    
    <?php if(!is_home()): ?>
      <meta property="article:section" content="Artigo" />
      <meta property="article:tag" content="<?php echo $keywords; ?>" />
    <?php endif; ?>
 
<?php
  echo get_field('pba_analytics', 'option');
}
add_action('wp_head', 'fb_opengraph', 5);

//Opções para o tema
require_once (dirname(__FILE__) . '/includes/redux/redux-framework.php');
require_once (dirname(__FILE__) . '/includes/redux/sample/barebones-config.php');
?>