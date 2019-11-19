<?php

// Fired when the plugin is uninstalled.

// If not called by WordPress, die.
if ( !defined( 'WP_UNINSTALL_PLUGIN' ) ) die;
 
// regular site options
delete_option('acau_settings');
delete_option('acau_first_activate');
delete_option('acau_dismiss_notice');

// multisite options
delete_site_option('acau_settings');
delete_site_option('acau_first_activate');
delete_site_option('acau_dismiss_notice');