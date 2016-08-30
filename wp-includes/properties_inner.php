<?php
/**
 * Template Name: properties Inner
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

<?php //echo get_the_ID(); 
    global $wp_query;
    $term = $wp_query->get_queried_object();
    $id = $term->term_id;

?>
<div class="content">

 <div class="slider_btm_part">   

    <div class="container">

        <div class="voluptas_area">
        	<div class="row">
            	<div class="col-md-9 col-sm-7">
                    <div class="slider_outter">
                    	<div class="slider_top">
                            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                            	<div class="carousel-inner">
                            		
                            		<?php $event_query = new WP_Query(array('post_type'  => 'properties', 'posts_per_page' => '-1','order'=> 'DESC', 'tax_query' => array( array( 'taxonomy'  => 'propertiycat' ,'terms'  => $id , 'field' =>'id', 'operator'  => 'IN') ) ));
                                     $c=1;
                                     while ( $event_query->have_posts() ) : $event_query->the_post(); ?>  
                                    <div class="item <?php if($c==1){ echo 'active'; }?>">
                                        <div class="captext2">
                                            <span><?php the_title(); ?></span>
                                            <div class="price_area clearfix">
                                                <a href="#">
                                                    <span>$ <?php echo get_field('properties_price',$post->ID); ?></span>
                                                    <span class="price_btn">Nemoen ipsam</span>
                                                </a>
                                            </div>
                                        </div>
                                        <?php  $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); ?>           				
                                       <span><img src="<?php echo $image[0]; ?>" alt="" class="proimg"></span>
                                                                   <div class="star_area clearfix">
                            	<p class="pull-left"><?php echo get_the_content($post->ID); ?></p>
                                <div class="star_rating pull-right">
                                	<?php if(function_exists('the_ratings')) { the_ratings(); }?>
                                	<!-- <a href="#"><img src="<?php bloginfo('template_directory');?>/images/star.png" alt=""></a> -->
                                </div>
                            </div>
                            <div class="quea_area">
                        	<h4>quae ab inventore </h4>
                        	<div class="row">
                            	<div class="col-sm-4">
                                	<div class="quea_cell">
                                    	<span><img src="<?php echo get_field('extra_image_1',$post->ID );?>" alt=""></span>
                                        <p><?php echo get_field('extra_content_1',$post->ID );?></p>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                	<div class="quea_cell">
                                    	<span><img src="<?php echo get_field('extra_image_2',$post->ID );?>" alt=""></span>
                                        <p><?php echo get_field('extra_content_2',$post->ID );?></p>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                	<div class="quea_cell">
                                    	<span><img src="<?php echo get_field('extra_image_3',$post->ID );?>" alt=""></span>
                                        <p><?php echo get_field('extra_content_3',$post->ID );?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                                    </div>
                      <?php $c++; endwhile; ?>
					<?php wp_reset_postdata(); ?>
                               </div>
                           </div>

                        </div>

                    </div>
                </div>

                <div class="col-md-3 col-sm-5">
 
                	<div class="nyheter">
                    	<div class="nyheter_hd">Populära kategorier</div>
                    
						<div class="property_list content">
                        		<ul class="nav nav-pills nav-justified">
                        			<?php //echo get_the_ID(); 
									    global $wp_query;
									    $term = $wp_query->get_queried_object();
									    $id2 = $term->term_id;
									
									?>
                        			<?php $event_query = new WP_Query(array('post_type'  => 'properties', 'posts_per_page' => '-1','order'=> 'DESC',  'tax_query' => array( array( 'taxonomy'  => 'propertiycat' ,'terms'  => $id2 ,'field' =>'id', 'operator'  => 'IN') ) ));
                                     $c=0;
                                     while ( $event_query->have_posts() ) : $event_query->the_post(); ?>               	
                                	<li  data-target="#myCarousel" data-slide-to="<?php echo $c; ?>" <?php if($c==0){ ?>class="active" <?php }?>>
                                    	<a href="#">
                                            <div class="property_cell">
                                                <div class="captext3">
                                                    <span><img alt="" src="<?php bloginfo('template_directory');?>/images/tag_pic.png"></span>
                                                    <div class="title"><?php the_title(); ?></div>
                                                    <?php the_content(); ?>
                                                </div>
                                                <?php  $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); ?>           				
                                                <span><img src="<?php echo $image[0]; ?>" alt=""></span>
                                            </div>
                                        </a>
                                    </li>
<?php $c++; endwhile; ?>
					<?php wp_reset_postdata(); ?>
                            	</ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
<!--slider btm part end-->
<?php get_footer(); ?>
