<?php
/* Template name: projekt */
get_header();
?>
<section class="section-white single">
	<div class="container-wrap">
		<div class="container">



					<?php if ( function_exists('yoast_breadcrumb') )



			{



				$title = false;



				yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?>


		<div class="border-wrap">
			<?php
				if ( have_posts() ) {
					while ( have_posts() ) {
						the_post();
						//
						// Post Content here
						the_title('<h2 class="small-title">', '</h2>');
						the_content();
						//
					} // end while
				} // end if
			?>

      <div class="row">

      <?php

        $args = array('post_type' => 'projekt', 'posts_per_page' => -1);

        $query = new WP_Query($args);

        if ($query->have_posts()) {
          while ($query->have_posts()) {
            $query->the_post(); ?>

            <div class="col-md-4">
            <div class="project-item">

            <div class="project-image" style="background-image:url('<?php the_post_thumbnail_url(); ?>')">
            </div>
            <?php // the_title('<h3>','</h3>'); ?>
            <?php the_content(); ?>
          </div>
        </div>
          <?php }
        }

      ?>
      </div>

			</div>

		</div>
	</div>
</section>
<?php get_footer(); ?>
