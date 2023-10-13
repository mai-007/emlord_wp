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
    <h1 class="c-logo"><img src="<?php echo get_theme_img('common/logo.png');?>" alt="エムロードのロゴマーク">
  </h1>
  <!-- /.c-headerLogo -->
  <nav id="nav" class="l-nav">
    <button id="js-hamburger" class="c-hamburger u-sp">
      <div id="js-hamburger-wrap" class="c-hamburger__wrap">
        <span class="c-hamburger__bar js-hamburger__bar"></span>
        <span class="c-hamburger__bar js-hamburger__bar"></span>
        <span class="c-hamburger__bar js-hamburger__bar"></span>
      </div><!-- /.hamburger__wrap -->
    </button>
    <ul id="js-nav" class="c-nav">
      <?php
        $navlist = [
          ['name'=>'サービス一覧', 'href'=>'#', 'image'=>'common/icon_service.svg'],
          ['name'=>'店舗一覧', 'href'=>'#', 'image'=>'common/icon_store.svg'],
          ['name'=>'カーライフ豆知識', 'href'=>'#', 'image'=>'common/icon_car.svg'],
          ['name'=>'会社案内', 'href'=>'#', 'image'=>'common/icon_company.svg'],
          ['name'=>'採用情報', 'href'=>'#', 'image'=>'common/icon_person.svg'],
          ['name'=>'法人向けサービス', 'href'=>'#', 'image'=>'common/icon_handshake.svg'],
        ]
      ;?>
      <?php foreach($navlist as $key => $value):?>
      <li class="c-nav__li">
        <a class="c-nav__item" href="<?php echo $value['href'];?>">
          <span class="c-nav__item__image">
            <img src="<?php echo get_theme_img($value['image']);?>" alt="">
          </span>
          <span class="c-nav__item__text"><?php echo $value['name'];?></span>
        </a>
      </li>
      <?php endforeach;?>
    </ul>
  </nav>
  <div class="c-mailMember">
        <span class="c-hightLight-01">
        \ スマホへ割引きクーポンをお届け /
        </span>
        <a class="c-mailMember__btn" href="#">
          <img src="<?php echo get_theme_img('common/icon_mail-white.svg');?>" alt="">
          メール会員登録
        </a>
      </div>
</header>

<section id="js-vegas" class="l-mainView">
</section>

  <?php wp_body_open(); ?>
