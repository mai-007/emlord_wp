<?php get_header(); ?>
<main>

  <section class="l-section01 l-flexRowToColumn">
    <?php include('inc/information.php'); ?>

    <div class="c-sns-nav u-pc">
      <?php include('inc/sns.php'); ?>
    </div>
    <section class="c-news l-section--half">
      <div class="c-title--half" aria-labelledby="carousel-heading">
        <h3 id="carousel-heading" class="c-title__m">カーライフ豆知識</h3>
        <p class="c-title__m__sub">good car life</p>
      </div>
      <div id="slider3" class="splide splide02">
        <div class="splide__track">
          <ul class="splide__list">
            <?php
        $my_posts = array(
        'post_type' => 'column', // 投稿タイプを設定
        'posts_per_page' => '4', // 表示する記事数を設定
        ); 
        $the_query = new WP_query($my_posts);
        if ($the_query->have_posts()):
        ?>
            <?php while($the_query->have_posts()): $the_query->the_post(); ?>
            <li class="c-news__card splide__slide">
              <a href="<?php the_permalink(); ?>">
                <figure class="c-news__card__image">
                  <?php if (has_post_thumbnail()) : ?>
                  <?php the_post_thumbnail('thumbnail'); ?>
                  <?php else : ?>
                  <img src="<?php echo get_theme_img('common/carLife_noimage.jpg'); ?>" alt="" />
                  <?php endif; ?>
                </figure>
                <div class="c-news__card__inner">
                  <h4 class="c-news__card__title">
                    <?php
                if(mb_strlen($post->post_title)>20) {
                  $title= mb_substr($post->post_title,0,20) ;
                    echo $title . '...';
                  } else {
                    echo $post->post_title;
                  }
                ?>
                  </h4>
                  <time class="c-news__card__date" datetime="<?php echo get_the_date(); ?>">
                    <?php echo get_the_date(); ?>
                  </time>
                </div>
              </a>
            </li>
            <?php endwhile;?>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
          </ul>
        </div>
        <div class="splide__arrows c-news__card__change">
          <button class="splide__arrow splide__arrow--prev button prev"></button>
          <button class="splide__arrow splide__arrow--next button next"></button>
        </div>
      </div>
    </section>

    <section class="c-instagram l-section--half">
      <div class="c-title--half">
        <h3 class="c-title__m">インスタグラム</h3>
        <?php echo do_shortcode('[instagram-feed feed=2]'); ?>
      </div>
    </section>
  </section>

  <section id="slider4" class="l-section02--bg01 splide splide03">
    <div id="js-slide" class="splide__track">
      <ul class="splide__list u-align-center">
        <li class="splide__slide">
          <a href="<?php echo esc_url( home_url('coating') ); ?>">
            <img src="<?php echo get_theme_img('slide_02/sd_coating.jpg'); ?>" alt="">
          </a>
        </li>
        <li class="splide__slide">
          <a href="<?php echo esc_url( home_url('oil') ); ?>">
            <img src="<?php echo get_theme_img('slide_02/sd_oil2.jpg'); ?>" alt="">
          </a>
        </li>
        <li class="splide__slide">
          <a href="<?php echo esc_url( home_url('carwash') ); ?>">
            <img src="<?php echo get_theme_img('slide_02/sd_sensha.jpg'); ?>" alt="">
          </a>
        </li>
        <li class="splide__slide">
          <a href="<?php echo esc_url( home_url('recruit') ); ?>">
            <img src="<?php echo get_theme_img('slide_02/sd_recruit.gif'); ?>" alt="">
          </a>
        </li>
      </ul>
    </div>
    <div class="splide__progress">
      <div class="splide__progress__bar">
      </div>
    </div>
  </section>

  <section class="l-section02--bg02">
    <?php include('inc/service-section.php'); ?>
  </section>
  <?php include('inc/map.php'); ?>

  <!-- About -->
  <section class="l-section02--bg03 p-company">
    <div class="l-containerM">
      <img class="p-company__logo" src="<?php echo get_theme_img('common/logo.png'); ?>" alt="エムロード ロゴ">
      <div class="c-title">
        <h3 class="c-title__l">エムロードは<span class="u-gold">車のトータルサポート</span>企業です</span></h3>
        <p class="c-title__l__sub">Total support</p>
      </div>
      <p class="c-title__text">
        この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。
      </p>
      <button class="c-button01">
        <a href="company">
          会社案内
          <img class="c-button01__image" src="<?php echo get_theme_img('common/arrow_right-small-white.svg'); ?>"
            alt="">
        </a>
      </button>
    </div>
  </section>

  <!-- Services for Businesses -->
  <section class="l-section02 p-business">
    <div class="l-containerM">
      <div class="c-title">
        <h3 class="c-title__l">
          <span class="u-gold">企業</span>向けサービス
        </h3>
        <p class="c-title__l__sub">
          Services for Businesses
        </p>
        <p class="c-title__text">
          エムロードでは多数の法人様へのサービスも行っております。<br>
          お気軽にお問い合わせください。
        </p>
      </div>
      <div class="p-business__content">
        <?php include('inc/business.php'); ?>
      </div>
  </section>

  <section class="l-section02--bg03 p-recruit">
    <div class="l-containerM">
      <div class="c-title">
        <h3 class="c-title__l">
          <span class="u-gold">採用</span>について
        </h3>
        <p class="c-title__l__sub">
          Recruit
        </p>
        <p class="c-title__text">
          人が好き過ぎて面倒見すぎてしまう。<br>そんな、人と会社と熊本を輝かせる企業で一緒に働きませんか？
        </p>
      </div>
      <button class="c-button01">
        <a href="https://www.emlord.co.jp/recruit/">
          採用情報ページへ
          <img class="c-button01__image" src="<?php echo get_theme_img('common/arrow_right-small-white.svg'); ?>"
            alt="">
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
      <source media="(max-width: 799px)" srcset="<?php echo get_theme_img('frontpage/sd_youtube.jpg'); ?>" sizes="100%">
      <source media="(min-width: 800px)" srcset="<?php echo get_theme_img('frontpage/sd_youtube.jpg'); ?> w849,
  <?php echo get_theme_img('frontpage/sd_youtube@2x.jpg'); ?> w1695," sizes="849px">
      <img src="<?php echo get_theme_img('frontpage/sd_youtube.jpg'); ?>" alt="">
    </picture>
    <button class="c-button01">
      <a href="movie">
        動画・CM一覧へ
        <img class="c-button01__image" src="<?php echo get_theme_img('common/arrow_right-small-white.svg'); ?>" alt="">
      </a>
    </button>
  </section>
</main>
<?php
get_footer();
?>
