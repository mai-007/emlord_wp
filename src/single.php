<?php get_header(); ?>

<main>
  <?php while (have_posts()) : the_post(); ?>
  <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <article class="p-single">
      <div class="p-single__header">
        <h2 class="p-single__header__title">
          <?php the_title(); ?>
        </h2>
        <span class="p-single__header__date">
          <img src="<?php echo get_theme_img('common/time.svg'); ?>" alt="">
          <?php echo get_the_date(); ?>
        </span>
        <span class="p-single__header__tag">
          <a href="#">
            <?php the_author_meta('nickname'); ?>
          </a>
        </span>
      </div>
      <div class="p-single__contents">
        <?php the_content(); ?>
      </div>
    </article>
  </div>

  <?php the_post_navigation(); ?>
  <?php endwhile; ?>

</main>

<?php
get_footer();
