<?php
/*
Template name: tips
*/
get_header();
?>


<section class="section-white">
	<div class="container">
		<div class="container-wrap">
		<div id="tricks" class="col-md-8 col-sm-6">
		<div class="facebook-header">
		<a href="https://www.facebook.com/trepebilvard/">
		<i class="fa fa-facebook-official" aria-hidden="true"></i>
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

			<div class="clearfix"></div>
			</a>
			</div>
			<div class="clearfix"></div>
			<div class="tips-wrap">
			<?php $query8 = new WP_Query(array( 'post_type' => 'tips', 'post_per_page' => -1) );
			//print_r($query8);
			while ( $query8->have_posts() ) : $query8->the_post(); ?>
			<div class="tips-item">
			<div class="border-wrap">
			<?php the_title('<h2 class="small-title">', '</h2>');  ?>
			<?php the_content();?>
			<?php the_post_thumbnail('large'); ?>
<div class="fb-like" data-href="<?php the_permalink(); ?>" data-layout="button_count" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
<!--<a href="#" class="print">skriv ut</a>-->
			</div>
			</div>
			<?php endwhile;?>
		</div>
		</div>

					<div class="col-md-4 col-sm-6" >

					<div class="sidebar-kontakt">
				<div class="border-wrap">
				<h4 class="small-title">Vi publicerar regelbundet tips på Facebook</h4>
				<!--
					<h4 class="small-title">Kontaktinformation</h4>
					<ul class="kontakt-list">
						<li class="clearfix"><label><i class="fa fa-phone"></i>Telefon: </label><label><?php the_field('telefon',15); ?></label></li>
						<li class="clearfix"><label><i class="fa fa-envelope"></i>E-post: </label><label><a href="mailto:<?php the_field('mail',15); ?>"><?php the_field('mail'); ?></a></label></li>
					</ul>
					<ul class="kontakt-list">
						<li class="clearfix"><label><i class="fa fa-home"></i>Adress: </label><label><?php the_field('adress',15);?></label></li>
						<li class="clearfix"><label><i class="fa fa-envelope"></i>Postnr: </label><label><?php the_field('postnummer',15);?></label></li>
						<li class="clearfix"><label><i class="fa fa-building"></i>Postort: </label><label><?php the_field('postort',15);?></label></li>
					</ul>

					<ul class="kontakt-list">
						<li class="clearfix"><label><i class="fa fa-clock-o" aria-hidden="true"></i></label>
						<ul>
							<?php the_field('öppettider',15);?>
						</ul>
						</li>
					</ul> -->

					<?php the_field('facebook',4);?>
					
				</div>
				</div>
			</div>
		</div>
	</div>
</section>
<script type="text/javascript">

$(document).ready(function(){


		var w = $(window).width();
	console.log(w);
	if (w > 770) {




	var sideMapPos = $('.sidebar-kontakt').offset();
	var sideMapStartPos = sideMapPos.top;

	$(window).scroll(function(){
		//get sidebar element

		var $el = $('.sidebar-kontakt .border-wrap')
		var bottom = $el.offset().top + $el.innerHeight();

		//get footer
		var footer = $('footer').offset();
		var footerTop = footer.top;


	var top = $(window).scrollTop()
	headerpos = $('.bottom-header').offset();
	var headertop  = headerpos.top;
		//console.log(headertop);
	var sideMapPos = $('.sidebar-kontakt').offset();

	console.log('bottom:'+ bottom +'');
	console.log('footer'+ footerTop +'');
	if (bottom  >= footerTop && top + $('.bottom-header').height() > $el.offset().top) {

			console.log('yo');
			$('.sidebar-kontakt .border-wrap').css({'bottom':footerTop})

			$('.sidebar-kontakt .border-wrap').offset({ top: footerTop - $el.innerHeight()});


	}else if (top + $('.bottom-header').height() >= sideMapStartPos && bottom <= footerTop){
		$('.sidebar-kontakt .border-wrap').addClass('fixed');
		$('.sidebar-kontakt .border-wrap').offset({ top: headertop + $('.bottom-header').height()});

		}else if(top <= sideMapStartPos){
		$('.sidebar-kontakt .border-wrap').removeClass('fixed');
	}
});


		}




});
	/*
	$(document).ready( function(){

		$('.tips-item .print').click( function(){

			
			var print = $(this).parent()[0]

			$('.tips-wrap').printElement({printMode: 'popup'});
		})

		//$('').printElement();
	})*/
</script>
<?php
get_footer();
?>