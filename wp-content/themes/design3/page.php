<?php
get_header();
?>

<?php 
if ( has_post_thumbnail() ) { ?>
	<figure class="container">
		<div class="col-xs-10">
			<?php the_post_thumbnail(); ?>			
		</div>
	</figure>
<?php } ?>

<section class="section-white single">
	<div class="container-wrap">
		<div class="container">

					<?php if ( function_exists('yoast_breadcrumb') ) 



			{



				$title = false;



				yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?>


		<div class="border-wrap col-xs-10">
			<?php
				if ( have_posts() ) {
					while ( have_posts() ) {
						the_post();
						//
						// Post Content here
						the_title('<h1 class="small-title">', '</h1>');
						the_content();
						//
					} // end while
				} // end if
			?>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>