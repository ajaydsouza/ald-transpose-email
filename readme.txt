=== Transpose Email ===
Tags: Transpose Email, email, contact
Contributors: Ajay D'Souza

Keeps your email safe from spammers when you want to use mailto: links.


== Installation ==

1. Upload to your plugins folder, usually `wp-content/plugins/`
2. Activate the plugin on the plugin screen
3. Add <a href="javascript:Transpose_Email('user','domain.com','About your site') ">Email Me</a>. Change user and domain.com to match your email address.


== Frequently Asked Questions ==

= What are the requirements for this plugin? =

1. WordPress 1.5 or above 
2. The user's browser needs to have JavaScript enabled

= Example of the output? =

	Bad Behavior has blocked 13 access attempts in the last 7 days.

= Can I customize what is displayed? =

Yes, you can. The javascript function accepts the following arguments:
1. userid - The part that comes before the @ in your email address e.g. my email address is me@ajaydsouza.com, so I enter it as me
2. domain - The part that comes after the @ in your email address e.g. my email address is me@ajaydsouza.com, so I enter it as ajaydsouza.com
3. subject - The subject line of the email you will receive. 

For more information, please visit http://www.ajaydsouza.com/wordpress/plugins/bad-behavior-stats-plugin/#customizing

= Do I really need this plugin? =
This plugin would be useful when you don't want to use your contact form and instead use mailto: links. Using mailto: has the drawback of spambots finding your email address. This plugin encrypts your emailaddress, thus keeping you safe from spammers.
