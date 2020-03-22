<?php get_header(); ?>
<?php
$obj = get_queried_object();
?>
<div class="container px-md-1">
	<div class="page-heading">
		<h1><?php echo $obj->name; ?></h1>
	</div>
	<div class="row">
		<?php
		$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
		$filter = array(
			'post_type'	=> 'post',
			'cat' => $obj->term_id,
			'order' => 'desc',
			'posts_per_page' => 10,
			'paged' => $paged,
		);
		$query = new WP_Query( $filter );
		?>
		<?php if( $query->have_posts() ) {
			while( $query->have_posts() ) {
				$query->the_post();
				?>
				<div class="col-md-4">
					<div class="card post-card mb-4 z-depth-0">
						<?php if (has_post_thumbnail()): ?>
							<a href="<?php esc_url( the_permalink() ); ?>">
								<img class="card-img-top post-thumbnail" src="<?php echo get_the_post_thumbnail_url(null, 'small'); ?>" alt="<?php the_title(); ?>">
							</a>
						<?php endif ?>
						<div class="card-body">
							<h4 class="h4-responsive">
								<a class="mdb-color-text post-title" href="<?php esc_url( the_permalink() ); ?>">
									<?php echo esc_html(the_title()); ?>
								</a>
							</h4>
							<p class="post-meta card-text text-monospace text-muted mb-2">
								<i class="far fa-edit"></i>
								<?php echo get_the_author(); ?>
								<i class="far fa-clock"></i>
								<?php echo get_the_date(); ?>
							</p>

							<div class="post-excerpt card-text text-justify">
								<?php
								if ( strlen( get_the_excerpt() ) > 620 ):
									echo substr( get_the_excerpt(), 0, strpos(get_the_excerpt(), ' ', 600) );
								else:
									echo substr( get_the_excerpt(), 0, 600 );
								endif;
								?>
							</div>
						</div>
					</div>
				</div>
				<?php
			}
			?>
			<?php
			wp_reset_postdata();
		} else{ ?>
			<?php get_template_part('partials/no', 'content'); ?>
		<?php } ?>
	</div>

	<!-- Pagination -->
	<?php get_template_part('partials/page', 'links'); ?>

</div>
<?php get_footer(); ?>