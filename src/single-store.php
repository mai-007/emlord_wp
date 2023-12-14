<?php get_header(); ?>

<main>
  <?php while (have_posts()) : the_post(); ?>
  <section id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="l-containerM">
      <div class="c-boxBorder">
        <div class="store__inner">
          <div class="store__summary">
            <h2 class="store__summary__title">
              <img src="<?php echo get_theme_img('store/gas.svg'); ?>" alt=""><?php the_field('store-name'); ?>
            </h2>
            <ul class="store__summary__list">
              <li class="store__summary__list__item">
                <span>所在地</span>
                <address><?php the_field('store-address'); ?></address>
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
            <?php include('inc/store-service.php'); ?>
          </div>
          <!-- store__service -->
        </div>
        <button class="c-button01--icon--gold">
          <a href="tel:<?php the_field('store-tel'); ?>">
            <img src="<?php echo get_theme_img('common/phone02.svg'); ?>" alt="">
            <?php the_field('store-tel'); ?>
          </a>
        </button>
      </div>
      <button class="c-button01">
        <a href="/store/">
          店舗一覧はこちら
          <img src="<?php echo get_theme_img('common/arrow_right-small-white.svg'); ?>" alt="">
        </a>
      </button>
    </div>
  </section>
  <?php endwhile; ?>

  <!-- オーナー名とスラッグは一致させているので、スラッグを読み取り表示 -->
  <?php
  // 現在のページのスラッグを取得
  $page_slug = get_post_field('post_name', get_post());

  // 特定の投稿者のIDを取得（スラッグがページのスラッグと一致するもの）
  $author = get_user_by('slug', $page_slug);

  if ($author) {
    $author_id = $author->ID;

    // 特定の投稿者の記事を5件まで取得
    $args = array(
      'author'      => $author_id,
      'posts_per_page' => 5,
    );

    $query = new WP_Query($args);

    if ($query->have_posts()) :
  ?>
  <section class="archive l-section02--bg04">
    <div class="l-containerM">
      <div class="c-title">
        <h2 class="c-title__l">店舗からのお知らせ</h2>
        <p class="c-title__l__sub">Store Notice</p>
      </div>
      <ul class="archive__list">
        <?php while ($query->have_posts()) : $query->the_post(); ?>
        <li class="archive__item">
          <a href="<?php the_permalink(); ?>">
            <time class="archive__item__time"><?php the_time('Y-m-d'); ?></time>
            <h4 class="archive__item__title"><?php the_title(); ?></h4>
            <img class="archive__item__icon" src="<?php echo get_theme_img('common/arrow_right.svg'); ?>" alt="">
          </a>
        </li>
        <?php endwhile; ?>
      </ul>
    </div>
  </section>
  <?php
      wp_reset_postdata();
    endif;
  }
  ?>
</main>

<?php get_footer(); ?>
