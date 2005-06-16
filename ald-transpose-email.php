<?php

/*

Plugin Name: Transpose Email
Version: 1.0
Plugin URI: http://www.ajaydsouza.com/wordpress/plugins/transpose-email-plugin/
Description: Keeps your email safe from spammers when you want to use mailto: links.
Author: Ajay D'Souza 
Author URI: http://www.ajaydsouza.com/

*/

//define function to spit out include in head
function ald_transpose_email()
{

?>

<script type="text/javascript">
<!-- //Email encrypted
	function Transpose_Email(userid,domain,subject)
	{
		var email = domain +'@' + userid;
		var TempBefore = '';
		var TempAfter = '';
		var NewString = '';
		var Start = 0;
		
		var WhereHash = email.indexOf ('@');
		for (Count = 1; Count <= WhereHash; Count ++)
		{
			TempBefore += email.substring (Start, Count);
			Start++
		}
		Start = WhereHash;
		Start ++
		WhereHash +=2;
		for (Count = WhereHash; Count <=email.length; Count++)
		{
			TempAfter +=email.substring (Start, Count)
			Start++
		}
		NewString = TempAfter +'@' + TempBefore;
		parent.location = 'mailto:'+NewString+'?subject='+subject;
	}

// -->
</script>

<?php
}


//add action when the head is written
add_action('wp_head', 'ald_transpose_email');

?>