<?php
/*
* Remove WordPress menu from admin bar
**/
add_action( 'admin_bar_menu', 'remove_wp_logo', 999 );
function remove_wp_logo( $wp_admin_bar ) {
	$wp_admin_bar->remove_node( 'wp-logo' );
}

// Add the Nepali Unicode editor link
http://v3.unicodenepali.com/convert.html
add_action('admin_bar_menu', 'add_toolbar_items', 100);
function add_toolbar_items($admin_bar){
	$admin_bar->add_menu(array(
		'id'	=> 'nepali_unicode',
		'title'	=> 'Nepali Unicode',
		'href'	=> 'https://roman.arthasarokar.com',
		'meta'	=> array(
			'title'	=> __('Nepali Unicode'),
			'target' => '_blank',
			'class'	=> '',
			'rel'	=> 'noreferrer'
		)
	));
	$admin_bar->add_menu(array(
		'id'	=> 'preeti_to_unicode',
		'title'	=> 'Preeti Converter',
		'href'	=> 'https://preeti.arthasarokar.com',
		'meta'	=> array(
			'title'	=> __('Preeti Converter'),
			'target' => '_blank',
			'class'	=> '',
			'rel'	=> 'noreferrer'
		)
	));
}

?>