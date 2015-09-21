<?php
global $redux_demo;
?>
<section id="main-slider" class="small-12 medium-9 left rel">
  
  <nav class="slider-items small-12 left rel cycle-slideshow show-onload"
    data-cycle-fx="scrollVert" 
    data-cycle-timeout="6000"
    data-cycle-slides="> figure"
    data-cycle-pager=".slider-pager"
    data-cycle-pager-template="<span></span>"
  >
<?php 
$sliders = $redux_demo['slides-panel'];
if(isset($sliders)):
  foreach ($sliders as $slide):
    $th = wp_get_attachment_image_src( $slide['attachment_id'] , 'full' );
?>
    <figure class="small-12 left" data-thumb="<?php echo $th[0]; ?>">
      <a href="<?php echo $slide['url']; ?>" title="<?php echo $slide['description']; ?>" class="d-block small-12 abs">
        <h5 class="right text-up regular-bold"><?php echo $slide['title']; ?> <span class="d-block icon-right"></span></h5>
      </a>
    </figure>
<?php
  endforeach;
endif;
?>
  </nav>

  <nav class="slider-pager abs show-onload"></nav>
</section>