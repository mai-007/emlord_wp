<?php wp_footer(); ?>

<!-- 配列の取得 -->
<?php include('inc/sitemap.php');?>

<footer class="l-footer">
  <div class="l-footer__top">
    <img class="c-logo" src="<?php echo get_theme_img('common/logo.png'); ?>" alt="エムロードのロゴマーク">
    <div class="c-sns-nav--footer">
      <span>FOLLOW US</span>
      <?php include('inc/sns.php'); ?>
    </div>
  </div>
  <div class="l-footer__main l-flexRowToColumn">
    <div class="l-flexColumn l-footer__banner">
      <a href="coating">
        <img src="<?php echo get_theme_img('common/banner_coating-sp.png'); ?>" alt="" alt="">
      </a>
      <a href="#">
        <img src="<?php echo get_theme_img('common/banner_inspection-sp.png'); ?>" alt="" alt="">
      </a>
    </div>
    <div class="l-flexColumn l-footerList">
      <nav class="l-footerList__service">
        <ul class="l-footerList__service__block">
          <h6 class="l-footerList__title">
            愛車のメンテナンス
          </h6>
          <?php foreach ($maintenance as $value) : ?>
          <li class="l-footerList__item">
            <a href="<?php echo $value['href']; ?>">
              <span><?php echo $value['name']; ?></span>
              <img src="<?php echo get_theme_img('common/arrow_right-small-white.svg'); ?>" alt="">
            </a>
          </li>
          <?php endforeach; ?>
        </ul>
        <ul class="l-footerList__service__block">
          <h6 class="l-footerList__title">
            修理・交換
          </h6>
          <?php foreach ($replacement as $value) : ?>
          <li class="l-footerList__item">
            <a href="<?php echo $value['href']; ?>">
              <span><?php echo $value['name']; ?></span>
              <img src="<?php echo get_theme_img('common/arrow_right-small-white.svg'); ?>" alt="">
            </a>
          </li>
          <?php endforeach; ?>
        </ul>
        <ul class="l-footerList__service__block">
          <h6 class="l-footerList__title">
            車に乗る・保険
          </h6>
          <?php foreach ($takeCar as $value) : ?>
          <li class="l-footerList__item">
            <a href="<?php echo $value['href']; ?>">
              <span><?php echo $value['name']; ?></span>
              <img src="<?php echo get_theme_img('common/arrow_right-small-white.svg'); ?>" alt="">
            </a>
          </li>
          <?php endforeach; ?>
        </ul>
      </nav>

      <nav class="l-footerList__sitemap">
        <ul>
          <?php foreach ($sitemap as $value) : ?>
          <li class="l-footerList__title">
            <a href="<?php echo $value['href']; ?>">
              <?php echo $value['name']; ?>
              <img src="<?php echo get_theme_img('common/arrow_right-small-white.svg'); ?>" alt="">
            </a>
          </li>
          <?php endforeach; ?>
        </ul>
      </nav>
    </div>
  </div>
</footer>
</body>
<script src="<?php echo get_template_directory_uri() . '/js/bundle.js'; ?>"></script>

<!-- front-page -->
<?php if (is_front_page() || is_home()) : ?>
<script>
//スライドの処理
//main-view
new Splide("#slider1", {
  autoplay: true,
  type: "fade",
  rewind: true,
  pauseOnHover: false,
  pauseOnFocus: false,
  interval: 5000,
  speed: 2000,
}).mount();

//information
new Splide("#slider2", {
  type: 'loop',
}).mount();

//car-life豆知識
new Splide("#slider3", {
  direction: "ttb", // スライダーの方向を指定
  heightRatio: 0.75, // スライドの高さをスライダーの幅に対する割合で指定
  wheel: true, // マウスホイールによるスライダーの移動を有効にする
  waitForTransition: true, // スライダーが移動中にも操作を受け付ける
  type: 'loop',
}).mount();

//front中部スライダー
new Splide("#slider4", {
  type: 'loop',
}).mount();
</script>
<?php endif; ?>

<!-- page-movie -->
<?php if (is_page(29)) : ?>
<script>
jQuery(function() {
  if (jQuery(".js-modal-video").length) {
    jQuery(".js-modal-video").modalVideo({
      channel: "youtube",
      youtube: {
        controls: 1, // コントロール表示（0は非表示）
      },
    });
  }
});
</script>
<?php endif; ?>

<!-- page-member -->
<?php if(is_page(15)):?>
<script>
// selectで選択した値に応じてQRのimageを変更
function changeImage() {
  // select要素から選択された値を取得
  var selectedStore = document.getElementById("stores").value;

  // 選択された店舗に応じて画像を切り替える
  var qrImagesContainer = document.getElementById("qrImagesContainer");
  qrImagesContainer.innerHTML = ''; // 一旦中身をクリア

  // 新しい画像を挿入
  var newImage = document.createElement("img");
  newImage.className = "qr_00";
  newImage.src = "<?php echo get_theme_img('qr/'); ?>" + document.querySelector('#stores option:checked').getAttribute(
    'data-qr');
  newImage.alt = "エムロード" + selectedStore + "メール会員";
  qrImagesContainer.appendChild(newImage);
}

// selectにて選択した値によってメール送信先の変更
function changeEmailRecipient() {
  var selectedValue = document.getElementById("stores").value;

  var emailInput = document.querySelector('input[type="email"]');
  switch (selectedValue) {
    case "小峰SS":
      emailInput.dataset.recipient = "27@mailma.emlord.co.jp";
      break;
    case "上南部SS":
      emailInput.dataset.recipient = "05@mailma.emlord.co.jp";
      break;
    case "建軍SS":
      emailInput.dataset.recipient = "10@mailma.emlord.co.jp";
      break;
    case "光の森SS":
      emailInput.dataset.recipient = "03@mailma.emlord.co.jp";
      break;
    case "本渡SS":
      emailInput.dataset.recipient = "15@mailma.emlord.co.jp";
      break;
    case "菊南SS":
      emailInput.dataset.recipient = "06@mailma.emlord.co.jp";
      break;
    case "新町SS":
      emailInput.dataset.recipient = "18@mailma.emlord.co.jp";
      break;
    case "平田SS":
      emailInput.dataset.recipient = "19@mailma.emlord.co.jp";
      break;
    case "大矢野SS":
      emailInput.dataset.recipient = "12@mailma.emlord.co.jp";
      break;
    case "DDエネオスセブンTATSUDA":
      emailInput.dataset.recipient = "08@mailma.emlord.co.jp";
      break;
    case "嘉島SS":
      emailInput.dataset.recipient = "23@mailma.emlord.co.jp";
      break;
    case "熊本インターSS":
      emailInput.dataset.recipient = "26@mailma.emlord.co.jp";
      break;
  }
}

function submitForm() {
  var emailInput = document.getElementById("email");
  var recipient = emailInput.dataset.recipient;

  if (recipient) {
    emailInput.value = recipient;
    return true; // フォーム送信を許可
  } else {
    alert("エラー: 店舗が選択されていません。");
    return false; // フォーム送信をキャンセル
  }
}
</script>
<?php endif;?>

</html>
