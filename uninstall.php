<?php

global $wpdb, $table_prefix;

// Goodbye data...
$wpdb->query("DROP TABLE IF EXISTS `{$table_prefix}slim_countries`");
$wpdb->query("DROP TABLE IF EXISTS `{$table_prefix}slim_stats`");
$wpdb->query("DROP TABLE IF EXISTS `{$table_prefix}slim_outbound`");
$wpdb->query("DROP TABLE IF EXISTS `{$table_prefix}slim_browsers`");
$wpdb->query("DROP TABLE IF EXISTS `{$table_prefix}slim_screenres`");
$wpdb->query("DROP TABLE IF EXISTS `{$table_prefix}slim_visits`");

// Goodbye options...
delete_option('slimstat_secret');
delete_option('slimstat_is_tracking');
delete_option('slimstat_enable_javascript');
delete_option('slimstat_custom_js_path');
delete_option('slimstat_browscap_autoupdate');
delete_option('slimstat_ignore_interval');
delete_option('slimstat_ignore_bots');
delete_option('slimstat_auto_purge');
delete_option('slimstat_use_separate_menu');
delete_option('slimstat_convert_ip_addresses');
delete_option('slimstat_rows_to_show');
delete_option('slimstat_ignore_ip');
delete_option('slimstat_ignore_resources');
delete_option('slimstat_ignore_browsers');
delete_option('slimstat_ignore_users');
delete_option('slimstat_can_view');
delete_option('slimstat_can_admin');
delete_option('slimstat_enable_footer_link');

// Remove scheduled autopurge events
wp_clear_scheduled_hook('wp_slimstat_purge');

?>