<?php
/* ------------------------------------------------------------------------ *
* Setting Registration
* ------------------------------------------------------------------------ */

/**
* Initializes the theme options page by registering the Sections,
* Fields, and Settings.
*
* This function is registered with the 'admin_init' hook.
*/
add_action('admin_init', 'sandbox_initialize_theme_options');
function sandbox_initialize_theme_options() {

	// First, we register a section. This is necessary since all future options must belong to one.
	add_settings_section(
'general_settings_section',         // ID used to identify this section and with which to register options
'Site Settings',                  // Title to be displayed on the administration page
'sandbox_general_options_callback', // Callback used to render the description of the section
'general'                           // Page on which to add this section of options
);

// Next, we will introduce the fields for toggling the visibility of content elements.
	add_settings_field(
'facebook_app_id',                      // ID used to identify the field throughout the theme
'Facebook App ID',                           // The label to the left of the option interface element
'sandbox_toggle_facebook_app_id_callback',   // The name of the function responsible for rendering the option interface
'general',                          // The page on which this option will be displayed
'general_settings_section'
);

	add_settings_field(
		'facebook_link',
		'Facebook Link',
		'sandbox_toggle_facebook_link_callback',
		'general',
		'general_settings_section'
	);

	add_settings_field(
		'youtube_link',
		'Youtube Link',
		'sandbox_toggle_youtube_link_callback',
		'general',
		'general_settings_section'
	);

	add_settings_field(
		'twitter_link',
		'Twitter Link',
		'sandbox_toggle_twitter_link_callback',
		'general',
		'general_settings_section'
	);

	add_settings_field(
		'address',
		'Address',
		'sandbox_toggle_address_callback',
		'general',
		'general_settings_section'
	);

	add_settings_field(
		'phone',
		'Phone',
		'sandbox_toggle_phone_callback',
		'general',
		'general_settings_section'
	);

	add_settings_field(
		'mobile',
		'Mobile',
		'sandbox_toggle_mobile_callback',
		'general',
		'general_settings_section'
	);

	add_settings_field(
		'email',
		'Email',
		'sandbox_toggle_email_callback',
		'general',
		'general_settings_section'
	);

	add_settings_field(
		'contact_for_ad',
		'Contact For Ad',
		'sandbox_toggle_contact_for_ad_callback',
		'general',
		'general_settings_section'
	);

	add_settings_field(
		'company_registration_no',
		'Company Registration No.',
		'sandbox_toggle_company_registration_no_callback',
		'general',
		'general_settings_section'
	);

// Finally, we register the fields with WordPress
	register_setting(
		'general',
		'facebook_app_id'
	);

	register_setting(
		'general',
		'facebook_link'
	);

	register_setting(
		'general',
		'youtube_link'
	);

	register_setting(
		'general',
		'twitter_link'
	);

	register_setting(
		'general',
		'address'
	);

	register_setting(
		'general',
		'phone'
	);

	register_setting(
		'general',
		'mobile'
	);

	register_setting(
		'general',
		'email'
	);

	register_setting(
		'general',
		'contact_for_ad'
	);

	register_setting(
		'general',
		'company_registration_no'
	);

} // end sandbox_initialize_theme_options

/* ------------------------------------------------------------------------ *
* Section Callbacks
* ------------------------------------------------------------------------ */

/**
* This function provides a simple description for the General Options page.
*
* It is called from the 'sandbox_initialize_theme_options' function by being passed as a parameter
* in the add_settings_section function.
*/
function sandbox_general_options_callback() {
	echo '<p>You can set varius options regarding your site in this page.</p>';
}

/* ------------------------------------------------------------------------ *
* Field Callbacks
* ------------------------------------------------------------------------ */
function sandbox_toggle_facebook_app_id_callback($args) {
	$html = '<input type="text" id="facebook_app_id" name="facebook_app_id" value="'.get_option('facebook_app_id').'">';
	echo $html;
}
function sandbox_toggle_facebook_link_callback($args) {
	$html = '<input type="text" id="facebook_link" name="facebook_link" class="regular-text" value="'.get_option('facebook_link').'">';
	echo $html;
}

function sandbox_toggle_youtube_link_callback($args) {
	$html = '<input type="text" id="youtube_link" name="youtube_link" class="regular-text" value="'.get_option('youtube_link').'">';
	echo $html;
}

function sandbox_toggle_twitter_link_callback($args) {
	$html = '<input type="text" id="twitter_link" name="twitter_link" class="regular-text" value="'.get_option('twitter_link').'">';
	echo $html;
}

function sandbox_toggle_address_callback($args) {
	$html = '<input type="text" id="address" name="address" class="regular-text" value="'.get_option('address').'">';
	echo $html;
}

function sandbox_toggle_phone_callback($args) {
	$html = '<input type="text" id="phone" name="phone" class="regular-text" value="'.get_option('phone').'">';
	echo $html;
}

function sandbox_toggle_mobile_callback($args) {
	$html = '<input type="text" id="mobile" name="mobile" class="regular-text" value="'.get_option('mobile').'">';
	echo $html;
}

function sandbox_toggle_email_callback($args) {
	$html = '<input type="text" id="email" name="email" class="regular-text" value="'.get_option('email').'">';
	echo $html;
}

function sandbox_toggle_contact_for_ad_callback($args) {
	$html = '<input type="text" id="contact_for_ad" name="contact_for_ad" class="regular-text" value="'.get_option('contact_for_ad').'">';
	echo $html;
}

function sandbox_toggle_company_registration_no_callback($args) {
	$html = '<input type="text" id="company_registration_no" name="company_registration_no" class="regular-text" value="'.get_option('company_registration_no').'">';
	echo $html;
}