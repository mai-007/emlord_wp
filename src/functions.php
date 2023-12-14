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
//top-page
function add_files() {
  if (is_home() || is_front_page()) {
    wp_enqueue_style('vegasCss', 'https://cdnjs.cloudflare.com/ajax/libs/vegas/2.4.4/vegas.min.css');
    wp_enqueue_style('splideCss', 'https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css');
    
    wp_enqueue_script('vegasJs', 'https://cdnjs.cloudflare.com/ajax/libs/vegas/2.5.4/vegas.min.js', array('jquery'), '3.4.1', true);
    wp_enqueue_script('splide', 'https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js', array('jquery'), '3.4.1', true);
  } elseif (is_page(29)) {
    wp_enqueue_style('modalVideoCss', 'https://unpkg.com/modal-video@2.4.8/css/modal-video.min.css');
    wp_enqueue_script('modalVideoJs', 'https://unpkg.com/modal-video@2.4.8/js/jquery-modal-video.min.js', array('jquery'), '3.4.1', true);
  }
}
add_action('wp_enqueue_scripts', 'add_files');



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
//投稿にサムネがない場合、特定の画像を表示
//--------------------------------------------------------
//include('inc/article_set.php');

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
//画像までのパスの簡略化
// echo gat_theme_img('パス')で画像を呼び出す
//--------------------------------------------------------

function get_theme_img($img_name)
{
  $content = esc_url(get_template_directory_uri()) . '/images/' . $img_name;
  return $content;
}

//--------------------------------------------------------
// 管理画面の投稿一覧をログイン中のユーザーの投稿のみに制限する(管理者以外)
//--------------------------------------------------------
function pre_get_author_posts( $query ) {
    // 管理画面 かつ 非管理者 かつ メインクエリ 
    // かつ authorパラメータがないかauthorパラメータが自分のIDの場合、
    // 投稿者を絞った状態を前提として表示を調整します。
    if ( is_admin() && !current_user_can('administrator') && $query->is_main_query()
            && ( !isset($_GET['author']) || $_GET['author'] == get_current_user_id() )) {
        // クエリの条件を追加
        $query->set( 'author', get_current_user_id() );
        // 値があると WP_Posts_List_Table#is_base_request() がfalseになり
        // 「すべて」のリンクが選択表示にならないため削除
        unset($_GET['author']);
    }
}
add_action( 'pre_get_posts', 'pre_get_author_posts' );

/**
 * ログイン中のユーザーが投稿した投稿数を取得します。
 * ※ wp_count_posts()をベースにして下記を行っています。
 * 1. フィルターの削除 (無限ループを防ぐ)
 * 2. キャッシュキーの変更 (変更が反映されない問題を防ぐ)
 * 3. SQLの変更
 */
function count_author_posts( $counts, $type = 'post', $perm = '' ) {
  // 管理画面側ではない場合、または管理画面側でも管理者の場合は投稿数を調整せず終了します。
  if ( !is_admin() || current_user_can('administrator') ) {
    return $counts;
  }

  global $wpdb;
  if ( ! post_type_exists( $type ) )
    return new stdClass;

  $cache_key = _count_posts_cache_key( $type, $perm ) . '_author'; // 2
  $counts = wp_cache_get( $cache_key, 'counts' );
  if ( false !== $counts ) {
    return $counts; // 1
  }

  // 3
  $query = "SELECT post_status, COUNT( * ) AS num_posts FROM {$wpdb->posts} WHERE post_type = %s";
  $query .= $wpdb->prepare( " AND ( post_author = %d )", get_current_user_id() );
  $query .= ' GROUP BY post_status';

  $results = (array) $wpdb->get_results( $wpdb->prepare( $query, $type ), ARRAY_A );
  $counts = array_fill_keys( get_post_stati(), 0 );
  foreach ( $results as $row ) {
    $counts[ $row['post_status'] ] = $row['num_posts'];
  }
  $counts = (object) $counts;
  wp_cache_set( $cache_key, $counts, 'counts' );
  return $counts; // 1
}
add_filter( 'wp_count_posts', 'count_author_posts', 10, 3 );



/*-------------------------------------------*/
/* メディアの抽出条件にログインユーザーの絞り込み条件を追加する
/*-------------------------------------------*/
if (! current_user_can('administrator') ) {

function display_only_self_uploaded_medias( $query ) {
    if ( $user = wp_get_current_user() ) {
        $query['author'] = $user->ID;
    }
    return $query;
}
add_action( 'ajax_query_attachments_args', 'display_only_self_uploaded_medias' );
}

//--------------------------------------------------------
//pager
//--------------------------------------------------------
include('inc/pager.php');


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
      <a itemscope itemtype="https://schema.org/WebPage" itemprop="item"
        itemid="<?php echo get_post_type_archive_link(get_post_type()); ?>"
        href="<?php echo get_post_type_archive_link(get_post_type()); ?>">
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
      <a itemscope itemtype="https://schema.org/WebPage" itemprop="item"
        itemid="<?php echo get_post_type_archive_link(get_post_type()); ?>"
        href="<?php echo get_post_type_archive_link(get_post_type()); ?>">
        <span itemprop="name"><?php echo esc_html(get_post_type_object(get_post_type())->label); ?></span>
      </a>
      <meta itemprop="position" content="2">
    </li>

    <li class="c-breadcrumb__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
      <a itemscope itemtype="https://schema.org/WebPage" itemprop="item"
        itemid="<?php echo get_year_link(get_query_var("year")); ?>?post_type=<?php echo esc_html(get_post_type_object(get_post_type())->name); ?>"
        href="<?php echo get_year_link(get_query_var("year")); ?>?post_type=<?php echo esc_html(get_post_type_object(get_post_type())->name); ?>">
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
      <a itemscope itemtype="https://schema.org/WebPage" itemprop="item"
        itemid="<?php echo get_post_type_archive_link(get_post_type()); ?>"
        href="<?php echo get_post_type_archive_link(get_post_type()); ?>">
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
      <a itemscope itemtype="https://schema.org/WebPage" itemprop="item"
        itemid="<?php echo get_post_type_archive_link(get_post_type()); ?>"
        href="<?php echo get_post_type_archive_link(get_post_type()); ?>">
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
