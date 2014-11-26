<?php get_header(); ?>
	<?php if(have_posts()) while(have_posts()) : the_post(); ?>
		<article id='main-content'>
			<?php get_template_part('content_header'); ?>
			<div class='content-body'>
				<?php the_content(); ?>
			</div><!-- .cpntent-body -->
		</article><!-- #main-content -->

	<?php endwhile; ?>
<?php get_footer(); ?>
