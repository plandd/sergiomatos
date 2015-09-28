<?php
  /**
  * Template Name: Contato
  * @package WordPress
  */
  get_header();
  global $redux_demo;
?>

  <header id="post-header" class="small-12 left rel contact">
    <div class="mask-header single small-12 abs d-table">
      
    </div>
    <div class="row">
      <div class="small-12 medium-6 large-5 medium-offset-2 columns contact-info">
        <h1 class="text-up type-bold"><?php the_title(); ?></h1>
<?php
  $tels = $redux_demo['sergio-tels'];
  while($i < count($tels)) {
    printf('<p>%s</p>',$tels[$i]);
    $i++;
  }
  if($redux_demo['sergio-email'])
    echo '<p class="email">'. $redux_demo['sergio-email'] .'</p>';
  if($redux_demo['sergio-local'])
    echo '<p class="local">'. $redux_demo['sergio-local'] .'</p>';
?>
      </div>
    </div>
  </header>

<?php
  get_footer();
?>
