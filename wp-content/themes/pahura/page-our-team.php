<!--
	Template Name: Our Team
-->

<?php get_header(); ?>
<div class="container">
	<h1 class="h1-responsive font-weight-bold mdb-color-text">
		<?php echo $wp_query->post->post_title; ?>
	</h1>
	<hr>
	<div>
		<?php
		if(have_posts()) : the_post();
			echo the_content();
		endif;
		?>
	</div>
</div>
<?php get_footer(); ?>