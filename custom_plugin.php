<?php

/*
 * Plugin Name:       Custom Plugin
 * Description:       Tutorial for plugin development.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Keenan Olivier
 */

 add_filter( 'show_admin_bar', '__return_false' );
 
add_action( 'admin_menu', 'wporg_options_page' );
function wporg_options_page() {
    add_menu_page(
        'Keenan Olivier',
        'Keenan Olivier Options',
        'manage_options',
        plugin_dir_path(__FILE__) . 'Admin/view.php',
        null,
        'dashicons-admin-plugins',
        20
    );
}