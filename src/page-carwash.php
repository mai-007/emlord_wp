<?php
/*
Template Name: 洗車
*/
?>
<?php get_header(); ?>
<section class="l-section03--bg01 section01">
  <div class="l-containerL">
    <div class="c-title">
      <h2 class="c-title__l">熊本県の洗車は当店にお任せください</h2>
      <p class="c-title__l__sub">Car Wash</p>
    </div>

    <picture class="section01__image">
      <source
        media="(max-width: 799px)"
        srcset="<?php echo get_theme_img('carWash/main.jpg');?> "
        sizes="100%"
      >
      <source
        media="(min-width: 800px)"
        srcset="<?php echo get_theme_img('carWash/main.jpg');?> w849",
        sizes="849px"
      >
      <img src="<?php echo get_theme_img('carWash/main.jpg');?>" alt="">
    </picture>
  </div>
</section>

<!--course-->
<section id="course" class="l-section02 section02">
  <div class="c-title">
    <h3 class="c-title__l">
      多彩な洗車コース
    </h3>
    <p class="c-title__l__sub">
      course
    </p>
  </div>

  <?php
  $washTypes = [
      [
        "title" => "スタッフ仕上げ洗車",
        "time" => ["40"],
        "score" => [2],
        "text" => ["説明が入ります。説明が入ります。説明が入ります。説明が入ります。説明が入ります。説明が入ります。説明が入ります。説明が入ります。説明が入ります。"],
        "store" => ["〇〇", "〇〇", "〇〇"],
        "images"=>[
          "image01" => ["carWash/course01_01.jpg", "この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、"],
          "image02" => ["carWash/course01_02.jpg", "この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、"],
          "image03" => ["carWash/course01_03.jpg", "この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、"],
        ],
        "course" => [
          "シャンプー" => "22文字までの説明が入ります。22文字までの説",
          "FK-2" => "22文字までの説明が入ります。22文字までの説",
          "スペシャル(プリズム)" => "22文字までの説明が入ります。22文字までの説",
          "プレミアム(ガラス系溶剤)" => "22文字までの説明が入ります。22文字までの説",
        ],
        "type" => [
          "SS" => "ムーブ/ワゴンR",
          "S" => "N-BOX/スペーシア",
          "M" => "プリウス/ノート",
          "L" => "レクサス/クラウン",
          "LL" => "ヴェルファイア",
          "XL" => "ラウンドクルーザー",
        ],
        "price" => [
          ["¥1,000", "¥1,000", "¥1,260", "¥1,260", "¥1,650", "¥1,500"],
          ["¥1,540", "¥1,540", "¥1,780", "¥1,780", "¥2,160", "¥2,490"],
          ["¥2,790", "¥2,790", "¥3,000", "¥3,000", "¥3,430", "¥3,760"],
          ["¥3,430", "¥3,430", "¥3,670", "¥3,670", "¥4,070", "¥4,400"],
        ],
      ],
      [
        "title" => "ドライブスルーセルフ洗車",
        "time" => ["20"],
        "score" => [3],
        "text" => ["説明が入ります。説明が入ります。説明が入ります。説明が入ります。説明が入ります。説明が入ります。説明が入ります。説明が入ります。説明が入ります。"],
        "store" => ["〇〇", "〇〇", "〇〇"],
        "images"=>[
          "image01" => ["carWash/course02_01.jpg", "この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、"],
          "image02" => ["carWash/course02_02.jpg", "この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、"],
          "image03" => ["carWash/course02_03.jpg", "この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、"],
        ],
        "type" => [
          "シャンプー" => "説明が入ります",
          "ジェットコーティング" => "説明が入ります",
          "泡ジェットコーティング" => "説明が入ります",
          "スペシャル" => "説明が入ります",
          "プレミアム" => "説明が入ります",
          "スーパーガラスプレミアム" => "説明が入ります",
        ],
        "price" => [
          "¥1,000",
          "¥1,000",
          "¥1,260",
          "¥1,260",
          "¥1,650",
          "¥1,500"
        ],
      ],
        [
            "title" => "プロの手洗い洗車",
            "time" => ["120"],
            "score" => [4],
            "text" => ["説明が入ります。説明が入ります。説明が入ります。説明が入ります。説明が入ります。説明が入ります。説明が入ります。説明が入ります。説明が入ります。"],
            "store" => ["〇〇", "〇〇", "〇〇"],
            "images"=>[
              "image01" => ["carWash/course03_01.jpg", "この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、"],
              "image02" => ["carWash/course03_02.jpg", "この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、"],
              "image03" => ["carWash/course03_03.jpg", "この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、"],
            ],
            "course" => [
              "泡洗車" => "22文字までの説明が入ります。22文字までの説",
              "撥水洗車" => "22文字までの説明が入ります。22文字までの説",
              "超撥水洗車" => "22文字までの説明が入ります。22文字までの説",
            ],
            "type" => [
              "SS" => "ムーブ/ワゴンR",
              "S" => "N-BOX/スペーシア",
              "M" => "プリウス/ノート",
              "L" => "レクサス/クラウン",
              "LL" => "ヴェルファイア",
              "XL" => "ラウンドクルーザー",
            ],
            "price" => [
              ["¥2,500", "¥2,680", "¥2,980", "¥3,280", "¥3,740", "¥4,560"],
              ["¥3,100", "¥3,270", "¥3,670", "¥3,980", "¥4,560", "¥5,470"],
              ["¥3,660", "¥3,870", "¥4,330", "¥4,740", "¥5,390", "¥6,460"],
            ],
          ],
  ];
  ?>
  <?php foreach ($washTypes as $washType): ?>
  <div class="c-boxBorder l-containerL">
    <dl class="c-boxBorder__header">
      <dt class="c-boxBorder__header__title">
        ◼️<?php echo $washType['title']; ?>
      </dt>
      <dd class="c-boxBorder__header__text">
        <?php echo $washType['text'][0]; ?>
      </dd>
      <dd class="c-boxBorder__header__recommend">
        キレイ度<?php foreach ($washType['score'] as $star): ?>
          <img src="<?php echo get_theme_img('carWash/star.svg'); ?>" alt="">
        <?php endforeach; ?>
      </dd>
    </dl>
    <div class="l-flexRowToColumn">
  <?php foreach ($washType['images'] as $key => $image): ?>
    <img src="<?php echo get_theme_img($image[0]); ?>" alt="">
    <p><?php echo $image[1]; ?></p>
  <?php endforeach; ?>
