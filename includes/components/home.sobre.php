<!-- sobre / loja -->
<?php
$page = get_page_by_title( 'Estudio' );
$thumb = wp_get_attachment_image_src(get_post_thumbnail_id($page->ID), 'large');
$th = (isset($thumb)) ? $thumb[0] : '';
?>
<section id="about-smart" class="small-12 medium-6 large-7 left">
  <div class="small-12 left inner-section rel">
    <header class="small-12 left creator">
      <h5 class="regular text-up left regular-bold">
        <a href="<?php echo get_page_link( $page->ID ); ?>" title="Estúdio">
          <?php echo get_field('sobre_chamada',$page->ID); ?>
        </a>
      </h5>
    </header>
    <a href="<?php echo get_page_link( $page->ID ); ?>" class="small-12 abs mask show-onload" title="Estúdio" data-thumb="<?php echo $th; ?>"></a>
  </div>

  <div class="small-12 left inner-section rel">
<?php
$args = array( 'posts_per_page' => 1, 'orderby' => 'date', 'post_type' => 'produtos' );
$posts = get_posts( $args );
if($posts):
  foreach ($posts as $post): setup_postdata( $post );
    global $post;
    $thumb = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large');
    $th = (isset($thumb)) ? $thumb[0] : '';
?>
    <header class="small-12 left link-prd">
      <h5 class="regular text-up right regular-bold">
        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="d-block">Na loja <span class="d-block icon-cart"></span></a>
      </h5>
    </header>
    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="small-12 abs mask show-onload" data-thumb="<?php echo $th; ?>"></a>
<?php
  endforeach;
endif;
?>
  </div>
</section>