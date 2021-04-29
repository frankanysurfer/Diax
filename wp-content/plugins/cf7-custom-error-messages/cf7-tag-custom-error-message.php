<?php
/* @access      public
 * @since       1.1 
 * @return      $content
*/
if ( ! defined( 'ABSPATH' ) ) { 
    exit; // Exit if accessed directly
}

add_action('admin_enqueue_scripts', 'callback_cf7cem_setting_up_scripts');
function callback_cf7cem_setting_up_scripts() {
    wp_enqueue_style( 'cf7cemcss', cf7cem_plugin_url('/css/cf7cem-style.css'), array(), CEMCF7_VERSION, 'all' );
}


add_filter( 'wpcf7_validate_text', 'wpcf7_text_custom_validation_message', 1, 2 );
add_filter( 'wpcf7_validate_text*', 'wpcf7_text_custom_validation_message', 1, 2 );
add_filter( 'wpcf7_validate_email', 'wpcf7_text_custom_validation_message', 1, 2 );
add_filter( 'wpcf7_validate_email*', 'wpcf7_text_custom_validation_message', 1, 2 );
add_filter( 'wpcf7_validate_url', 'wpcf7_text_custom_validation_message', 1, 2 );
add_filter( 'wpcf7_validate_url*', 'wpcf7_text_custom_validation_message', 1, 2 );
add_filter( 'wpcf7_validate_tel', 'wpcf7_text_custom_validation_message', 1, 2 );
add_filter( 'wpcf7_validate_tel*', 'wpcf7_text_custom_validation_message', 1, 2 );

function wpcf7_text_custom_validation_message( $result, $tag ) {

	$cmtagobj = new WPCF7_Shortcode( $tag );
	$post_id = sanitize_text_field($_POST['_wpcf7']);
	$name = $cmtagobj->name;
	$key = "_cf7cm_".$name;
	$val = get_post_meta($post_id, $key, true);

	$enable = get_post_meta($post_id,'_cf7cm_enable_errors');

	if($enable[0]!=0)
	{
		$value = isset( $_POST[$name] )
			? trim( wp_unslash( strtr( (string) $_POST[$name], "\n", " " ) ) )
			: '';

		if ( 'text' == $cmtagobj->basetype ) {
			if ( $cmtagobj->is_required() && '' == $value ) {
				$result->invalidate( $cmtagobj, $val );
			}
		}

		if ( 'email' == $cmtagobj->basetype ) {
			if ( $cmtagobj->is_required() && '' == $value ) {
				$result->invalidate( $cmtagobj, $val );
			} elseif ( '' != $value && ! wpcf7_is_email( $value ) ) {
				$key = "_cf7cm_".$name."-valid";
				$val = get_post_meta($post_id, $key, true);
				if ($val) {
					$result->invalidate( $cmtagobj, $val );
				}
				else
				{
					$result->invalidate( $cmtagobj, wpcf7_get_message( 'invalid_email' ) );
				}
			}
		}

		if ( 'url' == $cmtagobj->basetype ) {
			if ( $cmtagobj->is_required() && '' == $value ) {
				$result->invalidate( $cmtagobj, $val );
			} elseif ( '' != $value && ! wpcf7_is_url( $value ) ) {
				$result->invalidate( $cmtagobj, wpcf7_get_message( 'invalid_url' ) );
			}
		}

		if ( 'tel' == $cmtagobj->basetype ) {
			if ( $cmtagobj->is_required() && '' == $value ) {
				$result->invalidate( $cmtagobj, $val );
			} elseif ( '' != $value && ! wpcf7_is_tel( $value ) ) {
				$result->invalidate( $cmtagobj, wpcf7_get_message( 'invalid_tel' ) );
			}
		}

		if ( ! empty( $value ) ) {
			$maxlength = $cmtagobj->get_maxlength_option();
			$minlength = $cmtagobj->get_minlength_option();

			if ( $maxlength && $minlength && $maxlength < $minlength ) {
				$maxlength = $minlength = null;
			}

			$code_units = wpcf7_count_code_units( $value );

			if ( false !== $code_units ) {
				if ( $maxlength && $maxlength < $code_units ) {
					$result->invalidate( $cmtagobj, wpcf7_get_message( 'invalid_too_long' ) );
				} elseif ( $minlength && $code_units < $minlength ) {
					$result->invalidate( $cmtagobj, wpcf7_get_message( 'invalid_too_short' ) );
				}
			}
		}
	}
	return $result;
}

add_filter( 'wpcf7_validate_textarea', 'wpcf7_custom_textarea_validation_message', 1, 2 );
add_filter( 'wpcf7_validate_textarea*', 'wpcf7_custom_textarea_validation_message', 1, 2 );

function wpcf7_custom_textarea_validation_message( $result, $tag ) {
	$cmtatag = new WPCF7_Shortcode( $tag );

	$type = $cmtatag->type;
	$name = $cmtatag->name;
	$post_id = sanitize_text_field($_POST['_wpcf7']);
	$value = isset( $_POST[$name] ) ? (string) $_POST[$name] : '';
	$key = "_cf7cm_".$name;
	$val = get_post_meta($post_id, $key, true);
	$enable = get_post_meta($post_id,'_cf7cm_enable_errors');

	if($enable[0]!=0)
	{
		if ( $cmtatag->is_required() && '' == $value ) {
			$result->invalidate( $cmtatag, $val );
		}

		if ( ! empty( $value ) ) {
			$maxlength = $cmtatag->get_maxlength_option();
			$minlength = $cmtatag->get_minlength_option();

			if ( $maxlength && $minlength && $maxlength < $minlength ) {
				$maxlength = $minlength = null;
			}

			$code_units = wpcf7_count_code_units( $value );

			if ( false !== $code_units ) {
				if ( $maxlength && $maxlength < $code_units ) {
					$result->invalidate( $cmtatag, $val );
				} elseif ( $minlength && $code_units < $minlength ) {
					$result->invalidate( $cmtatag, $val );
				}
			}
		}
	}
	return $result;
}
?>