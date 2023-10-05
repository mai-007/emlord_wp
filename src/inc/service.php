<div class="l-section03 c-service">
  <ul class="c-service__tabs">
    <?php
      $tabNavigation = [
        '愛車のメンテナンス',
        '修理・交換',
        '車に乗る・保険'
      ];?>
      <?php foreach($tabNavigation as $value):?>
    <li class="c-service__tabs__item active">
      <?php echo $value;?>
    </li>
    <?php endforeach;?>
  </ul>
  <div class="c-service__wrapper">
  <?php
      $tabItem = [
        [ 'name' => '車検・法定点検',
          'en' => 'inspection',
          'href' => '#',
          'image' => 'service/car_inspection.svg'
        ],
        [ 'name' => '洗車',
        'en' => 'wash',
        'href' => '#',
        'image' => 'service/car_wash.svg'
        ],
        [ 'name' => 'コーティング',
        'en' => 'coating',
        'href' => '#',
        'image' => 'service/coating.svg'
        ],
        [ 'name' => 'タイヤ交換',
          'en' => 'tire',
          'href' => '#',
          'image' => 'service/tire.svg'
        ],
        [ 'name' => 'オイル交換',
          'en' => 'oil',
          'href' => '#',
          'image' => 'service/oil.svg'
        ],
        [ 'name' => 'バッテリー交換',
          'en' => 'battery',
          'href' => '#',
          'image' => 'service/battery.svg'
        ],
      ];?>
    <?php foreach($tabItem as $key => $value):?>
    <div class="c-service__btn">
      <a href="<?php echo $value['href'];?>">
        <div class="c-service__btn__inner">
          <img class="c-service__btn__image"
            src="<?php echo get_theme_img($value['image']);?>" alt="">
          <h3 class="c-service__btn__title">
          <?php echo $value['name'];?>
          </h3>
          <p class="c-service__btn__subtitle">
          <?php echo $value['en'];?>
          </p>
          <div class="c-circleArrow">
            <img class="c-circleArrow__image" src="<?php echo get_theme_img('common/arrow_right-small.svg');?>" alt="クリック">
          </div>
        </div>
      </a>
    </div>
    <?php endforeach;?>
  </div>
</div>
