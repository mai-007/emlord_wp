<?php get_header(); ?>
<main>



<section class="l-section01 l-flexRowToColumn">
<?php include('inc/information.php');?>

  <div class="c-sns-nav">
    <img src="<?php echo get_theme_img('common/sns_icon-instagram.svg') ;?>" alt="">
    <img src="<?php echo get_theme_img('common/sns_icon-youtube.svg') ;?>" alt="">
    <span class="c-mapIcon">
      <span class="c-mapIcon__text">MAP</span>
      <img src="<?php echo get_theme_img('common/icon_map.svg') ;?>" alt="">
    </span>
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
  <?php include('inc/service.php');?>
</section>

<section class="l-section02 c-map">
  <div class="c-title">
      <h3 class="c-title__l">熊本地方に<span class="u-red">18店舗</span><br>お近くのサービスステーションが<span class="u-red">見つかります</span></h3>
      <p class="c-title__l__sub">Always close to you</p>
  </div>
    <p class="u-textM u-align-center">
        いつでも貴方の近くに。<br>
        困った際にはお気軽にお近くの店舗へご相談ください。
      </p>
      <div class="p-map">
        <iframe src="https://www.google.com/maps/d/embed?mid=11VoNUq8872gqM3knLCiq0WXCKSjzBrc&ehbc=2E312F&noprof=1" width="100%" height="645px" allowfullscreen>
        </iframe>
      </div>

</section>

<section class="l-section c-company">
  <!-- company -->
</section>

<section class="l-section">
  <!-- 法人むけ -->
</section>

<section class="l-section c-recruit">
  <!-- 採用 -->
</section>

<section class="l-section c-video">
  <!-- 動画 -->
</section>
</main>
<?php
get_sidebar();
get_footer();
?>
