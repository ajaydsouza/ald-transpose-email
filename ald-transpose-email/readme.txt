=== Transpose Email ===
Tags: Transpose Email, email, contact
Contributors: Ajay D'Souza

Keeps your email safe from spammers when you want to use mailto: links.


== Installation ==

1. Unzip ald-transpose-email.zip as is into your plugins folder, usually `wp-content/plugins/`
You will get files `wp-content/plugins/ald-transpose-email.php` and `wp-content/plugins/ald-transpose-email/ald-transpose-email.js`
2. Activate the plugin on the plugin screen
3. Add <a href="javascript:Transpose_Email('user','domain.com','About your site') ">Email Me</a>. Change user and domain.com to match your email address.


== Frequently Asked Questions ==

= What are the requirements for this plugin? =

1. WordPress 1.5 or above 
2. The user's browser needs to have JavaScript enabled

= Can I customize what is displayed? =

Yes, you can. The javascript function accepts the following arguments:
1. userid - The part that comes before the @ in your email address e.g. my email address is me@ajaydsouza.com, so I enter it as me
2. domain - The part that comes after the @ in your email address e.g. my email address is me@ajaydsouza.com, so I enter it as ajaydsouza.com
3. subject - The subject line of the email you will receive. 

For more information, please visit http://www.ajaydsouza.com/wordpress/plugins/transpose-email-plugin/#customizing

= Do I really need this plugin? =
This plugin would be useful when you don't want to use your contact form and instead use mailto: links. Using mailto: has the drawback of spambots finding your email address. This plugin encrypts your emailaddress, thus keeping you safe from spammers.
