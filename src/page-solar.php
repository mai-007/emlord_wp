<?php
/*
Template Name: 太陽光発電
*/
?>
<?php get_header(); ?>
<section class="l-section03--bg01 section01">
  <div class="l-containerM">
    <h1 class="c-title__l">
      太陽光発電
    </h1>
    <p class="c-title__l__sub">Effective use of energy</p>
    <div class="c-title__l__text u-align-center">
      <p>
        宇城市三角町の海岸沿いで自然エネルギーを有効活用するため<br>
        太陽光発電所を運営しています。
      </p>
    </div>
    <div class="l-flexRowToColumn section01__image">
      <img src="<?php echo get_theme_img('solar/image01.jpg'); ?>" alt="" class="c-image--maxWidth33">
      <img src="<?php echo get_theme_img('solar/image02.jpg'); ?>" alt="" class="c-image--maxWidth33">
      <img src="<?php echo get_theme_img('solar/image03.jpg'); ?>" alt="" class="c-image--maxWidth33">
    </div>
  </div>
</section>
<section class="l-section02--bg04">
  <?php include('inc/service-section.php'); ?>
</section>
<?php get_footer(); ?>
