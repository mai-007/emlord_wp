<?php

// ========================================
//  WP Setting
// ========================================
if ( ! function_exists( 'my_theme_setup' ) ) :
  function theme_setup() {
		add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
    add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);
    add_theme_support( 'customize-selective-refresh-widgets' );
    add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
    );
  }
endif;
add_action( 'after_setup_theme', 'theme_setup' );

// titleタグの区切り
function rewrite_separator($separator) {
  $separator = '|';
  return $separator;
}
add_filter('document_title_separator', 'rewrite_separator');

//--------------------------------------------------------
//widget有効
//--------------------------------------------------------
function my_theme_widgets_init(){
	register_sidebar(array(
		'name' => 'Main Sidebar',
		'id' => 'main-sidebar',
	));
}
add_action( 'widgets_init' , 'my_theme_widgets_init' );
//--------------------------------------------------------
//enqueue_setup
//--------------------------------------------------------
// function add_files() {
//   if(is_home() || is_front_page() ){
//       wp_enqueue_style( 'vegasCss', 'https://cdnjs.cloudflare.com/ajax/libs/vegas/2.4.4/vegas.min.css');
//       wp_enqueue_scripts( 'vegasJs', 'https://cdnjs.cloudflare.com/ajax/libs/vegas/2.5.4/vegas.min.js',array('jQuery'),'3.4.1',true );
//   }
// }
// add_action( 'wp_enqueue_scripts', 'add_files' );


// CSS
function my_css_init() {
	wp_enqueue_style(
    'main',
    get_template_directory_uri().'/css/main.css',
    array(),
    '1.0.0',
    'all' );
}
add_action( 'wp_enqueue_scripts', 'my_css_init' );

function my_font_init() {
	wp_enqueue_style(
    'googleFont',
    'https://fonts.googleapis.com/css2?family=Alex+Brush&family=Kaisei+Opti:wght@400;500&display=swap',
  );
}
add_action( 'wp_enqueue_scripts', 'my_font_init' );

//--------------------------------------------------------
//記事に対するsetup
//--------------------------------------------------------
include('inc/article_set.php');

//--------------------------------------------------------
//wp_head余分な記述の削除
//--------------------------------------------------------
include('inc/wp-head.php');

//--------------------------------------------------------
//wp_default設定の削除
//--------------------------------------------------------
include('inc/disable.php');

//--------------------------------------------------------
//bread_crumb
//--------------------------------------------------------
include('inc/breadcrumb.php');

//--------------------------------------------------------
//画像までのパスの簡略化
// echo gat_theme_img('パス')で画像を呼び出す
//--------------------------------------------------------

function get_theme_img($img_name)
{
	$content = esc_url(get_template_directory_uri()) . '/images/' . $img_name;
	return $content;
}
