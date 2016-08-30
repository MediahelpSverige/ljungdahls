<?php
/*
Template name: om oss
*/
get_header();
?>


<section class="section-white single">
<div class="container-wrap">
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
<?php $query8 = new WP_Query(array( 'post_type' => 'page', 'post_parent' => 9 ) );
//print_r($query8);
					  while ( $query8->have_posts() ) : $query8->the_post(); ?>

<?php if ($post->ID == 47) { ?>
<div class="referens">
		<?php the_title('<h2>', '</h2>');  ?>
		<?php the_content();?>

		
			<div class="btn-blue"><a href="http://stilog.mediahelpcrm.se/om-stilog/referensuppdrag/">Klicka här för att läsa mer</a></div>

			</div>
		<?php } else if($post->ID == 47 || 56){ ?>
		<div class="about-sec">
			<?php the_title('<h2>', '</h2>');  ?>
			<?php the_content();?>
			</div>
			<?php }else{ ?>

			<?php the_title('<h2>', '</h2>');  ?>
			<?php the_content();?>

				<?php } ?>
	    <?php endwhile;?>

	    <?php $query8 = new WP_Query(array( 'post_type' => 'page', 'post_parent' => 47 ) );
//print_r($query8);
					  while ( $query8->have_posts() ) : $query8->the_post(); ?>

		<?php the_title('<h2>', '</h2>');  ?>
		<?php the_content();?>
	    <?php endwhile;?>
</div>
</div>
</section>

<?php 
get_footer();
?>