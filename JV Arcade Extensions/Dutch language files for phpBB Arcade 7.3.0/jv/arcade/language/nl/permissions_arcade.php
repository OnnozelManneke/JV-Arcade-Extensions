<?php
/**
*
* @package phpBB Arcade
* @version $Id: permissions_arcade.php 2403 2021-04-12 12:39:21Z KillBill $
* @author 2011-2021 KillBill
* @copyright (c) 2014-2021 https://jv-arcade.com/ - https://jv-arcade.com/contact
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

// Define categories and permission types
$lang = array_merge($lang, array(
	'ACL_A_ARCADE'						=> 'Kan arcade reset beheren',
	'ACL_A_ARCADE_ANNOUNCE'				=> 'Kan mededelingen beheren',
	'ACL_A_ARCADE_BACKUP'				=> 'Kan een back-up maken van categorieën',
	'ACL_A_ARCADE_CAT'					=> 'Kan categorieën toevoegen/bewerken ',
	'ACL_A_ARCADE_CLEARLOGS'			=> 'Kan logboeken wissen',
	'ACL_A_ARCADE_DELETE_CAT'			=> 'Kan categorieën verwijderen',
	'ACL_A_ARCADE_DELETE_GAME'			=> 'Kan spellen verwijderen',
	'ACL_A_ARCADE_DELETE_TOUR'			=> 'Kan toernooien verwijderen',
	'ACL_A_ARCADE_GAME'					=> 'Kan spellen toevoegen/bewerken',
	'ACL_A_ARCADE_INSTALL'				=> 'Kan installatiefuncties beheren',
	'ACL_A_ARCADE_MENU'					=> 'Kan menu beheren',
	'ACL_A_ARCADE_POINTS_SETTINGS'		=> 'Kan puntinstellingen beheren',
	'ACL_A_ARCADE_RANKS'				=> 'Kan rangen beheren',
	'ACL_A_ARCADE_RESET_GAME'			=> 'Kan spellen resetten',
	'ACL_A_ARCADE_SETTINGS'				=> 'Kan instellingen beheren',
	'ACL_A_ARCADE_TOUR'					=> 'Kan een toernooi maken/bewerken',
	'ACL_A_ARCADE_USER'					=> 'Kan gebruikers beheren',
	'ACL_A_ARCADE_UTILITIES'			=> 'Kan hulpprogramma’s gebruiken',
	'ACL_A_ARCADE_VIEWLOGS'				=> 'Kan logboeken bekijken',
	'ACL_A_CAUTH'						=> 'Kan de permissies klasse wijzigen',
	'ACL_CAT_ARCADE'					=> 'Arcade',
	'ACL_C_COMMENT'						=> 'Kan opmerkingen indienen',
	'ACL_C_DOWNLOAD'					=> 'Kan spellen downloaden',
	'ACL_C_DOWNLOADFREE'				=> 'Kan spellen gratis downloaden',
	'ACL_C_IGNORECONTROL'				=> 'Kan spel controle negeren',
	'ACL_C_IGNOREFLOOD_DOWNLOAD'		=> 'Kan de flood limiet voor downloads negeren',
	'ACL_C_IGNOREFLOOD_PLAY'			=> 'Kan de flood limiet voor spellen negeren',
	'ACL_C_LIST'						=> 'Kan categorie bekijken',
	'ACL_C_PLAY'						=> 'Kan spellen spelen',
	'ACL_C_PLAYFREE'					=> 'Kan spellen gratis spelen',
	'ACL_C_RATE'						=> 'Kan spellen beoordelen',
	'ACL_C_REPORT'						=> 'Kan spellen rapporteren',
	'ACL_C_RE_RATE'						=> 'Kan eigen beoordelingen wijzigen',
	'ACL_C_SCORE'						=> 'Kan scores indienen. <em>Alleen voor geregistreerde gebruikers.</em>',
	'ACL_C_VIEW'						=> 'Kan spellen in de categorieën bekijken',
	'ACL_M_ARCADE_CHANGE_GAMENAME'		=> 'Kan de spelnaam wijzigen',
	'ACL_M_ARCADE_GAME'					=> 'Kan spellen bewerken',
	'ACL_M_ARCADE_RESET_GAME'			=> 'Kan spellen resetten',
	'ACL_M_ARCADE_TOUR'					=> 'Kan toernooien creëren/bewerken',
	'ACL_M_ARCADE_TOUR_REWARD'			=> 'Kan beloningen toevoegen aan nieuwe toernooien',
	'ACL_TYPE_C_'						=> 'Categorie permissies',
	'ACL_U_ARCADE'						=> 'Kan de arcade gebruiken',
	'ACL_U_ARCADE_CHALLENGE'			=> 'Kan de uitdaging gebruiken',
	'ACL_U_ARCADE_DOWNLOAD'				=> 'Kan spellen downloaden',
	'ACL_U_ARCADE_FAVORITES'			=> 'Kan favoriete spellen toevoegen/verwijderen',
	'ACL_U_ARCADE_IGNOREFLOOD_SEARCH'	=> 'Kan de flood limiet voor zoekopdrachten negeren',
	'ACL_U_ARCADE_PM'					=> 'Kan een privébericht ontvangen bij verlies van een trofee',
	'ACL_U_ARCADE_POPUP'				=> 'Kan spellen spelen in een nieuw venster',
	'ACL_U_ARCADE_RESOLUTION'			=> 'Kan de resolutie van het spel veranderen',
	'ACL_U_ARCADE_SEARCH'				=> 'Kan de zoekfunctie voor spellen gebruiken',
	'ACL_U_ARCADE_TOUR'					=> 'Kan gebruik maken van het toernooi',
	'ACL_U_ARCADE_VIEWSTATS'			=> 'Kan statistiekenpagina bekijken',
	'ACL_U_ARCADE_VIEW_WHOISPLAYING'	=> 'Kan zien wie er spellen speelt',
));
