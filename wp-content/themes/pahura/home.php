<!--
	Template Name: Homepage
-->
<?php get_header(); ?>
<div id="breakingNews">
	<div class="container">
		<?php
		$breakingNews = array(
			'category_name' => 'featured',
			'posts_per_page' => 3,
		);
		$breakingNewsQuery = new Wp_Query($breakingNews);
		foreach( wp_loop($breakingNewsQuery) as $post ){
			array_push($exclude, get_the_ID() );
			?>
			<div class="breaking-news">
				<?php if (get_field('sub_heading') != ""): ?>
					<div class="sub-title">&ldquo; <?php echo get_field('sub_heading'); ?> &rdquo;</div>
				<?php endif ?>
				<div class="title">
					<a href="<?php the_permalink(); ?>"><?php echo esc_html(get_the_title()); ?></a>
				</div>
				<div class="author"><i class="far fa-user mr-2"></i> <?php echo esc_html(get_the_author()); ?></div>
				<?php if (has_post_thumbnail()): ?>
					<div class="cover-image">
						<a href="<?php echo the_permalink(); ?>">
							<img class="img-fluid" src="<?php echo get_the_post_thumbnail_url(null, 'large'); ?>" alt="" style="width: 100%;">
						</a>
					</div>
				<?php endif ?>
				<div class="excerpt">
					<?php echo esc_html(get_the_excerpt()); ?>
				</div>
			</div>
		<?php } ?>
	</div>
</div>
<!-- End of Breaking News -->

<div class="my-3"></div>
<!-- FUll width ad -->
<?php if ( is_active_sidebar( 'frontpage-ad-below-featured' ) ) : ?>
	<div class="container text-center">
		<?php dynamic_sidebar( 'frontpage-ad-below-featured' ); ?>
	</div>
	<div class="my-3"></div>
<?php endif; ?>


<div class="container-fluid grey lighten-5 py-5 px-4">
	<div class="container px-0">
		<div class="row">
			<div class="col-md-8">
				<div class="row">
					<div class="col-md-12">
						<h2 class="indigo text-white p-2 mb-3">बिशेष</h2>
					</div>
					<div class="col-md-8">
						<?php $args = array(
							'posts_per_page' => 1,
							'post__not_in' => $exclude,
						);
						$query = new Wp_Query($args);
						?>
						<?php foreach( wp_loop($query) as $post ) {
							array_push($exclude, get_the_ID() );
							?>
							<div class="card z-depth-0">
								<a href="<?php echo esc_url(get_the_permalink()); ?>">
									<img class="card-img-top rounded-0" src="<?php echo get_the_post_thumbnail_url(null, 'small'); ?>" alt="<?php echo esc_html(get_the_title()); ?>">
								</a>
								<div class="card-body">
									<div class="card-title text-center">
										<?php if (get_field('sub_heading') != ""): ?>
											<h6 class="text-default"><em>" <?php echo get_field('sub_heading') ?> "</em></h6>
										<?php endif ?>
										<h4 class="h4-responsice font-weight-bolder">
											<a class="text-title-link" href="<?php echo esc_url(get_the_permalink()); ?>"><?php echo esc_html(get_the_title()); ?></a>
										</h4>
									</div>
									<p class="card-text">
										<?php echo get_the_excerpt(); ?>
									</p>
								</div>
							</div>
						<?php } ?>
					</div>
					<div class="col-md-4">
						<?php $args = array(
							'posts_per_page' => 5,
							'post__not_in' => $exclude,
						);
						$query = new Wp_Query($args);
						?>
						<?php foreach( wp_loop($query) as $post ) {
							array_push($exclude, get_the_ID() );
							?>
							<div class="media hover-indigo py-3 px-2 mb-2 white">
								<img class="d-flex align-self-center img-fluid mr-3" src="<?php echo get_the_post_thumbnail_url(null, 'thumbnail'); ?>" alt="<?php echo esc_html(get_the_title()); ?>" style="height: 60px; width: 60px;">
								<div class="media-body">
									<h6 class="font-weight-light">
										<a class="text-title-link" href="<?php echo esc_url(get_the_permalink()); ?>"><?php echo esc_html(get_the_title()); ?></a>
									</h6>
								</div>
							</div>
						<?php } ?>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<h2 class="indigo text-white p-2 mb-3">ताजा समाचार</h2>
				<?php
				$args = array(
					'posts_per_page' => 3,
					'post__not_in' => $exclude,
				);
				$query = new Wp_Query($args);
				foreach( wp_loop($query) as $post ) {
					array_push($exclude, get_the_ID() );
					$count = isset($count) ? ++$count : 1;
					if ($count == 1 ):
						?>
						<div class="card z-depth-0 rounded-0">
							<a href="<?php echo esc_url(get_the_permalink()); ?>">
								<img class="card-img-top rounded-0" src="<?php echo get_the_post_thumbnail_url(null, 'medium'); ?>" alt="<?php echo esc_html(get_the_title()); ?>">
							</a>
							<div class="card-body text-center">
								<h5 class="h5-responsive font-weight-light">
									<a class="text-title-link" href="<?php echo esc_url(get_the_permalink()); ?>"><?php echo esc_html(get_the_title()); ?></a>
								</h5>
							</div>
						</div>
						<?php
					else:
						?>
						<div class="media hover-indigo py-3 px-2 my-2 white">
							<a href="<?php echo esc_url(get_the_permalink()); ?>">
								<img class="d-flex align-self-center mr-3" src="<?php echo get_the_post_thumbnail_url(null, 'thumbnail'); ?>" alt="<?php echo esc_html(get_the_title()); ?>" style="height: 80px; width: 90px;">
							</a>
							<div class="media-body">
								<h6 class="font-weight-light">
									<a class="text-title-link" href="<?php echo esc_url(get_the_permalink()); ?>"><?php echo esc_html(get_the_title()); ?></a>
								</h6>
							</div>
						</div>
						<?php
					endif;
				}
				unset($count);
				?>
			</div>
		</div>
	</div>