</div>

    <table class="c-table">
      <tbody>
        <tr>
          <?php foreach ($washType['type'] as $key => $type): ?>
            <th class="c-table__type">
              <span class="c-table__type__top">
                <?php echo $key; ?>
              </span>
              <?php echo $type; ?>
            </th>
          <?php endforeach; ?>
        </tr>
        <?php if(!empty($washType['course'])):?>
          <tr>
            <th class="c-table__des--short">
              シャンプー
              <span>22文字までの説明が入ります。22文字までの説</span>
            </th>
            <?php foreach (($washType['price'][0]) as $fee): ?>
              <td class="c-table__price">
                <?php echo $fee; ?>
              </td>
              <?php endforeach;?>
            </tr>
          <?php endif;?>
        <?php if(!empty($washType['course'])):?>
          <tr>
            <th class="c-table__des--short">
              FK-2
              <span>22文字までの説明が入ります。22文字までの説</span>
            </th>
            <?php foreach (($washType['price'][1]) as $fee): ?>
            <td class="c-table__price">
              <?php echo $fee; ?>
            </td>
            <?php endforeach;?>
            </tr>
          <?php endif;?>
        <?php if(!empty($washType['course'])):?>
        <tr>
          <th class="c-table__des--short">
            スペシャル(プリズム)
            <span>22文字までの説明が入ります。22文字までの説</span>
          </th>
          <?php foreach (($washType['price'][2]) as $fee): ?>
            <td class="c-table__price">
              <?php echo $fee; ?>
            </td>
          <?php endforeach; ?>
          </tr>
        <?php endif;?>
        <?php if(!empty($washType['course'])):?>
          <?php if(!empty($washType['price'][3])):?>
          <tr>
            <th class="c-table__des--short u-bgGold">
            プレミアム(ガラス系溶剤)
              <span>22文字までの説明が入ります。22文字までの説</span>
            </th>
              <?php foreach (($washType['price'][3]) as $fee): ?>
              <td class="c-table__price u-bgOrange30">
                <?php echo $fee; ?>
              </td>
            <?php endforeach; ?>
          </tr>
        <?php endif;?>
        <?php endif;?>
        <?php if(empty($washType['course'])):?>
          <?php foreach (($washType['price']) as $fee): ?>
              <td class="c-table__price">
                <?php echo $fee; ?>
              </td>
            <?php endforeach; ?>
        <?php endif;?>
      </tbody>
    </table>
  </div>
<?php endforeach; ?>
</section>

<?php include('inc/askedQuestions.php');?>
<section class="l-section02--bg02">
  <?php include('inc/service-section.php');?>
</section>
<?php get_footer(); ?>
