<?php
    get_header();
?>
    <main>
        <section class="category-feed">
            <div class="articles">
                <div class="custom-container">
                    <div class="row">
                        <div class="col-12 col-lg-8">
                            <div class="category-title" style="border-color: <?php echo get_field('cor', 'category_'.get_queried_object()->term_id); ?>; color: <?php echo get_field('cor', 'category_'.get_queried_object()->term_id); ?>;">
                                <h1 class="h3"><?php echo get_queried_object()->name; ?></h1>
                            </div>
                            
                            <hr class="category-divider">
                            
                            <div class="archive-feed">
                                <?php if(have_posts()) : ?>
                                    <?php while(have_posts()) : the_post(); ?> 
                                        <?php include('inc/single_post.php'); ?>
                                    <?php endwhile; ?>
                                    <?php echo do_shortcode('[ajax_load_more post_type="post" posts_per_page="6" category="'.get_queried_object()->slug.'" offset="6" pause="true" scroll="false" button_label="Mais Artigos" button_loading_label="Carregando"]'); ?>
                                <?php endif; ?>
                                <?php wp_reset_query(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php include('inc/box_category.php'); ?>
        </section>
    </main>
<?php
	get_footer();
?>