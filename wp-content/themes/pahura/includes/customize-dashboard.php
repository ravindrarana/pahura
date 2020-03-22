<?php
// Adding a custom Application Support Widget
add_action('wp_dashboard_setup', 'custom_dashboard_widgets');
function custom_dashboard_widgets() {
	global $wp_meta_boxes;
	wp_add_dashboard_widget('custom_help_widget', 'Application Support', 'custom_dashboard_help');
}
function custom_dashboard_help() {
	echo '<strong><p>Welcome! Need help? Contact the developer here :<a href="mailto:jmsbhatta@gmail.com"> Manoj Bhatta</a>.</p><p>Developer: <a href="http://manojbhatta.com.np" target="_blank">Manoj Bhatta (James)</a></p><p>Company: <a href="http://mohrain.com" target="_blank">Mohrain WebSoft Pvt. Ltd.</a></p></strong>';
}

?>