<?php
/**
 * Created by PhpStorm.
 * User: Samuel Maculuve
 * Date: 2020/05/09
 * Time: 22:30
 */

get_header();?>
    <div class="container category-more">
        <div class="row">
            <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                <h2 class="category-title pb-5 text-uppercase">
                    <?php
                    printf( __( '%s', 'twentyten' ),  single_cat_title( '', false ) );?>
                </h2>
                <div class="row">
                    <div class="col-12">
                        <?php woocommerce_content(); ?>
                    </div>
                </div>
            </div>

        </div>
    </div>

<?php get_footer(); ?>
