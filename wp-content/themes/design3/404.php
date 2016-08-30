<?php
get_header();
?>
<section class="section-white single">
<?php the_content(); ?>
	<div class="container-wrap">
		<div class="container">
			<?php
				if ( have_posts() ) {
					while ( have_posts() ) {
						the_post();
						//
						// Post Content here
						the_title('<h1>','</h1>');
						the_content();
						//
					} // end while
				}else{
					echo "<h1>Hittar inte sidan du letar efter!</h1>";
				}
			?>
		</div>
	</div>
</section>
<?php get_footer(); ?>