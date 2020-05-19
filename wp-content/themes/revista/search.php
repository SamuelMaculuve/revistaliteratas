<?php
get_header();?>
<section class="bgwhite mt-5 mb-5">
  <div class="container mt-5 mb-5">
    <div class="row">
      <div class="col-md-5 col-lg-3 mt-5 mb-5 pt-5">
          <?php get_sidebar(); ?>
      </div>
      <div class="col-md-7 col-lg-9 p-b-80">
        <div class="section-title pt-5">
            <h2 class="title"><?= get_the_title(); ?></h2>
        </div>
        <div class="row pt-5">
            <?php get_template_part('content') ?>
          </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer();
