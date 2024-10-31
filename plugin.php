<?php
/**
 * Plugin Name: Redirect to Home
 * Plugin URI: https://wordpress.org/plugins/redirect-to-home
 * Description: Perfect for one-page websites. 301 Redirects everything (404s, search, pages, posts, etc.) to your home / frontpage.
 * Author: Gambit Technologies, Inc
 * Author URI: http://gambit.ph
 * Text Domain: redirect-to-home
 * Version: 1.0
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_action( 'template_redirect', 'rth_template_redirect', 1 );

function rth_template_redirect() {
  if ( ! is_front_page() && ! is_user_logged_in() ) {
        wp_redirect( esc_url( home_url( '/' ) ), 301, 'Redirect to Home' );
        exit();
    }
}