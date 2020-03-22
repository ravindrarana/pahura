<!-- 
**
* Template Name: Contact
* Author: Manoj Bhatta (James)
* website: http://manojbhatta.com.np
-->
<?php get_header(); ?>
<div class="page-heading-container">
	<div class="wrapper">
		<h1 class="">
			सम्पर्क
		</h1>
	</div>
</div>
<div class="content">
	<?php
	if ( have_posts() ) : while ( have_posts() ) : the_post();
		the_content();
	endwhile;endif; ?>
</div>
<?php get_footer(); ?>
