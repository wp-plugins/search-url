<?php
/**
 * @package Search URL
 * @version 1.0
 */
/*
Plugin Name: Search URL
Plugin URI: http://www.ne.com.eg/
Description: This will convert your search results to permalink search results URL
Author: Network EGYPT
Version: 1.0
Author URI: http://www.ne.com.eg/
*/

function change_search_url_rewrite() {
    if ( is_search() && ! empty( $_GET['s'] ) ) {
        wp_redirect( home_url( "/search/" ) . urlencode( get_query_var( 's' ) ) . "/" );
        exit();
    }   
}
add_action( 'template_redirect', 'change_search_url_rewrite' );

?>