<?php get_header(); ?>

<main>
  <ul class="p-archive">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <li>
      <a href="<?php the_permalink(); ?>">
      <h2><?php the_title(); ?></h2>
      <time><?php the_time('Y.m.d'); ?></time>
      <?php the_content(); ?>
      </a>
    </li>
  <?php endwhile; endif; ?>
  </ul>
</main>

<?php get_footer(); ?>
