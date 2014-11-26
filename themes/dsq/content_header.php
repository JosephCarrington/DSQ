<?php $bg_color = get_field('header_background_color');
$rgb_bg_color = hex2rgb($bg_color);
?>
<header class='content-header' style='background-color: rgba(<?php echo $rgb_bg_color[0] . ',' . $rgb_bg_color[1] . ',' . $rgb_bg_color[2]; ?>, 0.75);'>
	<hgroup>
		<h1><?php the_title(); ?></h1>
		<?php if(get_field('subtitle')) echo "<h2>" . get_field('subtitle') . "</h2>"; ?>
		<?php if(get_field('sub-subtitle')) echo "<h3>" . get_field('sub-subtitle') . "</h3>"; ?>
	</hgroup>
</header><!-- .content-header -->

