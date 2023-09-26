<?php
/**
 * Plugin Name: Divi Grid Overlay
 * Plugin URI: https://example.com/plugins/divi-grid-overlay/
 * Description: A plugin that adds a grid overlay to the Divi theme.
 * Version: 1.0.0
 * Author: Eduard Ungureanu
 * Author URI: https://example.com/
 * License: GPL2
 */

// Add the grid overlay to the Divi theme
function divi_grid_overlay() {
    wp_enqueue_style( 'divi-grid-overlay', plugin_dir_url( __FILE__ ) . 'css/divi-grid-overlay.css' );
}
add_action( 'wp_enqueue_scripts', 'divi_grid_overlay' );

function be_grid_overlay() {
	if( ! isset( $_GET['grid'] ) || 'true' !== $_GET['grid'] )
		return;
		
	$columns = 16;
		
	echo '<div class="grid-overlay">';
	for( $i = 0; $i < $columns; $i++ ) {
		echo '<div class="col"></div>';
	}
	echo '</div>';
}
add_action( 'wp_footer', 'be_grid_overlay' );
