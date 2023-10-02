<?php get_header(); ?>

<main>

  <?php while ( have_posts() ) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

      <?php the_title(); ?>
      <?php the_content(); ?>

    </article>

    <?php the_post_navigation(); ?>

    <?php if ( comments_open() || get_comments_number() ) : ?>
        <?php comments_template(); ?>
    <?php endif; ?>

  <?php endwhile; ?>

</main>

<?php
get_sidebar();
get_footer();
