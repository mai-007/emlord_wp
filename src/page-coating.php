<?php
/*
Template Name: コーティング
*/
?>
<?php get_header(); ?>
<section class="l-section03--bg01 p-coating">
  <div class="l-containerM">
    <h1 class="c-title__l">硬度9Hの硬さで塗装を守り<br>
いつまでも輝き続けるコーティングを。</h1>
    <picture class="p-coating__movie">
      <source media="(max-width:799px)" srcset="<?php echo get_theme_img('coating/#');?>" sizes="100vw">
      <source media="(min-width:800px)" srcset="<?php echo get_theme_img('coating/movieImage.jpg');?>" sizes="100vw">
      <img src="<?php echo get_theme_img('coating/movieImage.jpg');?>">
    </picture>
    <div class="p-coating__text01">
      <p>
      どこにもない多層ガラスコーティングで、まるで新車のような輝きが続く。<br>
  施行後は水洗いだけで汚れが落ちるから、洗車もお手入れも簡単に。
      </p>
      <p>
      進化し続ける最上級の技術力で、新しいカーライフをお届けすることがエムロードの使命です。
      </p>
    </div>
    <!--LinkInPage -->
    <div class="c-linkInPage">
      <button class="c-linkInPage__btn">
        <a href="#">施工の流れ</a>
      </button>
      <button class="c-linkInPage__btn">
        <a href="#">料　金</a>
      </button>
      <button class="c-linkInPage__btn">
        <a href="#">よくある質問</a>
      </button>
    </div>
  </div>
</section>
<?php get_footer(); ?>
