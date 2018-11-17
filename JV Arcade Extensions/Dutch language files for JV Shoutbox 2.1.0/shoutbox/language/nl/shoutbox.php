<?php
/**
*
* @package JV Shoutbox
* @version $Id$
* @author 2011-2018 KillBill - killbill@jatek-vilag.com
* @copyright (c) 2014-2018 https://jv-arcade.com/ - support@jv-arcade.com
* @license https://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
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
	'JV_SHOUTBOX'							=> 'Shoutbox',
	'JV_SHOUTBOX_AJAX_ERROR'				=> 'Er is een fout opgetreden tijdens de verwerking.',
	'JV_SHOUTBOX_AUTO_REFRESH_TIME_TITLE'	=> 'Automatisch vernieuwen iedere %d seconden',
	'JV_SHOUTBOX_BBCODES'					=> 'BBCodes',
	'JV_SHOUTBOX_BBCODES_FAQ'				=> 'BBCode FAQ',
	'JV_SHOUTBOX_CLOSE'						=> 'Shoutbox sluiten',
	'JV_SHOUTBOX_CONFIRM_DELETE_MSG'		=> 'Weet je zeker dat je het bericht wilt verwijderen?',
	'JV_SHOUTBOX_CUSTOM_BBCODES'			=> 'Aangepaste BBCodes',
	'JV_SHOUTBOX_DELETE_MESSAGE'			=> 'Verwijder bericht',
	'JV_SHOUTBOX_EDIT_MESSAGE'				=> 'Bewerk bericht',
	'JV_SHOUTBOX_EMPTY_MSG_ERROR'			=> 'Je kan geen leeg bericht verzenden.',
	'JV_SHOUTBOX_EXPLAIN'					=> 'Leden van openbaar gesprek.',
	'JV_SHOUTBOX_F_NEW_TOPIC'				=> '%3$s maakte een nieuw onderwerp in het forum %1$s: %2$s.',
	'JV_SHOUTBOX_F_NEW_POST'				=> '%3$s gaf commentaar in het forum %1$s bijdrage aan het onderwerp %2$s.',
	'JV_SHOUTBOX_F_NEW_POST_QUOTE'			=> '%3$s citeerde in het forum %1$s een bijdrage aan het onderwerp %2$s.',
	'JV_SHOUTBOX_F_EDITED_POST'				=> '%3$s bewerkte %1$s bijdrage in het onderwerp %2$s.',
	'JV_SHOUTBOX_IP_BUTTON_TITLE'			=> 'Gebruiker IP “%s” adres details',
	'JV_SHOUTBOX_MSG_EDITED_TIMES'			=> array(
		1	=> 'Bewerkt %d keer.',
		2	=> 'Bewerkt %d maal.'
	),
	'JV_SHOUTBOX_MSG_FLOOD_ERROR'			=> 'Je kan geen ander bericht maken gelijk na je laatste bericht.',
	'JV_SHOUTBOX_MSG_MAX_CHARS_ERROR'		=> 'Het bericht bevat een maximum van %d tekens.',
	'JV_SHOUTBOX_MSG_MIN_CHARS_ERROR'		=> array(
		1	=> 'Het bericht moet een minimum van %d tekens bevatten.',
		2	=> 'Het bericht moet een minimum van %d tekens bevatten.'
	),
	'JV_SHOUTBOX_MSG_NO_USER_IP'			=> 'Het bericht bestaat niet of dit bericht heeft geen toegewezen IP.',
	'JV_SHOUTBOX_NEW_MSG_TITLE'				=> array(
		1	=> '(%d) nieuw bericht is aangekomen!',
		2	=> '(%d) nieuwe berichten zijn aangekomen!'
	),
	'JV_SHOUTBOX_NO_JS'						=> 'Om de shoutbox te gebruiken, moet je javascript aanzetten!',
	'JV_SHOUTBOX_NO_MSG_ID'					=> 'Het bericht kan niet worden gevonden.',
	'JV_SHOUTBOX_NO_PERMISSION'				=> 'Je bent niet gemachtigd om de shoutbox te gebruiken .',
	'JV_SHOUTBOX_NO_PERMISSION_EDIT_MSG'	=> 'Je hebt geen toestemming om het bericht te bewerken.',
	'JV_SHOUTBOX_NO_PERMISSION_DELETE_MSG'	=> 'U hebt geen toestemming om het bericht te verwijderen.',
	'JV_SHOUTBOX_NO_PERMISSION_SEND_MSG'	=> 'U hebt geen toestemming om het bericht te versturen.',
	'JV_SHOUTBOX_OPEN'						=> 'Shoutbox openen',
	'JV_SHOUTBOX_PM_BUTTON_TITLE'			=> 'Zend privé bericht',
	'JV_SHOUTBOX_QUOTE_BUTTON_TITLE'		=> 'Bericht citeren',
	'JV_SHOUTBOX_RE_USER'					=> '@%s',
	'JV_SHOUTBOX_RE_USER_TITLE'				=> 'Reageer naar gebruiker',
	'JV_SHOUTBOX_SOUND_OFF_TITLE'			=> 'Geluid uit',
	'JV_SHOUTBOX_SOUND_ON_TITLE'			=> 'Geluid aan',
	'JV_SHOUTBOX_SUCCESS_DELETE_MSG'		=> 'Het bericht is verwijderd.',
	'JV_SHOUTBOX_VIEWING'					=> 'Bekijk shoutbox',
));
