<?php wp_footer(); ?>
<footer class="l-footer">
  <div class="l-footer__top">
    <img class="c-logo" src="<?php echo get_theme_img('common/logo.png'); ?>" alt="エムロードのロゴマーク">
    <div class="c-sns-nav--footer">
      <span>FOLLOW US</span>
      <?php include('inc/sns.php'); ?>
    </div>
  </div>
  <div class="l-footer__main l-flexRowToColumn">
    <div class="l-flexColumn l-footer__banner">
      <a href="coating">
        <img src="<?php echo get_theme_img('common/banner_coating-sp.png'); ?>" alt="" alt="">
      </a>
      <a href="#">
        <img src="<?php echo get_theme_img('common/banner_inspection-sp.png'); ?>" alt="" alt="">
      </a>
    </div>
    <div class="l-flexColumn l-footerList">
      <nav class="l-footerList__service">
        <ul class="l-footerList__service__block">
          <h6 class="l-footerList__title">
            愛車のメンテナンス
          </h6>
          <?php
          $footerService01 = [
            [
              'name' => '車検・法定点検',
              'href' => 'sale'
            ],
            [
              'name' => '洗車',
              'href' => 'carwash'
            ],
            [
              'name' => 'コーティング',
              'href' => 'coating'
            ],
            [
              'name' => 'エアコン',
              'href' => 'aircon'
            ],
            [
              'name' => 'ブレーキ',
              'href' => 'brake'
            ],
            [
              'name' => 'ラジエーター',
              'href' => 'radiator'
            ],
          ]; ?>
          <?php foreach ($footerService01 as $value) : ?>
          <li class="l-footerList__item">
            <a href="<?php echo $value['href']; ?>">
              <span><?php echo $value['name']; ?></span>
              <img src="<?php echo get_theme_img('common/arrow_right-small-white.svg'); ?>" alt="">
            </a>
          </li>
          <?php endforeach; ?>
        </ul>
        <ul class="l-footerList__service__block">
          <h6 class="l-footerList__title">
            修理・交換
          </h6>
          <?php
          $footerService02 = [
            [
              'name' => 'キズ・凹み修理',
              'href' => 'repair'
            ],
            [
              'name' => 'タイヤ交換',
              'href' => 'tire'
            ],
            [
              'name' => 'オイル交換',
              'href' => 'oil'
            ],
            [
              'name' => 'バッテリー交換',
              'href' => 'battery'
            ],
          ]; ?>
          <?php foreach ($footerService02 as $value) : ?>
          <li class="l-footerList__item">
            <a href="<?php echo $value['href']; ?>">
              <span><?php echo $value['name']; ?></span>
              <img src="<?php echo get_theme_img('common/arrow_right-small-white.svg'); ?>" alt="">
            </a>
          </li>
          <?php endforeach; ?>
        </ul>
        <ul class="l-footerList__service__block">
          <h6 class="l-footerList__title">
            車に乗る・保険
          </h6>
          <?php
          $footerService03 = [
            [
              'name' => '車買取・販売',
              'href' => 'sale'
            ],
            [
              'name' => 'レンタカー',
              'href' => 'rental'
            ],
            [
              'name' => '自動車保険',
              'href' => 'insurance'
            ],
            [
              'name' => 'カーリース',
              'href' => 'lease'
            ],
          ]; ?>
          <?php foreach ($footerService03 as $value) : ?>
          <li class="l-footerList__item">
            <a href="<?php echo $value['href']; ?>">
              <span><?php echo $value['name']; ?></span>
              <img src="<?php echo get_theme_img('common/arrow_right-small-white.svg'); ?>" alt="">
            </a>
          </li>
          <?php endforeach; ?>
        </ul>
      </nav>

      <nav class="l-footerList__sitemap">
        <ul>
          <?php
          $footerSitemap = [
            [
              'name' => '店舗一覧',
              'href' => '#'
            ],
            [
              'name' => '会社案内',
              'href' => 'company'
            ],
            [
              'name' => 'カーライフ豆知識',
              'href' => 'archive-column'
            ],
            [
              'name' => 'お得なメール会員',
              'href' => 'member'
            ],
            [
              'name' => '動画・CM一覧',
              'href' => 'movie'
            ],
            [
              'name' => '採用情報',
              'href' => '#'
            ],
            [
              'name' => 'お問い合わせ',
              'href' => '#'
            ],
          ]; ?>
          <?php foreach ($footerSitemap as $value) : ?>
          <li class="l-footerList__title">
            <a href="<?php echo $value['href']; ?>">
              <?php echo $value['name']; ?>
              <img src="<?php echo get_theme_img('common/arrow_right-small-white.svg'); ?>" alt="">
            </a>
          </li>
          <?php endforeach; ?>
        </ul>
      </nav>
    </div>
  </div>
</footer>
</body>
<script src="<?php echo get_template_directory_uri() . '/js/bundle.js'; ?>"></script>
<?php if (is_front_page() || is_home()) : ?>
<script>
document.addEventListener('DOMContentLoaded', function() {
  var splide = new Splide('.splide');
  splide.mount();
});
</script>
<?php endif; ?>
<?php if (is_page(29)) : ?>
<script>
jQuery(function() {
  if (jQuery(".js-modal-video").length) {
    jQuery(".js-modal-video").modalVideo({
      channel: "youtube",
      youtube: {
        controls: 1, // コントロール表示（0は非表示）
      },
    });
  }
});
</script>
<?php endif; ?>

</html>
