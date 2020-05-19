<?php

get_header(); ?>
<?= content_bg_1() ?>
<!-- BACKGROUD -->
<!-- content page -->
  <section class="bgwhite pt-5 pb-5">
    <div class="container">
      <div class="row">
        <div class="col-md-7 col-lg-9 p-b-80">
          <div class="p-r-50 p-r-0-lg">
            <div class="p-b-40">
              <?php $flag = TRUE; ?>
                    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
              <div class="blog-detail-txt p-t-33">

                <h4 class="p-b-11 m-text24">
                  <?php the_title(); ?>
                </h4>

                <br/>
                <?php the_content(); ?>
                <?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>
              </div>
              <?php endwhile; // end of the loop. ?>
              <?php if(function_exists('the_views')) { the_views(); } ?>
            </div>

          </div>
          <?php if ( function_exists('cn_social_icon') ) echo cn_social_icon(); ?>
        </div>

        <div class="col-md-5 col-lg-3 p-b-80">
            <?php get_sidebar(); ?>
        </div>
      </div>
    </div>
  </section>

<?php get_footer(); ?>
