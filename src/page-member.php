<?php
/*
Template Name: メール会員
*/
?>
<?php get_header(); ?>
<section class="l-section03--bg01 section01">
  <div class="l-containerM">
    <div class="c-title">
      <h2 class="c-title__l">給油が安くなる!お得な情報が届く!<br>
        エムロードのメール会員</h2>
      <p class="c-title__l__sub">
        Membership Benefits
      </p>
    </div>
    <div class="c-box03">
      <div class="c-box03__circle">
        <picture class="emlord">
          <source media="(max-width:799px)" srcset="<?php echo get_theme_img('member/phone-sp.jpeg'); ?>" sizes="100vw">
          <source media="(min-width:800px)" srcset="<?php echo get_theme_img('member/phone.png'); ?>" sizes="100vw">
          <img src="<?php echo get_theme_img('member/phone-sp.jpeg'); ?>" alt="">
        </picture>
      </div>
      <div>
        <p>
          メール会員に登録すると、お得なクーポンやキャンペーン、プレゼント・イベント情報などをいち早くＧＥＴできます！</p>
        <p>会員限定のお得な情報が盛りだくさん！<br>
          今すぐ登録しましょう！</p>
        </p>
      </div>
    </div>
  </div>
</section>
<section class="l-section02--bg04 section02">
  <div class="l-containerM">
    <div class="c-title">
      <h2 class="c-title__l">
        登録方法
      </h2>
      <p class="c-title__l__sub">
        How to Register
      </p>
    </div>

    <div class="c-box">
      <p class="c-box__text">
        <span class="c-box01__title__number">1.</span>最寄りのサービスステーションをお選びください
      </p>
      <select name="stores" id="stores" class="section02__select" onchange="changeImage()">
        <?php include('inc/stores.php'); ?>
        <?php foreach ($stores as $store) : ?>
        <option value="<?php echo $store['name']; ?>" data-qr="<?php echo $store['qr']; ?>">
          <?php echo $store['name']; ?></option>
        <?php endforeach; ?>
      </select>

      <div class="c-boxBorder section02__flow1">
        <div class="section02__flow1__inner" id="qrImagesContainer">
          <img class="qr_00" src="<?php echo get_theme_img('qr/qr_top.gif'); ?>" alt="エムロード 本社メール会員">
        </div>
        <p class="c-boxBorder__textM">
          <span class="c-box01__title__number">
            2.
          </span>QRコードをスキャンして空メール送信
        </p>
      </div>

    </div>
    <div class="c-boxBorder section02__flow2">
      <p class="c-boxBorder__textM u-align-center">またはあなたのアドレスを入力してもOK
      </p>
      <form method="post">
        <input type="mail">
        <button type="submit" value="送信">送 信</button>
      </form>
    </div>
    <div class="c-attention">
      <h5 class="c-attention__title u-align-center">ご確認ください</h5>
      <p class="c-attention__text">空メール送信後に、登録完了メールが届きます。</p>
      <p class="c-attention__text">メールが届かない場合は、お使いのメールアドレスで迷惑メール設定をされている可能性があります。</p>
      <p class="c-attention__text">下記ドメインを受信できる設定にしてください。</p>
      <p class="c-attention__callout">ドメイン：mailma.emlord.co.jp</p>
    </div>
  </div>
</section>
<?php include('inc/map.php'); ?>
<section class="l-section02--bg04">
  <?php include('inc/service-section.php'); ?>
</section>
<?php get_footer(); ?>
