<?php
function og_metatags() {
	global $post, $app_settings;
	if(! is_single() ) return;

	/** Make necessary edits here as indicated **/
	$og_type_homepage = "News";
	$og_type = "news";
	$fb_admin = $app_settings['facebook_user_id']; //Add your facebook ID between quotes.
	$app_id = get_theme_mod('facebook_app_id'); //Enter your App ID here.
	// $og_image_link = "https://www.your-domain.com/path/image.jpg";
	?>

	<meta property="og:url" content="<?php the_permalink(); ?>"/>
	<meta property="og:title" content="<?php single_post_title(''); ?>" />
	<meta property="og:type" content="<?php echo $og_type; ?>" />
	<meta property="og:site_name" content="<?php bloginfo(); ?>" />
	<meta property="fb:admin" content="<?php echo trim($fb_admin); ?>" />
	<meta property="fb:app_id" content="<?php echo trim($app_id); ?>" />
	<!-- <meta property="og:image" content="<?php echo trim($og_image_link); ?>" /> -->
	<?php
}
add_action('wp_head', 'og_metatags', 4);
?>