<?php
    if(qtrans_getLanguage() == "en") :
        if(is_page(50) or is_singular('curso')) :
            header('Location: '.get_bloginfo('url')); exit;
        endif;
    endif;
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="<?php echo get_field('description', 'options'); ?>">
        <meta name="keywords" content="<?php echo get_field('keywords', 'options'); ?>">

        <?php if(is_front_page()) : ?>
            <title>Grande Circular</title>
        <?php else : ?>
            <title><?php wp_title('-', true, 'right');?></title>
        <?php endif; ?>

        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/owl.theme.default.css">

        <link rel="canonical" href="<?php the_permalink(); ?>">

        <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/popper.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.js"></script>
        
        <script src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.js"></script>
        
        <meta name="theme-color" content="#ffffff">
        <meta name="referrer" content="origin">
        <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon_ani/favicon_1_1.png">

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-20162197-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', 'UA-20162197-1');
        </script>

        <?php wp_head(); ?> 
    </head>

    <body <?php body_class(); ?>>
        <?php $url_site = get_bloginfo('url'); ?>

        <header class="position-fixed <?php if(is_front_page()) : ?>header-home<?php endif; ?>">
            <nav class="gc-container navbar navbar-expand-lg d-flex justify-content-between">
                <a href="<?php echo $url_site; ?>" class="logo">
                    <svg id="logo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 104 48" fill="#002855">
                        <path d="M12.25,33.34a3.32,3.32,0,0,0,1.46-4.89c-1-1.38-4.66-1.88-8,.54a11,11,0,0,0-3.82,6c-1.62,5.54,1.33,9.2,4.91,8.91a7.35,7.35,0,0,0,6.4-5.69l-.55-.13A8.51,8.51,0,0,1,10,40.38c-2.1.8-5.17.31-4.72-4.36C5.55,32.69,7.4,30.52,9,29.87,11.14,29,11.5,31.43,10.14,33,9.78,33.37,11.07,33.84,12.25,33.34Z"/>
                        <path d="M39.3,29a11,11,0,0,0-3.82,6c-1.61,5.54,1.34,9.2,4.92,8.91a7.34,7.34,0,0,0,6.39-5.69l-.54-.13a8.37,8.37,0,0,1-2.73,2.32c-2.09.8-5.08-.09-4.67-4.42.31-3.33,2-5.44,3.59-6.1,2.14-.87,2.64,1.57,1.27,3.11-.35.39.93.86,2.1.37a3.32,3.32,0,0,0,1.46-4.89C46.3,27.08,42.62,26.57,39.3,29Z"/>
                        <path d="M61.2,27.5c-.76,0-2.94.33-2.94.33v.08a1.38,1.38,0,0,1,.33,1c0,.5-1,3.72-1.64,6-.23.79-.47,1.63-.68,2.49a10.33,10.33,0,0,1-.63,1.33c-1.11,2-2.81,2.29-3.38,1.95-.28-.17-.41-.58-.41-1.14,0-2.78,3-10.65,3-11.33,0-.35-.52-.66-1.09-.66-.83,0-3.07.32-3.07.32v.09a1.47,1.47,0,0,1,.3,1c0,.76-1.53,5.27-2.38,8.26-1.08,3.8-.56,5.52.75,6.33,1.63,1,4.22.27,6.47-2.93,0,1.7.44,3,2,3.25,1.36.21,3.52-1.4,4.28-4.19-.11-.35-.17-.45-.26-.7-1.36,1.05-2,.11-2-.64,0-1.92,2.66-9.73,2.66-10.13S62,27.5,61.2,27.5Z"/>
                        <path d="M70.46,46.4c-2.22,0-4.15-2.05-3-6.91A81.65,81.65,0,0,1,71,28c.41-1.16.68-1.72,1.14-3,.2-.56-.45-.82-1.84-.65-.86.1-2.18.28-2.37.28,0,0,0,.07,0,.07a3,3,0,0,1,0,1.48c-.42,1.6-3.4,10.3-3.94,12.22-1.43,5.1.17,9.62,4.84,9.62a4.66,4.66,0,0,0,3.05-1.55l-.23-.34S71.39,46.4,70.46,46.4Z"/>
                        <path d="M103.88,39a10.65,10.65,0,0,1-4.75,1.55c-4.25,0-7.69-5-7.69-5,.2,0,5.46-2.82,5.46-6.38a3,3,0,0,0-3.28-2.9c-4.5,0-8.74,7.77-9.5,9.71l-.31,0a34.71,34.71,0,0,1,2.9-8.45s-.51-1-.69-.83a6.14,6.14,0,0,1-1.51.81,7.08,7.08,0,0,1-2.79.19c-3-.4-5.46,0-7.65,2.77a15.59,15.59,0,0,0-2.36,5c-1.61,5.68.57,8.25,1.87,8.38,1.48.14,2.65-.64,3.71-2a23.53,23.53,0,0,0,2.47-4c-.42,2.52-.07,4.69.94,5.46,1.28,1,2.84.58,4.14-.65a4.25,4.25,0,0,0,1.33-2.54l-.38-.69s-.61.81-1.29.81c-.44,0-.49-.43-.49-.72,0-2.3,5.54-11.17,7.94-11.17.72,0,1,.53,1,1.48a5.25,5.25,0,0,1-3.51,4.4c-.72.28-.64.26-.69.27h0c.53,2.71,3.07,8.61,7.43,9.55a6.16,6.16,0,0,0,5-.79A8.06,8.06,0,0,0,104,39.57S104,38.9,103.88,39ZM81,32.59c-1.24,3.62-3.22,8.2-5,8.17-1.09,0-1.66-3.85.18-7.47,2.27-4.46,4.9-4.14,5.7-3.67C81.59,30.46,81.31,31.49,81,32.59Z"/>
                        <polygon points="88.05 2.93 88.05 19.16 85.78 19.55 85.67 21 101.16 21 100.59 16.24 98.66 16.24 97.81 18.59 91.96 18.59 91.96 12.48 96.77 12.48 97.37 10.1 91.96 10.1 91.96 2.93 97.19 2.93 97.98 6.84 99.91 6.84 100.81 0.59 85.54 0.59 85.79 1.44 88.05 2.93"/>
                        <path d="M11.86,21.19a9.84,9.84,0,0,0,6-3c0-1.58,0-6.55,0-7.15l-6.13,0-.18,1.28s2.19.65,2.27.75v4.88a10.09,10.09,0,0,1-3.31.53c-4.68,0-6.62-4.24-6.62-8.29,0-3.5,2.73-7.37,6.75-7.37a6.61,6.61,0,0,1,2.77.6,29.25,29.25,0,0,1,.91,4.13H17a32.65,32.65,0,0,0,.63-5.16C14.67-.53,7.81-1,3.82,2.19A10.58,10.58,0,0,0,0,9.92C-.47,17.82,4.42,22.23,11.86,21.19Z"/>
                        <path d="M21.18,2.93V19.16l-2.28.75V21h8.54V19.85l-2.24-.7V3h3.23a2.3,2.3,0,0,1,2.5,2.57c0,2.67-2.57,6-4,6.61,0,0,5.32,9.33,8.5,9.33A21.34,21.34,0,0,0,41.1,21l-.46-1.45a4,4,0,0,1-1.94-.19l1.57-4.7,7.79,0s.78,2.29,1.2,3.51S50.25,21,52.1,21h8l0-1.44-2.35-.65c0-.49,0-1.28,0-2.36s0-7.58,0-11.39c3.6,5.09,12,15.84,12,15.84h2s0-3,0-4.41c0-2.2,0-2.66.06-13.67,0,0,1.09-.1,2.73-.1,4.1,0,7.21,1.73,7.21,7.53,0,6.31-2.89,8.27-5.53,8.27-1.26,0-2.63,0-2.63,0l0,2.42s1.58.17,3,.17c5.42,0,9.21-3.9,9.21-10.87,0-6.36-4-9.95-11.18-9.95-2.05,0-6.43.14-8.4.25,0,0,.32.82.32.82l2.21,1.5,0,10.35C65.8,9.21,60.56,3,59.09,1.23A1.89,1.89,0,0,0,57.58.6H52.1l.3.82,2.24,1.5v16H53.4c-.06,0-3.35-10-4.59-13.78S46.65.61,43.8.6H38.59l.3.82,2.28,1.5L36,18.3c-.95,0-5.61-5.75-5.61-5.75.15,0,4.69-3.33,4.69-7.23C35.12,2.2,33,.6,28,.6H18.64l.26.82Zm23,0,3.12,9.42-6.23,0Z"/>
                        <path d="M31.62,39.68c-.52-.25-.68-.87-.36-2.29a44.53,44.53,0,0,1,1.87-5.29c1-2.47.52-4.41-1.46-4.41-1,0-2.71.82-4.31.82,0,0,.31-1.17.52-2,.09-.4-.17-.57-.54-.54-2.58.22-6,4.31-2.51,5.58a29.08,29.08,0,0,1-2.19,4.56A20.62,20.62,0,0,1,20,39.66a2.19,2.19,0,0,1-1.25.66c-.39,0-.8-.19-.8-1.74,0-1.78,2.79-10,2.79-10.52s-.28-.4-1-.4a5.24,5.24,0,0,0-2.39.3c-.17.15-2.85,9.32-3.43,12-.33,1.49.14,3.36,1.51,3.75A3.76,3.76,0,0,0,18.81,43a19.35,19.35,0,0,0,4.8-6.12c1-1.89,1.95-3.86,2.56-5.24a26.37,26.37,0,0,0,3.73-.82c.13,0-2,6.17-2.14,6.86-.31,1.34-1.35,4.51.37,5.81,1.34,1,3.12.06,4.33-1.3a9,9,0,0,0,1.37-2.4s-.14-.34-.35-.72A2,2,0,0,1,31.62,39.68Z"/>
                        <path d="M19.8,26.46a2.22,2.22,0,0,0,2-2c0-.52-.77-1.52-2.49-1-.56.16-1.73.95-1.63,1.89S18.64,26.69,19.8,26.46Z"/>
                    </svg>
                </a>

                <button id="menu-button" class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#menu-mobile" aria-controls="menu-mobile" aria-expanded="false" aria-label="Toggle navigation">
                    <span id="linha-1" class="linha"></span>
                    <span id="linha-2" class="linha"></span>
                    <span id="linha-3" class="linha"></span>
                </button>

                <div id="menu-mobile" class="collapse d-lg-none">
                    <ul class="no-bullet">    
                        <li><a class="<?php if(is_page(46) or is_singular('trabalho')) : ?>current-page<?php else : ?>link<?php endif; ?>" href="<?php echo $url_site; ?>/trabalhos/"><?php echo __("<!--:pb-->Trabalhos<!--:--><!--:en-->Work<!--:-->"); ?></a></li>
                        <li><a class="<?php if(is_page(48)) : ?>current-page<?php else : ?>link<?php endif; ?>" href="<?php echo $url_site; ?>/sobre/"><?php echo __("<!--:pb-->Sobre<!--:--><!--:en-->About<!--:-->"); ?></a></li>
                        <?php if(qtrans_getLanguage() == "pb") : ?>
                            <li><a class="<?php if(is_page(50) or is_singular('curso')) : ?>current-page<?php else : ?>link<?php endif; ?>" href="<?php echo $url_site; ?>/cursos/"><?php echo __("<!--:pb-->Cursos<!--:--><!--:en-->Courses<!--:-->"); ?></a></li>
                        <?php endif; ?>
                        <li><a href="#contato" data-toggle="collapse" data-target="#menu-mobile" aria-controls="menu-mobile" aria-label="Toggle navigation"><?php echo __("<!--:pb-->Contato<!--:--><!--:en-->Contact<!--:-->"); ?></a></li>
                        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('flag') ) : endif; ?>
                    </ul>
                </div>

                <div id="menu-desktop" class="d-none d-lg-block">
                    <ul class="ml-auto no-bullet">
                        <li><a class="<?php if(is_page(46) or is_singular('trabalho')) : ?>current-page<?php else : ?>link<?php endif; ?>" href="<?php echo $url_site; ?>/trabalhos/"><?php echo __("<!--:pb-->Trabalhos<!--:--><!--:en-->Work<!--:-->"); ?></a></li>
                        <li><a class="<?php if(is_page(48)) : ?>current-page<?php else : ?>link<?php endif; ?>" href="<?php echo $url_site; ?>/sobre/"><?php echo __("<!--:pb-->Sobre<!--:--><!--:en-->About<!--:-->"); ?></a></li>
                        <?php if(qtrans_getLanguage() == "pb") : ?>
                            <li><a class="<?php if(is_page(50) or is_singular('curso')) : ?>current-page<?php else : ?>link<?php endif; ?>" href="<?php echo $url_site; ?>/cursos/"><?php echo __("<!--:pb-->Cursos<!--:--><!--:en-->Courses<!--:-->"); ?></a></li>
                        <?php endif; ?>
                        <li><a href="#contato"><?php echo __("<!--:pb-->Contato<!--:--><!--:en-->Contact<!--:-->"); ?></a></li>
                        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('flag') ) : endif; ?>
                    </ul>
                </div>

            </nav>
        </header>