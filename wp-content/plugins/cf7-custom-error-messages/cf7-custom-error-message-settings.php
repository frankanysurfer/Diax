<?php
/* @access      public
 * @since       1.1 
 * @return      $content
*/
if ( ! defined( 'ABSPATH' ) ) { 
    exit; // Exit if accessed directly
}

function cf7cem_editor_panels_error ( $panels ) {
	
	$new_page = array(
		'custom-error' => array(
			'title' => __( 'Custom Error', 'contact-form-7' ),
			'callback' => 'cf7cem_admin_error_additional_settings'
		)
	);
	
	$panels = array_merge($panels, $new_page);
	
	
	return $panels;
	
}
add_filter( 'wpcf7_editor_panels', 'cf7cem_editor_panels_error', 10, 1 );

function cf7cem_plugin_url( $path = '' ) {
    $url = plugins_url( $path, CEMCF7_PLUGIN );

    if ( is_ssl()
    and 'http:' == substr( $url, 0, 5 ) ) {
        $url = 'https:' . substr( $url, 5 );
    }

    return $url;
}

function cf7cem_admin_error_additional_settings( $cf7 )
{
	
	$post_id = sanitize_text_field($_GET['post']);
	$tags = $cf7->scan_form_tags();

	$enable = get_post_meta($post_id, "_cf7cm_enable_errors", true);
	
	if ($enable == "1") { $checked = "CHECKED"; } else { $checked = ""; }
	
	$admin_cm_output = "";
	$admin_cm_output .= "<form>";
	$admin_cm_output .= "<div id='additionalsettings-registration' class='meta-box'><div id='additional_settings-sortables' class='meta-box'><div id='additionalsettingsdiv'>";
	$admin_cm_output .= "<h2 class='hndle ui-sortable-handle'><span>Custom Error Message Settings</span></h2>";
	$admin_cm_output .= "<div class='inside'>";
	$admin_cm_output .= "<div class='checkbox-settings'>";
	$admin_cm_output .= "<div class='mail-field pretty p-switch p-fill'>";
	$admin_cm_output .= "<input name='enable' value='1' type='checkbox' $checked>";
	$admin_cm_output .= "<div class='state'><label>Enable Custom Error Messages on this form</label></div>";
	$admin_cm_output .= "</div></div>";
	$admin_cm_output .= "</div>";

	$findme   = '*';
	$admin_cm_output .= "<table>";
	foreach ($tags as $key => $value) {
		# code...
		$pos = strpos($value['type'], $findme);
		
		if($pos)
		{
			if(trim($value['type'])=='email*')
			{
				$val = "val_of".$value['name']."-valid";
				$key = "_cf7cm_".$value['name']."-valid";
				$val = get_post_meta($post_id, $key, true);
				$admin_cm_output .= "<tr><td>Error Message For Valid : <strong>".str_replace('-',' ',$value['name'])."</strong></td></tr>";
				$admin_cm_output .= "<tr><td><input type='text' size='50' name='$key' value='$val'> </td></tr><tr><td>";				
			}
			$val = "val_of".$value['name'];
			$key = "_cf7cm_".$value['name'];
			$val = get_post_meta($post_id, $key, true);
			$admin_cm_output .= "<tr><td>Error Message For : <strong>".str_replace('-',' ',$value['name'])."</strong></td></tr>";
			$admin_cm_output .= "<tr><td><input type='text' size='50' name='$key' value='$val'> </td></tr><tr><td>";
			
		}
		
	}
		
	$admin_cm_output .= "<input type='hidden' name='email' value='2'>";
	
	$admin_cm_output .= "<input type='hidden' name='post' value='$post_id'>";
	
	$admin_cm_output .= "</td></tr></table></form>";
	$admin_cm_output .= "</div>";
	$admin_cm_output .= "</div>";
	$admin_cm_output .= "</div>";

	echo $admin_cm_output;
	
}
// hook into contact form 7 admin form save
add_action('wpcf7_save_contact_form', 'cf7cem_save_contact_form');

function cf7cem_save_contact_form( $cf7 ) {

		$tags = $cf7->scan_form_tags();

		$post_id = sanitize_text_field($_POST['post']);

		if (!empty($_POST['enable'])) {
			$enable = sanitize_text_field($_POST['enable']);
			update_post_meta($post_id, "_cf7cm_enable_errors", $enable);
		} else {
			update_post_meta($post_id, "_cf7cm_enable_errors", 0);
		}

		$findme   = '*';

		foreach ($tags as $key => $value) {

			$pos = strpos($value['type'], $findme);
			
			if($pos)
			{

				if(trim($value['type'])=='email*')
				{
					$key = "_cf7cm_".$value['name']."-valid";
					$vals = sanitize_text_field($_POST[$key]);
					update_post_meta($post_id, $key, $vals);

					$key = "_cf7cm_".$value['name'];
					$vals = sanitize_text_field($_POST[$key]);
					update_post_meta($post_id, $key, $vals);
				}
				else
				{
					$key = "_cf7cm_".$value['name'];
					$vals = sanitize_text_field($_POST[$key]);
					update_post_meta($post_id, $key, $vals);
				}

			}

		}

}
?>