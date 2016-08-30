<?php
/*
Template name: tjanster
*/
get_header();
?>


<section class="section-white single">

	<div class="container">
	<div class="sidebar-services">
		<?php 
			if ( have_posts() ) {
				while ( have_posts() ) {
					the_post(); 
					//print_r($post);
					//
					// Post Content here
					the_content();
					//
				} // end while
			} // end if
?>

<?php $query8 = new WP_Query(array( 'post_type' => 'tjanst', 'post_per_page' => -1) );
//print_r($query8);
					  while ( $query8->have_posts() ) : $query8->the_post(); ?>

		<a class="post-link" href="<?php the_permalink();?>"><?php the_title('<h2>', '</h2>');  ?></a>

	    <?php endwhile;?>

</div>
<div class="ajax-field">
	<div class="ajax-title"></div>
	<div class="ajax-content" id="single-post-container">
		<?php 
			if ( have_posts() ) {
				while ( have_posts() ) {
					the_post(); 
					//print_r($post);
					//
					// Post Content here
					the_content();
					//
				} // end while
			} // end if
?>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<div class="offert"></div>
	</div>
</div>
</div>
</section>


<script>
   $(document).ready(function(){
 
        $.ajaxSetup({cache:false});
        $(".post-link").click(function(){
            var post_link = $(this).attr("href");
 
            $("#single-post-container").html("content loading");
            $("#single-post-container").load(post_link, function(data) {
            	test1_elements = $(data).find('.container-wrap');
            	console.log(test1_elements);
            	$("#single-post-container").html(test1_elements);
            	return test1_elements;
            });

        return false;
        });
 
    });
</script>

<?php 
get_footer();
?>