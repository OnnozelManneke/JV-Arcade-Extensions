<?php
/**
*
* @package phpBB Arcade
* @version $Id: info_ucp_arcade.php 2154 2019-03-30 12:29:07Z killbill $
* @author 2011-2019 KillBill - killbill@jatek-vilag.com
* @copyright (c) 2014-2019 https://jv-arcade.com/ - support@jv-arcade.com
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

//Arcade
$lang = array_merge($lang, array(
	'UCP_ARCADE'							=> 'phpBB Arcade',
	'UCP_ARCADE_CAT_GAMES_STYLE'			=> 'Categorie spellen stijl',
	'UCP_ARCADE_CAT_STYLE'					=> 'Categorie stijl',
	'UCP_ARCADE_DELETE_FAVORITE'			=> 'Favoriete spel verwijderen',
	'UCP_ARCADE_DELETE_FAVORITES'			=> 'Favoriete spellen verwijderen',
	'UCP_ARCADE_DELETE_FAVORITES_CONFIRM'	=> 'Weet je zeker dat je deze favoriete spellen wilt verwijderen?',
	'UCP_ARCADE_DELETE_FAVORITE_CONFIRM'	=> 'Weet je zeker dat je dit favoriete spel wilt verwijderen?',
	'UCP_ARCADE_DISPLAY_GAME_IMAGE'			=> 'laat spel plaatje zien',
	'UCP_ARCADE_DISPLAY_POPUP_ICON'			=> 'Laat pop-up icon zien',
	'UCP_ARCADE_FAVORITES'					=> 'Favorieten beheren',
	'UCP_ARCADE_FAVORITES_DELETED'			=> 'Favoriete spellen succesvol verwijderd.',
	'UCP_ARCADE_FAVORITES_EXPLAIN'			=> 'Je kunt hier onder jouw favoriete spellen bekijken, accentueren en verwijderen.',
	'UCP_ARCADE_FAVORITE_DELETED'			=> 'Favoriete spel succesvol verwijderd.',
	'UCP_ARCADE_GAME_OVER_ANIMATION'		=> 'Animatie aan het einde van het spel afspelen',
	'UCP_ARCADE_GAME_OVER_ANIMATION_SOUND'	=> 'Schakel animatie geluid in',
	'UCP_ARCADE_GAME_OVER_RANDOM_GAMES'		=> 'Toon willekeurige spellen aan het einde van het spel',
	'UCP_ARCADE_GAME_OVER_SOUND'			=> 'Speel Game Over geluid aan het einde van een spel',
	'UCP_ARCADE_NO_PERM_PM_LOSS_HIGHSCORE'	=> 'Je hebt geen permissie om een PM te ontvangen over een verloren hoogste score.',
	'UCP_ARCADE_POST'						=> 'Bericht instellingen',
	'UCP_ARCADE_POST_EXPLAIN'				=> 'Persoonlijke bericht instellingen.',
	'UCP_ARCADE_SELECTED_HIGHLIGHT'			=> 'Selecteer geaccentueerde ',
	'UCP_ARCADE_SELECTED_HIGHLIGHT_REMOVE'	=> 'Selecteer verwijderde geaccentueerde',
	'UCP_ARCADE_SEND_PM_EXPLAIN'			=> 'Wanneer je een hoogste score kwijtraakt of een wedstrijd verliest door een gebruiker zul je een PM ontvangen om je in te lichten.',
	'UCP_ARCADE_SETTINGS'					=> 'Beheer instellingen',
	'UCP_ARCADE_SETTINGS_EXPLAIN'			=> 'Via deze instellingen heb je controle over een aantal opties van de arcade.',
	'UCP_CAT_ARCADE'						=> 'Arcade',
	'UCP_CHALLENGE_ENABLED'					=> 'Wedstrijd aangezet',
	'UCP_CHALLENGE_ENABLED_EXPLAIN'			=> 'Indien aangezet kunnen gebruikers elkaar uitdagen voor een wedstrijd.',
));
