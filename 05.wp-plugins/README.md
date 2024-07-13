# Wordpress Plugins 

> clasic Editor

> Slider

> 



```
<?php
/*
Plugin Name: Ducat
Plugin URI: http://www.ducatindia.com
Description: Customise WordPress Plugin By punit Katiyar
Version: 1.0.1
Author: Punit Katiyar
Author URI: http://www.myunitbook.com/
License: GPL
Copyright: Ducat India
*/
add_shortcode("ducat",ducatf);

function ducatf()
{?>
<form method="post">
<p>Contact Form</p>
<p>Name <input type="text" name="name1"></p>
<p>Email <input type="text" name="email1"></p>
<p>Subject <input type="text" name="sub"></p>
<p>Message <input type="text" name="msg"></p>
<p> <input type="submit" name="sub" value="Submit"></p>
</form>
	<?php }
	global $wpdb;
	//$wpdb->query("");
	//wpdb->get_results("select * from `tablename`");
	if($_REQUEST['sub']){
				
	}
?>
```
