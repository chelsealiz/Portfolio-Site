<?php


// enque our custom admin styles
if( is_admin() ) {
	wp_enqueue_style( 'vbtk-admin-atyles', get_template_directory_uri() . '/build/css/admin.css', array(), '', 'all' );
}








// unset unwanted dashboard widgets
function remove_dashboard_widgets() {
	global $wp_meta_boxes;

	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
	update_user_meta( get_current_user_id(), 'show_welcome_panel', false );
	remove_meta_box( 'dashboard_activity', 'dashboard', 'normal');

}

add_action('wp_dashboard_setup', 'remove_dashboard_widgets' );





// add our custom VBTK support widget
add_action('wp_dashboard_setup', 'my_custom_dashboard_widgets');

function my_custom_dashboard_widgets() {
	global $wp_meta_boxes;
	wp_add_dashboard_widget('vbtk_help_widget', 'Vibethink Website & Technical Support', 'custom_dashboard_help');
}

function custom_dashboard_help() {
	echo '<h2 class="alert-text">Need support?</h2>';
	echo '<p><strong>Email:</strong> info@vibethink.com</p>';
	echo '<p><strong>Phone:</strong> (434) 984-0804</p>';
	echo '<p><strong>Address:</strong> 110 Old Preston Ave, Charlottesville, VA 22902</p>';
}





function remove_footer_admin () {
	echo '<span id="footer-thankyou">Website Developed by <a href="https://vibethink.com" target="_blank">Vibethink</a></span>';
}

add_filter('admin_footer_text', 'remove_footer_admin');