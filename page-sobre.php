<?php
    /*
    Template Name: Sobre
    */
    get_header();
?>
    <main>
        <section id="capa-sobre"></section>

        <section id="intro-sobre">
            <div class="gc-container">
                <div class="col-sm-12 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
                    <p><?php echo get_field('texto_sobre', 'options'); ?></p>
                </div>
            </div>
        </section>

        <?php if(have_rows('nosso_processo', 'options') ) : ?>
            <section id="processo">
                <div class="gc-container">
                    <div class="titulo row">
                        <h1 class="col-sm-12 col-lg-8 offset-lg-2">
                            <?php echo get_field('titulo_processo', 'options'); ?>
                        </h1>
                    </div>
                    
                    <?php while(the_repeater_field('nosso_processo', 'options')) : ?>
                        <div class="etapa row fade-in align-items-center">
                            <h2 class="col-12 h4 d-block d-md-none text-center text-md-left"><?php echo get_sub_field('titulo'); ?></h2>
                            <div class="col-10 offset-1 col-md-6 col-lg-5 offset-md-0 col-xl-4 offset-xl-1">
                                <?php if(qtrans_getLanguage() == "pb") : ?>
                                    <img src="<?php echo get_sub_field('imagem'); ?>">
                                <?php else : ?>
                                    <img src="<?php echo get_sub_field('imagem_en'); ?>">
                                <?php endif; ?>
                            </div>
                            <div class="col-sm-12 col-md-5 offset-lg-2 offset-md-1">
                                <h2 class="h4 d-none d-md-flex"><?php echo get_sub_field('titulo'); ?></h2>
                                <p class="text-center text-md-left"><?php echo get_sub_field('texto'); ?></p>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            </section>
        <?php endif; ?>

        <section id="servicos">
            <div class="gc-container">
                <div class="titulo row">
                    <h2 class="col-12 col-md-3 col-xl-3"><?php echo get_field('texto_servicos', 'options'); ?></h2>
                    
                    <?php if(have_rows('lista_de_servicos_01', 'options') ) : ?>
                        <ul class="col-12 col-sm-6 col-md-4 offset-md-1 col-xl-3 offset-xl-2">
                            <?php while(the_repeater_field('lista_de_servicos_01', 'options')) : ?>
                                <li class="texto-medio"><?php echo get_sub_field('servico'); ?></li>
                            <?php endwhile; ?>
                        </ul>
                    <?php endif; ?>

                    <?php if(have_rows('lista_de_servicos_02', 'options') ) : ?>
                        <ul class="col-12 col-sm-6 col-md-4 col-xl-3 offset-xl-1">
                            <?php while(the_repeater_field('lista_de_servicos_02', 'options')) : ?>
                                <li class="texto-medio"><?php echo get_sub_field('servico'); ?></li>
                            <?php endwhile; ?>
                        </ul>
                    <?php endif; ?>
                </div>
            </div>
        </section>

        <?php if(have_rows('nossa_equipe', 'options') ) : ?>
            <section id="equipe">
                <div class="gc-container">
                    <div class="titulo row">
                        <h1 class="col-sm-12 col-lg-8 offset-lg-2">
                            <?php echo get_field('titulo_equipe', 'options'); ?>
                        </h1>
                    </div>
                    <div class="row justify-content-between d-none d-md-flex">
                        <?php while(the_repeater_field('nossa_equipe', 'options')) : ?>
                            <div class="fade-in membro col-12 col-md-5 col-lg-3">
                                <figure style="background-image: url(<?php echo get_sub_field('imagem'); ?>)"></figure>
                                <h2 class="nome h5">
                                    <a href="<?php echo get_sub_field('instagram'); ?>" target="_blank"">
                                        <svg width="24" height="24" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill-rule="evenodd">
                                            <path d="M 12 0C 8.741 0 8.33234 0.0138139 7.05246 0.0722133C 5.77516 0.13047 4.90288 0.333343 4.13954 0.629961C 3.35044 0.936629 2.68123 1.34695 2.01411 2.01406C 1.347 2.68123 0.936676 3.35044 0.630008 4.13954C 0.333343 4.90283 0.130517 5.77516 0.0722133 7.05242C 0.0138139 8.33234 0 8.741 0 12C 0 15.259 0.0138139 15.6677 0.0722133 16.9476C 0.130517 18.2248 0.333343 19.0972 0.630008 19.8605C 0.936676 20.6496 1.347 21.3188 2.01411 21.9859C 2.68123 22.653 3.35044 23.0634 4.13954 23.37C 4.90288 23.6667 5.77516 23.8695 7.05246 23.9278C 8.33234 23.9862 8.741 24 12 24C 15.2591 24 15.6677 23.9862 16.9476 23.9278C 18.2249 23.8695 19.0972 23.6667 19.8605 23.37C 20.6496 23.0634 21.3188 22.653 21.9859 21.9859C 22.653 21.3188 23.0634 20.6496 23.37 19.8605C 23.6667 19.0972 23.8695 18.2248 23.9278 16.9476C 23.9862 15.6677 24 15.259 24 12C 24 8.741 23.9862 8.33234 23.9278 7.05242C 23.8695 5.77516 23.6667 4.90283 23.37 4.13954C 23.0634 3.35044 22.653 2.68123 21.9859 2.01406C 21.3188 1.34695 20.6496 0.936629 19.8605 0.629961C 19.0972 0.333343 18.2249 0.13047 16.9476 0.0722133C 15.6677 0.0138139 15.2591 0 12 0ZM 11.9999 2.16217C 15.2041 2.16217 15.5836 2.17441 16.8489 2.23214C 18.0189 2.2855 18.6543 2.48099 19.0772 2.64532C 19.6373 2.86301 20.0371 3.12304 20.457 3.54299C 20.8769 3.96288 21.137 4.36263 21.3546 4.92276C 21.5189 5.3456 21.7144 5.98099 21.7678 7.15098C 21.8256 8.41633 21.8377 8.79588 21.8377 12C 21.8377 15.2041 21.8256 15.5837 21.7678 16.849C 21.7144 18.019 21.5189 18.6544 21.3546 19.0773C 21.137 19.6374 20.8769 20.0371 20.457 20.457C 20.0371 20.877 19.6373 21.137 19.0772 21.3547C 18.6543 21.519 18.0189 21.7145 16.8489 21.7679C 15.5838 21.8256 15.2043 21.8379 11.9999 21.8379C 8.79558 21.8379 8.41608 21.8256 7.15092 21.7679C 5.98093 21.7145 5.34549 21.519 4.92265 21.3547C 4.36257 21.137 3.96277 20.877 3.54288 20.457C 3.12298 20.0371 2.8629 19.6374 2.64521 19.0773C 2.48092 18.6544 2.28543 18.019 2.23204 16.849C 2.1743 15.5837 2.16211 15.2041 2.16211 12C 2.16211 8.79588 2.1743 8.41633 2.23204 7.15098C 2.28543 5.98099 2.48092 5.3456 2.64521 4.92276C 2.8629 4.36263 3.12298 3.96288 3.54288 3.54299C 3.96277 3.12304 4.36257 2.86301 4.92265 2.64532C 5.34549 2.48099 5.98093 2.2855 7.15087 2.23214C 8.41627 2.17441 8.79577 2.16217 11.9999 2.16217ZM 12 16C 9.7909 16 8 14.2091 8 12C 8 9.79085 9.7909 8 12 8C 14.2091 8 16 9.79085 16 12C 16 14.2091 14.2091 16 12 16ZM 12.0001 5.83783C 8.59681 5.83783 5.83789 8.5967 5.83789 12C 5.83789 15.4033 8.59681 18.1621 12.0001 18.1621C 15.4033 18.1621 18.1623 15.4033 18.1623 12C 18.1623 8.5967 15.4033 5.83783 12.0001 5.83783ZM 19.8456 5.5944C 19.8456 6.3897 19.2009 7.03438 18.4056 7.03438C 17.6103 7.03438 16.9656 6.3897 16.9656 5.5944C 16.9656 4.7991 17.6103 4.15442 18.4056 4.15442C 19.2009 4.15442 19.8456 4.7991 19.8456 5.5944Z"/>
                                        </svg>
                                    </a>
                                    <span><?php echo get_sub_field('nome'); ?></span>
                                </h2>
                                <p class="texto-pequeno"><?php echo get_sub_field('texto'); ?></p>
                            </div>
                        <?php endwhile; ?>

                        <div class="membro-clearfix col-sm-12 col-md-5 col-lg-3"></div>
            
                        <div class="membro-clearfix col-sm-12 col-md-5 col-lg-3"></div>
                    </div>
                </div>
                
                <div id="membros-mobile">
                    <div class="owl-theme d-md-none owl-carousel">
                        <?php while(the_repeater_field('nossa_equipe', 'options')) : ?>
                            <div class="item">
                                <div class="fade-in membro col-12 col-md-5 col-lg-3">
                                    <figure style="background-image: url(<?php echo get_sub_field('imagem'); ?>)"></figure>
                                    <h2 class="nome h5">
                                        <a href="<?php echo get_sub_field('instagram'); ?>" target="_blank"">
                                            <svg width="24" height="24" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill-rule="evenodd">
                                                <path d="M 12 0C 8.741 0 8.33234 0.0138139 7.05246 0.0722133C 5.77516 0.13047 4.90288 0.333343 4.13954 0.629961C 3.35044 0.936629 2.68123 1.34695 2.01411 2.01406C 1.347 2.68123 0.936676 3.35044 0.630008 4.13954C 0.333343 4.90283 0.130517 5.77516 0.0722133 7.05242C 0.0138139 8.33234 0 8.741 0 12C 0 15.259 0.0138139 15.6677 0.0722133 16.9476C 0.130517 18.2248 0.333343 19.0972 0.630008 19.8605C 0.936676 20.6496 1.347 21.3188 2.01411 21.9859C 2.68123 22.653 3.35044 23.0634 4.13954 23.37C 4.90288 23.6667 5.77516 23.8695 7.05246 23.9278C 8.33234 23.9862 8.741 24 12 24C 15.2591 24 15.6677 23.9862 16.9476 23.9278C 18.2249 23.8695 19.0972 23.6667 19.8605 23.37C 20.6496 23.0634 21.3188 22.653 21.9859 21.9859C 22.653 21.3188 23.0634 20.6496 23.37 19.8605C 23.6667 19.0972 23.8695 18.2248 23.9278 16.9476C 23.9862 15.6677 24 15.259 24 12C 24 8.741 23.9862 8.33234 23.9278 7.05242C 23.8695 5.77516 23.6667 4.90283 23.37 4.13954C 23.0634 3.35044 22.653 2.68123 21.9859 2.01406C 21.3188 1.34695 20.6496 0.936629 19.8605 0.629961C 19.0972 0.333343 18.2249 0.13047 16.9476 0.0722133C 15.6677 0.0138139 15.2591 0 12 0ZM 11.9999 2.16217C 15.2041 2.16217 15.5836 2.17441 16.8489 2.23214C 18.0189 2.2855 18.6543 2.48099 19.0772 2.64532C 19.6373 2.86301 20.0371 3.12304 20.457 3.54299C 20.8769 3.96288 21.137 4.36263 21.3546 4.92276C 21.5189 5.3456 21.7144 5.98099 21.7678 7.15098C 21.8256 8.41633 21.8377 8.79588 21.8377 12C 21.8377 15.2041 21.8256 15.5837 21.7678 16.849C 21.7144 18.019 21.5189 18.6544 21.3546 19.0773C 21.137 19.6374 20.8769 20.0371 20.457 20.457C 20.0371 20.877 19.6373 21.137 19.0772 21.3547C 18.6543 21.519 18.0189 21.7145 16.8489 21.7679C 15.5838 21.8256 15.2043 21.8379 11.9999 21.8379C 8.79558 21.8379 8.41608 21.8256 7.15092 21.7679C 5.98093 21.7145 5.34549 21.519 4.92265 21.3547C 4.36257 21.137 3.96277 20.877 3.54288 20.457C 3.12298 20.0371 2.8629 19.6374 2.64521 19.0773C 2.48092 18.6544 2.28543 18.019 2.23204 16.849C 2.1743 15.5837 2.16211 15.2041 2.16211 12C 2.16211 8.79588 2.1743 8.41633 2.23204 7.15098C 2.28543 5.98099 2.48092 5.3456 2.64521 4.92276C 2.8629 4.36263 3.12298 3.96288 3.54288 3.54299C 3.96277 3.12304 4.36257 2.86301 4.92265 2.64532C 5.34549 2.48099 5.98093 2.2855 7.15087 2.23214C 8.41627 2.17441 8.79577 2.16217 11.9999 2.16217ZM 12 16C 9.7909 16 8 14.2091 8 12C 8 9.79085 9.7909 8 12 8C 14.2091 8 16 9.79085 16 12C 16 14.2091 14.2091 16 12 16ZM 12.0001 5.83783C 8.59681 5.83783 5.83789 8.5967 5.83789 12C 5.83789 15.4033 8.59681 18.1621 12.0001 18.1621C 15.4033 18.1621 18.1623 15.4033 18.1623 12C 18.1623 8.5967 15.4033 5.83783 12.0001 5.83783ZM 19.8456 5.5944C 19.8456 6.3897 19.2009 7.03438 18.4056 7.03438C 17.6103 7.03438 16.9656 6.3897 16.9656 5.5944C 16.9656 4.7991 17.6103 4.15442 18.4056 4.15442C 19.2009 4.15442 19.8456 4.7991 19.8456 5.5944Z"/>
                                            </svg>
                                        </a>
                                        <span><?php echo get_sub_field('nome'); ?></span>
                                    </h2>
                                    <p class="texto-pequeno"><?php echo get_sub_field('texto'); ?></p>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                    <div class="prev d-flex d-md-none align-items-center justify-content-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="72" viewBox="0 0 36 72">
                            <path d="M34.00241,69.989,3.75495,40.17994a5.85262,5.85262,0,0,1,0-8.3623L34,2.011"/>
                        </svg>
                    </div>
                    <div class="next d-flex d-md-none align-items-center justify-content-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="72" viewBox="0 0 36 72">
                            <path d="M1.99755,2.011,32.245,31.82006a5.85262,5.85262,0,0,1,0,8.3623L2,69.989"/>
                        </svg>
                    </div>
                </div>
            </section>

            <script src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.js"></script>
            <script type="text/javascript">
                $(document).ready(function() {

                    var carrossel_membros = $('#membros-mobile .owl-carousel');
                    carrossel_membros.owlCarousel({
                        loop: true,
                        margin: 24,
                        dots: false,
                        items: 1
                    })
                    $('#membros-mobile').find('.next').click(function() {
                        carrossel_membros.trigger('next.owl.carousel');
                    })
                    $('#membros-mobile').find('.prev').click(function() {
                        carrossel_membros.trigger('prev.owl.carousel');
                    })
                });
            </script>
        <?php endif; ?>
    </main>
<?php
	get_footer();
?>