<?php get_header(); ?>

<main>
  <?php while (have_posts()) : the_post(); ?>
    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
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
              <?php include('inc/store-service.php');?>
                </div>
                <!-- store__service -->
                </div>
                <button class="c-button01--icon--gold">
                  <a href="tel:<?php the_field('store-tel');?>">
                  <img src="<?php echo get_theme_img('common/phone02.svg'); ?>" alt="">
                  <?php the_field('store-tel');?>
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
        </div>
        <?php endwhile; ?>
</main>

<?php
get_sidebar();
get_footer();
