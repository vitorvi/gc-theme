<?php if(have_rows('clientes', 'options') ) : ?>
    <section id="clientes">
        <div class="gc-container">
            <div class="row">
                <h1 class="col fade-in"><?php echo get_field('texto_clientes', 'options'); ?></h1>
            </div>
            <div class="row justify-content-center">
                <?php while(the_repeater_field('clientes', 'options')) : ?>
                    <div class="cliente col-5 col-md-3 col-lg-3 fade-in">
                        <img src="<?php echo get_sub_field('imagem'); ?>">
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </section>
<?php endif; ?>
