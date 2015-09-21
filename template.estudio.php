<?php
  /**
  * Template Name: Estúdio
  * @package WordPress
  */
  get_header();

  $foto_sergio = get_field('sergio_foto');
  $sergio_foto_flutuante = get_field('sergio_foto_flutuante');
  $sergio_foto_flutuante_2 = get_field('sergio_foto_flutuante_2');
  $sergio_foto_flutuante_3 = get_field('sergio_foto_flutuante_3');
  $membros = get_field('sergio_membros');
?>

  <header id="estudio-header" class="small-12 left rel">
    
    <div class="mask-header small-12 abs d-table">
      <div class="d-table-cell small-12">
        <div class="row">
          <h1 class="small-12 medium-6 large-5 columns text-up white header-black lh-1 no-margin">
            Um
            <span class="d-block">estúdio</span>
            <span class="d-block">de todos</span>
          </h1>
          <h5 class="text-up white left column lh-1">Desde<span class="d-block">2011</span></h5>
        </div>
      </div>
    </div>
<?php
  if($foto_sergio):
?>
    <figure class="small-12 medium-7 medium-offset-4 left show-onload">
      <img src="<?php echo $foto_sergio; ?>" alt="">
    </figure>
<?php
  endif;

  if($sergio_foto_flutuante):
?>
    
    <figure class="balaio abs show-for-large-up show-onload">
      <img src="<?php echo $sergio_foto_flutuante; ?>" alt="">
    </figure>
<?php endif; ?>
  </header>

  <section id="estudio-content" class="small-12 left rel">
    <div class="row rel">
      <article class="about-sergio small-12 large-4 columns rel">
        <header class="small-12 abs show-for-medium-up"><h4 class="text-up">Sobre <span class="d-block">Sérgio</span></h4></header>

        <header class="small-12 left show-for-small-only"><h5 class="text-up">Sobre <span class="d-block">Sérgio</span></h5></header>
<?php
  echo get_field('sobre_sergio');
?>
        <div class="divide-40"></div>
      </article>

      <article class="small-12 left">
<?php
  if(get_field('sergio_dev_produtos')):
?>
        <div class="small-12 medium-6 large-5 columns">
          <header class="divide-30"><h4 class="text-up">Desenvolvimento de produto</h4></header>
          <?php echo get_field('sergio_dev_produtos'); ?>
        </div>
<?php
  endif;
  if(get_field('sergio_cenografia')):
?>

        <div class="small-12 medium-6 large-7 columns">
          <header class="divide-30"><h4 class="text-up">Cenografia</h4></header>
          <?php echo get_field('sergio_cenografia'); ?>
        </div>
<?php endif; ?>
      </article>

      <article class="small-12 left">
<?php
  if($sergio_foto_flutuante_3):
?>
        <div class="small-5 columns rel show-for-large-up">
          <figure class="abs small-12 left sra show-onload">
            <img src="<?php echo $sergio_foto_flutuante_3; ?>" alt="">
          </figure>
        </div>
<?php
  endif;
  if(get_field('sergio_consultoria')):
?>
        <div class="small-12 large-7 columns">
          <header class="divide-30"><h4 class="text-up">consultoria para empresas e grupos de artesanatos</h4></header>
          <?php echo get_field('sergio_consultoria'); ?>
        </div>
<?php endif; ?>
      </article>
    </div>
<?php
  if($sergio_foto_flutuante_2):
?>
    <figure class="corais abs show-for-large-up show-onload">
      <img src="<?php echo $sergio_foto_flutuante_2; ?>" alt="">
    </figure>
<?php endif; ?>
  </section>

  <section id="team" class="small-12 left">
    <div class="row">
      <header class="small-12 large-4 large-offset-5 columns">
        <h2 class="text-up text-under white no-margin">
          Equipe
          <span class="d-block">de apoio</span>
        </h2>
        <div class="divide-30"></div>
      </header>

      <nav class="small-12 columns">
        <ul class="small-block-grid-2 medium-block-grid-3 large-block-grid-5 show-onload">
<?php
if($membros):
  foreach ($membros as $membro):
?>
          <li>
            <figure class="d-iblock" data-thumb="<?php echo $membro['membros_img']; ?>"></figure>
            <h5 class="small-12 left text-up lh-12 regular-bold">
              <?php echo $membro['membro_nome']; ?>
            </h5>
          </li>
<?php
  endforeach;
endif;
?>
        </ul>
      </nav>
    </div>
  </section>

<?php
  get_footer();
?>
