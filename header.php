<?php
global $redux_demo;
?>
<!doctype html>
<html class="no-js" lang="pt-br">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php bloginfo('name'); ?> | <?php is_home()?bloginfo('description'):wp_title(''); ?></title>
    <!--<meta name="description" content="Rua Hilda Coutinho Lucena, 101 - Sala 102 - Miramar - João Pessoa - PB">
    <meta name="keywords" content="design, consultoria, desenvolvimento, wordpress, sites">
    <meta name="author" content="http://plandd.cc">
    <meta name="subject" content="Escritório de desenvolvimento para a internet">-->

     <!-- Schema.org markup for Google+ 
    <meta itemprop="name" content="Plan - Design e Desenvolvimento">
    <meta itemprop="description" content="Rua Hilda Coutinho Lucena, 101 - Sala 102 - Miramar - João Pessoa - PB">
          <meta itemprop="image" content="images/capa.png">-->
    
    <!-- Twitter Card data
          <meta name="twitter:card" content="images/capa.png">
        <meta name="twitter:site" content="@">
    <meta name="twitter:title" content="Plan - Design e Desenvolvimento">
    <meta name="twitter:description" content="Rua Hilda Coutinho Lucena, 101 - Sala 102 - Miramar - João Pessoa - PB">
    <meta name="twitter:creator" content="@plandd"> -->
    <!-- Twitter summary card with large image must be at least 280x150px 
          <meta name="twitter:image:src" content="images/capa.png">-->
    
    <!-- Open Graph data 
    <meta property="og:title" content="Plan - Design e Desenvolvimento" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="http://plandd.cc" />
          <meta property="og:image" content="images/capa.png" />
        <meta property="og:description" content="Rua Hilda Coutinho Lucena, 101 - Sala 102 - Miramar - João Pessoa - PB" />
    <meta property="og:site_name" content="Plan - Design e Desenvolvimento" />-->
    
    <?php wp_head(); ?>
  </head>
  <body>

    <nav id="top-menu" class="small-12 d-table hide-canvas <?php  if(!is_home()) echo "inner-page"; ?>">
      <div class="small-12 d-table-cell">
        <h1 class="left no-margin logo-top">
          <a href="<?php echo home_url(); ?>" title="Página principal">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-white.png" alt="">
          </a>
        </h1>

        <h1 class="right show-offmenu">
          <a href="#" class="icon-menu d-block no-margin"></a>
        </h1>

        <h1 class="right translate-top">
          <a href="<?php home_url(); ?>/en" class="icon-transw d-block no-margin"></a>
        </h1>
      </div>
    </nav>

    <nav id="menu-offcanvas" class="small-12 d-table">
      <div class="small-12 d-table-cell">
        <div class="row">
          <header class="small-12 columns text-right show-offmenu">
            <a href="#" class="d-iblock icon-close"></a>
          </header>
          <nav class="small-12 left text-center">
            <ul class="no-bullet small-12 d-iblock">
              <?php
                $defaults = array(
                  'theme_location'  => 'primary',
                  'menu'            => 'Menu principal',
                  'container'       => '',
                  'container_class' => '',
                  'container_id'    => '',
                  'menu_class'      => '',
                  'menu_id'         => '',
                  'echo'            => true,
                  'fallback_cb'     => 'primary',
                  'before'          => '',
                  'after'           => '',
                  'link_before'     => '',
                  'link_after'      => '',
                  'items_wrap'      => '%3$s',
                  'depth'           => 0,
                  'walker'          => '',
                );
                wp_nav_menu($defaults);
                
                /*$args = array( 'posts_per_page' => 1, 'orderby' => 'date', 'post_type' => 'produtos' );
                $posts = get_posts( $args );
                if($posts):
                  foreach ($posts as $post): setup_postdata( $post );
                    global $post;
                    printf('<li><a href="%s" title="Produtos">Produtos</a></li>', get_permalink($post->ID));
                  endforeach;
                  wp_reset_query();
                endif;*/

                if($redux_demo['fanpage-url'])
                  printf('<li><a href="%s" target="_blank" class="icon-facebookw d-iblock"></a></li>',$redux_demo['fanpage-url']);
              ?>
            </ul>
          </nav>
        </div>
      </div>
    </nav>