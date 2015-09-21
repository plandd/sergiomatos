<!-- post -->
<section id="design-weed" class="small-12 medium-6 large-5 left bg-salmon">
<?php
$args = array( 'posts_per_page' => 1, 'orderby' => 'date' );
$posts = get_posts( $args );
if($posts):
  foreach ($posts as $post): setup_postdata( $post );
    global $post;
    $thumb = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large');
    $th = (isset($thumb)) ? $thumb[0] : '';
?>
  <figure class="small-12 left rel">
    <a href="<?php the_permalink(); ?>" class="d-block small-12 abs mask" title="<?php the_title(); ?>" data-thumb="<?php echo $th; ?>"></a>
    <figcaption class="small-12 abs">
      <h2 class="white text-up text-under lh-1 small-6 small-offset-3 left"><?php the_title(); ?></h2>
    </figcaption>
    <div class="bg-detail small-12 abs"></div>
  </figure>
  <article class="small-12 left d-table">
    <div class="d-table-cell small-12">
      <header class="divide-30">
        <a href="<?php the_permalink(); ?>" class="d-block icon-note" title="<?php the_title(); ?>"></a>
      </header>
      <p><?php echo substr(get_field('post_texto',$post->ID), 0, 250); ?>...</p>
      <p><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="d-block icon-right"></a></p>
    </div>
  </article>
<?php endforeach; endif; ?>
</section>