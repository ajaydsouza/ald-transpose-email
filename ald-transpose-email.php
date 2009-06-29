<?php

/*

Plugin Name: Transpose Email
Version: 1.2.1
Plugin URI: http://www.ajaydsouza.com/wordpress/plugins/transpose-email-plugin/
Description: Keeps your email safe from spammers when you want to use mailto: links.
Author: Ajay D'Souza 
Author URI: http://www.ajaydsouza.com/

*/

//define function to spit out include in head

if (!function_exists('get_settings')) {
	$ald_blog_url = $_SERVER['SCRIPT_URI'];
	$ald_blog_url = preg_replace("/wp-content\\/plugins\\/ald-transpose-email\\.php$/", "", $ald_blog_url);
} else {
	$ald_blog_url = get_settings('siteurl');
}

function ald_transpose_email()
{
	global $ald_blog_url;
?>

<script type="text/javascript" src="<?php echo $ald_blog_url?>/wp-content/plugins/ald-transpose-email/ald-transpose-email.js"></script>

<?php
}


//add action when the head is written
add_action('wp_head', 'ald_transpose_email');

?>