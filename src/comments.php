<?php
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">
	<?php if ( have_comments() ) : ?>
		<?php the_comments_navigation(); ?>
		<ul>
			<?php
				wp_list_comments(
					array(
						'avatar_size' => 130,
					)
				);
			?>
		</ul>
		<?php the_comments_navigation(); ?>
	<?php endif; ?>
	<?php if ( comments_open() ) : ?>
		<?php comment_form(); ?>
	<?php endif; ?>
</div>