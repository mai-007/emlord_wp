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
      <source media="(max-width: 799px)" srcset="<?php echo get_theme_img('carWash/main.jpg'); ?> " sizes="100%">
      <source media="(min-width: 800px)" srcset="<?php echo get_theme_img('carWash/main.jpg'); ?> w849" , sizes="849px">
      <img src="<?php echo get_theme_img('carWash/main.jpg'); ?>" alt="">
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
      "time" => "40分",
      "score" => [2],
      "text" => ["説明が入ります。説明が入ります。説明が入ります。説明が入ります。説明が入ります。説明が入ります。説明が入ります。説明が入ります。説明が入ります。"],
      "recommend" => "キレイ度",
      "store" => ["〇〇", "〇〇", "〇〇"],
      "images" => [
        "image01" => [
          "carWash/course01_01.jpg",
          "この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、"
        ],
        "image02" => [
          "carWash/course01_02.jpg",
          "この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、"
        ],
        "image03" => [
          "carWash/course01_03.jpg",
          "この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、"
        ],
      ],
      "course" => [
        [
          "name" => "シャンプー",
          "text" => "22文字までの説明が入ります。22文字までの説",
          "prices" => [
            "1,000",
            "1,000",
            "1,260",
            "1,260",
            "1,650",
            "1,500"
          ],
        ],
        [
          "name" => "FK-2",
          "text" => "22文字までの説明が入ります。22文字までの説",
          "prices" => [
            "1,540",
            "1,540",
            "1,780",
            "1,780",
            "2,160",
            "2,490"
          ],
        ],
        [
          "name" => "スペシャル(プリズム)",
          "text" => "22文字までの説明が入ります。22文字までの説",
          "prices" => [
            "2,790",
            "2,790",
            "3,000",
            "3,000",
            "3,430",
            "3,760"
          ],
        ],
        [
          "name" => "プレミアム(ガラス系溶剤)",
          "text" => "22文字までの説明が入ります。22文字までの説",
          "prices" => [
            "3,430",
            "3,430",
            "3,670",
            "3,670",
            "4,070",
            "4,400"
          ],
        ],
      ],
      "type" => [
        "SS" => "ムーブ/ワゴンR",
        "S" => "N-BOX/スペーシア",
        "M" => "プリウス/ノート",
        "L" => "レクサス/クラウン",
        "LL" => "ヴェルファイア",
        "XL" => "ラウンドクルーザー",
      ],
    ],
    [
      "title" => "ドライブスルーセルフ洗車",
      "time" => "20分",
      "score" => [3],
      "text" => ["説明が入ります。説明が入ります。説明が入ります。説明が入ります。説明が入ります。説明が入ります。説明が入ります。説明が入ります。説明が入ります。"],
      "recommend" => "手軽度",
      "store" => ["〇〇", "〇〇", "〇〇"],
      "images" => [
        "image01" => [
          "carWash/course02_01.jpg",
          "この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、"
        ],
        "image02" => [
          "carWash/course02_02.jpg",
          "この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、"
        ],
        "image03" => [
          "carWash/course02_03.jpg",
          "この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、"
        ],
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
        "1,000",
        "1,000",
        "1,260",
        "1,260",
        "1,650",
        "1,500"
      ],
    ],
    [
      "title" => "プロの手洗い洗車",
      "time" => "120分",
      "score" => [4],
      "text" => [
        "説明が入ります。説明が入ります。説明が入ります。説明が入ります。説明が入ります。説明が入ります。説明が入ります。説明が入ります。説明が入ります。"
      ],
      "recommend" => "キレイ度",
      "store" => ["〇〇", "〇〇", "〇〇"],
      "images" => [
        "image01" => [
          "carWash/course03_01.jpg",
          "この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、"
        ],
        "image02" => [
          "carWash/course03_02.jpg",
          "この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、"
        ],
        "image03" => [
          "carWash/course03_03.jpg",
          "この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、"
        ],
      ],
      "course" => [
        [
          "name" => "泡洗車",
          "text" => "22文字までの説明が入ります。22文字までの説",
          "prices" => [
            "2,500",
            "2,680",
            "2,980",
            "3,280",
            "3,740",
            "4,560"
          ],
        ],
        [
          "name" => "撥水洗車",
          "text" => "22文字までの説明が入ります。22文字までの説",
          "prices" => [
            "3,100",
            "3,270",
            "3,670",
            "3,980",
            "4,560",
            "5,470"
          ],
        ],
        [
          "name" => "超撥水洗車",
          "text" => "22文字までの説明が入ります。22文字までの説",
          "prices" => [
            "3,660",
            "3,870",
            "4,330",
            "4,740",
            "5,390",
            "6,460"
          ],
        ],
      ],
      "type" => [
        "SS" => "ムーブ/ワゴンR",
        "S" => "N-BOX/スペーシア",
        "M" => "プリウス/ノート",
        "L" => "レクサス/クラウン",
        "LL" => "ヴェルファイア",
        "XL" => "ラウンドクルーザー",
      ],
    ],
  ];
  ?>
  <?php foreach ($washTypes as $washType) : ?>
    <div class="c-boxBorder l-containerL">
      <dl class="c-boxBorder__header">
        <span class="l-flexBetween">
          <dt class="c-boxBorder__header__title">
            <span class="u-square"></span>
            <?php echo $washType['title']; ?>
          </dt>
          <dd class="c-boxBorder__header__recommend">
            所有時間
            <span class="c-boxBorder__header__time">
              <?php echo $washType['time']; ?>
            </span>
          </dd>
          <dd class="c-boxBorder__header__recommend">
            <?php echo $washType["recommend"]; ?>
            <?php foreach ($washTypes as $washType) : ?>
              <?php if (isset($washType['score']) && is_array($washType['score'])) : ?>
                <?php foreach ($washType['score'] as $stars) : ?>
                  <img src="<?php echo get_theme_img('carWash/star.svg'); ?>" alt="">
                <?php endforeach; ?>
              <?php endif; ?>
            <?php endforeach; ?>
          </dd>
        </span>
      </dl>
      <p class="c-boxBorder__header__text">
        <?php echo $washType['text'][0]; ?>
      </p>
      <?php if (isset($washType['store']) && is_array($washType['store'])); ?>
      <p class="c-boxBorder__store">
        取り扱い店舗
        <?php foreach ($washType['store'] as $store) : ?>
          <span class="c-boxBorder__store__value">
            <?php echo $store; ?>
          </span>
        <?php endforeach; ?>
      </p>
      <div class="l-flexRowToColumn">
        <?php foreach ($washType['images'] as $key => $image) : ?>
          <div class="section02__card">
            <img class="c-image--radiusBorder" src="<?php echo get_theme_img($image[0]); ?>" alt="">
            <p><?php echo $image[1]; ?></p>
          </div>
        <?php endforeach; ?>
      </div>
      <div>
        <table class="c-table">
          <tbody>
            <tr>
              <th class="c-table__type--blank">&nbsp;</th>
              <?php foreach ($washType['type'] as $key => $type) : ?>
                <th class="c-table__type">
                  <span class="c-table__type__top">
                    <?php echo $key; ?>
                  </span>
                  <?php echo $type; ?>
                </th>
              <?php endforeach; ?>
            </tr>
            <?php if (!empty($washType['course'])) : ?>
              <?php foreach ($washType['course'] as $key => $value) : ?>
                <?php if ($value === end($washType['course'])) : ?>
                  <tr>
                    <!-- 最後の要素に対する処理 -->
                    <th class="c-table__des--short u-bgGold">
                      <?php echo $value['name']; ?>
                      <span class="c-table__des__description"><?php echo $value['text']; ?></span>
                    </th>
                  <?php else : ?>
                  <tr>
                    <th class="c-table__des--short u-bgDeepBlue">
                      <?php echo $value['name']; ?>
                      <span class="c-table__des__description">
                        <?php echo $value['text']; ?>
                      </span>
                    </th>
                  <?php endif; ?>
                  <?php foreach ($value['prices'] as $price) : ?>
                    <td class="c-table__price">
                      ¥<?php echo $price; ?>
                    </td>
                  <?php endforeach; ?>
                  </tr>
                <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    <?php else : ?>
      <tr>
        <?php foreach ($washType['price'] as $fee) : ?>
          <td class="c-table__price">
            ¥<?php echo $fee; ?>
          </td>
        <?php endforeach; ?>
      </tr>
    <?php endif; ?>
    </tbody>
    </table>
    </div>
  <?php endforeach; ?>
