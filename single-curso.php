<?php
    get_header();
?>
    <?php if(have_posts()) : the_post(); ?>
        <main>
            <section id="curso">
                <div class="intro">
                    <div class="gc-container">
                        <h1 class="fade-in"><?php echo get_the_title(); ?></h1>
                        <p class="col-sm-12 col-lg-8 offset-lg-2 fade-in"><?php echo get_field('resumo'); ?></p>
                        <a href="<?php echo get_field('link_entre_na_lista_de_espera'); ?>" target="_blank" class="btn btn-primary">Entre na lista de espera</a>
                        <div class="row">
                            <div class="col-12 video-container pausado">
                                <?php if(get_field('imagem_de_capa')) : ?>
                                    <img class="capa" src="<?php echo get_field('imagem_de_capa'); ?>">
                                <?php endif; ?>

                                <?php if(get_field('video')) : ?>
                                    <?php the_field('video'); ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="gc-container info">
                    <div class="row fade-in">
                        <h3 class="col-sm-12">Conteúdo</h3>
                        <div class="fio col-sm-12"><hr></div>
                        <ul class="col-sm-12 col-md-6 col-lg-6 conteudo">
                            <?php if(have_rows('lista_conteudo') ) : ?>
                                <?php while(the_repeater_field('lista_conteudo')) : ?>
                                    <li><?php echo get_sub_field('conteudo'); ?></li>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </ul>
                        <div class="fio col-sm-12 d-md-none">
                            <hr>
                        </div>
                        <ul class="col-sm-12 col-md-6 offset-lg-1 col-lg-5">
                            <li><strong>Carga horária: </strong><?php echo get_field('carga_horaria'); ?></li>
                            <li><strong>Professores: </strong><?php echo get_field('professores'); ?></li>
                            <li><strong>Próxima data e local: </strong><?php echo get_field('proxima_data_e_local'); ?></li>
                        </ul>
                    </div>
                </div>

                <?php $images = get_field('galeria'); ?>
                <?php if($images) : ?>
                    <section class="galeria-cursos">
                        <div class="gc-container" id="e_0">
                            <div class="row">
                                <div class="owl-carousel owl-theme col-12 col-lg-12 fade-in">
                                    <?php $j=0; ?>
                                    <?php foreach( $images as $image ): ?>
                                        <div class="item">
                                            <img class="e_img e_img_<?php echo $j; ?>" src="<?php echo $image['url']; ?>">
                                        </div>
                                        <?php $j++; ?>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                            <script>
                                $('#e_0 .owl-carousel').owlCarousel({
                                    margin: 12,
                                    responsive: {
                                        0: {
                                            items: 1,
                                            loop: true
                                        },
                                        576: {
                                            items: 3,
                                            loop: false,
                                            dots: false
                                        }
                                    }
                                })
                            </script>
                        </div>
                    </section>
                <?php endif; ?>
            </section>
        </main>
    <?php endif; ?>
<?php
	get_footer();
?>