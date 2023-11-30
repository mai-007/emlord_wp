<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <?php if (is_home() || is_front_page()) : ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/vegas/2.4.4/vegas.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.0.7/dist/css/splide.min.css">
  <?php elseif (is_page(29)) : ?>
    <link rel="stylesheet" href="https://unpkg.com/modal-video@2.4.8/css/modal-video.min.css" />
  <?php endif; ?>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Alex+Brush&family=Kaisei+Opti:wght@400;500&display=swap" rel="stylesheet">
  <?php wp_head(); ?>
</head>

<body id="<?php echo esc_attr($post->post_name); ?>" <?php body_class(); ?>>
  <header id="header" class="l-header">
    <?php include('inc/header-nav.php'); ?>
  </header>

  <!-- frontPage -->
  <?php if (is_home() || is_front_page()) : ?>
    <section id="js-vegas" class="l-mainView">
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
      <!-- coating -->
      <?php if (is_page(11)) : ?>
        <picture class="l-headerSub__image">
          <source media="(max-width:799px)" srcset="<?php echo get_theme_img('headerImage/coating.jpg'); ?>" sizes="100vw">
          <source media="(min-width:800px)" srcset="<?php echo get_theme_img('headerImage/coating@2x.jpg'); ?>" sizes="100vw">
          <img src="<?php echo get_theme_img('headerImage/coating.jpg'); ?>">
        </picture>
      <?php endif; ?>
      <!-- aircon -->
      <?php if (is_page(8)) : ?>
        <picture class="l-headerSub__image">
          <source media="(max-width:799px)" srcset="<?php echo get_theme_img('headerImage/aircon.jpg'); ?>" sizes="100vw">
          <source media="(min-width:800px)" srcset="<?php echo get_theme_img('headerImage/aircon@2x.jpg'); ?>" sizes="100vw">
          <img src="<?php echo get_theme_img('headerImage/aircon.jpg'); ?>">
        </picture>
      <?php endif; ?>
      <!-- oil -->
      <?php if (is_page(16)) : ?>
        <picture class="l-headerSub__image">
          <source media="(max-width:799px)" srcset="<?php echo get_theme_img('headerImage/oil.jpg'); ?>" sizes="100vw">
          <source media="(min-width:800px)" srcset="<?php echo get_theme_img('headerImage/oil@2x.jpg'); ?>" sizes="100vw">
          <img src="<?php echo get_theme_img('headerImage/oli.jpg'); ?>">
        </picture>
      <?php endif; ?>
      <!-- lease -->
      <?php if (is_page(28)) : ?>
        <picture class="l-headerSub__image">
          <source media="(max-width:799px)" srcset="<?php echo get_theme_img('headerImage/lease.jpg'); ?>" sizes="100vw">
          <source media="(min-width:800px)" srcset="<?php echo get_theme_img('headerImage/lease@2x.jpg'); ?>" sizes="100vw">
          <img src="<?php echo get_theme_img('headerImage/lease.jpg'); ?>">
        </picture>
      <?php endif; ?>
      <!-- repair -->
      <?php if (is_page(18)) : ?>
        <picture class="l-headerSub__image">
          <source media="(max-width:799px)" srcset="<?php echo get_theme_img('headerImage/repair.jpg'); ?>" sizes="100vw">
          <source media="(min-width:800px)" srcset="<?php echo get_theme_img('headerImage/repair@2x.jpg'); ?>" sizes="100vw">
          <img src="<?php echo get_theme_img('headerImage/repair.jpg'); ?>">
        </picture>
      <?php endif; ?>
      <!-- repair -->
      <?php if (is_page(18)) : ?>
        <picture class="l-headerSub__image">
          <source media="(max-width:799px)" srcset="<?php echo get_theme_img('headerImage/repair.jpg'); ?>" sizes="100vw">
          <source media="(min-width:800px)" srcset="<?php echo get_theme_img('headerImage/repair@2x.jpg'); ?>" sizes="100vw">
          <img src="<?php echo get_theme_img('headerImage/repair.jpg'); ?>">
        </picture>
      <?php endif; ?>
      <!-- tire -->
      <?php if (is_page(21)) : ?>
        <picture class="l-headerSub__image">
          <source media="(max-width:799px)" srcset="<?php echo get_theme_img('headerImage/tire.jpg'); ?>" sizes="100vw">
          <source media="(min-width:800px)" srcset="<?php echo get_theme_img('headerImage/tire.jpg'); ?>" sizes="100vw">
          <img src="<?php echo get_theme_img('headerImage/tire.jpg'); ?>">
        </picture>
      <?php endif; ?>
      <!-- battery -->
      <?php if (is_page(9)) : ?>
        <picture class="l-headerSub__image">
          <source media="(max-width:799px)" srcset="<?php echo get_theme_img('headerImage/battery.jpg'); ?>" sizes="100vw">
          <source media="(min-width:800px)" srcset="<?php echo get_theme_img('headerImage/battery.jpg'); ?>" sizes="100vw">
          <img src="<?php echo get_theme_img('headerImage/battery.jpg'); ?>">
        </picture>
      <?php endif; ?>
      <!-- brake -->
      <?php if (is_page(30)) : ?>
        <picture class="l-headerSub__image">
          <source media="(max-width:799px)" srcset="<?php echo get_theme_img('headerImage/brake.jpg'); ?>" sizes="100vw">
          <source media="(min-width:800px)" srcset="<?php echo get_theme_img('headerImage/brake.jpg'); ?>" sizes="100vw">
          <img src="<?php echo get_theme_img('headerImage/brake.jpg'); ?>">
        </picture>
      <?php endif; ?>
      <!-- member -->
      <?php if (is_page(30)) : ?>
        <picture class="l-headerSub__image">
          <source media="(max-width:799px)" srcset="<?php echo get_theme_img('headerImage/member.jpg'); ?>" sizes="100vw">
          <source media="(min-width:800px)" srcset="<?php echo get_theme_img('headerImage/member.jpg'); ?>" sizes="100vw">
          <img src="<?php echo get_theme_img('headerImage/member.jpg'); ?>">
        </picture>
      <?php endif; ?>
      <!-- member -->
      <?php if (is_page(15)) : ?>
        <picture class="l-headerSub__image">
          <source media="(max-width:799px)" srcset="<?php echo get_theme_img('headerImage/member.jpg'); ?>" sizes="100vw">
          <source media="(min-width:800px)" srcset="<?php echo get_theme_img('headerImage/member.jpg'); ?>" sizes="100vw">
          <img src="<?php echo get_theme_img('headerImage/member.jpg'); ?>">
        </picture>
      <?php endif; ?>
      <!-- radiator -->
      <?php if (is_page(27)) : ?>
        <picture class="l-headerSub__image">
          <source media="(max-width:799px)" srcset="<?php echo get_theme_img('headerImage/radiator.jpg'); ?>" sizes="100vw">
          <source media="(min-width:800px)" srcset="<?php echo get_theme_img('headerImage/radiator.jpg'); ?>" sizes="100vw">
          <img src="<?php echo get_theme_img('headerImage/radiator.jpg'); ?>">
        </picture>
      <?php endif; ?>
      <!-- rental -->
      <?php if (is_page(17)) : ?>
        <picture class="l-headerSub__image">
          <source media="(max-width:799px)" srcset="<?php echo get_theme_img('headerImage/rental.jpg'); ?>" sizes="100vw">
          <source media="(min-width:800px)" srcset="<?php echo get_theme_img('headerImage/rental.jpg'); ?>" sizes="100vw">
          <img src="<?php echo get_theme_img('headerImage/rental.jpg'); ?>">
        </picture>
      <?php endif; ?>
      <!-- company -->
      <?php if (is_page(12)) : ?>
        <picture class="l-headerSub__image">
          <source media="(max-width:799px)" srcset="<?php echo get_theme_img('headerImage/company.jpg'); ?>" sizes="100vw">
          <source media="(min-width:800px)" srcset="<?php echo get_theme_img('headerImage/company.jpg'); ?>" sizes="100vw">
          <img src="<?php echo get_theme_img('headerImage/company.jpg'); ?>">
        </picture>
      <?php endif; ?>
      <!-- insurance -->
      <?php if (is_page(14)) : ?>
        <picture class="l-headerSub__image">
          <source media="(max-width:799px)" srcset="<?php echo get_theme_img('headerImage/insurance.jpg'); ?>" sizes="100vw">
          <source media="(min-width:800px)" srcset="<?php echo get_theme_img('headerImage/insurance.jpg'); ?>" sizes="100vw">
          <img src="<?php echo get_theme_img('headerImage/insurance.jpg'); ?>">
        </picture>
      <?php endif; ?>
      <!-- store -->
      <?php if (is_page(20)) : ?>
        <picture class="l-headerSub__image">
          <source media="(max-width:799px)" srcset="<?php echo get_theme_img('headerImage/store.jpg'); ?>" sizes="100vw">
          <source media="(min-width:800px)" srcset="<?php echo get_theme_img('headerImage/store.jpg'); ?>" sizes="100vw">
          <img src="<?php echo get_theme_img('headerImage/store.jpg'); ?>">
        </picture>
      <?php endif; ?>
      <!-- carwash -->
      <?php if (is_page(10)) : ?>
        <picture class="l-headerSub__image">
          <source media="(max-width:799px)" srcset="<?php echo get_theme_img('headerImage/carwash.jpg'); ?>" sizes="100vw">
          <source media="(min-width:800px)" srcset="<?php echo get_theme_img('headerImage/carwash.jpg'); ?>" sizes="100vw">
          <img src="<?php echo get_theme_img('headerImage/carwash.jpg'); ?>">
        </picture>
      <?php endif; ?>
      <!-- inspection -->
      <?php if (is_page(13)) : ?>
        <picture class="l-headerSub__image">
          <source media="(max-width:799px)" srcset="<?php echo get_theme_img('headerImage/inspection.jpg'); ?>" sizes="100vw">
          <source media="(min-width:800px)" srcset="<?php echo get_theme_img('headerImage/inspection.jpg'); ?>" sizes="100vw">
          <img src="<?php echo get_theme_img('headerImage/inspection.jpg'); ?>">
        </picture>
      <?php endif; ?>
      <!-- sale -->
      <?php if (is_page(19)) : ?>
        <picture class="l-headerSub__image">
          <source media="(max-width:799px)" srcset="<?php echo get_theme_img('headerImage/sale.jpg'); ?>" sizes="100vw">
          <source media="(min-width:800px)" srcset="<?php echo get_theme_img('headerImage/sale.jpg'); ?>" sizes="100vw">
          <img src="<?php echo get_theme_img('headerImage/sale.jpg'); ?>">
        </picture>
      <?php endif; ?>
      <!-- movie -->
      <?php if (is_page(29)) : ?>
        <picture class="l-headerSub__image">
          <source media="(max-width:799px)" srcset="<?php echo get_theme_img('headerImage/sd_youtube.jpg'); ?>" sizes="100vw">
          <source media="(min-width:800px)" srcset="<?php echo get_theme_img('headerImage/sd_youtube@2x.jpg'); ?>" sizes="100vw">
          <img src="<?php echo get_theme_img('headerImage/sd_youtube@2x.jpg'); ?>">
        </picture>
      <?php endif; ?>
      <!-- radiator -->
      <?php if (is_page(27)) : ?>
        <picture class="l-headerSub__image">
          <source media="(max-width:799px)" srcset="<?php echo get_theme_img('headerImage/radiator.jpg'); ?>" sizes="100vw">
          <source media="(min-width:800px)" srcset="<?php echo get_theme_img('headerImage/radiator@2x.jpg'); ?>" sizes="100vw">
          <img src="<?php echo get_theme_img('headerImage/radiator@2x.jpg'); ?>">
        </picture>
      <?php endif; ?>
      <!-- solar -->
      <?php if (is_page(42)) : ?>
        <picture class="l-headerSub__image">
          <source media="(max-width:799px)" srcset="<?php echo get_theme_img('headerImage/solar.jpg'); ?>" sizes="100vw">
          <source media="(min-width:800px)" srcset="<?php echo get_theme_img('headerImage/solar@2x.jpg'); ?>" sizes="100vw">
          <img src="<?php echo get_theme_img('headerImage/solar@2x.jpg'); ?>">
        </picture>
      <?php endif; ?>
      <!-- energy -->
      <?php if (is_page(43)) : ?>
        <picture class="l-headerSub__image">
          <source media="(max-width:799px)" srcset="<?php echo get_theme_img('headerImage/energy.jpg'); ?>" sizes="100vw">
          <source media="(min-width:800px)" srcset="<?php echo get_theme_img('headerImage/energy@2x.jpg'); ?>" sizes="100vw">
          <img src="<?php echo get_theme_img('headerImage/energy@2x.jpg'); ?>">
        </picture>
      <?php endif; ?>
    </div>
  <?php endif; ?>
  <!-- カーライフ豆知識 -->
  <?php $post_type = get_post_type(); ?>
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
  <?php $post_type = get_post_type(); ?>
  <?php if ($post_type == 'store' || is_archive()) : ?>
    <div class="l-headerSub">
      <div class="l-headerSub__inner">
        <h2 class="l-headerSub__title">店舗一覧</h2>
      </div>
      <picture class="l-headerSub__image">
        <source media="(max-width:799px)" srcset="<?php echo get_theme_img('headerImage/company.jpg'); ?>" sizes="100vw">
        <source media="(min-width:800px)" srcset="<?php echo get_theme_img('headerImage/company@2x.jpg'); ?>" sizes="100vw">
        <img src="<?php echo get_theme_img('headerImage/company@2x.jpg'); ?>">
      </picture>
    </div>
  <?php elseif ($post_type == 'store' || is_single()): ?>
    <div class="l-headerSub">
      <div class="l-headerSub__inner">
        <h2 class="l-headerSub__title"><?php the_title(); ?></h2>
      </div>
      <picture class="l-headerSub__image">
        <source media="(max-width:799px)" srcset="<?php echo get_theme_img('headerImage/company.jpg'); ?>" sizes="100vw">
        <source media="(min-width:800px)" srcset="<?php echo get_theme_img('headerImage/company@2x.jpg'); ?>" sizes="100vw">
        <img src="<?php echo get_theme_img('headerImage/company@2x.jpg'); ?>">
      </picture>
    </div>
  <?php endif; ?>
  </div>
  <!-- breadcrumb -->
  </div>
  <!-- breadcrumb -->

  <?php if (!(is_home() || is_front_page())) : ?>
    <?php breadcrumb(); ?>
  <?php endif; ?>
  <?php wp_body_open(); ?>
