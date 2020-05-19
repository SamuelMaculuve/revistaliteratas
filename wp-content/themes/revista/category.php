<?php

get_header(); ?>


	<!-- content page -->
	<section class="bgwhite p-t-60">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-lg-9 p-b-75">
					<div class="p-r-50 p-r-0-lg">

						<?php get_template_part('content'); ?>
					</div>


				</div>

				<div class="col-md-4 col-lg-3 p-b-75">
                    <?php get_sidebar(); ?>
				</div>
			</div>
		</div>
	</section>
<?php get_footer(); ?>

				