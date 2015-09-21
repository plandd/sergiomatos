<?php
  global $redux_demo;
  get_header();
?>
    <header id="home-header" class="small-12 left rel bg-ocean">
      <!-- loader -->
      <figure class="loader small-12 abs d-table">
        <div class="d-table-cell small-12 text-center">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/loading.gif" alt="">
        </div>
      </figure>
      
      <!-- logo -->
      <h1 class="logo-home abs"><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" alt=""></a></h1>

      <?php
        /**
         * SLIDER
         * -----------------------------------------------------------------------------
         * */
        require_once (dirname(__FILE__) . '/includes/components/home.slider.php');
      ?>

      <!-- main menu -->
      <nav id="main-menu-home" class="bg-ocean full-height small-3 left show-for-medium-up">
        <ul class="no-bullet d-iblock small-4 small-offset-4 left">
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
            if($redux_demo['fanpage-url'])
              printf('<li><a href="%s" target="_blank" class="icon-facebook d-iblock"></a></li>',$redux_demo['fanpage-url']);
          ?>
          <li><a href="#"><span class="icon-google_translate_copyrighted d-block"></span>Translate</a></li>
        </ul>
      </nav>

      <?php
        /**
         * PREMIOS
         * -----------------------------------------------------------------------------
         * */
        require_once (dirname(__FILE__) . '/includes/components/home.premios.php');
      ?>

    </header>
    <!-- premios mobile -->
    <section id="awards-mo" class="small-12 left show-for-medium-down"></section>
    
    <?php
      /**
       * BLOG
       * -----------------------------------------------------------------------------
       * */
      require_once (dirname(__FILE__) . '/includes/components/home.posts.php');

      /**
       * SOBRE
       * -----------------------------------------------------------------------------
       * */
      require_once (dirname(__FILE__) . '/includes/components/home.sobre.php');

      /**
       * NEWSLETTER
       * -----------------------------------------------------------------------------
       * */
      require_once (dirname(__FILE__) . '/includes/components/home.newsletter.php');
    
  get_footer();
?>
