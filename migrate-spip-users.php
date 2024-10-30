<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
/*
Plugin Name: Migrate SPIP Users
Description: A plugin to migrate users from SPIP to WordPress.
Author: Ramlal Solanki
Author URI: https://about.me/ramlal
Version: 1.0
*/
//to add custom page in admin section
add_action('admin_menu', 'migrate_spip_users_plugin');
function migrate_spip_users_plugin(){
	$plugins_url = plugin_dir_url( __FILE__ ) . 'images/spip.png' ;
	add_menu_page( 'Migrate SPIP Users', 'Migrate SPIP Users', 'manage_options', 'migrate-spip-users-plugin', 'migrate_spip_users_init', $plugins_url );
}

function migrate_spip_users_init(){
	require plugin_dir_path( __FILE__ ) . 'migrate_spip_users.php';
}
?>