<ul class="c-service__tabs">
  <?php
      $tabNavigation = [
        '愛車のメンテナンス',
        '修理・交換',
        '車に乗る・保険',
      ];?>
  <?php foreach($tabNavigation as $index=>$value):?>
  <?php if($index == 0):?>
  <li class="c-service__tabs__item is-active" data-tab=<?php echo $index;?>>
    <?php echo $value;?>
    <?php else:?>
  <li class="c-service__tabs__item" data-tab=<?php echo $index;?>>
    <?php echo $value;?>
  </li>
  <?php endif;?>
  <?php endforeach;?>
</ul>

<div>
  <div class="c-service__wrap is-show" data-panel="0">
    <?php
      $tabItem01 = [
        [ 'name' => '車検・法定点検',
          'en' => 'inspection',
          'href' => 'inspection',
          'image' => 'service/car_inspection.svg'
        ],
        [ 'name' => '洗車',
        'en' => 'wash',
        'href' => 'carwash',
        'image' => 'service/car_wash.svg'
        ],
        [ 'name' => 'コーティング',
        'en' => 'coating',
        'href' => 'coating',
        'image' => 'service/coating.svg'
        ],
        [ 'name' => 'タイヤ交換',
          'en' => 'tire',
          'href' => 'tire',
          'image' => 'service/tire.svg'
        ],
        [ 'name' => 'オイル交換',
          'en' => 'oil',
          'href' => 'oil',
          'image' => 'service/oil.svg'
        ],
        [ 'name' => 'バッテリー交換',
          'en' => 'battery',
          'href' => 'battery',
          'image' => 'service/battery.svg'
        ],
      ];?>

    <?php foreach($tabItem01 as $key => $value):?>
    <div class="c-service__btn">
      <a href="<?php echo esc_url( home_url( $value['href'] ) ); ?>">
        <div class="c-service__btn__inner">
          <img class="c-service__btn__image" src="<?php echo get_theme_img($value['image']);?>" alt="">
          <h3 class="c-service__btn__title">
            <?php echo $value['name'];?>
          </h3>
          <p class="c-service__btn__subtitle">
            <?php echo $value['en'];?>
          </p>
          <div class="c-circleArrow">
            <img class="c-circleArrow__image" src="<?php echo get_theme_img('common/arrow_right-small.svg');?>"
              alt="クリック">
          </div>
        </div>
      </a>
    </div>
    <?php endforeach;?>
  </div>

  <div class="c-service__wrap" data-panel="1">
    <?php
      $tabItem02 = [
        [ 'name' => 'キズ・凹み修理',
          'en' => 'repair',
          'href' => 'repair',
          'image' => 'service/repair.svg'
        ],
        [ 'name' => 'ブレーキ関連',
        'en' => 'brake',
        'href' => 'brake',
        'image' => 'service/brake.svg'
        ],
        [ 'name' => 'エアコン',
        'en' => 'aircon',
        'href' => 'aircon',
        'image' => 'service/aircon.svg'
        ],
        [ 'name' => 'ラジエーター',
          'en' => 'radiator',
          'href' => 'radiator',
          'image' => 'service/radiator.svg'
        ],
      ];?>
    <?php foreach($tabItem02 as $key => $value):?>
    <div class="c-service__btn">
      <a href="<?php echo esc_url( home_url( $value['href'] ) ); ?>">
        <div class="c-service__btn__inner">
          <img class="c-service__btn__image" src="<?php echo get_theme_img($value['image']);?>" alt="">
          <h3 class="c-service__btn__title">
            <?php echo $value['name'];?>
          </h3>
          <p class="c-service__btn__subtitle">
            <?php echo $value['en'];?>
          </p>
          <div class="c-circleArrow">
            <img class="c-circleArrow__image" src="<?php echo get_theme_img('common/arrow_right-small.svg');?>"
              alt="クリック">
          </div>
        </div>
      </a>
    </div>
    <?php endforeach;?>
  </div>

  <div class="c-service__wrap" data-panel="2">
    <?php
      $tabItem03 = [
        [ 'name' => '車買取・販売',
          'en' => 'sales',
          'href' => 'sale',
          'image' => 'service/purchaseAndSales.svg'
        ],
        [ 'name' => 'レンタカー',
        'en' => 'rental',
        'href' => 'rental',
        'image' => 'service/rental.svg'
        ],
        [ 'name' => '自動車保険',
        'en' => 'insurance',
        'href' => 'insurance',
        'image' => 'service/insurance.svg'
        ],
        [ 'name' => 'カーリース',
          'en' => 'lease',
          'href' => 'lease',
          'image' => 'service/carLease.svg'
        ],
      ];?>
    <?php foreach($tabItem03 as $key => $value):?>
    <div class="c-service__btn">
      <a href="<?php echo esc_url( home_url( $value['href'] ) ); ?>">
        <div class="c-service__btn__inner">
          <img class="c-service__btn__image" src="<?php echo get_theme_img($value['image']);?>" alt="">
          <h3 class="c-service__btn__title">
            <?php echo $value['name'];?>
          </h3>
          <p class="c-service__btn__subtitle">
            <?php echo $value['en'];?>
          </p>
          <div class="c-circleArrow">
            <img class="c-circleArrow__image" src="<?php echo get_theme_img('common/arrow_right-small.svg');?>"
              alt="クリック">
          </div>
        </div>
      </a>
    </div>
    <?php endforeach;?>
  </div>
