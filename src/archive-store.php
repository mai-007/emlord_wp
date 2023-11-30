<?php get_header(); ?>

<main>
  <div class="l-containerM">
    <div class="c-title">
      <h2 class="c-title__l">
        サービスステーション一覧
      </h2>
      <p class="c-title__l__sub">Service Station</p>
    </div>
        <!--LinkInPage -->
        <div class="c-linkInPage">
      <button class="c-linkInPage__btn">
        <a href="#station">
          サービスステーション
        </a>
      </button>
      <button class="c-linkInPage__btn">
        <a href="#repair">
          板金工場
        </a>
      </button>
      <button class="c-linkInPage__btn">
        <a href="#sale">
          販売・買取
        </a>
      </button>
    </div>

    <?php
    $my_posts = array(
      'post_type' => 'store', // 投稿タイプを設定
      'posts_per_page' => '25', // 表示する記事数を設定
    ); ?>
    <div id="station">
      <?php
      $wp_query = new WP_Query($my_posts);
      if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post();
          $obj = get_post_type_object($post->post_type); //投稿タイプ情報を取得
      ?>
          <!-- ループさせるコンテンツをここにいれる -->
          <div class="c-boxBorder">
            <div class="store__inner">
              <div class="store__summary">
                <h3 class="store__summary__title">
                <img src="<?php echo get_theme_img('store/gas.svg'); ?>" alt="">
                <?php the_field('store-name'); ?>
                </h3>
                <ul class="store__summary__list">
                  <li class="store__summary__list__item">
                    <span>所在地</span>
                    <address><?php the_field('store-address'); ?>
                    </address>
                  </li>
                  <li class="store__summary__list__item">
                    <span>営業時間</span>
                    <?php the_field('store-time'); ?>
                  </li>
                  <li class="store__summary__list__item">
                    <span>作業時間</span>
                    <?php the_field('store-ontime'); ?>
                  </li>
                </ul>
              </div>
              <div class="store__service">
              </div>
            </div>
            <button class="c-button01--gold">
              <a href="tel:090-368-6624">
                090-368-6624
              </a>
            </button>
            <button class="c-button01">
              <a href="<?php the_permalink(); ?>">
              店舗ページ
              </a>
            </button>
          </div>
        <?php endwhile; ?>
        </div>
  <?php endif; ?>
  <?php mr_the_archive_pager($wp_query); ?>
  <?php wp_reset_postdata(); ?>
  </div>
</section>
</main>

<?php get_footer(); ?>
