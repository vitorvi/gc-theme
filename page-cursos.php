<?php
    /*
    Template Name: Cursos
    */
    get_header();
?>
    <main>
        <section id="destaques">
            <div class="row">
                <div class="owl-carousel owl-theme col-lg-12"></div>
            </div>
        </section>

        <section class="comentario " id="intro-cursos">
            <div class="gc-container">
                <blockquote class="col-12 col-lg-8 offset-lg-2 e_txt texto-grande">
                    <?php echo get_field('texto_cursos', 'options'); ?>
                </blockquote>
            </div>
        </section>


        <?php query_posts(array('post_type' => 'curso', 'showposts' => -1)); ?>
        <?php if (have_posts()) : ?>
            <section id="cursos">
                <div class="gc-container">
                    <div class="mosaico row">
                        <?php while(have_posts()) : the_post(); ?> 
                            <a class="fade-in curso col-12" href="<?php the_permalink(); ?>">
                                <div class="conteudo">
                                    <div class="thumb">
                                        <?php $image =  wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full'); ?>
                                        <figure style="background-image: url(<?php echo $image[0]; ?>)"></figure>
                                        
                                    </div>
                                    <div class="titulo col">
                                        
                                        <h2 class="h2 d-none d-lg-block"><?php echo get_the_title(); ?></h2>
                                        <h2 class="h3 d-lg-none"><?php echo get_the_title(); ?></h2>
                                        <p class="resumo texto-pequeno"><?php echo get_field('resumo'); ?></p>
                                        <p class="resumo full-hd"><?php echo get_field('resumo'); ?></p>
                                    </div>
                                </div>
                            </a>
                        <?php endwhile; ?>
            
                        <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4 fade-in">
                            <div class="contato">
                                <p><?php echo get_field('texto_contato_cursos', 'options'); ?></p>
                                <a href="mailto:<?php echo get_field('email_cursos', 'options'); ?>" class="texto-medio"><?php echo get_field('email_cursos', 'options'); ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif; ?>
        <?php wp_reset_query(); ?>

        <script>
            var destaques = $('#destaques .owl-carousel');
            destaques.owlCarousel({
                items: 1,
                loop: false,
                dots: false,
                margin: false
            })
            $('#destaques').find('.next').click(function() {
                destaques.trigger('next.owl.carousel');
            })
            $('#destaques').find('.prev').click(function() {
                destaques.trigger('prev.owl.carousel');
            })
        </script>
    </main>
<?php
	get_footer();
?>