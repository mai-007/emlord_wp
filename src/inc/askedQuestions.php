<section id="QA" class="l-section03--bg01 c-qa">
  <div class="l-containerM">
  <div class="c-title">
    <h2 class="c-title__l">よくある質問</h2>
      <p class="c-title__l__sub">Asked Questions</p>
  </div>
    <?php if(have_rows('AskedQuestion')): ?>
      <?php while(have_rows('AskedQuestion')): the_row(); ?>
      <dl class="c-qa__item">
        <dt class ="c-qa__item__question">
          <?php the_sub_field('question');?>
        </dt>
        <dd class ="c-qa__item__answer">
          <?php the_sub_field('answer');?>
        </dd>
      </dl>
      <?php endwhile; ?>
    <?php endif; ?>
  </div>
</section>
