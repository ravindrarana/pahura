<?php get_header(); ?>
<div class="container px-md-1">
	<div class="row">
		<div class="col-md-8 p-3">
			<?php
			if (have_posts()) : the_post()
				?>
				<?php setPostViews(get_the_ID()); ?>
				<article>
					<?php if (get_field('sub_heading') != ""): ?>
						<div class="mb-3">
						<span class="bagde badge-secondary p-2">&lsquo; <?php echo get_field('sub_heading'); ?> &rsquo;</span>
						</div>
					<?php endif ?>
					<h1 class="h1-responsive mdb-color-text font-weight-bolder"><?php the_title(); ?></h1>
					<div class="text-monospace mb-2">
						<?php echo get_the_author(); ?> |
						<?php echo get_the_date(); ?>
						<?php edit_post_link(__('<i class="far fa-edit"></i> Edit'), ''); ?>
					</div>

					<div>
						<?php echo do_shortcode('[Sassy_Social_Share]', false); ?>
					</div>

					<?php if ( has_post_thumbnail() ) :?>
						<div class="text-center mb-4">
							<img class="img-fluid" src="<?php echo get_the_post_thumbnail_url(null, 'large'); ?>" alt="<?php the_title(); ?>">
						</div>
					<?php endif; ?>

					<div class="text-justify">
						<?php the_content(); ?>
					</div>

					<!-- Above Comments Ads -->
					<div>
						<?php if ( is_active_sidebar( 'above-comments-ads' ) ) : ?>
							<?php dynamic_sidebar( 'above-comments-ads' ); ?>
						<?php endif; ?>
					</div>
					<!-- End of Above Comments Ads -->

					<?php if ( comments_open() ): ?>
						<div>
							<?php comments_template(); ?>
						</div>
					<?php endif ?>

				</article>
				<!-- End of article -->

				<?php
			else:
				get_template_part('partials/no', 'content');
			endif;
			?>
		</div>
		<div class="col-md-4 p-3">
			<?php get_sidebar(); ?>
		</div>
	</div>
</div>
<!-- End of container -->
<?php get_footer(); ?>