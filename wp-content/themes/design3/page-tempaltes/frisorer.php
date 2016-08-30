<?php
/*
Template name: frisörer
*/
get_header();
?>
<section class="parallax-box">
<div class="overlay">
<div class="parallax-content">
<div class="container">
		<div class="col-md-12">
			<h1 class="title">Välkommen till salongen som kan hår</h1>
		</div>
	</div>
	<div class="clear"></div>
		</div>
<div class="parallax-container" data-parallax="scroll" data-natural-height="669" data-natural-width="1200" data-position="0px 0px" data-image-src="<?php bloginfo( 'template_url' ); ?>/img/salon.jpg">
</div>
</div>
</section>
<section class="section-white">
	<div class="container">
		<?php 
			if ( have_posts() ) {
				while ( have_posts() ) {
					the_post(); 
					//
					// Post Content here
					the_content();
					//
				} // end while
			} // end if
?>
	</div>
</section>
<section class="frisor">


	<?php 
		$query = query_posts(array('post_type' => 'frisor'));

		while ( have_posts() ) : the_post(); ?>
			<div class="container">
					<div class="frisor-wrap">
						<div class="frisor-image"><?php the_post_thumbnail(); ?></div>
						<div class="frisor-info">
							<div class="frisor-name title"> <?php echo get_the_title(); ?></div>
							<div class="frisor-content"><?php the_content(); ?></div>
						</div>
					</div>
					</div>
					<section class="section-dark stats">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
			<div class="stats-wrap">
				<div class="title">År i branschen</div>
				<div class="price">10</div>
			</div>
			</div>
			<div class="col-md-4">
			<div class="title">Herr/dam</div>
				<div class="price">400 kr</div>
			</div>
			<div class="col-md-4">
			<div class="title">Herr/dam</div>
				<div class="price">400 kr</div>
			</div>
		</div>
	</div>
</section>
<?php 
	endwhile;
	wp_reset_query(); 
?>

</section>

<?php get_footer(); ?>