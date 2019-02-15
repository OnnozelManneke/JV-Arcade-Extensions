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
	'JVA_GAME_DANGEROUS_DISABLE'			=> 'Dangerous games disabled',
	'JVA_GAME_DANGEROUS_DISABLE_EXPLAIN'	=> 'Some games may compromise the proper operation of the server, because they are transferring data in the background and reloading the web page several times. This greatly increases server load, and such games are automatically disabled for security. Here, however, you have the option to turn off this automatic blocking function at your own risk.',
	'JVA_GAME_INTRO'						=> 'JVA Game Intro',
	'JVA_GAME_INTRO_EXPLAIN'				=> 'Before the game starts, an introductory is loaded, which includes a game description, control and scores list.<br>Furthermore, read the detailed description %sHERE%s.',
	'JVA_GAME_INTRO_GAME_PRELOAD'			=> 'Display game loading',
	'JVA_GAME_INTRO_GAME_PRELOAD_EXPLAIN'	=> 'The game core file(s) will only be loaded in the browser cache. If it is not enabled for your browser cache, then the file(s) will be loaded twice, so this method can only slow down the games starting.<br><em>Using the browser’s cache is highly recommended for all users!</em>',
	'JVA_GAME_INTRO_LOGO'					=> 'Text logo',
	'JVA_GAME_INTRO_LOGO_COLOR'				=> 'Logo color',
	'JVA_GAME_INTRO_LOGO_EXPLAIN'			=> 'If you enter a text here, it will overwrite the original logo and display it. However, you have the ability to create your own image logo, which can be uploaded to the server under “[root]/arcade/start_system/jva_game_intro/images/logo.png”, the image logo overwrites everything.',
	'JVA_GAME_INTRO_LOGO_SHADOW_COLOR'		=> 'Logo shadow color',
	'JVA_GAME_INTRO_MUSIC'					=> 'Enable music',
	'JVA_GAME_INTRO_MUSIC_EXPLAIN'			=> 'You can enable or disable music playback for the game intro here. Music is randomly loaded from files 1-3. You can replace music files at any time, but keep the file names and the two basic formats available (ogg and mp3).',
	'JVA_GAME_INTRO_MUSIC_FLD'				=> 'Music type',
	'JVA_GAME_INTRO_MUSIC_FLD_DEFAULT'		=> 'Default',
	'JVA_GAME_INTRO_MUSIC_FLD_GAME'			=> 'Game',
	'JVA_GAME_INTRO_MUSIC_FLD_CHRISTMAS'	=> 'Christmas',
	'JVA_GAME_INTRO_PRIVATE_SETTINGS'		=> 'All settings are only available if the founder has activated “JVA Start System” with a private key.',
	'JVA_GAME_INTRO_SCORES'					=> 'Number of scores',
	'JVA_GAME_INTRO_SCORES_EXPLAIN'			=> 'The specified value will be listed according to the results achieved.',
	'JVA_SS_LOCAL_STORAGE'					=> 'Local storage',
	'JVA_SS_LOCAL_STORAGE_EXPLAIN'			=> 'Local storage works similarly to cookies. Data is stored on our device. Unfortunately, some games can be manipulated, for example, the game level or your score. Here you have the opportunity to prevent manipulation of data by users. This, however, has the disadvantage that the level reached is ignored in the restart of the game. Note that a “score” variable filtering has been installed. So if you do not disable the entire local storage service, even if there is a “score” variable, then its value will always be reset. However, there may be games that do not have this variable name, so it is better to disable this service for 100% security.',
));
