<?php
// If uninstall not called from WordPress exit.
if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) || ! WP_UNINSTALL_PLUGIN || dirname( WP_UNINSTALL_PLUGIN ) != dirname( plugin_basename( __FILE__ ) ) ) {

	status_header( 404 );
	exit;
}

// Support to old versions.
// Delete paghiper page.
$post = get_page_by_path( 'paghiper' );
if ( $post ) {
	wp_delete_post( $post->ID, true );
}

// Delete options.
delete_option( 'woocommerce_paghiper_db_version' );
