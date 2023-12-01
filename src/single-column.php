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
          <?php echo get_the_date(); ?>
        </span>
      </div>
      <div class="p-single__image">
        <?php if (has_post_thumbnail()) : ?>
        <?php the_post_thumbnail('thumbnail'); ?>
        <?php else : ?>
        <img src="<?php echo get_theme_img('common/carLife_noimage.jpg'); ?>" alt="" />
        <?php endif; ?>
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
