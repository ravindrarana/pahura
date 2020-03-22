<!-- Facebook Page -->
<?php if ( get_theme_mod('facebook_link') != null ): ?>
	<div class="container-fluid text-center my-4">
		<div class="fb-page" data-href="<?php echo get_theme_mod('facebook_link'); ?>" data-tabs="timeline" data-width="" data-height="" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="<?php echo get_theme_mod('facebook_link'); ?>" class="fb-xfbml-parse-ignore"><a href="<?php echo get_theme_mod('facebook_link'); ?>" target="_top"><?php bloginfo('sitename'); ?></a></blockquote>
		</div>
	</div>
<?php endif ?>
<!-- End of Facebook Page -->
