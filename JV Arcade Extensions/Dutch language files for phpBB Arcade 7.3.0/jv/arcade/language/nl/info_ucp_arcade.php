<?php
/**
*
* @package phpBB Arcade
* @version $Id: info_ucp_arcade.php 2403 2021-04-12 12:39:21Z KillBill $
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

//Arcade
$lang = array_merge($lang, array(
	'UCP_ARCADE'							=> 'phpBB Arcade',
	'UCP_ARCADE_BOARD_SESSION'				=> 'Tijd van de forumsessie weergeven',
	'UCP_ARCADE_BOARD_SESSION_EXPLAIN'		=> 'Boven het spelplatform wordt een aftelling naar de forumsessie weergegeven.Als de aftelling nul bereikt, wordt u automatisch uitgelogd van het forum.',
	'UCP_ARCADE_CAT_GAMES_STYLE'			=> 'Categorie spel stijl',
	'UCP_ARCADE_CAT_STYLE'					=> 'Categorie stijl',
	'UCP_ARCADE_DELETE_FAVORITE'			=> array(
		1									=> 'Verwijder favoriete spel',
		2									=> 'Verwijder favoriete spellen',
	),
	'UCP_ARCADE_DELETE_FAVORITE_CONFIRM'	=> array(
		1									=> 'Weet u zeker dat u dit favoriete spel wilt verwijderen?',
		2									=> 'Weet u zeker dat u deze favoriete spellen wilt verwijderen?',
	),
	'UCP_ARCADE_DELETE_FAVORITE_SUCCESS'	=> array(
		1									=> 'Favoriete spel is succesvol verwijderd.',
		2									=> 'Favoriete spellen zijn succesvol verwijderd.',
	),
	'UCP_ARCADE_DISPLAY_GAME_IMAGE'			=> 'Toon spel afbeelding',
	'UCP_ARCADE_DISPLAY_POPUP_ICON'			=> 'Pop-up pictogram weergeven',
	'UCP_ARCADE_FAVORITES'					=> 'Beheer favorieten',
	'UCP_ARCADE_FAVORITES_EXPLAIN'			=> 'Hieronder kunt u uw favoriete spellen bekijken, markeren en verwijderen.',
	'UCP_ARCADE_GAME'						=> 'Spel instellingen',
	'UCP_ARCADE_GAME_AW_RESIZE'				=> 'Grootte van spel automatisch wijzigen',
	'UCP_ARCADE_GAME_AW_RESIZE_EXPLAIN'		=> 'Het spel detecteert de grootte van de beschikbare ruimte en vergroot zichzelf automatisch tot de grootste beschikbare grootte. Gebruik deze optie als je een apparaat met een hogere resolutie dan Full HD gebruikt.<br><em>Deze optie is niet van toepassing op volledig scherm . en speel in een nieuw venster.</em>',
	'UCP_ARCADE_GAME_BORDER_ENABLE'			=> 'Geef de rand weer rond het spel',
	'UCP_ARCADE_GAME_OVER_ANIMATION'		=> 'Animatie weergeven aan het einde van het spel',
	'UCP_ARCADE_GAME_OVER_ANIMATION_SOUND'	=> 'Animatiegeluid inschakelen',
	'UCP_ARCADE_GAME_OVER_RANDOM_GAMES'		=> 'Geef willekeurige spellen weer aan het einde van het spel',
	'UCP_ARCADE_GAME_OVER_SOUND'			=> 'Weergave van “game over” op het einde van het spel',
	'UCP_ARCADE_GAME_SESSION'				=> 'Geef de spelsessietijd weer',
	'UCP_ARCADE_GAME_SESSION_EXPLAIN'		=> 'Een aftelling van de spelsessie wordt weergegeven boven het spelplatform. Als het aftellen nul bereikt, is het zeker dat het spel je score niet zal opslaan.',
	'UCP_ARCADE_MAX_FAV'					=> 'Je hebt het maximale aantal van %s favoriete spellen bereikt om uit te kiezen.',
	'UCP_ARCADE_NO_PERM_PM_LOSS_HIGHSCORE'	=> 'U heeft geen toestemming om persoonlijke berichten te ontvangen over het verlies van de trofee.',
	'UCP_ARCADE_PLAY_INFO_BOX'				=> 'Info box positie',
	'UCP_ARCADE_PLAY_INFO_BOX_EXPLAIN'		=> 'De Info box wordt weergegeven op de opgegeven positie.',
	'UCP_ARCADE_POST'						=> 'Post instellingen',
	'UCP_ARCADE_RESET_SETTINGS_CONFIRM'		=> 'Weet je zeker dat je al je arcade instellingen wilt resetten naar hun standaardinstellingen?',
	'UCP_ARCADE_SELECTED_HIGHLIGHT'			=> 'Geselecteerde markering',
	'UCP_ARCADE_SELECTED_HIGHLIGHT_REMOVE'	=> 'Geselecteerde markering verwijderen',
	'UCP_ARCADE_SEND_PM_EXPLAIN'			=> 'Wanneer u een highscore of uitdaging verliest aan een gebruiker, wordt er een privébericht verzonden om u hiervan op de hoogte te stellen.',
	'UCP_ARCADE_SETTINGS'					=> 'Algemene instellingen',
	'UCP_ARCADE_USER_INFO'					=> 'Vervanging van gebruikersinformatieblok',
	'UCP_ARCADE_USER_INFO_EXPLAIN'			=> 'Hier kun je het gebruikersinformatieblok in het welkomstblok vervangen, in plaats daarvan kun je ervoor kiezen om de meest gespeelde spellen weer te geven.<br><em>Deze optie heeft geen effect op de uitdaging en toernooipagina’s.</em>',
	'UCP_CAT_ARCADE'						=> 'Arcade',
	'UCP_CHALLENGE_ENABLED'					=> 'Uitdaging ingeschakeld',
	'UCP_CHALLENGE_ENABLED_EXPLAIN'			=> 'Indien ingeschakeld, kunnen gebruikers je uitdagen tot een duel.',
));
