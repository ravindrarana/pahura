<?php get_header(); ?>
<div class="container">
	<div class="page-heading-bar">
		<div class="heading-arrow-box">
			<h2 class="h2-responsive d-inline">
				<?php echo $wp_query->post->post_title; ?>
			</h2>
		</div>
	</div>
	<?php
	if(have_posts()) : the_post();
		echo the_content();
	endif;
	?>
</div>
<?php get_footer(); ?>