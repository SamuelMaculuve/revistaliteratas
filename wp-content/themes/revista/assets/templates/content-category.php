<?php


                    while (have_posts()): the_post(); ?>
                 <!-- item blog -->
                        <div class="item-blog p-b-80">
                            <a href="<?= the_permalink(); ?>" class="item-blog-img pos-relative dis-block hov-img-zoom">
                                <img src="<?= have_featuredImage(get_the_ID()); ?>" alt="IMG-BLOG">

                                <span class="item-blog-date dis-block flex-c-m pos1 size17 bg4 s-text1">
                                    <?= get_the_date(); ?>
                                </span>
                            </a>

                            <div class="item-blog-txt p-t-33">
                                <h4 class="p-b-11">
                                    <a href="<?= the_permalink(); ?>" class="m-text24">
                                        <?= get_the_title() ?>
                                    </a>
                                </h4>
                                <div class="s-text8 flex-w flex-m p-b-21">
                                    <span>
                                        Por <?= get_the_author() ?>
                                        <span class="m-l-3 m-r-6">|</span>
                                    </span>

                                    <span>
                                        <?= get_the_date() ?>
                                        <span class="m-l-3 m-r-6">|</span>
                                    </span>
                                </div>

                                <p class="p-b-12">
                                   <?=content_to_excerpt_length(get_the_content(),200,true); ?>
                                </p>

                                <a href="<?= the_permalink(); ?>" class="s-text20">
                                   Continue Lendo
                                    <i class="fa fa-long-arrow-right m-l-8" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                <?php endwhile; wp_reset_postdata(); ?>

