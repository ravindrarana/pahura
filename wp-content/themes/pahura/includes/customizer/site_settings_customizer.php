<?php
function tharunk_customize_register( $wp_customize ) {
	$wp_customize->add_section( 'social_sites_section', array(
		'title' => __( 'Social Networks','tharunk' ),
		'priority' => 101
	) );
	// Settings
	$wp_customize->add_setting( 'facebook_link', array(
		'default' => '',
	));

	$wp_customize->add_setting( 'twitter_link', array(
		'default' => '',
	));

	$wp_customize->add_setting( 'youtube_link', array(
		'default' => '',
	));

	$wp_customize->add_setting( 'facebook_app_id', array(
		'default' => '',
	));

	// Controls
	$wp_customize->add_control( 'facebook_link_control', array(
		'label' => __( 'Facebook Link', 'tharunk' ),
		'section' => 'social_sites_section',
		'settings' => 'facebook_link',
	));

	$wp_customize->add_control( 'twitter_link_control', array(
		'label' => __( 'Twitter Link', 'tharunk' ),
		'type' => 'url',
		'section' => 'social_sites_section',
		'settings' => 'twitter_link',
	));

	$wp_customize->add_control( 'youtube_link_control', array(
		'label' => __( 'Youtube Link', 'tharunk' ),
		'type'	=> 'url',
		'section' => 'social_sites_section',
		'settings' => 'youtube_link',
	));

	$wp_customize->add_control( 'facebook_app_id_control', array(
		'label' => __( 'Facebook App ID', 'tharunk' ),
		'section' => 'social_sites_section',
		'settings' => 'facebook_app_id',
	));

}
add_action( 'customize_register', 'tharunk_customize_register' );

?>