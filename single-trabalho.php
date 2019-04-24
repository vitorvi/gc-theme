<?php
    get_header();
?>
    <main>
        <?php if(have_posts()) : the_post(); ?>
            <style type="text/css">
                a {
                    color: <?php echo get_field('cor'); ?>;
                }
                a:hover {
                    color: <?php echo get_field('cor'); ?>;
                }
                .progress {
                   //border-color: <?php echo get_field('cor'); ?>;
                }
                #projeto .video-medio .controls .progress-bar .progress span.buffer, #projeto .video-grande .controls .progress-bar .progress span.buffer {
                    background-color: <?php echo get_field('cor'); ?>;
                }
                #projeto .video-medio .controls .progress-bar .progress span.current, #projeto .video-grande .controls .progress-bar .progress span.current {
                    background-color: <?php echo get_field('cor'); ?>;
                }
                #projeto .video-medio .controls button:hover svg, #projeto .video-grande .controls button:hover svg, #projeto .video-cheio .controls button:hover svg {
                    stroke: <?php echo get_field('cor'); ?>;
                }
                #projeto *::selection {
                    background-color: <?php echo get_field('cor'); ?>;
                    color: $branco;
                }

                .margin-top-negative {
                    margin-top: -4rem;
                }

                @media (max-width: 767px) {
                    .margin-top-negative {
                        margin-top: -2rem;
                    }
                }

            </style>

            <section id="capa-projeto">
                <div class="parallax-background d-none d-sm-block" style="background-image: url(<?php echo get_field('capa'); ?>);" data-speed="2"></div>
                <?php $image =  wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full'); ?>
                <div class="parallax-background d-sm-none" style="background-image: url(<?php echo $image[0]; ?>);" data-speed="2"></div>
            </section>

            <main id="projeto">
                <div class="intro-projeto gc-container">
                    <h1 class="col" style="color:<?php echo get_field('cor'); ?>"><?php echo get_the_title(); ?></h1>
                    <p class="col-sm-12 col-lg-10 offset-lg-1 texto-grande"><?php echo get_field('resumo'); ?></p>
                    <?php if(get_field('texto_pequeno')) : ?>
                        <p class="premio texto-pequeno col-sm-12 col-lg-4 offset-lg-4"><?php echo get_field('texto_pequeno'); ?></p>
                    <?php endif; ?>
                </div>

                <?php if(have_rows('conteudo')): ?>
                    <?php $i=0; ?>
                    <?php while (have_rows('conteudo')) : the_row(); ?>
                        <?php if(get_row_layout() == 'imagem_pequena'): ?>
                            <div class="img-pequena gc-container" id="e_0">
                                <figure class="fade-in row">
                                    <img class="e_img offset-3 col-6 col-lg-4 offset-lg-4" src="<?php echo get_sub_field('imagem'); ?>" />
                                </figure>
                            </div>
                        <?php elseif(get_row_layout() == 'imagem_total'): ?>
                            <figure class="fade-in img-cheia" id="e_<?php echo $i; ?>">
                                <img src="<?php echo get_sub_field('imagem'); ?>" class="e_img" />
                            </figure>
                        <?php elseif(get_row_layout() == 'imagem_cheia_no_margin_nogutter'): ?>
                            <figure class="fade-in img-cheia no-margin-bottom no-gutter" id="e_<?php echo $i; ?>">
                                <img src="<?php echo get_sub_field('imagem'); ?>" class="e_img" />
                            </figure>
                        <?php elseif(get_row_layout() == 'imagem_cheia_no_margin'): ?>
                            <figure class="fade-in img-cheia no-margin-bottom" id="e_7">
                                <img src="<?php echo get_sub_field('imagem'); ?>" class="e_img">
                            </figure>
                        <?php elseif(get_row_layout() == 'imagem_grande'): ?>
                            <div class="img-grande gc-container" id="e_<?php echo $i; ?>">
                                <figure class="row">
                                    <img class="e_img fade-in col-12" src="<?php echo get_sub_field('imagem'); ?>" />
                                </figure>
                            </div>
                        <?php elseif(get_row_layout() == 'imagem_grande_caption'): ?>
                            <div class="img-grande gc-container" id="e_7">
                                <figure class="row">
                                    <img class="e_img fade-in col-12" src="<?php echo get_sub_field('imagem'); ?>" />
                                    <figcaption class="e_cap col-12 col-lg-8 offset-lg-2"><?php echo get_sub_field('texto'); ?></figcaption>
                                </figure>
                            </div>
                        <?php elseif(get_row_layout() == 'texto_central') : ?>
                            <section class="subtitulo" id="e_<?php echo $i; ?>">
                                <div class="gc-container">
                                    <h2 class="fade-in col-12 col-lg-8 offset-lg-2 e_h1" style="color:<?php echo get_field('cor'); ?>">
                                        <?php echo get_sub_field('titulo'); ?>
                                    </h2>
                                </div>
                            </section>

                            <?php $i++; ?>

                            <section class="paragrafo" id="e_<?php echo $i; ?>">
                                <div class="gc-container">
                                    <p class="fade-in e_txt col-12 col-lg-8 offset-lg-2">
                                        <?php echo get_sub_field('texto'); ?>
                                    </p>
                                </div>
                            </section>
                        <?php elseif(get_row_layout() == 'imagem_com_fundo'): ?>
                            <section id="e_<?php echo $i; ?>" class="img-media fundo-colorido" style="background-color: <?php echo get_sub_field('cor'); ?>">
                                <div class="gc-container">
                                    <figure class="fade-in row">
                                        <img class="e_img offset-1 col-10 col-lg-8 offset-lg-2" src="<?php echo get_sub_field('imagem'); ?>" />

                                    </figure>
                                </div>
                            </section>
                        <?php elseif(get_row_layout() == 'titulo_com_fundo'): ?>
                            <section class="subtitulo fundo-colorido" style="background-color: <?php echo get_sub_field('cor'); ?>" id="e_<?php echo $i; ?>">
                                <div class="gc-container">
                                    <h2 class="fade-in col-12 col-lg-8 offset-lg-2 e_h1">
                                        <?php echo get_sub_field('titulo'); ?>
                                    </h2>
                                </div>
                            </section>
                        <?php elseif(get_row_layout() == 'texto_com_fundo'): ?>
                            <section class="paragrafo fundo-colorido" style="background-color: <?php echo get_sub_field('cor'); ?>" id="e_<?php echo $i; ?>">
                                <div class="gc-container">
                                    <p class="fade-in e_txt col-12 col-lg-8 offset-lg-2">
                                        <?php echo get_sub_field('texto'); ?>
                                    </p>
                                </div>
                            </section>
                        <?php elseif(get_row_layout() == 'mosaico_duplo_completo') : ?>
                            <?php $class = ''; ?>
                            <?php $classes = get_sub_field('classes'); ?>
                            <?php if(is_array($classes) and count($classes) > 0) : ?>
                                <?php foreach ($classes as $classe) : ?>
                                    <?php $class = $class.' '.$classe; ?>
                                <?php endforeach; ?>
                            <?php endif; ?>
                            <div class="mosaico-duplo <?php echo $class; ?>" id="e_<?php echo $i; ?>">
                                <div class="row fade-in">
                                    <?php if(get_sub_field('cover__livre') == 'cover') : ?>
                                        <div class="e_img e_img_1 img col-12 col-lg-6">
                                            <figure style="background-image: url(<?php echo get_sub_field('imagem_01'); ?>);"></figure>
                                        </div>
                                        <div class="e_img e_img_2 img col-12 col-lg-6">
                                            <figure style="background-image: url(<?php echo get_sub_field('imagem_02'); ?>);"></figure>
                                        </div>
                                    <?php else : ?>
                                        <div class="e_img e_img_1 img col-12 col-lg-6">
                                            <img src="<?php echo get_sub_field('imagem_01'); ?>" />
                                        </div>
                                        <div class="e_img e_img_2 img col-12 col-lg-6">
                                            <img src="<?php echo get_sub_field('imagem_02'); ?>" />
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php elseif(get_row_layout() == 'mosaico_duplo_cheio'): ?>
                            <div class="mosaico-duplo quadrado no-gutter" id="e_6">
                                <div class="row fade-in">
                                    <div class="e_img e_img_1 img col-12 col-lg-6">
                                        <figure style="background-image: url(<?php echo get_sub_field('imagem_01'); ?>);"></figure>
                                    </div>
                                    <div class="e_img e_img_2 img col-12 col-lg-6">
                                        <figure style="background-image: url(<?php echo get_sub_field('imagem_02'); ?>);"></figure>
                                    </div>
                                    <figcaption class="e_cap offset-1 col-10 col-lg-8 offset-lg-2"><?php echo get_sub_field('texto'); ?></figcaption>
                                </div>
                            </div>
                        <?php elseif(get_row_layout() == 'mosaico_duplo_paisagem') : ?>
                            <div class="mosaico-duplo paisagem gc-container" id="e_<?php echo $i; ?>">
                                <div class="row fade-in">
                                    <div class="e_img e_img_1 img col-12 col-lg-6">
                                        <figure style="background-image: url(<?php echo get_sub_field('imagem_01'); ?>);"></figure>
                                    </div>
                                    <div class="e_img e_img_2 img col-12 col-lg-6">
                                        <figure style="background-image: url(<?php echo get_sub_field('imagem_02'); ?>);"></figure>
                                    </div>
                                </div>
                            </div>
                        <?php elseif(get_row_layout() == 'mosaico_duplo_paisagem_no_margin') : ?>
                            <div class="mosaico-duplo no-margin-bottom paisagem gc-container" id="e_<?php echo $i; ?>">
                                <div class="row fade-in">
                                    <div class="e_img e_img_1 img col-12 col-lg-6">
                                        <figure style="background-image: url(<?php echo get_sub_field('imagem_01'); ?>);"></figure>
                                    </div>
                                    <div class="e_img e_img_2 img col-12 col-lg-6">
                                        <figure style="background-image: url(<?php echo get_sub_field('imagem_02'); ?>);"></figure>
                                    </div>
                                </div>
                            </div>
                        <?php elseif(get_row_layout() == 'mosaico_duplo') : ?>
                            <div class="mosaico-duplo quadrado gc-container" id="e_<?php echo $i; ?>">
                                <div class="row fade-in">
                                    <div class="e_img e_img_1 img col-12 col-lg-6">
                                        <figure style="background-image: url(<?php echo get_sub_field('imagem_01'); ?>);"></figure>
                                    </div>
                                    <div class="e_img e_img_2 img col-12 col-lg-6">
                                        <figure style="background-image: url(<?php echo get_sub_field('imagem_02'); ?>);"></figure>
                                    </div>
                                </div>
                            </div>
                        <?php elseif(get_row_layout() == 'mosaico_duplo_quadrado_nomargin_button') : ?>
                            <div class="mosaico-duplo no-margin-bottom quadrado gc-container" id="e_2">
                                <div class="row fade-in">
                                    <div class="e_img e_img_1 img col-12 col-lg-6">
                                        <figure style="background-image: url(<?php echo get_sub_field('imagem_01'); ?>);"></figure>
                                    </div>
                                    <div class="e_img e_img_2 img col-12 col-lg-6">
                                        <figure style="background-image: url(<?php echo get_sub_field('imagem_02'); ?>);"></figure>
                                    </div>
                                </div>
                            </div>
                        <?php elseif(get_row_layout() == 'mosaico_duplo_quadrado_nomargin') : ?>
                            <div class="mosaico-duplo no-margin-bottom quadrado" id="e_<?php echo $i; ?>">
                                <div class="row fade-in">
                                    <div class="e_img e_img_1 img col-12 col-lg-6">
                                        <figure style="background-image: url(<?php echo get_sub_field('imagem_01'); ?>);"></figure>
                                    </div>
                                    <div class="e_img e_img_2 img col-12 col-lg-6">
                                        <figure style="background-image: url(<?php echo get_sub_field('imagem_02'); ?>);"></figure>
                                    </div>
                                </div>
                            </div>
                        <?php elseif(get_row_layout() == 'mosaico_duplo_paisagem_no_gutter') : ?>
                            <div class="mosaico-duplo paisagem no-gutter" id="e_<?php echo $i; ?>">
                                <div class="row fade-in">
                                    <div class="e_img e_img_1 img col-12 col-lg-6">
                                        <figure style="background-image: url(<?php echo get_sub_field('imagem_01'); ?>);"></figure>
                                    </div>
                                    <div class="e_img e_img_2 img col-12 col-lg-6">
                                        <figure style="background-image: url(<?php echo get_sub_field('imagem_02'); ?>);"></figure>
                                    </div>
                                </div>
                            </div>
                        <?php elseif(get_row_layout() == 'mosaico_duplo_no_margin') : ?>
                            <div class="mosaico-duplo no-margin-bottom gc-container" id="e_<?php echo $i; ?>">
                                <div class="row fade-in">
                                    <div class="e_img e_img_1 img col-12 col-lg-6">
                                        <figure style="background-image: url(<?php echo get_sub_field('imagem_01'); ?>);"></figure>
                                    </div>
                                    <div class="e_img e_img_2 img col-12 col-lg-6">
                                        <figure style="background-image: url(<?php echo get_sub_field('imagem_02'); ?>);"></figure>
                                    </div>
                                </div>
                            </div>
                        <?php elseif(get_row_layout() == 'mosaico_duplo_normal') : ?>
                            <div class="mosaico-duplo gc-container" id="e_<?php echo $i; ?>">
                                <div class="row fade-in">
                                    <div class="e_img e_img_1 img col-12 col-lg-6">
                                        <figure style="background-image: url(<?php echo get_sub_field('imagem_01'); ?>);"></figure>
                                    </div>
                                    <div class="e_img e_img_2 img col-12 col-lg-6">
                                        <figure style="background-image: url(<?php echo get_sub_field('imagem_02'); ?>);"></figure>
                                    </div>
                                </div>
                            </div>
                        <?php elseif(get_row_layout() == 'mosaico_duplo_livre') : ?>
                            <div class="mosaico-duplo no-margin-bottom gc-container" id="e_<?php echo $i; ?>">
                                <div class="row fade-in">
                                    <div class="e_img e_img_1 img col-12 col-lg-6">
                                        <img src="<?php echo get_sub_field('imagem_01'); ?>" />
                                    </div>
                                    <div class="e_img e_img_2 img col-12 col-lg-6">
                                        <img src="<?php echo get_sub_field('imagem_02'); ?>" />
                                    </div>
                                </div>
                            </div>
                        <?php elseif(get_row_layout() == 'mosaico_duplo_gutter') : ?>
                            <div class="mosaico-duplo" id="e_<?php echo $i; ?>">
                                <div class="row fade-in">
                                    <div class="e_img e_img_1 img col-12 col-lg-6">
                                        <figure style="background-image: url(<?php echo get_sub_field('imagem_01'); ?>);"></figure>
                                    </div>
                                    <div class="e_img e_img_2 img col-12 col-lg-6">
                                        <figure style="background-image: url(<?php echo get_sub_field('imagem_02'); ?>);"></figure>
                                    </div>
                                </div>
                            </div>
                        <?php elseif(get_row_layout() == 'mosaico_triplo_completo') : ?>
                            <?php $class = ''; ?>
                            <?php $classes = get_sub_field('classe'); ?>
                            <?php if(is_array($classes) and count($classes) > 0) : ?>
                                <?php foreach ($classes as $classe) : ?>
                                    <?php $class = $class.' '.$classe; ?>
                                <?php endforeach; ?>
                            <?php endif; ?>
                            <div class="mosaico-triplo <?php echo $class; ?>" id="e_<?php echo $i; ?>">
                                <div class="row fade-in">
                                    <?php if(get_sub_field('cover__livre') == 'cover') : ?>
                                        <div class="e_img e_img_1 img col-12 col-lg-4">
                                            <figure style="background-image: url(<?php echo get_sub_field('imagem_01'); ?>);"></figure>
                                        </div>
                                        <div class="e_img e_img_2 img col-12 col-lg-4">
                                            <figure style="background-image: url(<?php echo get_sub_field('imagem_02'); ?>);"></figure>
                                        </div>
                                        <div class="e_img e_img_3 img col-12 col-lg-4">
                                            <figure style="background-image: url(<?php echo get_sub_field('imagem_03'); ?>);"></figure>
                                        </div>
                                    <?php else : ?>
                                        <div class="e_img e_img_1 img col-12 col-lg-4">
                                            <img src="<?php echo get_sub_field('imagem_01'); ?>" />
                                        </div>
                                        <div class="e_img e_img_2 img col-12 col-lg-4">
                                            <img src="<?php echo get_sub_field('imagem_02'); ?>" />
                                        </div>
                                        <div class="e_img e_img_3 img col-12 col-lg-4">
                                            <img src="<?php echo get_sub_field('imagem_03'); ?>" />
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php elseif(get_row_layout() == 'mosaico_triplo_quadrado') : ?>
                            <div class="mosaico-triplo quadrado" id="e_<?php echo $i; ?>">
                                <div class="row fade-in">
                                    <div class="e_img e_img_1 img col-12 col-lg-4">
                                        <figure style="background-image: url(<?php echo get_sub_field('imagem_01'); ?>);"></figure>
                                    </div>
                                    <div class="e_img e_img_2 img col-12 col-lg-4">
                                        <figure style="background-image: url(<?php echo get_sub_field('imagem_02'); ?>);"></figure>
                                    </div>
                                    <div class="e_img e_img_3 img col-12 col-lg-4">
                                        <figure style="background-image: url(<?php echo get_sub_field('imagem_03'); ?>);"></figure>
                                    </div>
                                </div>
                            </div>
                        <?php elseif(get_row_layout() == 'mosaico_triplo_nomargin') : ?>
                            <div class="mosaico-triplo no-margin-bottom paisagem no-gutter" id="e_<?php echo $i; ?>">
                                <div class="row fade-in">
                                    <div class="e_img e_img_1 img col-12 col-lg-4">
                                        <figure style="background-image: url(<?php echo get_sub_field('imagem_01'); ?>);"></figure>
                                    </div>
                                    <div class="e_img e_img_2 img col-12 col-lg-4">
                                        <figure style="background-image: url(<?php echo get_sub_field('imagem_02'); ?>);"></figure>
                                    </div>
                                    <div class="e_img e_img_3 img col-12 col-lg-4">
                                        <figure style="background-image: url(<?php echo get_sub_field('imagem_03'); ?>);"></figure>
                                    </div>
                                </div>
                            </div>
                        <?php elseif(get_row_layout() == 'mosaico_triplo') : ?>
                            <div class="mosaico-triplo retrato no-gutter" id="e_<?php echo $i; ?>">
                                <div class="row fade-in">
                                    <div class="e_img e_img_1 img col-12 col-lg-4">
                                        <figure style="background-image: url(<?php echo get_sub_field('imagem_01'); ?>);"></figure>
                                    </div>
                                    <div class="e_img e_img_2 img col-12 col-lg-4">
                                        <figure style="background-image: url(<?php echo get_sub_field('imagem_02'); ?>);"></figure>
                                    </div>
                                    <div class="e_img e_img_3 img col-12 col-lg-4">
                                        <figure style="background-image: url(<?php echo get_sub_field('imagem_03'); ?>);"></figure>
                                    </div>
                                </div>
                            </div>
                        <?php elseif(get_row_layout() == 'mosaico_triplo_gutter') : ?>
                            <div class="mosaico-triplo" id="e_<?php echo $i; ?>">
                                <div class="row fade-in">
                                    <div class="e_img e_img_1 img col-12 col-lg-4">
                                        <figure style="background-image: url(<?php echo get_sub_field('imagem_01'); ?>);"></figure>
                                    </div>
                                    <div class="e_img e_img_2 img col-12 col-lg-4">
                                        <figure style="background-image: url(<?php echo get_sub_field('imagem_02'); ?>);"></figure>
                                    </div>
                                    <div class="e_img e_img_3 img col-12 col-lg-4">
                                        <figure style="background-image: url(<?php echo get_sub_field('imagem_03'); ?>);"></figure>
                                    </div>
                                </div>
                            </div>
                        <?php elseif(get_row_layout() == 'mosaico_quadruplo') : ?>
                            <div class="mosaico-quadruplo quadrado gc-container" id="e_<?php echo $i; ?>">
                                <div class="row fade-in">
                                    <div class="e_img e_img_1 img col-6 col-lg-3">
                                        <figure style="background-image: url(<?php echo get_sub_field('imagem_01'); ?>);"></figure>
                                    </div>
                                    <div class="e_img e_img_2 img col-6 col-lg-3">
                                        <figure style="background-image: url(<?php echo get_sub_field('imagem_02'); ?>);"></figure>
                                    </div>
                                    <div class="e_img e_img_3 img col-6 col-lg-3">
                                        <figure style="background-image: url(<?php echo get_sub_field('imagem_03'); ?>);"></figure>
                                    </div>
                                    <div class="e_img e_img_3 img col-6 col-lg-3">
                                        <figure style="background-image: url(<?php echo get_sub_field('imagem_04'); ?>);"></figure>
                                    </div>

                                </div>
                            </div>
                        <?php elseif(get_row_layout() == 'mosaico_quadruplo_nomargin') : ?>
                            <div class="mosaico-quadruplo no-margin-bottom quadrado gc-container" id="e_<?php echo $i; ?>">
                                <div class="row fade-in">
                                    <div class="e_img e_img_1 img col-6 col-lg-3">
                                        <figure style="background-image: url(<?php echo get_sub_field('imagem_01'); ?>);"></figure>
                                    </div>
                                    <div class="e_img e_img_2 img col-6 col-lg-3">
                                        <figure style="background-image: url(<?php echo get_sub_field('imagem_02'); ?>);"></figure>
                                    </div>
                                    <div class="e_img e_img_3 img col-6 col-lg-3">
                                        <figure style="background-image: url(<?php echo get_sub_field('imagem_03'); ?>);"></figure>
                                    </div>
                                    <div class="e_img e_img_3 img col-6 col-lg-3">
                                        <figure style="background-image: url(<?php echo get_sub_field('imagem_04'); ?>);"></figure>
                                    </div>

                                </div>
                            </div>
                        <?php elseif(get_row_layout() == 'imagem_subtitulo_paragrafo') : ?>
                            <div class="img-subtitulo-paragrafo gc-container" id="e_<?php echo $i; ?>">
                                <div class="fade-in row">
                                    <h2 class="subtitulo e_h1 d-block d-lg-none" style="color:<?php echo get_field('cor'); ?>"><?php echo get_sub_field('titulo_sub'); ?></h2>
                                    <img class="e_img col-12 col-lg-6" src="<?php echo get_sub_field('imagem_sub'); ?>" />
                                    <div class="col-12 col-lg-5 offset-lg-1">
                                        <h2 class="subtitulo e_h1 d-none d-lg-block" style="color:<?php echo get_field('cor'); ?>"><?php echo get_sub_field('titulo_sub'); ?></h2>
                                        <p class="e_txt"><?php echo get_sub_field('texto_sub'); ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php elseif(get_row_layout() == 'comentario') : ?>
                            <div class="fade-in comentario" style="background-color:<?php echo get_field('cor'); ?>" id="e_<?php echo $i; ?>">
                                <div class="gc-container">
                                    <blockquote class="col-12 col-lg-8 offset-lg-2 e_txt">
                                        <?php echo get_sub_field('texto_comentario'); ?>
                                    </blockquote>
                                </div>
                            </div>
                        <?php elseif(get_row_layout() == 'video') : ?>
                            <section class="video-grande">
                                <div class="gc-container">
                                    <div class="col-12 video-container pausado" id="e_<?php echo $i; ?>">
                                        <?php the_sub_field('video'); ?>
                                    </div>
                                </div>
                            </section>
                        <?php elseif(get_row_layout() == 'video_vimeo') : ?>
                            <section class="video-grande">
                                <div class="gc-container">
                                    <div class="col-12 video-container pausado" id="e_<?php echo $i; ?>">
                                        <iframe src="https://player.vimeo.com/video/<?php echo get_sub_field('codigo_video'); ?>?autoplay=0&amp;loop=1&amp;title=0&amp;byline=0&amp;portrait=0&amp;color=000000" width="640" height="360" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe>
                                    </div>
                                </div>
                            </section>
                        <?php elseif(get_row_layout() == 'legenda') : ?>
                            <?php $class = ''; ?>
                            <?php $classes = get_sub_field('classe'); ?>
                            <?php if(is_array($classes) and count($classes) > 0) : ?>
                                <?php foreach ($classes as $classe) : ?>
                                    <?php $class = $class.' '.$classe; ?>
                                <?php endforeach; ?>
                            <?php endif; ?>
                            <div class="mosaico-duplo quadrado gc-container <?php echo $class; ?>" id="e_9">
                                <div class="row fade-in">
                                    <figcaption class="e_cap offset-1 col-10 col-lg-8 offset-lg-2"><?php echo get_sub_field('texto'); ?></figcaption>
                                </div>
                            </div>
                        <?php elseif(get_row_layout() == 'fonte') : ?>
                          <style type="text/css">
                            @font-face {
                              font-family: '<?php echo get_sub_field('nome_fonte'); ?>';
                              src: url('<?php echo get_sub_field('url_fonte'); ?>');
                              font-style: normal;
                              font-weight: normal;
                            };
                          </style>

                          <div class="fade-in fonte gc-container d-flex flex-column align-items-center" id="e_<?php echo $i; ?>">
                            <h2 class="subtitulo e_h1 h3 col-12 col-lg-8" <?php if (get_field('cor')): ?>style="color:<?php echo get_field('cor'); ?>"<?php endif; ?>><?php echo get_sub_field('subtitulo'); ?></h2>
                            <p id="e_<?php echo $i; ?>_txt" class="e_txt col-12 col-lg-8" style="font-family: '<?php echo get_sub_field('nome_fonte'); ?>', 'ocre-sans', sans-serif; color:<?php echo get_field('cor'); ?>" contenteditable="true">
                              <?php echo get_sub_field('txt'); ?>
                            </p>
                            <a class="btn btn-primary" href="<?php echo get_sub_field('pacote_fonte'); ?>" download>Fazer download</a>
                          </div>

                          <script type="text/javascript">
                            var editableDiv = document.getElementById('e_<?php echo $i; ?>_txt');

                            $(document).ready(function(){
                              var scrollTop = $(window).scrollTop();
                              var offsetTop = $(editableDiv).offset().top;
                              var windowHeight = Math.max(document.documentElement.clientHeight, window.innerHeight || 0);

                              if ((offsetTop - scrollTop) < windowHeight*2/3) {
                                //editableDiv.focus();
                                var placeholder = $(editableDiv).text();
                                $(editableDiv).text(placeholder + ' ');
                                    $(editableDiv).text(placeholder);
                              }
                            });

                            window.onscroll = function (e) {
                              var scrollTop = $(window).scrollTop();
                              var offsetTop = $(editableDiv).offset().top;
                              var windowHeight = Math.max(document.documentElement.clientHeight, window.innerHeight || 0);

                              if ((offsetTop - scrollTop) < windowHeight*2/3) {
                                //editableDiv.focus();
                                var placeholder = $(editableDiv).text();
                                $(editableDiv).text(placeholder + ' ');
                                    $(editableDiv).text(placeholder);
                              }
                            }

                            function handlepaste (e) {
                                var types, pastedData, savedContent;

                                // Browsers that support the 'text/html' type in the Clipboard API (Chrome, Firefox 22+)
                                if (e && e.clipboardData && e.clipboardData.types && e.clipboardData.getData) {

                                    // Check for 'text/html' in types list. See abligh's answer below for deatils on
                                    // why the DOMStringList bit is needed. We cannot fall back to 'text/plain' as
                                    // Safari/Edge don't advertise HTML data even if it is available
                                    types = e.clipboardData.types;
                                    if (((types instanceof DOMStringList) && types.contains("text/html")) || (types.indexOf && types.indexOf('text/html') !== -1)) {

                                        // Extract data and pass it to callback
                                        pastedData = e.clipboardData.getData('text/html');
                                        processPaste(editableDiv, pastedData);

                                        // Stop the data from actually being pasted
                                        e.stopPropagation();
                                        e.preventDefault();
                                        return false;
                                    }
                                }

                                // Everything else: Move existing element contents to a DocumentFragment for safekeeping
                                savedContent = document.createDocumentFragment();
                                while(editableDiv.childNodes.length > 0) {
                                    savedContent.appendChild(editableDiv.childNodes[0]);
                                }

                                // Then wait for browser to paste content into it and cleanup
                                waitForPastedData(editableDiv, savedContent);
                                return true;
                            }

                            function waitForPastedData (elem, savedContent) {

                                // If data has been processes by browser, process it
                                if (elem.childNodes && elem.childNodes.length > 0) {

                                    // Retrieve pasted content via innerHTML
                                    // (Alternatively loop through elem.childNodes or elem.getElementsByTagName here)
                                    var pastedData = elem.innerHTML;

                                    // Restore saved content
                                    elem.innerHTML = "";
                                    elem.appendChild(savedContent);

                                    // Call callback
                                    processPaste(elem, pastedData);
                                }

                                // Else wait 20ms and try again
                                else {
                                    setTimeout(function () {
                                        waitForPastedData(elem, savedContent)
                                    }, 20);
                                }
                            }

                            function processPaste (elem, pastedData) {
                                // Do whatever with gathered data;
                                //alert(pastedData);
                                elem.focus();
                            }

                            // Modern browsers. Note: 3rd argument is required for Firefox <= 6
                            if (editableDiv.addEventListener) {
                                editableDiv.addEventListener('paste', handlepaste, false);
                            }
                            // IE <= 8
                            else {
                                editableDiv.attachEvent('onpaste', handlepaste);
                            }
                          </script>
                        <?php elseif(get_row_layout() == 'galeria') : ?>
                            <?php $images = get_sub_field('galeria'); ?>
                            <?php if($images) : ?>
                                <section id="e_<?php echo $i; ?>" class="fade-in carrossel">
                                    <div class="gc-container">
                                        <div class="row">
                                            <div class="owl-carousel owl-theme col-12 col-lg-10 offset-lg-1">
                                                <?php $j=0; ?>
                                                <?php foreach( $images as $image ): ?>
                                                    <div class="item">
                                                        <img class="e_img e_img_<?php echo $j; ?>" src="<?php echo $image['url']; ?>" />
                                                    </div>
                                                    <?php $j++; ?>
                                                <?php endforeach; ?>
                                            </div>

                                            <div class="prev d-none d-lg-flex align-items-center justify-content-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="72" viewBox="0 0 36 72">
                                                    <path d="M34.00241,69.989,3.75495,40.17994a5.85262,5.85262,0,0,1,0-8.3623L34,2.011" />
                                                </svg>
                                            </div>
                                            <div class="next d-none d-lg-flex align-items-center justify-content-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="72" viewBox="0 0 36 72">
                                                    <path d="M1.99755,2.011,32.245,31.82006a5.85262,5.85262,0,0,1,0,8.3623L2,69.989" />
                                                </svg>
                                            </div>
                                        </div>
                                        <script>

                                            var owl_<?php echo $i; ?> = $('#e_<?php echo $i; ?> .owl-carousel');
                                            owl_<?php echo $i; ?>.owlCarousel({
                                                loop: true,
                                                margin: 12,
                                                items: 1,
                                                dots: $(window).width() < 767 ? false : true
                                            })
                                            $('#e_<?php echo $i; ?>').find('.next').click(function() {
                                                owl_<?php echo $i; ?>.trigger('next.owl.carousel');
                                            })
                                            $('#e_<?php echo $i; ?>').find('.prev').click(function() {
                                                owl_<?php echo $i; ?>.trigger('prev.owl.carousel');
                                            })
                                        </script>
                                    </div>
                                </section>
                            <?php endif; ?>
                        <?php endif; ?>
                        <?php $i++; ?>
                    <?php endwhile; ?>
                <?php endif; ?>
            </main>
            <?php $ids[] = $post->ID; ?>
            <?php $termos = wp_get_post_terms( get_the_ID(), 'filtro', array() ); ?>
            <?php
                foreach ($termos as $termo) :
                    $filtro[] = $termo->term_id;
                endforeach;
            ?>
        <?php endif; ?>
        <?php wp_reset_query(); ?>

        <?php
            query_posts(
                array(
                    'post_type' => 'trabalho',
                    'showposts' => 2,
                    'post__not_in' => $ids,
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'filtro',
                            'terms' => $filtro,
                            'field' => 'term_id',
                        )
                    ),
                )
            );
        ?>
        <?php if (have_posts()) : ?>
            <section id="projetos-relacionados">
                <div class="gc-container">
                    <div class="mosaico row">
                        <h2 class="col-sm-12 col-md-12 col-lg-12 titulo"><?php echo get_field('texto_trabalhos_relacionados', 'options'); ?></h1>
                        <?php while(have_posts()) : the_post(); ?>
                            <?php $image =  wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full'); ?>
                            <?php $terms = wp_get_post_terms( get_the_ID(), 'filtro', array() ); ?>
                            <a class="fade-in thumb-projeto filter-item <?php foreach ($terms as $term) : echo $term->slug.' '; endforeach; ?> relacionado col-12 col-md-6 col-lg-6 shown" data-category="<?php foreach ($terms as $term) : echo $term->slug.' '; endforeach; ?>" href="<?php the_permalink(); ?>" onmouseover="grad(event, this);" onmousemove="grad(event, this);">
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
                    </div>
                </div>
            </section>
        <?php endif; ?>
        <?php wp_reset_query(); ?>
    </main>
<?php
	get_footer();
?>
