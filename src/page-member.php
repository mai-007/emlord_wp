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
        <img src="<?php echo get_theme_img('member/phone.png'); ?>" alt="">
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
      <p class="c-box__text">最寄りのサービスステーションをお選びください</p>
      <select name="stores" id="stores">
        <?php include('inc/stores.php'); ?>
        <?php foreach ($stores as $store) : ?>
          <option value="<?php echo $store['name']; ?>"><?php echo $store['name']; ?></option>
        <?php endforeach; ?>
      </select>

      <div class="c-boxBorder">
        <img src="" alt="">
        <p class="c-boxBorder__textM">QRコードをスキャンして空メール送信</p>
      </div>

      <div class="c-boxBorder">
        <p class="c-boxBorder__textM">またはあなたのアドレスを入力してもOK
        </p>
        <div>
          <form action="">
            <input type="mail">
            <button type="submit" value="送信"></button>
          </form>
        </div>
      </div>

      <div class="c-attention">
        <h5 class="c-attention__title">ご確認ください</h5>
        <p class="c-attention__text">空メール送信後に、登録完了メールが届きます。</p>
        <p class="c-attention__text">メールが届かない場合は、お使いのメールアドレスで迷惑メール設定をされている可能性があります。</p>
        <p class="c-attention__text">下記ドメインを受信できる設定にしてください。</p>
        <p class="c-attention__callout">ドメイン：mailma.emlord.co.jp</p>
      </div>
    </div>
  </div>
</section>
<?php include('inc/map.php'); ?>
<section class="l-section02--bg04">
  <?php include('inc/service-section.php'); ?>
</section>
<?php get_footer(); ?>
