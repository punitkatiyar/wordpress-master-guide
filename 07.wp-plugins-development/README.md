# Create Basic Plugins 

## plugins with document 

```
<?php
/*
Plugin Name: unit
Plugin URI: http://www.ducatindia.com
Description: Customise WordPress Plugin By punit Katiyar
Version: 1.0.1
Author: Punit Katiyar
Author URI: http://www.myunitbook.com/
License: GPL
Copyright: Ducat India
*/

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
