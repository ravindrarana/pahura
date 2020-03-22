<?php
function init_theme_widgets() {
	register_sidebar( array(
		'name'          => 'Header Ad',
		'id'            => 'header-ad',
		'description'	=> 'Place the image for the advertisements that should be displayed in the Top  right section of header. Recommended size: 1200x90',
		'before_widget' => '<div class="header-ad">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => 'Below Header Ad',
		'id'            => 'below-header-ad',
		'description'	=> 'Place the image for the advertisements that should be displayed just below the header. Recommended size: 1200x90',
		'before_widget' => '<div class="full-width-ad">',
		'after_widget'  => '</div>',
		'before_title'  => '',
		'after_title'   => '',
	) );

	register_sidebar( array(
		'name'          => 'Font Page Ad Below Featured',
		'id'            => 'frontpage-ad-below-featured',
		'description'	=> 'Place the image for the advertisements that should be displayed below the featured images in the homepage. Recommended size: 1200x90',
		'before_widget' => '<div class="full-width-ad">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => 'Font Page Ad Above Video',
		'id'            => 'frontpage-ad-above-video',
		'description'	=> 'Place the image for the advertisements that should be displayed above the Video section homepage. Recommended size: 1200x90',
		'before_widget' => '<div class="full-width-ad">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => 'Font Page Ad Above Epaper',
		'id'            => 'frontpage-ad-above-epaper',
		'description'	=> 'Place the image for the advertisements that should be displayed above the Epaper section homepage. Recommended size: 1200x90',
		'before_widget' => '<div class="full-width-ad">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => 'Sidebar Top Ads',
		'id'            => 'sidebar-top-ads',
		'description'	=> 'Place the image for the advertisements that should be displayed in the Top section of sidebar. Recommended size: 600x600',
		'before_widget' => '<div class="text-center mb-3">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => 'Sidebar Bottom Ads',
		'id'            => 'sidebar-bottom-ads',
		'description'	=> 'Place the image for the advertisements that should be displayed in the Bottom section of sidebar. Recommended size: 600x600',
		'before_widget' => '<div class="text-center mb-3">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => 'Above Comments Ads',
		'id'            => 'above-comments-ads',
		'description'	=> 'Place the images for the advertisements that should be displayed just above the comment section. Recommended size: 1200x120',
		'before_widget' => '<div class="text-center my-3">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => 'Footer Logo',
		'id'            => 'footer-logo',
		'description'	=> 'The content of this widget will be shown in the top left corner of footer.',
		'before_widget' => '<div class="footer-logo">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => 'Footer Description',
		'id'            => 'footer-description',
		'description'	=> 'The content of this widget will be shown in the bottom right corner of footer.',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'init_theme_widgets' );