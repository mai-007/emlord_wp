<?php
/*
Template Name: 車買取・販売
*/
?>
<?php get_header(); ?>
<section class="l-section03--bg01 section01">
  <div class="l-containerM">
    <div class="c-title">
      <h2 class="c-title__l">
        売ります!買います！<br>
        「エムロード愛車広場」をご利用ください。
      </h2>
      <p class="c-title__l__sub">
        Favorite car square
      </p>
    </div>

    <div class="c-title__l__text">
      <p>
        エムロードがまとめて対応する事で、中間マージンをカットし<br>
        高額査定・バリュー価格での販売が可能です。<br>
        是非一度、お気軽にご相談ください。
      </p>
    </div>
    <div class="l-flexRowToColumn p-sale__banner">
      <a href="https://www.goo-net.com/usedcar_shop/1101322/showroom.html" target="_blank" rel="noopener noreferrer">
        <img src="<?php echo get_theme_img('sale/sale_banner01.png'); ?>" alt="エムロードの中古車を「グーネット」で探せます!グーネットで中古車を見るならこちらをクリック">
      </a>
      <a href="https://www.carsensor.net/shop/kumamoto/120043007/?BKKN=VU1045346770" target="_blank" rel="noopener noreferrer">
        <img src="<?php echo get_theme_img('sale/sale_banner02.png'); ?>" alt="エムロードの中古車を「カーセンサー」で探せます!カーセンサーで中古車を見るならこちらをクリック">
      </a>
    </div>
  </div>
</section>
<section class="l-section02 section02">
  <div class="l-containerM">
    <div class="l-flexRowToColumn p-sale__content">
      <div class="p-sale__content__general">
        <h3 class="p-sale__content__general__title">
          一般の中古流通
        </h3>
        <p class="p-sale__content__general__text">
          中間マージンが発生し、安い買取り査定お値打ち感のない販売価格に・・・
        </p>
      </div>
      <img class="p-sale__content__image" src="<?php echo get_theme_img('sale/sale_image01.png'); ?>" alt="販売価格の内に販売店マージンが30万・オートオークション費用が10万・買取店マージンに10万取られる為、販売価格140万円の車の査定価格は80万円になります。">
    </div>
    <div class="l-flexRowToColumn p-sale__content">
      <div class="p-sale__content__emlord">
        <h3 class="p-sale__content__emlord__title">
          エムロード中古車市場
        </h3>
        <p class="p-sale__content__emlord__text">
          エムロードがまとめて対応!
        </p>
        <p class="p-sale__content__emlord__text">
          売る人も・買う人もハッピー!
        </p>
      </div>
      <img class="p-sale__content__image" src="<?php echo get_theme_img('sale/sale_image02.png'); ?>" alt="高額査定!バリュー価格での販売が可能です。">
    </div>
    <img src="<?php echo get_theme_img('sale/sale_image03.png'); ?>" alt="">
  </div>
</section>
<section class="l-section02--bg04 section03">
  <div class="l-containerM">
    <div class="c-title">
      <h2 class="c-title__l">
        高額買取り
      </h2>
      <p class="c-title__l__sub">
        High Price
      </p>
      <p class="c-title__l__text">
        あなたの愛車を買いたい「次のオーナー」をお探しします。
      </p>
      <p class="c-title__l__text">買取りと中古車販売を一括して行うことで、一般的な車の流通における様々な中間マージンをカットすることができます。
      <p class="c-title__l__text">あなたの愛車を高額査定・買取りいたします。
      </p>
    </div>
  </div>
</section>
<section class="l-section02--bg03 section04">
  <div class="l-containerM">
    <div class="c-title">
      <h2 class="c-title__l">
        中古車販売
      </h2>
      <p class="c-title__l__sub">
        Used cars
      </p>
      <p class="c-title__l__text">
        ご検討の際には、前オーナーがどのように利用されていたかなど、 データでは見えない車の使用状況までアドバイスしております。</p>
      <p class="c-title__l__text">国家資格の整備士によるメンテナンスで、状態の良い車をお値打ちにご提供させていただきます。</p>
      </p>
    </div>
  </div>
</section>
<?php include('inc/askedQuestions.php'); ?>
<section class="l-section02--bg04">
  <?php include('inc/service-section.php'); ?>
</section>
<?php get_footer(); ?>
