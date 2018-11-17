<?php
/**
*
* @package phpBB Arcade
* @version $Id: permissions_arcade.php 1880 2018-02-28 20:13:49Z killbill $
* @author 2011-2018 KillBill - killbill@jatek-vilag.com
* @copyright (c) 2014-2018 https://jv-arcade.com/ - support@jv-arcade.com
* Nederlandse vertaling @ Solidjeuh <https://www.muziekpromo.net>
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
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

// Define categories and permission types
$lang = array_merge($lang, array(
	'ACL_CAT_ARCADE'	=> 'Arcade',
	'ACL_TYPE_C_'		=> 'Categorie permissies',
));

// Admin Permissions
$lang = array_merge($lang, array(
	'ACL_A_ARCADE'							=> 'Kan arcade resetten',
	'ACL_A_ARCADE_INSTALL'					=> 'kan installaties functies beheren',
	'ACL_A_ARCADE_ANNOUNCE'					=> 'Kan mededelingen beheren',
	'ACL_A_ARCADE_MENU'						=> 'Kan menu beheren',
	'ACL_A_ARCADE_SETTINGS'					=> 'Kan arcade instellingen beheren',
	'ACL_A_ARCADE_CAT'						=> 'Kan categorieën toevoegen/wijzigen',
	'ACL_A_ARCADE_DELETE_CAT'				=> 'Kan categorieën verwijderen',
	'ACL_A_ARCADE_BACKUP'					=> 'Kan back-up maken van arcade categorieën',
	'ACL_A_ARCADE_GAME'						=> 'Kan spellen toevoegen/wijzigen ',
	'ACL_A_ARCADE_RESET_GAME'				=> 'Kan spellen resetten',
	'ACL_A_ARCADE_DELETE_GAME'				=> 'Kan spellen verwijderen ',
	'ACL_A_ARCADE_USER'						=> 'Kan instellingen beheren arcade gebruikers',
	'ACL_A_ARCADE_TOUR'						=> 'Kan arcade toernooien aanmaken/bewerken',
	'ACL_A_ARCADE_DELETE_TOUR'				=> 'Kan toernooien verwijderen',
	'ACL_A_ARCADE_RANKS'					=> 'Kan rangen beheren',
	'ACL_A_ARCADE_UTILITIES'				=> 'Kan arcade gereedschappen gebruiken',
	'ACL_A_ARCADE_VIEWLOGS'					=> 'Kan logs bekijken',
	'ACL_A_ARCADE_CLEARLOGS'				=> 'Kan logs verwijderen',
	'ACL_A_ARCADE_POINTS_SETTINGS'			=> 'Kan arcade punten instellingen beheren',
	'ACL_A_CAUTH'							=> 'Kan arcade permissie klasse aanpassen',
));

// Mod Permissions
$lang = array_merge($lang, array(
	'ACL_M_ARCADE_GAME'						=> 'Kan spellen wijzigen',
	'ACL_M_ARCADE_RESET_GAME'				=> 'Kan spellen resetten',
	'ACL_M_ARCADE_CHANGE_GAMENAME'			=> 'Kan spel naam veranderen',
	'ACL_M_ARCADE_TOUR'						=> 'Kan toernooien aanmaken/bewerken',
	'ACL_M_ARCADE_TOUR_REWARD'				=> 'Kan beloningen toevoegen bij aanmaken nieuw toernooi',
));

// User Permissions
$lang = array_merge($lang, array(
	'ACL_U_ARCADE'							=> 'Kan de arcade gebruiken',
	'ACL_U_ARCADE_CHALLENGE'				=> 'Kan wedstrijd gebruiken',
	'ACL_U_ARCADE_TOUR'						=> 'Kan toernooien spelen',
	'ACL_U_ARCADE_SEARCH'					=> 'Kan zoeken in de arcade',
	'ACL_U_ARCADE_PM'						=> 'Kan een pb krijgen over een verloren hoogste score',
	'ACL_U_ARCADE_VIEWSTATS'				=> 'Kan de statistieken bekijken',
	'ACL_U_ARCADE_VIEW_WHOISPLAYING'		=> 'Kan kijken wie een spel speelt',
	'ACL_U_ARCADE_FAVORITES'				=> 'Kan favoriete spellen toevoegen/wijzigen',
	'ACL_U_ARCADE_IGNOREFLOOD_SEARCH'		=> 'Kan flood limiet negeren',
	'ACL_U_ARCADE_POPUP'					=> 'Kan arcade spellen spelen in een nieuw scherm',
	'ACL_U_ARCADE_RESOLUTION'				=> 'Kan resolutie spel veranderen',
	'ACL_U_ARCADE_DOWNLOAD'					=> 'Kan spellen downloaden',
));

// Category Permissions
$lang = array_merge($lang, array(
	'ACL_C_LIST'							=> 'Kan categorie zien',
	'ACL_C_VIEW'							=> 'Kan categorie bekijken',
	'ACL_C_PLAY'							=> 'Kan spellen spelen',
	'ACL_C_PLAYFREE'						=> 'Kan spellen gratis spelen',
	'ACL_C_SCORE'							=> 'Kan scores insturen',
	'ACL_C_COMMENT'							=> 'Kan commentaar geven',
	'ACL_C_REPORT'							=> 'Kan een spelfout melden',
	'ACL_C_RATE'							=> 'Kan spellen waarderen',
	'ACL_C_RE_RATE'							=> 'Kan eigen waardering aanpassen',
	'ACL_C_DOWNLOAD'						=> 'Kan spellen downloaden',
	'ACL_C_DOWNLOADFREE'					=> 'Kan spellen gratis downloaden',
	'ACL_C_IGNOREFLOOD_PLAY'				=> 'Kan flood limiet spelen negeren',
	'ACL_C_IGNORECONTROL'					=> 'Kan spel controles negeren',
	'ACL_C_IGNOREFLOOD_DOWNLOAD'			=> 'Kan flood limiet downloaden negeren',
));
