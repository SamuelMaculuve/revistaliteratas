<?php

$total_posts = $wp_query->max_num_pages;
$total_result = $wp_query->found_posts;
if ($total_result > 0)
{
    if(have_posts()):
        while (have_posts()): the_post(); ?>
        <div class="col-sm-6 col-md-6 col-lg-6 mb-4 mb-lg-0">
          <div class="post-entry">
            <a href="<?= get_the_permalink(); ?>" class="mb-3 img-wrap">
              <img  src="<?= have_featuredImage(); ?>" alt="<?= get_the_title(); ?>" class="img-fluid"/>
              <span class="date"><?= get_the_date(); ?></span>
            </a>
            <h3><a href="<?= get_the_permalink(); ?>"><?= get_the_title(); ?></a></h3>
          </div>
        </div>
        <?php endwhile;
        if (function_exists('that_category'))
            echo that_category();
        else ?>

        <?php the_posts_pagination( array(
            'mid_size' => 2,
            'prev_text' => __( 'Anterior', 'Iniciativa' ),
            'next_text' => __( 'Próximo', 'Iniciativa' ),
        ) );
    else:
        //caso de não houver mais nenhum post do something
    endif;
}
else
{?>
  <div class="col-12">
    <h2><?= sprintf(__('%s resultado(s) para "%s"','Amea'), $total_result, get_search_query()) ?></h2>
  </div>
  <div class="col-12">
    <div class="row">
      <div class="col-2">

      </div>
      <div class="col-8">
          <?php  get_search_form(); ?>
      </div>
      <div class="col-2">

      </div>
    </div>
  </div>
<?php
}