</section>

<!--option-->
<section id="option" class="l-section02--bg03 section03">
  <div class="l-containerL">
    <div class="c-title">
      <h3 class="c-title__l">
        豊富なオプションメニュー
      </h3>
      <p class="c-title__l__sub">
        option
      </p>
    </div>
    <div class="c-title__l__text">
      <p>
        説明が入ります。説明が入ります。説明が入ります。説明が入ります。説明が入ります。説明が入ります。説明が入ります。説明が入ります。説明が入ります。説明が入ります。説明が入ります。説明が入ります。説明が入ります。
      </p>
    </div>
    <div class="c-option__wrap">
      <?php
      $washOptionM = [
        [
          "title" => "内窓クリーナー",
          "image" => "carWash/option01.jpg",
          "text" => "この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、",
          "prices" => [
            "¥1,000",
            "¥1,150",
            "¥1,200",
            "¥1,260",
            "¥1,480",
            "¥1,700"
          ],
        ],
        [
          "title" => "油膜とり<span class='u-text'>(フロント or リヤ)</span>",
          "image" => "carWash/option02.jpg",
          "text" => "この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、",
          "prices" => [
            "¥1,870",
            "¥2,200"
          ],
        ],
        [
          "title" => "フロントガラス フットコート",
          "image" => "carWash/option03.jpg",
          "text" => "この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、",
          "prices" => [
            "¥1,870",
            "¥2,200"
          ],
        ],
        [
          "title" => "フロントガラス シリコンコート",
          "image" => "carWash/option04.jpg",
          "text" => "この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、",
          "prices" => [
            "¥1,870",
            "¥2,200"
          ],
        ]
      ]; ?>
      <?php foreach ($washOptionM as $option) : ?>
        <div class="c-option">
          <h5 class="c-option__title">
            <?php echo $option['title']; ?>
          </h5>
          <div class="c-option__main">
            <img class="c-image--radiusBorder c-option__main__item" src="<?php echo get_theme_img($option['image']); ?>" alt="">
            <p class="c-option__main c-option__main__item">
              <?php echo $option['text']; ?>
            </p>
          </div>
          <table class="c-table">
            <tbody>
              <tr class="c-table__tr">
                <th class="c-table__type">
                  <span class="c-table__type__top">
                    SS
                  </span>
                </th>
                <th class="c-table__type">
                  <span class="c-table__type__top">
                    S
                  </span>
                </th>
                <th class="c-table__type">
                  <span class="c-table__type__top">
                    M
                  </span>
                </th>
                <th class="c-table__type">
                  <span class="c-table__type__top">
                    L
                  </span>
                </th>
                <th class="c-table__type">
                  <span class="c-table__type__top">
                    LL
                  </span>
                </th>
                <th class="c-table__type">
                  <span class="c-table__type__top">
                    XL
                  </span>
                </th>
              </tr>
              <tr class="c-table__tr">
                <?php foreach ($option['prices'] as $price) : ?>
                  <td class="c-table__price">
                    <?php echo $price; ?>
                  </td>
                <?php endforeach; ?>
              </tr>
            </tbody>
          </table>
        </div>
      <?php endforeach; ?>
      <div class="c-option__wrap">
        <?php
        $washOptionS = [
          [
            "title" => "虫取り",
            "image" => "carWash/option05.jpg",
            "text" => "この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、",
            "prices" => [
              "¥1,000",
              "¥1,320",
            ],
          ],
          [
            "title" => "ピッチクリーニング",
            "image" => "carWash/option06.jpg",
            "text" => "この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、",
            "prices" => [
              "¥1,320",
            ],
          ],
          [
            "title" => "ホイールクリーニング",
            "image" => "carWash/option07.jpg",
            "text" => "この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、",
            "prices" => [
              "¥2,750",
            ],
          ],
        ]; ?>
        <?php foreach ($washOptionS as $option) : ?>
          <div class="c-option--s">
            <h5 class="c-option__title">
              <?php echo $option['title']; ?>
            </h5>
            <div class="c-option__main">
              <img class="c-image--radiusBorder c-option__main__item" src="<?php echo get_theme_img($option['image']); ?>" alt="">
              <p class="c-option__main c-option__main__item">
                <?php echo $option['text']; ?>
              </p>
            </div>
            <table class="c-table">
              <tbody>
                <tr class="c-table__tr">
                  <th class="c-table__type--6">
                    <span class="c-table__type__top">
                      SS
                    </span>
                  </th>
                  <th class="c-table__type--6">
                    <span class="c-table__type__top">
                      S
                    </span>
                  </th>
                  <th class="c-table__type--6">
                    <span class="c-table__type__top">
                      M
                    </span>
                  </th>
                  <th class="c-table__type--6">
                    <span class="c-table__type__top">
                      L
                    </span>
                  </th>
                  <th class="c-table__type--6">
                    <span class="c-table__type__top">
                      LL
                    </span>
                  </th>
                  <th class="c-table__type--6">
                    <span class="c-table__type__top">
                      XL
                    </span>
                  </th>
                </tr>
                <tr class="c-table__tr">
                  <?php if (count($option['prices']) === 1) : ?>
                    <?php foreach ($option['prices'] as $price) : ?>
                      <td colspan="6" class="c-table__price">
                        <?php echo $price; ?>
                      </td>
                    <?php endforeach; ?>
                  <?php elseif (count($option['prices']) === 2) : ?>
                    <?php foreach ($option['prices'] as $price) : ?>
                      <td colspan="3" class="c-table__price">
                        <?php echo $price; ?>
                      </td>
                    <?php endforeach; ?>
                  <?php else : ?>
                    <?php foreach ($option['prices'] as $price) : ?>
                      <td class="c-table__price">
                        <?php echo $price; ?>
                      </td>
                    <?php endforeach; ?>
                  <?php endif; ?>
                </tr>
              </tbody>
            </table>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
</section>

<!--banner-->
<section class="l-section02 section04">
  <div class="l-containerM c-bannerArea">
    <a href="../coating">
      <picture class="section04__image">
        <source media="(max-width: 799px)" srcset="<?php echo get_theme_img('common/banner_coating-sp.png'); ?> " sizes="100%">
        <source media="(min-width: 800px)" srcset="<?php echo get_theme_img('common/banner_coating.png'); ?> w849" , sizes="849px">
        <img src="<?php echo get_theme_img('common/banner_coating.png'); ?>" alt="">
      </picture>
    </a>
  </div>
</section>

<?php include('inc/askedQuestions.php'); ?>
<section class="l-section02--bg04">
  <?php include('inc/service-section.php'); ?>
</section>
<?php get_footer(); ?>
