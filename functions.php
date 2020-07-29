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

add_filter('acf/update_value/name=サムネイル', 'acf_set_featured_image', 10, 3);
// サイドバーウィジェット
register_sidebar( array(
	'name' => __( 'サイドバーウィジェットエリア', 'facebook' ),
	'id' => 'sidebar-1',
	'description' => __( 'サイドバーのウィジェットです。', 'ecoworkrs' ),
	'before_widget' => '<div id="%1$s" class="widget %2$s">',
	'after_widget' => '</div>',
	'before_title' => '<h3 class="widget-title">',
	'after_title' => '</h3>',
) );
// フッターウィジェット
register_sidebar( array(
	'name' => __( 'サイドバーウィジェットエリア2', 'twitter' ),
	'id' => 'sidebar-2',
	'description' => __( 'サイドバーのウィジェットです。', 'twitter' ),
	'before_widget' => '<section id="%1$s" class="widget %2$s sp">',
	'after_widget' => '</section>',
	'before_title' => '<h3 class="widget-title">',
	'after_title' => '</h3>',
) );
register_sidebar( array(
	'name' => __( 'サイドバーウィジェットエリア3', 'instagram' ),
	'id' => 'sidebar-3',
	'description' => __( 'サイドバーのウィジェットです。', 'instagram' ),
	'before_widget' => '<section id="%1$s" class="widget %2$s">',
	'after_widget' => '</section>',
	'before_title' => '<h3 class="widget-title">',
	'after_title' => '</h3>',
) );

?>