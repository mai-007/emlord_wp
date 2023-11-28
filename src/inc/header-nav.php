<h1 class="c-logo">
  <a href="<?php echo esc_url(home_url('/')); ?>">
    <img src="<?php echo get_theme_img('common/logo.png'); ?>" alt="エムロードのロゴマーク">
  </a>
</h1>
<nav id="nav" class="l-nav">
  <button id="js-hamburger" class="c-hamburger u-sp">
    <div id="js-hamburger-wrap" class="c-hamburger__wrap">
      <span class="c-hamburger__bar js-hamburger__bar"></span>
      <span class="c-hamburger__bar js-hamburger__bar"></span>
      <span class="c-hamburger__bar js-hamburger__bar"></span>
    </div><!-- /.hamburger__wrap -->
  </button>
  <ul id="js-nav" class="c-nav">
    <?php
    $navlist = [
      ['name' => 'サービス一覧', 'href' => '#', 'image' => 'common/icon_service.svg'],
      ['name' => '店舗一覧', 'href' => '#', 'image' => 'common/icon_store.svg'],
      ['name' => 'カーライフ豆知識', 'href' => 'column', 'image' => 'common/icon_car.svg'],
      ['name' => '会社案内', 'href' => 'company', 'image' => 'common/icon_company.svg'],
      ['name' => '採用情報', 'href' => 'https://www.emlord.co.jp/recruit/', 'image' => 'common/icon_person.svg'],
      ['name' => '法人向けサービス', 'href' => '#', 'image' => 'common/icon_handshake.svg'],
    ];
    foreach ($navlist as $key => $value) {
      $is_external = false;
      // 外部リンクかどうかを判定
      if (filter_var($value['href'], FILTER_VALIDATE_URL)) {
        $is_external = true;
      }

    ?>
      <li class="c-nav__li" data-tab="<?php echo $key; ?>">
        <a class="c-nav__item" href="<?php echo esc_url($is_external ? $value['href'] : home_url($value['href'])); ?>" <?php if ($is_external) { ?>target="_blank" rel="noopener noreferrer" <?php } ?>>
          <span class="c-nav__item__image">
            <img src="<?php echo get_theme_img($value['image']); ?>" alt="">
          </span>
          <span class="c-nav__item__text"><?php echo $value['name']; ?></span>
        </a>
        <?php if (!$is_external) { ?>
          <div class="c-dropMenu" data-panel="<?php echo $key; ?>">
            <?php if ($key == 1) : ?>
              <div class="c-dropMenu__wrap">
                <?php include('store-nav.php'); ?>
              </div>
            <?php elseif ($key == 5) : ?>
              <div class="c-dropMenu__wrap">
                <?php include('business.php'); ?>
              </div>
            <?php else : ?>
              <?php include('service-menu.php'); ?>
            <?php endif; ?>
          </div>
        <?php } ?>
      </li>
    <?php } ?>
  </ul>
</nav>
<div class="c-mailMember">
  <span class="c-hightLight-01">
    \ スマホへ割引きクーポンをお届け /
  </span>
  <a class="c-mailMember__btn" href="<?php echo esc_url(home_url('member')); ?>">
    <img src="<?php echo get_theme_img('common/icon_mail-white.svg'); ?>" alt="">
    メール会員登録
  </a>
</div>
