<?php get_template_part('content_header'); ?>
<div class='content-body'>
	<?php the_content(); ?>
	<?php if(get_field('registration_callout_top') OR get_field('registration_callout_bottom')) {
		if(get_field('registration_background'))
		{
			?>
			<style type='text/css'>
			.registration-callout-wrapper-<?php the_ID(); ?>
			{
				background: transparent url('<?php the_field("registration_background"); ?>') center center no-repeat;

			}
			</style>
			<?php
		}
		?>
		</div>
		<div class='registration-callout-wrapper registration-callout-wrapper-<?php the_ID(); ?>'>
			<?php if(get_field('registration_callout_top'))
			{
				?>
				<div class='registration-callout'><?php echo do_shortcode(get_field('registration_callout_top')); ?></div>
				<?php
			}

			if(get_field('registration_callout_bottom'))
			{
				?>
				<div class='registration-callout'><?php echo do_shortcode(get_field('registration_callout_bottom')); ?></div>
				<?php
			} ?>
		</div><!-- .registration-calllout-wrapper -->
		<div class='content-body'>
		<?php
	} ?>
	<?php if(get_field('quote')) {
		echo "<blockquote>" . get_field('quote');
		echo "<cite>" . get_field('quote_author') . "</cite>";
		echo "</blockquote>";
	} ?>
</div><!-- .content-body -->

