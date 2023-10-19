<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/vegas/2.4.4/vegas.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.0.7/dist/css/splide.min.css">
  <?php wp_head(); ?>
</head>
<body id="<?php echo esc_attr( $post->post_name ); ?>" <?php body_class(); ?>>
<header id="header" class="l-header">
<?php include('inc/header-nav.php');?>
</header>

<!-- frontPage -->
<?php if ( is_home() || is_front_page() ) : ?>
  <section id="js-vegas" class="l-mainView">
</section>
<?php endif; ?>

<!-- subPage -->
<?php if(!(is_home() || is_front_page())): ?>
  <div class="l-headerSub">
    <div class="l-headerSub__inner">
      <h2 class="l-headerSub__title"><?php the_field('subpageTitle'); ?></h2>
      <span class="l-headerSub__text"><?php the_field('subpageText'); ?></span>
    </div>
  <!-- ▼ bgImage setting  -->
    <!-- coating -->
    <?php if(is_page(11)):?>
      <picture class="l-headerSub__image">
        <source media="(max-width:799px)" srcset="<?php echo get_theme_img('headerImage/coating@2x.jpg');?>" sizes="100vw">
        <source media="(min-width:800px)" srcset="<?php echo get_theme_img('headerImage/coating.jpg');?>" sizes="100vw">
  <img src="<?php echo get_theme_img('headerImage/coating.jpg');?>">
      </picture>
    <?php endif;?>
  </div>
  <?php endif; ?>


  <!-- breadcrumb -->
  <?php if(!(is_home() || is_front_page())): ?>
    <?php breadcrumb(); ?>
  <?php endif; ?>
<?php wp_body_open(); ?>
