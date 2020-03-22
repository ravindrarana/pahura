<div class="borde">
	<!-- Sidebar Top Ad -->
	<?php if ( is_active_sidebar( 'sidebar-top-ads' ) ) : ?>
		<?php dynamic_sidebar( 'sidebar-top-ads' ); ?>
	<?php endif; ?>
	<!-- End of Sidebar Top Ad -->

	<div class="py-2 px-3 indigo border-bottom mb-3">
		<h4 class="h4-responsive white-text">Latest News</h4>
	</div>
	<?php
	$args = array(
		'post_type' => 'post',
		'posts_per_page' => 6,
		'post__not_in' => array(get_the_ID()),
	);
	$featured = new WP_Query($args);
	if ($featured->have_posts()) {
		while($featured->have_posts()): $featured->the_post();
			?>
			<div class="row py-2 mx-1 grey lighten-5 mb-3">
				<div class="col-4 pr-1">
					<?php if ( has_post_thumbnail() ): ?>
						<a href="<?php the_permalink(); ?>">
							<img class="img-fluid" src="<?php echo get_the_post_thumbnail_url(null, 'thumbnail'); ?>" alt="<?php the_title(); ?>" >
						</a>
					<?php endif ?>
				</div>
				<div class="col-8 d-flex">
					<div class="align-self-center w-100">
						<a href="<?php the_permalink(); ?>" class="dark-grey-text">
							<h6 class="h6-responsive"><?php the_title(); ?></h6>
						</a>
					</div>
				</div>
			</div>
			<?php
		endwhile;
		wp_reset_postdata();
	}
	?>

	<!-- Sidebar Bottom Ad -->
	<?php if ( is_active_sidebar( 'sidebar-bottom-ads' ) ) : ?>
		<?php dynamic_sidebar( 'sidebar-bottom-ads' ); ?>
	<?php endif; ?>
	<!-- Facebook Page Iframe -->
	<?php get_template_part('components/facebook', 'page'); ?>
</div>