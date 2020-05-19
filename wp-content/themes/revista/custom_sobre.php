<?php
/* Template Name: Sobre */
/**
 * Created by PhpStorm.
 * User: Samuel Maculuve
 * Date: 2020/02/03
 * Time: 12:26
 */
get_header();
?>
<?= content_bg_1() ?>
<!-- BACKGROUD -->
<div class="container">
    <h2 class="category-title pb-5 text-uppercase">
        <?php
        printf( __( '%s', 'twentyten' ),  single_cat_title( '', false ) );
        ?>
    </h2>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
        the_content();
        endwhile; else: ?>
            <p>Desculpe</p>
    <?php endif; ?>
</div>


<?php
get_footer();
