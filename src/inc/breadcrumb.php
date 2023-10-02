<?php
//--------------------------------------------------------
//bread_crumb
//--------------------------------------------------------

function mytheme_breadcrumb() {
//HOME>と表示
$sep = '>';
echo '<li><a href="'.get_bloginfo('url').'">HOME</a></li>';
echo $sep;

//投稿記事ページとカテゴリーページでの、カテゴリーの階層を表示
$cats = '';
$cat_id = '';
if ( is_single() ) {
$cats = get_the_category();
if( isset($cats[0]->term_id) ) $cat_id = $cats[0]->term_id;
}
else if ( is_category() ) {
$cats = get_queried_object();
$cat_id = $cats->parent;
}
$cat_list = array();
while ($cat_id != 0){
$cat = get_category( $cat_id );
$cat_link = get_category_link( $cat_id );
array_unshift( $cat_list, '<a href="'.$cat_link.'">'.$cat->name.'</a>' );
$cat_id = $cat->parent;
}
foreach($cat_list as $value){
echo '<li>'.$value.'</li>';
echo $sep;
}

//現在のページ名を表示
if ( is_singular() ) {
if ( is_attachment() ) {
previous_post_link( '<li>%link</li>' );
echo $sep;
}
the_title( '<li>', '</li>' );
}
else if( is_archive() ) the_archive_title( '<li>', '</li>' );
else if( is_search() ) echo '<li>検索 : '.get_search_query().'</li>';
else if( is_404() ) echo '<li>ページが見つかりません</li>';
}
;?>