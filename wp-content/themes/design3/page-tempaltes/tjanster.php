<?php/*Template name: Våra Tjänster*/get_header();?><section class="section-white single">	<div class="container">		<h1>Våra tjänster</h1>		<div class="row">			<div class="service-wrap">				<?php					if ( have_posts() ) {						while ( have_posts() ) {							the_post();							//print_r($post);							//							// Post Content here							the_content();							//						} // end while					} // end if				?>				<?php $query8 = new WP_Query(array( 'post_type' => 'page', 'post_per_page' => -1, 'post_parent' => 6) );				while ( $query8->have_posts() ) : $query8->the_post(); ?>				<?php //print_r($post);				$parent_id = $post->post_parent;				?>				<div class="service-header">					<div class="tjanst-image"><?php the_post_thumbnail();?></div>					<a href="<?php the_permalink();?>"><?php the_title('<h2>', '</h2>');?></a>				<?php endwhile;?>				<div class="row">					<div class="col-md-12">						<div class="offert"></div>					</div>				</div>			</div>		</div>	</div></section><script>$(document).ready(function(){	var sideMapPos = $('.sibebar-map').offset();var sideMapStartPos = sideMapPos.top;	$('.tjanst-item').click(function(){		$('.hidden-tjanst',this).slideToggle();	});	/*	$(window).scroll(function(){			var $el = $('.sibebar-map .map-wrap')		var bottom = $el.offset().top + $el.innerHeight();			//get footer		var footer = $('footer').offset();		var footerTop = footer.top;	var top = $(window).scrollTop()	headerpos = $('.bottom-header').offset();	var headertop  = headerpos.top;	var sideMapPos = $('.sibebar-map').offset();	console.log('bottom:'+ bottom +'');	console.log('footer'+ footerTop +'');		if (bottom  >= footerTop - 90 && top + $('.bottom-header').height() > $el.offset().top) {			console.log('yo');			$('.sibebar-map .map-wrap').css({'bottom':footerTop})			$('.sibebar-map .map-wrap').offset({ top: footerTop - $el.innerHeight()});	}else if (top + $('.bottom-header').height() >= sideMapStartPos && bottom <= footerTop){		console.log('bigger')		$('.map-wrap').addClass('fixed');		$('.map-wrap').offset({ top: headertop + $('.bottom-header').height()});	}else if(top <= sideMapStartPos){		$('.map-wrap').removeClass('fixed');	}});*/});</script><?phpget_footer();?>