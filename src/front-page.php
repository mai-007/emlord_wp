<?php get_header(); ?>
<main>



<section class="l-section01 l-flexRowToColumn">
<?php include('inc/information.php');?>

  <div class="c-sns-nav">
  <?php include('inc/sns.php');?>
  </div>

  <section class="c-news l-section--half">
    <div class="c-title--half">
      <h3 class="c-title__m">カーライフ豆知識</h3>
      <p class="c-title__m__sub">good car life</p>
    </div>
    <div class="c-news__card">
      <figure class="c-news__card__image">
        <img src="<?php echo get_theme_img('trivia/trivia_03.jpg');?>" alt="">
      </figure>
      <div class="c-news__card__inner">
        <h4 class="c-news__card__title">猛暑でも素早く車内の温度を下げる裏技</h4>
        <time class="c-news__card__date" datetime="2023.10.13">2323.10.13</time>
        <div class="c-news__card__controller">
          <span></span>
          <span></span>
          <span></span>
          <span></span>
        </div>
        <img class="c-news__card__change" src="<?php echo get_theme_img('common/btn01.svg');?>" alt="次へ">
      </div>
    </div>
  </section>

  <section class="c-instagram l-section--half">
    <div class="c-title--half">
      <h3 class="c-title__m">インスタグラム</h3>
      <?php echo do_shortcode('[instagram-feed feed=1]');?>
    </div>
  </section>
</section>

<section class="l-section02--bg01 splide slider1">
  <div id="js-slide" class="splide__track">
    <ul class="splide__list">
      <li class="splide__slide">
        <img src="<?php echo get_theme_img('slide_02/sd_coating.jpg');?>" alt="">
      </li>
      <li class="splide__slide">
        <img src="<?php echo get_theme_img('slide_02/sd_oil2.jpg');?>" alt="">
      </li>
      <li class="splide__slide">
        <img src="<?php echo get_theme_img('slide_02/sd_sensha.jpg');?>" alt="">
      </li>
      <li class="splide__slide">
        <img src="<?php echo get_theme_img('slide_02/sd_recruit.gif');?>" alt="">
      </li>
    </ul>
  </div>
  <div class="splide__progress">
		<div class="splide__progress__bar">
		</div>
  </div>
</section>

<section class="l-section02--bg02">
  <?php include('inc/service-section.php');?>
</section>

<section id="storeMap" class="l-section02 c-map">
  <div class="c-title">
      <h3 class="c-title__l">熊本地方に<span class="u-red">18店舗</span><br>お近くのサービスステーションが<span class="u-red">見つかります</span></h3>
      <p class="c-title__l__sub">Always close to you</p>
  </div>
    <p class="c-title__text">
        いつでも貴方の近くに。<br>
        困った際にはお気軽にお近くの店舗へご相談ください。
      </p>
      <div class="p-map">
        <iframe src="https://www.google.com/maps/d/embed?mid=11VoNUq8872gqM3knLCiq0WXCKSjzBrc&ehbc=2E312F&noprof=1" width="100%" height="645px" allowfullscreen>
        </iframe>
        <button class="c-button01">
          <a href="#">
          店舗一覧へ
          <img class="c-button01__image" src="<?php echo get_theme_img('common/arrow_right-small-white.svg');?>" alt="">
          </a>
        </button>
      </div>
</section>

<!-- About -->
<section class="l-section02--bg03 p-company">
  <div class="l-containerM">
  <img class="p-company__logo" src="<?php echo get_theme_img('common/logo.png');?>" alt="エムロード ロゴ">
  <div class="c-title">
      <h3 class="c-title__l">エムロードは<span class="u-gold">車のトータルサポート</span>企業です</span></h3>
      <p class="c-title__l__sub">Total support</p>
  </div>
    <p class="c-title__text">
    この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。
      </p>
      <button class="c-button01">
          <a href="#">
          会社案内
          <img class="c-button01__image" src="<?php echo get_theme_img('common/arrow_right-small-white.svg');?>" alt="">
          </a>
        </button>
  </div>
</section>

<!-- Services for Businesses -->
<section class="l-section02 p-business">
  <div class="l-containerM">
    <div class="c-title">
        <h3 class="c-title__l">
          <span class="u-gold">企業</span>向けサービス</h3>
        <p class="c-title__l__sub">
          Services for Businesses
        </p>
        <p class="c-title__text">
エムロードでは多数の法人様へのサービスも行っております。<br>
お気軽にお問い合わせください。
      </p>
    </div>
    <div class="p-business__content">
      <?php include('inc/business.php');?>
    </div>
</section>

<section class="l-section02--bg03 p-recruit">
  <div class="l-containerM">
    <div class="c-title">
        <h3 class="c-title__l">
          <span class="u-gold">採用</span>について</h3>
        <p class="c-title__l__sub">
          Recruit
        </p>
        <p class="c-title__text">
        人が好き過ぎて面倒見すぎてしまう。<br>そんな、人と会社と熊本を輝かせる企業で一緒に働きませんか？
      </p>
    </div>
    <button class="c-button01">
          <a href="#">
          採用情報ページへ
          <img class="c-button01__image" src="<?php echo get_theme_img('common/arrow_right-small-white.svg');?>" alt="">
          </a>
        </button>
  </div>
</section>


<!-- media -->
<section class="l-section02 p-media">
  <div class="c-title">
    <h3 class="c-title__l">
      <span class="u-gold">
        動画・CM</span>一覧
      </h3>
      <p class="c-title__l__sub">
          Media
      </p>
      <p class="c-title__text">
        エムロードの本気とユーモアを是非ご覧ください</p>
  </div>
  <picture class="p-media__image">
    <source
      media="(max-width: 799px)"
      srcset="#"
      sizes="100%"
    >
    <source
      media="(min-width: 799px)"
      srcset="  <?php echo get_theme_img('frontpage/sd_youtube.jpg');?> w849,
  <?php echo get_theme_img('frontpage/sd_youtube@2x.jpg');?> w1695,"
      sizes="849px"
    >
    <img src="<?php echo get_theme_img('frontpage/sd_youtube.jpg');?>" alt="">
  </picture>
  <button class="c-button01">
          <a href="#">
          動画・CM一覧へ
          <img class="c-button01__image" src="<?php echo get_theme_img('common/arrow_right-small-white.svg');?>" alt="">
          </a>
        </button>
</section>
</main>
<?php
get_sidebar();
get_footer();
?>
