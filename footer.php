<?php
global $redux_demo;
?>
    <footer id="footer" class="small-12 left section-60">
      <div class="row">

        <div class="small-12 columns">
          <nav class="small-12 left text-right text-center">
            <ul class="footer-menu inline-list d-iblock no-margin">
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
      printf('<li><a href="%s" title="Produtos">Produtos</a></li>',get_permalink($post->ID ));
    endforeach;
  endif;
?>
            </ul>
            <div class="divide-20"></div>
              <footer class="divide-20 text-center">
<?php
$tels = $redux_demo['sergio-tels'];
$i = 0;

echo '<p class="tels">';
foreach ($tels as $tel) {
  printf('<span>%s</span>',$tel);
}
echo '</p>';

if($redux_demo['sergio-email'])
  printf('<p class="text-up">E-mail: %s</p>',$redux_demo['sergio-email']);

if($redux_demo['sergio-local'])
  printf('<p class="text-up">%s</p>',$redux_demo['sergio-local']);
?>
            </footer>
          </nav>
        </div>

        <div class="small-12 medium-6 medium-offset-3 text-center">
          <h1 class="small-6 columns"><a href="<?php echo home_url(); ?>" title="Página principal">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-footer.png" alt="">
          </a></h1>
          <h1 class="small-6 columns"><a href="#" title="Parceiro">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/partner.png" alt="">
          </a></h1>
        </div>

      </div>
    </footer>
<?php wp_footer(); ?>
  </body>
</html>
</html>