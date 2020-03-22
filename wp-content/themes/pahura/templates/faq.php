<!--
Template Name: FAQ
-->
<?php get_header(); ?>

<div class="container grey lighten-5 p-4">
	<div class="page-heading-container">
		<div class="wrapper">
			<h1 class="h1-responsive text-default">
				<?php echo $wp_query->post->post_title; ?>
			</h1>
		</div>
	</div>
	<br>
	<?php
	if ( have_posts() ) : while ( have_posts() ) : the_post();
		?>
		<div class="text-muted">
			<?php the_content(); ?>
		</div>
	<?php endwhile;endif; ?>


	<?php
	$filter = array(
		'post_type'	=> 'faqs',
		'meta_key'			=> 'order',
		'orderby'			=> 'meta_value',
		'order'				=> 'ASC'
	);
	$query = new WP_Query( $filter );
	?>
	<?php if( $query->have_posts() ) { ?>
		<div class="container faq-accordion" id="accordion">
			<?php
			while( $query->have_posts() ) {
				$query->the_post();
				?>
				<div class="faq">
					<div class="card rounded-0 border-0">
						<div class="card-header" data-toggle="collapse" href="#collapse<?= get_the_ID(); ?>">
							<?php the_title(); ?>
							<i class="float-right fa fa-chevron-down first"></i>
						</div>
						<div id="collapse<?= get_the_ID(); ?>" class="collapse" data-parent="#accordion">
							<div class="card-body">
								<?php the_content(); ?>
							</div>
						</div>
					</div>
				</div>
				<?php
			} // end while
			?>
		</div>
		<?php
		} // end if
		?>
	</div>
	<!-- End of container-fluid -->
	<?php get_footer(); ?>