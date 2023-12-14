<div id="slider2" class="c-information splide splide01">
  <div class="splide__track">
    <div class="splide__list">
      <?php
    $my_posts = array(
    'post_type' => 'post', // 投稿タイプを設定
    'posts_per_page' => '4', // 表示する記事数を設定
  ); 
    $the_query = new WP_query($my_posts);
    if ($the_query->have_posts()):
?>
      <?php while($the_query->have_posts()): $the_query->the_post(); 
  ?>

      <div class="c-information__item splide__slide">
        <a href="<?php the_permalink(); ?>">
          <time class="c-information__item__date"
            datetime="<?php echo get_the_date(); ?>"><?php echo get_the_date(); ?></time>
          <span class="c-storeTag">
            <?php the_author(); ?>
          </span>
          <h6 class="c-information__item__title">
            <?php
      if(mb_strlen($post->post_title)>20) {
        $title= mb_substr($post->post_title,0,20) ;
        echo $title . '...';
        } else {
        echo $post->post_title;
      }
    ?>
          </h6>
        </a>
      </div>

      <?php endwhile;?>
      <?php endif; ?>
      <?php wp_reset_postdata(); ?>
    </div>
  </div>
  <div class="splide__arrows c-information__controller">
    <button class="splide__arrow splide__arrow--prev button prev"></button>
    <button class="splide__arrow splide__arrow--next button next"></button>
  </div>
</div>