</div>

<div class="my-5"></div>

<div class="container">
	<div class="row">
		<div class="col-md-8">
			<h2 class=" text-warning p-2 mb-3">अन्तर्बार्ता</h2>
			<div class="row">
				<?php
				$args = array(
					'posts_per_page' => 3,
					'post__not_in' => $exclude,
				);
				$query = new Wp_Query($args);
				foreach( wp_loop($query) as $post ) {
					array_push($exclude, get_the_ID() );
					$count = isset($count) ? ++$count : 1;
					if ($count == 1 ):
						?>
						<div class="col-md-12 mb-4">
							<div class="row">
								<div class="col-md-6 pr-0 align-items-stretch">
									<div class="indigo text-center d-flex p-4 h-100">
										<h1 class="align-self-center font-italic">
											<a href="<?php echo esc_html(get_the_permalink()); ?>" class="text-white">
												&apos; <?php echo get_the_title(); ?> &apos;
											</a>
										</h1>
									</div>
								</div>
								<div class="col-md-6 pl-0">
									<a href="<?php echo esc_html(get_the_permalink()); ?>">
										<img class="img-fluid" src="<?php echo get_the_post_thumbnail_url(null, 'medium'); ?>" alt="" style="height: 250px;">
									</a>
								</div>
							</div>
						</div>
						<?php
					else:
						?>
						<div class="col-md-6">
							<div class="media py-3 px-2 my-2 grey lighten-5">
								<a href="<?php echo esc_html(get_the_permalink()); ?>">
									<img class="d-flex align-self-center mr-3" src="<?php echo get_the_post_thumbnail_url(null, 'thumbnail'); ?>" alt="<?php echo esc_html(get_the_title()); ?>" style="height: 80px; width: 90px;">
								</a>
								<div class="media-body">
									<h3 class="h3-responsive align-self-center font-italic">
										<a href="<?php echo esc_html(get_the_permalink()); ?>" class="text-title-link">
											&apos; <?php echo get_the_title(); ?> &apos;
										</a>
									</h3>
								</div>
							</div>
						</div>
						<?php
					endif;
				}
				?>
			</div>
		</div>
		<div class="col-md-4">
			<h2 class="text-warning p-2 mb-3">बिचार</h2>
			<?php
			$args = array(
				'posts_per_page' => 1,
				'post__not_in' => $exclude,
			);
			$query = new Wp_Query($args);
			foreach( wp_loop($query) as $post ) {
				array_push($exclude, get_the_ID() );
				?>
				<div class="card z-depth-0 rounded-0">
					<a href="<?php echo esc_html(get_the_permalink()); ?>">
						<img class="card-img-top rounded-0" src="<?php echo get_the_post_thumbnail_url(null, 'medium'); ?>" alt="<?php echo esc_html(get_the_title()); ?>">
					</a>
					<div class="card-body text-center">
						<h5 class="h5-responsive font-weight-light">
							<a class="text-title-link" href="<?php echo esc_url(get_the_permalink()); ?>"><?php echo esc_html(get_the_title()); ?></a>
						</h5>
					</div>
				</div>
				<?php
			}
			unset($count);
			?>
		</div>
	</div>
