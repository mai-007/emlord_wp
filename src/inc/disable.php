<?php
//--------------------------------------------------------
//single.php以外で自動整形無効化
//--------------------------------------------------------
function disable_page_wpautop() {
if ( is_page() ) remove_filter( 'the_content', 'wpautop' );
}
add_action( 'wp', 'disable_page_wpautop' );