<?php
/*
Template Name: バッテリー
*/
?>
<?php get_header(); ?>
<section class="l-section03--bg01 section01">
  <div class="l-containerM">
    <div class="c-title">
      <h2 class="c-title__l">
        日常の点検で安心ドライブ
        <br>
        本体寿命・外観・電圧を素早く確認します。
      </h2>
      <p class="c-title__l__sub">Safe Driving</p>
    </div>
    <div class="c-title__l__text">
      <p>
        トラブルが起きた時にはバッテリーがもう寿命を迎えていた、というケースはとても多いです。 定期的な点検による適時のバッテリー交換で、安心して車に乗ることができます。 お気軽にスタッフまでご相談ください。
      </p>
    </div>
    <picture class="section01__image">
      <source media="(max-width: 799px)" srcset="<?php echo get_theme_img('battary/itemImage01-sp.jpg'); ?> " sizes="100%">
      <source media="(min-width: 800px)" srcset="<?php echo get_theme_img('battary/itemImage01.jpg'); ?> w849" , sizes="849px">
      <img src="<?php echo get_theme_img('battery/itemImage01.jpg'); ?>" alt="VICTORY FORCE 国内最高性能">
      <a class="section01__image__link" href="https://www.eneos.co.jp/cusumer/ss/service/battery">
        製品情報はこちら
      </a>
    </picture>
    <picture class="section01__image">
      <source media="(max-width: 799px)" srcset="<?php echo get_theme_img('battary/itemImage02-sp.jpg'); ?> " sizes="100%">
      <source media="(min-width: 800px)" srcset="<?php echo get_theme_img('battary/itemImage02.jpg'); ?> w849" , sizes="849px">
      <img src="<?php echo get_theme_img('battery/itemImage02.jpg'); ?>" alt="Panasonicカーバッテリー各種取り扱い">
      <a class="section01__image__link" href=" https://panasonic.jp/car/battery">
        製品情報はこちら
      </a>
    </picture>
  </div>
</section>
<section id="price" class="l-section02 section02">
  <div class="l-containerM">
    <div class="c-title">
      <h2 class="c-title__l">
        料金一覧
      </h2>
      <p class="c-title__l__sub">Price</p>
    </div>

    <?php
    $batteryPrices = [
      [
        "title" => "ENEOS Vフォース",
        "sizes" => [
          "B19",
          "B24",
          "D23",
          "D26",
          "D31"
        ],
        "prices" => [
          "13,200",
          "21,400",
          "28,500",
          "31,600",
          "32,600"
        ]
      ],
      [
        "title" => "Panasonicバッテリー",
        "sizes" => [
          "B19",
          "B24",
          "D23",
          "D26",
          "D31"
        ],
        "prices" => [
          "9,460",
          "18,370",
          "20,790",
          "23,790",
          "23,100"
        ]
      ],
    ]; ?>
    <div class="c-boxBorder">
      <?php foreach ($batteryPrices as $key => $value) : ?>
        <div class="p-battery__priceBox">
          <div class="c-boxBorder__header">
            <h5 class="c-boxBorder__header__title">
              <span class="u-square"></span><?php echo $value['title']; ?>
            </h5>
          </div>
          <table class="c-table">
            <tbody>
              <tr class="c-table__tr">
                <th class="c-table__des--short">サイズ</th>
                <?php foreach ($value['sizes'] as $size) : ?>
                  <th class="c-table__type">
                    <?php echo $size; ?>
                  </th>
                <?php endforeach; ?>
              </tr>
              <tr class="c-table__tr">
                <th class="c-table__des--short">料 金</th>
                <?php foreach ($value['prices'] as $price) : ?>
                  <td class="c-table__price">
                    <?php echo $price; ?>
                  </td>
                <?php endforeach; ?>
              </tr>
            </tbody>
          </table>
        </div>
      <?php endforeach; ?>
      <p class="p-battery__priceText">
        ※バッテリー本体のみの価格です。別途<span class="u-red">バッテリー工賃¥1,100</span>が必要です。
      </p>
      <p class="p-battery__priceText">
        ※充電制御、アイドリングストップ、ハイブリット補機、各種バッテリーがございます。
      </p>
    </div>
  </div>
</section>
<?php include('inc/askedQuestions.php'); ?>
<section class="l-section02--bg04">
  <?php include('inc/service-section.php'); ?>
</section>
<?php get_footer(); ?>
