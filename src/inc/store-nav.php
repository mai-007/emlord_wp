<div class="c-dropMenu__wrap">
<h3 class="c-title__m c-dropMenu__title">サービスステーション一覧</h3>
<ul>
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
    <?php foreach($stores as $store => $value):?>
      <li class="l-footerList__title">
        <a href="<?php echo $value['href'];?>">
        <?php echo $value['name'];?>
        <img src="<?php echo get_theme_img('common/arrow_02.svg');?>" alt="">
        </a>
      </li>
    <?php endforeach;?>
    </ul>
  </div>
