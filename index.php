<?php
  //get_header();
  include "header.php";
?>
    <header id="home-header" class="small-12 left rel bg-ocean">
      <!-- loader -->
      <figure class="loader small-12 abs d-table">
        <div class="d-table-cell small-12 text-center">
          <img src="images/loading.gif" alt="">
        </div>
      </figure>
      
      <!-- logo -->
      <h1 class="logo-home abs"><a href="#"><img src="images/logo.png" alt=""></a></h1>

      <!-- slider -->
      <section id="main-slider" class="small-12 medium-9 left rel">
        
        <nav class="slider-items small-12 left rel cycle-slideshow show-onload"
          data-cycle-fx="scrollVert" 
          data-cycle-timeout="6000"
          data-cycle-slides="> figure"
          data-cycle-pager=".slider-pager"
          data-cycle-pager-template="<span></span>"
        >
          <figure class="small-12 left" data-thumb="media/slide1.jpg">
            <a href="#" title="" class="d-block small-12 abs">
              <h5 class="right text-up regular-bold">Poltronas corais de Acaú <span class="d-block icon-right"></span></h5>
            </a>
          </figure>

          <figure class="small-12 left" data-thumb="media/slide2.jpg">
            <a href="#" title="" class="d-block small-12 abs">
              <h5 class="right text-up regular-bold">Poltronas corais de Acaú <span class="d-block icon-right"></span></h5>
            </a>
          </figure>

          <figure class="small-12 left" data-thumb="media/slide3.jpg">
            <a href="#" title="" class="d-block small-12 abs">
              <h5 class="right text-up regular-bold">Poltronas corais de Acaú <span class="d-block icon-right"></span></h5>
            </a>
          </figure>
        </nav>

        <nav class="slider-pager abs show-onload"></nav>
      </section>

      <!-- main menu -->
      <nav id="main-menu-home" class="bg-ocean full-height small-3 left show-for-medium-up">
        <ul class="no-bullet d-iblock small-4 small-offset-4 left">
          <li><a href="#">Inicial</a></li>
          <li><a href="#">Estúdio</a></li>
          <li><a href="#">Produtos</a></li>
          <li><a href="#">Blog</a></li>
          <li><a href="#">Loja</a></li>
          <li><a href="#">Contato</a></li>
          <li><a href="#" class="icon-facebook"></a></li>
          <li><a href="#"><span class="icon-google_translate_copyrighted d-block"></span>Translate</a></li>
        </ul>
      </nav>

      <!-- premios -->
      <section id="awards" class="abs show-for-large-up show-onload">
        <header class="small-12 left">
          <h5 class="white text-up divide-20">Prêmios recebidos</h5>
        </header>

        <nav class="nav-awards small-12 left owl-theme owl-responsive-1000 owl-loaded" role="navigation">
            <figure class="item left">
              <a href="#" title="" target="_blank"><img src="media/aw1.png" alt=""></a>
            </figure>
            <figure class="item left">
              <a href="#" title="" target="_blank"><img src="media/aw2.png" alt=""></a>
            </figure>
            <figure class="item left">
              <a href="#" title="" target="_blank"><img src="media/aw3.png" alt=""></a>
            </figure>
            <figure class="item left">
              <a href="#" title="" target="_blank"><img src="media/aw4.png" alt=""></a>
            </figure>
            <figure class="item left">
              <a href="#" title="" target="_blank"><img src="media/aw5.png" alt=""></a>
            </figure>
            <figure class="item left">
              <a href="#" title="" target="_blank"><img src="media/aw6.png" alt=""></a>
            </figure>
        </nav>
      </section>
    </header>
    <!-- premios mobile -->
    <section id="awards-mo" class="small-12 left show-for-medium-down"></section>
    
    <!-- post -->
    <section id="design-weed" class="small-12 medium-6 large-5 left bg-salmon">
      <figure class="small-12 left rel">
        <a href="#" class="d-block small-12 abs mask" title="" data-thumb="media/blog1.jpg"></a>
        <figcaption class="small-12 abs">
          <h2 class="white text-up text-under lh-1 small-6 small-offset-3 left">O Design <span class="d-block">é semente</span></h2>
        </figcaption>
        <div class="bg-detail small-12 abs"></div>
      </figure>
      <article class="small-12 left d-table">
        <div class="d-table-cell small-12">
          <header class="divide-30">
            <a href="#" class="d-block icon-note"></a>
          </header>
          <p>Dentro dessa metáfora, as comunidades indígenas e ribeirinhas do Amazonas são o solo fértil arado pela cultura dos saberes ancestrais e capaz de fazer germinar sonhos.</p>
          <p><a href="" title="" class="d-block icon-right"></a></p>
        </div>
      </article>
    </section>
    
    <!-- sobre / loja -->
    <section id="about-smart" class="small-12 medium-6 large-7 left">
      <div class="small-12 left inner-section rel">
        <header class="small-12 left creator">
          <h5 class="regular text-up left regular-bold">
            <a href="#" title="">
              O<span class="d-block">criador</span>
              e seu
              <span class="d-block">estúdio</span>
              <span class="d-block icon-right"></span>
            </a>
          </h5>
        </header>
        <a href="#" class="small-12 abs mask show-onload" title="" data-thumb="media/criador.jpg"></a>
      </div>

      <div class="small-12 left inner-section rel">
        <header class="small-12 left link-prd">
          <h5 class="regular text-up right regular-bold">
            <a href="#" title="">Poltrona Cariri</a>
            <a href="#" title="" class="d-block">Na loja <span class="d-block icon-cart"></span></a>
          </h5>
        </header>
        <a href="#" class="small-12 abs mask show-onload" title="" data-thumb="media/produto.jpg"></a>
      </div>
    </section>
    
    <!-- newsletter -->
    <section id="newsletter" class="small-12 left bg-gold d-table">
      <div class="d-table-cell small-12">
        <div class="row">
          <header class="divide-30 column text-center">
            <h3 class="text-up">Inscreva-se em nossa lista de cartinhas</h3>
          </header>
          <article class="small-12 columns text-center">
            <p>Estamos sempre produzindo textos reflexivos e compartilhando nossas ideias sobre como o design pode mudar o mundo. Enviamos a cada duas semanas uma cartinha para os nossos seguidores, cheia de referências e conteúdos interessantes, além de ofertas exclusivas para os nossos produtos.</p>
            <p class="no-margin">
              <a href="#" title="" class="button-glass text-up no-margin">Quero receber</a>
            </p>
          </article>
        </div>
      </div>
    </section>

<?php
  //get_footer();
  include "footer.php";
?>
