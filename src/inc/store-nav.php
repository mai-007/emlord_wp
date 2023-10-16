<ul class="c-service__tabs c-store-nav">
    <?php
      $stores = [
        [
          'name' => '小峰SS',
          'href' =>'#'
        ],
        [
          'name' =>'上南部SS',
          'href' =>'#'
        ],
        [
          'name' => '建軍SS',
          'href' => '#'
        ],
        [
          'name' => '光の森SS',
          'href' => '#'
        ],
        [
          'name' => '本渡SS',
          'href' => '#'
        ],
        [
          'name' => '菊南SS',
          'href' => '#'
        ],
        [
          'name' => '新町SS',
          'href' => '#'
        ],
        [
          'name' => '平田SS',
          'href' => '#'
        ],
        [
          'name' => '大矢野SS',
          'href' => '#'
        ],
        [
          'name' => 'DDエネオスセブンTATSUDA',
          'href' => '#'
        ],
        [
          'name' => '嘉島SS',
          'href' => '#'
        ],
        [
          'name' => '熊本インターSS',
          'href' => '#'
        ],
        [
          'name' => '本渡大田町SS',
          'href' => '#'
        ],
        [
          'name' => '松橋SS',
          'href' => '#'
        ],
        [
          'name' => '日赤通りSS',
          'href' => '#'
        ],
        [
          'name' => '松橋SS',
          'href' => '#'
        ],
        [
          'name' => '尾ノ上SS',
          'href' => '#'
        ],
      ];?>

<div>
  <div class="c-service__wrapper">
  <h3 class="c-title__m">サービスステーション一覧</h3>
    <?php foreach($stores as $store => $value):?>
    <div class="c-service__btn">
      <li class="l-footerList__title">
        <a href="<?php echo $value['href'];?>">
        <?php echo $value['name'];?>
        <img src="<?php echo get_theme_img('common/arrow_right-small-white.svg');?>" alt="">
        </a>
      </li>
    </div>
    <?php endforeach;?>
    </div>
  </div>
