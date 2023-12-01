<?php
//--------------------------------------------------------
//single.phpでアイキャッチがなければ一番目の画像を取得
//--------------------------------------------------------
function catch_that_image() {
  if (get_post_type() === 'column'){
    global $post, $posts;
    $first_img = '';
    ob_start();
    ob_end_clean();
    $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
    $first_img = $matches [1] [0];

  
    if(has_post_thumbnail()) {
      $img_id = get_post_thumbnail_id();
      $img_url = wp_get_attachment_image_src($img_id, 'thumbnail', true);
      $first_img = $img_url[0];
      }
      if(empty($first_img)) {
      // アイキャッチ画像があればそちらを表示する
      if(has_post_thumbnail()) {
      $img_id = get_post_thumbnail_id();
      $img_url = wp_get_attachment_image_src($img_id, 'thumbnail', true);
      $first_img = $img_url[0];
      } else {
      // 記事内で画像がなかった時のための画像を指定（ディレクトリ先や画像名称は任意）
      $first_img = esc_url(get_template_directory_uri()) . "/images/common/noImage.png";
      }
    }
    return $first_img;
  }
}
;?>
