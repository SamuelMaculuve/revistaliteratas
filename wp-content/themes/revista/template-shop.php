<?php
/*
 * Template Name: Page Shop
 * */
get_header()
;?>
<div class="container">
    <h2 class="category-title pb-5 text-uppercase">
        <?php
        printf( __( '%s', 'twentyten' ),  single_cat_title( '', false ) );?>
    </h2>
    <div class="row">

        <div class="col-12">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
                the_content();
            endwhile; else: ?>
                <p>Desculpe</p>
            <?php endif; ?>
        </div>

    </div>
</div>

<?php get_footer(); ?>
