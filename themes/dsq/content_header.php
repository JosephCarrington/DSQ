<?php $bg_color = get_field('header_background_color');
	$rgb_bg_color = hex2rgb($bg_color);

	$header_bg_image = get_field('header_background_image');
	$header_bg_image_2x = get_field('header_background_image_2x');
	$header_bg_image_4x = get_field('header_background_image_4x');
	$header_stretch = get_field('background_image_size') == 'stretch' ? true : false;
	$header_color = get_field('header_color');
	?>
	<style type='text/css'>
		/* Inline(ish) stylesheet. Gross! */
		#header-<?php the_ID(); ?>
		{
			background: transparent url('<?php echo $header_bg_image; ?>') center top no-repeat;
		}
		#header-<?php the_ID(); ?> h1,
		#header-<?php the_ID(); ?> h2,
		#header-<?php the_ID(); ?> h3
		{
			color: <?php echo $header_color; ?>;
		}
			
		@media 
		(-webkit-min-device-pixel-ratio: 2), 
		(min-resolution: 192dpi) { 
			#header-<?php the_ID(); ?>
			{
				background: transparent url('<?php echo $header_bg_image_2x; ?>') center top no-repeat;
			}
		}
	</style>
<header class='content-header-wrapper header-<?php the_title_attribute(); ?>' id='header-<?php the_ID(); ?>'>
	<hgroup class='content-header' style='background-color: rgba(<?php echo $rgb_bg_color[0] . ',' . $rgb_bg_color[1] . ',' . $rgb_bg_color[2]; ?>, 0.75);' >
		<?php if(get_field('sub-subtitle')) echo "<h3>" . get_field('sub-subtitle') . "</h3>"; ?>
		<h1><?php the_title(); ?></h1>
		<?php if(get_field('subtitle')) echo "<h2>" . get_field('subtitle') . "</h2>"; ?>
	</hgroup>
</header>
