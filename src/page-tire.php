<?php
/*
Template Name: タイヤ
*/
?>
<?php get_header(); ?>
<section class="l-section03--bg01 section01">
  <div class="l-containerM">
    <div class="c-title">
      <h2 class="c-title__l">
        安全性・耐久性・燃費などを考慮し
        <br>
        愛車にフィットするタイヤをご提案
      </h2>
      <p class="c-title__l__sub">Optimal Tires</p>
    </div>
    <div class="l-flexRowToColumn section01__main">
      <div class="l-section--half">
        <p>
          タイヤとホイールは、車の安全性に直接関わる重要な部分なので、定期的なチェックが必要です。
        </p>
        <p>
          エムロードでは、タイヤの特長や車との相性を理解したプロスタッフが、お客様のカーライフを足元からサポートいたします！
        </p>
        <p>
          タイヤの交換時期や選び方など、何でもお気軽にお尋ねください。
        </p>
      </div>
      <div class="l-section--half">
        <img src="<?php echo get_theme_img('tire/main.png'); ?>" alt="">
      </div>
    </div>
    <!--LinkInPage -->
    <div class="c-linkInPage">
      <button class="c-linkInPage__btn">
        <a href="#benefit">特典</a>
      </button>
      <button class="c-linkInPage__btn">
        <a href="#price">料　金</a>
      </button>
      <button class="c-linkInPage__btn">
        <a href="#QA">よくある質問</a>
      </button>
    </div>
  </div>
</section>
<section class="l-section02--bg02 section02">
  <div class="l-containerM">
    <div class="c-title">
      <h2 class="c-title__l">
        タイヤの交換時期
      </h2>
      <p class="c-title__l__sub">Tips</p>
    </div>
    <div class="c-title__l__text">
      <p>
        雨の多い九州だからこそ、安全な走行にタイヤの点検は欠かせません。
        溝が残っているか、ひび割れがないか無料点検致します。
      </p>
      <p>タイヤの状況をしっかりと把握するためにも、お近くのエムロードへお気軽にお申し付けください。</p>
      <img src="<?php echo get_theme_img('tire/m_kyusyu.jpg'); ?>" alt="">
    </div>
    <?php
    $tireTips = [
      [
        'number' => '01.',
        'title' => 'タイヤは5000kmの走行で約1mm溝が摩耗',
        'description' =>
        '新品のタイヤの溝は約8.0mm～8.5mmになります。路面の状態や乗り方で変わりますが、5,000kmの走行で約1mm摩耗します。空気圧点検等の定期メンテナンスが大事です。',
        'image' => 'tire/rain1.jpg'
      ],
      [
        'number' => '02.',
        'title' => 'タイヤの溝の大事な役割',
        'description' =>
        'タイヤの溝は水はけをよくし、濡れた路面等で安全な走行を可能にする重要な役割があります。',
        'image' => 'tire/rain2.jpg'
      ],
      [
        'number' => '03.',
        'title' => '溝の摩耗したタイヤで走行すると・・・',
        'description' =>
        '1.6㎜以下(約2.0㎜)以下のタイヤの溝で走行すると、道路交通法違反(整備不良)になり車検にも通りません。<span class="u-bold">九州では雨が多く3.0㎜以下では大雨時に水はけが悪くなりタイヤが道路から浮き上がる現象が起きてしまいます。</span><br>これはハイドロプレーニング現象と呼ばれるもので、大変危険です。',
        'image' => 'tire/rain3.jpg'
      ],
      [
        'number' => '04.',
        'title' => 'お客様の安全を守りたいから',
        'description' =>
        '<span class="u-bold">エムロードでは4.0㎜前後よりスタッフがお声掛けしております。</span>3.0㎜を交換目安として、どんな天候でも安全に走行できるよう、定期的なメンテナンスを推奨しています。',
        'image' => 'tire/rain4.jpg'
      ]
    ];

    foreach ($tireTips as $key => $tips) : ?>
    <div class="c-box01">
      <h3 class="c-box01__title">
        <span class="c-box01__title__number"><?php echo $tips['number']; ?></span>
        <?php echo $tips['title']; ?>
      </h3>
      <div class="l-flexRowToColumn">
        <p class="c-box01__text">
          <?php echo $tips['description']; ?>
        </p>
        <img src="<?php echo get_theme_img($tips['image']); ?>" alt="" class="c-box01__image">
      </div>
    </div>
    <?php endforeach; ?>
  </div>
</section>

<section id="benefit" class="l-section02--bg03 section03">
  <div class="l-containerM">
    <div class="c-title">
      <h2 class="c-title__l">
        特典
      </h2>
      <p class="c-title__l__sub">Benefit</p>
    </div>
    <div class="c-title__l__text">
      <p>
        エムロードで交換されたタイヤは<br>「パンク修理」が無料です。
      </p>
      <p>
        交換を行なった店舗にて、以下の場合を覗き無料で交換をさせて頂きます。
      </p>
      <ul class="c-title__l__list">
        <?php
        $tireChecks = [
          "スタッフがパンク修理可能と判断した場合。",
          "バースト(破裂)や破損等は対象外です。",
          "パンク修理は接地面の部分しかできません。",
          "走行安全上、タイヤ1本につき2ヶ所(間40cm)までとさせていただきます。",
        ]; ?>
        <?php foreach ($tireChecks as $tireCheck) : ?>
        <li class="c-title__l__list__item">
          <img src="<?php echo get_theme_img('common/check-black.svg'); ?>" alt="">
          <?php echo $tireCheck; ?>
        </li>
        <?php endforeach; ?>
      </ul>
    </div>
</section>
<section id="price" class="l-section02 section04">
  <div class="l-containerM">
    <div class="c-title">
      <h2 class="c-title__l">
        交換料金
      </h2>
      <p class="c-title__l__sub">Credentials</p>
    </div>
    <table class="c-table">
      <?php
      $types = [
        "組替料</span>",
        "バランス料</span>",
        "タイヤ処分料</span>（1本あたり)",
        "パンク修理</span>(1本あたり)",
        "ローテーション</span>",
        "ローテーション</span>(RV/1BOX)",
        "脱着</span>(ホイル付)",
      ];
      $prices = [
        "1,100",
        "880",
        "440",
        "3,300",
        "3,300",
        "4,400",
        "770"
      ];
      ?>
      <tbody class="js-scrollable">
        <tr>
          <?php foreach ($types as $type) : ?>
          <th class="c-table__type c-table__type--top">
            <span class="c-table__type__top">
              <?php echo $type; ?>
          </th>
          <?php endforeach; ?>
        </tr>
        <tr>
          <?php foreach ($prices as $key => $price) : ?>
          <td class="c-table__price">
            ¥<?php echo $price; ?>
          </td>
          <?php endforeach; ?>
        </tr>
      </tbody>
    </table>
  </div>
  <picture class="section04__image">
    <source media="(max-width: 799px)" srcset="<?php echo get_theme_img('common/banner_point-sp.png'); ?> "
      sizes="100%">
    <source media="(min-width: 800px)" srcset="<?php echo get_theme_img('common/banner_point.png'); ?> w849" ,
      sizes="849px">
    <img src="<?php echo get_theme_img('common/banner_point.png'); ?>" alt="">
  </picture>
</section>
<?php include('inc/askedQuestions.php'); ?>
<section class="l-section02--bg04">
  <?php include('inc/service-section.php'); ?>
</section>
<?php get_footer(); ?>
