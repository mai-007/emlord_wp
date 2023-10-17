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

<?php if ( is_home() || is_front_page() ) : ?>
  <section id="js-vegas" class="l-mainView">
</section>
<?php endif; ?>

<?php if(!(is_home() || is_front_page())): ?>
  <div class="l-headerSub">
    <h2 class="l-headerSub__title"><?php the_title(); ?></h2>
</div>
  <?php endif; ?>

  <?php if(!(is_home() || is_front_page())): ?>
    <?php breadcrumb(); ?>
  <?php endif; ?>
<?php wp_body_open(); ?>
