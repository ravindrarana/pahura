<?php
function theme_enqueue_scripts() {
	wp_enqueue_style( 'Font_Awesome', 'https://use.fontawesome.com/releases/v5.6.1/css/all.css' );
	wp_enqueue_style( 'Bootstrap_css', get_template_directory_uri() . '/mdb/css/bootstrap.min.css' );
	wp_enqueue_style( 'MDB', get_template_directory_uri() . '/mdb/css/mdb.min.css' );
	// wp_enqueue_style( 'Slick_Css', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css' );
	// wp_enqueue_style( 'Slick_theme', get_template_directory_uri() . '/css/slickmod.css' );
	// wp_enqueue_style( 'Style', get_template_directory_uri() . '/css/style.css' );
	wp_enqueue_style( 'Style', get_template_directory_uri() . '/css/style.min.css' );
	// wp_enqueue_style( 'Components_Style', get_template_directory_uri() . '/css/components.css' );

	wp_enqueue_script( 'jQuery', get_template_directory_uri() . '/mdb/js/jquery-3.4.1.min.js', array(), '3.3.1', true );
	// wp_enqueue_script( 'Slick_JS', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', '1.8.1', array('jQuery'), true );
	wp_enqueue_script( 'Tether', get_template_directory_uri() . '/mdb/js/popper.min.js', array(), '1.0.0', true );
	wp_enqueue_script( 'Bootstrap', get_template_directory_uri() . '/mdb/js/bootstrap.min.js', array(), '1.0.0', true );
	wp_enqueue_script( 'MDB', get_template_directory_uri() . '/mdb/js/mdb.min.js', array(), '1.0.0', true );
	// wp_enqueue_style('Mukta_font', 'https://fonts.googleapis.com/css?family=Mukta&display=swap');
	wp_enqueue_style('Noto_Sans_font', 'https://fonts.googleapis.com/css?family=Noto+Sans&display=swap');

	wp_enqueue_style( 'Homepage_Style', get_template_directory_uri() . '/css/homepage.css' );
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_scripts' );
?>