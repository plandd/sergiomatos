<!-- newsletter -->
<section id="newsletter" class="small-12 left bg-gold d-table">
  <div class="d-table-cell small-12">
    <div class="row">
<?php
global $redux_demo;
if($redux_demo['newsletter-header'])
  printf('<header class="divide-30 column text-center"><h3 class="text-up">%s</h3></header>',$redux_demo['newsletter-header']);
?>
      
      <article class="small-12 columns text-center">
<?php
if($redux_demo['newsletter-desc'])
  printf('<p>%s</p>',$redux_demo['newsletter-desc']);

if($redux_demo['newsletter-btn'])
  printf('<p class="no-margin"><a href="#" title="" class="button-glass text-up no-margin">%s</a></p>',$redux_demo['newsletter-btn']);
?>
      </article>
    </div>
  </div>
</section>