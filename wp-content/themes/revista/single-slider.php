<?php

get_header(); ?>
<?= content_bg_1() ?>
<!-- BACKGROUD -->
<!-- content page -->
  <section class="bgwhite pt-5 pb-5">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-8 p-b-80">
          <div class="p-r-50 p-r-0-lg">
            <div class="p-b-40">
              <?php $flag = TRUE; ?>
                    <?php if ( have_posts() ) while ( have_posts() ) : the_post();?>
              <div class="blog-detail-txt p-t-33">
                  <center>
                    <img class="img-fluid" id="at-member__img"  src="<?= have_featuredImage(); ?>" alt="<?= get_the_title(); ?>" />
                  </center>
                  <h4 class="pt-4 m-text24 text-center"><?php the_title(); ?></h4>
                  <p class="text-center"> <?=get_post_meta(get_the_ID(),'cargo')[0]?></p>
                  <hr/>
                <?php the_content(); ?>
                <?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>
              </div>
              <?php endwhile; // end of the loop. ?>
              <?php if(function_exists('the_views')) { the_views(); } ?>
            </div>

          </div>
        </div>

        <div class="col-md-5 col-lg-4 p-b-80">
          <div class="at-grid" data-column="1">
            <?php
                $customQuerys = new WP_Query(array(
                    'cat' => pll_get_term(24),
                    'posts_per_page' => 10,
                    'post_type' => array('post_type','membros'),
                    'orderby' => 'ID',
                    'order' => 'DESC',
                ));
                //var_dump($customQuerys);
                if($customQuerys->have_posts()): while ($customQuerys->have_posts()): $customQuerys->the_post();?>

                  <div class="at-column">
                    <div class="at-user">
                      <div class="at-user__avatar"><a href="<?= get_the_permalink(); ?>"><img src="<?= have_featuredImage(); ?>"/></a></div>
                      <div class="at-user__name"><?= get_the_title(); ?></div>

                      <ul class="at-social">
                        <div class="at-user__title"><?=  get_post_meta(get_the_ID(),'cargo')[0]?></div>
                      </ul>
                    </div>
                  </div>
                <?php  endwhile; wp_reset_postdata(); endif;?>
          </div>
        </div>
      </div>
    </div>
  </section>

<?php get_footer(); ?>
