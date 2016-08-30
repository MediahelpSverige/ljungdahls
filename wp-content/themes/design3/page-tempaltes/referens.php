<?php
/*
Template name: referens
*/
get_header();
?>


<section class="section-white single">

	<div class="container">
	<div class="container-wrap">
		<?php 
			if ( have_posts() ) {
				while ( have_posts() ) {
					the_post(); 
					//print_r($post);
					//
					// Post Content here
					the_title('<h1>','</h1>');
					//
				} // end while
			} // end if
?>

<div class="referens-wrap">
<?php $query8 = new WP_Query(array( 'post_type' => 'work', 'post_per_page' => -1) );
//print_r($query8);
					  while ( $query8->have_posts() ) : $query8->the_post(); ?>
					  <div class="ref-item">

		<?php the_title('<h2>', '</h2>');  ?>

		<?php the_content();?>

		</div>
	    <?php endwhile;?>

</div>
</div>
</div>
</section>

<?php 
get_footer();
?>