</div>

<div class="my-3"></div>

<!-- FUll width ad -->
<?php if ( is_active_sidebar( 'frontpage-ad-above-video' ) ) : ?>
	<div class="container text-center">
		<?php dynamic_sidebar( 'frontpage-ad-above-video' ); ?>
	</div>
	<div class="my-3"></div>
<?php endif; ?>

<!-- Videos -->
<div class="container-fluid special-color py-5 px-4">
	<div class="container px-0">
		<div class="row">
			<div class="col-md-12">
				<h2 class="text-white p-2 mb-3">भिडियो</h2>
			</div>
			<?php
			$args = array(
				'post_type'	=>'video',
				'posts_per_page' => 4,
				'post__not_in' => $exclude,
			);
			$query = new Wp_Query($args);
			foreach( wp_loop($query) as $post ) {
				array_push($exclude, get_the_ID() );
				$count = isset($count) ? ++$count : 1;
				if ($count == 1 ):
					?>
					<div class="col-md-8">
						<div class="video-container">
							<?php echo get_field('video'); ?>
						</div>
					</div>
					<?php
				else:
					?>
					<?php if ($count == 2): ?>
						<div class="col-md-4">
						<?php endif; ?>
						<?php
						$url = get_field('video', false, false);
						$oembed = _wp_oembed_get_object();
						$provider = $oembed->get_provider($url);
						$oembed_data = $oembed->fetch( $provider, $url, array('width' => 300, 'height' => 175) );
						$thumbnail = $oembed_data->thumbnail_url;
						$md_thumbnail = str_replace('hqdefault', 'mqdefault', $thumbnail);
						?>
						<div class="media hover-indigo py-3 px-2 mb-2 white">
							<a href="<?php echo esc_html(get_the_permalink()); ?>">
								<img class="d-flex align-self-center mr-3" src="<?php echo $md_thumbnail; ?>" alt="<?php echo esc_html(get_the_title()); ?>" style="height: 80px; width: 100px;">
							</a>
							<div class="media-body">
								<h5 class="h5-responsive font-weight-light">
									<a class="text-title-link" href="<?php echo esc_url(get_the_permalink()); ?>">
										<?php echo esc_html(get_the_title()); ?>
									</a>
								</h5>
							</div>
						</div>
						<?php
					endif;
				}
				?>
			</div>
			<?php
			unset($count);
			?>
		</div>
	</div>
</div>
<!-- End of videos -->

<div class="my-3"></div>

