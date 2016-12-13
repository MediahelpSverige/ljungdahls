<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.1.min.js"></script>
<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/bower_components/swiper/dist/js/swiper.min.js"></script>
<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/script.js" ></script>
<footer>
	<div class="container">
		<div class="footer-info">
			<div class="left-field">
				<h3 class="footer-title">Kontakta oss idag</h3>
				<p>Klicka på knappen nedan för att komma till vårt formulär. När du skickat iväg formuläret så ska vi försöka svara så fort som möjligt</p>
				<a class="btn-blue" href="<?php bloginfo('url');?>/kontakt">Kontakta oss</a>
			</div>
			<div class="middle-field">
			</div>
			<div class="right-field">
				<h3 class="footer-title">Kontakt</h3>
				<?php the_field('contact-footer', 4); ?>

				<div class="social-row">				</div>			</div>			<div class="clearfix"></div>		</div>	</div>	<div class="footer-bottom">		<div class="container">			<div class="footer-bottom-cont">
				<p><i class="fa fa-copyright" aria-hidden="true"></i> Ljungdahls Entreprenad AB <?php the_date('Y'); ?></p>			</div>		</div>			</div>
				<?php wp_footer();?>
				<script type="text/javascript">
				</script>
			</footer>

			<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/node_modules/lightbox2/dist/js/lightbox.min.js"></script>

			</body></html>
