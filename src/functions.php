<?php

// ========================================
//  WP Setting
// ========================================
if (!function_exists('my_theme_setup')) :
  function theme_setup()
  {
    add_theme_support('automatic-feed-links');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
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
    add_theme_support('customize-selective-refresh-widgets');
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
add_action('after_setup_theme', 'theme_setup');

// titleタグの区切り
function rewrite_separator($separator)
{
  $separator = '|';
  return $separator;
}
add_filter('document_title_separator', 'rewrite_separator');

//--------------------------------------------------------
//widget有効
//--------------------------------------------------------
function my_theme_widgets_init()
{
  register_sidebar(array(
    'name' => 'Main Sidebar',
    'id' => 'main-sidebar',
  ));
}
add_action('widgets_init', 'my_theme_widgets_init');

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
function my_css_init()
{
  wp_enqueue_style(
    'main',
    get_template_directory_uri() . '/css/main.css',
    array(),
    '1.0.0',
    'all'
  );
}
add_action('wp_enqueue_scripts', 'my_css_init');


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
// 固定ページbodyにclassを付与
// .p-[slug]の形で出力
//--------------------------------------------------------
function my_body_class($classes)
{
  if (is_page()) {
    $page = get_post();
    $classes[] = 'p-' . $page->post_name; // 新しいクラスを追加
  }
  return $classes; // 修正: $classes 配列をそのまま返す
}
add_filter('body_class', 'my_body_class');


//--------------------------------------------------------
// カスタム投稿タイプの追加
//--------------------------------------------------------
add_action('init', 'create_post_type');
function create_post_type()
{
  register_post_type(
    'column', // 投稿タイプ名の定義
    array(
      'labels' => array(
        'name' => __('カーライフ豆知識'), // 表示する投稿タイプ名
        'singular_name' => __('カーライフ豆知識')
      ),
      'public' => true,
      'menu_position' => 5,
      'show_in_rest' => true, //Gutenbergを利用する
      'hierarchical' => true
    )
  );
}

//--------------------------------------------------------
//画像までのパスの簡略化
// echo gat_theme_img('パス')で画像を呼び出す
//--------------------------------------------------------

function get_theme_img($img_name)
{
  $content = esc_url(get_template_directory_uri()) . '/images/' . $img_name;
  return $content;
}

//--------------------------------------------------------
//bread_crumb
//--------------------------------------------------------

function breadcrumb()
{
?>
  <div class="c-breadcrumb">
    <ul class="c-breadcrumb__list" itemscope itemtype="https://schema.org/BreadcrumbList">
      <li class="c-breadcrumb__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
        <a itemprop="item" href="<?php echo esc_url(home_url()); ?>">
          <span itemprop="name">
            <img class="c-breadcrumb__list__home" src="<?php echo get_theme_img('common/home.svg'); ?>" alt="">
          </span>
        </a>
        <meta itemprop="position" content="1">
      </li>

      <!-- 固定ページの場合 -->
      <?php if (is_page()) : ?>
        <li class="c-breadcrumb__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
          <span itemprop="name"><?php echo get_the_title(); ?></span>
          <meta itemprop="position" content="2">
        </li>

        <!-- 年別アーカイブページの場合 -->
      <?php elseif (is_year()) : ?>
        <li class="c-breadcrumb__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
          <a itemscope itemtype="https://schema.org/WebPage" itemprop="item" itemid="<?php echo get_post_type_archive_link(get_post_type()); ?>" href="<?php echo get_post_type_archive_link(get_post_type()); ?>">
            <span itemprop="name"><?php echo esc_html(get_post_type_object(get_post_type())->label); ?></span>
          </a>
          <meta itemprop="position" content="2">
        </li>

        <li class="c-breadcrumb__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
          <span itemprop="name"><?php echo get_query_var('year'); ?>年</span>
          <meta itemprop="position" content="3">
        </li>

        <!-- 月別アーカイブページの場合 -->
      <?php elseif (is_month()) : ?>
        <li class="c-breadcrumb__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
          <a itemscope itemtype="https://schema.org/WebPage" itemprop="item" itemid="<?php echo get_post_type_archive_link(get_post_type()); ?>" href="<?php echo get_post_type_archive_link(get_post_type()); ?>">
            <span itemprop="name"><?php echo esc_html(get_post_type_object(get_post_type())->label); ?></span>
          </a>
          <meta itemprop="position" content="2">
        </li>

        <li class="c-breadcrumb__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
          <a itemscope itemtype="https://schema.org/WebPage" itemprop="item" itemid="<?php echo get_year_link(get_query_var("year")); ?>?post_type=<?php echo esc_html(get_post_type_object(get_post_type())->name); ?>" href="<?php echo get_year_link(get_query_var("year")); ?>?post_type=<?php echo esc_html(get_post_type_object(get_post_type())->name); ?>">
            <span itemprop="name"><?php echo get_query_var('year'); ?>年</span>
          </a>
          <meta itemprop="position" content="3">
        </li>

        <li class="c-breadcrumb__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
          <span itemprop="name"><?php echo get_query_var('monthnum'); ?>月</span>
          <meta itemprop="position" content="4">
        </li>

        <!-- タクソノミーのアーカイブページの場合 -->
      <?php elseif (is_tax()) : ?>
        <li class="c-breadcrumb__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
          <a itemscope itemtype="https://schema.org/WebPage" itemprop="item" itemid="<?php echo get_post_type_archive_link(get_post_type()); ?>" href="<?php echo get_post_type_archive_link(get_post_type()); ?>">
            <span itemprop="name"><?php echo esc_html(get_post_type_object(get_post_type())->label); ?></span>
          </a>
          <meta itemprop="position" content="2">
        </li>

        <li class="c-breadcrumb__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
          <span itemprop="name"><?php single_term_title(); ?></span>
          <meta itemprop="position" content="3">
        </li>

        <!-- カスタム投稿のアーカイブページの場合 -->
      <?php elseif (is_post_type_archive()) : ?>
        <li class="c-breadcrumb__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
          <span itemprop="name"><?php post_type_archive_title(); ?></span>
          <meta itemprop="position" content="2">
        </li>

        <!-- 記事ページの場合 -->
      <?php elseif (is_single()) : ?>
        <li class="c-breadcrumb__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
          <a itemscope itemtype="https://schema.org/WebPage" itemprop="item" itemid="<?php echo get_post_type_archive_link(get_post_type()); ?>" href="<?php echo get_post_type_archive_link(get_post_type()); ?>">
            <span itemprop="name"><?php echo esc_html(get_post_type_object(get_post_type())->label); ?></span>
          </a>
          <meta itemprop="position" content="2">
        </li>

        <li class="c-breadcrumb__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
          <span itemprop="name"><?php single_post_title(); ?></span>
          <meta itemprop="position" content="3">
        </li>

        <!--  404エラーページの場合 -->
      <?php elseif (is_404()) : ?>
        <li class="c-breadcrumb__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
          <span itemprop="name">404</span>
          <meta itemprop="position" content="2">
        </li>

      <?php endif; ?>
    </ul>
  </div>
<?php
}
