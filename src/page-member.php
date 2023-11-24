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
<section class="l-section02 section02">
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
      <p　class="c-box__text">最寄りのサービスステーションをお選びください</p>
      <select name="stores" id="stores">
        <?php include('inc/stores.php'); ?>
        <?php foreach ($stores as $store) : ?>
          <option value="<?php echo $store['name']; ?>"><?php echo $store['name']; ?></option>
        <?php endforeach; ?>
      </select>

      <div class="c-boxBorder">
        <img src="" alt="">
        <p>QRコードをスキャンして空メール送信</p>
      </div>

      <div class="c-boxBorder">
        <p>またはあなたのアドレスを入力してもOK
        </p>
        <div>
          <form action="">
            <input type="mail">
            <button type="submit" value="送信"></button>
          </form>
        </div>
      </div>

      <div>
        <p>ご確認ください</p>
        <p>空メール送信後に、登録完了メールが届きます。
          メールが届かない場合、お使いのメールアドレスで迷惑メール設定をされている可能性があります。下記ドメインを受信できる設定にしてください。</p>
        <p>ドメイン：mailma.emlord.co.jp</p>
      </div>
    </div>
  </div>
</section>
<section class="l-section02--bg04">
  <?php include('inc/service-section.php'); ?>
</section>
<?php get_footer(); ?>
