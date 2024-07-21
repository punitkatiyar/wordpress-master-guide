# Create Basic Plugins 

## define plugins

```
<?php
/*
Plugin Name: techbook
Plugin URI: https://www.techunitbook.com
Description: Customise WordPress Plugin By punit Katiyar
Version: 1.0.1
Author: Punit Katiyar
Author URI: http://www.myunitbook.com/
License: GPL
Copyright: Tech Unit Book
*/
?>
```


## plugins with HTML Document

```
<?php
// Add Shortcode
function custom_shortcode() {
    return "<h1>Hello</h1>";

}
add_shortcode( 'punit', 'custom_shortcode' );


?>
```

## plugins with passing argument

```
// Add Shortcode
function video_embed_shortcode( $atts ) {

	// Attributes
	$atts = shortcode_atts(
		array(
			'src' => '',
			'width' => '',
			'height' => '',
		),
		$atts,
		'video_embed'
	);

	// Return custom embed code
	return '<embed 
	         src="' . $atts['src'] . '"
	         width="' . $atts['width'] . '"
	         height="' . $atts['height'] . '"
	         type="application/x-shockwave-flash"
	         allowscriptaccess="always"
	         allowfullscreen="true">';

}
add_shortcode( 'video_embed', 'video_embed_shortcode' );
```

## add post with custom limit

```
// Add Shortcode
function recent_posts_shortcode( $atts , $content = null ) {

	// Attributes
	$atts = shortcode_atts(
		array(
			'posts' => '5',
		),
		$atts,
		'recent-posts'
	);

	// Query
	$the_query = new WP_Query( array ( 'posts_per_page' => $atts['posts'] ) );
	
	// Posts
	$output = '<ul>';
	while ( $the_query->have_posts() ) :
		$the_query->the_post();
		$output .= '<li>' . get_the_title() . '</li>';
	endwhile;
	$output .= '</ul>';
	
	// Reset post data
	wp_reset_postdata();
	
	// Return code
	return $output;

}
add_shortcode( 'recent-posts', 'recent_posts_shortcode' );
```
