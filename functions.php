<?php 
/*  投稿内のパスを相対パスに */
function delete_domain_from_attachment_url( $url ) {
if ( preg_match( '/^http(s)?:\/\/[^\/\s]+(.*)$/', $url, $match ) ) {
 $url = $match[2];
 }
 return $url;
}
add_filter( 'wp_get_attachment_url', 'delete_domain_from_attachment_url' );


function imagepassshort($arg) {
$content = str_replace('"images/', '"' . get_bloginfo('template_directory') . '/images/', $arg);
return $content;
}
add_action('the_content', 'imagepassshort');

// 固定ページのみ自動形成機能を削除
function disable_page_wpautop() {
if ( is_page() ) remove_filter( 'the_content', 'wpautop' );
}
add_action( 'wp', 'disable_page_wpautop' );
?>