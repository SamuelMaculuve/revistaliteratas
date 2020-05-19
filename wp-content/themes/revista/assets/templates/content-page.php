<?php
/**
 * Created by PhpStorm.
 * User: gcondula
 * Date: 1/21/2019
 * Time: 12:21 PM
 */

while (have_posts()): the_post(); ?>
    <h1><?=the_title();?>Samuel Teste</h1>
    <div class="container">
        <div class="body"><?=the_content();?></div>
    </div>
<?php endwhile;