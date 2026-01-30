<?php
/**
 *  Uninstall clean up
 *
 * @package SPC
 */

 // If uninstall not called from WordPress, then exit.
if (!defined('WP_UNINSTALL_PLUGIN')) {
    exit;
}

// Delete plugin options
delete_option('spc_settings'); 

// For multisite installations, delete site options
if (is_multisite()) {
    delete_site_option('spc_settings');
}
