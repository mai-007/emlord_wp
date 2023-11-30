<?php get_header(); ?>

<main>
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <!-- ループさせるコンテンツをここにいれる -->
      <dl class="test-item">
        <dt class="test-date"><?php the_time('Y-m-d'); ?></dt>
        <dd class="test-title">
          <a href="<?php the_permalink(); ?>">
            <?php the_title(); ?>
          </a>
        </dd>
      </dl>
    <?php endwhile; ?>

    <?php
    // ページャーの表示
    the_posts_pagination(array(
      'prev_text' => __('前へ'),
      'next_text' => __('次へ'),
    ));
    ?>

  <?php endif; ?>
</main>

<?php get_footer(); ?>
