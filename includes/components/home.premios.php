<?php
global $redux_demo;
$sliders = $redux_demo['slides-winners'];
if(!empty($sliders)):
?>
<!-- premios -->
<section id="awards" class="abs show-for-large-up show-onload">
  <header class="small-12 left">
    <h5 class="white text-up divide-20">Prêmios recebidos</h5>
  </header>

  <nav class="nav-awards small-12 left owl-theme owl-responsive-1000 owl-loaded" role="navigation">
<?php
  foreach ($sliders as $slide):
    $th = wp_get_attachment_image_src( $slide['attachment_id'] , 'full' );
?>
    <figure class="item left">
      <a href="<?php echo $slide['url']; ?>" target="_blank" title="<?php echo $slide['description']; ?>" target="_blank"><img src="<?php echo $th[0]; ?>" alt="<?php echo $slide['title']; ?>"></a>
    </figure>
<?php
  endforeach;
?>
  </nav>
</section>
<?php endif; ?>
</header>
<section id="awards-mo" class="small-12 left show-for-medium-down"></section>