<!-- Sahitya and Others -->
<div class="container">
	<div class="row">
		<div class="col-md-8">
			<div class="row">
				<div class="col-md-12">
					<h2 class="indigo text-white p-2 mb-3">साहित्य</h2>
				</div>
				<?php
				$args = array(
					'posts_per_page' => 4,
					'post__not_in' => $exclude,
				);
				$query = new Wp_Query($args);
				foreach( wp_loop($query) as $post ) {
					array_push($exclude, get_the_ID() );
					?>
					<div class="col-md-6">
						<div class="card z-depth-0 rounded-0">
							<a href="<?php echo esc_html(get_the_permalink()); ?>">
								<img class="card-img-top rounded-0" src="<?php echo get_the_post_thumbnail_url(null, 'medium'); ?>" alt="<?php echo esc_html(get_the_title()); ?>">
							</a>
							<div class="card-body text-center">
								<h5 class="h5-responsive font-weight-light">
									<a class="text-title-link" href="<?php echo esc_url(get_the_permalink()); ?>"><?php echo esc_html(get_the_title()); ?></a>
								</h5>
							</div>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
		<div class="col-md-4">
			<h2 class="indigo text-white p-2 mb-3">विविधा</h2>
			<?php
			$args = array(
				'posts_per_page' => 5,
				'post__not_in' => $exclude,
			);
			$query = new Wp_Query($args);
			foreach( wp_loop($query) as $post ) {
				array_push($exclude, get_the_ID() );
				?>
				<div class="card hover-indigo rounded-0 z-depth-0 grey lighten-5 mb-3">
					<div class="card-body">
						<h5 class="h5-responsive font-weight-light">
							<a class="text-title-link d-flex" href="<?php echo esc_url(get_the_permalink()); ?>">
								<span class="grey-text mr-2">❖</span>
								<?php echo esc_html(get_the_title()); ?></a>
							</h5>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
	<!-- End of Sahitya and Others -->

	<div class="my-3"></div>

	<!-- FUll width ad -->
	<?php if ( is_active_sidebar( 'frontpage-ad-above-epaper' ) ) : ?>
		<div class="container text-center">
			<?php dynamic_sidebar( 'frontpage-ad-above-epaper' ); ?>
		</div>
		<div class="my-3"></div>
	<?php endif; ?>

	<!-- E-paper -->
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2 class="h2-responsive text-center  font-weight-bolder p-2 mb-3">
					<a class="text-title-link" href="<?php echo get_permalink(get_page_by_path('epaper')); ?>"><i class="far fa-newspaper"></i> ईपेपर</a>
				</h2>
			</div>
			<?php
			$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
			$filter = array(
				'post_type'	=> 'epaper',
				'order' => 'desc',
				'posts_per_page' => 3,
				'paged' => $paged,
			);
			$query = new WP_Query( $filter );
			?>
			<?php if( $query->have_posts() ) {
				while( $query->have_posts() ) {
					$query->the_post();
					$epaper = get_field('epaper');
					$filesize = $epaper['filesize'];
					$filesize = size_format($filesize, 2);
					$download_link = $epaper['url'];
					?>
					<div class="col-md-4 pb-4">
						<div class="flip-card mx-auto">
							<div class="flip-card-inner">
								<div class="flip-card-front">
									<div class="overlay">
										<img class="card-img-top img-fluid" src="<?php echo get_the_post_thumbnail_url(null, 'large'); ?>" alt="<?php echo esc_html(get_the_title()); ?>">
										<div class="title">
											<?php echo esc_html(the_title()); ?>
										</div>
									</div>
								</div>
								<div class="flip-card-back">
									<h3 class="h3-responsive"><?php echo esc_html(the_title()); ?></h3>
									<div class="flex-grow-1 justify-content-center d-flex">
										<div class="my-auto">
											<a class="btn btn-danger z-depth-0 d-flex" href="<?php echo esc_html($download_link); ?>" target="_blank">
												<div><i class="fa fa-cloud-download-alt fa-2x mr-2"></i></div>
												<div class="text-center small">
													<div>Download</div>
													<div>( <?php echo $filesize; ?> )</div>
												</div>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<?php
				}
				wp_reset_postdata();
			}
			?>
			<div class="col-md-12 text-center">
				<a class="btn btn-outline-indigo z-depth-0" href="<?php echo get_permalink(get_page_by_path('epaper')); ?>">
					<i class="far fa-list-alt mr-2"></i> सबै ईपेपरहरु
				</a>
			</div>
		</div>
	</div>
	<!-- End of E-paper -->
	<?php get_footer(); ?>
