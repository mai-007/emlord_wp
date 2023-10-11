<?php get_header(); ?>

<main class="c-notFound__wrap">
  <h1 class="c-notFound__title">404エラー</h1>
  <p class="c-notFound__text">お探しのページは見つかりませんでした。</p>
  <button class="c-btnWrap">
    <a href="<?php echo home_url();?>">トップページへ戻る</a>
  </button>
</main>

<?php
get_footer();
