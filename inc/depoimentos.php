<?php if(have_rows('depoimentos', 'options') ) : ?>
    <section id="depoimentos">
        <div class="gc-container">
            <div class="row">
                <hr>
            </div>
        </div>
        <div class="owl-carousel owl-theme">
          <?php while(the_repeater_field('depoimentos', 'options')) : ?>
            <div class="item">
              <div class="gc-container">
                <div class="row align-items-center">
                  <div class="col-8 offset-2 col-md-3 offset-md-1 fade-in">
                    <?php echo wp_get_attachment_image(get_sub_field('imagem'), 'full', "", array( "style" => "width: 100%; height: auto; border-radius: 50%;" )); ?>
                  </div>
                  <div class="col-12 col-md-6 offset-md-1 d-flex flex-column">
                    <p class="texto text-center text-md-left"><em><?php the_sub_field('texto') ?></em></p>
                    <p class="h5 text-center text-md-left cite"><?php the_sub_field('autor') ?><span class="organizacao"><?php the_sub_field('organizacao') ?></span></p>
                  </div>
                </div>
              </div>
            </div>
          <?php endwhile; ?>
        </div>
        <div class="nav">
          <div class="gc-container">
            <div class="row">
              <div class="col-12 d-flex flex-row justify-content-between">
                <div id="prev-depo" class="prev align-items-center justify-content-center">
                  <svg xmlns="http://www.w3.org/2000/svg" width="36" height="72" viewBox="0 0 36 72">
                    <path d="M34.00241,69.989,3.75495,40.17994a5.85262,5.85262,0,0,1,0-8.3623L34,2.011" />
                  </svg>
                </div>
                <div id="next-depo" class="next align-items-center justify-content-center">
                  <svg xmlns="http://www.w3.org/2000/svg" width="36" height="72" viewBox="0 0 36 72">
                    <path d="M1.99755,2.011,32.245,31.82006a5.85262,5.85262,0,0,1,0,8.3623L2,69.989" />
                  </svg>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>

    <script type="text/javascript">
        $(document).ready(function() {

            var carrossel_depoimentos = $('#depoimentos .owl-carousel');
            carrossel_depoimentos.owlCarousel({
                loop: true,
                margin: 12,
                dots: false,
                items: 1
            })
            $('#prev-depo').click(function() {
                carrossel_depoimentos.trigger('prev.owl.carousel');
            })
            $('#next-depo').click(function() {
                carrossel_depoimentos.trigger('next.owl.carousel');
            })
        });
    </script>
    
<?php endif; ?>
