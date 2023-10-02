<?php get_header(); ?>

<main>

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

      <?php the_title(); ?>
      <?php the_content(); ?>

    </article>

  <?php the_posts_navigation(); ?>

  <?php endwhile; endif; ?>

</main>

<?php
get_sidebar();
get_footer();
