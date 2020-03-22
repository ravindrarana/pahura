<?php get_header(); ?>
<?php
$obj = get_queried_object();
?>
<div class="container px-md-0">
	<div class="page-heading">
		<h1>भिडियो</h1>
	</div>
	<div class="row">
		<?php
		$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
		$filter = array(
			'post_type'	=> 'video',
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
				<?php get_template_part('partials/video', 'list'); ?>
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