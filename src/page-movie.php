<?php
/*
Template Name: CM/動画一覧
*/
?>
<?php get_header(); ?>
<section class="l-section03--bg01 section01">
  <div class="l-containerM">
    <div class="c-title">
      <h2 class="c-title__l">
        TV CM
      </h2>
      <p class="c-title__l__sub">Commercial</p>
    </div>
    <div class="l-flexRowToColumn section01__main">
      <?php
      $tvcms = [
        [
          "dataId" => "ChuAsx8st-Y",
          "image" => "movie/cm01.jpg",
          "title" => "2018「SS気遣い編」",
          "time" => "2019年1月1日"
        ],
        [
          "dataId" => "YXnolKqt1Kk",
          "image" => "movie/cm02.jpg",
          "title" => "2018「トータル編」",
          "time" => "2019年1月1日"
        ],
        [
          "dataId" => "-6xxilwkWl0",
          "image" => "movie/cm03.jpg",
          "title" => "2018「ドローン編」",
          "time" => "2018年1月1日"
        ],
        [
          "dataId" => "-XBCp-lcHC0",
          "image" => "movie/cm04.jpg",
          "title" => "2018「パート編」",
          "time" => "2018年1月1日"
        ],
        [
          "dataId" => "4NzHbSLeKe8",
          "image" => "movie/cm05.jpg",
          "title" => "2018「ヒストリー編」",
          "time" => "2018年1月1日"
        ],
      ]; ?>
      <?php foreach ($tvcms as $key => $tvcm) : ?>
        <dl data-video-id="<?php echo $tvcm['dataId']; ?>" class="p-movie__thumbnail l-section--half js-modal-video">
          <dt class="p-movie__thumbnail__image">
            <img src="<?php echo get_theme_img($tvcm['image']); ?>" alt="">
          </dt>
          <dd class="p-movie__thumbnail__title"><?php echo $tvcm['title']; ?></dd>
          <time class="p-movie__thumbnail__time"><?php echo $tvcm['time']; ?></time>
        </dl>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<section class="l-section02 section02">
  <div class="l-containerM">
    <div class="c-title">
      <h2 class="c-title__l">
        Youtube
      </h2>
      <p class="c-title__l__sub">Introduction</p>
    </div>
    <div class="l-flexRowToColumn section01__main">
      <?php
      $tvcms = [
        [
          "dataId" => "ChuAsx8st-Y",
          "image" => "movie/youtube01.jpg",
          "title" => "【実演】タイヤ交換!!",
          "time" => "2023年01月13日"
        ],
        [
          "dataId" => "iaiXZNyx2SM",
          "image" => "movie/youtube02.jpg",
          "title" => "タイヤショートver",
          "time" => "2023年01月12日"
        ],
        [
          "dataId" => "kQzuAzC7C1A",
          "image" => "movie/youtube03.jpg",
          "title" => "【実演】バッテリー交換！！",
          "time" => "2022年11月01日"
        ],
        [
          "dataId" => "9yzazt-rWvI",
          "image" => "movie/youtube04.jpg",
          "title" => "バッテリーショートver",
          "time" => "2022年11月01日"
        ],
        [
          "dataId" => "zRrWaruIuz0",
          "image" => "movie/youtube05.jpg",
          "title" => "【実演】エムロードコーティング！！",
          "time" => "2022年10月02日"
        ],
        [
          "dataId" => "ZryCqb2prIA",
          "image" => "movie/youtube06.jpg",
          "title" => "コーティングショートver",
          "time" => "2022年10月01日"
        ],
      ]; ?>
      <?php foreach ($tvcms as $key => $tvcm) : ?>
        <dl data-video-id="<?php echo $tvcm['dataId']; ?>" class="p-movie__thumbnail l-section--half js-modal-video">
          <dt class="p-movie__thumbnail__image">
            <img src="<?php echo get_theme_img($tvcm['image']); ?>" alt="">
          </dt>
          <dd class="p-movie__thumbnail__title"><?php echo $tvcm['title']; ?></dd>
          <time class="p-movie__thumbnail__time"><?php echo $tvcm['time']; ?></time>
        </dl>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<section class="l-section02--bg04">
  <?php include('inc/service-section.php'); ?>
</section>
<?php get_footer(); ?>
