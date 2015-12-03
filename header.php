<?php
global $redux_demo;
?>
<!doctype html>
<html class="no-js" lang="pt-br">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php bloginfo('name'); ?> | <?php is_home()?bloginfo('description'):wp_title(''); ?></title>
    <link rel="shortcut icon" href="<?php echo $stylesheet_directory; ?>/favicon.ico" type="image/vnd.microsoft.icon"/>
    <link rel="icon" href="<?php echo $stylesheet_directory; ?>/favicon.ico" type="image/x-ico"/>
    
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
          <a href="<?php translateSite(); ?>" class="icon-transw d-block no-margin"></a>
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


                $args = array(
                    'posts_per_page' => 1,
                    'orderby' => 'date',
                    'post_type' => 'produtos'
                );
                $the_query = new WP_Query( $args );

                if ( $the_query->have_posts() ) :  while ( $the_query->have_posts() ) : $the_query->the_post();
                    global $post;
                    printf('<li><a href="%s" title="Produtos">Produtos</a></li>', get_permalink($post->ID));
                endwhile; wp_reset_postdata(); endif;
              ?>
            </ul>
            
            <nav class="small-12 left text-center social-canvas">

              <ul class="inline-list d-iblock no-margin">
                <?php
                  if($redux_demo['fanpage-url'])
                    printf('<li><a href="%s" target="_blank" class="icon-facebook d-iblock"></a></li>',$redux_demo['fanpage-url']);

                  if($redux_demo['twitter-url'])
                    printf('<li><a href="%s" target="_blank" class="icon-twitter d-iblock"></a></li>',$redux_demo['twitter-url']);

                  if($redux_demo['instagram-url'])
                    printf('<li><a href="%s" target="_blank" class="icon-instagram d-iblock"></a></li>',$redux_demo['instagram-url']);

                  if($redux_demo['pinterest-url'])
                    printf('<li><a href="%s" target="_blank" class="icon-pinterest d-iblock"></a></li>',$redux_demo['pinterest-url']);

                  if($redux_demo['youtube-url'])
                    printf('<li><a href="%s" target="_blank" class="icon-youtube d-iblock"></a></li>',$redux_demo['youtube-url']);
                ?>
              </ul>

            </nav>
          </nav>
        </div>
      </div>
    </nav>