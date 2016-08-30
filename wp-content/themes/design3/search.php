<?php

/*
Template Name: Search Page
*/ 

get_header();
?>
<section class="section-white single search">
<div class="container-wrap">
	<div  class="container" >
	<h1 class="search-title">

<?php echo $wp_query->found_posts; ?> <?php _e( 'Sökresultat för', 'locale' ); ?>: "<?php the_search_query(); ?>"

</h1>

<?php if ( have_posts() ) { ?>

            <ul>

            <?php while ( have_posts() ) { the_post(); ?>

               <li>
                 <h3><a href="<?php echo get_permalink(); ?>">
                   <?php the_title();  ?>
                 </a></h3>
                 <?php  the_post_thumbnail('medium') ?>
                 <?php echo substr(get_the_excerpt(), 0,200); ?>
                 <div class="h-readmore"> <a href="<?php the_permalink(); ?>">Read More</a></div>
               </li>

            <?php } ?>

            </ul>

           <?php paginate_links(); ?>

        <?php } ?>

	</div>
	</div>
</section>
<?php get_footer(); ?>