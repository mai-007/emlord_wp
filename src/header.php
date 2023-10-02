<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="./css/main.css">
  <?php wp_head(); ?>
</head>
<header id="header" class="l-header">
  <div class="c-headerLogo">
    <h1 class="c-headerLogo">Title</h1>
    <h2 class="c-headerLogo__sub">wp-starter</h2>
  </div>
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
      <li class="c-nav__li">
        <a class="c-nav__item" href="#">item</a>
      </li>
      <li class="c-nav__li">
        <a class="c-nav__item" href="#">item</a>
      </li>
      <li class="c-nav__li">
        <a class="c-nav__item" href="#">item</a>
      </li>
      <li class="c-nav__li">
        <a class="c-nav__item" href="#">item</a>
      </li>
      <div class="c-contact">
        <a href="c-contact__tex">contact</a>
      </div><!-- /.c-contact -->
    </ul>
  </nav>
</header>

<body id="<?php echo esc_attr( $post->post_name ); ?>" <?php body_class(); ?>>
  <?php wp_body_open(); ?>
