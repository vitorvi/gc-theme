<?php
    /*
    Template Name: Trabalhos
    */
    get_header();
?>
    <main>
        <section id="capa-trabalhos">
            <div class="gc-container">
                <blockquote class="h0 col-12 col-xl-10 offset-xl-1">
                    <?php if(qtrans_getLanguage() == "pb") : ?>
                        Ideias que <br>tiramos do papel
                    <?php elseif(qtrans_getLanguage() == "en") : ?>
                        Ideas that<br>came to life
                    <?php endif; ?>
                </blockquote>
            </div>
        </section>

        <?php $filtros = get_terms('filtro', array('hide_empty' => false,)); ?>
        <?php if($filtros) : ?>
            <section id="filtros">
                <nav class="gc-container justify-content-center d-none d-lg-flex">
                    <ul class="no-bullet">
                        <li data-filter="todos" class="filter is-checked"><?php echo __("<!--:pb-->Todos<!--:--><!--:en-->All<!--:-->"); ?></li>
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
                        <li data-filter="todos" class="dropdown-item filter is-checked"><?php echo __("<!--:pb-->Todos<!--:--><!--:en-->All<!--:-->"); ?></li>
                        <?php foreach ($filtros as $filtro) : ?>
                            <li class="dropdown-item filter" data-filter="<?php echo $filtro->slug; ?>">
                                <span><?php echo $filtro->name; ?></span>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </nav>
            </section>
        <?php endif; ?>
        
        <section id="galeria">
            <div class="gc-container">
                <div class="row">
                    <?php foreach ($filtros as $filtro) : ?>
                        <div class="filter-item descricao col-12 col-md-6 col-lg-4 hidden" data-category="cabecalho <?php echo $filtro->slug; ?>">
                            <p class="texto-pequeno"><?php echo get_field('descricao', 'filtro_'.$filtro->term_id); ?></p>
                        </div>
                    <?php endforeach; ?>

                    <?php query_posts(array('post_type' => 'trabalho', 'showposts' => -1)); ?>
                    <?php if (have_posts()) : ?>
                        <?php while(have_posts()) : the_post(); ?> 
                            <?php $image =  wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full'); ?>
                            <?php $terms = wp_get_post_terms( get_the_ID(), 'filtro', array() ); ?>
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
                        <?php endwhile; ?>
                    <?php endif; ?>
                    <?php wp_reset_query(); ?>            
                </div>
            </div>
        </section>

        <?php include('inc/clientes.php'); ?>
    </main>
<?php
	get_footer();
?>