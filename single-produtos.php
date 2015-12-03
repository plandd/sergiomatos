<?php
  get_header();
  $thumb = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large');
  $th = (isset($thumb)) ? $thumb[0] : '';
?>
  <hedaer id="header-loja" class="divide-40">
    <div class="row">
      <div class="small-12 columns">
        <ul id="loja-cat" class="small-block-grid-1 medium-block-grid-3 large-block-grid-4">
<?php
$terms = get_terms( 'grupos', 'orderby=count&hide_empty=0&parent=0' );
if ( ! empty( $terms ) && ! is_wp_error( $terms ) ):
  foreach ($terms as $term):
    
    $args = array(
        'post_type' => 'produtos',
        'hide_empty' => 0,
        'tax_query' => array(
            array(
                'taxonomy' => 'grupos',
                'field' => 'slug',
                'terms' => $term->slug
            )
        )
    );
    $my_query = new WP_Query( $args );
    
?>
          <li class="<?php echo $term->name; ?>">
            <a data-dropdown="drop-<?php echo $term->term_id; ?>" aria-controls="drop-<?php echo $term->term_id; ?>" aria-expanded="false"><?php echo $term->name; ?> <span class="right icon-down d-iblock"></span></a>
            <ul id="drop-<?php echo $term->term_id; ?>" class="f-dropdown" data-dropdown-content aria-hidden="true" tabindex="-1">
<?php
    if( $my_query->have_posts() ) {
      while ($my_query->have_posts()) : $my_query->the_post();
        ?>
        <li><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></li>
        <?php
      endwhile;
      wp_reset_query();
    }
?>
            </ul>
          </li>
<?php
  endforeach;
endif;
?>
        </ul>
      </div>
    </div>
  </hedaer>

  <section id="about-prod" class="small-12 left">
    <div class="row">
      <figure class="small-12 medium-6 large-7 columns zoom-thumb">
        <img src="<?php echo $th; ?>" alt="" class="small-12 left">
        <div class="divide-30"></div>
      </figure>

      <article class="small-12 medium-6 large-5 columns">
        <div class="divide-40 show-for-medium-up"></div>
        <h1 class="text-up"><?php the_title(); ?></h1>
        <h5 class="regular text-up share-prod divide-30">
          <a href="https://www.facebook.com/sharer/sharer.php?u=<?php get_permalink($post->ID); ?>" target="_blank"><i class="d-iblock left icon-share"></i><span class="left">Compartilhe</span></a>
        </h5>
        <h5 class="small-12 left"><a href="<?php echo get_field('produto_url'); ?>" target="_blank" class="button-glass text-up">Ver na loja</a></h5>
      </article>
    </div>
  </section>

  <div class="divide-30"></div>

  <section id="prod-text" class="divide-30">
    <div class="row">
      <article class="small-12 medium-6 large-7 columns">
        <?php echo get_field('produto_txt'); ?>
      </article>

<?php
$produto_img = get_field('produto_img');
if( $produto_img ):
?>
      <figure class="small-12 medium-6 large-5 columns feature-thumb">
        <img src="<?php echo $produto_img; ?>" alt="" class="divide-20">
        <figcaption class="small-12 left">
          <h5 class="regular-bold text-up"><?php echo get_field('produto_img_desc'); ?></h5>
        </figcaption>
      </figure>
<?php endif; ?>
    </div>
  </section>

<?php
$produto_paleta = get_field('sm_paleta');
if ($produto_paleta):
?>
  <nav id="paleta-cores" class="divide-30">
    <div class="row">
      <nav id="color-paleta" class="small-12 columns">
        <div class="small-12 left">
          <header class="left">
            <h6 class="font-bold text-up no-margin">Paleta de cores disponíveis</h6>
          </header>

          <ul class="inline-list right no-margin">
<?php
foreach ($produto_paleta as $cor) {
  echo '<li><span class="d-iblock" style="background-color:'. $cor['sm_cor'] .';"></span></li>';
}
?>
          </ul>
        </div>
      </nav>
    </div>
  </nav>
<?php endif; ?>

  <section id="gallery-prod " class="divide-30">
    <div class="row">
      <div class="small-12 columns">
        <nav class="nav-prod-gal small-12 medium-6 large-7 left cycle-slideshow"
          data-cycle-fx="scrollHorz" 
          data-cycle-timeout="6000"
          data-cycle-slides="> figure"
          data-cycle-next=".next-prd"
          data-cycle-prev=".prev-prd"
        >
<?php
$galeria = get_field('produto_fotos');
$descriptions = array();
if($galeria):
  foreach ($galeria as $foto):
    $descriptions[] = ($foto['description'] == "") ? $foto['caption'] : $foto['description'];
?>
          <figure class="small-12 left mask no-repeat gal-produto" data-thumb="<?php echo $foto['sizes']['large']; ?>"></figure>
<?php
  endforeach;
endif;
?>
        </nav>

        <nav class="nav-prod-gal rel small-12 medium-6 large-5 columns bg-gold cycle-slideshow"
          data-cycle-fx="fade" 
          data-cycle-timeout="6000"
          data-cycle-slides="> article"
          data-cycle-next=".next-prd"
          data-cycle-prev=".prev-prd"
        >
<?php
foreach ($descriptions as $caption):
?>
          <article class="small-12 left">
            <h6 class="text-up"><?php echo $caption; ?></h6>
          </article>
<?php endforeach; ?>

          <div class="nav-slide-prod small-12 abs">
            <a href="#" class="right d-block icon-right next-prd"></a>
            <a href="#" class="left d-block icon-left prev-prd"></a>
          </div>
        </nav>
      </div>
    </div>
  </section>

  <section id="comments" class="divide-30">
    <div class="row">
      <div class="small-12 medium-6 large-7 columns">
        <div id="disqus_thread"></div>
        <script type="text/javascript">
            /* * * CONFIGURATION VARIABLES * * */
            // Required: on line below, replace text in quotes with your forum shortname
            var disqus_shortname = 'sergiojmatos';
            var disqus_title = "<?php the_title(); ?>";
            var disqus_url = "<?php the_permalink(); ?>";
            
            /* * * DON'T EDIT BELOW THIS LINE * * */
            (function() {
                var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
                dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
                (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
            })();
        </script>
        <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>
      </div>
    </div>
  </section>

<?php
  get_footer();
?>
