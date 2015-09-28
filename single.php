<?php
  get_header();
  $thumb = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large');
  $th = (isset($thumb)) ? $thumb[0] : '';
  global $redux_demo;
?>
  <header id="post-header" class="small-12 left rel">
    <div class="row rel">
      
    </div>

    <div class="mask-header single small-12 abs d-table">
      <div class="d-table-cell small-12">
        <div class="row">
          <h1 class="small-10 columns text-up white header-black lh-1 no-margin">
           <?php the_title(); ?></h1>
          <h5 class="regular text-up share-prod small-10 columns end text-right show-for-large-up">
            <a href="https://www.facebook.com/sharer/sharer.php?u=<?php get_permalink($post->ID); ?>" target="_blank"><i class="d-iblock left icon-share"></i><span class="left">Compartilhe</span></a>
          </h5>
        </div>
      </div>
    </div>

    <figure class="fea-blog small-12 medium-6 left show-onload" data-thumb="<?php echo $th; ?>"></figure>
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
<?php endif; ?>

<?php
$post_img = get_field('post_imagem');
$post_img_desc = get_field('post_imagem_desc');
if($post_img):
  if($post_img_desc):
?>
    <div class="thumb-captions small-6 abs show-for-medium-up">
      <h6 class="text-up small-10 small-offset-1 left"><?php echo $post_img_desc; ?></h6>
    </div>
<?php 
  endif;
?>
    <figure class="abs small-6 fea2-blog show-for-medium-up show-onload" data-thumb="<?php echo $post_img; ?>">
    </figure>
<?php endif; ?>
    
    <div class="row">
      <article class="small-12 medium-6 columns">
        <div class="divide-30"></div>

<?php
  echo get_field('post_texto');
?>

        <div class="divide-30"></div>
      </article>
    </div>
  </section>

  <section id="gallery-prod " class="divide-30 show-onload">
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
$galeria = get_field('post_galeria');
$descriptions = array();
if($galeria):
  foreach ($galeria as $foto):
    $descriptions[] = ($foto['description'] == "") ? $foto['caption'] : $foto['description'];
?>
          <figure class="small-12 left" data-thumb="<?php echo $foto['sizes']['large']; ?>"></figure>
<?php
  endforeach;
endif;
?>
        </nav>

        <nav class="nav-prod-gal rel small-12 medium-6 large-5 columns bg-ocean cycle-slideshow"
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
            var disqus_shortname = 'FORUM SHORTNAME GOES HERE';
            
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
