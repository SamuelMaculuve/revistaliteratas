<?php
get_header();?>
<div class="container category-more">
  <div class="row">
    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
      <h2 class="category-title pb-5 text-uppercase">
        <?php
        printf( __( '%s', 'twentyten' ),  single_cat_title( '', false ) );?>
      </h2>
      <div class="row">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
            the_content();
            endwhile; else: ?>
            <p>Desculpe</p>
            <?php endif; ?>

      </div>
    </div>
    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-0 pt-4 pb-4 sidebar-div">
      <?php get_sidebar(); ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>
