<?php


get_header();


$_COOKIE['post'] = $post->ID;

$error = $_SESSION['error_msg'];


?>


<section class="slider">


	<div class="container">


		<div class="row">

		<div class="col-md-4 col-xs-12 col-sm-4" id="login-box">
			<?php the_field('karta'); ?>

		</div>


			<div id="slideshow" class="col-md-8 col-xs-12 col-sm-8">


				<div class="swiper-container">


					<div class="swiper-wrapper" >


						<?php $query8 = new WP_Query(array( 'post_type' => 'banner', 'post_per_page' => -1) );


		

						while ( $query8->have_posts() ) : $query8->the_post(); ?>


						<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>


						<div class="swiper-slide" style="background-image:url(<?php echo $url;?>);">


							<div class="banner-text-box animated">


								<?php the_title('<h3>', '</h3>');  ?>


								<div id="cta"><?php the_content();?></div>


								




							</div>


							<div class="overlay"></div>


						</div>


						<?php endwhile;?>


						<?php wp_reset_postdata(); ?>


					</div>

					<div class="swiper-button-prev"></div>


					<div class="swiper-button-next"></div>


				</div>


			</div>


		</div>


	</div>


</section>


<section class="welcome">


	<div class="container">


		<div class="row">


			<div class="col-md-8 col-sm8">





				<div class="welcome-content">


					<div class="border-wrap">


						<div class="welcome-text section">

						<h4 class="small-title"><?php the_field('welcome-title',4);?></h4>


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
						</div>

						<div class="border-wrap">

							<div class="fb-like"
								data-href="<?php bloginfo('url');?>/tips-tricks"
								data-layout="button_count"
								data-action="like"
								data-share="true"
								data-show-faces="true">
							</div>


						<div class="newsletter section">


							<h4 class="small-title"><?php the_field('projekt-title',4);?></h4>

							<?php the_field('tips_och_tricks'); ?>


							<?php $query8 = new WP_Query(array( 'post_type' => 'tips', 'post_per_page' => 4) ); ?>

				<div id="tipsslider">

				<div class="swiper-container autoheight">


					<div class="swiper-wrapper">

						<?php	while ( $query8->have_posts() ) : $query8->the_post(); ?>

							<div class="swiper-slide tips-slide">
										
							<div class="top-slide-b">
							<a href="<?php the_post_thumbnail_url('large'); ?>" data-lightbox="image-1" data-title="<?php the_title(); ?>">
								<img src="<?php the_post_thumbnail_url('medium'); ?>" >
							</a>
							<?php //the_post_thumbnail('medium');?>
							</div>
							
							<?php /* <h3><?php the_title(); ?></h3>
							<?php the_excerpt();?> */ ?>
								</div>


								<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>

							<?php endwhile;?>


						</div>
											<div class="swiper-button-prev"></div>


					<div class="swiper-button-next"></div>
						</div>
						</div>
						</div>
						</div>



					</div>



		<div class="row">


			<div class="col-md-12">





			</div>


		</div>




				</div>

							<div class="col-md-4 col-sm-4">


					<div class="border-wrap">


					<div class="facebook-wrap">


						<h4 class="small-title"><?php the_field('facebook-title',4);?></h4>


						<?php the_field('facebook',4);?>


					</div>




				</div>



			</div>


			</div>





			<div class="clearfix"></div>


		</div>


	</div>


</section>




	<script type="text/javascript">


		$(document).ready(function(){





			var h = $('.banner').height();


			$('.banner').prepend('<div class="overlay">');


			$('.banner').append('</div>');


			console.log(h);


		});


	</script>


	<?php get_footer(); ?>
