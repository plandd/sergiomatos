<?php
  //get_header();
  include "header.php";
?>
  
  <nav id="post-list" class="small-12 left">
<?php
  if (have_posts()) : while (have_posts()) : the_post();
    global $post;
    $th = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
?>
    <!-- // post -->
    <div class="post-item small-12 left">
      <header id="post-header" class="small-12 left rel">
        <div class="row rel">
          
        </div>

        <div class="mask-header single small-12 abs d-table">
          <div class="d-table-cell small-12">
            <div class="row">
              <h1 class="small-10 columns text-up white header-black lh-1 no-margin">
                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="white"><?php the_title(); ?></a>  
              </h1>
            </div>
          </div>
        </div>

        <figure class="fea-blog small-12 medium-6 left show-onload" data-thumb="<?php echo $th[0]; ?>"></figure>
      </header>

      <section id="post-content" class="small-12 left rel">
<?php
$blockquote = get_field('post_blockquote',$post->ID);
if($blockquote):
?>
    <div class="post-blockquote abs d-table small-6">
      <div class="small-12 d-table-cell">
        
        <span class="small-12 left d-iblock text-center"><span class="d-iblock icon-rquote"></span></span>
        <div class="divide-10"></div>
        <h6 class="text-up no-margin text-center"><?php echo $blockquote; ?></h6>
        <div class="divide-10"></div>
        <span class="small-12 left d-iblock text-center"><span class="d-iblock icon-lquote"></span></span>

      </div>
    </div>
<?php
endif;
$post_img = get_field('post_imagem');
if($post_img):
?>
    <figure class="abs small-6 fea2-blog show-for-medium-up show-onload" data-thumb="<?php echo $post_img; ?>">
    </figure>
<?php endif; ?>
        
        <div class="row">
          <article class="small-12 medium-6 columns">
            <div class="divide-30"></div>
              <div class="post-excerpt small-12 left">
<?php
  echo substr(get_field('post_texto'), 0, 800);
?>
              </div>
          </article>
          
          <hgroup class="small-12 left post-options">
            
            <h5 class="text-up small-12 medium-3 columns share-prod">
              <a href="https://www.facebook.com/sharer/sharer.php?u=<?php get_permalink($post->ID); ?>" target="_blank"><i class="d-iblock left icon-share"></i><span class="left">Compartilhe</span></a>
            </h5>

            <h5 class="text-up small-12 medium-4 columns share-prod">
              <a href="<?php the_permalink(); ?>"><i class="d-iblock left icon-right"></i><span class="left">Leia na íntegra</span></a>
            </h5>

            <h5 class="text-up small-12 medium-5 columns">
              <time pubdate><span class="left">Postado em <?php echo date('d \d\e F \d\e Y'); ?></span></time>
            </h5>

          </hgroup>
        </div>
      </section>
    </div>
    <!-- // post -->
<?php endwhile; endif; ?>
  </nav>
  <!-- Pagination -->
 <footer id="nav-below" class="small-12 left text-center hide">
    <div class="divide-20"></div>
    <?php
      global $wp_query;

      $big = 999999999; // need an unlikely integer

      echo paginate_links( array(
        'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
        'format' => '?paged=%#%',
        'current' => max( 1, get_query_var('paged') ),
        'total' => $wp_query->max_num_pages,
        'next_text'    => '&raquo;',
        'prev_text'    => '&laquo;',
        'type'         => 'list',
      ) );
    ?>
  </footer>

<?php
  //get_footer();
  include "footer.php";
?>
