<?php
/*
Plugin Name: RT Demo Importer
Plugin URI: http://radiustheme.com
Description: Demo Importer Plugin by RadiusTheme
Version: 2.1
Author: Radius Theme
Author URI: http://radiustheme.com
*/

if ( is_admin() && !defined( 'FW' ) ) {
	require_once dirname(__FILE__) . '/unyson/framework/bootstrap.php';
	add_filter( 'fw_framework_directory_uri', 'rtdi_fw_framework_directory_uri' );
	add_action( 'admin_menu', 'rtdi_remove_unyson_menus', 12 );
	add_action( 'after_setup_theme', 'rtdi_remove_unyson_footer_version', 12 );
	add_action( 'admin_enqueue_scripts', 'rtdi_fw_admin_styles', 20 );
	//add_filter( 'fw:ext:backups:add-restore-task:image-sizes-restore', 'rtdi_disable_image_sizes_restore' ); // only use this if demo importer stucks at image restore in slow server, then use "Regenerate Thumbnail" later
}

function rtdi_fw_framework_directory_uri() {
	return plugin_dir_url( __FILE__ ) . 'unyson/framework';
}

function rtdi_remove_unyson_menus() {
	remove_menu_page( 'fw-extensions' );
	remove_submenu_page( 'tools.php', 'fw-backups' );
}

function rtdi_remove_unyson_footer_version() {
	$fw_obj = fw();
	remove_filter( 'update_footer', array( $fw_obj->backend, '_filter_footer_version'), 11 );
}

function rtdi_fw_admin_styles(){
	$css = "#fw-ext-backups-demo-list .fw-ext-backups-demo-item.active .theme-actions {display: block !important;}";
	wp_add_inline_style( 'fw-ext-backups-demo', $css );
}

function rtdi_disable_image_sizes_restore(){
	return false;
}