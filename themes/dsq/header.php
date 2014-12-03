<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
	<script>try{Typekit.load();}catch(e){}</script>
</head>

<body <?php body_class(); ?>>
<header id='main-header'>
	<div id='title-and-menu-button-wrapper'>
		<h1 id='site-title'><a href='<?php bloginfo('url'); ?>' title='Home'>
			<?php
				// A little script to emphasize the first word.
				$site_title = get_bloginfo('name');
				$title_words = explode(' ', $site_title);
				$first_word = array_shift($title_words);
				$title_string = "<strong>$first_word</strong>";
				foreach($title_words as $word)
				{
					$title_string .= " $word";
				}

				echo $title_string;
			?>
		</a></h1>

		<nav id='main-navigation-large' role='navigation'>
			<?php wp_nav_menu(array(
				'theme_location' => 'primary_left',
				'container' => ''
			)); ?>
			<?php wp_nav_menu(array(
				'theme_location' => 'primary_right',
				'container' => ''
			)); ?>
		</nav>
		<i id='menu-button'>
			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 32 32">
				<rect x="0" y="3" fill="#fff" width="32" height="5" rx="3" ry="3"/>
				<rect x="0" y="14" fill="#fff" width="32" height="5" rx="3" ry="3"/>
				<rect x="0" y="25" fill="#fff" width="32" height="5" rx="3" ry="3"/>
			</svg>
		</i><!-- #menu-button -->
	</div><!-- #title-and-menu-button-wrapper -->
	<nav id='main-navigation' role='navigation'>
		<?php wp_nav_menu(array(
			'theme_location' => 'primary_mobile',
			'container' => ''
		)); ?>
	</nav>
</header>
