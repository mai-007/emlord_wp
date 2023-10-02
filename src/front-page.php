<?php get_header(); ?>
<main>
  <?php if ( is_active_sidebar('main-sidebar') ) : ?>
  <ul class="menu">
    <?php dynamic_sidebar('main-sidebar'); ?>
  </ul>
  <?php endif; ?>
</main>
<?php
get_sidebar();
get_footer();
?>