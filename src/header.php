<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Alex+Brush&family=Kaisei+Opti:wght@400;500&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/scroll-hint@1.1.10/css/scroll-hint.css">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <header id="header" class="l-header">
    <?php include('inc/header-nav.php'); ?>
  </header>

  <!-- frontPage -->
  <?php if (is_front_page() || is_home()) : ?>
  <section id="slider1" class="splide l-mainView">
    <div class="splide__track">
      <div class="splide__list">
        <picture class="splide__slide">
          <source media="(max-width: 799px)" srcset="<?php echo get_theme_img('slide/sp-mainview_01.jpg'); ?>">
          <source media="(min-width: 800px)" srcset="<?php echo get_theme_img('slide/mainview_01.jpg'); ?>">
          <img src="<?php echo get_theme_img('slide/mainview_01.jpg'); ?>" alt="">
        </picture>
        <picture class="splide__slide">
          <source media="(max-width: 799px)" srcset="<?php echo get_theme_img('slide/sp-mainview_02.jpg'); ?>">
          <source media="(min-width: 800px)" srcset="<?php echo get_theme_img('slide/mainview_02.jpg'); ?>">
          <img src="<?php echo get_theme_img('slide/mainview_02.jpg'); ?>" alt="">
        </picture>
        <picture class="splide__slide">
          <source media="(max-width: 799px)" srcset="<?php echo get_theme_img('slide/sp-mainview_03.jpg'); ?>">
          <source media="(min-width: 800px)" srcset="<?php echo get_theme_img('slide/mainview_03.jpg'); ?>">
          <img src="<?php echo get_theme_img('slide/mainview_03.jpg'); ?>" alt="">
        </picture>
        <picture class="splide__slide">
          <source media="(max-width: 799px)" srcset="<?php echo get_theme_img('slide/sp-mainview_04.jpg'); ?>">
          <source media="(min-width: 800px)" srcset="<?php echo get_theme_img('slide/mainview_04.jpg'); ?>">
          <img src="<?php echo get_theme_img('slide/mainview_04.jpg'); ?>" alt="">
        </picture>
      </div>
    </div>
  </section>
  <!-- <section id="js-vegas" class="l-mainView"> -->
  </section>
  <?php endif; ?>

  <!-- subPage -->
  <?php if (is_page()) : ?>
  <div class="l-headerSub">
    <div class="l-headerSub__inner">
      <h2 class="l-headerSub__title"><?php the_field('subpageTitle'); ?></h2>
      <span class="l-headerSub__text"><?php the_field('subpageText'); ?></span>
    </div>

    <!-- ▼ bgImage setting  -->
    <?php
    $bg_pages = array(
      11 => 'coating',
      8 => 'aircon',
      16 => 'oil',
      28 => 'lease',
      18 => 'repair',
      21 => 'tire',
      9 => 'battery',
      30 => 'brake',
      15 => 'member',
      27 => 'radiator',
      17 => 'rental',
      12 => 'company',
      14 => 'insurance',
      20 => 'store',
      10 => 'carwash',
      13 => 'inspection',
      19 => 'sale',
      29 => 'sd_youtube',
      42 => 'solar',
      43 => 'energy'
    );
    ?>
    <?php
    $page_id = get_the_ID();
    $bg_image = $bg_pages[$page_id];
    $image_src = get_theme_img("headerImage/{$bg_image}.jpg");
    $image_srcset = get_theme_img("headerImage/{$bg_image}@2x.jpg");
    ?>
    <?php if (is_page(array_keys($bg_pages))) : ?>
    <picture class="l-headerSub__image">
      <source media="(max-width:799px)" srcset="<?php echo $image_src; ?>" sizes="100vw">
      <source media="(min-width:800px)" srcset="<?php echo $image_srcset; ?>" sizes="100vw">
      <img src="<?php echo $image_src; ?>">
    </picture>
    <?php endif; ?>
    <!-- ▲ bgImage setting  -->
  </div>
  <?php endif; ?>

  <!-- カーライフ豆知識 -->
  <?php if ($post_type == 'column' || is_post_type_archive('column')) : ?>
  <div class="l-headerSub">
    <div class="l-headerSub__inner">
      <h2 class="l-headerSub__title">カーライフ豆知識</h2>
      <span class="l-headerSub__text">
        Good Car Life
      </span>
    </div>
    <picture class="l-headerSub__image">
      <source media="(max-width:799px)" srcset="<?php echo get_theme_img('headerImage/column.jpg'); ?>" sizes="100vw">
      <source media="(min-width:800px)" srcset="<?php echo get_theme_img('headerImage/column.jpg'); ?>" sizes="100vw">
      <img src="<?php echo get_theme_img('headerImage/column.jpg'); ?>">
    </picture>
  </div>
  <?php endif; ?>

  <!-- 店舗詳細ページ -->
  <?php if ($post_type == 'store' || is_post_type_archive('store') || is_single('store')) : ?>
  <div class="l-headerSub">
    <div class="l-headerSub__inner">
      <h2 class="l-headerSub__title">
        <?php
        if (is_single('store')) {
          the_title();
        } else {
          echo '店舗一覧';
        }
        ?>
      </h2>
    </div>
    <picture class="l-headerSub__image">
      <source media="(max-width:799px)" srcset="<?php echo get_theme_img('headerImage/company.jpg'); ?>" sizes="100vw">
      <source media="(min-width:800px)" srcset="<?php echo get_theme_img('headerImage/company@2x.jpg'); ?>"
        sizes="100vw">
      <img src="<?php echo get_theme_img('headerImage/company@2x.jpg'); ?>">
    </picture>
  </div>
  <?php endif; ?>

  <!-- breadcrumb -->
  <?php if (!(is_home() || is_front_page())) : ?>
  <?php breadcrumb(); ?>
  <?php endif; ?>
</body>

</html>
