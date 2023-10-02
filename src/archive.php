<?php get_header(); ?>

<main>
  <?php if ( have_posts() ) : ?>
    <header class="page-header">
      <?php
      the_archive_title( '<h1 class="page-title">', '</h1>' );
      the_archive_description( '<div class="archive-description">', '</div>' );
      ?>
    </header>

    <?php while ( have_posts() ) : the_post();?>
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <?php the_title(); ?>
        <?php the_content();?>

      </article>
      <?php the_posts_navigation(); ?>
    <?php endwhile; ?>
  <?php endif; ?>
</main>

<?php
get_sidebar();
get_footer();