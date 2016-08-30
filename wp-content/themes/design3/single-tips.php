<?php
get_header();
?>
<section class="section-white">
	<div class="container">
	<div class="col-md-8 col-sm-6">
			<div id="tricks" class="facebook-header">
		<a href="https://www.facebook.com/trepebilvard/">
		<i class="fa fa-facebook-official" aria-hidden="true"></i>
		<h1>Gilla vår sida på Facebook för regelbundna tips och tricks</h1>

		</a>

		</div>
		<div class="clearfix"></div>
	<div class="tips-wrap">

			<?php
				if ( have_posts() ) {
					while ( have_posts() ) { ?>

						<div class="tips-item">
							<div class="border-wrap">
						<?php 
						the_post();
						//print_r($post);
						//
						// Post Content here
					the_title('<h2 class="small-title">', '</h2>');
						the_content();
						the_post_thumbnail('large');
						//?>
						<div class="fb-like" data-href="<?php the_permalink(); ?>" data-layout="button_count" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div><a class="print" href='javascript:window.print();'><i class="fa fa-print" aria-hidden="true"></i>Skriv ut</a>
						</div>
											</div>
						<?php
					} // end while ?>


					</div>
				 <?php } // end if
			?>
</div>

<div class="col-md-4 col-sm-6">

					<div class="sidebar-kontakt">
				<div class="border-wrap">
				<h4 class="small-title">Vi publicerar regelbundet tips på Facebook</h4>


					<?php the_field('facebook',4);?>
					
				</div>
				</div>
	


</div>
		<div class="row">
			<div class="col-md-12">
				<div class="offert"></div>
			</div>
		</div>
	</div>
</section>
<?php
get_footer();
?>