<footer class="mt-5">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<?php if ( is_active_sidebar( 'footer-logo' ) ) : ?>
					<?php dynamic_sidebar( 'footer-logo' ); ?>
				<?php endif; ?>
			</div>
			<div class="col-md-6 d-flex">
				<div class="footer-social-links d-flex w-100 align-self-center justify-content-between py-3">
					<?php if (get_option('facebook_link')): ?>
						<div>
							<a class="btn  z-depth-0" href="<?php echo get_option('facebook_link'); ?>">Facebook <i class="fab fa-facebook-f fa-lg ml-2"></i></a>
						</div>
					<?php endif ?>
					<?php if (get_option('twitter_link') != null): ?>
						<div>
							<a class="btn z-depth-0" href="<?php echo get_option('twitter_link'); ?>">Twitter <i class="fab fa-twitter fa-lg ml-2"></i></a>
						</div>
					<?php endif ?>
					<?php if (get_option('youtube_link') != null): ?>
						<div>
							<a class="btn z-depth-0" href="<?php echo get_option('youtube_link'); ?>">Youtube <i class="fab fa-youtube fa-lg ml-2"></i></a>
						</div>
					<?php endif ?>
				</div>
			</div>
		</div>
		<div class="my-sm-2 my-md-5"></div>
		<div class="row">
			<div class="col-md-6">
				<div class="footer-contact">
					<ul class="list-unstyled">
						<li><label>मुख्य कार्यालय: </label><?php echo get_option('address'); ?></li>
						<li><label>फोन नम्बर:</label> <?php echo get_option('phone'); ?></li>
						<li><label>मोबाईल:</label> <?php echo get_option('mobile'); ?></li>
						<li><label>ईमेल:</label> <?php echo get_option('email'); ?></li>
						<li><label>विज्ञापनका लागि सम्पर्क: </label> <?php echo get_option('contact_for_ad'); ?></li>
						<li><label>सुचना बिभाग दर्ता नं.: </label> <?php echo get_option('company_registration_no'); ?></li>
					</ul>
				</div>
			</div>
			<div class="col-md-6">
				<div class="d-flex">
					<ul class="list-unstyled owners-list flex-fill">
						<li>पहुरा मेडिया प्रा. लि. द्वारा संचालित पहुरा थारु दैनिक अनलाईन  संस्करण </li>
					</ul>
					<ul class="list-unstyled owners-list flex-fill flex-shrink-0">
						<li class="head">अध्यक्ष</li>
						<li>रामलखन चौधरी</li>
					</ul>
					<ul class="list-unstyled owners-list flex-fill flex-shrink-0">
						<li class="link"><a href="<?php echo get_permalink(get_page_by_path('our-team')); ?>">हाम्रो टीम</a></li>
					</ul>
				</div>
				<?php if ( is_active_sidebar( 'footer-description' ) ) : ?>
					<div class="bg-primary text-white p-4 rounded text-justify">
						<?php dynamic_sidebar( 'footer-description' ); ?>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
	<div class="container text-center grey lighten-5 p-4">
		Powered by: <a class="mdb-color-text text-monospace" href=""> Mohrain WebSoft</a>
		<!-- Developer Manoj Bhatta https://www.manojbhatta.com.np -->
	</div>
</footer>
<?php wp_footer(); ?>
<script>
	jQuery(document).ready(function($) {
		new WOW().init();
		$('[data-toggle="tooltip"]').tooltip()
	});
</script>
</body>
</html>