<?php
/**
 * Plugin Name: CF7 - Custom Error Messages
 * Plugin URL: http://www.wpbuilderweb.com/product/cf7-custom-error-messages/
 * Description:  This plugin will integrate Different Error Messages for different fields after submitting the form.
 * Version: 1.4
 * Author: David Pokorny
 * Author URI: http://#/
 * Developer: Pokorny David
 * Developer E-Mail: pokornydavid4@gmail.com
 * Text Domain: contact-form-7-diff
 * Domain Path: /languages
 * 
 * Copyright: © 2009-2015 izept.com.
 * License: GNU General Public License v3.0
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 */

/**
 * 
 * @access      public
 * @since       1.3
 * @return      $content
*/
if ( ! defined( 'ABSPATH' ) ) { 
    exit; // Exit if accessed directly
}
define( 'CEMCF7_VERSION', '1.4' );

define( 'CEMCF7_PLUGIN', __FILE__ );

define( 'CEMCF7_PLUGIN_BASENAME', plugin_basename( CEMCF7_PLUGIN ) );

define( 'CEMCF7_PLUGIN_NAME', trim( dirname( CEMCF7_PLUGIN_BASENAME ), '/' ) );

define( 'CEMCF7_PLUGIN_DIR', untrailingslashit( dirname( CEMCF7_PLUGIN ) ) );

define( 'CEMCF7_PLUGIN_CSS_DIR', CEMCF7_PLUGIN_DIR . '/css' );

require_once (dirname(__FILE__) . '/cf7-tag-custom-error-message.php');
require_once (dirname(__FILE__) . '/cf7-custom-error-message-settings.php');

?>