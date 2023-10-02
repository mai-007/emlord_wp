<?php
// ========================================
//  WP admin
// ========================================
function theme_admin_setup() {
  add_theme_support( 'editor-style' );
  add_theme_support( 'align-wide' );
  add_theme_support( 'wp-block-styles' );
  add_theme_support( ' responsive-embeds' );
}
add_action( 'after_setup_theme', 'theme_admin_setup' );

// ========================================
//  WP admin menu
// ========================================
function theme_menu_init() {
	register_nav_menus( array(
		'global' => 'グローバルメニュー',
    'header' => 'ヘッダーメニュー',
    'footer' => 'フッターメニュー'
	) );
}
add_action( 'init', 'theme_menu_init' );

// ========================================
//  WP admin widget
// ========================================
function my_widget_init() {
	register_sidebar( array(
		'name'          => 'サイドバー',
		'id'            => 'sidebar',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="widget-title">',
		'after_title'   => '</div>',
	) );
}
add_action( 'widgets_init', 'my_widget_init' );

//--------------------------------------------------------
//Dashboard非表示
//--------------------------------------------------------

?>