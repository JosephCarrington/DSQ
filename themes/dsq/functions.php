<?php
// Register stylesheets
add_action('wp_enqueue_scripts', function() {
	wp_enqueue_script('typekit', '//use.typekit.net/mxv7pqv.js');
	wp_enqueue_script('main', get_stylesheet_directory_uri() . '/js/main.js', ['jquery', 'jquery-color']);
	wp_enqueue_style('style', get_stylesheet_uri());
});

add_action('after_setup_theme', function() {
	register_nav_menu('primary', 'Top Navigation');
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
});

/* Shortcodes... */
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
