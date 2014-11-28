<?php get_header(); ?>
	<?php if(have_posts()) while(have_posts()) : the_post(); ?>
		<article id='main-content'>
			<?php get_template_part('content', 'front'); ?>
			<?php
				$children = new WP_Query(array(
					'post_parent' => get_the_ID(),
					'post_type' => 'page',
					'post_status' => 'publish',
					'orderby' => 'menu_order'
				));
				if($children->have_posts()) while($children->have_posts()) : $children->the_post();
					get_template_part('content', 'front');
				endwhile;
			?>
		</article><!-- #main-content -->

	<?php endwhile; ?>
<?php get_footer(); ?>
