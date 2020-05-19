<?php

/** Set default FeaturedImage if not exist image on |Page|Post|Category|Search|etc **/

if(!function_exists('have_featuredImage'))
{
    function have_featuredImage()
    {
        if (get_the_post_thumbnail_url() == null)
            echo bloginfo('template_url').'/assets/images/Template-05.jpg';
        else
            echo get_the_post_thumbnail_url();
    }
}


########################################################################################################################
if(!function_exists('content_to_excerpt_length'))
{
    function content_to_excerpt_length($content,$length,$haveBrackets)
    {
        $contents = strip_tags($content);
        if ($haveBrackets) {
            echo substr($contents, 0, $length) . ' ...';
        }else{
            echo substr($contents, 0, $length) . ' ... ';
        }
    }
}

#######################################################################################################################
if(!function_exists('content_card_publ_project'))
{
    function content_card_publ_project($post_item,$query)
    {

          $customQuerys = new WP_Query(array(
              'posts_per_page' => $post_item,
              'post_type' => array('post_type',$query),
              'orderby' => 'ID',
              'order' => 'DESC',
          ));

          if($customQuerys->have_posts()): while ($customQuerys->have_posts()): $customQuerys->the_post();
              ?>
              <div class="col-sm-6 col-md-6 col-lg-6 mb-4 mb-lg-0">
                <div class="post-entry">
                  <a href="<?= get_the_permalink(); ?>" class="mb-3 img-wrap">
                    <img  src="<?= have_featuredImage(); ?>" alt="<?= get_the_title(); ?>" class="img-fluid"/>
                    <span class="date"><?= get_the_date(); ?></span>
                  </a>
                  <h3><a href="<?= get_the_permalink(); ?>"><?= get_the_title(); ?></a></h3>
                </div>
              </div>
          <?php  endwhile; wp_reset_postdata(); endif;
    }
}
#######################################################################################################################
if(!function_exists('content_card_member'))
{
    function content_card_member($cat,$post_item)
    {
            $customQuerys = new WP_Query(array(
                'cat' => pll_get_term(24),
                'posts_per_page' => $post_item,
                'post_type' => array('post_type','membros'),
                'orderby' => 'ID',
                'order' => 'DESC',
            ));
            //var_dump($customQuerys);
            if($customQuerys->have_posts()): while ($customQuerys->have_posts()): $customQuerys->the_post();?>

              <div class="at-column">
                <div class="at-user">
                  <div class="at-user__avatar"><a href="<?= get_the_permalink(); ?>"><img  src="<?= have_featuredImage(); ?>" alt="<?= get_the_title(); ?>"/></a></div>
                  <div class="at-user__name"><?= get_the_title(); ?></div>

                  <ul class="at-social">
                    <div class="at-user__title"><?=  get_post_meta(get_the_ID(),'cargo')[0]?></div>
                  </ul>
                </div>
              </div>
            <?php  endwhile; wp_reset_postdata(); endif;

    }
}
########################################################################################################################
if(!function_exists('content_bg_1'))
{
    function content_bg_1()
    {?>
      <div class="block-31" style="position: relative;">
        <div class="owl-carousel loop-block-31 ">
          <div class="block-30 block-30-sm item pt-5 pb-5">
            <div class="container">
              <div class="row align-items-center justify-content-center">
                <div class="col-md-12 col-lg-7 col-sm-12 text-center">
                  <h2 class="heading"><?= get_the_title(); ?></h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php }
}
#######################################################################################################################
if(!function_exists('content_slider'))
{
    function content_slider()
    {
      	$customQuerys = new WP_Query(array(
  					'cat' => pll_get_term(30),
  					'posts_per_page' => 3,
  					'post_type' => array('post_type','slider'),
  					'orderby' => 'ID',
  					'order' => 'DESC',
  			));
  			//var_dump($customQuerys);
  			if($customQuerys->have_posts()): while ($customQuerys->have_posts()): $customQuerys->the_post();?>
  				<li><a href="<?= get_the_permalink(); ?>"><img src="<?= have_featuredImage(); ?>" alt="<?= get_the_title(); ?>" title="<?= get_the_title(); ?>" id="wows1_<?= $i++ ?>"/></a> </li>
  			<?php  endwhile; wp_reset_postdata(); endif; ?>
  	</ul>
  </div>
  	<div class="ws_bullets"><div>
  		<?php	$customQuerys = new WP_Query(array(
  					'cat' => pll_get_term(30),
  					'posts_per_page' => 3,
  					'post_type' => array('post_type','Slider'),
  					'orderby' => 'ID',
  					'order' => 'DESC',
  			));
  			//var_dump($customQuerys);
  			if($customQuerys->have_posts()): while ($customQuerys->have_posts()): $customQuerys->the_post();?>
  				<a href="<?= get_the_permalink(); ?>" title="<?= get_the_title(); ?>"><span><img src="<?= have_featuredImage(); ?>" alt="<?= get_the_title(); ?>"/>1</span></a>
  			<?php endwhile; wp_reset_postdata(); endif;
    }
}
