<?php
  //get_header();
  include "header.php";
?>
  
  <hedaer id="header-loja" class="divide-40">
    <div class="row">
      <div class="small-12 columns">
        <ul id="loja-cat" class="small-block-grid-1 medium-block-grid-3 large-block-grid-5">
          <li>
            <a data-dropdown="drop1" aria-controls="drop1" aria-expanded="false">Mobiliário <span class="right icon-down d-iblock"></span></a>
            <ul id="drop1" class="f-dropdown" data-dropdown-content aria-hidden="true" tabindex="-1">
              <li><a href="#">This is a link</a></li>
              <li><a href="#">This is another</a></li>
              <li><a href="#">Yet another</a></li>
            </ul>
          </li>

          <li>
            <a data-dropdown="drop2" aria-controls="drop1" aria-expanded="false">Luminárias <span class="right icon-down d-iblock"></span></a>
            <ul id="drop2" class="f-dropdown" data-dropdown-content aria-hidden="true" tabindex="-1">
              <li><a href="#">This is a link</a></li>
              <li><a href="#">This is another</a></li>
              <li><a href="#">Yet another</a></li>
            </ul>
          </li>

          <li>
            <a data-dropdown="drop3" aria-controls="drop1" aria-expanded="false">Tapetes <span class="right icon-down d-iblock"></span></a>
            <ul id="drop3" class="f-dropdown" data-dropdown-content aria-hidden="true" tabindex="-1">
              <li><a href="#">This is a link</a></li>
              <li><a href="#">This is another</a></li>
              <li><a href="#">Yet another</a></li>
            </ul>
          </li>

          <li>
            <a data-dropdown="drop4" aria-controls="drop1" aria-expanded="false">Fruteiras <span class="right icon-down d-iblock"></span></a>
            <ul id="drop4" class="f-dropdown" data-dropdown-content aria-hidden="true" tabindex="-1">
              <li><a href="#">This is a link</a></li>
              <li><a href="#">This is another</a></li>
              <li><a href="#">Yet another</a></li>
            </ul>
          </li>

          <li>
            <a data-dropdown="drop5" aria-controls="drop1" aria-expanded="false">Bolsas <span class="right icon-down d-iblock"></span></a>
            <ul id="drop5" class="f-dropdown" data-dropdown-content aria-hidden="true" tabindex="-1">
              <li><a href="#">This is a link</a></li>
              <li><a href="#">This is another</a></li>
              <li><a href="#">Yet another</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </hedaer>

  <section id="about-prod" class="small-12 left">
    <div class="row">
      <figure class="small-12 medium-6 large-7 columns zoom-thumb">
        <img src="media/slide3.jpg" alt="" class="small-12 left">
        <div class="divide-30"></div>
      </figure>

      <article class="small-12 medium-6 large-5 columns">
        <div class="divide-40 show-for-medium-up"></div>
        <h1 class="text-up">Poltrona corais de acaú</h1>
        <h5 class="regular text-up share-prod divide-30">
          <a href="#"><i class="d-iblock left icon-share"></i><span class="left">Compartilhe</span></a>
        </h5>
        <h5 class="small-12 left"><a href="#" class="button-glass text-up">Ver na loja</a></h5>
      </article>
    </div>
  </section>

  <div class="divide-30"></div>

  <section id="prod-text" class="divide-30">
    <div class="row">
      <article class="small-12 medium-6 large-7 columns">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores sequi consequatur veritatis incidunt nihil molestiae maiores doloremque quia! Sed error voluptatibus ducimus consequatur eius assumenda perferendis explicabo et ipsum, doloribus! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse magnam atque, nostrum modi vitae totam nesciunt. Nisi, perferendis, corporis! Nulla inventore, cum id, excepturi tempora aliquid enim quo doloribus quia! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est ullam iure mollitia aliquam non rem ipsam a illo, alias distinctio odio esse voluptatum et animi accusamus deserunt placeat magni, magnam. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur ullam quae est dolorum quas adipisci tempore consectetur eum illum, veritatis, velit magnam natus corporis accusantium explicabo, autem maiores non possimus.</p>
      </article>

      <figure class="small-12 medium-6 large-5 columns feature-thumb">
        <img src="media/fealoja.jpg" alt="" class="divide-20">
        <figcaption class="small-12 left">
          <h5 class="regular-bold text-up">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h5>
        </figcaption>
      </figure>
    </div>
  </section>

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
          <figure class="small-12 left" data-thumb="media/slprd1.jpg"></figure>
          <figure class="small-12 left" data-thumb="media/slide1.jpg"></figure>
          <figure class="small-12 left" data-thumb="media/slide2.jpg"></figure>
        </nav>

        <nav class="nav-prod-gal rel small-12 medium-6 large-5 columns bg-gold cycle-slideshow"
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
