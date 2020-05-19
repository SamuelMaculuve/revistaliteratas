<?php
/**
 * Created by PhpStorm.
 * User: gcondula
 * Date: 1/21/2019
 * Time: 12:21 PM
 */

while (have_posts()): the_post();?>
    <h1><?=the_title();?>sdgdsfgdfhg</h1>
    <div class="container">
        <div class="body"><?=the_content();?></div>
    </div>
<?php endwhile;?>
<div class="mb-5"></div>
<hr>
<div class="post-Lnk prevPost float-left"><?php previous_post_link(); ?></div>
<div class="post-Lnk nextPost float-right"><?php next_post_link(); ?></div>
