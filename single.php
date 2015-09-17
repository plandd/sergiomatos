<?php
  //get_header();
  include "header.php";
?>
  
  <header id="post-header" class="small-12 left rel">
    <div class="row rel">
      
    </div>

    <div class="mask-header single small-12 abs d-table">
      <div class="d-table-cell small-12">
        <div class="row">
          <h1 class="small-10 columns text-up white header-black lh-1 no-margin">
            A semente do design germina</h1>
          <h5 class="regular text-up share-prod small-10 columns end text-right show-for-large-up">
            <a href="#" class="right"><i class="d-iblock left icon-share"></i><span class="left">Compartilhe</span></a>
          </h5>
        </div>
      </div>
    </div>

    <figure class="fea-blog small-12 medium-6 left show-onload" data-thumb="media/blog1.jpg"></figure>
  </header>

  <section id="post-content" class="small-12 left rel">

    <div class="post-blockquote abs d-table small-6">
      <div class="small-12 d-table-cell">

        <span class="small-12 left d-iblock text-center"><span class="d-iblock icon-rquote"></span></span>
        <div class="divide-10"></div>
        <h6 class="text-up no-margin">Aprendi mais que ensinei. Nos silêncios, nos ritos cotidianos, nas escolhas, na trama das fibras por entre os dedos e nos gestos simples que dão verdadeiro sentido à vida.</h6>
        <div class="divide-10"></div>
        <span class="small-12 left d-iblock text-center"><span class="d-iblock icon-lquote"></span></span>

      </div>
    </div>

    <figure class="abs small-6 fea2-blog show-for-medium-up show-onload" data-thumb="media/blog2.jpg">
    </figure>
    
    <div class="row">
      <article class="small-12 medium-6 columns">
        <div class="divide-30"></div>

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos eius ad, fugit sed ut, corporis vel amet aliquam repudiandae, harum debitis. Sapiente atque nulla enim consequuntur ad minus! Nesciunt, enim. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil autem alias, voluptatum accusantium quia deserunt. Dignissimos eos aliquid neque, eligendi pariatur cupiditate laborum similique, sed ab asperiores molestiae expedita officiis. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis accusantium tempore reprehenderit repellendus totam, vel, aspernatur architecto incidunt commodi quod maiores praesentium cum quos esse suscipit, assumenda consequatur quidem! Recusandae.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime laudantium, incidunt commodi, sapiente mollitia neque repellendus culpa aut similique ipsum veniam recusandae iste. Beatae totam eligendi cumque velit, dicta debitis. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque adipisci, quidem unde. Excepturi quaerat saepe aliquid explicabo cum pariatur iusto laudantium! Cumque assumenda at delectus sit provident sint, magnam tempora!</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus, iure facere, hic ratione perferendis debitis reprehenderit officia maxime eligendi, minima, corporis rerum quae aut. In consequatur, id tempora ipsum a? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui delectus sit rerum placeat earum laudantium ab quaerat nesciunt at saepe amet animi iusto aspernatur, laborum voluptates nobis eligendi modi, libero.</p>

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
          <figure class="small-12 left" data-thumb="media/slprd1.jpg"></figure>
          <figure class="small-12 left" data-thumb="media/slide1.jpg"></figure>
          <figure class="small-12 left" data-thumb="media/slide2.jpg"></figure>
        </nav>

        <nav class="nav-prod-gal rel small-12 medium-6 large-5 columns bg-ocean cycle-slideshow"
          data-cycle-fx="fade" 
          data-cycle-timeout="6000"
          data-cycle-slides="> article"
          data-cycle-next=".next-prd"
          data-cycle-prev=".prev-prd"
        >
          <article class="small-12 left">
            <h6 class="text-up">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique consectetur iusto molestias vel nostrum, aliquam, ipsum minus illum, magnam tempora ipsam, earum vitae sapiente neque unde cum quas perspiciatis nam.</h6>
          </article>

          <article class="small-12 left">
            <h6 class="text-up">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat soluta ducimus rem accusamus laudantium tenetur laborum tempore quisquam, accusantium recusandae reprehenderit magni sit ullam qui veniam perspiciatis asperiores iste modi.</h6>
          </article>

          <article class="small-12 left">
            <h6 class="text-up">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa rem non ea a ipsum officia animi, laboriosam ducimus blanditiis nulla, ipsa tempora recusandae ad quas voluptatibus id dolor ex quidem?</h6>
          </article>

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
  //get_footer();
  include "footer.php";
?>
