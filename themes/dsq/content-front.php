<?php get_template_part('content_header'); ?>
<div class='content-body'>
	<?php the_content(); ?>
	<?php if(get_field('quote')) {
		echo "<blockquote>" . get_field('quote');
		echo "<cite>" . get_field('quote_author') . "</cite>";
		echo "</blockquote>";
	} ?>
</div><!-- .content-body -->

