<?php
// Register stylesheets
add_action('wp_enqueue_scripts', function() {
	wp_enqueue_script('typekit', '//use.typekit.net/mxv7pqv.js');
	wp_enqueue_script('main', get_stylesheet_directory_uri() . '/js/main.js', array('jquery', 'jquery-color'));
	wp_enqueue_style('style', get_stylesheet_uri());
});

add_action('after_setup_theme', function() {
	register_nav_menu('primary_left', 'Top Navigation - Left');
	register_nav_menu('primary_right', 'Top Navigation - Right');
	register_nav_menu('primary_mobile', 'Top Navigation - Mobile');
});

add_action('widgets_init', function() {
	register_sidebar(array(
		'name' => 'Bottom of Main Content',
		'id' => 'content-bottom'
	));

	register_sidebar(array(
		'name' => 'Footer',
		'id' => 'footer'
	));

	register_sidebar(array(
		'name' => 'Under Header',
		'id' => 'subheader'
	));

	register_sidebar(array(
		'name' => 'Social Section',
		'id' => 'social'
	));
});

/* Shortcodes... */
add_shortcode('dsq_register', function($atts) {
	$a = shortcode_atts( array(
		'text' => 'Register Now',
		'link_id' => 0
	), $atts);

	$product_link = get_permalink($a['link_id']);
	$return = "<a href='$product_link' title='Register' class='dsq-register'>" . $a['text'] . "</a>";
	return $return;
});

add_shortcode('dsq_giant_register', function($atts) {
	$a = shortcode_atts( array(
		'text' => 'Sign up now!',
		'price' => '$0',
		'text_2' => 'early bird discount',
		'text_3' => 'ends Dec. 19',
		'link_id' => 0
	), $atts);

	$product_link = get_permalink($a['link_id']);
	$return = "</div>";
	$return .= "<div class='dsq-giant-register'>";
		$return .= "<div class='dsq-giant-register-wrapper'>";
			$return .= "<a href='$product_link' title='Register' class='dsq-giant-register-link'>";
				$return .= "<div class='dsq-giant-register-left'>";
					$return .= "<div class='dsq-register-price'>" . $a['price'] . "</div>";
					$return .= "<div class='dsq-register-subtext'>";
						$return .= "<div class='dsq-register-subtext-1'>" . $a['text_2'] . "</div>";
						$return .= "<div class='dsq-register-subtext-2'>" . $a['text_3'] . "</div>";
					$return .= "</div>";
				$return .= "</div>";
				$return .= "<div class='dsq-giant-register-right'>";
					$return .= "<span class='giant-register-text'>" . $a['text'] . "</span>";
				$return .= "</div>";
			$return .= "</a>";
		$return .= "</div>";
	$return .= "</div>";
	$return .= "<div class='content-body'>";

	return $return;
});


add_shortcode('dsq_course_inner', function($atts, $content = null) {
	$a = shortcode_atts( array(
		'title' => 'Title',
		'subtitle' => 'subtitle',
		'subsubtitle' => 'subsubtitle'
	), $atts);
	$return = "<div class='dsq-course-inner'>";
		$return .= "<div class='course-header'>";
			$return .= "<h4>" . $a['title'] . "</h4>";
			$return .= "<h4>" . $a['subtitle'] . "</h4>";
			$return .= "<h5>" . $a['subsubtitle'] . "</h5>";
		$return .= "</div>";
		$return .= "<div class='course-body'>" . do_shortcode($content) . "</div>";
	$return .= "</div>";

	return $return;
});

add_shortcode('dsq_course_outer', function($atts, $content = null) {
	return "</div><div class='dsq-course-outer'>" . str_replace('<br />', '', do_shortcode($content)) . "</div><div class='content-body'>";
});

// Hax
remove_action( 'woocommerce_before_main_content','woocommerce_breadcrumb', 20, 0);

function hex2rgb($hex) {
   $hex = str_replace("#", "", $hex);

   if(strlen($hex) == 3) {
      $r = hexdec(substr($hex,0,1).substr($hex,0,1));
      $g = hexdec(substr($hex,1,1).substr($hex,1,1));
      $b = hexdec(substr($hex,2,1).substr($hex,2,1));
   } else {
      $r = hexdec(substr($hex,0,2));
      $g = hexdec(substr($hex,2,2));
      $b = hexdec(substr($hex,4,2));
   }
   $rgb = array($r, $g, $b);
   //return implode(",", $rgb); // returns the rgb values separated by commas
   return $rgb; // returns an array with the rgb values
}
