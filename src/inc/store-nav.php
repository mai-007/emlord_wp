<div class="c-dropMenu__wrap">
  <h3 class="c-title__m c-dropMenu__title">
    <a class="u-underline" href="<?php echo esc_url(home_url('/store')); ?>">
    サービスステーション一覧
    </a>
  </h3>
  <ul>
    <?php include('stores.php'); ?>
    <?php foreach ($stores as $store => $value) : ?>
      <li class="l-footerList__title">
        <a href="<?php echo $value['href']; ?>">
          <?php echo $value['name']; ?>
          <img src="<?php echo get_theme_img('common/arrow_02.svg'); ?>" alt="">
        </a>
      </li>
    <?php endforeach; ?>
  </ul>
</div>
