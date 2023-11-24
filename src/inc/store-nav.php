<div class="c-dropMenu__wrap">
  <h3 class="c-title__m c-dropMenu__title">サービスステーション一覧</h3>
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
