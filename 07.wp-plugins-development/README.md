# Create Basic Plugins 

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
