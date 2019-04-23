<?php
    get_header();
?>
    <main>
        <section id="capa-home">
            <video width="960" preload loop autoplay muted class="d-none d-lg-block">
                <source src="<?php echo get_field('video_home', 'options'); ?>" type="video/mp4">
            </video>
            <div class="chamada-home">
                <div class="gc-container">
                    <?php if(qtrans_getLanguage() == "pb") : ?>
                        <img src="<?php echo get_field('capa_home', 'options'); ?>" class="col-sm-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2">
                    <?php else : ?>
                        <img src="<?php echo get_field('capa_home_en', 'options'); ?>" class="col-sm-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2">
                    <?php endif; ?>
                </div>
            </div>
            <?php if(qtrans_getLanguage() == "pb") : ?>
                <div id="capa-home-mobile" class="d-lg-none" style="background-image: url('<?php echo get_field('capa_home_mobile', 'options'); ?>'); background-size: cover; width: 100%; background-position: center; background-repeat: no-repeat; height: 100vw"></div>
            <?php else : ?>
                <div id="capa-home-mobile" class="d-lg-none" style="background-image: url('<?php echo get_field('capa_home_mobile_en', 'options'); ?>'); background-size: cover; width: 100%; background-position: center; background-repeat: no-repeat; height: 100vw"></div>
            <?php endif; ?>
        </section>

        <?php $filtros = get_terms('filtro', array('hide_empty' => false,)); ?>
        <?php if($filtros) : ?>
            <section id="filtros">
                <nav class="gc-container justify-content-center d-none d-lg-flex">
                    <ul class="no-bullet">
                        <?php foreach ($filtros as $filtro) : ?>
                            <li data-filter="<?php echo $filtro->slug; ?>" class="filter">
                                <span><?php echo $filtro->name; ?></span>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </nav>

                <nav class="dropdown d-lg-none">
                    <button class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="chamada-filtro show"><?php echo __("<!--:pb-->Filtrar trabalhos<!--:--><!--:en-->Filter works<!--:-->"); ?></span>
                        <span class="filtro-aplicado"></span>
                    </button>
                    <ul class="filters dropdown-menu no-bullet" aria-labelledby="dropdownMenuButton">
                        <?php foreach ($filtros as $filtro) : ?>
                            <li class="dropdown-item filter" data-filter="<?php echo $filtro->slug; ?>">
                                <span><?php echo $filtro->name; ?></span>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </nav>
            </section>
        <?php endif; ?>

        <?php $i = 0; ?>
        <?php query_posts(array('post_type' => 'trabalho', 'showposts' => 7)); ?>
        <?php if (have_posts()) : ?>
            <section id="galeria">
                <div class="gc-container">
                    <div class="row">
                        <?php while(have_posts()) : the_post(); ?>
                            <?php $image =  wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full'); ?>
                            <?php $terms = wp_get_post_terms( get_the_ID(), 'filtro', array() ); ?>
                            <?php if($i>0) : ?>
                                <a class="fade-in thumb-projeto filter-item <?php foreach ($terms as $term) : echo $term->slug.' '; endforeach; ?> col-12 col-md-6 col-lg-4 shown" data-category="<?php foreach ($terms as $term) : echo $term->slug.' '; endforeach; ?>" href="<?php the_permalink(); ?>" onmouseover="grad(event, this);" onmousemove="grad(event, this);">
                                    <div class="thumb" style="background-image: url(<?php echo $image[0]; ?>)">
                                        <div class="conteudo col">
                                            <h2 class="h3 titulo d-none d-lg-block"><?php echo get_the_title(); ?></h2>
                                            <h2 class="h4 titulo d-lg-none"><?php echo get_the_title(); ?></h2>
                                            <div class="categorias">
                                                <hr class="d-none d-lg-block">
                                                <?php $j=0; ?>
                                                <?php if($terms) : ?>
                                                    <p class="texto-pequeno">
                                                        <?php foreach ($terms as $term) : ?>
                                                            <?php if($j>0) : ?>
                                                                <span>&nbsp;•&nbsp;<?php echo $term->name; ?></span>
                                                            <?php else : ?>
                                                                <span><?php echo $term->name; ?></span>
                                                            <?php endif; ?>
                                                            <?php $j++; ?>
                                                        <?php endforeach; ?>
                                                    </p>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            <?php else : ?>
                                <a class="fade-in thumb-projeto filter-item <?php foreach ($terms as $term) : echo $term->slug.' '; endforeach; ?> destaque col-12 col-md-12 col-lg-12 shown" data-category="<?php foreach ($terms as $term) : echo $term->slug.' '; endforeach; ?>" href="<?php the_permalink(); ?>" onmouseover="grad(event, this);" onmousemove="grad(event, this);">
                                    <div class="thumb" style="background-image: url(<?php echo $image[0]; ?>)">
                                        <div class="conteudo col">
                                            <h2 class="h1 titulo d-none d-lg-block"><?php echo get_the_title(); ?></h2>
                                            <h2 class="h4 titulo d-lg-none"><?php echo get_the_title(); ?></h2>
                                            <div class="categorias">
                                                <hr class="d-none d-lg-block">
                                                <?php $j=0; ?>
                                                <?php if($terms) : ?>
                                                    <p class="texto-pequeno">
                                                        <?php foreach ($terms as $term) : ?>
                                                            <?php if($j>0) : ?>
                                                                <span>&nbsp;•&nbsp;<?php echo $term->name; ?></span>
                                                            <?php else : ?>
                                                                <span><?php echo $term->name; ?></span>
                                                            <?php endif; ?>
                                                            <?php $j++; ?>
                                                        <?php endforeach; ?>
                                                    </p>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            <?php endif; ?>
                            <?php $i++; ?>
                        <?php endwhile; ?>
                    </div>
                    <div class="row mais-projetos">
                        <a href="<?php echo get_bloginfo('url'); ?>/trabalhos" class="btn btn-primary btn-lg ml-auto mr-auto">
                            <?php echo __("<!--:pb-->Mais projetos<!--:--><!--:en-->More Projects<!--:-->"); ?>
                        </a>
                    </div>
                </div>
            </section>
        <?php endif; ?>
        <?php wp_reset_query(); ?>

        <?php include('inc/clientes.php'); ?>
        <?php include('inc/depoimentos.php'); ?>

    </main>
<?php
    get_footer();
?>
