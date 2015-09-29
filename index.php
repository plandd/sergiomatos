<?php
	get_header();
?>
	<header id="home-header" class="small-12 left rel bg-ocean">
    <figure class="loader small-12 abs d-table">
        <div class="d-table-cell small-12 text-center">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/loading.gif" alt="">
        </div>
        </figure>
      <h1 class="logo-home abs"><a href="<?php echo home_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" alt=""></a></h1>
<?php

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
            
            $args = array( 'posts_per_page' => 1, 'orderby' => 'date', 'post_type' => 'produtos' );
            $posts = get_posts( $args );
            if($posts):
              foreach ($posts as $post): setup_postdata( $post );
                global $post;
                printf('<li><a href="%s" title="Produtos">Produtos</a></li>', get_permalink($post->ID));
              endforeach;
            endif;

            if($redux_demo['fanpage-url'])
              printf('<li><a href="%s" target="_blank" class="icon-facebookw d-iblock"></a></li>',$redux_demo['fanpage-url']);
            
        ?>
		</ul>
	</nav>

<?php

	require_once (dirname(__FILE__) . '/includes/components/home.premios.php');

	require_once (dirname(__FILE__) . '/includes/components/home.posts.php');

	require_once (dirname(__FILE__) . '/includes/components/home.sobre.php');

	require_once (dirname(__FILE__) . '/includes/components/home.newsletter.php');

	get_footer();
?>
