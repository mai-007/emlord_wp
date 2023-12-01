<?php get_header(); ?>

<main>
  <div class="l-containerM">
    <?php
    $my_posts = array(
      'post_type' => 'column', // 投稿タイプを設定
      'posts_per_page' => '10', // 表示する記事数を設定
    ); ?>
    <p class="archive__pageCount">
      <?php echo $wp_query->found_posts; ?>
      件中&nbsp;
      <?php echo $wp_query->post_count; ?>件を表示しています。
    </p>
    <ul class="archive__list">
      <?php
    $wp_query = new WP_Query($my_posts);
    if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post();
        $obj = get_post_type_object($post->post_type); //投稿タイプ情報を取得
    ?>
      <!-- ループさせるコンテンツをここにいれる -->
      <li class="archive__item">
        <a href="<?php the_permalink(); ?>">
          <time class="archive__item__time">
            <?php the_time('Y-m-d'); ?>
          </time>
          <h4 class="archive__item__title">
            <?php the_title(); ?>
          </h4>
          <img class="archive__item__icon" src="<?php echo get_theme_img('common/arrow_right.svg'); ?>" alt="">
        </a>
      </li>
      <?php endwhile; ?>
    </ul>
    <?php endif; ?>
    <?php mr_the_archive_pager($wp_query); ?>
    <?php wp_reset_postdata(); ?>
  </div>
</main>

<?php get_footer(); ?>
