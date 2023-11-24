  <?php
  $businessItem = [
    [
      'name' => '法人給油カード',
      'en' => 'EneosFC',
      'href' => 'https://www.eneos.co.jp/business/card/business.html',
      'image' => 'businessService/businessCard.svg'
    ],
    [
      'name' => '産業エネルギー',
      'en' => 'Energy',
      'href' => './energy',
      'image' => 'businessService/industrialEnergy.svg'
    ],
    [
      'name' => '太陽光関連事業',
      'en' => 'Sunlight',
      'href' => './solar',
      'image' => 'businessService/sunlight.svg'
    ],
  ]; ?>

  <?php foreach ($businessItem as $key => $value) : ?>
    <div class="c-service__btn">
      <a href="<?php echo $value['href']; ?>">
        <div class="c-service__btn__inner">
          <img class="c-service__btn__image" src="<?php echo get_theme_img($value['image']); ?>" alt="">
          <h3 class="c-service__btn__title">
            <?php echo $value['name']; ?>
          </h3>
          <p class="c-service__btn__subtitle">
            <?php echo $value['en']; ?>
          </p>
          <div class="c-circleArrow">
            <img class="c-circleArrow__image" src="<?php echo get_theme_img('common/arrow_right-small.svg'); ?>" alt="クリック">
          </div>
        </div>
      </a>
    </div>
  <?php endforeach; ?>
