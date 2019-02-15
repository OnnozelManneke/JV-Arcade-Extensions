<?php
/**
*
* @package phpBB Arcade - JVA Start System
* @version $Id$
* @author 2011-2019 KillBill - killbill@jatek-vilag.com
* @copyright (c) 2014-2019 https://jv-arcade.com/ - support@jv-arcade.com
* @license https://jv-arcade.com/License.html JVA License v1
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
// Some characters you may want to copy&paste: ‚ ‘ ’ « » „ “ ” …

$lang = array_merge($lang, array(
	'ACP_JVA_START_SYSTEM_INSTRUCTION'			=> 'JVA Start System Instructions',
	'ACP_JVA_START_SYSTEM_INSTRUCTION_EXPLAIN'	=> 'The “JVA Start System” software is <a onclick="window.open(this.href); return false;" href="%3$s" title="JVA License">licensed</a> and maintained by “%1$s” website.',
	'ACP_JVA_START_SYSTEM_EXPLAIN'				=> '<legend>JVA Start System detailed description</legend>
Data sent during activation can be used to determine the level of status of the website concerned at “%2$s”.<br>
Additionally, the specified activation key will tell us that the affected site is sharp or just a test webpage.<br><br>
<div>Stored personal data after activation:</div>
<ul>
	<li>Own JVA Start System identifier</li>
	<li>Website address of the activator</li>
	<li>User name of the activator</li>
	<li>IP address of the activator</li>
	<li>E-mail address of the activator</li>
	<li>Used phpBB version number</li>
	<li>Used phpBB Arcade version number</li>
	<li>Activation date</li>
	<li>Activation key</li>
	<li>Activation-dependend wait time to skip advertising</li>
</ul>

<div>Registered websites allow you to retrieve additional personal data from the “%2$s” website:</div>
<ul>
	<li>User name of the activating person at “%2$s”</li>
	<li>Group of the activating person at “%2$s”</li>
	<li>E-mail address of the activating person at “%2$s”</li>
</ul>

<div>Use of personal data:</div>
<ul>
	<li>The JVA Start System identifier helps you to let your site identify safely.</li>
	<li>The web address is an opportunity to check if the web site is registered in the “%2$s” website.</li>
	<li>The user name provides an opportunity to determine whether the user concerned is known on the “%2$s” website.</li>
	<li>The IP address will be used when the user has committed a law or a criminal offense.</li>
	<li>The e-mail address is used when we need to contact the affected user.</li>
	<li>Based on the phpBB- and phpBB Arcade version, we can determine whether the website concerned is compliant or not.</li>
	<li>The activation key will determine what the website concerned is entitled.</li>
	<li>Advertising wait time is the time when the user is entitled to skip the advertisement.</li>
</ul>

<br>

<h2>JVA Game Intro detailed description</h2>
<hr>
<div>Administrator functions:</div>
<ul>
	<li>The “JVA Game Intro” allow a number of settings. First, you can choose if you wish to display the Intro or not. If the display is not desired, the game is loaded immediately.</li>
	<li>You can also define your own logo, for which there are three options:
		<ol>
			<li>The basic logo appears.</li>
			<li>You can create a text logo which overwrites the basic logo.</li>
			<li>You can create your own image logo, named “logo.png” and upload it into “[root]/arcade/start_system/jva_game_intro/images/” that overrides all.</li>
		</ol>
	</li>
	<li>Many games are very large. They can be up to 100 MB. Because of this, the user may only see a white page loading for a long time and believes that the game is broken. To avoid this, you can turn on the loading indicator for the games so that you can see the game is still loading.<br>
		<strong>Comment:</strong>This option only applies to Flash games. The game will only be loaded in the browser cache. If it is not enabled for your browser cache, then the game will be loaded twice, so this method can only slow down the games starting.<br>
		<em>This feature is useless if you disable the browser’s cache.</em>
	</li>
	<li>You can set the amount of highscores to be shown and this value can be between 3 and 8.</li>
	<div>Please note, that these settings can only be used with a system activated by a private key. These settings are not available on a system activated by a free key.</div>
</ul>

<div>User functions:</div>
<ul>
	<li>The “JVA Game Intro” allows users to see the game description, control, and the current toplist before the game starts.</li>
	<li>Displays up to 8 of the highest scoring users and lets you know the current Super Champion.</li>
</ul>

<br>

<h2>„%1$s” Communications features</h2>
<hr>
<ul>
	<li><span>A connection is established to the “%1$s” website when a game is launched.</span>
		<div><span>The connection will send the following data:</span></div>
		<ol>
			<li>The encoded own JVA Start System identifier (one-way hash format).</li>
			<li>The current version of “JVA Game Intro”.</li>
			<li>Encoded address (PHP Base64) of the website that uses the software.</li>
			<li>The encoded activation key (one-way hash format) of “JVA Start System”.</li>
			<li>The current version of the phpBB Arcade.

				<br><br>

				<div><span>The role of data to be sent:</span></div>
				<ol>
					<li>The JVA Start System identifier helps us to identify your site safely.</li>
					<li>The “JVA Game Intro” version check helps to be able to send a warning if you are not using a compatible version, or if a new version was released.</li>
					<li>The website address is very important because, based on this, we can return the information we need.</li>
					<li>More about the role of activation key:
						<ol>
							<li>The main difference between “Test” and “Free” is when a wait time is activated. “Test” activated sites can have a higher wait time, and the site is classified as a “test page”. The “Test” and “Free” activated software may display advertising.<br>
								The waiting time turns on and can be determined by the “%2$s”.<br>
								The “Test” and the “Free” versions have no expiration date.
							</li>
							<li>A private key can have an expiration date or a particular phpBB Arcade version. Private key activated software is fully exempt from advertising. <em>This only concerns the “JVA Game Intro”</em>.</li>
						</ol>
					</li>
					<li>Checking the phpBB Arcade version is also very important that the “JVA Game Intro” is compatible with the given version.</li>
				</ol>
			</li>
		</ol>
	</li>
	<li>With these communication options, the number of times that games are started is stored and transferred to a statistic. Based on these statistics, the current rank of this website is determined. For more information <a onclick="window.open(this.href); return false;" href="%5$s"><strong>» HERE «</strong></a>.</li>
	<li>If advertising is sent from our web site or set a waiting period, it is set so that it appears before the game starts. If the “JVA Game Intro” is not turned on, it is automatically activated.</li>
	<li>This information is returned in two ways:
		<ol>
			<li>Smooth update information sends back “%1$s” to you. It appears in “JVA Game Intro”. This information will only be visible to the founders and will not block the game.</li>
			<li>Global information, which uses the full “JVA Game Intro” interface, to enable further information so the game does not work.
				<div><span>The reasons for the appearance of a global information:</span></div>
				<ol>
					<li>An instant update is needed.</li>
					<li>The activation key has expired. In this case, you must re-activate the software. In the Administrator Control Panel choose “Test” or “Free”, if you have a new private key you can use it.</li>
					<li>The software user violates the <strong>“<a onclick="window.open(this.href); return false;" href="%4$s" title="JVA Licenc">license</a>”</strong> contract, or a <strong>unregistered</strong> website is used. In either case, use of the software can be disabled.</li>
				</ol>
			</li>
		</ol>
	</li>
	<li>The “%1$s” can send back the following information:
		<ol>
			<li>Check websites.</li>
			<li>Waiting time.</li>
			<li>Advertising.</li>
			<li>Update information return.</li>
			<li>Global information return.</li>
			<li>The “%2$s” states that it can not and does not want to do any database changes implemented in other websites during the connection! It is very important to have 100% security between the two servers during the connection.<br>That is why the software can only be activated by the founder of the website.</li>
		</ol>
	</li>
	<li>On localhost the use of a “JVA Game Intro” is not supported, but the software can run. On the localhost there is no data connection, but the waiting time is set to 5 seconds by default.</li>
</ul>
</fieldset>',
));
