<?php get_header(); ?>

<main class="store">
  <div class="l-containerL">
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
    <div id="station" class="station">
      <?php
      $wp_query = new WP_Query($my_posts);
      if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post();
          $obj = get_post_type_object($post->post_type); //投稿タイプ情報を取得
      ?>
          <!-- ループさせるコンテンツをここにいれる -->
          <div class="c-boxBorder station__item">
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
                <?php include('inc/store-service.php');?>
              </div>
            </div>
            <button class="c-button01--icon--gold">
              <a href="<?php the_field('store-tel'); ?>">
              <img src="<?php echo get_theme_img('common/phone02.svg'); ?>" alt="">
              <?php the_field('store-tel'); ?>
              </a>
            </button>
            <button class="c-button01">
              <a href="<?php the_permalink(); ?>">
              店舗ページ
              <img src="<?php echo get_theme_img('common/arrow_right-small-white.svg'); ?>" alt="">
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

<section id="repair" class="l-section02 section02">
  <div class="l-containerM">
    <div class="c-title">
      <h2 class="c-title__l">
        板金工場
      </h2>
      <p class="c-title__l__sub">Repair</p>
    </div>
    <div class="c-carBankenz">
      <div class="c-carBankenz__inner">
        <div class="l-section--half">
          <img class="c-carBankenz__title" src="<?php echo get_theme_img('repair/repair_image02.jpg'); ?>" alt="
            熊本のあんしん鈑金塗装はカーバンケンズ">
          <address class="c-carBankenz__address">
            〒860-0824　熊本市南区十禅寺3-1-11
          </address>
          <p class="c-carBankenz__time">
            08：00～19：00（平日・祭日）日曜定休
          </p>
          <a class="c-carBankenz__tel" href="tel:096-319-5110">
            <img class="c-carBankenz__tel__image" src="<?php echo get_theme_img('common/phone02.svg'); ?>" alt="">
            096-319-5110
          </a>
        </div>
        <img class="c-image--radiusBorder--white l-section--half" src="<?php echo get_theme_img('repair/repair_image01.jpg'); ?>" alt="">
      </div>
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3354.500708157708!2d130.6978922!3d32.7789805!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3540f48cf766e915%3A0xa0a28ec78cbf326e!2z44CSODYwLTA4MjQg54aK5pys55yM54aK5pys5biC5Y2X5Yy65Y2B56aF5a-677yT5LiB55uu77yR4oiS77yR77yRIOOCqOODoOODreODvOODieOBrumIkemHkeW3peWgtOOCq-ODvOODkOODs-OCseODs-OCug!5e0!3m2!1sja!2sjp!4v1700553896558!5m2!1sja!2sjp" width="100%" height="278" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      <button class="c-button01--gold">
        <a href="repair">
          詳しくはこちら
          <img src="<?php echo get_theme_img('common/arrow_right-small-white.svg'); ?>" alt="">
        </a>
      </button>
    </div>
    </div>
  </div>
</section>

<section id="sale" class="l-section02--bg01 section03">
    <div class="l-containerM">
    <div class="c-title">
      <h2 class="c-title__l">
        中古車販売店
      </h2>
      <p class="c-title__l__sub">Sale</p>
    </div>
    <div class="c-carBankenz">
      <div class="c-carBankenz__inner">
        <div class="l-section--half">
          <h3 class="c-title__m">
            <img src="<?php echo get_theme_img('common/carLink.jpg'); ?>" alt="カーリンクのアイコン">カーリンク熊本南店
          </h3>
          <address class="c-carBankenz__address">
            熊本県熊本市南区近見6丁目12-100
          </address>
          <p class="c-carBankenz__time">
            08：00～19：00（平日・祭日）日曜定休
          </p>
          <a class="c-carBankenz__tel" href="tel:096-320-8233">
            <img class="c-carBankenz__tel__image" src="<?php echo get_theme_img('common/phone02.svg'); ?>" alt="">
            096-320-8233
          </a>
        </div>
        <img class="c-image--radiusBorder l-section--half" src="<?php echo get_theme_img('sale/sale_image04.jpg'); ?>" alt="">
      </div>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13742280.33729037!2d112.23359564999997!3d32.76443670000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3540f4c6a98840dd%3A0xd14d9c8cbadd4a7b!2z5qCq5byP5Lya56S-44Ko44Og44Ot44O844OJ44Kr44O844Oq44Oz44Kv54aK5pys5Y2X!5e0!3m2!1sja!2sjp!4v1701331774972!5m2!1sja!2sjp" width="100%" height="278" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

      <button class="c-button01--gold">
        <a href="sale">
          詳しくはこちら
          <img src="<?php echo get_theme_img('common/arrow_right-small-white.svg'); ?>" alt="">
        </a>
      </button>
    </div>
    </div>
  </div>
</section>
</main>
<section class="l-section02--bg04">
  <?php include('inc/service-section.php'); ?>
</section>
<?php get_footer(); ?>
