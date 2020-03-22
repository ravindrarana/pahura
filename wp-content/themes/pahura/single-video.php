<?php get_header(); ?>
<div class="container px-md-0">
	<div class="row">
		<?php
		if (have_posts()) : the_post()
			?>
			<?php setPostViews(get_the_ID()); ?>
			<div class="col-md-12">
				<div class="embed-container">
					<?php
					$iframe = get_field('video');
					preg_match('/src="(.+?)"/', $iframe, $matches);
					$src = $matches[1];
					$params = array(
						// 'controls'  => 0,
						'hd'        => 1,
						// 'autohide'  => 1,
						'autoplay'	=> 1,
					);
					$new_src = add_query_arg($params, $src);
					$iframe = str_replace($src, $new_src, $iframe);
					$attributes = 'frameborder="0"';
					$iframe = str_replace('></iframe>', ' ' . $attributes . '></iframe>', $iframe);
					echo $iframe;
					?>
				</div>
			</div>
			<div class="col-md-8">
				<div class="my-3">
					<h4 class="h4-responsive font-weight-light"><?php the_title(); ?></h4>
					<?php edit_post_link(__('<i class="far fa-edit"></i> Edit'), ''); ?>
				</div>

				<p class="border grey lighten-5 p-3">
					<i class="fa fa-user-circle fa-lg mr-2"></i>
					<?php echo get_the_author(); ?>
					<span class="float-right">
						<?php echo get_the_date(); ?>
					</span>
				</p>
				<?php if ( has_post_thumbnail() ) :?>
					<div class="text-center mb-4">
						<img class="img-fluid" src="<?php echo get_the_post_thumbnail_url(null, 'large'); ?>" alt="<?php the_title(); ?>">
					</div>
				<?php endif; ?>

				<div class="text-justify">
					<?php the_content(); ?>
				</div>

				<div class="grey lighten-5 border p-2 my-3">
					<?php echo do_shortcode('[Sassy_Social_Share]', false); ?>
				</div>

				<!-- Above Comments Ads -->
				<div>
					<?php if ( is_active_sidebar( 'above-comments-ads' ) ) : ?>
						<?php dynamic_sidebar( 'above-comments-ads' ); ?>
					<?php endif; ?>
				</div>
				<!-- End of Above Comments Ads -->

				<?php if ( comments_open() ): ?>
					<div class="comments-container my-4">
						<?php comments_template(); ?>
					</div>
				<?php endif ?>

				<?php
				$filter = array(
					'post_type'	=> 'video',
					'order' => 'desc',
					'posts_per_page' => 10,
					'post__not_in' => array(get_the_ID()),
				);
				$query = new WP_Query( $filter );
				?>
				<?php if( $query->have_posts() ) {
					?>
					<div class="row">
						<?php
						while( $query->have_posts() ) {
							$query->the_post();
							?>
							<?php get_template_part('partials/video', 'list'); ?>
							<?php
						}
						?>
					</div>
					<?php
					wp_reset_postdata();
				}
				?>
			</div>
			<?php
		else:
			get_template_part('partials/no', 'content');
		endif;
		?>
		<div class="col-md-4 p-3">
			<?php get_sidebar(); ?>
		</div>
	</div>
</div>
<!-- End of container -->
<?php get_footer(); ?>